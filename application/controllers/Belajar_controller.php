<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar_controller extends CI_Controller
{
    function __contruct(){
        parent::__contruct();
    }

    public function home()
    {
        $this->load->view('belajar_view');
    }
}
