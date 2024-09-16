<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

if (empty($arResult))
    $str = "";
else {
    $itemSize = count($arResult);
    $str = '';
    for ($index = 0; $index < $itemSize; $index++) {
        $title = htmlspecialcharsEx($arResult[$index]["TITLE"]);
        if($arResult[$index]["LINK"] !== "" && $index != $itemSize - 1)
		{
            $str .= '<a href="' . $arResult[$index]["LINK"] . '" class="breadcrumbs__item">' . $title . '</a>&nbsp;';
        }
		else
		{
            $str .= '<div class="breadcrumbs__item breadcrumbs__item-active">' . $title . '</div>';
        }
    }
}
return $str;
?>
