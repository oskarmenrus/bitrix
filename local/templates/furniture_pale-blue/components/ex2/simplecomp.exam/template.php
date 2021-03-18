<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc,
    Bitrix\Main\Diag\Debug;
?>
<p><b><?=Loc::getMessage("SIMPLECOMP_EXAM2_CAT_TITLE")?></b></p>
<ul>
    <?foreach ($arResult as $arItem):?>
        <li>
            <p><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a> <?=$arItem["ACTIVE_FROM"]?> (<?=implode(', ', $arItem["CATEGORY"])?>)</p>
            <ul>
                <?foreach ($arItem["LIST"] as $arList):?>
                    <li><a href="<?=$arList["DETAIL_PAGE_URL"]?>"><?=$arList["NAME"]?> - <?=$arList["PRICE"]?> - <?=$arList["MATERIAL"]?> - <?=$arList["ARTNUMBER"]?></a></li>
                <?endforeach;?>
            </ul>
        </li>
    <?endforeach;?>
</ul>