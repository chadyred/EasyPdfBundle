# Installation

## Symfony 3.* or 2.*

Require the bundle in your composer.json file:

```
{
    "require": {
        "chadyred/easy-pdf-bundle": "dev-master",
    }
}
```

## Instance it on your Kernel

Open your app/AppKernel.php and instance it like this 

```
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Kark\EasyPdfBundle\EasyPdfBundle(),
        // ...
    );
}
```

## Create your PDF class

The goal of this bundle is to decorate a PDF that extend

The bundle provide base lib. Show the doc session for that.

```
<?php

namespace Acme\DemoBundle\Lib\Entity;

use Kark\EasyPdfBundle\Lib\Draw\PDF_Draw;
use Kark\EasyPdfBundle\Lib\Cellfit\FPDF_CellFit;
use Kark\EasyPdfBundle\Lib\Barecode\PDF_Code128;

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
}

```

See 'Usage' section next.