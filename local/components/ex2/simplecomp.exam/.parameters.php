<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentParameters = array(
    "PARAMETERS" => array(
        "PRODUCTS_IBLOCK_ID" => array(
            "NAME" => GetMessage("SIMPLECOMP_EXAM2_CAT_IBLOCK_ID"),
            "TYPE" => "STRING",
        ),
        "NEWS_IBLOCK_ID" => array(
            "NAME" => GetMessage("SIMPLECOMP_EXAM2_NEWS_IBLOCK_ID"),
            "TYPE" => "STRING",
        ),
        "UF_CODE_CATALOG" => array(
            "NAME" => GetMessage("SIMPLECOMP_EXAM2_UF_CATALOG"),
            "TYPE" => "STRING",
        ),
        "CACHE_TIME" => Array("DEFAULT"=>36000000),
    ),
);