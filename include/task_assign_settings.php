<?php
$tdatatask_assign = array();
$tdatatask_assign[".searchableFields"] = array();
$tdatatask_assign[".ShortName"] = "task_assign";
$tdatatask_assign[".OwnerID"] = "";
$tdatatask_assign[".OriginalTable"] = "task assign";


$tdatatask_assign[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatask_assign[".originalPagesByType"] = $tdatatask_assign[".pagesByType"];
$tdatatask_assign[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatask_assign[".originalPages"] = $tdatatask_assign[".pages"];
$tdatatask_assign[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatask_assign[".originalDefaultPages"] = $tdatatask_assign[".defaultPages"];

//	field labels
$fieldLabelstask_assign = array();
$fieldToolTipstask_assign = array();
$pageTitlestask_assign = array();
$placeHolderstask_assign = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstask_assign["English"] = array();
	$fieldToolTipstask_assign["English"] = array();
	$placeHolderstask_assign["English"] = array();
	$pageTitlestask_assign["English"] = array();
	$fieldLabelstask_assign["English"]["ID0"] = "ID0";
	$fieldToolTipstask_assign["English"]["ID0"] = "";
	$placeHolderstask_assign["English"]["ID0"] = "";
	$fieldLabelstask_assign["English"]["id"] = "Id";
	$fieldToolTipstask_assign["English"]["id"] = "";
	$placeHolderstask_assign["English"]["id"] = "";
	$fieldLabelstask_assign["English"]["tittle"] = "Tittle";
	$fieldToolTipstask_assign["English"]["tittle"] = "";
	$placeHolderstask_assign["English"]["tittle"] = "";
	$fieldLabelstask_assign["English"]["asigned_to"] = "Asigned To";
	$fieldToolTipstask_assign["English"]["asigned_to"] = "";
	$placeHolderstask_assign["English"]["asigned_to"] = "";
	$fieldLabelstask_assign["English"]["status"] = "Status";
	$fieldToolTipstask_assign["English"]["status"] = "";
	$placeHolderstask_assign["English"]["status"] = "";
	$fieldLabelstask_assign["English"]["finish_date"] = "Finish Date";
	$fieldToolTipstask_assign["English"]["finish_date"] = "";
	$placeHolderstask_assign["English"]["finish_date"] = "";
	if (count($fieldToolTipstask_assign["English"]))
		$tdatatask_assign[".isUseToolTips"] = true;
}


	$tdatatask_assign[".NCSearch"] = true;



$tdatatask_assign[".shortTableName"] = "task_assign";
$tdatatask_assign[".nSecOptions"] = 0;

$tdatatask_assign[".mainTableOwnerID"] = "";
$tdatatask_assign[".entityType"] = 0;
$tdatatask_assign[".connId"] = "humanres_at_localhost";


$tdatatask_assign[".strOriginalTableName"] = "task assign";

	



$tdatatask_assign[".showAddInPopup"] = false;

$tdatatask_assign[".showEditInPopup"] = false;

$tdatatask_assign[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatask_assign[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatask_assign[".listAjax"] = false;
//	temporary
$tdatatask_assign[".listAjax"] = false;

	$tdatatask_assign[".audit"] = false;

	$tdatatask_assign[".locking"] = false;


$pages = $tdatatask_assign[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatask_assign[".edit"] = true;
	$tdatatask_assign[".afterEditAction"] = 1;
	$tdatatask_assign[".closePopupAfterEdit"] = 1;
	$tdatatask_assign[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatask_assign[".add"] = true;
$tdatatask_assign[".afterAddAction"] = 1;
$tdatatask_assign[".closePopupAfterAdd"] = 1;
$tdatatask_assign[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatask_assign[".list"] = true;
}



$tdatatask_assign[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatask_assign[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatask_assign[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatask_assign[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatask_assign[".printFriendly"] = true;
}



$tdatatask_assign[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatask_assign[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatask_assign[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatask_assign[".isUseAjaxSuggest"] = true;

$tdatatask_assign[".rowHighlite"] = true;





$tdatatask_assign[".ajaxCodeSnippetAdded"] = false;

$tdatatask_assign[".buttonsAdded"] = false;

$tdatatask_assign[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatask_assign[".isUseTimeForSearch"] = false;


$tdatatask_assign[".badgeColor"] = "edca00";


$tdatatask_assign[".allSearchFields"] = array();
$tdatatask_assign[".filterFields"] = array();
$tdatatask_assign[".requiredSearchFields"] = array();

$tdatatask_assign[".googleLikeFields"] = array();
$tdatatask_assign[".googleLikeFields"][] = "ID0";
$tdatatask_assign[".googleLikeFields"][] = "id";
$tdatatask_assign[".googleLikeFields"][] = "tittle";
$tdatatask_assign[".googleLikeFields"][] = "asigned_to";
$tdatatask_assign[".googleLikeFields"][] = "status";
$tdatatask_assign[".googleLikeFields"][] = "finish_date";



$tdatatask_assign[".tableType"] = "list";

$tdatatask_assign[".printerPageOrientation"] = 0;
$tdatatask_assign[".nPrinterPageScale"] = 100;

$tdatatask_assign[".nPrinterSplitRecords"] = 40;

$tdatatask_assign[".geocodingEnabled"] = false;










$tdatatask_assign[".pageSize"] = 20;

$tdatatask_assign[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatask_assign[".strOrderBy"] = $tstrOrderBy;

$tdatatask_assign[".orderindexes"] = array();


$tdatatask_assign[".sqlHead"] = "SELECT ID0,  	id,  	tittle,  	asigned_to,  	status,  	finish_date";
$tdatatask_assign[".sqlFrom"] = "FROM `task assign`";
$tdatatask_assign[".sqlWhereExpr"] = "";
$tdatatask_assign[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatask_assign[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatask_assign[".arrGroupsPerPage"] = $arrGPP;

$tdatatask_assign[".highlightSearchResults"] = true;

$tableKeystask_assign = array();
$tableKeystask_assign[] = "ID0";
$tdatatask_assign[".Keys"] = $tableKeystask_assign;


$tdatatask_assign[".hideMobileList"] = array();




//	ID0
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID0";
	$fdata["GoodName"] = "ID0";
	$fdata["ownerTable"] = "task assign";
	$fdata["Label"] = GetFieldLabel("task_assign","ID0");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID0";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID0";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatask_assign["ID0"] = $fdata;
		$tdatatask_assign[".searchableFields"][] = "ID0";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "task assign";
	$fdata["Label"] = GetFieldLabel("task_assign","id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatask_assign["id"] = $fdata;
		$tdatatask_assign[".searchableFields"][] = "id";
//	tittle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tittle";
	$fdata["GoodName"] = "tittle";
	$fdata["ownerTable"] = "task assign";
	$fdata["Label"] = GetFieldLabel("task_assign","tittle");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tittle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tittle";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatask_assign["tittle"] = $fdata;
		$tdatatask_assign[".searchableFields"][] = "tittle";
//	asigned_to
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "asigned_to";
	$fdata["GoodName"] = "asigned_to";
	$fdata["ownerTable"] = "task assign";
	$fdata["Label"] = GetFieldLabel("task_assign","asigned_to");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "asigned_to";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "asigned_to";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "employee";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "fullname";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullname";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatask_assign["asigned_to"] = $fdata;
		$tdatatask_assign[".searchableFields"][] = "asigned_to";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "task assign";
	$fdata["Label"] = GetFieldLabel("task_assign","status");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatask_assign["status"] = $fdata;
		$tdatatask_assign[".searchableFields"][] = "status";
//	finish_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "finish_date";
	$fdata["GoodName"] = "finish_date";
	$fdata["ownerTable"] = "task assign";
	$fdata["Label"] = GetFieldLabel("task_assign","finish_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "finish_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "finish_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatask_assign["finish_date"] = $fdata;
		$tdatatask_assign[".searchableFields"][] = "finish_date";


$tables_data["task assign"]=&$tdatatask_assign;
$field_labels["task_assign"] = &$fieldLabelstask_assign;
$fieldToolTips["task_assign"] = &$fieldToolTipstask_assign;
$placeHolders["task_assign"] = &$placeHolderstask_assign;
$page_titles["task_assign"] = &$pageTitlestask_assign;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["task assign"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["task assign"] = array();



	
				$strOriginalDetailsTable="employee";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="employee";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "employee";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["task assign"][0] = $masterParams;
				$masterTablesData["task assign"][0]["masterKeys"] = array();
	$masterTablesData["task assign"][0]["masterKeys"][]="fullname";
				$masterTablesData["task assign"][0]["detailKeys"] = array();
	$masterTablesData["task assign"][0]["detailKeys"][]="asigned_to";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_task_assign()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID0,  	id,  	tittle,  	asigned_to,  	status,  	finish_date";
$proto0["m_strFrom"] = "FROM `task assign`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ID0",
	"m_strTable" => "task assign",
	"m_srcTableName" => "task assign"
));

$proto6["m_sql"] = "ID0";
$proto6["m_srcTableName"] = "task assign";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "task assign",
	"m_srcTableName" => "task assign"
));

$proto8["m_sql"] = "id";
$proto8["m_srcTableName"] = "task assign";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tittle",
	"m_strTable" => "task assign",
	"m_srcTableName" => "task assign"
));

$proto10["m_sql"] = "tittle";
$proto10["m_srcTableName"] = "task assign";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "asigned_to",
	"m_strTable" => "task assign",
	"m_srcTableName" => "task assign"
));

$proto12["m_sql"] = "asigned_to";
$proto12["m_srcTableName"] = "task assign";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "task assign",
	"m_srcTableName" => "task assign"
));

$proto14["m_sql"] = "status";
$proto14["m_srcTableName"] = "task assign";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "finish_date",
	"m_strTable" => "task assign",
	"m_srcTableName" => "task assign"
));

$proto16["m_sql"] = "finish_date";
$proto16["m_srcTableName"] = "task assign";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "task assign";
$proto19["m_srcTableName"] = "task assign";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID0";
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "tittle";
$proto19["m_columns"][] = "asigned_to";
$proto19["m_columns"][] = "status";
$proto19["m_columns"][] = "finish_date";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`task assign`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "task assign";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="task assign";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_task_assign = createSqlQuery_task_assign();


	
		;

						

$tdatatask_assign[".sqlquery"] = $queryData_task_assign;



$tableEvents["task assign"] = new eventsBase;
$tdatatask_assign[".hasEvents"] = false;

?>