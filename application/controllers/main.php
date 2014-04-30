<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
		{
			$this->load->view('main/htmlheader.html');
			$this->load->view('main/header');
			$this->load->view('main/calc');
			// $this->load->view('main/navbar_fixed');
			$this->load->view('main/how_we_work');
			$this->load->view('main/profit');
			$this->load->view('main/whywe');
			$this->load->view('main/trust');
			$this->load->view('main/aboutus');
			$this->load->view('main/contacts');
			$this->load->view('main/minimap');
			$this->load->view('main/footer_contact');
			$this->load->view('main/footer_nav');
			$this->load->view('main/footer');
			$this->load->view('main/htmlfooter.html');
		}
	public function order(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('email');

		$this->form_validation->set_rules('name', 'Имя', 'required|min_length[2]|max_length[16]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Телефон', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('main/htmlheader.html');
			$this->load->view('main/calc');
			$this->load->view('main/htmlfooter.html');
		}
		else
		{
			$data = array('name' => $this->input->post('name'),
							'email' => $this->input->post('email'),
							'phone' => $this->input->post('phone'),
							'summ' => $this->input->post('summ'),
							'days' => $this->input->post('days'),
							'backsumm' => $this->input->post('backsumm'),
							'backdate' => $this->input->post('backdate')
				);
			// $data['type']=($data['optionsRadios']=='yur_lico')?'legal':'individual';
			// $data['captured']=1;
		   	//$this->heroin->setCustomer(null,$data);
			$config['mailtype'] = 'text';

			// $this->load->library('apiforcrm');

			// $answer  = $this->apiforcrm->setApi('39911b72b0e0cbe805ea9fa294e36e72b7793539')->setCaptured($data);
			// $config['mailpath'] = '/usr/sbin/sendmail';
			// $config['charset'] = 'iso-8859-1';
			// $config['wordwrap'] = FALSE;
			// $config['newline'] = TRUE;

			$this->email->initialize($config);

			$this->email->clear();
		    $this->email->to('marketing@findvorgroup.ru, semenzuev777@gmail.com');
		    $this->email->from('info@findvorgroup.ru');
		    $this->email->subject('Новая заявка!');
		    $this->email->message("Привет!\nПоступила заявка от\nИмя: ".$data['name']."\nE-mail: ".$data['email']."\nТелефон: ".$data['phone']."\nТребуемая сумма: ".$data['summ']."\nКоличество дней: ".$data['days']."\nСумма возврата: ".$data['backsumm']."\nДата возврата: ".$data['backdate']."");
		   	if($this->email->send()){
				echo json_encode(array("success" => true));
		   	}
		   	else {
				echo json_encode(array("success" => false));
		   	}


			// $this->load->view('main/htmlheader.html');
			// $this->load->view('main/success');
			// $this->load->view('main/htmlfooter.html');
		}	
	}
	public function simple_order(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('email');

		$this->form_validation->set_rules('name_s', 'Имя', 'required|min_length[2]|max_length[16]');
		$this->form_validation->set_rules('email_s', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone_s', 'Телефон', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('main/htmlheader.html');
			$this->load->view('main/calc');
			$this->load->view('main/htmlfooter.html');
		}
		else
		{
			$data = array('name_s' => $this->input->post('name_s'),
							'email_s' => $this->input->post('email_s'),
							'phone_s' => $this->input->post('phone_s'),
				);
			// $data['type']=($data['optionsRadios']=='yur_lico')?'legal':'individual';
			// $data['captured']=1;
		   	//$this->heroin->setCustomer(null,$data);
			$config['mailtype'] = 'text';

			// $this->load->library('apiforcrm');

			// $answer  = $this->apiforcrm->setApi('39911b72b0e0cbe805ea9fa294e36e72b7793539')->setCaptured($data);
			// $config['mailpath'] = '/usr/sbin/sendmail';
			// $config['charset'] = 'iso-8859-1';
			// $config['wordwrap'] = FALSE;
			// $config['newline'] = TRUE;

			$this->email->initialize($config);

			$this->email->clear();
		    $this->email->to('marketing@findvorgroup.ru, semenzuev777@gmail.com');
		    $this->email->from('info@findvorgroup.ru');
		    $this->email->subject('Новая заявка!');
		    $this->email->message("Привет!\nПоступила заявка от\nИмя: ".$data['name_s']."\nE-mail: ".$data['email_s']."\nТелефон: ".$data['phone_s']."");
		   	if($this->email->send()){
				echo json_encode(array("success" => true));
		   	}
		   	else {
				echo json_encode(array("success" => false));
		   	}


			// $this->load->view('main/htmlheader.html');
			// $this->load->view('main/success');
			// $this->load->view('main/htmlfooter.html');
		}	
	}
}