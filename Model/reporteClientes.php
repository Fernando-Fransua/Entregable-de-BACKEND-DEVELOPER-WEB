<?php
require_once '../librerias/fpdf.php';
require_once '../config/DB.php';

$db = DB::conectar();
$sql = "SELECT * FROM clientes";
$ps = $db->prepare($sql);
$ps->execute();
$clientes = $ps->fetchAll(PDO::FETCH_ASSOC);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Reporte de Clientes', 0, 1, 'C');
$pdf->Ln(5);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 10, 'ID', 1);
$pdf->Cell(35, 10, 'Nombres', 1);
$pdf->Cell(35, 10, 'Apellidos', 1);
$pdf->Cell(45, 10, 'Email', 1);
$pdf->Cell(30, 10, 'Celular', 1);
$pdf->Cell(35, 10, 'Empresa', 1);
$pdf->Ln();

$pdf->SetFont('Arial', '', 10);
foreach ($clientes as $c) {
    $pdf->Cell(10, 10, $c['idcliente'], 1);
    $pdf->Cell(35, 10, $c['nombres'], 1);
    $pdf->Cell(35, 10, $c['apellidos'], 1);
    $pdf->Cell(45, 10, $c['email'], 1);
    $pdf->Cell(30, 10, $c['celular'], 1);
    $pdf->Cell(35, 10, $c['empresa'], 1);
    $pdf->Ln();
}

$pdf->Output('I', 'reporte_clientes.pdf');
?>
