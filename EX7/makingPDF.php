<?php

require('../FPDF/fpdf.php');

$pdf = new FPDF();

$pdf -> AddPage('L');
$pdf -> SetFont('Arial','B', 18);
$pdf -> Cell(190, 10, 'Hello I am Suyog');
$pdf -> Cell(190, 20, 'Cell 2');
$pdf -> Cell(190, 20, 'Cell 3');

$pdf -> Output('first_PHP-PDF.pdf', 'I');

?>