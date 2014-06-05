<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
	 public function __construct() {

        parent::__construct();

        $this->load->helper('url');

        $this->load->helper('form');

      //  $this->load->library('session');

        $this->load->library('form_validation');
		$this->load->model('category');
      //  $this->load->library('datatables');

        // $this->load->library('Auth');
        // $this->load->library('pagination');
        // $this->load->library('breadcrumb');

       // $this->status = $this->auth->checkStatus();

    }



    public function index() {
				if(!isset($_SESSION)){
					redirect('/login', 'location');
					}
		  		$data['data']=array();
				$this->pagedata['all_cat']=$this->category->getallcat();
				//echo "<pre>";print_r($data);die;
                $this->pagedata['pagetitle'] = "ZEFAF | Welcome";
                $this->pagedata['content'] = $this->load->view('pages/home', $data, TRUE);
                $this->load->view('main', $this->pagedata);
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */