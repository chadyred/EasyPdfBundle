<?php

abstract class DecoratorPdf extends \FPDF {
    protected $pdf;
 
    public function __construct(\FPDF $pdf) {
        $this->pdf = $pdf;
    }
}