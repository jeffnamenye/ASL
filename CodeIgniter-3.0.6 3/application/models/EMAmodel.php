
<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class EMAModel extends CI_Model {

    function __construct()
    {

        parent::__construct();

    }

    function gettable()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    function getonerow($id)
    {
       $this->db->where('id',$id);
       $query = $this->db->get('users');
       return $query->row();



    }



}




