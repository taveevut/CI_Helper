<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	if(!function_exists('site_admin_url')){
		function site_admin_url($url = ''){
			if($url != "")
			{
				return site_url('administrator/'. $url);
			}
			else
			{
				return site_url('administrator');
			}
			
		}
	}

	if(!function_exists('site_asset_url')){
		function site_asset_url($url = ''){
			return site_url('assets/'. $url);
		}
	}

	if(!function_exists('site_asset_css_url')){
		function site_asset_css_url($url = ''){
			return site_url('assets/css/'. $url);
		}
	}

	if(!function_exists('site_asset_js_url')){
		function site_asset_js_url($url = ''){
			return site_url('assets/js/'. $url);
		}
	}

	if(!function_exists('site_asset_img_url')){
		function site_asset_img_url($url = ''){
			return site_url('assets/img/'. $url);
		}
	}

	if(!function_exists('site_uploads_url')){
		function site_uploads_url($url = ''){
			return site_url('uploads/'. $url);
		}
	}

	if(!function_exists('site_string_url')){
		function site_string_url($string = ''){
			$string = preg_replace("`\[.*\]`U","",$string);
			$string = preg_replace('`&(amp;)?#?[a-z0-9]+;`i','-',$string);
			$string = str_replace('%', '-percent', $string);
			$string = htmlentities($string, ENT_COMPAT, 'utf-8');
			$string = preg_replace( "`&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);`i","\\1", $string );
			$string = preg_replace( array("`[^a-z0-9ก-๙เ-า]`i","`[-]+`") , "-", $string);
			$response = strtolower(trim($string, '-'));

			return $response;
		}
	}
	
	if(!function_exists('current_url')){
		function current_url(){
			$CI =& get_instance();

			$url = $CI->config->site_url($CI->uri->uri_string());
			return $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url;
		}
	}

	if(!function_exists('site_anchor_popup')){
		function site_popup($url = "", $width = 800, $height = 700, $class = "btn btn-default btn-sm", $text = '<i class="glyphicon glyphicon-search"></i>', $title = "ดูรายการนี้"){
			$atts = array(
				'class'				=> $class,
				'title'				=> $title,
				'width'       => $width,
				'height'      => $height,
				'screenx'     => '\'+((parseInt(screen.width) - '.$width.')/2)+\'',
				'screeny'     => '\'+((parseInt(screen.height) - '.$height.')/4)+\'',
				'scrollbars'  => 'yes',
				'status'      => 'yes',
				'resizable'   => 'yes',
				'window_name' => '_blank'
			);

			return anchor_popup($url, $text, $atts);
		}
	}
?>