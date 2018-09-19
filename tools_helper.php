<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	if(!function_exists('load_view')){
		function load_view($file_name = '', $data = ''){
			$ci = &get_instance();
			$ci->load->view($file_name, $data);
		}
	}

	if(!function_exists('load_view_admin')){
		function load_view_admin($file_name = '', $data = ''){
			$ci = &get_instance();
			$ci->load->view('administrator/'.$file_name, $data);
		}
	}

?>
