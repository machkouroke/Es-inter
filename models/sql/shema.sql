create table if not exists outilpret
(
    id       int auto_increment
        primary key,
    NumSerie int         null,
    NumCom   int         null,
    Iduser   int         null,
    Statut   varchar(50) null
)
    engine = InnoDB
    charset = utf8mb4;

create index fK2
    on outilpret (NumCom);

create index fK3
    on outilpret (Iduser);

create index fk1
    on outilpret (NumSerie);

create table if not exists outils
(
    NumSerie         int          not null
        primary key,
    Nom              varchar(255) not null,
    Caractéristiques varchar(255) not null,
    DateAj           date         not null
);

create table if not exists siteinterv
(
    NumCom    int auto_increment
        primary key,
    NomClient varchar(255) not null,
    Adresse   varchar(255) not null,
    DateCom   date         not null
)
    engine = InnoDB
    charset = utf8mb4;

create table if not exists users
(
    Iduser   int auto_increment
        primary key,
    Name     varchar(255) not null,
    Poste    varchar(255) not null,
    Photo    varchar(255) not null,
    Contact  int          not null,
    Mail     varchar(255) not null,
    Role     varchar(100) null,
    password varchar(255) null,
    Surname  varchar(255) null,
    username varchar(255) null
)
    engine = InnoDB
    charset = utf8mb4;

