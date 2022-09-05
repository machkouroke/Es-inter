<?php



class Users extends Controller
{
    public function __construct()
    {
        $this->instanceModel('User');
    }

    public function index()
    {

        $users = $this->User->getAll();

        $this->render('index', compact('users'));
    }

    public function form()
    {
        $this->render('form');
    }

    public function add()
    {
        if (isset($_POST)) {
            $this->loadFile('userprofil');
            $this->User->add(...$_POST);
            $success = "Utilisateur bien ajouté";
            $this->render('form', compact('success'));
        }

    }

    public function loadFile($file)
    {
        $extension = pathinfo($_FILES["$file"]['name'])['extension'];
        $filename = time();
        $_POST[$file] = $filename . '.' . $extension;
        $folder = 'images/';
        move_uploaded_file($_FILES["$file"]['tmp_name'], $folder . $filename . '.' . $extension);
    }

    public function show($id)
    {
        $user = $this->User->getById($id);
        $this->render('show', compact('user'));
    }

    public function delete($id)
    {
        $user = $this->User->del($id);
        $success = "Utilisateur bien supprimé";
        $this->render('form', compact('success'));

    }


    /**
     * ouvre la page d'envoi d'un message
     */
    public static function sendMessage(): void
    {
        $sendMessage = function () {
            $title = 'Envoyer un message';
            $selectedUser = [];
            if (isset($_POST['user'])) {
                foreach ($_POST['user'] as $user) {
                    $selectedUser[] = $user;
                }
                $selectedUser = implode(';', $selectedUser);
                MenuController::sendMessagePage($selectedUser);
                return;
            }
            MenuController::sendMessagePage();
        };
        $sendMessage();
    }

    /**
     * transfert le message
     */
    public static function transferMessage(): void
    {

        $sendMessage = function () {

            $isAllFieldsPresent = ((isset($_POST["destinataire"]) && !empty($_POST["destinataire"]))
                && (isset($_POST["object"]) && !empty($_POST['object']))
                && (isset($_POST['message']) && !empty($_POST['message'])));
            if ($isAllFieldsPresent) {

                $dest = explode(";", $_POST["destinataire"]);
                $subject = $_POST["object"];
                $message = $_POST["message"];
                $headers = "From: " . "machkour@LOPStudio.com";
                foreach ($dest as $to) {
                    if (!mail($to, $subject, $message, $headers)) {
                        $_SESSION['error'] = "Une erreur est survenue lors de l'envoi du message";
                        header("Location:index.php?action=sendMessage&error");
                        return;

                    }
                }
            } else {

                $query = ['action' => 'sendMessage',
                    'error' => "Veuillez saisir tous les champs pour l'envoi",
                    'selectedUser' => $_POST['destinataire']];
                header("Location:indexindex.php?" . http_build_query($query));
                return;

            }


            $query = ['action' => 'listingStudents',
                'sucess' => 'Le message a bien été envoyé',
                'page' => '1'];
            header("Location:indexindex.php?" . http_build_query($query));
        };
        AuthenticationController::loginRequired($sendMessage)();
    }
}