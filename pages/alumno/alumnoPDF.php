<?php
    session_start();
    include("./../fix/configBD.php");
    include("./../fix/fpdf182/fpdf.php");
    include("./../fix/qrcode/qrcode.class.php");

    setlocale(LC_ALL, "es_MX");
    
    class PDF extends FPDF
    {
        // Cabecera de página
        function Header()
        {
            // Logo
            $this->Image("./../../imgs/header.jpg",5,8,200);
            $this->Ln(20);
        }

        // Pie de página
        function Footer()
        {
            // Posición: a 1.5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Número de página
            $this->Cell(0,10,utf8_decode("Escuela Superior de Cómputo / Sem. 20202"),0,0,'C');
        }
    }

    $boleta = $_SESSION["boleta"];
    $sqlAlumno = "SELECT * FROM alumno WHERE boleta = '$boleta'";
    $resAlumno = mysqli_query($conexion, $sqlAlumno);
    $infAlumno = mysqli_fetch_row($resAlumno);
    $txtIntroduccion = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vestibulum hendrerit varius. Curabitur sapien mauris, facilisis eu turpis sed, tincidunt condimentum nunc. Curabitur purus risus, lacinia at justo sodales, volutpat rutrum metus. Nullam quis leo ac velit molestie dictum. Nunc dignissim dolor sit amet felis tempor mattis. Vivamus a quam a ex vulputate egestas. Nulla posuere dui accumsan tincidunt commodo.";
    $cumple = strftime("%e de %B de %Y", strtotime($infAlumno[6]));
    
    // Creación del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $pdf->Ln(10);
    $pdf->Cell(0,7,"ESCOM-IPN, ".strftime("%A %d de %B de %Y"),0,1,"R");
    $pdf->Ln(10);
    $pdf->MultiCell(0,5,$txtIntroduccion,0,1);
    $pdf->Ln(10);
    $pdf->Cell(0,7,"Boleta: $infAlumno[0]",0,1);
    $pdf->Cell(0,7,utf8_decode("Nombre: $infAlumno[1] $infAlumno[2] $infAlumno[3]"),0,1);
    $pdf->Cell(0,7,utf8_decode("Género: $infAlumno[4]"),0,1);
    $pdf->Cell(0,7,utf8_decode("Correo: $infAlumno[5]"),0,1);
    $pdf->Cell(0,7,utf8_decode("Fecha de nacimiento: $cumple"),0,1);
    $qrcode = new QRcode("$boleta / TWeb-20202", "H");
    $qrcode->displayFPDF($pdf,10,130,50);
    $pdf->Output();
?>