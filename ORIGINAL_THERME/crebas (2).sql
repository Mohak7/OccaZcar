/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  15/02/2022 17:07:05                      */
/*==============================================================*/


drop table if exists ADMIN;

drop table if exists ANNONCE;

drop table if exists CARBURANT;

drop table if exists CATEGORIE;

drop table if exists COULEUR;

drop table if exists MARQUE;

drop table if exists MODELE;

drop table if exists NBR_VITESSE;

drop table if exists REMPLIR;

drop table if exists TRANSMISSION;

drop table if exists VEHICULE;

/*==============================================================*/
/* Table : ADMIN                                                */
/*==============================================================*/
create table ADMIN
(
   ID_ADMIN             int not null,
   USERNAME             char(255) not null,
   MOT_DE_PASSE         char(255) not null,
   primary key (ID_ADMIN)
);

/*==============================================================*/
/* Table : ANNONCE                                              */
/*==============================================================*/
create table ANNONCE
(
   ID_ANNONCE           int not null,
   STATUS               bool not null,
   DATE_INSERTION       date not null,
   primary key (ID_ANNONCE)
);

/*==============================================================*/
/* Table : CARBURANT                                            */
/*==============================================================*/
create table CARBURANT
(
   ID_CARBURANT         int not null,
   NOM                  char(255) not null,
   primary key (ID_CARBURANT)
);

/*==============================================================*/
/* Table : CATEGORIE                                            */
/*==============================================================*/
create table CATEGORIE
(
   ID_CAT               int not null,
   NAME_CAT             char(255) not null,
   primary key (ID_CAT)
);

/*==============================================================*/
/* Table : COULEUR                                              */
/*==============================================================*/
create table COULEUR
(
   ID_COULEUR           int not null,
   NAME_COULEUR         char(255) not null,
   primary key (ID_COULEUR)
);

/*==============================================================*/
/* Table : MARQUE                                               */
/*==============================================================*/
create table MARQUE
(
   ID_MARQUE            int not null,
   NOM_MARQUE           char(255) not null,
   primary key (ID_MARQUE)
);

/*==============================================================*/
/* Table : MODELE                                               */
/*==============================================================*/
create table MODELE
(
   ID_MEDEL             int not null,
   ID_MARQUE            int not null,
   NOM_MODELE           char(255) not null,
   primary key (ID_MEDEL)
);

/*==============================================================*/
/* Table : NBR_VITESSE                                          */
/*==============================================================*/
create table NBR_VITESSE
(
   ID_NB_VITESS         numeric(8,0) not null,
   NUMBER               int not null,
   ATTRIBUT_29          char(255),
   primary key (ID_NB_VITESS)
);

/*==============================================================*/
/* Table : REMPLIR                                              */
/*==============================================================*/
create table REMPLIR
(
   ID_VEHICULE          int not null,
   ID_CARBURANT         int not null,
   primary key (ID_VEHICULE, ID_CARBURANT)
);

/*==============================================================*/
/* Table : TRANSMISSION                                         */
/*==============================================================*/
create table TRANSMISSION
(
   ID_TRANZ             int not null,
   NAME                 char(255) not null,
   primary key (ID_TRANZ)
);

/*==============================================================*/
/* Table : VEHICULE                                             */
/*==============================================================*/
create table VEHICULE
(
   ID_VEHICULE          int not null,
   ID_ANNONCE           int not null,
   ID_MEDEL             int not null,
   ID_COULEUR           int not null,
   ID_TRANZ             int not null,
   ID_NB_VITESS         numeric(8,0) not null,
   ID_CAT               int not null,
   KILOMETRE            int not null,
   ANNEE                date not null,
   PRIX                 decimal(5,2) not null,
   DESCRIPTION          longtext not null,
   FIRST_PROPRIO        bool not null,
   PHOTO                char(255) not null,
   KW                   int not null,
   primary key (ID_VEHICULE)
);

alter table MODELE add constraint FK_APPARTENIR foreign key (ID_MARQUE)
      references MARQUE (ID_MARQUE) on delete restrict on update restrict;

alter table REMPLIR add constraint FK_REMPLIR foreign key (ID_CARBURANT)
      references CARBURANT (ID_CARBURANT) on delete restrict on update restrict;

alter table REMPLIR add constraint FK_REMPLIR2 foreign key (ID_VEHICULE)
      references VEHICULE (ID_VEHICULE) on delete restrict on update restrict;

alter table VEHICULE add constraint FK_CHANGER foreign key (ID_NB_VITESS)
      references NBR_VITESSE (ID_NB_VITESS) on delete restrict on update restrict;

alter table VEHICULE add constraint FK_EST foreign key (ID_CAT)
      references CATEGORIE (ID_CAT) on delete restrict on update restrict;

alter table VEHICULE add constraint FK_EST_CONSTITUER_DE foreign key (ID_ANNONCE)
      references ANNONCE (ID_ANNONCE) on delete restrict on update restrict;

alter table VEHICULE add constraint FK_ETRE foreign key (ID_MEDEL)
      references MODELE (ID_MEDEL) on delete restrict on update restrict;

alter table VEHICULE add constraint FK_PASSER foreign key (ID_TRANZ)
      references TRANSMISSION (ID_TRANZ) on delete restrict on update restrict;

alter table VEHICULE add constraint FK_TEINTER foreign key (ID_COULEUR)
      references COULEUR (ID_COULEUR) on delete restrict on update restrict;

