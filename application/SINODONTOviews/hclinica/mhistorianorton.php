<?php
	header('Content-Type: text/html; charset=UTF-8');
	$campos = json_decode(json_encode($cn), True);
	foreach ($cn['hcnorton'] as $fila)
	{
		$obldig=utf8_decode($fila->norton_diagnosticos);
		$nortonfisico=$fila->norton_estado_fisico;
		$nortonmental=$fila->norton_estado_mental;
		$nortonactividad=$fila->norton_actividad;
		$nortonmovilidad=$fila->norton_movilidad;
		$nortonincontinencia=$fila->norton_incontinencia;
		$nortontotal=$fila->norton_total;
		$nortonnivel=$fila->norton_nivel;
		$obfechanorton=$fila->norton_f_reg;
		$obhoranorton=$fila->norton_h_reg;
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
	$GLOBALS['nommedico'] = $nommedico;
	$GLOBALS['obnrohc'] = $obnrohc;
	$GLOBALS['obfechanorton'] = $obfechanorton;
	$GLOBALS['obhoranorton'] = $obhoranorton;
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
			$this->Cell(198,5, strtoupper('Escala de Norton'),0,0,'C',true);
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
			$this->Cell(22,0,'Fecha Norton:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['obfechanorton'],0,0,1);
			$this->Cell(6);
			$this->SetFont('Arial','B',8);
			$this->Cell(22,0,'Hora Norton:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['obhoranorton'],0,0,1);
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
			$this->Cell(26,4,'Estado Civil:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(33,4,$GLOBALS['estadoc'],0,0,1);
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
			$this->Cell(29,5,utf8_decode($GLOBALS['nombre_responsable']),0,0,1);;
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
	// $pdf->Ln(6);
	$pdf->Cell(36,5,strtoupper('Diagnosticos'),0,0,'',1);
	$pdf->Ln(6);
	$pdf->Cell(12,4,"CIE 10",1,0,'J');
	$pdf->Cell(184,4,strtoupper("Diagnosticos"),1,0,'');
	$pdf->SetFont('Arial','',8);
	$porciones = explode(";", $obldig);
	$pdf->Ln(3);
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
	$pdf->SetY($alto);
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(98,5,strtoupper(utf8_decode('Estado Físico')),0,0,'L',1);
	$pdf->Cell(98,5,strtoupper('Puntos: ').$nortonfisico,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->Cell(49,5,utf8_decode('Muy Malo'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Regular'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Mediano'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Bueno'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',8);
	$miat=$pdf->GetY();
	$pdf->Cell(49,4,utf8_decode('1 comida diaria 1 Raciones de'),0,0,'J',0);
	$pdf->Cell(49,4,utf8_decode('2 Comidas diarias 2 Raciones de'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('3 Comidas diarias 3 Raciones de'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('4 Comidas diarias 4 Raciones de'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('proteínas Menú < 1000 kcal Toma'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('proteínas Menú 1000 kcal Toma %'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('proteínas Menú 1500 kcal Toma'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('proteínas Menú 2000 kcal Toma'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('1/3 del menú Bebe < de 50mm ml 1°'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('del menú Bebe 500 - 1000 ml T°'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('mas de % menú Bebe 1000 -1500'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('todo el menú Bebe 1500 - 2000 ml'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('< de 35,5 o > de 38 °C Edemas'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('37,5 - 38 °C Piel seca, escamosa'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('ml T° 37 -37,5 °C Relleno capilar'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('T° 36 - 37 °C Mucosas humedas IMC'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('generalizados, piel muy seca IMC >'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('IMC > o igual a 50'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('lento IMC > 20 - < 25'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('20 - 25 NPT y SNG'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('o igual a 50'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(98,5,strtoupper('Estado Metal'),0,0,'L',1);
	$pdf->Cell(98,5,strtoupper('Puntos: ').$nortonmental,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->Cell(49,5,utf8_decode('Estupuroso/Comatoso'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Confuso'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Apático'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Alerta'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',8);
	$miat2=$pdf->GetY();
	$pdf->Cell(49,4,utf8_decode('Desorientado en tiempo, lugar y'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Inquieto, agresivo, irritable, dormido'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Aletargado, olvidadizo somnoliento,'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Esta orientado en tiempo, lugar y'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('persona Despierta solo con'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Respuesta lenta a fuertes estímulos'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('pasivo, torpe, perezoso Ante'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('persona Responde adecuadamente'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('estímulos dolorosos, pero no hay'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('dolorosos Cuando despierta,'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('estímulo, despierta sin dificultad y'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('a estímulos visuales, auditivos y'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('respuesta verbal Nunca esta'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('responde verbalmente pero breve e'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('permanece orientado Obedece'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('tactiles Comprende la información'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('totalmente despierto Ausencia total'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('incontexto intermitente desorientado'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('ordenes sencillas Posible'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('de respuesta, incluso la refleja'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('desorientación en el tiempo y'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('respuesta verbal lenta y vacilante'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(98,5,strtoupper('Actividad'),0,0,'L',1);
	$pdf->Cell(98,5,strtoupper('Puntos: ').$nortonactividad,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->Cell(49,5,utf8_decode('Encamado'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Sentado'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Camina con Ayuda'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Ambulante'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',8);
	$miat3=$pdf->GetY();
	$pdf->Cell(49,4,utf8_decode('Falta de autónomia para realizar'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('No puede caminar, no puede'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Es capaz de caminar con ayuda o'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Independiente total, no necesita'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('todos sus movimientos'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('mantenerse de pie, es capaz de'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('supervisión de otra persona o de'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('ayuda de otra persona. Capaz de'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('(despendencia total) Precia de ayuda'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('mantenerse sentado o puede'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('médicos mecánicos como aparatos'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('camninar solo, aunque se ayude de'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('para realizar actividades (comer,'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('movilizarse en silla. Precisa ayuda'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('con mas de un punto de apoyo inicia'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('aparatos de un solo punto de apoyo'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('asearse,..)'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('de otro a través de dispositivos'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('movimientos voluntarios con'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('o lleve prótesis'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('mecánicos'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('bastante frecuencia pero requiere'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('ayuda para realizar, completar o'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('mantener algunos de ellos'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(98,5,strtoupper('Movilidad'),0,0,'',1);
	$pdf->Cell(98,5,strtoupper('Puntos: ').$nortonmovilidad,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->Cell(49,5,utf8_decode('Inmóvil'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Muy limitada'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Disminuida'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Total'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',8);
	$miat4=$pdf->GetY();
	$pdf->Cell(49,4,utf8_decode('Es incapaz de cambiar de postura'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Solo inicia movilizaciones'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Inicia movimientos voluntarios con'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Es totalmente capaz de cambiar de'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('por si mismo, mantener la posición'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('voluntarias con escasa frecuencia y'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('bastante frecuencia, pero requiere'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('postura corporal de forma'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('corporal o sostenerla'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('necesita ayuda para finalizar todos'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('ayuda para realizar, comletar o'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('autónoma, mantenerla o sostenerla'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('los movimientos'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('mantener algunos de ellos'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(98,5,strtoupper('Incontinencia'),0,0,'',1);
	$pdf->Cell(98,5,strtoupper('Puntos: ').$nortonincontinencia,0,0,'R',1);
	$pdf->Ln(5);
	$pdf->Cell(49,5,utf8_decode('Urinaria y Fecal'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Urinaria o Fecal'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Ocasional'),0,'J');
	$pdf->Cell(49,5,utf8_decode('Ninguna'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',8);
	$miat5=$pdf->GetY();
	$miax5=$pdf->GetX();
	$pdf->Cell(49,4,utf8_decode('No controla ninguno de los'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('No controla uno de los dos'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('No controla esporadicamente uno o'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('Control de ambos esfinteres'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode('esfinteres'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('esfinteres permanentemente'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('ambos esfinteres en 24 horas'),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('implantación de sonda vesical y'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(49,4,utf8_decode('control de esfinter anal'),0,0,'J');
	// $pdf->Sety($pdf->GetY());
	// $pdf->SetX(10);
	// $pdf->MultiCell(40,5,utf8_decode('aaa'),0,'J');
	// $pdf->Sety($pdf->GetY()-5);
	// $pdf->SetX(50);
	// $pdf->MultiCell(40,5,utf8_decode('bbb'),0,'J');
	// $pdf->MultiCell(40,5,utf8_decode('ccc'),0,'J');
	// $pdf->MultiCell(40,5,utf8_decode('fff'),0,'J');
	$pdf->Ln(2);
	$aux="";
	if($nortontotal<=11)
	{
		$aux=" RIESGO ALTO";
	}
	else if($nortontotal>=12 && $nortontotal<=14)
	{
		$aux=" RIESGO EVIDENTE";
	}
	else if($nortontotal>14)
	{
		$aux=" RIESGO MINIMO";
	}
	$pdf->MultiCell(196,4,'Total: '.$nortontotal.' Nivel: '.utf8_decode($aux),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(95,5,'Informacion Prestador de Salud: ',0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(95,5,'Prestador de Salud: '.$nombreprestadorsalud,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(95,5,'Profesional: '.$nommedico,0,0,1);
	$pdf->Cell(95,5,'Especialidad Profesional: '.strtoupper($medico_especialidad),0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(95,5,'Registro Medico: '.$medico_registro,0,0,1);
	$pdf->Cell(95,5,'identificacion Profesional: '.$medico_documento,0,0,1);
	$pdf->Output('','HC-Norton_'.$getfecha2.'-'.$gethora.'.pdf');
?>
<!-- </body>
</html> -->