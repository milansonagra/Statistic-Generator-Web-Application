<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Home extends CI_Controller {
    
    private $msg;

    function __construct(){
        parent::__construct();
        $this->check_isvalidated();
    }
    

    public function index() {
        // If the user is validated, then this function will run
        echo 'Congratulations, you are logged in.';
        // Add a link to logout
        echo '<br /><a href=home/do_logout>Logout Fool!</a>';
    }
    
    private function check_isvalidated(){

        if(! $this->session->userdata('validated')) {
            $GLOBAL['msg'] = NULL;
            header('Location: http://localhost/Statistic-Generator-Web-Application/Login?msg=$msg');
        }
    }   
    
    public function do_logout() {

        if($this->session->userdata('validated')) {
            
            $GLOBAL['msg'] = 'Logout Successfully';
            $this->session->sess_destroy();
            header('Location: http://localhost/Statistic-Generator-Web-Application/Login?msg=$msg');
        }
    }
 }
 ?>