<?php

namespace Acme\DemoBundle\Entity;

class Pdf extends \FPDI
{

	/**
	* Write test
	*/
	function destinataireDenomination($string)
	{ 

		// Décalage de 10 cm vers la droite et 40 vers le bas
		$this->SetXY(102, 47);
		$this->Cell(200,10,$string,0,0,'l',0); 
	} 

	/**
	* Write test
	*/
	function destinataireComplement($string)
	{ 
		// Décalage de 8 cm à droite
		$this->SetXY(102, 52);
		$this->Cell(200,10,$string,0,0,'l',0); 
	} 

	/**
	* Checkbox to check
	*/
	function checkboxDemandeDt()
	{

		$this->Line(11.3, 55.8, 13, 58.5, $style);
		$this->Line(13, 58.5, 15, 54.5, $style);
	}
	
	 /**
	 * Pdf folder in uploads
	 */
	public function getUploadDir()
	{
	    
	    return 'uploads/pdf';
	}

    
    /**
    * relatif path to upload dir
    */
    public function getUploadRootDir()
    {
        
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }


    /**
    * webPath
    *
    * Récuperation du fichier
    * 
    * @return chemin de notre fichier de manière relative
    */
    public function getWebPath()
    {
        return $this->getUploadDir() . '/my_pdf.pdf';
    }
}