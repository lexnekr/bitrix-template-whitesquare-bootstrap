<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CJSCore::Init(array("ajax"));
?>
<script type="text/javascript">
if (!window.oObject || typeof oObject != "object")
	window.oObject = {};

window.<?= $arResult["ID"]?>_CheckThis = document.<?= $arResult["ID"]?>_CheckThis = function(oObj)
{
	try
	{
		if(SuggestLoaded)
		{
			if (typeof window.oObject[oObj.id] != 'object')
				window.oObject[oObj.id] = new JsSuggest(oObj, '<?echo $arResult["ADDITIONAL_VALUES"]?>');
			return;
		}
		else
		{
			setTimeout(<?echo $arResult["ID"]?>_CheckThis(oObj), 10);
		}
	}
	catch(e)
	{
		setTimeout(<?echo $arResult["ID"]?>_CheckThis(oObj), 10);
	}
}
</script>


<IFRAME style="width:0px; height:0px; border: 0px;" src="javascript:''" name="<?echo $arResult["ID"]?>_div_frame" id="<?echo $arResult["ID"]?>_div_frame"></IFRAME>
<label class="sr-only" for="searchInput">Search</label>
<input class="form-control" id="searchInput" type="text" name="q" placeholder="<?=GetMessage("BSF_T_SEARCH_FORM");?>" <?if($arParams["INPUT_SIZE"] > 0):?> size="<?echo $arParams["INPUT_SIZE"]?>"<?endif?>  value="<?echo $arParams["VALUE"]?>" autocomplete="off" onfocus="<?echo $arResult["ID"]?>_CheckThis(this);" />
