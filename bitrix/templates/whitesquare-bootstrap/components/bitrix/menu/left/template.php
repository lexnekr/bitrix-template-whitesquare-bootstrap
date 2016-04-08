<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="list-group submenu">

<?

	<?if($arItem["SELECTED"]):?>
		<li class="list-group-item active"><?=$arItem["TEXT"]?></li>
	<?else:?>
		<li class="list-group-item"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>
