<?php
$tdataloan = array();
$tdataloan[".searchableFields"] = array();
$tdataloan[".ShortName"] = "loan";
$tdataloan[".OwnerID"] = "";
$tdataloan[".OriginalTable"] = "loan";


$tdataloan[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataloan[".originalPagesByType"] = $tdataloan[".pagesByType"];
$tdataloan[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataloan[".originalPages"] = $tdataloan[".pages"];
$tdataloan[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataloan[".originalDefaultPages"] = $tdataloan[".defaultPages"];

//	field labels
$fieldLabelsloan = array();
$fieldToolTipsloan = array();
$pageTitlesloan = array();
$placeHoldersloan = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsloan["English"] = array();
	$fieldToolTipsloan["English"] = array();
	$placeHoldersloan["English"] = array();
	$pageTitlesloan["English"] = array();
	$fieldLabelsloan["English"]["id"] = "Id";
	$fieldToolTipsloan["English"]["id"] = "";
	$placeHoldersloan["English"]["id"] = "";
	$fieldLabelsloan["English"]["fullname"] = "Fullname";
	$fieldToolTipsloan["English"]["fullname"] = "";
	$placeHoldersloan["English"]["fullname"] = "";
	$fieldLabelsloan["English"]["branch"] = "Branch";
	$fieldToolTipsloan["English"]["branch"] = "";
	$placeHoldersloan["English"]["branch"] = "";
	$fieldLabelsloan["English"]["loan_date"] = "Loan Date";
	$fieldToolTipsloan["English"]["loan_date"] = "";
	$placeHoldersloan["English"]["loan_date"] = "";
	$fieldLabelsloan["English"]["laon_for_months"] = "Laon For Months";
	$fieldToolTipsloan["English"]["laon_for_months"] = "";
	$placeHoldersloan["English"]["laon_for_months"] = "";
	$fieldLabelsloan["English"]["loan_amount"] = "Loan Amount";
	$fieldToolTipsloan["English"]["loan_amount"] = "";
	$placeHoldersloan["English"]["loan_amount"] = "";
	if (count($fieldToolTipsloan["English"]))
		$tdataloan[".isUseToolTips"] = true;
}


	$tdataloan[".NCSearch"] = true;



$tdataloan[".shortTableName"] = "loan";
$tdataloan[".nSecOptions"] = 0;

$tdataloan[".mainTableOwnerID"] = "";
$tdataloan[".entityType"] = 0;
$tdataloan[".connId"] = "humanres_at_localhost";


$tdataloan[".strOriginalTableName"] = "loan";

	



$tdataloan[".showAddInPopup"] = false;

$tdataloan[".showEditInPopup"] = false;

$tdataloan[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataloan[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataloan[".listAjax"] = false;
//	temporary
$tdataloan[".listAjax"] = false;

	$tdataloan[".audit"] = false;

	$tdataloan[".locking"] = false;


$pages = $tdataloan[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataloan[".edit"] = true;
	$tdataloan[".afterEditAction"] = 1;
	$tdataloan[".closePopupAfterEdit"] = 1;
	$tdataloan[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataloan[".add"] = true;
$tdataloan[".afterAddAction"] = 1;
$tdataloan[".closePopupAfterAdd"] = 1;
$tdataloan[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataloan[".list"] = true;
}



$tdataloan[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataloan[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataloan[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataloan[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataloan[".printFriendly"] = true;
}



$tdataloan[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataloan[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataloan[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataloan[".isUseAjaxSuggest"] = true;

$tdataloan[".rowHighlite"] = true;





$tdataloan[".ajaxCodeSnippetAdded"] = false;

$tdataloan[".buttonsAdded"] = false;

$tdataloan[".addPageEvents"] = false;

// use timepicker for search panel
$tdataloan[".isUseTimeForSearch"] = false;


$tdataloan[".badgeColor"] = "778899";


$tdataloan[".allSearchFields"] = array();
$tdataloan[".filterFields"] = array();
$tdataloan[".requiredSearchFields"] = array();

$tdataloan[".googleLikeFields"] = array();
$tdataloan[".googleLikeFields"][] = "id";
$tdataloan[".googleLikeFields"][] = "fullname";
$tdataloan[".googleLikeFields"][] = "branch";
$tdataloan[".googleLikeFields"][] = "loan_date";
$tdataloan[".googleLikeFields"][] = "laon_for_months";
$tdataloan[".googleLikeFields"][] = "loan_amount";



$tdataloan[".tableType"] = "list";

$tdataloan[".printerPageOrientation"] = 0;
$tdataloan[".nPrinterPageScale"] = 100;

$tdataloan[".nPrinterSplitRecords"] = 40;

$tdataloan[".geocodingEnabled"] = false;










$tdataloan[".pageSize"] = 20;

$tdataloan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataloan[".strOrderBy"] = $tstrOrderBy;

$tdataloan[".orderindexes"] = array();


$tdataloan[".sqlHead"] = "SELECT id,  	fullname,  	branch,  	loan_date,  	laon_for_months,  	loan_amount";
$tdataloan[".sqlFrom"] = "FROM loan";
$tdataloan[".sqlWhereExpr"] = "";
$tdataloan[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataloan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataloan[".arrGroupsPerPage"] = $arrGPP;

$tdataloan[".highlightSearchResults"] = true;

$tableKeysloan = array();
$tableKeysloan[] = "id";
$tdataloan[".Keys"] = $tableKeysloan;


$tdataloan[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","id");
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


	$tdataloan["id"] = $fdata;
		$tdataloan[".searchableFields"][] = "id";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","fullname");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "employee";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"branch", 'lookupF'=>"branch");
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


	$tdataloan["fullname"] = $fdata;
		$tdataloan[".searchableFields"][] = "fullname";
//	branch
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "branch";
	$fdata["GoodName"] = "branch";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","branch");
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


	$tdataloan["branch"] = $fdata;
		$tdataloan[".searchableFields"][] = "branch";
//	loan_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "loan_date";
	$fdata["GoodName"] = "loan_date";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","loan_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "loan_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "loan_date";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdataloan["loan_date"] = $fdata;
		$tdataloan[".searchableFields"][] = "loan_date";
//	laon_for_months
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "laon_for_months";
	$fdata["GoodName"] = "laon_for_months";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","laon_for_months");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "laon_for_months";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "laon_for_months";

	
	
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


	$tdataloan["laon_for_months"] = $fdata;
		$tdataloan[".searchableFields"][] = "laon_for_months";
//	loan_amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "loan_amount";
	$fdata["GoodName"] = "loan_amount";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","loan_amount");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "loan_amount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "loan_amount";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdataloan["loan_amount"] = $fdata;
		$tdataloan[".searchableFields"][] = "loan_amount";


$tables_data["loan"]=&$tdataloan;
$field_labels["loan"] = &$fieldLabelsloan;
$fieldToolTips["loan"] = &$fieldToolTipsloan;
$placeHolders["loan"] = &$placeHoldersloan;
$page_titles["loan"] = &$pageTitlesloan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["loan"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["loan"] = array();



	
				$strOriginalDetailsTable="employee";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="employee";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "employee";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["loan"][0] = $masterParams;
				$masterTablesData["loan"][0]["masterKeys"] = array();
	$masterTablesData["loan"][0]["masterKeys"][]="fullname";
				$masterTablesData["loan"][0]["masterKeys"][]="branch";
				$masterTablesData["loan"][0]["detailKeys"] = array();
	$masterTablesData["loan"][0]["detailKeys"][]="fullname";
				$masterTablesData["loan"][0]["detailKeys"][]="branch";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_loan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fullname,  	branch,  	loan_date,  	laon_for_months,  	loan_amount";
$proto0["m_strFrom"] = "FROM loan";
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
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "loan";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto8["m_sql"] = "fullname";
$proto8["m_srcTableName"] = "loan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "branch",
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto10["m_sql"] = "branch";
$proto10["m_srcTableName"] = "loan";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "loan_date",
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto12["m_sql"] = "loan_date";
$proto12["m_srcTableName"] = "loan";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "laon_for_months",
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto14["m_sql"] = "laon_for_months";
$proto14["m_srcTableName"] = "loan";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "loan_amount",
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto16["m_sql"] = "loan_amount";
$proto16["m_srcTableName"] = "loan";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "loan";
$proto19["m_srcTableName"] = "loan";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "fullname";
$proto19["m_columns"][] = "branch";
$proto19["m_columns"][] = "loan_date";
$proto19["m_columns"][] = "laon_for_months";
$proto19["m_columns"][] = "loan_amount";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "loan";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "loan";
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
$proto0["m_srcTableName"]="loan";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_loan = createSqlQuery_loan();


	
		;

						

$tdataloan[".sqlquery"] = $queryData_loan;



$tableEvents["loan"] = new eventsBase;
$tdataloan[".hasEvents"] = false;

?>