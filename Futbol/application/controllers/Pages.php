<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH.'views/futbol/'.$page.'.php'))
		{
                // Whoops, we don't have a page for that!
			show_404();
			
		}

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('futbol/header', $data);
        $this->load->view('futbol/'.$page, $data);
        $this->load->view('futbol/footer', $data);
    }




}
?>