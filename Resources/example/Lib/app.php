<?php

require '../../../vendor/autoload.php';
require 'Controller/AcmeController.php';
require 'Entity/Pdf.php';
require '../../../Lib/DecoratorPdf.php';
require '../../../Lib/Draw/PdfDraw.php';
require '../../../Lib/Cellfit/FpdfCellfit.php';
require '../../../Lib/Barecode/PdfCode128.php';

$ac = new Acme\DemoBundle\Lib\Controller\AcmeController();

$ac->indexAction();