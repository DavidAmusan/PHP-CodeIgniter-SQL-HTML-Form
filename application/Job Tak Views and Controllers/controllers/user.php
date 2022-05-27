<?php


class User extends CI_Controller {

    public function __construct(){
        //the php parent default constructor
        parent::__construct();
//if the user logged variable doesnt have a value return to the log in page, this way users cant just get to the profile page by putting it in the url
        if (($_SESSION['user_logged']== FALSE)) {
            $this->session->set_flashdata("invalid", "Please log in first");

            redirect("auth/login");
        }
    }
    public function profile()
    {
        $this->load->view('profile');
    }
}