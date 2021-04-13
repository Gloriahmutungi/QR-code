<?php
require_once("fpdf.php");

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

$pdf->Output();