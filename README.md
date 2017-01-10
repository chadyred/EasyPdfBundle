# Easy Pdf Bundle

Thid bundle allow you to design your pdf easily.

## Documentation

 1. [Installation](/Resources/doc/installation.md)
 2. [Usage](/Resources/doc/usage.md)
 3. [Lib](/Resources/doc/lib.md)
 4. [Dev](/Resources/doc/dev.md)

## What is FPDF?

FPDF is a PHP class which allows to generate PDF files with pure PHP, that is to say without using the PDFlib library. F from FPDF stands for Free: you may use it for any kind of usage and modify it to suit your needs.

FPDF has other advantages: high level functions. Here is a list of its main features:

* Choice of measure unit, page format and margins
* Page header and footer management
* Automatic page break
* Automatic line break and text justification
* Image support (JPEG, PNG and GIF)
* Colors
* Links
* TrueType, Type1 and encoding support
* Page compression

_FPDF requires no extension (except zlib to activate compression and GD for GIF support). It works with PHP 4 and PHP 5 (the latest version requires at least PHP 4.3.10)._

## What is FPDI?

The FPDI class is an extension for FPDF allowing you to import existing PDF pages into FPDF. It extends FPDF_TPL which adds a kind of template feature to FPDF.

FPDI transforms a PDF page into the same structure that is used by FPDF_TPL. The class offers all available methods as you already know from FPDF and extends it with some more methods.

### Todo

- Made a service to inject easily the pdf instance;
- Show an exemple made by dependencies injection;
- Add visual example.
