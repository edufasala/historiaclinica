<?php
	header('Content-Type: text/html; charset=UTF-8');
	$campos = json_decode(json_encode($cn), True);
	foreach ($cn['hcvaloracionenf'] as $fila)
	{
		$auxservicios=utf8_decode($fila->enf_valoracion_servicios);
		$auxtelefonia=utf8_decode($fila->enf_valoracion_telefonia);
		$auxresiduos=$fila->enf_valoracion_residuos;
		$auxarea=$fila->enf_valoracion_vivienda;
		$auxareadetalle=utf8_decode($fila->enf_valoracion_vivienda_detalle);
		$viveanimales=utf8_decode($fila->enf_valoracion_animales);
		$vivevacunados=utf8_decode($fila->enf_valoracion_vacunados);
		$vivehabitan=utf8_decode($fila->enf_valoracion_habitan);
		$auxvectores=utf8_decode($fila->enf_valoracion_vectores);
		$viveproducto=utf8_decode($fila->enf_valoracion_producto);
		$vivealmacenados=utf8_decode($fila->enf_valoracion_almacenados);
		$viveconservados=utf8_decode($fila->enf_valoracion_conservados);
		$viveconservacion=utf8_decode($fila->enf_valoracion_conservacion);
		$viveestado=utf8_decode($fila->enf_valoracion_estado_cocina);
		$viveaseado=utf8_decode($fila->enf_valoracion_entorno_aseado);
		$viveproductos=$fila->enf_valoracion_entorno_productos;
		$viveorden=utf8_decode($fila->enf_valoracion_entorno_orden);
		$viverutinas=utf8_decode($fila->enf_valoracion_entorno_rutinas);
		$viveingreso=utf8_decode($fila->enf_valoracion_ingreso);
		$viveexterior=$fila->enf_valoracion_exterior;
		$auxbano=utf8_decode($fila->enf_valoracion_bano);
		$auxseparacion=utf8_decode($fila->enf_valoracion_separacion);
		$auxhabitacion=utf8_decode($fila->enf_valoracion_habitacion);
		$auxventilacion=$fila->enf_valoracion_ventilacion;
		$auxiluminacion=$fila->enf_valoracion_iluminacion;
		$aydp=$fila->enf_valoracion_pregunta;
		$aydpdt=$fila->enf_valoracion_pregunta_detalle;
		$aydp2=$fila->enf_valoracion_pregunta_v;
		$aydpdt2=$fila->enf_valoracion_pregunta_detalle_v;
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
		$obhoravaloracion=$fila->enf_valoracion_h_reg;
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
	$cuentolosuno=0;
	$cuentolosdos=0;
	$cuentolotres=0;
	$cuentoloscuatro=0;
	$armolalista="";
	$armolalista = $ayd1.','.$ayd1.','.$ayd2.','.$ayd3.','.$ayd4.','.$ayd5.','.$ayd6.','.$ayd7.','.$ayd8.','.$ayd9.','.$ayd10.','.$ayd11.','.$ayd12;
	$porciones = explode(",", $armolalista);
	for ($i=0; $i < count($porciones)-1; $i++)
	{
		if($porciones[$i]=="1")
		{
			$cuentolosuno+=1;
		}
		else if($porciones[$i]=="2")
		{
			$cuentolosdos+=1;
		}
		else if($porciones[$i]=="3")
		{
			$cuentolotres+=1;
		}
		else if($porciones[$i]=="4")
		{
			$cuentoloscuatro+=1;
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
		if($fila->inclusion_pad_paciente=="0")
		{
			$tipot='.';
		}
		if($fila->inclusion_pad_paciente=="1")
		{
			$tipot='Consulta Médico';
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
			$tipot='Atención de Crónico';
		}
		if($fila->inclusion_pad_paciente=="5")
		{
			$tipot='Atención de Paliativo';
		}
		if($fila->inclusion_pad_paciente=="6")
		{
			$tipot='Atención de Agudo';
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
	$GLOBALS['obfechavaloracion'] = $obfechavaloracion;
	$GLOBALS['obhoravaloracion'] = $obhoravaloracion;
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
			$this->Cell(198,4, strtoupper('Valoracion Socio Familiar'),0,0,'C',true);
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
			$this->Cell(9);
			$this->SetFont('Arial','B',8);
			$this->Cell(26,0,'Fecha Valoracion:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(13,0,$GLOBALS['obfechavaloracion'],0,0,1);
			$this->Cell(2);
			$this->SetFont('Arial','B',8);
			$this->Cell(26,0,'Hora Valoracion:',0,0,1);
			$this->SetFont('Arial','',8);
			$this->Cell(12,0,$GLOBALS['obhoravaloracion'],0,0,1);
			$this->Cell(2);
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
			$this->Cell(27,5,$GLOBALS['aseguradora'],0,0,1);
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
			$this->Cell(101,5,$GLOBALS['direccion_paciente'],0,0,1);
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
	// $pdf->Ln(8);
	$pdf->Ln(2);
	if($aydp2=="no")
	{
		$pdf->Cell(196,5,'El Paciente no puede realizar la Valoracion de La Vivienda',0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(196,5,'Motivo: '.$aydpdt2,0,0,1);
		$pdf->Ln(5);
	}
	else
	{
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(196,5,strtoupper('Valoracion de la Vivienda'),0,0,'C',1);
		$pdf->Ln(5);
		$pdf->Cell(190,5,'Servicios Publicos: '.$auxservicios,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(16,5,'Telefonia:',0,0,1);
		$pdf->Cell(32,5,$auxtelefonia,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(38,5,'Manejo de Residuos:',0,0,1);
		$pdf->Cell(12,5,$auxresiduos,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(36,5,utf8_decode('Area en la vivienda:'),0,0,1);
		$pdf->Cell(12,5,$auxarea,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(196,5,'Detalle: '.$auxarea,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(38,5,utf8_decode('Animales domésticos:'),0,0,1);
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
		$pdf->Cell(62,5,utf8_decode('Utencilios de Cocina Conservación:'),0,0,1);
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
		$pdf->Ln(5);
		$pdf->Cell(196,5,'Rutinas: '.$viverutinas,0,0,1);
		// $pdf->Cell(60,5,$viverutinas,0,0,1);
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
		$pdf->Cell(20,5,utf8_decode('Habitación:'),0,0,1);
		$pdf->Cell(30,5,$auxhabitacion,0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(22,5,'Ventilacion:',0,0,1);
		$pdf->Cell(28,5,$auxventilacion,0,0,1);
		$pdf->Cell(22,5,'Iluminacion:',0,0,1);
		$pdf->Cell(15,5,$auxiluminacion,0,0,1);
	}
	
	$pdf->Ln(6);
	if($aydp=="no")
	{
		$pdf->Cell(196,5,'El Paciente no puede realizar la Escala de Ansiedad y Depresion Hospitalaria',0,0,1);
		$pdf->Ln(5);
		$pdf->Cell(196,5,'Motivo: '.$aydpdt,0,0,1);
		$pdf->Ln(5);
	}
	else
	{
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(196,5,strtoupper('Escala de Ansiedad y Depresion Hospitalaria'),0,0,'C',1);
		$pdf->Ln(6);
		$pdf->Cell(196,5,'Me siento tenso(a) o nervioso(a)   Puntos: '.$ayd1,0,0,1);
		$pdf->Ln(4);
		$pdf->Cell(49,5,utf8_decode('1'),0,'J');
		$pdf->Cell(49,5,utf8_decode('2'),0,'J');
		$pdf->Cell(49,5,utf8_decode('3'),0,'J');
		$pdf->Cell(49,5,utf8_decode('4'),0,'J');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(48,4,utf8_decode('nunca'),0,0,'J',0);
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('de vez en cuando'),0,0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('gran parte del dia'),0,0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('todo el dia'),0,0,'J');
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(196,5,'Sigo disfrutando de las cosas como siempre   Puntos: '.$ayd2,0,0,1);
		$pdf->Ln(4);
		$pdf->Cell(49,5,utf8_decode('1'),0,'J');
		$pdf->Cell(49,5,utf8_decode('2'),0,'J');
		$pdf->Cell(49,5,utf8_decode('3'),0,'J');
		$pdf->Cell(49,5,utf8_decode('4'),0,'J');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(48,4,utf8_decode('ya no disfruto como antes'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('solamente un poco'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('no tanto como antes'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('igual que antes'),0,'J');
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(190,5,'Siento una especie de temor como si algo malo fuera a succeder   Puntos: '.$ayd3,0,0,1);
		$pdf->Ln(4);
		$pdf->Cell(49,5,utf8_decode('1'),0,'J');
		$pdf->Cell(49,5,utf8_decode('2'),0,'J');
		$pdf->Cell(49,5,utf8_decode('3'),0,'J');
		$pdf->Cell(49,5,utf8_decode('4'),0,'J');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(48,4,utf8_decode('no siento nada de eso'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('si pero no me preocupa'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('si, pero no muy intenso'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('si y muy intenso'),0,'J');
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(190,5,utf8_decode('Soy capaz de reírme y ver el lado gracioso de las cosas   Puntos: ').$ayd4,0,0,1);
		$pdf->Ln(4);
		$pdf->Cell(49,5,utf8_decode('1'),0,'J');
		$pdf->Cell(49,5,utf8_decode('2'),0,'J');
		$pdf->Cell(49,5,utf8_decode('3'),0,'J');
		$pdf->Cell(49,5,utf8_decode('4'),0,'J');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(48,4,utf8_decode('actualmente, nada'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('actualmente, mucho menos'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('actualmente, algo menos'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('igual que siempre'),0,'J');
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(190,5,'Tengo la cabeza llena de preocupaciones   Puntos: '.$ayd5,0,0,1);
		$pdf->Ln(4);
		$pdf->Cell(49,5,utf8_decode('1'),0,'J');
		$pdf->Cell(49,5,utf8_decode('2'),0,'J');
		$pdf->Cell(49,5,utf8_decode('3'),0,'J');
		$pdf->Cell(49,5,utf8_decode('4'),0,'J');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(48,4,utf8_decode('nunca'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('de vez en cuando'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('gran parte del dia'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('todo el dia'),0,'J');
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(190,5,'Me siento lento(a) y torpe   Puntos: '.$ayd6,0,0,1);
		$pdf->Ln(4);
		$pdf->Cell(49,5,utf8_decode('1'),0,'J');
		$pdf->Cell(49,5,utf8_decode('2'),0,'J');
		$pdf->Cell(49,5,utf8_decode('3'),0,'J');
		$pdf->Cell(49,5,utf8_decode('4'),0,'J');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(48,4,utf8_decode('nunca'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('de vez en cuando'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('gran parte del dia'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('todo el dia'),0,'J');
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(190,5,'Soy capaz de permanecer sentado(a) tranquilo(a) y relajado(a)   Puntos: '.$ayd7,0,0,1);
		$pdf->Ln(4);
		$pdf->Cell(49,5,utf8_decode('1'),0,'J');
		$pdf->Cell(49,5,utf8_decode('2'),0,'J');
		$pdf->Cell(49,5,utf8_decode('3'),0,'J');
		$pdf->Cell(49,5,utf8_decode('4'),0,'J');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(48,4,utf8_decode('nunca'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('raras veces'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('a menudo'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('siempre'),0,'J');
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(190,5,utf8_decode('He perdido el interés por mi aspecto personal   Puntos: ').$ayd8,0,0,1);
		$pdf->Ln(4);
		$pdf->Cell(49,5,utf8_decode('1'),0,'J');
		$pdf->Cell(49,5,utf8_decode('2'),0,'J');
		$pdf->Cell(49,5,utf8_decode('3'),0,'J');
		$pdf->Cell(49,5,utf8_decode('4'),0,'J');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(48,4,utf8_decode('nunca'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('raras veces'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('a menudo'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('siempre'),0,'J');
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(190,5,'Experimento una desagradable senacion de "nervios y hormigueos" en el estomago   Puntos: '.$ayd9,0,0,1);
		$pdf->Ln(4);
		$pdf->Cell(49,4,utf8_decode('1'),0,'J');
		$pdf->Cell(49,4,utf8_decode('2'),0,'J');
		$pdf->Cell(49,4,utf8_decode('3'),0,'J');
		$pdf->Cell(49,4,utf8_decode('4'),0,'J');
		$pdf->Ln(3);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(48,4,utf8_decode('nunca'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('raras veces'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('a menudo'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('siempre'),0,'J');
		$pdf->Ln(4);
		// $pdf->Rect(9,$pdf->GetY(),192,13);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(190,5,utf8_decode('Espero las cosas con ilusión   Puntos: ').$ayd10,0,0,1);
		$pdf->Ln(4);
		$pdf->Cell(49,5,utf8_decode('1'),0,'J');
		$pdf->Cell(49,5,utf8_decode('2'),0,'J');
		$pdf->Cell(49,5,utf8_decode('3'),0,'J');
		$pdf->Cell(49,5,utf8_decode('4'),0,'J');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(48,4,utf8_decode('nunca'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('raras veces'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('a menudo'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('siempre'),0,'J');
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(190,5,'Me siento inquieto(a) como si no puediera parar de moverme   Puntos: '.$ayd11,0,0,1);
		$pdf->Ln(4);
		$pdf->Cell(49,5,utf8_decode('1'),0,'J');
		$pdf->Cell(49,5,utf8_decode('2'),0,'J');
		$pdf->Cell(49,5,utf8_decode('3'),0,'J');
		$pdf->Cell(49,5,utf8_decode('4'),0,'J');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(48,4,utf8_decode('nunca'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('raras veces'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('a menudo'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('siempre'),0,'J');
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(190,5,utf8_decode('Soy capaz de disfrutar con un buen libro o con un buen programa de radio o televisión   Puntos: ').$ayd12,0,0,1);
		$pdf->Ln(4);
		$pdf->Cell(49,5,utf8_decode('1'),0,'J');
		$pdf->Cell(49,5,utf8_decode('2'),0,'J');
		$pdf->Cell(49,5,utf8_decode('3'),0,'J');
		$pdf->Cell(49,5,utf8_decode('4'),0,'J');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(48,4,utf8_decode('nunca'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('raras veces'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('a menudo'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('siempre'),0,'J');
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(190,5,'Experimento de repente sensaciones de gran angustia o temor   Puntos: '.$ayd13,0,0,1);
		$pdf->Ln(4);
		$pdf->Cell(49,5,utf8_decode('1'),0,'J');
		$pdf->Cell(49,5,utf8_decode('2'),0,'J');
		$pdf->Cell(49,5,utf8_decode('3'),0,'J');
		$pdf->Cell(49,5,utf8_decode('4'),0,'J');
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(48,4,utf8_decode('nunca'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('raras veces'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('a menudo'),0,'J');
		$pdf->Cell(1);
		$pdf->Cell(48,4,utf8_decode('siempre'),0,'J');
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(190,5,'Total: '.$aydtoal.'   Nivel: '.$aynivel.'       1x = '.$cuentolosuno.'      2x = '.$cuentolosdos.'       3x = '.$cuentolotres.'      4x = '.$cuentoloscuatro,0,0,1);	
	}
	
	// 	$valgrama=$fila->enf_valoracion_grama;
	// 	$valecomapa=$fila->enf_valoracion_ecomapa;
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(196,5,strtoupper('Escala Valoracion Riesgo Social'),0,0,'C',1);
	$pdf->Ln(6);
	$pdf->Cell(196,5,utf8_decode('Situación Familiar   Puntos: ').$situacion_familiar,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(38,5,utf8_decode('1'),0,'J');
	$pdf->Cell(38,5,utf8_decode('2'),0,'J');
	$pdf->Cell(38,5,utf8_decode('3'),0,'J');
	$pdf->Cell(38,5,utf8_decode('4'),0,'J');
	$pdf->Cell(38,5,utf8_decode('5'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(38,4,utf8_decode('Vive con familia sin'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Vive con cónyuge de similar'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Vive con familia y/o cónyuge'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Vive solo y tiene hijos'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Vive solo y carace de hijos o'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(38,4,utf8_decode('dependencia físico psíquica'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('edad'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('y presenta algun grado de'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('próximos'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('viven alejados. No tiene'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('dependencia'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('cuidados permanentes'),0,0,'J');
	//
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(190,5,utf8_decode('Situación Económica   Puntos: ').$situacion_economica,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(38,5,utf8_decode('1'),0,'J');
	$pdf->Cell(38,5,utf8_decode('2'),0,'J');
	$pdf->Cell(38,5,utf8_decode('3'),0,'J');
	$pdf->Cell(38,5,utf8_decode('4'),0,'J');
	$pdf->Cell(38,5,utf8_decode('5'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(38,4,utf8_decode('Mas de 1,5 veces el salario'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Desde 1,5 veces el salario'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Desde el salario mínimo a'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Pensión no contributiva,'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Sin ingresos o ingresos de'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(38,4,utf8_decode('mínimo'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('mínimo hasta el salario'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('pensión minima contributiva'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('ingreso subsidiado'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('apoyo familiar'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('mínimo incluso'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(190,5,utf8_decode('Situación Vivienda   Puntos: ').$situacion_vivienda,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(38,5,utf8_decode('1'),0,'J');
	$pdf->Cell(38,5,utf8_decode('2'),0,'J');
	$pdf->Cell(38,5,utf8_decode('3'),0,'J');
	$pdf->Cell(38,5,utf8_decode('4'),0,'J');
	$pdf->Cell(38,5,utf8_decode('5'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(38,4,utf8_decode('Adecuada a necesidades'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Barreras arquitectónicas en'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Humedades, mala higiene,'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Ausencia de ascensor,'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Vivienda inadecuada (solo'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('la vivienda o ingreso a la'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('equipamiento inadecuado'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('telefonos (sistemas de'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('habitación integral,'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('casa (peldaños, escalones,'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('(sin baño completo, sin'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('comunicación audio visual)'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('inquilinato, compartidad con'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('rampas, puertas angostas,'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('agua caliente, sin'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('extraños, sin piso, en teja'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('baños comunales,etc.)'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('calefacion,..)'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('metálica o papel duro, sin'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('equipamiento minimo,..)'),0,0,'J');
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(190,5,utf8_decode('Situación Relaciones   Puntos: ').$situacion_relaciones,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(38,5,utf8_decode('1'),0,'J');
	$pdf->Cell(38,5,utf8_decode('2'),0,'J');
	$pdf->Cell(38,5,utf8_decode('3'),0,'J');
	$pdf->Cell(38,5,utf8_decode('4'),0,'J');
	$pdf->Cell(38,5,utf8_decode('5'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(38,4,utf8_decode('Con relaciones solciales'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Relación social solo con'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Relación social solo con'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('No sale del domicilio, recibe'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('No sale y no recibe visitas'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('familia y vecinos'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('familia o vecinos'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('visitas'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(190,5,utf8_decode('Situación Apoyo   Puntos: ').$situacion_apoyo,0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(38,5,utf8_decode('1'),0,'J');
	$pdf->Cell(38,5,utf8_decode('2'),0,'J');
	$pdf->Cell(38,5,utf8_decode('3'),0,'J');
	$pdf->Cell(38,5,utf8_decode('4'),0,'J');
	$pdf->Cell(38,5,utf8_decode('5'),0,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(38,4,utf8_decode('Con apoyo familiar y vecinal'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Voluntario social, ayuda'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('No tiene apoyo'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Pendiente de ingreso en'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('Tiene cuidados'),0,0,'J');
	$pdf->Ln(4);
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('domiciliaria'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode(''),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('residencia geriátrica'),0,0,'J');
	$pdf->Cell(38,4,utf8_decode('permanentes'),0,0,'J');
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(190,5,'Total: '.$situacion_total.'   Nivel: '.$situacion_nivel,0,0,1);
	$pdf->Ln(5);
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

	$pdf->Output('','HC-Valoracion_Enf_'.$getfecha2.'-'.$gethora.'.pdf');
?>
<!-- </body>
</html> -->