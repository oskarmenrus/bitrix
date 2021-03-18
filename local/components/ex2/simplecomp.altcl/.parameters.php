<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentParameters = array(
    "PARAMETERS" => array(
        "PRODUCT_IBLOCK_ID" => array(
            "NAME" => GetMessage("PRODUCT_IBLOCK_ID"),
            "TYPE" => "STRING",
            "DEFAULT" => "2"
        ),
        "ALTCL_IBLOCK_ID" => array(
            "NAME" => GetMessage("ALTCL_IBLOCK_ID"),
            "TYPE" => "STRING",
            "DEFAULT" => "8"
        ),
        "PROPERTY_ALTCL_CODE" => array(
            "NAME" => GetMessage("PROPERTY_ALTCL_CODE"),
            "TYPE" => "STRING",
            "DEFAULT" => "ALTCL"
        ),
        "CACHE_TIME"  =>  array("DEFAULT"=>36000000),
        "CACHE_FILTER" => array(
            "PARENT" => "CACHE_SETTINGS",
            "NAME" => GetMessage("IBLOCK_CACHE_FILTER"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "N",
        ),
        "CACHE_GROUPS" => array(
            "PARENT" => "CACHE_SETTINGS",
            "NAME" => GetMessage("CP_BNL_CACHE_GROUPS"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "Y",
        ),
    ),
);
