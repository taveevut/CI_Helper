<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	if(!function_exists("CURDATE")){
		function CURDATE() {
			return date("Y-m-d");
		}
	}

	if(!function_exists("NOW")){
		function NOW() {
			return date("Y-m-d H:i:s");
		}
	}

	if(!function_exists("datePatternThai")){
		function datePatternThai($date) {
			return date("d/m/Y",strtotime($date));
		}
	}

	if(!function_exists("thaiMonth")){
		function thaiMonth($month = "", $type = "long"){
			$arr = array(
				"01" => array(
									"long" => "มกราคม",
									"summary" => "ม.ค.",
								),
				"02" => array(
									"long" => "กุมภาพันธ์",
									"summary" => "ก.พ.",
								),
				"03" => array(
									"long" => "มีนาคม",
									"summary" => "มี.ค.",
								),
				"04" => array(
									"long" => "เมษายน",
									"summary" => "เม.ย.",
								),
				"05" => array(
									"long" => "พฤษภาคม",
									"summary" => "พ.ค.",
								),
				"06" => array(
									"long" => "มิถุนายน",
									"summary" => "มิ.ย.",
								),	
				"07" => array(
									"long" => "กรกฎาคม",
									"summary" => "ก.ค.",
								),
				"08" => array(
									"long" => "สิงหาคม",
									"summary" => "ส.ค.",
								),
				"09" => array(
									"long" => "กันยายน",
									"summary" => "ก.ย.",
								),
				"10" => array(
									"long" => "ตุลาคม",
									"summary" => "ต.ค.",
								),
				"11" => array(
									"long" => "พฤศจิกายน",
									"summary" => "พ.ย.",
								),
				"12" => array(
									"long" => "ธันวาคม",
									"summary" => "ธ.ค.",
								)					
			);

			return $month == "" ? $arr : $arr[$month][$type]; 
		}
	}

	if(!function_exists("dateThai")){
		function dateThai($date, $type = "short"){
			$d = date("d",strtotime($date));
			$m = date("m",strtotime($date));
			$y = date("Y",strtotime($date))+543;

			$result = $d."/".$m."/".$y;
			if($type == "long" ){
				$result = $d." เดือน".thaiMonth($m)." พ.ศ. ".$y;
			}
			else if($type == "summary"){
				$result = $d." ".thaiMonth($m, "summary")." ".substr($y, 2);
			}

			return strtotime($date) <= 0 ? "" : $result;
		}
	}

	if(!function_exists("dateThaiNotday")){
		function dateThaiNotday($date, $type = "short"){
			$d = date("d",strtotime($date));
			$m = date("m",strtotime($date));
			$y = date("Y",strtotime($date))+543;

			$result = $d."/".$m."/".$y;
			if($type == "long" ){
				$result = "เดือน".thaiMonth($m)." พ.ศ.".$y;
			}
			else if($type == "summary"){
				$result = thaiMonth($m, "summary")." ".substr($y, 2);
			}

			return strtotime($date) <= 0 ? "" : $result;
		}
	}

	 if(!function_exists("intervalYeaRetroact")){
  	function intervalYeaRetroact($num = 0){
  		$response = array();
  		for($i = (date("Y")-$num); $i <= date("Y"); $i++){
  			$response[] = $i;
  		}

  		return $response;
  	}
  }
?>