<?php
	header('Content-Type: text/html; charset=UTF-8');
	$campos = json_decode(json_encode($cn), True);
	foreach ($cn['hcpadenf'] as $fila)
	{
		$obldig=utf8_decode($fila->enf_pad_diagnosticos);//lista_diagnosticos diagnosticos
		$antecedentes=$fila->enf_pad_antecedentes;
		$valoracionsubjetiva=$fila->enf_pad_val_subjetiva;
		$svfc=$fila->enf_pad_sv_fc;
		$svfr=$fila->enf_pad_sv_fr;
		$svt=$fila->enf_pad_sv_t;
		$svta=$fila->enf_pad_svta;
		$svsaturacion=$fila->enf_pad_sv_saturacion;
		$svglucometria=$fila->enf_pad_sv_glucometria;

		$dom1p1=$fila->enf_pad_dom1_p1;
		$dom1p2=$fila->enf_pad_dom1_p2;
		$dom2nutricion=$fila->enf_pad_dom2_nutricion;
		$dom2otro=$fila->enf_pad_dom2_otro;
		$dom2mucosa=$fila->enf_pad_dom2_mucosa;
		$dom2dentadura=$fila->enf_pad_dom2_dentadura;
		$dom2piel=$fila->enf_pad_dom2_piel;
		$dom2hidratacion=$fila->enf_pad_dom2_hidratacion;
		$dom2adobmen=$fila->enf_pad_dom2_abdomen;
		$dom2rsls=$fila->enf_pad_dom2_rsls;
		$d2sng=$fila->enf_pad_dom2_sng;
		$dom2drenaje=$fila->enf_pad_dom2_drenaje;
		$d2caracteristicas=$fila->enf_pad_dom2_caracteristicas;
		$dom2gastrostomia=".";//$fila->enf_pad_dom2_gastrostomia;
		$dom3deposiciones=$fila->enf_pad_dom3_deposiciones;
		$dom3tipo=$fila->enf_pad_dom3_tipo;
		$dom3vomito=$fila->enf_pad_dom3_vomito;
		$d3caracteristicas=$fila->enf_pad_dom3_caracteristicas;
		$dom3colostomia=$fila->enf_pad_dom3_colostomia;
		$dom3oresis=$fila->enf_pad_dom3_oresis;
		$dom4dependencia=$fila->enf_pad_dom4_dependencia;
		$dom4sueno=$fila->enf_pad_dom4_sueno;
		$d4otros=$fila->enf_pad_dom4_sueno_otros;
		$dom4fiebre=$fila->enf_pad_dom4_fiebre;
		$d4tipo=$fila->enf_pad_dom4_tipo;
		$dom4movilidad=$fila->enf_pad_dom4_fisica;
		$d4movilidadetalle=$fila->enf_pad_dom4_fisica_descripcion;
		$d4apoyo=".";//$fila->enf_pad_dom4_fisica_apoyo;
		$dom4muscular=$fila->enf_pad_dom4_muscular;
		$d4musculardetalle=$fila->enf_pad_dom4_muscular_descripcion;
		$dom4respiratorias=$fila->enf_pad_dom4_respiratorias;
		$d4capilar=$fila->enf_pad_dom4_llenado_capilar;
		$dom4pulso=$fila->enf_pad_dom4_pulso;
		$d4pulsofecha=$fila->enf_pad_dom4_pulso_f_implantacion;
		$dom4fr=$fila->enf_pad_dom4_fr;
		$d4frdetalle=$fila->enf_pad_dom4_fr_descripcion;
		$dom4ruidos=$fila->enf_pad_dom4_ruidos;
		$dom4tos=$fila->enf_pad_dom4_tos;
		$d4tostipo=$fila->enf_pad_dom4_tos_tipo;
		$dom4oxigeno=$fila->enf_pad_dom4_oxigenoterapia;
		$d4oxigenotipo=$fila->enf_pad_dom4_oxigenoterapia_tipo;
		$d4fio=$fila->enf_pad_dom4_fio;
		$d4tet=$fila->enf_pad_dom4_tet;
		$dom4traqueostomia=$fila->enf_pad_dom4_traqueostomia;

		$dom5escala=$fila->enf_pad_dom5_escala;
		$dom5conciencia=$fila->enf_pad_dom5_conciencia;
		$dconcienciaotro=$fila->enf_pad_dom5_otro;
		$dom5comunicacion=$fila->enf_pad_dom5_comunicacion;
		$d6comunicacionotro=$fila->enf_pad_dom5_comunicacion_otro;
		$dom6emocional=$fila->enf_pad_dom6_emocional;
		$dom6lenguaje=$fila->enf_pad_dom6_lenguaje;	
		$dom6escucha=$fila->enf_pad_dom6_escucha;
		$dom6d6vision=$fila->enf_pad_dom6_vision;
		$dom7familiares=$fila->enf_pad_dom7_familiares;
		$dom7equipo=$fila->enf_pad_dom7_equipo;
		$dom8civil=$fila->enf_pad_dom8_civil;
		$dom8paridad=$fila->enf_pad_dom8_paridad;
		$d8hijos=$fila->enf_pad_dom8_hijos;
		$d8vivos=$fila->enf_pad_dom8_vivos;
		$d8fallecidos=$fila->enf_pad_dom8_fallecidos;
		$dom8its=$fila->enf_pad_dom8_its;
		$d8especifique=$fila->enf_pad_dom8_especifique;
		$dom9respuesta=$fila->enf_pad_dom9_respuesta;
		$dom9intento=$fila->enf_pad_dom9_intento;
		$d9intentodetalle=$fila->enf_pad_dom9_intento_descripcion;
		$d10religion=$fila->enf_pad_dom10_religion;
		$dom10acepta=$fila->enf_pad_dom10_sanguinea;
		$dom10solicita=$fila->enf_pad_dom10_religiosa;
		$dom11seguridad=$fila->enf_pad_dom11_seguridad;
		$d11otros=$fila->enf_pad_dom11_seguridad_otros;
		$dom11cutanea=$fila->enf_pad_dom11_cutanea;
		$d11localizacion=$fila->enf_pad_dom11_localizacion;
		$d11grado=$fila->enf_pad_dom11_grado;
		$dom11requerimientos=$fila->enf_pad_dom11_requerimientos;
		$dom11otros=$fila->enf_pad_dom11_requerimientos_otros;
		$dom12dolor=$fila->enf_pad_dom12_dolor;
		$d12nivel=$fila->enf_pad_dom12_dolor_nivel;
		$d12localizacion=$fila->enf_pad_dom12_dolor_localizacion;
		$dom12higiene=$fila->enf_pad_dom12_estado;
		$d12especifique=$fila->enf_pad_dom12_especifique;
		$d13peso=$fila->enf_pad_dom13_peso;
		$d13talla=$fila->enf_pad_dom13_talla;
		$d13cimc=$fila->enf_pad_dom13_imc;
		$dom13imc=$fila->enf_pad_dom13_cual;
		$cuidadopfeiffer=$fila->enf_pad_pfeiffer;
		$cuidadobarthel=$fila->enf_pad_barthel;
		$cuidadonorton=$fila->enf_pad_norton;
		$cuidadobraden=$fila->enf_pad_bradenq;
		$cuidadokarnosky=$fila->enf_pad_karnosky;
		$cuidadototal=$fila->enf_pad_total;
		$diagn2=utf8_decode($fila->enf_pad_diagnosticos_enfermera);
		$obfechapad=$fila->enf_pad_f_reg;
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
	foreach ($cn['enf'] as $fila)
	{
		$enfermera_nombres=$fila->registro_nombres;
		$enfermera_apellidos=$fila->registro_apellidos;
	}
	$nomenfermera=ucwords($enfermera_nombres).', '.ucwords($enfermera_apellidos);

	foreach ($cn['hcvaloracionenf'] as $fila)
	{
		$auxservicios=$fila->enf_valoracion_servicios;
		$auxtelefonia=$fila->enf_valoracion_telefonia;
		$auxresiduos=$fila->enf_valoracion_residuos;
		$auxarea=$fila->enf_valoracion_vivienda;
		$viveanimales=$fila->enf_valoracion_animales;
		$vivevacunados=$fila->enf_valoracion_vacunados;
		$vivehabitan=$fila->enf_valoracion_habitan;
		$auxvectores=$fila->enf_valoracion_vectores;
		$viveproducto=$fila->enf_valoracion_producto;
		$vivealmacenados=$fila->enf_valoracion_almacenados;
		$viveconservados=$fila->enf_valoracion_conservados;
		$viveconservacion=$fila->enf_valoracion_conservacion;
		$viveestado=$fila->enf_valoracion_estado_cocina;
		$viveaseado=$fila->enf_valoracion_entorno_aseado;
		$viveproductos=$fila->enf_valoracion_entorno_productos;
		$viveorden=$fila->enf_valoracion_entorno_orden;
		$viverutinas=$fila->enf_valoracion_entorno_rutinas;
		$viveingreso=$fila->enf_valoracion_ingreso;
		$viveexterior=$fila->enf_valoracion_exterior;
		$auxbano=$fila->enf_valoracion_bano;
		$auxseparacion=$fila->enf_valoracion_separacion;
		$auxhabitacion=$fila->enf_valoracion_habitacion;
		$auxventilacion=$fila->enf_valoracion_ventilacion;
		$auxiluminacion=$fila->enf_valoracion_iluminacion;
		$ayd1=$fila->enf_valoracion_ayd1;
		$ayd2=$fila->enf_valoracion_ayd2;
		$ayd3=$fila->enf_valoracion_ayd3;
		$ayd4=$fila->enf_valoracion_ayd4;
		$ayd5=$fila->enf_valoracion_ayd5;
		$ayd6=$fila->enf_valoracion_ayd6;
		$ayd7=$fila->enf_valoracion_ayd7;
		$ayd8=$fila->enf_valoracion_ayd8;
		$ayd9=$fila->enf_valoracion_ayd9;
		$ayd10=$fila->enf_valoracion_ayd10;
		$ayd11=$fila->enf_valoracion_ayd11;
		$ayd12=$fila->enf_valoracion_ayd12;
		$ayd13=$fila->enf_valoracion_ayd13;
		$aydtoal=$fila->enf_valoracion_aydtotal;
		$aynivel=$fila->enf_valoracion_aydnivel;
		$ayd1x=$fila->enf_valoracion_ayd1x;
		$ayd2x=$fila->enf_valoracion_ayd2x;
		$ayd3x=$fila->enf_valoracion_ayd3x;
		$ayd4x=$fila->enf_valoracion_ayd4x;
		$valgrama=$fila->enf_valoracion_grama;
		$valecomapa=$fila->enf_valoracion_ecomapa;
		$situacion_familiar=$fila->enf_valoracion_situacion_familiar;
		$situacion_economica=$fila->enf_valoracion_situacion_economica;
		$situacion_vivienda=$fila->enf_valoracion_situacion_vivienda;
		$situacion_relaciones=$fila->enf_valoracion_situacion_relaciones;
		$situacion_apoyo=$fila->enf_valoracion_situacion_apoyo;
		$situacion_total=$fila->enf_valoracion_situacion_total;
		$situacion_nivel=$fila->enf_valoracion_situacion_nivel;

		$obfechavaloracion=$fila->enf_valoracion_f_reg;
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
		
	}
	foreach ($cn['hcescala'] as $fila)
	{
		$carga_fecha=$fila->enf_escala_fecha;
		$carga_1=$fila->enf_escala_p1;
		$carga_2=$fila->enf_escala_p2;
		$carga_3=$fila->enf_escala_p3;
		$carga_4=$fila->enf_escala_p4;
		$carga_5=$fila->enf_escala_p5;
		$carga_6=$fila->enf_escala_p6;
		$carga_7=$fila->enf_escala_p7;
		$carga_8=$fila->enf_escala_p8;
		$carga_9=$fila->enf_escala_p9;
		$carga_10=$fila->enf_escala_p10;
		$carga_11=$fila->enf_escala_p11;
		$carga_12=$fila->enf_escala_p12;
		$carga_13=$fila->enf_escala_p13;
		$carga_14=$fila->enf_escala_p14;
		$carga_15=$fila->enf_escala_p15;
		$carga_16=$fila->enf_escala_p16;
		$carga_17=$fila->enf_escala_p17;
		$carga_18=$fila->enf_escala_p18;
		$carga_19=$fila->enf_escala_p19;
		$carga_20=$fila->enf_escala_p20;
		$carga_21=$fila->enf_escala_p21;
		$carga_22=$fila->enf_escala_p22;
		$carga_total=$fila->enf_escala_total;
		$carga_nivel=$fila->enf_escala_estado;
		$obfechaescala=$fila->enf_escala_f_reg;
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
	}
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
		$nsrespirar=$fila->enf_intervencion_ns_respiar;
		$nsdescansar=$fila->enf_intervencion_ns_descansar;
		$nscomerybeber=$fila->enf_intervencion_ns_comer;
		$nsvestimenta=$fila->enf_intervencion_ns_vestimenta;
		$nseliminar=$fila->enf_intervencion_ns_eliminar;
		$nscorporal=$fila->enf_intervencion_ns_corporal;
		$nshigiene=$fila->enf_intervencion_ns_higiene;
		$nspeligros=$fila->enf_intervencion_ns_peligros;
		$nspostura=$fila->enf_intervencion_ns_postura;
		$nsculto=$fila->enf_intervencion_ns_culto;
		$nsexpresar=$fila->enf_intervencion_ns_comunicarse;
		$nsestudiar=$fila->enf_intervencion_ns_estudiar;
		$nstrabajar=$fila->enf_intervencion_ns_trabajar;
		$nsparticipar=$fila->enf_intervencion_ns_participar;
		$nsmedico=$fila->enf_intervencion_ns_medico;
		$nsenfermeria=$fila->enf_intervencion_ns_enfermeria;
		$nsdiagnostico=$fila->enf_intervencion_ns_diagnostico;
		$nscomplementacion=$fila->enf_intervencion_ns_complementacion;
		$nseducativo=$fila->enf_intervencion_ns_educativo;
		$lista1=$fila->enf_intervencion_lista_diagnostico;
		$lista2=$fila->enf_intervencion_lista_riesgo;
		$lista3=$fila->enf_intervencion_lista_resultado;
		$lista4=$fila->enf_intervencion_lista_intervenciones;

		$obfechaintervencion=$fila->enf_intervencion_f_reg;
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

	$GLOBALS['nomenfermera'] = $nomenfermera;
	$GLOBALS['obnrohc'] = $obnrohc;
	$GLOBALS['obfechapad'] = $obfechapad;
	$GLOBALS['fef'] = $fef;
	$GLOBALS['obtipodoc'] = $obtipodoc;
	$GLOBALS['obndoc'] = $obndoc;
	$GLOBALS['obnombre'] = $obnombre;
	$GLOBALS['estadoc'] = $estadoc;
	$GLOBALS['obfnac'] = $obfnac;
	$GLOBALS['calculoedad'] = $calculoedad;
	$GLOBALS['tipot'] = $tipot;
	$GLOBALS['direccion'] = "Calle: 5 Historia Clinica Enf";
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
			$this->Cell(193,5,'Enf. '.$GLOBALS['nomenfermera'],0,0,'C',true);
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
			$this->Cell(14,0,'F.Pad:',0,0,1);
			$this->SetFont('Arial','',11);
			$this->Cell(12,0,$GLOBALS['obfechapad'],0,0,1);
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
	$pdf->AddPage('P','A4',0);//

	$pdf->SetFillColor(232,232,232);
	
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
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(30,5,'Antecedentes:',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$antecedentes,0,'J');
	$pdf->Ln(6);
	$pdf->Cell(36,5,'Valoracion Subjetiva (estado general):',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$valoracionsubjetiva,0,'J');
	$pdf->Ln(2);
	$pdf->Cell(7,5,'FC:',0,0,1);
	$pdf->Cell(12,5,$svfc,0,0,1);
	$pdf->Cell(10);//espacio
	$pdf->Cell(7,5,'FR:',0,0,1);
	$pdf->Cell(12,5,$svfr,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(7,5,utf8_decode('T°:'),0,0,1);
	$pdf->Cell(12,5,$svt,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(8,5,'TA:',0,0,1);
	$pdf->Cell(12,5,$svta,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(20,5,'Saturacion:',0,0,1);
	$pdf->Cell(12,5,$svsaturacion,0,0,1);
	$pdf->Cell(10);
	$pdf->Cell(22,5,'Glucometria:',0,0,1);
	$pdf->Cell(15,5,$svglucometria,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(190,5,strtoupper('Dominio 1: Promocion de la Salud'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,utf8_decode('¿Que Sabe usted sobre su enfermedad?'),0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,utf8_decode($dom1p1),0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,utf8_decode('¿Nesecita mayor informacion sobre su enfermedad?'),0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,utf8_decode($dom1p2),0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(190,5,strtoupper('Dominio 2: Nutricion'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,utf8_decode('Dieta: ').$dom2nutricion.'   Otros: '.$dom2otro,0,0,1);
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
	$pdf->Cell(190,5,'Gastrostomia: '.$dom2gastrostomia,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(190,5,strtoupper('Dominio 3: Eliminacion'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Deposiciones: '.utf8_decode($dom3deposiciones).'   Tipo: '.$dom3tipo,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,$dom3vomito.'   Caracteristicas: '.$d3caracteristicas,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Colostomia: '.$dom3colostomia.'      Oresis: '.$dom3oresis,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(190,5,strtoupper('Dominio 4: Actividad y Reposo'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Grado de dependencia: '.$dom4dependencia,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,utf8_decode('Sueño: ').$dom4sueno.'   Otros: '.$d4otros,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Fiebre: '.$dom4fiebre.'   Tipo: '.$d4tipo,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Movilidad Fisica: '.$dom4movilidad.'   : '.$d4movilidadetalle,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Apoyos Externos: '.$d4apoyo,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Fuerza Muscular: '.$d4musculardetalle,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Respuestas Cardiovasculares Respiratorias: ',0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'FC: '.$dom4respiratorias.'   llenado Capilar: '.$d4capilar,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Pulso: '.$dom4pulso.'   Fecha implamtacion: '.$d4pulsofecha,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'FR: '.$dom4fr.'   : '.$d4frdetalle,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Ruidos Respiratorios: '.$dom4ruidos,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Tos: '.$dom4tos.'   Tipo: '.$d4tostipo,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Oxigenoterapia: '.$dom4oxigeno.' Tipo: '.$d4oxigenotipo,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'FIO2: '.$d4fio,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'TET: '.$d4tet,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Traqueostomia: '.$dom4traqueostomia,0,0,1);
	$pdf->Ln(5);
	// if($pdf->GetY()>260)
	// {
	// 	$pdf->Ln(40);
	// }
	$pdf->Cell(190,5,strtoupper('Dominio 5: Percepcion Cognicion'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Estado de Glasgow: '.$dom5escala,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Estado de Conciencia: '.$dom5conciencia.'   Otros: '.$dconcienciaotro,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Comunicacion: '.$dom5comunicacion.'   : '.$d6comunicacionotro,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(190,5,strtoupper('Dominio 6: Autopercepcion'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(30,5,'Estado Emocinal: ',0,0,1);
	$pdf->Cell(60,5,$dom6emocional,0,0,1);
	$pdf->Cell(20,5,'Lenguaje: ',0,0,1);
	$pdf->Cell(60,5,$dom6lenguaje,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(18,5,'Escucha: ',0,0,1);
	$pdf->Cell(72,5,$dom6escucha,0,0,1);
	$pdf->Cell(16,5,'Vision: ',0,0,1);
	$pdf->Cell(60,5,$dom6d6vision,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(190,5,strtoupper('Dominio 7: Rol/Relaciones'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(30,5,'Con familiares: ',0,0,1);
	$pdf->Cell(60,5,$dom7familiares,0,0,1);
	$pdf->Cell(32,5,'Con equipo salud: ',0,0,1);
	$pdf->Cell(60,5,$dom7equipo,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(190,5,strtoupper('Dominio 8: Sexualidad'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(90,5,'Estado Civil: '.$dom8civil,0,0,1);
	$pdf->Cell(16,5,'Paridad:',0,0,1);
	$pdf->Cell(20,5,$dom8paridad,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(12,5,'Hijos: ',0,0,1);
	$pdf->Cell(20,5,$d8hijos,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(12,5,'Vivos: ',0,0,1);
	$pdf->Cell(20,5,$d8vivos,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(20,5,'Fallecidos: ',0,0,1);
	$pdf->Cell(20,5,$d8fallecidos,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Antecedentes ITS: '.$dom8its.'   Especifique: '.$d8especifique,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(190,5,strtoupper('Dominio 9: Afrontamiento - Tolerancia'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Respuesta a la atencion domiciliaria: '.$dom9respuesta,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Antecedente de intento de suicidio: '.$dom9intento.'   : '.$d9intentodetalle,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(190,5,strtoupper('Dominio 10: Principios Vitales'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(16,5,'Religion: ',0,0,1);
	$pdf->Cell(60,5,$d10religion,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(52,5,'Acepta tranfusion sanguinea: ',0,0,1);
	$pdf->Cell(10,5,$dom10acepta,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(42,5,'Solicita ayuda religiosa: ',0,0,1);
	$pdf->Cell(10,5,$dom10solicita,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(190,5,strtoupper('Dominio 11: Seguridad y Protecion'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,': '.$dom11seguridad.'   Otros: '.$d11otros,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Integridad cutanea: '.$dom11cutanea,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(26,5,'Localizacion: ',0,0,1);
	$pdf->Cell(64,5,$d11localizacion,0,0,1);
	$pdf->Cell(16,5,'Grado: ',0,0,1);
	$pdf->Cell(60,5,$d11grado,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Requerimientos: '.$dom11requerimientos,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Otros: '.$dom11otros,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(190,5,strtoupper('Dominio 12: Confort'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(18,5,'Dolor: '.$dom12dolor,0,0,1);
	$pdf->Cell(12,5,'Nivel: ',0,0,1);
	$pdf->Cell(60,5,$d12nivel,0,0,1);
	$pdf->Cell(24,5,'Localizacion: ',0,0,1);
	$pdf->Cell(60,5,$d12localizacion,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Estado Higiene: '.$dom12higiene.'   Especifique: '.$d12especifique,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(190,5,strtoupper('Dominio 13: Crecimiento y Desarrollo'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(10,5,'Peso: ',0,0,1);
	$pdf->Cell(40,5,$d13peso,0,0,1);
	$pdf->Cell(12,5,'Talla: ',0,0,1);
	$pdf->Cell(40,5,$d13talla,0,0,1);
	$pdf->Cell(9,5,'IMC: ',0,0,1);
	$pdf->Cell(40,5,$d13cimc,0,0,1);
	$pdf->Cell(26,5,' : '.$dom13imc,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(190,5,strtoupper('Determinacion nivel de cuidado de enfermera'),0,0,'C',1);
	$pdf->Ln(5);
	$pdf->Cell(22,5,'PFEIFFER:',0,0,1);
	$pdf->Cell(32,5,$cuidadopfeiffer,0,0,1);
	$pdf->Cell(20,5,'BARTHEL:',0,0,1);
	$pdf->Cell(34,5,$cuidadobarthel,0,0,1);
	$pdf->Cell(20,5,utf8_decode('NORTON:'),0,0,1);
	$pdf->Cell(20,5,$cuidadonorton,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(24,5,'BRADEN Q:',0,0,1);
	$pdf->Cell(30,5,$cuidadobraden,0,0,1);
	$pdf->Cell(24,5,'KARNOSKY:',0,0,1);
	$pdf->Cell(30,5,$cuidadokarnosky,0,0,1);
	$pdf->Cell(14,5,'Total:',0,0,1);
	$pdf->Cell(20,5,$cuidadototal,0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(36,5,strtoupper('Diagnosticos'),0,0,'',1);
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',10);
	$porciones = explode(";", $diagn2);
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
	$pdf->SetY($alto);
	// $pdf->MultiCell(190,$ellargo,'',1,'L');
	$pdf->Ln(2+$unsalto);

	//Valoracion Socio Familiar
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Valoracion Socio Familiar',0,0,'C',1);
	$pdf->Ln(6);

	$pdf->SetFont('Arial','',11);
	$pdf->MultiCell(190,5,strtoupper('Valoracion de la Vivienda'),0,'C');
	$pdf->Cell(190,5,'Servicios Publicos: '.$auxservicios,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(16,5,'Telefinia:',0,0,1);
	$pdf->Cell(32,5,$auxtelefonia,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(38,5,'Manejo de Residuos:',0,0,1);
	$pdf->Cell(12,5,$auxresiduos,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(36,5,utf8_decode('Area en la vivienda:'),0,0,1);
	$pdf->Cell(12,5,$auxarea,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(38,5,'Animales domesticos:',0,0,1);
	$pdf->Cell(142,5,$viveanimales,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(22,5,'Vacunados:',0,0,1);
	$pdf->Cell(142,5,$vivevacunados,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(28,5,utf8_decode('Donde habitan:'),0,0,1);
	$pdf->Cell(142,5,$vivehabitan,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Vectores: '.$auxvectores,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Nombre del producto utilizado: '.$viveproducto,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(44,5,'Alimentos Almacenados:',0,0,1);
	$pdf->Cell(146,5,$vivealmacenados,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(24,5,'Conservados:',0,0,1);
	$pdf->Cell(166,5,$viveconservados,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(62,5,'Utencilios de Cocina Conservacion:',0,0,1);
	$pdf->Cell(128,5,$viveconservacion,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(14,5,'Estado:',0,0,1);
	$pdf->Cell(176,5,$viveestado,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(30,5,'Entorno Aseado: ',0,0,1);
	$pdf->Cell(72,5,$viveaseado,0,0,1);
	$pdf->Cell(20,5,'Productos:',0,0,1);
	$pdf->Cell(60,5,$viveproductos,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(14,5,'Orden:',0,0,1);
	$pdf->Cell(88,5,$viveorden,0,0,1);
	$pdf->Cell(18,5,'Rutinas:',0,0,1);
	$pdf->Cell(60,5,$viverutinas,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(36,5,'Acesibilidad Ingreso:',0,0,1);
	$pdf->Cell(66,5,$viveingreso,0,0,1);
	$pdf->Cell(18,5,'Exterior:',0,0,1);
	$pdf->Cell(60,5,$viveexterior,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(10,5,utf8_decode('Baño: '),0,0,1);
	$pdf->Cell(40,5,$auxbano,0,0,1);
	$pdf->Cell(22,5,'Separacion:',0,0,1);
	$pdf->Cell(30,5,$auxseparacion,0,0,1);
	$pdf->Cell(20,5,'Habitacion:',0,0,1);
	$pdf->Cell(30,5,$auxhabitacion,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(22,5,'Ventilacion:',0,0,1);
	$pdf->Cell(28,5,$auxventilacion,0,0,1);
	$pdf->Cell(22,5,'Iluminacion:',0,0,1);
	$pdf->Cell(15,5,$auxiluminacion,0,0,1);
	
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,strtoupper('Escala de Ansiedad y Depresion Hospitalaria'),0,0,'C',1);
	$pdf->Ln(6);
	$pdf->Cell(190,5,'Me siento tenso(a) o nervioso(a)   Puntos: '.$ayd1,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(50,5,utf8_decode('1'),0,'J');
	$pdf->Cell(50,5,utf8_decode('2'),0,'J');
	$pdf->Cell(50,5,utf8_decode('3'),0,'J');
	$pdf->Cell(50,5,utf8_decode('4'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('nunca'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('de vez en cuando'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('gran parte del dia'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('todo el dia'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Sigo disfrutando de las cosas como siempre   Puntos: '.$ayd2,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(50,5,utf8_decode('1'),0,'J');
	$pdf->Cell(50,5,utf8_decode('2'),0,'J');
	$pdf->Cell(50,5,utf8_decode('3'),0,'J');
	$pdf->Cell(50,5,utf8_decode('4'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('ya no disfruto como antes'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('solamente un poco'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('no tanto como antes'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('igual que antes'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Siento una especie de temor como si algo malo fuera a succeder   Puntos: '.$ayd3,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(50,5,utf8_decode('1'),0,'J');
	$pdf->Cell(50,5,utf8_decode('2'),0,'J');
	$pdf->Cell(50,5,utf8_decode('3'),0,'J');
	$pdf->Cell(50,5,utf8_decode('4'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('no siento nada de eso'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('si pero no me preocupa'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('si, pero no muy intenso'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('si y muy intenso'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Soy capaz de reirme y ver el lado gracioso de las cosas   Puntos: '.$ayd4,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(50,5,utf8_decode('1'),0,'J');
	$pdf->Cell(50,5,utf8_decode('2'),0,'J');
	$pdf->Cell(50,5,utf8_decode('3'),0,'J');
	$pdf->Cell(50,5,utf8_decode('4'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('actualmente, nada'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('actualmente, mucho menos'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('actualmente, algo menos'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('igual que siempre'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Tengo la cabeza llena de preocupaciones   Puntos: '.$ayd5,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(50,5,utf8_decode('1'),0,'J');
	$pdf->Cell(50,5,utf8_decode('2'),0,'J');
	$pdf->Cell(50,5,utf8_decode('3'),0,'J');
	$pdf->Cell(50,5,utf8_decode('4'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('nunca'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('de vez en cuando'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('gran parte del dia'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('todo el dia'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Me siento lento(a) y torpe   Puntos: '.$ayd6,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(50,5,utf8_decode('1'),0,'J');
	$pdf->Cell(50,5,utf8_decode('2'),0,'J');
	$pdf->Cell(50,5,utf8_decode('3'),0,'J');
	$pdf->Cell(50,5,utf8_decode('4'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('nunca'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('de vez en cuando'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('gran parte del dia'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('todo el dia'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Soy capaz de permanecer sentado(a) tranquilo(a) y relajado(a)   Puntos: '.$ayd7,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(50,5,utf8_decode('1'),0,'J');
	$pdf->Cell(50,5,utf8_decode('2'),0,'J');
	$pdf->Cell(50,5,utf8_decode('3'),0,'J');
	$pdf->Cell(50,5,utf8_decode('4'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('nunca'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('raras veces'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('a menudo'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('siempre'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'He perdido el interez por mi aspecto personal   Puntos: '.$ayd8,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(50,5,utf8_decode('1'),0,'J');
	$pdf->Cell(50,5,utf8_decode('2'),0,'J');
	$pdf->Cell(50,5,utf8_decode('3'),0,'J');
	$pdf->Cell(50,5,utf8_decode('4'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('nunca'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('raras veces'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('a menudo'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('siempre'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Experimento una desagrable senacion de "nervios y hormigueos" en el estomago   Puntos: '.$ayd9,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(50,4,utf8_decode('1'),0,'J');
	$pdf->Cell(50,4,utf8_decode('2'),0,'J');
	$pdf->Cell(50,4,utf8_decode('3'),0,'J');
	$pdf->Cell(50,4,utf8_decode('4'),0,'J');
	$pdf->Ln(3);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('nunca'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('raras veces'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('a menudo'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('siempre'),0,'J');
	$pdf->Ln(4);
	// $pdf->Rect(9,$pdf->GetY(),192,13);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Espero las cosas con ilucion   Puntos: '.$ayd10,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(50,5,utf8_decode('1'),0,'J');
	$pdf->Cell(50,5,utf8_decode('2'),0,'J');
	$pdf->Cell(50,5,utf8_decode('3'),0,'J');
	$pdf->Cell(50,5,utf8_decode('4'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('nunca'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('raras veces'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('a menudo'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('siempre'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Me siento inquieto(a) como si no puediera parar de moverme   Puntos: '.$ayd11,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(50,5,utf8_decode('1'),0,'J');
	$pdf->Cell(50,5,utf8_decode('2'),0,'J');
	$pdf->Cell(50,5,utf8_decode('3'),0,'J');
	$pdf->Cell(50,5,utf8_decode('4'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('nunca'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('raras veces'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('a menudo'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('siempre'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Soy capaz de disfrutar con un buen libro o con un buen programa de radio o television   Puntos: '.$ayd12,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(50,5,utf8_decode('1'),0,'J');
	$pdf->Cell(50,5,utf8_decode('2'),0,'J');
	$pdf->Cell(50,5,utf8_decode('3'),0,'J');
	$pdf->Cell(50,5,utf8_decode('4'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('nunca'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('raras veces'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('a menudo'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('siempre'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Experimento de repente sensaciones de gran angustia o temor   Puntos: '.$ayd13,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(50,5,utf8_decode('1'),0,'J');
	$pdf->Cell(50,5,utf8_decode('2'),0,'J');
	$pdf->Cell(50,5,utf8_decode('3'),0,'J');
	$pdf->Cell(50,5,utf8_decode('4'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(45,4,utf8_decode('nunca'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(58);
	$pdf->MultiCell(45,4,utf8_decode('raras veces'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(106);
	$pdf->MultiCell(45,4,utf8_decode('a menudo'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(154);
	$pdf->MultiCell(45,4,utf8_decode('siempre'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Total: '.$aydtoal.'   Nivel: '.$aynivel,0,0,1);
	// 	$valgrama=$fila->enf_valoracion_grama;
	// 	$valecomapa=$fila->enf_valoracion_ecomapa;
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,strtoupper('Escala Valoracion Riesgo Social'),0,0,'C',1);
	$pdf->Ln(6);
	$pdf->Cell(190,5,'Situacion Familiar   Puntos: '.$situacion_familiar,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(38,5,utf8_decode('1'),0,'J');
	$pdf->Cell(38,5,utf8_decode('2'),0,'J');
	$pdf->Cell(38,5,utf8_decode('3'),0,'J');
	$pdf->Cell(38,5,utf8_decode('4'),0,'J');
	$pdf->Cell(38,5,utf8_decode('5'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(38,4,utf8_decode('vive con familia sin dependencia fisico psiquica'),0,'J');
	$pdf->Sety($pdf->GetY()-12);
	$pdf->SetX(48);
	$pdf->MultiCell(38,4,utf8_decode('vive con conyuge de similar edad'),0,'J');
	$pdf->Sety($pdf->GetY()-8);
	$pdf->SetX(86);
	$pdf->MultiCell(38,4,utf8_decode('vive con familia y/o conyuge y presenta algun grado de dependencia'),0,'J');
	$pdf->Sety($pdf->GetY()-16);
	$pdf->SetX(124);
	$pdf->MultiCell(38,4,utf8_decode('vive solo y tiene hijos proximos'),0,'J');
	$pdf->Sety($pdf->GetY()-8);
	$pdf->SetX(162);
	$pdf->MultiCell(38,4,utf8_decode('vive solo y carace de hijos o viven alejados'),0,'J');
	$pdf->Ln(10);
	if($pdf->GetY()>240)
	{
		$pdf->Ln(40);
	}
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Situacion Economica   Puntos: '.$situacion_economica,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(38,5,utf8_decode('1'),0,'J');
	$pdf->Cell(38,5,utf8_decode('2'),0,'J');
	$pdf->Cell(38,5,utf8_decode('3'),0,'J');
	$pdf->Cell(38,5,utf8_decode('4'),0,'J');
	$pdf->Cell(38,5,utf8_decode('5'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(38,4,utf8_decode('Mas de 1,5 veces el salario minimo'),0,'J');
	$pdf->Sety($pdf->GetY()-8);
	$pdf->SetX(48);
	$pdf->MultiCell(38,4,utf8_decode('Desde 1,5 veces el salario minimo hasta el salario minimo incluso'),0,'J');
	$pdf->Sety($pdf->GetY()-16);
	$pdf->SetX(86);
	$pdf->MultiCell(38,4,utf8_decode('Desde el salario minimo a pension minima contributiva'),0,'J');
	$pdf->Sety($pdf->GetY()-12);
	$pdf->SetX(124);
	$pdf->MultiCell(38,4,utf8_decode('Pension no contributiva, ingreso subsidiado'),0,'J');
	$pdf->Sety($pdf->GetY()-12);
	$pdf->SetX(162);
	$pdf->MultiCell(38,4,utf8_decode('Sin ingresos o ingresos de apoyo familiar'),0,'J');
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Situacion Vivienda   Puntos: '.$situacion_vivienda,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(38,5,utf8_decode('1'),0,'J');
	$pdf->Cell(38,5,utf8_decode('2'),0,'J');
	$pdf->Cell(38,5,utf8_decode('3'),0,'J');
	$pdf->Cell(38,5,utf8_decode('4'),0,'J');
	$pdf->Cell(38,5,utf8_decode('5'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(38,4,utf8_decode('Adecuada a necesidades'),0,'J');
	$pdf->Sety($pdf->GetY()-8);
	$pdf->SetX(48);
	$pdf->MultiCell(38,4,utf8_decode('Barreras arquitectonicas en la vivienda o ingreso a la casa (peldaños, escalones, rampas, puertas angostas, baños comunales,etc.)'),0,'J');
	$pdf->Sety($pdf->GetY()-28);
	$pdf->SetX(86);
	$pdf->MultiCell(38,4,utf8_decode('Humedades, mala higiene, equipamiento inadecuado (sin baño completo, sin agua caliente, sin calefacion,..)'),0,'J');
	$pdf->Sety($pdf->GetY()-24);
	$pdf->SetX(124);
	$pdf->MultiCell(38,4,utf8_decode('Ausencia de ascensor, telefonos (sistemas de comunicacion audio visual)'),0,'J');
	$pdf->Sety($pdf->GetY()-16);
	$pdf->SetX(162);
	$pdf->MultiCell(38,4,utf8_decode('Vivienda inadecuada (solo habitacion integral, inquilinato, compartidad con extraños, sin piso, en teja metalica o papel duro, sin equipamiento minimo,..)'),0,'J');
	$pdf->Ln(3);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Situacion Relaciones   Puntos: '.$situacion_relaciones,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(38,5,utf8_decode('1'),0,'J');
	$pdf->Cell(38,5,utf8_decode('2'),0,'J');
	$pdf->Cell(38,5,utf8_decode('3'),0,'J');
	$pdf->Cell(38,5,utf8_decode('4'),0,'J');
	$pdf->Cell(38,5,utf8_decode('5'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(38,4,utf8_decode('Con relaciones solciales'),0,'J');
	$pdf->Sety($pdf->GetY()-8);
	$pdf->SetX(48);
	$pdf->MultiCell(38,4,utf8_decode('Relacion social solo con familia y vecinos'),0,'J');
	$pdf->Sety($pdf->GetY()-8);
	$pdf->SetX(86);
	$pdf->MultiCell(38,4,utf8_decode('Relacion social solo con familia o vecinos'),0,'J');
	$pdf->Sety($pdf->GetY()-8);
	$pdf->SetX(124);
	$pdf->MultiCell(38,4,utf8_decode('No sale del domicilio, recibe visitas'),0,'J');
	$pdf->Sety($pdf->GetY()-8);
	$pdf->SetX(162);
	$pdf->MultiCell(38,4,utf8_decode('No sale y no recibe visitas'),0,'J');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Situacion Apoyo   Puntos: '.$situacion_apoyo,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(38,5,utf8_decode('1'),0,'J');
	$pdf->Cell(38,5,utf8_decode('2'),0,'J');
	$pdf->Cell(38,5,utf8_decode('3'),0,'J');
	$pdf->Cell(38,5,utf8_decode('4'),0,'J');
	$pdf->Cell(38,5,utf8_decode('5'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(38,4,utf8_decode('Con apoyo familiar y vecinal'),0,'J');
	$pdf->Sety($pdf->GetY()-8);
	$pdf->SetX(48);
	$pdf->MultiCell(38,4,utf8_decode('Voluntario social, ayuda domiciliaria'),0,'J');
	$pdf->Sety($pdf->GetY()-8);
	$pdf->SetX(86);
	$pdf->MultiCell(38,4,utf8_decode('No tiene apoyo'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(124);
	$pdf->MultiCell(38,4,utf8_decode('Pendiente de ingreso en residencia geriatrica'),0,'J');
	$pdf->Sety($pdf->GetY()-12);
	$pdf->SetX(162);
	$pdf->MultiCell(38,4,utf8_decode('Tiene cuidados permanentes'),0,'J');
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Total: '.$situacion_total.'   Nivel: '.$situacion_nivel,0,0,1);

	//Escala de Carga del Cuidador - Zarit
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Escala de Carga del Cuidador - Zarit',0,0,'C',1);
	$pdf->Ln(6);

	$pdf->SetFont('Arial','',11);
	$pdf->Cell(120,5,strtoupper(utf8_decode('Pregunta a Realizar')),0,0,'J',1);
	$pdf->Cell(50,5,'Fecha: '.$carga_fecha,0,0,'L',1);
	$pdf->Cell(21,5,utf8_decode('Puntuacion'),0,0,'J',1);
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Siente que su familiar solicita mas ayuda de la que realmente necesita?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_1,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Siente que debudo al tiempo que dedica a su familiar ya no dispone de tiempo suficiente para usted?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_2,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Se siente tenso cuando tiene que cuidar a su familiar y atender ademas otras responsibilidades?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_3,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Se siente avergonzado por la conducta de su familiar?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_4,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Se siente enfadado cuando esta cerca de su familiar?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_5,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Cree que la situacion actual afecta de manera negativa a su relacion con amigos y otros miembros de su familia?'),0,'J');
	$pdf->Sety($pdf->GetY()-10);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_6,0,'C');
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Siente temor por el futuro que le espera a su familiar?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_7,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Siente que su familiar depende de usted?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_8,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Se siente agobiado cuando tiene que estar juanto a su familiar?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_9,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Siente que su salud se ha resentido por cuidar a su familiar?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_10,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Siente que no tiene la vida privada que desearia debido a su familiar?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_11,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Cree que su vida socila se ha visto afectada por tener que cuidar de su familiar?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_12,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Se siente incomodo para invitar amigos a casa, a causa de su familiar?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_13,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Cree que su familiar espera que usted le cuide, como si fuera la unica persona con la que puede contar?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_14,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Cree que no dispone de dinero suficiente para cuidar a su familiar ademas de sus otros gastos?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_15,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Siente que sera incapaz de cuidar a su familiar por mucho mas tiempo?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_16,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Siente que ha perdido el control de su vida desde que la enfermedad de su familiar se manifesto?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_17,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Desearia poder encargar el cuidado de su familiar a otras personas?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_18,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Se siente inseguro acerca de lo que debe hacer con su familiar?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_19,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Siente que deberia hacer mas de lo que hace por su familiar?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_20,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('¿Cree que podria cuidar de su familiar mejor de lo que lo hace?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_21,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',10);
	$pdf->Sety($pdf->GetY());
	$pdf->SetX(10);
	$pdf->MultiCell(180,5,utf8_decode('En general: ¿Se siente muy sobrecargado por tener que cuidar de su familiar?'),0,'J');
	$pdf->Sety($pdf->GetY()-4);
	$pdf->SetX(190);
	$pdf->MultiCell(10,5,$carga_22,0,'C');
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Total: '.$carga_total.'   Nivel: '.$carga_nivel,0,0,1);

	//Plan de Intervencion Domiciliario
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Plan de Intervencion Domiciliario',0,0,'C',1);
	$pdf->Ln(6);
	
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(40,5,'Fecha: '.$interfecha,0,0,'',1);
	$pdf->Cell(130,5,strtoupper('Plan de Intervencion Programa de Atencion Domiciliaria'),0,0,'',1);
	$pdf->Cell(20,5,utf8_decode('N° Plan: ').$internplan,0,0,'',1);
	$pdf->Ln(5);
	$pdf->Cell(14,5,utf8_decode('Pfeiffer: '),0,0,1);
	$pdf->Cell(30,5,$interpfeiffer,0,0,1);
	$pdf->Cell(14,5,'Barthel:',0,0,1);
	$pdf->Cell(38,5,$interbarthel,0,0,1);
	$pdf->Cell(14,5,'Norton:',0,0,1);
	$pdf->Cell(30,5,$internorton,0,0,1);
	$pdf->Cell(14,5,'Braden:',0,0,1);
	$pdf->Cell(30,5,$interbraden,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(18,5,'Karnosky:',0,0,1);
	$pdf->Cell(26,5,$interkarnosky,0,0,1);
	$pdf->Cell(26,5,'Socio Familiar:',0,0,1);
	$pdf->Cell(26,5,$intersocio,0,0,1);
	$pdf->Cell(18,5,'Ansiedad:',0,0,1);
	$pdf->Cell(26,5,$interansiedad,0,0,1);
	$pdf->Cell(14,5,'Zarith:',0,0,1);
	$pdf->Cell(30,5,$interzarith,0,0,1);
		
	$pdf->Ln(5);
	$pdf->Cell(190,5,'Respirar con normalidad: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$nsrespirar,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(190,5,'Descansar y dormir: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$nsdescansar,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(190,5,'Comer y beber adecuadamente: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$nscomerybeber,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(190,5,'Seleccionar vestimenta adecuada: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$nsvestimenta,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(190,5,'Eliminar los desechos del organismo: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$nseliminar,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(190,5,'Mantener la temperatura corporal: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$nscorporal,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(190,5,'Mantener la higiene corporal: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$nshigiene,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(190,5,'Evitar los peligros del entorno: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$nspeligros,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(190,5,'Movimientos y mantenimiento de la postura adecuada: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$nspostura,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(190,5,'Ejercer culto a Dios, acorde a su religion: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$nsculto,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(190,5,'Comunicarse con otros, expresar emociones, nesecidades, miedos u opiniones: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$nsexpresar,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(190,5,'Estudiar, descubrir o satisfacer la curiosidad que conduce a un desarrollo normal de la salud: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$nsestudiar,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(190,5,'Trabajar de forma que permita sentirse realizado: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,$nstrabajar,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(190,5,'Participar en todas las formas de recreacion y ocio: ',0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,4,$nsparticipar,0,'J');

	$pdf->Ln(5);
	$pdf->Cell(14,5,utf8_decode('Medico: '),0,0,1);
	$pdf->Cell(30,5,$nsmedico,0,0,1);
	$pdf->Cell(20,5,'Enfermera:',0,0,1);
	$pdf->Cell(30,5,$nsenfermeria,0,0,1);
	$pdf->Cell(36,5,'Apoyo diagnostico:',0,0,1);
	$pdf->Cell(30,5,$nsdiagnostico,0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(54,5,'Complementacion terapeutica:',0,0,1);
	$pdf->Cell(40,5,$nscomplementacion,0,0,1);
	$pdf->Cell(18,5,'Educativo:',0,0,1);
	$pdf->Cell(30,5,$nseducativo,0,0,1);

	$pdf->Ln(5);
	$pdf->Cell(190,5,'Diagnosticos ',0,0,1);
	$pdf->Ln(5);
	$partes=explode(",", $lista1);
	$pdf->SetFont('Arial','',10);
	$ay1="";
	for ($i=0; $i < count($partes)-1; $i++)
	{
		$ay1.=$partes[$i].', ';
	}
	$pdf->MultiCell(190,5,utf8_decode($ay1).', ',0,'J');
	$pdf->Ln(40);
	$pdf->SetY($pdf->GetY());
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Criterios de Riesgo y/o Relacion ',0,0,1);
	$pdf->Ln(5);
	$partes=explode(",", $lista2);
	$pdf->SetFont('Arial','',10);
	$ay2="";
	for ($i=0; $i < count($partes)-1; $i++)
	{
		$ay2.=$partes[$i].', ';
	}
	$pdf->MultiCell(190,5,utf8_decode($ay2).', ',0,'J');
	$pdf->Ln(40);
	$pdf->SetY($pdf->GetY());
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Criterios de Resultado ',0,0,1);
	$pdf->Ln(5);
	$partes=explode(",", $lista3);
	$pdf->SetFont('Arial','',10);
	$ay3="";
	for ($i=0; $i < count($partes)-1; $i++)
	{
		$ay3.=$partes[$i].', ';
	}
	$pdf->MultiCell(190,5,utf8_decode($ay3).', ',0,'J');
	$pdf->Ln(40);
	$pdf->SetY($pdf->GetY());
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(190,5,'Intervenciones a realizar ',0,0,1);
	$pdf->Ln(5);
	$partes=explode(",", $lista4);
	$pdf->SetFont('Arial','',10);
	$ay4="";
	for ($i=0; $i < count($partes)-1; $i++)
	{
		$ay4.=$partes[$i].', ';
	}
	$pdf->MultiCell(190,5,utf8_decode($ay4).', ',0,'J');

	$pdf->Output('','HC-General_Enf_'.$getfecha2.'-'.$gethora.'.pdf');
?>
<!-- </body>
</html> -->