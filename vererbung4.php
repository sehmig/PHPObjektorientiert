<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8" />
	<title>PHP-Script</title> 
</head>
 
<body>
<h1>Objektorientiert</h1>

<p>Vererbung4
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

class RealesProdukt extends Produkt {
	public $lagerbestand;
	
	function istVorraetig() {
		//Überprüfen ob Produkt im Lager vorhanden ist
		return $this->lagerbestand> 0;
	}
}

class Buch extends RealesProdukt {
	public $autor;
}

//------------------------

class DigitalesProdukt extends Produkt {
	public $downloadlink;
}

class eBook extends DigitalesProdukt {
	public $dateiformat;
}

$buch = new Buch();
$buch->lagerbestand = "17";
if($buch->istVorraetig()) {
   echo "Das Buch ist vorrätig<br>";
} else {
   echo "Kein Buch mehr im Lager<br>";
}

$eBook = new eBook();
$eBook->downloadlink = "htttp://website.de";
echo "Der Downloadlink ist: ".$eBook->downloadlink;
?>
</body>
</html>