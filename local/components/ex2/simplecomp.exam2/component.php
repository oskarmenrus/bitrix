<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Loader,	Bitrix\Iblock;


if (!isset($arParams["CACHE_TIME"]))
{
    $arParams["CACHE_TIME"] = 36000000;
}


if(!Loader::includeModule("iblock"))
{
    ShowError(GetMessage("SIMPLECOMP_EXAM2_IBLOCK_MODULE_NONE"));
    return;
}

//$arSelect = Array("NAME");
//$arFilter = Array("IBLOCK_ID"=>IntVal($arParams["FIRMS_IBLOCK_ID"]), "ID" => 36);
//$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
//while($ob = $res->GetNextElement())
//{
//    $arFields = $ob->GetFields();
//    dump($arFields);
//}

if ($this->startResultCache(false, array($USER->GetGroups())))
{
    if (!Loader::includeModule("iblock"))
    {
        $this->abortResultCache();
        ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
        return;
    }


    //Вытаскиваем классификатор
    $arSelectСlassifier = array (
        "ID",
        "IBLOCK_ID",
        "NAME",
    );

    $arFilterСlassifier = array (
        "IBLOCK_ID" => IntVal($arParams["FIRMS_IBLOCK_ID"]),
        "CHECK_PERMISSIONS" => $arParams["CACHE_GROUPS"],
        "ACTIVE" => "Y",
    );

    $arResult["CLASSIFIER"] = array();
    $rsElement_link = CIBlockElement::GetList(
        false,
        $arFilterСlassifier,
        false,
        false,
        $arSelectСlassifier
    );
    while($arElement = $rsElement_link->GetNext())
    {
        $arResult["CLASSIFIER_ID"][] = $arElement["ID"];
        $arResult["CLASSIFIER"][$arElement["ID"]] = $arElement;
    }
    $arResult["COUNT_CLASS"] = count($arResult["CLASSIFIER"]);

    $arSelectElems = array (
        "ID",
        "IBLOCK_ID",
        "IBLOCK_SECTION_ID",
        "NAME",
        "PREVIEW_TEXT",
    );

    $arFilterElems = array (
        "IBLOCK_ID" => IntVal($arParams["PRODUCT_IBLOCK_ID"]),
        "CHECK_PERMISSIONS" => $arParams["CACHE_GROUPS"],
        "PROPERTY_".$arParams["PROPERTY_FIRMS_CODE"] => $arResult["CLASSIFIER_ID"],
        "ACTIVE" => "Y",
    );

    $arSortElems = array (
        "SORT" => "ASC"
    );


    $arResult["ELEMENTS"] = array();

    $rsElement = CIBlockElement::GetList($arSortElems, $arFilterElems, false, false, $arSelectElems);
    while($rsElem = $rsElement->GetNextElement())
    {
        $arEl = $rsElem->GetFields();
        $arEl["PROP"] = $rsElem->GetProperties();
        foreach($arEl["PROP"]["FIRM"]["VALUE"] as $val)
        {
            $arResult["CLASSIFIER"][$val]["ELEMENTS_ID"][] = $arEl["ID"];
        }

        $arResult["ELEMENTS"][$arEl["ID"]] = $arEl;
    }
    $this->SetResultCacheKeys(array("COUNT_CLASS"));
    $this->includeComponentTemplate();
}else
{
    $this->abortResultCache();
}
$APPLICATION->SetTitle(GetMessage("COUNT_FIRMS_PRODUCT").$arResult["COUNT_CLASS"]);