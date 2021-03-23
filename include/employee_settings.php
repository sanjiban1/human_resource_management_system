<?php
$tdataemployee = array();
$tdataemployee[".searchableFields"] = array();
$tdataemployee[".ShortName"] = "employee";
$tdataemployee[".OwnerID"] = "";
$tdataemployee[".OriginalTable"] = "employee";


$tdataemployee[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataemployee[".originalPagesByType"] = $tdataemployee[".pagesByType"];
$tdataemployee[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataemployee[".originalPages"] = $tdataemployee[".pages"];
$tdataemployee[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataemployee[".originalDefaultPages"] = $tdataemployee[".defaultPages"];

//	field labels
$fieldLabelsemployee = array();
$fieldToolTipsemployee = array();
$pageTitlesemployee = array();
$placeHoldersemployee = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemployee["English"] = array();
	$fieldToolTipsemployee["English"] = array();
	$placeHoldersemployee["English"] = array();
	$pageTitlesemployee["English"] = array();
	$fieldLabelsemployee["English"]["id"] = "Id";
	$fieldToolTipsemployee["English"]["id"] = "";
	$placeHoldersemployee["English"]["id"] = "";
	$fieldLabelsemployee["English"]["fullname"] = "Fullname";
	$fieldToolTipsemployee["English"]["fullname"] = "";
	$placeHoldersemployee["English"]["fullname"] = "";
	$fieldLabelsemployee["English"]["email"] = "Email";
	$fieldToolTipsemployee["English"]["email"] = "";
	$placeHoldersemployee["English"]["email"] = "";
	$fieldLabelsemployee["English"]["postion"] = "Postion";
	$fieldToolTipsemployee["English"]["postion"] = "";
	$placeHoldersemployee["English"]["postion"] = "";
	$fieldLabelsemployee["English"]["gender"] = "Gender";
	$fieldToolTipsemployee["English"]["gender"] = "";
	$placeHoldersemployee["English"]["gender"] = "";
	$fieldLabelsemployee["English"]["salary"] = "Salary";
	$fieldToolTipsemployee["English"]["salary"] = "";
	$placeHoldersemployee["English"]["salary"] = "";
	$fieldLabelsemployee["English"]["branch"] = "Branch";
	$fieldToolTipsemployee["English"]["branch"] = "";
	$placeHoldersemployee["English"]["branch"] = "";
	$fieldLabelsemployee["English"]["address"] = "Address";
	$fieldToolTipsemployee["English"]["address"] = "";
	$placeHoldersemployee["English"]["address"] = "";
	if (count($fieldToolTipsemployee["English"]))
		$tdataemployee[".isUseToolTips"] = true;
}


	$tdataemployee[".NCSearch"] = true;



$tdataemployee[".shortTableName"] = "employee";
$tdataemployee[".nSecOptions"] = 0;

$tdataemployee[".mainTableOwnerID"] = "";
$tdataemployee[".entityType"] = 0;
$tdataemployee[".connId"] = "humanres_at_localhost";


$tdataemployee[".strOriginalTableName"] = "employee";

	



$tdataemployee[".showAddInPopup"] = false;

$tdataemployee[".showEditInPopup"] = false;

$tdataemployee[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemployee[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemployee[".listAjax"] = false;
//	temporary
$tdataemployee[".listAjax"] = false;

	$tdataemployee[".audit"] = false;

	$tdataemployee[".locking"] = false;


$pages = $tdataemployee[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataemployee[".edit"] = true;
	$tdataemployee[".afterEditAction"] = 1;
	$tdataemployee[".closePopupAfterEdit"] = 1;
	$tdataemployee[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataemployee[".add"] = true;
$tdataemployee[".afterAddAction"] = 1;
$tdataemployee[".closePopupAfterAdd"] = 1;
$tdataemployee[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataemployee[".list"] = true;
}



$tdataemployee[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataemployee[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataemployee[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataemployee[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataemployee[".printFriendly"] = true;
}



$tdataemployee[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataemployee[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataemployee[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataemployee[".isUseAjaxSuggest"] = true;

$tdataemployee[".rowHighlite"] = true;





$tdataemployee[".ajaxCodeSnippetAdded"] = false;

$tdataemployee[".buttonsAdded"] = false;

$tdataemployee[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemployee[".isUseTimeForSearch"] = false;


$tdataemployee[".badgeColor"] = "edca00";


$tdataemployee[".allSearchFields"] = array();
$tdataemployee[".filterFields"] = array();
$tdataemployee[".requiredSearchFields"] = array();

$tdataemployee[".googleLikeFields"] = array();
$tdataemployee[".googleLikeFields"][] = "id";
$tdataemployee[".googleLikeFields"][] = "fullname";
$tdataemployee[".googleLikeFields"][] = "email";
$tdataemployee[".googleLikeFields"][] = "postion";
$tdataemployee[".googleLikeFields"][] = "gender";
$tdataemployee[".googleLikeFields"][] = "salary";
$tdataemployee[".googleLikeFields"][] = "branch";
$tdataemployee[".googleLikeFields"][] = "address";



$tdataemployee[".tableType"] = "list";

$tdataemployee[".printerPageOrientation"] = 0;
$tdataemployee[".nPrinterPageScale"] = 100;

$tdataemployee[".nPrinterSplitRecords"] = 40;

$tdataemployee[".geocodingEnabled"] = false;










$tdataemployee[".pageSize"] = 20;

$tdataemployee[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemployee[".strOrderBy"] = $tstrOrderBy;

$tdataemployee[".orderindexes"] = array();


$tdataemployee[".sqlHead"] = "SELECT id,  	fullname,  	email,  	postion,  	gender,  	salary,  	branch,  	address";
$tdataemployee[".sqlFrom"] = "FROM employee";
$tdataemployee[".sqlWhereExpr"] = "";
$tdataemployee[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemployee[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemployee[".arrGroupsPerPage"] = $arrGPP;

$tdataemployee[".highlightSearchResults"] = true;

$tableKeysemployee = array();
$tableKeysemployee[] = "id";
$tdataemployee[".Keys"] = $tableKeysemployee;


$tdataemployee[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdataemployee["id"] = $fdata;
		$tdataemployee[".searchableFields"][] = "id";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","fullname");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdataemployee["fullname"] = $fdata;
		$tdataemployee[".searchableFields"][] = "fullname";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdataemployee["email"] = $fdata;
		$tdataemployee[".searchableFields"][] = "email";
//	postion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "postion";
	$fdata["GoodName"] = "postion";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","postion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "postion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "postion";

	
	
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


	$tdataemployee["postion"] = $fdata;
		$tdataemployee[".searchableFields"][] = "postion";
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","gender");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "gender";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gender";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Male";
	$edata["LookupValues"][] = "Female";
	$edata["LookupValues"][] = "Other";

	
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


	$tdataemployee["gender"] = $fdata;
		$tdataemployee[".searchableFields"][] = "gender";
//	salary
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "salary";
	$fdata["GoodName"] = "salary";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","salary");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "salary";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "salary";

	
	
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


	$tdataemployee["salary"] = $fdata;
		$tdataemployee[".searchableFields"][] = "salary";
//	branch
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "branch";
	$fdata["GoodName"] = "branch";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","branch");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "branch";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "branch";

	
	
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
	$edata["LookupTable"] = "branch";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "branch_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "branch_name";

	

	
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


	$tdataemployee["branch"] = $fdata;
		$tdataemployee[".searchableFields"][] = "branch";
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","address");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdataemployee["address"] = $fdata;
		$tdataemployee[".searchableFields"][] = "address";


$tables_data["employee"]=&$tdataemployee;
$field_labels["employee"] = &$fieldLabelsemployee;
$fieldToolTips["employee"] = &$fieldToolTipsemployee;
$placeHolders["employee"] = &$placeHoldersemployee;
$page_titles["employee"] = &$pageTitlesemployee;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["employee"] = array();
//	task assign
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="task assign";
		$detailsParam["dOriginalTable"] = "task assign";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "task_assign";
	$detailsParam["dCaptionTable"] = GetTableCaption("task_assign");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["employee"][$dIndex] = $detailsParam;

	
		$detailsTablesData["employee"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["masterKeys"][]="fullname";

				$detailsTablesData["employee"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["detailKeys"][]="asigned_to";
//	loan
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="loan";
		$detailsParam["dOriginalTable"] = "loan";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "loan";
	$detailsParam["dCaptionTable"] = GetTableCaption("loan");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["employee"][$dIndex] = $detailsParam;

	
		$detailsTablesData["employee"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["masterKeys"][]="fullname";

	$detailsTablesData["employee"][$dIndex]["masterKeys"][]="branch";

				$detailsTablesData["employee"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["detailKeys"][]="fullname";

		
	$detailsTablesData["employee"][$dIndex]["detailKeys"][]="branch";
//	payroll
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="payroll";
		$detailsParam["dOriginalTable"] = "payroll";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payroll";
	$detailsParam["dCaptionTable"] = GetTableCaption("payroll");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["employee"][$dIndex] = $detailsParam;

	
		$detailsTablesData["employee"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["masterKeys"][]="fullname";

	$detailsTablesData["employee"][$dIndex]["masterKeys"][]="salary";

				$detailsTablesData["employee"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["detailKeys"][]="name";

		
	$detailsTablesData["employee"][$dIndex]["detailKeys"][]="salary";

// tables which are master tables for current table (detail)
$masterTablesData["employee"] = array();



	
				$strOriginalDetailsTable="branch";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="branch";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "branch";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["employee"][0] = $masterParams;
				$masterTablesData["employee"][0]["masterKeys"] = array();
	$masterTablesData["employee"][0]["masterKeys"][]="branch_name";
				$masterTablesData["employee"][0]["detailKeys"] = array();
	$masterTablesData["employee"][0]["detailKeys"][]="branch";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_employee()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fullname,  	email,  	postion,  	gender,  	salary,  	branch,  	address";
$proto0["m_strFrom"] = "FROM employee";
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
	"m_strName" => "id",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "employee";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto8["m_sql"] = "fullname";
$proto8["m_srcTableName"] = "employee";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto10["m_sql"] = "email";
$proto10["m_srcTableName"] = "employee";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "postion",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto12["m_sql"] = "postion";
$proto12["m_srcTableName"] = "employee";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto14["m_sql"] = "gender";
$proto14["m_srcTableName"] = "employee";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "salary",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto16["m_sql"] = "salary";
$proto16["m_srcTableName"] = "employee";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "branch",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto18["m_sql"] = "branch";
$proto18["m_srcTableName"] = "employee";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto20["m_sql"] = "address";
$proto20["m_srcTableName"] = "employee";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "employee";
$proto23["m_srcTableName"] = "employee";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "fullname";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "postion";
$proto23["m_columns"][] = "gender";
$proto23["m_columns"][] = "salary";
$proto23["m_columns"][] = "branch";
$proto23["m_columns"][] = "address";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "employee";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "employee";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="employee";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_employee = createSqlQuery_employee();


	
		;

								

$tdataemployee[".sqlquery"] = $queryData_employee;



$tableEvents["employee"] = new eventsBase;
$tdataemployee[".hasEvents"] = false;

?>