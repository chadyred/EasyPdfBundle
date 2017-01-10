# Dev


If you want to debug this bundle, just clone it and go on example folder on lib then add a "app.php" file with this snippet in order to do test.

```
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
```

Then, you can launch it on your dev tool php project, for example at here: 

`http://domain.tld/EasyPdfBundle/Resources/example/Lib/app.php`