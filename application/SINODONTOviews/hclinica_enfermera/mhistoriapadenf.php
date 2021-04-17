<?php
	header('Content-Type: text/html; charset=UTF-8');
	$campos = json_decode(json_encode($cn), True);
	foreach ($cn['hcpadenf'] as $fila)
	{
		$obldig=utf8_decode($fila->enf_pad_diagnosticos);//lista_diagnosticos diagnosticos
		$antecedentes=utf8_decode($fila->enf_pad_antecedentes);
		$valoracionsubjetiva=utf8_decode($fila->enf_pad_val_subjetiva);
		$svfc=utf8_decode($fila->enf_pad_sv_fc);
		$svfr=utf8_decode($fila->enf_pad_sv_fr);
		$svt=utf8_decode($fila->enf_pad_sv_t);
		$svta=utf8_decode($fila->enf_pad_svta);
		$svta_s=utf8_decode($fila->enf_pad_sv_sistole);
		$svta_d=utf8_decode($fila->enf_pad_sv_diastole);
		$svsaturacion=utf8_decode($fila->enf_pad_sv_saturacion);
		$svglucometria=utf8_decode($fila->enf_pad_sv_glucometria);

		$dom1p1=utf8_decode($fila->enf_pad_dom1_p1);
		$dom1p2=utf8_decode($fila->enf_pad_dom1_p2);
		$dom2nutricion=utf8_decode($fila->enf_pad_dom2_nutricion);
		$dom2otro=utf8_decode($fila->enf_pad_dom2_otro);
		$dom2mucosa=utf8_decode($fila->enf_pad_dom2_mucosa);
		$dom2dentadura=utf8_decode($fila->enf_pad_dom2_dentadura);
		$dom2piel=utf8_decode($fila->enf_pad_dom2_piel);
		$dom2hidratacion=utf8_decode($fila->enf_pad_dom2_hidratacion);
		$dom2adobmen=utf8_decode($fila->enf_pad_dom2_abdomen);
		$dom2rsls=utf8_decode($fila->enf_pad_dom2_rsls);
		$d2sng=utf8_decode($fila->enf_pad_dom2_sng);
		$dom2drenaje=utf8_decode($fila->enf_pad_dom2_drenaje);
		$d2caracteristicas=utf8_decode($fila->enf_pad_dom2_caracteristicas);
		//=utf8_decode($fila->enf_pad_dom2_gastrostomia);
		$dom3deposiciones=utf8_decode($fila->enf_pad_dom3_deposiciones);
		$dom3tipo=utf8_decode($fila->enf_pad_dom3_tipo);
		$dom3vomito=utf8_decode($fila->enf_pad_dom3_vomito);
		$d3caracteristicas=utf8_decode($fila->enf_pad_dom3_caracteristicas);
		$dom3colostomia=utf8_decode($fila->enf_pad_dom3_colostomia);
		$dom3oresis=utf8_decode($fila->enf_pad_dom3_oresis);
		$dom4dependencia=utf8_decode($fila->enf_pad_dom4_dependencia);
		$dom4sueno=utf8_decode($fila->enf_pad_dom4_sueno);
		$d4otros=utf8_decode($fila->enf_pad_dom4_sueno_otros);
		$dom4fiebre=utf8_decode($fila->enf_pad_dom4_fiebre);
		$d4tipo=utf8_decode($fila->enf_pad_dom4_tipo);
		$dom4movilidad=utf8_decode($fila->enf_pad_dom4_fisica);
		$d4movilidadetalle=utf8_decode($fila->enf_pad_dom4_fisica_descripcion);
		//=utf8_decode($fila->enf_pad_dom4_fisica_apoyo);
		$dom4muscular=utf8_decode($fila->enf_pad_dom4_muscular);
		$d4musculardetalle=utf8_decode($fila->enf_pad_dom4_muscular_descripcion);
		$dom4respiratorias=utf8_decode($fila->enf_pad_dom4_respiratorias);
		$d4capilar=utf8_decode($fila->enf_pad_dom4_llenado_capilar);
		$dom4pulso=utf8_decode($fila->enf_pad_dom4_pulso);
		$d4pulsofecha=utf8_decode($fila->enf_pad_dom4_pulso_f_implantacion);
		$dom4fr=utf8_decode($fila->enf_pad_dom4_fr);
		$d4frdetalle=utf8_decode($fila->enf_pad_dom4_fr_descripcion);
		$dom4ruidos=utf8_decode($fila->enf_pad_dom4_ruidos);
		$dom4tos=utf8_decode($fila->enf_pad_dom4_tos);
		$d4tostipo=utf8_decode($fila->enf_pad_dom4_tos_tipo);
		$dom4oxigeno=utf8_decode($fila->enf_pad_dom4_oxigenoterapia);
		$d4oxigenotipo=utf8_decode($fila->enf_pad_dom4_oxigenoterapia_tipo);
		$d4fio=utf8_decode($fila->enf_pad_dom4_fio);
		$d4tet=utf8_decode($fila->enf_pad_dom4_tet);
		$dom4traqueostomia=utf8_decode($fila->enf_pad_dom4_traqueostomia);

		$dom5escala=utf8_decode($fila->enf_pad_dom5_escala);
		$dom5escalaotro=utf8_decode($fila->enf_pad_dom5_escala_otro);
		$dom5conciencia=utf8_decode($fila->enf_pad_dom5_conciencia);
		$dconcienciaotro=utf8_decode($fila->enf_pad_dom5_otro);
		$dom5comunicacion=utf8_decode($fila->enf_pad_dom5_comunicacion);
		$d6comunicacionotro=utf8_decode($fila->enf_pad_dom5_comunicacion_otro);
		$dom6emocional=utf8_decode($fila->enf_pad_dom6_emocional);
		$dom6lenguaje=utf8_decode($fila->enf_pad_dom6_lenguaje);	
		$dom6escucha=utf8_decode($fila->enf_pad_dom6_escucha);
		$dom6d6vision=utf8_decode($fila->enf_pad_dom6_vision);
		$dom7familiares=utf8_decode($fila->enf_pad_dom7_familiares);
		$dom7maltrato=utf8_decode($fila->enf_pad_dom7_maltrato);
		$dom7equipo=utf8_decode($fila->enf_pad_dom7_equipo);
		$dom8civil=utf8_decode($fila->enf_pad_dom8_civil);
		$dom8paridad=utf8_decode($fila->enf_pad_dom8_paridad);
		$d8hijos=utf8_decode($fila->enf_pad_dom8_hijos);
		$d8vivos=utf8_decode($fila->enf_pad_dom8_vivos);
		$d8fallecidos=utf8_decode($fila->enf_pad_dom8_fallecidos);
		$dom8its=utf8_decode($fila->enf_pad_dom8_its);
		$d8especifique=utf8_decode($fila->enf_pad_dom8_especifique);
		$dom9respuesta=utf8_decode($fila->enf_pad_dom9_respuesta);
		$dom9intento=utf8_decode($fila->enf_pad_dom9_intento);
		$d9intentodetalle=utf8_decode($fila->enf_pad_dom9_intento_descripcion);
		$d10religion=utf8_decode($fila->enf_pad_dom10_religion);
		$dom10acepta=utf8_decode($fila->enf_pad_dom10_sanguinea);
		$dom10aceptaotro=utf8_decode($fila->enf_pad_dom10_sanguinea_descripcion);
		$dom10solicita=utf8_decode($fila->enf_pad_dom10_religiosa);
		$dom10solicitaotro=utf8_decode($fila->enf_pad_dom10_religiosa_descripcion);
		$dom11seguridad=utf8_decode($fila->enf_pad_dom11_seguridad);
		$d11otros=utf8_decode($fila->enf_pad_dom11_seguridad_otros);
		$dom11cutanea=utf8_decode($fila->enf_pad_dom11_cutanea);
		$d11localizacion=utf8_decode($fila->enf_pad_dom11_localizacion);
		$d11grado=utf8_decode($fila->enf_pad_dom11_grado);
		$dom11requerimientos=utf8_decode($fila->enf_pad_dom11_requerimientos);
		$dom11otros=utf8_decode($fila->enf_pad_dom11_requerimientos_otros);
		$dom12dolor=utf8_decode($fila->enf_pad_dom12_dolor);
		$d12nivel=utf8_decode($fila->enf_pad_dom12_dolor_nivel);
		$d12localizacion=utf8_decode($fila->enf_pad_dom12_dolor_localizacion);
		$dom12higiene=utf8_decode($fila->enf_pad_dom12_estado);
		$d12especifique=utf8_decode($fila->enf_pad_dom12_especifique);
		$d13peso=utf8_decode($fila->enf_pad_dom13_peso);
		$d13talla=utf8_decode($fila->enf_pad_dom13_talla);
		$d13cimc=utf8_decode($fila->enf_pad_dom13_imc);
		$dom13imc=utf8_decode($fila->enf_pad_dom13_cual);

		if($dom13imc)
		{
			if($dom13imc=="1")
			{
				$c13imc="Peso Insuficiente";
			}
			else if($dom13imc=="2")
			{
				$c13imc="Peso Normal";
			}
			else if($dom13imc=="3")
			{
				$c13imc="SobrePeso";
			}
			else if($dom13imc=="4")
			{
				$c13imc="Obesidad Clinica";
			}
			else if($dom13imc=="5")
			{
				$c13imc="Obesidad Mobida";
			}
		}
		else
		{
			$c13imc=".";
		}
		$cuidadog=utf8_decode($fila->enf_pad_detalle_g);
		$cuidadop=utf8_decode($fila->enf_pad_detalle_p);
		$cuidadoa=utf8_decode($fila->enf_pad_detalle_a);
		$cuidadoc=utf8_decode($fila->enf_pad_detalle_c);
		$cuidadonotas=utf8_decode($fila->enf_pad_notas_enfermeria);
		// $cuidadototal=utf8_decode($fila->enf_pad_total);
		$diagn2=utf8_decode($fila->enf_pad_diagnosticos_enfermera);
		$obfechapad=utf8_decode($fila->enf_pad_f_reg);
		$obhorapad=utf8_decode($fila->enf_pad_h_reg);
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
	$GLOBALS['obfechapad'] = $obfechapad;
	$GLOBALS['obhorapad'] = $obhorapad;
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
	if($cn['chc']=="1")
	{
		$GLOBALS['cuales'] = "PRIMERA VEZ";
	}
	else
	{
		$GLOBALS['cuales'] = "";
	}
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
			$this->Cell(198,4, strtoupper('HISTORIA CLINICA DE ENFERMERA '.$GLOBALS['cuales']),0,0,'C',true);
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
			$this->Cell(22,0,'Fecha Historia:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['obfechapad'],0,0,1);
			$this->Cell(6);
			$this->SetFont('Arial','B',8);
			$this->Cell(22,0,'Hora Historia:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['obhorapad'],0,0,1);
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
			$this->Cell(26,5,'Fecha Nacimiento:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(22,5,$GLOBALS['obfnac'],0,0,1);
			$this->Cell(10);
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
	$pdf->Cell(30,5,strtoupper('Antecedentes'),0,0,'',1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$antecedentes,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(66,5,strtoupper('Valoracion Subjetiva (estado general)'),0,0,'',1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$valoracionsubjetiva,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(36,5,strtoupper('Signos Vitales'),0,0,'',1);
	$pdf->Ln(5);
	$pdf->Cell(7,5,'FC:',0,0,1);
	$pdf->Cell(12,5,$svfc,0,0,1);
	$pdf->Cell(5);//espacio
	$pdf->Cell(7,5,'FR:',0,0,1);
	$pdf->Cell(12,5,$svfr,0,0,1);
	$pdf->Cell(12,5,utf8_decode('Sístole:'),0,0,1);
	$pdf->Cell(12,5,$svta_s,0,0,1);
	$pdf->Cell(12,5,utf8_decode('Diástole:'),0,0,1);
	$pdf->Cell(12,5,$svta_d,0,0,1);
	$pdf->Cell(7,5,utf8_decode('T°:'),0,0,1);
	$pdf->Cell(12,5,$svt,0,0,1);
	$pdf->Cell(3);
	$pdf->Cell(8,5,'TA:',0,0,1);
	$pdf->Cell(12,5,$svta,0,0,1);
	$pdf->Cell(3);
	$pdf->Cell(16,5,utf8_decode('Saturación:'),0,0,1);
	$pdf->Cell(12,5,$svsaturacion,0,0,1);
	// $pdf->Cell(5);
	$pdf->Cell(18,5,'Glucometria:',0,0,1);
	$pdf->Cell(15,5,$svglucometria,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(196,5,strtoupper('Dominio 1: Promocion de la Salud'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,utf8_decode('¿Que Sabe usted sobre su enfermedad?'),0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$dom1p1,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,utf8_decode('¿Nesecita mayor informacion sobre su enfermedad?'),0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$dom1p2,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(196,5,strtoupper('Dominio 2: Nutricion'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,utf8_decode('Alimentación: ').$dom2nutricion.'   Otros: '.$dom2otro,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(24,5,'Mucosa Oral:',0,0,1);
	$pdf->Cell(32,5,$dom2mucosa,0,0,1);
	$pdf->Cell(10);//espacio
	$pdf->Cell(20,5,'Dentadura:',0,0,1);
	$pdf->Cell(12,5,$dom2dentadura,0,0,1);
	$pdf->Cell(40);
	$pdf->Cell(9,5,utf8_decode('Piel:'),0,0,1);
	$pdf->Cell(12,5,$dom2piel,0,0,1);
	$pdf->Cell(10);
	$pdf->Ln(5);
	$pdf->Cell(22,5,'Hidratacion:',0,0,1);
	$pdf->Cell(12,5,$dom2hidratacion,0,0,1);
	$pdf->Cell(32);
	$pdf->Cell(18,5,'Abdomen:',0,0,1);
	$pdf->Cell(12,5,$dom2adobmen,0,0,1);
	$pdf->Cell(42);
	$pdf->Cell(10,5,'Rsls:',0,0,1);
	$pdf->Cell(12,5,$dom2rsls,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'SNG: Residuo Gastrico: '.$d2sng,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Drenaje: '.$dom2drenaje.'   Caracteristicas: '.$d2caracteristicas,0,0,1);
	$pdf->Ln(5);
	// $pdf->Cell(190,5,'Gastrostomia: ',0,0,1);
	// $pdf->Ln(6);
	$pdf->Cell(196,5,strtoupper('Dominio 3: Eliminacion'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Deposicion: '.utf8_decode($dom3deposiciones).'   Tipo: '.$dom3tipo,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Vomito: '.$dom3vomito.'   Caracteristicas: '.$d3caracteristicas,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Colostomia: '.$dom3colostomia.'      Diuresis: '.$dom3oresis,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(196,5,strtoupper('Dominio 4: Actividad y Reposo'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Grado de dependencia: '.$dom4dependencia,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,utf8_decode('Sueño: ').$dom4sueno.'   Observaciones: '.$d4otros,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Fiebre: '.$dom4fiebre.'   Tipo: '.$d4tipo,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Movilidad Fisica: '.$dom4movilidad,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Observaciones: '.$d4movilidadetalle,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Fuerza Muscular: '.$dom4muscular,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Observaciones: '.$d4musculardetalle,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Respuestas Cardiovasculares Respiratorias: '.$dom4respiratorias,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'llenado Capilar: '.$d4capilar,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Pulso: '.$dom4pulso.'   Fecha implantacion: '.$d4pulsofecha,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'FR: '.$dom4fr.'   : '.$d4frdetalle,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Ruidos Respiratorios: '.$dom4ruidos,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Tos: '.$dom4tos.'   Tipo: '.$d4tostipo,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Oxigenoterapia: '.$dom4oxigeno.' Tipo: '.$d4oxigenotipo,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'FIO2: '.$d4fio,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'TET: '.$d4tet,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Traqueostomia: '.$dom4traqueostomia,0,0,1);
	$pdf->Ln(5);
	// if($pdf->GetY()>260)
	// {
	// 	$pdf->Ln(40);
	// }
	$pdf->Cell(196,5,strtoupper('Dominio 5: Percepcion Cognicion'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Estado de Glasgow: '.$dom5escala,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Detalle: '.$dom5escalaotro,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Estado de Conciencia: '.$dom5conciencia,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Detalle: '.$dconcienciaotro,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Comunicacion: '.$dom5comunicacion,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Detalle: '.$d6comunicacionotro,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,strtoupper('Dominio 6: Autopercepcion'),0,0,'C',1);
	$pdf->Ln(5);
	// $pdf->Cell(30,5,'Estado Emocinal: ',0,0,1);
	// $pdf->Ln(5);
	$pdf->Cell(196,5,'Estado Emocinal: '.$dom6emocional,0,0,1);
	$pdf->Ln(5);
	// $pdf->Cell(20,5,'Lenguaje: ',0,0,1);
	// $pdf->Ln(5);
	$pdf->Cell(196,5,'Lenguaje: '.$dom6lenguaje,0,0,1);
	$pdf->Ln(5);
	// $pdf->Cell(18,5,'Escucha: ',0,0,1);
	// $pdf->Ln(5);
	$pdf->Cell(196,5,'Escucha: '.$dom6escucha,0,0,1);
	$pdf->Ln(5);
	// $pdf->Cell(16,5,'Vision: ',0,0,1);
	// $pdf->Ln(5);
	$pdf->Cell(196,5,'Vision: '.$dom6d6vision,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(196,5,strtoupper('Dominio 7: Rol/Relaciones'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(30,5,'Con familiares: ',0,0,1);
	$pdf->Cell(60,5,$dom7familiares,0,0,1);
	$pdf->Cell(32,5,'Con equipo salud: ',0,0,1);
	$pdf->Cell(60,5,$dom7equipo,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Tipo de Maltrato: '.$dom7maltrato,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(196,5,strtoupper('Dominio 8: Sexualidad'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(90,5,'Estado Civil: '.$dom8civil,0,0,1);
	$pdf->Cell(16,5,'Paridad:',0,0,1);
	$pdf->Cell(20,5,$dom8paridad,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(12,5,'Hijos: ',0,0,1);
	$pdf->Cell(70,5,$d8hijos,0,0,1);
	$pdf->Cell(8);
	$pdf->Cell(12,5,'G: ',0,0,1);
	$pdf->Cell(60,5,$cuidadog,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(12,5,'Vivos: ',0,0,1);
	$pdf->Cell(70,5,$d8vivos,0,0,1);
	$pdf->Cell(8);
	$pdf->Cell(12,5,'P: ',0,0,1);
	$pdf->Cell(60,5,$cuidadop,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(20,5,'Fallecidos: ',0,0,1);
	$pdf->Cell(70,5,$d8fallecidos,0,0,1);
	$pdf->Cell(12,5,'A: ',0,0,1);
	$pdf->Cell(60,5,$cuidadoa,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(90);
	$pdf->Cell(12,5,'C: ',0,0,1);
	$pdf->Cell(60,5,$cuidadoc,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Antecedentes ITS: '.$dom8its.'   Especifique: '.$d8especifique,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(196,5,strtoupper('Dominio 9: Afrontamiento - Tolerancia'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Respuesta a la atencion domiciliaria: '.$dom9respuesta,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Antecedente de intento de suicidio: '.$dom9intento.'   : '.$d9intentodetalle,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(196,5,strtoupper('Dominio 10: Principios Vitales'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(16,5,'Religion: ',0,0,1);
	$pdf->Cell(180,5,$d10religion,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(38,5,'Acepta tranfusion sanguinea: ',0,0,1);
	$pdf->Cell(144,5,$dom10acepta.'   Detalle: '.$dom10aceptaotro,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(32,5,'Solicita ayuda religiosa: ',0,0,1);
	$pdf->Cell(154,5,$dom10solicita.'   Detalle: '.$dom10solicitaotro,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(196,5,strtoupper('Dominio 11: Seguridad y Protecion'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Dispositivo: '.$dom11seguridad.'   Otros: '.$d11otros,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Integridad cutanea: '.$dom11cutanea,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(26,5,'Localizacion: ',0,0,1);
	$pdf->Cell(64,5,$d11localizacion,0,0,1);
	$pdf->Cell(16,5,'Grado: ',0,0,1);
	$pdf->Cell(60,5,$d11grado,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Requerimientos: '.$dom11requerimientos,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Otros: '.$dom11otros,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(196,5,strtoupper('Dominio 12: Confort'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(18,5,'Dolor: '.$dom12dolor,0,0,1);
	$pdf->Cell(12,5,'Nivel: ',0,0,1);
	$pdf->Cell(60,5,$d12nivel,0,0,1);
	$pdf->Cell(24,5,'Localizacion: ',0,0,1);
	$pdf->Cell(60,5,$d12localizacion,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Estado Higiene: '.$dom12higiene.'   Especifique: '.$d12especifique,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(196,5,strtoupper('Dominio 13: Crecimiento y Desarrollo'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(10,5,'Peso: ',0,0,1);
	$pdf->Cell(40,5,$d13peso,0,0,1);
	$pdf->Cell(12,5,'Talla: ',0,0,1);
	$pdf->Cell(40,5,$d13talla,0,0,1);
	$pdf->Cell(9,5,'IMC: ',0,0,1);
	$pdf->Cell(40,5,$d13cimc,0,0,1);
	$pdf->Cell(26,5,' : '.$c13imc,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(196,5,strtoupper('Notas de enfermera'),0,0,'C',1);
	$pdf->Ln(5);
	// $pdf->Cell(22,5,'PFEIFFER:',0,0,1);
	// $pdf->Cell(32,5,$cuidadopfeiffer,0,0,1);
	// $pdf->Cell(20,5,'BARTHEL:',0,0,1);
	// $pdf->Cell(34,5,$cuidadobarthel,0,0,1);
	// $pdf->Cell(20,5,utf8_decode('NORTON:'),0,0,1);
	// $pdf->Cell(20,5,$cuidadonorton,0,0,1);
	// $pdf->Ln(5);
	// $pdf->Cell(24,5,'BRADEN Q:',0,0,1);
	// $pdf->Cell(30,5,$cuidadobraden,0,0,1);
	// $pdf->Cell(24,5,'KARNOSKY:',0,0,1);
	// $pdf->Cell(30,5,$cuidadokarnosky,0,0,1);
	// $pdf->Cell(14,5,'Total:',0,0,1);
	// $pdf->Cell(20,5,$cuidadototal,0,0,1);
	$pdf->Ln(2);
	$pdf->Cell(36,5,strtoupper('Diagnosticos'),0,0,'',1);
	// $pdf->Ln(4);
	// $pdf->SetFont('Arial','',8);
	// $porciones = explode(";", $diagn2);
	$pdf->Ln(6);
	$pdf->Cell(12,4,"NANDA",1,0,'J');
	$pdf->Cell(184,4,strtoupper("Diagnosticos"),1,0,'');
	$pdf->SetFont('Arial','',8);
	$porciones = explode(";", $diagn2);
	$pdf->Ln(3);
	$tty=$pdf->GetY();
	$alto=$tty+2;//84
	$conta=0;
	$ellargo=(count($porciones)-1)*6;
	$unsalto=0;
	if($ellargo==0)
	{
		$pdf->MultiCell(196,5,$diagn2,0,'L');
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
	// $pdf->MultiCell(190,$ellargo,'',1,'L');
	$pdf->Ln(2+$unsalto);
	$pdf->SetY($pdf->GetY());
	$pdf->Ln(6);
	// $pdf->SetY($pdf->GetY());
	$pdf->Cell(22,5,'Notas de Enfermeria:',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$cuidadonotas,0,'L');
	$pdf->Ln(14);
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

	$pdf->Output('','HC_Enf_'.$getfecha2.'-'.$gethora.'.pdf');
?>
<!-- </body>
</html> -->