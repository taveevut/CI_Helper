<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	if(!function_exists('save_button')){
		function save_button($icon = '<span class="glyphicon glyphicon-floppy-disk"></span>'){
			return '<button type="submit" class="btn btn-success">'.$icon.' บันทึก</button>';
		}
	}

	if(!function_exists('reset_button')){
		function reset_button(){
			return '<button type="reset" class="btn btn-default">ยกเลิก</button>';
		}
	}