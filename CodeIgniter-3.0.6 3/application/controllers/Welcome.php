<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
          {
               parent::__construct();
               //this calls my model


           }

    	  function index()
    	  {
    		$this->load->view('main');
          }

          function savedata()
          {
              //this creates an array to get data from main
             $data = array(

                          'fname' => $this->input->post('fname'),
                          'lname' => $this->input->post('lname'),
                          'department' => $this->input->post('department'),
                          'email' => $this->input->post('email'),
                          'phone' => $this->input->post('phone')
             );
              //this insert into the database table named users
             $this->db->insert('users',$data);

             // this means when insert is already done it will go main
             redirect("Welcome/main");


          }

          function edit($id)
          {
              $row = $this->m->getonerow($id);
              $data['r'] = $row;
              $this->load->view('edit',$data);

          }




}