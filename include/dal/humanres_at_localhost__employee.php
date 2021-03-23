<?php
$dalTableemployee = array();
$dalTableemployee["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableemployee["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname");
$dalTableemployee["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableemployee["postion"] = array("type"=>200,"varname"=>"postion", "name" => "postion");
$dalTableemployee["gender"] = array("type"=>200,"varname"=>"gender", "name" => "gender");
$dalTableemployee["salary"] = array("type"=>200,"varname"=>"salary", "name" => "salary");
$dalTableemployee["branch"] = array("type"=>200,"varname"=>"branch", "name" => "branch");
$dalTableemployee["address"] = array("type"=>200,"varname"=>"address", "name" => "address");
	$dalTableemployee["id"]["key"]=true;

$dal_info["humanres_at_localhost__employee"] = &$dalTableemployee;
?>