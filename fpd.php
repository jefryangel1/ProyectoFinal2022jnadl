<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('img/toyo.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(120, 20, utf8_decode('MENSAJES'), 0, 0,'C');
    // Salto de línea
    $this->Ln(40);

    $this->Cell(35,10, utf8_decode('ID'),1,0,'C',0);
    $this->Cell(50,10, utf8_decode('Nombre'),1,0,'C',0);
    $this->Cell(40,10, utf8_decode('Numero'),1,0,'C',0);
    $this->Cell(60,10, utf8_decode('Correo'),1,0,'C',0);
    $this->Cell(90,10, utf8_decode('Mensaje'),1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10, utf8_decode('Pagina').$this->PageNo().'',0,0,'C');
}
}
require 'bd.php';
$consulta = "SELECT * FROM usuarios";
$resultado = $conectar -> query($consulta);



$pdf = new PDF();
$pdf->AddPage('landscape');
$pdf->SetFont('Arial','B',16);
while ($row = $resultado -> fetch_assoc()){
    $pdf -> Cell(35, 10, utf8_decode ($row['ID']), 1, 0, 'C', 0);
    $pdf -> Cell(50, 10, utf8_decode ($row['nombre']), 1, 0, 'C', 0);
    $pdf -> Cell(40, 10, utf8_decode ($row['numero']), 1, 0, 'C', 0);
    $pdf -> Cell(60, 10, utf8_decode ($row['correo']), 1, 0, 'C', 0);
    $pdf -> MultiCell(90, 10, utf8_decode ($row['mensaje']), 1, 'C', false);
}

$pdf->Output();
?>