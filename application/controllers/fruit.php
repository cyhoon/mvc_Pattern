<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Fruit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->game();
    }

    public function _remap($method)
    {
        $this->load->view('fruit/basic/header_v');

        if(method_exists($this,$method))
        {
            $this->{"{$method}"}();
        }

        $this->load->view('fruit/basic/footer_v');
    }

    function game()
    {
        $this->load->view('fruit/content_v');
    }
}

?>