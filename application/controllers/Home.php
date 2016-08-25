<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->helper('url');
       $this->load->view('home');

       //$this->load->view('t');
        $this->load->view('Home_main');

    }

    public function checkSpell()
    {
        $this->load->helper('url');
       $this->load->view('home');

       $this->load->view('test');


    }

    public function checkSpelling()
    {

        $id = $this->input->post("val1");

        $data['id']= $id;
        $this->load->view('home');
        $this->load->view('test',$data);
        $this->load->view('spellChecker',$data);
    }

    public function grammarChecker()
    {

        $this->load->helper('url');
        $this->load->view('home');
        $this->load->view('grammarHome');

       // $this->load->view('grammarChecker');
       // $this->load->view('');
    }

    public function checkGrammar()
    {    $this->load->helper('url');

        $id = $this->input->post("val1");

        $data['id']= $id;

        $this->load->view('home');
        $this->load->view('grammarHome',$data);
        $this->load->view('grammarChecker',$data);

       // $this->load->view('grammarChecker');
       // $this->load->view('');
    }
}
