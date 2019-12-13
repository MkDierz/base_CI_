<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View {

    public function method()
    {
        parent::__construct();
    }

    public function home($view, $data=array())
    {
        $ci =& get_instance();

        if (!array_key_exists('title', $data)) {
            $data['title'] = 'Home';
        }

        $ci->load->view('home/_partials/header', $data);
        $ci->load->view('home/_partials/navbar', $data);
        $ci->load->view('home/_partials/sidebar', $data);

        if ($data) {
            $ci->load->view('home/'.$view, $data);
        } else {
            $ci->load->view('home/'.$view);
        }

        $ci->load->view('home/_partials/footer', $data);
    }
}
