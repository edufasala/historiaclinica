<?php
	header('Content-Type: text/html; charset=UTF-8');
	$campos = json_decode(json_encode($cn), True);
	foreach ($cn['hcconcentimiento'] as $fila)
	{
		$nombre_cuidador=$fila->concentimiento_nombre_cuidador;
		$tdoccuidador=$fila->concentimiento_tipo_doc_cuidador;
		$doccuidaor=$fila->concentimiento_doc_cuidador;
		$otroresponsable=$fila->concentimiento_responsable_paciente;
		$pronostico=$fila->concentimiento_pronostico;
		$fconsentimiento=$fila->concentimiento_fecha;
		$ndocpaciente=$fila->concentimiento_nombre_paciente;
		$ndoresponsable=$fila->concentimiento_nombre_responsable;
		$cualrelacion=$fila->concentimiento_da_concentimiento;
		$nofirma=$fila->concentimiento_no_firma_por;
		$materiales=$fila->concentimiento_mareriales;
		$disentimiento=$fila->concentimiento_disentimiento;
		if($fila->concentimiento_paciente_pad=="C")
		{
			$tipopaciente='Cronico';
		}
		else if($fila->concentimiento_paciente_pad=="A")
		{
			$tipopaciente='Agudo';
		}
		else if($fila->concentimiento_paciente_pad=="P")
		{
			$tipopaciente='Paleativo';
		}
		if($fila->concentimiento_probabilidad_exito=="B")
		{
			$probabilidad='Bueno';
		}
		else if($fila->concentimiento_probabilidad_exito=="R")
		{
			$probabilidad='Regular';
		}
		else if($fila->concentimiento_probabilidad_exito=="D")
		{
			$probabilidad='Deficiente';
		}
		$obldig=utf8_decode($fila->concentimiento_diagnosticos);//lista_diagnosticos diagnosticos
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
		else if($fila->estado_civil_paciente=="o"  || $fila->estado_civil_paciente=="0")
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
	// $dias=$diferencia->format('%d'); fconsentimiento
	// $GLOBALS['nommedico'] = $nommedico;
	$GLOBALS['obnrohc'] = $obnrohc;
	$GLOBALS['fconsentimiento'] = $fconsentimiento;
	$GLOBALS['fef'] = $fef;
	// $GLOBALS['obtipodoc'] = $obtipodoc;
	// $GLOBALS['obndoc'] = $obndoc;
	// $GLOBALS['obnombre'] = $obnombre;
	// $GLOBALS['estadoc'] = $estadoc;
	// $GLOBALS['obfnac'] = $obfnac;
	// $GLOBALS['calculoedad'] = $calculoedad;
	// $GLOBALS['tipot'] = $tipot;
	$GLOBALS['direccion'] = "Calle: 5 Historia Clinica";
	$GLOBALS['desarrolladopor'] = "Arkas Comunicaciones";
	class PDF extends FPDF
	{
		// protected $numhis="Historia Clinica N°";
		
			
		public function Header()
		{
			global $nommedico;

			
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
			$this->SetXY(9,5);
		    $this->Cell(193,10,'',0,0,'C',true);
		    $this->SetXY(9,8);
			$this->SetFont('Arial','B',15);
			// $this->Cell(65);
			$this->Cell(193,6,'CONSENTIMIENTO INFORMADO',0,0,'C',true);
			$this->SetY(1);
			$this->SetX(0);
			$this->Image(base_url().'assets/img/logo.png',16,6,9);
			$this->Ln(5);
			$this->SetFillColor(232,232,232);

			// $this->Cell(12,0,'Fecha Consentimiento: '.$GLOBALS['fconsentimiento'],0,0,1);
			// $this->Ln(6);
			// $this->SetFont('Arial','',11);
			// $this->Cell(106);
			// $this->Cell(22,0,'F.Impresion:',0,0,1);
			// $this->SetFont('Arial','',10);
			// $this->Cell(10,0,str_replace('of','de',$GLOBALS['fef']).' '.date('h:i:s a'),0,0,1);
			// $this->Ln(4);
			// $this->SetFont('Arial','B',11);
			// $this->Cell(10,5,strtoupper($GLOBALS['obtipodoc']).':',0,0,1);
			// $this->SetFont('Arial','',11);
			// $this->Cell(24,5,$GLOBALS['obndoc'],0,0,1);
			// $this->Cell(25);
			// $this->SetFont('Arial','B',11);
			// $this->Cell(42,5,'Nombres y Apellidos:',0,0,1);
			// $this->SetFont('Arial','',11);
			// $this->Cell(72,5,ucwords($GLOBALS['obnombre']),0,0,1);
			// $this->Cell(12);
			// $this->Ln(6);
			// $this->SetFont('Arial','B',11);
			// $this->Cell(26,5,'Estado Civil:',0,0,1);
			// $this->SetFont('Arial','',11);
			// $this->Cell(33,5,$GLOBALS['estadoc'],0,0,1);
			// $this->SetFont('Arial','B',11);
			// $this->Cell(28,5,'F.Nacimiento:',0,0,1);
			// $this->SetFont('Arial','',11);
			// $this->Cell(22,5,$GLOBALS['obfnac'],0,0,1);
			// $this->Cell(12);
			// $this->SetFont('Arial','B',11);
			// $this->Cell(14,5,'Edad:',0,0,1);
			// $this->SetFont('Arial','',11);
			// $this->Cell(64,5,utf8_decode($GLOBALS['calculoedad']),0,0,1);
			// $this->Cell(12);
			// $this->Ln(6);
			// $this->SetFont('Arial','B',11);
			// $this->Cell(41,5,'Tipo de Tratamiento:',0,0,1);
			// $this->SetFont('Arial','',11);
			// $this->Cell(62,5,$GLOBALS['tipot'],0,0,1);
			$this->Ln(10);
			$this->Rect($this->GetX(),$this->GetY(),193,$this->GetPageWidth()+55);
		}
		function Footer()
		{
			$this->SetY(-15);
			$this->Ln(2);
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

	// $pdf->SetFont('Arial','B',15);
	// $pdf->Cell(55);
	// $pdf->Cell(40,0,'CONSENTIMIENTO INFORMADO',0,0,1);

	

	// $pdf->header('asd');
	// $pdf->SetY(2);
	// $pdf->SetX(0);
	// $pdf->Image(base_url().'assets/img/logo.png',16,6,10);
	// $pdf->Ln(18);

	// $pdf->SetY(10);
	// $pdf->SetX(115);
	// $pdf->SetFont('Arial','',11);
	// $pdf->Cell(85,2,utf8_decode('Historia Clinica N°'),0,1,'R');

	$col1=34;
	$col2=40;
	$col3=46;
	$col4=68;
	$pdf->SetFillColor(232,232,232);
	// $pdf->Line(10,$col1,200,$col1);
	// $pdf->Line(10,$col2,200,$col2);
	// $pdf->Line(10,$col3,200,$col3);
	// $pdf->Line(10,$col4,200,$col4);
	$pdf->Ln(2);


	// $pdf->SetFont('Arial','',11);
	// $pdf->Cell(10,0,'Datos del Paciente',0,0,'L');
	// $pdf->Cell(106);
	// $pdf->Cell(22,0,'F.Impresion:',0,0,1);
	// $pdf->SetFont('Arial','',10);
	// $pdf->Cell(10,0,str_replace('of','de',$fef).' '.date('h:i:s a'),0,0,1);
	// $pdf->Ln(4);
	// $pdf->Rect(9,45,192,22,'B');
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
	$pdf->SetFont('Arial','',10);
	$pdf->MultiCell(190,5,utf8_decode('Dentro de las normas eticas exigidas en Colombia (ley 23 de 1981 para Medicina, Ley 911 de 2004 para Enfermeria, Ley 528 de 1999 para Fisioterapia, Ley de 2008 para Terapia Respiratoria, Ley 949 de 2005 para Terapia Ocupacional y Ley 376 de 1997 para Terapia de Lenguaje) y Decreto 780 de 2016, el profesional de la salud se encuentra en el deber de informar adecuada y oportunamente a todos sus paciente los riesgos que puedan derivarse del tratamiento y/o procedimiento que le sera practicado, solicitando su consentimiento anticipadamente. Por lo tanto, con el presente documento escrito, se pretende informar a usted y el favor, de manera respetuosam llene de su puño y letra, los espacions en blanco.'),0,'J');
	$pdf->Ln(4);
	$pdf->Cell(5,5,'Yo, ',0,0,1);
	$pdf->Cell(2);
	$pdf->Cell(strlen($nombre_cuidador)+30,5,strtoupper($nombre_cuidador),0,0,1);
	$pdf->Cell(14,5,'con '.$tdoccuidador,0,0,1);
	$pdf->Cell(5,5,'X',0,0,1);
	$pdf->Cell(16,5,utf8_decode('N° ').$doccuidaor,0,0,1);
	$pdf->Cell(2);
	$pdf->Cell(100,5,' o como responsable y cuidador del paciente, ',0,0,1);
	$pdf->Ln(6);
	$pdf->Cell(strlen($otroresponsable)+10,5,$otroresponsable,0,0,1);
	$pdf->Cell(4);
	$pdf->Cell(14,5,utf8_decode('con Historia Clinica N° ').$obnrohc,0,0,1);
	$pdf->Ln(8);
	$pdf->MultiCell(190,5,utf8_decode('Solicito a los profesionales de la salud de la IPS COMPAÑIA CALIDAD Y CUIDADO EN SALUD S.A.S. SIGLA COMPCASA SAS que me realicen la atencion integral en el PAD como Paciente '.strtoupper($tipopaciente).' siendo este, el PAD, una alternativa asistencial continua para la presentacion de servicios de salud interdisciplinarios en el domicilo. basados en un PLAN DE INTERVERSION, diseñado por el grupo de profesionales, que lo ejecutan a traves de visitas domiciliarias programadas, definidas por la condicion de salud del paciente, que son idenficiadas con aplicacion de formatos, escalas y test, que ademas, evidencian riesgos existentes en el domicilio. El principal objetivo es el de brindar intervenciones terapeuticas con orientacion y educacion, a traves de la relacion profesional-paciente necesaria. que previamente he señalado al equipo de salud deseo tener, para que realice la atencion acordad y enunciada en el paciente. Entiendo que la atencion ofrecida es solo domiciliaria, la cual no contempla servicios de urgencia, internacion, quirurgicos, transporte asistencial medicalizado, ni de consulta externa intramural; que ademas, el domicilio presenta riesgos ambientales, que inducen en disfuncionalidad y morbiliades, limitando el alcance de los objetivos de forma integral, mas aun si estos no son controlados por mi cuidador, de los cuales tengo conocimiento.'),0,'J');

	$pdf->SetFont('Arial','',11);
	$pdf->SetX(11);
	$pdf->Cell(26,5,'Diagnosticos',0,0,'',1);
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
	$pdf->SetFont('Arial','',10);
	$pdf->MultiCell(190,5,utf8_decode('Procedimiento Atencion que involucra acciones centrdas en la asistencia - educacion en el domicilio, con abordaje intgral ofrecido por un equipo de salud interdisciplinario,, que busca intervenir de forma miltifactorial los diferentes aspectos que afectan el proceso cronico de salud enfermedad del paciente, e implica la evaluacion y manejo del paciente como individuo en su entorno autonomia, independecia y calidad de vida, a traves de potenciar el domicilio como el lugar terapeutico de atencion, sumando la vigilancia activa y asistencia con la promocion del autocuidado que ofrece la familia y el paciente en beneficio de su propia funcionalidad.'),0,'J');
	$pdf->Ln(2);
	$pdf->MultiCell(190,5,utf8_decode('Riesgos Previstos Generales. Cronicidad y/o agudizacion de Comorbilidades y Muerte, ademas de la presencia de comorbilidades inducidas por disfuncionalidad del entorno domiciliario no controlado por la familia.'),0,'J');
	$pdf->Ln(2);
	$pdf->MultiCell(190,5,utf8_decode('Riesgos Previstos Especificos. Efectos secundarios por uso de tecnologias en salud formulados, entregados y aplicados durenatela atencion domiciliaria, dolor irruptivo, perdida de capacidad funcional por agudizacion de las patologias de ingreso al programa de atencion domiciliaria y hospitalizacion por agudizacion de comorbilidades o presencia de enfermedad aguda emergente que puede ser inducida por suceso no seguro condicionado a disfuncionalidad del entorno domiciliario no controlado por la familia.'),0,'J');
	$pdf->Ln(2);
	$pdf->MultiCell(190,5,utf8_decode('Anestesia. No es requerida, sin embargo, la Analgesia y/o Sedacion es complemento terapeutico en el manejo de dolor cuando el medico asi lo determine, sobre todo en los pacientes de Cuidado Paleativo.'),0,'J');
	$pdf->Ln(2);//hoja 2
	$pdf->MultiCell(190,5,utf8_decode('Patologia. No es requeridad muestra de partes corporales para estudio por laboratoiro de patologia, pero en caso de ser requerida como parte del Plane de interversion programado al paciente, se realizara con aplicacion a la Referencia de Servicios de Salud de la Red de paciente y su asegurador.'),0,'J');
	$pdf->Ln(2);
	$pdf->MultiCell(190,5,utf8_decode('Probabilidad de exito. Las interverciones que cada profesional desarrolla no son ajenas a la variabilidad inter subjetiva. En general estas son mas precisas para la sintomatologia que para el de entidades y mucho menos cuando existen comorbilidades y cuando no se genera adherencia al Plan de interversion de parte del Cuidador o Paciente. La probabilidad de exito del procedimiento mencionado arriba es catalogado como: '.$probabilidad),0,'J');
	$pdf->Ln(2);
	$pdf->Cell(190,6,utf8_decode('Pronostico. Si decido no efectuar el procedimiento mencionado arriba, mi pronostico (condiciones medicas futuras) son:'),0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,6,utf8_decode($pronostico),0,'J');
	$pdf->Ln(5);
	$pdf->MultiCell(190,5,utf8_decode('Alternativas de tratamiento. No existen y yo he elegido este procedimiento como metodo de atencion basada en un modelo integral asistencial domiciliario interdisiplinario con complementacion terapeutica.'),0,'J');
	$pdf->Ln(2);
	$pdf->MultiCell(190,5,utf8_decode('Consentimiento informado. Comprendo y acepto que durante las atenciones, pueden aparecer circunstancias imprevisibles o inesperadas, que puedan requerir una extension del procedimiento original o la relacion de otro procedimiento no mencionado arriba, o la utilizacion de otros recursos adicionales con los ciretrios que definan la necesidad de remision a un centro hospitalario de la Red propia del Paciente.'),0,'J');
	$pdf->Ln(2);
	$pdf->MultiCell(190,5,utf8_decode('Solicito a COMPAÑIA CALIDAD Y CUIDADO EN SALUD S.A.S. SIGLA COMPCASA SAS que realicen los procedimientos adicionales que juezguen necesarios que complementen el PLAN DE INTERVENCION del PROGRAMA DE ATENCION DOMICILIARIA - PAD. Al firmar este formulario reconozca que los he leido o que me ha sido leido y explicado y que comprendo perfectamente su contenido. Se me han dado amplias oportunidades de formular preguntas y que todas las preguntas que he formulado han sido respondidas o explicadas en forma satisfactoria. Todos los espacios en blanco o frases por completar han sido llenados y todos los puntos en los que no estoy de acuerdo han sido marcados antes de firmar este consentimiento. Acepto que las profesionales de la salud no son ciencias exactas y que no se me han garantizado resultados, que se esperan de los procedimientos de diagnostico y/o terapeuticos, en el sentido de que la practia de la atencion del PAD que se requiere, compromete solo una actividad de medios, pero no de resultados, mas aun cuando el estado mental del paciente y la ausencia de parientes o allegados impidan la advertencia de los riesgos previstos.'),0,'J');
	$pdf->Ln(2);
	$partef = explode("-", $fconsentimiento);
	$pdf->MultiCell(190,5,utf8_decode('Comprendiendo estas limitaciones, solicito a COMPAÑIA CALIDAD Y CUIDADO EN SALUD S.A.S. SIGLA COMPCASA SAS que realice la inclision al PAD y el desarrollo del PLAN DE INTERVENCION, firmo el dia '.$partef[2].' de '.$partef[1].' de '.$partef[0]),0,'J');
	$pdf->Ln(2);
	$pdf->Cell(90,5,'........................................................',0,0,1);
	$pdf->Cell(20);
	$pdf->Cell(90,5,'........................................................',0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(90,5,'C.C.. '.$ndocpaciente,0,0,1);
	$pdf->Cell(20);
	$pdf->Cell(90,5,'C.C.. '.$ndoresponsable,0,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,6,utf8_decode('La persona que da el consentimiento, tiene una relacion con el paciente de '.$cualrelacion.' si no es el mismo paciente.'),0,'J');
	$pdf->Ln(2);
	$pdf->MultiCell(190,6,utf8_decode('El paciente no pueder firmar por '.$nofirma),0,'J');
	$pdf->Ln(2);
	$pdf->MultiCell(190,6,utf8_decode('Los materiales adicionales que se utilizaron durante el proceso de consentimiento informado para este procedimiento incluyen:'),0,'J');
	$pdf->MultiCell(190,6,utf8_decode($materiales),0,'J');
	$pdf->Ln(2);
	$pdf->Cell(85);
	$pdf->Cell(90,5,'___________________________________________________',0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(105);
	$pdf->Cell(90,5,'Firma Profesional de la salud',0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(50);
	$pdf->Cell(30,5,'Fecha '.$fconsentimiento,0,0,1);
	$pdf->Cell(2);
	$pdf->Cell(90,5,'Registro        __________________________________________',0,0,1);
	$pdf->Ln(8);
	$pdf->MultiCell(190,5,utf8_decode('DISENTIMIENTO DEL PROCEDIMIENTO'),0,'C');
	$pdf->MultiCell(190,5,utf8_decode('Hoy '.$partef[2].' de '.$partef[1].' de '.$partef[0].' he decidido no permitir, presindir o continuar con la realizacion del PLAN DE INTERVENCION del PROGRAMA DE ATENCION DOMICILIARIA. Voluntariamente haciendo uso de mi ferecho, sin que esto ocacione ningun tipo de represlia contra mi, siendo expuestos mis motivos de desistimiento a continuaicon:'),0,'J');
	$pdf->MultiCell(190,6,utf8_decode($disentimiento),0,'J');
	$pdf->MultiCell(190,5,utf8_decode('De igual forma declaro que he sido debidamente informado (a) sobre los riesgos y posibles complicaciones de salud que implica el disentimiento voluntario a la atencion del PAD. Afirmo que bajo mi responsabilidad decido desistir y en consecuencia declaro que COMPAÑIA CALIDAD Y CUIDADO EN SALUD S.A.S. SIGLA COMPCASA SAD, no es responsable legal en caso de complicaciones posterioes ni derivadas de mi objecion.'),0,'J');
	$pdf->Ln(10);
	$pdf->Cell(90,5,'........................................................',0,0,1);
	$pdf->Cell(20);
	$pdf->Rect(82,$pdf->GetY(),25,20);
	$pdf->Cell(90,5,'........................................................',0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(90,5,'Paciente o responsable',0,0,1);
	$pdf->Cell(20);
	$pdf->Cell(90,5,'Profesional de la Salud',0,0,1);
	$pdf->Ln(5);
	$pdf->Cell(90,5,'C.C.. '.$ndocpaciente,0,0,1);
	$pdf->Cell(20);
	$pdf->Cell(90,5,'C.C.. ______________',0,0,1);
	// $pdf->Ln(8);
	// $pdf->Cell(100);
	// $pdf->Cell(20,5,'Huella',0,0,1);

	$pdf->Output('','HC-Concentimiento_'.$getfecha.'-'.$gethora.'.pdf');
?>
<!-- </body>
</html> -->