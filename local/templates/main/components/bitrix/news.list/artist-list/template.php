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
<?if(!empty($arResult["ITEMS"])):?>
	<div class="artists__list">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="artists__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="artists__photo">
					<img src="<?= $arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
				</div>
				<div class="artists__body">
					<div class="artists__body-wrap">
						<div class="artists__name">
							<?= $arItem['NAME']?>
						</div>
						<div class="artists__desc">
							<?= $arItem['PREVIEW_TEXT']?>
						</div>
						<div class="artists__more">
							<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="empty-btn">more</a>
						</div>
					</div>
				</div>
			</div>
		<?endforeach;?>
	</div>
<?endif;?>