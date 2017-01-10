<?php

namespace Acme\DemoBundle\Lib\Controller;

use Acme\DemoBundle\Lib\Entity\Pdf;

class AcmeController
{
	/**
	 * Clasic bundle controller
	 */
    public function indexAction()
    {
        $this->generationPdf();

        // Go on your page after generate the pdf !
        return $this->render('AcmeDemoBundle:Folder:view.html.twig');
    }

    /**
     * Main function that build and generate the pdf
     */
    public function generationPdf()
	{
		// initiate FPDI
		$pdf = new Pdf();

		// add a page
		$pdf->AddPage();

		// set the source file (if you have on, FPDI allow that, even, it create a A4 for you ! )
		$pdf->setSourceFile($pdf->getWebPath());

		// import page 1
		$tplIdx = $pdf->importPage(1);

		// use the imported page and place it at point 0,0 with a width of 210 mm
		$pdf->useTemplate($tplIdx, 0, 0, 210);

		// now write some text above the imported page
		$pdf->SetFont('Helvetica', "", 8);
		$pdf->SetTextColor(0, 0, 0);

		$pdf->checkboxDemandeDt();
		$pdf->destinataireDenomination("Zone destinataire>denomination");
		$pdf->destinataireComplement("Zone destinataire>complement");
		$pdf->numeroTelephone('0476898557');

		// Use the barecode
		$pdf->barecodeTest('I Want To Be A fred Today');

		// Pdf is generated here !
		$pdf->Output();
	}
}

