<?php
	header('Content-Type: text/html; charset=UTF-8');
	$campos = json_decode(json_encode($cn), True);
	foreach ($cn['hcbarthel'] as $fila)
	{
		$auxbtcomer=$fila->barthel_comer;
		$auxbtbanarse=$fila->barthel_banarse;
		$auxbtvestirse=$fila->barthel_vestirse;
		$auxbtarreglarse=$fila->barthel_arreglarse;
		$auxbtdeposicion=$fila->barthel_deposicion;
		$auxbtmiccion=$fila->barthel_miccion;
		$auxbtretrete=$fila->barthel_retrete;
		$auxbttraslado=$fila->barthel_traslado;
		$auxbtdeambulacion=$fila->barthel_deambulacion;
		$auxbtescaleras=$fila->barthel_escaleras;
		$bttotal=$fila->barthel_total;
		$btnivel=$fila->barthel_nivel;
		$obfechabarthel=$fila->barthel_f_reg;
		$obhorabarthel=$fila->barthel_h_reg;
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
	$GLOBALS['obfechabarthel'] = $obfechabarthel;
	$GLOBALS['obhorabarthel'] = $obhorabarthel;
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

		    $w = $this->GetPageWidth($nommedico)+6;
		    $this->SetFillColor(232,232,232);
		    // Salto de línea
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
			$this->Cell(198,4, strtoupper('Indice de Barthel'),0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->Cell(198,4, 'Universidad de Nombreuniversidad',0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->Cell(198,4, 'RM 00-00',0,0,'C',true);
			$this->Cell(158);
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
			$this->Cell(18,0,'F.Barthel:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['obfechabarthel'],0,0,1);
			$this->Cell(10);
			$this->SetFont('Arial','B',8);
			$this->Cell(18,0,'H.Barthel:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['obhorabarthel'],0,0,1);
			$this->Cell(10);
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
			$this->Ln(4);//8
			$this->Rect(9,48,198,14);
			$this->SetFont('Arial','B',8);
			$this->Cell(10,5,strtoupper($GLOBALS['obtipodoc']).':',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(24,5,$GLOBALS['obndoc'],0,0,1);
			$this->Cell(25);
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
			$this->Cell(24,5,'F.Nacimiento:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(22,5,$GLOBALS['obfnac'],0,0,1);
			$this->Cell(12);
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
	// $pdf->Ln(8);
	// $pdf->Cell(50,5,strtoupper('Comer Respuesta: ').$auxbtcomer,0,0,'L',1);//original
	$pdf->Cell(98,4,strtoupper('Comer'),0,0,'L',1);
	$pdf->Cell(98,4,strtoupper('Respuesta: ').$auxbtcomer,0,0,'R',1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(196,4,'10 | INDEPENDIENTE: '.utf8_decode('Capaz de comer por si solo y en un tiempo razonable. la comida puede ser preparada y servida por otra persona'),0,'J');
	$pdf->MultiCell(196,4,'5 | NECESITA AYUDA: '.utf8_decode('Para comer la carne o el pan, pero es capaz de comer el solo'),0,'J');
	$pdf->MultiCell(196,4,'0 | DEPENDIENTE: '.utf8_decode('Nesecita ser alimentado por otra persona'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(98,4,strtoupper(utf8_decode('Bañarse')),0,0,'L',1);
	$pdf->Cell(98,4,strtoupper('Respuesta: ').$auxbtbanarse,0,0,'R',1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(196,4,'5 | INDEPENDIENTE: '.utf8_decode('capaz de entrar a la ducha por si solo, bañarse en un tiempo razonable, secar su cuerpo y salir del baño por si mismo'),0,'J');
	$pdf->MultiCell(196,4,'0 | DEPENDIENTE: '.utf8_decode('Requiere de otro para ingresar y/o bañarse y/o secarse el cuerpo y/o salir del baño'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(98,4,strtoupper(utf8_decode('Vestirse')),0,0,'L',1);
	$pdf->Cell(98,4,strtoupper('Respuesta: ').$auxbtvestirse,0,0,'R',1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(196,4,'10 | INDEPENDIENTE: '.utf8_decode('Es capaz de quitarse y ponerse la ropa sin ayuda'),0,'J');
	$pdf->MultiCell(196,4,'5 | NECESITA AYUDA: '.utf8_decode('Realiza solo al menos la mitad de las tareas en un tiempo razonable'),0,'J');
	$pdf->MultiCell(196,4,'0 | DEPENDIENTE: '.utf8_decode('Requiere de otro incluso para alistar el vestuario'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(98,4,strtoupper(utf8_decode('Arreglarse')),0,0,'L',1);
	$pdf->Cell(98,4,strtoupper('Respuesta: ').$auxbtarreglarse,0,0,'R',1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(196,4,'5 | INDEPENDIENTE: '.utf8_decode('Realiza todas las actividades personales sin ninguna ayuda, los complementos necesarios pueder ser provistos por otra persona'),0,'J');
	$pdf->MultiCell(196,4,'0 | DEPENDIENTE: '.utf8_decode('Necesita alguna ayuda'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(98,4,strtoupper(utf8_decode('Deposicion')),0,0,'L',1);
	$pdf->Cell(98,4,strtoupper('Respuesta: ').$auxbtdeposicion,0,0,'R',1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(196,5,'10 | CONTINENTE: '.utf8_decode('Ningun episodio de incontinencia'),0,'J');
	$pdf->MultiCell(196,4,'5 | ACCIDENTE OCASIONAL: '.utf8_decode('Menos de una vez por semana o necesita ayuda, enemas o supositorios'),0,'J');
	$pdf->MultiCell(196,4,'0 | INCONTINENTE: '.utf8_decode('Requiere pañal permanente'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(98,4,strtoupper(utf8_decode('Miccion')),0,0,'L',1);
	$pdf->Cell(98,4,strtoupper('Respuesta: ').$auxbtmiccion,0,0,'R',1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(196,4,'10 | CONTINENTE: '.utf8_decode('Ningun episodio de incontinencia, capaz de utilizar cualquier dispositivo por si solo'),0,'J');
	$pdf->MultiCell(196,4,'5 | ACCIDENTE OCASIONAL: '.utf8_decode('Maximo un episodio de incontinencia en 24 horas, incluye necesitar ayuda en la manipulacion de sondas y otros dispositivos'),0,'J');
	$pdf->MultiCell(196,4,'0 | INCONTINENTE: '.utf8_decode('Requiere pañal o sondas permanente'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(98,4,strtoupper(utf8_decode('Ir al Retrete')),0,0,'L',1);
	$pdf->Cell(98,4,strtoupper('Respuesta: ').$auxbtretrete,0,0,'R',1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(196,4,'10 | INDEPENDIENTE: '.utf8_decode('Entra y sale solo  y no necesita ayuda de otra persona'),0,'J');
	$pdf->MultiCell(196,4,'5 | NECESITA AYUDA: '.utf8_decode('Capaz de manejarse de una pequeña ayuda, capaz de usar el cuarto del baño. Puede limpiarse solo'),0,'J');
	$pdf->MultiCell(196,4,'0 | DEPENDIENTE: '.utf8_decode('Incapaz de manejarse sin ayuda'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(98,4,strtoupper(utf8_decode('Traslado Sillon-Cama')),0,0,'L',1);
	$pdf->Cell(98,4,strtoupper('Respuesta: ').$auxbttraslado,0,0,'R',1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(196,5,'15 | INDEPENDIENTE: '.utf8_decode('No precisa ayuda'),0,'J');
	$pdf->MultiCell(196,4,'10 | MINIMA AYUDA: '.utf8_decode('Incluye supervision verbal o pequeña ayuda fisica'),0,'J');
	$pdf->MultiCell(196,4,'5 | GRAN AYUDA: '.utf8_decode('Precisa la ayuda de una persona fuerte o entrenada'),0,'J');
	$pdf->MultiCell(196,4,'0 | DEPENDIENTE: '.utf8_decode('Necesita grua o alzamiento de dos personas, incapaz de permanecer sentado'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(98,4,strtoupper(utf8_decode('Deambulacion')),0,0,'L',1);
	$pdf->Cell(98,4,strtoupper('Respuesta: ').$auxbtdeambulacion,0,0,'R',1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(196,4,'15 | INDEPENDIENTE: '.utf8_decode('Puede andar 50 metros o su equivalente por casa sin ayuda ni supervision de otra persona. Puede usar ayuda instrumentales (muletas o baston). Excepto andador. Si utiliza protesis debde ser capaz de ponersela y quitarsela solo'),0,'J');
	$pdf->MultiCell(196,4,'10 | GRAN AYUDA: '.utf8_decode('Necesita supervision o una pequeña ayuda fisica por otra persona. Precisa utilizar andador'),0,'J');
	$pdf->MultiCell(196,4,'5 | MINIMA AYUDA: '.utf8_decode('(En silla de ruedas) en 50 metros. No requiere ayuda ni supervision'),0,'J');
	$pdf->MultiCell(196,4,'0 | DEPENDIENTE: '.utf8_decode('Inmovil'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(98,4,strtoupper(utf8_decode('Subir y Bajar Escaleras')),0,0,'L',1);
	$pdf->Cell(98,4,strtoupper('Respuesta: ').$auxbtescaleras,0,0,'R',1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(196,4,'10 | INDEPENDIENTE: '.utf8_decode('Capaz de subir y bajar un piso sin la ayuda ni supervision de otra persona'),0,'J');
	$pdf->MultiCell(196,4,'5 | NECESITA AYUDA: '.utf8_decode('Requiere de ayuda o supervision de otra persona'),0,'J');
	$pdf->MultiCell(196,4,'0 | DEPENDIENTE: '.utf8_decode('Incapaz de salvar escalones, requiere ascensor o rampa'),0,'J');
	$pdf->Ln(2);
	$aux="";
	$pdf->SetFont('Arial','',8);
	if($btnivel=="DT")
	{
		$aux="(Dependencia Total)";
	}
	else if($btnivel=="DG")
	{
		$aux="(Dependencia Grabe)";
	}
	else if($btnivel=="DM")
	{
		$aux="(Dependencia Moderada)";
	}
	else if($btnivel=="DL")
	{
		$aux="(Dependencia Leve)";
	}
	$pdf->MultiCell(190,4,'Total: '.$bttotal.' Nivel: '.$btnivel.utf8_decode($aux),0,'J');                                                      

	$pdf->Output('','HC-Barthel_'.$getfecha2.'-'.$gethora.'.pdf');
?>
<!-- </body>
</html> -->