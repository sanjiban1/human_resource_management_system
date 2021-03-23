<?php
$dalTablepayroll = array();
$dalTablepayroll["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablepayroll["name"] = array("type"=>200,"varname"=>"name", "name" => "name");
$dalTablepayroll["salary"] = array("type"=>200,"varname"=>"salary", "name" => "salary");
$dalTablepayroll["pay_date"] = array("type"=>135,"varname"=>"pay_date", "name" => "pay_date");
	$dalTablepayroll["id"]["key"]=true;

$dal_info["humanres_at_localhost__payroll"] = &$dalTablepayroll;
?>