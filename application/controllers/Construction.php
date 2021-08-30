<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Construction extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helpers(array('url', 'form'));
        $this->load->library(array('form_validation', 'session'));
    }

    public function cart() {
        $this->load->view('cart');
    }

    public function login2() {
        $this->load->view('login2');
    }

    public function index() {
//        $this->load->view('login2');
        $this->load->view('front');
    }

    public function form() {
        if ($this->session->userdata('user') != '') {
            $var['user'] = $this->session->userdata('user');
            $this->load->view('login', $var);
        } else {
            echo 'nanme';
            redirect(site_url('construction/login2'));
        }
//        $this->load->view('front');
    }

    public function signup() {

        $data = array(
            'user' => $this->input->post("user"),
            'pass' => $this->input->post("pass"),
            'email' => $this->input->post("email")
        );
        $this->load->model('Gnbmodel');
        $qry = $this->Gnbmodel->signup($data);
        echo $qry;
        if ($qry) {

            $sessionData = array(
                "user" => $data['user']
            );
            $this->session->set_userdata($sessionData);
//            $this->load->view('login',$qry);
            redirect(site_url('construction/form'));
        } else {
            $this->session->set_flashdata('msg2', '<div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span> <strong>Already Existing User/ signup again</strong>
                </div>');
            redirect(site_url('construction/login2'));
        }
    }

    public function logout() {
        $this->session->unset_userdata('user');
        redirect(site_url('construction/index'));
    }

    public function login() {
        $data = array(
            'uname' => $this->input->post("uname"),
            'psw' => $this->input->post("psw")
        );
        $this->load->model('Gnbmodel');
        $r = $this->Gnbmodel->login($data);
        if (count($r) > 0) {
            $sessionData = array(
                "user" => $data['uname']
            );
            $this->session->set_userdata($sessionData);
            print_r(get_object_vars($r[0])['userName']);
            redirect(site_url('construction/form'));
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span> <strong>Login Again</strong>
                </div>');
            redirect(site_url('construction/login2'));
        }
    }

    public function addToCart() {
        if ($this->session->userdata('user') != '') {
            $data = array(
                'bric' => $this->input->post("bric"),
                'bric_price' => $this->input->post("bric_price"),
                'user' => $this->session->userdata('user')
            );
            $this->load->model('Gnbmodel');
            $r = $this->Gnbmodel->addToCart($data);
            if ($r > 0) {
                redirect(site_url('construction/cart'));
            } else {
                redirect('error.php');
            }
        } else {
            redirect(site_url('construction/login2'));
        }
    }

    public function name() {
        $this->load->view('index');
    }

    public function getCart() {
        if ($this->session->userdata('user') != '') {
            $this->load->model('Gnbmodel');
            $r = $this->Gnbmodel->getCart($this->session->userdata('user'));
            echo $r;
//            $this->load->view('index');
        } else {
            redirect(site_url('construction/login2'));
        }
    }

}
