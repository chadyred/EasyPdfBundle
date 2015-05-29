<?php

require '../../vendor/autoload.php';


class PDF extends FPDI
{

	//Fonction d'initialisation de ma variable static, ce qui permet de ne pas instancier ce bundle
    public static function generation()
    {
        //this is the static constructor
        //because in a function, everything is allowed, including initializing using other functions        
        PDF::generationPdf();
    }

	//Fonction qui représente une zone ciblée destinataireDenomination
	function destinataireDenomination($string)
	{ 

		// Décalage de 10 cm vers la droite et 40 vers le bas
		$this->SetXY(102, 47);
		$this->Cell(200,10,$string,0,0,'l',0); 
	} 

	//Fonction qui représente une zone ciblée destinataireComplement
	function destinataireComplement($string)
	{ 
		// Décalage de 8 cm à droite
		$this->SetXY(102, 52);
		$this->Cell(200,10,$string,0,0,'l',0); 
	} 

	/**
	* Cette fonction aiguillera la case à cocher
	*/
	function checkboxTypeDemande($typeDemande)
	{
		//TODO : switch
	}

	/**
	* Checkbox qui cochera la demande
	*/
	function checkboxDemandeDt()
	{

		$style = array('width' => 0.75, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'phase' => 10, 'color' => array(0, 0, 0));

		$this->Line(11.3, 55.8, 13, 58.5, $style);
		$this->Line(13, 58.5, 15, 54.5, $style);
	}

	/**
	* Checkbox qui cochera la demande
	*/
	function checkboxDemandeDict()
	{

		$style = array('width' => 0.75, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'phase' => 10, 'color' => array(0, 0, 0));

		$this->Line(11.3, 62.8, 13, 65.5, $style);
		$this->Line(13, 65.5, 15, 61.5, $style);
	}

	/**
	* Checkbox qui cochera la demande
	*/
	function checkboxDemandeDtDictConjointe()
	{

		
		$style = array('width' => 0.75, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'phase' => 10, 'color' => array(0, 0, 0));

		$this->Line(11.3, 69.8, 13, 72.5, $style);
		$this->Line(13, 72.5, 15, 68.5, $style);
	}

	static function generationPdf()
	{
		// initiate FPDI
		$pdf = new PDF();

		// add a page
		$pdf->AddPage();

		// set the source file
		$pdf->setSourceFile("output.pdf");

		// import page 1
		$tplIdx = $pdf->importPage(1);

		// use the imported page and place it at point 0,0 with a width of 210 mm
		$pdf->useTemplate($tplIdx, 0, 0, 210);

		// now write some text above the imported page
		$pdf->SetFont('Helvetica', "", 8);
		$pdf->SetTextColor(0, 0, 0);

		$pdf->checkboxDemandeDt();
		$pdf->checkboxDemandeDict();
		$pdf->checkboxDemandeDtDictConjointe();
		$pdf->destinataireDenomination("Zone destinataire>denomination");
		$pdf->destinataireComplement("Zone destinataire>complement");


		$pdf->Output();
	}
}

PDF::generation();