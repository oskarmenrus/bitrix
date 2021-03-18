<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\SystemException,
    Bitrix\Main\Loader,
    Bitrix\Main\Localization\Loc,
    Bitrix\Main\Diag\Debug,
    Bitrix\Main\Type\DateTime,
    Bitrix\Iblock;

if(!Loader::includeModule("iblock"))
{
    ShowError(Loc::getMessage("SIMPLECOMP_EXAM2_IBLOCK_MODULE_NONE"));
    return;
}

class Exam extends CBitrixComponent
{
    /**
     * @param $arParams
     * @return array
     */
    public function onPrepareComponentParams($arParams){
        try {
            if (!intval($arParams["NEWS_IBLOCK_ID"])) {
                throw new SystemException(Loc::getMessage("SIMPLECOMP_EXAM2_EXCEPTION", array("PARAMS" => "NEWS_IBLOCK_ID")));
            }else if (!intval($arParams["PRODUCTS_IBLOCK_ID"])) {
                throw new SystemException(Loc::getMessage("SIMPLECOMP_EXAM2_EXCEPTION", array("PARAMS" => "PRODUCTS_IBLOCK_ID")));
            }else if (!strlen($arParams["UF_CODE_CATALOG"])) {
                throw new SystemException(Loc::getMessage("SIMPLECOMP_EXAM2_EXCEPTION", array("PARAMS" => "UF_CODE_CATALOG")));
            }
        }catch (SystemException $exception) {
            ShowError($exception->getMessage());
            die();
        }
        return array(
            "PRODUCTS_IBLOCK_ID" => $arParams["PRODUCTS_IBLOCK_ID"],
            "NEWS_IBLOCK_ID" => $arParams["NEWS_IBLOCK_ID"],
            "UF_CODE_CATALOG" => $arParams["UF_CODE_CATALOG"],
            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
            "CACHE_TIME" => isset($arParams["CACHE_TIME"]) ?$arParams["CACHE_TIME"]: 36000000,
        );
    }

    /**
     * @return array|mixed
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    public function executeComponent()
    {
        if($this->startResultCache())
        {
            $this->arResult = self::getMixed($this->arParams["PRODUCTS_IBLOCK_ID"], $this->arParams["UF_CODE_CATALOG"], $this->arParams["NEWS_IBLOCK_ID"]);
            GLOBAL $APPLICATION;
            $title = Loc::getMessage("SIMPLECOMP_EXAM2_TITLE", array("COUNT" => self::getCount($this->arParams["PRODUCTS_IBLOCK_ID"])));
            $APPLICATION->SetDirProperty("title",  $title);
            $this->includeComponentTemplate();
        }
        return $this->arResult;
    }

    /**
     * @param $IB_ID
     * @param $UF_CODE
     * @param $IB_NEWS_ID
     * @return array
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    public function getMixed($IB_ID, $UF_CODE, $IB_NEWS_ID){
        $arResult = [];
        if(intval($IB_ID) && strlen($UF_CODE)){
            $entity = Iblock\Model\Section::compileEntityByIblock($IB_ID);
            $params = array(
                "filter" => array("IBLOCK_ID" => $IB_ID, "ACTIVE" => "Y"),
                "select" => array("ID", "NAME", $UF_CODE),
            );
            $section = $entity::getList($params);
            while ($sectionOb = $section->fetch()) {
                $dbItem = Iblock\ElementTable::getList(array(
                    "select" => array("*", "DETAIL_PAGE_URL_RAW" => "IBLOCK.DETAIL_PAGE_URL"),
                    "filter" => array("IBLOCK_ID" => $IB_NEWS_ID, "ACTIVE" => "Y", "ID"=>$sectionOb[$UF_CODE])
                ));
                while ($arItem = $dbItem->fetch()) {
                    $dbItemCatalog = Iblock\ElementTable::getList(array(
                        "select" => array("*", "ACTIVE_FROM", "DETAIL_PAGE_URL_RAW" => "IBLOCK.DETAIL_PAGE_URL"),
                        "filter" => array(
                            "IBLOCK_ID" => $IB_ID,
                            "IBLOCK_SECTION_ID"=>$sectionOb["ID"],
                            "ACTIVE" => "Y"
                        )
                    ));
                    $dbItemCatalog->getSelectedRowsCount();
                    while ($arItemCatalog = $dbItemCatalog->fetch()) {
                        //Debug::dump($arItemCatalog);
                        $arResult[$arItem['ID']]["CATEGORY"][$sectionOb["ID"]] = $sectionOb["NAME"];
                        $arResult[$arItem['ID']]["LIST"][$arItemCatalog["ID"]]["NAME"] = $arItemCatalog["NAME"];
                        $arResult[$arItem['ID']]["LIST"][$arItemCatalog["ID"]]["PRICE"] = self::getProp($IB_ID, $arItemCatalog['ID'], "PRICE");
                        $arResult[$arItem['ID']]["LIST"][$arItemCatalog["ID"]]["ARTNUMBER"] = self::getProp($IB_ID, $arItemCatalog['ID'], "ARTNUMBER");
                        $arResult[$arItem['ID']]["LIST"][$arItemCatalog["ID"]]["MATERIAL"] = self::getProp($IB_ID, $arItemCatalog['ID'], "MATERIAL");
                        $arResult[$arItem['ID']]["LIST"][$arItemCatalog["ID"]]['DETAIL_PAGE_URL'] = CIBlock::ReplaceDetailUrl($arItemCatalog["DETAIL_PAGE_URL_RAW"], $arItemCatalog, true, false);
                    }
                    $activeFrom = new DateTime($arItem["ACTIVE_FROM"]);
                    $arResult[$arItem['ID']]["NAME"] = $arItem["NAME"];
                    $arResult[$arItem['ID']]["ACTIVE_FROM"] = $activeFrom->format("d.m.Y");
                    $arResult[$arItem['ID']]['DETAIL_PAGE_URL'] = CIBlock::ReplaceDetailUrl($arItem["DETAIL_PAGE_URL_RAW"], $arItem, true, false);
                }
            }
        }

        return $arResult;
    }

    /**
     * @param $IB_ID
     * @param $EL_ID
     * @param $PROP
     * @return mixed
     */
    public function getProp($IB_ID, $EL_ID , $PROP){
        $dbProperty = \CIBlockElement::getProperty($IB_ID, $EL_ID, array("sort", "asc"), array("CODE" => $PROP));
        while($arProperty = $dbProperty->GetNext()) {
            if ($arProperty['VALUE']) {
                return $arProperty['VALUE'];
            }
        }
    }

    /**
     * @param $IB_ID
     * @return int
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    public function getCount($IB_ID){
        $dbItemCatalog = Iblock\ElementTable::getList(array(
            "select" => array("ID"),
            "filter" => array(
                "IBLOCK_ID" => $IB_ID,
                "ACTIVE" => "Y"
            )
        ));
        return $dbItemCatalog->getSelectedRowsCount();
    }
}