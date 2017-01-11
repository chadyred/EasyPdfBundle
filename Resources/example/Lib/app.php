<?php

require '../../../vendor/autoload.php';
require 'Controller/AcmeController.php';
require 'Entity/Pdf.php';
require '../../../Lib/DecoratorPdf.php';
require '../../../Lib/Draw/PDF_Draw.php';
require '../../../Lib/Cellfit/FPDF_CellFit.php';
require '../../../Lib/Barecode/PDF_Code128.php';

$ac = new Acme\DemoBundle\Lib\Controller\AcmeController();

$ac->indexAction();