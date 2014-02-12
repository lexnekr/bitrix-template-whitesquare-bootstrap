<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<form name="search" action="<?=$arResult["FORM_ACTION"]?>" method="get" class="form-inline form-search pull-right">
<div class="input-group">
	<?$APPLICATION->IncludeComponent(
		"bitrix:search.suggest.input",
		"top",
		array(
			"NAME" => "q",
			"VALUE" => "",
			"INPUT_SIZE" => 15,
			"DROPDOWN_SIZE" => 10,
		),
		$component, array("HIDE_ICONS" => "Y")
	);?><div class="input-group-btn"><input name="q" class="btn btn-primary" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" /></div>
</div>
</form>