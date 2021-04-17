<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Historia_odonto_n_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function buscar_paciente_nombres_odonto_n($busqueda){
			// $this->db->like("doc_paciente",$busqueda);
			// $this->db->like("pnombre_paciente",$busqueda);
			// $this->db->where("id_paciente!=",'PC0000');
			// $consulta=$this->db->get("paciente");
			if($busqueda)
			{
				$consulta="SELECT * FROM paciente WHERE doc_paciente LIKE '%".$busqueda."%' or pnombre_paciente LIKE '%".$busqueda."%' or snombre_paciente LIKE '%".$busqueda."%'";
			}
			else
			{
				$consulta="SELECT * FROM paciente WHERE id_paciente!='PC0000' ";
			}
			$r=$this->db->query($consulta);
			// $this->db->like("doc_paciente",$busqueda);
			// $this->db->like("pnombre_paciente",$busqueda);
			// $this->db->where("id_paciente!=",'PC0000');
			// $r=$this->db->get("paciente");
			// $this->db->where("id_paciente!=",'PC0000');
			// $this->db->where("doc_paciente", "LIKE %".$busqueda."%");
			// $r=$this->db->get("paciente");
			return $r->result();
		}

		function buscar_paciente_nombres_odonto_n2($busqueda){
			// $this->db->like("doc_paciente",$busqueda);
			// $this->db->like("pnombre_paciente",$busqueda);
			// $this->db->where("id_paciente!=",'PC0000');
			// $consulta=$this->db->get("paciente");
			if($busqueda)
			{
				// $consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,hc_concentimiento.id_hc_concentimiento,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_concentimiento ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente WHERE doc_paciente LIKE '%".$busqueda."%' or pnombre_paciente LIKE '%".$busqueda."%' or snombre_paciente LIKE '%".$busqueda."%' or papellido_paciente LIKE '%".$busqueda."%' or sapellido_paciente LIKE '%".$busqueda."%'";
				$consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,odonto.evolucion_f_reg,odonto.nro_hc FROM odonto INNER JOIN paciente ON odonto.evolucion_doc=paciente.doc_paciente WHERE nro_hc='1' and doc_paciente LIKE '%".$busqueda."%' or pnombre_paciente LIKE '%".$busqueda."%' or snombre_paciente LIKE '%".$busqueda."%' or papellido_paciente LIKE '%".$busqueda."%' or sapellido_paciente LIKE '%".$busqueda."%'";
			}
			else
			{
				// $consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,hc_concentimiento.id_hc_concentimiento,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_concentimiento ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente WHERE id_paciente!='PC0000' ";
				$consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,odonto.evolucion_f_reg,odonto.nro_hc FROM odonto INNER JOIN paciente ON odonto.evolucion_doc=paciente.doc_paciente WHERE nro_hc!='PC0000' and hc_pad.hc_pad_cod='1'";
				// SELECT hc_pad.pad_documento,paciente.pnombre_paciente,paciente.papellido_paciente,hc_concentimiento.id_hc_concentimiento,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_concentimiento ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente
			}
			$r=$this->db->query($consulta);
			return $r->result();
		}
		function buscar_registro_individual_odonto_n($busqueda){
			
			$consulta="SELECT COUNT(*) FROM visitaodonto WHERE visita_doc='".$busqueda."' ";
			$r=$this->db->query($consulta);
			return $r->result();
		}
		function buscar_registros_paciente_odonto_n($doc){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
	        $prim="SELECT evolucion_f_reg FROM odonto WHERE evolucion_doc='".$doc."' and nro_hc='1' ";
			$rprim=$this->db->query($prim);
			if($rprim->num_rows()==1)
			{
				$rprim=$rprim->row();
				$rprim=$rprim->evolucion_f_reg;
			}
			else
			{
				$rprim="";
			}
			
			$consulta2="SELECT evolucion_doc FROM odonto WHERE evolucion_doc='".$doc."' and evolucion_f_reg='".$rprim."' ";
			$r3=$this->db->query($consulta2);
			if($r3->num_rows()==1)
			{
				$r3=$r3->row();
				$r3=$r3->evolucion_doc;
			}
			else
			{
				$r3="";
			}
			if($r3)
			{

			}
			else
			{
				$r3="0";
			}

			$consulta3="SELECT barthel_doc FROM hc_barthel WHERE barthel_doc='".$doc."' and barthel_f_reg='".$rprim."' ";
			$r4=$this->db->query($consulta3);
			if($r4->num_rows()==1)
			{
				$r4=$r4->row();
				$r4=$r4->barthel_doc;
			}
			else
			{
				$r4="";
			}
			
			if($r4)
			{

			}
			else
			{
				$r4="0";
			}

			$resultado=
					$r3.','.
					$r4
					;			
			return $resultado;
		}

		function registrar_historiapad($datos){
			date_default_timezone_set("America/Bogota");
	      	$now = time();
	      	$getfecha=date("Y-m-d");
      		$gethora=date("h:i:s");
			$existe="SELECT COUNT(*) hc_pad FROM hc_pad WHERE pad_documento='".$datos['pad_documento']."'  ";
			$resultado=$this->db->query($existe);
			$resultado=$resultado->row();
			$result=$resultado->hc_pad;
			/*if($resultado->num_rows()==1)
			{
				$result=$resultado->row();
				//$result=$resultado->pad_documento;
			}
			else
			{
				$result="";
			}*/
			if($result>=1)
			{
				$existe2="SELECT COUNT(*) hc_pad, pad_f_reg,MAX(pad_h_reg) pad_h_reg FROM hc_pad WHERE pad_documento='".$datos['pad_documento']."' and pad_f_reg='".$getfecha."' ";
			    $resultado2=$this->db->query($existe2);
			    $resultado2=$resultado2->row();
			    $result2=$resultado2->hc_pad;
			  	$result2f=$resultado2->pad_h_reg;

			  	$hora = date_create($result2f);
		        date_add($hora, date_interval_create_from_date_string("1 hour"));
		        $obhora=date_format($hora,"h:i:s");
				if($result2f)
				{
					if($gethora>$obhora)
					{
						// return 0;
						//fuera de fecha
						$siguiente="SELECT MAX(id_hc_pad) id_hc_pad FROM hc_pad";
						$siguiente=$this->db->query($siguiente);
						$siguiente=$siguiente->row();
						$siguiente=$siguiente->id_hc_pad;
						$sigla='PAD';
						$numero=explode($sigla, $siguiente);
						$siguiente=$numero[1];
						$suma=$numero[1]+1;

						if($suma<=9)
						{
							$codigo=$sigla."000".$suma;
						}
						else if($suma>9 && $suma<=99)
						{
							$codigo=$sigla."00".$suma;
						}
						else if($suma>99 && $suma<=999)
						{
							$codigo=$sigla."0".$suma;
						}
						else if($suma>999 && $suma<=9999)
						{
							$codigo=$sigla.$suma;
						}
						else if($suma>9999)
						{
							$codigo=$sigla."A000".$suma;
						}

						$seguir="SELECT COUNT(*) hc_pad_cod FROM hc_pad WHERE pad_documento='".$datos['pad_documento']."'";
						$seguir=$this->db->query($seguir);
						$seguir=$seguir->row();
						$seguir=$seguir->hc_pad_cod;
						if($seguir==0)
						{
							$suma2=1;
						}
						else
						{
							$suma2=$seguir+1;
						}
						$obcod=$codigo;
						// $obpc=$datos['id_paciente'];
						// $getfecha=$datos['f_hc'];
						// $gethora=$datos['h_hc'];
						$guardarid="";
						$campos= array(
							// $guardarid=>'id',
							'id_hc_pad'=>$codigo,
							'hc_pad_cod'=>$suma2,
							'pad_documento'=>$datos['pad_documento'],

							'pad_mconsulta'=>$datos['pad_mconsulta'],
							'pad_enf_actual'=>$datos['pad_enf_actual'],
							'pad_a_patologicos'=>$datos['pad_a_patologicos'],
							'pad_a_quirurgicos'=>$datos['pad_a_quirurgicos'],
							'pad_a_farmacologicos'=>$datos['pad_a_farmacologicos'],
							'pad_a_alergicos'=>$datos['pad_a_alergicos'],
							'pad_a_traumaticos'=>$datos['pad_a_traumaticos'],
							'pad_a_familiares'=>$datos['pad_a_familiares'],
							'pad_a_transfusionales'=>$datos['pad_a_transfusionales'],
							'pad_a_ginecologicos'=>$datos['pad_a_ginecologicos'],

							'pad_pps'=>$datos['pad_pps'],
							'pad_mdas'=>$datos['pad_mdas'],
							'pad_cam'=>$datos['pad_cam'],
							'pad_ramsay'=>$datos['pad_ramsay'],
							'pad_ecaf_observaciones'=>$datos['pad_ecaf_observaciones'],
							'pad_f_reg'=>$datos['pad_f_reg'],
							'pad_h_reg'=>$datos['pad_h_reg'],
							'pad_h_inicio'=>$datos['pad_h_inicio'],
							'pad_tipo_tratamiento'=>$datos['pad_tipo_tratamiento'],
							'pad_created_user'=>$datos['pad_created_user'],
							'pad_update_user'=>$datos['pad_update_user']
							);
						// $id='id';
						$rs=$this->db->insert('hc_pad',$campos);

						return '<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
							   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
							   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							   			<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h5 class="text-center">Ingreso al Pad Registrado</h5>
								   	<input type="text" class="form-control" id="idpad" name="idpad" value="'.$codigo.'" style="display:none"/>
								</div>
							 	<div class="modal-footer">
							       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
							   	</div>
							</div>
						</div>';
					}
					else
					{
						return 0;
					}
				}
				else
				{
					$siguiente="SELECT MAX(id_hc_pad) id_hc_pad FROM hc_pad";
					$siguiente=$this->db->query($siguiente);
					$siguiente=$siguiente->row();
					$siguiente=$siguiente->id_hc_pad;
					$sigla='PAD';
					$numero=explode($sigla, $siguiente);
					$siguiente=$numero[1];
					$suma=$numero[1]+1;

					if($suma<=9)
					{
						$codigo=$sigla."000".$suma;
					}
					else if($suma>9 && $suma<=99)
					{
						$codigo=$sigla."00".$suma;
					}
					else if($suma>99 && $suma<=999)
					{
						$codigo=$sigla."0".$suma;
					}
					else if($suma>999 && $suma<=9999)
					{
						$codigo=$sigla.$suma;
					}
					else if($suma>9999)
					{
						$codigo=$sigla."A000".$suma;
					}

					$seguir="SELECT COUNT(*) hc_pad_cod FROM hc_pad WHERE pad_documento='".$datos['pad_documento']."'";
					$seguir=$this->db->query($seguir);
					$seguir=$seguir->row();
					$seguir=$seguir->hc_pad_cod;
					if($seguir==0)
					{
						$suma2=1;
					}
					else
					{
						$suma2=$seguir+1;
					}
					$obcod=$codigo;
					// $obpc=$datos['id_paciente'];
					// $getfecha=$datos['f_hc'];
					// $gethora=$datos['h_hc'];
					$guardarid="";
					$campos= array(
						// $guardarid=>'id',
						'id_hc_pad'=>$codigo,
						'hc_pad_cod'=>$suma2,
						'pad_documento'=>$datos['pad_documento'],

						'pad_mconsulta'=>$datos['pad_mconsulta'],
						'pad_enf_actual'=>$datos['pad_enf_actual'],
						'pad_a_patologicos'=>$datos['pad_a_patologicos'],
						'pad_a_quirurgicos'=>$datos['pad_a_quirurgicos'],
						'pad_a_farmacologicos'=>$datos['pad_a_farmacologicos'],
						'pad_a_alergicos'=>$datos['pad_a_alergicos'],
						'pad_a_traumaticos'=>$datos['pad_a_traumaticos'],

						'pad_ecaf_observaciones'=>$datos['pad_ecaf_observaciones'],
						'pad_f_reg'=>$datos['pad_f_reg'],
						'pad_h_reg'=>$datos['pad_h_reg'],
						'pad_h_inicio'=>$datos['pad_h_inicio'],
						'pad_tipo_tratamiento'=>$datos['pad_tipo_tratamiento'],
						'pad_created_user'=>$datos['pad_created_user'],
						'pad_update_user'=>$datos['pad_update_user']
						);
					// $id='id';
					$rs=$this->db->insert('hc_pad',$campos);

					return '<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
						   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
						   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						   			<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<h5 class="text-center">Ingreso al Pad Registrado</h5>
							   	<input type="text" class="form-control" id="idpad" name="idpad" value="'.$codigo.'" style="display:none"/>
							</div>
						 	<div class="modal-footer">
						       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
						   	</div>
						</div>
					</div>';
				}
			}
			else
			{
				return 2;
				//crear primera historia
			}
		}
		function registrar_historiapad_odonto_n($datos){
			$existe="SELECT COUNT(*) visitaodonto FROM visitaodonto WHERE visita_doc='".$datos['visita_doc']."' ";
			$resultado=$this->db->query($existe);
			$resultado=$resultado->row();
			$result=$resultado->visitaodonto;
			/*if($resultado->num_rows()==1)
			{
				$result=$resultado->row();
				//$result=$resultado->pad_documento;
			}
			else
			{
				$result="";
			}*/
			if($result<0)
			{
				return 0;
			}
			else
			{
				$siguiente="SELECT MAX(id_vis) id_vis FROM visitaodonto";
				$siguiente=$this->db->query($siguiente);
				$siguiente=$siguiente->row();
				$siguiente=$siguiente->id_vis;
				$sigla='VIS';
				$numero=explode($sigla, $siguiente);
				$siguiente=$numero[1];
				$suma=$numero[1]+1;

				if($suma<=9)
				{
					$codigo=$sigla."000".$suma;
				}
				else if($suma>9 && $suma<=99)
				{
					$codigo=$sigla."00".$suma;
				}
				else if($suma>99 && $suma<=999)
				{
					$codigo=$sigla."0".$suma;
				}
				else if($suma>999 && $suma<=9999)
				{
					$codigo=$sigla.$suma;
				}
				else if($suma>9999)
				{
					$codigo=$sigla."A000".$suma;
				}

				$seguir="SELECT COUNT(*) nro_hc FROM visitaodonto WHERE visita_doc='".$datos['visita_doc']."'";
				$seguir=$this->db->query($seguir);
				$seguir=$seguir->row();
				$seguir=$seguir->nro_hc;
				if($seguir==0)
				{
					$suma2=1;
				}
				else
				{
					$suma2=$seguir+1;
				}
				$obcod=$codigo;
				// $obpc=$datos['id_paciente'];
				// $getfecha=$datos['f_hc'];
				// $gethora=$datos['h_hc'];
				$guardarid="";
				$campos= array(
					// $guardarid=>'id',

					'id_vis'=>$codigo,
					'nro_hc'=>$suma2,

					'visita_tipo_tratamiento'=>$datos['visita_tipo_tratamiento'],
					'visita_doc'=>$datos['visita_doc'],
					'visita_f_visita'=>$datos['visita_f_visita'],	
					'visita_h_visita'=>$datos['visita_h_visita'],	
					'visita_nota'=>$datos['visita_nota'],						
					'visita_f_reg'=>$datos['visita_f_reg'],
					'visita_h_reg'=>$datos['visita_h_reg'],
					'visita_h_inicio'=>$datos['visita_h_inicio'],
					'visita_created_user'=>$datos['visita_created_user'],
					'visita_update_user'=>$datos['visita_update_user']

					);
				// $id='id';
				$rs=$this->db->insert('visitaodonto',$campos);

				return '<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
					   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
					   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					   			<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h5 class="text-center">Ingreso Odontologico Registrado</h5>
						   	<input type="text" class="form-control" id="idpadodontov" name="idpadodontov" value="'.$codigo.'" style="display:none"/>
						</div>
					 	<div class="modal-footer">
					       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
					   	</div>
					</div>
				</div>';
			}
		}

		function actualizar_historiapad_odonto_n($datos){
			$id=$datos['id_creado_odontov'];
			// $obpc=$datos['id_paciente'];
			// $getfecha=$datos['f_hc'];
			// $gethora=$datos['h_hc'];
			// return var_dump($datos);
			$campos= array(


					'visita_f_visita'=>$datos['visita_f_visita'],	
					'visita_h_visita'=>$datos['visita_h_visita'],	
					'visita_nota'=>$datos['visita_nota'],						
					'visita_f_reg'=>$datos['visita_f_reg'],
					'visita_h_reg'=>$datos['visita_h_reg'],
					'visita_h_inicio'=>$datos['visita_h_inicio'],
					'visita_created_user'=>$datos['visita_created_user'],
					'visita_update_user'=>$datos['visita_update_user']

				);

			$this->db->where('visita_doc',$id);
			$this->db->where('visita_h_inicio',$datos['visita_h_inicio']);
			$rs=$this->db->update('visitaodonto',$campos);
			
			return '<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
				   		<h5 class="modal-title"><strong>Compcasa IPS</strong></h5>
				   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   			<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="text-center">Visita Odontologica Actualizada</h5>
					</div>
				 	<div class="modal-footer">
				       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
				   	</div>
				</div>
			</div>';
		}	
		
		function registrar_historiabarthel($datos){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$pvalidar="SELECT COUNT(*) hc_barthel FROM hc_barthel WHERE barthel_doc='".$datos['barthel_doc']."' ";
			$pvalidar=$this->db->query($pvalidar);
			$pvalidar=$pvalidar->row();
			$pvalidar=$pvalidar->hc_barthel;
			if($pvalidar>0)
			{
				// $pvalidar=$pvalidar->pad_f_reg;
				$existe="SELECT COUNT(hc_barthel.id_hc_barthel),hc_barthel.barthel_f_reg FROM hc_barthel INNER JOIN hc_norton ON hc_barthel.barthel_doc=hc_norton.norton_doc INNER JOIN hc_braden ON hc_barthel.barthel_doc=hc_braden.braden_doc INNER JOIN hc_valoracion ON hc_barthel.barthel_doc=hc_valoracion.valoracion_doc INNER JOIN paciente ON hc_barthel.barthel_doc=paciente.doc_paciente and paciente.doc_paciente='".$datos['barthel_doc']."' ";
				$resultado=$this->db->query($existe);
				$resultado=$resultado->row();
				$result2 = $resultado->barthel_f_reg;
      			$miarray = get_object_vars($resultado);
      			foreach ($miarray as $valor) {
			        $result=$valor[0];
			    }
				if($result>0)
				{
					//return 0;
					$fecha = date_create($result2);
				    date_add($fecha, date_interval_create_from_date_string("6 months"));
				    $obfecha=date_format($fecha,"Y-m-d");
				    if($datos['barthel_f_reg']==$obfecha)
				    {
				    	// echo "si";//siguiente escala
				    	$siguiente="SELECT MAX(id_hc_barthel) id_hc_barthel FROM hc_barthel";
						$siguiente=$this->db->query($siguiente);
						$siguiente=$siguiente->row();
						$siguiente=$siguiente->id_hc_barthel;
						$sigla='BT';
						$numero=explode($sigla, $siguiente);
						$siguiente=$numero[1];
						$suma=$numero[1]+1;

						if($suma<=9)
						{
							$codigo=$sigla."000".$suma;
						}
						else if($suma>9 && $suma<=99)
						{
							$codigo=$sigla."00".$suma;
						}
						else if($suma>99 && $suma<=999)
						{
							$codigo=$sigla."0".$suma;
						}
						else if($suma>999 && $suma<=9999)
						{
							$codigo=$sigla.$suma;
						}
						else if($suma>9999)
						{
							$codigo=$sigla."A000".$suma;
						}
						
						$seguir="SELECT COUNT(*) hc_barthel_cod FROM hc_barthel WHERE barthel_doc='".$datos['barthel_doc']."'";
						$seguir=$this->db->query($seguir);
						$seguir=$seguir->row();
						$seguir=$seguir->hc_barthel_cod;
						if($seguir==0)
						{
							$suma2=1;
						}
						else
						{
							$suma2=$seguir+1;
						}
						$campos= array(
							'id_hc_barthel'=>$codigo,
							'hc_barthel_cod'=>$suma2,
							'barthel_doc'=>$datos['barthel_doc'],
							'barthel_comer'=>$datos['barthel_comer'],
							'barthel_banarse'=>$datos['barthel_banarse'],
							'barthel_vestirse'=>$datos['barthel_vestirse'],
							'barthel_arreglarse'=>$datos['barthel_arreglarse'],
							'barthel_deposicion'=>$datos['barthel_deposicion'],
							'barthel_miccion'=>$datos['barthel_miccion'],
							'barthel_retrete'=>$datos['barthel_retrete'],
							'barthel_traslado'=>$datos['barthel_traslado'],
							'barthel_deambulacion'=>$datos['barthel_deambulacion'],
							'barthel_escaleras'=>$datos['barthel_escaleras'],
							'barthel_total'=>$datos['barthel_total'],
							'barthel_nivel'=>$datos['barthel_nivel'],
							'barthel_f_reg'=>$datos['barthel_f_reg'],
							'barthel_h_reg'=>$datos['barthel_h_reg'],
							'barthel_h_inicio'=>$datos['barthel_h_inicio'],
							'barthel_created_user'=>$datos['barthel_created_user'],
							'barthel_update_user'=>$datos['barthel_update_user']
							);

						$rs=$this->db->insert('hc_barthel',$campos);

						return '<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
							   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
							   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							   			<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h5 class="text-center">Barthel Registrado</h5>
								</div>
							 	<div class="modal-footer">
							       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
							   	</div>
							</div>
				</div>';
				    }
				    else
				    {
				    	return 2;
				    	//echo "no"; // esperar los 6 meses
				    }
				}
				else
				{
					return 0;
				}
			}
			else
			{
				// return 2;
				//crear la historia clinica
				$siguiente="SELECT MAX(id_hc_barthel) id_hc_barthel FROM hc_barthel";
				$siguiente=$this->db->query($siguiente);
				$siguiente=$siguiente->row();
				$siguiente=$siguiente->id_hc_barthel;
				$sigla='BT';
				$numero=explode($sigla, $siguiente);
				$siguiente=$numero[1];
				$suma=$numero[1]+1;

				if($suma<=9)
				{
					$codigo=$sigla."000".$suma;
				}
				else if($suma>9 && $suma<=99)
				{
					$codigo=$sigla."00".$suma;
				}
				else if($suma>99 && $suma<=999)
				{
					$codigo=$sigla."0".$suma;
				}
				else if($suma>999 && $suma<=9999)
				{
					$codigo=$sigla.$suma;
				}
				else if($suma>9999)
				{
					$codigo=$sigla."A000".$suma;
				}
				
				$seguir="SELECT COUNT(*) hc_barthel_cod FROM hc_barthel WHERE barthel_doc='".$datos['barthel_doc']."'";
				$seguir=$this->db->query($seguir);
				$seguir=$seguir->row();
				$seguir=$seguir->hc_barthel_cod;
				if($seguir==0)
				{
					$suma2=1;
				}
				else
				{
					$suma2=$seguir+1;
				}
				$campos= array(
					'id_hc_barthel'=>$codigo,
					'hc_barthel_cod'=>$suma2,
					'barthel_doc'=>$datos['barthel_doc'],
					'barthel_comer'=>$datos['barthel_comer'],
					'barthel_banarse'=>$datos['barthel_banarse'],
					'barthel_vestirse'=>$datos['barthel_vestirse'],
					'barthel_arreglarse'=>$datos['barthel_arreglarse'],
					'barthel_deposicion'=>$datos['barthel_deposicion'],
					'barthel_miccion'=>$datos['barthel_miccion'],
					'barthel_retrete'=>$datos['barthel_retrete'],
					'barthel_traslado'=>$datos['barthel_traslado'],
					'barthel_deambulacion'=>$datos['barthel_deambulacion'],
					'barthel_escaleras'=>$datos['barthel_escaleras'],
					'barthel_total'=>$datos['barthel_total'],
					'barthel_nivel'=>$datos['barthel_nivel'],
					'barthel_f_reg'=>$datos['barthel_f_reg'],
					'barthel_h_reg'=>$datos['barthel_h_reg'],
					'barthel_h_inicio'=>$datos['barthel_h_inicio'],
					'barthel_created_user'=>$datos['barthel_created_user'],
					'barthel_update_user'=>$datos['barthel_update_user']
					);

				$rs=$this->db->insert('hc_barthel',$campos);

				return '<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
					   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
					   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					   			<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h5 class="text-center">Barthel Registrado</h5>
						</div>
					 	<div class="modal-footer">
					       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
					   	</div>
					</div>
				</div>';
			}
		}
		function actualizar_historiabarthel($datos){
			$id=$datos['barthel_doc'];
			
			$campos= array(
				'barthel_comer'=>$datos['barthel_comer'],
				'barthel_banarse'=>$datos['barthel_banarse'],
				'barthel_vestirse'=>$datos['barthel_vestirse'],
				'barthel_arreglarse'=>$datos['barthel_arreglarse'],
				'barthel_deposicion'=>$datos['barthel_deposicion'],
				'barthel_miccion'=>$datos['barthel_miccion'],
				'barthel_retrete'=>$datos['barthel_retrete'],
				'barthel_traslado'=>$datos['barthel_traslado'],
				'barthel_deambulacion'=>$datos['barthel_deambulacion'],
				'barthel_escaleras'=>$datos['barthel_escaleras'],
				'barthel_total'=>$datos['barthel_total'],
				'barthel_nivel'=>$datos['barthel_nivel'],
				'barthel_f_reg'=>$datos['barthel_f_reg'],
				'barthel_h_reg'=>$datos['barthel_h_reg'],
				'barthel_created_user'=>$datos['barthel_created_user'],
				'barthel_update_user'=>$datos['barthel_update_user']
				);

			$this->db->where("barthel_doc",$id);
			$this->db->where("barthel_f_reg",$datos['barthel_f_reg']);
			$rs=$this->db->update('hc_barthel',$campos);

			return '<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
				   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
				   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   			<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="text-center">Barthel Actualizado</h5>
					</div>
				 	<div class="modal-footer">
				       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
				   	</div>
				</div>
			</div>';
		}


		function consultar_historia_pad_odonto_n($id,$ff){
			$this->db->where("id_vis",$id);
			// $this->db->where("pad_documento",$id);
			// $this->db->where("pad_f_reg",$ff);
			$consulta=$this->db->get("visitaodonto");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();//->row();
			}
			else
			{
				return false;
			}
		}
		function consultar_historia_barthel($id){
			$this->db->where("barthel_doc",$id);
			$consulta=$this->db->get("hc_barthel");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();//->row();
			}
			else
			{
				return false;
			}
		}
		function consultar_hc_nombres_odonto_n($busqueda){
			$this->db->like("documento",$busqueda);
			$consulta=$this->db->get("hc");
			return $consulta->result();
			// return $busqueda;
		}
		function consultar_hc_todas_odonto_n(){
			$consulta=$this->db->get("hc");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();//->row();
			}
			else
			{
				return false;
			}
		}
		function cambios_motivo($datos){
			$id=$datos['doc_paciente'];
			
			$campos= array(
				'inclusion_pad_paciente'=>$datos['inclusion_pad_paciente'],				
				'update_user'=>$datos['update_user']
				);

			$this->db->where("doc_paciente",$id);
			// $this->db->where("braden_f_reg",$datos['braden_f_reg']);
			$rs=$this->db->update('paciente',$campos);

			return $rs;
		}
	}
?>