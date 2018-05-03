<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8" />
	<title>PHP-Script</title> 
</head>
 
<body>
<h1>Objektorientiert</h1>

<p>Vererbung3
<p>
<?php
class Produkt {
	public $titel;
	public $preis;
	
	function gesamtpreis($stueckzahl) {
		$gesamtpreis = $this->preis*$stueckzahl*$this->mengenrabatt($stueckzahl);
		return $gesamtpreis;
	}
	
	function mengenrabatt($stueckzahl) {
		return 1;
	}
}

class Buch extends Produkt {
	public $autor;
	
	function mengenrabatt($stueckzahl) {
		if($stueckzahl >= 10) {
			return 0.8; //20% Rabatt
		} else {
			return 1;
		}
	}
}

class Film extends Produkt {
	public $regisseur;
	
	function mengenrabatt($stueckzahl) {
		if($stueckzahl >= 2) {
			return 0.95; //5% Rabatt
		} else {
			return 1;
		}
	}
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