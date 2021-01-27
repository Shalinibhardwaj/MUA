<?php

if (!defined('BASEPATH'))
   exit('No direct script access allowed');


function load_views($customView, $data = array()) {
    $CI = &get_instance();
    $CI->load->view('templates/header', $data);
    $CI->load->view($customView, $data);
    $CI->load->view('templates/footer', $data);
 }

function show404($error = "", $url = 'admin') {
   $error = (empty($error)) ? 'Invalid Request' : $error;
   echo $error;
   die('<a href="/"><br>Click here to redirect</a>');
}
