<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["branch"] ) ) {
			$lookupTableLinks["branch"] = array();
		}
		if( !isset( $lookupTableLinks["branch"]["employee.branch"] )) {
			$lookupTableLinks["branch"]["employee.branch"] = array();
		}
		$lookupTableLinks["branch"]["employee.branch"]["edit"] = array("table" => "employee", "field" => "branch", "page" => "edit");
		if( !isset( $lookupTableLinks["employee"] ) ) {
			$lookupTableLinks["employee"] = array();
		}
		if( !isset( $lookupTableLinks["employee"]["task_assign.asigned_to"] )) {
			$lookupTableLinks["employee"]["task_assign.asigned_to"] = array();
		}
		$lookupTableLinks["employee"]["task_assign.asigned_to"]["edit"] = array("table" => "task assign", "field" => "asigned_to", "page" => "edit");
		if( !isset( $lookupTableLinks["employee"] ) ) {
			$lookupTableLinks["employee"] = array();
		}
		if( !isset( $lookupTableLinks["employee"]["loan.fullname"] )) {
			$lookupTableLinks["employee"]["loan.fullname"] = array();
		}
		$lookupTableLinks["employee"]["loan.fullname"]["edit"] = array("table" => "loan", "field" => "fullname", "page" => "edit");
		if( !isset( $lookupTableLinks["employee"] ) ) {
			$lookupTableLinks["employee"] = array();
		}
		if( !isset( $lookupTableLinks["employee"]["payroll.name"] )) {
			$lookupTableLinks["employee"]["payroll.name"] = array();
		}
		$lookupTableLinks["employee"]["payroll.name"]["edit"] = array("table" => "payroll", "field" => "name", "page" => "edit");
}

?>