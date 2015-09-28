<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consentimiento extends CI_Controller {

	public function view($page="home", $param1="", $param2="")
	{
		if ( ! file_exists(APPPATH.'/views/consentimiento/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
     switch ($page) {
			case 'verConsentimientos':
			$data["consentimiento"] = $this->consentimiento_model->getAllConsentimiento();

			break;
			case 'verUnaDonante':
			$data["unaDonante"] = $this->donantes_model->getDonante($param1);
			//var_dump($data["unaDonante"]);
			break;
			case 'editarDonante':
			$data["unaDonante"] = $this->donantes_model->getDonante($param1);
			//var_dump($data["unaDonante"]);
			break;
			case 'consentimiento2':
			$data['unBebe'] = $this->bebeasociado_model->getBebeasociado($param1);
			
			$data['unaDonanteConsentimiento']= $this->donantes_model->getDonante($param2);
			//var_dump($data["unaDonanteConsentimiento"]);
			//var_dump($data["unBebe"]);
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('consentimiento/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}

public function altaConsentimiento()
	{
		 $fechaArray = explode('/', $this->input->post("IfechaDesde"));
		  $date = new DateTime();
		  $date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		  $fecha= $date->format('Y-m-d');

		$unconsentimiento =  array(
			//nombre en la bd -----------------------> nombre de name
			'fechaDesde' 			=> $this->input->post("IfechaDesde"), 
			//'fechaHasta' 			=> $this->input->post("IfechaHasta"),
			'dia' 					=> $this->input->post("IdiaVisita") ,
			'calle'  				=> $this->input->post("Icalle") ,
			'altura'  				=> $this->input->post("Inumero") ,
			'barrio' 				=> $this->input->post("Ibarrio") ,
			'mz'					=> $this->input->post("Imz"), 
			'pc'					=> $this->input->post("Ipc"), 
			'piso'					=> $this->input->post("Ipiso"), 
			'departamento'			=> $this->input->post("Idpto"),
			'permiteFoto'			=> $this->input->post("IpermiteFoto"),
			'solicitudSerologia'	=> $this->input->post("IpedidoSerologia"),
			'Donante_nroDonante'	=> $this->input->post("nroDonante"),
			'Zona_idZona'			=> $this->input->post("Izona")
			);
		
		$data['title'] = ucfirst("home");
		if ($this->consentimiento_model->insertNewConsentimiento($unconsentimiento)) {
			redirect('consentimiento/view/verConsentimientos','refresh');
		} else {
			redirect('','refresh');
		}
	}
	public function borrarDonante(){
		$this->consentimiento_model->deleteDonante((int)"29");
	}
}