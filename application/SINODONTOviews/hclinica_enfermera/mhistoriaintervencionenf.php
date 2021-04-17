<?php
	header('Content-Type: text/html; charset=UTF-8');
	$campos = json_decode(json_encode($cn), True);
	foreach ($cn['hcintervencion'] as $fila)
	{
		$interfecha=$fila->enf_intervencion_fecha;
		$internplan=$fila->enf_intervencion_npla;
		$interpfeiffer=$fila->enf_intervencion_pfeiffer;
		$interbarthel=$fila->enf_intervencion_barthel;
		$internorton=$fila->enf_intervencion_norton;
		$interbraden=$fila->enf_intervencion_braden;
		$interkarnosky=$fila->enf_intervencion_karnosky;
		$intersocio=$fila->enf_intervencion_socio;
		$interansiedad=$fila->enf_intervencion_ansiedad;
		$interzarith=$fila->enf_intervencion_zarith;
		$nsrespirar=utf8_decode($fila->enf_intervencion_ns_respiar);
		$nsdescansar=utf8_decode($fila->enf_intervencion_ns_descansar);
		$nscomerybeber=utf8_decode($fila->enf_intervencion_ns_comer);
		$nsvestimenta=utf8_decode($fila->enf_intervencion_ns_vestimenta);
		$nseliminar=utf8_decode($fila->enf_intervencion_ns_eliminar);
		$nscorporal=utf8_decode($fila->enf_intervencion_ns_corporal);
		$nshigiene=utf8_decode($fila->enf_intervencion_ns_higiene);
		$nspeligros=utf8_decode($fila->enf_intervencion_ns_peligros);
		$nspostura=utf8_decode($fila->enf_intervencion_ns_postura);
		$nsculto=utf8_decode($fila->enf_intervencion_ns_culto);
		$nsexpresar=utf8_decode($fila->enf_intervencion_ns_comunicarse);
		$nsestudiar=utf8_decode($fila->enf_intervencion_ns_estudiar);
		$nstrabajar=utf8_decode($fila->enf_intervencion_ns_trabajar);
		$nsparticipar=utf8_decode($fila->enf_intervencion_ns_participar);
		$nsmedico=utf8_decode($fila->enf_intervencion_ns_medico);
		$nsenfermeria=utf8_decode($fila->enf_intervencion_ns_enfermeria);
		$nsdiagnostico=utf8_decode($fila->enf_intervencion_ns_diagnostico);
		$nscomplementacion=utf8_decode($fila->enf_intervencion_ns_complementacion);
		$nseducativo=utf8_decode($fila->enf_intervencion_ns_educativo);
		$lista1=$fila->enf_intervencion_lista_diagnostico;
		$lista2=$fila->enf_intervencion_lista_riesgo;
		$lista3=$fila->enf_intervencion_lista_resultado;
		$lista4=$fila->enf_intervencion_lista_intervenciones;

		$obfechaintervencion=$fila->enf_intervencion_f_reg;
		$obhoraintervencion=$fila->enf_intervencion_h_reg;

		$intparaclinicos=utf8_decode($fila->enf_intervencion_paraclinicos);
		$intimagenologia=utf8_decode($fila->enf_intervencion_imagenologia);
		$intliquidos=utf8_decode($fila->enf_intervencion_liquidos);
		$intobservaciones=utf8_decode($fila->enf_intervencion_observaciones);
		$obldigenfinter=utf8_decode($fila->enf_intervencion_diagnosticos_enf);
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
	// $tipot="a";
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
	$GLOBALS['obfechaintervencion'] = $obfechaintervencion;
	$GLOBALS['obhoraintervencion'] = $obhoraintervencion;
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
			$this->Cell(198,4, strtoupper('Plan de Intervencion Domiciliario'),0,0,'C',true);
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
			$this->Cell(6);
			$this->SetFont('Arial','B',8);
			$this->Cell(28,0,'Fecha Intervencion:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(14,0,$GLOBALS['obfechaintervencion'],0,0,1);
			$this->Cell(2);
			$this->SetFont('Arial','B',8);
			$this->Cell(26,0,'Hora Intervencion:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['obhoraintervencion'],0,0,1);
			$this->Cell(2);
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
			$this->Cell(24,5,$GLOBALS['aseguradora'],0,0,1);
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
	$pdf->SetFont('Arial','',8);
	// $pdf->Cell(40,5,'Fecha: '.$interfecha,0,0,'',1);
	$pdf->Cell(196,5,strtoupper('Plan de Intervencion Programa de Atencion Domiciliaria'),0,0,'C',1);
	// $pdf->Cell(20,5,utf8_decode('N° Plan: ').$internplan,0,0,'',1);
	$pdf->Ln(6);
	$pdf->Cell(12,4,"NANDA",1,0,'J');
	$pdf->Cell(184,4,strtoupper("Diagnosticos"),1,0,'');
	$pdf->SetFont('Arial','',8);
	$pdf->Ln(3);
	$pdf->SetFont('Arial','',8);
	$porciones = explode(";", $obldigenfinter);
	$tty=$pdf->GetY();
	$alto=$tty+2;//84
	$conta=0;
	$ellargo=(count($porciones)-1)*6;
	$unsalto=0;
	if($ellargo==0)
	{
		$pdf->MultiCell(190,5,$obldig,0,'L');
		$pdf->Ln(6);
		$unsalto=4;
	}
	else
	{
		$unsalto=0;
	}
	for ($i=0; $i < count($porciones)-1; $i++)
	{
		if((count($porciones)-1)>=6)
		{

		}
		else
		{
			$subporciones = explode(" ", $porciones[$i]);
			$pdf->SetY($alto); 
			$pdf->SetX(10);
			$pdf->Cell(12,4,$subporciones[count($subporciones)-1],1,0,'J');
			$pdf->Cell(184,4,str_replace($subporciones[count($subporciones)-1], " ", $porciones[$i]),1,0,'');
			// $pdf->SetY($alto); 
			// $pdf->SetX(10);
			// $pdf->Cell(190,5,$porciones[$i],0,0,'');
			$alto+=5;
		}
	}
	$pdf->SetY($pdf->GetY());
	$pdf->Ln(6);
	$pdf->Cell(14,5,utf8_decode('Pfeiffer: '),0,0,1);
	$pdf->Cell(30,5,$interpfeiffer,0,0,1);
	$pdf->Cell(14,5,'Barthel:',0,0,1);
	$pdf->Cell(38,5,$interbarthel,0,0,1);
	$pdf->Cell(14,5,'Norton:',0,0,1);
	$pdf->Cell(30,5,$internorton,0,0,1);
	$pdf->Cell(14,5,'Braden:',0,0,1);
	$pdf->Cell(30,5,$interbraden,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(18,5,'Karnosfky:',0,0,1);
	$pdf->Cell(26,5,$interkarnosky,0,0,1);
	$pdf->Cell(26,5,'Socio Familiar:',0,0,1);
	$pdf->Cell(26,5,$intersocio,0,0,1);
	$pdf->Cell(18,5,'Ansiedad:',0,0,1);
	$pdf->Cell(26,5,$interansiedad,0,0,1);
	$pdf->Cell(14,5,'Zarith:',0,0,1);
	$pdf->Cell(30,5,$interzarith,0,0,1);
		
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Respirar con normalidad: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nsrespirar,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,'Descansar y dormir: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nsdescansar,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,'Comer y beber adecuadamente: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nscomerybeber,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,'Seleccionar vestimenta adecuada: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nsvestimenta,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,'Eliminar los desechos del organismo: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nseliminar,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,'Mantener la temperatura corporal: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nscorporal,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,'Mantener la higiene corporal: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nshigiene,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,'Evitar los peligros del entorno: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nspeligros,0,'J');
	$pdf->Ln(4);
	//
	$pdf->Cell(196,5,'Movimientos y mantenimiento de la postura adecuada: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nspostura,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,utf8_decode('Ejercer culto a Dios, acorde a su religión: '),0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nsculto,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,'Comunicarse con otros, expresar emociones, necesidades, miedos u opiniones: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nsexpresar,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,'Estudiar, descubrir o satisfacer la curiosidad que conduce a un desarrollo normal de la salud: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nsestudiar,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,'Trabajar de forma que permita sentirse realizado: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nstrabajar,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,utf8_decode('Participar en todas las formas de recreación y ocio: '),0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,4,$nsparticipar,0,'J');

	$pdf->Ln(3);
	$pdf->Ln(1);
	$pdf->Cell(196,5,'Detalle de Intervenciones ',0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(14,5,utf8_decode('Médico: '),0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nsmedico,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(20,5,'Enfermera:',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nsenfermeria,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(36,5,'Apoyo diagnostico:',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nsdiagnostico,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(54,5,utf8_decode('Complementación terapeutica:'),0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nscomplementacion,0,'J');

	$pdf->Ln(2);
	$pdf->Cell(196,5,utf8_decode('Paraclínicos: '),0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$intparaclinicos,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,utf8_decode('Imagenología: '),0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$intimagenologia,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,'Liquidos: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$intliquidos,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,'Educativo:',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$nseducativo,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,'Observaciones: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$intobservaciones,0,'J');

	$pdf->Ln(3);
	$pdf->Cell(196,5,utf8_decode('Diagnósticos '),0,0,1);
	$pdf->Ln(5);
	$partes=explode(",", $lista1);
	$pdf->SetFont('Arial','',8);
	$ay1="";
	for ($i=0; $i < count($partes)-1; $i++)
	{
		$ay1.=$partes[$i].', ';
	}
	$pdf->MultiCell(196,5,utf8_decode($ay1).', ',0,'J');
	$pdf->Ln(30);
	$pdf->SetY($pdf->GetY());
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(196,5,utf8_decode('Criterios de Riesgo y/o Relación '),0,0,1);
	$pdf->Ln(5);
	$partes=explode(",", $lista2);
	$pdf->SetFont('Arial','',8);
	$ay2="";
	for ($i=0; $i < count($partes)-1; $i++)
	{
		$ay2.=$partes[$i].', ';
	}
	$pdf->MultiCell(196,5,utf8_decode($ay2).', ',0,'J');
	$pdf->Ln(30);
	$pdf->SetY($pdf->GetY());
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(196,5,'Criterios de Resultado ',0,0,1);
	$pdf->Ln(5);
	$partes=explode(",", $lista3);
	$pdf->SetFont('Arial','',8);
	$ay3="";
	for ($i=0; $i < count($partes)-1; $i++)
	{
		$ay3.=$partes[$i].', ';
	}
	$pdf->MultiCell(196,5,utf8_decode($ay3).', ',0,'J');
	$pdf->Ln(30);
	$pdf->SetY($pdf->GetY());
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(196,5,'Intervenciones a realizar ',0,0,1);
	$pdf->Ln(5);
	$partes=explode(",", $lista4);
	$pdf->SetFont('Arial','',8);
	$ay4="";
	for ($i=0; $i < count($partes)-1; $i++)
	{
		$ay4.=$partes[$i].', ';
	}
	$pdf->MultiCell(196,5,utf8_decode($ay4).', ',0,'J');
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
	
	$pdf->Output('','HC-Intervencion_Enf_'.$getfecha2.'-'.$gethora.'.pdf');
?>
<!-- </body>
</html> -->