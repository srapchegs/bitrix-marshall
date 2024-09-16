<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
				<footer class="footer">
				<div class="container">
					<div class="footer__wrap">
						<div class="footer__row">
							<div class="footer__col">
								<div class="footer__logo">
									<a href="/">
										<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.svg" alt="">
									</a>
								</div>
								<div class="footer__copyright">
									©2020 zound industries. <br>
									all rights reserved. org. nr 5567574610
								</div>
							</div>
							<?$APPLICATION->IncludeComponent(
								"bitrix:menu",
								"bottom_menu",
								Array(
									"ALLOW_MULTI_SELECT" => "N",
									"CHILD_MENU_TYPE" => "left",
									"DELAY" => "N",
									"MAX_LEVEL" => "1",
									"MENU_CACHE_GET_VARS" => array(""),
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_TYPE" => "N",
									"MENU_CACHE_USE_GROUPS" => "N",
									"ROOT_MENU_TYPE" => "bottom",
									"USE_EXT" => "N"
								)
							);?>
							<div class="footer__col">
								<div class="footer__social">
									<ul class="footer__social-list">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"AREA_FILE_SHOW" => "file",
											"PATH" => SITE_TEMPLATE_PATH."/includes/footer/footer_link.php"
										)
									);?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
        </div>
    </body>
</html>