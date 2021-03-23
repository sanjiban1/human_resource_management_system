<?php
$tdatanotice = array();
$tdatanotice[".searchableFields"] = array();
$tdatanotice[".ShortName"] = "notice";
$tdatanotice[".OwnerID"] = "";
$tdatanotice[".OriginalTable"] = "notice";


$tdatanotice[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanotice[".originalPagesByType"] = $tdatanotice[".pagesByType"];
$tdatanotice[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanotice[".originalPages"] = $tdatanotice[".pages"];
$tdatanotice[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanotice[".originalDefaultPages"] = $tdatanotice[".defaultPages"];

//	field labels
$fieldLabelsnotice = array();
$fieldToolTipsnotice = array();
$pageTitlesnotice = array();
$placeHoldersnotice = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnotice["English"] = array();
	$fieldToolTipsnotice["English"] = array();
	$placeHoldersnotice["English"] = array();
	$pageTitlesnotice["English"] = array();
	$fieldLabelsnotice["English"]["ID0"] = "ID0";
	$fieldToolTipsnotice["English"]["ID0"] = "";
	$placeHoldersnotice["English"]["ID0"] = "";
	$fieldLabelsnotice["English"]["id"] = "Id";
	$fieldToolTipsnotice["English"]["id"] = "";
	$placeHoldersnotice["English"]["id"] = "";
	$fieldLabelsnotice["English"]["title"] = "Title";
	$fieldToolTipsnotice["English"]["title"] = "";
	$placeHoldersnotice["English"]["title"] = "";
	$fieldLabelsnotice["English"]["message"] = "Message";
	$fieldToolTipsnotice["English"]["message"] = "";
	$placeHoldersnotice["English"]["message"] = "";
	$fieldLabelsnotice["English"]["document"] = "Document";
	$fieldToolTipsnotice["English"]["document"] = "";
	$placeHoldersnotice["English"]["document"] = "";
	if (count($fieldToolTipsnotice["English"]))
		$tdatanotice[".isUseToolTips"] = true;
}


	$tdatanotice[".NCSearch"] = true;



$tdatanotice[".shortTableName"] = "notice";
$tdatanotice[".nSecOptions"] = 0;

$tdatanotice[".mainTableOwnerID"] = "";
$tdatanotice[".entityType"] = 0;
$tdatanotice[".connId"] = "humanres_at_localhost";


$tdatanotice[".strOriginalTableName"] = "notice";

	



$tdatanotice[".showAddInPopup"] = false;

$tdatanotice[".showEditInPopup"] = false;

$tdatanotice[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanotice[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanotice[".listAjax"] = false;
//	temporary
$tdatanotice[".listAjax"] = false;

	$tdatanotice[".audit"] = false;

	$tdatanotice[".locking"] = false;


$pages = $tdatanotice[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanotice[".edit"] = true;
	$tdatanotice[".afterEditAction"] = 1;
	$tdatanotice[".closePopupAfterEdit"] = 1;
	$tdatanotice[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanotice[".add"] = true;
$tdatanotice[".afterAddAction"] = 1;
$tdatanotice[".closePopupAfterAdd"] = 1;
$tdatanotice[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanotice[".list"] = true;
}



$tdatanotice[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanotice[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanotice[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanotice[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanotice[".printFriendly"] = true;
}



$tdatanotice[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanotice[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanotice[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanotice[".isUseAjaxSuggest"] = true;

$tdatanotice[".rowHighlite"] = true;





$tdatanotice[".ajaxCodeSnippetAdded"] = false;

$tdatanotice[".buttonsAdded"] = false;

$tdatanotice[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanotice[".isUseTimeForSearch"] = false;


$tdatanotice[".badgeColor"] = "E8926F";


$tdatanotice[".allSearchFields"] = array();
$tdatanotice[".filterFields"] = array();
$tdatanotice[".requiredSearchFields"] = array();

$tdatanotice[".googleLikeFields"] = array();
$tdatanotice[".googleLikeFields"][] = "ID0";
$tdatanotice[".googleLikeFields"][] = "id";
$tdatanotice[".googleLikeFields"][] = "title";
$tdatanotice[".googleLikeFields"][] = "message";



$tdatanotice[".tableType"] = "list";

$tdatanotice[".printerPageOrientation"] = 0;
$tdatanotice[".nPrinterPageScale"] = 100;

$tdatanotice[".nPrinterSplitRecords"] = 40;

$tdatanotice[".geocodingEnabled"] = false;










$tdatanotice[".pageSize"] = 20;

$tdatanotice[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanotice[".strOrderBy"] = $tstrOrderBy;

$tdatanotice[".orderindexes"] = array();


$tdatanotice[".sqlHead"] = "SELECT ID0,  	id,  	title,  	message,  	document";
$tdatanotice[".sqlFrom"] = "FROM notice";
$tdatanotice[".sqlWhereExpr"] = "";
$tdatanotice[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanotice[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanotice[".arrGroupsPerPage"] = $arrGPP;

$tdatanotice[".highlightSearchResults"] = true;

$tableKeysnotice = array();
$tableKeysnotice[] = "ID0";
$tdatanotice[".Keys"] = $tableKeysnotice;


$tdatanotice[".hideMobileList"] = array();




//	ID0
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID0";
	$fdata["GoodName"] = "ID0";
	$fdata["ownerTable"] = "notice";
	$fdata["Label"] = GetFieldLabel("notice","ID0");
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


	$tdatanotice["ID0"] = $fdata;
		$tdatanotice[".searchableFields"][] = "ID0";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "notice";
	$fdata["Label"] = GetFieldLabel("notice","id");
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


	$tdatanotice["id"] = $fdata;
		$tdatanotice[".searchableFields"][] = "id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "notice";
	$fdata["Label"] = GetFieldLabel("notice","title");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "title";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
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


	$tdatanotice["title"] = $fdata;
		$tdatanotice[".searchableFields"][] = "title";
//	message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "message";
	$fdata["GoodName"] = "message";
	$fdata["ownerTable"] = "notice";
	$fdata["Label"] = GetFieldLabel("notice","message");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "message";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "message";

	
	
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
			$edata["EditParams"].= " maxlength=400";

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


	$tdatanotice["message"] = $fdata;
		$tdatanotice[".searchableFields"][] = "message";
//	document
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "document";
	$fdata["GoodName"] = "document";
	$fdata["ownerTable"] = "notice";
	$fdata["Label"] = GetFieldLabel("notice","document");
	$fdata["FieldType"] = 128;

	
	
	
			

		$fdata["strField"] = "document";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database file");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatanotice["document"] = $fdata;
	

$tables_data["notice"]=&$tdatanotice;
$field_labels["notice"] = &$fieldLabelsnotice;
$fieldToolTips["notice"] = &$fieldToolTipsnotice;
$placeHolders["notice"] = &$placeHoldersnotice;
$page_titles["notice"] = &$pageTitlesnotice;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["notice"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["notice"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_notice()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID0,  	id,  	title,  	message,  	document";
$proto0["m_strFrom"] = "FROM notice";
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
	"m_strTable" => "notice",
	"m_srcTableName" => "notice"
));

$proto6["m_sql"] = "ID0";
$proto6["m_srcTableName"] = "notice";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "notice",
	"m_srcTableName" => "notice"
));

$proto8["m_sql"] = "id";
$proto8["m_srcTableName"] = "notice";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "notice",
	"m_srcTableName" => "notice"
));

$proto10["m_sql"] = "title";
$proto10["m_srcTableName"] = "notice";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "message",
	"m_strTable" => "notice",
	"m_srcTableName" => "notice"
));

$proto12["m_sql"] = "message";
$proto12["m_srcTableName"] = "notice";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "document",
	"m_strTable" => "notice",
	"m_srcTableName" => "notice"
));

$proto14["m_sql"] = "document";
$proto14["m_srcTableName"] = "notice";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "notice";
$proto17["m_srcTableName"] = "notice";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID0";
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "title";
$proto17["m_columns"][] = "message";
$proto17["m_columns"][] = "document";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "notice";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "notice";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="notice";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_notice = createSqlQuery_notice();


	
		;

					

$tdatanotice[".sqlquery"] = $queryData_notice;



$tableEvents["notice"] = new eventsBase;
$tdatanotice[".hasEvents"] = false;

?>