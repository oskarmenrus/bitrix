<?

global $APPLICATION;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Тест getList");

use Bitrix\Main\Loader;
use Bitrix\Main\Diag\Debug;

Loader::includeModule('iblock'); // Подключение модуля инфоблоков
//Debug::dump();

$arResult = [];

$arSelectElems = array(
    "ID",
    "IBLOCK_ID",
    "IBLOCK_SECTION_ID",
    "NAME",
);

$arFilterElems = array(
    "IBLOCK_ID"      => 2,
    "ACTIVE"         => "Y",
    "PROPERTY_ALTCL" => $arResult["CLASSIFIER_IDs"],
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
    Debug::dump($arEl);

}

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
