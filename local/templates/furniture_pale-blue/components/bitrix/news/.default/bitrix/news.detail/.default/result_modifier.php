<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

dump($arParams);
if (is_set($arParams["CANONICAL_IBLOCK_ID"])) {
    $select = array(
        'ID',
        'IBLOCK_ID',
        'NAME',
        'PROPERTY_NEWS',
    );
    $filter = array(
        "IBLOCK_ID" => $arParams["CANONICAL_IBLOCK_ID"],
        "PROPERTY_NEWS" => $arResult["ID"]
    );

    $iterator = CIBlockElement::GetList(array(), $filter, false, array(), $select);
    if ($result = $iterator->GetNext()) {
        $arResult["CANONICAL_LINK"] = $result["NAME"];
        $this->getComponent()->setResultCacheKeys(["CANONICAL_LINK"]);
    }
}
