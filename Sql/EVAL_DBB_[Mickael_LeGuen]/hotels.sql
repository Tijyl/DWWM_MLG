DROP DATABASE IF EXISTS hotels;

CREATE DATABASE IF NOT EXISTS hotels DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE hotels ;


#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


CREATE TABLE Stations(
        idStation       Int  Auto_increment  NOT NULL ,
        nomStation      Varchar (50) NOT NULL ,
        attitudeStation Int NOT NULL
	,CONSTRAINT Stations_PK PRIMARY KEY (idStation)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Clients
#------------------------------------------------------------

CREATE TABLE Clients(
        idClient      Int  Auto_increment  NOT NULL ,
        nomClient     Varchar (50) NOT NULL ,
        prenomClient  Varchar (50) NOT NULL ,
        adresseClient Varchar (50) NOT NULL ,
        villeClient   Varchar (50) NOT NULL
	,CONSTRAINT Clients_PK PRIMARY KEY (idClient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Hotels
#------------------------------------------------------------

CREATE TABLE Hotels(
        idHotel        Int  Auto_increment  NOT NULL ,
        nomHotel       Varchar (50) NOT NULL ,
        categorieHotel Varchar (25) NOT NULL ,
        adresseHotel   Varchar (50) NOT NULL ,
        villeHotel     Varchar (20) NOT NULL ,
        idStation      Int NOT NULL
	,CONSTRAINT Hotels_PK PRIMARY KEY (idHotel)

	,CONSTRAINT Hotels_Stations_FK FOREIGN KEY (idStation) REFERENCES Stations(idStation)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Chambres
#------------------------------------------------------------

CREATE TABLE Chambres(
        idChambre       Int  Auto_increment  NOT NULL ,
        numChambre      Int NOT NULL ,
        capaciteChambre Int NOT NULL ,
        typeChambre     Int NOT NULL ,
        idHotel         Int NOT NULL
	,CONSTRAINT Chambres_PK PRIMARY KEY (idChambre)

	,CONSTRAINT Chambres_Hotels_FK FOREIGN KEY (idHotel) REFERENCES Hotels(idHotel)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Reservations
#------------------------------------------------------------

CREATE TABLE Reservations(
        idClient              Int NOT NULL ,
        idChambre             Int NOT NULL ,
        dateReservationSejour Date NOT NULL ,
        dateDebutSejour       Date NOT NULL ,
        dateFinSejour         Date NOT NULL ,
        prixSejour            Float NOT NULL ,
        arrhesSejour          Float NOT NULL
	,CONSTRAINT Reservations_PK PRIMARY KEY (idReservation)

	,CONSTRAINT Reservations_Clients_FK FOREIGN KEY (idClient) REFERENCES Clients(idClient)
	,CONSTRAINT Reservations_Chambres_FK FOREIGN KEY (idChambre) REFERENCES Chambres(idChambre)
)ENGINE=InnoDB;