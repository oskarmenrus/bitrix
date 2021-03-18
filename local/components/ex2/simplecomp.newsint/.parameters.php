<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
    "PARAMETERS" => array(
        "NEWSINT_IBLOCK_ID" => array(
            "NAME" => GetMessage("NEWSINT_IBLOCK_ID"),
            "TYPE" => "STRING",
            "DEFAULT" => "1"
        ),
        "NEWSINT_IBLOCK_PROPERTY_CODE" => array(
            "NAME" => GetMessage("NEWSINT_IBLOCK_PROPERTY_CODE"),
            "TYPE" => "STRING",
            "DEFAULT" => "AUTHOR"
        ),
        "NEWSINT_USERS_PROPERTY_CODE" => array(
            "NAME" => GetMessage("NEWSINT_USERS_PROPERTY_CODE"),
            "TYPE" => "STRING",
            "DEFAULT" => "UF_AUTHOR_TYPE"
        ),
        "CACHE_TIME"  =>  array("DEFAULT"=>36000000),
    ),
);
