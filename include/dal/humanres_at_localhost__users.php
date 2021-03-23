<?php
$dalTableusers = array();
$dalTableusers["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableusers["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname");
$dalTableusers["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTableusers["mob"] = array("type"=>200,"varname"=>"mob", "name" => "mob");
$dalTableusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
	$dalTableusers["id"]["key"]=true;

$dal_info["humanres_at_localhost__users"] = &$dalTableusers;
?>