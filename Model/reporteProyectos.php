<?php
require_once '../librerias//fpdf.php';
require_once '../config/DB.php';

$db = DB::conectar();
$sql = "SELECT * FROM proyectos";
$ps = $db->prepare($sql);
$ps->execute();
$proyectos = $ps->fetchAll(PDO::FETCH_ASSOC);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Reporte de Proyectos', 0, 1, 'C');
$pdf->Ln(5);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 10, 'ID', 1);
$pdf->Cell(55, 10, 'Nombre', 1);
$pdf->Cell(45, 10, 'Empresa', 1);
$pdf->Cell(35, 10, 'Fecha de Inicio', 1);
$pdf->Cell(35, 10, 'Fecha de Entrega', 1);
$pdf->Ln();

$pdf->SetFont('Arial', '', 10);
foreach ($proyectos as $p) {
    $pdf->Cell(15, 10, $p['idproyecto'], 1);
    $pdf->Cell(55, 10, $p['nombre'], 1);
    $pdf->Cell(45, 10, $p['empresa'], 1);
    $pdf->Cell(35, 10, $p['fechainicio'], 1);
    $pdf->Cell(35, 10, $p['fechaentrega'], 1);
    $pdf->Ln();
}

$pdf->Output('I', 'reporte_proyectos.pdf');
?>
