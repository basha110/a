<?php
require('php/fpdf17/fpdf.php');

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',28);
$pdf->Cell(189	,8,'U D A Y A M',0,1,'C');
$pdf->SetFont('Arial','B',15);

$pdf->Cell(189	,5,'VELLORE.',0,1,'C');//end of line
//Cell(width , height , text , border , end line , [align] )
$pdf->ln();

$pdf->Cell(189	,7,'ORDER COPY',1,1,'C');


$pdf->Cell(130	,10,'CUSTOMER',0,0);

$pdf->Cell(59	,10,'INVOICE',0,1);//end of line


//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->MultiCell(80	,5,'[Street Address] dsd sd sd s ds dsdsd sdsds ds sedff sdf dsdsds sdsd',0,0,'L');
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'[City, Country, ZIP]',0,0);
$pdf->Cell(25	,5,'Date',0,0);
$pdf->Cell(34	,5,'[dd/mm/yyyy]',0,1);//end of line

$pdf->Cell(130	,5,'Phone [+12345678]',0,0);
$pdf->Cell(25	,5,'Invoice #',0,0);
$pdf->Cell(34	,5,'[1234567]',0,1);//end of line

$pdf->Cell(130	,5,'Fax [+12345678]',0,0);
$pdf->Cell(25	,5,'Customer ID',0,0);
$pdf->Cell(34	,5,'[1234567]',0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//billing address
// $pdf->Cell(100	,5,'Bill to',0,1);//end of line

// //add dummy cell at beginning of each line for indentation
// $pdf->Cell(10	,5,'',0,0);
// $pdf->Cell(90	,5,'[Name]',0,1);

// $pdf->Cell(10	,5,'',0,0);
// $pdf->Cell(90	,5,'[Company Name]',0,1);

// $pdf->Cell(10	,5,'',0,0);
// $pdf->Cell(90	,5,'[Address]',0,1);

// $pdf->Cell(10	,5,'',0,0);
// $pdf->Cell(90	,5,'[Phone]',0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(15	,5,'S.No',1,0);
$pdf->Cell(115	,5,'Description',1,0);
$pdf->Cell(25	,5,'Taxable',1,0);
$pdf->Cell(34	,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter
$pdf->Cell(15	,5,'1',1,0);
$pdf->Cell(115	,5,'UltraCool Fridge',1,0);
$pdf->Cell(25	,5,'232',1,0,'R');
$pdf->Cell(34	,5,'3,250',1,1,'R');//end of line

$pdf->Cell(15	,5,'1',1,0);
$pdf->Cell(115	,5,'UltraCool Fridge',1,0);
$pdf->Cell(25	,5,'232',1,0,'R');
$pdf->Cell(34	,5,'3,250',1,1,'R');//end of line


$pdf->Cell(15	,5,'1',1,0);
$pdf->Cell(115	,5,'UltraCool Fridge',1,0);
$pdf->Cell(25	,5,'232',1,0,'R');
$pdf->Cell(34	,5,'3,250',1,1,'R');//end of line

//summary
$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Subtotal',0,0);
$pdf->Cell(8	,5,'Rs.',1,0);
$pdf->Cell(30	,5,'4,450',1,1,'R');//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Taxable',0,0);
$pdf->Cell(8	,5,'Rs.',1,0);
$pdf->Cell(30	,5,'0',1,1,'R');//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Tax Rate',0,0);
$pdf->Cell(8	,5,'Rs.',1,0);
$pdf->Cell(30	,5,'10%',1,1,'R');//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Total Due',0,0);
$pdf->Cell(8	,5,'Rs.',1,0);
$pdf->Cell(30	,5,'4,450',1,1,'R');//end of line





















$pdf->Output();
?>
