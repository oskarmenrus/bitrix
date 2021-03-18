<?
$MESS["CC_BSC1_ERROR_AUTHORIZE"] = "Ошибка авторизации. Неверное имя пользователя или пароль.";
$MESS["CC_BSC1_PERMISSION_DENIED"] = "У Вас нет прав для обмена. Проверьте настройки компонента.";
$MESS["CC_BSC1_ERROR_MODULE"] = "Модуль Интернет магазина не установлен.";
$MESS["CC_BSC1_ERROR_HTTP_READ"] = "Ошибка чтения HTTP данных.";
$MESS["CC_BSC1_ERROR_UNKNOWN_COMMAND"] = "Неизвестная команда.";
$MESS["CC_BSC1_NO_ORDERS_IN_IMPORT"] = "В CML не найдены заказы.";
$MESS["CC_BSC1_ERROR_DIRECTORY"] = "Ошибочный параметр - временный каталог.";
$MESS["CC_BSC1_ERROR_FILE_WRITE"] = "Ошибка записи в файл #FILE_NAME#.";
$MESS["CC_BSC1_ERROR_FILE_OPEN"] = "Ошибка открытия файла #FILE_NAME# для записи.";
$MESS["CC_BSC1_ERROR_INIT"] = "Ошибка инициализации временного каталога.";
$MESS["CC_BSC1_ERROR_EXCHANGE_1C_ORDER_DEDUCTED"] = "При обмене с 1С из документа заказа получен статус полной отгрузки заказа. При этом от 1С не были получены все документы отгрузок в статусе Отгружен. Код ошибки - ";
$MESS["CC_BSC1_ZIP_ERROR"] = "Ошибка распаковки архива.";
$MESS["CC_BSC1_EMPTY_CML"] = "Файл для импорта пуст.";
$MESS["CC_BSC1_PRODUCT_NOT_FOUND"] = "Товар в каталоге сайта не найден для заказа №";
$MESS["CC_BSC1_UNZIP_ERROR"] = "Распаковка на сайте невозможна. Отправьте не запакованный файл.";
$MESS["CC_BSC1_FINAL_NOT_EDIT"] = "Заказ №#ID# не может быть изменен (находится в финальном статусе, оплачен или разрешена доставка).";
$MESS["CC_BSC1_ORDER_NOT_FOUND"] = "Заказ №#ID# на сайте не найден.";
$MESS["CC_BSC1_ORDER_ERROR_1"] = "Для документа со стороны 1С не передан уникальный идентификатор - 'Ид'. Документ не может быть обработан. ";
$MESS["CC_BSC1_ORDER_ERROR_2"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Ошибка обработки заказа ";
$MESS["CC_BSC1_ORDER_ERROR_3"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Произошла ошибка обновления заказа: ";
$MESS["CC_BSC1_ORDER_ERROR_4"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#.";
$MESS["CC_BSC1_ORDER_ERROR_5"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Валюта заказа #CURRENCY_FROM# отличается от валюты сайта #CURRENCY_TO#";
$MESS["CC_BSC1_PAYMENT_ERROR_1"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Оплата №#ID# для заказа №#ORDER_ID# не может быть изменена т.к. документ основание имеет финальный статус";
$MESS["CC_BSC1_PAYMENT_ERROR_2"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Оплата №#ID# для заказа №#ORDER_ID# на сайте не найдена";
$MESS["CC_BSC1_PAYMENT_ERROR_3"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Оплата №#ID# не связана с заказом основанием №#ORDER_ID#";
$MESS["CC_BSC1_PAYMENT_ERROR_4"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Заказ основание №#ORDER_ID# для оплаты №#ID# на сайте не найден";
$MESS["CC_BSC1_PAYMENT_ERROR_5"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Заказ основание для оплаты на сайте не найден";
$MESS["CC_BSC1_PAYMENT_ERROR_6"] = "Для документа со стороны 1С не передан уникальный идентификатор - 'Ид'. Документ не может быть обработан. ";
$MESS["CC_BSC1_PAYMENT_ERROR_7"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Ошибка выбора платежной системы по умолчанию";
$MESS["CC_BSC1_PAYMENT_ERROR_8"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Ошибка загрузки заказ основания №#ORDER_ID#";
$MESS["CC_BSC1_PAYMENT_ERROR_9"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Ошибка удаления. Оплата для заказа №#ORDER_ID# на сайте не найдена";
$MESS["CC_BSC1_PAYMENT_ERROR_10"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Оплата для заказа №#ORDER_ID# не может быть создана/изменена т.к. документ основание имеет финальный статус";
$MESS["CC_BSC1_PAYMENT_ERROR_11"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Оплата для заказа №#ORDER_ID# не может быть создана/изменена т.к. документ основание отменен";
$MESS["CC_BSC1_SHIPMENT_ERROR_1"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Доставка №#ID# для заказа основания №#ORDER_ID# не может быть изменена т.к. документ основание имеет финальный статус";
$MESS["CC_BSC1_SHIPMENT_ERROR_2"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Доставка №#ID# для заказа основания №#ORDER_ID# не может быть изменена т.к. документ отгрузки находиться в статусе Отгружен";
$MESS["CC_BSC1_SHIPMENT_ERROR_14"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Доставка №#ID# для заказа основания №#ORDER_ID# не может быть изменена т.к. отгрузка в системе имеет признак системной";
$MESS["CC_BSC1_SHIPMENT_ERROR_3"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Доставка №#ID# для заказа основания №#ORDER_ID# на сайте не найдена";
$MESS["CC_BSC1_SHIPMENT_ERROR_4"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Заказ основание для доставки №#ID# на сайте не найден";
$MESS["CC_BSC1_SHIPMENT_ERROR_5"] = "Для документа с Ид - #XML_1C_DOCUMENT_ID# отгрузка не создана. Создание новых отгрузок не разрешено.";
$MESS["CC_BSC1_SHIPMENT_ERROR_6"] = "Для документа со стороны 1С не передан уникальный идентификатор - 'Ид'. Документ не может быть обработан.";
$MESS["CC_BSC1_SHIPMENT_ERROR_7"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Ошибка создания заказа";
$MESS["CC_BSC1_SHIPMENT_ERROR_8"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. В документе №#ID# в отгрузке указано не допустимое количество товара к отгрузке";
$MESS["CC_BSC1_SHIPMENT_ERROR_9"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Для продукта изменилась цена. Данный функционал временно не поддерживается";
$MESS["CC_BSC1_SHIPMENT_ERROR_10"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. При изменении количества в позиции отгрузки №#ID# произошла ошибка:";
$MESS["CC_BSC1_SHIPMENT_ERROR_11"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. В отгрузке №#ID# указано не допустимое количество товара к отгрузке";
$MESS["CC_BSC1_SHIPMENT_ERROR_12"] = "При изменении количества в позиции отгрузки №#ID# произошла ошибка: ";
$MESS["CC_BSC1_SHIPMENT_ERROR_13"] = "При изменении количества в позиции отгрузки №#ID# произошла ошибка:";
$MESS["CC_BSC1_SHIPMENT_ERROR_15"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Ошибка загрузки заказ основания №#ORDER_ID#";
$MESS["CC_BSC1_SHIPMENT_ERROR_16"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Ошибка удаления. Отгрузка для заказа №#ORDER_ID# на сайте не найдена";
$MESS["CC_BSC1_SHIPMENT_ERROR_17"] = "Для документа с Ид - #XML_1C_DOCUMENT_ID# отгрузка не создана. Для новой отгрузке установлена пометка на удаление";
$MESS["CC_BSC1_SHIPMENT_ERROR_18"] = "Документ с Ид - #XML_1C_DOCUMENT_ID#. Доставка для заказа основания №#ORDER_ID# не может быть создана/изменена т.к. документ основание имеет финальный статус";
$MESS["CRM_PACKAGE_NOT_FOUND_ORDER"] = "Импорт счета и его документов контейнера не возможен по причине отсутствия документа счета в выгрузке";
$MESS["CRM_PACKAGE_NOT_FOUND_PAYMENT"] = "Счет с Ид - #XML_1C_DOCUMENT_ID#. Импорт счета и его документов контейнера не возможен по причине отсутствия информации по оплате. Проверьте настройки модуля 1С. Оплата должна выгружаться";
$MESS["CRM_PACKAGE_PARTIAL_SHIPMENT_NOT_SUPPORTED"] = "Счет с Ид - #XML_1C_DOCUMENT_ID#. Импорт счета и его документов контейнера не возможен т.к. отгрузка у счета должна быть одна. Обработка частичных отгрузок для счета не поддерживается.";
$MESS["CRM_PACKAGE_DELIVERY_SERVICE_ITEM"] = "Доставка";
$MESS["CRM_PACKAGE_DELIVERY_SERVICE_ITEM_MEASURE_796"] = "Штука";
$MESS["CC_BSC1_PS_ON_STATUS_PAYMENT_ORDER_ERROR"] = "Необходимо выполнить настройку поля 'Платежная система для автоматической оплаты заказа по статусу оплаты заказа от 1С' на странице настройки интеграции";
$MESS["CC_BSC1_SALE_ALLOW_DEDUCTION_ON_DELIVERY_ERROR"] = "На странице настройки модуля Интернет магазина необходимо отключить автоматизацию процесса - Разрешать отгрузку при разрешении доставки";
$MESS["CC_BSC1_CONVERT_SALE"] = "Частичные отгрузки доступны только для сконвертированного модуля магазина";
$MESS["CC_BSC1_USE_STORE_SALE"] = "Необходимо выключить складской учет и резервирование";
$MESS["CC_BSC1_CRM_SCHEME_NOT_SUPPORTED"] = "Обмен с CRM не поддерживается. Установите последнюю версию модуля 1С";
$MESS["CC_BSC1_DOCUMENT_XML_EMPTY"] = "Ошибка обработки документа. Документ пустой";
$MESS["CC_BSC1_COM_INFO"] = "КоммерческаяИнформация";
$MESS["CC_BSC1_COM_INFO_VARSION"] = "ВерсияСхемы";
$MESS["CC_BSC1_DOCUMENT"] = "Документ";
$MESS["CC_BSC1_CONTAINER"] = "Контейнер";
$MESS["CC_BSC1_AGENT"] = "Контрагент";
$MESS["CC_BSC1_AGENTS"] = "Контрагенты";
$MESS["CC_BSC1_OPERATION"] = "ХозОперация";
$MESS["CC_BSC1_ORDER"] = "Заказ товара";
$MESS["CC_BSC1_PAYMENT_BC"] = "Выплата безналичных денег|Выплата наличных денег";
$MESS["CC_BSC1_PAYMENT_C"] = "Выплата наличных денег";
$MESS["CC_BSC1_PAYMENT_B"] = "Выплата безналичных денег";
$MESS["CC_BSC1_PAYMENT_A"] = "Эквайринговая операция";
$MESS["CC_BSC1_PAYMENT_COMMENTS_1C"] = "Автоматическая оплата заказа по статусу от 1С";
$MESS["CC_BSC1_SHIPMENT"] = "Отпуск товара";
$MESS["CC_BSC1_NUMBER"] = "Номер";
$MESS["CC_BSC1_NUMBER_BASE"] = "Основание";
$MESS["CC_BSC1_SUMM"] = "Сумма";
$MESS["CC_BSC1_COMMENT"] = "Комментарий";
$MESS["CC_BSC1_REK_VALUES"] = "ЗначенияРеквизитов";
$MESS["CC_BSC1_REK_VALUE"] = "ЗначениеРеквизита";
$MESS["SALE_EXPORT_SUBORDINATES"] = "ПодчиненныеДокументы";
$MESS["SALE_EXPORT_SUBORDINATE"] = "ПодчиненныйДокумент";
$MESS["CC_BSC1_NAME"] = "Наименование";
$MESS["CC_BSC1_VALUE"] = "Значение";
$MESS["CC_BSC1_ITEMS"] = "Товары";
$MESS["CC_BSC1_ITEM"] = "Товар";
$MESS["CC_BSC1_PRICE_PER_UNIT"] = "ЦенаЗаЕдиницу";
$MESS["CC_BSC1_PRICE_ONE"] = "Цена";
$MESS["CC_BSC1_QUANTITY"] = "Количество";
$MESS["CC_BSC1_PROPS_ITEMS"] = "ХарактеристикиТовара";
$MESS["CC_BSC1_PROP_ITEM"] = "ХарактеристикаТовара";
$MESS["CC_BSC1_PROP_BASKET"] = "СвойствоКорзины";
$MESS["CC_BSC1_ITEM_TYPE"] = "ТипНоменклатуры";
$MESS["CC_BSC1_ITEM_UNIT"] = "Единица";
$MESS["CC_BSC1_ITEM_UNIT_NAME"] = "НаименованиеПолное";
$MESS["CC_BSC1_ITEM_UNIT_CODE"] = "Код";
$MESS["CC_BSC1_ID"] = "Ид";
$MESS["CC_BSC1_TAXES"] = "Налоги";
$MESS["CC_BSC1_TAX"] = "Налог";
$MESS["CC_BSC1_TAX_VALUE"] = "Ставка";

$MESS["CC_BSC1_MARKING_GROUP"] = "ГруппаМаркировки";
$MESS["CC_BSC1_MARKING_GROUP_CODE"] = "Код";

$MESS["CC_BSC1_MARKINGS"] = "Маркировки";
$MESS["CC_BSC1_MARKING"] = "Маркировка";
$MESS["CC_BSC1_MARKING_BARCODE"] = "Штрихкод";

$MESS["CC_BSC1_IN_PRICE"] = "УчтеноВСумме";
$MESS["CC_BSC1_SERVICE"] = "Услуга";
$MESS["CC_BSC1_CANCELED"] = "ПометкаУдаления";
$MESS["CC_BSC1_CANCEL"] = "Отменен";
$MESS["CC_BSC1_PROPERTY_VALUES"] = "ЗначенияСвойств";
$MESS["CC_BSC1_PROPERTY_VALUE"] = "ЗначенияСвойства";
$MESS["CC_BSC1_CASHBOX_CHECKS"] = "ИнформацияОЧеках";
$MESS["CC_BSC1_CASHBOX_CHECK"] = "ИнформацияОЧеке";
$MESS["CC_BSC1_CASHBOX_PRINT_CHECK"] = "PRINT_CHECK";
$MESS["CC_BSC1_CASHBOX_URL"] = "URL";
$MESS["CC_BSC1_CASHBOX_FISCAL_SIGN"] = "FISCAL_SIGN";
$MESS["CC_BSC1_CASHBOX_REG_NUMBER_KKT"] = "REG_NUMBER_KKT";
$MESS["CC_BSC1_1C_PAYED_DATE"] = "Дата оплаты по 1С";
$MESS["CC_BSC1_1C_PAYED"] = "Оплачен";
$MESS["CC_BSC1_1C_RETURN"] = "ПризнакВозврата";
$MESS["CC_BSC1_1C_RETURN_REASON"] = "Причина к Возврату";
$MESS["CC_BSC1_1C_PAYED_NUM"] = "Номер оплаты по 1С";
$MESS["CC_BSC1_1C_DELIVERY_DATE"] = "Дата отгрузки по 1С";
$MESS["CC_BSC1_1C_DELIVERY_NUM"] = "Номер отгрузки по 1С";
$MESS["CC_BSC1_1C_TRACKING_NUMBER"] = "Идентификатор отправления";
$MESS["CC_BSC1_PAY_SYSTEM_ID"] = "Метод оплаты ИД";
$MESS["CC_BSC1_DELIVERY_SYSTEM_ID"] = "Метод доставки ИД";
$MESS["CC_BSC1_VERSION_1C"] = "НомерВерсии";
$MESS["CC_BSC1_DEDUCTED"] = "Отгружен";
$MESS["CC_BSC1_ID_1C"] = "Номер1С";
$MESS["CC_BSC1_1C_DATE"] = "Дата1С";
$MESS["CC_BSC1_1C_TIME"] = "Время";
$MESS["SALE_EXPORT_FORM_SUMM"] = "ФорматСуммы";
$MESS["SALE_EXPORT_FORM_QUANT"] = "ФорматКоличества";
$MESS["SALE_EXPORT_FORM_CRD"] = "ЧРД";
$MESS["CC_BSC1_DISCOUNTS"] = "Скидки";
$MESS["CC_BSC1_DISCOUNT"] = "Скидка";
$MESS["CC_BSC1_DISCOUNT_PERCENT"] = "Процент";
$MESS["CC_BSC1_ZIP_PROGRESS"] = "Идет распаковка архива.";
$MESS["CC_BSC1_ZIP_DONE"] = "Распаковка архива завершена.";
$MESS["CC_BSC1_ERROR_SOURCE_CHECK"] = "Ошибка проверки источника запроса. Обновите модуль обмена.";
$MESS["CC_BSC1_ERROR_SESSION_ID_CHANGE"] = "Включена смена идентификатора сессий. В файле подключения компонента обмена, до подключения пролога определите константу BX_SESSION_ID_CHANGE: define('BX_SESSION_ID_CHANGE', false);";
$MESS["CC_BSC1_ORDER_NO_AGENT_ID"] = "Данные контрагента для создания заказа №#ID# не найдены. Заказ не будет создан.";
$MESS["CC_BSC1_ORDER_ADD_PROBLEM"] = "Произошла ошибка при создании заказа №#ID#.";
$MESS["CC_BSC1_ORDER_USER_PROBLEM"] = "Произошла ошибка регистрации пользователя при создании заказа №#ID#.";
$MESS["CC_BSC1_ORDER_PERSON_TYPE_PROBLEM"] = "Не смогли определить тип плательщика при создании заказа №#ID#.";
$MESS["CC_BSC1_ORDER_BASKET_ITEMS_PROBLEM"] = "Табличная часть заказа не содержит позиций заказа с типом Товар";
$MESS["CC_BSC1_ORDER_BASKET_ITEMS_AMOUNT_NULL_PROBLEM"] = "Табличная часть заказа не содержит позиций заказа с типом Товар или Сумма документа равна 0";
$MESS["CC_BSC1_AGENT_NO_AGENT_ID"] = "Данные контрагента не найдены.";
$MESS["CC_BSC1_AGENT_USER_PROBLEM"] = "Произошла ошибка регистрации пользователя при создании контрагента №#ID#.";
$MESS["CC_BSC1_AGENT_DUPLICATE"] = "Контрагент №#ID# уже существует на сайте.";
$MESS["CC_BSC1_AGENT_PERSON_TYPE_PROBLEM"] = "Не смогли определить тип плательщика при создании контрагента №#ID#.";
$MESS["CC_BSC1_DI_GENERAL"] = "Справочник";
$MESS["CC_BSC1_DI_STATUSES"] = "Cтатусы";
$MESS["CC_BSC1_DI_PS"] = "ПлатежныеСистемы";
$MESS["CC_BSC1_DI_DS"] = "СлужбыДоставки";
$MESS["CC_BSC1_DI_ELEMENT"] = "Элемент";
$MESS["CC_BSC1_DI_ID"] = "Ид";
$MESS["CC_BSC1_DI_NAME"] = "Название";
$MESS["CC_BSC1_DI_IS_CASH"] = "ТипОплаты";
$MESS["CP_BCI1_CHANGE_STATUS_FROM_1C"] = "Менять статусы заказов по информации из 1С";
$MESS["CC_BSC1_1C_STATUS_ID"] = "Статуса заказа ИД";
?>