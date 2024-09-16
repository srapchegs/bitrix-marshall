<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "MAKING MUSIC WITH MARSHALL");
$APPLICATION->SetTitle("MARSHALL MUSIC");
?>
<main class="main">
    <section class="welcome">
        <div class="container">
        <h1><?$APPLICATION->ShowTitle()?></h1>
            <div class="welcome__row">
                <div class="welcome__text">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH."/includes/section/main_page/content/text.php"
                        )
                    );?>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH."/includes/section/main_page/content/button.php"
                        ),
                    false,
                    Array(
                        'ACTIVE_COMPONENT' => 'Y'
                    )
                    );?>
                </div>
                <div class="welcome__img">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH."/includes/section/main_page/content/picture.php"
                        )
                    );?>
                </div>
            </div>
            <a href="#mailing" class="arrow-down"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/arrow-down.svg" alt="Down"></a>
        </div>
    </section>

    <section id="mailing" class="mailing">
        <div class="container">
            <div class="mailing__wrap">
                <div class="mailing__title">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH."/includes/section/main_page/feedback_block/title.php"
                    )
                );?>
                </div>
                <div class="mailing__desc">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH."/includes/section/main_page/feedback_block/title2.php"
                    )
                );?>
                </div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.feedback", 
                    "feedbacks", 
                    array(
                        "REQUIRED_FIELDS" => array(
                            0 => "EMAIL",
                        ),
                        "USE_CAPTCHA" => "N",
                        "AJAX_MODE" => "Y",
                        "COMPONENT_TEMPLATE" => "feedbacks",
                        "EVENT_MESSAGE_ID" => array(
                        )
                    ),
                    false
                );
                ?>
                <div class="mailing__agree">
                    <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH."/includes/section/main_page/feedback_block/text.php"
                        )
                    );?>
                </div>
            </div>
        </div>
    </section>
</main>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>