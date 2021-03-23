<?php
$dalTablebranch = array();
$dalTablebranch["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablebranch["branch_name"] = array("type"=>200,"varname"=>"branch_name", "name" => "branch_name");
$dalTablebranch["brach_Code"] = array("type"=>200,"varname"=>"brach_Code", "name" => "brach_Code");
$dalTablebranch["area"] = array("type"=>200,"varname"=>"area", "name" => "area");
	$dalTablebranch["id"]["key"]=true;

$dal_info["humanres_at_localhost__branch"] = &$dalTablebranch;
?>