<?php
	header('Content-Type: text/html; charset=UTF-8');
	$campos = json_decode(json_encode($cn), True);
	foreach ($cn['fm'] as $fila)
	{
		$obnu=$fila->id;
		$obfechafm=utf8_decode($fila->formulacion_f_reg);
		$obhorahfm=utf8_decode($fila->formulacion_h_reg);
		$obfechavfm=utf8_decode($fila->formulacion_f_v);
		$obldig=utf8_decode($fila->formulacion_lista);//lista
		$oblugar="Bogota";// utf8_decode($fila->formulacion_radicacion);
		// $obmedico=$fila->quien_creo;
	}		
	foreach ($cn['pc'] as $fila)
	{
		$obnrohc=$fila->doc_paciente;
		if($fila->tipo_doc_paciente=="c")
		{
			$obtipodoc="C.C";
		}
		else if($fila->tipo_doc_paciente=="e")
		{
			$obtipodoc="C.E";
		}
		else if($fila->tipo_doc_paciente=="r")
		{
			$obtipodoc="R.C";
		}
		else if($fila->tipo_doc_paciente=="t")
		{
			$obtipodoc="T.I";
		}
		$obndoc=$fila->doc_paciente;
		$obnombre=utf8_decode($fila->pnombre_paciente.', '.$fila->papellido_paciente);
		// if($fila->estado_civil_paciente=="s")
		// {
		// 	$estadoc='Soltero(a)';
		// }
		// else if($fila->estado_civil_paciente=="c")
		// {
		// 	$estadoc='Casado(a)';
		// }
		// else if($fila->estado_civil_paciente=="v")
		// {
		// 	$estadoc='Viudo(a)';
		// }
		// else if($fila->estado_civil_paciente=="d")
		// {
		// 	$estadoc='Divorciado(a)';
		// }
		// else if($fila->estado_civil_paciente=="o" || $fila->estado_civil_paciente=="0")
		// {
		// 	$estadoc='Otro';
		// }
		$estadoc='';
		$obfnac=$fila->f_nacimiento_paciente;
		$tipot='';
		// // $tipot=utf8_decode($fila->inclusion_pad_paciente);
		// if($fila->inclusion_pad_paciente=="0")
		// {
		// 	$tipot='.';
		// }
		// if($fila->inclusion_pad_paciente=="1")
		// {
		// 	$tipot='Consulta Medico';
		// }
		// if($fila->inclusion_pad_paciente=="2")
		// {
		// 	$tipot='Consulta Enfermera';
		// }
		// if($fila->inclusion_pad_paciente=="3")
		// {
		// 	$tipot='Consulta Odontologica';
		// }
		// if($fila->inclusion_pad_paciente=="4")
		// {
		// 	$tipot='Atencion de Cronico';
		// }
		// if($fila->inclusion_pad_paciente=="5")
		// {
		// 	$tipot='Atencion de Paleativo';
		// }
		// if($fila->inclusion_pad_paciente=="6")
		// {
		// 	$tipot='Atencion de Agudo';
		// }
		// $tipov=utf8_decode($fila->tipo_vinculacion_paciente);
		// if($fila->tipo_afiliado_paciente=="c")
		// {
		// 	$tipoa='Cotizante';
		// }
		// if($fila->tipo_afiliado_paciente=="b")
		// {
		// 	$tipoa='Beneficiario';
		// }
		// if($fila->tipo_afiliado_paciente=="a")
		// {
		// 	$tipoa='Adicional';
		// }
		$tipoa='';
		// if($fila->aseguradora_paciente=="1")
		// {
		// 	$obaseguradora='EPS';
		// }
		// if($fila->aseguradora_paciente=="2")
		// {
		// 	$obaseguradora='ARS';
		// }
		// if($fila->aseguradora_paciente=="3")
		// {
		// 	$obaseguradora='IPS';
		// }
		// if($fila->aseguradora_paciente=="4")
		// {
		// 	$obaseguradora='ARL';
		// }
		$obaseguradora='';
		$obnnaseguradora='';//utf8_decode($fila->motivo_inclusion_paciente);
		$obdirpc='';//utf8_decode($fila->direccion_paciente);
		$obresponsable='';//utf8_decode($fila->nom_responsable_paciente);
	}
	// $datos['lugar_nacimiento_paciente']=$this->input->post('lugarn');		
			// $datos['aseguradora_paciente']=$this->input->post('asegura');
			// $datos['ambito_registro_paciente']=$this->input->post('ambito');
			// $datos['direccion_paciente']=$this->input->post('direccion');
			// $datos['barrio_paciente']=$this->input->post('barrio');
			// $datos['municipio_paciente']=$this->input->post('municipio');
			// $datos['tel_fijo_paciente']=$this->input->post('telfijo');
			// $datos['tel_celular_paciente']=$this->input->post('telcel');
			// $datos['ocupacion_paciente']=$this->input->post('ocupacion');
			// $datos['religion_paciente']=$this->input->post('religion');
			// $datos['']=$this->input->post('');
			// $datos['nom_cuidador_paciente']=$this->input->post('ncuidador');
			// $datos['tel_cuidador_paciente']=$this->input->post('telcuidador');
			// $datos['nom_responsable_paciente']=$this->input->post('nresponsable');
			// $datos['tel_responsable_paciente']=$this->input->post('tresponsable');
			// $datos['parentezco_responsable_paciente']=$this->input->post('parece');
			// $datos['motivo_inclusion_paciente']=$this->input->post('minclusion');
			// $datos['lugar_valoracion_paciente']=$this->input->post('lugarv');
			// $datos['f_vinculacion_paciente']=$this->input->post('fvincula');
			// $datos['h_vinculacion_paciente']=$this->input->post('hvincula');
			// $datos['inclusion_pad_paciente']=$this->input->post('mpad');
	foreach ($cn['enfomed'] as $fila)
	{
		$medico_nombres=utf8_decode($fila->registro_nombres);
		$medico_apellidos=utf8_decode($fila->registro_apellidos);
		$medico_registro=$fila->registro_n_medico;
		$medico_documento=$fila->registro_doc;
		$medico_especialidad=utf8_decode($fila->registro_especialidad);
	}
	$nommedico=ucwords($medico_nombres).', '.ucwords($medico_apellidos);
	
	// $obfechainicio='2019-01-01';
	// $obfechafin='2019-06-29';
	date_default_timezone_set("America/Bogota");
	$now = time();
	$todayh =getdate($now);// $timestamp;
	$d = $todayh['mday'];
	$m = $todayh['mon'];
	$y = $todayh['year'];
	$hr=$todayh['hours'];
	$min=$todayh['minutes'];
	$s=$todayh['seconds'];
	$getfecha=$y."-".$m."-".$d;
	$gethora=$hr.":".$min.":".$s;
	$fef=date('j \of M \of Y');//l jS \of F Y h:i:s A
	// $xx=date_create($obfechainicio);//recibe este formato'2019-01-01'
	// $dos=date_create($obfechafin);
	// $diferencia=date_diff($xx,$dos);
	// $fechagenerarl=$diferencia->format('%Y %m %d');//%d%a días %Y %m %R%a
	// $anios=$diferencia->format('%Y');
	// $meses=$diferencia->format('%m');
	// $dias=$diferencia->format('%d'); 
	$getfecha2=date("Y/m/d");
	$xx=date_create($obfnac);//recibe este formato'2019-01-01'
	$dos=date_create($getfecha2);
	$diferencia=date_diff($xx,$dos);
	$fechagenerarl=$diferencia->format('%Y %m %d');//%d%a días %Y %m %R%a
	$anios=$diferencia->format('%Y');
	$meses=$diferencia->format('%m');
	$dias=$diferencia->format('%d');
	
	$tan="";
	$tms="";
	$tds="";
	$calculoedad="";
	if($anios==0)
	{
		if($meses==0)
		{
			// $tds=letras($dias);
			$tx3="";
			if($dias==1)
			{
				$tx3=" Dia";
			}
			else
			{
				$tx3=" Dias";
			}
			$tds=$tx3;
			$calculoedad=$dias.$tds;
		}
		else
		{
			if($dias==0)
			{
				// $tms=letrasm($meses);
				$tx2="";
				if($meses==1)
				{
					$tx2=" Mes";
				}
				else
				{
					$tx2=" Meses";
				}
				$tms=$tx2;
				$calculoedad=$meses.$tms;
			}
			else
			{
				// $tms=letrasm($meses);
				// $tds=letras($dias);
				$tx2="";
				if($meses==1)
				{
					$tx2=" Mes";
				}
				else
				{
					$tx2=" Meses";
				}
				$tms=$tx2;
				$tx3="";
				if($dias==1)
				{
					$tx3=" Dia";
				}
				else
				{
					$tx3=" Dias";
				}
				$tds=$tx3;
		
				$calculoedad=$meses.$tms." ".$dias.$tds;
			}
		}
	}
	else
	{
		$tx="";
		if($anios==1)
		{
			$tx=" Año";
		}
		else
		{
			$tx=" Años";
		}
		$tx2="";
		if($meses==1)
		{
			$tx2=" Mes";
		}
		else
		{
			$tx2=" Meses";
		}
		$tx3="";
		if($dias==1)
		{
			$tx3=" Dia";
		}
		else
		{
			$tx3=" Dias";
		}
		$tan=$tx;//letrasa($anios);
		$tms=$tx2;//letrasm($meses);
		$tds=$tx3;//letras($dias);
		
		$calculoedad=$anios.$tan." ".$meses.$tms." ".$dias.$tds;
	}
	$GLOBALS['nommedico'] = $nommedico;
	$GLOBALS['obnrohc'] = $obnrohc;
	$GLOBALS['obfechahistoria'] = $obfechafm;
	$GLOBALS['obhorahistoria'] = $obhorahfm;
	$GLOBALS['obfechahistoriav'] = $obfechavfm;
	$GLOBALS['fef'] = $fef;
	$GLOBALS['obtipodoc'] = $obtipodoc;
	$GLOBALS['obndoc'] = $obndoc;
	$GLOBALS['obnombre'] = $obnombre;
	$GLOBALS['estadoc'] = $estadoc;
	$GLOBALS['obfnac'] = $obfnac;
	$GLOBALS['calculoedad'] = utf8_decode($calculoedad);
	$GLOBALS['direccion_paciente'] = $obdirpc;
	$GLOBALS['nombre_responsable'] = $obresponsable;
	$GLOBALS['afiliado'] = $tipoa;
	$GLOBALS['aseguradora'] = $obaseguradora;
	$GLOBALS['nombre_aseguradora'] = $obnnaseguradora;
	$GLOBALS['tipot'] = $tipot;
	$GLOBALS['direccion'] = "Av. Calle 6 # 78 - 11";
	$GLOBALS['desarrolladopor'] = "gerencia@compcasalud.com";
	$GLOBALS['lugar'] = utf8_decode("Bogotá D.C");
	$GLOBALS['saludprimario'] = "COMPCASA SAS";
	$GLOBALS['saludatiende'] = "COMPCASA SAS";
	$GLOBALS['eltelefono'] = "8148503-3178456270";

	
	$nombreprestadorsalud=utf8_decode('COMPAÑIA CALIDAD Y CUIDADO EN SALUD');
	$elnu2=$obnu;//"0000";
	if(intval($elnu2)<=9)
	{
		$elnu="000".intval($elnu2);
	}
	else if(intval($elnu2)>9 && intval($elnu2)<=99)
	{
		$elnu="00".intval($elnu2);
	}
	else if(intval($elnu2)>99 && intval($elnu2)<=999)
	{
		$elnu="0".intval($elnu2);
	}
	else if(intval($elnu2)>999 && intval($elnu2)<=9999)
	{
		$elnu=intval($elnu2);
	}
	else if(intval($elnu2)>9999)
	{
		$elnu="000".intval($elnu2);
	}
	// require_once APPPATH.'third_party/fpdf/fpdf.php';
	// $campos = json_decode(json_encode($cn), True);
	class PDF extends FPDF
	{
		// protected $numhis="Historia Clinica N°";			
		public function Header()
		{
			global $nommedico;

			// Arial bold 15
		    // $this->SetFont('Arial','B',15);
		    // Calculamos ancho y posición del título.
		    $w = $this->GetPageWidth($nommedico)+6;
		    // $this->SetX((210-$w)/2);
		    
		    // Colores de los bordes, fondo y texto
		    // $this->SetDrawColor(0,80,180);
		   
		}
		function Footer()
		{
			$this->SetY(-12);
			// $this->Ln(1);
			$this->SetFont('Arial','I',8);
			// $this->Cell(180,0,utf8_decode($GLOBALS['direccion']),0,0,'C');
			// $this->Ln(3);
			// $this->SetFont('Arial','',8);
			// $this->Cell(180,0,$GLOBALS['desarrolladopor'],0,0,'C');
			// $this->SetFont('Arial','I',8);
			// // $this->SetFont('Arial','',11);
			// // $this->Cell(106);
			$this->SetX(10);
			// $this->SetFont('Arial','',8);
			// $this->Cell(0,10,'F.Impresion:'.str_replace('of','de',$GLOBALS['fef']).' '.date('h:i:s a'),0,0,'L');
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'R'); 
			$this->SetX(0);
		}
		function SetCol($col)
		{
		    // Establecer la posición de una columna dada
		    // $this->col = $col;
		    // $x = 10+$col*65;
		    // $this->SetLeftMargin($x);
		    // $this->SetX($x);
		}
		function getInstance(){
        	return new PDF();
    	}
	}

    // $pdf = $this->plte->getInstance(); //2 metodo
    
    // require_once APPPATH.'views/hclinica/pltencabezado.php'; //3 metodo funciona pero sin datos
    // $pdf = $this->pdf->getInstance();
    $pdf=new PDF();
  	// ob_end_clean();
	// $fpdf->Open();
	// $pdf->AliasnbPages();
	$pdf->AddPage('P','Letter',0);//'P','A4',0
	$pdf->AliasNbPages();
	$pdf->SetMargins(10, 2 , 10);
	$pdf->SetAutoPageBreak(1, 160);
	$esp=6;
	$esp2=7;
	$esp3=2;
	$pdf->SetFillColor(232,232,232);
    // Salto de línea
    $pdf->Ln(10);
	$pdf->SetXY(9,1);
    $pdf->Cell(198,10,'',0,0,'C',true);
    $pdf->SetXY(9,8);
	$pdf->SetFont('Arial','B',8);
	// $pdf->Cell(65); 'Dr. '.$GLOBALS['nommedico']
	$pdf->Cell(198,4,utf8_decode('COMPAÑIA CALIDAD Y CUIDADO EN SALUD'),0,0,'C',true);
	$pdf->Ln(4);
	$pdf->SetX(9);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(198,4,'COMPCASA SAS IPS',0,0,'C',true);
	$pdf->Ln(4);
	$pdf->SetX(9);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(198,4, strtoupper('FORMULACION'),0,0,'C',true);
	$pdf->Ln(4);
	$pdf->SetX(9);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(113,4, utf8_decode('Registro de Medicamentos: N° ').$elnu,0,0,'R',true);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(85,4,'- ORIGINAL',0,0,'L',true);
	$pdf->Ln(4);
	// $pdf->SetX(9);
	// $pdf->Cell(198,4, utf8_decode('Gestión de la Información'),0,0,'C',true);
	// $pdf->Cell(158);
	$pdf->SetY(2);
	$pdf->SetX(0);
	$pdf->Image(base_url().'assets/img/logo.png',16,2,35);
	$pdf->Image(base_url().'assets/img/logo4.png',168,3,20);

	$pdf->Ln(26);
	$pdf->SetFillColor(232,232,232);
	$pdf->SetTextColor(0,0,0);
	$pdf->Rect(9,28,198,16);
		
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(22,0,'H.Formulacion:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(12,0,$GLOBALS['obhorahistoria'],0,0,1);
	// $pdf->Cell(6);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(24,0,'Tipo Afiliado:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(12,0,$GLOBALS['afiliado'],0,0,1);
	// $pdf->Ln(2);

	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(30,5,'Tipo de Tratamiento:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(62,5,$GLOBALS['tipot'],0,0,1);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(24,5,'Aseguradora:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(16,5,$GLOBALS['aseguradora'],0,0,1);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(34,5,'Nombre Aseguradora:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(12,5,$GLOBALS['nombre_aseguradora'],0,0,1);
	// $pdf->Ln(5);//4
	
	$pdf->SetFont('Arial','B',8);
	// $pdf->Cell(10,0,strtoupper('Datos del Paciente'),0,0,'',1);
	// $pdf->Cell(46,4,strtoupper('Datos del Paciente'),0,0,'',1);
	// $pdf->Ln(4);//8
	// $pdf->Rect(9,48,198,6);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(24,5,'Fecha Atencion:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(12,5,$GLOBALS['obfechahistoria'],0,0,1);
	$pdf->Cell(36);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(34,5,'Fecha de Transcripcion:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(12,5,$GLOBALS['obfechahistoria'],0,0,1);
	$pdf->Cell(6);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(18,5,'F.Vigencia:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(12,5,$GLOBALS['obfechahistoriav'],0,0,1);
	$pdf->Cell(10);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(32,5,'Lugar de Expedicion: ',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(24,5,$GLOBALS['lugar'],0,0,1);
	
	
	$pdf->Ln(4);
	// $pdf->Rect(9,55,198,6);
	$pdf->Ln(2);//8
	
	
	
	// $pdf->Cell(10);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(30,0,utf8_decode('Historia Clinica N°:'),0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(12,0,$GLOBALS['obnrohc'],0,0,1);
	// $pdf->Cell(12);
	
	// $pdf->Ln(5);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(22,0,'Codigo DX:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(30,0,'____ ____ ____',0,0,1);
	// $pdf->Cell(6);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(30,0,'Nombre del Paciente:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(42,0,ucwords($GLOBALS['obnombre']),0,0,1);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,0,'Identificacion:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(6,0,strtoupper($GLOBALS['obtipodoc']).' ',0,0,1);
	$pdf->Cell(20,0,$GLOBALS['obndoc'],0,0,1);
	$pdf->Cell(16);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,0,'Edad:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(20,0,$GLOBALS['calculoedad'],0,0,1);

	

	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(42,0,'Prestador de Salud Primario:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(12,0,$GLOBALS['saludprimario'],0,0,1);
	$pdf->Cell(18);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(48,0,'Prestador de Salud que Atiende:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(12,0,$GLOBALS['saludatiende'],0,0,1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(18,0,utf8_decode('Direccion:'),0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(42,0,$GLOBALS['direccion'],0,0,1);
	$pdf->Cell(12);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(16,0,utf8_decode('Telefono:'),0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(42,0,$GLOBALS['eltelefono'],0,0,1);
	$pdf->Cell(4);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(12,0,utf8_decode('Email:'),0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(12,0,$GLOBALS['desarrolladopor'],0,0,1);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(22,5,'Estado Civil:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(37,5,$GLOBALS['estadoc'],0,0,1);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(24,5,'F.Nacimiento:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(22,5,$GLOBALS['obfnac'],0,0,1);
	// $pdf->Cell(12);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(14,5,'Edad:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(64,5,utf8_decode($GLOBALS['calculoedad']),0,0,1);
	// $pdf->Cell(12);
	// $pdf->Ln(4);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(16,5,'Direccion:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(101,5,utf8_decode($GLOBALS['direccion_paciente']),0,0,1);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(32,5,'Nombre Responsable:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(29,5,utf8_decode($GLOBALS['nombre_responsable']),0,0,1);
	
	
	$pdf->Cell(12);
	$pdf->Ln(2);
	// $pdf->Rect($pdf->GetX()-1,$pdf->GetY()-1,198,$pdf->GetPageWidth()-15);
	$pdf->SetFillColor(232,232,232);
	

	// $pdf->SetFont('Arial','',10);
	// $pdf->Rect(9,75,192,$pdf->GetPageWidth());
	$pdf->Ln($esp3);
	// $pdf->SetX(11);
	// $pdf->SetFont('Arial','B',6);
	// $pdf->Cell(196,5,strtoupper('no acepte cambio de los medicamentos prescritos sin aprobacion previa'),0,0,'C');
	// $pdf->Ln(6);
	$pdf->SetX(11);
	$pdf->SetFont('Arial','',6);
	$porciones = explode(";", $obldig);
	$tty=$pdf->GetY();
	$alto=$tty+2;//84
	$conta=0;
	$ellargo=(count($porciones)-1)*7;
	$paralaalturacaja=(count($porciones)-1);
	// $pdf->Rect(10,$pdf->GetY(),190,$paralaalturacaja*15);
	$pdf->SetX(10);
	$pdf->Cell(4,4,utf8_decode('N°'),1,0,'L');
	$pdf->Cell(182,4,strtoupper('Medicamentos'),1,0,'C');
	// $pdf->SetFont('Arial','',5);
	// $pdf->Cell(90,4,' -    Impreso: '.str_replace('of','de',$GLOBALS['fef']).' '.date('h:i:s a'),0,0,'L');
	$pdf->SetFont('Arial','',6);
	$pdf->Cell(10,4,'Cantidad',1,0,'C');
	$pdf->Ln(5);
	// for ($i=0; $i < count($porciones)-1; $i++)
	// {
	// 	$conta+=1;
	// 	if((count($porciones)-1)>=12)
	// 	{

	// 	}
	// 	else
	// 	{
	// 		$pdf->SetY($pdf->GetY());
	// 		// $pdf->SetX(10);
	// 		// $pdf->Cell(190,5,'#'.' - '.$porciones[$i],0,0,'');
	// 		// $pdf->Rect(10,$pdf->GetY(),190,12);
	// 		$subporciones = explode(",", $porciones[$i]);
	// 		$pdf->SetX(10);
	// 		$pdf->Cell(4,4,$conta,0,0,'L');
	// 		$pdf->Cell(182,4,$subporciones[0],0,0,'');
	// 		$pdf->Cell(10,4,$subporciones[2],0,0,'C');
	// 		$pdf->SetX(11);
	// 		$pdf->Ln(4);
	// 		$pdf->Cell(180,4,'POSOLOGIA: '.$subporciones[1],0,0,'L');
	// 		$pdf->Ln(4);
	// 		$alto+=15;
	// 	}
	// }
	// $pdf->SetY($pdf->GetY());
	//metodo 2
	for ($i=0; $i < count($porciones)-1; $i++)
	{
		$conta+=1;
		if((count($porciones)-1)>=12)
		{

		}
		else
		{
			$pdf->SetY($pdf->GetY());
			// $pdf->SetX(10);
			// $pdf->Cell(190,5,'#'.' - '.$porciones[$i],0,0,'');
			// $pdf->Rect(10,$pdf->GetY(),190,12);
			$subporciones = explode("|", $porciones[$i]);
			$pdf->SetX(10);
			$pdf->Cell(4,4,$conta,1,0,'L');
			$pdf->Cell(182,4,$subporciones[0],1,0,'');
			$pdf->Cell(10,4,$subporciones[2],1,0,'C');
			$pdf->SetX(11);
			$pdf->Ln(4);
			$pdf->Cell(50,4,'Via Administracion:'.$subporciones[3],1,0,'L');
			// $pdf->Cell(146,4,'Observaciones:'.$subporciones[4],1,0,'L');
			// $pdf->SetFont('Arial','',5);
			$pdf->MultiCell(146,4,'POSOLOGIA: '.strtolower($subporciones[1]),1,'J');
			// $pdf->Ln(4);
			// $pdf->Cell(196,4,'POSOLOGIA: '.$subporciones[1],1,0,'L');
			$pdf->Ln(2);
			$alto+=15;
		}
	}
	$pdf->SetY($pdf->GetY());
	// $pdf->Ln(2);
	// $pdf->Cell(196,5,utf8_decode('N° de Medicamentos: ').$conta,0,0,'C');
	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(22,1,'Transcrito por:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(68,1,$nommedico,0,0,1);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(80,1,'Firma Recibido:  __________________________________________________',0,0,1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(30,1,'Registro Profesional:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(60,1,$medico_registro,0,0,1);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(80,1,'CC: ',0,0,1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(36,1,'Especialidad Profesional:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(60,1,$medico_especialidad,0,0,1);
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(196,5,utf8_decode('Para la entrega de Medicamentos este documento tiene una validez de 8 dias hábiles a partir de la fecha de expedición'),0,0,'C');
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',5);
	$pdf->Cell(196,4,'Impreso: '.str_replace('of','de',$GLOBALS['fef']).' '.date('h:i:s a'),0,0,'C');
	$pdf->Ln(40);
	// $pdf->SetFont('Arial','B',6);
	// $pdf->Cell(196,5,strtoupper(utf8_decode('OBSERVACIONES: FORMULA EMITIDA POR FALLAS EN EL SISTEMA DE INFORMACIÓN')),0,0,'C');
	// $pdf->Ln(8);
	// $pdf->SetFont('Arial','',6);
	// $pdf->Cell(90,5,'_____________________________________',0,0,1);
	// $pdf->Cell(18);
	// $pdf->Cell(5);
	// $pdf->Cell(85,5,'___________________________________________',0,0,1);
	// $pdf->Ln(5);
	// $pdf->Cell(20);
	// $pdf->Cell(70,5,'Recibido por:',0,0,1);
	// $pdf->Cell(18);
	// $pdf->Cell(20);
	// $pdf->Cell(70,5,'Firma autoriazada y sello',0,0,1);
	// $pdf->Ln(5);
	// $pdf->Cell(90,5,'C.C.. ',0,0,1);
	// $pdf->Cell(18);
	// $pdf->Ln(4);
	// $pdf->SetFont('Arial','B',6);
	// $pdf->Cell(196,5,strtoupper('*** toda enmendadura anula la formula ** caduca a los ocho(8) dias calendario'),0,0,'C');
	// $pdf->Ln(2);
	// $pdf->Cell(196,5,'_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _',0,0,1);
	// $pdf->Ln(3);

	//segunda copia
	// $pdf->Cell(198,4,' '.$pdf->GetY(),0,0,'C',true);
	if($pdf->GetY()>=135)//135
	{
		// $pdf->Ln(200);
	}
	$pdf->SetFillColor(232,232,232);
    // Salto de línea
    $pdf->Ln(2);
	// $pdf->SetXY($pdf->GetX(),$pdf->GetY());
	$pdf->SetX($pdf->GetX());
    $pdf->Cell(198,10,'',0,0,'C',true);
    // $pdf->SetXY($pdf->GetX(),$pdf->GetY());
    $pdf->Ln(7);
    $pdf->SetX($pdf->GetX());
	$pdf->SetFont('Arial','B',8);
	// $pdf->Cell(65); 'Dr. '.$GLOBALS['nommedico']
	$pdf->Cell(198,4,utf8_decode('COMPAÑIA CALIDAD Y CUIDADO EN SALUD'),0,0,'C',true);
	$pdf->Ln(4);
	$pdf->SetX($pdf->GetX());
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(198,4,'COMPCASA SAS IPS',0,0,'C',true);
	$pdf->Ln(4);
	$pdf->SetX($pdf->GetX());
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(198,4, strtoupper('FORMULACION'),0,0,'C',true);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(115,4, utf8_decode('Registro de Medicamentos: N° ').$elnu,0,0,'R',true);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(83,4,'- COPIA',0,0,'L',true);
	$pdf->Ln(4);
	// $pdf->SetX($pdf->GetX());
	// $pdf->Cell(198,4, utf8_decode('Gestión de la Información'),0,0,'C',true);
	// $pdf->Cell(158);
	// $pdf->SetY(2);
	// $pdf->SetX(0);
	$pdf->Image(base_url().'assets/img/logo.png',16,$pdf->GetY()-22,35);
	$pdf->Image(base_url().'assets/img/logo4.png',168,$pdf->GetY()-22,21);

	$pdf->Ln(4);
	$pdf->SetFillColor(232,232,232);
	$pdf->SetTextColor(0,0,0);
	$pdf->Rect($pdf->GetX(),$pdf->GetY(),198,16);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(24,5,'Fecha Atencion:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(12,5,$GLOBALS['obfechahistoria'],0,0,1);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(36);
	$pdf->Cell(34,5,'Fecha de Transcripcion:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(12,5,$GLOBALS['obfechahistoria'],0,0,1);
	$pdf->Cell(6);
	$pdf->Cell(10);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(32,5,'Lugar de Expedicion: ',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(24,5,$GLOBALS['lugar'],0,0,1);
	
	$pdf->Ln(6);
	// $pdf->Ln(7);
	
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(20,0,'Prescrito por:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(80,0,$nommedico,0,0,1);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(30,0,utf8_decode('Historia Clinica N°:'),0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(12,0,$GLOBALS['obnrohc'],0,0,1);
	// $pdf->Cell(10);
	
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(22,0,'Codigo DX:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(30,0,'____ ____ ____',0,0,1);
	// $pdf->Cell(6);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(30,0,'Nombre del Paciente:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(42,0,ucwords($GLOBALS['obnombre']),0,0,1);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,0,'Identificacion:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(6,0,strtoupper($GLOBALS['obtipodoc']).':',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(20,0,$GLOBALS['obndoc'],0,0,1);
	$pdf->Cell(16);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,0,'Edad:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(20,0,$GLOBALS['calculoedad'],0,0,1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(42,0,'Prestador de Salud Primario:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(12,0,$GLOBALS['saludprimario'],0,0,1);
	$pdf->Cell(18);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(48,0,'Prestador de Salud que Atiende:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(12,0,$GLOBALS['saludatiende'],0,0,1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(18,0,utf8_decode('Direccion:'),0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(42,0,$GLOBALS['direccion'],0,0,1);
	$pdf->Cell(12);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(16,0,utf8_decode('Telefono:'),0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(42,0,$GLOBALS['eltelefono'],0,0,1);
	$pdf->Cell(4);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(12,0,utf8_decode('Email:'),0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(12,0,$GLOBALS['desarrolladopor'],0,0,1);
	
	
	$pdf->Cell(12);
	$pdf->Ln(2);
	// $pdf->Rect($pdf->GetX()-1,$pdf->GetY()-1,198,$pdf->GetPageWidth()-15);
	$pdf->SetFillColor(232,232,232);
	// // $pdf->Line(10,$col1,200,$col1);
	// // $pdf->Line(10,$col2,200,$col2);
	// // $pdf->Line(10,$col3,200,$col3);
	// // $pdf->Line(10,$col4,200,$col4);
	// // $pdf->Cell(190,5,'F.Historia:'.$nommedico);
	// // $pdf->Ln(6);
	// $pdf->Ln(1);
	// $pdf->Rect(9,34,192,6,'B');
	// $pdf->SetFont('Arial','',11);
	// $pdf->Cell(70,0,utf8_decode('Historia Clinica N°:').$obnrohc,0,0,1);
	// $pdf->Cell(80);
	// $pdf->Cell(18,0,'F.Historia:',0,0,1);
	// $pdf->Cell(12,0,$obfechahistoria,0,0,1);
	// $pdf->Ln(6);

	

	// $pdf->SetFont('Arial','',10);
	// $pdf->Rect(9,75,192,$pdf->GetPageWidth());
	$pdf->Ln($esp3);
	$pdf->SetX(11);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(196,5,strtoupper('no acepte cambio de los medicamentos prescritos sin aprobacion previa'),0,0,'C');
	// $pdf->Ln(2);
	$pdf->SetX(11);
	$pdf->SetFont('Arial','',6);
	$porciones = explode(";", $obldig);
	$tty=$pdf->GetY();
	$alto=$tty+2;//84
	$conta=0;
	$ellargo=(count($porciones)-1)*7;
	$paralaalturacaja=(count($porciones)-1);
	// $pdf->Rect(10,$pdf->GetY(),190,$paralaalturacaja*15);
	$pdf->SetX(10);
	$pdf->Cell(4,4,utf8_decode('N°'),1,0,'L');
	$pdf->Cell(182,4,strtoupper('Medicamentos'),1,0,'C');
	// $pdf->SetFont('Arial','',5);
	// $pdf->Cell(90,4,' -    Impreso: '.str_replace('of','de',$GLOBALS['fef']).' '.date('h:i:s a'),0,0,'L');
	$pdf->SetFont('Arial','',6);
	$pdf->Cell(10,4,'Cantidad',1,0,'C');
	$pdf->Ln(5);
	// for ($i=0; $i < count($porciones)-1; $i++)
	// {
	// 	$conta+=1;
	// 	if((count($porciones)-1)>=12)
	// 	{

	// 	}
	// 	else
	// 	{
	// 		$pdf->SetY($pdf->GetY());
	// 		// $pdf->SetX(10);
	// 		// $pdf->Cell(190,5,'#'.' - '.$porciones[$i],0,0,'');
	// 		// $pdf->Rect(10,$pdf->GetY(),190,12);
	// 		$subporciones = explode(",", $porciones[$i]);
	// 		$pdf->SetX(10);
	// 		$pdf->Cell(4,4,$conta,0,0,'L');
	// 		$pdf->Cell(182,4,$subporciones[0],0,0,'');
	// 		$pdf->Cell(10,4,$subporciones[2],0,0,'C');
	// 		$pdf->SetX(11);
	// 		$pdf->Ln(4);
	// 		$pdf->Cell(180,4,'POSOLOGIA: '.$subporciones[1],0,0,'L');
	// 		$pdf->Ln(4);
	// 		$alto+=15;
	// 	}
	// }
	// $pdf->SetY($pdf->GetY());
	//metodo 2
	for ($i=0; $i < count($porciones)-1; $i++)
	{
		$conta+=1;
		if((count($porciones)-1)>=12)
		{

		}
		else
		{
			$pdf->SetY($pdf->GetY());
			// $pdf->SetX(10);
			// $pdf->Cell(190,5,'#'.' - '.$porciones[$i],0,0,'');
			// $pdf->Rect(10,$pdf->GetY(),190,12);
			$subporciones = explode("|", $porciones[$i]);
			$pdf->SetX(10);
			$pdf->Cell(4,4,$conta,1,0,'L');
			$pdf->Cell(182,4,$subporciones[0],1,0,'');
			$pdf->Cell(10,4,$subporciones[2],1,0,'C');
			$pdf->SetX(11);
			$pdf->Ln(4);
			$pdf->Cell(50,4,'Via Administracion:'.$subporciones[3],1,0,'L');
			$pdf->MultiCell(146,4,'POSOLOGIA: '.strtolower($subporciones[1]),1,'J');
			$pdf->Ln(2);
			$alto+=15;
		}
	}
	$pdf->SetY($pdf->GetY());
	$pdf->Ln(2);
	// $pdf->Cell(196,5,utf8_decode('N° de Medicamentos: ').$conta,0,0,'C');
	// $pdf->Ln(4);
	// $pdf->SetFont('Arial','B',6);
	// $pdf->Cell(196,5,strtoupper(utf8_decode('OBSERVACIONES: FORMULA EMITIDA POR FALLAS EN EL SISTEMA DE INFORMACIÓN')),0,0,'C');
	// $pdf->Ln(8);
	// $pdf->SetFont('Arial','B',6);
	// $pdf->Cell(196,5,strtoupper('COPIA - NO NEGOCIABLE'),0,0,'C');
	// $pdf->Ln(4);
	// $pdf->SetFont('Arial','',6);
	// $pdf->Cell(90,5,'_____________________________________',0,0,1);
	// $pdf->Cell(18);
	// $pdf->Cell(5);
	// $pdf->Cell(85,5,'___________________________________________',0,0,1);
	// $pdf->Ln(5);
	// $pdf->SetFont('Arial','',6);
	// $pdf->Cell(20);
	// $pdf->Cell(70,5,'Recibido por:',0,0,1);
	// $pdf->Cell(18);
	// $pdf->Cell(20);
	// $pdf->Cell(70,5,'Firma autoriazada y sello',0,0,1);
	// $pdf->Ln(5);
	// $pdf->Cell(90,5,'C.C.. ',0,0,1);
	// $pdf->Cell(18);
	// $pdf->Ln(4);
	// $pdf->SetFont('Arial','B',6);
	// $pdf->Cell(196,5,strtoupper('*** toda enmendadura anula la formula ** caduca a los ocho(8) dias calendario'),0,0,'C');
	// $pdf->Ln(2);
	// $pdf->Cell(196,5,'_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _',0,0,1);
	// $pdf->Ln(10);
	$pdf->Ln(2);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(22,1,'Transcrito por:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(68,1,$nommedico,0,0,1);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(80,1,'Firma Recibido:  __________________________________________________',0,0,1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(30,1,'Registro Profesional:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(60,1,$medico_registro,0,0,1);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(80,1,'CC: ',0,0,1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(36,1,'Especialidad Profesional:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(60,1,$medico_especialidad,0,0,1);
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(196,5,utf8_decode('Para la entrega de Medicamentos este documento tiene una validez de 8 dias hábiles a partir de la fecha de expedición'),0,0,'C');
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',5);
	$pdf->Cell(196,4,'Impreso: '.str_replace('of','de',$GLOBALS['fef']).' '.date('h:i:s a'),0,0,'C');
	$pdf->Ln(6);

	
	$pdf->Output('','FM_'.$getfecha2.'-'.$gethora.'.pdf');
?>
<!-- </body>
</html> -->