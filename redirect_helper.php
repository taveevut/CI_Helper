<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	if(!function_exists('site_admin_redirect')){
		function site_admin_redirect($url = ''){
			header('Location: '.site_url('administrator/'. $url));
		}
	}

?>
