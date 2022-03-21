<?php

require('../FPDF/fpdf.php');

$pdf = new FPDF();

$pdf -> AddPage('p');
$pdf -> SetFont('Arial','B', 18);
$pdf -> Cell(190, 10, 'Hello I am Suyog', 0, 1, 'C');
$pdf -> Cell(190, 20, 'Cell 2', 0, 1, 'C');
$pdf -> Cell(190, 20, 'Cell 3', 0, 1, 'R');

$pdf -> Output('first_PHP-PDF.pdf', 'I');

?>