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
		// $tipot=$fila->inclusion_pad_paciente;
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
	// foreach ($cn['hcconcentimiento'] as $fila)
	// {
	// 	$nombre_cuidador=$fila->concentimiento_nombre_cuidador;
	// 	$tdoccuidador=$fila->concentimiento_tipo_doc_cuidador;
	// 	$doccuidaor=$fila->concentimiento_doc_cuidador;
	// 	$otroresponsable=$fila->concentimiento_responsable_paciente;
	// 	$pronostico=$fila->concentimiento_pronostico;
	// 	$fconsentimiento=$fila->concentimiento_fecha;
	// 	$ndocpaciente=$fila->concentimiento_nombre_paciente;
	// 	$ndoresponsable=$fila->concentimiento_nombre_responsable;
	// 	$cualrelacion=$fila->concentimiento_da_concentimiento;
	// 	$nofirma=$fila->concentimiento_no_firma_por;
	// 	$materiales=$fila->concentimiento_mareriales;
	// 	$disentimiento=$fila->concentimiento_disentimiento;
	// 	if($fila->concentimiento_paciente_pad=="C")
	// 	{
	// 		$tipopaciente='Cronico';
	// 	}
	// 	else if($fila->concentimiento_paciente_pad=="A")
	// 	{
	// 		$tipopaciente='Agudo';
	// 	}
	// 	else if($fila->concentimiento_paciente_pad=="P")
	// 	{
	// 		$tipopaciente='Paleativo';
	// 	}
	// 	if($fila->concentimiento_probabilidad_exito=="B")
	// 	{
	// 		$probabilidad='Bueno';
	// 	}
	// 	else if($fila->concentimiento_probabilidad_exito=="R")
	// 	{
	// 		$probabilidad='Regular';
	// 	}
	// 	else if($fila->concentimiento_probabilidad_exito=="D")
	// 	{
	// 		$probabilidad='Deficiente';
	// 	}
	// 	$obldig=utf8_decode($fila->concentimiento_diagnosticos);//lista_diagnosticos diagnosticos
	// 	// $obmedico=$fila->quien_creo;
	// }
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
	}
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
	}
	foreach ($cn['hcbraden'] as $fila)
	{
		$bradenmovilidad=$fila->braden_movilidad;
		$bradenactividad=$fila->braden_actividad;
		$bradenpersecion=$fila->braden_persecion_sensorial;
		$bradenhumeda=$fila->braden_humedad;
		$bradennutricion=$fila->braden_nutricion;
		$bradenfriccion=$fila->braden_fricion;
		$bradentotal=$fila->braden_total_obtenido;
		$bradennivel=$fila->braden_nivel_riesgo;
		$obfechabraden=$fila->braden_f_reg;
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
	$GLOBALS['fef'] = $fef;
	$GLOBALS['obtipodoc'] = $obtipodoc;
	$GLOBALS['obndoc'] = $obndoc;
	$GLOBALS['obnombre'] = utf8_decode($obnombre);
	$GLOBALS['estadoc'] = $estadoc;
	$GLOBALS['obfnac'] = $obfnac;
	$GLOBALS['calculoedad'] = $calculoedad;
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
		    $this->Ln(10);
			$this->SetXY(9,1);
		    $this->Cell(193,10,'',0,0,'C',true);
		    $this->SetXY(9,8);
			$this->SetFont('Arial','B',15);
			// $this->Cell(65);
			$this->Cell(193,6,'HISTORIA CLINICA',0,0,'C',true);
			$this->Ln(6);
			$this->SetX(9);
			$this->SetFont('Arial','',13);
			$this->Cell(193,5,'Dr. '.$GLOBALS['nommedico'],0,0,'C',true);
			$this->Ln(5);
			$this->SetX(9);
			$this->SetFont('Arial','',11);
			$this->Cell(193,5, strtoupper('General'),0,0,'C',true);
			$this->Ln(5);
			$this->SetX(9);
			$this->Cell(193,5, 'Universidad de Nombreuniversidad',0,0,'C',true);
			$this->Ln(5);
			$this->SetX(9);
			$this->Cell(193,4, 'RM 00-00',0,0,'C',true);
			$this->Cell(158);
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
			$this->Cell(37,0,utf8_decode('Historia Clinica N°:'),0,0,1);
			$this->SetFont('Arial','',11);
			$this->Cell(12,0,$GLOBALS['obnrohc'],0,0,1);
			$this->Cell(10);
			$this->SetFont('Arial','B',11);
			$this->Cell(22,0,'F.Historia:',0,0,1);
			$this->SetFont('Arial','',11);
			$this->Cell(12,0,$GLOBALS['obfechahistoria'],0,0,1);
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
	$pdf->AddPage('P','A4',0);//'P','A4',0
	$esp=6;
	$esp2=7;
	$esp3=2;

	$pdf->SetFillColor(232,232,232);

	$pdf->Ln($esp3);
	$pdf->Cell(40,5,strtoupper('Motivo Consulta'),0,0,'',1);
	$pdf->Ln($esp);
	$pdf->Cell(160,5,$obmotivo,0,0,1);
	$pdf->Ln($esp2);
	$pdf->Cell(45,5,strtoupper('Enfermedad Actual'),0,0,'',1);
	$pdf->Ln($esp);
	$pdf->SetX(10);
	$pdf->MultiCell(190,5,$enfactual,0,'L');
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
	$pdf->Cell(50,5,strtoupper('Revision por Sistemas'),0,0,'',1);
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
	$pdf->Cell(40,5,strtoupper('Examen Fisico'),0,0,'',1);
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
	$pdf->Ln(6);
	// $pdf->Rect($pdf->GetX(),$pdf->GetY(),192,$pdf->GetPageWidth());
	$pdf->Cell(76,5,strtoupper('Continuacion de Examen Fisico'),0,0,'',1);//2 hoja
	$pdf->Ln(6);
	// $pdf->Rect($pdf->GetX(),$pdf->GetY(),192,$pdf->GetPageWidth()+25);
	$pdf->Cell(190,5,'Piel: '.$piel.$pdf->GetY(),0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Otros: '.$rvsotros,0,0,1);
	$pdf->Ln(6);
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
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Tipo de Dolor: '.$auxtipodolor,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(34,5,'Tratamiento Previo: ',0,0,1);
	$pdf->Cell(46,5,$auxtp,0,0,1);
	$pdf->Cell(10,5,'Cual: ',0,0,1);
	$pdf->Cell(40,5,$cualtprevio,0,0,1);
	$pdf->Cell(11,5,'Alivio: ',0,0,1);
	$pdf->Cell(15,5,$tpalivio,0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,'Resultador Ultimos Paraclinicos: '.$uparaclinico,0,'J');
	$pdf->MultiCell(190,5,'Plan Manejo Medico Actual: '.$planmedicoactual,0,'J');
	$pdf->Ln(6);
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
	//metodo 2
	$pdf->SetFont('Arial','',10);
	$porciones = explode(";", $oblmed);
	$tty=$pdf->GetY();
	$alto=$tty+2;//84
	$conta=0;
	$ellargo=(count($porciones)-1)*7;
	for ($i=0; $i < count($porciones)-1; $i++)
	{
		if((count($porciones)-1)>=12)
		{

		}
		else
		{
			$pdf->SetY($alto);
			// $pdf->SetX(10);
			// $pdf->Cell(190,5,'#'.' - '.$porciones[$i],0,0,'');
			$subporciones = explode(",", $porciones[$i]);
			$pdf->SetX(10);
			$pdf->Cell(46,5,'Nombre: '.$subporciones[0],0,0,'');
			$pdf->SetX(11);
			$pdf->Ln(4);
			$pdf->Cell(15,5,'Dosis: '.$subporciones[1],0,0,'L');
			$pdf->SetX(11);
			$pdf->Ln(4);
			$pdf->Cell(12,5,'Via: '.$subporciones[2],0,0,'L');
			$pdf->SetX(11);
			$pdf->Ln(4);
			$pdf->Cell(22,5,'Frecuencia: '.$subporciones[3],0,0,'L');
			$pdf->SetX(11);
			$pdf->Ln(4);
			$pdf->Cell(17,5,'Dilusion: '.$subporciones[4],0,0,'L');
			$pdf->SetX(11);
			$pdf->Ln(4);
			$pdf->Cell(17,5,'Solucion '.$subporciones[5],0,0,'L');
			$pdf->SetX(11);
			$pdf->Ln(4);
			$pdf->Cell(15,5,'T. Administracion: '.$subporciones[6],0,0,'L');
			$alto+=30;
		}
	}
	$pdf->SetY($tty);
	$pdf->SetX(11);
	// $pdf->MultiCell(190,$ellargo,'',1,'L');
	// $pdf->Ln(12);
	$pdf->SetY($alto);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Analisis: '.$auxvenoso,0,0,1);
	$pdf->Ln(10);
	$pdf->SetX(11);
	$pdf->Cell(35,5,strtoupper('Diagnosticos'),0,0,'',1);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',10);
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
			$pdf->SetY($alto); 
			$pdf->SetX(11);
			$pdf->Cell(190,5,$porciones[$i],0,0,'');
			$alto+=5;
		}
	}
	$pdf->SetY($tty);
	$pdf->SetX(11);
	// $pdf->MultiCell(190,$ellargo,'',1,'L');
	$pdf->SetY($alto);
	$pdf->SetFont('Arial','',11);
	$pdf->SetX(11);
	$pdf->Cell(50,5,strtoupper('Asistencia y Cuidados'),0,0,'',1);
	$actualaltura=$pdf->GetY();
	$pdf->Ln(6);
	$pdf->Cell(190,5,'Medico: '.$auxaycmedico,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Enfermera Ostomia: '.$auxaycenfermera,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Trabajo Social: '.$auxayctsocial,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Nutricion: '.$auxaycnutricion,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Fisioterapia: '.$auxaycfisioterapia,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Terapia Respiratoria: '.$auxayctrespiratoria,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Terapia Ocupacional: '.$auxayctocupacional,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Terapia Lenguaje: '.$auxayctlenguaje,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Aux. Enfermera: '.$auxauxenfermeria,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Otro: '.$otroenfermeria,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Educacion: '.$auxayceducacion,0,0,1);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',11);
	$pdf->SetX(11);
	$pdf->Cell(22,5,strtoupper('Esas (24H)'),0,0,'',1);
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
	$pdf->Ln(10);
	$pdf->SetX(11);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(12,5,strtoupper('Ecaf'),0,0,'',1);
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

	// //concentimiento
	// $pdf->Ln(6);
	// $pdf->SetFont('Arial','',11);
	// $pdf->Cell(190,5,'Consentimiento Informado',0,0,'C',1);
	// $pdf->Ln(6);
	// $pdf->SetFont('Arial','',10);
	// $pdf->MultiCell(190,5,utf8_decode('Dentro de las normas eticas exigidas en Colombia (ley 23 de 1981 para Medicina, Ley 911 de 2004 para Enfermeria, Ley 528 de 1999 para Fisioterapia, Ley de 2008 para Terapia Respiratoria, Ley 949 de 2005 para Terapia Ocupacional y Ley 376 de 1997 para Terapia de Lenguaje) y Decreto 780 de 2016, el profesional de la salud se encuentra en el deber de informar adecuada y oportunamente a todos sus paciente los riesgos que puedan derivarse del tratamiento y/o procedimiento que le sera practicado, solicitando su consentimiento anticipadamente. Por lo tanto, con el presente documento escrito, se pretende informar a usted y el favor, de manera respetuosam llene de su puño y letra, los espacions en blanco.'),0,'J');
	// $pdf->Ln(4);
	// $pdf->Cell(5,5,'Yo, ',0,0,1);
	// $pdf->Cell(2);
	// $pdf->Cell(strlen($nombre_cuidador)+30,5,strtoupper($nombre_cuidador),0,0,1);
	// $pdf->Cell(14,5,'con '.$tdoccuidador,0,0,1);
	// $pdf->Cell(5,5,'X',0,0,1);
	// $pdf->Cell(16,5,utf8_decode('N° ').$doccuidaor,0,0,1);
	// $pdf->Cell(2);
	// $pdf->Cell(100,5,' o como responsable y cuidador del paciente, ',0,0,1);
	// $pdf->Ln(6);
	// $pdf->Cell(strlen($otroresponsable)+10,5,$otroresponsable,0,0,1);
	// $pdf->Cell(4);
	// $pdf->Cell(14,5,utf8_decode('con Historia Clinica N° ').$obnrohc,0,0,1);
	// $pdf->Ln(8);
	// $pdf->MultiCell(190,5,utf8_decode('Solicito a los profesionales de la salud de la IPS COMPAÑIA CALIDAD Y CUIDADO EN SALUD S.A.S. SIGLA COMPCASA SAS que me realicen la atencion integral en el PAD como Paciente '.strtoupper($tipopaciente).' siendo este, el PAD, una alternativa asistencial continua para la presentacion de servicios de salud interdisciplinarios en el domicilo. basados en un PLAN DE INTERVERSION, diseñado por el grupo de profesionales, que lo ejecutan a traves de visitas domiciliarias programadas, definidas por la condicion de salud del paciente, que son idenficiadas con aplicacion de formatos, escalas y test, que ademas, evidencian riesgos existentes en el domicilio. El principal objetivo es el de brindar intervenciones terapeuticas con orientacion y educacion, a traves de la relacion profesional-paciente necesaria. que previamente he señalado al equipo de salud deseo tener, para que realice la atencion acordad y enunciada en el paciente. Entiendo que la atencion ofrecida es solo domiciliaria, la cual no contempla servicios de urgencia, internacion, quirurgicos, transporte asistencial medicalizado, ni de consulta externa intramural; que ademas, el domicilio presenta riesgos ambientales, que inducen en disfuncionalidad y morbiliades, limitando el alcance de los objetivos de forma integral, mas aun si estos no son controlados por mi cuidador, de los cuales tengo conocimiento.'),0,'J');

	// $pdf->SetFont('Arial','',11);
	// $pdf->SetX(11);
	// $pdf->Cell(26,5,'Diagnosticos',0,0,'',1);
	// $pdf->Ln(6);
	// $pdf->SetFont('Arial','',10);
	// $porciones = explode(";", $obldig);
	// $tty=$pdf->GetY();
	// $alto=$tty+2;//84
	// $conta=0;
	// $ellargo=(count($porciones)-1)*6;
	// $unsalto=0;
	// if($ellargo==0)
	// {
	// 	$pdf->MultiCell(190,5,$obldig,0,'L');
	// 	$pdf->Ln(6);
	// 	$unsalto=4;
	// }
	// else
	// {
	// 	$unsalto=0;
	// }
	// for ($i=0; $i < count($porciones)-1; $i++)
	// {
	// 	if((count($porciones)-1)>=6)
	// 	{

	// 	}
	// 	else
	// 	{
	// 		$pdf->SetY($alto); 
	// 		$pdf->SetX(10);
	// 		$pdf->Cell(190,5,$porciones[$i],0,0,'');
	// 		$alto+=5;
	// 	}
	// }
	// $pdf->SetY($tty);
	// // $pdf->MultiCell(190,$ellargo,'',1,'L');
	// $pdf->SetY($alto);
	// $pdf->SetFont('Arial','',10);
	// $pdf->MultiCell(190,5,utf8_decode('Procedimiento Atencion que involucra acciones centrdas en la asistencia - educacion en el domicilio, con abordaje intgral ofrecido por un equipo de salud interdisciplinario,, que busca intervenir de forma miltifactorial los diferentes aspectos que afectan el proceso cronico de salud enfermedad del paciente, e implica la evaluacion y manejo del paciente como individuo en su entorno autonomia, independecia y calidad de vida, a traves de potenciar el domicilio como el lugar terapeutico de atencion, sumando la vigilancia activa y asistencia con la promocion del autocuidado que ofrece la familia y el paciente en beneficio de su propia funcionalidad.'),0,'J');
	// $pdf->Ln(2);
	// $pdf->MultiCell(190,5,utf8_decode('Riesgos Previstos Generales. Cronicidad y/o agudizacion de Comorbilidades y Muerte, ademas de la presencia de comorbilidades inducidas por disfuncionalidad del entorno domiciliario no controlado por la familia.'),0,'J');
	// $pdf->Ln(2);
	// $pdf->MultiCell(190,5,utf8_decode('Riesgos Previstos Especificos. Efectos secundarios por uso de tecnologias en salud formulados, entregados y aplicados durenatela atencion domiciliaria, dolor irruptivo, perdida de capacidad funcional por agudizacion de las patologias de ingreso al programa de atencion domiciliaria y hospitalizacion por agudizacion de comorbilidades o presencia de enfermedad aguda emergente que puede ser inducida por suceso no seguro condicionado a disfuncionalidad del entorno domiciliario no controlado por la familia.'),0,'J');
	// $pdf->Ln(2);
	// $pdf->MultiCell(190,5,utf8_decode('Anestesia. No es requerida, sin embargo, la Analgesia y/o Sedacion es complemento terapeutico en el manejo de dolor cuando el medico asi lo determine, sobre todo en los pacientes de Cuidado Paleativo.'),0,'J');
	// $pdf->Ln(2);//hoja 2
	// $pdf->MultiCell(190,5,utf8_decode('Patologia. No es requeridad muestra de partes corporales para estudio por laboratoiro de patologia, pero en caso de ser requerida como parte del Plane de interversion programado al paciente, se realizara con aplicacion a la Referencia de Servicios de Salud de la Red de paciente y su asegurador.'),0,'J');
	// $pdf->Ln(2);
	// $pdf->MultiCell(190,5,utf8_decode('Probabilidad de exito. Las interverciones que cada profesional desarrolla no son ajenas a la variabilidad inter subjetiva. En general estas son mas precisas para la sintomatologia que para el de entidades y mucho menos cuando existen comorbilidades y cuando no se genera adherencia al Plan de interversion de parte del Cuidador o Paciente. La probabilidad de exito del procedimiento mencionado arriba es catalogado como: '.$probabilidad),0,'J');
	// $pdf->Ln(2);
	// $pdf->Cell(190,6,utf8_decode('Pronostico. Si decido no efectuar el procedimiento mencionado arriba, mi pronostico (condiciones medicas futuras) son:'),0,0,1);
	// $pdf->Ln(5);
	// $pdf->MultiCell(190,6,utf8_decode($pronostico),0,'J');
	// $pdf->Ln(5);
	// $pdf->MultiCell(190,5,utf8_decode('Alternativas de tratamiento. No existen y yo he elegido este procedimiento como metodo de atencion basada en un modelo integral asistencial domiciliario interdisiplinario con complementacion terapeutica.'),0,'J');
	// $pdf->Ln(2);
	// $pdf->MultiCell(190,5,utf8_decode('Consentimiento informado. Comprendo y acepto que durante las atenciones, pueden aparecer circunstancias imprevisibles o inesperadas, que puedan requerir una extension del procedimiento original o la relacion de otro procedimiento no mencionado arriba, o la utilizacion de otros recursos adicionales con los ciretrios que definan la necesidad de remision a un centro hospitalario de la Red propia del Paciente.'),0,'J');
	// $pdf->Ln(2);
	// $pdf->MultiCell(190,5,utf8_decode('Solicito a COMPAÑIA CALIDAD Y CUIDADO EN SALUD S.A.S. SIGLA COMPCASA SAS que realicen los procedimientos adicionales que juezguen necesarios que complementen el PLAN DE INTERVENCION del PROGRAMA DE ATENCION DOMICILIARIA - PAD. Al firmar este formulario reconozca que los he leido o que me ha sido leido y explicado y que comprendo perfectamente su contenido. Se me han dado amplias oportunidades de formular preguntas y que todas las preguntas que he formulado han sido respondidas o explicadas en forma satisfactoria. Todos los espacios en blanco o frases por completar han sido llenados y todos los puntos en los que no estoy de acuerdo han sido marcados antes de firmar este consentimiento. Acepto que las profesionales de la salud no son ciencias exactas y que no se me han garantizado resultados, que se esperan de los procedimientos de diagnostico y/o terapeuticos, en el sentido de que la practia de la atencion del PAD que se requiere, compromete solo una actividad de medios, pero no de resultados, mas aun cuando el estado mental del paciente y la ausencia de parientes o allegados impidan la advertencia de los riesgos previstos.'),0,'J');
	// $pdf->Ln(2);
	// $partef = explode("-", $fconsentimiento);
	// $pdf->MultiCell(190,5,utf8_decode('Comprendiendo estas limitaciones, solicito a COMPAÑIA CALIDAD Y CUIDADO EN SALUD S.A.S. SIGLA COMPCASA SAS que realice la inclision al PAD y el desarrollo del PLAN DE INTERVENCION, firmo el dia '.$partef[2].' de '.$partef[1].' de '.$partef[0]),0,'J');
	// $pdf->Ln(2);
	// $pdf->Cell(90,5,'........................................................',0,0,1);
	// $pdf->Cell(20);
	// $pdf->Cell(90,5,'........................................................',0,0,1);
	// $pdf->Ln(5);
	// $pdf->Cell(90,5,'C.C.. '.$ndocpaciente,0,0,1);
	// $pdf->Cell(20);
	// $pdf->Cell(90,5,'C.C.. '.$ndoresponsable,0,0,1);
	// $pdf->Ln(5);
	// $pdf->MultiCell(190,6,utf8_decode('La persona que da el consentimiento, tiene una relacion con el paciente de '.$cualrelacion.' si no es el mismo paciente.'),0,'J');
	// $pdf->Ln(2);
	// $pdf->MultiCell(190,6,utf8_decode('El paciente no pueder firmar por '.$nofirma),0,'J');
	// $pdf->Ln(2);
	// $pdf->MultiCell(190,6,utf8_decode('Los materiales adicionales que se utilizaron durante el proceso de consentimiento informado para este procedimiento incluyen:'),0,'J');
	// $pdf->MultiCell(190,6,utf8_decode($materiales),0,'J');
	// $pdf->Ln(2);
	// $pdf->Cell(85);
	// $pdf->Cell(90,5,'___________________________________________________',0,0,1);
	// $pdf->Ln(4);
	// $pdf->Cell(105);
	// $pdf->Cell(90,5,'Firma Profesional de la salud',0,0,1);
	// $pdf->Ln(5);
	// $pdf->Cell(50);
	// $pdf->Cell(30,5,'Fecha '.$fconsentimiento,0,0,1);
	// $pdf->Cell(2);
	// $pdf->Cell(90,5,'Registro        __________________________________________',0,0,1);
	// $pdf->Ln(8);
	// $pdf->MultiCell(190,5,utf8_decode('DISENTIMIENTO DEL PROCEDIMIENTO'),0,'C');
	// $pdf->MultiCell(190,5,utf8_decode('Hoy '.$partef[2].' de '.$partef[1].' de '.$partef[0].' he decidido no permitir, presindir o continuar con la realizacion del PLAN DE INTERVENCION del PROGRAMA DE ATENCION DOMICILIARIA. Voluntariamente haciendo uso de mi ferecho, sin que esto ocacione ningun tipo de represlia contra mi, siendo expuestos mis motivos de desistimiento a continuaicon:'),0,'J');
	// $pdf->MultiCell(190,6,utf8_decode($disentimiento),0,'J');
	// $pdf->MultiCell(190,5,utf8_decode('De igual forma declaro que he sido debidamente informado (a) sobre los riesgos y posibles complicaciones de salud que implica el disentimiento voluntario a la atencion del PAD. Afirmo que bajo mi responsabilidad decido desistir y en consecuencia declaro que COMPAÑIA CALIDAD Y CUIDADO EN SALUD S.A.S. SIGLA COMPCASA SAD, no es responsable legal en caso de complicaciones posterioes ni derivadas de mi objecion.'),0,'J');
	// $pdf->Ln(10);
	// $pdf->Cell(90,5,'........................................................',0,0,1);
	// $pdf->Cell(20);
	// $pdf->Rect(82,$pdf->GetY(),25,20);
	// $pdf->Cell(90,5,'........................................................',0,0,1);
	// $pdf->Ln(4);
	// $pdf->Cell(90,5,'Paciente o responsable',0,0,1);
	// $pdf->Cell(20);
	// $pdf->Cell(90,5,'Profesional de la Salud',0,0,1);
	// $pdf->Ln(5);
	// $pdf->Cell(90,5,'C.C.. '.$ndocpaciente,0,0,1);
	// $pdf->Cell(20);
	// $pdf->Cell(90,5,'C.C.. ______________',0,0,1);

	//barthel
	$pdf->Ln(16);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Barthel',0,0,'C',1);
	$pdf->Ln(6);

	$pdf->Cell(95,5,strtoupper('Comer'),0,0,'L',1);
	$pdf->Cell(95,5,strtoupper('Respuesta: ').$auxbtcomer,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',10);
	$pdf->MultiCell(190,5,'10 | INDEPENDIENTE: '.utf8_decode('Capaz de comer por si solo y en un tiempo razonable. la comida puede ser preparada y servida por otra persona'),0,'J');
	$pdf->MultiCell(190,5,'5 | NECESITA AYUDA: '.utf8_decode('Para comer la carne o el pan, pero es capaz de comer el solo'),0,'J');
	$pdf->MultiCell(190,4,'0 | DEPENDIENTE: '.utf8_decode('Nesecita ser alimentado por otra persona'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(95,5,strtoupper(utf8_decode('Bañarse')),0,0,'L',1);
	$pdf->Cell(95,5,strtoupper('Respuesta: ').$auxbtbanarse,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',10);
	$pdf->MultiCell(190,5,'5 | INDEPENDIENTE: '.utf8_decode('capaz de entrar a la ducha por si solo, bañarse en un tiempo razonable, secar su cuerpo y salir del baño por si mismo'),0,'J');
	$pdf->MultiCell(190,4,'0 | DEPENDIENTE: '.utf8_decode('Requiere de otro para ingresar y/o bañarse y/o secarse el cuerpo y/o salir del baño'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(95,5,strtoupper(utf8_decode('Vestirse')),0,0,'L',1);
	$pdf->Cell(95,5,strtoupper('Respuesta: ').$auxbtvestirse,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',10);
	$pdf->MultiCell(190,5,'10 | INDEPENDIENTE: '.utf8_decode('Es capaz de quitarse y ponerse la ropa sin ayuda'),0,'J');
	$pdf->MultiCell(190,4,'5 | NECESITA AYUDA: '.utf8_decode('Realiza solo al menos la mitad de las tareas en un tiempo razonable'),0,'J');
	$pdf->MultiCell(190,4,'0 | DEPENDIENTE: '.utf8_decode('Requiere de otro incluso para alistar el vestuario'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(95,5,strtoupper(utf8_decode('Arreglarse')),0,0,'L',1);
	$pdf->Cell(95,5,strtoupper('Respuesta: ').$auxbtarreglarse,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',10);
	$pdf->MultiCell(190,5,'5 | INDEPENDIENTE: '.utf8_decode('Realiza todas las actividades personales sin ninguna ayuda, los complementos necesarios pueder ser provistos por otra persona'),0,'J');
	$pdf->MultiCell(190,4,'0 | DEPENDIENTE: '.utf8_decode('Necesita alguna ayuda'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(95,5,strtoupper(utf8_decode('Deposicion')),0,0,'L',1);
	$pdf->Cell(95,5,strtoupper('Respuesta: ').$auxbtdeposicion,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',10);
	$pdf->MultiCell(190,5,'10 | CONTINENTE: '.utf8_decode('Ningun episodio de incontinencia'),0,'J');
	$pdf->MultiCell(190,4,'5 | ACCIDENTE OCASIONAL: '.utf8_decode('Menos de una vez por semana o necesita ayuda, enemas o supositorios'),0,'J');
	$pdf->MultiCell(190,4,'0 | INCONTINENTE: '.utf8_decode('Requiere pañal permanente'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(95,5,strtoupper(utf8_decode('Miccion')),0,0,'L',1);
	$pdf->Cell(95,5,strtoupper('Respuesta: ').$auxbtmiccion,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',10);
	$pdf->MultiCell(190,5,'10 | CONTINENTE: '.utf8_decode('Ningun episodio de incontinencia, capaz de utilizar cualquier dispositivo por si solo'),0,'J');
	$pdf->MultiCell(190,5,'5 | ACCIDENTE OCASIONAL: '.utf8_decode('Maximo un episodio de incontinencia en 24 horas, incluye necesitar ayuda en la manipulacion de sondas y otros dispositivos'),0,'J');
	$pdf->MultiCell(190,4,'0 | INCONTINENTE: '.utf8_decode('Requiere pañal o sondas permanente'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(95,5,strtoupper(utf8_decode('Ir al Retrete')),0,0,'L',1);
	$pdf->Cell(95,5,strtoupper('Respuesta: ').$auxbtretrete,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',10);
	$pdf->MultiCell(190,5,'10 | INDEPENDIENTE: '.utf8_decode('Entra y sale solo  y no necesita ayuda de otra persona'),0,'J');
	$pdf->MultiCell(190,5,'5 | NECESITA AYUDA: '.utf8_decode('Capaz de manejarse de una pequeña ayuda, capaz de usar el cuarto del baño. Puede limpiarse solo'),0,'J');
	$pdf->MultiCell(190,4,'0 | DEPENDIENTE: '.utf8_decode('Incapaz de manejarse sin ayuda'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(95,5,strtoupper(utf8_decode('Traslado Sillon-Cama')),0,0,'L',1);
	$pdf->Cell(95,5,strtoupper('Respuesta: ').$auxbttraslado,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',10);
	$pdf->MultiCell(190,5,'15 | INDEPENDIENTE: '.utf8_decode('No precisa ayuda'),0,'J');
	$pdf->MultiCell(190,4,'10 | MINIMA AYUDA: '.utf8_decode('Incluye supervision verbal o pequeña ayuda fisica'),0,'J');
	$pdf->MultiCell(190,4,'5 | GRAN AYUDA: '.utf8_decode('Precisa la ayuda de una persona fuerte o entrenada'),0,'J');
	$pdf->MultiCell(190,4,'0 | DEPENDIENTE: '.utf8_decode('Necesita grua o alzamiento de dos personas, incapaz de permanecer sentado'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(95,5,strtoupper(utf8_decode('Deambulacion')),0,0,'L',1);
	$pdf->Cell(95,5,strtoupper('Respuesta: ').$auxbtdeambulacion,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',10);
	$pdf->MultiCell(190,4,'15 | INDEPENDIENTE: '.utf8_decode('Puede andar 50 metros o su equivalente por casa sin ayuda ni supervision de otra persona. Puede usar ayuda instrumentales (muletas o baston). Excepto andador. Si utiliza protesis debde ser capaz de ponersela y quitarsela solo'),0,'J');
	$pdf->MultiCell(190,4,'10 | GRAN AYUDA: '.utf8_decode('Necesita supervision o una pequeña ayuda fisica por otra persona. Precisa utilizar andador'),0,'J');
	$pdf->MultiCell(190,4,'5 | MINIMA AYUDA: '.utf8_decode('(En silla de ruedas) en 50 metros. No requiere ayuda ni supervision'),0,'J');
	$pdf->MultiCell(190,4,'0 | DEPENDIENTE: '.utf8_decode('Inmovil'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(95,5,strtoupper(utf8_decode('Subir y Bajar Escaleras')),0,0,'L',1);
	$pdf->Cell(95,5,strtoupper('Respuesta: ').$auxbtescaleras,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',10);
	$pdf->MultiCell(190,5,'10 | INDEPENDIENTE: '.utf8_decode('Capaz de subir y bajar un piso sin la ayuda ni supervision de otra persona'),0,'J');
	$pdf->MultiCell(190,5,'5 | NECESITA AYUDA: '.utf8_decode('Requiere de ayuda o supervision de otra persona'),0,'J');
	$pdf->MultiCell(190,4,'0 | DEPENDIENTE: '.utf8_decode('Incapaz de salvar escalones, requiere ascensor o rampa'),0,'J');
	$pdf->Ln(2);
	$aux="";
	$pdf->SetFont('Arial','',11);
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

	//valoracion
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Valoracion',0,0,'C',1);
	$pdf->Ln(6);

	$pdf->Cell(40,5,strtoupper('Diagnosticos'),0,0,'',1);
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',10);
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
			$pdf->SetY($alto); 
			$pdf->SetX(10);
			$pdf->Cell(190,5,$porciones[$i],0,0,'');
			$alto+=5;
		}
	}
	$pdf->SetY($tty);
	// $pdf->MultiCell(190,$ellargo,'',1,'L');
	// $pdf->Ln(2+$unsalto);
	$pdf->SetY($alto);
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(56,5,strtoupper('Condicion Neurologica'),0,0,'',1);
	$pdf->Ln(6);
	$pdf->MultiCell(190,5,'Apertura Ocular: '.$auxcnocular,0,'J');
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,'Respuesta Verbal: '.$auxcnverbal,0,'J');
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,'Respuesta Motora: '.$auxcnmotora,0,'J');
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Total: '.$cntotal,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Condicion: '.$auxcngeneral,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Otro: '.$cnotrogeneral,0,0,1);
	$pdf->Ln(6);
	if($testtotal=="Sin Informacion")
	{
		$pdf->Cell(190,5,'El Paciente no puede realizar Test de Pfeiffer',0,0,1);
		$pdf->Ln(6);
		$pdf->Cell(190,5,'Motivo: '.$testvalpregunta,0,0,1);
		$pdf->Ln(6);
	}
	else
	{
		$pdf->Cell(190,5,strtoupper('Test de Pfeiffer "Escala de detecion de deterioro congnitivo-SPMSQ"').utf8_decode(' Valoracion N°').$testn,0,0,'',1);
		$pdf->Ln(6);
		$pdf->Cell(100,5,'Pregunta',0,0,'',1);
		$pdf->Cell(40,5,'Control',0,0,'L',1);
		$pdf->Cell(40,5,'Respuesta',0,0,'L',1);
		$pdf->Cell(10,5,'V/F',0,0,'C',1);
		$pdf->Ln(6);
		$pdf->Cell(100,5,utf8_decode('¿Que dia es hoy (mes/dia/año)?'),0,0,1);
		$pdf->Cell(40,5,$testp1,0,0,1);
		$pdf->Cell(40,5,$testr1,0,0,1);
		$pdf->Cell(10,5,$auxtpr1,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(100,5,utf8_decode('¿Que dia de la semana es hoy?'),0,0,1);
		$pdf->Cell(40,5,$testp2,0,0,1);
		$pdf->Cell(40,5,$testr2,0,0,1);
		$pdf->Cell(10,5,$auxtpr2,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(100,5,utf8_decode('¿Donde estamos ahora (Lugar o edificacion)?'),0,0,1);
		$pdf->Cell(40,5,$testp3,0,0,1);
		$pdf->Cell(40,5,$testr3,0,0,1);
		$pdf->Cell(10,5,$auxtpr3,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(100,5,utf8_decode('¿Cual es su numero de telefono o direccion?'),0,0,1);
		$pdf->Cell(40,5,$testp4,0,0,1);
		$pdf->Cell(40,5,$testr4,0,0,1);
		$pdf->Cell(10,5,$auxtpr4,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(100,5,utf8_decode('¿Cuantos años tiene?'),0,0,1);
		$pdf->Cell(40,5,$testp5,0,0,1);
		$pdf->Cell(40,5,$testr5,0,0,1);
		$pdf->Cell(10,5,$auxtpr5,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(100,5,utf8_decode('¿En que dia, mes y año nacio?'),0,0,1);
		$pdf->Cell(40,5,$testp6,0,0,1);
		$pdf->Cell(40,5,$testr6,0,0,1);
		$pdf->Cell(10,5,$auxtpr6,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(100,5,utf8_decode('¿Como se llama el presidente de Colombia?'),0,0,1);
		$pdf->Cell(40,5,$testp7,0,0,1);
		$pdf->Cell(40,5,$testr7,0,0,1);
		$pdf->Cell(10,5,$auxtpr7,0,0,1);
		$pdf->Ln(5);
		$pdf->MultiCell(80,5,utf8_decode('¿Quien mandaba antes del presidente actual en Colombia?'),0,'J');
		$pdf->SetY($pdf->GetY()-5);
		$pdf->SetX(110);
		$pdf->Cell(40,5,$testp8,0,0,1);
		$pdf->SetX(150);
		$pdf->Cell(40,5,$testr8,0,0,1);
		$pdf->SetX(190);
		$pdf->Cell(10,5,$auxtpr8,0,0,1);
		$pdf->Ln(6);
		$pdf->Cell(100,5,utf8_decode('¿Como se llama o se llamaba su señora madre?'),0,0,1);
		$pdf->Cell(40,5,$testp9,0,0,1);
		$pdf->Cell(40,5,$testr9,0,0,1);
		$pdf->Cell(10,5,$auxtpr9,0,0,1);
		$pdf->Ln(6);
		$pdf->MultiCell(85,5,utf8_decode('Si a 20 le restamos 3, ¿quedad?, y si le restamos 3 ¿Cuanto queda?'),0,'J');
		$pdf->SetY($pdf->GetY()-5);
		$pdf->SetX(110);
		$pdf->Cell(30,5,$testp10,0,0,1);
		$pdf->SetX(150);
		$pdf->Cell(30,5,$testr10,0,0,1);
		$pdf->SetX(190);
		$pdf->Cell(10,5,$auxtpr10,0,0,1);
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

	//norton
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Norton',0,0,'C',1);
	$pdf->Ln(6);

	$pdf->Cell(36,5,strtoupper('Diagnosticos'),0,0,'',1);
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',10);
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
			$pdf->SetY($alto); 
			$pdf->SetX(10);
			$pdf->Cell(190,5,$porciones[$i],0,0,'');
			$alto+=5;
		}
	}
	$pdf->SetY($tty);
	// $pdf->MultiCell(190,$ellargo,'',1,'L');
	$pdf->SetY($alto);
	$pdf->Ln(4);
	if($pdf->GetY()>240)
	{
		$pdf->Ln(40);
	}
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(95,5,strtoupper('Estado Fisico'),0,0,'L',1);
	$pdf->Cell(95,5,strtoupper('Puntos: ').$nortonfisico,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->Cell(50,5,utf8_decode('Muy Malo'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Regular'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Mediano'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Bueno'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$miat=$pdf->GetY();
	$pdf->SetY($miat);
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('1 comida diaria 1 Raciones de proteinas Menu < 1000 kcal Toma 1/3 del menu Bebe < de 50mm ml 1° < de 35,5 o > de 38 °C Edemas generalizados, piel muy seca IMC > o igual a 50'),0,'J');
	$pdf->SetY($miat);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('2 Comidas diarias 2 Raciones de proteinas Menu 1000 kcal Toma % del menu Bebe 500 - 1000 ml T° 37,5 - 38 °C Piel seca, escamosa IMC > o igual a 50'),0,'J');
	$pdf->SetY($miat);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('3 Comidas diarias 3 Raciones de proteinas Menu 1500 kcal Toma mas de % menu Bebe 1000 -1500 ml T° 37 -37,5 °C Relleno capilar lento IMC > 20 - < 25'),0,'J');
	$pdf->SetY($miat);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('4 Comidas diarias 4 Raciones de proteinas Menu 2000 kcal Toma todo el menu Bebe 1500 - 2000 ml T° 36 - 37 °C Mucosas humeas IMC 20 - 25 NPT y SNG'),0,'J');
	$pdf->Ln(18);
	if($pdf->GetY()>240)
	{
		$pdf->Ln(40);
	}
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(95,5,strtoupper('Estado Metal'),0,0,'L',1);
	$pdf->Cell(95,5,strtoupper('Puntos: ').$nortonmental,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->Cell(50,5,utf8_decode('Estupuroso/Comatoso'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Confuso'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Apatico'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Alerta'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$miat2=$pdf->GetY();
	$pdf->SetY($miat2);
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('Desorientado en tiempo, lugar y persona Despierta solo con estimulos dolorosos, pero no hay respuesta verbal Nunca esta totalmente despierto Ausencia total de respuesta, incluso la refleja'),0,'J');
	$pdf->SetY($miat2);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('Inquieto, agresivo, irritable, dormido Respuesta lenta a fuertes estimulos dolorosos Cuando despierta, responde verbalmente pero breve e incontexto intermitente desorientado'),0,'J');
	$pdf->SetY($miat2);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('Aletargado, olvidadizo somnoliento, pasivo, torpe, perezoso Ante estimulo, despierta sin dificultad y permanece orientado Obedece ordenes sencillas Posible desorientacion en el tiempo y respuesta verbal lenta y vacilante'),0,'J');
	$pdf->SetY($miat2);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('Esta orientado en tiempo, lugar y perosna Responde adecuadamente a estimulos visuales, auditivos y tactiles Comprende la informacion'),0,'J');
	$pdf->Ln(14);
	if($pdf->GetY()>240)
	{
		$pdf->Ln(40);
	}
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(95,5,strtoupper('Actividad'),0,0,'L',1);
	$pdf->Cell(95,5,strtoupper('Puntos: ').$nortonactividad,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->Cell(50,5,utf8_decode('Encamado'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Sentado'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Camina con Ayuda'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Ambulante'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$miat3=$pdf->GetY();
	$pdf->SetY($miat3);
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('Falta de autonomia para realiar todos sus movimientos (despendencia toal) Precia de ayuda para realizar actividades (comer, asearse,..)'),0,'J');
	$pdf->SetY($miat3);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('No puede caminar, no puede mantenerse de pie, es capaz de mantenerse sentado o puede movilizarse en silla. Precisa ayuda de otro a travez de dispositivos mecanicos'),0,'J');
	$pdf->SetY($miat3);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('Es capaz de camniar con ayuda o supervision de otra persona o de medicos mecanicos como aparatos con mas de un punto de apoyo inicia movimientos voluntarios con bastante frecuencia pero requiere ayuda para realizar, completar o mantener algunos de ellos'),0,'J');
	$pdf->SetY($miat3);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('Independiente total, no necesita ayuda de otra persona. Capaz de camninar solo, aunque se ayude de aparatos de un solo punto de apoyo o lleve protesis'),0,'J');
	$pdf->Ln(18);
	if($pdf->GetY()>240)
	{
		$pdf->Ln(40);
	}
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(95,5,strtoupper('Movilidad'),0,0,'',1);
	$pdf->Cell(95,5,strtoupper('Puntos: ').$nortonmovilidad,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->Cell(50,5,utf8_decode('Inmovil'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Muy limitada'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Disminuida'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Total'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$miat4=$pdf->GetY();
	$pdf->SetY($miat4);
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('Es incapaz de cambiar de postura por si mismo, mantener la posicion corporal o sustenrarla'),0,'J');
	$pdf->SetY($miat4);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('Solo inicia movilizaciones voluntarias con escasa frecuenia y necesita ayuda para finalizar todos los movimientos'),0,'J');
	$pdf->SetY($miat4);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('Inicia movimientos voluntarios con bastante frecuencia, pero requiere ayuda para realizar, comletar o mantener algunos de ellos'),0,'J');
	$pdf->SetY($miat4);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('Es totalmente capaz de cambiar de postura corporal de forma autonoma, mantenerla o sustentarla'),0,'J');
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(95,5,strtoupper('Incontinencia'),0,0,'',1);
	$pdf->Cell(95,5,strtoupper('Puntos: ').$nortonincontinencia,0,0,'R',1);
	$pdf->Ln(6);
	$pdf->Cell(50,5,utf8_decode('Urinaria y Fecal'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Urinaria o Fecal'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Ocasional'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Ninguna'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$miat5=$pdf->GetY();
	$pdf->SetY($miat5);
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('No controla ninguno de los esfinteres'),0,'J');
	$pdf->SetY($miat5);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('No controla uno de los dos esfinteres permanentemente'),0,'J');
	$pdf->SetY($miat5);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('No controla esporadicamente uno o ambos esfinteres en 24 horas'),0,'J');
	$pdf->SetY($miat5);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('Control de ambos esfinteres implantacion de sonda vesical y control de esfinter anal'),0,'J');
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
	$pdf->MultiCell(190,4,'Total: '.$nortontotal.' Nivel: '.utf8_decode($aux),0,'J');

	//braden
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Braden',0,0,'C',1);
	$pdf->Ln(6);

	if($pdf->GetY()>240)
	{
		$pdf->Ln(40);
	}
	$pdf->SetFont('Arial','',11);
	$pdf->MultiCell(190,5,strtoupper('Intensidad y Duracion de la Presion '),0,'C');
	$pdf->Cell(190,5,'Movilidad capacidad para cambiar y controlar la posicion del cuerpo   Puntaje: '.$bradenmovilidad,0,0,'',1);
	$pdf->Ln(6);
	$pdf->Cell(50,5,utf8_decode('Completamente inmovil'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Muy Limitada'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Ligeramente Limitada'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Sin Limitaciones'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$miatbd=$pdf->GetY();
	$pdf->Sety($miatbd);
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('No realiza ningun movimiento con el cuerpo o las extremidades sin ayuda'),0,'J');
	$pdf->Sety($miatbd);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('Ocasionalmente realiza ligeros cambios en la posicion del cuerpo o de las extremidades, pero no es capaz de realizar cambios frecuentes o significativos sin ayuda'),0,'J');
	$pdf->Sety($miatbd);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('Realiza frecuentes aunque ligeros cambios en la posicion del cuerpo o de las extremidades sin ayuda'),0,'J');
	$pdf->Sety($miatbd);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('Realiza importantes y frecuentes cambios de posicion sun ayuda'),0,'J');
	$pdf->Ln(18);
	if($pdf->GetY()>240)
	{
		$pdf->Ln(40);
	}
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Actividad nivel de actividad fisica   Puntaje: '.$bradenactividad,0,0,'',1);
	$pdf->Ln(6);
	$pdf->Cell(50,5,utf8_decode('En Cama'),0,'J');
	$pdf->Cell(47,5,utf8_decode('En silla'),0,'J');
	$pdf->Cell(48,5,utf8_decode('Camina ocasionalmente'),0,'J');
	$pdf->Cell(55,5,utf8_decode('Camina con Frecuencia'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$miatbd2=$pdf->GetY();
	$pdf->Sety($miatbd2);
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('Limitado a la cama'),0,'J');
	$pdf->Sety($miatbd2);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('Capacidad para caminar severamente limitada o inexistente No puede soportar su propio peso y/o hay que ayudarlo para sentarse en una silla o en una silla de ruedas'),0,'J');
	$pdf->Sety($miatbd2);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('Camina ocacionalmente durante el dia, pero distancias muy cortas, con o sin ayuda. Pasala mayor parte de cada turno en la cama o en la silla'),0,'J');
	$pdf->Sety($miatbd2);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('Camina fuera de la habitacion al menos dos veces al dia y dentro de la habitacion al menos una vez cada dos horas durante las horas de paseo'),0,'J');
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Persecion Sensorial capacidad de responder adecuadamente, segun su nivel de desarrollo al disconfort   P: '.$bradenpersecion,0,0,'',1);
	$pdf->Ln(6);
	$pdf->Cell(50,5,utf8_decode('Completamente limitada'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Muy limitada'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Levemente limitada'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Sin limitaciones'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$miatbd3=$pdf->GetY();
	$pdf->Sety($miatbd3);
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('No responde a estimulos dolorosos (no gime, no se estremece ni se agarra) debido a un bajo nivel de conciencia o a sedacion O capacidad limitada para sentir dolor en la mayor parte del cuerpo'),0,'J');
	$pdf->Sety($miatbd3);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('Responde solo a estimulos dolorosos. Incapacidad para comunicar malestar, excepto gimiendo o mostrando inquietud O tiene alguna alteracion sensorial que limita la capacidad de sentir dolor o malestar'),0,'J');
	$pdf->Sety($miatbd3);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('Responde a ordenes verbales, pero no siempre puede comunicar la incomodidad o la necesidad de ser cambiado de postura O tiene alguna alteracion sensorial que limita la capacidad de sentir dolor o malestar'),0,'J');
	$pdf->Sety($miatbd3);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('Responde a ordenes verbales. No tiene ninguna alteracion sensorial que limit su capacidad de sentir o comunicar dolor o malestar'),0,'J');
	$pdf->Ln(18);
	if($pdf->GetY()>240)
	{
		$pdf->Ln(40);
	}
	$pdf->SetFont('Arial','',11);
	$pdf->MultiCell(190,5,strtoupper('Tolerancia de la Piel y La estructura de Soporte '),0,'C');
	$pdf->Cell(190,5,'Humedad nivel de expocision de la piel humeda   Puntaje: '.$bradenhumeda,0,0,'',1);
	$pdf->Ln(6);
	$pdf->Cell(50,5,utf8_decode('Completamente humeda'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Muy humeda'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Ocacionalmente humeda'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Raramente humeda'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$miatbd4=$pdf->GetY();
	$pdf->Sety($miatbd4);
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('la piel se mantiene humeda casi permanentemente debido a la transpiracion, orina, drenaje, etc. La humedad es detectada cada vez que se gira o mueve al paciente'),0,'J');
	$pdf->Sety($miatbd4);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('La piel esta humedad a menudo pero no siempre. La ropa de cama debe ser cambiada al menos cada 8 horas'),0,'J');
	$pdf->Sety($miatbd4);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('La piel esta humeda de forma ocasional, necesitando cmabio de la ropa de cama cada 12 horas.'),0,'J');
	$pdf->Sety($miatbd4);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('La piel esta casi siempre seca. Hay que cambiar los pañales de forma rutinaria; la ropa de cama solo hay que cambiarla cada 24 horas'),0,'J');
	$pdf->Ln(30);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Nutricion patron habitual de ingesta de alimentos   Puntaje: '.$bradennutricion,0,0,'',1);
	$pdf->Ln(6);
	$pdf->Cell(50,5,utf8_decode('Muy pobre'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Indecuada'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Adecuada'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Excelente'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$miatbd5=$pdf->GetY();
	$pdf->Sety($miatbd5);
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('Esta en ayunas; o a dieta liquida; o con sueroterapia mas de 5 dias. Raras veces come mas de la mitad de cualquuier comida ofrecida'),0,'J');
	$pdf->Sety($miatbd5);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('Se le admnisitra una nutricion enteral (SNG) o nutricion parental(IV) que le proporciona una cantidad inadecuada de calorias y minerales para su edad'),0,'J');
	$pdf->Sety($miatbd5);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('Come la mitad de la mayoria de las comidas. Come un total de 4 raciones de proteinas al dia'),0,'J');
	$pdf->Sety($miatbd5);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('Toma una dieta normal que le proporciona las calorias adecuadas para su edad. Nunca rechaza una comida. Ocasionalmente come entre comidas'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Friccion la piel se mueve contra la superficie de apoyo   Puntos: '.$bradenfriccion,0,0,'',1);
	$pdf->Ln(6);
	$pdf->Cell(50,5,utf8_decode('Problema significativo'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Problema'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Problema potencial'),0,'J');
	$pdf->Cell(50,5,utf8_decode('Sin problema aparente'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$miatbd6=$pdf->GetY();
	$pdf->Sety($miatbd6);
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('La espasticidad, contracturas, picores o agitacion le llevan a un movimiento y friccion casi constantes'),0,'J');
	$pdf->Sety($miatbd6);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('Requiere ayuda para moverse. Es imposible levantarle completamente sin que se produzca un roce contra las sabanas. Frecuentemente se desliza hacia abajo en la cama o en la silla'),0,'J');
	$pdf->Sety($miatbd6);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('Se mueve debilmente o necesita una ayuda minima. Mientras se mueve, es posible que la piel roce de algun modo con las sabanas, la silla y otros dispositivos. Ocasionalmente se deliza hacia abajo'),0,'J');
	$pdf->Sety($miatbd6);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('Se mueve independientemente en la cama y en la silla, y tiene suficiente fuerza muscular para levantarse completamente mientras se mueve. Mantiene una buena postura en la cama o en la silla en todo momento'),0,'J');
	$pdf->Ln(2);
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
	$pdf->MultiCell(190,4,'Total Puntaje: '.$bradentotal.' Nivel: '.utf8_decode($aux),0,'J');

	$pdf->Output('','HC-General_'.$getfecha2.'-'.$gethora.'.pdf');
?>
<!-- </body>
</html> -->