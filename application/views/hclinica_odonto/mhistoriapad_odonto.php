<?php
	header('Content-Type: text/html; charset=UTF-8');
	$campos = json_decode(json_encode($cn), True);
	foreach ($cn['hcpad'] as $fila)
	{

		$emotivo=utf8_decode($fila->evolucion_motivo_consulta);
		$eenfactual=utf8_decode($fila->evolucion_enfermedad_actual);
		$etmedico=utf8_decode($fila->evolucion_t_medico);
		$ealimentos=utf8_decode($fila->evolucion_i_alimentos);
		$ealergicos=utf8_decode($fila->evolucion_r_alergicas);
		$eanestecia=utf8_decode($fila->evolucion_anestecia);
		$eantibiotico=utf8_decode($fila->evolucion_antibiotico);
		$ehemorragias=utf8_decode($fila->evolucion_hemorragias);
		$eirradiaciones=utf8_decode($fila->evolucion_irradiaciones);
		$eenfrespiratoria=utf8_decode($fila->evolucion_enf_respiratoria);
		$ecardiopatias=utf8_decode($fila->evolucion_cardiopatias);
		$eartritis=utf8_decode($fila->evolucion_artritis);
		$eterapia=utf8_decode($fila->evolucion_terapia);
		$ehepatitis=utf8_decode($fila->evolucion_hepatitis);
		$eembarazo=utf8_decode($fila->evolucion_embarazo);
		$erenal=utf8_decode($fila->evolucion_enf_renal);
		$egastro=utf8_decode($fila->evolucion_gastro);
		$equirurgico=utf8_decode($fila->evolucion_ante_quirurgicos);
		$eosteo=utf8_decode($fila->evolucion_osteo);
		$eotros=utf8_decode($fila->evolucion_otros);
		$eobserva=utf8_decode($fila->evolucion_observa);

		$ecepillado=utf8_decode($fila->evolucion_cepillado);
		$ecrema=utf8_decode($fila->evolucion_crema);
		$enormal=utf8_decode($fila->evolucion_normalidad);
		$ebebida=utf8_decode($fila->evolucion_bebida_frecu);
		$emasas=utf8_decode($fila->evolucion_masas_no_azucar_frec);
		$ecaramelo=utf8_decode($fila->evolucion_caramelo_frec);
		$eazucar=utf8_decode($fila->evolucion_azucar_frec);
		$ealcohol=utf8_decode($fila->evolucion_alcohol_frec);
		$efuma=utf8_decode($fila->evolucion_cigarro_frec);		
		$efecha=utf8_decode($fila->evolucion_f_reg);
		$ehora=utf8_decode($fila->evolucion_h_reg);
		$ecreador=utf8_decode($fila->evoluciuon_created_user);
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
		$medico_nombres=utf8_decode($fila->registro_nombres);
		$medico_apellidos=utf8_decode($fila->registro_apellidos);
		$medico_registro=$fila->registro_n_medico;
		$medico_documento=$fila->registro_doc;
		$medico_especialidad=utf8_decode($fila->registro_especialidad);
	}
	$nommedico=	ucwords($medico_nombres).', '.ucwords($medico_apellidos);

	$imprimir2="";
	if($cn['visita']=="0")
	{
		$imprimir2="0";
	
	}
	else
	{
		$imprimir2="1";
		foreach ($cn['hcvisita'] as $fila)
		{
			$auxfecha=$fila->visita_fecha;
			$auxhora=$fila->visita_hora;
			$auxnota=$fila->visita_nota;
			$obfechavisita=$fila->visita_f_reg;
		}
	}

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
	$GLOBALS['obfechahistoria'] = $obfechahistoria;
	$GLOBALS['obhorahistoria'] = $obhorahistoria;
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
			$this->Cell(198,4, strtoupper('HISTORIA CLINICA GENERAL'),0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->Cell(198,4, 'Procesos de Apoyo',0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->Cell(198,4,utf8_decode('Gestión de la Información'),0,0,'C',true);
			$this->Cell(158);
			$this->SetY(2);
			$this->SetX(0);
			$this->Image(base_url().'assets/img/logo.png',16,2,40);
			$this->Image(base_url().'assets/img/logo4.png',168,2,25);

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
			$this->Cell(18,0,'F.Historia:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['obfechahistoria'],0,0,1);
			$this->Cell(10);
			$this->SetFont('Arial','B',8);
			$this->Cell(18,0,'H.Historia:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['obhorahistoria'],0,0,1);
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
			// $this->Cell(46,4,strtoupper('Datos del Paciente'),0,0,'',1);
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
			
			
			$this->Cell(12);
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
	$pdf->AddPage('P','Letter');//'P','A4',0
	$esp=6;
	$esp2=7;
	$esp3=2;


	$pdf->SetFillColor(232,232,232);

	$pdf->Ln($esp3);
	$pdf->Cell(30,5,strtoupper('Motivo Consulta'),0,0,'',1);
	$pdf->Ln($esp);
	$pdf->MultiCell(190,5,$emotivo,0,'L');
	$pdf->Ln(2);
	$pdf->Cell(35,5,strtoupper('Enfermedad Actual'),0,0,'',1);
	$pdf->Ln($esp);
	$pdf->SetX(10);
	$pdf->MultiCell(190,5,$eenfactual,0,'L');
	$pdf->Ln(2);
	// $pdf->Ln($esp2);
	$pdf->Cell(25,5,strtoupper('ANTECEDENTES PERSONALES'),0,0,'',1);
	$pdf->Ln($esp);
	$pdf->MultiCell(190,5,'Tratamiento Médico: '.$atratamiento,0,'L');
	$pdf->MultiCell(190,5,'Ingestion de Alimentos: '.$ealimentos,0,'L');
	$pdf->MultiCell(190,5,'Reacciones Alergicas: '.$ealergicos,0,'L');
	$pdf->MultiCell(190,5,'Anestesia: '.$eanestecia,0,'L');
	$pdf->MultiCell(190,5,'Antibioticos: '.$eantibiotico,0,'L');
	$pdf->MultiCell(190,5,'Hemorrgias: '.$ehemorragias,0,'L');
	$pdf->MultiCell(190,5,'Radiaciones: '.$eirradiaciones,0,'L');
	$pdf->MultiCell(190,5,'Enf. Respiratoria: '.$eenfrespiratoria,0,'L');
	$pdf->MultiCell(190,5,'Cardiopatias: '.$ecardiopatias,0,'L');
	$pdf->MultiCell(190,5,'Artritis: '.$eartritis,0,'L');
	$pdf->Ln(3);//2
	$pdf->Cell(40,5,strtoupper('Terapia Anticuagualante'),0,0,'',1);
	// $pdf->Rect(9,148,192,45);
	$pdf->Ln(6);
	$pdf->Cell(190,5,'Hepatitis: '.$ehepatitis,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Embarazo: '.$eembarazo,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Enmfermedades Renales: '.$erenal,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'GastroIntestinales: '.$egastro,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Antecedentes Quirugicos: '.$equirurgico,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Osteoporosis: '.$eosteo,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Otros: '.$eotros,0,0,1);
	$pdf->Ln(5);

	$pdf->Cell(35,5,strtoupper('HABITOS ODONDOLOGICOS'),0,0,'',1);
	$pdf->Ln($esp);
	$pdf->MultiCell(190,5,'Cepillado: '.$ecepillado,0,'L');
	$pdf->MultiCell(190,5,'Usa Crema Dental: '.$ecrema,0,'L');
	$pdf->MultiCell(190,5,'Habitos Normales: '.$enormal,0,'L');


	$pdf->Cell(40,5,strtoupper('GRADO DE CARIOGENICIDAD'),0,0,'',1);
	$pdf->Ln($esp);
	$pdf->MultiCell(190,5,'Toma Bebidas Azucaradas: '.$ebebida,0,'L');
	$pdf->MultiCell(190,5,'Toma Masas No Azucaradas: '.$emasas,0,'L');
	$pdf->MultiCell(190,5,'Come Caramelos: '.$ecaramelo,0,'L');
	$pdf->MultiCell(190,5,'Toma Masas Azucaradas: '.$emasas,0,'L');
	$pdf->MultiCell(190,5,'Toma Azucar: '.$eazucar,0,'L');
	$pdf->MultiCell(190,5,'Bebe Alcohol Frecuentemente: '.$ealcohol,0,'L');
	$pdf->MultiCell(190,5,'Fuma: '.$efuma,0,'L');


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


	$pdf->Output('','HC-Odontologica_'.$getfecha2.'-'.$gethora.'.pdf');
?>
<!-- </body>
</html> -->