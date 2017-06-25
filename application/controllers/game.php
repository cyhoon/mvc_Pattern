<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Game extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function _remap($method)
    {
        $this->load->view('game/basic/header_v');

        if(method_exists($this,$method))
        {
            $this->{"{$method}"}();
        }

        $this->load->view('game/basic/footer_v');
    }

    public function index()
    {
        $this->game();
    }

    function game()
    {
        $this->load->view('game/content_v');
    }
}

?>