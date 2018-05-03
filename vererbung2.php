<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8" />
	<title>PHP-Script</title> 
</head>
 
<body>
<h1>Objektorientiert</h1>

<p>Vererbung2
<p>
<?php
/*
Nicht so:
class Buch {
 public $titel;
 public $preis;
 public $autor;
 
 function gesamtpreis($stueckzahl) {
 return $preis*$stueckzahl;
 }
}
 
class Film {
 public $titel;
 public $preis;
 public $regisseur;
 
 function gesamtpreis($stueckzahl) {
 return $preis*$stueckzahl;
 }
}
 
class CD {
 public $titel;
 public $preis;
 public $band;
 
 function gesamtpreis($stueckzahl) {
 return $preis*$stueckzahl;
 }
}
*/
// Sondern so:
class Produkt {
	public $titel;
	public $preis;
	
	function gesamtpreis($stueckzahl) {
		$gesamtpreis = $this->preis*$stueckzahl;
		
		if($stueckzahl >= 10) {
			$gesamtpreis = $gesamtpreis*0.8;
		}
		return $gesamtpreis;
	}
}

class Buch extends Produkt {
	public $autor;
}

class Film extends Produkt {
	public $regisseur;
}

class CD extends Produkt {
	public $band;
}

$buch = new Buch();
$buch->titel = "PHP lernen leicht gemacht";
$buch->preis = 20.00;
$menge = 5;
echo  "$menge Bücher von <i>$buch->titel</i> je $buch->preis Euro  kosten: ".$buch->gesamtpreis($menge)."<br>";

$film = new Film();
$film->titel = "Zurück in die Zukunft";
$film->preis = 10.00;
$menge = 15;
echo  "$menge Filme von <i>$film->titel</i> je $film->preis Euro kosten: ".$film->gesamtpreis($menge)." Euro<br>";

?>

 

</body>
</html>