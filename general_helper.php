<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	if(!function_exists("breadcrumb")){
		function breadcrumb($data = array(),$dir = "ltr") {
			$result = '';
			$count = count($data);
			if($count > 0) :
				$i = 1;
				$active = '';
				$result .= '<ol dir="'.$dir.'" class="breadcrumb">';
				foreach($data as $key=>$val) :
					if($i == $count) 
					{
						$result .= '<li class="active">' . $val['label'] . '</li>';
					} else {
						$result .= '<li><a href="' .  $val['link'] .'">' .  $val['label'] . '</a></li>';
					}
					$i++;
				endforeach;
				$result .= '</ol>';
			endif;
			
			return $result;
		}
	}

	if(!function_exists("_memberStatus")){
		function _memberStatus($string){
			$response = array(
				'1' => 'เป็นสมาชิก',
				'0' => 'เลิกเป็นสมาชิก',
			);

			return $response[$string];
		}
	}

	if(!function_exists("_sex")){
		function _sex($string){
			$response = array(
				'M' => 'ชาย',
				'F' => 'หญิง',
			);

			return $response[$string];
		}
	}

	if(!function_exists("_prefixed")){
		function _prefixed($string){
			$response = array(
				'Mr' => 'นาย',
				'Mrs' => 'นาง',
				'Miss' => 'นางสาว',
			);

			return $response[$string];
		}
	}

	if(!function_exists("_marital")){
		function _marital($string){
			$response = array(
				'marry' => 'สมรส',
				'single' => 'โสด',
			);

			return $response[$string];
		}
	}

	if(!function_exists("_genNoIndex")){
		function _genNoIndex($prefixed = "", $number = ""){
			$response = $prefixed.sprintf("%04d", $number);
			return $response;
		}
	}

	if(!function_exists("_strReplaceNotCommas")){
		function _strReplaceNotCommas ($string = ""){
			$response = str_replace(',', '', $string);
			return $response;
		}
	}

	if(!function_exists("_numberFormat")){
		function _numberFormat ($number = "", $decimal = 2){
			if($number != 0 || $number != ""){
				$number = number_format($number, $decimal);
			}
			return $number;
		}
	}
	
?>