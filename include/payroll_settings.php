<?php
$tdatapayroll = array();
$tdatapayroll[".searchableFields"] = array();
$tdatapayroll[".ShortName"] = "payroll";
$tdatapayroll[".OwnerID"] = "";
$tdatapayroll[".OriginalTable"] = "payroll";


$tdatapayroll[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapayroll[".originalPagesByType"] = $tdatapayroll[".pagesByType"];
$tdatapayroll[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapayroll[".originalPages"] = $tdatapayroll[".pages"];
$tdatapayroll[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapayroll[".originalDefaultPages"] = $tdatapayroll[".defaultPages"];

//	field labels
$fieldLabelspayroll = array();
$fieldToolTipspayroll = array();
$pageTitlespayroll = array();
$placeHolderspayroll = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayroll["English"] = array();
	$fieldToolTipspayroll["English"] = array();
	$placeHolderspayroll["English"] = array();
	$pageTitlespayroll["English"] = array();
	$fieldLabelspayroll["English"]["id"] = "Id";
	$fieldToolTipspayroll["English"]["id"] = "";
	$placeHolderspayroll["English"]["id"] = "";
	$fieldLabelspayroll["English"]["name"] = "Name";
	$fieldToolTipspayroll["English"]["name"] = "";
	$placeHolderspayroll["English"]["name"] = "";
	$fieldLabelspayroll["English"]["salary"] = "Salary";
	$fieldToolTipspayroll["English"]["salary"] = "";
	$placeHolderspayroll["English"]["salary"] = "";
	$fieldLabelspayroll["English"]["pay_date"] = "Pay Date";
	$fieldToolTipspayroll["English"]["pay_date"] = "";
	$placeHolderspayroll["English"]["pay_date"] = "";
	if (count($fieldToolTipspayroll["English"]))
		$tdatapayroll[".isUseToolTips"] = true;
}


	$tdatapayroll[".NCSearch"] = true;



$tdatapayroll[".shortTableName"] = "payroll";
$tdatapayroll[".nSecOptions"] = 0;

$tdatapayroll[".mainTableOwnerID"] = "";
$tdatapayroll[".entityType"] = 0;
$tdatapayroll[".connId"] = "humanres_at_localhost";


$tdatapayroll[".strOriginalTableName"] = "payroll";

	



$tdatapayroll[".showAddInPopup"] = false;

$tdatapayroll[".showEditInPopup"] = false;

$tdatapayroll[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayroll[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayroll[".listAjax"] = false;
//	temporary
$tdatapayroll[".listAjax"] = false;

	$tdatapayroll[".audit"] = false;

	$tdatapayroll[".locking"] = false;


$pages = $tdatapayroll[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapayroll[".edit"] = true;
	$tdatapayroll[".afterEditAction"] = 1;
	$tdatapayroll[".closePopupAfterEdit"] = 1;
	$tdatapayroll[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapayroll[".add"] = true;
$tdatapayroll[".afterAddAction"] = 1;
$tdatapayroll[".closePopupAfterAdd"] = 1;
$tdatapayroll[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapayroll[".list"] = true;
}



$tdatapayroll[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapayroll[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapayroll[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapayroll[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapayroll[".printFriendly"] = true;
}



$tdatapayroll[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapayroll[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapayroll[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapayroll[".isUseAjaxSuggest"] = true;

$tdatapayroll[".rowHighlite"] = true;





$tdatapayroll[".ajaxCodeSnippetAdded"] = false;

$tdatapayroll[".buttonsAdded"] = false;

$tdatapayroll[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayroll[".isUseTimeForSearch"] = false;


$tdatapayroll[".badgeColor"] = "e67349";


$tdatapayroll[".allSearchFields"] = array();
$tdatapayroll[".filterFields"] = array();
$tdatapayroll[".requiredSearchFields"] = array();

$tdatapayroll[".googleLikeFields"] = array();
$tdatapayroll[".googleLikeFields"][] = "id";
$tdatapayroll[".googleLikeFields"][] = "name";
$tdatapayroll[".googleLikeFields"][] = "salary";
$tdatapayroll[".googleLikeFields"][] = "pay_date";



$tdatapayroll[".tableType"] = "list";

$tdatapayroll[".printerPageOrientation"] = 0;
$tdatapayroll[".nPrinterPageScale"] = 100;

$tdatapayroll[".nPrinterSplitRecords"] = 40;

$tdatapayroll[".geocodingEnabled"] = false;










$tdatapayroll[".pageSize"] = 20;

$tdatapayroll[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayroll[".strOrderBy"] = $tstrOrderBy;

$tdatapayroll[".orderindexes"] = array();


$tdatapayroll[".sqlHead"] = "SELECT id,  	name,  	salary,  	pay_date";
$tdatapayroll[".sqlFrom"] = "FROM payroll";
$tdatapayroll[".sqlWhereExpr"] = "";
$tdatapayroll[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayroll[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayroll[".arrGroupsPerPage"] = $arrGPP;

$tdatapayroll[".highlightSearchResults"] = true;

$tableKeyspayroll = array();
$tableKeyspayroll[] = "id";
$tdatapayroll[".Keys"] = $tableKeyspayroll;


$tdatapayroll[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","id");
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


	$tdatapayroll["id"] = $fdata;
		$tdatapayroll[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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
		$edata["autoCompleteFields"][] = array('masterF'=>"salary", 'lookupF'=>"salary");
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


	$tdatapayroll["name"] = $fdata;
		$tdatapayroll[".searchableFields"][] = "name";
//	salary
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "salary";
	$fdata["GoodName"] = "salary";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","salary");
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


	$tdatapayroll["salary"] = $fdata;
		$tdatapayroll[".searchableFields"][] = "salary";
//	pay_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pay_date";
	$fdata["GoodName"] = "pay_date";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","pay_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "pay_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pay_date";

	
	
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


	$tdatapayroll["pay_date"] = $fdata;
		$tdatapayroll[".searchableFields"][] = "pay_date";


$tables_data["payroll"]=&$tdatapayroll;
$field_labels["payroll"] = &$fieldLabelspayroll;
$fieldToolTips["payroll"] = &$fieldToolTipspayroll;
$placeHolders["payroll"] = &$placeHolderspayroll;
$page_titles["payroll"] = &$pageTitlespayroll;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payroll"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["payroll"] = array();



	
				$strOriginalDetailsTable="employee";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="employee";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "employee";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["payroll"][0] = $masterParams;
				$masterTablesData["payroll"][0]["masterKeys"] = array();
	$masterTablesData["payroll"][0]["masterKeys"][]="fullname";
				$masterTablesData["payroll"][0]["masterKeys"][]="salary";
				$masterTablesData["payroll"][0]["detailKeys"] = array();
	$masterTablesData["payroll"][0]["detailKeys"][]="name";
				$masterTablesData["payroll"][0]["detailKeys"][]="salary";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_payroll()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	salary,  	pay_date";
$proto0["m_strFrom"] = "FROM payroll";
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
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "payroll";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "payroll";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "salary",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto10["m_sql"] = "salary";
$proto10["m_srcTableName"] = "payroll";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "pay_date",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto12["m_sql"] = "pay_date";
$proto12["m_srcTableName"] = "payroll";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "payroll";
$proto15["m_srcTableName"] = "payroll";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "salary";
$proto15["m_columns"][] = "pay_date";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "payroll";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "payroll";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="payroll";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payroll = createSqlQuery_payroll();


	
		;

				

$tdatapayroll[".sqlquery"] = $queryData_payroll;



$tableEvents["payroll"] = new eventsBase;
$tdatapayroll[".hasEvents"] = false;

?>