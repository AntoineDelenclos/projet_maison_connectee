DROP DATABASE IF EXISTS Maison_Connect; 

CREATE DATABASE IF NOT EXISTS Maison_Connect; 

USE Maison_Connect; 


CREATE TABLE UTILISATEUR ( 

    Id_user INT(11) NOT NULL AUTO_INCREMENT, 

    Nom VARCHAR(50) NOT NULL, 

    Prenom VARCHAR(60) NOT NULL, 

    Date_naissance DATE NOT NULL, 

    Email VARCHAR(50) NOT NULL,

    Tel VARCHAR(50) NOT NULL,

    Genre VARCHAR(50) NOT NULL,

    Est_admin BOOLEAN NOT NULL,

    Etat_cpt VARCHAR(50) NOT NULL,

    Date_creation_cpt DATE NOT NULL,

    PRIMARY KEY (Id_user) 

); 

 

CREATE TABLE ADRESSE ( 

    Id_adresse INT(11) NOT NULL AUTO_INCREMENT, 

    Ville VARCHAR(60) NOT NULL, 

    CP INT(11) NOT NULL, 

    Rue VARCHAR(60) NOT NULL, 

    Num_maison INT(11) NOT NULL,

    PRIMARY KEY (Id_adresse) 

); 


CREATE TABLE RESSOURCE ( 

    Id_ressource INT(11) NOT NULL AUTO_INCREMENT, 

    Nom_ressource VARCHAR(60)NOT NULL,

    Min_ressource FLOAT(15) NOT NULL,

    Max_ressource FLOAT(15) NOT NULL,

    Crit_ressource FLOAT(15) NOT NULL,

    Ideal_ressource FLOAT(15) NOT NULL, 

    PRIMARY KEY (Id_ressource) 

);

CREATE TABLE SUBSTANCE ( 

    Id_substance INT(11) NOT NULL AUTO_INCREMENT, 

    Nom_substance VARCHAR(60)NOT NULL,

    Min_substance FLOAT(15) NOT NULL,

    Max_substance FLOAT(15) NOT NULL,

    Crit_subtance FLOAT(15) NOT NULL,

    Ideal_subtance FLOAT(15) NOT NULL, 

    PRIMARY KEY (Id_substance) 

); 


CREATE TABLE MAISON( 

    Id_maison INT(11) NOT NULL AUTO_INCREMENT, 

    Nom_maison VARCHAR(60) NOT NULL, 

    Deg_iso FLOAT(11) NOT NULL, 

    Nb_appart INT(11) NOT NULL,

    Eva_eco VARCHAR(50) NOT NULL, 

    PRIMARY KEY (Id_maison)

); 



CREATE TABLE APPARTEMENT( 

    Id_appart INT(11) NOT NULL AUTO_INCREMENT, 

    Num_appart INT(11) NOT NULL, 

    Deg_secu VARCHAR(50) NOT NULL,

    Type_appart VARCHAR(50) NOT NULL,

    Libel_appart VARCHAR(50) NOT NULL,

    Debut_possession DATE NOT NULL,

    Fin_possession DATE NOT NULL,

    Debut_location DATE NOT NULL,

    Fin_location DATE NOT NULL,

    PRIMARY KEY (Id_appart)

); 

  

CREATE TABLE APPAREIL ( 

    Id_appareil INT(11) NOT NULL AUTO_INCREMENT, 

    Nom_appareil VARCHAR(50) NOT NULL, 

    Type_appareil VARCHAR(50) NOT NULL,

    Libel_appareil VARCHAR(50) NOT NULL,

    PRIMARY KEY(Id_appareil) 

); 
  

CREATE TABLE LOCATION ( 

    Id_location INT(11) NOT NULL AUTO_INCREMENT, 

    Debut_location DATE NOT NULL, 

    Fin_location DATE NOT NULL, 

    PRIMARY KEY(Id_location)

); 

CREATE TABLE POSSESSION(

    Id_possession INT(11) NOT NULL AUTO_INCREMENT,

    Debut_possession DATE NOT NULL,

    Fin_possession DATE NOT NULL,

    PRIMARY KEY (Id_possession)
);
