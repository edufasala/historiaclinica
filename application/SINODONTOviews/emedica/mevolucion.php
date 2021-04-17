<?php
	
	$campos = json_decode(json_encode($cn), True);
    foreach ($cn['ev'] as $fila)
	{
		$obid=$fila->id_ev;
		$obnhc=$fila->nro_hc;
		$obttra=$fila->tipo_tratamiento;

		$obmotivo=$fila->motivo_consulta;
		$obenfermed=$fila->enfermedad_actual;
		$obaper=$fila->a_personales;
		$obafam=$fila->a_familiares;
		$obrxs=$fila->revision_sistema;
		$obtalla=$fila->talla;
		$obpeso=$fila->peso;
		$obfr=$fila->fr;
		$obfc=$fila->fc;
		$obte=$fila->temperatura;
		$obts=$fila->tension_arterial;
		$obdescrip=$fila->descripcion_examen;
		$obldig=strtoupper($fila->diagnosticos);//lista_diagnosticos diagnosticos
		$obanali=$fila->analisis;
		$obplan=$fila->plan;

		$obpd=$fila->pad;
		$obldig2=strtoupper($fila->farmacos);
		$obmanejo=$fila->manejo_integral;
		$obpara=$fila->paraclinicos;
		$obvalo=$fila->valoraciones;
		$obinsumo=$fila->insumos;
		$obreco=$fila->recomendaciones;
		$obquien=$fila->quien_creo;
	}
	foreach ($cn['pc'] as $fila)
	{
		$obtipodoc=strtoupper($fila->tipo_doc);
		$obndoc=$fila->documento;
		$obnombre=$fila->nombres.' '.$fila->apellidos;
		$obsx=strtoupper($fila->sexo);
		$obtent=$fila->tipo_entidad;
		$obent=$fila->entidad;
		$obfnac=$fila->f_nacimiento;
		$obedad=utf8_decode($fila->edad);
		$obtel=$fila->celular;
	}

	$tamd=0;
	if($obtent=="entidad")
	{
		$tamd=19;
	}
	else if($obtent=="particular")
	{
		$tamd=27;
	}
	$limit=212;
	$ttx="Lorem ipsum dolor sit amet, consectetur adipisicing elit, asdas asdasd sed do eiusmod tempor dfdasdasd asd dffsdf sdfsdfsdf incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nis.";
	$ttx2="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nis.
	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nis.";
	$teactual=strlen($obenfermed);
	if($teactual>=$limit)
	{
		$enfactual=substr($obenfermed, 0, $limit);
	}
	else
	{
		$enfactual=$obenfermed;
	}
	$tap=strlen($obaper);
	if($tap>=$limit)
	{
		$apersonal=substr($obaper, 0, $limit);
	}
	else
	{
		$apersonal=$obaper;
	}
	$taf=strlen($obafam);
	if($taf>=$limit)
	{
		$afami=substr($obafam, 0, $limit);
	}
	else
	{
		$afami=$obafam;
	}
	$tdpex=strlen($obdescrip);
	if($tdpex>=$limit)
	{
		$dexamen=substr($obdescrip, 0, $limit);
	}
	else
	{
		$dexamen=$obdescrip;
	}
	$tpl=strlen($obplan);
	if($tpl>=$limit)
	{
		$elplan=substr($obplan, 0, $limit);
	}
	else
	{
		$elplan=$obplan;
	}
	
	#el paso de vaiables las llamo con una funcion con js y las cargo en el modal y luego las mando y las llamos
	#en la pagina del pdf y hay mismo puedo consultar otras las paginas del proyecto
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
	$xx=date_create($obfechainicio);//recibe este formato'2019-01-01'
	$dos=date_create($obfechafin);
	$diferencia=date_diff($xx,$dos);
	$fechagenerarl=$diferencia->format('%Y %m %d');//%d%a días %Y %m %R%a
	$anios=$diferencia->format('%Y');
	$meses=$diferencia->format('%m');
	$dias=$diferencia->format('%d'); 

    $pdf=new FPDF();
	$pdf->AliasnbPages();
	$pdf->AddPage();

	$pdf->SetFont('Arial','B',15);
	$pdf->Cell(65);
	$pdf->Cell(40,0,'EVOLUCION MEDICA',0,0,1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(85,2,'',0,1,'R');#crear una variable para dar el numero de historia
	$pdf->SetFont('Arial','',13);
	$pdf->Cell(180,5, 'Dr.'.$obquien,0,1,'C');
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(180,5, 'Especialista en NombreEspecialidad',0,1,'C');
	$pdf->Cell(180,5, 'Universidad de Nombreuniversidad',0,1,'C');
	$pdf->Cell(180,4, 'RM 00-00',0,1,'C');

	$pdf->SetY(2);
	$pdf->SetX(0);
	$pdf->Image(base_url().'assets/img/logo.png',16,2,30);
	$pdf->Ln(34);
	// $pdf->SetY(10);
	// $pdf->SetX(115);
	// $pdf->Cell(85,2,utf8_decode('Historia Clinica N°'),0,1,'R');

	$col1=34;
	$col2=40;
	$col3=46;
	$col4=76;
	$pdf->SetFillColor(232,232,232);
	$pdf->Line(10,$col1,200,$col1);
	$pdf->Line(10,$col2,200,$col2);
	$pdf->Line(10,$col3,200,$col3);
	$pdf->Line(10,$col4,200,$col4);
	$pdf->Ln(1);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(70,0,'Codigo:'.$obid.utf8_decode('  Evoculion Medica N°:').$obndoc,0,0,1);
	$pdf->Cell(77);
	$pdf->Cell(22,0,'F.Evolucion:',0,0,1);
	$pdf->Cell(12,0,date("Y/m/d"),0,0,1);
	$pdf->Ln(6);

	$pdf->SetFont('Arial','',11);
	$pdf->Cell(10,0,'Informacion del Paciente',0,0,'L');
	$pdf->Cell(106);
	$pdf->Cell(22,0,'F.Impresion:',0,0,1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(10,0,str_replace('of','de',$fef).' '.date('h:i:s a'),0,0,1);
	$pdf->Ln(4);
	$pdf->Cell(31,5,utf8_decode('N° Historia Clinica:   '.$obnhc),1,0,'',1);
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(10,5,strtoupper($obtipodoc),1,0,'',1);
	$pdf->Cell(24,5,$obndoc,1,0,1);
	$pdf->Cell(10);
	$pdf->Cell(38,5,'Nombres y Apellidos',1,0,'',1);
	$pdf->Cell(74,5,$obnombre,1,0,1);
	$pdf->Cell(12);
	$pdf->Cell(11,5,'Sexo',1,0,'',1);
	$pdf->Cell(6,5,strtoupper($obsx),1,0,1);
	$pdf->Ln(7);
	$pdf->Cell(25,5,'F.Nacimiento',1,0,'',1);
	$pdf->Cell(22,5,$obfnac,1,0,1);
	$pdf->Cell(12);
	$pdf->Cell(11,5,'Edad',1,0,'',1);
	$pdf->Cell(64,5,$obedad,1,0,1);
	$pdf->Cell(12);
	$pdf->Cell(15,5,'Celular',1,0,'',1);
	$pdf->Cell(24,5,$obtel,1,0,1);
	$pdf->Ln(7);
	$pdf->Cell($tamd,5,strtoupper($obtent),1,0,'',1);
	$pdf->Cell(52,5,$obent,1,0,1);
	$pdf->Cell(13);
	$pdf->Cell(36,5,'Tipo de Tratamiento',1,0,'',1);
	$pdf->Cell(62,5,strtoupper($obttra),1,0,1);
	$pdf->Ln(9);

	// $pdf->SetFont('Arial','',10);
	$pdf->Cell(30,5,'Motivo Consulta',1,0,'',1);
	$pdf->Cell(160,5,$obmotivo,1,0,1);
	$pdf->Ln(8);
	$pdf->Cell(36,5,'Enfermedad Actual',1,0,'',1);
	$pdf->Ln(5);
	// $pdf->SetY(92);
	$pdf->MultiCell(190,12,$enfactual,1,'L');
	// $pdf->Cell(190,25,$ttx,1,0,1);
	// $pdf->Ln(23);
	$pdf->Ln(8);//2
	$pdf->Cell(36,5,'A. Personales',1,0,'',1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,8,$apersonal,1,'L');//MultiCell(190,15,''.$ttx2,1,0,'',1);
	// $pdf->Text(190,10,$ttx);
	$pdf->Ln(8);
	$pdf->Cell(36,5,'A. Familiares',1,0,'',1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,8,$afami,1,'L');
	$pdf->Ln(8);
	$pdf->Cell(39,5,'Revision por Sistema',1,0,'',1);
	$pdf->Cell(151,5,$obrxs,1,0,1);
	$pdf->Ln(8);
	/*la solucion es determinar el n de caracteres de ser mayor a limite se imprimer con un subtring y asi se evita el probema
	lo otro seria dejarlo asi para que sea dinamico*/

	$pdf->Cell(28,5,'Examen Fisico',1,0,'',1);
	$pdf->Cell(2);
	$pdf->Cell(10,5,'Talla',1,0,'',1);
	$pdf->Cell(12,5,$obtalla,1,0,1);
	$pdf->Cell(8,5,'CM',1,0,'',1);
	$pdf->Cell(4);
	$pdf->Cell(11,5,'Peso',1,0,'',1);
	$pdf->Cell(12,5,$obpeso,1,0,1);
	$pdf->Cell(7,5,'KG',1,0,'',1);
	$pdf->Cell(4);
	$pdf->Cell(7,5,'FR',1,0,'',1);
	$pdf->Cell(12,5,$obfr,1,0,1);
	$pdf->Cell(4);
	$pdf->Cell(7,5,'FC',1,0,'',1);
	$pdf->Cell(12,5,$obfc,1,0,1);
	$pdf->Cell(4);
	$pdf->Cell(7,5,utf8_decode('T°'),1,0,'',1);
	$pdf->Cell(12,5,$obte,1,0,1);
	$pdf->Cell(4);
	$pdf->Cell(8,5,'TA',1,0,'',1);
	$pdf->Cell(15,5,$obts,1,0,1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,10,$dexamen,1,'L');
	$pdf->Ln(8);

	$pdf->Cell(15,5,'Analisis',1,0,'',1);
	$pdf->Ln(5);
	$pdf->Cell(190,5,$obanali,1,0,1);
	$pdf->Ln(8);
	$pdf->Cell(8,5,'IDX',1,0,'',1);
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	
	$porciones = explode(";", $obldig);
	$tty=$pdf->GetY();
	$alto=$tty+2;//84
	$conta=0;
	$ellargo=(count($porciones)-1)*6;
	$unsalto=0;
	if($ellargo==0)
	{
		$pdf->MultiCell(190,5,$obldig,1,'L');
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
	$pdf->MultiCell(190,$ellargo,'',1,'L');

	$pdf->Ln(2+$unsalto);
	$pdf->Cell(10,5,'Plan',1,0,'',1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,10,$elplan,1,'L');

	//2 hoja
	$pdf->SetY(280);
	$pdf->Cell(74);
	$pdf->Cell(10,5,'Plan de Manejo Domiciliario',0,0,'');
	$pdf->Ln(6);
	$pdf->Cell(30,5,'Continuar en PAD',1,0,'',1);
	$pdf->Cell(10,5,$obpd,1,0,1);
	$pdf->Ln(8);
	$pdf->Cell(38,5,'Manejo Farmacologico',1,0,'',1);
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	
	$porciones2 = explode(";", $obldig2);
	$tty2=$pdf->GetY();
	$alto2=$tty2+2;//84
	$conta2=0;
	$ellargo2=(count($porciones2)-1)*6;
	$unsalto2=0;
	if($ellargo2==0)
	{
		$pdf->MultiCell(190,5,$obldig2,1,'L');
		$pdf->Ln(6);
		$unsalto2=4;
	}
	else
	{
		$unsalto2=0;
	}
	for ($i=0; $i < count($porciones2)-1; $i++)
	{
		if((count($porciones2)-1)>=6)
		{

		}
		else
		{
			$pdf->SetY($alto2); 
			$pdf->SetX(10);
			$pdf->Cell(190,5,$porciones2[$i],0,0,'');
			$alto2+=5;
		}
	}
	$pdf->SetY($tty2);
	$pdf->MultiCell(190,$ellargo2,'',1,'L');
	$pdf->Ln(8);
	$pdf->Cell(36,5,'Manejo Integral',1,0,'',1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,8,$obmanejo,1,'L');
	$pdf->Ln(8);
	$pdf->Cell(36,5,'Paraclinicos',1,0,'',1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,8,$obpara,1,'L');
	$pdf->Ln(8);
	$pdf->Cell(36,5,'Valoraciones',1,0,'',1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,8,$obvalo,1,'L');
	$pdf->Ln(8);
	$pdf->Cell(36,5,'Insumos',1,0,'',1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,8,$obinsumo,1,'L');
	$pdf->Ln(8);
	$pdf->Cell(36,5,'Recomendaciones',1,0,'',1);
	$pdf->Ln(5);
	$pdf->MultiCell(190,8,$obreco,1,'L');
	$pdf->SetY(268);
	$pdf->Cell(14,5,'Medico.',0,0,'');
	// $pdf->Cell(20);
	$pdf->Cell(30,5,$obquien,0,0,'');
	$pdf->Cell(15);
	$pdf->Cell(40,5,'Firma: _______________________',0,0,'');
	$pdf->Cell(20);
	$pdf->Cell(40,5,'Sello: _______________________',0,0,'');
	// $pdf->SetY(400);
	// $pdf->Cell(10,5,'Plan de Manejo Domiciliario',1,0,'',1);
	$pdf->Output();
?>