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
$currentPage=end(array_filter(explode('/', $APPLICATION->GetCurPage())));
$currentPage= strtoupper(str_replace("-", " ", $currentPage));
$iBlockID = 2;
$arFilter = array('IBLOCK_ID' => $iBlockID, 'ACTIVE' => 'Y');
$arSelect = array('ID', 'NAME');
$rsSections = CIBlockSection::GetList(array('SORT' => 'ASC'), $arFilter, false, $arSelect);
$emptySections = array();
while ($arSection = $rsSections->Fetch()) {
    $arElementFilter = array('IBLOCK_ID' => $iBlockID, 'SECTION_ID' => $arSection['ID'], 'ACTIVE' => 'Y');
    $rsElements = CIBlockElement::GetList(array(), $arElementFilter, false, false, array('ID'));
    if (is_object($rsElements)) {
        $elementCount = $rsElements->SelectedRowsCount();
        if ($elementCount === 0) {
            $emptySections[] = $arSection['NAME'];
        }
    }
}
?>

	<section class="concerts">
		<div class="container">
        <?if($currentPage!="CONCERTS"):?>
            <?if(!in_array($currentPage,$emptySections)):?>
                <h2>upcoming concerts</h2>
            <?else:?>
                <h2>no upcoming concerts</h2>
            <?endif;?>
        <?endif;?>
			<div class="concerts__wrap">
				<div class="concerts__list">
					<?foreach($arResult["ITEMS"] as $arItem):
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    $date = strtotime($arItem["DATE_ACTIVE_TO"]);
                    $iDay = idate('d', $date);
                    $iMonth = "";
                    switch (idate('m', $date)) {
                        case 1: $iMonth = "jan" ;break;
                        case 2: $iMonth = "feb" ;break;
                        case 3: $iMonth = "mar" ;break;
                        case 4: $iMonth = "apr" ;break;
                        case 5: $iMonth = "may" ;break;
                        case 6: $iMonth = "jun" ;break;
                        case 7: $iMonth = "jul" ;break;
                        case 8: $iMonth = "aug" ;break;
                        case 9: $iMonth = "sep" ;break;
                        case 10: $iMonth = "oct" ;break;
                        case 11: $iMonth = "nov" ;break;
                        case 12: $iMonth = "dec" ;break;

                    }
                    $res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
                    $arNameSections = $res->GetNext();
                    if(($currentPage == $arNameSections['NAME']) && !in_array($currentPage,$emptySections)):?>                  
                        <a class="concerts__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <div class="concerts__img-wrap">
                                    <div class="concerts__img" style="background-image: url(<?= $arItem["PREVIEW_PICTURE"]['SRC']?>);"></div>
                                </div>                                    
                                <div class="concerts__body">
                                    <div class="concerts__date">
                                        <div class="concerts__date-num">
                                            <?= $iDay?>
                                        </div>
                                        <div class="concerts__date-month">
                                        <?= $iMonth?>
                                        </div>
                                    </div>
                                    <div class="concerts__title">
                                        <div class="concerts__name">
                                            <?= $arNameSections['NAME']?>
                                        </div>
                                        <div class="concerts__location">
                                            <?= $arItem["NAME"];?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    <?endif;?>
                    <?if($currentPage=="CONCERTS"):?>
                        <a class="concerts__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <div class="concerts__img-wrap">
                                    <div class="concerts__img" style="background-image: url(<?= $arItem["PREVIEW_PICTURE"]['SRC']?>);"></div>
                                </div>                                    
                                <div class="concerts__body">
                                    <div class="concerts__date">
                                        <div class="concerts__date-num">
                                            <?= $iDay?>
                                        </div>
                                        <div class="concerts__date-month">
                                        <?= $iMonth?>
                                        </div>
                                    </div>
                                    <div class="concerts__title">
                                        <div class="concerts__name">
                                            <?= $arNameSections['NAME']?>
                                        </div>
                                        <div class="concerts__location">
                                            <?= $arItem["NAME"];?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    <?endif;?>
					<?endforeach;?>
				</div>
			</div>
		</div>
    </section>
