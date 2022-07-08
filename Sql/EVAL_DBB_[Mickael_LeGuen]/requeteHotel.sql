1. SELECT nomHotel AS "Nom Hotel", villeHotel AS Ville
FROM hotels;

2.SELECT nomClient AS "Nom", prenomClient AS "Prenom", adresseClient AS "Adresse", villeClient AS "Ville" 
FROM clients 
WHERE nomClient="White";

3.SELECT nomStation AS "Nom Station",altitudeStation AS "Altitude"
FROM stations
WHERE altitudeStation < 1000;

4.SELECT numChambre AS "Numero de la chambre", capaciteChambre AS "Capacité"
FROM chambres
WHERE capaciteChambre > 1;

5.SELECT nomClient AS "Nom client", villeClient AS "Ville"
FROM clients
WHERE villeClient <> "Londres";

6.SELECT nomStation AS "Nom Station", nomHotel AS "Nom Hotel",categorieHotel AS "Catégorie",villeHotel AS "Ville"
FROM hotels
INNER JOIN stations ON hotels.idHotel=stations.idStation;

7.SELECT numchambre AS "Numéro de chambre", nomHotel AS"Nom de l'Hotel",categorieHotel AS "Catégorie",villeHotel AS "Ville"
FROM hotels
INNER JOIN chambres ON chambres.idChambre=hotels.idHotel;

8.SELECT nomClient AS "Nom client", dateReservationsejour AS "Date de réservation", dateDebutSejour AS "Date Début", datefinSejour AS "Date fin"
FROM reservations
INNER JOIN clients ON reservations.idReservation=clients.idClient;

9.SELECT numChambre AS "Numero Chambre", nomHotel AS "Nom Hotel", nomStation AS "Nom de la Station"
FROM hotels
INNER JOIN chambres ON chambres.idChambre=hotels.idHotel
INNER JOIN stations ON stations.idStation=hotels.idHotel;

10.SELECT nomHotel As "Nom Hotel", categorieHotel AS "Catégorie",villeHotel AS "Ville",numChambre AS "Numéro Chambre",capaciteChambre AS "Capacité"
FROM hotels	
INNER JOIN chambres ON hotels.idHotel=chambres.idChambre
WHERE villeHotel = "Bretou" AND capaciteChambre > 1;

11.SELECT numChambre AS "Numero de chambre",dateReservationSejour,dateDebutSejour,dateFinSejour
FROM reservations
INNER JOIN chambres ON reservations.idReservation=chambres.idChambre;

12.SELECT nomStation AS "Nom Station", COUNT(nomHotel) AS "Nombre Hotel"
FROM stations
INNER JOIN hotels ON hotels.idHotel=stations.idStation
GROUP BY nomStation;

13.SELECT nomStation AS "Nom de la station" , COUNT(numChambre) AS "Numero de Chambre"
FROM hotels
INNER JOIN stations ON hotels.idHotel=stations.idStation
INNER JOIN chambres ON hotels.idHotel=chambres.idChambre
GROUP BY nomStation;

14.SELECT nomStation AS "Nom de la station", COUNT(numChambre) AS "Nombre de chambre"
FROM hotels
INNER JOIN stations ON hotels.idHotel=stations.idStation
INNER JOIN chambres ON hotels.idHotel=chambres.idChambre
WHERE capaciteChambre > 1
ORDER BY nomStation;

15. SELECT nomHotel AS "Nom Hotel"
FROM hotels
INNER JOIN chambres ON hotels.idHotel=chambres.idChambre
INNER JOIN reservations ON chambres.idChambre=reservations.idReservation
INNER JOIN clients ON hotels.idHotel=clients.idClient
WHERE nomClient= "Squire";

16.SELECT nomStation AS "Nom Station", AVG(dateFinSejour-dateDebutSejour) AS DureeMoyenne
FROM hotels
INNER JOIN stations ON stations.idStation=hotels.idStation
INNER JOIN chambres ON chambres.idHotel=hotels.idHotel
INNER JOIN reservations ON chambres.idChambre=reservations.idChambre
ORDER BY nomStation;