# Usage

To summerize, the bundle simply registers the fdpf class and the fpdi class. You just have to invoke them like this and FPDF will be include because FPDI extends FPDF.

**$pdf = new \FPDI();**

or 

**$pdf = new YourPdfClassExtendFPDI();**

In the Resources folder, their is an example that use your pdf class.

```
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

		$pdf->destinataireDenomination("Zone destinataire>denomination");
```

The full example is here

```
See @Resources/example/Lib/Controller/AcmeController.php
```
