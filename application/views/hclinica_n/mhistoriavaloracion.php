<?php
	header('Content-Type: text/html; charset=UTF-8');
	$campos = json_decode(json_encode($cn), True);
	foreach ($cn['hcvaloracion'] as $fila)
	{
		$obldig=utf8_decode($fila->valoracion_diagnosticos);
		$auxcnocular=$fila->valoracion_ocular;
		$auxcnverbal=$fila->valoracion_verbal;
		$auxcnmotora=$fila->valoracion_motora;
		$cntotal=$fila->valoracion_avm_total;
		$auxcngeneral=$fila->valoracion_tipo_condicion;
		$cnotrogeneral=$fila->valoracion_otro_condicion;
		$testn=$fila->valoracion_test_numero;
		$testp1=$fila->valoracion_test_control_1;
		$testr1=$fila->valoracion_test_respuesta_1;
		$auxtpr1=$fila->valoracion_test_resultado_1;
		$testp2=$fila->valoracion_test_control_2;
		$testr2=$fila->valoracion_test_respuesta_2;
		$auxtpr2=$fila->valoracion_test_resultado_2;
		$testp3=$fila->valoracion_test_control_3;
		$testr3=$fila->valoracion_test_respuesta_3;
		$auxtpr3=$fila->valoracion_test_resultado_3;
		$testp4=$fila->valoracion_test_control_4;
		$testr4=$fila->valoracion_test_respuesta_4;
		$auxtpr4=$fila->valoracion_test_resultado_4;
		$testp5=$fila->valoracion_test_control_5;
		$testr5=$fila->valoracion_test_respuesta_5;
		$auxtpr5=$fila->valoracion_test_resultado_5;
		$testp6=$fila->valoracion_test_control_6;
		$testr6=$fila->valoracion_test_respuesta_6;
		$auxtpr6=$fila->valoracion_test_resultado_6;
		$testp7=$fila->valoracion_test_control_7;
		$testr7=$fila->valoracion_test_respuesta_7;
		$auxtpr7=$fila->valoracion_test_resultado_7;
		$testp8=$fila->valoracion_test_control_8;
		$testr8=$fila->valoracion_test_respuesta_8;
		$auxtpr8=$fila->valoracion_test_resultado_8;
		$testp9=$fila->valoracion_test_control_9;
		$testr9=$fila->valoracion_test_respuesta_9;
		$auxtpr9=$fila->valoracion_test_resultado_9;
		$testp10=$fila->valoracion_test_control_10;
		$testr10=$fila->valoracion_test_respuesta_10;
		$auxtpr10=$fila->valoracion_test_resultado_10;
		$testtotal=$fila->valoracion_test_total;
		$testnivel=$fila->valoracion_test_riesgo;
		$testvalpregunta=$fila->valoracion_test_pregunta_general;
		$obfechavaloracion=$fila->valoracion_f_reg;
		$obhoravaloracion=$fila->valoracion_h_reg;
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
		if($fila->inclusion_pad_paciente=="0")
		{
			$tipot='.';
		}
		if($fila->inclusion_pad_paciente=="1")
		{
			$tipot='Consulta Medico';
		}
		if($fila->inclusion_pad_paciente=="2")
		{
			$tipot='Consulta Enfermera';
		}
		if($fila->inclusion_pad_paciente=="3")
		{
			$tipot='Consulta Odontologica';
		}
		if($fila->inclusion_pad_paciente=="4")
		{
			$tipot='Atencion de Cronico';
		}
		if($fila->inclusion_pad_paciente=="5")
		{
			$tipot='Atencion de Paleativo';
		}
		if($fila->inclusion_pad_paciente=="6")
		{
			$tipot='Atencion de Agudo';
		}
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
		$medico_nombres=$fila->registro_nombres;
		$medico_apellidos=$fila->registro_apellidos;
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
	$GLOBALS['obfechavaloracion'] = $obfechavaloracion;
	$GLOBALS['obhoravaloracion'] = $obhoravaloracion;
	$GLOBALS['fef'] = $fef;
	$GLOBALS['obtipodoc'] = $obtipodoc;
	$GLOBALS['obndoc'] = $obndoc;
	$GLOBALS['obnombre'] = utf8_decode($obnombre);
	$GLOBALS['estadoc'] = $estadoc;
	$GLOBALS['obfnac'] = $obfnac;
	$GLOBALS['calculoedad'] = $calculoedad;
	$GLOBALS['direccion_paciente'] = $obdirpc;
	$GLOBALS['nombre_responsable'] = $obresponsable;
	$GLOBALS['afiliado'] = $tipoa;
	$GLOBALS['aseguradora'] = $obaseguradora;
	$GLOBALS['nombre_aseguradora'] = $obnnaseguradora;
	$GLOBALS['tipot'] = $tipot;
	$GLOBALS['direccion'] = "Calle: 5 Historia Clinica";
	$GLOBALS['desarrolladopor'] = "Arkas Comunicaciones";
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
		    $this->SetFillColor(232,232,232);
		    $this->Ln(10);
			$this->SetXY(9,1);
		    $this->Cell(198,10,'',0,0,'C',true);
		    $this->SetXY(9,8);
			$this->SetFont('Arial','B',8);
			// $this->Cell(65);
			$this->Cell(198,4,'HISTORIA CLINICA',0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->SetFont('Arial','',8);
			$this->Cell(198,4,'Dr. '.$GLOBALS['nommedico'],0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->SetFont('Arial','',8);
			$this->Cell(198,4, strtoupper('Valoracion Funcionalidad Cognitiva'),0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->Cell(198,4, 'Universidad de Nombreuniversidad',0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->Cell(198,4, 'RM 00-00',0,0,'C',true);
			$this->Cell(198);
			$this->SetY(2);
			$this->SetX(0);
			$this->Image(base_url().'assets/img/logo.png',16,2,25);
			$this->Image(base_url().'assets/img/logo4.png',175,2,25);
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
			$this->Cell(20,0,'F.Valoracion:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(14,0,$GLOBALS['obfechavaloracion'],0,0,1);
			$this->Cell(6);
			$this->SetFont('Arial','B',8);
			$this->Cell(20,0,'H.Valoracion:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(14,0,$GLOBALS['obhoravaloracion'],0,0,1);
			$this->Cell(6);
			$this->SetFont('Arial','B',8);
			$this->Cell(24,0,'Tipo Afiliado:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['afiliado'],0,0,1);
			$this->Ln(2);
			$this->SetFont('Arial','B',8);
			$this->Cell(30,5,'Tipo de Tratamiento:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(62,5,$GLOBALS['tipot'],0,0,1);
			$this->SetFont('Arial','B',8);
			$this->Cell(24,5,'Aseguradora:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(16,5,$GLOBALS['aseguradora'],0,0,1);
			$this->SetFont('Arial','B',8);
			$this->Cell(34,5,'Nombre Aseguradora:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,5,$GLOBALS['nombre_aseguradora'],0,0,1);
			$this->Ln(8);//4

			$this->SetFont('Arial','B',8);
			$this->Cell(10,0,strtoupper('Datos del Paciente'),0,0,'',1);			
			$this->Ln(4);
			$this->Rect(9,48,198,14);
			$this->SetFont('Arial','B',8);
			$this->Cell(10,4,strtoupper($GLOBALS['obtipodoc']).':',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(24,4,$GLOBALS['obndoc'],0,0,1);
			$this->Cell(25);
			$this->SetFont('Arial','B',8);
			$this->Cell(32,4,'Nombres y Apellidos:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(76,4,ucwords($GLOBALS['obnombre']),0,0,1);
			$this->Cell(12);
			$this->Ln(4);
			$this->SetFont('Arial','B',8);
			$this->Cell(26,4,'Estado Civil:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(37,4,$GLOBALS['estadoc'],0,0,1);
			$this->SetFont('Arial','B',8);
			$this->Cell(24,4,'F.Nacimiento:',0,0,1);
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
			$this->Cell(16,4,'Direccion:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(101,4,utf8_decode($GLOBALS['direccion_paciente']),0,0,1);
			$this->SetFont('Arial','B',8);
			$this->Cell(32,4,'Nombre Responsable:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(29,4,utf8_decode($GLOBALS['nombre_responsable']),0,0,1);
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
			$this->Cell(0,10,'F.Impresion:'.str_replace('of','de',$GLOBALS['fef']).' '.date('h:i:s a'),0,0,'L');
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'R'); 
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

	// $pdf->Ln(6);
	$pdf->Cell(40,5,strtoupper('Diagnosticos'),0,0,'',1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$porciones = explode(";", $obldig);
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
	$pdf->SetY($tty);
	// $pdf->MultiCell(190,$ellargo,'',1,'L');
	// $pdf->Ln(2+$unsalto);
	$pdf->SetY($alto);
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(56,5,strtoupper('Condicion Neurologica'),0,0,'',1);
	// $pdf->SetFont('Arial','',10);
	$pdf->Ln(6);
	$pdf->MultiCell(196,5,'Apertura Ocular: '.$auxcnocular,0,'J');
	$pdf->Ln(2);
	$pdf->MultiCell(196,5,'Respuesta Verbal: '.$auxcnverbal,0,'J');
	$pdf->Ln(2);
	$pdf->MultiCell(196,5,'Respuesta Motora: '.$auxcnmotora,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,'Total: '.$cntotal,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Condicion: '.$auxcngeneral,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Otro: '.$cnotrogeneral,0,0,1);
	$pdf->Ln(6);
	if($testtotal=="Sin Informacion")
	{
		$pdf->Cell(196,5,'El Paciente no puede realizar Test de Pfeiffer',0,0,1);
		$pdf->Ln(6);
		$pdf->Cell(196,5,'Motivo: '.$testvalpregunta,0,0,1);
		$pdf->Ln(6);
	}
	else
	{
		$pdf->Cell(196,5,strtoupper('Test de Pfeiffer "Escala de detecion de deterioro congnitivo-SPMSQ"').utf8_decode(' Valoracion N°').$testn,0,0,'',1);
		$pdf->Ln(6);
		$pdf->Cell(100,5,'Pregunta',0,0,'',1);
		$pdf->Cell(44,5,'Control',0,0,'L',1);
		$pdf->Cell(44,5,'Respuesta',0,0,'L',1);
		$pdf->Cell(8,5,'V/F',0,0,'C',1);
		$pdf->Ln(6);
		$pdf->Cell(100,5,utf8_decode('¿Que dia es hoy (mes/dia/año)?'),0,0,1);
		$pdf->Cell(45,5,$testp1,0,0,1);
		$pdf->Cell(45,5,$testr1,0,0,1);
		$pdf->Cell(6,5,$auxtpr1,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(100,5,utf8_decode('¿Que dia de la semana es hoy?'),0,0,1);
		$pdf->Cell(45,5,$testp2,0,0,1);
		$pdf->Cell(45,5,$testr2,0,0,1);
		$pdf->Cell(6,5,$auxtpr2,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(100,5,utf8_decode('¿Donde estamos ahora (Lugar o edificacion)?'),0,0,1);
		$pdf->Cell(45,5,$testp3,0,0,1);
		$pdf->Cell(45,5,$testr3,0,0,1);
		$pdf->Cell(6,5,$auxtpr3,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(100,5,utf8_decode('¿Cual es su numero de telefono o direccion?'),0,0,1);
		$pdf->Cell(45,5,$testp4,0,0,1);
		$pdf->Cell(45,5,$testr4,0,0,1);
		$pdf->Cell(6,5,$auxtpr4,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(100,5,utf8_decode('¿Cuantos años tiene?'),0,0,1);
		$pdf->Cell(45,5,$testp5,0,0,1);
		$pdf->Cell(45,5,$testr5,0,0,1);
		$pdf->Cell(6,5,$auxtpr5,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(100,5,utf8_decode('¿En que dia, mes y año nacio?'),0,0,1);
		$pdf->Cell(45,5,$testp6,0,0,1);
		$pdf->Cell(45,5,$testr6,0,0,1);
		$pdf->Cell(6,5,$auxtpr6,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(100,5,utf8_decode('¿Como se llama el presidente de Colombia?'),0,0,1);
		$pdf->Cell(45,5,$testp7,0,0,1);
		$pdf->Cell(45,5,$testr7,0,0,1);
		$pdf->Cell(6,5,$auxtpr7,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(100,5,utf8_decode('¿Quien mandaba antes del presidente actual en Colombia?'),0,0,1);
		// $pdf->SetY($pdf->GetY()-5);
		// $pdf->SetX(110);
		$pdf->Cell(45,5,$testp8,0,0,1);
		// $pdf->SetX(150);
		$pdf->Cell(45,5,$testr8,0,0,1);
		// $pdf->SetX(190);
		$pdf->Cell(6,5,$auxtpr8,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(100,5,utf8_decode('¿Como se llama o se llamaba su señora madre?'),0,0,1);
		$pdf->Cell(45,5,$testp9,0,0,1);
		$pdf->Cell(45,5,$testr9,0,0,1);
		$pdf->Cell(10,5,$auxtpr9,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(100,5,utf8_decode('Si a 20 le restamos 3, ¿quedad?, y si le restamos 3 ¿Cuanto queda?'),0,0,1);
		// $pdf->SetY($pdf->GetY()-5);
		// $pdf->SetX(110);
		$pdf->Cell(45,5,$testp10,0,0,1);
		// $pdf->SetX(150);
		$pdf->Cell(45,5,$testr10,0,0,1);
		// $pdf->SetX(190);
		$pdf->Cell(6,5,$auxtpr10,0,0,1);
		$pdf->Ln(8);
		$aux="";
		if($testnivel=="N")
		{
			$aux=" Normal";
		}
		else if($testnivel=="DL")
		{
			$aux=" Deterioro leve";
		}
		else if($testnivel=="DM")
		{
			$aux=" Deterioro moderado";
		}
		else if($testnivel=="DI")
		{
			$aux=" Deterioro importante";
		}
		$pdf->MultiCell(190,4,'Total Errores: '.$testtotal.' Nivel: '.$testnivel.utf8_decode($aux),0,'J');
	}
	
	
	$pdf->Output('','HC-Valoracion_'.$getfecha2.'-'.$gethora.'.pdf');
?>
<!-- </body>
</html> -->