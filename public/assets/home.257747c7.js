(function(e){function t(t){for(var n,i,s=t[0],c=t[1],l=t[2],d=0,p=[];d<s.length;d++)i=s[d],Object.prototype.hasOwnProperty.call(a,i)&&a[i]&&p.push(a[i][0]),a[i]=0;for(n in c)Object.prototype.hasOwnProperty.call(c,n)&&(e[n]=c[n]);u&&u(t);while(p.length)p.shift()();return r.push.apply(r,l||[]),o()}function o(){for(var e,t=0;t<r.length;t++){for(var o=r[t],n=!0,s=1;s<o.length;s++){var c=o[s];0!==a[c]&&(n=!1)}n&&(r.splice(t--,1),e=i(i.s=o[0]))}return e}var n={},a={home:0},r=[];function i(t){if(n[t])return n[t].exports;var o=n[t]={i:t,l:!1,exports:{}};return e[t].call(o.exports,o,o.exports,i),o.l=!0,o.exports}i.e=function(){return Promise.resolve()},i.m=e,i.c=n,i.d=function(e,t,o){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},i.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"===typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(i.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)i.d(o,n,function(t){return e[t]}.bind(null,n));return o},i.n=function(e){var t=e&&e.__esModule?function(){return e["default"]}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="/local/templates/youtravel/vue-app/dist/";var s=window["webpackJsonp"]=window["webpackJsonp"]||[],c=s.push.bind(s);s.push=t,s=s.slice();for(var l=0;l<s.length;l++)t(s[l]);var u=c;r.push([2,"chunk-vendors","chunk-home-vendors","chunk-common"]),o()})({2:function(e,t,o){e.exports=o("81a6")},"267c":function(e,t,o){},"2a34":function(e,t,o){"use strict";o.r(t);var n=function(){var e=this,t=e._self._c;return t("div",{staticClass:"search-tools"},[e.mobileLocPopupIsOpen?t("div",{staticClass:"search-tools__popup"}):e._e(),t("TourSelector",{ref:"tourSelector",staticClass:"search-tools__destination",class:{separate:!e.showDivider},attrs:{place:"main",autofocus:e.autofocus},on:{updateLocation:function(t){return e.$emit("updateLocation",t)}}}),!e.mobileLocPopupIsOpen&&e.showDivider?t("div",{staticClass:"search-tools__divider"},[t("div")]):e._e(),t("DateSelector",{directives:[{name:"show",rawName:"v-show",value:!e.mobileLocPopupIsOpen,expression:"!mobileLocPopupIsOpen"}],ref:"dateSelector",staticClass:"search-tools__date",on:{updateDate:function(t){return e.$emit("updateDate",t)},switchPeriod:function(t){return e.$emit("switchPeriod",t)}}})],1)},a=[],r=o("5530"),i=(o("ac1f"),o("841c"),o("a4d3"),o("e01a"),function(){var e=this,t=e._self._c;return t("div",{staticClass:"serp-tour-selector",class:{active:e.isActive}},[t("Icon",{directives:[{name:"show",rawName:"v-show",value:!e.activeTourSearchOption||e.mobileLocPopupIsOpen,expression:"!activeTourSearchOption || mobileLocPopupIsOpen"}],staticClass:"serp-tour-selector__icon-search",attrs:{icon:"search",color:this.searchIconColor}}),t("Multiselect",{ref:"multiselectRef",staticClass:"multiselect-search",class:{mt6:e.tours.length},attrs:{placeholder:"",label:"tour",selectedLabel:"",selectLabel:"",deselectLabel:"",searchable:!0,options:e.tours,loading:e.isLoading,"internal-search":!1,limit:3,value:e.activeTourSearchOption,preserveSearch:!0,"group-values":"options","group-label":"label","group-select":!1,autofocus:e.autofocus,clearOnSelect:!1},on:{"search-change":e.fetchLocation,open:e.openHandler,close:e.closeHandler,input:function(t){e.querySearch=t},select:e.locationHandler},scopedSlots:e._u([{key:"singleLabel",fn:function(o){var n=o.option;return[t("div",{staticClass:"active-item",domProps:{innerHTML:e._s(n.label?n.label:"")}})]}},{key:"noOptions",fn:function(){return[e.isLoadingRecommended?e._e():t("span",{staticClass:"serp-tour-selector__placeholder",domProps:{textContent:e._s(e.searchLabels.startTyping)}}),e.isLoadingRecommended?t("div",{staticClass:"serp-tour-selector__loader"},[t("Icon",{attrs:{icon:"loader-circle"}})],1):e._e()]},proxy:!0},{key:"noResult",fn:function(){return[t("span",{staticClass:"serp-tour-selector__placeholder",domProps:{textContent:e._s(e.searchLabels.nothingToShow)}})]},proxy:!0},{key:"beforeList",fn:function(){return[t("div",{staticClass:"serp-tour-selector__before-list"},[t("location-nearby",{on:{trigger:e.onLocationTrigger,"get-current-position":e.onGetCurrentPosition,pending:function(t){e.isLoading=t}}})],1)]},proxy:!0},{key:"option",fn:function(o){var n=o.option,a=o.search;return[n.id?t("div",{staticClass:"search-item",on:{click:function(t){return e.trackEvent("main"==e.place?"Main page Search":"Header Search","Click Suggested option",n.type,{item:n.label})}}},[t("div",{staticClass:"description"},[t("span",{staticClass:"item-title",domProps:{innerHTML:e._s(n.label)}}),n.description?t("span",{staticClass:"item-description"},[e._v(" "+e._s(a)+" ")]):e._e()]),"tour"!==n.type?t("div",{staticClass:"type"},[t("span",{staticClass:"item-type"},[e._v(e._s(n.count))])]):e._e()]):t("div",{staticClass:"search-item"},[t("div",{staticClass:"description--group"},[t("span",{staticClass:"item-title",domProps:{innerHTML:e._s(n.$groupLabel)}})])])]}}])},[t("template",{slot:"placeholder"},[t("span",{domProps:{textContent:e._s(e.placeholder)}})]),t("template",{slot:"caret"},[t("div",{staticClass:"empty"})])],2),t("div",{directives:[{name:"show",rawName:"v-show",value:e.activeTourSearchOption&&!e.isActive,expression:"activeTourSearchOption && !isActive"}],staticClass:"serp-tour-selector__icon-remove",on:{click:function(t){return t.stopPropagation(),e.locationHandler(null)}}},[t("Icon",{attrs:{icon:"close",color:"#121212"}})],1),e.isActive?t("div",{staticClass:"serp-tour-selector__icon-close",on:{click:e.closeHandler}},[t("Icon",{attrs:{icon:"close",color:"#121212"}})],1):e._e()],1)}),s=[],c=o("1da1"),l=(o("96cf"),o("4de4"),o("b64b"),o("c740"),o("c16e")),u=o("1a52"),d=o("8edd"),p=o("9ea0"),h=o("8e5f"),f=o.n(h),v=o("7cc2"),m=o("7507"),b=o("2f62"),y={name:"tour-selector",mixins:[m["a"]],components:{Icon:l["a"],Multiselect:f.a,LocationNearby:v["a"]},props:{autofocus:{type:Boolean,default:!0},place:{validator:function(e){return-1!==["","main","header"].indexOf(e)},default:""}},data:function(){return{isActive:!1,isLoading:!1,isLoadingRecommended:!1,searchLabels:{startTyping:u["a"].t("tourSelector.startTyping"),nothingToShow:u["a"].t("tourSelector.nothingToShow"),chooseDirection:u["a"].t("tourSelector.chooseDirection")},tours:[],querySearch:"",activeTourSearchOption:null}},computed:Object(r["a"])(Object(r["a"])({},Object(b["e"])({mobileLocPopupIsOpen:function(e){return e.serp.mobileLocPopupIsOpen}})),{},{placeholder:function(){return this.querySearch?this.querySearch:this.$t("serp.topMenu.where")},isMobile:function(){return fakeWindow.innerWidth<943},searchIconColor:function(){return this.isActive&&this.isMobile?"#9999A9":"#121212"}}),methods:Object(r["a"])(Object(r["a"])({},Object(b["d"])({setMobileLocPopupIsOpen:"serp/setMobileLocPopupIsOpen"})),{},{locationHandler:function(e){this.querySearch=(null===e||void 0===e?void 0:e.label)||"",this.activeTourSearchOption=e,this.isLoading=!1,this.isActive=!1,this.$emit("updateLocation",this.activeTourSearchOption)},onLocationTrigger:function(){this.$refs.multiselectRef.deactivate()},onGetCurrentPosition:function(e){var t=e.latitude,o=e.longitude;this.locationHandler({type:"distance",label:this.$t("locationNearby.label"),lat:t,lon:o,radius:1e3})},openHandler:function(){var e=this;return Object(c["a"])(regeneratorRuntime.mark((function t(){var o,n,a,r,i;return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:if(e.isMobile&&(e.setMobileLocPopupIsOpen(!0),n=document.documentElement.style.getPropertyValue("--scroll-y"),a=document.body,a.style.position="fixed",a.style.width="100%",a.style.top="-".concat(n)),e.emitHeaderShow(!1),e.$refs.multiselectRef.$refs.search.removeAttribute("readonly"),e.isLoadingRecommended=!0,e.isActive=!0,e.$emit("isOpen",!0),e.querySearch){t.next=11;break}return t.next=9,e.getRecommendedLocations();case 9:t.next=17;break;case 11:if(null!==(o=e.tours)&&void 0!==o&&o.length){t.next=17;break}return t.next=14,d["a"].getList(e.querySearch);case 14:r=t.sent,i=r.data.data.autocomplete,i&&(e.tours=e.parseLocations(i));case 17:e.isLoadingRecommended=!1;case 18:case"end":return t.stop()}}),t)})))()},closeHandler:function(){if(this.isMobile){this.setMobileLocPopupIsOpen(!1);var e=document.body,t=e.style.top;e.style.position="",e.style.top="",fakeWindow.scrollTo(0,-1*parseInt(t||"0"))}this.emitHeaderShow(!0),this.isActive=!1,this.$emit("isOpen",!1)},trackEvent:function(e,t,o,n){p["a"].track(e,t,o,n)},fetchLocation:function(e){var t=this;return Object(c["a"])(regeneratorRuntime.mark((function o(){var n,a;return regeneratorRuntime.wrap((function(o){while(1)switch(o.prev=o.next){case 0:if(t.querySearch=e,t.$emit("searchChange",e),t.querySearch){o.next=6;break}return o.next=5,t.getRecommendedLocations();case 5:return o.abrupt("return");case 6:return t.isLoading=!0,o.next=9,d["a"].getList(t.querySearch).catch((function(e){return console.log(e)}));case 9:n=o.sent,a=n.data.data.autocomplete,a&&(t.tours=t.parseLocations(a)),t.isLoading=!1;case 13:case"end":return o.stop()}}),o)})))()},getRecommendedLocations:function(){var e=this;return Object(c["a"])(regeneratorRuntime.mark((function t(){var o,n,a,r,i;return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:return o=[],t.next=3,d["a"].getList().catch((function(e){return console.log(e)}));case 3:n=t.sent,a=n.data.data,r=a.popular_items,i=a.search_history,i&&o.push({type:"history",label:e.$t("serp.topMenu.history"),options:e.parseLocationOptions(i)}),r&&o.push({type:"popular",label:e.$t("serp.topMenu.popular"),options:e.parseLocationOptions(r)}),e.tours=o;case 10:case"end":return t.stop()}}),t)})))()},parseLocations:function(e){var t=this,o=e.filter((function(e){var t=e.type;return"type"!==t}));return this.isIosApp&&(o=o.filter((function(e){return"location"!==e.type&&("region"!==e.type||470!==e.id)}))),Object.keys(o).reduce((function(e,n){var a=e.findIndex((function(e){var t=e.type;return t===o[n].type})),i=e.findIndex((function(e){var t=e.type;return"better"===t}));return null!==e&&void 0!==e&&e[a]&&e[a].options.push(Object(r["a"])(Object(r["a"])({},o[n]),{},{count:u["a"].tc("tourSelector.tours",o[n].tour_count)})),n<4&&t.querySearch.length&&e[i].options.push(Object(r["a"])(Object(r["a"])({},o[n]),{},{count:u["a"].tc("tourSelector.tours",o[n].tour_count)})),e}),[{type:"better",label:this.$t("serp.topMenu.better"),options:[]},{type:"history",label:this.$t("serp.topMenu.history"),options:[]},{type:"country",label:this.$t("serp.topMenu.countries"),options:[]},{type:"continent",label:this.$t("serp.topMenu.continents"),options:[]},{type:"region",label:this.$t("serp.topMenu.regions"),options:[]},{type:"location",label:this.$t("serp.topMenu.destinations"),options:[]},{type:"tour",label:this.$t("serp.topMenu.tours"),options:[]},{type:"popular",label:this.$t("serp.topMenu.popular"),options:[]}]).filter((function(e){var t=e.options;return t.length}))},parseLocationOptions:function(e){var t=e.filter((function(e){var t=e.type;return"type"!==t}));return this.isIosApp&&(t=t.filter((function(e){return"location"!==e.type&&("region"!==e.type||470!==e.id)}))),Object.keys(t).reduce((function(e,o){return e.push(Object(r["a"])(Object(r["a"])({},t[o]),{},{count:u["a"].tc("tourSelector.tours",t[o].tour_count)})),e}),[])},setSearch:function(e){this.$refs.multiselectRef.updateSearch(e)},setLocation:function(e){var t=!(arguments.length>1&&void 0!==arguments[1])||arguments[1],o=(null===e||void 0===e?void 0:e[0])||e;o&&this.isMobile&&t&&(this.closeHandler(),this.scrollTop()),this.activeTourSearchOption=o,this.querySearch=(null===o||void 0===o?void 0:o.label)||""},scrollTop:function(){var e=document.body,t=e.style.top;window.scrollTo(0,-1*parseInt(t||"0"))}}),mounted:function(){var e=this.$refs.multiselectRef.$refs.search;e.setAttribute("readonly",!0),e.addEventListener("blur",(function(){e.setAttribute("readonly",!0)}),!0),fakeWindow.addEventListener("scroll",(function(){document.documentElement.style.setProperty("--scroll-y","".concat(fakeWindow.scrollY,"px"))}))},beforeDestroy:function(){fakeWindow.removeEventListener("scroll",document.documentElement),fakeWindow.removeEventListener("blur",this.$refs.multiselectRef.$refs.search)}},_=y,g=(o("cd95"),o("6d65"),o("0c7c")),w=Object(g["a"])(_,i,s,!1,null,"2a0d30d6",null),C=w.exports,k=function(){var e=this,t=e._self._c;return t("div",{staticClass:"date-selector",class:{active:e.isCalendarActive||e.isCategoriesActive}},[t("div",{directives:[{name:"show",rawName:"v-show",value:!e.value,expression:"!value"}],staticClass:"date-selector__icon-wrapper",on:{click:function(t){return e.openCalendarHandler({category:"Main_filter",event:"when_dates_click"})}}},[t("Icon",{staticClass:"date-selector__icon",attrs:{icon:"calendar",color:"#121212"}})],1),t("div",{directives:[{name:"show",rawName:"v-show",value:e.value,expression:"value"}],staticClass:"date-selector__icon-remove",on:{click:function(t){t.stopPropagation(),e.setDate(null),e.$emit("updateDate",null)}}},[t("Icon",{attrs:{icon:"close",color:"#121212"}})],1),t("DatePicker",{staticClass:"date-selector__placeholder",attrs:{placeholder:e.placeholder,editable:!1,"prefix-class":"serp",format:"DD.MM.YYYY","range-separator":" — ",lang:e.datepickerLang,value:e.value,open:e.isCalendarActive||e.isCategoriesActive,"append-to-body":!1,range:""},on:{open:function(t){return e.openCalendarHandler({category:"Main_filter",event:"when_dates_click"})},close:e.closeHandler},scopedSlots:e._u([{key:"content",fn:function(){return[t("div",{staticClass:"date-selector__dropdown__mobile-header"},[t("div",{staticClass:"date-selector__dropdown__mobile-header__title font-h1",domProps:{textContent:e._s(e.$t("serp.topMenu.when"))}}),t("div",{staticClass:"date-selector__dropdown__mobile-header__icon",on:{click:e.closeHandler}},[t("Icon",{attrs:{icon:"close",color:"#9999A9"}})],1)]),t("div",{staticClass:"date-selector__dropdown__switcher-wrapper"},[t("div",{staticClass:"date-selector__dropdown__switcher"},[t("div",{staticClass:"date-selector__dropdown__switcher__item",class:{"date-selector__dropdown__switcher__item--active":e.isCategoriesActive},domProps:{textContent:e._s(e.$t("serp.topMenu.monthOrPeriod"))},on:{click:function(t){return e.openCategoriesHandler({category:"Main_filter",event:"when_dates_click"})}}}),t("div",{staticClass:"date-selector__dropdown__switcher__item",class:{"date-selector__dropdown__switcher__item--active":e.isCalendarActive},on:{click:function(t){return e.openCalendarHandler(e.datepicker.button.exactDates.trackEvent)}}},[t("Icon",{attrs:{icon:"calendar",color:"#121212"}}),t("div",{domProps:{textContent:e._s(e.$t("serp.topMenu.exactDates"))}})],1)])]),t("CalendarRange",{directives:[{name:"show",rawName:"v-show",value:e.isCalendarActive,expression:"isCalendarActive"}],attrs:{value:e.value,"disabled-date":e.disabledDate},on:{select:function(t){return e.acceptDate(t)}}}),t("div",{directives:[{name:"show",rawName:"v-show",value:e.isCalendarActive,expression:"isCalendarActive"}],staticClass:"date-selector__switcher"},[t("div",{staticClass:"font-text",domProps:{textContent:e._s(e.$t("serp.topMenu.additionalDays"))}}),t("Switcher",{attrs:{checked:!e.strictPeriod},on:{switch:function(t){return e.acceptStrictPeriod(!t)}}})],1),t("div",{directives:[{name:"show",rawName:"v-show",value:e.isCategoriesActive,expression:"isCategoriesActive"}],staticClass:"date-selector__dropdown__categories"},[e.isCategoriesActive&&!e.isLoadDatepicker?t("preloader",{staticClass:"date-selector__dropdown__categories__preloader",attrs:{visible:""}}):e._e(),e._l(e.dateCategories,(function(o){return t("div",{key:o.id,staticClass:"date-selector__dropdown__categories__column",style:{gridArea:"area".concat(o.id)}},[t("div",{staticClass:"date-selector__dropdown__categories__column__label font-caps",domProps:{textContent:e._s(o.title)}}),e._l(o.options,(function(n){return t("div",{key:n.id,staticClass:"date-selector__dropdown__categories__column__item category-list",domProps:{textContent:e._s(n.title)},on:{click:function(t){return e.acceptDate(n.value,o.trackEvent,o.type)}}})}))],2)}))],2)]},proxy:!0}])})],1)},O=[],S=o("3835"),L=o("2cf3"),P=o("ec45"),M=o("0787"),x=o("5e7e"),j=o("f0aa"),D=P["default"].CalendarRange;x["a"].monthFormat="MMMM";var I={name:"date-selector",mixins:[m["a"]],components:{Preloader:j["a"],DatePicker:P["default"],CalendarRange:D,Icon:l["a"],Switcher:M["a"]},computed:Object(r["a"])(Object(r["a"])({},Object(b["e"])({datepicker:function(e){return e.dateCategories.datepicker},dateCategories:function(e){return e.dateCategories.dateCategories},isLoadDatepicker:function(e){return e.dateCategories.isLoad},mobileDatePopupIsOpen:function(e){return e.serp.mobileDatePopupIsOpen},strictPeriod:function(e){return e.serp.strictPeriod}})),{},{isMobile:function(){return fakeWindow.innerWidth<943}}),data:function(){return{datepickerLang:u["a"].t("dateSelector.datepickerLang"),placeholder:this.$t("serp.topMenu.when"),isCategoriesActive:!1,isCalendarActive:!1,value:null}},methods:Object(r["a"])(Object(r["a"])(Object(r["a"])({},Object(b["b"])({fetchDatepicker:"dateCategories/fetchDatepicker"})),Object(b["d"])({setMobileDatePopupIsOpen:"serp/setMobileDatePopupIsOpen",setStrictPeriod:"serp/setStrictPeriod"})),{},{trackEvent:function(e,t,o){p["a"].track(e,t,o)},isValidDate:function(e){return e instanceof Date&&!isNaN(e)},acceptStrictPeriod:function(e){this.setStrictPeriod(e),this.strictPeriod=e,this.$emit("switchPeriod",e)},acceptDate:function(e,t,o){var n=Object(S["a"])(e,2),a=n[0],r=n[1];this.value=[],a?this.value.push(this.isValidDate(a)?a:Object(L["a"])(a,"dd.MM.yyyy",new Date)):this.value.push(""),r?this.value.push(this.isValidDate(r)?r:Object(L["a"])(r,"dd.MM.yyyy",new Date)):this.value.push(""),this.value.push(o),this.$emit("updateDate",this.value),"undefined"!==typeof t&&this.trackEvent(t.category,t.event),this.closeHandler()},setDate:function(e){var t=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];this.value=e?e[0]:e,this.isMobile&&this.value&&t&&this.scrollTop()},openCalendarHandler:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:void 0;if(this.isMobile){this.setMobileDatePopupIsOpen(!0);var t=document.documentElement.style.getPropertyValue("--scroll-y"),o=document.body;o.style.position="fixed",o.style.width="100%",o.style.top="-".concat(t)}this.emitHeaderShow(!1),this.isCalendarActive=!0,this.isCategoriesActive=!1,"undefined"!==typeof e&&this.trackEvent(e.category,e.event)},openCategoriesHandler:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:void 0;if(this.isLoadDatepicker||this.fetchDatepicker(),this.isMobile){this.setMobileDatePopupIsOpen(!0);var t=document.documentElement.style.getPropertyValue("--scroll-y"),o=document.body;o.style.position="fixed",o.style.width="100%",o.style.top="-".concat(t)}this.isCategoriesActive=!0,this.isCalendarActive=!1,"undefined"!==typeof e&&this.trackEvent(e.category,e.event)},closeHandler:function(){if(this.isMobile){this.setMobileDatePopupIsOpen(!1);var e=document.body,t=e.style.top;e.style.position="",e.style.top="",fakeWindow.scrollTo(0,-1*parseInt(t||"0"))}this.emitHeaderShow(!0),this.isCalendarActive=!1,this.isCategoriesActive=!1},disabledDate:function(e){var t=new Date;return t.setHours(0,0,0,0),e<t},scrollTop:function(){var e=document.body,t=e.style.top;window.scrollTo(0,-1*parseInt(t||"0"))}}),mounted:function(){fakeWindow.addEventListener("scroll",(function(){document.documentElement.style.setProperty("--scroll-y","".concat(fakeWindow.scrollY,"px"))}))},beforeDestroy:function(){fakeWindow.removeEventListener("scroll",document.documentElement)}},A=I,T=(o("e5d5"),Object(g["a"])(A,k,O,!1,null,"2c88ca1a",null)),$=T.exports,H={components:{TourSelector:C,DateSelector:$},props:{autofocus:{type:Boolean,default:!1},showDivider:{type:Boolean,default:!0}},computed:Object(r["a"])({},Object(b["e"])({mobileLocPopupIsOpen:function(e){return e.serp.mobileLocPopupIsOpen},dates:function(e){return e.serp.dates},location:function(e){return e.serp.location}})),methods:{setDate:function(e){var t=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];this.$refs.dateSelector.setDate(e,t)},setLocation:function(e){var t=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];this.$refs.tourSelector.setLocation(e,t)},setLocationSearch:function(e){this.$refs.tourSelector.setSearch(e)}},mounted:function(){this.setDate(this.dates,!1),this.setLocation(this.location,!1)}},E=H,R=(o("ddea"),Object(g["a"])(E,n,a,!1,null,"427b8cfe",null));t["default"]=R.exports},"3a39":function(e,t,o){},"500c":function(e,t,o){},"59ea":function(e,t,o){e.exports={white:"#fff",black:"#121212","pitch-black":"#000",secondary:"#9999a9",red:"#f84565","green-main":"#abc232","green-hover":"#9aae2d","green-dark":"#87a038","gray-dark":"#d1d7e8","gray-hover":"#e4e4e8","gray-light":"#eeeef2"}},"5fd0":function(e,t,o){e.exports={white:"#fff",black:"#121212","pitch-black":"#000",secondary:"#9999a9",red:"#f84565","green-main":"#abc232","green-hover":"#9aae2d","green-dark":"#87a038","gray-dark":"#d1d7e8","gray-hover":"#e4e4e8","gray-light":"#eeeef2"}},"6d65":function(e,t,o){"use strict";o("3a39")},"775f":function(e,t,o){e.exports={white:"#fff",black:"#121212","pitch-black":"#000",secondary:"#9999a9",red:"#f84565","green-main":"#abc232","green-hover":"#9aae2d","green-dark":"#87a038","gray-dark":"#d1d7e8","gray-hover":"#e4e4e8","gray-light":"#eeeef2"}},"81a6":function(e,t,o){"use strict";o.r(t);o("e260"),o("e6cf"),o("cca6"),o("a79d");var n=o("2b0e"),a=function(){var e=this,t=e._self._c;return t("div",{staticClass:"app home"},[t("MainPreview")],1)},r=[],i=(o("9911"),function(){var e=this,t=e._self._c;return e.mainScreen?t("div",{staticClass:"main-screen"},[t("img",{staticClass:"background-image",attrs:{src:e.mainScreen.backgroundImage.src,alt:e.mainScreen.backgroundImage.alt,srcset:e.mainScreen.backgroundImage.srcset}}),t("div",{staticClass:"container"},[t("div",{staticClass:"content"},[t("div",{staticClass:"heading__title",domProps:{innerHTML:e._s(e.mainScreen.heading)}}),t("div",{staticClass:"search-box"},[t("TourSearch",{attrs:{autofocus:!this.$device.mobile},on:{updateLocation:function(t){e.location=[t]},updateDate:function(t){e.date=[t]},switchPeriod:function(t){return e.switchPeriod(t)}}}),t("button",{staticClass:"search-btn",attrs:{type:"submit"},on:{click:e.onSubmit}},[t("span",[e._v(e._s(e.searchLabel))]),t("Icon",{staticClass:"search-btn-icon",attrs:{icon:"icon-search"}})],1),t("a",{staticClass:"watch-all-tours",attrs:{href:e.mainScreen.watchAllTours.link},on:{click:function(t){return e.trackEvent("Main page Search","Click All tours")}}},[e._v(" "+e._s(e.mainScreen.watchAllTours.placeholder)+" ")])],1)])])]):e._e()}),s=[],c=o("3835"),l=o("5530"),u=(o("159b"),o("99af"),o("a15b"),o("c16e")),d=o("2a34"),p=o("2f62"),h=o("1a52"),f=o("9ea0"),v=o("b166"),m={components:{Icon:u["a"],TourSearch:d["default"]},data:function(){return{searchLabel:h["a"].t("mainPreview.search"),strictPeriod:0,location:[],date:[]}},computed:Object(l["a"])(Object(l["a"])({},Object(p["e"])({language:function(e){return e.language.language},mainScreen:function(e){return e.mainScreen.mainScreen},heading:function(e){return e.mainScreen.heading},watchAllTours:function(e){return e.mainScreen.watchAllTours},backgroundImage:function(e){return e.mainScreen.backgroundImage}})),{},{serpPath:function(){var e="/";if(this.location&&1===this.location.length){var t=this.location[0];"distance"!==t.type&&(e+=t.type+"/"+t.code)}return"/tours"+e},filtersQuery:function(){var e=["is_period_strict=".concat(+this.strictPeriod),"lang=".concat(this.language.id)];if(this.location){var t=[];this.location.forEach((function(e,o){"distance"===e.type?(t.push("loc[".concat(o,"][type]=").concat(e.type)),t.push("loc[".concat(o,"][lat]=").concat(e.lat)),t.push("loc[".concat(o,"][lon]=").concat(e.lon)),t.push("loc[".concat(o,"][radius]=").concat(e.radius))):(t.push("loc[".concat(o,"][type]=").concat(e.type)),t.push("loc[".concat(o,"][id]=").concat(e.id)))})),e.push.apply(e,t)}if(this.date){var o=[];this.date.forEach((function(e,t){var n=Object(c["a"])(e,3),a=n[0],r=n[1],i=n[2],s=Object(v["a"])(a,"dd.MM.yyyy"),l=Object(v["a"])(r,"dd.MM.yyyy");"month"===i?o.push("period[".concat(t,"][month]=").concat(s)):(o.push("period[".concat(t,"][from]=").concat(s)),o.push("period[".concat(t,"][to]=").concat(l)))})),e.push.apply(e,o)}return e.join("&")}}),methods:{onSubmit:function(){this.trackEvent("Main page Search","Click Search button"),fakeWindow.location="".concat(this.serpPath,"?").concat(this.filtersQuery)},trackEvent:function(e,t,o){f["a"].track(e,t,o)},switchPeriod:function(e){this.strictPeriod=e}}},b=m,y=(o("ef40"),o("87e4"),o("0c7c")),_=Object(y["a"])(b,i,s,!1,null,"f65faedc",null),g=_.exports,w={components:{MainPreview:g}},C=w,k=(o("e3f5"),Object(y["a"])(C,a,r,!1,null,null,null)),O=k.exports,S=o("4360"),L=o("9541"),P=o.n(L),M=o("2b88"),x=o.n(M),j=o("f40c");n["default"].use(P.a),n["default"].use(x.a),n["default"].use(j["a"],{bodyScrollOptions:{reserveScrollBarGap:!0,allowTouchMove:function(e){return e.closest(".multiselect__content-wrapper")}}}),n["default"].config.productionTip=!1,new n["default"]({store:S["a"],i18n:h["a"],render:function(e){return e(O)}}).$mount("#main-content")},"87e4":function(e,t,o){"use strict";o("a724")},a724:function(e,t,o){},cd95:function(e,t,o){"use strict";o("59ea")},ddea:function(e,t,o){"use strict";o("500c")},e3f5:function(e,t,o){"use strict";o("5fd0")},e5d5:function(e,t,o){"use strict";o("267c")},ef40:function(e,t,o){"use strict";o("775f")}});
//# sourceMappingURL=home.257747c7.js.map