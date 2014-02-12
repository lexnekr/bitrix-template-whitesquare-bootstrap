<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("About us");?>








<div class="jumbotron"> 					<blockquote> 						 
    <p> 							&ldquo;Quisque in enim velit, at dignissim est. nulla ul corper, dolor ac pellentesque 							placerat, justo tellus gravida erat, vel porttitor libero erat.&rdquo; 						</p>
   						<small>John Doe, Lorem Ipsum</small> 					</blockquote> 				</div>
 				 
<p> 					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non neque ac sem accumsan rhoncus ut 					ut turpis. In hac habitasse platea dictumst. Proin eget nisi erat, et feugiat arcu. Duis semper 					porttitor lectus, ac pharetra erat imperdiet nec. Morbi interdum felis nulla. Aenean eros orci, 					pellentesque sed egestas vitae, auctor aliquam nisi. Nulla nec libero eget sem rutrum iaculis. 					Quisque in enim velit, at dignissim est. Nulla ullamcorper, dolor ac pellentesque placerat, justo 					tellus gravida erat, vel porttitor libero erat condimentum metus. Donec sodales aliquam orci id 					suscipit. Proin sed risus sit amet massa ultrices laoreet quis a erat. Aliquam et metus id erat 					vulputate egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus 					mus. 				</p>
 				 
<p> 					Donec vel nisl nibh. Aenean quam tortor, tempus sit amet mattis dapibus, egestas tempor dui. Duis 					vestibulum imperdiet risus pretium pretium. Nunc vitae porta ligula. Vestibulum sit amet nulla quam. 					Aenean lacinia, ante vitae sodales sagittis, leo felis bibendum neque, mattis sagittis neque urna 					vel magna. Sed at sem vitae lorem blandit feugiat. 				</p>
 				 
<p> 					Donec vel orci purus, ut ornare orci. Aenean rutrum pellentesque quam. Quisque gravida adipiscing 					augue, eget commodo augue egestas varius. Integer volutpat, tellus porta tincidunt sodales, lacus 					est tempus odio, fringilla blandit tortor lectus ut sem. Pellentesque nec sem lacus, sit amet 					consequat neque. Etiam varius urna quis arcu cursus in consectetur dui tincidunt. Quisque arcu orci, 					lacinia eget pretium vel, iaculis pellentesque nibh. Etiam cursus lacus eget neque viverra 					vestibulum. Aliquam erat volutpat. Duis pulvinar tellus ut urna facilisis mollis. Maecenas ac 					pharetra dui. Pellentesque neque ante, luctus eget congue eget, rhoncus vel mauris. Duis nisi magna, 					aliquet a convallis non, venenatis at nisl. Nunc at quam eu magna malesuada dignissim. Duis bibendum 					iaculis felis, eu venenatis risus sodales non. In ligula mi, faucibus eu tristique sed, vulputate 					rutrum dolor. 				</p>
 				 
<div class="row"> 					 
  <div class="col-md-12"> 						<img src="<?=SITE_TEMPLATE_PATH?>/images/about-1.png" class="thumbnail"  /> 					</div>
 					 
  <div class="col-md-12"> 						<img src="<?=SITE_TEMPLATE_PATH?>/images/about-2.png" class="thumbnail"  /> 					</div>
 				</div>
<p> 					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non neque ac sem accumsan rhoncus ut 					ut turpis. In hac habitasse platea dictumst. Proin eget nisi erat, et feugiat arcu. Duis semper 					porttitor lectus, ac pharetra erat imperdiet nec. Morbi interdum felis nulla. Aenean eros orci, 					pellentesque sed egestas vitae, auctor aliquam nisi. Nulla nec libero eget sem rutrum iaculis. 					Quisque in enim velit, at dignissim est. Nulla ullamcorper, dolor ac pellentesque placerat, justo 					tellus gravida erat, vel porttitor libero erat condimentum metus. Donec sodales aliquam orci id 					suscipit. Proin sed risus sit amet massa ultrices laoreet quis a erat. Aliquam et metus id erat 					vulputate egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus 					mus. 				</p>
 				 










<?$APPLICATION->IncludeComponent("bitrix:news.list", "team-list", array(
	"IBLOCK_TYPE" => "Content",
	"IBLOCK_ID" => "TEAM",
	"NEWS_COUNT" => "20",
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"FILTER_NAME" => "",
	"FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "POSITION",
		2 => "",
	),
	"CHECK_DATES" => "Y",
	"DETAIL_URL" => "",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"PREVIEW_TRUNCATE_LEN" => "",
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
	"SET_TITLE" => "N",
	"SET_STATUS_404" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
	"ADD_SECTIONS_CHAIN" => "Y",
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
	"PARENT_SECTION" => "",
	"PARENT_SECTION_CODE" => "",
	"INCLUDE_SUBSECTIONS" => "Y",
	"PAGER_TEMPLATE" => ".default",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Новости",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"DISPLAY_DATE" => "Y",
	"DISPLAY_NAME" => "Y",
	"DISPLAY_PICTURE" => "Y",
	"DISPLAY_PREVIEW_TEXT" => "Y",
	"LIST_NAME" => "Our Team",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>