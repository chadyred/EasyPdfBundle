<?php

namespace Acme\DemoBundle\Lib\Entity;

use Kark\EasyPdfBundle\Lib\Draw\PdfDraw;
use Kark\EasyPdfBundle\Lib\Cellfit\FpdfCellfit;
use Kark\EasyPdfBundle\Lib\Barecode\PdfCode128;

class Pdf extends \FPDI
{

	/**
	* Write text at position XY in a rectangle with (width, height, $string)
	*/
	public function destinataireDenomination($string)
	{ 
		
		$this->SetXY(102, 47);
		$this->Cell(200,10,$string,0,0,'l',0); 
	} 
	
	/**
	* Write text at position XY in a rectangle with (width, height, $string)
	*/
	public function destinataireComplement($string)
	{ 
		
		$this->SetXY(102, 52);
		$this->Cell(200,10,$string,0,0,'l',0); 
	} 
	
	/**
	* Checkbox to check
	*/
	public function checkboxDemandeDt()
	{
	
		$this->Line(11.3, 55.8, 13, 58.5, $style);
		$this->Line(13, 58.5, 15, 54.5, $style);
	}

	/**
	* Checkbox qui cochera la demande
	*/
	public function checkboxDemandeDtDictConjointe()
	{
		
		$style = array('width' => 0.75, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'phase' => 10, 'color' => array(0, 0, 0));

		//PdfDraw enrichie avec la pattern Decorator mon PDF
		$draw = new PdfDraw($pdf=$this);

		$draw->Line(11.3, 69.8, 13, 72.5, $style);
		$draw->Line(13, 72.5, 15, 68.5, $style);
	}

	
	//Numéro de téléphone a contacté en cas de dégradation
	public public function numeroTelephone($string)
	{
		// Helvetica 12
		$this->SetFont('Helvetica',"",10);
		$cellfit = new FpdfCellfit($pdf=$this);

		//Sinon seul la première ligne existe
		$this->SetXY(90.3, 120);
		//Permet d'espacer les lettres de manière égale
		$cellfit->CellFitSpaceForce(30.3, 10, utf8_decode($string), 0, 0, 'l', 0);
		//Retour à la police normal
		$this->mainFont();
	}

	public public function barecodeTest($code)
	{

		$this->SetFont('Arial','',10);

		$barecode = new PdfCode128($pdf=$this);

		$barecode->Code128(90,5,$code,110,20);
		$this->SetXY(90,30);
		$this->Write(5,'B set: "'.$code.'"');

		//Retour à la police normal
		$this->mainFont();
	}

	/**
	*
	* Lorsque l'on change de police il faut remettre la principale. En effet, il n'y a qu'une seul et même police définissable pour un document
	*
	*/
    public public function mainFont()
    {
		$this->SetFont('Helvetica', "", 8);
		$this->SetTextColor(0, 0, 0);
    }
    
	/**
	* relatif path to upload dir
	*/
	public public function getUploadRootDir()
	{
	
	// On retourne le chemin relatif vers l'image pour notre code PHP
	return __DIR__.'/../file/'.$this->getUploadDir();
	}

	 /**
	 * Pdf folder in uploads
	 */
	public public function getUploadDir()
	{	    
	    return 'pdf';
	}	
	
	/**
	* webPath
	*
	* Récuperation du fichier
	* 
	* @return chemin de notre fichier de manière relative
	*/
	public public function getWebPath()
	{
	return $this->getUploadRootDir() . '/my_pdf.pdf';
	}
}
