<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gnbmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function signup($data) {
        $this->db->set('userName', $data['user']);
        $this->db->set('password', $data['pass']);
        $this->db->set('email', $data['email']);

        $query = $this->db->query("select * from admin where userName='$data[user]' and password='$data[pass]'");
        $r = $query->result();
        if (count($r) > 0) {
            return false;
        } else {
            $r = $this->db->insert('admin');
            return true;
        }

        //return $r;
    }

    public function login($data) {
//        $this->db->set('userName', $data['uname']);
//        $this->db->set('password', $data['psw']);
        $query = $this->db->query("select * from admin where userName='$data[uname]' and password='$data[psw]'");
        $r = $query->result();
        //echo $r['userName'];
        print_r($r);
        return $r;
    }

    public function loginAdmin($data) {
        $this->load->database();
        $this->db->where('userName', $data['uname']);
        $res = $this->db->get('admin');
        foreach ($res->result() as $row) {
            $data['uname'] = $row->userName;
            $data['psw'] = $row->password;
        }
        echo $data['username'];
        echo $data['password'];
        return $data;
    }

    public function addToCart($data) {
        $this->db->set('userName', $data['user']);
        $this->db->set('quantity', $data['bric']);
        $this->db->set('rate', $data['bric_price']);
        $r = $this->db->insert('brick');
        return $r;
    }
    
    public function getCart($user) {
        $query = $this->db->query("select * from brick where userName='$user");
        $r = $query->result();
        return $r;
    }

}
