<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Profiles extends CI_Model {
    
    function __construct() {
        parent::__construct();
        # $this->load->model('tank_auth/users');
    }
    
    function get_user_by_id($user_id) {
        # $user_partial = $this->users->get_user_by_id($user_id, TRUE);
        return $this->db->where('user_profiles.user_id',$user_id)
                        ->join('users','users.id = user_profiles.user_id')
                        ->get('user_profiles')
                        ->row();
    }
}
