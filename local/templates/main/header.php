<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<?$APPLICATION->ShowHead();?>
        <meta charset="UTF-8">
		<link href='<?=SITE_TEMPLATE_PATH?>/assets/css/style.css' rel='stylesheet' type='text/css' >
		<title><?$APPLICATION->ShowTitle();?></title>
    </head>
    <body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
        <div class="wrapper">
            <header class="header">
				<div class="container">
					<div class="header__row">
						<div class="header__logo">
							<a href="/">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_TEMPLATE_PATH . "/includes/header/header_logo.php"
									)
								);?>
							</a>
						</div>
						<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"top_menu",
							Array(
								"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "left",
								"DELAY" => "N",
								"MAX_LEVEL" => "1",
								"MENU_CACHE_GET_VARS" => array(""),
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "N",
								"MENU_CACHE_USE_GROUPS" => "N",
								"ROOT_MENU_TYPE" => "top",
								"USE_EXT" => "N"
							)
						);?>
					</div>
				</div>
			</header>
            	
						