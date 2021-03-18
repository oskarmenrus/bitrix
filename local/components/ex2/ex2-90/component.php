<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Loader;
use Bitrix\Main\Diag\Debug;

if (!isset($arParams["CACHE_TIME"])) {
    $arParams["CACHE_TIME"] = 36000000;
}

$arParams["IBLOCK_ID"] = (int)$arParams["IBLOCK_ID"];
if (!($arParams["IBLOCK_ID"] > 0)) {
    ShowError("не указан ИБлок");
    return;
}

if ($this->startResultCache(false)) {
    if (!Loader::includeModule("iblock")) {
        $this->abortResultCache();
        ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
        return;
    }

    $arResult["CLASSIFIER"] = array();
    $arResult["CLASSIFIER_IDs"] = array();


    $rsSection = \Bitrix\Iblock\SectionTable::getList(
        array(
            'order'  => array('SORT' => 'ASC'),
            'filter' => array('IBLOCK_ID' => 8, 'ACTIVE' => "Y"),
            'select' => array('ID', 'IBLOCK_ID', 'NAME'),
        )
    );

    while ($arElement = $rsSection->fetch()) {
        $arResult["CLASSIFIER"][$arElement["ID"]] = $arElement;
        $arResult["CLASSIFIER_IDs"][] = $arElement["ID"];
    }

    $arSelectElems = array(
        "ID",
        "IBLOCK_ID",
        "IBLOCK_SECTION_ID",
        "NAME",
    );

    $arFilterElems = array(
        "IBLOCK_ID"      => $arParams["IBLOCK_ID"],
        "ACTIVE"         => "Y",
        "PROPERTY_" => $arResult["CLASSIFIER_IDs"],
    );

    $arSortElems = array(
        "SORT" => "ASC"
    );

    $arResult["ELEMENTS"] = array();
    $rsElement = CIBlockElement::GetList($arSortElems, $arFilterElems, false, false, $arSelectElems);

    while ($rsElem = $rsElement->GetNextElement()) {
        $arEl = $rsElem->GetFields();
        $arEl["PROP"] = $rsElem->GetProperties();
        foreach ($arEl["PROP"]["ALTCL"]["VALUE"] as $val) {
            $arResult["CLASSIFIER"][$val]["ELEMENTS_ID"][] = $arEl["ID"];
        }

        $arResult["ELEMENTS"][$arEl["ID"]] = $arEl;
    }

    $arResult["COUNT_ELEM"] = count($arResult["ELEMENTS"]);
    $this->SetResultCacheKeys(
        array(
            "COUNT_ELEM",
        )
    );
    $this->includeComponentTemplate();
} else {
    $this->abortResultCache();
}

$APPLICATION->SetTitle("Элементов - " . $arResult["COUNT_ELEM"]);