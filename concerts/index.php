<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Upcoming concerts");
$APPLICATION->SetTitle("Upcoming concerts");
?>
<main class="main">
	<section class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs__list">
				<?$APPLICATION->IncludeComponent(
					"bitrix:breadcrumb",
					"top_navigate",
					Array(
						"COMPONENT_TEMPLATE" => "top_navigate",
						"PATH" => "",
						"SITE_ID" => "s1",
						"START_FROM" => "0"
					)
				);
				?>
			</div>
			<br>
			<h2><?$APPLICATION->ShowTitle()?></h2>
		</div>
 </section>

	<?$APPLICATION->IncludeComponent(
		"bitrix:news",
		"concerts",
		Array(
			"ADD_ELEMENT_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "N",
			"BROWSER_TITLE" => "-",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "N",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "N",
			"CHECK_DATES" => "Y",
			"DETAIL_ACTIVE_DATE_FORMAT" => "",
			"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
			"DETAIL_DISPLAY_TOP_PAGER" => "N",
			"DETAIL_FIELD_CODE" => array("CODE","NAME","PREVIEW_PICTURE","DATE_ACTIVE_TO",""),
			"DETAIL_PAGER_SHOW_ALL" => "N",
			"DETAIL_PAGER_TEMPLATE" => "",
			"DETAIL_PAGER_TITLE" => "Страница",
			"DETAIL_PROPERTY_CODE" => array("",""),
			"DETAIL_SET_CANONICAL_URL" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "N",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
			"IBLOCK_ID" => "2",
			"IBLOCK_TYPE" => "content",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
			"LIST_FIELD_CODE" => array("NAME","PREVIEW_PICTURE","DATE_ACTIVE_TO","IBLOCK_CODE",""),
			"LIST_PROPERTY_CODE" => array("",""),
			"MESSAGE_404" => "",
			"META_DESCRIPTION" => "-",
			"META_KEYWORDS" => "-",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PREVIEW_TRUNCATE_LEN" => "",
			"SEF_FOLDER" => "/concerts/",
			"SEF_MODE" => "Y",
			"SEF_URL_TEMPLATES" => Array("detail"=>"#ELEMENT_ID#/","news"=>"","section"=>"#SECTION_CODE#/"),
			"SET_LAST_MODIFIED" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_TO",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
			"USE_CATEGORIES" => "N",
			"USE_FILTER" => "Y",
			"USE_PERMISSIONS" => "N",
			"USE_RATING" => "N",
			"USE_REVIEW" => "N",
			"USE_RSS" => "N",
			"USE_SEARCH" => "N",
			"USE_SHARE" => "N"
		)
	);?>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>