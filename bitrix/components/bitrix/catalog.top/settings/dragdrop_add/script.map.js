{"version":3,"sources":["script.js"],"names":["initDraggableAddControl","params","data","JSON","parse","BX","loadScript","bx_dnd_add_waiter","DragDrop","window","propertyID","DragNDropAddParameterControl","setTimeout","items","rand","util","getRandomString","this","useBigData","propertyParams","BIG_DATA","message","JS_MESSAGES","nodes","countParamInput","getCountParamInput","activeDragNode","temporarySortNode","itemRemoved","ids","to","from","label","baseItems","getBaseItems","sortedItems","getSortedItems","variantCounts","getVariantsCountMap","dragItemClassName","lastEntered","timeOut","loadCSS","getPath","buildNodes","initDragDrop","saveData","prototype","path","JS_FILE","split","pop","join","result","k","hasOwnProperty","push","variant","VARIANT","bigData","CODE","inputValue","oInput","value","values","replace","e","i","propertyTr","findParent","oCont","className","propertyTds","findChildren","tagName","newTr","create","props","length","setAttribute","appendChild","parentNode","insertBefore","rootTo","getToNode","rootFrom","getFromNode","summaryInfo","bigDataControl","children","attrs","for","id","type","events","change","proxy","toggleBigData","text","summary","width","style","verticalAlign","toNode","data-value","toString","data-bigdata","title","delete","click","removeItem","dragstart","delegate","itemFromSortedList","proxy_context","dragend","disableActiveDropZone","fromNode","arrowClick","draggable","selectItem","event","dataTransfer","setData","cloneNode","addClass","drag","PreventDefault","dragdrop","_ondrag","browser","IsFirefox","sortableInterval","ondragStart","ondragEnd","removeClass","target","getEventTarget","presets","querySelectorAll","hasClass","getAttribute","preset","removeChild","removeSortableItem","isNodeInDom","dragItemControlClassName","sortable","rootElem","dragEnd","bind","onDragEnter","onDragOver","onDragLeave","checked","eventReturnFalse","enableActiveDropZone","getTemporaryNodeClone","addDragItem","addSortableItem","elementTo","document","elementFromPoint","pageX","pageY","contains","isSortableActive","dragNode","node","unbindAll","arr","stringify","clearTimeout","setElementCount","contentNode","elementCountInput","inputName","COUNT_PARAM_NAME","querySelector","rows","count","bigDataCount","getElementCount","quantity","quantityBigData","innerHTML","parseInt","map","COUNT"],"mappings":"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","file":""}