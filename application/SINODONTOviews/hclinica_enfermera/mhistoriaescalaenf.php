<?php
	header('Content-Type: text/html; charset=UTF-8');
	$campos = json_decode(json_encode($cn), True);
	foreach ($cn['hcescala'] as $fila)
	{
		$carga_pregunta=$fila->enf_escala_pregunta;
		$carga_detalle=$fila->enf_escala_detalle;
		$carga_fecha=$fila->enf_escala_fecha;
		$carga_1=$fila->enf_escala_p1;
		$carga_2=$fila->enf_escala_p2;
		$carga_3=$fila->enf_escala_p3;
		$carga_4=$fila->enf_escala_p4;
		$carga_5=$fila->enf_escala_p5;
		$carga_6=$fila->enf_escala_p6;
		$carga_7=$fila->enf_escala_p7;
		$carga_8=$fila->enf_escala_p8;
		$carga_9=$fila->enf_escala_p9;
		$carga_10=$fila->enf_escala_p10;
		$carga_11=$fila->enf_escala_p11;
		$carga_12=$fila->enf_escala_p12;
		$carga_13=$fila->enf_escala_p13;
		$carga_14=$fila->enf_escala_p14;
		$carga_15=$fila->enf_escala_p15;
		$carga_16=$fila->enf_escala_p16;
		$carga_17=$fila->enf_escala_p17;
		$carga_18=$fila->enf_escala_p18;
		$carga_19=$fila->enf_escala_p19;
		$carga_20=$fila->enf_escala_p20;
		$carga_21=$fila->enf_escala_p21;
		$carga_22=$fila->enf_escala_p22;
		$carga_total=$fila->enf_escala_total;
		$carga_nivel=$fila->enf_escala_estado;
		$obfechaescala=$fila->enf_escala_f_reg;
		$obhoraescala=$fila->enf_escala_h_reg;
		if($fila->enf_pad_tipo_tratamiento=="0")
		{
			$tipot='.';
		}
		if($fila->enf_pad_tipo_tratamiento=="1")
		{
			$tipot='Consulta Médico';
		}
		if($fila->enf_pad_tipo_tratamiento=="2")
		{
			$tipot='Consulta Enfermera';
		}
		if($fila->enf_pad_tipo_tratamiento=="3")
		{
			$tipot='Consulta Odontologica';
		}
		if($fila->enf_pad_tipo_tratamiento=="4")
		{
			$tipot='Atención de Crónico';
		}
		if($fila->enf_pad_tipo_tratamiento=="5")
		{
			$tipot='Atención de Paliativo';
		}
		if($fila->enf_pad_tipo_tratamiento=="6")
		{
			$tipot='Atención de Agudo';
		}
		// if($fila->pad_alivio=="N")
		// {
		// 	$tpalivio='Nada';
		// }
		// else if($fila->pad_alivio=="P")
		// {
		// 	$tpalivio='Poco';
		// }
		// else if($fila->pad_alivio=="B")
		// {
		// 	$tpalivio='Bastante';
		// }
		// else if($fila->pad_alivio=="M")
		// {
		// 	$tpalivio='Mucho';
		// }
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
	foreach ($cn['enf'] as $fila)
	{
		$enfermera_nombres=utf8_decode($fila->registro_nombres);
		$enfermera_apellidos=utf8_decode($fila->registro_apellidos);
		$enfermera_documento=$fila->registro_doc;
		$enfermera_registro=$fila->registro_n_medico;
		$enfermera_especialidad=utf8_decode($fila->registro_especialidad);
	}
	$nomenfermera=ucwords($enfermera_nombres).', '.ucwords($enfermera_apellidos);

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

	$GLOBALS['nomenfermera'] = $nomenfermera;
	$GLOBALS['obnrohc'] = $obnrohc;
	$GLOBALS['obfechaescala'] = $obfechaescala;
	$GLOBALS['obhoraescala'] = $obhoraescala;
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

		    $w = $this->GetPageWidth($nommedico)+6;
		    
		    $this->SetFillColor(232,232,232);
		  
		    $this->Ln(10);
			
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
			$this->Cell(198,4, strtoupper('Escala de Carga del Cuidador - Zarit'),0,0,'C',true);
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
			$this->Cell(22,0,'Fecha Escala:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['obfechaescala'],0,0,1);
			$this->Cell(6);
			$this->SetFont('Arial','B',8);
			$this->Cell(22,0,'Hora Escala:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['obhoraescala'],0,0,1);
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
			$this->Ln(4);//8
			$this->Rect(9,48,198,14);
			$this->SetFont('Arial','B',8);
			$this->Cell(18,5,'Documento:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(24,5,$GLOBALS['obndoc'],0,0,1);
			$this->Cell(17);
			$this->SetFont('Arial','B',8);
			$this->Cell(36,5,'Nombres y Apellidos:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(72,5,ucwords($GLOBALS['obnombre']),0,0,1);
			$this->Cell(12);
			$this->Ln(4);
			$this->SetFont('Arial','B',8);
			$this->Cell(22,5,'Estado Civil:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(37,5,$GLOBALS['estadoc'],0,0,1);
			$this->SetFont('Arial','B',8);
			$this->Cell(28,5,'Fecha Nacimiento:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(22,5,$GLOBALS['obfnac'],0,0,1);
			$this->Cell(8);
			$this->SetFont('Arial','B',8);
			$this->Cell(14,5,'Edad:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(64,5,utf8_decode($GLOBALS['calculoedad']),0,0,1);
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
	$pdf->Ln(6);
	// $pdf->Ln(8);
	if($carga_pregunta=="no")
	{
		$pdf->Cell(196,5,'El Paciente no puede realizar la Escala de Carga del Cuidador',0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(196,5,'Motivo: '.$carga_detalle,0,0,1);
		$pdf->Ln(5);
	}
	else
	{
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(130,5,strtoupper(utf8_decode('Pregunta a Realizar')),0,0,'J',1);
		$pdf->Cell(50,5,'Fecha: '.$carga_fecha,0,0,'L',1);
		$pdf->Cell(16,5,utf8_decode('Puntuacion'),0,0,'J',1);
		$pdf->Ln(6);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Siente que su familiar solicita mas ayuda de la que realmente necesita?'),0,0,'J');
		$pdf->Cell(16,5,$carga_1,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Siente que debido al tiempo que dedica a su familiar ya no dispone de tiempo suficiente para usted?'),0,'J');
		$pdf->Cell(16,5,$carga_2,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Se siente tenso cuando tiene que cuidar a su familiar y atender además otras responsibilidades?'),0,'J');
		$pdf->Cell(16,5,$carga_3,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Se siente avergonzado por la conducta de su familiar?'),0,'J');
		$pdf->Cell(16,5,$carga_4,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Se siente enfadado cuando está cerca de su familiar?'),0,'J');
		$pdf->Cell(16,5,$carga_5,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Cree que la situación actual afecta de manera negativa a su relación con amigos y otros miembros de su familia?'),0,'J');
		$pdf->Cell(16,5,$carga_6,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Siente temor por el futuro que le espera a su familiar?'),0,'J');
		$pdf->Cell(16,5,$carga_7,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Siente que su familiar depende de usted?'),0,'J');
		$pdf->Cell(16,5,$carga_8,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Se siente agobiado cuando tiene que estar junto a su familiar?'),0,'J');
		$pdf->Cell(16,5,$carga_9,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Siente que su salud se ha resentido por cuidar a su familiar?'),0,'J');
		$pdf->Cell(16,5,$carga_16,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Siente que no tiene la vida privada que desearía debido a su familiar?'),0,'J');
		$pdf->Cell(16,5,$carga_11,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Cree que su vida social se ha visto afectada por tener que cuidar de su familiar?'),0,'J');
		$pdf->Cell(16,5,$carga_15,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Se siente incomodo para invitar amigos a casa, a causa de su familiar?'),0,'J');
		$pdf->Cell(16,5,$carga_13,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Cree que su familiar espera que usted le cuide, como si fuera la única persona con la que puede contar?'),0,'J');
		$pdf->Cell(16,5,$carga_14,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Cree que no dispone de dinero suficiente para cuidar a su familiar además de sus otros gastos?'),0,'J');
		$pdf->Cell(16,5,$carga_15,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Siente que será incapaz de cuidar a su familiar por mucho mas tiempo?'),0,'J');
		$pdf->Cell(16,5,$carga_16,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Siente que ha perdido el control de su vida desde que la enfermedad de su familiar se manifesto?'),0,'J');
		$pdf->Cell(16,5,$carga_17,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Desearía poder encargar el cuidado de su familiar a otras personas?'),0,'J');
		$pdf->Cell(16,5,$carga_18,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Se siente inseguro acerca de lo que debe hacer con su familiar?'),0,'J');
		$pdf->Cell(16,5,$carga_19,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Siente que debería hacer mas de lo que hace por su familiar?'),0,'J');
		$pdf->Cell(16,5,$carga_20,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('¿Cree que podría cuidar de su familiar mejor de lo que lo hace?'),0,'J');
		$pdf->Cell(16,5,$carga_21,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(180,5,utf8_decode('En general: ¿Se siente muy sobrecargado por tener que cuidar de su familiar?'),0,'J');
		$pdf->Cell(16,5,$carga_22,0,0,'C');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(190,5,'Total: '.$carga_total.'   Nivel: '.$carga_nivel,0,0,1);
	}
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(95,5,'Informacion Prestador de Salud: ',0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(95,5,'Prestador de Salud: '.$nombreprestadorsalud,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(95,5,'Profesional: '.$nomenfermera,0,0,1);
	$pdf->Cell(95,5,'Especialidad Profesional: '.strtoupper($enfermera_especialidad),0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(95,5,'Registro Medico: '.$enfermera_registro,0,0,1);
	$pdf->Cell(95,5,'identificacion Profesional: '.$enfermera_documento,0,0,1);
	$pdf->Output('','HC-Escala_Enf_'.$getfecha2.'-'.$gethora.'.pdf');
?>
<!-- </body>
</html> -->