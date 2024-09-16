<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<nav class="header__nav with-active">
        <ul class="header__nav-list ">  
			<?foreach($arResult as $arItem):
				if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
					continue;?>
				<?if($arItem["SELECTED"]):?>
					<li><a  href="<?=$arItem["LINK"]?>" class="header__nav-link active"><?=$arItem["TEXT"]?></a></li>
				<?elseif($APPLICATION->GetCurPage()=="/"):?>
					<li><a href="<?=$arItem["LINK"]?>"  class="header__nav-link active"><?=$arItem["TEXT"]?></a></li>
				<?else:?>
					<li><a href="<?=$arItem["LINK"]?>"  class="header__nav-link"><?=$arItem["TEXT"]?></a></li>
				<?endif?>
			<?endforeach?>
		</ul>
</nav>
<?endif?>