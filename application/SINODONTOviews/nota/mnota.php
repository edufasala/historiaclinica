<?php
	
	$campos = json_decode(json_encode($cn), True);
    foreach ($cn['nt'] as $fila)
	{
		// $obid=urldecode($fila['id_ev']);
		$obnrohc=$fila->nota_doc;

		$obmotivo=$fila->nota_nota;
		$obf=$fila->nota_f_nota;
		$obh=$fila->nota_h_nota;
		$obfechanota=$fila->nota_f_reg;
	}
	foreach ($cn['pc'] as $fila)
	{
		$obnrohc=$fila->doc_paciente;
		if($fila->tipo_doc_paciente=="c")
		{
			$obtipodoc="C.C";
		}
		$obndoc=$fila->doc_paciente;
		$obnombre=$fila->pnombre_paciente.' '.$fila->snombre_paciente.', '.$fila->papellido_paciente.' '.$fila->sapellido_paciente;
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
		$tipov=$fila->tipo_vinculacion_paciente;
		$tipoa=$fila->tipo_afiliado_paciente;
		$obfnac=$fila->f_nacimiento_paciente;
		if($fila->inclusion_pad_paciente=="ag")
		{
			$tipot='Agudo';
		}
		if($fila->inclusion_pad_paciente=="ce")
		{
			$tipot='Cronico con Entrenamiento';
		}
		if($fila->inclusion_pad_paciente=="ca")
		{
			$tipot='Cronico Atencion Domicilio';
		}
		if($fila->inclusion_pad_paciente=="pn")
		{
			$tipot='Paliativo NO Oncologico';
		}
		if($fila->inclusion_pad_paciente=="po")
		{
			$tipot='Paliativo Oncologico';
		}
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
	$nommed=ucwords($medico_nombres).', '.ucwords($medico_apellidos);

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
	
	$obfechainicio='2019-01-01';
	$obfechafin='2019-06-29';
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

	$GLOBALS['nommedico'] = $nommed;
	$GLOBALS['obnrohc'] = $obnrohc;
	$GLOBALS['obfechanota'] = $obfechanota;
	$GLOBALS['fef'] = $fef;
	$GLOBALS['obtipodoc'] = $obtipodoc;
	$GLOBALS['obndoc'] = $obndoc;
	$GLOBALS['obnombre'] = $obnombre;
	$GLOBALS['estadoc'] = $estadoc;
	$GLOBALS['obfnac'] = $obfnac;
	$GLOBALS['calculoedad'] = $calculoedad;
	$GLOBALS['tipot'] = $tipot;
	$GLOBALS['direccion'] = "Calle: 5 Nota Medica";
	$GLOBALS['desarrolladopor'] = "Arkas Comunicaciones";
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
		    $this->Cell(193,10,'',0,0,'C',true);
		    $this->SetXY(9,8);
			$this->SetFont('Arial','B',15);
			// $this->Cell(65);
			$this->Cell(193,6,'NOTA MEDICA',0,0,'C',true);
			$this->Ln(6);
			$this->SetX(9);
			$this->SetFont('Arial','',13);
			$this->Cell(193,5,'Dr. '.$GLOBALS['nommedico'],0,0,'C',true);
			$this->Ln(5);
			$this->SetX(9);
			$this->Cell(193,5, 'Universidad de Nombreuniversidad',0,0,'C',true);
			$this->Ln(5);
			$this->SetX(9);
			$this->Cell(193,5, 'RM 00-00',0,0,'C',true);
			$this->Ln(5);
			$this->SetX(9);
			$this->Cell(193,4, '',0,0,'C',true);
			$this->SetY(2);
			$this->SetX(0);
			$this->Image(base_url().'assets/img/logo.png',16,2,30);
			$this->Ln(34);
			$this->SetFillColor(232,232,232);
			$this->SetTextColor(0,0,0);
			$this->Ln(4);//4
			$this->SetFont('Arial','B',11);
			$this->Cell(10,0,strtoupper('Datos del Paciente'),0,0,'',1);
			// $this->Cell(46,4,strtoupper('Datos del Paciente'),0,0,'',1);
			$this->Ln(6);//8
			$this->Rect(9,43,193,25);
			$this->Cell(37,0,utf8_decode('Nota Medica N°:'),0,0,1);
			$this->SetFont('Arial','',11);
			$this->Cell(12,0,$GLOBALS['obnrohc'],0,0,1);
			$this->Cell(10);
			$this->SetFont('Arial','B',11);
			$this->Cell(14,0,'F.Nota:',0,0,1);
			$this->SetFont('Arial','',11);
			$this->Cell(12,0,$GLOBALS['obfechanota'],0,0,1);
			// $this->Ln(6);
			// $this->SetFont('Arial','',11);
			// $this->Cell(106);
			// $this->Cell(22,0,'F.Impresion:',0,0,1);
			// $this->SetFont('Arial','',10);
			// $this->Cell(10,0,str_replace('of','de',$GLOBALS['fef']).' '.date('h:i:s a'),0,0,1);
			$this->Ln(4);
			$this->SetFont('Arial','B',11);
			$this->Cell(10,5,strtoupper($GLOBALS['obtipodoc']).':',0,0,1);
			$this->SetFont('Arial','',11);
			$this->Cell(24,5,$GLOBALS['obndoc'],0,0,1);
			$this->Cell(25);
			$this->SetFont('Arial','B',11);
			$this->Cell(42,5,'Nombres y Apellidos:',0,0,1);
			$this->SetFont('Arial','',11);
			$this->Cell(72,5,ucwords($GLOBALS['obnombre']),0,0,1);
			$this->Cell(12);
			$this->Ln(6);
			$this->SetFont('Arial','B',11);
			$this->Cell(26,5,'Estado Civil:',0,0,1);
			$this->SetFont('Arial','',11);
			$this->Cell(33,5,$GLOBALS['estadoc'],0,0,1);
			$this->SetFont('Arial','B',11);
			$this->Cell(28,5,'F.Nacimiento:',0,0,1);
			$this->SetFont('Arial','',11);
			$this->Cell(22,5,$GLOBALS['obfnac'],0,0,1);
			$this->Cell(12);
			$this->SetFont('Arial','B',11);
			$this->Cell(14,5,'Edad:',0,0,1);
			$this->SetFont('Arial','',11);
			$this->Cell(64,5,utf8_decode($GLOBALS['calculoedad']),0,0,1);
			$this->Cell(12);
			$this->Ln(6);
			$this->SetFont('Arial','B',11);
			$this->Cell(41,5,'Tipo de Tratamiento:',0,0,1);
			$this->SetFont('Arial','',11);
			$this->Cell(62,5,$GLOBALS['tipot'],0,0,1);
			$this->Ln(8);
			$this->Rect($this->GetX()-1,$this->GetY()-1,193,$this->GetPageWidth());
		}
		function Footer()
		{
			$this->SetY(-15);
			$this->Ln(1);
			$this->SetFont('Arial','I',10);
			$this->Cell(180,0,utf8_decode($GLOBALS['direccion']),0,0,'C');
			$this->Ln(3);
			$this->SetFont('Arial','',9);
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
	$pdf->AddPage('P','A4',0);

	// $pdf->SetFont('Arial','B',15);

	// $pdf->Cell(190,0,'NOTA MEDICA',0,0,'C');
	// $pdf->SetFont('Arial','',10);
	// $pdf->Cell(85,2,'',0,1,'R');#crear una variable para dar el numero de historia
	// $pdf->SetFont('Arial','',13);
	// $pdf->Cell(190,5, 'Enf.'.$nommed,0,1,'C');
	// $pdf->SetFont('Arial','',11);
	// $pdf->Cell(190,5, 'Universidad de Nombreuniversidad',0,1,'C');
	// $pdf->Cell(190,4, 'RM 00-00',0,1,'C');

	// $pdf->SetY(2);
	// $pdf->SetX(0);
	// $pdf->Image(base_url().'assets/img/logo.png',16,2,30);
	// $pdf->Ln(34);
	
	$pdf->SetFillColor(232,232,232);
	
	// $pdf->Ln(1);
	// $pdf->Rect(9,34,192,6,'B');
	// $pdf->SetFont('Arial','',11);
	// $pdf->Cell(70,0,utf8_decode('Nota Medica N°:').$obnrohc,0,0,1);
	// $pdf->Cell(86);
	// $pdf->Cell(14,0,'F.Nota:',0,0,1);
	// $pdf->Cell(12,0,$obfechanota,0,0,1);
	// $pdf->Ln(6);

	// $pdf->SetFont('Arial','',11);
	// $pdf->Cell(10,0,'Informacion del Paciente',0,0,'L');
	// $pdf->Cell(106);
	// $pdf->Cell(22,0,'F.Impresion:',0,0,1);
	// $pdf->SetFont('Arial','',10);
	// $pdf->Cell(10,0,str_replace('of','de',$fef).' '.date('h:i:s a'),0,0,1);
	// $pdf->Ln(4);
	// $pdf->Rect(9,45,192,20,'B');
	// $pdf->SetFont('Arial','',11);
	// $pdf->Cell(10,5,strtoupper($obtipodoc),0,0,'',1);
	// $pdf->Cell(24,5,$obndoc,1,0,1);
	// $pdf->Cell(10);
	// $pdf->Cell(38,5,'Nombres y Apellidos',0,0,'',1);
	// $pdf->Cell(74,5,$obnombre,1,0,1);
	// $pdf->Cell(12);
	// $pdf->Ln(6);
	// $pdf->Cell(22,5,'Estado Civil',0,0,'',1);
	// $pdf->Cell(20,5,$estadoc,1,0,1);
	// $pdf->Cell(12);
	// $pdf->Cell(25,5,'F.Nacimiento',0,0,'',1);
	// $pdf->Cell(22,5,$obfnac,1,0,1);
	// $pdf->Cell(12);
	// $pdf->Cell(11,5,'Edad',0,0,'',1);
	// $pdf->Cell(64,5,utf8_decode($calculoedad),1,0,1);
	// $pdf->Cell(12);
	// $pdf->Ln(6);
	// $pdf->Cell(36,5,'Tipo de Tratamiento',0,0,'',1);
	// $pdf->Cell(62,5,$tipot,1,0,1);
	// $pdf->Ln(6);

	$pdf->SetFont('Arial','B',11);
	$pdf->Ln(2);
	$pdf->Cell(12,5,'Fecha',0,0,'',1);
	$pdf->Cell(10,5,'',0,0,'',1);
	$pdf->Cell(12,5,'Hora',0,0,'',1);
	$pdf->Cell(6,5,'',0,0,'',1);
	$pdf->Cell(120,5,'Notas de Medico',0,0,'C',1);
	$pdf->Cell(6,5,'',0,0,'',1);
	$pdf->Cell(20,5,'Firma',0,0,'L',1);
	$pdf->Cell(5,5,'',0,0,'',1);
	$pdf->Ln(6);
	$alto=$pdf->GetY();
	$pdf->SetY($alto);
	$pdf->SetX(10);	
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(10,5,$obf);
	$pdf->SetY($alto);
	$pdf->SetX(30);
	$pdf->Cell(10,5,$obh);
	$pdf->SetY($alto+1);
	$pdf->SetX(45);
	$pdf->MultiCell(125,3,$obmotivo,0,'J');
	$pdf->SetY($alto);
	$pdf->SetX(170);
	$pdf->Cell(20,5,'______________');
	$pdf->SetY($alto);
	$pdf->SetX(110);
	$alto+=5;//6

	$pdf->Output('','NT_'.$getfecha2.'-'.$gethora.'.pdf');
?>