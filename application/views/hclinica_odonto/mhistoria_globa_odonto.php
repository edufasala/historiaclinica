<?php
	header('Content-Type: text/html; charset=UTF-8');
	$campos = json_decode(json_encode($cn), True);
	foreach ($cn['hcpad'] as $fila)
	{
		// $obmotivo=utf8_decode($fila->pad_mconsulta);
		// $enfactual=utf8_decode($fila->pad_enf_actual);
		// $apatologicos=utf8_decode($fila->pad_a_patologicos);
		// $aquirurgicos=utf8_decode($fila->pad_a_quirurgicos);
		// $afarmacologicos=utf8_decode($fila->pad_a_farmacologicos);
		// $aalergicos=utf8_decode($fila->pad_a_alergicos);
		// $atraumaticos=utf8_decode($fila->pad_a_traumaticos);
		// $afamiliares=utf8_decode($fila->pad_a_familiares);
		// $atransfucionales=utf8_decode($fila->pad_a_transfusionales);
		// $aginecologicos=utf8_decode($fila->pad_a_ginecologicos);
		// $aexposicionales=utf8_decode($fila->pad_a_exposicionales);
		// $aotros=utf8_decode($fila->pad_a_otros);
		// $endocrinologico=utf8_decode($fila->pad_endocrinologico);
		// $organos=utf8_decode($fila->pad_organos);
		// $cardiopulmonar=utf8_decode($fila->pad_cardiopulmonar);
		// $gastrointestinal=utf8_decode($fila->pad_gastrointestinal);
		// $rvsgenitourinario=utf8_decode($fila->pad_genitourinario);
		// $osteomuscular=utf8_decode($fila->pad_osteomuscular);
		// $neurologico=utf8_decode($fila->pad_neurologico);
		// $farenas=utf8_decode($fila->pad_pielyfarenas);
		// $rvsotros=utf8_decode($fila->pad_rxs_otros);
		// if($fila->pad_e_general=="NF")
		// {
		// 	$tipoegeneral='Normal';
		// }
		// else if($fila->pad_e_general=="B")
		// {
		// 	$tipoegeneral='Bueno';
		// }
		// else if($fila->pad_e_general=="A")
		// {
		// 	$tipoegeneral='Aceptable';
		// }
		// else if($fila->pad_e_general=="R")
		// {
		// 	$tipoegeneral='Regular';
		// }
		// else if($fila->pad_e_general=="M")
		// {
		// 	$tipoegeneral='Malo';
		// }
		// if($fila->pad_e_conciencia=="NF")
		// {
		// 	$tipoeconciencia='Normal';
		// }
		// else if($fila->pad_e_conciencia=="0")
		// {
		// 	$tipoeconciencia='Alerta';
		// }
		// else if($fila->pad_e_conciencia=="1")
		// {
		// 	$tipoeconciencia='Somnoliento';
		// }
		// else if($fila->pad_e_conciencia=="2")
		// {
		// 	$tipoeconciencia='Estupor';
		// }
		// else if($fila->pad_e_conciencia=="3")
		// {
		// 	$tipoeconciencia='Confuso';
		// }
		// else if($fila->pad_e_conciencia=="4")
		// {
		// 	$tipoeconciencia='Comnubilado';
		// }
		// else if($fila->pad_e_conciencia=="5")
		// {
		// 	$tipoeconciencia='Coma';
		// }
		// else if($fila->pad_e_conciencia=="6")
		// {
		// 	$tipoeconciencia='Fallecido';
		// }
		// if($fila->pad_e_hidratacion=="NF")
		// {
		// 	$tipoehidratacion='Normal';
		// }
		// else if($fila->pad_e_hidratacion=="0")
		// {
		// 	$tipoehidratacion='Hidratado';
		// }
		// else if($fila->pad_e_hidratacion=="1")
		// {
		// 	$tipoehidratacion='D. Leve';
		// }
		// else if($fila->pad_e_hidratacion=="2")
		// {
		// 	$tipoehidratacion='D. Moderado';
		// }
		// else if($fila->pad_e_hidratacion=="3")
		// {
		// 	$tipoehidratacion='D. Severa';
		// }
		// $erespiratorio=utf8_decode($fila->pad_e_respiratorio);
		// $fr=utf8_decode($fila->pad_fr);
		// $fc=utf8_decode($fila->pad_fc);
		// $ta=utf8_decode($fila->pad_ta);
		// $temp=utf8_decode($fila->pad_te);
		// $sac=utf8_decode($fila->pad_sac);
		// $gluc=utf8_decode($fila->pad_gluc);
		// $cabeza=utf8_decode($fila->pad_cabeza);
		// $ojos=utf8_decode($fila->pad_ojos);
		// $boca=utf8_decode($fila->pad_boca);
		// $cuello=utf8_decode($fila->pad_cuello);
		// $torax=utf8_decode($fila->pad_torax);
		// $cpulmonar=utf8_decode($fila->pad_c_pulmonar);
		// $abdomen=utf8_decode($fila->pad_abdomen);
		// $genitourinario=utf8_decode($fila->pad_e_genitourinario);
		// $extremidades=utf8_decode($fila->pad_extremidades);
		// $snc=utf8_decode($fila->pad_snc);
		// $mental=utf8_decode($fila->pad_mental);
		// $piel=utf8_decode($fila->pad_piel);
		// $otros=utf8_decode($fila->pad_examen_otros);
		// $auxvenoso=utf8_decode($fila->pad_acceso_venoso);
		// $accateter=utf8_decode($fila->pad_estado_cateter);
		// $acfinsercion=utf8_decode($fila->pad_f_insercion);
		// $auxostomia=utf8_decode($fila->pad_ostomia);
		// $oeostomina=utf8_decode($fila->pad_estado_ostomia);
		// $ocualostomina=utf8_decode($fila->pad_cual_ostomia);
		// $ofostomina=utf8_decode($fila->pad_f_ostomia);
		// $auxsonda=utf8_decode($fila->pad_sondas);
		// $sondaestado=utf8_decode($fila->pad_estado_sonda);
		// $cualsonda=utf8_decode($fila->pad_cual_sonda);
		// $sfpostura=utf8_decode($fila->pad_f_postura_sonda);
		// $edregion=utf8_decode($fila->pad_dolor_region);
		// $edirradiacion=utf8_decode($fila->pad_dolor_irradiacion);
		// $dolorn=utf8_decode($fila->pad_dolor_nivel);
		// $auxdolor=utf8_decode($fila->pad_dolor_cual);
		// $auxtipodolor=utf8_decode($fila->pad_tipo_dolor);
		// $auxtp=utf8_decode($fila->pad_tratamiento_previo);
		// $cualtprevio=utf8_decode($fila->pad_cual_dolor);
		// if($fila->pad_alivio=="NF")
		// {
		// 	$tpalivio='No Refiere';
		// }
		// else if($fila->pad_alivio=="N")
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
		// $uparaclinico=utf8_decode($fila->pad_r_paraclinico);
		// $planmedicoactual=utf8_decode($fila->pad_plan_manejo_medico_actual);
		// $oblmed=utf8_decode($fila->pad_medicamentos);
		// $analisis=utf8_decode($fila->pad_analisis);
		// $obldig=utf8_decode($fila->pad_diagnosticos);//lista_diagnosticos diagnosticos
		// $auxaycmedico=utf8_decode($fila->pad_ac_medico);
		// $aycmedicodt=utf8_decode($fila->pad_ac_medico_detalle);
		// $auxaycenfermera=utf8_decode($fila->pad_ac_enfermera);
		// $aycenfermeradt=utf8_decode($fila->pad_ac_enfermera_detalle);
		// $auxayctsocial=utf8_decode($fila->pad_ac_trabajo_social);
		// $ayctsocialdt=utf8_decode($fila->pad_ac_trabajo_social_detalle);
		// $auxaycnutricion=utf8_decode($fila->pad_ac_nutricion);
		// $aycnutriciondt=utf8_decode($fila->pad_ac_nutricion_detalle);
		// $auxaycfisioterapia=utf8_decode($fila->pad_ac_fisioterapia);
		// $aycfisioterapiadt=utf8_decode($fila->pad_ac_fisioterapia_detalle);
		// $auxayctrespiratoria=utf8_decode($fila->pad_t_respiratoria);
		// $ayctrespiratoriadt=utf8_decode($fila->pad_t_respiratoria_detalle);
		// $auxayctocupacional=utf8_decode($fila->pad_t_ocupacional);
		// $ayctocupacionaldt=utf8_decode($fila->pad_t_ocupacional_detalle);
		// $auxayctlenguaje=utf8_decode($fila->pad_t_lenguaje);
		// $ayctlenguajedt=utf8_decode($fila->pad_t_lenguaje_detalle);
		// $auxauxenfermeria=utf8_decode($fila->pad_aux_enfermeria);
		// $otroenfermeria=utf8_decode($fila->pad_aux_otro);
		// $auxayceducacion=utf8_decode($fila->pad_educacion);
		// $ayceducaciondt=utf8_decode($fila->pad_educacion_detalle);
		// $esasdolor=utf8_decode($fila->pad_esas_dolor);
		// $esascansancio=utf8_decode($fila->pad_esas_cansancio);
		// $esasnauseas=utf8_decode($fila->pad_esas_nauseas);
		// $esastristesa=utf8_decode($fila->pad_esas_tristeza);
		// $esasangustia=utf8_decode($fila->pad_esas_angustia);
		// $esassomnolencia=utf8_decode($fila->pad_esas_somnolencia);
		// $esasapetito=utf8_decode($fila->pad_esas_apetito);
		// $esasdisnea=utf8_decode($fila->pad_esas_disnea);
		// $esasinsomnio=utf8_decode($fila->pad_esas_insomnio);
		// $esasestrenimiento=utf8_decode($fila->pad_esas_estrenimiento);
		// $esasbienestar=utf8_decode($fila->pad_esas_bienestar);
		// $ecafdisconfort=utf8_decode($fila->pad_ecaf_gestos);
		// $ecafquebido=utf8_decode($fila->pad_ecaf_quebido);
		// $ecafgrito=utf8_decode($fila->pad_ecaf_grito);
		// $ecafarea=utf8_decode($fila->pad_ecaf_tocando);
		// $ecafmovimiento=utf8_decode($fila->pad_ecaf_movimiento);
		// $ecafrespiracion=utf8_decode($fila->pad_ecaf_respiracion);
		// $ecaftotal=utf8_decode($fila->pad_ecaf_total);
		// $ik=utf8_decode($fila->pad_ik);
		// $ecog=utf8_decode($fila->pad_ecog);
		// $pps=utf8_decode($fila->pad_pps);
		// $mdas=utf8_decode($fila->pad_mdas);
		// $cam=utf8_decode($fila->pad_cam);
		// $ramsay=utf8_decode($fila->pad_ramsay);
		// $observaciones=utf8_decode($fila->pad_ecaf_observaciones);
		// $obfechahistoria=utf8_decode($fila->pad_f_reg);
		// $obhorahistoria=utf8_decode($fila->pad_h_reg);
		// $programaingresa=utf8_decode($fila->pad_plan_manejo_programa);
		// $snoxigeno=utf8_decode($fila->pad_plan_manejo_oxigeno);
		// $snoxigenodetalle=utf8_decode($fila->pad_plan_manejo_oxigenodetalle);
		// $pmdieta=utf8_decode($fila->pad_plan_manejo_dieta);
		// $pmparaclinicos=utf8_decode($fila->pad_paraclinicos);
		// $pmparaclinicosdetalle=utf8_decode($fila->pad_paraclinicos_detalle);
		// $pmvaloraciones=utf8_decode($fila->pad_pm_valoraciones);
		// $pmrecomendaciones=utf8_decode($fila->pad_pm_recomendaciones);
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
	// foreach ($cn['md'] as $fila)
	// {
	// 	$medico_nombres=utf8_decode($fila->registro_nombres);
	// 	$medico_apellidos=utf8_decode($fila->registro_apellidos);
	// 	$medico_registro=$fila->registro_n_medico;
	// 	$medico_documento=$fila->registro_doc;
	// 	$medico_especialidad=utf8_decode($fila->registro_especialidad);
	// }
	// $nommedico=	ucwords($medico_nombres).', '.ucwords($medico_apellidos);

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
	
	$GLOBALS['nommedico'] ="";// $nommedico;
	$GLOBALS['obnrohc'] =$obnrohc;
	$GLOBALS['obfechahistoria'] = "";//$obfechahistoria;
	$GLOBALS['obhorahistoria'] = "";//$obhorahistoria;
	$GLOBALS['fef'] = $fef;
	$GLOBALS['obtipodoc'] ="";// $obtipodoc;
	$GLOBALS['obndoc'] = $obndoc;
	$GLOBALS['obnombre'] = $obnombre;
	$GLOBALS['estadoc'] =$estadoc;
	$GLOBALS['obfnac'] = $obfnac;
	$GLOBALS['calculoedad'] = $calculoedad;
	$GLOBALS['direccion_paciente'] = $obdirpc;
	$GLOBALS['nombre_responsable'] = $obresponsable;
	$GLOBALS['afiliado'] =$tipoa;
	$GLOBALS['aseguradora'] = $obaseguradora;
	$GLOBALS['nombre_aseguradora'] = $obnnaseguradora;
	$GLOBALS['tipot'] ="";//utf8_decode($tipot);
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
			// $this->Cell(65); 'Dr. '.$GLOBALS['nommedico']
			$this->Cell(198,4,utf8_decode('COMPAÑIA CALIDAD Y CUIDADO EN SALUD'),0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->SetFont('Arial','',8);
			$this->Cell(198,4,'COMPCASA SAS IPS',0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->SetFont('Arial','',8);
			$this->Cell(198,4, strtoupper('HISTORIA CLINICA'.$GLOBALS['cuales']),0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->Cell(198,4, 'Procesos de Apoyo',0,0,'C',true);
			$this->Ln(4);
			$this->SetX(9);
			$this->Cell(198,4, utf8_decode('Gestión de la Información'),0,0,'C',true);
			$this->Cell(158);
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
			$this->Cell(25);
			// $this->SetFont('Arial','B',8);
			// $this->Cell(22,0,'Fecha Historia:',0,0,1);
			// $this->SetFont('Arial','',8);
			// $this->Cell(8,0,$GLOBALS['obfechahistoria'],0,0,1);
			// $this->Cell(10);
			// $this->SetFont('Arial','B',8);
			// $this->Cell(22,0,'Hora Historia:',0,0,1);
			// $this->SetFont('Arial','',8);
			// $this->Cell(8,0,$GLOBALS['obhorahistoria'],0,0,1);
			// $this->Cell(10);
			
			$this->SetFont('Arial','B',8);
			$this->Cell(24,0,'Tipo Afiliado:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['afiliado'],0,0,1);

			// $this->SetFont('Arial','B',8);
			// $this->Cell(30,5,'Tipo de Tratamiento:',0,0,1);
			// $this->SetFont('Arial','',8);
			// $this->Cell(62,5,$GLOBALS['tipot'],0,0,1);
			$this->Cell(14);
			$this->SetFont('Arial','B',8);
			$this->Cell(24,0,'Aseguradora:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(28,0,$GLOBALS['aseguradora'],0,0,1);
			$this->Ln(2);
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
			$this->Cell(16,5,$GLOBALS['obndoc'],0,0,1);
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
			
			
			$this->Cell(12);
			$this->Ln(8);
			$this->Rect($this->GetX()-1,$this->GetY()-1,198,$this->GetPageWidth()-15);
			// $this->Rect(9,64,198,$this->GetPageWidth()-15);
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
	
    // $pdf = $this->plte->getInstance(); //2 metodo
    
    // require_once APPPATH.'views/hclinica/pltencabezado.php'; //3 metodo funciona pero sin datos
    // $pdf = $this->pdf->getInstance();
    $pdf=new PDF();
  	// ob_end_clean();
	// $fpdf->Open();
	$pdf->AliasnbPages();
	$pdf->AddPage('P','Letter');//'P','A4',0
	// $pdf->SetMargins(10, 64 , 10);
	$esp=6;
	$esp2=7;
	$esp3=1;
	
	// $pdf->SetFillColor(232,232,232);
 //    // Salto de línea
 //    $pdf->Ln(10);
	// // $pdf->SetDrawColor(0,0,0); //color gris borde
	// $pdf->SetXY(9,1);
 //    $pdf->Cell(198,10,'',0,0,'C',true);
 //    $pdf->SetXY(9,8);
	// $pdf->SetFont('Arial','B',8);
	// // $pdf->Cell(65); 'Dr. '.$GLOBALS['nommedico']
	// $pdf->Cell(198,4,utf8_decode('COMPAÑIA CALIDAD Y CUIDADO EN SALUD'),0,0,'C',true);
	// $pdf->Ln(4);
	// $pdf->SetX(9);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(198,4,'COMPCASA SAS IPS',0,0,'C',true);
	// $pdf->Ln(4);
	// $pdf->SetX(9);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(198,4, strtoupper('HISTORIA CLINICA'.$GLOBALS['cuales']),0,0,'C',true);
	// $pdf->Ln(4);
	// $pdf->SetX(9);
	// $pdf->Cell(198,4, 'Procesos de Apoyo',0,0,'C',true);
	// $pdf->Ln(4);
	// $pdf->SetX(9);
	// $pdf->Cell(198,4, utf8_decode('Gestión de la Información'),0,0,'C',true);
	// $pdf->Cell(158);
	// $pdf->SetY(2);
	// $pdf->SetX(0);
	// $pdf->Image(base_url().'assets/img/logo.png',16,2,40);
	// $pdf->Image(base_url().'assets/img/logo4.png',168,2,25);

	// $pdf->Ln(33);
	// $pdf->SetFillColor(232,232,232);
	// $pdf->SetTextColor(0,0,0);
	// $pdf->Rect(9,32,198,10);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(30,0,utf8_decode('Historia Clinica N°:'),0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(12,0,$GLOBALS['obnrohc'],0,0,1);
	// $pdf->Cell(10);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(22,0,'Fecha Historia:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(8,0,$GLOBALS['obfechahistoria'],0,0,1);
	// $pdf->Cell(10);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(22,0,'Hora Historia:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(8,0,$GLOBALS['obhorahistoria'],0,0,1);
	// $pdf->Cell(10);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(24,0,'Tipo Afiliado:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(12,0,$GLOBALS['afiliado'],0,0,1);
	// $pdf->Ln(2);

	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(30,5,'Tipo de Tratamiento:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(62,5,$GLOBALS['tipot'],0,0,1);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(24,5,'Aseguradora:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(16,5,$GLOBALS['aseguradora'],0,0,1);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(34,5,'Nombre Aseguradora:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(12,5,$GLOBALS['nombre_aseguradora'],0,0,1);
	// $pdf->Ln(8);//4
	
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(10,0,strtoupper('Datos del Paciente'),0,0,'',1);
	// // $pdf->Cell(46,4,strtoupper('Datos del Paciente'),0,0,'',1);
	// $pdf->Ln(4);//8
	// $pdf->Rect(9,48,198,14);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(18,5,'Documento:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(16,5,$GLOBALS['obndoc'],0,0,1);
	// $pdf->Cell(25);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(36,5,'Nombres y Apellidos:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(72,5,ucwords($GLOBALS['obnombre']),0,0,1);
	// $pdf->Cell(12);
	// $pdf->Ln(4);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(22,5,'Estado Civil:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(37,5,$GLOBALS['estadoc'],0,0,1);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(28,5,'Fecha Nacimiento:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(22,5,$GLOBALS['obfnac'],0,0,1);
	// $pdf->Cell(8);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(14,5,'Edad:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(64,5,utf8_decode($GLOBALS['calculoedad']),0,0,1);
	// $pdf->Cell(12);
	// $pdf->Ln(4);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(16,5,'Direccion:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(101,5,utf8_decode($GLOBALS['direccion_paciente']),0,0,1);
	// $pdf->SetFont('Arial','B',8);
	// $pdf->Cell(32,5,'Nombre Responsable:',0,0,1);
	// $pdf->SetFont('Arial','',8);
	// $pdf->Cell(29,5,utf8_decode($GLOBALS['nombre_responsable']),0,0,1);
	
	
	// $pdf->Cell(12);
	// $pdf->Ln(8);
	// $pdf->Rect($pdf->GetX()-1,$pdf->GetY()-1,198,$pdf->GetPageWidth()-15);


	// $col1=34;
	// $col2=40;
	// $col3=46;
	// $col4=68;
	$pdf->SetFillColor(232,232,232);

	$pdf->Ln($esp3);
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
		$ta_s=utf8_decode($fila->pad_t_sistole);
		$ta_d=utf8_decode($fila->pad_t_diastole);
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
		$obnnhistoria=utf8_decode($fila->hc_pad_cod);
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
		//barthel
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
		$obnnbarthel=utf8_decode($fila->hc_barthel_cod);

		//Valoracion
		$obldig=utf8_decode($fila->valoracion_diagnosticos);
		$auxcnocular=utf8_decode($fila->valoracion_ocular);
		$auxcnverbal=utf8_decode($fila->valoracion_verbal);
		$auxcnmotora=utf8_decode($fila->valoracion_motora);
		$cntotal=$fila->valoracion_avm_total;
		$auxcngeneral=utf8_decode($fila->valoracion_tipo_condicion);
		$cnotrogeneral=utf8_decode($fila->valoracion_otro_condicion);
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
		$obnnvaloracion=utf8_decode($fila->hc_valoracion_cod);

		//norton
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
		$obnnnorton=utf8_decode($fila->hc_norton_cod);

		//braden
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
		$obnnbraden=utf8_decode($fila->hc_braden_cod);

	// $pdf->Ln(1);
	$pdf->Rect(10,$pdf->GetY()-1,196,6);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,5,'Tipo de Tratamiento:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(37,5,utf8_decode($tipot),0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(22,5,'Fecha Historia:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(8,5,$obfechahistoria,0,0,1);
	$pdf->Cell(20);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(22,5,'Hora Historia:',0,0,1);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(8,5,$obhorahistoria,0,0,1);
	$pdf->Cell(10);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(22,5,utf8_decode('N° Historia: '.$obnnhistoria),0,0,1);
	$pdf->Ln(7);
	$pdf->Ln($esp3);
	$pdf->Cell(30,5,strtoupper('Motivo Consulta'),0,0,'',1);
	$pdf->Ln($esp);
	$pdf->MultiCell(196,5,$obmotivo,0,'L');
	// $pdf->Ln($esp2);
	$pdf->Ln(2);
	$pdf->Cell(35,5,strtoupper('Enfermedad Actual'),0,0,'',1);
	$pdf->Ln($esp);
	$pdf->SetX(10);
	$pdf->MultiCell(196,5,$enfactual,0,'L');
	$pdf->Ln(2);
	// $pdf->Ln($esp2);
	$pdf->Cell(25,5,strtoupper('ANTECEDENTES'),0,0,'',1);
	$pdf->Ln($esp);
	$pdf->MultiCell(196,5,'A. Patologicos: '.$apatologicos,0,'L');
	$pdf->MultiCell(196,5,'A. Quirurgicos: '.$aquirurgicos,0,'L');
	$pdf->MultiCell(196,5,'A. Farmacologicos: '.$afarmacologicos,0,'L');
	$pdf->MultiCell(196,5,'A. Alergicos: '.$aalergicos,0,'L');
	$pdf->MultiCell(196,5,'A. Traumaticos: '.$atraumaticos,0,'L');
	$pdf->MultiCell(196,5,'A. Familiares: '.$afamiliares,0,'L');
	$pdf->MultiCell(196,5,'A. Transfusionales: '.$atransfucionales,0,'L');
	$pdf->MultiCell(196,5,'A. Ginecologicos: '.$aginecologicos,0,'L');
	$pdf->MultiCell(196,5,'A. Exposicionales: '.$aexposicionales,0,'L');
	$pdf->MultiCell(196,5,'A. Otros: '.$aotros,0,'L');
	$pdf->Ln(3);//2
	$pdf->Cell(40,5,strtoupper('Revision por Sistemas'),0,0,'',1);
	// $pdf->Rect(9,148,192,45);
	$pdf->Ln(6);
	$pdf->Cell(196,5,'Endocrinologico: '.$endocrinologico,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Organos: '.$organos,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Cardio Pulmonar: '.$cardiopulmonar,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Gastrointestinal: '.$gastrointestinal,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Genitourinario: '.$rvsgenitourinario,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Osteo Muscular: '.$osteomuscular,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Neurologico: '.$neurologico,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Piel y Farenas: '.$farenas,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Otros: '.$rvsotros,0,0,1);
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
	$pdf->Cell(196,5,'Estado Respiratorio: '.$erespiratorio,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(7,5,'FR:',0,0,1);
	$pdf->Cell(12,5,$fr,0,0,1);
	// $pdf->Cell(8,5,'CM',1,0,'',1);
	$pdf->Cell(5);//espacio
	$pdf->Cell(7,5,'FC:',0,0,1);
	$pdf->Cell(12,5,$fc,0,0,1);
	// $pdf->Cell(7,5,'KG',1,0,'',1);
	$pdf->Cell(12,5,utf8_decode('Sístole:'),0,0,1);
	$pdf->Cell(10,5,$ta_s,0,0,1);
	// $pdf->Cell(5);
	$pdf->Cell(12,5,utf8_decode('Diástole:'),0,0,1);
	$pdf->Cell(10,5,$ta_d,0,0,1);
	$pdf->Cell(5);
	$pdf->Cell(7,5,'TA:',0,0,1);
	$pdf->Cell(12,5,$ta,0,0,1);
	$pdf->Cell(3);
	$pdf->Cell(13,5,'TEMP:',0,0,1);
	$pdf->Cell(12,5,$temp,0,0,1);
	$pdf->Cell(3);
	// $pdf->Cell(7,5,utf8_decode('T°'),1,0,'',1);
	$pdf->Cell(10,5,'SAC:',0,0,1);
	$pdf->Cell(12,5,$sac,0,0,1);
	// $pdf->Cell(10);
	$pdf->Cell(13,5,'GLUC:',0,0,1);
	$pdf->Cell(15,5,$gluc,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Cabeza: '.$cabeza,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Ojos: '.$ojos,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Boca: '.$boca,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Cuello: '.$cuello,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Torax: '.$torax,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Cardio Pulmonar: '.$cardiopulmonar,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Abdomen: '.$abdomen,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Genitourinario: '.$rvsgenitourinario,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Extremidades: '.$extremidades,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'SNC: '.$snc,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Mental: '.$mental,0,0,1);
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
	$pdf->Cell(196,5,'Piel: '.$piel,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Otros: '.$rvsotros,0,0,1);
	$pdf->Ln(7);
	$pdf->Cell(57,5,strtoupper('Acceso Venoso, Ostomia y Sondas'),0,0,'',1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Acceso Venoso: '.$auxvenoso,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(28,5,'Estado Cateter:',0,0,1);
	$pdf->Cell(52,5,$accateter,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(32,5,'Fecha Insercion:',0,0,1);
	$pdf->Cell(30,5,$acfinsercion,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Ostomia: '.$auxostomia,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Estado Ostomia: '.$oeostomina,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Cual: '.$oeostomina,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Fecha Ostomia: '.$ofostomina,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Sondas: '.$auxsonda,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Estado Sonda: '.$sondaestado,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Cual: '.$cualsonda,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Fecha postura: '.$sfpostura,0,0,1);
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
	$pdf->Cell(196,5,'Tipo de Dolor: '.$auxtipodolor,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(34,5,'Tratamiento Previo: ',0,0,1);
	$pdf->Cell(46,5,$auxtp,0,0,1);
	$pdf->Cell(10,5,'Cual: ',0,0,1);
	$pdf->Cell(40,5,$cualtprevio,0,0,1);
	$pdf->Cell(11,5,'Alivio: ',0,0,1);
	$pdf->Cell(15,5,$tpalivio,0,0,1);
	// $pdf->Ln(5);
	// $pdf->MultiCell(196,5,'Resultados Ultimos Paraclinicos: '.$uparaclinico,0,'J');
	// $pdf->MultiCell(196,5,'Plan Manejo Medico Actual: '.$planmedicoactual,0,'J');
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
			$subporciones = explode("|", $porciones[$i]);
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
	$pdf->Cell(14,5,'Paraclinicos: '.$pmparaclinicos,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(14,5,'Detalle: '.$pmparaclinicosdetalle,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(14,5,'Valoraciones: '.$pmvaloraciones,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(14,5,'Recomendaciones y Signos de Alarma:',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$pmrecomendaciones,0,'J');
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(60,5,strtoupper('Analisis Clinico del Paciente'),0,0,'',1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$analisis,0,'J');
	$pdf->Ln(2);
	$pdf->SetX(11);
	$pdf->Cell(35,5,strtoupper('Diagnosticos'),0,0,'',1);
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
			// 	$pdf->Cell(190,5,$porciones[$i],0,0,'');
			$subporciones = explode(" ", $porciones[$i]);
			$pdf->SetY($alto); 
			$pdf->SetX(10);
			// $pdf->Cell(12,4,"CIE 10",1,0,'J');
			// $pdf->Cell(184,4,strtoupper("Diagnosticos"),1,0,'');
			// $pdf->Ln(8);
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
	$pdf->Cell(196,5,'Medico: '.$auxaycmedico,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Detalle: '.$aycmedicodt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Enfermera Ostomia: '.$auxaycenfermera,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Detalle: '.$aycenfermeradt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Trabajo Social: '.$auxayctsocial,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Detalle: '.$ayctsocialdt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Nutricion: '.$auxaycnutricion,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Detalle: '.$aycnutriciondt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Fisioterapia: '.$auxaycfisioterapia,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Detalle: '.$aycfisioterapiadt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Terapia Respiratoria: '.$auxayctrespiratoria,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Detalle: '.$ayctrespiratoriadt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Terapia Ocupacional: '.$auxayctocupacional,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Detalle: '.$ayctocupacionaldt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Terapia Lenguaje: '.$auxayctlenguaje,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Detalle: '.$ayctlenguajedt,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Aux. Enfermera: '.$auxauxenfermeria,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(196,5,'Detalle: '.$otroenfermeria,0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,'Educacion: '.$auxayceducacion,0,'');
	// $pdf->Ln(5);
	$pdf->Cell(196,5,'Detalle: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(196,5,$ayceducaciondt,0,'');
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
	$pdf->Cell(5,5,$esastristesa,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(18,5,'Angustia: ',0,0,1);
	$pdf->Cell(5,5,$esasangustia,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(24,5,'Somnolencia: ',0,0,1);
	$pdf->Cell(5,5,$esassomnolencia,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(15,5,'Apetito: ',0,0,1);
	$pdf->Cell(12,5,$esasapetito,0,0,1);
	$pdf->Cell(16,5,'Disnea: ',0,0,1);
	$pdf->Cell(19,5,$esasdisnea,0,0,1);
	$pdf->Cell(18,5,'Insomnio: ',0,0,1);
	$pdf->Cell(5,5,$esasinsomnio,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(26,5,utf8_decode('Extreñimiento: '),0,0,1);
	$pdf->Cell(7,5,$esasestrenimiento,0,0,1);
	$pdf->Cell(18,5,'Bienestar: ',0,0,1);
	$pdf->Cell(5,5,$esasbienestar,0,0,1);
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
	$pdf->MultiCell(196,5,'Observaciones: '.$observaciones,0,'J');
	$pdf->Ln(5);

		$medico_nombres=utf8_decode($fila->registro_nombres);
		$medico_apellidos=utf8_decode($fila->registro_apellidos);
		$medico_registro=$fila->registro_n_medico;
		$medico_documento=$fila->registro_doc;
		$medico_especialidad=utf8_decode($fila->registro_especialidad);
		$nommedico=	ucwords($medico_nombres).', '.ucwords($medico_apellidos);
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
	$pdf->Ln(10);

	//barthel
	if($obnnhistoria==$obnnbarthel)
	{
		$pdf->Ln(1);
		$pdf->Rect(10,$pdf->GetY(),196,6);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(30,5,'Tipo de Tratamiento:',0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(37,5,utf8_decode($tipot),0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(22,5,'Fecha Barthel:',0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(8,5,$obfechabarthel,0,0,1);
		$pdf->Cell(20);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(22,5,'Hora Barthel:',0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(8,5,$obhorabarthel,0,0,1);
		$pdf->Cell(10);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(22,5,utf8_decode('N° Barthel: '.$obnnbarthel),0,0,1);
		$pdf->Ln(7);
		// $pdf->Ln(8);
		// $pdf->Cell(50,5,strtoupper('Comer Respuesta: ').$auxbtcomer,0,0,'L',1);//original
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(98,3,strtoupper('Comer'),0,0,'L',1);
		$pdf->Cell(98,3,strtoupper('Respuesta: ').$auxbtcomer,0,0,'R',1);
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',6);
		$pdf->MultiCell(196,3,'10 | INDEPENDIENTE: '.utf8_decode('Capaz de comer por si solo y en un tiempo razonable. la comida puede ser preparada y servida por otra persona'),0,'J');
		$pdf->MultiCell(196,3,'5 | NECESITA AYUDA: '.utf8_decode('Para comer la carne o el pan, pero es capaz de comer el solo'),0,'J');
		$pdf->MultiCell(196,3,'0 | DEPENDIENTE: '.utf8_decode('Nesecita ser alimentado por otra persona'),0,'J');
		$pdf->Ln(1);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(98,3,strtoupper(utf8_decode('Bañarse')),0,0,'L',1);
		$pdf->Cell(98,3,strtoupper('Respuesta: ').$auxbtbanarse,0,0,'R',1);
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',6);
		$pdf->MultiCell(196,3,'5 | INDEPENDIENTE: '.utf8_decode('Capaz de entrar a la ducha por si solo, bañarse en un tiempo razonable, secar su cuerpo y salir del baño por si mismo'),0,'J');
		$pdf->MultiCell(196,3,'0 | DEPENDIENTE: '.utf8_decode('Requiere de otro para ingresar y/o bañarse y/o secarse el cuerpo y/o salir del baño'),0,'J');
		$pdf->Ln(1);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(98,3,strtoupper(utf8_decode('Vestirse')),0,0,'L',1);
		$pdf->Cell(98,3,strtoupper('Respuesta: ').$auxbtvestirse,0,0,'R',1);
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',6);
		$pdf->MultiCell(196,4,'10 | INDEPENDIENTE: '.utf8_decode('Es capaz de quitarse y ponerse la ropa sin ayuda'),0,'J');
		$pdf->MultiCell(196,4,'5 | NECESITA AYUDA: '.utf8_decode('Realiza solo al menos la mitad de las tareas en un tiempo razonable'),0,'J');
		$pdf->MultiCell(196,4,'0 | DEPENDIENTE: '.utf8_decode('Requiere de otro incluso para alistar el vestuario'),0,'J');
		$pdf->Ln(1);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(98,3,strtoupper(utf8_decode('Arreglarse')),0,0,'L',1);
		$pdf->Cell(98,3,strtoupper('Respuesta: ').$auxbtarreglarse,0,0,'R',1);
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',6);
		$pdf->MultiCell(196,4,'5 | INDEPENDIENTE: '.utf8_decode('Realiza todas las actividades personales sin ninguna ayuda, los complementos necesarios pueder ser provistos por otra persona'),0,'J');
		$pdf->MultiCell(196,4,'0 | DEPENDIENTE: '.utf8_decode('Necesita alguna ayuda'),0,'J');
		$pdf->Ln(1);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(98,3,strtoupper(utf8_decode('Deposición')),0,0,'L',1);
		$pdf->Cell(98,3,strtoupper('Respuesta: ').$auxbtdeposicion,0,0,'R',1);
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',6);
		$pdf->MultiCell(196,5,'10 | CONTINENTE: '.utf8_decode('Ningún episodio de incontinencia'),0,'J');
		$pdf->MultiCell(196,4,'5 | ACCIDENTE OCASIONAL: '.utf8_decode('Menos de una vez por semana o necesita ayuda, enemas o supositorios'),0,'J');
		$pdf->MultiCell(196,4,'0 | INCONTINENTE: '.utf8_decode('Requiere pañal permanente'),0,'J');
		$pdf->Ln(1);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(98,3,strtoupper(utf8_decode('Micción')),0,0,'L',1);
		$pdf->Cell(98,3,strtoupper('Respuesta: ').$auxbtmiccion,0,0,'R',1);
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',6);
		$pdf->MultiCell(196,4,'10 | CONTINENTE: '.utf8_decode('Ningún episodio de incontinencia, capaz de utilizar cualquier dispositivo por si solo'),0,'J');
		$pdf->MultiCell(196,4,'5 | ACCIDENTE OCASIONAL: '.utf8_decode('Máximo un episodio de incontinencia en 24 horas, incluye necesitar ayuda en la manipulación de sondas y otros dispositivos'),0,'J');
		$pdf->MultiCell(196,4,'0 | INCONTINENTE: '.utf8_decode('Requiere pañal o sondas permanente'),0,'J');
		$pdf->Ln(1);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(98,3,strtoupper(utf8_decode('Ir al Retrete')),0,0,'L',1);
		$pdf->Cell(98,3,strtoupper('Respuesta: ').$auxbtretrete,0,0,'R',1);
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',6);
		$pdf->MultiCell(196,4,'10 | INDEPENDIENTE: '.utf8_decode('Entra y sale solo  y no necesita ayuda de otra persona'),0,'J');
		$pdf->MultiCell(196,4,'5 | NECESITA AYUDA: '.utf8_decode('Capaz de manejarse de una pequeña ayuda, capaz de usar el cuarto del baño. Puede limpiarse solo'),0,'J');
		$pdf->MultiCell(196,4,'0 | DEPENDIENTE: '.utf8_decode('Incapaz de manejarse sin ayuda'),0,'J');
		$pdf->Ln(1);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(98,3,strtoupper(utf8_decode('Traslado Sillon-Cama')),0,0,'L',1);
		$pdf->Cell(98,3,strtoupper('Respuesta: ').$auxbttraslado,0,0,'R',1);
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',6);
		$pdf->MultiCell(196,5,'15 | INDEPENDIENTE: '.utf8_decode('No precisa ayuda'),0,'J');
		$pdf->MultiCell(196,4,'10 | MINIMA AYUDA: '.utf8_decode('Incluye supervisión verbal o pequeña ayuda física'),0,'J');
		$pdf->MultiCell(196,4,'5 | GRAN AYUDA: '.utf8_decode('Precisa la ayuda de una persona fuerte o entrenada'),0,'J');
		$pdf->MultiCell(196,4,'0 | DEPENDIENTE: '.utf8_decode('Necesita grua o alzamiento de dos personas, incapaz de permanecer sentado'),0,'J');
		$pdf->Ln(1);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(98,3,strtoupper(utf8_decode('Deambulación')),0,0,'L',1);
		$pdf->Cell(98,3,strtoupper('Respuesta: ').$auxbtdeambulacion,0,0,'R',1);
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',6);
		$pdf->MultiCell(196,4,'15 | INDEPENDIENTE: '.utf8_decode('Puede andar 50 metros o su equivalente por casa sin ayuda ni supervisión de otra persona. Puede usar ayuda instrumentales (muletas o baston). Excepto andador. Si utiliza prótesis debe ser capaz de ponersela y quitarsela solo'),0,'J');
		$pdf->MultiCell(196,4,'10 | GRAN AYUDA: '.utf8_decode('Necesita supervisión o una pequeña ayuda física por otra persona. Precisa utilizar andador'),0,'J');
		$pdf->MultiCell(196,4,'5 | MINIMA AYUDA: '.utf8_decode('(En silla de ruedas) en 50 metros. No requiere ayuda ni supervisión'),0,'J');
		$pdf->MultiCell(196,4,'0 | DEPENDIENTE: '.utf8_decode('Inmovil'),0,'J');
		$pdf->Ln(1);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(98,3,strtoupper(utf8_decode('Subir y Bajar Escaleras')),0,0,'L',1);
		$pdf->Cell(98,3,strtoupper('Respuesta: ').$auxbtescaleras,0,0,'R',1);
		$pdf->Ln(3);
		$pdf->SetFont('Arial','',6);
		$pdf->MultiCell(196,4,'10 | INDEPENDIENTE: '.utf8_decode('Capaz de subir y bajar un piso sin la ayuda ni supervisión de otra persona'),0,'J');
		$pdf->MultiCell(196,4,'5 | NECESITA AYUDA: '.utf8_decode('Requiere de ayuda o supervisión de otra persona'),0,'J');
		$pdf->MultiCell(196,4,'0 | DEPENDIENTE: '.utf8_decode('Incapaz de salvar escalones, requiere ascensor o rampa'),0,'J');
		// $pdf->Ln(1);
		$aux="";
		$pdf->SetFont('Arial','',7);
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
		// $pdf->Ln(1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(95,5,'Informacion Prestador de Salud: ',0,0,1);
		$pdf->Ln(3);
		$pdf->Cell(95,5,'Prestador de Salud: '.$nombreprestadorsalud,0,0,1);
		$pdf->Ln(3);
		$pdf->Cell(95,5,'Profesional: '.$nommedico,0,0,1);
		$pdf->Cell(95,5,'Especialidad Profesional: '.strtoupper($medico_especialidad),0,0,1);
		$pdf->Ln(3);
		$pdf->Cell(95,5,'Registro Medico: '.$medico_registro,0,0,1);
		$pdf->Cell(95,5,'identificacion Profesional: '.$medico_documento,0,0,1); 
		$pdf->Ln(10);
	}
	else
	{
		
	}
	//valoracion
	if($obnnhistoria==$obnnvaloracion)
	{
		$pdf->Ln(1);
		$pdf->Rect(10,$pdf->GetY(),196,6);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(30,5,'Tipo de Tratamiento:',0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(37,5,utf8_decode($tipot),0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(25,5,'Fecha Valoracion:',0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(8,5,$obfechavaloracion,0,0,1);
		$pdf->Cell(15);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(22,5,'Hora Valoracion:',0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(8,5,$obhoravaloracion,0,0,1);
		$pdf->Cell(10);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(22,5,utf8_decode('N° Valoracion: '.$obnnvaloracion),0,0,1);
		$pdf->Ln(7);
		// $pdf->Ln(6);
		$pdf->Cell(40,5,strtoupper('Diagnosticos'),0,0,'',1);
		$pdf->Ln(6);
		// $pdf->Ln(6);
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
		// $pdf->Ln(2+$unsalto);
		$pdf->SetY($alto);
		$pdf->Ln(2);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(56,5,strtoupper(utf8_decode('CONDICIÓN NEUROLÓGICA')),0,0,'',1);
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
		$pdf->Cell(196,5,utf8_decode('Condición: ').$auxcngeneral,0,0,1);
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
			$pdf->Cell(196,5,strtoupper(utf8_decode('Test de Pfeiffer "Escala de detección de deterioro congnitivo-SPMSQ"')).utf8_decode(' Valoración N°').$testn,0,0,'',1);
			$pdf->Ln(6);
			$pdf->Cell(100,5,'Pregunta',0,0,'',1);
			$pdf->Cell(44,5,'Control',0,0,'L',1);
			$pdf->Cell(44,5,'Respuesta',0,0,'L',1);
			$pdf->Cell(8,5,'V/F',0,0,'C',1);
			$pdf->Ln(6);
			$pdf->Cell(100,5,utf8_decode('¿Que día es hoy (mes/día/año)?'),0,0,1);
			$pdf->Cell(45,5,$testp1,0,0,1);
			$pdf->Cell(45,5,$testr1,0,0,1);
			$pdf->Cell(6,5,$auxtpr1,0,0,1);
			$pdf->Ln(5);
			$pdf->Cell(100,5,utf8_decode('¿Que día de la semana es hoy?'),0,0,1);
			$pdf->Cell(45,5,$testp2,0,0,1);
			$pdf->Cell(45,5,$testr2,0,0,1);
			$pdf->Cell(6,5,$auxtpr2,0,0,1);
			$pdf->Ln(5);
			$pdf->Cell(100,5,utf8_decode('¿Donde estamos ahora (Lugar o edificación)?'),0,0,1);
			$pdf->Cell(45,5,$testp3,0,0,1);
			$pdf->Cell(45,5,$testr3,0,0,1);
			$pdf->Cell(6,5,$auxtpr3,0,0,1);
			$pdf->Ln(5);
			$pdf->Cell(100,5,utf8_decode('¿Cual es su numero de teléfono o dirección?'),0,0,1);
			$pdf->Cell(45,5,$testp4,0,0,1);
			$pdf->Cell(45,5,$testr4,0,0,1);
			$pdf->Cell(6,5,$auxtpr4,0,0,1);
			$pdf->Ln(5);
			$pdf->Cell(100,5,utf8_decode('¿Cuantos años tiene?'),0,0,1);
			$pdf->Cell(45,5,$testp5,0,0,1);
			$pdf->Cell(45,5,$testr5,0,0,1);
			$pdf->Cell(6,5,$auxtpr5,0,0,1);
			$pdf->Ln(5);
			$pdf->Cell(100,5,utf8_decode('¿En que día, mes y año nacio?'),0,0,1);
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
		$pdf->Ln(10);
	}
	else
	{

	}
	//norton
	if($obnnhistoria==$obnnnorton)
	{
		$pdf->Ln(1);
		$pdf->Rect(10,$pdf->GetY(),196,6);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(30,5,'Tipo de Tratamiento:',0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(37,5,utf8_decode($tipot),0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(22,5,'Fecha Norton:',0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(8,5,$obfechanorton,0,0,1);
		$pdf->Cell(20);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(22,5,'Hora Norton:',0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(8,5,$obhoranorton,0,0,1);
		$pdf->Cell(10);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(22,5,utf8_decode('N° Norton: '.$obnnnorton),0,0,1);
		$pdf->Ln(7);
		// $pdf->Ln(6);
		$pdf->Cell(36,5,strtoupper('Diagnosticos'),0,0,'',1);
		$pdf->Ln(6);
		$pdf->Cell(12,4,"CIE 10",1,0,'J');
		$pdf->Cell(184,4,strtoupper("Diagnosticos"),1,0,'');
		$pdf->SetFont('Arial','',8);
		$porciones = explode(";", $obldig);
		$pdf->Ln(3);
		$pdf->SetY($pdf->GetY());
		$pdf->Ln(2);
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
				$pdf->SetY($pdf->GetY()); 
				// $pdf->SetY($alto); 
				$subporciones = explode(" ", $porciones[$i]);
				$pdf->SetX(10);
				$pdf->Cell(12,4,$subporciones[count($subporciones)-1],1,0,'J');
				$pdf->Cell(184,4,str_replace($subporciones[count($subporciones)-1], " ", $porciones[$i]),1,0,'');
				// $pdf->SetY($alto);
				// $pdf->SetY($pdf->GetY()); 
				// $pdf->SetX(10);
				// $pdf->Cell(190,5,$porciones[$i],0,0,'');
				$pdf->Ln(5);
				$alto+=5;
			}
		}
		// $pdf->SetY($tty);
		// $pdf->MultiCell(190,$ellargo,'',1,'L');
		// $pdf->SetY($alto);
		$pdf->Ln(2);
		$pdf->SetY($pdf->GetY());
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
		$pdf->Ln(10);
	}
	else
	{

	}

	//braden
	if($obnnhistoria==$obnnbraden)
	{
		$pdf->Ln(1);
		$pdf->Rect(10,$pdf->GetY(),196,6);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(30,5,'Tipo de Tratamiento:',0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(37,5,utf8_decode($tipot),0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(22,5,'Fecha Braden:',0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(8,5,$obfechabraden,0,0,1);
		$pdf->Cell(20);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(22,5,'Hora Braden:',0,0,1);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(8,5,$obhorabraden,0,0,1);
		$pdf->Cell(10);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(22,5,utf8_decode('N° Braden: '.$obnnbraden),0,0,1);
		$pdf->Ln(7);
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
		$pdf->Ln(10);
	}
	else
	{

	}


	}

	$pdf->Output('','HC_'.$getfecha2.'-'.$gethora.'.pdf');
?>