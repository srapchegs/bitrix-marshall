<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?if (!empty($arResult["ID"])):?>
	<section class="banner">
		<div class="container">
			<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
		</div>
	</section>
	<section class="artist-body">
		<div class="container">
			<h1><?=$arResult["NAME"]?></h1>
			<div class="artist-body__row">
				<div class="artist-body__text">
					<?=$arResult["DETAIL_TEXT"]?>
				</div>
				<div class="artist-body__social">
					<ul>
					<?if($arResult["PROPERTIES"]["facebook"]["VALUE"] != ""):?>
						<li>
							<a href="<?=$arResult["PROPERTIES"]["facebook"]["VALUE"]?>">
							<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/facebook-ico.svg" alt="Facebook logo">
							</a>
						</li>
					<?endif;?>
					<?if($arResult["PROPERTIES"]["twitter"]["VALUE"] != ""):?>
						<li>
							<a href="<?=$arResult["PROPERTIES"]["twitter"]["VALUE"]?>">
							<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/twitter-ico.svg" alt="Twitter logo">
							</a>
						</li>
					<?endif;?>
					<?if($arResult["PROPERTIES"]["spotify"]["VALUE"] != ""):?>
						<li>
							<a href="<?=$arResult["PROPERTIES"]["spotify"]["VALUE"]?>">
							<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/spotify-ico.svg" alt="Spotify logo">
							</a>
						</li>
					<?endif;?>
					<?if($arResult["PROPERTIES"]["instagram"]["VALUE"] != ""):?>

						<li>
							<a href="<?=$arResult["PROPERTIES"]["instagram"]["VALUE"]?>">
							<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/instagram-ico.svg" alt="Instagram logo">
							</a>
						</li>
					<?endif;?>
					</ul>
				</div>
			</div>
		</div>
	</section>
<?endif;?>