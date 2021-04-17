<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Historia_odonto_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function buscar_paciente_nombres_odonto($busqueda){
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

			return $r->result();
		}
		function buscar_paciente_nombres_odonto2($busqueda){

			if($busqueda)
			{
			
				$consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,odonto.evolucion_f_reg,odonto.nro_hc FROM odonto INNER JOIN paciente ON odonto.evolucion_doc=paciente.doc_paciente WHERE nro_hc='1' and doc_paciente LIKE '%".$busqueda."%' or pnombre_paciente LIKE '%".$busqueda."%' or snombre_paciente LIKE '%".$busqueda."%' or papellido_paciente LIKE '%".$busqueda."%' or sapellido_paciente LIKE '%".$busqueda."%'";
			}
			else
			{
	
				$consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,odonto.evolucion_f_reg,odonto.nro_hc FROM odonto INNER JOIN paciente ON odonto.evolucion_doc=paciente.doc_paciente WHERE nro_hc!='PC0000' and hc_pad.hc_pad_cod='1'";

			}
			$r=$this->db->query($consulta);
			return $r->result();
		}
		function buscar_registro_individual_odonto($busqueda){
			$consulta="SELECT COUNT(*) FROM odonto WHERE evolucion_doc='".$busqueda."' ";
			$r=$this->db->query($consulta);
			return $r->result();
		}
		function buscar_registros_paciente_odonto($doc){
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

			$consulta3="SELECT visita_doc FROM visitaodonto WHERE visita_doc='".$doc."' and visita_f_reg='".$rprim."' ";
			$r4=$this->db->query($consulta3);
			if($r4->num_rows()==1)
			{
				$r4=$r4->row();
				$r4=$r4->visita_doc;
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
		function buscar_registros_paciente_ea($doc){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			$this->db->where("evolucion_doc",$doc);
			$this->db->join('paciente','odonto.evolucion_doc=paciente.doc_paciente');
			// $this->db->where("id_hc_pad_cod!=",'PAD0000');
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get("odonto");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			/*
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			*/
		}
		function buscar_registros_paciente_eafh($doc,$ff){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			$this->db->where("evolucion_doc",$doc);
			$this->db->join('paciente','odonto.evolucion_doc=paciente.doc_paciente');
			// $this->db->where("id_hc_pad_cod!=",'PAD0000');
		    $this->db->where("doc_paciente",$doc);
		    $this->db->where("evolucion_f_reg",$ff);
			$consulta=$this->db->get("odonto");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			/*
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			*/
		}
		function buscar_registros_paciente_tdmd($doc){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			$this->db->where("evolucion_doc",$doc);
			$this->db->join('paciente','odonto.evolucion_doc=paciente.doc_paciente');
			// $this->db->where("id_hc_pad_cod!=",'PAD0000');
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get("odonto");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			/*
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			*/
		}
		function buscar_registros_paciente_tdmdfh($doc,$ff){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			$this->db->where("evolucion_doc",$doc);
			$this->db->join('paciente','odonto.evolucion_doc=paciente.doc_paciente');
			// $this->db->where("id_hc_pad_cod!=",'PAD0000');
			$this->db->where("evolucion_f_reg",$ff);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get("odonto");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			/*
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			*/
		}
		function buscar_registros_paciente_tddgs($doc){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			$this->db->where("evolucion_doc",$doc);
			$this->db->join('paciente','odonto.evolucion_doc=paciente.doc_paciente');
			// $this->db->where("id_hc_pad_cod!=",'PAD0000');
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get("odonto");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			/*
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			*/
		}
		function buscar_registros_paciente_tddgsfh($doc,$ff){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			$this->db->where("evolucion_doc",$doc);
			$this->db->join('paciente','odonto.evolucion_doc=paciente.doc_paciente');
			// $this->db->where("id_hc_pad_cod!=",'PAD0000');
			$this->db->where("evolucion_f_reg",$ff);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get("odonto");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			/*
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			*/
		}

		function registrar_historiapad_odonto($datos){
			$existe="SELECT COUNT(*) odonto FROM odonto WHERE evolucion_doc='".$datos['evolucion_doc']."' ";
			$resultado=$this->db->query($existe);
			$resultado=$resultado->row();
			$result=$resultado->odonto;
			/*if($resultado->num_rows()==1)
			{
				$result=$resultado->row();
				//$result=$resultado->pad_documento;
			}
			else
			{
				$result="";
			}*/
			if($result>0)
			{
				return 0;
			}
			else
			{
				$siguiente="SELECT MAX(id_ev) id_ev FROM odonto";
				$siguiente=$this->db->query($siguiente);
				$siguiente=$siguiente->row();
				$siguiente=$siguiente->id_ev;
				$sigla='ODO';
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

				$seguir="SELECT COUNT(*) nro_hc FROM odonto WHERE evolucion_doc='".$datos['evolucion_doc']."'";
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
					'id_ev'=>$codigo,
					'nro_hc'=>$suma2,
					'evolucion_doc'=>$datos['evolucion_doc'],
					'evolucion_tipo_tratamiento'=>$datos['evolucion_tipo_tratamiento'],	
					'evolucion_motivo_consulta'=>$datos['evolucion_motivo_consulta'],	
					'evolucion_enfermedad_actual'=>$datos['evolucion_enfermedad_actual'],	
					'evolucion_t_medico'=>$datos['evolucion_t_medico'],	
					'evolucion_i_alimentos'=>$datos['evolucion_i_alimentos'],	
					'evolucion_r_alergicas'=>$datos['evolucion_r_alergicas'],	
					'evolucion_anestecia'=>$datos['evolucion_anestecia'],	
					'evolucion_antibiotico'=>$datos['evolucion_antibiotico'],	
					'evolucion_hemorragias'=>$datos['evolucion_hemorragias'],	
					'evolucion_irradiaciones'=>$datos['evolucion_irradiaciones'],	
					'evolucion_enf_respiratoria'=>$datos['evolucion_enf_respiratoria'],	
					'evolucion_cardiopatias'=>$datos['evolucion_cardiopatias'],	
					'evolucion_artritis'=>$datos['evolucion_artritis'],	
					'evolucion_terapia'=>$datos['evolucion_terapia'],	
					'evolucion_hepatitis'=>$datos['evolucion_hepatitis'],	
					'evolucion_embarazo'=>$datos['evolucion_embarazo'],	
					'evolucion_enf_renal'=>$datos['evolucion_enf_renal'],	
					'evolucion_gastro'=>$datos['evolucion_gastro'],	
					'evolucion_ante_quirurgicos'=>$datos['evolucion_ante_quirurgicos'],	
					'evolucion_osteo'=>$datos['evolucion_osteo'],	
					'evolucion_otros'=>$datos['evolucion_otros'],	
					'evolucion_observa'=>$datos['evolucion_observa'],	
					'evolucion_cepillado'=>$datos['evolucion_cepillado'],	
					'evolucion_cepillado_obs'=>$datos['evolucion_cepillado_obs'],	
					'evolucion_crema'=>$datos['evolucion_crema'],	
					'evolucion_crema_obs'=>$datos['evolucion_crema_obs'],	
					'evolucion_normalidad'=>$datos['evolucion_normalidad'],	
					'evolucion_normalidad_obs'=>$datos['evolucion_normalidad_obs'],	
					'evolucion_bebida_frecu'=>$datos['evolucion_bebida_frecu'],	
					'evolucion_bebida_ocasion'=>$datos['evolucion_bebida_ocasion'],	
					'evolucion_masas_no_azucar_frec'=>$datos['evolucion_masas_no_azucar_frec'],	
					'evolucion_masas_no_azucar_ocasion'=>$datos['evolucion_masas_no_azucar_ocasion'],	
					'evolucion_caramelo_frec'=>$datos['evolucion_caramelo_frec'],	
					'evolucion_caramelo_ocasion'=>$datos['evolucion_caramelo_ocasion'],	
					'evolucion_azucar_frec'=>$datos['evolucion_azucar_frec'],	
					'evolucion_azucar_ocasion'=>$datos['evolucion_azucar_ocasion'],	
					'evolucion_alcohol_frec'=>$datos['evolucion_alcohol_frec'],	
					'evolucion_alcohol_ocasion'=>$datos['evolucion_alcohol_ocasion'],	
					'evolucion_cigarro_frec'=>$datos['evolucion_cigarro_frec'],	
					'evolucion_cigarro_ocasion'=>$datos['evolucion_cigarro_ocasion'],
					'evolucion_f_reg'=>$datos['evolucion_f_reg'],
					'evolucion_h_reg'=>$datos['evolucion_h_reg'],
					'evolucion_h_inicio'=>$datos['evolucion_h_inicio'],
					'evolucion_created_user'=>$datos['evolucion_created_user'],
					'evolucion_update_user'=>$datos['evolucion_update_user']


					);
				// $id='id';
				$rs=$this->db->insert('odonto',$campos);

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
						   	<input type="text" class="form-control" id="idpadodonto" name="idpadodonto" value="'.$codigo.'" style="display:none"/>
						</div>
					 	<div class="modal-footer">
					       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
					   	</div>
					</div>
				</div>';
			}
		}

		function actualizar_historiapad_odonto($datos){
			$id=$datos['id_creado_odonto'];
			// $obpc=$datos['id_paciente'];
			// $getfecha=$datos['f_hc'];
			// $gethora=$datos['h_hc'];
			// return var_dump($datos);
			$campos= array(

					'evolucion_tipo_tratamiento'=>$datos['evolucion_tipo_tratamiento'],	
					'evolucion_motivo_consulta'=>$datos['evolucion_motivo_consulta'],	
					'evolucion_enfermedad_actual'=>$datos['evolucion_enfermedad_actual'],	
					'evolucion_t_medico'=>$datos['evolucion_t_medico'],	
					'evolucion_i_alimentos'=>$datos['evolucion_i_alimentos'],	
					'evolucion_r_alergicas'=>$datos['evolucion_r_alergicas'],	
					'evolucion_anestecia'=>$datos['evolucion_anestecia'],	
					'evolucion_antibiotico'=>$datos['evolucion_antibiotico'],	
					'evolucion_hemorragias'=>$datos['evolucion_hemorragias'],	
					'evolucion_irradiaciones'=>$datos['evolucion_irradiaciones'],	
					'evolucion_enf_respiratoria'=>$datos['evolucion_enf_respiratoria'],	
					'evolucion_cardiopatias'=>$datos['evolucion_cardiopatias'],	
					'evolucion_artritis'=>$datos['evolucion_artritis'],	
					'evolucion_terapia'=>$datos['evolucion_terapia'],	
					'evolucion_hepatitis'=>$datos['evolucion_hepatitis'],	
					'evolucion_embarazo'=>$datos['evolucion_embarazo'],	
					'evolucion_enf_renal'=>$datos['evolucion_enf_renal'],	
					'evolucion_gastro'=>$datos['evolucion_gastro'],	
					'evolucion_ante_quirurgicos'=>$datos['evolucion_ante_quirurgicos'],	
					'evolucion_osteo'=>$datos['evolucion_osteo'],	
					'evolucion_otros'=>$datos['evolucion_otros'],	
					'evolucion_observa'=>$datos['evolucion_observa'],	
					'evolucion_cepillado'=>$datos['evolucion_cepillado'],	
					'evolucion_cepillado_obs'=>$datos['evolucion_cepillado_obs'],	
					'evolucion_crema'=>$datos['evolucion_crema'],	
					'evolucion_crema_obs'=>$datos['evolucion_crema_obs'],	
					'evolucion_normalidad'=>$datos['evolucion_normalidad'],	
					'evolucion_normalidad_obs'=>$datos['evolucion_normalidad_obs'],	
					'evolucion_bebida_frecu'=>$datos['evolucion_bebida_frecu'],	
					'evolucion_bebida_ocasion'=>$datos['evolucion_bebida_ocasion'],	
					'evolucion_masas_no_azucar_frec'=>$datos['evolucion_masas_no_azucar_frec'],	
					'evolucion_masas_no_azucar_ocasion'=>$datos['evolucion_masas_no_azucar_ocasion'],	
					'evolucion_caramelo_frec'=>$datos['evolucion_caramelo_frec'],	
					'evolucion_caramelo_ocasion'=>$datos['evolucion_caramelo_ocasion'],	
					'evolucion_azucar_frec'=>$datos['evolucion_azucar_frec'],	
					'evolucion_azucar_ocasion'=>$datos['evolucion_azucar_ocasion'],	
					'evolucion_alcohol_frec'=>$datos['evolucion_alcohol_frec'],	
					'evolucion_alcohol_ocasion'=>$datos['evolucion_alcohol_ocasion'],	
					'evolucion_cigarro_frec'=>$datos['evolucion_cigarro_frec'],	
					'evolucion_cigarro_ocasion'=>$datos['evolucion_cigarro_ocasion'],
					'evolucion_f_reg'=>$datos['evolucion_f_reg'],
					'evolucion_h_reg'=>$datos['evolucion_h_reg'],
					'evolucion_h_inicio'=>$datos['evolucion_h_inicio'],
					'evolucion_created_user'=>$datos['evolucion_created_user'],
					'evolucion_update_user'=>$datos['evolucion_update_user']

				);

			$this->db->where('evolucion_doc',$id);
			$this->db->where('evolucion_h_inicio',$datos['evolucion_h_inicio']);
			$rs=$this->db->update('odonto',$campos);
			
			return '<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
				   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
				   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   			<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="text-center">Ingreso Odontologico Actualizado</h5>
					</div>
				 	<div class="modal-footer">
				       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
				   	</div>
				</div>
			</div>';
		}		

		function registrar_historiabarthel($datos){
			$pvalidar="SELECT COUNT(*) hc_barthel FROM hc_barthel WHERE barthel_doc='".$datos['barthel_doc']."' ";
			$pvalidar=$this->db->query($pvalidar);
			$pvalidar=$pvalidar->row();
			$pvalidar=$pvalidar->hc_barthel;
			if($pvalidar>0)
			{
				$existe="SELECT COUNT(hc_barthel.id_hc_barthel),hc_barthel.barthel_f_reg FROM hc_barthel INNER JOIN hc_norton ON hc_barthel.barthel_doc=hc_norton.norton_doc INNER JOIN hc_braden ON hc_barthel.barthel_doc=hc_braden.braden_doc INNER JOIN hc_valoracion ON hc_barthel.barthel_doc=hc_valoracion.valoracion_doc INNER JOIN paciente ON hc_barthel.barthel_doc=paciente.doc_paciente and paciente.doc_paciente='".$datos['barthel_doc']."' ";
				$resultado=$this->db->query($existe);
				$resultado=$resultado->row();
				$result2 = $resultado->barthel_f_reg;
      			$miarray = get_object_vars($resultado);
      			foreach ($miarray as $valor) {
			        // echo "".$valor[0];
			        $result=$valor[0];
			    }
				if($result>0)
				{
					// return 0;
					//validar fecha 6 meses
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
					return 0; //escala hecha
					// termina las otras escalas
				}
			}
			else
			{
				// return 2;
				//puede hacerla
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
			//SELECT pad_f_reg FROM `hc_pad` WHERE pad_documento=7676555 and hc_pad_cod="1"
			
			/*if($resultado->num_rows()==1)
			{
				$resultado=$resultado->row();
				$result=$resultado->barthel_doc;
			}
			else
			{
				$result="";
			}*/
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

		function consultar_historia_pad_odonto($id,$ff){
			$this->db->where("id_ev",$id);
			// $this->db->where("pad_documento",$id);
			// $this->db->where("pad_f_reg",$ff);
			$consulta=$this->db->get("odonto");
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

		function consultar_historia_barthel($id,$ff){
			$this->db->where("barthel_doc",$id);
			$this->db->where("barthel_f_reg",$ff);
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

		function consultar_hc_nombres_odonto($busqueda){
			$this->db->like("documento",$busqueda);
			$consulta=$this->db->get("hc");
			return $consulta->result();
			// return $busqueda;
		}
		function consultar_hc_todas_odonto(){
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

	}
?>