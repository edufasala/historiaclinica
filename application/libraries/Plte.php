<?php
	// $bs=base_url();
	// $this->load->library('fpdf');
	// require($bs.'fpdf');
	require_once APPPATH."/third_party/fpdf/fpdf.php";

	class Plte extends FPDF
	{
		// function __construct(){
		// 	parent::__construct();
		// 	// $this->load->model('pdf_model');
		// }
		// protected $numhis="Historia Clinica N°";
		
		function Header()
		{
			$this->SetFont('Arial','B',15);
			$this->Cell(65);
			$this->Cell(40,0,'HISTORIA CLINICA',0,0,1);
			$this->SetFont('Arial','',10);
			$this->Cell(85,2,'',0,1,'R');#crear una variable para dar el numero de historia
			$this->SetFont('Arial','',13);
			$this->Cell(180,5, 'Dr. Nombre Apellido Sapellido',0,1,'C');
			$this->SetFont('Arial','',11);
			$this->Cell(180,5, 'Especialista en NombreEspecialidad',0,1,'C');
			$this->Cell(180,5, 'Universidad de Nombreuniversidad',0,1,'C');
			$this->Cell(180,4, 'RM 00-00',0,1,'C');
			$this->Cell(158);
			$this->Cell(24,0, '',0,0,1);
			$this->Cell(10,0, '',0,1,'R');
			$this->Ln(20);
		}
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I',8);
			#$this->SetAuthor('Historia Clinica v.1.0');
			#$this->SetCreator('Desarrollador Wilca');
			#$this->SetAuthor('HISsadasd asda', true);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C'); 
		}
		function SetCol($col)
		{
		    // Establecer la posición de una columna dada
		    $this->col = $col;
		    $x = 10+$col*65;
		    $this->SetLeftMargin($x);
		    $this->SetX($x);
		}
		 function getInstance(){
        	return new Plte();
    	}
	}
?>