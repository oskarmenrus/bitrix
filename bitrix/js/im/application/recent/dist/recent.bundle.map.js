{"version":3,"sources":["recent.bundle.js"],"names":["this","BX","Messenger","exports","im_application_core","ui_vue","ui_vue_vuex","im_view_list_recent","im_lib_logger","im_const","im_lib_utils","Vue","component","props","hasDialog","data","created","computed","babelHelpers","objectSpread","Vuex","mapState","recent","state","collection","general","pinned","recentData","concat","toConsumableArray","methods","getController","$root","$bitrixController","getStore","store","onScroll","event","oneScreenRemaining","loadMore","onClick","$emit","openOldDialog","onRightClick","openOldContextMenu","target","scrollTop","clientHeight","scrollHeight","template","RecentApplication","_this","params","arguments","length","undefined","classCallCheck","inited","initPromise","Promise","rootNode","node","document","createElement","isMessenger","templateTemp","rootNodeTemp","nodeTemp","eventBus","VueVendorV2","initCore","then","result","initParams","initComponent","initComplete","createClass","key","value","_this2","resolve","reject","Core","ready","controller","_this3","createVue","el","vue","requestData","drawPlaceholders","getRecentData","promise","emit","eventName","listen","callback","$on","Application","window","Lib","Const"],"mappings":"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","file":"recent.bundle.map.js"}