<?php

	
class haha{

	function __construct(){
		$user = 'phpmyadmin';
		$pass = '123456789';
		$this->stock = new PDO('mysql:host=localhost;dbname=lovote;charset=utf8', $user,$pass);
	}

	public function requete(){
		$array = array("Allier","Alpes-de-Haute-Provence","Alpes-Maritimes","Ardèche","Ardennes","Ariège","Aube","Aude","Aveyron","Bas-Rhin","Bouches-du-Rhône","Calvados","Cantal","Charente","Charente-Maritime","Cher","Corrèze","Corse-du-Sud","Côte-d'Or","Côtes-d'Armor","Creuse","Deux-Sèvres","Dordogne","Doubs","Drôme","Essonne","Eure","Eure-et-Loir","Finistère","Gard","Gers","Gironde",
"Guadeloupe",
"Guyane","Hautes-Alpes","Hautes-Pyrénées","Haute-Corse","Haute-Garonne","Haute-Loire","Haute-Marne","Haute-Saône","Haute-Savoie","Haute-Vienne","Hauts-de-Seine","Haut-Rhin","Hérault","Ille-et-Vilaine","Indre","Indre-et-Loire","Isère","Jura","Landes",
"La Réunion","Loire","Loiret","Loire-Atlantique","Loir-et-Cher","Lot","Lot-et-Garonne","Lozère","Maine-et-Loire","Manche","Marne",
"Martinique","Mayenne",
"Mayotte","Meurthe-et-Moselle","Meuse","Morbihan","Moselle","Nièvre","Nord","Oise","Orne","Paris","Pas-de-Calais","Puy-de-Dôme","Pyrénées-Atlantiques","Pyrénées-Orientales","Rhône","Saône-et-Loire","Sarthe","Savoie","Seine-Saint-Denis","Seine-Maritime","Seine-et-Marne","Somme","Tarn","Tarn-et-Garonne","Territoire de Belfort","Val-de-Marne","Val-d'Oise","Var","Vaucluse","Vendée","Vienne","Vosges","Yonne","Yvelines");

		foreach ($array as $value) {
		$requete = "INSERT INTO city VALUES ('".$value."')";
		    $donnees = $this->stock->prepare($requete);
		    $donnees-> execute();
		   // echo $value;    	
		}
	}

}

$new = new haha();
$new -> requete();






?>