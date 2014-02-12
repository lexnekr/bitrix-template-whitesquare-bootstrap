

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>
			</section>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-8 twitter">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include/twitter-bottom-line.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
				</div>
				<div class="col-md-4 sitemap">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include/sitemap.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
					<div class="row">
<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", Array(
	"ROOT_MENU_TYPE" => "bottomL",
	"MENU_CACHE_TYPE" => "N",
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
<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", Array(
	"ROOT_MENU_TYPE" => "bottomR",
	"MENU_CACHE_TYPE" => "N",
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
					</div>
				</div>
				<div class="col-md-4 social">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include/social-networks.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
				</div>
				<div class="col-md-8 footer-logo">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include/bottom-logo.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include/copyright.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
				</div>
			</div>
		</div>
	</footer>
  </body>
</html>