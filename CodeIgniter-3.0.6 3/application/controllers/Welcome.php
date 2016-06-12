<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	  public function __construct()
      {
                parent::__construct();
       }

	  function index()
	   {
		$this->load->view('welcome_message');
        }
       function savedata()
        {     //creates an array to get data from the welcome_message
                $data = array(
                               'First Name' =>this->input->post('fname'),
                               'Last Name' =>this->input->post('lname'),
                               'Department' =>this->input->post('department'),
                               'Email' =>this->input->post('email'),
                               'Phone' =>this->input->post('phone')
                                );
         //this means to insert into database table name user
           $this->db->insert('tblsuser',$data);

           //this will redirect the data that when inserted will go to my welcome message page
          redirect("Welcome/welcome_message");

          }


}
