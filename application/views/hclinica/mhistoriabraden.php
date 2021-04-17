<?php
	header('Content-Type: text/html; charset=UTF-8');
	$campos = json_decode(json_encode($cn), True);
	foreach ($cn['hcbraden'] as $fila)
	{
		$bradenmovilidad=$fila->braden_movilidad;
		$bradenactividad=$fila->braden_actividad;
		$bradenpersecion=$fila->braden_persecion_sensorial;
		$bradenhumeda=$fila->braden_humedad;
		$bradennutricion=$fila->braden_nutricion;
		$bradenfriccion=$fila->braden_fricion;
		$bradentotal=$fila->braden_total_obtenido;
		$bradennivel=$fila->braden_nivel_riesgo;
		$obfechabraden=$fila->braden_f_reg;
		$obhorabraden=$fila->braden_h_reg;
		if($fila->pad_tipo_tratamiento=="0")
		{
			$tipot='.';
		}
		if($fila->pad_tipo_tratamiento=="1")
		{
			$tipot='Consulta Médico';
		}
		if($fila->pad_tipo_tratamiento=="2")
		{
			$tipot='Consulta Enfermera';
		}
		if($fila->pad_tipo_tratamiento=="3")
		{
			$tipot='Consulta Odontologica';
		}
		if($fila->pad_tipo_tratamiento=="4")
		{
			$tipot='Atención de Crónico';
		}
		if($fila->pad_tipo_tratamiento=="5")
		{
			$tipot='Atención de Paliativo';
		}
		if($fila->pad_tipo_tratamiento=="6")
		{
			$tipot='Atención de Agudo';
		}
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
		$obnombre=utf8_decode($fila->pnombre_paciente.' '.$fila->snombre_paciente.', '.$fila->papellido_paciente.' '.$fila->sapellido_paciente);
		if($fila->estado_civil_paciente=="s")
		{
			$estadoc='Soltero(a)';
		}
		else if($fila->estado_civil_paciente=="c")
		{
			$estadoc='Casado(a)';
		}
		else if($fila->estado_civil_paciente=="v")
		{
			$estadoc='Viudo(a)';
		}
		else if($fila->estado_civil_paciente=="d")
		{
			$estadoc='Divorciado(a)';
		}
		else if($fila->estado_civil_paciente=="o" || $fila->estado_civil_paciente=="0")
		{
			$estadoc='Otro';
		}
		$obfnac=$fila->f_nacimiento_paciente;
		// $tipot=utf8_decode($fila->inclusion_pad_paciente);
		// if($fila->inclusion_pad_paciente=="0")
		// {
		// 	$tipot='.';
		// }
		// if($fila->inclusion_pad_paciente=="1")
		// {
		// 	$tipot='Consulta Médico';
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
		// 	$tipot='Atención de Crónico';
		// }
		// if($fila->inclusion_pad_paciente=="5")
		// {
		// 	$tipot='Atención de Paliativo';
		// }
		// if($fila->inclusion_pad_paciente=="6")
		// {
		// 	$tipot='Atención de Agudo';
		// }
		$tipov=utf8_decode($fila->tipo_vinculacion_paciente);
		if($fila->tipo_afiliado_paciente=="c")
		{
			$tipoa='Cotizante';
		}
		if($fila->tipo_afiliado_paciente=="b")
		{
			$tipoa='Beneficiario';
		}
		if($fila->tipo_afiliado_paciente=="a")
		{
			$tipoa='Adicional';
		}

		if($fila->aseguradora_paciente=="1")
		{
			$obaseguradora='EPS';
		}
		if($fila->aseguradora_paciente=="2")
		{
			$obaseguradora='ARS';
		}
		if($fila->aseguradora_paciente=="3")
		{
			$obaseguradora='IPS';
		}
		if($fila->aseguradora_paciente=="4")
		{
			$obaseguradora='ARL';
		}
		$obnnaseguradora=utf8_decode($fila->motivo_inclusion_paciente);
		$obdirpc=utf8_decode($fila->direccion_paciente);
		$obresponsable=utf8_decode($fila->nom_responsable_paciente);
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
	foreach ($cn['md'] as $fila)
	{
		$medico_nombres=utf8_decode($fila->registro_nombres);
		$medico_apellidos=utf8_decode($fila->registro_apellidos);
		$medico_registro=$fila->registro_n_medico;
		$medico_documento=$fila->registro_doc;
		$medico_especialidad=utf8_decode($fila->registro_especialidad);
	}
	$nommedico=	ucwords($medico_nombres).', '.ucwords($medico_apellidos);
	// $tamd=0;
	// if($obtent=="entidad")
	// {
	// 	$tamd=19;
	// }
	// else if($obtent=="particular")
	// {
	// 	$tamd=27;
	// }
	// $limit=212;
	// $ttx="Lorem ipsum dolor sit amet, consectetur adipisicing elit, asdas asdasd sed do eiusmod tempor dfdasdasd asd dffsdf sdfsdfsdf incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nis.";
	// $ttx2="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	// labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nis.
	// labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nis.";
	// $teactual=strlen($obenfermed);
	// if($teactual>=$limit)
	// {
	// 	$enfactual=substr($obenfermed, 0, $limit);
	// }
	// else
	// {
	// 	$enfactual=$obenfermed;
	// }
	// $tap=strlen($obaper);
	// if($tap>=$limit)
	// {
	// 	$apersonal=substr($obaper, 0, $limit);
	// }
	// else
	// {
	// 	$apersonal=$obaper;
	// }
	// $taf=strlen($obafam);
	// if($taf>=$limit)
	// {
	// 	$afami=substr($obafam, 0, $limit);
	// }
	// else
	// {
	// 	$afami=$obafam;
	// }
	// $tdpex=strlen($obdescrip);
	// if($tdpex>=$limit)
	// {
	// 	$dexamen=substr($obdescrip, 0, $limit);
	// }
	// else
	// {
	// 	$dexamen=$obdescrip;
	// }
	// $tpl=strlen($obplan);
	// if($tpl>=$limit)
	// {
	// 	$elplan=substr($obplan, 0, $limit);
	// }
	// else
	// {
	// 	$elplan=$obplan;
	// }
	
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
	$GLOBALS['obfechabraden'] = $obfechabraden;
	$GLOBALS['obhorabraden'] = $obhorabraden;
	$GLOBALS['fef'] = $fef;
	$GLOBALS['obtipodoc'] = $obtipodoc;
	$GLOBALS['obndoc'] = $obndoc;
	$GLOBALS['obnombre'] = $obnombre;
	$GLOBALS['estadoc'] = $estadoc;
	$GLOBALS['obfnac'] = $obfnac;
	$GLOBALS['calculoedad'] = $calculoedad;
	$GLOBALS['direccion_paciente'] = $obdirpc;
	$GLOBALS['nombre_responsable'] = $obresponsable;
	$GLOBALS['afiliado'] = $tipoa;
	$GLOBALS['aseguradora'] = $obaseguradora;
	$GLOBALS['nombre_aseguradora'] = $obnnaseguradora;
	$GLOBALS['tipot'] = "";//utf8_decode($tipot);
	$GLOBALS['direccion'] = "Av. Calle 6 # 78 - 11  --  PBX: (031)7442838";
	$GLOBALS['desarrolladopor'] = "Correo: compcasa-sas@hotmail.com";
	$nombreprestadorsalud=utf8_decode('COMPAÑIA CALIDAD Y CUIDADO EN SALUD');
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
		    $this->SetFillColor(232,232,232);
		    // $this->SetTextColor(220,50,50);
		    // Ancho del borde (1 mm)
		    // $this->SetLineWidth(1);
		    // Título
			// $this->SetX(10);
		    // $this->Cell(193,9,$nommedico,0,0,'C',true);
		    // Salto de línea
		    $this->Ln(10);
			// $this->Rect(9,1,193,34);
			// $this->SetX((210-20)/2);
			// $this->SetDrawColor(155,155,155);
			// $this->SetFillColor(230,230,0);//200,220,255
			// $this->SetTextColor(220,50,50);
			 // Colores de los bordes, fondo y texto
		    // $this->SetDrawColor(0,80,180);
		    // $this->SetFillColor(230,230,0);
		    // $this->SetTextColor(220,50,50);
		    // Ancho del borde (1 mm)
		    // $this->SetLineWidth(1);
			// $this->SetDrawColor(0,0,0); //color gris borde
			$this->SetXY(9,1);
		    $this->Cell(198,10,'',0,0,'C',true);
		    $this->SetXY(9,8);
			$this->SetFont('Arial','B',8);
			// $this->Cell(65);
			$this->Cell(198,4,utf8_decode('COMPAÑIA CALIDAD Y CUIDADO EN SALUD'),0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->SetFont('Arial','',8);
			$this->Cell(198,4,'COMPCASA SAS IPS',0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->SetFont('Arial','',8);
			$this->Cell(198,4, strtoupper('Escala de Braden'),0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->Cell(198,4, 'Procesos de Apoyo',0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->Cell(198,4, utf8_decode('Gestión de la Información'),0,0,'C',true);
			$this->Cell(198);
			$this->SetY(2);
			$this->SetX(0);
			$this->Image(base_url().'assets/img/logo.png',16,2,40);
			$this->Image(base_url().'assets/img/logo4.png',168,4,24);
			$this->Ln(33);
			$this->SetFillColor(232,232,232);
			$this->SetTextColor(0,0,0);
			$this->Rect(9,32,198,10);
			$this->SetFont('Arial','B',8);
			$this->Cell(30,0,utf8_decode('Historia Clinica N°:'),0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['obnrohc'],0,0,1);
			$this->Cell(10);
			$this->SetFont('Arial','B',8);
			$this->Cell(22,0,'Fecha Braden:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['obfechabraden'],0,0,1);
			$this->Cell(6);
			$this->SetFont('Arial','B',8);
			$this->Cell(22,0,'Hora Braden:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['obhorabraden'],0,0,1);
			$this->Cell(6);
			$this->SetFont('Arial','B',8);
			$this->Cell(24,0,'Tipo Afiliado:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['afiliado'],0,0,1);
			$this->Ln(2);
			// $this->SetFont('Arial','B',8);
			// $this->Cell(30,5,'Tipo de Tratamiento:',0,0,1);
			// $this->SetFont('Arial','',8);
			// $this->Cell(62,5,$GLOBALS['tipot'],0,0,1);
			$this->SetFont('Arial','B',8);
			$this->Cell(24,5,'Aseguradora:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(28,5,$GLOBALS['aseguradora'],0,0,1);
			$this->SetFont('Arial','B',8);
			$this->Cell(34,5,'Nombre Aseguradora:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,5,$GLOBALS['nombre_aseguradora'],0,0,1);
			$this->Ln(8);//4

			$this->SetFont('Arial','B',8);
			$this->Cell(10,0,strtoupper('Datos del Paciente'),0,0,'',1);
			// $this->Cell(46,4,strtoupper('Datos del Paciente'),0,0,'',1);
			$this->Ln(4);//8
			$this->Rect(9,48,198,14);
			$this->SetFont('Arial','B',8);
			$this->Cell(18,4,'Documento:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(24,4,$GLOBALS['obndoc'],0,0,1);
			$this->Cell(17);
			$this->SetFont('Arial','B',8);
			$this->Cell(36,4,'Nombres y Apellidos:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(72,4,ucwords($GLOBALS['obnombre']),0,0,1);
			$this->Cell(12);
			$this->Ln(4);
			$this->SetFont('Arial','B',8);
			$this->Cell(22,4,'Estado Civil:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(37,4,$GLOBALS['estadoc'],0,0,1);
			$this->SetFont('Arial','B',8);
			$this->Cell(28,4,'Fecha Nacimiento:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(22,4,$GLOBALS['obfnac'],0,0,1);
			$this->Cell(8);
			$this->SetFont('Arial','B',8);
			$this->Cell(14,4,'Edad:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(64,4,utf8_decode($GLOBALS['calculoedad']),0,0,1);
			$this->Cell(12);
			$this->Ln(4);
			$this->SetFont('Arial','B',8);
			$this->Cell(16,5,'Direccion:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(101,5,utf8_decode($GLOBALS['direccion_paciente']),0,0,1);
			$this->SetFont('Arial','B',8);
			$this->Cell(32,5,'Nombre Responsable:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(29,5,utf8_decode($GLOBALS['nombre_responsable']),0,0,1);
			$this->Ln(8);
			$this->Rect($this->GetX()-1,$this->GetY()-1,198,$this->GetPageWidth()-15);
		}
		function Footer()
		{
			$this->SetY(-12);
			$this->Ln(1);
			$this->SetFont('Arial','I',8);
			$this->Cell(180,0,utf8_decode($GLOBALS['direccion']),0,0,'C');
			$this->Ln(3);
			$this->SetFont('Arial','',8);
			$this->Cell(180,0,$GLOBALS['desarrolladopor'],0,0,'C');
			$this->SetFont('Arial','I',8);
			// $this->SetFont('Arial','',11);
			// $this->Cell(106);
			$this->SetX(10);
			// $this->SetFont('Arial','',10);
			$this->Cell(0,7,'F.Impresion:'.str_replace('of','de',$GLOBALS['fef']).' '.date('h:i:s a'),0,0,'L');
			$this->Cell(0,7, 'Pagina '.$this->PageNo().'/{nb}',0,0,'R'); 
			$this->SetX(0);
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
        	return new PDF();
    	}
	}

    $pdf=new PDF();
	$pdf->AliasnbPages();
	$pdf->AddPage('P','Letter');//

	$pdf->SetFillColor(232,232,232);
	$pdf->Ln(1);
	$pdf->Rect(10,65,196,6);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,5,'Tipo de Tratamiento:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(62,5,utf8_decode($tipot),0,0,1);
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$pdf->MultiCell(196,5,strtoupper('Intensidad y Duracion de la Presion '),0,'C');
	$pdf->Cell(196,4,utf8_decode('Movilidad capacidad para cambiar y controlar la posición del cuerpo   Puntaje: ').$bradenmovilidad,0,0,'',1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',7);
	$pdf->Cell(49,4,utf8_decode('Completamente inmóvil'),0,'J');
	$pdf->Cell(49,4,utf8_decode('Muy Limitada'),0,'J');
	$pdf->Cell(49,4,utf8_decode('Ligeramente Limitada'),0,'J');
	$pdf->Cell(49,4,utf8_decode('Sin Limitaciones'),0,'J');
	$pdf->Ln(5);
	$pdf->Cell(49,4,utf8_decode('No realiza ningún movimiento con el'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Ocasionalmente realiza ligeros'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Realiza frecuentes aunque ligeros'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Realiza importantes y frecuentes'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode('cuerpo o las extremidades sin ayuda'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('cambios en la posicion del cuerpo o'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('cambios de posicion sin ayuda'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('de las extremidades, pero no es'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('cambios en la posición del cuerpo o'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('capaz de realizar cambios'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('de las extremidades sin ayuda'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('frecuentes o significativos sin ayuda'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$pdf->Cell(196,4,utf8_decode('Actividad nivel de actividad física   Puntaje: ').$bradenactividad,0,0,'',1);
	$pdf->Ln(4);
	$pdf->Cell(49,5,utf8_decode('En Cama'),0,'J');
	$pdf->Cell(49,5,utf8_decode('En silla'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Camina ocasionalmente'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Camina con Frecuencia'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$miatbd2=$pdf->GetY();
	$pdf->Cell(49,4,utf8_decode('Limitado a la cama'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Capacidad para caminar'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Camina ocacionalmente durante el'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Camina fuera de la habitación al'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('severamente limitada o inexistente'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('dia, pero distancias muy cortas, con'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('menos dos veces al dia y dentro de'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('No puede soportar su propio peso'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('o sin ayuda. Pasala mayor parte de'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('la habitación al menos una vez cada'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('y/o hay que ayudarlo para sentarse'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('cada turno en la cama o en la silla'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('dos horas durante las horas de'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('en una silla o en una silla de ruedas'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('paseo'),0,0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$pdf->Cell(196,4,utf8_decode('Percpeción Sensorial capacidad de responder adecuadamente, según su nivel de desarrollo al disconfort   P: ').$bradenpersecion,0,0,'',1);
	$pdf->Ln(4);
	$pdf->Cell(49,5,utf8_decode('Completamente limitada'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Muy limitada'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Levemente limitada'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Sin limitaciones'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$miatbd3=$pdf->GetY();
	$pdf->Cell(49,4,utf8_decode('No responde a estímulos dolorosos'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Responde solo a estímulos'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Responde a ordenes verbales, pero'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Responde a ordenes verbales. No'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode('(no gime, no se estremece ni se'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('dolorosos. Incapacidad para'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('no siempre puede comunicar la'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('tiene ninguna alteración sensorial'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode('agarra) debido a un bajo nivel de'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('comunicar malestar, excepto'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('incomodidad o la necesidad de ser'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('que limita su capacidad de sentir o'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode('conciencia o a sedación O capacidad'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('gimiendo o mostrando inquietud O'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('cambiado de postura O tiene alguna'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('comunicar dolor o malestar'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode('limitada para sentir dolor en la mayor'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('tiene alguna alteración sensorial que'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('alteración sensorial que limita la'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode('parte del cuerpo'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('limita la capacidad de sentir dolor o'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('capacidad de sentir dolor o malestar'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('malestar'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$pdf->MultiCell(196,4,strtoupper('Tolerancia de la Piel y La estructura de Soporte '),0,'C');
	$pdf->Cell(196,4,utf8_decode('Humedad nivel de exposición de la piel húmeda   Puntaje: ').$bradenhumeda,0,0,'',1);
	$pdf->Ln(4);
	$pdf->Cell(49,5,utf8_decode('Completamente húmeda'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Muy húmeda'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Ocacionalmente húmeda'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Raramente húmeda'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$miatbd4=$pdf->GetY();
	$pdf->Cell(49,4,utf8_decode('La piel se mantiene húmeda casi'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('La piel esta humedad a menudo pero'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('La piel esta húmeda de forma'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('La piel esta casi siempre seca. Hay'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode('permanentemente debido a la'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('no siempre. La ropa de cama debe'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('ocasional, necesitando cambio de la'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('que cambiar los pañales de forma'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode('transpiración, orina, drenaje, etc. La'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('ser cambiada al menos cada 8 horas'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('ropa de cama cada 12 horas.'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('rutinaria; la ropa de cama solo hay'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode('humedad es detectada cada vez que'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('que cambiarla cada 24 horas'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode('se gira o mueve al paciente'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$pdf->Cell(196,4,utf8_decode('Nutrición patrón habitual de ingesta de alimentos   Puntaje: ').$bradennutricion,0,0,'',1);
	$pdf->Ln(4);
	$pdf->Cell(49,5,utf8_decode('Muy pobre'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Indecuada'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Adecuada'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Excelente'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$miatbd5=$pdf->GetY();
	$pdf->Cell(49,4,utf8_decode('Esta en ayunas; o a dieta líquida; o'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Se le admnisitra una nutrición enteral'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Come la mitad de la mayoria de las'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Toma una dieta normal que le'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode('con sueroterapia mas de 5 dias.'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('(SNG) o nutrición parental(IV) que le'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('comidas. Come un total de 4'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('proporciona las calorías adecuadas'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode('Raras veces come mas de la mitad'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('proporciona una cantidad'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('raciones de proteínas al dia'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('para su edad. Nunca rechaza una'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode('de cualquuier comida ofrecida'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('inadecuada de calorías y minerales'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('comida. Ocasionalmente come entre'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('para su edad'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('comidas'),0,0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$pdf->Cell(196,4,utf8_decode('Fricción la piel se mueve contra la superficie de apoyo   Puntos: ').$bradenfriccion,0,0,'',1);
	$pdf->Ln(4);
	$pdf->Cell(49,5,utf8_decode('Problema significativo'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Problema'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Problema potencial'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Sin problema aparente'),0,'J');
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',7);
	$miatbd6=$pdf->GetY();
	$pdf->Cell(49,4,utf8_decode('La espasticidad, contracturas,'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Requiere ayuda para moverse. Es'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Se mueve debilmente o necesita una'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Se mueve independientemente en la'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode('picores o agitación le llevan a un'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('imposible levantarle completamente'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('ayuda mínima. Mientras se mueve,'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('cama y en la silla, y tiene suficiente'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode('movimiento y fricción casi constantes'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('sin que se produzca un roce contra'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('es posible que la piel roce de algun'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('fuerza muscular para levantarse'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('las sabanas. Frecuentemente se'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('modo con las sabanas, la silla y otros'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('completamente mientras se mueve.'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('desliza hacia abajo en la cama o en'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('dispositivos. Ocasionalmente se'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Mantiene una buena postura en la'),0,0,'J');
	$pdf->Ln(3);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('la silla'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('deliza hacia abajo'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('cama o en la silla en todo momento'),0,0,'J');	
	$pdf->Ln(4);
	$aux="";
	if($bradentotal<=12)
	{
		$aux=" RIESGO ALTO";
	}
	else if($bradentotal>=13 && $bradentotal<=16)
	{
		$aux=" RIESGO MODERADO";
	}
	else if($bradentotal>16)
	{
		$aux=" RIESGO BAJO";
	}
	$pdf->MultiCell(196,3,'Total Puntaje: '.$bradentotal.' Nivel: '.utf8_decode($aux),0,'J');
	// $pdf->Ln(1);
	$pdf->SetFont('Arial','',7);
	$pdf->Cell(95,4,'Informacion Prestador de Salud: ',0,0,1);
	$pdf->Ln(3);
	$pdf->Cell(95,4,'Prestador de Salud: '.$nombreprestadorsalud,0,0,1);
	$pdf->Ln(3);
	$pdf->Cell(95,4,'Profesional: '.$nommedico,0,0,1);
	$pdf->Cell(95,4,'Especialidad Profesional: '.strtoupper($medico_especialidad),0,0,1);
	$pdf->Ln(3);
	$pdf->Cell(95,4,'Registro Medico: '.$medico_registro,0,0,1);
	$pdf->Cell(95,4,'identificacion Profesional: '.$medico_documento,0,0,1);
	$pdf->Output('','HC-BradenQ_'.$getfecha2.'-'.$gethora.'.pdf');
?>
<!-- </body>
</html> -->