<?php
	require_once "../db/conn.php";

	function sanitizeFormContact($name = null, $email = null, $msg = null, $phone = null) {
		$arr_params = compact('name', 'email', 'msg', 'phone');
	
		if (array_filter($arr_params) !== $arr_params) {
			return false;
		}
	
		array_walk($arr_params, fn(&$param) => $param = antiSqlInjection($param));

		return $arr_params;
	}
	

	function antiSqlInjection($param) {
		$blacklist = ['--', '#', ';', '"', "'", '`', '=', '*', '%', '(', ')'];
		
		$param = htmlspecialchars(stripslashes(trim($param)), ENT_QUOTES, 'UTF-8');
		$param = str_ireplace($blacklist, ' ', $param);
	
		return $param;
	}

    function getFirsName($name){
        $parts = explode(' ', trim($name));
        return $parts[0];
    }
