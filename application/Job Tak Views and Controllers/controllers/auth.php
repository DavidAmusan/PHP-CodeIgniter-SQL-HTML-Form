<?php

class auth extends CI_Controller{
    //logout function to destroy the session data so previous session user data isnt loaded to relog in after logging out
    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        redirect("auth/login", "refresh");
    }

    public function login(){
        //rule to require password and username
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        //if the username and password feilds are filled then pass the values into post to confirm from the mysqli database
        if($this->form_validation->run()== TRUE) {

            $username=$_POST['username'];
            $password= $_POST['password'];
            
            //check auth data in the database
            $this->db->select('*');
            $this->db->from('Users');
            $this->db->where(array('username' => $username, 'password' => $password,
            
        ));
            
        $query =$this->db->get();
        $user = $query->row();
      //if the username and password match a user that exists
            if($user->firstname){
                $this->session->set_flashdata("success", "You are logged in");  

                //create a session variable user_logged and match it to true to indicate the user got to the profile page through logging in 
                $_SESSION['user_logged'] = TRUE;
                
                //if the user exists create session variables to hold the values from the database
                $_SESSION['username'] = $user->username;
                $_SESSION['firstname'] = $user->firstname;
                $_SESSION['surname'] = $user->surname;
                $_SESSION['age'] = $user->age;
                $_SESSION['race'] = $user->race;
                $_SESSION['phoneNo'] = $user->phoneNo;
                $_SESSION['email'] = $user->email;
                
                //redirect to the profile page if that user exists
                redirect("user/profile");
            }
            else{
                $this->session->set_flashdata("invalid", "Please register");
                redirect("auth/login", "refresh");
            }
        }
        //load the login page
        $this->load->view('login');   
        
    }


    public function register(){  
        //set the rules for the feilds in the register page     
if(isset($_POST['register'])) {
    $this->form_validation->set_rules('firstname', 'Firstname', 'required');
    $this->form_validation->set_rules('surname', 'Surname', 'required');
    $this->form_validation->set_rules('age', 'Age', 'required');
    $this->form_validation->set_rules('race', 'Race', 'required');
    $this->form_validation->set_rules('phoneNo', 'PhoneNo', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
  
    if ($this->form_validation->run() == TRUE) {    

//hold the variables with matching databse names in the $data array
$data = array(
    'firstname'=> $_POST['firstname'],
    'surname'=> $_POST['surname'],
    'age'=> $_POST['age'],
    'race'=>$_POST['race'],
    'phoneNo'=>$_POST['phoneNo'],
    'email'=>$_POST['email'],
    'username'=>$_POST['username'],
    'password'=>$_POST['password'],
);
//use the $data array to insert the matching values in feilds in the databse
$this->db->insert('Users', $data);
    //redirect to the log in page and hold the message in the "success" item
$this->session->set_flashdata("success", "Your account has been registered, You can log in now"); 
redirect("auth/login", "refresh");
    }
}
//load the register page
$this->load->view('register');   

}
}