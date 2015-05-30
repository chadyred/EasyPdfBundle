<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\DemoBundle\Entity\Pdf;

class AcmeController extends Controller
{
    public function indexAction()
    {
        $this->generationPdf();

        
        return $this->render('AcmeDemoBundle:Acme:index.html.twig');
    }

    public function generationPdf()
	{
		// initiate FPDI
		$pdf = new Pdf();

		// add a page
		$pdf->AddPage();

		// set the source file
		$pdf->setSourceFile($pdf->getWebPath());

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
