<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Loader,	Bitrix\Iblock;


if (!isset($arParams["CACHE_TIME"]))
{
    $arParams["CACHE_TIME"] = 36000000;
}


if(!Loader::includeModule("iblock"))
{
    ShowError(GetMessage("NEWSINT_IBLOCK_MODULE_NONE"));
    return;
}

if ($this->startResultCache(false, array($USER->GetUserGroupArray())))
{
    if (!Loader::includeModule("iblock"))
    {
        $this->abortResultCache();
        ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
        return;
    }

    if(!$iblockNew = (int) $arParams['NEWSINT_IBLOCK_ID']) return false;
    if(!$iblockProp = (int) $arParams['NEWSINT_IBLOCK_PROPERTY_CODE']) return false;
    if(!$userProp = (int) $arParams['NEWSINT_USERS_PROPERTY_CODE']) return false;

    $this->includeComponentTemplate();
}else
{
    $this->abortResultCache();
}
