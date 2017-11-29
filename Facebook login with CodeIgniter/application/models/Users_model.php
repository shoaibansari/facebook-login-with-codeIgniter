<?php 

class Users_model extends CI_Model
{
	
	public function get_users()
	{
		$this->db->order_by('users.id', 'DESC');
		$query = $this->db->get('users');
        return $query->result_array();
	}
    
    public function register($data)
	{   
		//Insert New User
		return $this->db->insert('users',$data);
	}

	//Check user exists
	public function check_user_exists($data)
	{
        $query = $this->db->get_where('users', array('fb_id' => $data));
        if(empty($query->row_array())){
          return false;
          //echo "false";
        }else{
        	return true;
          //echo "true";
        }

        //var_dump($data);
	}

	// function __construct(argument)
	// {
	// 	# code...
	// }
}