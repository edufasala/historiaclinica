<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Historia extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('historia_model');
			$cuales=$this->session->userdata('s_tipo');
	        if ($cuales=="5")
	        {
	            redirect('inicio_spadmin');
	        }
	        else if ($cuales=="4")
	        {
	            redirect('inicio_admin');
	        }
	        else if ($cuales=="3")
	        {
	            // redirect('inicio_medico');
	        }
	        else if ($cuales=="2")
	        {
	            redirect('inicio_enfermera');
	        }
	        else if ($cuales=="1")
	        {
	            redirect('inicio_empleado');
	        }
		}
		function index(){
			$this->load->view('plantilla/header');
			$this->load->view('plantilla/menu_m');
			$this->load->view('hclinica/vreghistoria');
			$this->load->view('plantilla/footer');
		}
		function registrar_pad(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");

			$datos['pad_tipo_tratamiento']=$this->input->post('motivopadhc');
			$cuales=$this->session->userdata('s_id');
			$datos['pad_documento']=$this->input->post('numhc');

			$datos['pad_mconsulta']=$this->input->post('mconsuta');
			$datos['pad_enf_actual']=$this->input->post('enfactual');
			$datos['pad_a_patologicos']=$this->input->post('apatologicos');
			$datos['pad_a_quirurgicos']=$this->input->post('aquirurgicos');
			$datos['pad_a_farmacologicos']=$this->input->post('afarmacologicos');
			$datos['pad_a_alergicos']=$this->input->post('aalergicos');
			$datos['pad_a_traumaticos']=$this->input->post('atraumaticos');
			$datos['pad_a_familiares']=$this->input->post('afamiliares');
			$datos['pad_a_transfusionales']=$this->input->post('atransfucionales');
			$datos['pad_a_ginecologicos']=$this->input->post('aginecologicos');
			$datos['pad_a_exposicionales']=$this->input->post('aexposicionales');
			$datos['pad_a_otros']=$this->input->post('aotros');
			
			$datos['pad_endocrinologico']=$this->input->post('endocrinologico');
			$datos['pad_organos']=$this->input->post('organos');
			$datos['pad_cardiopulmonar']=$this->input->post('cardiopulmonar');
			$datos['pad_gastrointestinal']=$this->input->post('gastrointestinal');
			$datos['pad_genitourinario']=$this->input->post('rvsgenitourinario');
			$datos['pad_osteomuscular']=$this->input->post('osteomuscular');
			$datos['pad_neurologico']=$this->input->post('neurologico');
			$datos['pad_pielyfarenas']=$this->input->post('farenas');
			$datos['pad_rxs_otros']=$this->input->post('rvsotros');
			$datos['pad_e_general']=$this->input->post('tipoegeneral');
			$datos['pad_e_conciencia']=$this->input->post('tipoeconciencia');
			$datos['pad_e_hidratacion']=$this->input->post('tipoehidratacion');
			$datos['pad_e_respiratorio']=$this->input->post('erespiratorio');
			$datos['pad_fr']=$this->input->post('fr');
			$datos['pad_fc']=$this->input->post('fc');
			$datos['pad_ta']=$this->input->post('ta');
			$datos['pad_te']=$this->input->post('temp');
			$datos['pad_sac']=$this->input->post('sac');
			$datos['pad_gluc']=$this->input->post('gluc');
			$datos['pad_cabeza']=$this->input->post('cabeza');
			$datos['pad_ojos']=$this->input->post('ojos');
			$datos['pad_boca']=$this->input->post('boca');
			$datos['pad_cuello']=$this->input->post('cuello');
			$datos['pad_torax']=$this->input->post('torax');
			$datos['pad_c_pulmonar']=$this->input->post('cpulmonar');
			$datos['pad_abdomen']=$this->input->post('abdomen');
			$datos['pad_e_genitourinario']=$this->input->post('genitourinario');
			$datos['pad_extremidades']=$this->input->post('extremidades');
			$datos['pad_snc']=$this->input->post('snc');
			$datos['pad_mental']=$this->input->post('mental');
			$datos['pad_piel']=$this->input->post('piel');
			$datos['pad_examen_otros']=$this->input->post('otros');

			$datos['pad_acceso_venoso']=$this->input->post('auxvenoso');
			$datos['pad_estado_cateter']=$this->input->post('accateter');
			$datos['pad_f_insercion']=$this->input->post('acfinsercion');
			$datos['pad_ostomia']=$this->input->post('auxostomia');
			$datos['pad_estado_ostomia']=$this->input->post('oeostomina');
			$datos['pad_cual_ostomia']=$this->input->post('ocualostomina');
			$datos['pad_f_ostomia']=$this->input->post('ofostomina');
			$datos['pad_sondas']=$this->input->post('auxsonda');
			$datos['pad_estado_sonda']=$this->input->post('sondaestado');
			$datos['pad_cual_sonda']=$this->input->post('cualsonda');
			$datos['pad_f_postura_sonda']=$this->input->post('sfpostura');
			$datos['pad_dolor_region']=$this->input->post('edregion');
			$datos['pad_dolor_irradiacion']=$this->input->post('edirradiacion');
			$datos['pad_dolor_nivel']=$this->input->post('dolorn');
			$datos['pad_partes']='na';//$this->input->post('');//sin definir
			$datos['pad_tipo_dolor']=$this->input->post('auxdolor');
			$datos['pad_tratamiento_previo']=$this->input->post('auxtp');
			$datos['pad_cual_dolor']=$this->input->post('cualtprevio');
			$datos['pad_alivio']=$this->input->post('tpalivio');
			$datos['pad_r_paraclinico']=".";//$this->input->post('uparaclinico');
			$datos['pad_plan_manejo_medico_actual']=".";//$this->input->post('planmedicoactual');
			$datos['pad_analisis']=$this->input->post('analisis');
			
			$datos['pad_plan_manejo_programa']=$this->input->post('progrmaingreso');
			$datos['pad_plan_manejo_oxigeno']=$this->input->post('auxnoxigeno');
			$datos['pad_plan_manejo_oxigenodetalle']=$this->input->post('eldtnoxigeno');
			$datos['pad_plan_manejo_dieta']=$this->input->post('pmdieta');

			$datos['pad_ac_medico']=$this->input->post('auxaycmedico');
			$datos['pad_ac_medico_detalle']=$this->input->post('eldtsnmedico');
			$datos['pad_ac_enfermera']=$this->input->post('auxaycenfermera');
			$datos['pad_ac_enfermera_detalle']=$this->input->post('eldtenfermera');
			$datos['pad_ac_trabajo_social']=$this->input->post('auxayctsocial');
			$datos['pad_ac_trabajo_social_detalle']=$this->input->post('eldttrabajosocial');
			$datos['pad_ac_nutricion']=$this->input->post('auxaycnutricion');
			$datos['pad_ac_nutricion_detalle']=$this->input->post('eldtnutricion');
			$datos['pad_ac_fisioterapia']=$this->input->post('auxaycfisioterapia');
			$datos['pad_ac_fisioterapia_detalle']=$this->input->post('eldtfisioterapia');
			$datos['pad_t_respiratoria']=$this->input->post('auxayctrespiratoria');
			$datos['pad_t_respiratoria_detalle']=$this->input->post('eldttrespiratoria');
			$datos['pad_t_ocupacional']=$this->input->post('auxayctocupacional');
			$datos['pad_t_ocupacional_detalle']=$this->input->post('eldttocupacional');
			$datos['pad_t_lenguaje']=$this->input->post('auxayctlenguaje');
			$datos['pad_t_lenguaje_detalle']=$this->input->post('eldttlenguaje');
			$datos['pad_aux_enfermeria']=$this->input->post('auxauxenfermeria');
			$datos['pad_aux_otro']=$this->input->post('otroenfermeria');
			$datos['pad_educacion']=$this->input->post('auxayceducacion');
			$datos['pad_educacion_detalle']=$this->input->post('eldteducacion');
			$datos['pad_paraclinicos']=$this->input->post('auxaycparaclinicos');
			$datos['pad_paraclinicos_detalle']=$this->input->post('eldtparaclinicos');
			$datos['pad_pm_valoraciones']=$this->input->post('pmvaloraciones');
			$datos['pad_pm_recomendaciones']=$this->input->post('pmrecomendacionessignos');
			$datos['pad_esas_dolor']=$this->input->post('esasdolor');
			$datos['pad_esas_cansancio']=$this->input->post('esascansancio');
			$datos['pad_esas_nauseas']=$this->input->post('esasnauseas');
			$datos['pad_esas_tristeza']=$this->input->post('esastristesa');
			$datos['pad_esas_angustia']=$this->input->post('esasangustia');
			$datos['pad_esas_somnolencia']=$this->input->post('esassomnolencia');
			$datos['pad_esas_apetito']=$this->input->post('esasapetito');
			$datos['pad_esas_disnea']=$this->input->post('esasdisnea');
			$datos['pad_esas_insomnio']=$this->input->post('esasinsomnio');
			$datos['pad_esas_estrenimiento']=$this->input->post('esasestrenimiento');
			$datos['pad_esas_bienestar']=$this->input->post('esasbienestar');
			$datos['pad_ecaf_gestos']=$this->input->post('ecafdisconfort');
			$datos['pad_ecaf_quebido']=$this->input->post('ecafquebido');
			$datos['pad_ecaf_grito']=$this->input->post('ecafgrito');
			$datos['pad_ecaf_tocando']=$this->input->post('ecafarea');
			$datos['pad_ecaf_movimiento']=$this->input->post('ecafmovimiento');
			$datos['pad_ecaf_respiracion']=$this->input->post('ecafrespiracion');
			$datos['pad_ecaf_total']=$this->input->post('ecaftotal');
			$datos['pad_ik']=$this->input->post('ik');
			$datos['pad_ecog']=$this->input->post('ecog');
			$datos['pad_pps']=$this->input->post('pps');
			$datos['pad_mdas']=$this->input->post('mdas');
			$datos['pad_cam']=$this->input->post('cam');
			$datos['pad_ramsay']=$this->input->post('ramsay');
			$datos['pad_ecaf_observaciones']=$this->input->post('observaciones');
			$datos['pad_f_reg']=$getfecha;
			$datos['pad_h_reg']=$gethora;
			$datos['pad_created_user']=$cuales;
			$datos['pad_update_user']=$cuales;
			$datos['pad_h_inicio']=$this->input->post('fechai');
			$datos['pad_t_sistole']=$this->input->post('sis');
			$datos['pad_t_diastole']=$this->input->post('dias');

			$rangodolor=$this->input->post('dolorn');
			$quees="";
			if($rangodolor=="0")
			{
				$quees="sin dolor";
			}
			else if($rangodolor>="1" && $rangodolor<="3")
			{
				$quees="dolor leve";
			}
			else if($rangodolor>="4" && $rangodolor<="6")
			{
				$quees="dolor moderado";
			}
			else if($rangodolor>="7" && $rangodolor<="10")
			{
				$quees="dolo cronico";
			}
			$datos['pad_dolor_cual']=$quees;//validar con el dolor nivel

			//medicamentos
			$medicamentos=$this->input->post('contadorM');
			$idelementos=1;
			$nombre_med="Ninguno";
			$lista="";
			$listadg="";
			if(isset($_REQUEST['contadorM']))
			{
				$con=$_REQUEST['contadorM'];
				
				if($con>0)
				{
					$i=0;
					while ($idelementos<=$con) 
					{
						if(isset($_REQUEST['nombre'.$idelementos]) && isset($_REQUEST['dosis'.$idelementos]) && isset($_REQUEST['via'.$idelementos]) && isset($_REQUEST['frecuencia'.$idelementos]) && isset($_REQUEST['dilusion'.$idelementos]) && isset($_REQUEST['solucion'.$idelementos]) && isset($_REQUEST['tiempo'.$idelementos]))
						{
							$nombre_medicamento=utf8_decode(utf8_encode($_REQUEST['nombre'.$idelementos]));
							$dosis_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['dosis'.$idelementos])));
							$via_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['via'.$idelementos])));
							$frecuencia_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['frecuencia'.$idelementos])));
							$dilusion_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['dilusion'.$idelementos])));
							$solucion_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['solucion'.$idelementos])));
							$tiempo_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['tiempo'.$idelementos])));
							$lista=$lista.$nombre_medicamento.'|'.$dosis_medicamento.'|'.$via_medicamento.'|'.$frecuencia_medicamento.'|'.$dilusion_medicamento.'|'.$solucion_medicamento.'|'.$tiempo_medicamento.';';
				  			// $listadg=$listadg.$nombre_dig."\r\n";
							$nombre_med="";
						}
						else
						{
							$nombre_med="Ninguno";
						}
						$i++;
						$idelementos++;
					}
				}
				else if($con=="")
				{
					//echo '<br>'."No hay dom de diagnostico ".$nombre_dig2;
				} 
			}
			if($nombre_med=="Ninguno")
			{
				$datos['pad_medicamentos']=$nombre_med;
			}
			else
			{
				$datos['pad_medicamentos']=$lista;
			}
			
			$diagnostico=$this->input->post('contadorD');
			$idelementos2=1;
			$nombre_dig="Ninguno";
			$listd="";
			$listadg="";
			if(isset($_REQUEST['contadorD']))
			{
				$con2=$_REQUEST['contadorD'];
				
				if($con2>0)
				{
					$j=0;
					while ($idelementos2<=$con2) 
					{
						if(isset($_REQUEST['diagn'.$idelementos2]))
						{
							$nombre_dig=utf8_decode(utf8_encode($_REQUEST['diagn'.$idelementos2]));
							$listd=$listd.$nombre_dig.';';
				  			// $listadg=$listadg.$nombre_dig."\r\n";
							$nombre_dig="";
						}
						else
						{
							$nombre_dig="Ninguno";
						}
						$j++;
						$idelementos2++;
					}
				}
				else if($con2=="")
				{
					//echo '<br>'."No hay dom de diagnostico ".$nombre_dig;
				} 
			}
			if($nombre_dig=="Ninguno")
			{
				$datos['pad_diagnosticos']=$nombre_dig;
			}
			else
			{
				$datos['pad_diagnosticos']=$listd;
			}

			$rs=$this->historia_model->registrar_historiapad($datos);
			echo $rs;
		}
		function actualizar_pad(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$cuales=$this->session->userdata('s_id');
			$datos['id_creado']=$this->input->post('numhc');
			$datos['pad_tipo_tratamiento']=$this->input->post('motivopadhc');

			$datos['pad_mconsulta']=$this->input->post('mconsuta');
			$datos['pad_enf_actual']=$this->input->post('enfactual');
			$datos['pad_a_patologicos']=$this->input->post('apatologicos');
			$datos['pad_a_quirurgicos']=$this->input->post('aquirurgicos');
			$datos['pad_a_farmacologicos']=$this->input->post('afarmacologicos');
			$datos['pad_a_alergicos']=$this->input->post('aalergicos');
			$datos['pad_a_traumaticos']=$this->input->post('atraumaticos');
			$datos['pad_a_familiares']=$this->input->post('afamiliares');
			$datos['pad_a_transfusionales']=$this->input->post('atransfucionales');
			$datos['pad_a_ginecologicos']=$this->input->post('aginecologicos');
			$datos['pad_a_exposicionales']=$this->input->post('aexposicionales');
			$datos['pad_a_otros']=$this->input->post('aotros');
			
			$datos['pad_endocrinologico']=$this->input->post('endocrinologico');
			$datos['pad_organos']=$this->input->post('organos');
			$datos['pad_cardiopulmonar']=$this->input->post('cardiopulmonar');
			$datos['pad_gastrointestinal']=$this->input->post('gastrointestinal');
			$datos['pad_genitourinario']=$this->input->post('rvsgenitourinario');
			$datos['pad_osteomuscular']=$this->input->post('osteomuscular');
			$datos['pad_neurologico']=$this->input->post('neurologico');
			$datos['pad_pielyfarenas']=$this->input->post('farenas');
			$datos['pad_rxs_otros']=$this->input->post('rvsotros');
			$datos['pad_e_general']=$this->input->post('tipoegeneral');
			$datos['pad_e_conciencia']=$this->input->post('tipoeconciencia');
			$datos['pad_e_hidratacion']=$this->input->post('tipoehidratacion');
			$datos['pad_e_respiratorio']=$this->input->post('erespiratorio');
			$datos['pad_fr']=$this->input->post('fr');
			$datos['pad_fc']=$this->input->post('fc');
			$datos['pad_ta']=$this->input->post('ta');
			$datos['pad_te']=$this->input->post('temp');
			$datos['pad_sac']=$this->input->post('sac');
			$datos['pad_gluc']=$this->input->post('gluc');
			$datos['pad_cabeza']=$this->input->post('cabeza');
			$datos['pad_ojos']=$this->input->post('ojos');
			$datos['pad_boca']=$this->input->post('boca');
			$datos['pad_cuello']=$this->input->post('cuello');
			$datos['pad_torax']=$this->input->post('torax');
			$datos['pad_c_pulmonar']=$this->input->post('cpulmonar');
			$datos['pad_abdomen']=$this->input->post('abdomen');
			$datos['pad_e_genitourinario']=$this->input->post('genitourinario');
			$datos['pad_extremidades']=$this->input->post('extremidades');
			$datos['pad_snc']=$this->input->post('snc');
			$datos['pad_mental']=$this->input->post('mental');
			$datos['pad_piel']=$this->input->post('piel');
			$datos['pad_examen_otros']=$this->input->post('otros');

			$datos['pad_acceso_venoso']=$this->input->post('auxvenoso');
			$datos['pad_estado_cateter']=$this->input->post('accateter');
			$datos['pad_f_insercion']=$this->input->post('acfinsercion');
			$datos['pad_ostomia']=$this->input->post('auxostomia');
			$datos['pad_estado_ostomia']=$this->input->post('oeostomina');
			$datos['pad_cual_ostomia']=$this->input->post('ocualostomina');
			$datos['pad_f_ostomia']=$this->input->post('ofostomina');
			$datos['pad_sondas']=$this->input->post('auxsonda');
			$datos['pad_estado_sonda']=$this->input->post('sondaestado');
			$datos['pad_cual_sonda']=$this->input->post('cualsonda');
			$datos['pad_f_postura_sonda']=$this->input->post('sfpostura');
			$datos['pad_dolor_region']=$this->input->post('edregion');
			$datos['pad_dolor_irradiacion']=$this->input->post('edirradiacion');
			$datos['pad_dolor_nivel']=$this->input->post('dolorn');
			$datos['pad_partes']='na';//$this->input->post('');//sin definir
			$datos['pad_tipo_dolor']=$this->input->post('auxdolor');
			$datos['pad_tratamiento_previo']=$this->input->post('auxtp');
			$datos['pad_cual_dolor']=$this->input->post('cualtprevio');
			$datos['pad_alivio']=$this->input->post('tpalivio');
			$datos['pad_r_paraclinico']=".";//$this->input->post('uparaclinico');
			$datos['pad_plan_manejo_medico_actual']=".";//$this->input->post('planmedicoactual');
			$datos['pad_analisis']=$this->input->post('analisis');
			
			$datos['pad_plan_manejo_programa']=$this->input->post('progrmaingreso');
			$datos['pad_plan_manejo_oxigeno']=$this->input->post('auxnoxigeno');
			$datos['pad_plan_manejo_oxigenodetalle']=$this->input->post('eldtnoxigeno');
			$datos['pad_plan_manejo_dieta']=$this->input->post('pmdieta');

			$datos['pad_ac_medico']=$this->input->post('auxaycmedico');
			$datos['pad_ac_medico_detalle']=$this->input->post('eldtsnmedico');
			$datos['pad_ac_enfermera']=$this->input->post('auxaycenfermera');
			$datos['pad_ac_enfermera_detalle']=$this->input->post('eldtenfermera');
			$datos['pad_ac_trabajo_social']=$this->input->post('auxayctsocial');
			$datos['pad_ac_trabajo_social_detalle']=$this->input->post('eldttrabajosocial');
			$datos['pad_ac_nutricion']=$this->input->post('auxaycnutricion');
			$datos['pad_ac_nutricion_detalle']=$this->input->post('eldtnutricion');
			$datos['pad_ac_fisioterapia']=$this->input->post('auxaycfisioterapia');
			$datos['pad_ac_fisioterapia_detalle']=$this->input->post('eldtfisioterapia');
			$datos['pad_t_respiratoria']=$this->input->post('auxayctrespiratoria');
			$datos['pad_t_respiratoria_detalle']=$this->input->post('eldttrespiratoria');
			$datos['pad_t_ocupacional']=$this->input->post('auxayctocupacional');
			$datos['pad_t_ocupacional_detalle']=$this->input->post('eldttocupacional');
			$datos['pad_t_lenguaje']=$this->input->post('auxayctlenguaje');
			$datos['pad_t_lenguaje_detalle']=$this->input->post('eldttlenguaje');
			$datos['pad_aux_enfermeria']=$this->input->post('auxauxenfermeria');
			$datos['pad_aux_otro']=$this->input->post('otroenfermeria');
			$datos['pad_educacion']=$this->input->post('auxayceducacion');
			$datos['pad_educacion_detalle']=$this->input->post('eldteducacion');
			$datos['pad_paraclinicos']=$this->input->post('auxaycparaclinicos');
			$datos['pad_paraclinicos_detalle']=$this->input->post('eldtparaclinicos');
			$datos['pad_pm_valoraciones']=$this->input->post('pmvaloraciones');
			$datos['pad_pm_recomendaciones']=$this->input->post('pmrecomendacionessignos');
			$datos['pad_esas_dolor']=$this->input->post('esasdolor');
			$datos['pad_esas_cansancio']=$this->input->post('esascansancio');
			$datos['pad_esas_nauseas']=$this->input->post('esasnauseas');
			$datos['pad_esas_tristeza']=$this->input->post('esastristesa');
			$datos['pad_esas_angustia']=$this->input->post('esasangustia');
			$datos['pad_esas_somnolencia']=$this->input->post('esassomnolencia');
			$datos['pad_esas_apetito']=$this->input->post('esasapetito');
			$datos['pad_esas_disnea']=$this->input->post('esasdisnea');
			$datos['pad_esas_insomnio']=$this->input->post('esasinsomnio');
			$datos['pad_esas_estrenimiento']=$this->input->post('esasestrenimiento');
			$datos['pad_esas_bienestar']=$this->input->post('esasbienestar');
			$datos['pad_ecaf_gestos']=$this->input->post('ecafdisconfort');
			$datos['pad_ecaf_quebido']=$this->input->post('ecafquebido');
			$datos['pad_ecaf_grito']=$this->input->post('ecafgrito');
			$datos['pad_ecaf_tocando']=$this->input->post('ecafarea');
			$datos['pad_ecaf_movimiento']=$this->input->post('ecafmovimiento');
			$datos['pad_ecaf_respiracion']=$this->input->post('ecafrespiracion');
			$datos['pad_ecaf_total']=$this->input->post('ecaftotal');
			$datos['pad_ik']=$this->input->post('ik');
			$datos['pad_ecog']=$this->input->post('ecog');
			$datos['pad_pps']=$this->input->post('pps');
			$datos['pad_mdas']=$this->input->post('mdas');
			$datos['pad_cam']=$this->input->post('cam');
			$datos['pad_ramsay']=$this->input->post('ramsay');
			$datos['pad_ecaf_observaciones']=$this->input->post('observaciones');
			$datos['pad_h_reg']=$gethora;
			$datos['pad_f_reg']=$getfecha;
			$datos['pad_h_inicio']=$this->input->post('fechai');
			$datos['pad_t_sistole']=$this->input->post('sis');
			$datos['pad_t_diastole']=$this->input->post('dias');
			// $datos['pad_quien_creo']=$this->input->post('nmedpad');
			
			// $datos['id_creado']=$this->input->post('numhc');

			$rangodolor=$this->input->post('dolorn');
			$quees="";
			if($rangodolor=="0")
			{
				$quees="sin dolor";
			}
			else if($rangodolor>="1" && $rangodolor<="3")
			{
				$quees="dolor leve";
			}
			else if($rangodolor>="4" && $rangodolor<="6")
			{
				$quees="dolor moderado";
			}
			else if($rangodolor>="7" && $rangodolor<="10")
			{
				$quees="dolo cronicor";
			}
			$datos['pad_dolor_cual']=$quees;//validar con el dolor nivel

			//medicamentos
			$medicamentos=$this->input->post('contadorM');
			$idelementos=1;
			$nombre_med="Ninguno";
			$lista="";
			$listadg="";
			if(isset($_REQUEST['contadorM']))
			{
				$con=$_REQUEST['contadorM'];
				
				if($con>0)
				{
					$i=0;
					while ($idelementos<=$con) 
					{
						if(isset($_REQUEST['nombre'.$idelementos]) && isset($_REQUEST['dosis'.$idelementos]) && isset($_REQUEST['via'.$idelementos]) && isset($_REQUEST['frecuencia'.$idelementos]) && isset($_REQUEST['dilusion'.$idelementos]) && isset($_REQUEST['solucion'.$idelementos]) && isset($_REQUEST['tiempo'.$idelementos]))
						{
							$nombre_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['nombre'.$idelementos])));
							$dosis_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['dosis'.$idelementos])));
							$via_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['via'.$idelementos])));
							$frecuencia_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['frecuencia'.$idelementos])));
							$dilusion_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['dilusion'.$idelementos])));
							$solucion_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['solucion'.$idelementos])));
							$tiempo_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['tiempo'.$idelementos])));
							$lista=$lista.$nombre_medicamento.'|'.$dosis_medicamento.'|'.$via_medicamento.'|'.$frecuencia_medicamento.'|'.$dilusion_medicamento.'|'.$solucion_medicamento.'|'.$tiempo_medicamento.';';
				  			// $listadg=$listadg.$nombre_dig."\r\n";
							$nombre_med="";
						}
						else
						{
							$nombre_med="Ninguno";
						}
						$i++;
						$idelementos++;
					}
				}
				else if($con=="")
				{
					//echo '<br>'."No hay dom de diagnostico ".$nombre_dig2;
				} 
			}
			if($nombre_med=="Ninguno")
			{
				$datos['pad_medicamentos']=$nombre_med;
			}
			else
			{
				$datos['pad_medicamentos']=$lista;
			}
			
			$diagnostico=$this->input->post('contadorD');
			$idelementos2=1;
			$nombre_dig="Ninguno";
			$listd="";
			$listadg="";
			if(isset($_REQUEST['contadorD']))
			{
				$con2=$_REQUEST['contadorD'];
				
				if($con2>0)
				{
					$j=0;
					while ($idelementos2<=$con2) 
					{
						if(isset($_REQUEST['diagn'.$idelementos2]))
						{
							$nombre_dig=utf8_decode(utf8_encode($_REQUEST['diagn'.$idelementos2]));
							$listd=$listd.$nombre_dig.';';
				  			// $listadg=$listadg.$nombre_dig."\r\n";
							$nombre_dig="";
						}
						else
						{
							$nombre_dig="Ninguno";
						}
						$j++;
						$idelementos2++;
					}
				}
				else if($con2=="")
				{
					//echo '<br>'."No hay dom de diagnostico ".$nombre_dig;
				} 
			}
			if($nombre_dig=="Ninguno")
			{
				$datos['pad_diagnosticos']=$nombre_dig;
			}
			else
			{
				$datos['pad_diagnosticos']=$listd;
			}

			$rs=$this->historia_model->actualizar_historiapad($datos);
			echo $rs;
		}
		function registrar_concentimiento(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$cuales=$this->session->userdata('s_id');
			$datos['concentimiento_doc']=$this->input->post('numhc2');
			$datos['concentimiento_nombre_cuidador']=$this->input->post('nombre_cuidador');
			$datos['concentimiento_tipo_doc_cuidador']=$this->input->post('tdoccuidador');
			$datos['concentimiento_doc_cuidador']=$this->input->post('doccuidaor');
			$datos['concentimiento_responsable_paciente']=$this->input->post('otroresponsable');
			$datos['concentimiento_paciente_pad']=$this->input->post('tipopaciente');
			$dig=$this->input->post('mdiagnosticos');
			$armar=explode("\r\n", $dig); //"\r\n"  "/\\r\\n|\\r|\\n/"  $skuList = preg_split('/\r\n|\r|\n/', $_POST['skuList']);
			$ndig="";
			for ($i=0; $i < count($armar)-1; $i++)
			{ 
				$ndig=$ndig.$armar[$i];
			}
			$datos['concentimiento_diagnosticos']=$ndig;
			$datos['concentimiento_probabilidad_exito']=$this->input->post('probabilidad');
			$datos['concentimiento_pronostico']=$this->input->post('pronostico');
			$datos['concentimiento_fecha']=$this->input->post('fconsentimiento');
			$datos['concentimiento_nombre_paciente']=$this->input->post('ndocpaciente');
			$datos['concentimiento_nombre_responsable']=$this->input->post('ndoresponsable');
			$datos['concentimiento_da_concentimiento']=$this->input->post('cualrelacion');
			$datos['concentimiento_no_firma_por']=$this->input->post('nofirma');
			$datos['concentimiento_mareriales']=$this->input->post('materiales');
			$datos['concentimiento_disentimiento']=$this->input->post('disentimiento');
			$datos['concentimiento_f_reg']=$getfecha;
			$datos['concentimiento_h_reg']=$gethora;
			$datos['concentimiento_created_user']=$cuales;
			$datos['concentimiento_update_user']=$cuales;
			$datos['concentimiento_h_inicio']=$this->input->post('fechai2');

			$rs=$this->historia_model->registrar_historiaconcentimiento($datos);
			echo $rs;
		}
		function actualizar_concentimiento(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$cuales=$this->session->userdata('s_id');
			$datos['concentimiento_doc']=$this->input->post('numhc2');
			$datos['concentimiento_nombre_cuidador']=$this->input->post('nombre_cuidador');
			$datos['concentimiento_tipo_doc_cuidador']=$this->input->post('tdoccuidador');
			$datos['concentimiento_doc_cuidador']=$this->input->post('doccuidaor');
			$datos['concentimiento_responsable_paciente']=$this->input->post('otroresponsable');
			$datos['concentimiento_paciente_pad']=$this->input->post('tipopaciente');
			$dig=$this->input->post('mdiagnosticos');
			$armar=explode("\r\n", $dig);
			$ndig="";
			for ($i=0; $i < count($armar)-1; $i++)
			{ 
				$ndig=$ndig.$armar[$i];
			}
			$datos['concentimiento_diagnosticos']=$ndig;
			$datos['concentimiento_probabilidad_exito']=$this->input->post('probabilidad');
			$datos['concentimiento_pronostico']=$this->input->post('pronostico');
			$datos['concentimiento_fecha']=$this->input->post('fconsentimiento');
			$datos['concentimiento_nombre_paciente']=$this->input->post('ndocpaciente');
			$datos['concentimiento_nombre_responsable']=$this->input->post('ndoresponsable');
			$datos['concentimiento_da_concentimiento']=$this->input->post('cualrelacion');
			$datos['concentimiento_no_firma_por']=$this->input->post('nofirma');
			$datos['concentimiento_mareriales']=$this->input->post('materiales');
			$datos['concentimiento_disentimiento']=$this->input->post('disentimiento');
			$datos['concentimiento_f_reg']=$getfecha;
			$datos['concentimiento_h_reg']=$gethora;
			$datos['concentimiento_created_user']=$cuales;
			$datos['concentimiento_update_user']=$cuales;

			$rs=$this->historia_model->actualizar_historiaconcentimiento($datos);
			echo $rs;
		}
		function registrar_barthel(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$cuales=$this->session->userdata('s_id');
			$datos['barthel_doc']=$this->input->post('numhc3');
			$datos['barthel_comer']=$this->input->post('auxbtcomer');
			$datos['barthel_banarse']=$this->input->post('auxbtbanarse');
			$datos['barthel_vestirse']=$this->input->post('auxbtvestirse');
			$datos['barthel_arreglarse']=$this->input->post('auxbtarreglarse');
			$datos['barthel_deposicion']=$this->input->post('auxbtdeposicion');
			$datos['barthel_miccion']=$this->input->post('auxbtmiccion');
			$datos['barthel_retrete']=$this->input->post('auxbtretrete');
			$datos['barthel_traslado']=$this->input->post('auxbttraslado');
			$datos['barthel_deambulacion']=$this->input->post('auxbtdeambulacion');
			$datos['barthel_escaleras']=$this->input->post('auxbtescaleras');
			$datos['barthel_total']=$this->input->post('bttotal');
			$datos['barthel_nivel']=$this->input->post('btnivel');
			$datos['barthel_f_reg']=$getfecha;
			$datos['barthel_h_reg']=$gethora;
			$datos['barthel_created_user']=$cuales;
			$datos['barthel_update_user']=$cuales;
			$datos['barthel_h_inicio']=$this->input->post('fechai3');

			$rs=$this->historia_model->registrar_historiabarthel($datos);
			echo $rs;
		}
		function actualizar_barthel(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
 			$cuales=$this->session->userdata('s_id');
			$datos['barthel_doc']=$this->input->post('numhc3');
			$datos['barthel_comer']=$this->input->post('auxbtcomer');
			$datos['barthel_banarse']=$this->input->post('auxbtbanarse');
			$datos['barthel_vestirse']=$this->input->post('auxbtvestirse');
			$datos['barthel_arreglarse']=$this->input->post('auxbtarreglarse');
			$datos['barthel_deposicion']=$this->input->post('auxbtdeposicion');
			$datos['barthel_miccion']=$this->input->post('auxbtmiccion');
			$datos['barthel_retrete']=$this->input->post('auxbtretrete');
			$datos['barthel_traslado']=$this->input->post('auxbttraslado');
			$datos['barthel_deambulacion']=$this->input->post('auxbtdeambulacion');
			$datos['barthel_escaleras']=$this->input->post('auxbtescaleras');
			$datos['barthel_total']=$this->input->post('bttotal');
			$datos['barthel_nivel']=$this->input->post('btnivel');
			$datos['barthel_f_reg']=$getfecha;
			$datos['barthel_h_reg']=$gethora;
			$datos['barthel_created_user']=$cuales;
			$datos['barthel_update_user']=$cuales;

			$rs=$this->historia_model->actualizar_historiabarthel($datos);
			echo $rs;
		}
		function registrar_valoracion(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$cuales=$this->session->userdata('s_id');
			$datos['valoracion_doc']=$this->input->post('numhc4');
			$dig=$this->input->post('motrar_diagnosticos3');
			$armar=explode("\r\n", $dig);
			$ndig="";
			for ($i=0; $i < count($armar)-1; $i++)
			{ 
				$ndig=$ndig.$armar[$i];
			}
			$datos['valoracion_diagnosticos']=$ndig;
			$datos['valoracion_ocular']=$this->input->post('auxcnocular');
			$datos['valoracion_verbal']=$this->input->post('auxcnverbal');
			$datos['valoracion_motora']=$this->input->post('auxcnmotora');
			$datos['valoracion_avm_total']=$this->input->post('cntotal');
			$datos['valoracion_tipo_condicion']=$this->input->post('auxcngeneral');
			$datos['valoracion_otro_condicion']=$this->input->post('cnotrogeneral');
			$datos['valoracion_test_numero']=$this->input->post('testnvaloracion');
			$datos['valoracion_test_control_1']=$this->input->post('testp1');
			$datos['valoracion_test_respuesta_1']=$this->input->post('testr1');
			$datos['valoracion_test_resultado_1']=$this->input->post('auxtpr1');
			$datos['valoracion_test_control_2']=$this->input->post('testp2');
			$datos['valoracion_test_respuesta_2']=$this->input->post('testr2');
			$datos['valoracion_test_resultado_2']=$this->input->post('auxtpr2');
			$datos['valoracion_test_control_3']=$this->input->post('testp3');
			$datos['valoracion_test_respuesta_3']=$this->input->post('testr3');
			$datos['valoracion_test_resultado_3']=$this->input->post('auxtpr3');
			$datos['valoracion_test_control_4']=$this->input->post('testp4');
			$datos['valoracion_test_respuesta_4']=$this->input->post('testr4');
			$datos['valoracion_test_resultado_4']=$this->input->post('auxtpr4');
			$datos['valoracion_test_control_5']=$this->input->post('testp5');
			$datos['valoracion_test_respuesta_5']=$this->input->post('testr5');
			$datos['valoracion_test_resultado_5']=$this->input->post('auxtpr5');
			$datos['valoracion_test_control_6']=$this->input->post('testp6');
			$datos['valoracion_test_respuesta_6']=$this->input->post('testr6');
			$datos['valoracion_test_resultado_6']=$this->input->post('auxtpr6');
			$datos['valoracion_test_control_7']=$this->input->post('testp7');
			$datos['valoracion_test_respuesta_7']=$this->input->post('testr7');
			$datos['valoracion_test_resultado_7']=$this->input->post('auxtpr7');
			$datos['valoracion_test_control_8']=$this->input->post('testp8');
			$datos['valoracion_test_respuesta_8']=$this->input->post('testr8');
			$datos['valoracion_test_resultado_8']=$this->input->post('auxtpr8');
			$datos['valoracion_test_control_9']=$this->input->post('testp9');
			$datos['valoracion_test_respuesta_9']=$this->input->post('testr9');
			$datos['valoracion_test_resultado_9']=$this->input->post('auxtpr9');
			$datos['valoracion_test_control_10']=$this->input->post('testp10');
			$datos['valoracion_test_respuesta_10']=$this->input->post('testr10');
			$datos['valoracion_test_resultado_10']=$this->input->post('auxtpr10');
			$datos['valoracion_test_total']=$this->input->post('testtotal');
			$datos['valoracion_test_riesgo']=$this->input->post('testnivel');
			$datos['valoracion_test_pregunta_general']=$this->input->post('respodedetalle');
			$datos['valoracion_f_reg']=$getfecha;
			$datos['valoracion_h_reg']=$gethora;
			$datos['valoracion_created_user']=$cuales;
			$datos['valoracion_update_user']=$cuales;
			$datos['valoracion_h_inicio']=$this->input->post('fechai4');

			$rs=$this->historia_model->registrar_historiavarloracion($datos);
			echo $rs;
		}
		function actualizar_valoracion(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
 			$cuales=$this->session->userdata('s_id');
			$datos['valoracion_doc']=$this->input->post('numhc4');
			$dig=$this->input->post('motrar_diagnosticos3');
			$armar=explode("\r\n", $dig);
			$ndig="";
			for ($i=0; $i < count($armar)-1; $i++)
			{ 
				$ndig=$ndig.$armar[$i];
			}
			$datos['valoracion_diagnosticos']=$ndig;
			$datos['valoracion_ocular']=$this->input->post('auxcnocular');
			$datos['valoracion_verbal']=$this->input->post('auxcnverbal');
			$datos['valoracion_motora']=$this->input->post('auxcnmotora');
			$datos['valoracion_avm_total']=$this->input->post('cntotal');
			$datos['valoracion_tipo_condicion']=$this->input->post('auxcngeneral');
			$datos['valoracion_otro_condicion']=$this->input->post('cnotrogeneral');
			$datos['valoracion_test_numero']=$this->input->post('testnvaloracion');
			$datos['valoracion_test_control_1']=$this->input->post('testp1');
			$datos['valoracion_test_respuesta_1']=$this->input->post('testr1');
			$datos['valoracion_test_resultado_1']=$this->input->post('auxtpr1');
			$datos['valoracion_test_control_2']=$this->input->post('testp2');
			$datos['valoracion_test_respuesta_2']=$this->input->post('testr2');
			$datos['valoracion_test_resultado_2']=$this->input->post('auxtpr2');
			$datos['valoracion_test_control_3']=$this->input->post('testp3');
			$datos['valoracion_test_respuesta_3']=$this->input->post('testr3');
			$datos['valoracion_test_resultado_3']=$this->input->post('auxtpr3');
			$datos['valoracion_test_control_4']=$this->input->post('testp4');
			$datos['valoracion_test_respuesta_4']=$this->input->post('testr4');
			$datos['valoracion_test_resultado_4']=$this->input->post('auxtpr4');
			$datos['valoracion_test_control_5']=$this->input->post('testp5');
			$datos['valoracion_test_respuesta_5']=$this->input->post('testr5');
			$datos['valoracion_test_resultado_5']=$this->input->post('auxtpr5');
			$datos['valoracion_test_control_6']=$this->input->post('testp6');
			$datos['valoracion_test_respuesta_6']=$this->input->post('testr6');
			$datos['valoracion_test_resultado_6']=$this->input->post('auxtpr6');
			$datos['valoracion_test_control_7']=$this->input->post('testp7');
			$datos['valoracion_test_respuesta_7']=$this->input->post('testr7');
			$datos['valoracion_test_resultado_7']=$this->input->post('auxtpr7');
			$datos['valoracion_test_control_8']=$this->input->post('testp8');
			$datos['valoracion_test_respuesta_8']=$this->input->post('testr8');
			$datos['valoracion_test_resultado_8']=$this->input->post('auxtpr8');
			$datos['valoracion_test_control_9']=$this->input->post('testp9');
			$datos['valoracion_test_respuesta_9']=$this->input->post('testr9');
			$datos['valoracion_test_resultado_9']=$this->input->post('auxtpr9');
			$datos['valoracion_test_control_10']=$this->input->post('testp10');
			$datos['valoracion_test_respuesta_10']=$this->input->post('testr10');
			$datos['valoracion_test_resultado_10']=$this->input->post('auxtpr10');
			$datos['valoracion_test_total']=$this->input->post('testtotal');
			$datos['valoracion_test_riesgo']=$this->input->post('testnivel');
			$datos['valoracion_test_pregunta_general']=$this->input->post('respodedetalle');
			$datos['valoracion_f_reg']=$getfecha;
			$datos['valoracion_h_reg']=$gethora;
			$datos['valoracion_created_user']=$cuales;
			$datos['valoracion_update_user']=$cuales;

			$rs=$this->historia_model->actualizar_historiavarloracion($datos);
			echo $rs;
		}
		function registrar_norton(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
 			$cuales=$this->session->userdata('s_id');
			$datos['norton_doc']=$this->input->post('numhc5');
			$dig=$this->input->post('mostrar_diagnostico4');
			$armar=explode("\r\n", $dig);
			$ndig="";
			for ($i=0; $i < count($armar)-1; $i++)
			{ 
				$ndig=$ndig.$armar[$i];
			}
			$datos['norton_diagnosticos']=$ndig;
			$datos['norton_estado_fisico']=$this->input->post('nortonfisico');
			$datos['norton_estado_mental']=$this->input->post('nortonmental');
			$datos['norton_actividad']=$this->input->post('nortonactividad');
			$datos['norton_movilidad']=$this->input->post('nortonmovilidad');
			$datos['norton_incontinencia']=$this->input->post('nortonincontinencia');
			$datos['norton_total']=$this->input->post('nortontotal');
			$datos['norton_nivel']=$this->input->post('nortonnivel');
			$datos['norton_f_reg']=$getfecha;
			$datos['norton_h_reg']=$gethora;
			$datos['norton_created_user']=$cuales;
			$datos['norton_update_user']=$cuales;
			$datos['norton_h_inicio']=$this->input->post('fechai5');

			$rs=$this->historia_model->registrar_historianorton($datos);
			echo $rs;
		}
		function actualizar_norton(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
 			$cuales=$this->session->userdata('s_id');
			$datos['norton_doc']=$this->input->post('numhc5');
			$dig=$this->input->post('mostrar_diagnostico4');
			$armar=explode("\r\n", $dig);
			$ndig="";
			for ($i=0; $i < count($armar)-1; $i++)
			{ 
				$ndig=$ndig.$armar[$i];
			}
			$datos['norton_diagnosticos']=$ndig;
			$datos['norton_estado_fisico']=$this->input->post('nortonfisico');
			$datos['norton_estado_mental']=$this->input->post('nortonmental');
			$datos['norton_actividad']=$this->input->post('nortonactividad');
			$datos['norton_movilidad']=$this->input->post('nortonmovilidad');
			$datos['norton_incontinencia']=$this->input->post('nortonincontinencia');
			$datos['norton_total']=$this->input->post('nortontotal');
			$datos['norton_nivel']=$this->input->post('nortonnivel');
			$datos['norton_f_reg']=$getfecha;
			$datos['norton_h_reg']=$gethora;
			// $datos['norton_created_user']=$this->input->post('testp2');
			// $datos['norton_update_user']=$this->input->post('testr2');

			$rs=$this->historia_model->actualizar_historianorton($datos);
			echo $rs;
		}
		function registrar_braden(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
 			$cuales=$this->session->userdata('s_id');
			$datos['braden_doc']=$this->input->post('numhc6');
			$datos['braden_movilidad']=$this->input->post('bradenmovilidad');
			$datos['braden_actividad']=$this->input->post('bradenactividad');
			$datos['braden_persecion_sensorial']=$this->input->post('bradenpersecion');
			$datos['braden_humedad']=$this->input->post('bradenhumeda');
			$datos['braden_nutricion']=$this->input->post('bradennutricion');
			$datos['braden_fricion']=$this->input->post('bradenfriccion');
			$datos['braden_total_obtenido']=$this->input->post('bradentotal');
			$datos['braden_nivel_riesgo']=$this->input->post('bradennivel');
			$datos['braden_f_reg']=$getfecha;
			$datos['braden_h_reg']=$gethora;
			$datos['braden_created_user']=$cuales;
			$datos['braden_update_user']=$cuales;
			$datos['braden_h_inicio']=$this->input->post('fechai6');

			$rs=$this->historia_model->registrar_historiabraden($datos);
			echo $rs;
		}
		function actualizar_braden(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
 			$cuales=$this->session->userdata('s_id');
			$datos['braden_doc']=$this->input->post('numhc6');
			$datos['braden_movilidad']=$this->input->post('bradenmovilidad');
			$datos['braden_actividad']=$this->input->post('bradenactividad');
			$datos['braden_persecion_sensorial']=$this->input->post('bradenpersecion');
			$datos['braden_humedad']=$this->input->post('bradenhumeda');
			$datos['braden_nutricion']=$this->input->post('bradennutricion');
			$datos['braden_fricion']=$this->input->post('bradenfriccion');
			$datos['braden_total_obtenido']=$this->input->post('bradentotal');
			$datos['braden_nivel_riesgo']=$this->input->post('bradennivel');
			$datos['braden_f_reg']=$getfecha;
			$datos['braden_h_reg']=$gethora;
			$datos['braden_created_user']=$cuales;
			$datos['braden_update_user']=$cuales;

			$rs=$this->historia_model->actualizar_historiabraden($datos);
			echo $rs;
		}
		function eliminar(){
			$dato=$this->input->post('id');
			
			$rs=$this->agenda_model->eliminar_cita($dato);

		}
		function mostrar_paciente(){
			$nom=$this->input->post('nomb');
			
			$datos=$this->historia_model->buscar_paciente_nombres($nom);
			echo json_encode($datos);
		}
	}
?>