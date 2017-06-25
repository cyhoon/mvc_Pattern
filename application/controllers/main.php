<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function _remap($method)
    {
        $this->load->view('home/basic/header_v');

        if( method_exists($this, $method))
        {
            $this->{"{$method}"}();
        }

        $this->load->view('home/basic/footer_v');
    }

    public function index()
    {
        $this->home();
    }


    public function home()
    {
        $this->load->view('home/content_v');
    }

}

?>