<?php
$dalTableloan = array();
$dalTableloan["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableloan["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname");
$dalTableloan["branch"] = array("type"=>200,"varname"=>"branch", "name" => "branch");
$dalTableloan["loan_date"] = array("type"=>135,"varname"=>"loan_date", "name" => "loan_date");
$dalTableloan["laon_for_months"] = array("type"=>3,"varname"=>"laon_for_months", "name" => "laon_for_months");
$dalTableloan["loan_amount"] = array("type"=>5,"varname"=>"loan_amount", "name" => "loan_amount");
	$dalTableloan["id"]["key"]=true;

$dal_info["humanres_at_localhost__loan"] = &$dalTableloan;
?>