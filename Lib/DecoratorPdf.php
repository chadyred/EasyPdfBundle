<?php

namespace Kark\EasyPdfBundle\Lib;

abstract class DecoratorPdf extends \FPDF {
    protected $pdf;
 
    public function __construct (\FPDF $pdf, $orientation='P', $unit='mm', $size='A4') {
    	parent::__construct ($orientation='P', $unit='mm', $size='A4');
    	$this->pdf = $pdf;
    }
}