<?php
$tdatabranch = array();
$tdatabranch[".searchableFields"] = array();
$tdatabranch[".ShortName"] = "branch";
$tdatabranch[".OwnerID"] = "";
$tdatabranch[".OriginalTable"] = "branch";


$tdatabranch[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabranch[".originalPagesByType"] = $tdatabranch[".pagesByType"];
$tdatabranch[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabranch[".originalPages"] = $tdatabranch[".pages"];
$tdatabranch[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabranch[".originalDefaultPages"] = $tdatabranch[".defaultPages"];

//	field labels
$fieldLabelsbranch = array();
$fieldToolTipsbranch = array();
$pageTitlesbranch = array();
$placeHoldersbranch = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbranch["English"] = array();
	$fieldToolTipsbranch["English"] = array();
	$placeHoldersbranch["English"] = array();
	$pageTitlesbranch["English"] = array();
	$fieldLabelsbranch["English"]["id"] = "Id";
	$fieldToolTipsbranch["English"]["id"] = "";
	$placeHoldersbranch["English"]["id"] = "";
	$fieldLabelsbranch["English"]["branch_name"] = "Branch Name";
	$fieldToolTipsbranch["English"]["branch_name"] = "";
	$placeHoldersbranch["English"]["branch_name"] = "";
	$fieldLabelsbranch["English"]["brach_Code"] = "Brach Code";
	$fieldToolTipsbranch["English"]["brach_Code"] = "";
	$placeHoldersbranch["English"]["brach_Code"] = "";
	$fieldLabelsbranch["English"]["area"] = "Area";
	$fieldToolTipsbranch["English"]["area"] = "";
	$placeHoldersbranch["English"]["area"] = "";
	if (count($fieldToolTipsbranch["English"]))
		$tdatabranch[".isUseToolTips"] = true;
}


	$tdatabranch[".NCSearch"] = true;



$tdatabranch[".shortTableName"] = "branch";
$tdatabranch[".nSecOptions"] = 0;

$tdatabranch[".mainTableOwnerID"] = "";
$tdatabranch[".entityType"] = 0;
$tdatabranch[".connId"] = "humanres_at_localhost";


$tdatabranch[".strOriginalTableName"] = "branch";

	



$tdatabranch[".showAddInPopup"] = false;

$tdatabranch[".showEditInPopup"] = false;

$tdatabranch[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabranch[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabranch[".listAjax"] = false;
//	temporary
$tdatabranch[".listAjax"] = false;

	$tdatabranch[".audit"] = false;

	$tdatabranch[".locking"] = false;


$pages = $tdatabranch[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabranch[".edit"] = true;
	$tdatabranch[".afterEditAction"] = 1;
	$tdatabranch[".closePopupAfterEdit"] = 1;
	$tdatabranch[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabranch[".add"] = true;
$tdatabranch[".afterAddAction"] = 1;
$tdatabranch[".closePopupAfterAdd"] = 1;
$tdatabranch[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabranch[".list"] = true;
}



$tdatabranch[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabranch[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabranch[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabranch[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabranch[".printFriendly"] = true;
}



$tdatabranch[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabranch[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabranch[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabranch[".isUseAjaxSuggest"] = true;

$tdatabranch[".rowHighlite"] = true;





$tdatabranch[".ajaxCodeSnippetAdded"] = false;

$tdatabranch[".buttonsAdded"] = false;

$tdatabranch[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabranch[".isUseTimeForSearch"] = false;


$tdatabranch[".badgeColor"] = "6DA5C8";


$tdatabranch[".allSearchFields"] = array();
$tdatabranch[".filterFields"] = array();
$tdatabranch[".requiredSearchFields"] = array();

$tdatabranch[".googleLikeFields"] = array();
$tdatabranch[".googleLikeFields"][] = "id";
$tdatabranch[".googleLikeFields"][] = "branch_name";
$tdatabranch[".googleLikeFields"][] = "brach_Code";
$tdatabranch[".googleLikeFields"][] = "area";



$tdatabranch[".tableType"] = "list";

$tdatabranch[".printerPageOrientation"] = 0;
$tdatabranch[".nPrinterPageScale"] = 100;

$tdatabranch[".nPrinterSplitRecords"] = 40;

$tdatabranch[".geocodingEnabled"] = false;










$tdatabranch[".pageSize"] = 20;

$tdatabranch[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabranch[".strOrderBy"] = $tstrOrderBy;

$tdatabranch[".orderindexes"] = array();


$tdatabranch[".sqlHead"] = "SELECT id,  	branch_name,  	brach_Code,  	area";
$tdatabranch[".sqlFrom"] = "FROM branch";
$tdatabranch[".sqlWhereExpr"] = "";
$tdatabranch[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabranch[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabranch[".arrGroupsPerPage"] = $arrGPP;

$tdatabranch[".highlightSearchResults"] = true;

$tableKeysbranch = array();
$tableKeysbranch[] = "id";
$tdatabranch[".Keys"] = $tableKeysbranch;


$tdatabranch[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "branch";
	$fdata["Label"] = GetFieldLabel("branch","id");
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


	$tdatabranch["id"] = $fdata;
		$tdatabranch[".searchableFields"][] = "id";
//	branch_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "branch_name";
	$fdata["GoodName"] = "branch_name";
	$fdata["ownerTable"] = "branch";
	$fdata["Label"] = GetFieldLabel("branch","branch_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "branch_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "branch_name";

	
	
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


	$tdatabranch["branch_name"] = $fdata;
		$tdatabranch[".searchableFields"][] = "branch_name";
//	brach_Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "brach_Code";
	$fdata["GoodName"] = "brach_Code";
	$fdata["ownerTable"] = "branch";
	$fdata["Label"] = GetFieldLabel("branch","brach_Code");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "brach_Code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "brach_Code";

	
	
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


	$tdatabranch["brach_Code"] = $fdata;
		$tdatabranch[".searchableFields"][] = "brach_Code";
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "branch";
	$fdata["Label"] = GetFieldLabel("branch","area");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "area";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "area";

	
	
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


	$tdatabranch["area"] = $fdata;
		$tdatabranch[".searchableFields"][] = "area";


$tables_data["branch"]=&$tdatabranch;
$field_labels["branch"] = &$fieldLabelsbranch;
$fieldToolTips["branch"] = &$fieldToolTipsbranch;
$placeHolders["branch"] = &$placeHoldersbranch;
$page_titles["branch"] = &$pageTitlesbranch;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["branch"] = array();
//	employee
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="employee";
		$detailsParam["dOriginalTable"] = "employee";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "employee";
	$detailsParam["dCaptionTable"] = GetTableCaption("employee");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["branch"][$dIndex] = $detailsParam;

	
		$detailsTablesData["branch"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["branch"][$dIndex]["masterKeys"][]="branch_name";

				$detailsTablesData["branch"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["branch"][$dIndex]["detailKeys"][]="branch";

// tables which are master tables for current table (detail)
$masterTablesData["branch"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_branch()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	branch_name,  	brach_Code,  	area";
$proto0["m_strFrom"] = "FROM branch";
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
	"m_strTable" => "branch",
	"m_srcTableName" => "branch"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "branch";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "branch_name",
	"m_strTable" => "branch",
	"m_srcTableName" => "branch"
));

$proto8["m_sql"] = "branch_name";
$proto8["m_srcTableName"] = "branch";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "brach_Code",
	"m_strTable" => "branch",
	"m_srcTableName" => "branch"
));

$proto10["m_sql"] = "brach_Code";
$proto10["m_srcTableName"] = "branch";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "branch",
	"m_srcTableName" => "branch"
));

$proto12["m_sql"] = "area";
$proto12["m_srcTableName"] = "branch";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "branch";
$proto15["m_srcTableName"] = "branch";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "branch_name";
$proto15["m_columns"][] = "brach_Code";
$proto15["m_columns"][] = "area";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "branch";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "branch";
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
$proto0["m_srcTableName"]="branch";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_branch = createSqlQuery_branch();


	
		;

				

$tdatabranch[".sqlquery"] = $queryData_branch;



$tableEvents["branch"] = new eventsBase;
$tdatabranch[".hasEvents"] = false;

?>