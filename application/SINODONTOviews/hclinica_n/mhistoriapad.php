<?php
	header('Content-Type: text/html; charset=UTF-8');
	$campos = json_decode(json_encode($cn), True);
	foreach ($cn['hcpad'] as $fila)
	{
		$obmotivo=utf8_decode($fila->pad_mconsulta);
		$enfactual=utf8_decode($fila->pad_enf_actual);
		$apatologicos=utf8_decode($fila->pad_a_patologicos);
		$aquirurgicos=utf8_decode($fila->pad_a_quirurgicos);
		$afarmacologicos=utf8_decode($fila->pad_a_farmacologicos);
		$aalergicos=utf8_decode($fila->pad_a_alergicos);
		$atraumaticos=utf8_decode($fila->pad_a_traumaticos);
		$afamiliares=utf8_decode($fila->pad_a_familiares);
		$atransfucionales=utf8_decode($fila->pad_a_transfusionales);
		$aginecologicos=utf8_decode($fila->pad_a_ginecologicos);
		$aexposicionales=utf8_decode($fila->pad_a_exposicionales);
		$aotros=utf8_decode($fila->pad_a_otros);
		$endocrinologico=utf8_decode($fila->pad_endocrinologico);
		$organos=utf8_decode($fila->pad_organos);
		$cardiopulmonar=utf8_decode($fila->pad_cardiopulmonar);
		$gastrointestinal=utf8_decode($fila->pad_gastrointestinal);
		$rvsgenitourinario=utf8_decode($fila->pad_genitourinario);
		$osteomuscular=utf8_decode($fila->pad_osteomuscular);
		$neurologico=utf8_decode($fila->pad_neurologico);
		$farenas=utf8_decode($fila->pad_pielyfarenas);
		$rvsotros=utf8_decode($fila->pad_rxs_otros);
		if($fila->pad_e_general=="NF")
		{
			$tipoegeneral='Normal';
		}
		else if($fila->pad_e_general=="B")
		{
			$tipoegeneral='Bueno';
		}
		else if($fila->pad_e_general=="A")
		{
			$tipoegeneral='Aceptable';
		}
		else if($fila->pad_e_general=="R")
		{
			$tipoegeneral='Regular';
		}
		else if($fila->pad_e_general=="M")
		{
			$tipoegeneral='Malo';
		}
		if($fila->pad_e_conciencia=="NF")
		{
			$tipoeconciencia='Normal';
		}
		else if($fila->pad_e_conciencia=="0")
		{
			$tipoeconciencia='Alerta';
		}
		else if($fila->pad_e_conciencia=="1")
		{
			$tipoeconciencia='Somnoliento';
		}
		else if($fila->pad_e_conciencia=="2")
		{
			$tipoeconciencia='Estupor';
		}
		else if($fila->pad_e_conciencia=="3")
		{
			$tipoeconciencia='Confuso';
		}
		else if($fila->pad_e_conciencia=="4")
		{
			$tipoeconciencia='Comnubilado';
		}
		else if($fila->pad_e_conciencia=="5")
		{
			$tipoeconciencia='Coma';
		}
		else if($fila->pad_e_conciencia=="6")
		{
			$tipoeconciencia='Fallecido';
		}
		if($fila->pad_e_hidratacion=="NF")
		{
			$tipoehidratacion='Normal';
		}
		else if($fila->pad_e_hidratacion=="0")
		{
			$tipoehidratacion='Hidratado';
		}
		else if($fila->pad_e_hidratacion=="1")
		{
			$tipoehidratacion='D. Leve';
		}
		else if($fila->pad_e_hidratacion=="2")
		{
			$tipoehidratacion='D. Moderado';
		}
		else if($fila->pad_e_hidratacion=="3")
		{
			$tipoehidratacion='D. Severa';
		}
		$erespiratorio=utf8_decode($fila->pad_e_respiratorio);
		$fr=utf8_decode($fila->pad_fr);
		$fc=utf8_decode($fila->pad_fc);
		$ta=utf8_decode($fila->pad_ta);
		$temp=utf8_decode($fila->pad_te);
		$sac=utf8_decode($fila->pad_sac);
		$gluc=utf8_decode($fila->pad_gluc);
		$cabeza=utf8_decode($fila->pad_cabeza);
		$ojos=utf8_decode($fila->pad_ojos);
		$boca=utf8_decode($fila->pad_boca);
		$cuello=utf8_decode($fila->pad_cuello);
		$torax=utf8_decode($fila->pad_torax);
		$cpulmonar=utf8_decode($fila->pad_c_pulmonar);
		$abdomen=utf8_decode($fila->pad_abdomen);
		$genitourinario=utf8_decode($fila->pad_e_genitourinario);
		$extremidades=utf8_decode($fila->pad_extremidades);
		$snc=utf8_decode($fila->pad_snc);
		$mental=utf8_decode($fila->pad_mental);
		$piel=utf8_decode($fila->pad_piel);
		$otros=utf8_decode($fila->pad_examen_otros);
		$auxvenoso=utf8_decode($fila->pad_acceso_venoso);
		$accateter=utf8_decode($fila->pad_estado_cateter);
		$acfinsercion=utf8_decode($fila->pad_f_insercion);
		$auxostomia=utf8_decode($fila->pad_ostomia);
		$oeostomina=utf8_decode($fila->pad_estado_ostomia);
		$ocualostomina=utf8_decode($fila->pad_cual_ostomia);
		$ofostomina=utf8_decode($fila->pad_f_ostomia);
		$auxsonda=utf8_decode($fila->pad_sondas);
		$sondaestado=utf8_decode($fila->pad_estado_sonda);
		$cualsonda=utf8_decode($fila->pad_cual_sonda);
		$sfpostura=utf8_decode($fila->pad_f_postura_sonda);
		$edregion=utf8_decode($fila->pad_dolor_region);
		$edirradiacion=utf8_decode($fila->pad_dolor_irradiacion);
		$dolorn=utf8_decode($fila->pad_dolor_nivel);
		$auxdolor=utf8_decode($fila->pad_dolor_cual);
		$auxtipodolor=utf8_decode($fila->pad_tipo_dolor);
		$auxtp=utf8_decode($fila->pad_tratamiento_previo);
		$cualtprevio=utf8_decode($fila->pad_cual_dolor);
		if($fila->pad_alivio=="NF")
		{
			$tpalivio='No Refiere';
		}
		else if($fila->pad_alivio=="N")
		{
			$tpalivio='Nada';
		}
		else if($fila->pad_alivio=="P")
		{
			$tpalivio='Poco';
		}
		else if($fila->pad_alivio=="B")
		{
			$tpalivio='Bastante';
		}
		else if($fila->pad_alivio=="M")
		{
			$tpalivio='Mucho';
		}
		$uparaclinico=utf8_decode($fila->pad_r_paraclinico);
		$planmedicoactual=utf8_decode($fila->pad_plan_manejo_medico_actual);
		$oblmed=utf8_decode($fila->pad_medicamentos);
		$analisis=utf8_decode($fila->pad_analisis);
		$obldig=utf8_decode($fila->pad_diagnosticos);//lista_diagnosticos diagnosticos
		$auxaycmedico=utf8_decode($fila->pad_ac_medico);
		$aycmedicodt=utf8_decode($fila->pad_ac_medico_detalle);
		$auxaycenfermera=utf8_decode($fila->pad_ac_enfermera);
		$aycenfermeradt=utf8_decode($fila->pad_ac_enfermera_detalle);
		$auxayctsocial=utf8_decode($fila->pad_ac_trabajo_social);
		$ayctsocialdt=utf8_decode($fila->pad_ac_trabajo_social_detalle);
		$auxaycnutricion=utf8_decode($fila->pad_ac_nutricion);
		$aycnutriciondt=utf8_decode($fila->pad_ac_nutricion_detalle);
		$auxaycfisioterapia=utf8_decode($fila->pad_ac_fisioterapia);
		$aycfisioterapiadt=utf8_decode($fila->pad_ac_fisioterapia_detalle);
		$auxayctrespiratoria=utf8_decode($fila->pad_t_respiratoria);
		$ayctrespiratoriadt=utf8_decode($fila->pad_t_respiratoria_detalle);
		$auxayctocupacional=utf8_decode($fila->pad_t_ocupacional);
		$ayctocupacionaldt=utf8_decode($fila->pad_t_ocupacional_detalle);
		$auxayctlenguaje=utf8_decode($fila->pad_t_lenguaje);
		$ayctlenguajedt=utf8_decode($fila->pad_t_lenguaje_detalle);
		$auxauxenfermeria=utf8_decode($fila->pad_aux_enfermeria);
		$otroenfermeria=utf8_decode($fila->pad_aux_otro);
		$auxayceducacion=utf8_decode($fila->pad_educacion);
		$ayceducaciondt=utf8_decode($fila->pad_educacion_detalle);
		$esasdolor=utf8_decode($fila->pad_esas_dolor);
		$esascansancio=utf8_decode($fila->pad_esas_cansancio);
		$esasnauseas=utf8_decode($fila->pad_esas_nauseas);
		$esastristesa=utf8_decode($fila->pad_esas_tristeza);
		$esasangustia=utf8_decode($fila->pad_esas_angustia);
		$esassomnolencia=utf8_decode($fila->pad_esas_somnolencia);
		$esasapetito=utf8_decode($fila->pad_esas_apetito);
		$esasdisnea=utf8_decode($fila->pad_esas_disnea);
		$esasinsomnio=utf8_decode($fila->pad_esas_insomnio);
		$esasestrenimiento=utf8_decode($fila->pad_esas_estrenimiento);
		$esasbienestar=utf8_decode($fila->pad_esas_bienestar);
		$ecafdisconfort=utf8_decode($fila->pad_ecaf_gestos);
		$ecafquebido=utf8_decode($fila->pad_ecaf_quebido);
		$ecafgrito=utf8_decode($fila->pad_ecaf_grito);
		$ecafarea=utf8_decode($fila->pad_ecaf_tocando);
		$ecafmovimiento=utf8_decode($fila->pad_ecaf_movimiento);
		$ecafrespiracion=utf8_decode($fila->pad_ecaf_respiracion);
		$ecaftotal=utf8_decode($fila->pad_ecaf_total);
		$ik=utf8_decode($fila->pad_ik);
		$ecog=utf8_decode($fila->pad_ecog);
		$pps=utf8_decode($fila->pad_pps);
		$mdas=utf8_decode($fila->pad_mdas);
		$cam=utf8_decode($fila->pad_cam);
		$ramsay=utf8_decode($fila->pad_ramsay);
		$observaciones=utf8_decode($fila->pad_ecaf_observaciones);
		$obfechahistoria=utf8_decode($fila->pad_f_reg);
		$obhorahistoria=utf8_decode($fila->pad_h_reg);
		$programaingresa=utf8_decode($fila->pad_plan_manejo_programa);
		$snoxigeno=utf8_decode($fila->pad_plan_manejo_oxigeno);
		$snoxigenodetalle=utf8_decode($fila->pad_plan_manejo_oxigenodetalle);
		$pmdieta=utf8_decode($fila->pad_plan_manejo_dieta);
		$pmparaclinicos=utf8_decode($fila->pad_paraclinicos);
		$pmparaclinicosdetalle=utf8_decode($fila->pad_paraclinicos_detalle);
		$pmvaloraciones=utf8_decode($fila->pad_pm_valoraciones);
		$pmrecomendaciones=utf8_decode($fila->pad_pm_recomendaciones);
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
	$GLOBALS['direccion'] = "Av. Calle 6 # 78 - 11  --  Telefonos: 3827732 - 3827231 - 3827230";
	$GLOBALS['desarrolladopor'] = "Correo: compcasa-sas@hotmail.com";
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
			$this->Cell(198,4,'COMPA�IA CALIDAD Y CUIDADO EN SALUD ',0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->SetFont('Arial','',8);
			$this->Cell(198,4,strtoupper('COMPCASA SAS IPS'),0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->SetFont('Arial','',8);
			$this->Cell(198,4, strtoupper('HISTORIA CLINICA'),0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->Cell(198,4, 'Procesos de Apoyo',0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->Cell(198,4, 'Gesti�n de la Informaci�n ',0,0,'C',true);
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

    // $pdf = $this->plte->getInstance(); //2 metodo
    
    // require_once APPPATH.'views/hclinica/pltencabezado.php'; //3 metodo funciona pero sin datos
    // $pdf = $this->pdf->getInstance();
    $pdf=new PDF();
  	// ob_end_clean();
	// $fpdf->Open();
	$pdf->AliasnbPages();
	$pdf->AddPage('P','Letter');//'P','A4',0
	$esp=6;
	$esp2=7;
	$esp3=2;
	// $pdf->SetFont('Arial','B',15);
	// $pdf->Cell(65);
	// $pdf->Cell(40,0,'HISTORIA CLINICA',0,0,1);
	// $pdf->SetFont('Arial','',10);
	// $pdf->Cell(85,2,'',0,1,'R');#crear una variable para dar el numero de historia
	// $pdf->SetFont('Arial','',13);
	// $pdf->Cell(180,5, 'Dr. '.utf8_decode($nommedico),0,1,'C');
	// $pdf->SetFont('Arial','',11);
	// $pdf->Cell(180,5, strtoupper('Ingreso al Pad'),0,1,'C');
	// $pdf->Cell(180,5, 'Universidad de Nombreuniversidad',0,1,'C');
	// $pdf->Cell(180,4, 'RM 00-00',0,1,'C');

	// $pdf->SetY(2);
	// $pdf->SetX(0);
	// $pdf->Image(base_url().'assets/img/logo.png',16,2,30);
	// $pdf->Ln(34);


	// $col1=34;
	// $col2=40;
	// $col3=46;
	// $col4=68;
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
	$pdf->Cell(30,5,strtoupper('Motivo Consulta'),0,0,'',1);
	$pdf->Ln($esp);
	$pdf->Cell(160,5,$obmotivo,0,0,1);
	$pdf->Ln($esp2);
	$pdf->Cell(35,5,strtoupper('Enfermedad Actual'),0,0,'',1);
	$pdf->Ln($esp);
	$pdf->SetX(10);
	$pdf->MultiCell(190,5,$enfactual,0,'L');
	$pdf->Ln(2);
	// $pdf->Ln($esp2);
	$pdf->Cell(25,5,strtoupper('ANTECEDENTES'),0,0,'',1);
	$pdf->Ln($esp);
	$pdf->MultiCell(190,5,'A. Patologicos: '.$apatologicos,0,'L');
	$pdf->MultiCell(190,5,'A. Quirurgicos: '.$aquirurgicos,0,'L');
	$pdf->MultiCell(190,5,'A. Farmacologicos: '.$afarmacologicos,0,'L');
	$pdf->MultiCell(190,5,'A. Alergicos: '.$aalergicos,0,'L');
	$pdf->MultiCell(190,5,'A. Traumaticos: '.$atraumaticos,0,'L');
	$pdf->MultiCell(190,5,'A. Familiares: '.$afamiliares,0,'L');
	$pdf->MultiCell(190,5,'A. Transfusionales: '.$atransfucionales,0,'L');
	$pdf->MultiCell(190,5,'A. Ginecologicos: '.$aginecologicos,0,'L');
	$pdf->MultiCell(190,5,'A. Exposicionales: '.$aexposicionales,0,'L');
	$pdf->MultiCell(190,5,'A. Otros: '.$aotros,0,'L');
	$pdf->Ln(3);//2
	$pdf->Cell(40,5,strtoupper('Revision por Sistemas'),0,0,'',1);
	// $pdf->Rect(9,148,192,45);
	$pdf->Ln(6);
	$pdf->Cell(190,5,'Endocrinologico: '.$endocrinologico,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Organos: '.$organos,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Cardio Pulmonar: '.$cardiopulmonar,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Gastrointestinal: '.$gastrointestinal,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Genitourinario: '.$rvsgenitourinario,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Osteo Muscular: '.$osteomuscular,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Neurologico: '.$neurologico,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Piel y Farenas: '.$farenas,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Otros: '.$rvsotros,0,0,1);
	$pdf->Ln(8);
	// /*la solucion es determinar el n de caracteres de ser mayor a limite se imprimer con un subtring y asi se evita el probema
	// lo otro seria dejarlo asi para que sea dinamico*/
	$pdf->Cell(30,5,strtoupper('Examen Fisico'),0,0,'',1);
	// $pdf->Rect(9,200,192,75);
	$pdf->Ln(6);
	$pdf->Cell(30,5,'Estado General: ',0,0,1);
	$pdf->Cell(20,5,$tipoegeneral,0,0,1);
	$pdf->Cell(30);
	$pdf->Cell(30,5,'Estado de Conciencia: ',0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(20,5,$tipoeconciencia,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(40,5,'Estado de Hidratacion: ',0,0,1);
	$pdf->Cell(40,5,$tipoehidratacion,0,0,1);
	$pdf->Cell(190,5,'Estado Respiratorio: '.$erespiratorio,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(7,5,'FR:',0,0,1);
	$pdf->Cell(12,5,$fr,0,0,1);
	// $pdf->Cell(8,5,'CM',1,0,'',1);
	$pdf->Cell(10);//espacio
	$pdf->Cell(7,5,'FC:',0,0,1);
	$pdf->Cell(12,5,$fc,0,0,1);
	// $pdf->Cell(7,5,'KG',1,0,'',1);
	$pdf->Cell(10);
	$pdf->Cell(7,5,'TA:',0,0,1);
	$pdf->Cell(12,5,$ta,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(13,5,'TEMP:',0,0,1);
	$pdf->Cell(12,5,$temp,0,0,1);
	$pdf->Cell(10);
	// $pdf->Cell(7,5,utf8_decode('T°'),1,0,'',1);
	$pdf->Cell(10,5,'SAC:',0,0,1);
	$pdf->Cell(12,5,$sac,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(13,5,'GLUC:',0,0,1);
	$pdf->Cell(15,5,$gluc,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Cabeza: '.$cabeza,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Ojos: '.$ojos,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Boca: '.$boca,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Cuello: '.$cuello,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Torax: '.$torax,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Cardio Pulmonar: '.$cardiopulmonar,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Abdomen: '.$abdomen,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Genitourinario: '.$rvsgenitourinario,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Extremidades: '.$extremidades,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'SNC: '.$snc,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Mental: '.$mental,0,0,1);
	$pdf->Ln(5);
	// if($pdf->GetY()>240)
	// {
	// 	$pdf->Ln(42);
	// }
	// $pdf->Ln(10);
	$pdf->SetY($pdf->GetY());
	// $pdf->Ln(6);
	// $pdf->Rect($pdf->GetX(),$pdf->GetY(),192,$pdf->GetPageWidth());
	// $pdf->Cell(76,5,strtoupper('Continuacion de Examen Fisico'),0,0,'',1);//2 hoja
	// $pdf->Ln(6);
	// $pdf->Rect($pdf->GetX(),$pdf->GetY(),192,$pdf->GetPageWidth()+25);
	$pdf->Cell(190,5,'Piel: '.$piel,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Otros: '.$rvsotros,0,0,1);
	$pdf->Ln(7);
	$pdf->Cell(57,5,strtoupper('Acceso Venoso, Ostomia y Sondas'),0,0,'',1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Acceso Venoso: '.$auxvenoso,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(28,5,'Estado Cateter:',0,0,1);
	$pdf->Cell(52,5,$accateter,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(32,5,'Fecha Insercion:',0,0,1);
	$pdf->Cell(30,5,$acfinsercion,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Ostomia: '.$auxostomia,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Estado Ostomia: '.$oeostomina,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Cual: '.$oeostomina,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Fecha Ostomia: '.$ofostomina,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Sondas: '.$auxsonda,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Estado Sonda: '.$sondaestado,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Cual: '.$cualsonda,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Fecha postura: '.$sfpostura,0,0,1);
	$pdf->Ln(7);
	$pdf->Cell(30,5,strtoupper('Escala de Dolor'),0,0,'',1);
	// $pdf->Rect(9,78,192,35);
	$pdf->Ln(5);
	$pdf->Cell(14,5,'Region: ',0,0,1);
	$pdf->Cell(66,5,$edregion,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(20,5,'Irradiacion: ',0,0,1);
	$pdf->Cell(60,5,$edirradiacion,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(26,5,'Nivel de dolor: ',0,0,1);
	$pdf->Cell(54,5,$dolorn,0,0,1);
	$pdf->Cell(48,5,'Tipo de Dolor Segun Nivel: ',0,0,1);
	$pdf->Cell(60,5,$auxdolor,0,0,1);
	$pdf->Ln(5);
	$pdf->Image(base_url().'assets/img/c'.$dolorn.'.jpeg',180,$pdf->GetY()-10,$pdf->GetX());
	// $pdf->Ln(5);
	$pdf->Cell(190,5,'Tipo de Dolor: '.$auxtipodolor,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(34,5,'Tratamiento Previo: ',0,0,1);
	$pdf->Cell(46,5,$auxtp,0,0,1);
	$pdf->Cell(10,5,'Cual: ',0,0,1);
	$pdf->Cell(40,5,$cualtprevio,0,0,1);
	$pdf->Cell(11,5,'Alivio: ',0,0,1);
	$pdf->Cell(15,5,$tpalivio,0,0,1);
	// $pdf->Ln(5);
	// $pdf->MultiCell(190,5,'Resultados Ultimos Paraclinicos: '.$uparaclinico,0,'J');
	// $pdf->MultiCell(190,5,'Plan Manejo Medico Actual: '.$planmedicoactual,0,'J');
	$pdf->Ln(6);
	$pdf->Cell(26,5,strtoupper('Plan de Manejo'),0,0,'',1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Programa al Que Ingresa: '.$programaingresa,0,0,1);
	// $pdf->Ln(5);
	// $pdf->Cell(196,5,$programaingresa,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(14,5,'Oxigeno: '.$snoxigeno,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(14,5,'Detalle: '.$snoxigenodetalle,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(14,5,'Dieta: '.$pmdieta,0,0,1);
	$pdf->Ln(7);
	//aca si o no detalle

	$pdf->SetX(11);
	$pdf->Cell(60,5,strtoupper('Medicamentos Formulados'),0,0,'',1);
	$pdf->Ln(6);
	$pdf->SetX(11);
	// $pdf->Rect(9,121,192,35); metodo 1
	// $pdf->SetFont('Arial','B',11);
	// $pdf->Cell(20,6,'Nombre',0,0,'',1);
	// $pdf->Cell(30,6,'',0,0,'',1);
	// $pdf->Cell(15,6,'Dosis',0,0,'',1);
	// $pdf->Cell(5,6,'',0,0,'',1);
	// $pdf->Cell(12,6,'Via',0,0,'',1);
	// $pdf->Cell(3,6,'',0,0,'',1);
	// $pdf->Cell(22,6,'Frecuencia',0,0,'',1);
	// $pdf->Cell(5,6,'',0,0,'',1);
	// $pdf->Cell(17,6,'Dilusion',0,0,'',1);
	// $pdf->Cell(5,6,'',0,0,'',1);
	// $pdf->Cell(17,6,'Solucion',0,0,'',1);
	// $pdf->Cell(5,6,'',0,0,'',1);
	// $pdf->Cell(34,6,'T. Administracion',0,0,'',1);
	// $pdf->Ln(5);
	// $pdf->SetFont('Arial','',10);
	// $porciones = explode(";", $oblmed);
	// $tty=$pdf->GetY();
	// $alto=$tty+2;//84
	// $conta=0;
	// $ellargo=(count($porciones)-1)*7;
	// for ($i=0; $i < count($porciones)-1; $i++)
	// {
	// 	if((count($porciones)-1)>=12)
	// 	{

	// 	}
	// 	else
	// 	{
	// 		$pdf->SetY($alto);
	// 		// $pdf->SetX(10);
	// 		// $pdf->Cell(190,5,'#'.' - '.$porciones[$i],0,0,'');
	// 		$subporciones = explode(",", $porciones[$i]);
	// 		$pdf->SetX(11);
	// 		$pdf->Cell(46,5,$subporciones[0],0,0,'');
	// 		$pdf->Cell(5);
	// 		$pdf->Cell(15,5,$subporciones[1],0,0,'L');
	// 		$pdf->Cell(5);
	// 		$pdf->Cell(12,5,$subporciones[2],0,0,'L');
	// 		$pdf->Cell(3);
	// 		$pdf->Cell(22,5,$subporciones[3],0,0,'L');
	// 		$pdf->Cell(5);
	// 		$pdf->Cell(17,5,$subporciones[4],0,0,'L');
	// 		$pdf->Cell(5);
	// 		$pdf->Cell(17,5,$subporciones[5],0,0,'L');
	// 		$pdf->Cell(5);
	// 		$pdf->Cell(15,5,$subporciones[6],0,0,'L');
	// 		$alto+=5;
	// 	}
	// }
	// //metodo 2
	// $pdf->SetFont('Arial','',8);
	// $porciones = explode(";", $oblmed);
	// $tty=$pdf->GetY();
	// $alto=$tty+2;//84
	// $conta=0;
	// $ellargo=(count($porciones)-1)*7;
	// for ($i=0; $i < count($porciones)-1; $i++)
	// {
	// 	if((count($porciones)-1)>=12)
	// 	{

	// 	}
	// 	else
	// 	{
	// 		$pdf->SetY($alto);
	// 		// $pdf->SetX(10);
	// 		// $pdf->Cell(190,5,'#'.' - '.$porciones[$i],0,0,'');
	// 		$subporciones = explode(",", $porciones[$i]);
	// 		$pdf->SetX(10);
	// 		$pdf->Cell(46,5,'Nombre: '.$subporciones[0],0,0,'');
	// 		$pdf->SetX(11);
	// 		$pdf->Ln(4);
	// 		$pdf->Cell(15,5,'Dosis: '.$subporciones[1],0,0,'L');
	// 		$pdf->SetX(11);
	// 		$pdf->Ln(4);
	// 		$pdf->Cell(12,5,'Via: '.$subporciones[2],0,0,'L');
	// 		$pdf->SetX(11);
	// 		$pdf->Ln(4);
	// 		$pdf->Cell(22,5,'Frecuencia: '.$subporciones[3],0,0,'L');
	// 		$pdf->SetX(11);
	// 		$pdf->Ln(4);
	// 		$pdf->Cell(17,5,'Dilusion: '.$subporciones[4],0,0,'L');
	// 		$pdf->SetX(11);
	// 		$pdf->Ln(4);
	// 		$pdf->Cell(17,5,'Solucion '.$subporciones[5],0,0,'L');
	// 		$pdf->SetX(11);
	// 		$pdf->Ln(4);
	// 		$pdf->Cell(15,5,'T. Administracion: '.$subporciones[6],0,0,'L');
	// 		$alto+=30;
	// 	}
	// }
	// $pdf->SetY($tty);
	// $pdf->SetX(11);
	//metodo 3
	$pdf->SetFont('Arial','',8);
	$porciones = explode(";", $oblmed);
	$tty=$pdf->GetY();
	$alto=$tty+2;//84
	$conta=0;
	$ellargo=(count($porciones)-1)*7;
	$paralaalturacaja=(count($porciones)-1);
	// $pdf->Rect(10,$pdf->GetY(),190,$paralaalturacaja*15);
	for ($i=0; $i < count($porciones)-1; $i++)
	{
		if((count($porciones)-1)>=12)
		{

		}
		else
		{
			$pdf->SetY($pdf->GetY());
			// $pdf->SetX(10);
			// $pdf->Cell(190,5,'#'.' - '.$porciones[$i],0,0,'');
			// $pdf->Rect(10,$pdf->GetY(),190,12);
			$subporciones = explode(",", $porciones[$i]);
			$pdf->SetX(10);
			$pdf->Cell(196,4,'Nombre: '.$subporciones[0],1,0,'');
			$pdf->SetX(11);
			$pdf->Ln(4);
			$pdf->Cell(65,4,'Dosis: '.$subporciones[1],1,0,'L');
			$pdf->Cell(66,4,'Via: '.$subporciones[2],1,0,'L');
			$pdf->Cell(65,4,'Frecuencia: '.$subporciones[3],1,0,'L');
			$pdf->SetX(11);
			$pdf->Ln(4);
			$pdf->SetX(10);
	
			$pdf->Cell(65,4,'Dilusion: '.$subporciones[4],1,0,'L');
			$pdf->Cell(66,4,'Solucion '.$subporciones[5],1,0,'L');
			$pdf->Cell(65,4,'T. Administracion: '.$subporciones[6],1,0,'L');
			$pdf->Ln(6);
			$alto+=15;
		}
	}
	// $pdf->SetY($tty);
	// $pdf->SetX(11);
	// $pdf->MultiCell(190,$ellargo,'',1,'L');
	// $pdf->Ln(12);
	$pdf->SetY($pdf->GetY());
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(60,5,strtoupper('Analisis Clinico del Paciente'),0,0,'',1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$analisis,0,'J');
	$pdf->Ln(2);
	$pdf->SetX(11);
	$pdf->Cell(35,5,strtoupper('Diagnosticos'),0,0,'',1);
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
			// 	$pdf->Cell(190,5,$porciones[$i],0,0,'');
			$subporciones = explode(" ", $porciones[$i]);
			$pdf->SetY($alto); 
			$pdf->SetX(10);
			$pdf->Cell(12,4,$subporciones[count($subporciones)-1],1,0,'J');
			$pdf->Cell(184,4,str_replace($subporciones[count($subporciones)-1], " ", $porciones[$i]),1,0,'');//$porciones[$i]
			$alto+=5;
		}
	}
	$pdf->SetY($tty);
	$pdf->SetX(11);
	// $pdf->MultiCell(190,$ellargo,'',1,'L');
	$pdf->SetY($alto);
	$pdf->SetFont('Arial','',8);
	$pdf->SetX(11);
	$pdf->Ln(2);
	$pdf->Cell(50,5,strtoupper('Asistencia y Cuidados'),0,0,'',1);
	$actualaltura=$pdf->GetY();
	// $pdf->Rect(9,$actualaltura+6,192,55);
	$pdf->Ln(6);
	$pdf->Cell(190,5,'Medico: '.$auxaycmedico,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Detalle: '.$aycmedicodt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Enfermera Ostomia: '.$auxaycenfermera,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Detalle: '.$aycenfermeradt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Trabajo Social: '.$auxayctsocial,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Detalle: '.$ayctsocialdt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Nutricion: '.$auxaycnutricion,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Detalle: '.$aycnutriciondt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Fisioterapia: '.$auxaycfisioterapia,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Detalle: '.$aycfisioterapiadt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Terapia Respiratoria: '.$auxayctrespiratoria,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Detalle: '.$ayctrespiratoriadt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Terapia Ocupacional: '.$auxayctocupacional,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Detalle: '.$ayctocupacionaldt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Terapia Lenguaje: '.$auxayctlenguaje,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Detalle: '.$ayctlenguajedt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Aux. Enfermera: '.$auxauxenfermeria,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Detalle: '.$otroenfermeria,0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,'Educacion: '.$auxayceducacion,0,'');
	// $pdf->Ln(5);
	$pdf->MultiCell(190,5,'Detalle: '.$ayceducaciondt,0,'');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',8);
	$pdf->SetX(11);
	$pdf->Cell(22,5,strtoupper('Esas (24H)'),0,0,'',1);
	// $pdf->Rect(9,$pdf->GetY()+6,192,10);
	$pdf->Ln(6);
	$pdf->Cell(12,5,'Dolor: ',0,0,1);
	$pdf->Cell(5,5,$esasdolor,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(20,5,'Cansancio: ',0,0,1);
	$pdf->Cell(5,5,$esascansancio,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(18,5,'Nauseas: ',0,0,1);
	$pdf->Cell(5,5,$esasnauseas,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(18,5,'Tristesa: ',0,0,1);
	$pdf->Cell(5,5,$esasnauseas,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(18,5,'Angustia: ',0,0,1);
	$pdf->Cell(5,5,$esasnauseas,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(24,5,'Somnolencia: ',0,0,1);
	$pdf->Cell(5,5,$esasnauseas,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(15,5,'Apetito: ',0,0,1);
	$pdf->Cell(12,5,$esasnauseas,0,0,1);
	$pdf->Cell(16,5,'Disnea: ',0,0,1);
	$pdf->Cell(19,5,$esasnauseas,0,0,1);
	$pdf->Cell(18,5,'Insomnio: ',0,0,1);
	$pdf->Cell(5,5,$esasnauseas,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(26,5,utf8_decode('Extreñimiento: '),0,0,1);
	$pdf->Cell(7,5,$esasnauseas,0,0,1);
	$pdf->Cell(18,5,'Bienestar: ',0,0,1);
	$pdf->Cell(5,5,$esasnauseas,0,0,1);
	$pdf->Ln(8);
	$pdf->SetX(11);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(12,5,strtoupper('Ecaf'),0,0,'',1);
	// $pdf->Rect(9,$pdf->GetY()+6,192,20);
	$pdf->Ln(6);
	$pdf->Cell(38,5,'Gestos de Disconfort: ',0,0,1);
	$pdf->Cell(24,5,$ecafdisconfort,0,0,1);
	$pdf->Cell(16,5,'Quebido: ',0,0,1);
	$pdf->Cell(18,5,$ecafquebido,0,0,1);
	$pdf->Cell(10,5,'Grito: ',0,0,1);
	$pdf->Cell(22,5,$ecafgrito,0,0,1);
	$pdf->Cell(34,5,'Tocando una Area: ',0,0,1);
	$pdf->Cell(5,5,$ecafarea,0,0,1);
	$pdf->Ln(5);
	// if($pdf->GetY()>480)
	// {
	// 	$pdf->Ln(40);
	// }
	
	// $pdf->Cell(10);
	// $pdf->Ln(40);
	// $pdf->Rect($pdf->GetX(),$pdf->GetY(),192,30);
	$pdf->Cell(44,5,'Movimiento sin Objetivo: ',0,0,1);
	$pdf->Cell(18,5,$ecafmovimiento,0,0,1);
	$pdf->Cell(32,5,'Respiracion Dura: ',0,0,1);
	$pdf->Cell(34,5,$ecafrespiracion,0,0,1);
	$pdf->Cell(10,5,'Total: ',0,0,1);
	$pdf->Cell(5,5,$ecaftotal,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(10,5,'Ik%:',0,0,1);
	$pdf->Cell(12,5,$ik,0,0,1);
	$pdf->Cell(10);//espacio
	$pdf->Cell(12,5,'ECOG:',0,0,1);
	$pdf->Cell(12,5,$ecog,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(10,5,'PPS:',0,0,1);
	$pdf->Cell(12,5,$pps,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(13,5,'MDAS:',0,0,1);
	$pdf->Cell(12,5,$mdas,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(10,5,'CAM:',0,0,1);
	$pdf->Cell(12,5,$cam,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(18,5,'RAMSAY:',0,0,1);
	$pdf->Cell(15,5,$ramsay,0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,'Observaciones: '.$observaciones,0,'J');

	$pdf->Output('','HC-Pad_'.$getfecha2.'-'.$gethora.'.pdf');
?>
<!-- </body>
</html> -->