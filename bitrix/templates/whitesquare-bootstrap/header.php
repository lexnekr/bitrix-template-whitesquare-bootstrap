<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<html>
  <head>
<title><? $APPLICATION->ShowTitle(false); ?></title>
    <?$APPLICATION->ShowMeta("keywords")?>
    <?$APPLICATION->ShowMeta("description")?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?
$APPLICATION->ShowHead();
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/styles.css');
$APPLICATION->SetAdditionalCSS('http://fonts.googleapis.com/css?family=Oswald:400,300');
?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?$APPLICATION->ShowPanel();?>
	<div class="wrapper container">
		<header>

<?$APPLICATION->IncludeComponent(
	"bitrix:search.form",
	"top",
	Array(
		"PAGE" => "#SITE_DIR#search/index.php"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include/top-logo.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
		</header>
<?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
	"ROOT_MENU_TYPE" => "top",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => "",
	"MAX_LEVEL" => "1",	
	"CHILD_MENU_TYPE" => "left",	
	"USE_EXT" => "N",	
	"DELAY" => "N",	
	"ALLOW_MULTI_SELECT" => "N",
	),
	false
);?>
		<div class="heading">
			<h1><?$APPLICATION->ShowTitle()?></h1>
		</div>
		<div class="row">
			<aside class="col-md-7">
<?$APPLICATION->IncludeComponent("bitrix:menu", "left", Array(
	"ROOT_MENU_TYPE" => "left",	
	"MENU_CACHE_TYPE" => "A",	
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",	
	"MENU_CACHE_GET_VARS" => "",
	"MAX_LEVEL" => "1",	
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "N",
	"DELAY" => "N",	
	"ALLOW_MULTI_SELECT" => "N",
	),
	false
);?>

<?$APPLICATION->IncludeComponent("bitrix:map.google.view", "sidebar-map", array(
	"INIT_MAP_TYPE" => "ROADMAP",
	"MAP_DATA" => "a:4:{s:10:\"google_lat\";d:55.7383;s:10:\"google_lon\";d:37.5946;s:12:\"google_scale\";i:13;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:4:\"TEXT\";s:10:\"Test point\";s:3:\"LON\";d:37.593626976013184;s:3:\"LAT\";d:55.736905609230966;}}}",
	"MAP_WIDTH" => "235",
	"MAP_HEIGHT" => "180",
	"CONTROLS" => array(
	),
	"OPTIONS" => array(
		0 => "ENABLE_SCROLL_ZOOM",
		1 => "ENABLE_DBLCLICK_ZOOM",
		2 => "ENABLE_DRAGGING",
		3 => "ENABLE_KEYBOARD",
	),
	"MAP_ID" => "",
	"SIDEBAR_MAP_NAME" => "Our offices"
	),
	false
);?>
			</aside>
			<section class="col-md-17">

				