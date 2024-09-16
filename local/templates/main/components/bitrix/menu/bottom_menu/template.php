<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)): ?>
    <div class="footer__col">
        <div class="footer__menu">
            <ul class="footer__menu-list">
                <?php
                $rowCounter = 0;
                foreach ($arResult as $arItem):
                    if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) {
                        continue;
                    }
                    ?>
                    <?php if ($rowCounter >= 4):?>
            </ul>
        </div>
    </div>
    <div class="footer__col">
        <div class="footer__menu">
            <ul class="footer__menu-list">
                <?php $rowCounter = 0;?>
					<?php endif; ?>
						<?php if ($arItem["SELECTED"]): ?>
							<li><a href="<?= $arItem["LINK"] ?>" class="footer__menu-link footer_white"><?= $arItem["TEXT"] ?></a></li>
						<?php elseif ($APPLICATION->GetCurPage() == "/"): ?>
							<li><a href="<?= $arItem["LINK"] ?>" class="footer__menu-link footer_white"><?= $arItem["TEXT"] ?></a></li>
						<?php else: ?>
							<li><a href="<?= $arItem["LINK"] ?>" class="footer__menu-link"><?= $arItem["TEXT"] ?></a></li>
						<?php endif; ?>
						<?php $rowCounter++; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
