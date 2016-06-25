<?php
//importamos la libreria tcpdf
require_once  ROOT. DS.  'vendor'. DS. 'tcpdf_min'. DS. 'tcpdf.php';

//============================================================+
// File name   : <nombre de usuario>.php
// Begin       : 2008-03-04
// Last Update : 2016-05-14
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
//
// Author: David Hine
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - reportes Sistema SIVIO
 * @author David Hine
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php');
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file ='/webroot/img/main-logo.png';
        $this->Image($image_file, 10, 10, 15, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(0, 15, 'Reporte Referencia Externa sistema SIVIO ', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}



// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('David Hine sivio');
$pdf->SetTitle('Referencia Externa');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, Usuario, test, guide');


// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'ficha de usuario', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
//$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)
//$idperson =  $externalReference->person->id;
// create some HTML content
$html = '<h2>Número de Referencia: '.$externalReference->id.'</h2>
<h4>Persona</h4>
<table border="1" cellspacing="3" cellpadding="4">
   
    
    
     <tr>
        <td>Identificación:</td>
        <td bgcolor="#cccccc"  colspan="2">'.$externalReference->identificacion.'</td>
    </tr>
    <tr>
        <td>Dirección:</td>
        <td bgcolor="#cccccc"  colspan="2">'.$externalReference->direccion.'</td>
    </tr>
    <tr>
        <td>Teléfono:</td>
        <td bgcolor="#cccccc"  colspan="2">'.$externalReference->telefono.'</td>
    </tr>
    <tr>
        <td>Nombre Referido:</td>
        <td bgcolor="#cccccc"  colspan="2">'.$externalReference->persona.'</td>
    </tr>
    </table>
    <h4>Institución</h4>
<table border="1" cellspacing="3" cellpadding="4">
    <tr>
        <td>Receptor:</td>
        <td bgcolor="#cccccc"  colspan="2">'.$externalReference->receptor.'</td>
    </tr>
    <tr>
        <td>Institución:</td>
        <td bgcolor="#cccccc"  colspan="2">'.$externalReference->institucion.'</td>
    </tr>
    <tr>
        <td>Telefono Receptor:</td>
        <td bgcolor="#cccccc"  colspan="2">'.$externalReference->telefono_receptor.'</td>
    </tr>
    <tr>
        <td>Correo:</td>
        <td bgcolor="#cccccc"  colspan="2">'.$externalReference->correo.'</td>
    </tr>
    
    </table>
        <h4>Observación</h4>
<table border="1" cellspacing="3" cellpadding="4">
        <tr>
        <td bgcolor="#cccccc" align="justify" colspan="2">'.$externalReference->observacion.'</td>
        </tr>
    
</table>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

$html = <<<EOF

EOF;

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdfs = $pdf->Output('Referencia Externa'.$externalReference->id.'.pdf', 'D');




//$this->setAction('correo');
//return redirect(['controller' => 'ExternalReferences', 'action' => 'correo'],$pdfs);
//============================================================+
// END OF FILE
//============================================================+

