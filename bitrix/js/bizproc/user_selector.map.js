{"version":3,"sources":["user_selector.js"],"names":["BX","getClass","namespace","selectors","WeakMap","UserSelector","container","config","me","this","configString","getAttribute","parseJSON","removeAttribute","type","isPlainObject","create","isOnlyDialogMode","data","dialogId","util","getRandomString","selected","clone","selectOne","multiple","required","additionalFields","isArray","prepareRoles","bind","e","preventDefault","openDialog","prepareNodes","value","parseValue","addItems","canUse","SocNetLogDestination","decorateNode","selector","get","set","getByNode","prototype","itemsNode","inputBoxNode","attrs","className","inputNode","props","appendChild","tagNode","createValueNode","valueInputName","bByFocusEvent","innerHTML","length","message","getData","next","ajaxSent","ajax","method","dataType","url","ajax_action","sessid","bitrix_sessid","site","onsuccess","response","initDialog","i","itemsSelected","id","entityType","items","users","department","departmentRelation","bpuserroles","roles","itemsLast","last","USERS","buildDepartmentRelation","inited","initOnlyDialog","initDialogWithInputs","destinationInput","destinationInputBox","init","name","searchInput","extranetUser","bindMainPopup","node","offsetTop","offsetLeft","bindSearchPopup","departmentSelectDisable","sendAjaxSearch","callback","select","item","addItem","closeDialog","unSelect","unsetValue","BXfpUnSelectCallback","call","formName","inputContainerName","inputName","tagInputName","tagLink1","tagLink2","delegate","BXfpOpenDialogCallback","inputBoxName","BXfpCloseDialogCallback","openSearch","closeSearch","BXfpCloseSearchCallback","useClientDatabase","destSort","DEST_SORT","allowAddUser","Object","keys","onCustomEvent","itemType","dialogGroup","groupCode","title","BXfpSearch","BXfpSearchBefore","BXfpSetLinkName","showSearchInput","selectInDialog","convertItemToValue","callbacks","isFunction","addedResult","findChild","attr","data-id","toRemove","childNodes","push","itemId","deleteItem","cleanNode","cleanValue","createItemNode","text","deleteEvents","click","remove","setValue","setAttribute","toggleItem","element","params","destroy","isOpenDialog","options","children","htmlspecialcharsback","events","valueNode","getValueId","newVal","pairs","split","indexOf","join","replace","filter","toString","entityId","prepareValueString","pair","matches","found","trim","match","parseInt","getGroups","forEach","group","fields","Bizproc","FieldType","getDocumentFields","field","Text","encode","groups","getDocumentUserGroups","window","top"],"mappings":"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","file":"user_selector.map.js"}