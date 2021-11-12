<?php

session_start();


$sesioon_usuario = $_SESSION['usuario']; 

if ( $sesioon_usuario == null ) {
 
  header('location: ../LOGIN/LOGIN.HTML');

  die();
}




require('fpdf.php');

class PDF extends FPDF
{

// Cabecera de página
function Header()

{
    $this->SetFillColor(25,174,194);  
    // Arial bold 15
    $this->SetFont('Arial','B',15);


// mover a la derecha
   
$this->Cell(60);

//70 para la linea                  //para quitar linea
    $this->Cell(70,10,'REPORTE DE DOCENTES',0,1,'C');


    // Arial bold 15
    $this->SetFont('Arial','B',10);




//mover a la derecha
    $this->Cell(60);

    //70 para la linea                  //para quitar linea
        $this->Cell(70,10,'(English page)',0,1,'C');
    


    // Arial bold 15
    $this->SetFont('Arial','B',10);
   
    // Movernos a la derecha
    $this->Cell(60);

    $this->Image('../imagenes/reino-unido.png',2,2,30,30,'png');
    $this->Image('../imagenes/reino-unido.png',178,2,30,30,'png');




    // Salto de línea
    $this->Ln(20);
    $this->SetTextColor(25,174,194);
    $this->cell(30,10, 'NOMBRE',1,0,'c',0);
    $this->cell(35,10, 'APELLIDO',1,0,'c',0);
    $this->cell(30,10, 'USUARIO',1,0,'c',0);
    $this->cell(70,10, 'CORREO',1,0,'c',0);
    $this->cell(30,10, 'ROL',1,1,'c',0);
    







}



// Pie de página
function Footer()
{

    // Posición: a 1,5 cm del final
    $this->SetY(-15);

    // Arial italic 8
    $this->SetFont('Arial','I',8);
    
    //utf8 para los caracteres
    // Número de página

    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
}


require 'modelo/modelo.php';

$consulta = ("SELECT englispage.miembros.nombre,
                    englispage.miembros.apellido,
                    englispage.miembros.usuario,
                    englispage.miembros.correo,
                    englispage.roles.rol
                    FROM englispage.miembros                 
                    inner join englispage.roles on
                    englispage.miembros.miembros_rol_fk
                     = englispage.roles.id_rol where 
                     englispage.miembros.miembros_rol_fk = 3
                    order by englispage.miembros.id asc ");

$resultado = $mysqli-> query($consulta);




$pdf = new PDF();


//pie de paginas enumeracion

$pdf->AliasNbPages();

//pie de paginas enumeracion


$pdf->AddPage();


$pdf->SetFont('Courier','B',10);

while($row = $resultado -> fetch_assoc()){

$pdf->cell(30,10, $row['nombre'],1,0,'c',0);
$pdf->cell(35,10, $row['apellido'],1,0,'c',0);
$pdf->cell(30,10, $row['usuario'],1,0,'c',0);
$pdf->cell(70,10, $row['correo'],1,0,'c',0);
$pdf->cell(30,10, $row['rol'],1,1,'c',0);

}


//utf8 para los caracteres
$pdf->Output();
?>