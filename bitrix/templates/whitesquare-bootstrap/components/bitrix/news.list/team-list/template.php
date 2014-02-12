<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$i=0;?>
<h2><?=$arParams['LIST_NAME']?></h2>

<div class="team">
	<div class="row">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<div class="col col-md-4 <?if($i > 0){?>col-md-offset-1<?} ?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" class="thumbnail">
			<div class="caption">
			<h3><?echo $arItem["NAME"]?></h3>
			<P><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?></P>
			</div>
		</div>

<?
$i++;
if ($i >= 5) {
   $i = 0;
?>
   </div><div class="row">
<?
}
?>
<?endforeach;?>

<?
if ($i > 0) {
?>
   </div>
<?
}
?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
