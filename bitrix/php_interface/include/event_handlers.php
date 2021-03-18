<?php

\Bitrix\Main\Loader::includeModule('iblock');
use Bitrix\Iblock\Elements\ElementMetatagsTable;

AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", Array("MyClass", "OnBeforeIBlockElementUpdateHandler"));

class MyClass
{
    // создаем обработчик события "OnBeforeIBlockElementUpdate"
    function OnBeforeIBlockElementUpdateHandler(&$arFields)
    {
        global $APPLICATION;
        if ($arFields["IBLOCK_ID"] !== PRODUCTS_IBLOCK_ID || $arFields["ACTIVE"] !== "N") {
            return true;
        }

        $select = array("ID", "NAME", "SHOW_COUNTER", "ACTIVE");
        $filter = array(
            "ID" => $arFields["ID"],
            "IBLOCK_ID" => $arFields["IBLOCK_ID"]
        );
        $iterator = CIBlockElement::GetList(array(), $filter, false, array(), $select);

        $original = $iterator->GetNext();

        if (!$original || $original["ACTIVE"] === $arFields["ACTIVE"]) {
            return true;
        }

        if ($original["SHOW_COUNTER"] > 2) {
            $APPLICATION->throwException("Товар невозможно деактивировать, у него {$original["SHOW_COUNTER"]} просмотров");
            return false;
        }

        return true;
    }
}
$eventManager = \Bitrix\Main\EventManager::getInstance();

$eventManager->addEventHandler("main", "OnEpilog", "pageNotFound");

function pageNotFound() {
    if (defined("ERROR_404") && ERROR_404 == "Y" || CHTTP::GetLastStatus() == "404 Not Found") {
        global $APPLICATION;
        $currentPage = $APPLICATION->GetCurUri();
        CEventLog::Add(array(
            "SEVERITY" => "INFO",
            "AUDIT_TYPE_ID" => "ERROR_404",
            "MODULE_ID" => "main",
            "DESCRIPTION" => $currentPage,
        ));
    }
}

$eventManager->addEventHandler("main", "OnPageStart", "setMetaTags");

function setMetaTags()
{
    global $APPLICATION;
    $currentPage = $APPLICATION->GetCurPage();
    if ($currentPage == '/bitrix/admin/') {
        return;
    }
    if (!Bitrix\Main\Loader::includeModule('iblock')) {
        return;
    }

    $filter = array(
        "IBLOCK_ID" => META_IBLOCK_ID,
        "NAME" => $currentPage,
    );

    $select = array("ID", "PROPERTY_TITLE", "PROPERTY_DESCRIPTION");
    $result = CIBlockElement::GetList(array(), $filter, false, false, $select);

    $element = ElementMetatagsTable::getList([
        'select' => ['ID', 'TITLE_' => 'TITLE', 'DESCRIPTION_' => 'DESCRIPTION'],
        'filter' => ['NAME' => $currentPage],
    ])->fetch();

    if ($element) {;
        $APPLICATION->SetPageProperty('title', $element['TITLE_VALUE']);
        $APPLICATION->SetPageProperty('description', $element['DESCRIPTION_VALUE']);
    }
}
