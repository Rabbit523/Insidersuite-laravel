
(function(e,t){function i(t,i){var n,a,o,r=t.nodeName.toLowerCase();return"area"===r?(n=t.parentNode,a=n.name,t.href&&a&&"map"===n.nodeName.toLowerCase()?(o=e("img[usemap=#"+a+"]")[0],!!o&&s(o)):!1):(/input|select|textarea|button|object/.test(r)?!t.disabled:"a"===r?t.href||i:i)&&s(t)}function s(t){return e.expr.filters.visible(t)&&!e(t).parents().addBack().filter(function(){return"hidden"===e.css(this,"visibility")}).length}var n=0,a=/^ui-id-\d+$/;e.ui=e.ui||{},e.extend(e.ui,{version:"1.10.4",keyCode:{BACKSPACE:8,COMMA:188,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,LEFT:37,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SPACE:32,TAB:9,UP:38}}),e.fn.extend({focus:function(t){return function(i,s){return"number"==typeof i?this.each(function(){var t=this;setTimeout(function(){e(t).focus(),s&&s.call(t)},i)}):t.apply(this,arguments)}}(e.fn.focus),scrollParent:function(){var t;return t=e.ui.ie&&/(static|relative)/.test(this.css("position"))||/absolute/.test(this.css("position"))?this.parents().filter(function(){return/(relative|absolute|fixed)/.test(e.css(this,"position"))&&/(auto|scroll)/.test(e.css(this,"overflow")+e.css(this,"overflow-y")+e.css(this,"overflow-x"))}).eq(0):this.parents().filter(function(){return/(auto|scroll)/.test(e.css(this,"overflow")+e.css(this,"overflow-y")+e.css(this,"overflow-x"))}).eq(0),/fixed/.test(this.css("position"))||!t.length?e(document):t},zIndex:function(i){if(i!==t)return this.css("zIndex",i);if(this.length)for(var s,n,a=e(this[0]);a.length&&a[0]!==document;){if(s=a.css("position"),("absolute"===s||"relative"===s||"fixed"===s)&&(n=parseInt(a.css("zIndex"),10),!isNaN(n)&&0!==n))return n;a=a.parent()}return 0},uniqueId:function(){return this.each(function(){this.id||(this.id="ui-id-"+ ++n)})},removeUniqueId:function(){return this.each(function(){a.test(this.id)&&e(this).removeAttr("id")})}}),e.extend(e.expr[":"],{data:e.expr.createPseudo?e.expr.createPseudo(function(t){return function(i){return!!e.data(i,t)}}):function(t,i,s){return!!e.data(t,s[3])},focusable:function(t){return i(t,!isNaN(e.attr(t,"tabindex")))},tabbable:function(t){var s=e.attr(t,"tabindex"),n=isNaN(s);return(n||s>=0)&&i(t,!n)}}),e("<a>").outerWidth(1).jquery||e.each(["Width","Height"],function(i,s){function n(t,i,s,n){return e.each(a,function(){i-=parseFloat(e.css(t,"padding"+this))||0,s&&(i-=parseFloat(e.css(t,"border"+this+"Width"))||0),n&&(i-=parseFloat(e.css(t,"margin"+this))||0)}),i}var a="Width"===s?["Left","Right"]:["Top","Bottom"],o=s.toLowerCase(),r={innerWidth:e.fn.innerWidth,innerHeight:e.fn.innerHeight,outerWidth:e.fn.outerWidth,outerHeight:e.fn.outerHeight};e.fn["inner"+s]=function(i){return i===t?r["inner"+s].call(this):this.each(function(){e(this).css(o,n(this,i)+"px")})},e.fn["outer"+s]=function(t,i){return"number"!=typeof t?r["outer"+s].call(this,t):this.each(function(){e(this).css(o,n(this,t,!0,i)+"px")})}}),e.fn.addBack||(e.fn.addBack=function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}),e("<a>").data("a-b","a").removeData("a-b").data("a-b")&&(e.fn.removeData=function(t){return function(i){return arguments.length?t.call(this,e.camelCase(i)):t.call(this)}}(e.fn.removeData)),e.ui.ie=!!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()),e.support.selectstart="onselectstart"in document.createElement("div"),e.fn.extend({disableSelection:function(){return this.bind((e.support.selectstart?"selectstart":"mousedown")+".ui-disableSelection",function(e){e.preventDefault()})},enableSelection:function(){return this.unbind(".ui-disableSelection")}}),e.extend(e.ui,{plugin:{add:function(t,i,s){var n,a=e.ui[t].prototype;for(n in s)a.plugins[n]=a.plugins[n]||[],a.plugins[n].push([i,s[n]])},call:function(e,t,i){var s,n=e.plugins[t];if(n&&e.element[0].parentNode&&11!==e.element[0].parentNode.nodeType)for(s=0;n.length>s;s++)e.options[n[s][0]]&&n[s][1].apply(e.element,i)}},hasScroll:function(t,i){if("hidden"===e(t).css("overflow"))return!1;var s=i&&"left"===i?"scrollLeft":"scrollTop",n=!1;return t[s]>0?!0:(t[s]=1,n=t[s]>0,t[s]=0,n)}})})(jQuery);(function(e,t){function i(){this._curInst=null,this._keyEvent=!1,this._disabledInputs=[],this._datepickerShowing=!1,this._inDialog=!1,this._mainDivId="ui-datepicker-div",this._inlineClass="ui-datepicker-inline",this._appendClass="ui-datepicker-append",this._triggerClass="ui-datepicker-trigger",this._dialogClass="ui-datepicker-dialog",this._disableClass="ui-datepicker-disabled",this._unselectableClass="ui-datepicker-unselectable",this._currentClass="ui-datepicker-current-day",this._dayOverClass="ui-datepicker-days-cell-over",this.regional=[],this.regional[""]={closeText:"Done",prevText:"Prev",nextText:"Next",currentText:"Today",monthNames:["January","February","March","April","May","June","July","August","September","October","November","December"],monthNamesShort:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],dayNames:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],dayNamesShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],dayNamesMin:["Su","Mo","Tu","We","Th","Fr","Sa"],weekHeader:"Wk",dateFormat:"mm/dd/yy",firstDay:0,isRTL:!1,showMonthAfterYear:!1,yearSuffix:""},this._defaults={showOn:"focus",showAnim:"fadeIn",showOptions:{},defaultDate:null,appendText:"",buttonText:"...",buttonImage:"",buttonImageOnly:!1,hideIfNoPrevNext:!1,navigationAsDateFormat:!1,gotoCurrent:!1,changeMonth:!1,changeYear:!1,yearRange:"c-10:c+10",showOtherMonths:!1,selectOtherMonths:!1,showWeek:!1,calculateWeek:this.iso8601Week,shortYearCutoff:"+10",minDate:null,maxDate:null,duration:"fast",beforeShowDay:null,beforeShow:null,onSelect:null,onChangeMonthYear:null,onClose:null,numberOfMonths:1,showCurrentAtPos:0,stepMonths:1,stepBigMonths:12,altField:"",altFormat:"",constrainInput:!0,showButtonPanel:!1,autoSize:!1,disabled:!1},e.extend(this._defaults,this.regional[""]),this.dpDiv=s(e("<div id='"+this._mainDivId+"' class='ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>"))}function s(t){var i="button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a";return t.delegate(i,"mouseout",function(){e(this).removeClass("ui-state-hover"),-1!==this.className.indexOf("ui-datepicker-prev")&&e(this).removeClass("ui-datepicker-prev-hover"),-1!==this.className.indexOf("ui-datepicker-next")&&e(this).removeClass("ui-datepicker-next-hover")}).delegate(i,"mouseover",function(){e.datepicker._isDisabledDatepicker(a.inline?t.parent()[0]:a.input[0])||(e(this).parents(".ui-datepicker-calendar").find("a").removeClass("ui-state-hover"),e(this).addClass("ui-state-hover"),-1!==this.className.indexOf("ui-datepicker-prev")&&e(this).addClass("ui-datepicker-prev-hover"),-1!==this.className.indexOf("ui-datepicker-next")&&e(this).addClass("ui-datepicker-next-hover"))})}function n(t,i){e.extend(t,i);for(var s in i)null==i[s]&&(t[s]=i[s]);return t}e.extend(e.ui,{datepicker:{version:"1.10.4"}});var a,o="datepicker";e.extend(i.prototype,{markerClassName:"hasDatepicker",maxRows:4,_widgetDatepicker:function(){return this.dpDiv},setDefaults:function(e){return n(this._defaults,e||{}),this},_attachDatepicker:function(t,i){var s,n,a;s=t.nodeName.toLowerCase(),n="div"===s||"span"===s,t.id||(this.uuid+=1,t.id="dp"+this.uuid),a=this._newInst(e(t),n),a.settings=e.extend({},i||{}),"input"===s?this._connectDatepicker(t,a):n&&this._inlineDatepicker(t,a)},_newInst:function(t,i){var n=t[0].id.replace(/([^A-Za-z0-9_\-])/g,"\\\\$1");return{id:n,input:t,selectedDay:0,selectedMonth:0,selectedYear:0,drawMonth:0,drawYear:0,inline:i,dpDiv:i?s(e("<div class='"+this._inlineClass+" ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>")):this.dpDiv}},_connectDatepicker:function(t,i){var s=e(t);i.append=e([]),i.trigger=e([]),s.hasClass(this.markerClassName)||(this._attachments(s,i),s.addClass(this.markerClassName).keydown(this._doKeyDown).keypress(this._doKeyPress).keyup(this._doKeyUp),this._autoSize(i),e.data(t,o,i),i.settings.disabled&&this._disableDatepicker(t))},_attachments:function(t,i){var s,n,a,o=this._get(i,"appendText"),r=this._get(i,"isRTL");i.append&&i.append.remove(),o&&(i.append=e("<span class='"+this._appendClass+"'>"+o+"</span>"),t[r?"before":"after"](i.append)),t.unbind("focus",this._showDatepicker),i.trigger&&i.trigger.remove(),s=this._get(i,"showOn"),("focus"===s||"both"===s)&&t.focus(this._showDatepicker),("button"===s||"both"===s)&&(n=this._get(i,"buttonText"),a=this._get(i,"buttonImage"),i.trigger=e(this._get(i,"buttonImageOnly")?e("<img/>").addClass(this._triggerClass).attr({src:a,alt:n,title:n}):e("<button type='button'></button>").addClass(this._triggerClass).html(a?e("<img/>").attr({src:a,alt:n,title:n}):n)),t[r?"before":"after"](i.trigger),i.trigger.click(function(){return e.datepicker._datepickerShowing&&e.datepicker._lastInput===t[0]?e.datepicker._hideDatepicker():e.datepicker._datepickerShowing&&e.datepicker._lastInput!==t[0]?(e.datepicker._hideDatepicker(),e.datepicker._showDatepicker(t[0])):e.datepicker._showDatepicker(t[0]),!1}))},_autoSize:function(e){if(this._get(e,"autoSize")&&!e.inline){var t,i,s,n,a=new Date(2009,11,20),o=this._get(e,"dateFormat");o.match(/[DM]/)&&(t=function(e){for(i=0,s=0,n=0;e.length>n;n++)e[n].length>i&&(i=e[n].length,s=n);return s},a.setMonth(t(this._get(e,o.match(/MM/)?"monthNames":"monthNamesShort"))),a.setDate(t(this._get(e,o.match(/DD/)?"dayNames":"dayNamesShort"))+20-a.getDay())),e.input.attr("size",this._formatDate(e,a).length)}},_inlineDatepicker:function(t,i){var s=e(t);s.hasClass(this.markerClassName)||(s.addClass(this.markerClassName).append(i.dpDiv),e.data(t,o,i),this._setDate(i,this._getDefaultDate(i),!0),this._updateDatepicker(i),this._updateAlternate(i),i.settings.disabled&&this._disableDatepicker(t),i.dpDiv.css("display","block"))},_dialogDatepicker:function(t,i,s,a,r){var h,l,u,d,c,p=this._dialogInst;return p||(this.uuid+=1,h="dp"+this.uuid,this._dialogInput=e("<input type='text' id='"+h+"' style='position: absolute; top: -100px; width: 0px;'/>"),this._dialogInput.keydown(this._doKeyDown),e("body").append(this._dialogInput),p=this._dialogInst=this._newInst(this._dialogInput,!1),p.settings={},e.data(this._dialogInput[0],o,p)),n(p.settings,a||{}),i=i&&i.constructor===Date?this._formatDate(p,i):i,this._dialogInput.val(i),this._pos=r?r.length?r:[r.pageX,r.pageY]:null,this._pos||(l=document.documentElement.clientWidth,u=document.documentElement.clientHeight,d=document.documentElement.scrollLeft||document.body.scrollLeft,c=document.documentElement.scrollTop||document.body.scrollTop,this._pos=[l/2-100+d,u/2-150+c]),this._dialogInput.css("left",this._pos[0]+20+"px").css("top",this._pos[1]+"px"),p.settings.onSelect=s,this._inDialog=!0,this.dpDiv.addClass(this._dialogClass),this._showDatepicker(this._dialogInput[0]),e.blockUI&&e.blockUI(this.dpDiv),e.data(this._dialogInput[0],o,p),this},_destroyDatepicker:function(t){var i,s=e(t),n=e.data(t,o);s.hasClass(this.markerClassName)&&(i=t.nodeName.toLowerCase(),e.removeData(t,o),"input"===i?(n.append.remove(),n.trigger.remove(),s.removeClass(this.markerClassName).unbind("focus",this._showDatepicker).unbind("keydown",this._doKeyDown).unbind("keypress",this._doKeyPress).unbind("keyup",this._doKeyUp)):("div"===i||"span"===i)&&s.removeClass(this.markerClassName).empty())},_enableDatepicker:function(t){var i,s,n=e(t),a=e.data(t,o);n.hasClass(this.markerClassName)&&(i=t.nodeName.toLowerCase(),"input"===i?(t.disabled=!1,a.trigger.filter("button").each(function(){this.disabled=!1}).end().filter("img").css({opacity:"1.0",cursor:""})):("div"===i||"span"===i)&&(s=n.children("."+this._inlineClass),s.children().removeClass("ui-state-disabled"),s.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled",!1)),this._disabledInputs=e.map(this._disabledInputs,function(e){return e===t?null:e}))},_disableDatepicker:function(t){var i,s,n=e(t),a=e.data(t,o);n.hasClass(this.markerClassName)&&(i=t.nodeName.toLowerCase(),"input"===i?(t.disabled=!0,a.trigger.filter("button").each(function(){this.disabled=!0}).end().filter("img").css({opacity:"0.5",cursor:"default"})):("div"===i||"span"===i)&&(s=n.children("."+this._inlineClass),s.children().addClass("ui-state-disabled"),s.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled",!0)),this._disabledInputs=e.map(this._disabledInputs,function(e){return e===t?null:e}),this._disabledInputs[this._disabledInputs.length]=t)},_isDisabledDatepicker:function(e){if(!e)return!1;for(var t=0;this._disabledInputs.length>t;t++)if(this._disabledInputs[t]===e)return!0;return!1},_getInst:function(t){try{return e.data(t,o)}catch(i){throw"Missing instance data for this datepicker"}},_optionDatepicker:function(i,s,a){var o,r,h,l,u=this._getInst(i);return 2===arguments.length&&"string"==typeof s?"defaults"===s?e.extend({},e.datepicker._defaults):u?"all"===s?e.extend({},u.settings):this._get(u,s):null:(o=s||{},"string"==typeof s&&(o={},o[s]=a),u&&(this._curInst===u&&this._hideDatepicker(),r=this._getDateDatepicker(i,!0),h=this._getMinMaxDate(u,"min"),l=this._getMinMaxDate(u,"max"),n(u.settings,o),null!==h&&o.dateFormat!==t&&o.minDate===t&&(u.settings.minDate=this._formatDate(u,h)),null!==l&&o.dateFormat!==t&&o.maxDate===t&&(u.settings.maxDate=this._formatDate(u,l)),"disabled"in o&&(o.disabled?this._disableDatepicker(i):this._enableDatepicker(i)),this._attachments(e(i),u),this._autoSize(u),this._setDate(u,r),this._updateAlternate(u),this._updateDatepicker(u)),t)},_changeDatepicker:function(e,t,i){this._optionDatepicker(e,t,i)},_refreshDatepicker:function(e){var t=this._getInst(e);t&&this._updateDatepicker(t)},_setDateDatepicker:function(e,t){var i=this._getInst(e);i&&(this._setDate(i,t),this._updateDatepicker(i),this._updateAlternate(i))},_getDateDatepicker:function(e,t){var i=this._getInst(e);return i&&!i.inline&&this._setDateFromField(i,t),i?this._getDate(i):null},_doKeyDown:function(t){var i,s,n,a=e.datepicker._getInst(t.target),o=!0,r=a.dpDiv.is(".ui-datepicker-rtl");if(a._keyEvent=!0,e.datepicker._datepickerShowing)switch(t.keyCode){case 9:e.datepicker._hideDatepicker(),o=!1;break;case 13:return n=e("td."+e.datepicker._dayOverClass+":not(."+e.datepicker._currentClass+")",a.dpDiv),n[0]&&e.datepicker._selectDay(t.target,a.selectedMonth,a.selectedYear,n[0]),i=e.datepicker._get(a,"onSelect"),i?(s=e.datepicker._formatDate(a),i.apply(a.input?a.input[0]:null,[s,a])):e.datepicker._hideDatepicker(),!1;case 27:e.datepicker._hideDatepicker();break;case 33:e.datepicker._adjustDate(t.target,t.ctrlKey?-e.datepicker._get(a,"stepBigMonths"):-e.datepicker._get(a,"stepMonths"),"M");break;case 34:e.datepicker._adjustDate(t.target,t.ctrlKey?+e.datepicker._get(a,"stepBigMonths"):+e.datepicker._get(a,"stepMonths"),"M");break;case 35:(t.ctrlKey||t.metaKey)&&e.datepicker._clearDate(t.target),o=t.ctrlKey||t.metaKey;break;case 36:(t.ctrlKey||t.metaKey)&&e.datepicker._gotoToday(t.target),o=t.ctrlKey||t.metaKey;break;case 37:(t.ctrlKey||t.metaKey)&&e.datepicker._adjustDate(t.target,r?1:-1,"D"),o=t.ctrlKey||t.metaKey,t.originalEvent.altKey&&e.datepicker._adjustDate(t.target,t.ctrlKey?-e.datepicker._get(a,"stepBigMonths"):-e.datepicker._get(a,"stepMonths"),"M");break;case 38:(t.ctrlKey||t.metaKey)&&e.datepicker._adjustDate(t.target,-7,"D"),o=t.ctrlKey||t.metaKey;break;case 39:(t.ctrlKey||t.metaKey)&&e.datepicker._adjustDate(t.target,r?-1:1,"D"),o=t.ctrlKey||t.metaKey,t.originalEvent.altKey&&e.datepicker._adjustDate(t.target,t.ctrlKey?+e.datepicker._get(a,"stepBigMonths"):+e.datepicker._get(a,"stepMonths"),"M");break;case 40:(t.ctrlKey||t.metaKey)&&e.datepicker._adjustDate(t.target,7,"D"),o=t.ctrlKey||t.metaKey;break;default:o=!1}else 36===t.keyCode&&t.ctrlKey?e.datepicker._showDatepicker(this):o=!1;o&&(t.preventDefault(),t.stopPropagation())},_doKeyPress:function(i){var s,n,a=e.datepicker._getInst(i.target);return e.datepicker._get(a,"constrainInput")?(s=e.datepicker._possibleChars(e.datepicker._get(a,"dateFormat")),n=String.fromCharCode(null==i.charCode?i.keyCode:i.charCode),i.ctrlKey||i.metaKey||" ">n||!s||s.indexOf(n)>-1):t},_doKeyUp:function(t){var i,s=e.datepicker._getInst(t.target);if(s.input.val()!==s.lastVal)try{i=e.datepicker.parseDate(e.datepicker._get(s,"dateFormat"),s.input?s.input.val():null,e.datepicker._getFormatConfig(s)),i&&(e.datepicker._setDateFromField(s),e.datepicker._updateAlternate(s),e.datepicker._updateDatepicker(s))}catch(n){}return!0},_showDatepicker:function(t){if(t=t.target||t,"input"!==t.nodeName.toLowerCase()&&(t=e("input",t.parentNode)[0]),!e.datepicker._isDisabledDatepicker(t)&&e.datepicker._lastInput!==t){var i,s,a,o,r,h,l;i=e.datepicker._getInst(t),e.datepicker._curInst&&e.datepicker._curInst!==i&&(e.datepicker._curInst.dpDiv.stop(!0,!0),i&&e.datepicker._datepickerShowing&&e.datepicker._hideDatepicker(e.datepicker._curInst.input[0])),s=e.datepicker._get(i,"beforeShow"),a=s?s.apply(t,[t,i]):{},a!==!1&&(n(i.settings,a),i.lastVal=null,e.datepicker._lastInput=t,e.datepicker._setDateFromField(i),e.datepicker._inDialog&&(t.value=""),e.datepicker._pos||(e.datepicker._pos=e.datepicker._findPos(t),e.datepicker._pos[1]+=t.offsetHeight),o=!1,e(t).parents().each(function(){return o|="fixed"===e(this).css("position"),!o}),r={left:e.datepicker._pos[0],top:e.datepicker._pos[1]},e.datepicker._pos=null,i.dpDiv.empty(),i.dpDiv.css({position:"absolute",display:"block",top:"-1000px"}),e.datepicker._updateDatepicker(i),r=e.datepicker._checkOffset(i,r,o),i.dpDiv.css({position:e.datepicker._inDialog&&e.blockUI?"static":o?"fixed":"absolute",display:"none",left:r.left+"px",top:r.top+"px"}),i.inline||(h=e.datepicker._get(i,"showAnim"),l=e.datepicker._get(i,"duration"),i.dpDiv.zIndex(e(t).zIndex()+1),e.datepicker._datepickerShowing=!0,e.effects&&e.effects.effect[h]?i.dpDiv.show(h,e.datepicker._get(i,"showOptions"),l):i.dpDiv[h||"show"](h?l:null),e.datepicker._shouldFocusInput(i)&&i.input.focus(),e.datepicker._curInst=i))}},_updateDatepicker:function(t){this.maxRows=4,a=t,t.dpDiv.empty().append(this._generateHTML(t)),this._attachHandlers(t),t.dpDiv.find("."+this._dayOverClass+" a").mouseover();var i,s=this._getNumberOfMonths(t),n=s[1],o=17;t.dpDiv.removeClass("ui-datepicker-multi-2 ui-datepicker-multi-3 ui-datepicker-multi-4").width(""),n>1&&t.dpDiv.addClass("ui-datepicker-multi-"+n).css("width",o*n+"em"),t.dpDiv[(1!==s[0]||1!==s[1]?"add":"remove")+"Class"]("ui-datepicker-multi"),t.dpDiv[(this._get(t,"isRTL")?"add":"remove")+"Class"]("ui-datepicker-rtl"),t===e.datepicker._curInst&&e.datepicker._datepickerShowing&&e.datepicker._shouldFocusInput(t)&&t.input.focus(),t.yearshtml&&(i=t.yearshtml,setTimeout(function(){i===t.yearshtml&&t.yearshtml&&t.dpDiv.find("select.ui-datepicker-year:first").replaceWith(t.yearshtml),i=t.yearshtml=null},0))},_shouldFocusInput:function(e){return e.input&&e.input.is(":visible")&&!e.input.is(":disabled")&&!e.input.is(":focus")},_checkOffset:function(t,i,s){var n=t.dpDiv.outerWidth(),a=t.dpDiv.outerHeight(),o=t.input?t.input.outerWidth():0,r=t.input?t.input.outerHeight():0,h=document.documentElement.clientWidth+(s?0:e(document).scrollLeft()),l=document.documentElement.clientHeight+(s?0:e(document).scrollTop());return i.left-=this._get(t,"isRTL")?n-o:0,i.left-=s&&i.left===t.input.offset().left?e(document).scrollLeft():0,i.top-=s&&i.top===t.input.offset().top+r?e(document).scrollTop():0,i.left-=Math.min(i.left,i.left+n>h&&h>n?Math.abs(i.left+n-h):0),i.top-=Math.min(i.top,i.top+a>l&&l>a?Math.abs(a+r):0),i},_findPos:function(t){for(var i,s=this._getInst(t),n=this._get(s,"isRTL");t&&("hidden"===t.type||1!==t.nodeType||e.expr.filters.hidden(t));)t=t[n?"previousSibling":"nextSibling"];return i=e(t).offset(),[i.left,i.top]},_hideDatepicker:function(t){var i,s,n,a,r=this._curInst;!r||t&&r!==e.data(t,o)||this._datepickerShowing&&(i=this._get(r,"showAnim"),s=this._get(r,"duration"),n=function(){e.datepicker._tidyDialog(r)},e.effects&&(e.effects.effect[i]||e.effects[i])?r.dpDiv.hide(i,e.datepicker._get(r,"showOptions"),s,n):r.dpDiv["slideDown"===i?"slideUp":"fadeIn"===i?"fadeOut":"hide"](i?s:null,n),i||n(),this._datepickerShowing=!1,a=this._get(r,"onClose"),a&&a.apply(r.input?r.input[0]:null,[r.input?r.input.val():"",r]),this._lastInput=null,this._inDialog&&(this._dialogInput.css({position:"absolute",left:"0",top:"-100px"}),e.blockUI&&(e.unblockUI(),e("body").append(this.dpDiv))),this._inDialog=!1)},_tidyDialog:function(e){e.dpDiv.removeClass(this._dialogClass).unbind(".ui-datepicker-calendar")},_checkExternalClick:function(t){if(e.datepicker._curInst){var i=e(t.target),s=e.datepicker._getInst(i[0]);(i[0].id!==e.datepicker._mainDivId&&0===i.parents("#"+e.datepicker._mainDivId).length&&!i.hasClass(e.datepicker.markerClassName)&&!i.closest("."+e.datepicker._triggerClass).length&&e.datepicker._datepickerShowing&&(!e.datepicker._inDialog||!e.blockUI)||i.hasClass(e.datepicker.markerClassName)&&e.datepicker._curInst!==s)&&e.datepicker._hideDatepicker()}},_adjustDate:function(t,i,s){var n=e(t),a=this._getInst(n[0]);this._isDisabledDatepicker(n[0])||(this._adjustInstDate(a,i+("M"===s?this._get(a,"showCurrentAtPos"):0),s),this._updateDatepicker(a))},_gotoToday:function(t){var i,s=e(t),n=this._getInst(s[0]);this._get(n,"gotoCurrent")&&n.currentDay?(n.selectedDay=n.currentDay,n.drawMonth=n.selectedMonth=n.currentMonth,n.drawYear=n.selectedYear=n.currentYear):(i=new Date,n.selectedDay=i.getDate(),n.drawMonth=n.selectedMonth=i.getMonth(),n.drawYear=n.selectedYear=i.getFullYear()),this._notifyChange(n),this._adjustDate(s)},_selectMonthYear:function(t,i,s){var n=e(t),a=this._getInst(n[0]);a["selected"+("M"===s?"Month":"Year")]=a["draw"+("M"===s?"Month":"Year")]=parseInt(i.options[i.selectedIndex].value,10),this._notifyChange(a),this._adjustDate(n)},_selectDay:function(t,i,s,n){var a,o=e(t);e(n).hasClass(this._unselectableClass)||this._isDisabledDatepicker(o[0])||(a=this._getInst(o[0]),a.selectedDay=a.currentDay=e("a",n).html(),a.selectedMonth=a.currentMonth=i,a.selectedYear=a.currentYear=s,this._selectDate(t,this._formatDate(a,a.currentDay,a.currentMonth,a.currentYear)))},_clearDate:function(t){var i=e(t);this._selectDate(i,"")},_selectDate:function(t,i){var s,n=e(t),a=this._getInst(n[0]);i=null!=i?i:this._formatDate(a),a.input&&a.input.val(i),this._updateAlternate(a),s=this._get(a,"onSelect"),s?s.apply(a.input?a.input[0]:null,[i,a]):a.input&&a.input.trigger("change"),a.inline?this._updateDatepicker(a):(this._hideDatepicker(),this._lastInput=a.input[0],"object"!=typeof a.input[0]&&a.input.focus(),this._lastInput=null)},_updateAlternate:function(t){var i,s,n,a=this._get(t,"altField");a&&(i=this._get(t,"altFormat")||this._get(t,"dateFormat"),s=this._getDate(t),n=this.formatDate(i,s,this._getFormatConfig(t)),e(a).each(function(){e(this).val(n)}))},noWeekends:function(e){var t=e.getDay();return[t>0&&6>t,""]},iso8601Week:function(e){var t,i=new Date(e.getTime());return i.setDate(i.getDate()+4-(i.getDay()||7)),t=i.getTime(),i.setMonth(0),i.setDate(1),Math.floor(Math.round((t-i)/864e5)/7)+1},parseDate:function(i,s,n){if(null==i||null==s)throw"Invalid arguments";if(s="object"==typeof s?""+s:s+"",""===s)return null;var a,o,r,h,l=0,u=(n?n.shortYearCutoff:null)||this._defaults.shortYearCutoff,d="string"!=typeof u?u:(new Date).getFullYear()%100+parseInt(u,10),c=(n?n.dayNamesShort:null)||this._defaults.dayNamesShort,p=(n?n.dayNames:null)||this._defaults.dayNames,f=(n?n.monthNamesShort:null)||this._defaults.monthNamesShort,m=(n?n.monthNames:null)||this._defaults.monthNames,g=-1,v=-1,_=-1,b=-1,y=!1,x=function(e){var t=i.length>a+1&&i.charAt(a+1)===e;return t&&a++,t},w=function(e){var t=x(e),i="@"===e?14:"!"===e?20:"y"===e&&t?4:"o"===e?3:2,n=RegExp("^\\d{1,"+i+"}"),a=s.substring(l).match(n);if(!a)throw"Missing number at position "+l;return l+=a[0].length,parseInt(a[0],10)},k=function(i,n,a){var o=-1,r=e.map(x(i)?a:n,function(e,t){return[[t,e]]}).sort(function(e,t){return-(e[1].length-t[1].length)});if(e.each(r,function(e,i){var n=i[1];return s.substr(l,n.length).toLowerCase()===n.toLowerCase()?(o=i[0],l+=n.length,!1):t}),-1!==o)return o+1;throw"Unknown name at position "+l},D=function(){if(s.charAt(l)!==i.charAt(a))throw"Unexpected literal at position "+l;l++};for(a=0;i.length>a;a++)if(y)"'"!==i.charAt(a)||x("'")?D():y=!1;else switch(i.charAt(a)){case"d":_=w("d");break;case"D":k("D",c,p);break;case"o":b=w("o");break;case"m":v=w("m");break;case"M":v=k("M",f,m);break;case"y":g=w("y");break;case"@":h=new Date(w("@")),g=h.getFullYear(),v=h.getMonth()+1,_=h.getDate();break;case"!":h=new Date((w("!")-this._ticksTo1970)/1e4),g=h.getFullYear(),v=h.getMonth()+1,_=h.getDate();break;case"'":x("'")?D():y=!0;break;default:D()}if(s.length>l&&(r=s.substr(l),!/^\s+/.test(r)))throw"Extra/unparsed characters found in date: "+r;if(-1===g?g=(new Date).getFullYear():100>g&&(g+=(new Date).getFullYear()-(new Date).getFullYear()%100+(d>=g?0:-100)),b>-1)for(v=1,_=b;;){if(o=this._getDaysInMonth(g,v-1),o>=_)break;v++,_-=o}if(h=this._daylightSavingAdjust(new Date(g,v-1,_)),h.getFullYear()!==g||h.getMonth()+1!==v||h.getDate()!==_)throw"Invalid date";return h},ATOM:"yy-mm-dd",COOKIE:"D, dd M yy",ISO_8601:"yy-mm-dd",RFC_822:"D, d M y",RFC_850:"DD, dd-M-y",RFC_1036:"D, d M y",RFC_1123:"D, d M yy",RFC_2822:"D, d M yy",RSS:"D, d M y",TICKS:"!",TIMESTAMP:"@",W3C:"yy-mm-dd",_ticksTo1970:1e7*60*60*24*(718685+Math.floor(492.5)-Math.floor(19.7)+Math.floor(4.925)),formatDate:function(e,t,i){if(!t)return"";var s,n=(i?i.dayNamesShort:null)||this._defaults.dayNamesShort,a=(i?i.dayNames:null)||this._defaults.dayNames,o=(i?i.monthNamesShort:null)||this._defaults.monthNamesShort,r=(i?i.monthNames:null)||this._defaults.monthNames,h=function(t){var i=e.length>s+1&&e.charAt(s+1)===t;return i&&s++,i},l=function(e,t,i){var s=""+t;if(h(e))for(;i>s.length;)s="0"+s;return s},u=function(e,t,i,s){return h(e)?s[t]:i[t]},d="",c=!1;if(t)for(s=0;e.length>s;s++)if(c)"'"!==e.charAt(s)||h("'")?d+=e.charAt(s):c=!1;else switch(e.charAt(s)){case"d":d+=l("d",t.getDate(),2);break;case"D":d+=u("D",t.getDay(),n,a);break;case"o":d+=l("o",Math.round((new Date(t.getFullYear(),t.getMonth(),t.getDate()).getTime()-new Date(t.getFullYear(),0,0).getTime())/864e5),3);break;case"m":d+=l("m",t.getMonth()+1,2);break;case"M":d+=u("M",t.getMonth(),o,r);break;case"y":d+=h("y")?t.getFullYear():(10>t.getYear()%100?"0":"")+t.getYear()%100;break;case"@":d+=t.getTime();break;case"!":d+=1e4*t.getTime()+this._ticksTo1970;break;case"'":h("'")?d+="'":c=!0;break;default:d+=e.charAt(s)}return d},_possibleChars:function(e){var t,i="",s=!1,n=function(i){var s=e.length>t+1&&e.charAt(t+1)===i;return s&&t++,s};for(t=0;e.length>t;t++)if(s)"'"!==e.charAt(t)||n("'")?i+=e.charAt(t):s=!1;else switch(e.charAt(t)){case"d":case"m":case"y":case"@":i+="0123456789";break;case"D":case"M":return null;case"'":n("'")?i+="'":s=!0;break;default:i+=e.charAt(t)}return i},_get:function(e,i){return e.settings[i]!==t?e.settings[i]:this._defaults[i]},_setDateFromField:function(e,t){if(e.input.val()!==e.lastVal){var i=this._get(e,"dateFormat"),s=e.lastVal=e.input?e.input.val():null,n=this._getDefaultDate(e),a=n,o=this._getFormatConfig(e);try{a=this.parseDate(i,s,o)||n}catch(r){s=t?"":s}e.selectedDay=a.getDate(),e.drawMonth=e.selectedMonth=a.getMonth(),e.drawYear=e.selectedYear=a.getFullYear(),e.currentDay=s?a.getDate():0,e.currentMonth=s?a.getMonth():0,e.currentYear=s?a.getFullYear():0,this._adjustInstDate(e)}},_getDefaultDate:function(e){return this._restrictMinMax(e,this._determineDate(e,this._get(e,"defaultDate"),new Date))},_determineDate:function(t,i,s){var n=function(e){var t=new Date;return t.setDate(t.getDate()+e),t},a=function(i){try{return e.datepicker.parseDate(e.datepicker._get(t,"dateFormat"),i,e.datepicker._getFormatConfig(t))}catch(s){}for(var n=(i.toLowerCase().match(/^c/)?e.datepicker._getDate(t):null)||new Date,a=n.getFullYear(),o=n.getMonth(),r=n.getDate(),h=/([+\-]?[0-9]+)\s*(d|D|w|W|m|M|y|Y)?/g,l=h.exec(i);l;){switch(l[2]||"d"){case"d":case"D":r+=parseInt(l[1],10);break;case"w":case"W":r+=7*parseInt(l[1],10);break;case"m":case"M":o+=parseInt(l[1],10),r=Math.min(r,e.datepicker._getDaysInMonth(a,o));break;case"y":case"Y":a+=parseInt(l[1],10),r=Math.min(r,e.datepicker._getDaysInMonth(a,o))}l=h.exec(i)}return new Date(a,o,r)},o=null==i||""===i?s:"string"==typeof i?a(i):"number"==typeof i?isNaN(i)?s:n(i):new Date(i.getTime());return o=o&&"Invalid Date"==""+o?s:o,o&&(o.setHours(0),o.setMinutes(0),o.setSeconds(0),o.setMilliseconds(0)),this._daylightSavingAdjust(o)},_daylightSavingAdjust:function(e){return e?(e.setHours(e.getHours()>12?e.getHours()+2:0),e):null},_setDate:function(e,t,i){var s=!t,n=e.selectedMonth,a=e.selectedYear,o=this._restrictMinMax(e,this._determineDate(e,t,new Date));e.selectedDay=e.currentDay=o.getDate(),e.drawMonth=e.selectedMonth=e.currentMonth=o.getMonth(),e.drawYear=e.selectedYear=e.currentYear=o.getFullYear(),n===e.selectedMonth&&a===e.selectedYear||i||this._notifyChange(e),this._adjustInstDate(e),e.input&&e.input.val(s?"":this._formatDate(e))},_getDate:function(e){var t=!e.currentYear||e.input&&""===e.input.val()?null:this._daylightSavingAdjust(new Date(e.currentYear,e.currentMonth,e.currentDay));return t},_attachHandlers:function(t){var i=this._get(t,"stepMonths"),s="#"+t.id.replace(/\\\\/g,"\\");t.dpDiv.find("[data-handler]").map(function(){var t={prev:function(){e.datepicker._adjustDate(s,-i,"M")},next:function(){e.datepicker._adjustDate(s,+i,"M")},hide:function(){e.datepicker._hideDatepicker()},today:function(){e.datepicker._gotoToday(s)},selectDay:function(){return e.datepicker._selectDay(s,+this.getAttribute("data-month"),+this.getAttribute("data-year"),this),!1},selectMonth:function(){return e.datepicker._selectMonthYear(s,this,"M"),!1},selectYear:function(){return e.datepicker._selectMonthYear(s,this,"Y"),!1}};e(this).bind(this.getAttribute("data-event"),t[this.getAttribute("data-handler")])})},_generateHTML:function(e){var t,i,s,n,a,o,r,h,l,u,d,c,p,f,m,g,v,_,b,y,x,w,k,D,T,C,M,S,N,I,P,A,z,H,E,F,O,W,j,R=new Date,L=this._daylightSavingAdjust(new Date(R.getFullYear(),R.getMonth(),R.getDate())),Y=this._get(e,"isRTL"),B=this._get(e,"showButtonPanel"),J=this._get(e,"hideIfNoPrevNext"),K=this._get(e,"navigationAsDateFormat"),q=this._getNumberOfMonths(e),U=this._get(e,"showCurrentAtPos"),V=this._get(e,"stepMonths"),Q=1!==q[0]||1!==q[1],G=this._daylightSavingAdjust(e.currentDay?new Date(e.currentYear,e.currentMonth,e.currentDay):new Date(9999,9,9)),X=this._getMinMaxDate(e,"min"),$=this._getMinMaxDate(e,"max"),Z=e.drawMonth-U,et=e.drawYear;if(0>Z&&(Z+=12,et--),$)for(t=this._daylightSavingAdjust(new Date($.getFullYear(),$.getMonth()-q[0]*q[1]+1,$.getDate())),t=X&&X>t?X:t;this._daylightSavingAdjust(new Date(et,Z,1))>t;)Z--,0>Z&&(Z=11,et--);for(e.drawMonth=Z,e.drawYear=et,i=this._get(e,"prevText"),i=K?this.formatDate(i,this._daylightSavingAdjust(new Date(et,Z-V,1)),this._getFormatConfig(e)):i,s=this._canAdjustMonth(e,-1,et,Z)?"<a class='ui-datepicker-prev ui-corner-all' data-handler='prev' data-event='click' title='"+i+"'><span class='ui-icon ui-icon-circle-triangle-"+(Y?"e":"w")+"'>"+i+"</span></a>":J?"":"<a class='ui-datepicker-prev ui-corner-all ui-state-disabled' title='"+i+"'><span class='ui-icon ui-icon-circle-triangle-"+(Y?"e":"w")+"'>"+i+"</span></a>",n=this._get(e,"nextText"),n=K?this.formatDate(n,this._daylightSavingAdjust(new Date(et,Z+V,1)),this._getFormatConfig(e)):n,a=this._canAdjustMonth(e,1,et,Z)?"<a class='ui-datepicker-next ui-corner-all' data-handler='next' data-event='click' title='"+n+"'><span class='ui-icon ui-icon-circle-triangle-"+(Y?"w":"e")+"'>"+n+"</span></a>":J?"":"<a class='ui-datepicker-next ui-corner-all ui-state-disabled' title='"+n+"'><span class='ui-icon ui-icon-circle-triangle-"+(Y?"w":"e")+"'>"+n+"</span></a>",o=this._get(e,"currentText"),r=this._get(e,"gotoCurrent")&&e.currentDay?G:L,o=K?this.formatDate(o,r,this._getFormatConfig(e)):o,h=e.inline?"":"<button type='button' class='ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all' data-handler='hide' data-event='click'>"+this._get(e,"closeText")+"</button>",l=B?"<div class='ui-datepicker-buttonpane ui-widget-content'>"+(Y?h:"")+(this._isInRange(e,r)?"<button type='button' class='ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all' data-handler='today' data-event='click'>"+o+"</button>":"")+(Y?"":h)+"</div>":"",u=parseInt(this._get(e,"firstDay"),10),u=isNaN(u)?0:u,d=this._get(e,"showWeek"),c=this._get(e,"dayNames"),p=this._get(e,"dayNamesMin"),f=this._get(e,"monthNames"),m=this._get(e,"monthNamesShort"),g=this._get(e,"beforeShowDay"),v=this._get(e,"showOtherMonths"),_=this._get(e,"selectOtherMonths"),b=this._getDefaultDate(e),y="",w=0;q[0]>w;w++){for(k="",this.maxRows=4,D=0;q[1]>D;D++){if(T=this._daylightSavingAdjust(new Date(et,Z,e.selectedDay)),C=" ui-corner-all",M="",Q){if(M+="<div class='ui-datepicker-group",q[1]>1)switch(D){case 0:M+=" ui-datepicker-group-first",C=" ui-corner-"+(Y?"right":"left");break;case q[1]-1:M+=" ui-datepicker-group-last",C=" ui-corner-"+(Y?"left":"right");break;default:M+=" ui-datepicker-group-middle",C=""}M+="'>"}for(M+="<div class='ui-datepicker-header ui-widget-header ui-helper-clearfix"+C+"'>"+(/all|left/.test(C)&&0===w?Y?a:s:"")+(/all|right/.test(C)&&0===w?Y?s:a:"")+this._generateMonthYearHeader(e,Z,et,X,$,w>0||D>0,f,m)+"</div><table class='ui-datepicker-calendar'><thead>"+"<tr>",S=d?"<th class='ui-datepicker-week-col'>"+this._get(e,"weekHeader")+"</th>":"",x=0;7>x;x++)N=(x+u)%7,S+="<th"+((x+u+6)%7>=5?" class='ui-datepicker-week-end'":"")+">"+"<span title='"+c[N]+"'>"+p[N]+"</span></th>";for(M+=S+"</tr></thead><tbody>",I=this._getDaysInMonth(et,Z),et===e.selectedYear&&Z===e.selectedMonth&&(e.selectedDay=Math.min(e.selectedDay,I)),P=(this._getFirstDayOfMonth(et,Z)-u+7)%7,A=Math.ceil((P+I)/7),z=Q?this.maxRows>A?this.maxRows:A:A,this.maxRows=z,H=this._daylightSavingAdjust(new Date(et,Z,1-P)),E=0;z>E;E++){for(M+="<tr>",F=d?"<td class='ui-datepicker-week-col'>"+this._get(e,"calculateWeek")(H)+"</td>":"",x=0;7>x;x++)O=g?g.apply(e.input?e.input[0]:null,[H]):[!0,""],W=H.getMonth()!==Z,j=W&&!_||!O[0]||X&&X>H||$&&H>$,F+="<td class='"+((x+u+6)%7>=5?" ui-datepicker-week-end":"")+(W?" ui-datepicker-other-month":"")+(H.getTime()===T.getTime()&&Z===e.selectedMonth&&e._keyEvent||b.getTime()===H.getTime()&&b.getTime()===T.getTime()?" "+this._dayOverClass:"")+(j?" "+this._unselectableClass+" ui-state-disabled":"")+(W&&!v?"":" "+O[1]+(H.getTime()===G.getTime()?" "+this._currentClass:"")+(H.getTime()===L.getTime()?" ui-datepicker-today":""))+"'"+(W&&!v||!O[2]?"":" title='"+O[2].replace(/'/g,"&#39;")+"'")+(j?"":" data-handler='selectDay' data-event='click' data-month='"+H.getMonth()+"' data-year='"+H.getFullYear()+"'")+">"+(W&&!v?"&#xa0;":j?"<span class='ui-state-default'>"+H.getDate()+"</span>":"<a class='ui-state-default"+(H.getTime()===L.getTime()?" ui-state-highlight":"")+(H.getTime()===G.getTime()?" ui-state-active":"")+(W?" ui-priority-secondary":"")+"' href='#'>"+H.getDate()+"</a>")+"</td>",H.setDate(H.getDate()+1),H=this._daylightSavingAdjust(H);M+=F+"</tr>"}Z++,Z>11&&(Z=0,et++),M+="</tbody></table>"+(Q?"</div>"+(q[0]>0&&D===q[1]-1?"<div class='ui-datepicker-row-break'></div>":""):""),k+=M}y+=k}return y+=l,e._keyEvent=!1,y},_generateMonthYearHeader:function(e,t,i,s,n,a,o,r){var h,l,u,d,c,p,f,m,g=this._get(e,"changeMonth"),v=this._get(e,"changeYear"),_=this._get(e,"showMonthAfterYear"),b="<div class='ui-datepicker-title'>",y="";if(a||!g)y+="<span class='ui-datepicker-month'>"+o[t]+"</span>";else{for(h=s&&s.getFullYear()===i,l=n&&n.getFullYear()===i,y+="<select class='ui-datepicker-month' data-handler='selectMonth' data-event='change'>",u=0;12>u;u++)(!h||u>=s.getMonth())&&(!l||n.getMonth()>=u)&&(y+="<option value='"+u+"'"+(u===t?" selected='selected'":"")+">"+r[u]+"</option>");y+="</select>"}if(_||(b+=y+(!a&&g&&v?"":"&#xa0;")),!e.yearshtml)if(e.yearshtml="",a||!v)b+="<span class='ui-datepicker-year'>"+i+"</span>";else{for(d=this._get(e,"yearRange").split(":"),c=(new Date).getFullYear(),p=function(e){var t=e.match(/c[+\-].*/)?i+parseInt(e.substring(1),10):e.match(/[+\-].*/)?c+parseInt(e,10):parseInt(e,10);
return isNaN(t)?c:t},f=p(d[0]),m=Math.max(f,p(d[1]||"")),f=s?Math.max(f,s.getFullYear()):f,m=n?Math.min(m,n.getFullYear()):m,e.yearshtml+="<select class='ui-datepicker-year' data-handler='selectYear' data-event='change'>";m>=f;f++)e.yearshtml+="<option value='"+f+"'"+(f===i?" selected='selected'":"")+">"+f+"</option>";e.yearshtml+="</select>",b+=e.yearshtml,e.yearshtml=null}return b+=this._get(e,"yearSuffix"),_&&(b+=(!a&&g&&v?"":"&#xa0;")+y),b+="</div>"},_adjustInstDate:function(e,t,i){var s=e.drawYear+("Y"===i?t:0),n=e.drawMonth+("M"===i?t:0),a=Math.min(e.selectedDay,this._getDaysInMonth(s,n))+("D"===i?t:0),o=this._restrictMinMax(e,this._daylightSavingAdjust(new Date(s,n,a)));e.selectedDay=o.getDate(),e.drawMonth=e.selectedMonth=o.getMonth(),e.drawYear=e.selectedYear=o.getFullYear(),("M"===i||"Y"===i)&&this._notifyChange(e)},_restrictMinMax:function(e,t){var i=this._getMinMaxDate(e,"min"),s=this._getMinMaxDate(e,"max"),n=i&&i>t?i:t;return s&&n>s?s:n},_notifyChange:function(e){var t=this._get(e,"onChangeMonthYear");t&&t.apply(e.input?e.input[0]:null,[e.selectedYear,e.selectedMonth+1,e])},_getNumberOfMonths:function(e){var t=this._get(e,"numberOfMonths");return null==t?[1,1]:"number"==typeof t?[1,t]:t},_getMinMaxDate:function(e,t){return this._determineDate(e,this._get(e,t+"Date"),null)},_getDaysInMonth:function(e,t){return 32-this._daylightSavingAdjust(new Date(e,t,32)).getDate()},_getFirstDayOfMonth:function(e,t){return new Date(e,t,1).getDay()},_canAdjustMonth:function(e,t,i,s){var n=this._getNumberOfMonths(e),a=this._daylightSavingAdjust(new Date(i,s+(0>t?t:n[0]*n[1]),1));return 0>t&&a.setDate(this._getDaysInMonth(a.getFullYear(),a.getMonth())),this._isInRange(e,a)},_isInRange:function(e,t){var i,s,n=this._getMinMaxDate(e,"min"),a=this._getMinMaxDate(e,"max"),o=null,r=null,h=this._get(e,"yearRange");return h&&(i=h.split(":"),s=(new Date).getFullYear(),o=parseInt(i[0],10),r=parseInt(i[1],10),i[0].match(/[+\-].*/)&&(o+=s),i[1].match(/[+\-].*/)&&(r+=s)),(!n||t.getTime()>=n.getTime())&&(!a||t.getTime()<=a.getTime())&&(!o||t.getFullYear()>=o)&&(!r||r>=t.getFullYear())},_getFormatConfig:function(e){var t=this._get(e,"shortYearCutoff");return t="string"!=typeof t?t:(new Date).getFullYear()%100+parseInt(t,10),{shortYearCutoff:t,dayNamesShort:this._get(e,"dayNamesShort"),dayNames:this._get(e,"dayNames"),monthNamesShort:this._get(e,"monthNamesShort"),monthNames:this._get(e,"monthNames")}},_formatDate:function(e,t,i,s){t||(e.currentDay=e.selectedDay,e.currentMonth=e.selectedMonth,e.currentYear=e.selectedYear);var n=t?"object"==typeof t?t:this._daylightSavingAdjust(new Date(s,i,t)):this._daylightSavingAdjust(new Date(e.currentYear,e.currentMonth,e.currentDay));return this.formatDate(this._get(e,"dateFormat"),n,this._getFormatConfig(e))}}),e.fn.datepicker=function(t){if(!this.length)return this;e.datepicker.initialized||(e(document).mousedown(e.datepicker._checkExternalClick),e.datepicker.initialized=!0),0===e("#"+e.datepicker._mainDivId).length&&e("body").append(e.datepicker.dpDiv);var i=Array.prototype.slice.call(arguments,1);return"string"!=typeof t||"isDisabled"!==t&&"getDate"!==t&&"widget"!==t?"option"===t&&2===arguments.length&&"string"==typeof arguments[1]?e.datepicker["_"+t+"Datepicker"].apply(e.datepicker,[this[0]].concat(i)):this.each(function(){"string"==typeof t?e.datepicker["_"+t+"Datepicker"].apply(e.datepicker,[this].concat(i)):e.datepicker._attachDatepicker(this,t)}):e.datepicker["_"+t+"Datepicker"].apply(e.datepicker,[this[0]].concat(i))},e.datepicker=new i,e.datepicker.initialized=!1,e.datepicker.uuid=(new Date).getTime(),e.datepicker.version="1.10.4"})(jQuery);
!function(a){var b={mode:"horizontal",slideSelector:"",infiniteLoop:!0,hideControlOnEnd:!1,speed:500,easing:null,slideMargin:0,startSlide:0,randomStart:!1,captions:!1,ticker:!1,tickerHover:!1,adaptiveHeight:!1,adaptiveHeightSpeed:500,video:!1,useCSS:!0,preloadImages:"visible",responsive:!0,slideZIndex:50,wrapperClass:"bx-wrapper",touchEnabled:!0,swipeThreshold:50,oneToOneTouch:!0,preventDefaultSwipeX:!0,preventDefaultSwipeY:!1,ariaLive:!0,ariaHidden:!0,keyboardEnabled:!1,pager:!0,pagerType:"full",pagerShortSeparator:" / ",pagerSelector:null,buildPager:null,pagerCustom:null,controls:!0,nextText:"Next",prevText:"Prev",nextSelector:null,prevSelector:null,autoControls:!1,startText:"Start",stopText:"Stop",autoControlsCombine:!1,autoControlsSelector:null,auto:!1,pause:4e3,autoStart:!0,autoDirection:"next",stopAutoOnClick:!1,autoHover:!1,autoDelay:0,autoSlideForOnePage:!1,minSlides:1,maxSlides:1,moveSlides:0,slideWidth:0,shrinkItems:!1,onSliderLoad:function(){return!0},onSlideBefore:function(){return!0},onSlideAfter:function(){return!0},onSlideNext:function(){return!0},onSlidePrev:function(){return!0},onSliderResize:function(){return!0}};a.fn.bxSlider=function(c){if(0===this.length)return this;if(this.length>1)return this.each(function(){a(this).bxSlider(c)}),this;var d={},e=this,f=a(window).width(),g=a(window).height();if(!a(e).data("bxSlider")){var h=function(){a(e).data("bxSlider")||(d.settings=a.extend({},b,c),d.settings.slideWidth=parseInt(d.settings.slideWidth),d.children=e.children(d.settings.slideSelector),d.children.length<d.settings.minSlides&&(d.settings.minSlides=d.children.length),d.children.length<d.settings.maxSlides&&(d.settings.maxSlides=d.children.length),d.settings.randomStart&&(d.settings.startSlide=Math.floor(Math.random()*d.children.length)),d.active={index:d.settings.startSlide},d.carousel=d.settings.minSlides>1||d.settings.maxSlides>1?!0:!1,d.carousel&&(d.settings.preloadImages="all"),d.minThreshold=d.settings.minSlides*d.settings.slideWidth+(d.settings.minSlides-1)*d.settings.slideMargin,d.maxThreshold=d.settings.maxSlides*d.settings.slideWidth+(d.settings.maxSlides-1)*d.settings.slideMargin,d.working=!1,d.controls={},d.interval=null,d.animProp="vertical"===d.settings.mode?"top":"left",d.usingCSS=d.settings.useCSS&&"fade"!==d.settings.mode&&function(){for(var a=document.createElement("div"),b=["WebkitPerspective","MozPerspective","OPerspective","msPerspective"],c=0;c<b.length;c++)if(void 0!==a.style[b[c]])return d.cssPrefix=b[c].replace("Perspective","").toLowerCase(),d.animProp="-"+d.cssPrefix+"-transform",!0;return!1}(),"vertical"===d.settings.mode&&(d.settings.maxSlides=d.settings.minSlides),e.data("origStyle",e.attr("style")),e.children(d.settings.slideSelector).each(function(){a(this).data("origStyle",a(this).attr("style"))}),j())},j=function(){var b=d.children.eq(d.settings.startSlide);e.wrap('<div class="'+d.settings.wrapperClass+'"><div class="bx-viewport"></div></div>'),d.viewport=e.parent(),d.settings.ariaLive&&!d.settings.ticker&&d.viewport.attr("aria-live","polite"),d.loader=a('<div class="bx-loading" />'),d.viewport.prepend(d.loader),e.css({width:"horizontal"===d.settings.mode?1e3*d.children.length+215+"%":"auto",position:"relative"}),d.usingCSS&&d.settings.easing?e.css("-"+d.cssPrefix+"-transition-timing-function",d.settings.easing):d.settings.easing||(d.settings.easing="swing"),d.viewport.css({width:"100%",overflow:"hidden",position:"relative"}),d.viewport.parent().css({maxWidth:n()}),d.settings.pager||d.settings.controls||d.viewport.parent().css({margin:"0 auto 0px"}),d.children.css({"float":"horizontal"===d.settings.mode?"left":"none",listStyle:"none",position:"relative"}),d.children.css("width",o()),"horizontal"===d.settings.mode&&d.settings.slideMargin>0&&d.children.css("marginRight",d.settings.slideMargin),"vertical"===d.settings.mode&&d.settings.slideMargin>0&&d.children.css("marginBottom",d.settings.slideMargin),"fade"===d.settings.mode&&(d.children.css({position:"absolute",zIndex:0,display:"none"}),d.children.eq(d.settings.startSlide).css({zIndex:d.settings.slideZIndex,display:"block"})),d.controls.el=a('<div class="bx-controls" />'),d.settings.captions&&y(),d.active.last=d.settings.startSlide===q()-1,d.settings.video&&e.fitVids(),("all"===d.settings.preloadImages||d.settings.ticker)&&(b=d.children),d.settings.ticker?d.settings.pager=!1:(d.settings.controls&&w(),d.settings.auto&&d.settings.autoControls&&x(),d.settings.pager&&v(),(d.settings.controls||d.settings.autoControls||d.settings.pager)&&d.viewport.after(d.controls.el)),k(b,l)},k=function(b,c){var d=b.find('img:not([src=""]), iframe').length,e=0;return 0===d?void c():void b.find('img:not([src=""]), iframe').each(function(){a(this).one("load error",function(){++e===d&&c()}).each(function(){this.complete&&a(this).load()})})},l=function(){if(d.settings.infiniteLoop&&"fade"!==d.settings.mode&&!d.settings.ticker){var b="vertical"===d.settings.mode?d.settings.minSlides:d.settings.maxSlides,c=d.children.slice(0,b).clone(!0).addClass("bx-clone"),f=d.children.slice(-b).clone(!0).addClass("bx-clone");d.settings.ariaHidden&&(c.attr("aria-hidden",!0),f.attr("aria-hidden",!0)),e.append(c).prepend(f)}d.loader.remove(),s(),"vertical"===d.settings.mode&&(d.settings.adaptiveHeight=!0),d.viewport.height(m()),e.redrawSlider(),d.settings.onSliderLoad.call(e,d.active.index),d.initialized=!0,d.settings.responsive&&a(window).bind("resize",S),d.settings.auto&&d.settings.autoStart&&(q()>1||d.settings.autoSlideForOnePage)&&I(),d.settings.ticker&&J(),d.settings.pager&&E(d.settings.startSlide),d.settings.controls&&H(),d.settings.touchEnabled&&!d.settings.ticker&&N(),d.settings.keyboardEnabled&&!d.settings.ticker&&a(document).keydown(M)},m=function(){var b=0,c=a();if("vertical"===d.settings.mode||d.settings.adaptiveHeight)if(d.carousel){var e=1===d.settings.moveSlides?d.active.index:d.active.index*r();for(c=d.children.eq(e),i=1;i<=d.settings.maxSlides-1;i++)c=e+i>=d.children.length?c.add(d.children.eq(i-1)):c.add(d.children.eq(e+i))}else c=d.children.eq(d.active.index);else c=d.children;return"vertical"===d.settings.mode?(c.each(function(c){b+=a(this).outerHeight()}),d.settings.slideMargin>0&&(b+=d.settings.slideMargin*(d.settings.minSlides-1))):b=Math.max.apply(Math,c.map(function(){return a(this).outerHeight(!1)}).get()),"border-box"===d.viewport.css("box-sizing")?b+=parseFloat(d.viewport.css("padding-top"))+parseFloat(d.viewport.css("padding-bottom"))+parseFloat(d.viewport.css("border-top-width"))+parseFloat(d.viewport.css("border-bottom-width")):"padding-box"===d.viewport.css("box-sizing")&&(b+=parseFloat(d.viewport.css("padding-top"))+parseFloat(d.viewport.css("padding-bottom"))),b},n=function(){var a="100%";return d.settings.slideWidth>0&&(a="horizontal"===d.settings.mode?d.settings.maxSlides*d.settings.slideWidth+(d.settings.maxSlides-1)*d.settings.slideMargin:d.settings.slideWidth),a},o=function(){var a=d.settings.slideWidth,b=d.viewport.width();if(0===d.settings.slideWidth||d.settings.slideWidth>b&&!d.carousel||"vertical"===d.settings.mode)a=b;else if(d.settings.maxSlides>1&&"horizontal"===d.settings.mode){if(b>d.maxThreshold)return a;b<d.minThreshold?a=(b-d.settings.slideMargin*(d.settings.minSlides-1))/d.settings.minSlides:d.settings.shrinkItems&&(a=Math.floor((b+d.settings.slideMargin)/Math.ceil((b+d.settings.slideMargin)/(a+d.settings.slideMargin))-d.settings.slideMargin))}return a},p=function(){var a=1,b=null;return"horizontal"===d.settings.mode&&d.settings.slideWidth>0?d.viewport.width()<d.minThreshold?a=d.settings.minSlides:d.viewport.width()>d.maxThreshold?a=d.settings.maxSlides:(b=d.children.first().width()+d.settings.slideMargin,a=Math.floor((d.viewport.width()+d.settings.slideMargin)/b)):"vertical"===d.settings.mode&&(a=d.settings.minSlides),a},q=function(){var a=0,b=0,c=0;if(d.settings.moveSlides>0)if(d.settings.infiniteLoop)a=Math.ceil(d.children.length/r());else for(;b<d.children.length;)++a,b=c+p(),c+=d.settings.moveSlides<=p()?d.settings.moveSlides:p();else a=Math.ceil(d.children.length/p());return a},r=function(){return d.settings.moveSlides>0&&d.settings.moveSlides<=p()?d.settings.moveSlides:p()},s=function(){var a,b,c;d.children.length>d.settings.maxSlides&&d.active.last&&!d.settings.infiniteLoop?"horizontal"===d.settings.mode?(b=d.children.last(),a=b.position(),t(-(a.left-(d.viewport.width()-b.outerWidth())),"reset",0)):"vertical"===d.settings.mode&&(c=d.children.length-d.settings.minSlides,a=d.children.eq(c).position(),t(-a.top,"reset",0)):(a=d.children.eq(d.active.index*r()).position(),d.active.index===q()-1&&(d.active.last=!0),void 0!==a&&("horizontal"===d.settings.mode?t(-a.left,"reset",0):"vertical"===d.settings.mode&&t(-a.top,"reset",0)))},t=function(b,c,f,g){var h,i;d.usingCSS?(i="vertical"===d.settings.mode?"translate3d(0, "+b+"px, 0)":"translate3d("+b+"px, 0, 0)",e.css("-"+d.cssPrefix+"-transition-duration",f/1e3+"s"),"slide"===c?(e.css(d.animProp,i),0!==f?e.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",function(b){a(b.target).is(e)&&(e.unbind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd"),F())}):F()):"reset"===c?e.css(d.animProp,i):"ticker"===c&&(e.css("-"+d.cssPrefix+"-transition-timing-function","linear"),e.css(d.animProp,i),0!==f?e.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",function(b){a(b.target).is(e)&&(e.unbind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd"),t(g.resetValue,"reset",0),K())}):(t(g.resetValue,"reset",0),K()))):(h={},h[d.animProp]=b,"slide"===c?e.animate(h,f,d.settings.easing,function(){F()}):"reset"===c?e.css(d.animProp,b):"ticker"===c&&e.animate(h,f,"linear",function(){t(g.resetValue,"reset",0),K()}))},u=function(){for(var b="",c="",e=q(),f=0;e>f;f++)c="",d.settings.buildPager&&a.isFunction(d.settings.buildPager)||d.settings.pagerCustom?(c=d.settings.buildPager(f),d.pagerEl.addClass("bx-custom-pager")):(c=f+1,d.pagerEl.addClass("bx-default-pager")),b+='<div class="bx-pager-item"><a href="" data-slide-index="'+f+'" class="bx-pager-link">'+c+"</a></div>";d.pagerEl.html(b)},v=function(){d.settings.pagerCustom?d.pagerEl=a(d.settings.pagerCustom):(d.pagerEl=a('<div class="bx-pager" />'),d.settings.pagerSelector?a(d.settings.pagerSelector).html(d.pagerEl):d.controls.el.addClass("bx-has-pager").append(d.pagerEl),u()),d.pagerEl.on("click touchend","a",D)},w=function(){d.controls.next=a('<a class="bx-next" href="">'+d.settings.nextText+"</a>"),d.controls.prev=a('<a class="bx-prev" href="">'+d.settings.prevText+"</a>"),d.controls.next.bind("click touchend",z),d.controls.prev.bind("click touchend",A),d.settings.nextSelector&&a(d.settings.nextSelector).append(d.controls.next),d.settings.prevSelector&&a(d.settings.prevSelector).append(d.controls.prev),d.settings.nextSelector||d.settings.prevSelector||(d.controls.directionEl=a('<div class="bx-controls-direction" />'),d.controls.directionEl.append(d.controls.prev).append(d.controls.next),d.controls.el.addClass("bx-has-controls-direction").append(d.controls.directionEl))},x=function(){d.controls.start=a('<div class="bx-controls-auto-item"><a class="bx-start" href="">'+d.settings.startText+"</a></div>"),d.controls.stop=a('<div class="bx-controls-auto-item"><a class="bx-stop" href="">'+d.settings.stopText+"</a></div>"),d.controls.autoEl=a('<div class="bx-controls-auto" />'),d.controls.autoEl.on("click",".bx-start",B),d.controls.autoEl.on("click",".bx-stop",C),d.settings.autoControlsCombine?d.controls.autoEl.append(d.controls.start):d.controls.autoEl.append(d.controls.start).append(d.controls.stop),d.settings.autoControlsSelector?a(d.settings.autoControlsSelector).html(d.controls.autoEl):d.controls.el.addClass("bx-has-controls-auto").append(d.controls.autoEl),G(d.settings.autoStart?"stop":"start")},y=function(){d.children.each(function(b){var c=a(this).find("img:first").attr("title");void 0!==c&&(""+c).length&&a(this).append('<div class="bx-caption"><span>'+c+"</span></div>")})},z=function(a){a.preventDefault(),d.controls.el.hasClass("disabled")||(d.settings.auto&&d.settings.stopAutoOnClick&&e.stopAuto(),e.goToNextSlide())},A=function(a){a.preventDefault(),d.controls.el.hasClass("disabled")||(d.settings.auto&&d.settings.stopAutoOnClick&&e.stopAuto(),e.goToPrevSlide())},B=function(a){e.startAuto(),a.preventDefault()},C=function(a){e.stopAuto(),a.preventDefault()},D=function(b){var c,f;b.preventDefault(),d.controls.el.hasClass("disabled")||(d.settings.auto&&d.settings.stopAutoOnClick&&e.stopAuto(),c=a(b.currentTarget),void 0!==c.attr("data-slide-index")&&(f=parseInt(c.attr("data-slide-index")),f!==d.active.index&&e.goToSlide(f)))},E=function(b){var c=d.children.length;return"short"===d.settings.pagerType?(d.settings.maxSlides>1&&(c=Math.ceil(d.children.length/d.settings.maxSlides)),void d.pagerEl.html(b+1+d.settings.pagerShortSeparator+c)):(d.pagerEl.find("a").removeClass("active"),void d.pagerEl.each(function(c,d){a(d).find("a").eq(b).addClass("active")}))},F=function(){if(d.settings.infiniteLoop){var a="";0===d.active.index?a=d.children.eq(0).position():d.active.index===q()-1&&d.carousel?a=d.children.eq((q()-1)*r()).position():d.active.index===d.children.length-1&&(a=d.children.eq(d.children.length-1).position()),a&&("horizontal"===d.settings.mode?t(-a.left,"reset",0):"vertical"===d.settings.mode&&t(-a.top,"reset",0))}d.working=!1,d.settings.onSlideAfter.call(e,d.children.eq(d.active.index),d.oldIndex,d.active.index)},G=function(a){d.settings.autoControlsCombine?d.controls.autoEl.html(d.controls[a]):(d.controls.autoEl.find("a").removeClass("active"),d.controls.autoEl.find("a:not(.bx-"+a+")").addClass("active"))},H=function(){1===q()?(d.controls.prev.addClass("disabled"),d.controls.next.addClass("disabled")):!d.settings.infiniteLoop&&d.settings.hideControlOnEnd&&(0===d.active.index?(d.controls.prev.addClass("disabled"),d.controls.next.removeClass("disabled")):d.active.index===q()-1?(d.controls.next.addClass("disabled"),d.controls.prev.removeClass("disabled")):(d.controls.prev.removeClass("disabled"),d.controls.next.removeClass("disabled")))},I=function(){if(d.settings.autoDelay>0){setTimeout(e.startAuto,d.settings.autoDelay)}else e.startAuto(),a(window).focus(function(){e.startAuto()}).blur(function(){e.stopAuto()});d.settings.autoHover&&e.hover(function(){d.interval&&(e.stopAuto(!0),d.autoPaused=!0)},function(){d.autoPaused&&(e.startAuto(!0),d.autoPaused=null)})},J=function(){var b,c,f,g,h,i,j,k,l=0;"next"===d.settings.autoDirection?e.append(d.children.clone().addClass("bx-clone")):(e.prepend(d.children.clone().addClass("bx-clone")),b=d.children.first().position(),l="horizontal"===d.settings.mode?-b.left:-b.top),t(l,"reset",0),d.settings.pager=!1,d.settings.controls=!1,d.settings.autoControls=!1,d.settings.tickerHover&&(d.usingCSS?(g="horizontal"===d.settings.mode?4:5,d.viewport.hover(function(){c=e.css("-"+d.cssPrefix+"-transform"),f=parseFloat(c.split(",")[g]),t(f,"reset",0)},function(){k=0,d.children.each(function(b){k+="horizontal"===d.settings.mode?a(this).outerWidth(!0):a(this).outerHeight(!0)}),h=d.settings.speed/k,i="horizontal"===d.settings.mode?"left":"top",j=h*(k-Math.abs(parseInt(f))),K(j)})):d.viewport.hover(function(){e.stop()},function(){k=0,d.children.each(function(b){k+="horizontal"===d.settings.mode?a(this).outerWidth(!0):a(this).outerHeight(!0)}),h=d.settings.speed/k,i="horizontal"===d.settings.mode?"left":"top",j=h*(k-Math.abs(parseInt(e.css(i)))),K(j)})),K()},K=function(a){var b,c,f,g=a?a:d.settings.speed,h={left:0,top:0},i={left:0,top:0};"next"===d.settings.autoDirection?h=e.find(".bx-clone").first().position():i=d.children.first().position(),b="horizontal"===d.settings.mode?-h.left:-h.top,c="horizontal"===d.settings.mode?-i.left:-i.top,f={resetValue:c},t(b,"ticker",g,f)},L=function(b){var c=a(window),d={top:c.scrollTop(),left:c.scrollLeft()},e=b.offset();return d.right=d.left+c.width(),d.bottom=d.top+c.height(),e.right=e.left+b.outerWidth(),e.bottom=e.top+b.outerHeight(),!(d.right<e.left||d.left>e.right||d.bottom<e.top||d.top>e.bottom)},M=function(a){var b=document.activeElement.tagName.toLowerCase(),c="input|textarea",d=new RegExp(b,["i"]),f=d.exec(c);if(null==f&&L(e)){if(39===a.keyCode)return z(a),!1;if(37===a.keyCode)return A(a),!1}},N=function(){d.touch={start:{x:0,y:0},end:{x:0,y:0}},d.viewport.bind("touchstart MSPointerDown pointerdown",O),d.viewport.on("click",".bxslider a",function(a){d.viewport.hasClass("click-disabled")&&(a.preventDefault(),d.viewport.removeClass("click-disabled"))})},O=function(a){if(d.controls.el.addClass("disabled"),d.working)a.preventDefault(),d.controls.el.removeClass("disabled");else{d.touch.originalPos=e.position();var b=a.originalEvent,c="undefined"!=typeof b.changedTouches?b.changedTouches:[b];d.touch.start.x=c[0].pageX,d.touch.start.y=c[0].pageY,d.viewport.get(0).setPointerCapture&&(d.pointerId=b.pointerId,d.viewport.get(0).setPointerCapture(d.pointerId)),d.viewport.bind("touchmove MSPointerMove pointermove",Q),d.viewport.bind("touchend MSPointerUp pointerup",R),d.viewport.bind("MSPointerCancel pointercancel",P)}},P=function(a){t(d.touch.originalPos.left,"reset",0),d.controls.el.removeClass("disabled"),d.viewport.unbind("MSPointerCancel pointercancel",P),d.viewport.unbind("touchmove MSPointerMove pointermove",Q),d.viewport.unbind("touchend MSPointerUp pointerup",R),d.viewport.get(0).releasePointerCapture&&d.viewport.get(0).releasePointerCapture(d.pointerId)},Q=function(a){var b=a.originalEvent,c="undefined"!=typeof b.changedTouches?b.changedTouches:[b],e=Math.abs(c[0].pageX-d.touch.start.x),f=Math.abs(c[0].pageY-d.touch.start.y),g=0,h=0;3*e>f&&d.settings.preventDefaultSwipeX?a.preventDefault():3*f>e&&d.settings.preventDefaultSwipeY&&a.preventDefault(),"fade"!==d.settings.mode&&d.settings.oneToOneTouch&&("horizontal"===d.settings.mode?(h=c[0].pageX-d.touch.start.x,g=d.touch.originalPos.left+h):(h=c[0].pageY-d.touch.start.y,g=d.touch.originalPos.top+h),t(g,"reset",0))},R=function(a){d.viewport.unbind("touchmove MSPointerMove pointermove",Q),d.controls.el.removeClass("disabled");var b=a.originalEvent,c="undefined"!=typeof b.changedTouches?b.changedTouches:[b],f=0,g=0;d.touch.end.x=c[0].pageX,d.touch.end.y=c[0].pageY,"fade"===d.settings.mode?(g=Math.abs(d.touch.start.x-d.touch.end.x),g>=d.settings.swipeThreshold&&(d.touch.start.x>d.touch.end.x?e.goToNextSlide():e.goToPrevSlide(),e.stopAuto())):("horizontal"===d.settings.mode?(g=d.touch.end.x-d.touch.start.x,f=d.touch.originalPos.left):(g=d.touch.end.y-d.touch.start.y,f=d.touch.originalPos.top),!d.settings.infiniteLoop&&(0===d.active.index&&g>0||d.active.last&&0>g)?t(f,"reset",200):Math.abs(g)>=d.settings.swipeThreshold?(0>g?e.goToNextSlide():e.goToPrevSlide(),e.stopAuto()):t(f,"reset",200)),d.viewport.unbind("touchend MSPointerUp pointerup",R),d.viewport.get(0).releasePointerCapture&&d.viewport.get(0).releasePointerCapture(d.pointerId)},S=function(b){if(d.initialized)if(d.working)window.setTimeout(S,10);else{var c=a(window).width(),h=a(window).height();(f!==c||g!==h)&&(f=c,g=h,e.redrawSlider(),d.settings.onSliderResize.call(e,d.active.index))}},T=function(a){var b=p();d.settings.ariaHidden&&!d.settings.ticker&&(d.children.attr("aria-hidden","true"),d.children.slice(a,a+b).attr("aria-hidden","false"))},U=function(a){return 0>a?d.settings.infiniteLoop?q()-1:d.active.index:a>=q()?d.settings.infiniteLoop?0:d.active.index:a};return e.goToSlide=function(b,c){var f,g,h,i,j=!0,k=0,l={left:0,top:0},n=null;if(d.oldIndex=d.active.index,d.active.index=U(b),!d.working&&d.active.index!==d.oldIndex){if(d.working=!0,j=d.settings.onSlideBefore.call(e,d.children.eq(d.active.index),d.oldIndex,d.active.index),"undefined"!=typeof j&&!j)return d.active.index=d.oldIndex,void(d.working=!1);"next"===c?d.settings.onSlideNext.call(e,d.children.eq(d.active.index),d.oldIndex,d.active.index)||(j=!1):"prev"===c&&(d.settings.onSlidePrev.call(e,d.children.eq(d.active.index),d.oldIndex,d.active.index)||(j=!1)),d.active.last=d.active.index>=q()-1,(d.settings.pager||d.settings.pagerCustom)&&E(d.active.index),d.settings.controls&&H(),"fade"===d.settings.mode?(d.settings.adaptiveHeight&&d.viewport.height()!==m()&&d.viewport.animate({height:m()},d.settings.adaptiveHeightSpeed),d.children.filter(":visible").fadeOut(d.settings.speed).css({zIndex:0}),d.children.eq(d.active.index).css("zIndex",d.settings.slideZIndex+1).fadeIn(d.settings.speed,function(){a(this).css("zIndex",d.settings.slideZIndex),F()})):(d.settings.adaptiveHeight&&d.viewport.height()!==m()&&d.viewport.animate({height:m()},d.settings.adaptiveHeightSpeed),!d.settings.infiniteLoop&&d.carousel&&d.active.last?"horizontal"===d.settings.mode?(n=d.children.eq(d.children.length-1),l=n.position(),k=d.viewport.width()-n.outerWidth()):(f=d.children.length-d.settings.minSlides,l=d.children.eq(f).position()):d.carousel&&d.active.last&&"prev"===c?(g=1===d.settings.moveSlides?d.settings.maxSlides-r():(q()-1)*r()-(d.children.length-d.settings.maxSlides),n=e.children(".bx-clone").eq(g),l=n.position()):"next"===c&&0===d.active.index?(l=e.find("> .bx-clone").eq(d.settings.maxSlides).position(),d.active.last=!1):b>=0&&(i=b*parseInt(r()),l=d.children.eq(i).position()),"undefined"!=typeof l?(h="horizontal"===d.settings.mode?-(l.left-k):-l.top,t(h,"slide",d.settings.speed)):d.working=!1),d.settings.ariaHidden&&T(d.active.index*r())}},e.goToNextSlide=function(){if(d.settings.infiniteLoop||!d.active.last){var a=parseInt(d.active.index)+1;e.goToSlide(a,"next")}},e.goToPrevSlide=function(){if(d.settings.infiniteLoop||0!==d.active.index){var a=parseInt(d.active.index)-1;e.goToSlide(a,"prev")}},e.startAuto=function(a){d.interval||(d.interval=setInterval(function(){"next"===d.settings.autoDirection?e.goToNextSlide():e.goToPrevSlide()},d.settings.pause),d.settings.autoControls&&a!==!0&&G("stop"))},e.stopAuto=function(a){d.interval&&(clearInterval(d.interval),d.interval=null,d.settings.autoControls&&a!==!0&&G("start"))},e.getCurrentSlide=function(){return d.active.index},e.getCurrentSlideElement=function(){return d.children.eq(d.active.index)},e.getSlideElement=function(a){return d.children.eq(a)},e.getSlideCount=function(){return d.children.length},e.isWorking=function(){return d.working},e.redrawSlider=function(){d.children.add(e.find(".bx-clone")).outerWidth(o()),d.viewport.css("height",m()),d.settings.ticker||s(),d.active.last&&(d.active.index=q()-1),d.active.index>=q()&&(d.active.last=!0),d.settings.pager&&!d.settings.pagerCustom&&(u(),E(d.active.index)),d.settings.ariaHidden&&T(d.active.index*r())},e.destroySlider=function(){d.initialized&&(d.initialized=!1,a(".bx-clone",this).remove(),d.children.each(function(){void 0!==a(this).data("origStyle")?a(this).attr("style",a(this).data("origStyle")):a(this).removeAttr("style")}),void 0!==a(this).data("origStyle")?this.attr("style",a(this).data("origStyle")):a(this).removeAttr("style"),a(this).unwrap().unwrap(),d.controls.el&&d.controls.el.remove(),d.controls.next&&d.controls.next.remove(),d.controls.prev&&d.controls.prev.remove(),d.pagerEl&&d.settings.controls&&!d.settings.pagerCustom&&d.pagerEl.remove(),a(".bx-caption",this).remove(),d.controls.autoEl&&d.controls.autoEl.remove(),clearInterval(d.interval),d.settings.responsive&&a(window).unbind("resize",S),d.settings.keyboardEnabled&&a(document).unbind("keydown",M),a(this).removeData("bxSlider"))},e.reloadSlider=function(b){void 0!==b&&(c=b),e.destroySlider(),h(),a(e).data("bxSlider",this)},h(),a(e).data("bxSlider",this),this}}}(jQuery);
(function (window, document, Math) {
var rAF = window.requestAnimationFrame	||
window.webkitRequestAnimationFrame	||
window.mozRequestAnimationFrame		||
window.oRequestAnimationFrame		||
window.msRequestAnimationFrame		||
function (callback) { window.setTimeout(callback, 1000 / 60); };
var utils = (function () {
var me = {};
var _elementStyle = document.createElement('div').style;
var _vendor = (function () {
var vendors = ['t', 'webkitT', 'MozT', 'msT', 'OT'],
transform,
i = 0,
l = vendors.length;
for ( ; i < l; i++ ) {
transform = vendors[i] + 'ransform';
if ( transform in _elementStyle ) return vendors[i].substr(0, vendors[i].length-1);
}
return false;
})();
function _prefixStyle (style) {
if ( _vendor === false ) return false;
if ( _vendor === '' ) return style;
return _vendor + style.charAt(0).toUpperCase() + style.substr(1);
}
me.getTime = Date.now || function getTime () { return new Date().getTime(); };
me.extend = function (target, obj) {
for ( var i in obj ) {
target[i] = obj[i];
}
};
me.addEvent = function (el, type, fn, capture) {
el.addEventListener(type, fn, !!capture);
};
me.removeEvent = function (el, type, fn, capture) {
el.removeEventListener(type, fn, !!capture);
};
me.prefixPointerEvent = function (pointerEvent) {
return window.MSPointerEvent ?
'MSPointer' + pointerEvent.charAt(9).toUpperCase() + pointerEvent.substr(10):
pointerEvent;
};
me.momentum = function (current, start, time, lowerMargin, wrapperSize, deceleration) {
var distance = current - start,
speed = Math.abs(distance) / time,
destination,
duration;
deceleration = deceleration === undefined ? 0.0006 : deceleration;
destination = current + ( speed * speed ) / ( 2 * deceleration ) * ( distance < 0 ? -1 : 1 );
duration = speed / deceleration;
if ( destination < lowerMargin ) {
destination = wrapperSize ? lowerMargin - ( wrapperSize / 2.5 * ( speed / 8 ) ) : lowerMargin;
distance = Math.abs(destination - current);
duration = distance / speed;
} else if ( destination > 0 ) {
destination = wrapperSize ? wrapperSize / 2.5 * ( speed / 8 ) : 0;
distance = Math.abs(current) + destination;
duration = distance / speed;
}
return {
destination: Math.round(destination),
duration: duration
};
};
var _transform = _prefixStyle('transform');
me.extend(me, {
hasTransform: _transform !== false,
hasPerspective: _prefixStyle('perspective') in _elementStyle,
hasTouch: 'ontouchstart' in window,
hasPointer: window.PointerEvent || window.MSPointerEvent, // IE10 is prefixed
hasTransition: _prefixStyle('transition') in _elementStyle
});
me.isBadAndroid = /Android /.test(window.navigator.appVersion) && !(/Chrome\/\d/.test(window.navigator.appVersion));
me.extend(me.style = {}, {
transform: _transform,
transitionTimingFunction: _prefixStyle('transitionTimingFunction'),
transitionDuration: _prefixStyle('transitionDuration'),
transitionDelay: _prefixStyle('transitionDelay'),
transformOrigin: _prefixStyle('transformOrigin')
});
me.hasClass = function (e, c) {
var re = new RegExp("(^|\\s)" + c + "(\\s|$)");
return re.test(e.className);
};
me.addClass = function (e, c) {
if ( me.hasClass(e, c) ) {
return;
}
var newclass = e.className.split(' ');
newclass.push(c);
e.className = newclass.join(' ');
};
me.removeClass = function (e, c) {
if ( !me.hasClass(e, c) ) {
return;
}
var re = new RegExp("(^|\\s)" + c + "(\\s|$)", 'g');
e.className = e.className.replace(re, ' ');
};
me.offset = function (el) {
var left = -el.offsetLeft,
top = -el.offsetTop;
while (el = el.offsetParent) {
left -= el.offsetLeft;
top -= el.offsetTop;
}
return {
left: left,
top: top
};
};
me.preventDefaultException = function (el, exceptions) {
for ( var i in exceptions ) {
if ( exceptions[i].test(el[i]) ) {
return true;
}
}
return false;
};
me.extend(me.eventType = {}, {
touchstart: 1,
touchmove: 1,
touchend: 1,
mousedown: 2,
mousemove: 2,
mouseup: 2,
pointerdown: 3,
pointermove: 3,
pointerup: 3,
MSPointerDown: 3,
MSPointerMove: 3,
MSPointerUp: 3
});
me.extend(me.ease = {}, {
quadratic: {
style: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)',
fn: function (k) {
return k * ( 2 - k );
}
},
circular: {
style: 'cubic-bezier(0.1, 0.57, 0.1, 1)',	// Not properly "circular" but this looks better, it should be (0.075, 0.82, 0.165, 1)
fn: function (k) {
return Math.sqrt( 1 - ( --k * k ) );
}
},
back: {
style: 'cubic-bezier(0.175, 0.885, 0.32, 1.275)',
fn: function (k) {
var b = 4;
return ( k = k - 1 ) * k * ( ( b + 1 ) * k + b ) + 1;
}
},
bounce: {
style: '',
fn: function (k) {
if ( ( k /= 1 ) < ( 1 / 2.75 ) ) {
return 7.5625 * k * k;
} else if ( k < ( 2 / 2.75 ) ) {
return 7.5625 * ( k -= ( 1.5 / 2.75 ) ) * k + 0.75;
} else if ( k < ( 2.5 / 2.75 ) ) {
return 7.5625 * ( k -= ( 2.25 / 2.75 ) ) * k + 0.9375;
} else {
return 7.5625 * ( k -= ( 2.625 / 2.75 ) ) * k + 0.984375;
}
}
},
elastic: {
style: '',
fn: function (k) {
var f = 0.22,
e = 0.4;
if ( k === 0 ) { return 0; }
if ( k == 1 ) { return 1; }
return ( e * Math.pow( 2, - 10 * k ) * Math.sin( ( k - f / 4 ) * ( 2 * Math.PI ) / f ) + 1 );
}
}
});
me.tap = function (e, eventName) {
var ev = document.createEvent('Event');
ev.initEvent(eventName, true, true);
ev.pageX = e.pageX;
ev.pageY = e.pageY;
e.target.dispatchEvent(ev);
};
me.click = function (e) {
var target = e.target,
ev;
if ( !(/(SELECT|INPUT|TEXTAREA)/i).test(target.tagName) ) {
ev = document.createEvent('MouseEvents');
ev.initMouseEvent('click', true, true, e.view, 1,
target.screenX, target.screenY, target.clientX, target.clientY,
e.ctrlKey, e.altKey, e.shiftKey, e.metaKey,
0, null);
ev._constructed = true;
target.dispatchEvent(ev);
}
};
return me;
})();
function IScroll (el, options) {
this.wrapper = typeof el == 'string' ? document.querySelector(el) : el;
this.scroller = this.wrapper.children[0];
this.scrollerStyle = this.scroller.style;		// cache style for better performance
this.options = {
resizeScrollbars: true,
mouseWheelSpeed: 20,
snapThreshold: 0.334,
startX: 0,
startY: 0,
scrollY: true,
directionLockThreshold: 5,
momentum: true,
bounce: true,
bounceTime: 600,
bounceEasing: '',
preventDefault: true,
preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT)$/ },
HWCompositing: true,
useTransition: true,
useTransform: true
};
for ( var i in options ) {
this.options[i] = options[i];
}
this.translateZ = this.options.HWCompositing && utils.hasPerspective ? ' translateZ(0)' : '';
this.options.useTransition = utils.hasTransition && this.options.useTransition;
this.options.useTransform = utils.hasTransform && this.options.useTransform;
this.options.eventPassthrough = this.options.eventPassthrough === true ? 'vertical' : this.options.eventPassthrough;
this.options.preventDefault = !this.options.eventPassthrough && this.options.preventDefault;
this.options.scrollY = this.options.eventPassthrough == 'vertical' ? false : this.options.scrollY;
this.options.scrollX = this.options.eventPassthrough == 'horizontal' ? false : this.options.scrollX;
this.options.freeScroll = this.options.freeScroll && !this.options.eventPassthrough;
this.options.directionLockThreshold = this.options.eventPassthrough ? 0 : this.options.directionLockThreshold;
this.options.bounceEasing = typeof this.options.bounceEasing == 'string' ? utils.ease[this.options.bounceEasing] || utils.ease.circular : this.options.bounceEasing;
this.options.resizePolling = this.options.resizePolling === undefined ? 60 : this.options.resizePolling;
if ( this.options.tap === true ) {
this.options.tap = 'tap';
}
if ( this.options.shrinkScrollbars == 'scale' ) {
this.options.useTransition = false;
}
this.options.invertWheelDirection = this.options.invertWheelDirection ? -1 : 1;
if ( this.options.probeType == 3 ) {
this.options.useTransition = false;	}
this.x = 0;
this.y = 0;
this.directionX = 0;
this.directionY = 0;
this._events = {};
this._init();
this.refresh();
this.scrollTo(this.options.startX, this.options.startY);
this.enable();
}
IScroll.prototype = {
version: '5.1.3',
_init: function () {
this._initEvents();
if ( this.options.scrollbars || this.options.indicators ) {
this._initIndicators();
}
if ( this.options.mouseWheel ) {
this._initWheel();
}
if ( this.options.snap ) {
this._initSnap();
}
if ( this.options.keyBindings ) {
this._initKeys();
}
},
destroy: function () {
this._initEvents(true);
this._execEvent('destroy');
},
_transitionEnd: function (e) {
if ( e.target != this.scroller || !this.isInTransition ) {
return;
}
this._transitionTime();
if ( !this.resetPosition(this.options.bounceTime) ) {
this.isInTransition = false;
this._execEvent('scrollEnd');
}
},
_start: function (e) {
if ( utils.eventType[e.type] != 1 ) {
if ( e.button !== 0 ) {
return;
}
}
if ( !this.enabled || (this.initiated && utils.eventType[e.type] !== this.initiated) ) {
return;
}
if ( this.options.preventDefault && !utils.isBadAndroid && !utils.preventDefaultException(e.target, this.options.preventDefaultException) ) {
e.preventDefault();
}
var point = e.touches ? e.touches[0] : e,
pos;
this.initiated	= utils.eventType[e.type];
this.moved		= false;
this.distX		= 0;
this.distY		= 0;
this.directionX = 0;
this.directionY = 0;
this.directionLocked = 0;
this._transitionTime();
this.startTime = utils.getTime();
if ( this.options.useTransition && this.isInTransition ) {
this.isInTransition = false;
pos = this.getComputedPosition();
this._translate(Math.round(pos.x), Math.round(pos.y));
this._execEvent('scrollEnd');
} else if ( !this.options.useTransition && this.isAnimating ) {
this.isAnimating = false;
this._execEvent('scrollEnd');
}
this.startX    = this.x;
this.startY    = this.y;
this.absStartX = this.x;
this.absStartY = this.y;
this.pointX    = point.pageX;
this.pointY    = point.pageY;
this._execEvent('beforeScrollStart');
},
_move: function (e) {
if ( !this.enabled || utils.eventType[e.type] !== this.initiated ) {
return;
}
if ( this.options.preventDefault ) {	// increases performance on Android? TODO: check!
e.preventDefault();
}
var point		= e.touches ? e.touches[0] : e,
deltaX		= point.pageX - this.pointX,
deltaY		= point.pageY - this.pointY,
timestamp	= utils.getTime(),
newX, newY,
absDistX, absDistY;
this.pointX		= point.pageX;
this.pointY		= point.pageY;
this.distX		+= deltaX;
this.distY		+= deltaY;
absDistX		= Math.abs(this.distX);
absDistY		= Math.abs(this.distY);
if ( timestamp - this.endTime > 300 && (absDistX < 10 && absDistY < 10) ) {
return;
}
if ( !this.directionLocked && !this.options.freeScroll ) {
if ( absDistX > absDistY + this.options.directionLockThreshold ) {
this.directionLocked = 'h';		// lock horizontally
} else if ( absDistY >= absDistX + this.options.directionLockThreshold ) {
this.directionLocked = 'v';		// lock vertically
} else {
this.directionLocked = 'n';		// no lock
}
}
if ( this.directionLocked == 'h' ) {
if ( this.options.eventPassthrough == 'vertical' ) {
e.preventDefault();
} else if ( this.options.eventPassthrough == 'horizontal' ) {
this.initiated = false;
return;
}
deltaY = 0;
} else if ( this.directionLocked == 'v' ) {
if ( this.options.eventPassthrough == 'horizontal' ) {
e.preventDefault();
} else if ( this.options.eventPassthrough == 'vertical' ) {
this.initiated = false;
return;
}
deltaX = 0;
}
deltaX = this.hasHorizontalScroll ? deltaX : 0;
deltaY = this.hasVerticalScroll ? deltaY : 0;
newX = this.x + deltaX;
newY = this.y + deltaY;
if ( newX > 0 || newX < this.maxScrollX ) {
newX = this.options.bounce ? this.x + deltaX / 3 : newX > 0 ? 0 : this.maxScrollX;
}
if ( newY > 0 || newY < this.maxScrollY ) {
newY = this.options.bounce ? this.y + deltaY / 3 : newY > 0 ? 0 : this.maxScrollY;
}
this.directionX = deltaX > 0 ? -1 : deltaX < 0 ? 1 : 0;
this.directionY = deltaY > 0 ? -1 : deltaY < 0 ? 1 : 0;
if ( !this.moved ) {
this._execEvent('scrollStart');
}
this.moved = true;
this._translate(newX, newY);
if ( timestamp - this.startTime > 300 ) {
this.startTime = timestamp;
this.startX = this.x;
this.startY = this.y;
if ( this.options.probeType == 1 ) {
this._execEvent('scroll');
}
}
if ( this.options.probeType > 1 ) {
this._execEvent('scroll');
}
},
_end: function (e) {
if ( !this.enabled || utils.eventType[e.type] !== this.initiated ) {
return;
}
if ( this.options.preventDefault && !utils.preventDefaultException(e.target, this.options.preventDefaultException) ) {
e.preventDefault();
}
var point = e.changedTouches ? e.changedTouches[0] : e,
momentumX,
momentumY,
duration = utils.getTime() - this.startTime,
newX = Math.round(this.x),
newY = Math.round(this.y),
distanceX = Math.abs(newX - this.startX),
distanceY = Math.abs(newY - this.startY),
time = 0,
easing = '';
this.isInTransition = 0;
this.initiated = 0;
this.endTime = utils.getTime();
if ( this.resetPosition(this.options.bounceTime) ) {
return;
}
this.scrollTo(newX, newY);	// ensures that the last position is rounded
if ( !this.moved ) {
if ( this.options.tap ) {
utils.tap(e, this.options.tap);
}
if ( this.options.click ) {
utils.click(e);
}
this._execEvent('scrollCancel');
return;
}
if ( this._events.flick && duration < 200 && distanceX < 100 && distanceY < 100 ) {
this._execEvent('flick');
return;
}
if ( this.options.momentum && duration < 300 ) {
momentumX = this.hasHorizontalScroll ? utils.momentum(this.x, this.startX, duration, this.maxScrollX, this.options.bounce ? this.wrapperWidth : 0, this.options.deceleration) : { destination: newX, duration: 0 };
momentumY = this.hasVerticalScroll ? utils.momentum(this.y, this.startY, duration, this.maxScrollY, this.options.bounce ? this.wrapperHeight : 0, this.options.deceleration) : { destination: newY, duration: 0 };
newX = momentumX.destination;
newY = momentumY.destination;
time = Math.max(momentumX.duration, momentumY.duration);
this.isInTransition = 1;
}
if ( this.options.snap ) {
var snap = this._nearestSnap(newX, newY);
this.currentPage = snap;
time = this.options.snapSpeed || Math.max(
Math.max(
Math.min(Math.abs(newX - snap.x), 1000),
Math.min(Math.abs(newY - snap.y), 1000)
), 300);
newX = snap.x;
newY = snap.y;
this.directionX = 0;
this.directionY = 0;
easing = this.options.bounceEasing;
}
if ( newX != this.x || newY != this.y ) {
if ( newX > 0 || newX < this.maxScrollX || newY > 0 || newY < this.maxScrollY ) {
easing = utils.ease.quadratic;
}
this.scrollTo(newX, newY, time, easing);
return;
}
this._execEvent('scrollEnd');
},
_resize: function () {
var that = this;
clearTimeout(this.resizeTimeout);
this.resizeTimeout = setTimeout(function () {
that.refresh();
}, this.options.resizePolling);
},
resetPosition: function (time) {
var x = this.x,
y = this.y;
time = time || 0;
if ( !this.hasHorizontalScroll || this.x > 0 ) {
x = 0;
} else if ( this.x < this.maxScrollX ) {
x = this.maxScrollX;
}
if ( !this.hasVerticalScroll || this.y > 0 ) {
y = 0;
} else if ( this.y < this.maxScrollY ) {
y = this.maxScrollY;
}
if ( x == this.x && y == this.y ) {
return false;
}
this.scrollTo(x, y, time, this.options.bounceEasing);
return true;
},
disable: function () {
this.enabled = false;
},
enable: function () {
this.enabled = true;
},
refresh: function () {
var rf = this.wrapper.offsetHeight;		// Force reflow
this.wrapperWidth	= this.wrapper.clientWidth;
this.wrapperHeight	= this.wrapper.clientHeight;
this.scrollerWidth	= this.scroller.offsetWidth;
this.scrollerHeight	= this.scroller.offsetHeight;
this.maxScrollX		= this.wrapperWidth - this.scrollerWidth;
this.maxScrollY		= this.wrapperHeight - this.scrollerHeight;
this.hasHorizontalScroll	= this.options.scrollX && this.maxScrollX < 0;
this.hasVerticalScroll		= this.options.scrollY && this.maxScrollY < 0;
if ( !this.hasHorizontalScroll ) {
this.maxScrollX = 0;
this.scrollerWidth = this.wrapperWidth;
}
if ( !this.hasVerticalScroll ) {
this.maxScrollY = 0;
this.scrollerHeight = this.wrapperHeight;
}
this.endTime = 0;
this.directionX = 0;
this.directionY = 0;
this.wrapperOffset = utils.offset(this.wrapper);
this._execEvent('refresh');
this.resetPosition();
},
on: function (type, fn) {
if ( !this._events[type] ) {
this._events[type] = [];
}
this._events[type].push(fn);
},
off: function (type, fn) {
if ( !this._events[type] ) {
return;
}
var index = this._events[type].indexOf(fn);
if ( index > -1 ) {
this._events[type].splice(index, 1);
}
},
_execEvent: function (type) {
if ( !this._events[type] ) {
return;
}
var i = 0,
l = this._events[type].length;
if ( !l ) {
return;
}
for ( ; i < l; i++ ) {
this._events[type][i].apply(this, [].slice.call(arguments, 1));
}
},
scrollBy: function (x, y, time, easing) {
x = this.x + x;
y = this.y + y;
time = time || 0;
this.scrollTo(x, y, time, easing);
},
scrollTo: function (x, y, time, easing) {
easing = easing || utils.ease.circular;
this.isInTransition = this.options.useTransition && time > 0;
if ( !time || (this.options.useTransition && easing.style) ) {
this._transitionTimingFunction(easing.style);
this._transitionTime(time);
this._translate(x, y);
} else {
this._animate(x, y, time, easing.fn);
}
},
scrollToElement: function (el, time, offsetX, offsetY, easing) {
el = el.nodeType ? el : this.scroller.querySelector(el);
if ( !el ) {
return;
}
var pos = utils.offset(el);
pos.left -= this.wrapperOffset.left;
pos.top  -= this.wrapperOffset.top;
if ( offsetX === true ) {
offsetX = Math.round(el.offsetWidth / 2 - this.wrapper.offsetWidth / 2);
}
if ( offsetY === true ) {
offsetY = Math.round(el.offsetHeight / 2 - this.wrapper.offsetHeight / 2);
}
pos.left -= offsetX || 0;
pos.top  -= offsetY || 0;
pos.left = pos.left > 0 ? 0 : pos.left < this.maxScrollX ? this.maxScrollX : pos.left;
pos.top  = pos.top  > 0 ? 0 : pos.top  < this.maxScrollY ? this.maxScrollY : pos.top;
time = time === undefined || time === null || time === 'auto' ? Math.max(Math.abs(this.x-pos.left), Math.abs(this.y-pos.top)) : time;
this.scrollTo(pos.left, pos.top, time, easing);
},
_transitionTime: function (time) {
time = time || 0;
this.scrollerStyle[utils.style.transitionDuration] = time + 'ms';
if ( !time && utils.isBadAndroid ) {
this.scrollerStyle[utils.style.transitionDuration] = '0.001s';
}
if ( this.indicators ) {
for ( var i = this.indicators.length; i--; ) {
this.indicators[i].transitionTime(time);
}
}
},
_transitionTimingFunction: function (easing) {
this.scrollerStyle[utils.style.transitionTimingFunction] = easing;
if ( this.indicators ) {
for ( var i = this.indicators.length; i--; ) {
this.indicators[i].transitionTimingFunction(easing);
}
}
},
_translate: function (x, y) {
if ( this.options.useTransform ) {
this.scrollerStyle[utils.style.transform] = 'translate(' + x + 'px,' + y + 'px)' + this.translateZ;
} else {
x = Math.round(x);
y = Math.round(y);
this.scrollerStyle.left = x + 'px';
this.scrollerStyle.top = y + 'px';
}
this.x = x;
this.y = y;
if ( this.indicators ) {
for ( var i = this.indicators.length; i--; ) {
this.indicators[i].updatePosition();
}
}
},
_initEvents: function (remove) {
var eventType = remove ? utils.removeEvent : utils.addEvent,
target = this.options.bindToWrapper ? this.wrapper : window;
eventType(window, 'orientationchange', this);
eventType(window, 'resize', this);
if ( this.options.click ) {
eventType(this.wrapper, 'click', this, true);
}
if ( !this.options.disableMouse ) {
eventType(this.wrapper, 'mousedown', this);
eventType(target, 'mousemove', this);
eventType(target, 'mousecancel', this);
eventType(target, 'mouseup', this);
}
if ( utils.hasPointer && !this.options.disablePointer ) {
eventType(this.wrapper, utils.prefixPointerEvent('pointerdown'), this);
eventType(target, utils.prefixPointerEvent('pointermove'), this);
eventType(target, utils.prefixPointerEvent('pointercancel'), this);
eventType(target, utils.prefixPointerEvent('pointerup'), this);
}
if ( utils.hasTouch && !this.options.disableTouch ) {
eventType(this.wrapper, 'touchstart', this);
eventType(target, 'touchmove', this);
eventType(target, 'touchcancel', this);
eventType(target, 'touchend', this);
}
eventType(this.scroller, 'transitionend', this);
eventType(this.scroller, 'webkitTransitionEnd', this);
eventType(this.scroller, 'oTransitionEnd', this);
eventType(this.scroller, 'MSTransitionEnd', this);
},
getComputedPosition: function () {
var matrix = window.getComputedStyle(this.scroller, null),
x, y;
if ( this.options.useTransform ) {
matrix = matrix[utils.style.transform].split(')')[0].split(', ');
x = +(matrix[12] || matrix[4]);
y = +(matrix[13] || matrix[5]);
} else {
x = +matrix.left.replace(/[^-\d.]/g, '');
y = +matrix.top.replace(/[^-\d.]/g, '');
}
return { x: x, y: y };
},
_initIndicators: function () {
var interactive = this.options.interactiveScrollbars,
customStyle = typeof this.options.scrollbars != 'string',
indicators = [],
indicator;
var that = this;
this.indicators = [];
if ( this.options.scrollbars ) {
if ( this.options.scrollY ) {
indicator = {
el: createDefaultScrollbar('v', interactive, this.options.scrollbars),
interactive: interactive,
defaultScrollbars: true,
customStyle: customStyle,
resize: this.options.resizeScrollbars,
shrink: this.options.shrinkScrollbars,
fade: this.options.fadeScrollbars,
listenX: false
};
this.wrapper.appendChild(indicator.el);
indicators.push(indicator);
}
if ( this.options.scrollX ) {
indicator = {
el: createDefaultScrollbar('h', interactive, this.options.scrollbars),
interactive: interactive,
defaultScrollbars: true,
customStyle: customStyle,
resize: this.options.resizeScrollbars,
shrink: this.options.shrinkScrollbars,
fade: this.options.fadeScrollbars,
listenY: false
};
this.wrapper.appendChild(indicator.el);
indicators.push(indicator);
}
}
if ( this.options.indicators ) {
indicators = indicators.concat(this.options.indicators);
}
for ( var i = indicators.length; i--; ) {
this.indicators.push( new Indicator(this, indicators[i]) );
}
function _indicatorsMap (fn) {
for ( var i = that.indicators.length; i--; ) {
fn.call(that.indicators[i]);
}
}
if ( this.options.fadeScrollbars ) {
this.on('scrollEnd', function () {
_indicatorsMap(function () {
this.fade();
});
});
this.on('scrollCancel', function () {
_indicatorsMap(function () {
this.fade();
});
});
this.on('scrollStart', function () {
_indicatorsMap(function () {
this.fade(1);
});
});
this.on('beforeScrollStart', function () {
_indicatorsMap(function () {
this.fade(1, true);
});
});
}
this.on('refresh', function () {
_indicatorsMap(function () {
this.refresh();
});
});
this.on('destroy', function () {
_indicatorsMap(function () {
this.destroy();
});
delete this.indicators;
});
},
_initWheel: function () {
utils.addEvent(this.wrapper, 'wheel', this);
utils.addEvent(this.wrapper, 'mousewheel', this);
utils.addEvent(this.wrapper, 'DOMMouseScroll', this);
this.on('destroy', function () {
utils.removeEvent(this.wrapper, 'wheel', this);
utils.removeEvent(this.wrapper, 'mousewheel', this);
utils.removeEvent(this.wrapper, 'DOMMouseScroll', this);
});
},
_wheel: function (e) {
if ( !this.enabled ) {
return;
}
e.preventDefault();
e.stopPropagation();
var wheelDeltaX, wheelDeltaY,
newX, newY,
that = this;
if ( this.wheelTimeout === undefined ) {
that._execEvent('scrollStart');
}
clearTimeout(this.wheelTimeout);
this.wheelTimeout = setTimeout(function () {
that._execEvent('scrollEnd');
that.wheelTimeout = undefined;
}, 400);
if ( 'deltaX' in e ) {
if (e.deltaMode === 1) {
wheelDeltaX = -e.deltaX * this.options.mouseWheelSpeed;
wheelDeltaY = -e.deltaY * this.options.mouseWheelSpeed;
} else {
wheelDeltaX = -e.deltaX;
wheelDeltaY = -e.deltaY;
}
} else if ( 'wheelDeltaX' in e ) {
wheelDeltaX = e.wheelDeltaX / 120 * this.options.mouseWheelSpeed;
wheelDeltaY = e.wheelDeltaY / 120 * this.options.mouseWheelSpeed;
} else if ( 'wheelDelta' in e ) {
wheelDeltaX = wheelDeltaY = e.wheelDelta / 120 * this.options.mouseWheelSpeed;
} else if ( 'detail' in e ) {
wheelDeltaX = wheelDeltaY = -e.detail / 3 * this.options.mouseWheelSpeed;
} else {
return;
}
wheelDeltaX *= this.options.invertWheelDirection;
wheelDeltaY *= this.options.invertWheelDirection;
if ( !this.hasVerticalScroll ) {
wheelDeltaX = wheelDeltaY;
wheelDeltaY = 0;
}
if ( this.options.snap ) {
newX = this.currentPage.pageX;
newY = this.currentPage.pageY;
if ( wheelDeltaX > 0 ) {
newX--;
} else if ( wheelDeltaX < 0 ) {
newX++;
}
if ( wheelDeltaY > 0 ) {
newY--;
} else if ( wheelDeltaY < 0 ) {
newY++;
}
this.goToPage(newX, newY);
return;
}
newX = this.x + Math.round(this.hasHorizontalScroll ? wheelDeltaX : 0);
newY = this.y + Math.round(this.hasVerticalScroll ? wheelDeltaY : 0);
if ( newX > 0 ) {
newX = 0;
} else if ( newX < this.maxScrollX ) {
newX = this.maxScrollX;
}
if ( newY > 0 ) {
newY = 0;
} else if ( newY < this.maxScrollY ) {
newY = this.maxScrollY;
}
this.scrollTo(newX, newY, 0);
if ( this.options.probeType > 1 ) {
this._execEvent('scroll');
}
},
_initSnap: function () {
this.currentPage = {};
if ( typeof this.options.snap == 'string' ) {
this.options.snap = this.scroller.querySelectorAll(this.options.snap);
}
this.on('refresh', function () {
var i = 0, l,
m = 0, n,
cx, cy,
x = 0, y,
stepX = this.options.snapStepX || this.wrapperWidth,
stepY = this.options.snapStepY || this.wrapperHeight,
el;
this.pages = [];
if ( !this.wrapperWidth || !this.wrapperHeight || !this.scrollerWidth || !this.scrollerHeight ) {
return;
}
if ( this.options.snap === true ) {
cx = Math.round( stepX / 2 );
cy = Math.round( stepY / 2 );
while ( x > -this.scrollerWidth ) {
this.pages[i] = [];
l = 0;
y = 0;
while ( y > -this.scrollerHeight ) {
this.pages[i][l] = {
x: Math.max(x, this.maxScrollX),
y: Math.max(y, this.maxScrollY),
width: stepX,
height: stepY,
cx: x - cx,
cy: y - cy
};
y -= stepY;
l++;
}
x -= stepX;
i++;
}
} else {
el = this.options.snap;
l = el.length;
n = -1;
for ( ; i < l; i++ ) {
if ( i === 0 || el[i].offsetLeft <= el[i-1].offsetLeft ) {
m = 0;
n++;
}
if ( !this.pages[m] ) {
this.pages[m] = [];
}
x = Math.max(-el[i].offsetLeft, this.maxScrollX);
y = Math.max(-el[i].offsetTop, this.maxScrollY);
cx = x - Math.round(el[i].offsetWidth / 2);
cy = y - Math.round(el[i].offsetHeight / 2);
this.pages[m][n] = {
x: x,
y: y,
width: el[i].offsetWidth,
height: el[i].offsetHeight,
cx: cx,
cy: cy
};
if ( x > this.maxScrollX ) {
m++;
}
}
}
this.goToPage(this.currentPage.pageX || 0, this.currentPage.pageY || 0, 0);
if ( this.options.snapThreshold % 1 === 0 ) {
this.snapThresholdX = this.options.snapThreshold;
this.snapThresholdY = this.options.snapThreshold;
} else {
this.snapThresholdX = Math.round(this.pages[this.currentPage.pageX][this.currentPage.pageY].width * this.options.snapThreshold);
this.snapThresholdY = Math.round(this.pages[this.currentPage.pageX][this.currentPage.pageY].height * this.options.snapThreshold);
}
});
this.on('flick', function () {
var time = this.options.snapSpeed || Math.max(
Math.max(
Math.min(Math.abs(this.x - this.startX), 1000),
Math.min(Math.abs(this.y - this.startY), 1000)
), 300);
this.goToPage(
this.currentPage.pageX + this.directionX,
this.currentPage.pageY + this.directionY,
time
);
});
},
_nearestSnap: function (x, y) {
if ( !this.pages.length ) {
return { x: 0, y: 0, pageX: 0, pageY: 0 };
}
var i = 0,
l = this.pages.length,
m = 0;
if ( Math.abs(x - this.absStartX) < this.snapThresholdX &&
Math.abs(y - this.absStartY) < this.snapThresholdY ) {
return this.currentPage;
}
if ( x > 0 ) {
x = 0;
} else if ( x < this.maxScrollX ) {
x = this.maxScrollX;
}
if ( y > 0 ) {
y = 0;
} else if ( y < this.maxScrollY ) {
y = this.maxScrollY;
}
for ( ; i < l; i++ ) {
if ( x >= this.pages[i][0].cx ) {
x = this.pages[i][0].x;
break;
}
}
l = this.pages[i].length;
for ( ; m < l; m++ ) {
if ( y >= this.pages[0][m].cy ) {
y = this.pages[0][m].y;
break;
}
}
if ( i == this.currentPage.pageX ) {
i += this.directionX;
if ( i < 0 ) {
i = 0;
} else if ( i >= this.pages.length ) {
i = this.pages.length - 1;
}
x = this.pages[i][0].x;
}
if ( m == this.currentPage.pageY ) {
m += this.directionY;
if ( m < 0 ) {
m = 0;
} else if ( m >= this.pages[0].length ) {
m = this.pages[0].length - 1;
}
y = this.pages[0][m].y;
}
return {
x: x,
y: y,
pageX: i,
pageY: m
};
},
goToPage: function (x, y, time, easing) {
easing = easing || this.options.bounceEasing;
if ( x >= this.pages.length ) {
x = this.pages.length - 1;
} else if ( x < 0 ) {
x = 0;
}
if ( y >= this.pages[x].length ) {
y = this.pages[x].length - 1;
} else if ( y < 0 ) {
y = 0;
}
var posX = this.pages[x][y].x,
posY = this.pages[x][y].y;
time = time === undefined ? this.options.snapSpeed || Math.max(
Math.max(
Math.min(Math.abs(posX - this.x), 1000),
Math.min(Math.abs(posY - this.y), 1000)
), 300) : time;
this.currentPage = {
x: posX,
y: posY,
pageX: x,
pageY: y
};
this.scrollTo(posX, posY, time, easing);
},
next: function (time, easing) {
var x = this.currentPage.pageX,
y = this.currentPage.pageY;
x++;
if ( x >= this.pages.length && this.hasVerticalScroll ) {
x = 0;
y++;
}
this.goToPage(x, y, time, easing);
},
prev: function (time, easing) {
var x = this.currentPage.pageX,
y = this.currentPage.pageY;
x--;
if ( x < 0 && this.hasVerticalScroll ) {
x = 0;
y--;
}
this.goToPage(x, y, time, easing);
},
_initKeys: function (e) {
var keys = {
pageUp: 33,
pageDown: 34,
end: 35,
home: 36,
left: 37,
up: 38,
right: 39,
down: 40
};
var i;
if ( typeof this.options.keyBindings == 'object' ) {
for ( i in this.options.keyBindings ) {
if ( typeof this.options.keyBindings[i] == 'string' ) {
this.options.keyBindings[i] = this.options.keyBindings[i].toUpperCase().charCodeAt(0);
}
}
} else {
this.options.keyBindings = {};
}
for ( i in keys ) {
this.options.keyBindings[i] = this.options.keyBindings[i] || keys[i];
}
utils.addEvent(window, 'keydown', this);
this.on('destroy', function () {
utils.removeEvent(window, 'keydown', this);
});
},
_key: function (e) {
if ( !this.enabled ) {
return;
}
var snap = this.options.snap,	// we are using this alot, better to cache it
newX = snap ? this.currentPage.pageX : this.x,
newY = snap ? this.currentPage.pageY : this.y,
now = utils.getTime(),
prevTime = this.keyTime || 0,
acceleration = 0.250,
pos;
if ( this.options.useTransition && this.isInTransition ) {
pos = this.getComputedPosition();
this._translate(Math.round(pos.x), Math.round(pos.y));
this.isInTransition = false;
}
this.keyAcceleration = now - prevTime < 200 ? Math.min(this.keyAcceleration + acceleration, 50) : 0;
switch ( e.keyCode ) {
case this.options.keyBindings.pageUp:
if ( this.hasHorizontalScroll && !this.hasVerticalScroll ) {
newX += snap ? 1 : this.wrapperWidth;
} else {
newY += snap ? 1 : this.wrapperHeight;
}
break;
case this.options.keyBindings.pageDown:
if ( this.hasHorizontalScroll && !this.hasVerticalScroll ) {
newX -= snap ? 1 : this.wrapperWidth;
} else {
newY -= snap ? 1 : this.wrapperHeight;
}
break;
case this.options.keyBindings.end:
newX = snap ? this.pages.length-1 : this.maxScrollX;
newY = snap ? this.pages[0].length-1 : this.maxScrollY;
break;
case this.options.keyBindings.home:
newX = 0;
newY = 0;
break;
case this.options.keyBindings.left:
newX += snap ? -1 : 5 + this.keyAcceleration>>0;
break;
case this.options.keyBindings.up:
newY += snap ? 1 : 5 + this.keyAcceleration>>0;
break;
case this.options.keyBindings.right:
newX -= snap ? -1 : 5 + this.keyAcceleration>>0;
break;
case this.options.keyBindings.down:
newY -= snap ? 1 : 5 + this.keyAcceleration>>0;
break;
default:
return;
}
if ( snap ) {
this.goToPage(newX, newY);
return;
}
if ( newX > 0 ) {
newX = 0;
this.keyAcceleration = 0;
} else if ( newX < this.maxScrollX ) {
newX = this.maxScrollX;
this.keyAcceleration = 0;
}
if ( newY > 0 ) {
newY = 0;
this.keyAcceleration = 0;
} else if ( newY < this.maxScrollY ) {
newY = this.maxScrollY;
this.keyAcceleration = 0;
}
this.scrollTo(newX, newY, 0);
this.keyTime = now;
},
_animate: function (destX, destY, duration, easingFn) {
var that = this,
startX = this.x,
startY = this.y,
startTime = utils.getTime(),
destTime = startTime + duration;
function step () {
var now = utils.getTime(),
newX, newY,
easing;
if ( now >= destTime ) {
that.isAnimating = false;
that._translate(destX, destY);
if ( !that.resetPosition(that.options.bounceTime) ) {
that._execEvent('scrollEnd');
}
return;
}
now = ( now - startTime ) / duration;
easing = easingFn(now);
newX = ( destX - startX ) * easing + startX;
newY = ( destY - startY ) * easing + startY;
that._translate(newX, newY);
if ( that.isAnimating ) {
rAF(step);
}
if ( that.options.probeType == 3 ) {
that._execEvent('scroll');
}
}
this.isAnimating = true;
step();
},
handleEvent: function (e) {
switch ( e.type ) {
case 'touchstart':
case 'pointerdown':
case 'MSPointerDown':
case 'mousedown':
this._start(e);
break;
case 'touchmove':
case 'pointermove':
case 'MSPointerMove':
case 'mousemove':
this._move(e);
break;
case 'touchend':
case 'pointerup':
case 'MSPointerUp':
case 'mouseup':
case 'touchcancel':
case 'pointercancel':
case 'MSPointerCancel':
case 'mousecancel':
this._end(e);
break;
case 'orientationchange':
case 'resize':
this._resize();
break;
case 'transitionend':
case 'webkitTransitionEnd':
case 'oTransitionEnd':
case 'MSTransitionEnd':
this._transitionEnd(e);
break;
case 'wheel':
case 'DOMMouseScroll':
case 'mousewheel':
this._wheel(e);
break;
case 'keydown':
this._key(e);
break;
case 'click':
if ( !e._constructed ) {
e.preventDefault();
e.stopPropagation();
}
break;
}
}
};
function createDefaultScrollbar (direction, interactive, type) {
var scrollbar = document.createElement('div'),
indicator = document.createElement('div');
if ( type === true ) {
scrollbar.style.cssText = 'position:absolute;z-index:9999';
indicator.style.cssText = '-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:absolute;background:rgba(0,0,0,0.5);border:1px solid rgba(255,255,255,0.9);border-radius:3px';
}
indicator.className = 'iScrollIndicator';
if ( direction == 'h' ) {
if ( type === true ) {
scrollbar.style.cssText += ';height:7px;left:2px;right:2px;bottom:0';
indicator.style.height = '100%';
}
scrollbar.className = 'iScrollHorizontalScrollbar';
} else {
if ( type === true ) {
scrollbar.style.cssText += ';width:7px;bottom:2px;top:2px;right:1px';
indicator.style.width = '100%';
}
scrollbar.className = 'iScrollVerticalScrollbar';
}
scrollbar.style.cssText += ';overflow:hidden';
if ( !interactive ) {
scrollbar.style.pointerEvents = 'none';
}
scrollbar.appendChild(indicator);
return scrollbar;
}
function Indicator (scroller, options) {
this.wrapper = typeof options.el == 'string' ? document.querySelector(options.el) : options.el;
this.wrapperStyle = this.wrapper.style;
this.indicator = this.wrapper.children[0];
this.indicatorStyle = this.indicator.style;
this.scroller = scroller;
this.options = {
listenX: true,
listenY: true,
interactive: false,
resize: true,
defaultScrollbars: false,
shrink: false,
fade: false,
speedRatioX: 0,
speedRatioY: 0
};
for ( var i in options ) {
this.options[i] = options[i];
}
this.sizeRatioX = 1;
this.sizeRatioY = 1;
this.maxPosX = 0;
this.maxPosY = 0;
if ( this.options.interactive ) {
if ( !this.options.disableTouch ) {
utils.addEvent(this.indicator, 'touchstart', this);
utils.addEvent(window, 'touchend', this);
}
if ( !this.options.disablePointer ) {
utils.addEvent(this.indicator, utils.prefixPointerEvent('pointerdown'), this);
utils.addEvent(window, utils.prefixPointerEvent('pointerup'), this);
}
if ( !this.options.disableMouse ) {
utils.addEvent(this.indicator, 'mousedown', this);
utils.addEvent(window, 'mouseup', this);
}
}
if ( this.options.fade ) {
this.wrapperStyle[utils.style.transform] = this.scroller.translateZ;
this.wrapperStyle[utils.style.transitionDuration] = utils.isBadAndroid ? '0.001s' : '0ms';
this.wrapperStyle.opacity = '0';
}
}
Indicator.prototype = {
handleEvent: function (e) {
switch ( e.type ) {
case 'touchstart':
case 'pointerdown':
case 'MSPointerDown':
case 'mousedown':
this._start(e);
break;
case 'touchmove':
case 'pointermove':
case 'MSPointerMove':
case 'mousemove':
this._move(e);
break;
case 'touchend':
case 'pointerup':
case 'MSPointerUp':
case 'mouseup':
case 'touchcancel':
case 'pointercancel':
case 'MSPointerCancel':
case 'mousecancel':
this._end(e);
break;
}
},
destroy: function () {
if ( this.options.interactive ) {
utils.removeEvent(this.indicator, 'touchstart', this);
utils.removeEvent(this.indicator, utils.prefixPointerEvent('pointerdown'), this);
utils.removeEvent(this.indicator, 'mousedown', this);
utils.removeEvent(window, 'touchmove', this);
utils.removeEvent(window, utils.prefixPointerEvent('pointermove'), this);
utils.removeEvent(window, 'mousemove', this);
utils.removeEvent(window, 'touchend', this);
utils.removeEvent(window, utils.prefixPointerEvent('pointerup'), this);
utils.removeEvent(window, 'mouseup', this);
}
if ( this.options.defaultScrollbars ) {
this.wrapper.parentNode.removeChild(this.wrapper);
}
},
_start: function (e) {
var point = e.touches ? e.touches[0] : e;
e.preventDefault();
e.stopPropagation();
this.transitionTime();
this.initiated = true;
this.moved = false;
this.lastPointX	= point.pageX;
this.lastPointY	= point.pageY;
this.startTime	= utils.getTime();
if ( !this.options.disableTouch ) {
utils.addEvent(window, 'touchmove', this);
}
if ( !this.options.disablePointer ) {
utils.addEvent(window, utils.prefixPointerEvent('pointermove'), this);
}
if ( !this.options.disableMouse ) {
utils.addEvent(window, 'mousemove', this);
}
this.scroller._execEvent('beforeScrollStart');
},
_move: function (e) {
var point = e.touches ? e.touches[0] : e,
deltaX, deltaY,
newX, newY,
timestamp = utils.getTime();
if ( !this.moved ) {
this.scroller._execEvent('scrollStart');
}
this.moved = true;
deltaX = point.pageX - this.lastPointX;
this.lastPointX = point.pageX;
deltaY = point.pageY - this.lastPointY;
this.lastPointY = point.pageY;
newX = this.x + deltaX;
newY = this.y + deltaY;
this._pos(newX, newY);
if ( this.scroller.options.probeType == 1 && timestamp - this.startTime > 300 ) {
this.startTime = timestamp;
this.scroller._execEvent('scroll');
} else if ( this.scroller.options.probeType > 1 ) {
this.scroller._execEvent('scroll');
}
e.preventDefault();
e.stopPropagation();
},
_end: function (e) {
if ( !this.initiated ) {
return;
}
this.initiated = false;
e.preventDefault();
e.stopPropagation();
utils.removeEvent(window, 'touchmove', this);
utils.removeEvent(window, utils.prefixPointerEvent('pointermove'), this);
utils.removeEvent(window, 'mousemove', this);
if ( this.scroller.options.snap ) {
var snap = this.scroller._nearestSnap(this.scroller.x, this.scroller.y);
var time = this.options.snapSpeed || Math.max(
Math.max(
Math.min(Math.abs(this.scroller.x - snap.x), 1000),
Math.min(Math.abs(this.scroller.y - snap.y), 1000)
), 300);
if ( this.scroller.x != snap.x || this.scroller.y != snap.y ) {
this.scroller.directionX = 0;
this.scroller.directionY = 0;
this.scroller.currentPage = snap;
this.scroller.scrollTo(snap.x, snap.y, time, this.scroller.options.bounceEasing);
}
}
if ( this.moved ) {
this.scroller._execEvent('scrollEnd');
}
},
transitionTime: function (time) {
time = time || 0;
this.indicatorStyle[utils.style.transitionDuration] = time + 'ms';
if ( !time && utils.isBadAndroid ) {
this.indicatorStyle[utils.style.transitionDuration] = '0.001s';
}
},
transitionTimingFunction: function (easing) {
this.indicatorStyle[utils.style.transitionTimingFunction] = easing;
},
refresh: function () {
this.transitionTime();
if ( this.options.listenX && !this.options.listenY ) {
this.indicatorStyle.display = this.scroller.hasHorizontalScroll ? 'block' : 'none';
} else if ( this.options.listenY && !this.options.listenX ) {
this.indicatorStyle.display = this.scroller.hasVerticalScroll ? 'block' : 'none';
} else {
this.indicatorStyle.display = this.scroller.hasHorizontalScroll || this.scroller.hasVerticalScroll ? 'block' : 'none';
}
if ( this.scroller.hasHorizontalScroll && this.scroller.hasVerticalScroll ) {
utils.addClass(this.wrapper, 'iScrollBothScrollbars');
utils.removeClass(this.wrapper, 'iScrollLoneScrollbar');
if ( this.options.defaultScrollbars && this.options.customStyle ) {
if ( this.options.listenX ) {
this.wrapper.style.right = '8px';
} else {
this.wrapper.style.bottom = '8px';
}
}
} else {
utils.removeClass(this.wrapper, 'iScrollBothScrollbars');
utils.addClass(this.wrapper, 'iScrollLoneScrollbar');
if ( this.options.defaultScrollbars && this.options.customStyle ) {
if ( this.options.listenX ) {
this.wrapper.style.right = '2px';
} else {
this.wrapper.style.bottom = '2px';
}
}
}
var r = this.wrapper.offsetHeight;	// force refresh
if ( this.options.listenX ) {
this.wrapperWidth = this.wrapper.clientWidth;
if ( this.options.resize ) {
this.indicatorWidth = Math.max(Math.round(this.wrapperWidth * this.wrapperWidth / (this.scroller.scrollerWidth || this.wrapperWidth || 1)), 8);
this.indicatorStyle.width = this.indicatorWidth + 'px';
} else {
this.indicatorWidth = this.indicator.clientWidth;
}
this.maxPosX = this.wrapperWidth - this.indicatorWidth;
if ( this.options.shrink == 'clip' ) {
this.minBoundaryX = -this.indicatorWidth + 8;
this.maxBoundaryX = this.wrapperWidth - 8;
} else {
this.minBoundaryX = 0;
this.maxBoundaryX = this.maxPosX;
}
this.sizeRatioX = this.options.speedRatioX || (this.scroller.maxScrollX && (this.maxPosX / this.scroller.maxScrollX));
}
if ( this.options.listenY ) {
this.wrapperHeight = this.wrapper.clientHeight;
if ( this.options.resize ) {
this.indicatorHeight = Math.max(Math.round(this.wrapperHeight * this.wrapperHeight / (this.scroller.scrollerHeight || this.wrapperHeight || 1)), 8);
this.indicatorStyle.height = this.indicatorHeight + 'px';
} else {
this.indicatorHeight = this.indicator.clientHeight;
}
this.maxPosY = this.wrapperHeight - this.indicatorHeight;
if ( this.options.shrink == 'clip' ) {
this.minBoundaryY = -this.indicatorHeight + 8;
this.maxBoundaryY = this.wrapperHeight - 8;
} else {
this.minBoundaryY = 0;
this.maxBoundaryY = this.maxPosY;
}
this.maxPosY = this.wrapperHeight - this.indicatorHeight;
this.sizeRatioY = this.options.speedRatioY || (this.scroller.maxScrollY && (this.maxPosY / this.scroller.maxScrollY));
}
this.updatePosition();
},
updatePosition: function () {
var x = this.options.listenX && Math.round(this.sizeRatioX * this.scroller.x) || 0,
y = this.options.listenY && Math.round(this.sizeRatioY * this.scroller.y) || 0;
if ( !this.options.ignoreBoundaries ) {
if ( x < this.minBoundaryX ) {
if ( this.options.shrink == 'scale' ) {
this.width = Math.max(this.indicatorWidth + x, 8);
this.indicatorStyle.width = this.width + 'px';
}
x = this.minBoundaryX;
} else if ( x > this.maxBoundaryX ) {
if ( this.options.shrink == 'scale' ) {
this.width = Math.max(this.indicatorWidth - (x - this.maxPosX), 8);
this.indicatorStyle.width = this.width + 'px';
x = this.maxPosX + this.indicatorWidth - this.width;
} else {
x = this.maxBoundaryX;
}
} else if ( this.options.shrink == 'scale' && this.width != this.indicatorWidth ) {
this.width = this.indicatorWidth;
this.indicatorStyle.width = this.width + 'px';
}
if ( y < this.minBoundaryY ) {
if ( this.options.shrink == 'scale' ) {
this.height = Math.max(this.indicatorHeight + y * 3, 8);
this.indicatorStyle.height = this.height + 'px';
}
y = this.minBoundaryY;
} else if ( y > this.maxBoundaryY ) {
if ( this.options.shrink == 'scale' ) {
this.height = Math.max(this.indicatorHeight - (y - this.maxPosY) * 3, 8);
this.indicatorStyle.height = this.height + 'px';
y = this.maxPosY + this.indicatorHeight - this.height;
} else {
y = this.maxBoundaryY;
}
} else if ( this.options.shrink == 'scale' && this.height != this.indicatorHeight ) {
this.height = this.indicatorHeight;
this.indicatorStyle.height = this.height + 'px';
}
}
this.x = x;
this.y = y;
if ( this.scroller.options.useTransform ) {
this.indicatorStyle[utils.style.transform] = 'translate(' + x + 'px,' + y + 'px)' + this.scroller.translateZ;
} else {
this.indicatorStyle.left = x + 'px';
this.indicatorStyle.top = y + 'px';
}
},
_pos: function (x, y) {
if ( x < 0 ) {
x = 0;
} else if ( x > this.maxPosX ) {
x = this.maxPosX;
}
if ( y < 0 ) {
y = 0;
} else if ( y > this.maxPosY ) {
y = this.maxPosY;
}
x = this.options.listenX ? Math.round(x / this.sizeRatioX) : this.scroller.x;
y = this.options.listenY ? Math.round(y / this.sizeRatioY) : this.scroller.y;
this.scroller.scrollTo(x, y);
},
fade: function (val, hold) {
if ( hold && !this.visible ) {
return;
}
clearTimeout(this.fadeTimeout);
this.fadeTimeout = null;
var time = val ? 250 : 500,
delay = val ? 0 : 300;
val = val ? '1' : '0';
this.wrapperStyle[utils.style.transitionDuration] = time + 'ms';
this.fadeTimeout = setTimeout((function (val) {
this.wrapperStyle.opacity = val;
this.visible = +val;
}).bind(this, val), delay);
}
};
IScroll.utils = utils;
if ( typeof module != 'undefined' && module.exports ) {
module.exports = IScroll;
} else {
window.IScroll = IScroll;
}
})(window, document, Math);
!function($) {
function Inputmask(alias, options) {
return this instanceof Inputmask ? ($.isPlainObject(alias) ? options = alias : (options = options || {},
options.alias = alias), this.el = void 0, this.opts = $.extend(!0, {}, this.defaults, options),
this.noMasksCache = options && void 0 !== options.definitions, this.userOptions = options || {},
this.events = {}, void resolveAlias(this.opts.alias, options, this.opts)) : new Inputmask(alias, options);
}
function isInputEventSupported(eventName) {
var el = document.createElement("input"), evName = "on" + eventName, isSupported = evName in el;
return isSupported || (el.setAttribute(evName, "return;"), isSupported = "function" == typeof el[evName]),
el = null, isSupported;
}
function isElementTypeSupported(input, opts) {
var elementType = input.getAttribute("type"), isSupported = "INPUT" === input.tagName && $.inArray(elementType, opts.supportsInputType) !== -1 || input.isContentEditable || "TEXTAREA" === input.tagName;
if (!isSupported && "INPUT" === input.tagName) {
var el = document.createElement("input");
el.setAttribute("type", elementType), isSupported = "text" === el.type, el = null;
}
return isSupported;
}
function resolveAlias(aliasStr, options, opts) {
var aliasDefinition = opts.aliases[aliasStr];
return aliasDefinition ? (aliasDefinition.alias && resolveAlias(aliasDefinition.alias, void 0, opts),
$.extend(!0, opts, aliasDefinition), $.extend(!0, opts, options), !0) : (null === opts.mask && (opts.mask = aliasStr),
!1);
}
function importAttributeOptions(npt, opts, userOptions) {
function importOption(option, optionData) {
optionData = void 0 !== optionData ? optionData : npt.getAttribute("data-inputmask-" + option),
null !== optionData && ("string" == typeof optionData && (0 === option.indexOf("on") ? optionData = window[optionData] : "false" === optionData ? optionData = !1 : "true" === optionData && (optionData = !0)),
userOptions[option] = optionData);
}
var option, dataoptions, optionData, p, attrOptions = npt.getAttribute("data-inputmask");
if (attrOptions && "" !== attrOptions && (attrOptions = attrOptions.replace(new RegExp("'", "g"), '"'),
dataoptions = JSON.parse("{" + attrOptions + "}")), dataoptions) {
optionData = void 0;
for (p in dataoptions) if ("alias" === p.toLowerCase()) {
optionData = dataoptions[p];
break;
}
}
importOption("alias", optionData), userOptions.alias && resolveAlias(userOptions.alias, userOptions, opts);
for (option in opts) {
if (dataoptions) {
optionData = void 0;
for (p in dataoptions) if (p.toLowerCase() === option.toLowerCase()) {
optionData = dataoptions[p];
break;
}
}
importOption(option, optionData);
}
return $.extend(!0, opts, userOptions), opts;
}
function generateMaskSet(opts, nocache) {
function analyseMask(mask) {
function MaskToken(isGroup, isOptional, isQuantifier, isAlternator) {
this.matches = [], this.isGroup = isGroup || !1, this.isOptional = isOptional || !1,
this.isQuantifier = isQuantifier || !1, this.isAlternator = isAlternator || !1,
this.quantifier = {
min: 1,
max: 1
};
}
function insertTestDefinition(mtoken, element, position) {
var maskdef = opts.definitions[element];
position = void 0 !== position ? position : mtoken.matches.length;
var prevMatch = mtoken.matches[position - 1];
if (maskdef && !escaped) {
maskdef.placeholder = $.isFunction(maskdef.placeholder) ? maskdef.placeholder(opts) : maskdef.placeholder;
for (var prevalidators = maskdef.prevalidator, prevalidatorsL = prevalidators ? prevalidators.length : 0, i = 1; i < maskdef.cardinality; i++) {
var prevalidator = prevalidatorsL >= i ? prevalidators[i - 1] : [], validator = prevalidator.validator, cardinality = prevalidator.cardinality;
mtoken.matches.splice(position++, 0, {
fn: validator ? "string" == typeof validator ? new RegExp(validator) : new function() {
this.test = validator;
}() : new RegExp("."),
cardinality: cardinality ? cardinality : 1,
optionality: mtoken.isOptional,
newBlockMarker: void 0 === prevMatch || prevMatch.def !== (maskdef.definitionSymbol || element),
casing: maskdef.casing,
def: maskdef.definitionSymbol || element,
placeholder: maskdef.placeholder,
mask: element
}), prevMatch = mtoken.matches[position - 1];
}
mtoken.matches.splice(position++, 0, {
fn: maskdef.validator ? "string" == typeof maskdef.validator ? new RegExp(maskdef.validator) : new function() {
this.test = maskdef.validator;
}() : new RegExp("."),
cardinality: maskdef.cardinality,
optionality: mtoken.isOptional,
newBlockMarker: void 0 === prevMatch || prevMatch.def !== (maskdef.definitionSymbol || element),
casing: maskdef.casing,
def: maskdef.definitionSymbol || element,
placeholder: maskdef.placeholder,
mask: element
});
} else mtoken.matches.splice(position++, 0, {
fn: null,
cardinality: 0,
optionality: mtoken.isOptional,
newBlockMarker: void 0 === prevMatch || prevMatch.def !== element,
casing: null,
def: opts.staticDefinitionSymbol || element,
placeholder: void 0 !== opts.staticDefinitionSymbol ? element : void 0,
mask: element
}), escaped = !1;
}
function verifyGroupMarker(lastMatch, isOpenGroup) {
lastMatch.isGroup && (lastMatch.isGroup = !1, insertTestDefinition(lastMatch, opts.groupmarker.start, 0),
isOpenGroup !== !0 && insertTestDefinition(lastMatch, opts.groupmarker.end));
}
function maskCurrentToken(m, currentToken, lastMatch, extraCondition) {
currentToken.matches.length > 0 && (void 0 === extraCondition || extraCondition) && (lastMatch = currentToken.matches[currentToken.matches.length - 1],
verifyGroupMarker(lastMatch)), insertTestDefinition(currentToken, m);
}
function defaultCase() {
if (openenings.length > 0) {
if (currentOpeningToken = openenings[openenings.length - 1], maskCurrentToken(m, currentOpeningToken, lastMatch, !currentOpeningToken.isAlternator),
currentOpeningToken.isAlternator) {
alternator = openenings.pop();
for (var mndx = 0; mndx < alternator.matches.length; mndx++) alternator.matches[mndx].isGroup = !1;
openenings.length > 0 ? (currentOpeningToken = openenings[openenings.length - 1],
currentOpeningToken.matches.push(alternator)) : currentToken.matches.push(alternator);
}
} else maskCurrentToken(m, currentToken, lastMatch);
}
function reverseTokens(maskToken) {
function reverseStatic(st) {
return st === opts.optionalmarker.start ? st = opts.optionalmarker.end : st === opts.optionalmarker.end ? st = opts.optionalmarker.start : st === opts.groupmarker.start ? st = opts.groupmarker.end : st === opts.groupmarker.end && (st = opts.groupmarker.start),
st;
}
maskToken.matches = maskToken.matches.reverse();
for (var match in maskToken.matches) {
var intMatch = parseInt(match);
if (maskToken.matches[match].isQuantifier && maskToken.matches[intMatch + 1] && maskToken.matches[intMatch + 1].isGroup) {
var qt = maskToken.matches[match];
maskToken.matches.splice(match, 1), maskToken.matches.splice(intMatch + 1, 0, qt);
}
void 0 !== maskToken.matches[match].matches ? maskToken.matches[match] = reverseTokens(maskToken.matches[match]) : maskToken.matches[match] = reverseStatic(maskToken.matches[match]);
}
return maskToken;
}
for (var match, m, openingToken, currentOpeningToken, alternator, lastMatch, groupToken, tokenizer = /(?:[?*+]|\{[0-9\+\*]+(?:,[0-9\+\*]*)?\})|[^.?*+^${[]()|\\]+|./g, escaped = !1, currentToken = new MaskToken(), openenings = [], maskTokens = []; match = tokenizer.exec(mask); ) if (m = match[0],
escaped) defaultCase(); else switch (m.charAt(0)) {
case opts.escapeChar:
escaped = !0;
break;
case opts.optionalmarker.end:
case opts.groupmarker.end:
if (openingToken = openenings.pop(), void 0 !== openingToken) if (openenings.length > 0) {
if (currentOpeningToken = openenings[openenings.length - 1], currentOpeningToken.matches.push(openingToken),
currentOpeningToken.isAlternator) {
alternator = openenings.pop();
for (var mndx = 0; mndx < alternator.matches.length; mndx++) alternator.matches[mndx].isGroup = !1;
openenings.length > 0 ? (currentOpeningToken = openenings[openenings.length - 1],
currentOpeningToken.matches.push(alternator)) : currentToken.matches.push(alternator);
}
} else currentToken.matches.push(openingToken); else defaultCase();
break;
case opts.optionalmarker.start:
openenings.push(new MaskToken((!1), (!0)));
break;
case opts.groupmarker.start:
openenings.push(new MaskToken((!0)));
break;
case opts.quantifiermarker.start:
var quantifier = new MaskToken((!1), (!1), (!0));
m = m.replace(/[{}]/g, "");
var mq = m.split(","), mq0 = isNaN(mq[0]) ? mq[0] : parseInt(mq[0]), mq1 = 1 === mq.length ? mq0 : isNaN(mq[1]) ? mq[1] : parseInt(mq[1]);
if ("*" !== mq1 && "+" !== mq1 || (mq0 = "*" === mq1 ? 0 : 1), quantifier.quantifier = {
min: mq0,
max: mq1
}, openenings.length > 0) {
var matches = openenings[openenings.length - 1].matches;
match = matches.pop(), match.isGroup || (groupToken = new MaskToken((!0)), groupToken.matches.push(match),
match = groupToken), matches.push(match), matches.push(quantifier);
} else match = currentToken.matches.pop(), match.isGroup || (groupToken = new MaskToken((!0)),
groupToken.matches.push(match), match = groupToken), currentToken.matches.push(match),
currentToken.matches.push(quantifier);
break;
case opts.alternatormarker:
openenings.length > 0 ? (currentOpeningToken = openenings[openenings.length - 1],
lastMatch = currentOpeningToken.matches.pop()) : lastMatch = currentToken.matches.pop(),
lastMatch.isAlternator ? openenings.push(lastMatch) : (alternator = new MaskToken((!1), (!1), (!1), (!0)),
alternator.matches.push(lastMatch), openenings.push(alternator));
break;
default:
defaultCase();
}
for (;openenings.length > 0; ) openingToken = openenings.pop(), verifyGroupMarker(openingToken, !0),
currentToken.matches.push(openingToken);
return currentToken.matches.length > 0 && (lastMatch = currentToken.matches[currentToken.matches.length - 1],
verifyGroupMarker(lastMatch), maskTokens.push(currentToken)), opts.numericInput && reverseTokens(maskTokens[0]),
maskTokens;
}
function generateMask(mask, metadata) {
if (null !== mask && "" !== mask) {
if (1 === mask.length && opts.greedy === !1 && 0 !== opts.repeat && (opts.placeholder = ""),
opts.repeat > 0 || "*" === opts.repeat || "+" === opts.repeat) {
var repeatStart = "*" === opts.repeat ? 0 : "+" === opts.repeat ? 1 : opts.repeat;
mask = opts.groupmarker.start + mask + opts.groupmarker.end + opts.quantifiermarker.start + repeatStart + "," + opts.repeat + opts.quantifiermarker.end;
}
var masksetDefinition;
return void 0 === Inputmask.prototype.masksCache[mask] || nocache === !0 ? (masksetDefinition = {
mask: mask,
maskToken: analyseMask(mask),
validPositions: {},
_buffer: void 0,
buffer: void 0,
tests: {},
metadata: metadata,
maskLength: void 0
}, nocache !== !0 && (Inputmask.prototype.masksCache[opts.numericInput ? mask.split("").reverse().join("") : mask] = masksetDefinition,
masksetDefinition = $.extend(!0, {}, Inputmask.prototype.masksCache[opts.numericInput ? mask.split("").reverse().join("") : mask]))) : masksetDefinition = $.extend(!0, {}, Inputmask.prototype.masksCache[opts.numericInput ? mask.split("").reverse().join("") : mask]),
masksetDefinition;
}
}
function preProcessMask(mask) {
return mask = mask.toString();
}
var ms;
if ($.isFunction(opts.mask) && (opts.mask = opts.mask(opts)), $.isArray(opts.mask)) {
if (opts.mask.length > 1) {
opts.keepStatic = null === opts.keepStatic || opts.keepStatic;
var altMask = "(";
return $.each(opts.numericInput ? opts.mask.reverse() : opts.mask, function(ndx, msk) {
altMask.length > 1 && (altMask += ")|("), altMask += preProcessMask(void 0 === msk.mask || $.isFunction(msk.mask) ? msk : msk.mask);
}), altMask += ")", generateMask(altMask, opts.mask);
}
opts.mask = opts.mask.pop();
}
return opts.mask && (ms = void 0 === opts.mask.mask || $.isFunction(opts.mask.mask) ? generateMask(preProcessMask(opts.mask), opts.mask) : generateMask(preProcessMask(opts.mask.mask), opts.mask)),
ms;
}
function maskScope(actionObj, maskset, opts) {
function getMaskTemplate(baseOnInput, minimalPos, includeInput) {
minimalPos = minimalPos || 0;
var ndxIntlzr, test, testPos, maskTemplate = [], pos = 0, lvp = getLastValidPosition();
maxLength = void 0 !== el ? el.maxLength : void 0, maxLength === -1 && (maxLength = void 0);
do {
if (baseOnInput === !0 && getMaskSet().validPositions[pos]) {
var validPos = getMaskSet().validPositions[pos];
test = validPos.match, ndxIntlzr = validPos.locator.slice(), maskTemplate.push(includeInput === !0 ? validPos.input : getPlaceholder(pos, test));
} else testPos = getTestTemplate(pos, ndxIntlzr, pos - 1), test = testPos.match,
ndxIntlzr = testPos.locator.slice(), (opts.jitMasking === !1 || pos < lvp || isFinite(opts.jitMasking) && opts.jitMasking > pos) && maskTemplate.push(getPlaceholder(pos, test));
pos++;
} while ((void 0 === maxLength || pos < maxLength) && (null !== test.fn || "" !== test.def) || minimalPos > pos);
return "" === maskTemplate[maskTemplate.length - 1] && maskTemplate.pop(), getMaskSet().maskLength = pos + 1,
maskTemplate;
}
function getMaskSet() {
return maskset;
}
function resetMaskSet(soft) {
var maskset = getMaskSet();
maskset.buffer = void 0, soft !== !0 && (maskset._buffer = void 0, maskset.validPositions = {},
maskset.p = 0);
}
function getLastValidPosition(closestTo, strict, validPositions) {
var before = -1, after = -1, valids = validPositions || getMaskSet().validPositions;
void 0 === closestTo && (closestTo = -1);
for (var posNdx in valids) {
var psNdx = parseInt(posNdx);
valids[psNdx] && (strict || null !== valids[psNdx].match.fn) && (psNdx <= closestTo && (before = psNdx),
psNdx >= closestTo && (after = psNdx));
}
return before !== -1 && closestTo - before > 1 || after < closestTo ? before : after;
}
function stripValidPositions(start, end, nocheck, strict) {
function IsEnclosedStatic(pos) {
var posMatch = getMaskSet().validPositions[pos];
if (void 0 !== posMatch && null === posMatch.match.fn) {
var prevMatch = getMaskSet().validPositions[pos - 1], nextMatch = getMaskSet().validPositions[pos + 1];
return void 0 !== prevMatch && void 0 !== nextMatch;
}
return !1;
}
var i, startPos = start, positionsClone = $.extend(!0, {}, getMaskSet().validPositions), needsValidation = !1;
for (getMaskSet().p = start, i = end - 1; i >= startPos; i--) void 0 !== getMaskSet().validPositions[i] && (nocheck === !0 || !IsEnclosedStatic(i) && opts.canClearPosition(getMaskSet(), i, getLastValidPosition(), strict, opts) !== !1) && delete getMaskSet().validPositions[i];
for (resetMaskSet(!0), i = startPos + 1; i <= getLastValidPosition(); ) {
for (;void 0 !== getMaskSet().validPositions[startPos]; ) startPos++;
var s = getMaskSet().validPositions[startPos];
if (i < startPos && (i = startPos + 1), void 0 === getMaskSet().validPositions[i] && isMask(i) || void 0 !== s) i++; else {
var t = getTestTemplate(i);
needsValidation === !1 && positionsClone[startPos] && positionsClone[startPos].match.def === t.match.def ? (getMaskSet().validPositions[startPos] = $.extend(!0, {}, positionsClone[startPos]),
getMaskSet().validPositions[startPos].input = t.input, delete getMaskSet().validPositions[i],
i++) : positionCanMatchDefinition(startPos, t.match.def) ? isValid(startPos, t.input || getPlaceholder(i), !0) !== !1 && (delete getMaskSet().validPositions[i],
i++, needsValidation = !0) : isMask(i) || (i++, startPos--), startPos++;
}
}
resetMaskSet(!0);
}
function determineTestTemplate(tests, guessNextBest) {
for (var testPos, testPositions = tests, lvp = getLastValidPosition(), lvTest = getMaskSet().validPositions[lvp] || getTests(0)[0], lvTestAltArr = void 0 !== lvTest.alternation ? lvTest.locator[lvTest.alternation].toString().split(",") : [], ndx = 0; ndx < testPositions.length && (testPos = testPositions[ndx],
!(testPos.match && (opts.greedy && testPos.match.optionalQuantifier !== !0 || (testPos.match.optionality === !1 || testPos.match.newBlockMarker === !1) && testPos.match.optionalQuantifier !== !0) && (void 0 === lvTest.alternation || lvTest.alternation !== testPos.alternation || void 0 !== testPos.locator[lvTest.alternation] && checkAlternationMatch(testPos.locator[lvTest.alternation].toString().split(","), lvTestAltArr))) || guessNextBest === !0 && (null !== testPos.match.fn || /[0-9a-bA-Z]/.test(testPos.match.def))); ndx++) ;
return testPos;
}
function getTestTemplate(pos, ndxIntlzr, tstPs) {
return getMaskSet().validPositions[pos] || determineTestTemplate(getTests(pos, ndxIntlzr ? ndxIntlzr.slice() : ndxIntlzr, tstPs));
}
function getTest(pos) {
return getMaskSet().validPositions[pos] ? getMaskSet().validPositions[pos] : getTests(pos)[0];
}
function positionCanMatchDefinition(pos, def) {
for (var valid = !1, tests = getTests(pos), tndx = 0; tndx < tests.length; tndx++) if (tests[tndx].match && tests[tndx].match.def === def) {
valid = !0;
break;
}
return valid;
}
function selectBestMatch(pos, alternateNdx) {
var bestMatch, indexPos;
return (getMaskSet().tests[pos] || getMaskSet().validPositions[pos]) && $.each(getMaskSet().tests[pos] || [ getMaskSet().validPositions[pos] ], function(ndx, lmnt) {
var ndxPos = lmnt.alternation ? lmnt.locator[lmnt.alternation].toString().indexOf(alternateNdx) : -1;
(void 0 === indexPos || ndxPos < indexPos) && ndxPos !== -1 && (bestMatch = lmnt,
indexPos = ndxPos);
}), bestMatch;
}
function getTests(pos, ndxIntlzr, tstPs) {
function resolveTestFromToken(maskToken, ndxInitializer, loopNdx, quantifierRecurse) {
function handleMatch(match, loopNdx, quantifierRecurse) {
function isFirstMatch(latestMatch, tokenGroup) {
var firstMatch = 0 === $.inArray(latestMatch, tokenGroup.matches);
return firstMatch || $.each(tokenGroup.matches, function(ndx, match) {
if (match.isQuantifier === !0 && (firstMatch = isFirstMatch(latestMatch, tokenGroup.matches[ndx - 1]))) return !1;
}), firstMatch;
}
function resolveNdxInitializer(pos, alternateNdx) {
var bestMatch = selectBestMatch(pos, alternateNdx);
return bestMatch ? bestMatch.locator.slice(bestMatch.alternation + 1) : void 0;
}
function staticCanMatchDefinition(source, target) {
return null === source.match.fn && null !== target.match.fn && target.match.fn.test(source.match.def, getMaskSet(), pos, !1, opts, !1);
}
if (testPos > 1e4) throw "Inputmask: There is probably an error in your mask definition or in the code. Create an issue on github with an example of the mask you are using. " + getMaskSet().mask;
if (testPos === pos && void 0 === match.matches) return matches.push({
match: match,
locator: loopNdx.reverse(),
cd: cacheDependency
}), !0;
if (void 0 !== match.matches) {
if (match.isGroup && quantifierRecurse !== match) {
if (match = handleMatch(maskToken.matches[$.inArray(match, maskToken.matches) + 1], loopNdx)) return !0;
} else if (match.isOptional) {
var optionalToken = match;
if (match = resolveTestFromToken(match, ndxInitializer, loopNdx, quantifierRecurse)) {
if (latestMatch = matches[matches.length - 1].match, !isFirstMatch(latestMatch, optionalToken)) return !0;
insertStop = !0, testPos = pos;
}
} else if (match.isAlternator) {
var maltMatches, alternateToken = match, malternateMatches = [], currentMatches = matches.slice(), loopNdxCnt = loopNdx.length, altIndex = ndxInitializer.length > 0 ? ndxInitializer.shift() : -1;
if (altIndex === -1 || "string" == typeof altIndex) {
var amndx, currentPos = testPos, ndxInitializerClone = ndxInitializer.slice(), altIndexArr = [];
if ("string" == typeof altIndex) altIndexArr = altIndex.split(","); else for (amndx = 0; amndx < alternateToken.matches.length; amndx++) altIndexArr.push(amndx);
for (var ndx = 0; ndx < altIndexArr.length; ndx++) {
if (amndx = parseInt(altIndexArr[ndx]), matches = [], ndxInitializer = resolveNdxInitializer(testPos, amndx) || ndxInitializerClone.slice(),
match = handleMatch(alternateToken.matches[amndx] || maskToken.matches[amndx], [ amndx ].concat(loopNdx), quantifierRecurse) || match,
match !== !0 && void 0 !== match && altIndexArr[altIndexArr.length - 1] < alternateToken.matches.length) {
var ntndx = $.inArray(match, maskToken.matches) + 1;
maskToken.matches.length > ntndx && (match = handleMatch(maskToken.matches[ntndx], [ ntndx ].concat(loopNdx.slice(1, loopNdx.length)), quantifierRecurse),
match && (altIndexArr.push(ntndx.toString()), $.each(matches, function(ndx, lmnt) {
lmnt.alternation = loopNdx.length - 1;
})));
}
maltMatches = matches.slice(), testPos = currentPos, matches = [];
for (var ndx1 = 0; ndx1 < maltMatches.length; ndx1++) {
var altMatch = maltMatches[ndx1], hasMatch = !1;
altMatch.alternation = altMatch.alternation || loopNdxCnt;
for (var ndx2 = 0; ndx2 < malternateMatches.length; ndx2++) {
var altMatch2 = malternateMatches[ndx2];
if (("string" != typeof altIndex || $.inArray(altMatch.locator[altMatch.alternation].toString(), altIndexArr) !== -1) && (altMatch.match.def === altMatch2.match.def || staticCanMatchDefinition(altMatch, altMatch2))) {
hasMatch = altMatch.match.mask === altMatch2.match.mask, altMatch2.locator[altMatch.alternation].toString().indexOf(altMatch.locator[altMatch.alternation]) === -1 && (altMatch2.locator[altMatch.alternation] = altMatch2.locator[altMatch.alternation] + "," + altMatch.locator[altMatch.alternation],
altMatch2.alternation = altMatch.alternation, null == altMatch.match.fn && (altMatch2.na = altMatch2.na || altMatch.locator[altMatch.alternation].toString(),
altMatch2.na.indexOf(altMatch.locator[altMatch.alternation]) === -1 && (altMatch2.na = altMatch2.na + "," + altMatch.locator[altMatch.alternation])));
break;
}
}
hasMatch || malternateMatches.push(altMatch);
}
}
"string" == typeof altIndex && (malternateMatches = $.map(malternateMatches, function(lmnt, ndx) {
if (isFinite(ndx)) {
var mamatch, alternation = lmnt.alternation, altLocArr = lmnt.locator[alternation].toString().split(",");
lmnt.locator[alternation] = void 0, lmnt.alternation = void 0;
for (var alndx = 0; alndx < altLocArr.length; alndx++) mamatch = $.inArray(altLocArr[alndx], altIndexArr) !== -1,
mamatch && (void 0 !== lmnt.locator[alternation] ? (lmnt.locator[alternation] += ",",
lmnt.locator[alternation] += altLocArr[alndx]) : lmnt.locator[alternation] = parseInt(altLocArr[alndx]),
lmnt.alternation = alternation);
if (void 0 !== lmnt.locator[alternation]) return lmnt;
}
})), matches = currentMatches.concat(malternateMatches), testPos = pos, insertStop = matches.length > 0,
ndxInitializer = ndxInitializerClone.slice();
} else match = handleMatch(alternateToken.matches[altIndex] || maskToken.matches[altIndex], [ altIndex ].concat(loopNdx), quantifierRecurse);
if (match) return !0;
} else if (match.isQuantifier && quantifierRecurse !== maskToken.matches[$.inArray(match, maskToken.matches) - 1]) for (var qt = match, qndx = ndxInitializer.length > 0 ? ndxInitializer.shift() : 0; qndx < (isNaN(qt.quantifier.max) ? qndx + 1 : qt.quantifier.max) && testPos <= pos; qndx++) {
var tokenGroup = maskToken.matches[$.inArray(qt, maskToken.matches) - 1];
if (match = handleMatch(tokenGroup, [ qndx ].concat(loopNdx), tokenGroup)) {
if (latestMatch = matches[matches.length - 1].match, latestMatch.optionalQuantifier = qndx > qt.quantifier.min - 1,
isFirstMatch(latestMatch, tokenGroup)) {
if (qndx > qt.quantifier.min - 1) {
insertStop = !0, testPos = pos;
break;
}
return !0;
}
return !0;
}
} else if (match = resolveTestFromToken(match, ndxInitializer, loopNdx, quantifierRecurse)) return !0;
} else testPos++;
}
for (var tndx = ndxInitializer.length > 0 ? ndxInitializer.shift() : 0; tndx < maskToken.matches.length; tndx++) if (maskToken.matches[tndx].isQuantifier !== !0) {
var match = handleMatch(maskToken.matches[tndx], [ tndx ].concat(loopNdx), quantifierRecurse);
if (match && testPos === pos) return match;
if (testPos > pos) break;
}
}
function mergeLocators(tests) {
var locator = [];
return $.isArray(tests) || (tests = [ tests ]), tests.length > 0 && (void 0 === tests[0].alternation ? (locator = determineTestTemplate(tests.slice()).locator.slice(),
0 === locator.length && (locator = tests[0].locator.slice())) : $.each(tests, function(ndx, tst) {
if ("" !== tst.def) if (0 === locator.length) locator = tst.locator.slice(); else for (var i = 0; i < locator.length; i++) tst.locator[i] && locator[i].toString().indexOf(tst.locator[i]) === -1 && (locator[i] += "," + tst.locator[i]);
})), locator;
}
function filterTests(tests) {
return opts.keepStatic && pos > 0 && tests.length > 1 + ("" === tests[tests.length - 1].match.def ? 1 : 0) && tests[0].match.optionality !== !0 && tests[0].match.optionalQuantifier !== !0 && null === tests[0].match.fn && !/[0-9a-bA-Z]/.test(tests[0].match.def) ? [ determineTestTemplate(tests) ] : tests;
}
var latestMatch, maskTokens = getMaskSet().maskToken, testPos = ndxIntlzr ? tstPs : 0, ndxInitializer = ndxIntlzr ? ndxIntlzr.slice() : [ 0 ], matches = [], insertStop = !1, cacheDependency = ndxIntlzr ? ndxIntlzr.join("") : "";
if (pos > -1) {
if (void 0 === ndxIntlzr) {
for (var test, previousPos = pos - 1; void 0 === (test = getMaskSet().validPositions[previousPos] || getMaskSet().tests[previousPos]) && previousPos > -1; ) previousPos--;
void 0 !== test && previousPos > -1 && (ndxInitializer = mergeLocators(test), cacheDependency = ndxInitializer.join(""),
testPos = previousPos);
}
if (getMaskSet().tests[pos] && getMaskSet().tests[pos][0].cd === cacheDependency) return filterTests(getMaskSet().tests[pos]);
for (var mtndx = ndxInitializer.shift(); mtndx < maskTokens.length; mtndx++) {
var match = resolveTestFromToken(maskTokens[mtndx], ndxInitializer, [ mtndx ]);
if (match && testPos === pos || testPos > pos) break;
}
}
return (0 === matches.length || insertStop) && matches.push({
match: {
fn: null,
cardinality: 0,
optionality: !0,
casing: null,
def: "",
placeholder: ""
},
locator: [],
cd: cacheDependency
}), void 0 !== ndxIntlzr && getMaskSet().tests[pos] ? filterTests($.extend(!0, [], matches)) : (getMaskSet().tests[pos] = $.extend(!0, [], matches),
filterTests(getMaskSet().tests[pos]));
}
function getBufferTemplate() {
return void 0 === getMaskSet()._buffer && (getMaskSet()._buffer = getMaskTemplate(!1, 1),
void 0 === getMaskSet().buffer && getMaskSet()._buffer.slice()), getMaskSet()._buffer;
}
function getBuffer(noCache) {
return void 0 !== getMaskSet().buffer && noCache !== !0 || (getMaskSet().buffer = getMaskTemplate(!0, getLastValidPosition(), !0)),
getMaskSet().buffer;
}
function refreshFromBuffer(start, end, buffer) {
var i;
if (start === !0) resetMaskSet(), start = 0, end = buffer.length; else for (i = start; i < end; i++) delete getMaskSet().validPositions[i];
for (i = start; i < end; i++) resetMaskSet(!0), buffer[i] !== opts.skipOptionalPartCharacter && isValid(i, buffer[i], !0, !0);
}
function casing(elem, test, pos) {
switch (opts.casing || test.casing) {
case "upper":
elem = elem.toUpperCase();
break;
case "lower":
elem = elem.toLowerCase();
break;
case "title":
var posBefore = getMaskSet().validPositions[pos - 1];
elem = 0 === pos || posBefore && posBefore.input === String.fromCharCode(Inputmask.keyCode.SPACE) ? elem.toUpperCase() : elem.toLowerCase();
}
return elem;
}
function checkAlternationMatch(altArr1, altArr2) {
for (var altArrC = opts.greedy ? altArr2 : altArr2.slice(0, 1), isMatch = !1, alndx = 0; alndx < altArr1.length; alndx++) if ($.inArray(altArr1[alndx], altArrC) !== -1) {
isMatch = !0;
break;
}
return isMatch;
}
function isValid(pos, c, strict, fromSetValid, fromAlternate) {
function isSelection(posObj) {
return isRTL ? posObj.begin - posObj.end > 1 || posObj.begin - posObj.end === 1 && opts.insertMode : posObj.end - posObj.begin > 1 || posObj.end - posObj.begin === 1 && opts.insertMode;
}
function _isValid(position, c, strict) {
var rslt = !1;
return $.each(getTests(position), function(ndx, tst) {
for (var test = tst.match, loopend = c ? 1 : 0, chrs = "", i = test.cardinality; i > loopend; i--) chrs += getBufferElement(position - (i - 1));
if (c && (chrs += c), getBuffer(!0), rslt = null != test.fn ? test.fn.test(chrs, getMaskSet(), position, strict, opts, isSelection(pos)) : (c === test.def || c === opts.skipOptionalPartCharacter) && "" !== test.def && {
c: test.placeholder || test.def,
pos: position
}, rslt !== !1) {
var elem = void 0 !== rslt.c ? rslt.c : c;
elem = elem === opts.skipOptionalPartCharacter && null === test.fn ? test.placeholder || test.def : elem;
var validatedPos = position, possibleModifiedBuffer = getBuffer();
if (void 0 !== rslt.remove && ($.isArray(rslt.remove) || (rslt.remove = [ rslt.remove ]),
$.each(rslt.remove.sort(function(a, b) {
return b - a;
}), function(ndx, lmnt) {
stripValidPositions(lmnt, lmnt + 1, !0);
})), void 0 !== rslt.insert && ($.isArray(rslt.insert) || (rslt.insert = [ rslt.insert ]),
$.each(rslt.insert.sort(function(a, b) {
return a - b;
}), function(ndx, lmnt) {
isValid(lmnt.pos, lmnt.c, !1, fromSetValid);
})), rslt.refreshFromBuffer) {
var refresh = rslt.refreshFromBuffer;
if (strict = !0, refreshFromBuffer(refresh === !0 ? refresh : refresh.start, refresh.end, possibleModifiedBuffer),
void 0 === rslt.pos && void 0 === rslt.c) return rslt.pos = getLastValidPosition(),
!1;
if (validatedPos = void 0 !== rslt.pos ? rslt.pos : position, validatedPos !== position) return rslt = $.extend(rslt, isValid(validatedPos, elem, !0, fromSetValid)),
!1;
} else if (rslt !== !0 && void 0 !== rslt.pos && rslt.pos !== position && (validatedPos = rslt.pos,
refreshFromBuffer(position, validatedPos, getBuffer().slice()), validatedPos !== position)) return rslt = $.extend(rslt, isValid(validatedPos, elem, !0)),
!1;
return (rslt === !0 || void 0 !== rslt.pos || void 0 !== rslt.c) && (ndx > 0 && resetMaskSet(!0),
setValidPosition(validatedPos, $.extend({}, tst, {
input: casing(elem, test, validatedPos)
}), fromSetValid, isSelection(pos)) || (rslt = !1), !1);
}
}), rslt;
}
function alternate(pos, c, strict) {
var lastAlt, alternation, altPos, prevAltPos, i, validPos, altNdxs, decisionPos, validPsClone = $.extend(!0, {}, getMaskSet().validPositions), isValidRslt = !1, lAltPos = getLastValidPosition();
for (prevAltPos = getMaskSet().validPositions[lAltPos]; lAltPos >= 0; lAltPos--) if (altPos = getMaskSet().validPositions[lAltPos],
altPos && void 0 !== altPos.alternation) {
if (lastAlt = lAltPos, alternation = getMaskSet().validPositions[lastAlt].alternation,
prevAltPos.locator[altPos.alternation] !== altPos.locator[altPos.alternation]) break;
prevAltPos = altPos;
}
if (void 0 !== alternation) {
decisionPos = parseInt(lastAlt);
var decisionTaker = void 0 !== prevAltPos.locator[prevAltPos.alternation || alternation] ? prevAltPos.locator[prevAltPos.alternation || alternation] : altNdxs[0];
decisionTaker.length > 0 && (decisionTaker = decisionTaker.split(",")[0]);
var possibilityPos = getMaskSet().validPositions[decisionPos], prevPos = getMaskSet().validPositions[decisionPos - 1];
$.each(getTests(decisionPos, prevPos ? prevPos.locator : void 0, decisionPos - 1), function(ndx, test) {
altNdxs = test.locator[alternation] ? test.locator[alternation].toString().split(",") : [];
for (var mndx = 0; mndx < altNdxs.length; mndx++) {
var validInputs = [], staticInputsBeforePos = 0, staticInputsBeforePosAlternate = 0, verifyValidInput = !1;
if (decisionTaker < altNdxs[mndx] && (void 0 === test.na || $.inArray(altNdxs[mndx], test.na.split(",")) === -1)) {
getMaskSet().validPositions[decisionPos] = $.extend(!0, {}, test);
var possibilities = getMaskSet().validPositions[decisionPos].locator;
for (getMaskSet().validPositions[decisionPos].locator[alternation] = parseInt(altNdxs[mndx]),
null == test.match.fn ? (possibilityPos.input !== test.match.def && (verifyValidInput = !0,
possibilityPos.generatedInput !== !0 && validInputs.push(possibilityPos.input)),
staticInputsBeforePosAlternate++, getMaskSet().validPositions[decisionPos].generatedInput = !/[0-9a-bA-Z]/.test(test.match.def),
getMaskSet().validPositions[decisionPos].input = test.match.def) : getMaskSet().validPositions[decisionPos].input = possibilityPos.input,
i = decisionPos + 1; i < getLastValidPosition(void 0, !0) + 1; i++) validPos = getMaskSet().validPositions[i],
validPos && validPos.generatedInput !== !0 && /[0-9a-bA-Z]/.test(validPos.input) ? validInputs.push(validPos.input) : i < pos && staticInputsBeforePos++,
delete getMaskSet().validPositions[i];
for (verifyValidInput && validInputs[0] === test.match.def && validInputs.shift(),
resetMaskSet(!0), isValidRslt = !0; validInputs.length > 0; ) {
var input = validInputs.shift();
if (input !== opts.skipOptionalPartCharacter && !(isValidRslt = isValid(getLastValidPosition(void 0, !0) + 1, input, !1, fromSetValid, !0))) break;
}
if (isValidRslt) {
getMaskSet().validPositions[decisionPos].locator = possibilities;
var targetLvp = getLastValidPosition(pos) + 1;
for (i = decisionPos + 1; i < getLastValidPosition() + 1; i++) validPos = getMaskSet().validPositions[i],
(void 0 === validPos || null == validPos.match.fn) && i < pos + (staticInputsBeforePosAlternate - staticInputsBeforePos) && staticInputsBeforePosAlternate++;
pos += staticInputsBeforePosAlternate - staticInputsBeforePos, isValidRslt = isValid(pos > targetLvp ? targetLvp : pos, c, strict, fromSetValid, !0);
}
if (isValidRslt) return !1;
resetMaskSet(), getMaskSet().validPositions = $.extend(!0, {}, validPsClone);
}
}
});
}
return isValidRslt;
}
function trackbackAlternations(originalPos, newPos) {
for (var vp = getMaskSet().validPositions[newPos], targetLocator = vp.locator, tll = targetLocator.length, ps = originalPos; ps < newPos; ps++) if (void 0 === getMaskSet().validPositions[ps] && !isMask(ps, !0)) {
var tests = getTests(ps), bestMatch = tests[0], equality = -1;
$.each(tests, function(ndx, tst) {
for (var i = 0; i < tll && (void 0 !== tst.locator[i] && checkAlternationMatch(tst.locator[i].toString().split(","), targetLocator[i].toString().split(","))); i++) equality < i && (equality = i,
bestMatch = tst);
}), setValidPosition(ps, $.extend({}, bestMatch, {
input: bestMatch.match.placeholder || bestMatch.match.def
}), !0);
}
}
function setValidPosition(pos, validTest, fromSetValid, isSelection) {
if (isSelection || opts.insertMode && void 0 !== getMaskSet().validPositions[pos] && void 0 === fromSetValid) {
var i, positionsClone = $.extend(!0, {}, getMaskSet().validPositions), lvp = getLastValidPosition();
for (i = pos; i <= lvp; i++) delete getMaskSet().validPositions[i];
getMaskSet().validPositions[pos] = $.extend(!0, {}, validTest);
var j, valid = !0, vps = getMaskSet().validPositions, needsValidation = !1, initialLength = getMaskSet().maskLength;
for (i = j = pos; i <= lvp; i++) {
var t = positionsClone[i];
if (void 0 !== t) for (var posMatch = j; posMatch < getMaskSet().maskLength && (null == t.match.fn && vps[i] && (vps[i].match.optionalQuantifier === !0 || vps[i].match.optionality === !0) || null != t.match.fn); ) {
if (posMatch++, needsValidation === !1 && positionsClone[posMatch] && positionsClone[posMatch].match.def === t.match.def) getMaskSet().validPositions[posMatch] = $.extend(!0, {}, positionsClone[posMatch]),
getMaskSet().validPositions[posMatch].input = t.input, fillMissingNonMask(posMatch),
j = posMatch, valid = !0; else if (positionCanMatchDefinition(posMatch, t.match.def)) {
var result = isValid(posMatch, t.input, !0, !0);
valid = result !== !1, j = result.caret || result.insert ? getLastValidPosition() : posMatch,
needsValidation = !0;
} else valid = t.generatedInput === !0;
if (getMaskSet().maskLength < initialLength && (getMaskSet().maskLength = initialLength),
valid) break;
}
if (!valid) break;
}
if (!valid) return getMaskSet().validPositions = $.extend(!0, {}, positionsClone),
resetMaskSet(!0), !1;
} else getMaskSet().validPositions[pos] = $.extend(!0, {}, validTest);
return resetMaskSet(!0), !0;
}
function fillMissingNonMask(maskPos) {
for (var pndx = maskPos - 1; pndx > -1 && !getMaskSet().validPositions[pndx]; pndx--) ;
var testTemplate, testsFromPos;
for (pndx++; pndx < maskPos; pndx++) void 0 === getMaskSet().validPositions[pndx] && (opts.jitMasking === !1 || opts.jitMasking > pndx) && (testsFromPos = getTests(pndx, getTestTemplate(pndx - 1).locator, pndx - 1).slice(),
"" === testsFromPos[testsFromPos.length - 1].match.def && testsFromPos.pop(), testTemplate = determineTestTemplate(testsFromPos),
testTemplate && (testTemplate.match.def === opts.radixPointDefinitionSymbol || !isMask(pndx, !0) || $.inArray(opts.radixPoint, getBuffer()) < pndx && testTemplate.match.fn && testTemplate.match.fn.test(getPlaceholder(pndx), getMaskSet(), pndx, !1, opts)) && (result = _isValid(pndx, testTemplate.match.placeholder || (null == testTemplate.match.fn ? testTemplate.match.def : "" !== getPlaceholder(pndx) ? getPlaceholder(pndx) : getBuffer()[pndx]), !0),
result !== !1 && (getMaskSet().validPositions[result.pos || pndx].generatedInput = !0)));
}
strict = strict === !0;
var maskPos = pos;
void 0 !== pos.begin && (maskPos = isRTL && !isSelection(pos) ? pos.end : pos.begin);
var result = !1, positionsClone = $.extend(!0, {}, getMaskSet().validPositions);
if (fillMissingNonMask(maskPos), isSelection(pos) && (handleRemove(void 0, Inputmask.keyCode.DELETE, pos),
maskPos = getMaskSet().p), maskPos < getMaskSet().maskLength && (result = _isValid(maskPos, c, strict),
(!strict || fromSetValid === !0) && result === !1)) {
var currentPosValid = getMaskSet().validPositions[maskPos];
if (!currentPosValid || null !== currentPosValid.match.fn || currentPosValid.match.def !== c && c !== opts.skipOptionalPartCharacter) {
if ((opts.insertMode || void 0 === getMaskSet().validPositions[seekNext(maskPos)]) && !isMask(maskPos, !0)) {
var testsFromPos = getTests(maskPos).slice();
"" === testsFromPos[testsFromPos.length - 1].match.def && testsFromPos.pop();
var staticChar = determineTestTemplate(testsFromPos, !0);
staticChar && (staticChar = staticChar.match.placeholder || staticChar.match.def,
_isValid(maskPos, staticChar, strict), getMaskSet().validPositions[maskPos].generatedInput = !0);
for (var nPos = maskPos + 1, snPos = seekNext(maskPos); nPos <= snPos; nPos++) if (result = _isValid(nPos, c, strict),
result !== !1) {
trackbackAlternations(maskPos, nPos), maskPos = nPos;
break;
}
}
} else result = {
caret: seekNext(maskPos)
};
}
return result === !1 && opts.keepStatic && !strict && fromAlternate !== !0 && (result = alternate(maskPos, c, strict)),
result === !0 && (result = {
pos: maskPos
}), $.isFunction(opts.postValidation) && result !== !1 && !strict && fromSetValid !== !0 && (result = !!opts.postValidation(getBuffer(!0), result, opts) && result),
void 0 === result.pos && (result.pos = maskPos), result === !1 && (resetMaskSet(!0),
getMaskSet().validPositions = $.extend(!0, {}, positionsClone)), result;
}
function isMask(pos, strict) {
var test;
if (strict ? (test = getTestTemplate(pos).match, "" === test.def && (test = getTest(pos).match)) : test = getTest(pos).match,
null != test.fn) return test.fn;
if (strict !== !0 && pos > -1) {
var tests = getTests(pos);
return tests.length > 1 + ("" === tests[tests.length - 1].match.def ? 1 : 0);
}
return !1;
}
function seekNext(pos, newBlock) {
var maskL = getMaskSet().maskLength;
if (pos >= maskL) return maskL;
for (var position = pos; ++position < maskL && (newBlock === !0 && (getTest(position).match.newBlockMarker !== !0 || !isMask(position)) || newBlock !== !0 && !isMask(position)); ) ;
return position;
}
function seekPrevious(pos, newBlock) {
var tests, position = pos;
if (position <= 0) return 0;
for (;--position > 0 && (newBlock === !0 && getTest(position).match.newBlockMarker !== !0 || newBlock !== !0 && !isMask(position) && (tests = getTests(position),
tests.length < 2 || 2 === tests.length && "" === tests[1].match.def)); ) ;
return position;
}
function getBufferElement(position) {
return void 0 === getMaskSet().validPositions[position] ? getPlaceholder(position) : getMaskSet().validPositions[position].input;
}
function writeBuffer(input, buffer, caretPos, event, triggerInputEvent) {
if (event && $.isFunction(opts.onBeforeWrite)) {
var result = opts.onBeforeWrite(event, buffer, caretPos, opts);
if (result) {
if (result.refreshFromBuffer) {
var refresh = result.refreshFromBuffer;
refreshFromBuffer(refresh === !0 ? refresh : refresh.start, refresh.end, result.buffer || buffer),
buffer = getBuffer(!0);
}
void 0 !== caretPos && (caretPos = void 0 !== result.caret ? result.caret : caretPos);
}
}
input.inputmask._valueSet(buffer.join("")), void 0 === caretPos || void 0 !== event && "blur" === event.type || caret(input, caretPos),
triggerInputEvent === !0 && (skipInputEvent = !0, $(input).trigger("input"));
}
function getPlaceholder(pos, test) {
if (test = test || getTest(pos).match, void 0 !== test.placeholder) return test.placeholder;
if (null === test.fn) {
if (pos > -1 && void 0 === getMaskSet().validPositions[pos]) {
var prevTest, tests = getTests(pos), staticAlternations = [];
if (tests.length > 1 + ("" === tests[tests.length - 1].match.def ? 1 : 0)) for (var i = 0; i < tests.length; i++) if (tests[i].match.optionality !== !0 && tests[i].match.optionalQuantifier !== !0 && (null === tests[i].match.fn || void 0 === prevTest || tests[i].match.fn.test(prevTest.match.def, getMaskSet(), pos, !0, opts) !== !1) && (staticAlternations.push(tests[i]),
null === tests[i].match.fn && (prevTest = tests[i]), staticAlternations.length > 1 && /[0-9a-bA-Z]/.test(staticAlternations[0].match.def))) return opts.placeholder.charAt(pos % opts.placeholder.length);
}
return test.def;
}
return opts.placeholder.charAt(pos % opts.placeholder.length);
}
function checkVal(input, writeOut, strict, nptvl, initiatingEvent, stickyCaret) {
function isTemplateMatch() {
var isMatch = !1, charCodeNdx = getBufferTemplate().slice(initialNdx, seekNext(initialNdx)).join("").indexOf(charCodes);
if (charCodeNdx !== -1 && !isMask(initialNdx)) {
isMatch = !0;
for (var bufferTemplateArr = getBufferTemplate().slice(initialNdx, initialNdx + charCodeNdx), i = 0; i < bufferTemplateArr.length; i++) if (" " !== bufferTemplateArr[i]) {
isMatch = !1;
break;
}
}
return isMatch;
}
var inputValue = nptvl.slice(), charCodes = "", initialNdx = 0, result = void 0;
if (resetMaskSet(), getMaskSet().p = seekNext(-1), !strict) if (opts.autoUnmask !== !0) {
var staticInput = getBufferTemplate().slice(0, seekNext(-1)).join(""), matches = inputValue.join("").match(new RegExp("^" + Inputmask.escapeRegex(staticInput), "g"));
matches && matches.length > 0 && (inputValue.splice(0, matches.length * staticInput.length),
initialNdx = seekNext(initialNdx));
} else initialNdx = seekNext(initialNdx);
if ($.each(inputValue, function(ndx, charCode) {
if (void 0 !== charCode) {
var keypress = new $.Event("keypress");
keypress.which = charCode.charCodeAt(0), charCodes += charCode;
var lvp = getLastValidPosition(void 0, !0), lvTest = getMaskSet().validPositions[lvp], nextTest = getTestTemplate(lvp + 1, lvTest ? lvTest.locator.slice() : void 0, lvp);
if (!isTemplateMatch() || strict || opts.autoUnmask) {
var pos = strict ? ndx : null == nextTest.match.fn && nextTest.match.optionality && lvp + 1 < getMaskSet().p ? lvp + 1 : getMaskSet().p;
result = keypressEvent.call(input, keypress, !0, !1, strict, pos), initialNdx = pos + 1,
charCodes = "";
} else result = keypressEvent.call(input, keypress, !0, !1, !0, lvp + 1);
if (!strict && $.isFunction(opts.onBeforeWrite) && (result = opts.onBeforeWrite(keypress, getBuffer(), result.forwardPosition, opts),
result && result.refreshFromBuffer)) {
var refresh = result.refreshFromBuffer;
refreshFromBuffer(refresh === !0 ? refresh : refresh.start, refresh.end, result.buffer),
resetMaskSet(!0), result.caret && (getMaskSet().p = result.caret);
}
}
}), writeOut) {
var caretPos = void 0, lvp = getLastValidPosition();
document.activeElement === input && (initiatingEvent || result) && (caretPos = caret(input).begin - (stickyCaret === !0 ? 1 : 0),
result && stickyCaret !== !0 && (caretPos < lvp + 1 || lvp === -1) && (caretPos = opts.numericInput && void 0 === result.caret ? seekPrevious(result.forwardPosition) : result.forwardPosition)),
writeBuffer(input, getBuffer(), caretPos, initiatingEvent || new $.Event("checkval"));
}
}
function unmaskedvalue(input) {
if (input && void 0 === input.inputmask) return input.value;
var umValue = [], vps = getMaskSet().validPositions;
for (var pndx in vps) vps[pndx].match && null != vps[pndx].match.fn && umValue.push(vps[pndx].input);
var unmaskedValue = 0 === umValue.length ? "" : (isRTL ? umValue.reverse() : umValue).join("");
if ($.isFunction(opts.onUnMask)) {
var bufferValue = (isRTL ? getBuffer().slice().reverse() : getBuffer()).join("");
unmaskedValue = opts.onUnMask(bufferValue, unmaskedValue, opts) || unmaskedValue;
}
return unmaskedValue;
}
function caret(input, begin, end, notranslate) {
function translatePosition(pos) {
if (notranslate !== !0 && isRTL && "number" == typeof pos && (!opts.greedy || "" !== opts.placeholder)) {
var bffrLght = getBuffer().join("").length;
pos = bffrLght - pos;
}
return pos;
}
var range;
if ("number" != typeof begin) return input.setSelectionRange ? (begin = input.selectionStart,
end = input.selectionEnd) : window.getSelection ? (range = window.getSelection().getRangeAt(0),
range.commonAncestorContainer.parentNode !== input && range.commonAncestorContainer !== input || (begin = range.startOffset,
end = range.endOffset)) : document.selection && document.selection.createRange && (range = document.selection.createRange(),
begin = 0 - range.duplicate().moveStart("character", -input.inputmask._valueGet().length),
end = begin + range.text.length), {
begin: translatePosition(begin),
end: translatePosition(end)
};
begin = translatePosition(begin), end = translatePosition(end), end = "number" == typeof end ? end : begin;
var scrollCalc = parseInt(((input.ownerDocument.defaultView || window).getComputedStyle ? (input.ownerDocument.defaultView || window).getComputedStyle(input, null) : input.currentStyle).fontSize) * end;
if (input.scrollLeft = scrollCalc > input.scrollWidth ? scrollCalc : 0, mobile || opts.insertMode !== !1 || begin !== end || end++,
input.setSelectionRange) input.selectionStart = begin, input.selectionEnd = end; else if (window.getSelection) {
if (range = document.createRange(), void 0 === input.firstChild || null === input.firstChild) {
var textNode = document.createTextNode("");
input.appendChild(textNode);
}
range.setStart(input.firstChild, begin < input.inputmask._valueGet().length ? begin : input.inputmask._valueGet().length),
range.setEnd(input.firstChild, end < input.inputmask._valueGet().length ? end : input.inputmask._valueGet().length),
range.collapse(!0);
var sel = window.getSelection();
sel.removeAllRanges(), sel.addRange(range);
} else input.createTextRange && (range = input.createTextRange(), range.collapse(!0),
range.moveEnd("character", end), range.moveStart("character", begin), range.select());
}
function determineLastRequiredPosition(returnDefinition) {
var pos, testPos, buffer = getBuffer(), bl = buffer.length, lvp = getLastValidPosition(), positions = {}, lvTest = getMaskSet().validPositions[lvp], ndxIntlzr = void 0 !== lvTest ? lvTest.locator.slice() : void 0;
for (pos = lvp + 1; pos < buffer.length; pos++) testPos = getTestTemplate(pos, ndxIntlzr, pos - 1),
ndxIntlzr = testPos.locator.slice(), positions[pos] = $.extend(!0, {}, testPos);
var lvTestAlt = lvTest && void 0 !== lvTest.alternation ? lvTest.locator[lvTest.alternation] : void 0;
for (pos = bl - 1; pos > lvp && (testPos = positions[pos], (testPos.match.optionality || testPos.match.optionalQuantifier || lvTestAlt && (lvTestAlt !== positions[pos].locator[lvTest.alternation] && null != testPos.match.fn || null === testPos.match.fn && testPos.locator[lvTest.alternation] && checkAlternationMatch(testPos.locator[lvTest.alternation].toString().split(","), lvTestAlt.toString().split(",")) && "" !== getTests(pos)[0].def)) && buffer[pos] === getPlaceholder(pos, testPos.match)); pos--) bl--;
return returnDefinition ? {
l: bl,
def: positions[bl] ? positions[bl].match : void 0
} : bl;
}
function clearOptionalTail(buffer) {
for (var rl = determineLastRequiredPosition(), lmib = buffer.length - 1; lmib > rl && !isMask(lmib); lmib--) ;
return buffer.splice(rl, lmib + 1 - rl), buffer;
}
function isComplete(buffer) {
if ($.isFunction(opts.isComplete)) return opts.isComplete(buffer, opts);
if ("*" !== opts.repeat) {
var complete = !1, lrp = determineLastRequiredPosition(!0), aml = seekPrevious(lrp.l);
if (void 0 === lrp.def || lrp.def.newBlockMarker || lrp.def.optionality || lrp.def.optionalQuantifier) {
complete = !0;
for (var i = 0; i <= aml; i++) {
var test = getTestTemplate(i).match;
if (null !== test.fn && void 0 === getMaskSet().validPositions[i] && test.optionality !== !0 && test.optionalQuantifier !== !0 || null === test.fn && buffer[i] !== getPlaceholder(i, test)) {
complete = !1;
break;
}
}
}
return complete;
}
}
function patchValueProperty(npt) {
function patchValhook(type) {
if ($.valHooks && (void 0 === $.valHooks[type] || $.valHooks[type].inputmaskpatch !== !0)) {
var valhookGet = $.valHooks[type] && $.valHooks[type].get ? $.valHooks[type].get : function(elem) {
return elem.value;
}, valhookSet = $.valHooks[type] && $.valHooks[type].set ? $.valHooks[type].set : function(elem, value) {
return elem.value = value, elem;
};
$.valHooks[type] = {
get: function(elem) {
if (elem.inputmask) {
if (elem.inputmask.opts.autoUnmask) return elem.inputmask.unmaskedvalue();
var result = valhookGet(elem);
return getLastValidPosition(void 0, void 0, elem.inputmask.maskset.validPositions) !== -1 || opts.nullable !== !0 ? result : "";
}
return valhookGet(elem);
},
set: function(elem, value) {
var result, $elem = $(elem);
return result = valhookSet(elem, value), elem.inputmask && $elem.trigger("setvalue"),
result;
},
inputmaskpatch: !0
};
}
}
function getter() {
return this.inputmask ? this.inputmask.opts.autoUnmask ? this.inputmask.unmaskedvalue() : getLastValidPosition() !== -1 || opts.nullable !== !0 ? document.activeElement === this && opts.clearMaskOnLostFocus ? (isRTL ? clearOptionalTail(getBuffer().slice()).reverse() : clearOptionalTail(getBuffer().slice())).join("") : valueGet.call(this) : "" : valueGet.call(this);
}
function setter(value) {
valueSet.call(this, value), this.inputmask && $(this).trigger("setvalue");
}
function installNativeValueSetFallback(npt) {
EventRuler.on(npt, "mouseenter", function(event) {
var $input = $(this), input = this, value = input.inputmask._valueGet();
value !== getBuffer().join("") && $input.trigger("setvalue");
});
}
var valueGet, valueSet;
if (!npt.inputmask.__valueGet) {
if (Object.getOwnPropertyDescriptor) {
"function" != typeof Object.getPrototypeOf && (Object.getPrototypeOf = "object" == typeof "test".__proto__ ? function(object) {
return object.__proto__;
} : function(object) {
return object.constructor.prototype;
});
var valueProperty = Object.getPrototypeOf ? Object.getOwnPropertyDescriptor(Object.getPrototypeOf(npt), "value") : void 0;
valueProperty && valueProperty.get && valueProperty.set ? (valueGet = valueProperty.get,
valueSet = valueProperty.set, Object.defineProperty(npt, "value", {
get: getter,
set: setter,
configurable: !0
})) : "INPUT" !== npt.tagName && (valueGet = function() {
return this.textContent;
}, valueSet = function(value) {
this.textContent = value;
}, Object.defineProperty(npt, "value", {
get: getter,
set: setter,
configurable: !0
}));
} else document.__lookupGetter__ && npt.__lookupGetter__("value") && (valueGet = npt.__lookupGetter__("value"),
valueSet = npt.__lookupSetter__("value"), npt.__defineGetter__("value", getter),
npt.__defineSetter__("value", setter));
npt.inputmask.__valueGet = valueGet, npt.inputmask._valueGet = function(overruleRTL) {
return isRTL && overruleRTL !== !0 ? valueGet.call(this.el).split("").reverse().join("") : valueGet.call(this.el);
}, npt.inputmask.__valueSet = valueSet, npt.inputmask._valueSet = function(value, overruleRTL) {
valueSet.call(this.el, null === value || void 0 === value ? "" : overruleRTL !== !0 && isRTL ? value.split("").reverse().join("") : value);
}, void 0 === valueGet && (valueGet = function() {
return this.value;
}, valueSet = function(value) {
this.value = value;
}, patchValhook(npt.type), installNativeValueSetFallback(npt));
}
}
function handleRemove(input, k, pos, strict) {
function generalize() {
if (opts.keepStatic) {
for (var validInputs = [], lastAlt = getLastValidPosition(-1, !0), positionsClone = $.extend(!0, {}, getMaskSet().validPositions), prevAltPos = getMaskSet().validPositions[lastAlt]; lastAlt >= 0; lastAlt--) {
var altPos = getMaskSet().validPositions[lastAlt];
if (altPos) {
if (altPos.generatedInput !== !0 && /[0-9a-bA-Z]/.test(altPos.input) && validInputs.push(altPos.input),
delete getMaskSet().validPositions[lastAlt], void 0 !== altPos.alternation && altPos.locator[altPos.alternation] !== prevAltPos.locator[altPos.alternation]) break;
prevAltPos = altPos;
}
}
if (lastAlt > -1) for (getMaskSet().p = seekNext(getLastValidPosition(-1, !0)); validInputs.length > 0; ) {
var keypress = new $.Event("keypress");
keypress.which = validInputs.pop().charCodeAt(0), keypressEvent.call(input, keypress, !0, !1, !1, getMaskSet().p);
} else getMaskSet().validPositions = $.extend(!0, {}, positionsClone);
}
}
if ((opts.numericInput || isRTL) && (k === Inputmask.keyCode.BACKSPACE ? k = Inputmask.keyCode.DELETE : k === Inputmask.keyCode.DELETE && (k = Inputmask.keyCode.BACKSPACE),
isRTL)) {
var pend = pos.end;
pos.end = pos.begin, pos.begin = pend;
}
k === Inputmask.keyCode.BACKSPACE && (pos.end - pos.begin < 1 || opts.insertMode === !1) ? (pos.begin = seekPrevious(pos.begin),
void 0 === getMaskSet().validPositions[pos.begin] || getMaskSet().validPositions[pos.begin].input !== opts.groupSeparator && getMaskSet().validPositions[pos.begin].input !== opts.radixPoint || pos.begin--) : k === Inputmask.keyCode.DELETE && pos.begin === pos.end && (pos.end = isMask(pos.end, !0) ? pos.end + 1 : seekNext(pos.end) + 1,
void 0 === getMaskSet().validPositions[pos.begin] || getMaskSet().validPositions[pos.begin].input !== opts.groupSeparator && getMaskSet().validPositions[pos.begin].input !== opts.radixPoint || pos.end++),
stripValidPositions(pos.begin, pos.end, !1, strict), strict !== !0 && generalize();
var lvp = getLastValidPosition(pos.begin, !0);
lvp < pos.begin ? getMaskSet().p = seekNext(lvp) : strict !== !0 && (getMaskSet().p = pos.begin);
}
function keydownEvent(e) {
var input = this, $input = $(input), k = e.keyCode, pos = caret(input);
if (k === Inputmask.keyCode.BACKSPACE || k === Inputmask.keyCode.DELETE || iphone && k === Inputmask.keyCode.BACKSPACE_SAFARI || e.ctrlKey && k === Inputmask.keyCode.X && !isInputEventSupported("cut")) e.preventDefault(),
handleRemove(input, k, pos), writeBuffer(input, getBuffer(!0), getMaskSet().p, e, input.inputmask._valueGet() !== getBuffer().join("")),
input.inputmask._valueGet() === getBufferTemplate().join("") ? $input.trigger("cleared") : isComplete(getBuffer()) === !0 && $input.trigger("complete"),
opts.showTooltip && (input.title = opts.tooltip || getMaskSet().mask); else if (k === Inputmask.keyCode.END || k === Inputmask.keyCode.PAGE_DOWN) {
e.preventDefault();
var caretPos = seekNext(getLastValidPosition());
opts.insertMode || caretPos !== getMaskSet().maskLength || e.shiftKey || caretPos--,
caret(input, e.shiftKey ? pos.begin : caretPos, caretPos, !0);
} else k === Inputmask.keyCode.HOME && !e.shiftKey || k === Inputmask.keyCode.PAGE_UP ? (e.preventDefault(),
caret(input, 0, e.shiftKey ? pos.begin : 0, !0)) : (opts.undoOnEscape && k === Inputmask.keyCode.ESCAPE || 90 === k && e.ctrlKey) && e.altKey !== !0 ? (checkVal(input, !0, !1, undoValue.split("")),
$input.trigger("click")) : k !== Inputmask.keyCode.INSERT || e.shiftKey || e.ctrlKey ? opts.tabThrough === !0 && k === Inputmask.keyCode.TAB ? (e.shiftKey === !0 ? (null === getTest(pos.begin).match.fn && (pos.begin = seekNext(pos.begin)),
pos.end = seekPrevious(pos.begin, !0), pos.begin = seekPrevious(pos.end, !0)) : (pos.begin = seekNext(pos.begin, !0),
pos.end = seekNext(pos.begin, !0), pos.end < getMaskSet().maskLength && pos.end--),
pos.begin < getMaskSet().maskLength && (e.preventDefault(), caret(input, pos.begin, pos.end))) : opts.insertMode !== !1 || e.shiftKey || (k === Inputmask.keyCode.RIGHT ? setTimeout(function() {
var caretPos = caret(input);
caret(input, caretPos.begin);
}, 0) : k === Inputmask.keyCode.LEFT && setTimeout(function() {
var caretPos = caret(input);
caret(input, isRTL ? caretPos.begin + 1 : caretPos.begin - 1);
}, 0)) : (opts.insertMode = !opts.insertMode, caret(input, opts.insertMode || pos.begin !== getMaskSet().maskLength ? pos.begin : pos.begin - 1));
opts.onKeyDown.call(this, e, getBuffer(), caret(input).begin, opts), ignorable = $.inArray(k, opts.ignorables) !== -1;
}
function keypressEvent(e, checkval, writeOut, strict, ndx) {
var input = this, $input = $(input), k = e.which || e.charCode || e.keyCode;
if (!(checkval === !0 || e.ctrlKey && e.altKey) && (e.ctrlKey || e.metaKey || ignorable)) return k === Inputmask.keyCode.ENTER && undoValue !== getBuffer().join("") && (undoValue = getBuffer().join(""),
setTimeout(function() {
$input.trigger("change");
}, 0)), !0;
if (k) {
46 === k && e.shiftKey === !1 && "," === opts.radixPoint && (k = 44);
var forwardPosition, pos = checkval ? {
begin: ndx,
end: ndx
} : caret(input), c = String.fromCharCode(k);
getMaskSet().writeOutBuffer = !0;
var valResult = isValid(pos, c, strict);
if (valResult !== !1 && (resetMaskSet(!0), forwardPosition = void 0 !== valResult.caret ? valResult.caret : checkval ? valResult.pos + 1 : seekNext(valResult.pos),
getMaskSet().p = forwardPosition), writeOut !== !1) {
var self = this;
if (setTimeout(function() {
opts.onKeyValidation.call(self, k, valResult, opts);
}, 0), getMaskSet().writeOutBuffer && valResult !== !1) {
var buffer = getBuffer();
writeBuffer(input, buffer, opts.numericInput && void 0 === valResult.caret ? seekPrevious(forwardPosition) : forwardPosition, e, checkval !== !0),
checkval !== !0 && setTimeout(function() {
isComplete(buffer) === !0 && $input.trigger("complete");
}, 0);
}
}
if (opts.showTooltip && (input.title = opts.tooltip || getMaskSet().mask), e.preventDefault(),
checkval) return valResult.forwardPosition = forwardPosition, valResult;
}
}
function pasteEvent(e) {
var tempValue, input = this, ev = e.originalEvent || e, $input = $(input), inputValue = input.inputmask._valueGet(!0), caretPos = caret(input);
isRTL && (tempValue = caretPos.end, caretPos.end = caretPos.begin, caretPos.begin = tempValue);
var valueBeforeCaret = inputValue.substr(0, caretPos.begin), valueAfterCaret = inputValue.substr(caretPos.end, inputValue.length);
if (valueBeforeCaret === (isRTL ? getBufferTemplate().reverse() : getBufferTemplate()).slice(0, caretPos.begin).join("") && (valueBeforeCaret = ""),
valueAfterCaret === (isRTL ? getBufferTemplate().reverse() : getBufferTemplate()).slice(caretPos.end).join("") && (valueAfterCaret = ""),
isRTL && (tempValue = valueBeforeCaret, valueBeforeCaret = valueAfterCaret, valueAfterCaret = tempValue),
window.clipboardData && window.clipboardData.getData) inputValue = valueBeforeCaret + window.clipboardData.getData("Text") + valueAfterCaret; else {
if (!ev.clipboardData || !ev.clipboardData.getData) return !0;
inputValue = valueBeforeCaret + ev.clipboardData.getData("text/plain") + valueAfterCaret;
}
var pasteValue = inputValue;
if ($.isFunction(opts.onBeforePaste)) {
if (pasteValue = opts.onBeforePaste(inputValue, opts), pasteValue === !1) return e.preventDefault();
pasteValue || (pasteValue = inputValue);
}
return checkVal(input, !1, !1, isRTL ? pasteValue.split("").reverse() : pasteValue.toString().split("")),
writeBuffer(input, getBuffer(), seekNext(getLastValidPosition()), e, undoValue !== getBuffer().join("")),
isComplete(getBuffer()) === !0 && $input.trigger("complete"), e.preventDefault();
}
function inputFallBackEvent(e) {
var input = this, inputValue = input.inputmask._valueGet();
if (getBuffer().join("") !== inputValue) {
var caretPos = caret(input);
if (inputValue = inputValue.replace(new RegExp("(" + Inputmask.escapeRegex(getBufferTemplate().join("")) + ")*"), ""),
iemobile) {
var inputChar = inputValue.replace(getBuffer().join(""), "");
if (1 === inputChar.length) {
var keypress = new $.Event("keypress");
return keypress.which = inputChar.charCodeAt(0), keypressEvent.call(input, keypress, !0, !0, !1, getMaskSet().validPositions[caretPos.begin - 1] ? caretPos.begin : caretPos.begin - 1),
!1;
}
}
if (caretPos.begin > inputValue.length && (caret(input, inputValue.length), caretPos = caret(input)),
getBuffer().length - inputValue.length !== 1 || inputValue.charAt(caretPos.begin) === getBuffer()[caretPos.begin] || inputValue.charAt(caretPos.begin + 1) === getBuffer()[caretPos.begin] || isMask(caretPos.begin)) {
for (var lvp = getLastValidPosition() + 1, bufferTemplate = getBuffer().slice(lvp).join(""); null === inputValue.match(Inputmask.escapeRegex(bufferTemplate) + "$"); ) bufferTemplate = bufferTemplate.slice(1);
inputValue = inputValue.replace(bufferTemplate, ""), inputValue = inputValue.split(""),
checkVal(input, !0, !1, inputValue, e, caretPos.begin < lvp), isComplete(getBuffer()) === !0 && $(input).trigger("complete");
} else e.keyCode = Inputmask.keyCode.BACKSPACE, keydownEvent.call(input, e);
e.preventDefault();
}
}
function setValueEvent(e) {
var input = this, value = input.inputmask._valueGet();
checkVal(input, !0, !1, ($.isFunction(opts.onBeforeMask) ? opts.onBeforeMask(value, opts) || value : value).split("")),
undoValue = getBuffer().join(""), (opts.clearMaskOnLostFocus || opts.clearIncomplete) && input.inputmask._valueGet() === getBufferTemplate().join("") && input.inputmask._valueSet("");
}
function focusEvent(e) {
var input = this, nptValue = input.inputmask._valueGet();
opts.showMaskOnFocus && (!opts.showMaskOnHover || opts.showMaskOnHover && "" === nptValue) ? input.inputmask._valueGet() !== getBuffer().join("") && writeBuffer(input, getBuffer(), seekNext(getLastValidPosition())) : mouseEnter === !1 && caret(input, seekNext(getLastValidPosition())),
opts.positionCaretOnTab === !0 && setTimeout(function() {
clickEvent.apply(this, [ e ]);
}, 0), undoValue = getBuffer().join("");
}
function mouseleaveEvent(e) {
var input = this;
if (mouseEnter = !1, opts.clearMaskOnLostFocus && document.activeElement !== input) {
var buffer = getBuffer().slice(), nptValue = input.inputmask._valueGet();
nptValue !== input.getAttribute("placeholder") && "" !== nptValue && (getLastValidPosition() === -1 && nptValue === getBufferTemplate().join("") ? buffer = [] : clearOptionalTail(buffer),
writeBuffer(input, buffer));
}
}
function clickEvent(e) {
function doRadixFocus(clickPos) {
if ("" !== opts.radixPoint) {
var vps = getMaskSet().validPositions;
if (void 0 === vps[clickPos] || vps[clickPos].input === getPlaceholder(clickPos)) {
if (clickPos < seekNext(-1)) return !0;
var radixPos = $.inArray(opts.radixPoint, getBuffer());
if (radixPos !== -1) {
for (var vp in vps) if (radixPos < vp && vps[vp].input !== getPlaceholder(vp)) return !1;
return !0;
}
}
}
return !1;
}
var input = this;
setTimeout(function() {
if (document.activeElement === input) {
var selectedCaret = caret(input);
if (selectedCaret.begin === selectedCaret.end) switch (opts.positionCaretOnClick) {
case "none":
break;
case "radixFocus":
if (doRadixFocus(selectedCaret.begin)) {
var radixPos = $.inArray(opts.radixPoint, getBuffer().join(""));
caret(input, opts.numericInput ? seekNext(radixPos) : radixPos);
break;
}
default:
var clickPosition = selectedCaret.begin, lvclickPosition = getLastValidPosition(clickPosition, !0), lastPosition = seekNext(lvclickPosition);
if (clickPosition < lastPosition) caret(input, isMask(clickPosition) || isMask(clickPosition - 1) ? clickPosition : seekNext(clickPosition)); else {
var placeholder = getPlaceholder(lastPosition);
("" !== placeholder && getBuffer()[lastPosition] !== placeholder && getTest(lastPosition).match.optionalQuantifier !== !0 || !isMask(lastPosition, !0) && getTest(lastPosition).match.def === placeholder) && (lastPosition = seekNext(lastPosition)),
caret(input, lastPosition);
}
}
}
}, 0);
}
function dblclickEvent(e) {
var input = this;
setTimeout(function() {
caret(input, 0, seekNext(getLastValidPosition()));
}, 0);
}
function cutEvent(e) {
var input = this, $input = $(input), pos = caret(input), ev = e.originalEvent || e, clipboardData = window.clipboardData || ev.clipboardData, clipData = isRTL ? getBuffer().slice(pos.end, pos.begin) : getBuffer().slice(pos.begin, pos.end);
clipboardData.setData("text", isRTL ? clipData.reverse().join("") : clipData.join("")),
document.execCommand && document.execCommand("copy"), handleRemove(input, Inputmask.keyCode.DELETE, pos),
writeBuffer(input, getBuffer(), getMaskSet().p, e, undoValue !== getBuffer().join("")),
input.inputmask._valueGet() === getBufferTemplate().join("") && $input.trigger("cleared"),
opts.showTooltip && (input.title = opts.tooltip || getMaskSet().mask);
}
function blurEvent(e) {
var $input = $(this), input = this;
if (input.inputmask) {
var nptValue = input.inputmask._valueGet(), buffer = getBuffer().slice();
undoValue !== buffer.join("") && setTimeout(function() {
$input.trigger("change"), undoValue = buffer.join("");
}, 0), "" !== nptValue && (opts.clearMaskOnLostFocus && (getLastValidPosition() === -1 && nptValue === getBufferTemplate().join("") ? buffer = [] : clearOptionalTail(buffer)),
isComplete(buffer) === !1 && (setTimeout(function() {
$input.trigger("incomplete");
}, 0), opts.clearIncomplete && (resetMaskSet(), buffer = opts.clearMaskOnLostFocus ? [] : getBufferTemplate().slice())),
writeBuffer(input, buffer, void 0, e));
}
}
function mouseenterEvent(e) {
var input = this;
mouseEnter = !0, document.activeElement !== input && opts.showMaskOnHover && input.inputmask._valueGet() !== getBuffer().join("") && writeBuffer(input, getBuffer());
}
function submitEvent(e) {
undoValue !== getBuffer().join("") && $el.trigger("change"), opts.clearMaskOnLostFocus && getLastValidPosition() === -1 && el.inputmask._valueGet && el.inputmask._valueGet() === getBufferTemplate().join("") && el.inputmask._valueSet(""),
opts.removeMaskOnSubmit && (el.inputmask._valueSet(el.inputmask.unmaskedvalue(), !0),
setTimeout(function() {
writeBuffer(el, getBuffer());
}, 0));
}
function resetEvent(e) {
setTimeout(function() {
$el.trigger("setvalue");
}, 0);
}
function mask(elem) {
if (el = elem, $el = $(el), opts.showTooltip && (el.title = opts.tooltip || getMaskSet().mask),
("rtl" === el.dir || opts.rightAlign) && (el.style.textAlign = "right"), ("rtl" === el.dir || opts.numericInput) && (el.dir = "ltr",
el.removeAttribute("dir"), el.inputmask.isRTL = !0, isRTL = !0), EventRuler.off(el),
patchValueProperty(el), isElementTypeSupported(el, opts) && (EventRuler.on(el, "submit", submitEvent),
EventRuler.on(el, "reset", resetEvent), EventRuler.on(el, "mouseenter", mouseenterEvent),
EventRuler.on(el, "blur", blurEvent), EventRuler.on(el, "focus", focusEvent), EventRuler.on(el, "mouseleave", mouseleaveEvent),
EventRuler.on(el, "click", clickEvent), EventRuler.on(el, "dblclick", dblclickEvent),
EventRuler.on(el, "paste", pasteEvent), EventRuler.on(el, "dragdrop", pasteEvent),
EventRuler.on(el, "drop", pasteEvent), EventRuler.on(el, "cut", cutEvent), EventRuler.on(el, "complete", opts.oncomplete),
EventRuler.on(el, "incomplete", opts.onincomplete), EventRuler.on(el, "cleared", opts.oncleared),
opts.inputEventOnly !== !0 && (EventRuler.on(el, "keydown", keydownEvent), EventRuler.on(el, "keypress", keypressEvent)),
EventRuler.on(el, "input", inputFallBackEvent)), EventRuler.on(el, "setvalue", setValueEvent),
getBufferTemplate(), "" !== el.inputmask._valueGet() || opts.clearMaskOnLostFocus === !1 || document.activeElement === el) {
var initialValue = $.isFunction(opts.onBeforeMask) ? opts.onBeforeMask(el.inputmask._valueGet(), opts) || el.inputmask._valueGet() : el.inputmask._valueGet();
checkVal(el, !0, !1, initialValue.split(""));
var buffer = getBuffer().slice();
undoValue = buffer.join(""), isComplete(buffer) === !1 && opts.clearIncomplete && resetMaskSet(),
opts.clearMaskOnLostFocus && document.activeElement !== el && (getLastValidPosition() === -1 ? buffer = [] : clearOptionalTail(buffer)),
writeBuffer(el, buffer), document.activeElement === el && caret(el, seekNext(getLastValidPosition()));
}
}
var undoValue, el, $el, maxLength, valueBuffer, isRTL = !1, skipKeyPressEvent = !1, skipInputEvent = !1, ignorable = !1, mouseEnter = !0, EventRuler = {
on: function(input, eventName, eventHandler) {
var ev = function(e) {
if (void 0 === this.inputmask && "FORM" !== this.nodeName) {
var imOpts = $.data(this, "_inputmask_opts");
imOpts ? new Inputmask(imOpts).mask(this) : EventRuler.off(this);
} else {
if ("setvalue" === e.type || !(this.disabled || this.readOnly && !("keydown" === e.type && e.ctrlKey && 67 === e.keyCode || opts.tabThrough === !1 && e.keyCode === Inputmask.keyCode.TAB))) {
switch (e.type) {
case "input":
if (skipInputEvent === !0) return skipInputEvent = !1, e.preventDefault();
break;
case "keydown":
skipKeyPressEvent = !1, skipInputEvent = !1;
break;
case "keypress":
if (skipKeyPressEvent === !0) return e.preventDefault();
skipKeyPressEvent = !0;
break;
case "click":
if (iemobile) {
var that = this;
return setTimeout(function() {
eventHandler.apply(that, arguments);
}, 0), !1;
}
}
var returnVal = eventHandler.apply(this, arguments);
return returnVal === !1 && (e.preventDefault(), e.stopPropagation()), returnVal;
}
e.preventDefault();
}
};
input.inputmask.events[eventName] = input.inputmask.events[eventName] || [], input.inputmask.events[eventName].push(ev),
$.inArray(eventName, [ "submit", "reset" ]) !== -1 ? null != input.form && $(input.form).on(eventName, ev) : $(input).on(eventName, ev);
},
off: function(input, event) {
if (input.inputmask && input.inputmask.events) {
var events;
event ? (events = [], events[event] = input.inputmask.events[event]) : events = input.inputmask.events,
$.each(events, function(eventName, evArr) {
for (;evArr.length > 0; ) {
var ev = evArr.pop();
$.inArray(eventName, [ "submit", "reset" ]) !== -1 ? null != input.form && $(input.form).off(eventName, ev) : $(input).off(eventName, ev);
}
delete input.inputmask.events[eventName];
});
}
}
};
if (void 0 !== actionObj) switch (actionObj.action) {
case "isComplete":
return el = actionObj.el, isComplete(getBuffer());
case "unmaskedvalue":
return el = actionObj.el, void 0 !== el && void 0 !== el.inputmask ? (maskset = el.inputmask.maskset,
opts = el.inputmask.opts, isRTL = el.inputmask.isRTL) : (valueBuffer = actionObj.value,
opts.numericInput && (isRTL = !0), valueBuffer = ($.isFunction(opts.onBeforeMask) ? opts.onBeforeMask(valueBuffer, opts) || valueBuffer : valueBuffer).split(""),
checkVal(void 0, !1, !1, isRTL ? valueBuffer.reverse() : valueBuffer), $.isFunction(opts.onBeforeWrite) && opts.onBeforeWrite(void 0, getBuffer(), 0, opts)),
unmaskedvalue(el);
case "mask":
el = actionObj.el, maskset = el.inputmask.maskset, opts = el.inputmask.opts, isRTL = el.inputmask.isRTL,
mask(el);
break;
case "format":
return opts.numericInput && (isRTL = !0), valueBuffer = ($.isFunction(opts.onBeforeMask) ? opts.onBeforeMask(actionObj.value, opts) || actionObj.value : actionObj.value).split(""),
checkVal(void 0, !1, !1, isRTL ? valueBuffer.reverse() : valueBuffer), $.isFunction(opts.onBeforeWrite) && opts.onBeforeWrite(void 0, getBuffer(), 0, opts),
actionObj.metadata ? {
value: isRTL ? getBuffer().slice().reverse().join("") : getBuffer().join(""),
metadata: maskScope({
action: "getmetadata"
}, maskset, opts)
} : isRTL ? getBuffer().slice().reverse().join("") : getBuffer().join("");
case "isValid":
opts.numericInput && (isRTL = !0), actionObj.value ? (valueBuffer = actionObj.value.split(""),
checkVal(void 0, !1, !0, isRTL ? valueBuffer.reverse() : valueBuffer)) : actionObj.value = getBuffer().join("");
for (var buffer = getBuffer(), rl = determineLastRequiredPosition(), lmib = buffer.length - 1; lmib > rl && !isMask(lmib); lmib--) ;
return buffer.splice(rl, lmib + 1 - rl), isComplete(buffer) && actionObj.value === getBuffer().join("");
case "getemptymask":
return getBufferTemplate().join("");
case "remove":
el = actionObj.el, $el = $(el), maskset = el.inputmask.maskset, opts = el.inputmask.opts,
el.inputmask._valueSet(unmaskedvalue(el)), EventRuler.off(el);
var valueProperty;
Object.getOwnPropertyDescriptor && Object.getPrototypeOf ? (valueProperty = Object.getOwnPropertyDescriptor(Object.getPrototypeOf(el), "value"),
valueProperty && el.inputmask.__valueGet && Object.defineProperty(el, "value", {
get: el.inputmask.__valueGet,
set: el.inputmask.__valueSet,
configurable: !0
})) : document.__lookupGetter__ && el.__lookupGetter__("value") && el.inputmask.__valueGet && (el.__defineGetter__("value", el.inputmask.__valueGet),
el.__defineSetter__("value", el.inputmask.__valueSet)), el.inputmask = void 0;
break;
case "getmetadata":
if ($.isArray(maskset.metadata)) {
for (var alternation, lvp = getLastValidPosition(void 0, !0), firstAlt = lvp; firstAlt >= 0; firstAlt--) if (getMaskSet().validPositions[firstAlt] && void 0 !== getMaskSet().validPositions[firstAlt].alternation) {
alternation = getMaskSet().validPositions[firstAlt].alternation;
break;
}
return void 0 !== alternation ? maskset.metadata[getMaskSet().validPositions[firstAlt].locator[alternation]] : [];
}
return maskset.metadata;
}
}
Inputmask.prototype = {
defaults: {
placeholder: "_",
optionalmarker: {
start: "[",
end: "]"
},
quantifiermarker: {
start: "{",
end: "}"
},
groupmarker: {
start: "(",
end: ")"
},
alternatormarker: "|",
escapeChar: "\\",
mask: null,
oncomplete: $.noop,
onincomplete: $.noop,
oncleared: $.noop,
repeat: 0,
greedy: !0,
autoUnmask: !1,
removeMaskOnSubmit: !1,
clearMaskOnLostFocus: !0,
insertMode: !0,
clearIncomplete: !1,
aliases: {},
alias: null,
onKeyDown: $.noop,
onBeforeMask: null,
onBeforePaste: function(pastedValue, opts) {
return $.isFunction(opts.onBeforeMask) ? opts.onBeforeMask(pastedValue, opts) : pastedValue;
},
onBeforeWrite: null,
onUnMask: null,
showMaskOnFocus: !0,
showMaskOnHover: !0,
onKeyValidation: $.noop,
skipOptionalPartCharacter: " ",
showTooltip: !1,
tooltip: void 0,
numericInput: !1,
rightAlign: !1,
undoOnEscape: !0,
radixPoint: "",
radixPointDefinitionSymbol: void 0,
groupSeparator: "",
keepStatic: null,
positionCaretOnTab: !0,
tabThrough: !1,
supportsInputType: [ "text", "tel", "password" ],
definitions: {
"9": {
validator: "[0-9]",
cardinality: 1,
definitionSymbol: "*"
},
a: {
validator: "[A-Za-z\u0410-\u044f\u0401\u0451\xc0-\xff\xb5]",
cardinality: 1,
definitionSymbol: "*"
},
"*": {
validator: "[0-9A-Za-z\u0410-\u044f\u0401\u0451\xc0-\xff\xb5]",
cardinality: 1
}
},
ignorables: [ 8, 9, 13, 19, 27, 33, 34, 35, 36, 37, 38, 39, 40, 45, 46, 93, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123 ],
isComplete: null,
canClearPosition: $.noop,
postValidation: null,
staticDefinitionSymbol: void 0,
jitMasking: !1,
nullable: !0,
inputEventOnly: !1,
positionCaretOnClick: "lvp",
casing: null
},
masksCache: {},
mask: function(elems) {
var that = this;
return "string" == typeof elems && (elems = document.getElementById(elems) || document.querySelectorAll(elems)),
elems = elems.nodeName ? [ elems ] : elems, $.each(elems, function(ndx, el) {
var scopedOpts = $.extend(!0, {}, that.opts);
importAttributeOptions(el, scopedOpts, $.extend(!0, {}, that.userOptions));
var maskset = generateMaskSet(scopedOpts, that.noMasksCache);
void 0 !== maskset && (void 0 !== el.inputmask && el.inputmask.remove(), el.inputmask = new Inputmask(),
el.inputmask.opts = scopedOpts, el.inputmask.noMasksCache = that.noMasksCache, el.inputmask.userOptions = $.extend(!0, {}, that.userOptions),
el.inputmask.el = el, el.inputmask.maskset = maskset, el.inputmask.isRTL = !1, $.data(el, "_inputmask_opts", scopedOpts),
maskScope({
action: "mask",
el: el
}));
}), elems && elems[0] ? elems[0].inputmask || this : this;
},
option: function(options, noremask) {
return "string" == typeof options ? this.opts[options] : "object" == typeof options ? ($.extend(this.userOptions, options),
this.el && noremask !== !0 && this.mask(this.el), this) : void 0;
},
unmaskedvalue: function(value) {
return maskScope({
action: "unmaskedvalue",
el: this.el,
value: value
}, this.el && this.el.inputmask ? this.el.inputmask.maskset : generateMaskSet(this.opts, this.noMasksCache), this.opts);
},
remove: function() {
if (this.el) return maskScope({
action: "remove",
el: this.el
}), this.el.inputmask = void 0, this.el;
},
getemptymask: function() {
return maskScope({
action: "getemptymask"
}, this.maskset || generateMaskSet(this.opts, this.noMasksCache), this.opts);
},
hasMaskedValue: function() {
return !this.opts.autoUnmask;
},
isComplete: function() {
return maskScope({
action: "isComplete",
el: this.el
}, this.maskset || generateMaskSet(this.opts, this.noMasksCache), this.opts);
},
getmetadata: function() {
return maskScope({
action: "getmetadata"
}, this.maskset || generateMaskSet(this.opts, this.noMasksCache), this.opts);
},
isValid: function(value) {
return maskScope({
action: "isValid",
value: value
}, this.maskset || generateMaskSet(this.opts, this.noMasksCache), this.opts);
},
format: function(value, metadata) {
return maskScope({
action: "format",
value: value,
metadata: metadata
}, this.maskset || generateMaskSet(this.opts, this.noMasksCache), this.opts);
}
}, Inputmask.extendDefaults = function(options) {
$.extend(!0, Inputmask.prototype.defaults, options);
}, Inputmask.extendDefinitions = function(definition) {
$.extend(!0, Inputmask.prototype.defaults.definitions, definition);
}, Inputmask.extendAliases = function(alias) {
$.extend(!0, Inputmask.prototype.defaults.aliases, alias);
}, Inputmask.format = function(value, options, metadata) {
return Inputmask(options).format(value, metadata);
}, Inputmask.unmask = function(value, options) {
return Inputmask(options).unmaskedvalue(value);
}, Inputmask.isValid = function(value, options) {
return Inputmask(options).isValid(value);
}, Inputmask.remove = function(elems) {
$.each(elems, function(ndx, el) {
el.inputmask && el.inputmask.remove();
});
}, Inputmask.escapeRegex = function(str) {
var specials = [ "/", ".", "*", "+", "?", "|", "(", ")", "[", "]", "{", "}", "\\", "$", "^" ];
return str.replace(new RegExp("(\\" + specials.join("|\\") + ")", "gim"), "\\$1");
}, Inputmask.keyCode = {
ALT: 18,
BACKSPACE: 8,
BACKSPACE_SAFARI: 127,
CAPS_LOCK: 20,
COMMA: 188,
COMMAND: 91,
COMMAND_LEFT: 91,
COMMAND_RIGHT: 93,
CONTROL: 17,
DELETE: 46,
DOWN: 40,
END: 35,
ENTER: 13,
ESCAPE: 27,
HOME: 36,
INSERT: 45,
LEFT: 37,
MENU: 93,
NUMPAD_ADD: 107,
NUMPAD_DECIMAL: 110,
NUMPAD_DIVIDE: 111,
NUMPAD_ENTER: 108,
NUMPAD_MULTIPLY: 106,
NUMPAD_SUBTRACT: 109,
PAGE_DOWN: 34,
PAGE_UP: 33,
PERIOD: 190,
RIGHT: 39,
SHIFT: 16,
SPACE: 32,
TAB: 9,
UP: 38,
WINDOWS: 91,
X: 88
};
var ua = navigator.userAgent, mobile = /mobile/i.test(ua), iemobile = /iemobile/i.test(ua), iphone = /iphone/i.test(ua) && !iemobile;
return window.Inputmask = Inputmask, Inputmask;
}(jQuery), function($, Inputmask) {
return void 0 === $.fn.inputmask && ($.fn.inputmask = function(fn, options) {
var nptmask, input = this[0];
if (void 0 === options && (options = {}), "string" == typeof fn) switch (fn) {
case "unmaskedvalue":
return input && input.inputmask ? input.inputmask.unmaskedvalue() : $(input).val();
case "remove":
return this.each(function() {
this.inputmask && this.inputmask.remove();
});
case "getemptymask":
return input && input.inputmask ? input.inputmask.getemptymask() : "";
case "hasMaskedValue":
return !(!input || !input.inputmask) && input.inputmask.hasMaskedValue();
case "isComplete":
return !input || !input.inputmask || input.inputmask.isComplete();
case "getmetadata":
return input && input.inputmask ? input.inputmask.getmetadata() : void 0;
case "setvalue":
$(input).val(options), input && void 0 === input.inputmask && $(input).triggerHandler("setvalue");
break;
case "option":
if ("string" != typeof options) return this.each(function() {
if (void 0 !== this.inputmask) return this.inputmask.option(options);
});
if (input && void 0 !== input.inputmask) return input.inputmask.option(options);
break;
default:
return options.alias = fn, nptmask = new Inputmask(options), this.each(function() {
nptmask.mask(this);
});
} else {
if ("object" == typeof fn) return nptmask = new Inputmask(fn), void 0 === fn.mask && void 0 === fn.alias ? this.each(function() {
return void 0 !== this.inputmask ? this.inputmask.option(fn) : void nptmask.mask(this);
}) : this.each(function() {
nptmask.mask(this);
});
if (void 0 === fn) return this.each(function() {
nptmask = new Inputmask(options), nptmask.mask(this);
});
}
}), $.fn.inputmask;
}(jQuery, Inputmask), function($, Inputmask) {
return Inputmask.extendDefinitions({
h: {
validator: "[01][0-9]|2[0-3]",
cardinality: 2,
prevalidator: [ {
validator: "[0-2]",
cardinality: 1
} ]
},
s: {
validator: "[0-5][0-9]",
cardinality: 2,
prevalidator: [ {
validator: "[0-5]",
cardinality: 1
} ]
},
d: {
validator: "0[1-9]|[12][0-9]|3[01]",
cardinality: 2,
prevalidator: [ {
validator: "[0-3]",
cardinality: 1
} ]
},
m: {
validator: "0[1-9]|1[012]",
cardinality: 2,
prevalidator: [ {
validator: "[01]",
cardinality: 1
} ]
},
y: {
validator: "(19|20)\\d{2}",
cardinality: 4,
prevalidator: [ {
validator: "[12]",
cardinality: 1
}, {
validator: "(19|20)",
cardinality: 2
}, {
validator: "(19|20)\\d",
cardinality: 3
} ]
}
}), Inputmask.extendAliases({
"dd/mm/yyyy": {
mask: "1/2/y",
placeholder: "dd/mm/yyyy",
regex: {
val1pre: new RegExp("[0-3]"),
val1: new RegExp("0[1-9]|[12][0-9]|3[01]"),
val2pre: function(separator) {
var escapedSeparator = Inputmask.escapeRegex.call(this, separator);
return new RegExp("((0[1-9]|[12][0-9]|3[01])" + escapedSeparator + "[01])");
},
val2: function(separator) {
var escapedSeparator = Inputmask.escapeRegex.call(this, separator);
return new RegExp("((0[1-9]|[12][0-9])" + escapedSeparator + "(0[1-9]|1[012]))|(30" + escapedSeparator + "(0[13-9]|1[012]))|(31" + escapedSeparator + "(0[13578]|1[02]))");
}
},
leapday: "29/02/",
separator: "/",
yearrange: {
minyear: 1900,
maxyear: 2099
},
isInYearRange: function(chrs, minyear, maxyear) {
if (isNaN(chrs)) return !1;
var enteredyear = parseInt(chrs.concat(minyear.toString().slice(chrs.length))), enteredyear2 = parseInt(chrs.concat(maxyear.toString().slice(chrs.length)));
return !isNaN(enteredyear) && (minyear <= enteredyear && enteredyear <= maxyear) || !isNaN(enteredyear2) && (minyear <= enteredyear2 && enteredyear2 <= maxyear);
},
determinebaseyear: function(minyear, maxyear, hint) {
var currentyear = new Date().getFullYear();
if (minyear > currentyear) return minyear;
if (maxyear < currentyear) {
for (var maxYearPrefix = maxyear.toString().slice(0, 2), maxYearPostfix = maxyear.toString().slice(2, 4); maxyear < maxYearPrefix + hint; ) maxYearPrefix--;
var maxxYear = maxYearPrefix + maxYearPostfix;
return minyear > maxxYear ? minyear : maxxYear;
}
if (minyear <= currentyear && currentyear <= maxyear) {
for (var currentYearPrefix = currentyear.toString().slice(0, 2); maxyear < currentYearPrefix + hint; ) currentYearPrefix--;
var currentYearAndHint = currentYearPrefix + hint;
return currentYearAndHint < minyear ? minyear : currentYearAndHint;
}
return currentyear;
},
onKeyDown: function(e, buffer, caretPos, opts) {
var $input = $(this);
if (e.ctrlKey && e.keyCode === Inputmask.keyCode.RIGHT) {
var today = new Date();
$input.val(today.getDate().toString() + (today.getMonth() + 1).toString() + today.getFullYear().toString()),
$input.trigger("setvalue");
}
},
getFrontValue: function(mask, buffer, opts) {
for (var start = 0, length = 0, i = 0; i < mask.length && "2" !== mask.charAt(i); i++) {
var definition = opts.definitions[mask.charAt(i)];
definition ? (start += length, length = definition.cardinality) : length++;
}
return buffer.join("").substr(start, length);
},
definitions: {
"1": {
validator: function(chrs, maskset, pos, strict, opts) {
var isValid = opts.regex.val1.test(chrs);
return strict || isValid || chrs.charAt(1) !== opts.separator && "-./".indexOf(chrs.charAt(1)) === -1 || !(isValid = opts.regex.val1.test("0" + chrs.charAt(0))) ? isValid : (maskset.buffer[pos - 1] = "0",
{
refreshFromBuffer: {
start: pos - 1,
end: pos
},
pos: pos,
c: chrs.charAt(0)
});
},
cardinality: 2,
prevalidator: [ {
validator: function(chrs, maskset, pos, strict, opts) {
var pchrs = chrs;
isNaN(maskset.buffer[pos + 1]) || (pchrs += maskset.buffer[pos + 1]);
var isValid = 1 === pchrs.length ? opts.regex.val1pre.test(pchrs) : opts.regex.val1.test(pchrs);
if (!strict && !isValid) {
if (isValid = opts.regex.val1.test(chrs + "0")) return maskset.buffer[pos] = chrs,
maskset.buffer[++pos] = "0", {
pos: pos,
c: "0"
};
if (isValid = opts.regex.val1.test("0" + chrs)) return maskset.buffer[pos] = "0",
pos++, {
pos: pos
};
}
return isValid;
},
cardinality: 1
} ]
},
"2": {
validator: function(chrs, maskset, pos, strict, opts) {
var frontValue = opts.getFrontValue(maskset.mask, maskset.buffer, opts);
frontValue.indexOf(opts.placeholder[0]) !== -1 && (frontValue = "01" + opts.separator);
var isValid = opts.regex.val2(opts.separator).test(frontValue + chrs);
if (!strict && !isValid && (chrs.charAt(1) === opts.separator || "-./".indexOf(chrs.charAt(1)) !== -1) && (isValid = opts.regex.val2(opts.separator).test(frontValue + "0" + chrs.charAt(0)))) return maskset.buffer[pos - 1] = "0",
{
refreshFromBuffer: {
start: pos - 1,
end: pos
},
pos: pos,
c: chrs.charAt(0)
};
if (opts.mask.indexOf("2") === opts.mask.length - 1 && isValid) {
var dayMonthValue = maskset.buffer.join("").substr(4, 4) + chrs;
if (dayMonthValue !== opts.leapday) return !0;
var year = parseInt(maskset.buffer.join("").substr(0, 4), 10);
return year % 4 === 0 && (year % 100 !== 0 || year % 400 === 0);
}
return isValid;
},
cardinality: 2,
prevalidator: [ {
validator: function(chrs, maskset, pos, strict, opts) {
isNaN(maskset.buffer[pos + 1]) || (chrs += maskset.buffer[pos + 1]);
var frontValue = opts.getFrontValue(maskset.mask, maskset.buffer, opts);
frontValue.indexOf(opts.placeholder[0]) !== -1 && (frontValue = "01" + opts.separator);
var isValid = 1 === chrs.length ? opts.regex.val2pre(opts.separator).test(frontValue + chrs) : opts.regex.val2(opts.separator).test(frontValue + chrs);
return strict || isValid || !(isValid = opts.regex.val2(opts.separator).test(frontValue + "0" + chrs)) ? isValid : (maskset.buffer[pos] = "0",
pos++, {
pos: pos
});
},
cardinality: 1
} ]
},
y: {
validator: function(chrs, maskset, pos, strict, opts) {
if (opts.isInYearRange(chrs, opts.yearrange.minyear, opts.yearrange.maxyear)) {
var dayMonthValue = maskset.buffer.join("").substr(0, 6);
if (dayMonthValue !== opts.leapday) return !0;
var year = parseInt(chrs, 10);
return year % 4 === 0 && (year % 100 !== 0 || year % 400 === 0);
}
return !1;
},
cardinality: 4,
prevalidator: [ {
validator: function(chrs, maskset, pos, strict, opts) {
var isValid = opts.isInYearRange(chrs, opts.yearrange.minyear, opts.yearrange.maxyear);
if (!strict && !isValid) {
var yearPrefix = opts.determinebaseyear(opts.yearrange.minyear, opts.yearrange.maxyear, chrs + "0").toString().slice(0, 1);
if (isValid = opts.isInYearRange(yearPrefix + chrs, opts.yearrange.minyear, opts.yearrange.maxyear)) return maskset.buffer[pos++] = yearPrefix.charAt(0),
{
pos: pos
};
if (yearPrefix = opts.determinebaseyear(opts.yearrange.minyear, opts.yearrange.maxyear, chrs + "0").toString().slice(0, 2),
isValid = opts.isInYearRange(yearPrefix + chrs, opts.yearrange.minyear, opts.yearrange.maxyear)) return maskset.buffer[pos++] = yearPrefix.charAt(0),
maskset.buffer[pos++] = yearPrefix.charAt(1), {
pos: pos
};
}
return isValid;
},
cardinality: 1
}, {
validator: function(chrs, maskset, pos, strict, opts) {
var isValid = opts.isInYearRange(chrs, opts.yearrange.minyear, opts.yearrange.maxyear);
if (!strict && !isValid) {
var yearPrefix = opts.determinebaseyear(opts.yearrange.minyear, opts.yearrange.maxyear, chrs).toString().slice(0, 2);
if (isValid = opts.isInYearRange(chrs[0] + yearPrefix[1] + chrs[1], opts.yearrange.minyear, opts.yearrange.maxyear)) return maskset.buffer[pos++] = yearPrefix.charAt(1),
{
pos: pos
};
if (yearPrefix = opts.determinebaseyear(opts.yearrange.minyear, opts.yearrange.maxyear, chrs).toString().slice(0, 2),
opts.isInYearRange(yearPrefix + chrs, opts.yearrange.minyear, opts.yearrange.maxyear)) {
var dayMonthValue = maskset.buffer.join("").substr(0, 6);
if (dayMonthValue !== opts.leapday) isValid = !0; else {
var year = parseInt(chrs, 10);
isValid = year % 4 === 0 && (year % 100 !== 0 || year % 400 === 0);
}
} else isValid = !1;
if (isValid) return maskset.buffer[pos - 1] = yearPrefix.charAt(0), maskset.buffer[pos++] = yearPrefix.charAt(1),
maskset.buffer[pos++] = chrs.charAt(0), {
refreshFromBuffer: {
start: pos - 3,
end: pos
},
pos: pos
};
}
return isValid;
},
cardinality: 2
}, {
validator: function(chrs, maskset, pos, strict, opts) {
return opts.isInYearRange(chrs, opts.yearrange.minyear, opts.yearrange.maxyear);
},
cardinality: 3
} ]
}
},
insertMode: !1,
autoUnmask: !1
},
"mm/dd/yyyy": {
placeholder: "mm/dd/yyyy",
alias: "dd/mm/yyyy",
regex: {
val2pre: function(separator) {
var escapedSeparator = Inputmask.escapeRegex.call(this, separator);
return new RegExp("((0[13-9]|1[012])" + escapedSeparator + "[0-3])|(02" + escapedSeparator + "[0-2])");
},
val2: function(separator) {
var escapedSeparator = Inputmask.escapeRegex.call(this, separator);
return new RegExp("((0[1-9]|1[012])" + escapedSeparator + "(0[1-9]|[12][0-9]))|((0[13-9]|1[012])" + escapedSeparator + "30)|((0[13578]|1[02])" + escapedSeparator + "31)");
},
val1pre: new RegExp("[01]"),
val1: new RegExp("0[1-9]|1[012]")
},
leapday: "02/29/",
onKeyDown: function(e, buffer, caretPos, opts) {
var $input = $(this);
if (e.ctrlKey && e.keyCode === Inputmask.keyCode.RIGHT) {
var today = new Date();
$input.val((today.getMonth() + 1).toString() + today.getDate().toString() + today.getFullYear().toString()),
$input.trigger("setvalue");
}
}
},
"yyyy/mm/dd": {
mask: "y/1/2",
placeholder: "yyyy/mm/dd",
alias: "mm/dd/yyyy",
leapday: "/02/29",
onKeyDown: function(e, buffer, caretPos, opts) {
var $input = $(this);
if (e.ctrlKey && e.keyCode === Inputmask.keyCode.RIGHT) {
var today = new Date();
$input.val(today.getFullYear().toString() + (today.getMonth() + 1).toString() + today.getDate().toString()),
$input.trigger("setvalue");
}
}
},
"dd.mm.yyyy": {
mask: "1.2.y",
placeholder: "dd.mm.yyyy",
leapday: "29.02.",
separator: ".",
alias: "dd/mm/yyyy"
},
"dd-mm-yyyy": {
mask: "1-2-y",
placeholder: "dd-mm-yyyy",
leapday: "29-02-",
separator: "-",
alias: "dd/mm/yyyy"
},
"mm.dd.yyyy": {
mask: "1.2.y",
placeholder: "mm.dd.yyyy",
leapday: "02.29.",
separator: ".",
alias: "mm/dd/yyyy"
},
"mm-dd-yyyy": {
mask: "1-2-y",
placeholder: "mm-dd-yyyy",
leapday: "02-29-",
separator: "-",
alias: "mm/dd/yyyy"
},
"yyyy.mm.dd": {
mask: "y.1.2",
placeholder: "yyyy.mm.dd",
leapday: ".02.29",
separator: ".",
alias: "yyyy/mm/dd"
},
"yyyy-mm-dd": {
mask: "y-1-2",
placeholder: "yyyy-mm-dd",
leapday: "-02-29",
separator: "-",
alias: "yyyy/mm/dd"
},
datetime: {
mask: "1/2/y h:s",
placeholder: "dd/mm/yyyy hh:mm",
alias: "dd/mm/yyyy",
regex: {
hrspre: new RegExp("[012]"),
hrs24: new RegExp("2[0-4]|1[3-9]"),
hrs: new RegExp("[01][0-9]|2[0-4]"),
ampm: new RegExp("^[a|p|A|P][m|M]"),
mspre: new RegExp("[0-5]"),
ms: new RegExp("[0-5][0-9]")
},
timeseparator: ":",
hourFormat: "24",
definitions: {
h: {
validator: function(chrs, maskset, pos, strict, opts) {
if ("24" === opts.hourFormat && 24 === parseInt(chrs, 10)) return maskset.buffer[pos - 1] = "0",
maskset.buffer[pos] = "0", {
refreshFromBuffer: {
start: pos - 1,
end: pos
},
c: "0"
};
var isValid = opts.regex.hrs.test(chrs);
if (!strict && !isValid && (chrs.charAt(1) === opts.timeseparator || "-.:".indexOf(chrs.charAt(1)) !== -1) && (isValid = opts.regex.hrs.test("0" + chrs.charAt(0)))) return maskset.buffer[pos - 1] = "0",
maskset.buffer[pos] = chrs.charAt(0), pos++, {
refreshFromBuffer: {
start: pos - 2,
end: pos
},
pos: pos,
c: opts.timeseparator
};
if (isValid && "24" !== opts.hourFormat && opts.regex.hrs24.test(chrs)) {
var tmp = parseInt(chrs, 10);
return 24 === tmp ? (maskset.buffer[pos + 5] = "a", maskset.buffer[pos + 6] = "m") : (maskset.buffer[pos + 5] = "p",
maskset.buffer[pos + 6] = "m"), tmp -= 12, tmp < 10 ? (maskset.buffer[pos] = tmp.toString(),
maskset.buffer[pos - 1] = "0") : (maskset.buffer[pos] = tmp.toString().charAt(1),
maskset.buffer[pos - 1] = tmp.toString().charAt(0)), {
refreshFromBuffer: {
start: pos - 1,
end: pos + 6
},
c: maskset.buffer[pos]
};
}
return isValid;
},
cardinality: 2,
prevalidator: [ {
validator: function(chrs, maskset, pos, strict, opts) {
var isValid = opts.regex.hrspre.test(chrs);
return strict || isValid || !(isValid = opts.regex.hrs.test("0" + chrs)) ? isValid : (maskset.buffer[pos] = "0",
pos++, {
pos: pos
});
},
cardinality: 1
} ]
},
s: {
validator: "[0-5][0-9]",
cardinality: 2,
prevalidator: [ {
validator: function(chrs, maskset, pos, strict, opts) {
var isValid = opts.regex.mspre.test(chrs);
return strict || isValid || !(isValid = opts.regex.ms.test("0" + chrs)) ? isValid : (maskset.buffer[pos] = "0",
pos++, {
pos: pos
});
},
cardinality: 1
} ]
},
t: {
validator: function(chrs, maskset, pos, strict, opts) {
return opts.regex.ampm.test(chrs + "m");
},
casing: "lower",
cardinality: 1
}
},
insertMode: !1,
autoUnmask: !1
},
datetime12: {
mask: "1/2/y h:s t\\m",
placeholder: "dd/mm/yyyy hh:mm xm",
alias: "datetime",
hourFormat: "12"
},
"mm/dd/yyyy hh:mm xm": {
mask: "1/2/y h:s t\\m",
placeholder: "mm/dd/yyyy hh:mm xm",
alias: "datetime12",
regex: {
val2pre: function(separator) {
var escapedSeparator = Inputmask.escapeRegex.call(this, separator);
return new RegExp("((0[13-9]|1[012])" + escapedSeparator + "[0-3])|(02" + escapedSeparator + "[0-2])");
},
val2: function(separator) {
var escapedSeparator = Inputmask.escapeRegex.call(this, separator);
return new RegExp("((0[1-9]|1[012])" + escapedSeparator + "(0[1-9]|[12][0-9]))|((0[13-9]|1[012])" + escapedSeparator + "30)|((0[13578]|1[02])" + escapedSeparator + "31)");
},
val1pre: new RegExp("[01]"),
val1: new RegExp("0[1-9]|1[012]")
},
leapday: "02/29/",
onKeyDown: function(e, buffer, caretPos, opts) {
var $input = $(this);
if (e.ctrlKey && e.keyCode === Inputmask.keyCode.RIGHT) {
var today = new Date();
$input.val((today.getMonth() + 1).toString() + today.getDate().toString() + today.getFullYear().toString()),
$input.trigger("setvalue");
}
}
},
"hh:mm t": {
mask: "h:s t\\m",
placeholder: "hh:mm xm",
alias: "datetime",
hourFormat: "12"
},
"h:s t": {
mask: "h:s t\\m",
placeholder: "hh:mm xm",
alias: "datetime",
hourFormat: "12"
},
"hh:mm:ss": {
mask: "h:s:s",
placeholder: "hh:mm:ss",
alias: "datetime",
autoUnmask: !1
},
"hh:mm": {
mask: "h:s",
placeholder: "hh:mm",
alias: "datetime",
autoUnmask: !1
},
date: {
alias: "dd/mm/yyyy"
},
"mm/yyyy": {
mask: "1/y",
placeholder: "mm/yyyy",
leapday: "donotuse",
separator: "/",
alias: "mm/dd/yyyy"
},
shamsi: {
regex: {
val2pre: function(separator) {
var escapedSeparator = Inputmask.escapeRegex.call(this, separator);
return new RegExp("((0[1-9]|1[012])" + escapedSeparator + "[0-3])");
},
val2: function(separator) {
var escapedSeparator = Inputmask.escapeRegex.call(this, separator);
return new RegExp("((0[1-9]|1[012])" + escapedSeparator + "(0[1-9]|[12][0-9]))|((0[1-9]|1[012])" + escapedSeparator + "30)|((0[1-6])" + escapedSeparator + "31)");
},
val1pre: new RegExp("[01]"),
val1: new RegExp("0[1-9]|1[012]")
},
yearrange: {
minyear: 1300,
maxyear: 1499
},
mask: "y/1/2",
leapday: "/12/30",
placeholder: "yyyy/mm/dd",
alias: "mm/dd/yyyy",
clearIncomplete: !0
}
}), Inputmask;
}(jQuery, Inputmask), function($, Inputmask) {
return Inputmask.extendDefinitions({
A: {
validator: "[A-Za-z\u0410-\u044f\u0401\u0451\xc0-\xff\xb5]",
cardinality: 1,
casing: "upper"
},
"&": {
validator: "[0-9A-Za-z\u0410-\u044f\u0401\u0451\xc0-\xff\xb5]",
cardinality: 1,
casing: "upper"
},
"#": {
validator: "[0-9A-Fa-f]",
cardinality: 1,
casing: "upper"
}
}), Inputmask.extendAliases({
url: {
definitions: {
i: {
validator: ".",
cardinality: 1
}
},
mask: "(\\http://)|(\\http\\s://)|(ftp://)|(ftp\\s://)i{+}",
insertMode: !1,
autoUnmask: !1
},
ip: {
mask: "i[i[i]].i[i[i]].i[i[i]].i[i[i]]",
definitions: {
i: {
validator: function(chrs, maskset, pos, strict, opts) {
return pos - 1 > -1 && "." !== maskset.buffer[pos - 1] ? (chrs = maskset.buffer[pos - 1] + chrs,
chrs = pos - 2 > -1 && "." !== maskset.buffer[pos - 2] ? maskset.buffer[pos - 2] + chrs : "0" + chrs) : chrs = "00" + chrs,
new RegExp("25[0-5]|2[0-4][0-9]|[01][0-9][0-9]").test(chrs);
},
cardinality: 1
}
},
onUnMask: function(maskedValue, unmaskedValue, opts) {
return maskedValue;
}
},
email: {
mask: "*{1,64}[.*{1,64}][.*{1,64}][.*{1,63}]@-{1,63}.-{1,63}[.-{1,63}][.-{1,63}]",
greedy: !1,
onBeforePaste: function(pastedValue, opts) {
return pastedValue = pastedValue.toLowerCase(), pastedValue.replace("mailto:", "");
},
definitions: {
"*": {
validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~-]",
cardinality: 1,
casing: "lower"
},
"-": {
validator: "[0-9A-Za-z-]",
cardinality: 1,
casing: "lower"
}
},
onUnMask: function(maskedValue, unmaskedValue, opts) {
return maskedValue;
}
},
mac: {
mask: "##:##:##:##:##:##"
},
vin: {
mask: "V{13}9{4}",
definitions: {
V: {
validator: "[A-HJ-NPR-Za-hj-npr-z\\d]",
cardinality: 1,
casing: "upper"
}
},
clearIncomplete: !0,
autoUnmask: !0
}
}), Inputmask;
}(jQuery, Inputmask), function($, Inputmask) {
return Inputmask.extendAliases({
numeric: {
mask: function(opts) {
function autoEscape(txt) {
for (var escapedTxt = "", i = 0; i < txt.length; i++) escapedTxt += opts.definitions[txt.charAt(i)] || opts.optionalmarker.start === txt.charAt(i) || opts.optionalmarker.end === txt.charAt(i) || opts.quantifiermarker.start === txt.charAt(i) || opts.quantifiermarker.end === txt.charAt(i) || opts.groupmarker.start === txt.charAt(i) || opts.groupmarker.end === txt.charAt(i) || opts.alternatormarker === txt.charAt(i) ? "\\" + txt.charAt(i) : txt.charAt(i);
return escapedTxt;
}
if (0 !== opts.repeat && isNaN(opts.integerDigits) && (opts.integerDigits = opts.repeat),
opts.repeat = 0, opts.groupSeparator === opts.radixPoint && ("." === opts.radixPoint ? opts.groupSeparator = "," : "," === opts.radixPoint ? opts.groupSeparator = "." : opts.groupSeparator = ""),
" " === opts.groupSeparator && (opts.skipOptionalPartCharacter = void 0), opts.autoGroup = opts.autoGroup && "" !== opts.groupSeparator,
opts.autoGroup && ("string" == typeof opts.groupSize && isFinite(opts.groupSize) && (opts.groupSize = parseInt(opts.groupSize)),
isFinite(opts.integerDigits))) {
var seps = Math.floor(opts.integerDigits / opts.groupSize), mod = opts.integerDigits % opts.groupSize;
opts.integerDigits = parseInt(opts.integerDigits) + (0 === mod ? seps - 1 : seps),
opts.integerDigits < 1 && (opts.integerDigits = "*");
}
opts.placeholder.length > 1 && (opts.placeholder = opts.placeholder.charAt(0)),
"radixFocus" === opts.positionCaretOnClick && "" === opts.placeholder && opts.integerOptional === !1 && (opts.positionCaretOnClick = "lvp"),
opts.definitions[";"] = opts.definitions["~"], opts.definitions[";"].definitionSymbol = "~",
opts.numericInput === !0 && (opts.positionCaretOnClick = "radixFocus" === opts.positionCaretOnClick ? "lvp" : opts.positionCaretOnClick,
opts.digitsOptional = !1, isNaN(opts.digits) && (opts.digits = 2), opts.decimalProtect = !1);
var mask = autoEscape(opts.prefix);
if (mask += "[+]", mask += opts.integerOptional === !0 ? "~{1," + opts.integerDigits + "}" : "~{" + opts.integerDigits + "}",
void 0 !== opts.digits) {
opts.decimalProtect && (opts.radixPointDefinitionSymbol = ":");
var dq = opts.digits.toString().split(",");
isFinite(dq[0] && dq[1] && isFinite(dq[1])) ? mask += (opts.decimalProtect ? ":" : opts.radixPoint) + ";{" + opts.digits + "}" : (isNaN(opts.digits) || parseInt(opts.digits) > 0) && (mask += opts.digitsOptional ? "[" + (opts.decimalProtect ? ":" : opts.radixPoint) + ";{1," + opts.digits + "}]" : (opts.decimalProtect ? ":" : opts.radixPoint) + ";{" + opts.digits + "}");
}
return mask += "[-]", mask += autoEscape(opts.suffix), opts.greedy = !1, null !== opts.min && (opts.min = opts.min.toString().replace(new RegExp(Inputmask.escapeRegex(opts.groupSeparator), "g"), ""),
"," === opts.radixPoint && (opts.min = opts.min.replace(opts.radixPoint, "."))),
null !== opts.max && (opts.max = opts.max.toString().replace(new RegExp(Inputmask.escapeRegex(opts.groupSeparator), "g"), ""),
"," === opts.radixPoint && (opts.max = opts.max.replace(opts.radixPoint, "."))),
mask;
},
placeholder: "",
greedy: !1,
digits: "*",
digitsOptional: !0,
radixPoint: ".",
positionCaretOnClick: "radixFocus",
groupSize: 3,
groupSeparator: "",
autoGroup: !1,
allowPlus: !0,
allowMinus: !0,
negationSymbol: {
front: "-",
back: ""
},
integerDigits: "+",
integerOptional: !0,
prefix: "",
suffix: "",
rightAlign: !0,
decimalProtect: !0,
min: null,
max: null,
step: 1,
insertMode: !0,
autoUnmask: !1,
unmaskAsNumber: !1,
postFormat: function(buffer, pos, opts) {
opts.numericInput === !0 && (buffer = buffer.reverse(), isFinite(pos) && (pos = buffer.join("").length - pos - 1));
var i, l;
pos = pos >= buffer.length ? buffer.length - 1 : pos < opts.prefix.length ? opts.prefix.length : pos;
var charAtPos = buffer[pos], cbuf = buffer.slice();
charAtPos === opts.groupSeparator && (cbuf.splice(pos--, 1), charAtPos = cbuf[pos]),
cbuf[pos] = "!";
var bufVal = cbuf.join(""), bufValOrigin = bufVal;
if (bufVal = bufVal.replace(new RegExp(Inputmask.escapeRegex(opts.suffix) + "$"), ""),
bufVal = bufVal.replace(new RegExp("^" + Inputmask.escapeRegex(opts.prefix)), ""),
bufVal.length > 0 && opts.autoGroup || bufVal.indexOf(opts.groupSeparator) !== -1) {
var escapedGroupSeparator = Inputmask.escapeRegex(opts.groupSeparator);
bufVal = bufVal.replace(new RegExp(escapedGroupSeparator, "g"), "");
var radixSplit = bufVal.split(charAtPos === opts.radixPoint ? "!" : opts.radixPoint);
if (bufVal = "" === opts.radixPoint ? bufVal : radixSplit[0], charAtPos !== opts.negationSymbol.front && (bufVal = bufVal.replace("!", "?")),
bufVal.length > opts.groupSize) for (var reg = new RegExp("([-+]?[\\d?]+)([\\d?]{" + opts.groupSize + "})"); reg.test(bufVal) && "" !== opts.groupSeparator; ) bufVal = bufVal.replace(reg, "$1" + opts.groupSeparator + "$2"),
bufVal = bufVal.replace(opts.groupSeparator + opts.groupSeparator, opts.groupSeparator);
bufVal = bufVal.replace("?", "!"), "" !== opts.radixPoint && radixSplit.length > 1 && (bufVal += (charAtPos === opts.radixPoint ? "!" : opts.radixPoint) + radixSplit[1]);
}
bufVal = opts.prefix + bufVal + opts.suffix;
var needsRefresh = bufValOrigin !== bufVal;
if (needsRefresh) for (buffer.length = bufVal.length, i = 0, l = bufVal.length; i < l; i++) buffer[i] = bufVal.charAt(i);
var newPos = $.inArray("!", bufVal);
return buffer[newPos] = charAtPos, newPos = opts.numericInput && isFinite(pos) ? buffer.join("").length - newPos - 1 : newPos,
opts.numericInput && (buffer = buffer.reverse(), $.inArray(opts.radixPoint, buffer) < newPos && buffer.join("").length - opts.suffix.length !== newPos && (newPos -= 1)),
{
pos: newPos,
refreshFromBuffer: needsRefresh,
buffer: buffer
};
},
onBeforeWrite: function(e, buffer, caretPos, opts) {
var rslt;
if (e && ("blur" === e.type || "checkval" === e.type || "keydown" === e.type)) {
var maskedValue = opts.numericInput ? buffer.slice().reverse().join("") : buffer.join(""), processValue = maskedValue.replace(opts.prefix, "");
processValue = processValue.replace(opts.suffix, ""), processValue = processValue.replace(new RegExp(Inputmask.escapeRegex(opts.groupSeparator), "g"), ""),
"," === opts.radixPoint && (processValue = processValue.replace(opts.radixPoint, "."));
var isNegative = processValue.match(new RegExp("[-" + Inputmask.escapeRegex(opts.negationSymbol.front) + "]", "g"));
if (isNegative = null !== isNegative && 1 === isNegative.length, processValue = processValue.replace(new RegExp("[-" + Inputmask.escapeRegex(opts.negationSymbol.front) + "]", "g"), ""),
processValue = processValue.replace(new RegExp(Inputmask.escapeRegex(opts.negationSymbol.back) + "$"), ""),
isNaN(opts.placeholder) && (processValue = processValue.replace(new RegExp(Inputmask.escapeRegex(opts.placeholder), "g"), "")),
processValue = processValue === opts.negationSymbol.front ? processValue + "0" : processValue,
"" !== processValue && isFinite(processValue)) {
var floatValue = parseFloat(processValue), signedFloatValue = isNegative ? floatValue * -1 : floatValue;
if (null !== opts.min && isFinite(opts.min) && signedFloatValue < parseFloat(opts.min) ? (floatValue = Math.abs(opts.min),
isNegative = opts.min < 0, maskedValue = void 0) : null !== opts.max && isFinite(opts.max) && signedFloatValue > parseFloat(opts.max) && (floatValue = Math.abs(opts.max),
isNegative = opts.max < 0, maskedValue = void 0), processValue = floatValue.toString().replace(".", opts.radixPoint).split(""),
isFinite(opts.digits)) {
var radixPosition = $.inArray(opts.radixPoint, processValue), rpb = $.inArray(opts.radixPoint, maskedValue);
radixPosition === -1 && (processValue.push(opts.radixPoint), radixPosition = processValue.length - 1);
for (var i = 1; i <= opts.digits; i++) opts.digitsOptional || void 0 !== processValue[radixPosition + i] && processValue[radixPosition + i] !== opts.placeholder.charAt(0) ? rpb !== -1 && void 0 !== maskedValue[rpb + i] && (processValue[radixPosition + i] = processValue[radixPosition + i] || maskedValue[rpb + i]) : processValue[radixPosition + i] = "0";
processValue[processValue.length - 1] === opts.radixPoint && delete processValue[processValue.length - 1];
}
if (floatValue.toString() !== processValue && floatValue.toString() + "." !== processValue || isNegative) return !isNegative || 0 === floatValue && "blur" === e.type || (processValue.unshift(opts.negationSymbol.front),
processValue.push(opts.negationSymbol.back)), processValue = (opts.prefix + processValue.join("")).split(""),
opts.numericInput && (processValue = processValue.reverse()), rslt = opts.postFormat(processValue, opts.numericInput ? caretPos : caretPos - 1, opts),
rslt.buffer && (rslt.refreshFromBuffer = rslt.buffer.join("") !== buffer.join("")),
rslt;
}
}
if (opts.autoGroup) return rslt = opts.postFormat(buffer, opts.numericInput ? caretPos : caretPos - 1, opts),
rslt.caret = caretPos <= opts.prefix.length ? rslt.pos : rslt.pos + 1, rslt;
},
regex: {
integerPart: function(opts) {
return new RegExp("[" + Inputmask.escapeRegex(opts.negationSymbol.front) + "+]?\\d+");
},
integerNPart: function(opts) {
return new RegExp("[\\d" + Inputmask.escapeRegex(opts.groupSeparator) + Inputmask.escapeRegex(opts.placeholder.charAt(0)) + "]+");
}
},
signHandler: function(chrs, maskset, pos, strict, opts) {
if (!strict && opts.allowMinus && "-" === chrs || opts.allowPlus && "+" === chrs) {
var matchRslt = maskset.buffer.join("").match(opts.regex.integerPart(opts));
if (matchRslt && matchRslt[0].length > 0) return maskset.buffer[matchRslt.index] === ("-" === chrs ? "+" : opts.negationSymbol.front) ? "-" === chrs ? "" !== opts.negationSymbol.back ? {
pos: matchRslt.index,
c: opts.negationSymbol.front,
remove: matchRslt.index,
caret: pos,
insert: {
pos: maskset.buffer.length - opts.suffix.length - 1,
c: opts.negationSymbol.back
}
} : {
pos: matchRslt.index,
c: opts.negationSymbol.front,
remove: matchRslt.index,
caret: pos
} : "" !== opts.negationSymbol.back ? {
pos: matchRslt.index,
c: "+",
remove: [ matchRslt.index, maskset.buffer.length - opts.suffix.length - 1 ],
caret: pos
} : {
pos: matchRslt.index,
c: "+",
remove: matchRslt.index,
caret: pos
} : maskset.buffer[matchRslt.index] === ("-" === chrs ? opts.negationSymbol.front : "+") ? "-" === chrs && "" !== opts.negationSymbol.back ? {
remove: [ matchRslt.index, maskset.buffer.length - opts.suffix.length - 1 ],
caret: pos - 1
} : {
remove: matchRslt.index,
caret: pos - 1
} : "-" === chrs ? "" !== opts.negationSymbol.back ? {
pos: matchRslt.index,
c: opts.negationSymbol.front,
caret: pos + 1,
insert: {
pos: maskset.buffer.length - opts.suffix.length,
c: opts.negationSymbol.back
}
} : {
pos: matchRslt.index,
c: opts.negationSymbol.front,
caret: pos + 1
} : {
pos: matchRslt.index,
c: chrs,
caret: pos + 1
};
}
return !1;
},
radixHandler: function(chrs, maskset, pos, strict, opts) {
if (!strict && opts.numericInput !== !0 && chrs === opts.radixPoint && void 0 !== opts.digits && (isNaN(opts.digits) || parseInt(opts.digits) > 0)) {
var radixPos = $.inArray(opts.radixPoint, maskset.buffer), integerValue = maskset.buffer.join("").match(opts.regex.integerPart(opts));
if (radixPos !== -1 && maskset.validPositions[radixPos]) return maskset.validPositions[radixPos - 1] ? {
caret: radixPos + 1
} : {
pos: integerValue.index,
c: integerValue[0],
caret: radixPos + 1
};
if (!integerValue || "0" === integerValue[0] && integerValue.index + 1 !== pos) return maskset.buffer[integerValue ? integerValue.index : pos] = "0",
{
pos: (integerValue ? integerValue.index : pos) + 1,
c: opts.radixPoint
};
}
return !1;
},
leadingZeroHandler: function(chrs, maskset, pos, strict, opts, isSelection) {
if (!strict) {
var buffer = maskset.buffer.slice("");
if (buffer.splice(0, opts.prefix.length), buffer.splice(buffer.length - opts.suffix.length, opts.suffix.length),
opts.numericInput === !0) {
var buffer = buffer.reverse(), bufferChar = buffer[0];
if ("0" === bufferChar && void 0 === maskset.validPositions[pos - 1]) return {
pos: pos,
remove: buffer.length - 1
};
} else {
pos -= opts.prefix.length;
var radixPosition = $.inArray(opts.radixPoint, buffer), matchRslt = buffer.slice(0, radixPosition !== -1 ? radixPosition : void 0).join("").match(opts.regex.integerNPart(opts));
if (matchRslt && (radixPosition === -1 || pos <= radixPosition)) {
var decimalPart = radixPosition === -1 ? 0 : parseInt(buffer.slice(radixPosition + 1).join(""));
if (0 === matchRslt[0].indexOf("" !== opts.placeholder ? opts.placeholder.charAt(0) : "0") && (matchRslt.index + 1 === pos || isSelection !== !0 && 0 === decimalPart)) return maskset.buffer.splice(matchRslt.index + opts.prefix.length, 1),
{
pos: matchRslt.index + opts.prefix.length,
remove: matchRslt.index + opts.prefix.length
};
if ("0" === chrs && pos <= matchRslt.index && matchRslt[0] !== opts.groupSeparator) return !1;
}
}
}
return !0;
},
definitions: {
"~": {
validator: function(chrs, maskset, pos, strict, opts, isSelection) {
var isValid = opts.signHandler(chrs, maskset, pos, strict, opts);
if (!isValid && (isValid = opts.radixHandler(chrs, maskset, pos, strict, opts),
!isValid && (isValid = strict ? new RegExp("[0-9" + Inputmask.escapeRegex(opts.groupSeparator) + "]").test(chrs) : new RegExp("[0-9]").test(chrs),
isValid === !0 && (isValid = opts.leadingZeroHandler(chrs, maskset, pos, strict, opts, isSelection),
isValid === !0)))) {
var radixPosition = $.inArray(opts.radixPoint, maskset.buffer);
isValid = radixPosition !== -1 && (opts.digitsOptional === !1 || maskset.validPositions[pos]) && opts.numericInput !== !0 && pos > radixPosition && !strict ? {
pos: pos,
remove: pos
} : {
pos: pos
};
}
return isValid;
},
cardinality: 1
},
"+": {
validator: function(chrs, maskset, pos, strict, opts) {
var isValid = opts.signHandler(chrs, maskset, pos, strict, opts);
return !isValid && (strict && opts.allowMinus && chrs === opts.negationSymbol.front || opts.allowMinus && "-" === chrs || opts.allowPlus && "+" === chrs) && (isValid = !(!strict && "-" === chrs) || ("" !== opts.negationSymbol.back ? {
pos: pos,
c: "-" === chrs ? opts.negationSymbol.front : "+",
caret: pos + 1,
insert: {
pos: maskset.buffer.length,
c: opts.negationSymbol.back
}
} : {
pos: pos,
c: "-" === chrs ? opts.negationSymbol.front : "+",
caret: pos + 1
})), isValid;
},
cardinality: 1,
placeholder: ""
},
"-": {
validator: function(chrs, maskset, pos, strict, opts) {
var isValid = opts.signHandler(chrs, maskset, pos, strict, opts);
return !isValid && strict && opts.allowMinus && chrs === opts.negationSymbol.back && (isValid = !0),
isValid;
},
cardinality: 1,
placeholder: ""
},
":": {
validator: function(chrs, maskset, pos, strict, opts) {
var isValid = opts.signHandler(chrs, maskset, pos, strict, opts);
if (!isValid) {
var radix = "[" + Inputmask.escapeRegex(opts.radixPoint) + "]";
isValid = new RegExp(radix).test(chrs), isValid && maskset.validPositions[pos] && maskset.validPositions[pos].match.placeholder === opts.radixPoint && (isValid = {
caret: pos + 1
});
}
return isValid ? {
c: opts.radixPoint
} : isValid;
},
cardinality: 1,
placeholder: function(opts) {
return opts.radixPoint;
}
}
},
onUnMask: function(maskedValue, unmaskedValue, opts) {
if ("" === unmaskedValue && opts.nullable === !0) return unmaskedValue;
var processValue = maskedValue.replace(opts.prefix, "");
return processValue = processValue.replace(opts.suffix, ""), processValue = processValue.replace(new RegExp(Inputmask.escapeRegex(opts.groupSeparator), "g"), ""),
opts.unmaskAsNumber ? ("" !== opts.radixPoint && processValue.indexOf(opts.radixPoint) !== -1 && (processValue = processValue.replace(Inputmask.escapeRegex.call(this, opts.radixPoint), ".")),
Number(processValue)) : processValue;
},
isComplete: function(buffer, opts) {
var maskedValue = buffer.join(""), bufClone = buffer.slice();
if (opts.postFormat(bufClone, 0, opts), bufClone.join("") !== maskedValue) return !1;
var processValue = maskedValue.replace(opts.prefix, "");
return processValue = processValue.replace(opts.suffix, ""), processValue = processValue.replace(new RegExp(Inputmask.escapeRegex(opts.groupSeparator), "g"), ""),
"," === opts.radixPoint && (processValue = processValue.replace(Inputmask.escapeRegex(opts.radixPoint), ".")),
isFinite(processValue);
},
onBeforeMask: function(initialValue, opts) {
if (opts.numericInput === !0 && (initialValue = initialValue.split("").reverse().join("")),
"" !== opts.radixPoint && isFinite(initialValue)) initialValue = initialValue.toString().replace(".", opts.radixPoint); else {
var kommaMatches = initialValue.match(/,/g), dotMatches = initialValue.match(/\./g);
dotMatches && kommaMatches ? dotMatches.length > kommaMatches.length ? (initialValue = initialValue.replace(/\./g, ""),
initialValue = initialValue.replace(",", opts.radixPoint)) : kommaMatches.length > dotMatches.length ? (initialValue = initialValue.replace(/,/g, ""),
initialValue = initialValue.replace(".", opts.radixPoint)) : initialValue = initialValue.indexOf(".") < initialValue.indexOf(",") ? initialValue.replace(/\./g, "") : initialValue = initialValue.replace(/,/g, "") : initialValue = initialValue.replace(new RegExp(Inputmask.escapeRegex(opts.groupSeparator), "g"), "");
}
if (0 === opts.digits && (initialValue.indexOf(".") !== -1 ? initialValue = initialValue.substring(0, initialValue.indexOf(".")) : initialValue.indexOf(",") !== -1 && (initialValue = initialValue.substring(0, initialValue.indexOf(",")))),
"" !== opts.radixPoint && isFinite(opts.digits) && initialValue.indexOf(opts.radixPoint) !== -1) {
var valueParts = initialValue.split(opts.radixPoint), decPart = valueParts[1].match(new RegExp("\\d*"))[0];
if (parseInt(opts.digits) < decPart.toString().length) {
var digitsFactor = Math.pow(10, parseInt(opts.digits));
initialValue = initialValue.replace(Inputmask.escapeRegex(opts.radixPoint), "."),
initialValue = Math.round(parseFloat(initialValue) * digitsFactor) / digitsFactor,
initialValue = initialValue.toString().replace(".", opts.radixPoint);
}
}
return opts.numericInput === !0 && (initialValue = initialValue.split("").reverse().join("")),
initialValue.toString();
},
canClearPosition: function(maskset, position, lvp, strict, opts) {
var positionInput = maskset.validPositions[position].input, canClear = positionInput !== opts.radixPoint || null !== maskset.validPositions[position].match.fn && opts.decimalProtect === !1 || isFinite(positionInput) || position === lvp || positionInput === opts.groupSeparator || positionInput === opts.negationSymbol.front || positionInput === opts.negationSymbol.back;
return canClear;
},
onKeyDown: function(e, buffer, caretPos, opts) {
var $input = $(this);
if (e.ctrlKey) switch (e.keyCode) {
case Inputmask.keyCode.UP:
$input.val(parseFloat(this.inputmask.unmaskedvalue()) + parseInt(opts.step)), $input.trigger("setvalue");
break;
case Inputmask.keyCode.DOWN:
$input.val(parseFloat(this.inputmask.unmaskedvalue()) - parseInt(opts.step)), $input.trigger("setvalue");
}
}
},
currency: {
prefix: "$ ",
groupSeparator: ",",
alias: "numeric",
placeholder: "0",
autoGroup: !0,
digits: 2,
digitsOptional: !1,
clearMaskOnLostFocus: !1
},
decimal: {
alias: "numeric"
},
integer: {
alias: "numeric",
digits: 0,
radixPoint: ""
},
percentage: {
alias: "numeric",
digits: 2,
radixPoint: ".",
placeholder: "0",
autoGroup: !1,
min: 0,
max: 100,
suffix: " %",
allowPlus: !1,
allowMinus: !1
}
}), Inputmask;
}(jQuery, Inputmask), function($, Inputmask) {
return Inputmask.extendAliases({
abstractphone: {
countrycode: "",
phoneCodes: [],
mask: function(opts) {
opts.definitions = {
"#": opts.definitions[9]
};
var masks = opts.phoneCodes.sort(function(a, b) {
var maska = (a.mask || a).replace(/#/g, "9").replace(/[\+\(\)#-]/g, ""), maskb = (b.mask || b).replace(/#/g, "9").replace(/[\+\(\)#-]/g, ""), maskas = (a.mask || a).split("#")[0], maskbs = (b.mask || b).split("#")[0];
return 0 === maskbs.indexOf(maskas) ? -1 : 0 === maskas.indexOf(maskbs) ? 1 : maska.localeCompare(maskb);
});
return masks;
},
keepStatic: !0,
onBeforeMask: function(value, opts) {
var processedValue = value.replace(/^0{1,2}/, "").replace(/[\s]/g, "");
return (processedValue.indexOf(opts.countrycode) > 1 || processedValue.indexOf(opts.countrycode) === -1) && (processedValue = "+" + opts.countrycode + processedValue),
processedValue;
},
onUnMask: function(maskedValue, unmaskedValue, opts) {
return unmaskedValue;
}
}
}), Inputmask;
}(jQuery, Inputmask), function($, Inputmask) {
return Inputmask.extendAliases({
Regex: {
mask: "r",
greedy: !1,
repeat: "*",
regex: null,
regexTokens: null,
tokenizer: /\[\^?]?(?:[^\\\]]+|\\[\S\s]?)*]?|\\(?:0(?:[0-3][0-7]{0,2}|[4-7][0-7]?)?|[1-9][0-9]*|x[0-9A-Fa-f]{2}|u[0-9A-Fa-f]{4}|c[A-Za-z]|[\S\s]?)|\((?:\?[:=!]?)?|(?:[?*+]|\{[0-9]+(?:,[0-9]*)?\})\??|[^.?*+^${[()|\\]+|./g,
quantifierFilter: /[0-9]+[^,]/,
isComplete: function(buffer, opts) {
return new RegExp(opts.regex).test(buffer.join(""));
},
definitions: {
r: {
validator: function(chrs, maskset, pos, strict, opts) {
function RegexToken(isGroup, isQuantifier) {
this.matches = [], this.isGroup = isGroup || !1, this.isQuantifier = isQuantifier || !1,
this.quantifier = {
min: 1,
max: 1
}, this.repeaterPart = void 0;
}
function analyseRegex() {
var match, m, currentToken = new RegexToken(), opengroups = [];
for (opts.regexTokens = []; match = opts.tokenizer.exec(opts.regex); ) switch (m = match[0],
m.charAt(0)) {
case "(":
opengroups.push(new RegexToken((!0)));
break;
case ")":
groupToken = opengroups.pop(), opengroups.length > 0 ? opengroups[opengroups.length - 1].matches.push(groupToken) : currentToken.matches.push(groupToken);
break;
case "{":
case "+":
case "*":
var quantifierToken = new RegexToken((!1), (!0));
m = m.replace(/[{}]/g, "");
var mq = m.split(","), mq0 = isNaN(mq[0]) ? mq[0] : parseInt(mq[0]), mq1 = 1 === mq.length ? mq0 : isNaN(mq[1]) ? mq[1] : parseInt(mq[1]);
if (quantifierToken.quantifier = {
min: mq0,
max: mq1
}, opengroups.length > 0) {
var matches = opengroups[opengroups.length - 1].matches;
match = matches.pop(), match.isGroup || (groupToken = new RegexToken((!0)), groupToken.matches.push(match),
match = groupToken), matches.push(match), matches.push(quantifierToken);
} else match = currentToken.matches.pop(), match.isGroup || (groupToken = new RegexToken((!0)),
groupToken.matches.push(match), match = groupToken), currentToken.matches.push(match),
currentToken.matches.push(quantifierToken);
break;
default:
opengroups.length > 0 ? opengroups[opengroups.length - 1].matches.push(m) : currentToken.matches.push(m);
}
currentToken.matches.length > 0 && opts.regexTokens.push(currentToken);
}
function validateRegexToken(token, fromGroup) {
var isvalid = !1;
fromGroup && (regexPart += "(", openGroupCount++);
for (var mndx = 0; mndx < token.matches.length; mndx++) {
var matchToken = token.matches[mndx];
if (matchToken.isGroup === !0) isvalid = validateRegexToken(matchToken, !0); else if (matchToken.isQuantifier === !0) {
var crrntndx = $.inArray(matchToken, token.matches), matchGroup = token.matches[crrntndx - 1], regexPartBak = regexPart;
if (isNaN(matchToken.quantifier.max)) {
for (;matchToken.repeaterPart && matchToken.repeaterPart !== regexPart && matchToken.repeaterPart.length > regexPart.length && !(isvalid = validateRegexToken(matchGroup, !0)); ) ;
isvalid = isvalid || validateRegexToken(matchGroup, !0), isvalid && (matchToken.repeaterPart = regexPart),
regexPart = regexPartBak + matchToken.quantifier.max;
} else {
for (var i = 0, qm = matchToken.quantifier.max - 1; i < qm && !(isvalid = validateRegexToken(matchGroup, !0)); i++) ;
regexPart = regexPartBak + "{" + matchToken.quantifier.min + "," + matchToken.quantifier.max + "}";
}
} else if (void 0 !== matchToken.matches) for (var k = 0; k < matchToken.length && !(isvalid = validateRegexToken(matchToken[k], fromGroup)); k++) ; else {
var testExp;
if ("[" == matchToken.charAt(0)) {
testExp = regexPart, testExp += matchToken;
for (var j = 0; j < openGroupCount; j++) testExp += ")";
var exp = new RegExp("^(" + testExp + ")$");
isvalid = exp.test(bufferStr);
} else for (var l = 0, tl = matchToken.length; l < tl; l++) if ("\\" !== matchToken.charAt(l)) {
testExp = regexPart, testExp += matchToken.substr(0, l + 1), testExp = testExp.replace(/\|$/, "");
for (var j = 0; j < openGroupCount; j++) testExp += ")";
var exp = new RegExp("^(" + testExp + ")$");
if (isvalid = exp.test(bufferStr)) break;
}
regexPart += matchToken;
}
if (isvalid) break;
}
return fromGroup && (regexPart += ")", openGroupCount--), isvalid;
}
var bufferStr, groupToken, cbuffer = maskset.buffer.slice(), regexPart = "", isValid = !1, openGroupCount = 0;
null === opts.regexTokens && analyseRegex(), cbuffer.splice(pos, 0, chrs), bufferStr = cbuffer.join("");
for (var i = 0; i < opts.regexTokens.length; i++) {
var regexToken = opts.regexTokens[i];
if (isValid = validateRegexToken(regexToken, regexToken.isGroup)) break;
}
return isValid;
},
cardinality: 1
}
}
}
}), Inputmask;
}(jQuery, Inputmask);
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?a(require("jquery")):a(jQuery)}(function(a){function b(a){return h.raw?a:encodeURIComponent(a)}function c(a){return h.raw?a:decodeURIComponent(a)}function d(a){return b(h.json?JSON.stringify(a):String(a))}function e(a){0===a.indexOf('"')&&(a=a.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\"));try{return a=decodeURIComponent(a.replace(g," ")),h.json?JSON.parse(a):a}catch(b){}}function f(b,c){var d=h.raw?b:e(b);return a.isFunction(c)?c(d):d}var g=/\+/g,h=a.cookie=function(e,g,i){if(void 0!==g&&!a.isFunction(g)){if(i=a.extend({},h.defaults,i),"number"==typeof i.expires){var j=i.expires,k=i.expires=new Date;k.setTime(+k+864e5*j)}return document.cookie=[b(e),"=",d(g),i.expires?"; expires="+i.expires.toUTCString():"",i.path?"; path="+i.path:"",i.domain?"; domain="+i.domain:"",i.secure?"; secure":""].join("")}for(var l=e?void 0:{},m=document.cookie?document.cookie.split("; "):[],n=0,o=m.length;o>n;n++){var p=m[n].split("="),q=c(p.shift()),r=p.join("=");if(e&&e===q){l=f(r,g);break}e||void 0===(r=f(r))||(l[q]=r)}return l};h.defaults={},a.removeCookie=function(b,c){return void 0===a.cookie(b)?!1:(a.cookie(b,"",a.extend({},c,{expires:-1})),!a.cookie(b))}});
(function(e){e.fn.hoverIntent=function(t,n,r){var i={interval:100,sensitivity:7,timeout:0};if(typeof t==="object"){i=e.extend(i,t)}else if(e.isFunction(n)){i=e.extend(i,{over:t,out:n,selector:r})}else{i=e.extend(i,{over:t,out:t,selector:n})}var s,o,u,a;var f=function(e){s=e.pageX;o=e.pageY};var l=function(t,n){n.hoverIntent_t=clearTimeout(n.hoverIntent_t);if(Math.abs(u-s)+Math.abs(a-o)<i.sensitivity){e(n).off("mousemove.hoverIntent",f);n.hoverIntent_s=1;return i.over.apply(n,[t])}else{u=s;a=o;n.hoverIntent_t=setTimeout(function(){l(t,n)},i.interval)}};var c=function(e,t){t.hoverIntent_t=clearTimeout(t.hoverIntent_t);t.hoverIntent_s=0;return i.out.apply(t,[e])};var h=function(t){var n=jQuery.extend({},t);var r=this;if(r.hoverIntent_t){r.hoverIntent_t=clearTimeout(r.hoverIntent_t)}if(t.type=="mouseenter"){u=n.pageX;a=n.pageY;e(r).on("mousemove.hoverIntent",f);if(r.hoverIntent_s!=1){r.hoverIntent_t=setTimeout(function(){l(n,r)},i.interval)}}else{e(r).off("mousemove.hoverIntent",f);if(r.hoverIntent_s==1){r.hoverIntent_t=setTimeout(function(){c(n,r)},i.timeout)}}};return this.on({"mouseenter.hoverIntent":h,"mouseleave.hoverIntent":h},i.selector)}})(jQuery);
this.createjs=this.createjs||{},function(){"use strict";var a=createjs.PreloadJS=createjs.PreloadJS||{};a.version="0.4.1",a.buildDate="Thu, 12 Dec 2013 23:33:38 GMT"}(),this.createjs=this.createjs||{},function(){"use strict";var a=function(a,b,c){this.initialize(a,b,c)},b=a.prototype;b.type=null,b.target=null,b.currentTarget=null,b.eventPhase=0,b.bubbles=!1,b.cancelable=!1,b.timeStamp=0,b.defaultPrevented=!1,b.propagationStopped=!1,b.immediatePropagationStopped=!1,b.removed=!1,b.initialize=function(a,b,c){this.type=a,this.bubbles=b,this.cancelable=c,this.timeStamp=(new Date).getTime()},b.preventDefault=function(){this.defaultPrevented=!0},b.stopPropagation=function(){this.propagationStopped=!0},b.stopImmediatePropagation=function(){this.immediatePropagationStopped=this.propagationStopped=!0},b.remove=function(){this.removed=!0},b.clone=function(){return new a(this.type,this.bubbles,this.cancelable)},b.toString=function(){return"[Event (type="+this.type+")]"},createjs.Event=a}(),this.createjs=this.createjs||{},function(){"use strict";var a=function(){},b=a.prototype;a.initialize=function(a){a.addEventListener=b.addEventListener,a.on=b.on,a.removeEventListener=a.off=b.removeEventListener,a.removeAllEventListeners=b.removeAllEventListeners,a.hasEventListener=b.hasEventListener,a.dispatchEvent=b.dispatchEvent,a._dispatchEvent=b._dispatchEvent,a.willTrigger=b.willTrigger},b._listeners=null,b._captureListeners=null,b.initialize=function(){},b.addEventListener=function(a,b,c){var d;d=c?this._captureListeners=this._captureListeners||{}:this._listeners=this._listeners||{};var e=d[a];return e&&this.removeEventListener(a,b,c),e=d[a],e?e.push(b):d[a]=[b],b},b.on=function(a,b,c,d,e,f){return b.handleEvent&&(c=c||b,b=b.handleEvent),c=c||this,this.addEventListener(a,function(a){b.call(c,a,e),d&&a.remove()},f)},b.removeEventListener=function(a,b,c){var d=c?this._captureListeners:this._listeners;if(d){var e=d[a];if(e)for(var f=0,g=e.length;g>f;f++)if(e[f]==b){1==g?delete d[a]:e.splice(f,1);break}}},b.off=b.removeEventListener,b.removeAllEventListeners=function(a){a?(this._listeners&&delete this._listeners[a],this._captureListeners&&delete this._captureListeners[a]):this._listeners=this._captureListeners=null},b.dispatchEvent=function(a,b){if("string"==typeof a){var c=this._listeners;if(!c||!c[a])return!1;a=new createjs.Event(a)}if(a.target=b||this,a.bubbles&&this.parent){for(var d=this,e=[d];d.parent;)e.push(d=d.parent);var f,g=e.length;for(f=g-1;f>=0&&!a.propagationStopped;f--)e[f]._dispatchEvent(a,1+(0==f));for(f=1;g>f&&!a.propagationStopped;f++)e[f]._dispatchEvent(a,3)}else this._dispatchEvent(a,2);return a.defaultPrevented},b.hasEventListener=function(a){var b=this._listeners,c=this._captureListeners;return!!(b&&b[a]||c&&c[a])},b.willTrigger=function(a){for(var b=this;b;){if(b.hasEventListener(a))return!0;b=b.parent}return!1},b.toString=function(){return"[EventDispatcher]"},b._dispatchEvent=function(a,b){var c,d=1==b?this._captureListeners:this._listeners;if(a&&d){var e=d[a.type];if(!e||!(c=e.length))return;a.currentTarget=this,a.eventPhase=b,a.removed=!1,e=e.slice();for(var f=0;c>f&&!a.immediatePropagationStopped;f++){var g=e[f];g.handleEvent?g.handleEvent(a):g(a),a.removed&&(this.off(a.type,g,1==b),a.removed=!1)}}},createjs.EventDispatcher=a}(),this.createjs=this.createjs||{},function(){"use strict";createjs.indexOf=function(a,b){for(var c=0,d=a.length;d>c;c++)if(b===a[c])return c;return-1}}(),this.createjs=this.createjs||{},function(){"use strict";createjs.proxy=function(a,b){var c=Array.prototype.slice.call(arguments,2);return function(){return a.apply(b,Array.prototype.slice.call(arguments,0).concat(c))}}}(),this.createjs=this.createjs||{},function(){"use strict";var a=function(){this.init()};a.prototype=new createjs.EventDispatcher;var b=a.prototype,c=a;c.FILE_PATTERN=/^(?:(\w+:)\/{2}(\w+(?:\.\w+)*\/?)|(.{0,2}\/{1}))?([/.]*?(?:[^?]+)?\/)?((?:[^/?]+)\.(\w+))(?:\?(\S+)?)?$/,c.PATH_PATTERN=/^(?:(\w+:)\/{2})|(.{0,2}\/{1})?([/.]*?(?:[^?]+)?\/?)?$/,b.loaded=!1,b.canceled=!1,b.progress=0,b._item=null,b.getItem=function(){return this._item},b.init=function(){},b.load=function(){},b.close=function(){},b._sendLoadStart=function(){this._isCanceled()||this.dispatchEvent("loadstart")},b._sendProgress=function(a){if(!this._isCanceled()){var b=null;"number"==typeof a?(this.progress=a,b=new createjs.Event("progress"),b.loaded=this.progress,b.total=1):(b=a,this.progress=a.loaded/a.total,(isNaN(this.progress)||1/0==this.progress)&&(this.progress=0)),b.progress=this.progress,this.hasEventListener("progress")&&this.dispatchEvent(b)}},b._sendComplete=function(){this._isCanceled()||this.dispatchEvent("complete")},b._sendError=function(a){!this._isCanceled()&&this.hasEventListener("error")&&(null==a&&(a=new createjs.Event("error")),this.dispatchEvent(a))},b._isCanceled=function(){return null==window.createjs||this.canceled?!0:!1},b._parseURI=function(a){return a?a.match(c.FILE_PATTERN):null},b._parsePath=function(a){return a?a.match(c.PATH_PATTERN):null},b._formatQueryString=function(a,b){if(null==a)throw new Error("You must specify data.");var c=[];for(var d in a)c.push(d+"="+escape(a[d]));return b&&(c=c.concat(b)),c.join("&")},b.buildPath=function(a,b){if(null==b)return a;var c=[],d=a.indexOf("?");if(-1!=d){var e=a.slice(d+1);c=c.concat(e.split("&"))}return-1!=d?a.slice(0,d)+"?"+this._formatQueryString(b,c):a+"?"+this._formatQueryString(b,c)},b._isCrossDomain=function(a){var b=document.createElement("a");b.href=a.src;var c=document.createElement("a");c.href=location.href;var d=""!=b.hostname&&(b.port!=c.port||b.protocol!=c.protocol||b.hostname!=c.hostname);return d},b._isLocal=function(a){var b=document.createElement("a");return b.href=a.src,""==b.hostname&&"file:"==b.protocol},b.toString=function(){return"[PreloadJS AbstractLoader]"},createjs.AbstractLoader=a}(),this.createjs=this.createjs||{},function(){"use strict";var a=function(a,b,c){this.init(a,b,c)},b=a.prototype=new createjs.AbstractLoader,c=a;c.loadTimeout=8e3,c.LOAD_TIMEOUT=0,c.BINARY="binary",c.CSS="css",c.IMAGE="image",c.JAVASCRIPT="javascript",c.JSON="json",c.JSONP="jsonp",c.MANIFEST="manifest",c.SOUND="sound",c.SVG="svg",c.TEXT="text",c.XML="xml",c.POST="POST",c.GET="GET",b._basePath=null,b._crossOrigin="",b.useXHR=!0,b.stopOnError=!1,b.maintainScriptOrder=!0,b.next=null,b._typeCallbacks=null,b._extensionCallbacks=null,b._loadStartWasDispatched=!1,b._maxConnections=1,b._currentlyLoadingScript=null,b._currentLoads=null,b._loadQueue=null,b._loadQueueBackup=null,b._loadItemsById=null,b._loadItemsBySrc=null,b._loadedResults=null,b._loadedRawResults=null,b._numItems=0,b._numItemsLoaded=0,b._scriptOrder=null,b._loadedScripts=null,b.init=function(a,b,c){this._numItems=this._numItemsLoaded=0,this._paused=!1,this._loadStartWasDispatched=!1,this._currentLoads=[],this._loadQueue=[],this._loadQueueBackup=[],this._scriptOrder=[],this._loadedScripts=[],this._loadItemsById={},this._loadItemsBySrc={},this._loadedResults={},this._loadedRawResults={},this._typeCallbacks={},this._extensionCallbacks={},this._basePath=b,this.setUseXHR(a),this._crossOrigin=c===!0?"Anonymous":c===!1||null==c?"":c},b.setUseXHR=function(a){return this.useXHR=0!=a&&null!=window.XMLHttpRequest,this.useXHR},b.removeAll=function(){this.remove()},b.remove=function(a){var b=null;if(!a||a instanceof Array){if(a)b=a;else if(arguments.length>0)return}else b=[a];var c=!1;if(b){for(;b.length;){var d=b.pop(),e=this.getResult(d);for(f=this._loadQueue.length-1;f>=0;f--)if(g=this._loadQueue[f].getItem(),g.id==d||g.src==d){this._loadQueue.splice(f,1)[0].cancel();break}for(f=this._loadQueueBackup.length-1;f>=0;f--)if(g=this._loadQueueBackup[f].getItem(),g.id==d||g.src==d){this._loadQueueBackup.splice(f,1)[0].cancel();break}if(e)delete this._loadItemsById[e.id],delete this._loadItemsBySrc[e.src],this._disposeItem(e);else for(var f=this._currentLoads.length-1;f>=0;f--){var g=this._currentLoads[f].getItem();if(g.id==d||g.src==d){this._currentLoads.splice(f,1)[0].cancel(),c=!0;break}}}c&&this._loadNext()}else{this.close();for(var h in this._loadItemsById)this._disposeItem(this._loadItemsById[h]);this.init(this.useXHR)}},b.reset=function(){this.close();for(var a in this._loadItemsById)this._disposeItem(this._loadItemsById[a]);for(var b=[],c=0,d=this._loadQueueBackup.length;d>c;c++)b.push(this._loadQueueBackup[c].getItem());this.loadManifest(b,!1)},c.isBinary=function(a){switch(a){case createjs.LoadQueue.IMAGE:case createjs.LoadQueue.BINARY:return!0;default:return!1}},c.isText=function(a){switch(a){case createjs.LoadQueue.TEXT:case createjs.LoadQueue.JSON:case createjs.LoadQueue.MANIFEST:case createjs.LoadQueue.XML:case createjs.LoadQueue.HTML:case createjs.LoadQueue.CSS:case createjs.LoadQueue.SVG:case createjs.LoadQueue.JAVASCRIPT:return!0;default:return!1}},b.installPlugin=function(a){if(null!=a&&null!=a.getPreloadHandlers){var b=a.getPreloadHandlers();if(b.scope=a,null!=b.types)for(var c=0,d=b.types.length;d>c;c++)this._typeCallbacks[b.types[c]]=b;if(null!=b.extensions)for(c=0,d=b.extensions.length;d>c;c++)this._extensionCallbacks[b.extensions[c]]=b}},b.setMaxConnections=function(a){this._maxConnections=a,!this._paused&&this._loadQueue.length>0&&this._loadNext()},b.loadFile=function(a,b,c){if(null==a){var d=new createjs.Event("error");return d.text="PRELOAD_NO_FILE",this._sendError(d),void 0}this._addItem(a,null,c),b!==!1?this.setPaused(!1):this.setPaused(!0)},b.loadManifest=function(a,b,d){var e=null,f=null;if(a instanceof Array){if(0==a.length){var g=new createjs.Event("error");return g.text="PRELOAD_MANIFEST_EMPTY",this._sendError(g),void 0}e=a}else if("string"==typeof a)e=[{src:a,type:c.MANIFEST}];else{if("object"!=typeof a){var g=new createjs.Event("error");return g.text="PRELOAD_MANIFEST_NULL",this._sendError(g),void 0}if(void 0!==a.src){if(null==a.type)a.type=c.MANIFEST;else if(a.type!=c.MANIFEST){var g=new createjs.Event("error");g.text="PRELOAD_MANIFEST_ERROR",this._sendError(g)}e=[a]}else void 0!==a.manifest&&(e=a.manifest,f=a.path)}for(var h=0,i=e.length;i>h;h++)this._addItem(e[h],f,d);b!==!1?this.setPaused(!1):this.setPaused(!0)},b.load=function(){this.setPaused(!1)},b.getItem=function(a){return this._loadItemsById[a]||this._loadItemsBySrc[a]},b.getResult=function(a,b){var c=this._loadItemsById[a]||this._loadItemsBySrc[a];if(null==c)return null;var d=c.id;return b&&this._loadedRawResults[d]?this._loadedRawResults[d]:this._loadedResults[d]},b.setPaused=function(a){this._paused=a,this._paused||this._loadNext()},b.close=function(){for(;this._currentLoads.length;)this._currentLoads.pop().cancel();this._scriptOrder.length=0,this._loadedScripts.length=0,this.loadStartWasDispatched=!1},b._addItem=function(a,b,c){var d=this._createLoadItem(a,b,c);if(null!=d){var e=this._createLoader(d);null!=e&&(this._loadQueue.push(e),this._loadQueueBackup.push(e),this._numItems++,this._updateProgress(),this.maintainScriptOrder&&d.type==createjs.LoadQueue.JAVASCRIPT&&e instanceof createjs.XHRLoader&&(this._scriptOrder.push(d),this._loadedScripts.push(null)))}},b._createLoadItem=function(a,b,c){var d=null;switch(typeof a){case"string":d={src:a};break;case"object":d=window.HTMLAudioElement&&a instanceof window.HTMLAudioElement?{tag:a,src:d.tag.src,type:createjs.LoadQueue.SOUND}:a;break;default:return null}var e=this._parseURI(d.src);null!=e&&(d.ext=e[6]),null==d.type&&(d.type=this._getTypeByExtension(d.ext));var f="",g=c||this._basePath,h=d.src;if(e&&null==e[1]&&null==e[3])if(b){f=b;var i=this._parsePath(b);h=b+h,null!=g&&i&&null==i[1]&&null==i[2]&&(f=g+f)}else null!=g&&(f=g);if(d.src=f+d.src,d.path=f,(d.type==createjs.LoadQueue.JSON||d.type==createjs.LoadQueue.MANIFEST)&&(d._loadAsJSONP=null!=d.callback),d.type==createjs.LoadQueue.JSONP&&null==d.callback)throw new Error("callback is required for loading JSONP requests.");(void 0===d.tag||null===d.tag)&&(d.tag=this._createTag(d)),(void 0===d.id||null===d.id||""===d.id)&&(d.id=h);var j=this._typeCallbacks[d.type]||this._extensionCallbacks[d.ext];if(j){var k=j.callback.call(j.scope,d.src,d.type,d.id,d.data,f,this);if(k===!1)return null;k===!0||(null!=k.src&&(d.src=k.src),null!=k.id&&(d.id=k.id),null!=k.tag&&(d.tag=k.tag),null!=k.completeHandler&&(d.completeHandler=k.completeHandler),k.type&&(d.type=k.type),e=this._parseURI(d.src),null!=e&&null!=e[6]&&(d.ext=e[6].toLowerCase()))}return this._loadItemsById[d.id]=d,this._loadItemsBySrc[d.src]=d,d},b._createLoader=function(a){var b=this.useXHR;switch(a.type){case createjs.LoadQueue.JSON:case createjs.LoadQueue.MANIFEST:b=!a._loadAsJSONP;break;case createjs.LoadQueue.XML:case createjs.LoadQueue.TEXT:b=!0;break;case createjs.LoadQueue.SOUND:case createjs.LoadQueue.JSONP:b=!1;break;case null:return null}return b?new createjs.XHRLoader(a,this._crossOrigin):new createjs.TagLoader(a)},b._loadNext=function(){if(!this._paused){this._loadStartWasDispatched||(this._sendLoadStart(),this._loadStartWasDispatched=!0),this._numItems==this._numItemsLoaded?(this.loaded=!0,this._sendComplete(),this.next&&this.next.load&&this.next.load()):this.loaded=!1;for(var a=0;a<this._loadQueue.length&&!(this._currentLoads.length>=this._maxConnections);a++){var b=this._loadQueue[a];if(this.maintainScriptOrder&&b instanceof createjs.TagLoader&&b.getItem().type==createjs.LoadQueue.JAVASCRIPT){if(this._currentlyLoadingScript)continue;this._currentlyLoadingScript=!0}this._loadQueue.splice(a,1),a--,this._loadItem(b)}}},b._loadItem=function(a){a.on("progress",this._handleProgress,this),a.on("complete",this._handleFileComplete,this),a.on("error",this._handleFileError,this),this._currentLoads.push(a),this._sendFileStart(a.getItem()),a.load()},b._handleFileError=function(a){var b=a.target;this._numItemsLoaded++,this._updateProgress();var c=new createjs.Event("error");c.text="FILE_LOAD_ERROR",c.item=b.getItem(),this._sendError(c),this.stopOnError||(this._removeLoadItem(b),this._loadNext())},b._handleFileComplete=function(a){var b=a.target,c=b.getItem();if(this._loadedResults[c.id]=b.getResult(),b instanceof createjs.XHRLoader&&(this._loadedRawResults[c.id]=b.getResult(!0)),this._removeLoadItem(b),this.maintainScriptOrder&&c.type==createjs.LoadQueue.JAVASCRIPT){if(!(b instanceof createjs.TagLoader))return this._loadedScripts[createjs.indexOf(this._scriptOrder,c)]=c,this._checkScriptLoadOrder(b),void 0;this._currentlyLoadingScript=!1}if(delete c._loadAsJSONP,c.type==createjs.LoadQueue.MANIFEST){var d=b.getResult();null!=d&&void 0!==d.manifest&&this.loadManifest(d,!0)}this._processFinishedLoad(c,b)},b._processFinishedLoad=function(a,b){this._numItemsLoaded++,this._updateProgress(),this._sendFileComplete(a,b),this._loadNext()},b._checkScriptLoadOrder=function(){for(var a=this._loadedScripts.length,b=0;a>b;b++){var c=this._loadedScripts[b];if(null===c)break;if(c!==!0){var d=this._loadedResults[c.id];(document.body||document.getElementsByTagName("body")[0]).appendChild(d),this._processFinishedLoad(c),this._loadedScripts[b]=!0}}},b._removeLoadItem=function(a){for(var b=this._currentLoads.length,c=0;b>c;c++)if(this._currentLoads[c]==a){this._currentLoads.splice(c,1);break}},b._handleProgress=function(a){var b=a.target;this._sendFileProgress(b.getItem(),b.progress),this._updateProgress()},b._updateProgress=function(){var a=this._numItemsLoaded/this._numItems,b=this._numItems-this._numItemsLoaded;if(b>0){for(var c=0,d=0,e=this._currentLoads.length;e>d;d++)c+=this._currentLoads[d].progress;a+=c/b*(b/this._numItems)}this._sendProgress(a)},b._disposeItem=function(a){delete this._loadedResults[a.id],delete this._loadedRawResults[a.id],delete this._loadItemsById[a.id],delete this._loadItemsBySrc[a.src]},b._createTag=function(a){var b=null;switch(a.type){case createjs.LoadQueue.IMAGE:return b=document.createElement("img"),""==this._crossOrigin||this._isLocal(a)||(b.crossOrigin=this._crossOrigin),b;case createjs.LoadQueue.SOUND:return b=document.createElement("audio"),b.autoplay=!1,b;case createjs.LoadQueue.JSON:case createjs.LoadQueue.JSONP:case createjs.LoadQueue.JAVASCRIPT:case createjs.LoadQueue.MANIFEST:return b=document.createElement("script"),b.type="text/javascript",b;case createjs.LoadQueue.CSS:return b=this.useXHR?document.createElement("style"):document.createElement("link"),b.rel="stylesheet",b.type="text/css",b;case createjs.LoadQueue.SVG:return this.useXHR?b=document.createElement("svg"):(b=document.createElement("object"),b.type="image/svg+xml"),b}return null},b._getTypeByExtension=function(a){if(null==a)return createjs.LoadQueue.TEXT;switch(a.toLowerCase()){case"jpeg":case"jpg":case"gif":case"png":case"webp":case"bmp":return createjs.LoadQueue.IMAGE;case"ogg":case"mp3":case"wav":return createjs.LoadQueue.SOUND;case"json":return createjs.LoadQueue.JSON;case"xml":return createjs.LoadQueue.XML;case"css":return createjs.LoadQueue.CSS;case"js":return createjs.LoadQueue.JAVASCRIPT;case"svg":return createjs.LoadQueue.SVG;default:return createjs.LoadQueue.TEXT}},b._sendFileProgress=function(a,b){if(this._isCanceled())return this._cleanUp(),void 0;if(this.hasEventListener("fileprogress")){var c=new createjs.Event("fileprogress");c.progress=b,c.loaded=b,c.total=1,c.item=a,this.dispatchEvent(c)}},b._sendFileComplete=function(a,b){if(!this._isCanceled()){var c=new createjs.Event("fileload");c.loader=b,c.item=a,c.result=this._loadedResults[a.id],c.rawResult=this._loadedRawResults[a.id],a.completeHandler&&a.completeHandler(c),this.hasEventListener("fileload")&&this.dispatchEvent(c)}},b._sendFileStart=function(a){var b=new createjs.Event("filestart");b.item=a,this.hasEventListener("filestart")&&this.dispatchEvent(b)},b.toString=function(){return"[PreloadJS LoadQueue]"},createjs.LoadQueue=a;var d=function(){};d.init=function(){var a=navigator.userAgent;d.isFirefox=a.indexOf("Firefox")>-1,d.isOpera=null!=window.opera,d.isChrome=a.indexOf("Chrome")>-1,d.isIOS=a.indexOf("iPod")>-1||a.indexOf("iPhone")>-1||a.indexOf("iPad")>-1},d.init(),createjs.LoadQueue.BrowserDetect=d}(),this.createjs=this.createjs||{},function(){"use strict";var a=function(a){this.init(a)},b=a.prototype=new createjs.AbstractLoader;b._loadTimeout=null,b._tagCompleteProxy=null,b._isAudio=!1,b._tag=null,b._jsonResult=null,b.init=function(a){this._item=a,this._tag=a.tag,this._isAudio=window.HTMLAudioElement&&a.tag instanceof window.HTMLAudioElement,this._tagCompleteProxy=createjs.proxy(this._handleLoad,this)},b.getResult=function(){return this._item.type==createjs.LoadQueue.JSONP||this._item.type==createjs.LoadQueue.MANIFEST?this._jsonResult:this._tag},b.cancel=function(){this.canceled=!0,this._clean()},b.load=function(){var a=this._item,b=this._tag;clearTimeout(this._loadTimeout);var c=createjs.LoadQueue.LOAD_TIMEOUT;0==c&&(c=createjs.LoadQueue.loadTimeout),this._loadTimeout=setTimeout(createjs.proxy(this._handleTimeout,this),c),this._isAudio&&(b.src=null,b.preload="auto"),b.onerror=createjs.proxy(this._handleError,this),this._isAudio?(b.onstalled=createjs.proxy(this._handleStalled,this),b.addEventListener("canplaythrough",this._tagCompleteProxy,!1)):(b.onload=createjs.proxy(this._handleLoad,this),b.onreadystatechange=createjs.proxy(this._handleReadyStateChange,this));var d=this.buildPath(a.src,a.values);switch(a.type){case createjs.LoadQueue.CSS:b.href=d;break;case createjs.LoadQueue.SVG:b.data=d;break;default:b.src=d}if(a.type==createjs.LoadQueue.JSONP||a.type==createjs.LoadQueue.JSON||a.type==createjs.LoadQueue.MANIFEST){if(null==a.callback)throw new Error("callback is required for loading JSONP requests.");if(null!=window[a.callback])throw new Error('JSONP callback "'+a.callback+'" already exists on window. You need to specify a different callback. Or re-name the current one.');window[a.callback]=createjs.proxy(this._handleJSONPLoad,this)}(a.type==createjs.LoadQueue.SVG||a.type==createjs.LoadQueue.JSONP||a.type==createjs.LoadQueue.JSON||a.type==createjs.LoadQueue.MANIFEST||a.type==createjs.LoadQueue.JAVASCRIPT||a.type==createjs.LoadQueue.CSS)&&(this._startTagVisibility=b.style.visibility,b.style.visibility="hidden",(document.body||document.getElementsByTagName("body")[0]).appendChild(b)),null!=b.load&&b.load()},b._handleJSONPLoad=function(a){this._jsonResult=a},b._handleTimeout=function(){this._clean();var a=new createjs.Event("error");a.text="PRELOAD_TIMEOUT",this._sendError(a)},b._handleStalled=function(){},b._handleError=function(){this._clean();var a=new createjs.Event("error");this._sendError(a)},b._handleReadyStateChange=function(){clearTimeout(this._loadTimeout);var a=this.getItem().tag;("loaded"==a.readyState||"complete"==a.readyState)&&this._handleLoad()},b._handleLoad=function(){if(!this._isCanceled()){var a=this.getItem(),b=a.tag;if(!(this.loaded||this._isAudio&&4!==b.readyState)){switch(this.loaded=!0,a.type){case createjs.LoadQueue.SVG:case createjs.LoadQueue.JSON:case createjs.LoadQueue.JSONP:case createjs.LoadQueue.MANIFEST:case createjs.LoadQueue.CSS:b.style.visibility=this._startTagVisibility,(document.body||document.getElementsByTagName("body")[0]).removeChild(b)}this._clean(),this._sendComplete()}}},b._clean=function(){clearTimeout(this._loadTimeout);var a=this.getItem(),b=a.tag;null!=b&&(b.onload=null,b.removeEventListener&&b.removeEventListener("canplaythrough",this._tagCompleteProxy,!1),b.onstalled=null,b.onprogress=null,b.onerror=null,null!=b.parentNode&&a.type==createjs.LoadQueue.SVG&&a.type==createjs.LoadQueue.JSON&&a.type==createjs.LoadQueue.MANIFEST&&a.type==createjs.LoadQueue.CSS&&a.type==createjs.LoadQueue.JSONP&&b.parentNode.removeChild(b));var a=this.getItem();(a.type==createjs.LoadQueue.JSONP||a.type==createjs.LoadQueue.MANIFEST)&&(window[a.callback]=null)},b.toString=function(){return"[PreloadJS TagLoader]"},createjs.TagLoader=a}(),this.createjs=this.createjs||{},function(){"use strict";var a=function(a,b){this.init(a,b)},b=a.prototype=new createjs.AbstractLoader;b._request=null,b._loadTimeout=null,b._xhrLevel=1,b._response=null,b._rawResponse=null,b._crossOrigin="",b.init=function(a,b){this._item=a,this._crossOrigin=b,!this._createXHR(a)},b.getResult=function(a){return a&&this._rawResponse?this._rawResponse:this._response},b.cancel=function(){this.canceled=!0,this._clean(),this._request.abort()},b.load=function(){if(null==this._request)return this._handleError(),void 0;if(this._request.onloadstart=createjs.proxy(this._handleLoadStart,this),this._request.onprogress=createjs.proxy(this._handleProgress,this),this._request.onabort=createjs.proxy(this._handleAbort,this),this._request.onerror=createjs.proxy(this._handleError,this),this._request.ontimeout=createjs.proxy(this._handleTimeout,this),1==this._xhrLevel){var a=createjs.LoadQueue.LOAD_TIMEOUT;if(0==a)a=createjs.LoadQueue.loadTimeout;else try{console.warn("LoadQueue.LOAD_TIMEOUT has been deprecated in favor of LoadQueue.loadTimeout")}catch(b){}this._loadTimeout=setTimeout(createjs.proxy(this._handleTimeout,this),a)}this._request.onload=createjs.proxy(this._handleLoad,this),this._request.onreadystatechange=createjs.proxy(this._handleReadyStateChange,this);try{this._item.values&&this._item.method!=createjs.LoadQueue.GET?this._item.method==createjs.LoadQueue.POST&&this._request.send(this._formatQueryString(this._item.values)):this._request.send()}catch(c){var d=new createjs.Event("error");d.error=c,this._sendError(d)}},b.getAllResponseHeaders=function(){return this._request.getAllResponseHeaders instanceof Function?this._request.getAllResponseHeaders():null},b.getResponseHeader=function(a){return this._request.getResponseHeader instanceof Function?this._request.getResponseHeader(a):null},b._handleProgress=function(a){if(a&&!(a.loaded>0&&0==a.total)){var b=new createjs.Event("progress");b.loaded=a.loaded,b.total=a.total,this._sendProgress(b)}},b._handleLoadStart=function(){clearTimeout(this._loadTimeout),this._sendLoadStart()},b._handleAbort=function(){this._clean();var a=new createjs.Event("error");a.text="XHR_ABORTED",this._sendError(a)},b._handleError=function(){this._clean();var a=new createjs.Event("error");this._sendError(a)},b._handleReadyStateChange=function(){4==this._request.readyState&&this._handleLoad()},b._handleLoad=function(){if(!this.loaded){if(this.loaded=!0,!this._checkError())return this._handleError(),void 0;this._response=this._getResponse(),this._clean();var a=this._generateTag();a&&this._sendComplete()}},b._handleTimeout=function(a){this._clean();var b=new createjs.Event("error");b.text="PRELOAD_TIMEOUT",this._sendError(a)},b._checkError=function(){var a=parseInt(this._request.status);switch(a){case 404:case 0:return!1}return!0},b._getResponse=function(){if(null!=this._response)return this._response;if(null!=this._request.response)return this._request.response;try{if(null!=this._request.responseText)return this._request.responseText}catch(a){}try{if(null!=this._request.responseXML)return this._request.responseXML}catch(a){}return null},b._createXHR=function(a){var b=this._isCrossDomain(a),c=null;if(b&&window.XDomainRequest)c=new XDomainRequest;else if(window.XMLHttpRequest)c=new XMLHttpRequest;else try{c=new ActiveXObject("Msxml2.XMLHTTP.6.0")}catch(d){try{c=new ActiveXObject("Msxml2.XMLHTTP.3.0")}catch(d){try{c=new ActiveXObject("Msxml2.XMLHTTP")}catch(d){return!1}}}createjs.LoadQueue.isText(a.type)&&c.overrideMimeType&&c.overrideMimeType("text/plain; charset=utf-8"),this._xhrLevel="string"==typeof c.responseType?2:1;var e=null;return e=a.method==createjs.LoadQueue.GET?this.buildPath(a.src,a.values):a.src,c.open(a.method||createjs.LoadQueue.GET,e,!0),b&&c instanceof XMLHttpRequest&&1==this._xhrLevel&&c.setRequestHeader("Origin",location.origin),a.values&&a.method==createjs.LoadQueue.POST&&c.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),createjs.LoadQueue.isBinary(a.type)&&(c.responseType="arraybuffer"),this._request=c,!0},b._clean=function(){clearTimeout(this._loadTimeout);var a=this._request;a.onloadstart=null,a.onprogress=null,a.onabort=null,a.onerror=null,a.onload=null,a.ontimeout=null,a.onloadend=null,a.onreadystatechange=null},b._generateTag=function(){var a=this._item.type,b=this._item.tag;switch(a){case createjs.LoadQueue.IMAGE:return b.onload=createjs.proxy(this._handleTagReady,this),""!=this._crossOrigin&&(b.crossOrigin="Anonymous"),b.src=this.buildPath(this._item.src,this._item.values),this._rawResponse=this._response,this._response=b,!1;case createjs.LoadQueue.JAVASCRIPT:return b=document.createElement("script"),b.text=this._response,this._rawResponse=this._response,this._response=b,!0;case createjs.LoadQueue.CSS:var c=document.getElementsByTagName("head")[0];if(c.appendChild(b),b.styleSheet)b.styleSheet.cssText=this._response;else{var d=document.createTextNode(this._response);b.appendChild(d)}return this._rawResponse=this._response,this._response=b,!0;case createjs.LoadQueue.XML:var e=this._parseXML(this._response,"text/xml");return this._rawResponse=this._response,this._response=e,!0;case createjs.LoadQueue.SVG:var e=this._parseXML(this._response,"image/svg+xml");return this._rawResponse=this._response,null!=e.documentElement?(b.appendChild(e.documentElement),this._response=b):this._response=e,!0;case createjs.LoadQueue.JSON:case createjs.LoadQueue.MANIFEST:var f={};try{f=JSON.parse(this._response)}catch(g){f=g}return this._rawResponse=this._response,this._response=f,!0}return!0},b._parseXML=function(a,b){var c=null;try{if(window.DOMParser){var d=new DOMParser;c=d.parseFromString(a,b)}else c=new ActiveXObject("Microsoft.XMLDOM"),c.async=!1,c.loadXML(a)}catch(e){}return c},b._handleTagReady=function(){this._sendComplete()},b.toString=function(){return"[PreloadJS XHRLoader]"},createjs.XHRLoader=a}(),"object"!=typeof JSON&&(JSON={}),function(){"use strict";function f(a){return 10>a?"0"+a:a}function quote(a){return escapable.lastIndex=0,escapable.test(a)?'"'+a.replace(escapable,function(a){var b=meta[a];return"string"==typeof b?b:"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+a+'"'}function str(a,b){var c,d,e,f,g,h=gap,i=b[a];switch(i&&"object"==typeof i&&"function"==typeof i.toJSON&&(i=i.toJSON(a)),"function"==typeof rep&&(i=rep.call(b,a,i)),typeof i){case"string":return quote(i);case"number":return isFinite(i)?String(i):"null";case"boolean":case"null":return String(i);case"object":if(!i)return"null";if(gap+=indent,g=[],"[object Array]"===Object.prototype.toString.apply(i)){for(f=i.length,c=0;f>c;c+=1)g[c]=str(c,i)||"null";return e=0===g.length?"[]":gap?"[\n"+gap+g.join(",\n"+gap)+"\n"+h+"]":"["+g.join(",")+"]",gap=h,e}if(rep&&"object"==typeof rep)for(f=rep.length,c=0;f>c;c+=1)"string"==typeof rep[c]&&(d=rep[c],e=str(d,i),e&&g.push(quote(d)+(gap?": ":":")+e));else for(d in i)Object.prototype.hasOwnProperty.call(i,d)&&(e=str(d,i),e&&g.push(quote(d)+(gap?": ":":")+e));return e=0===g.length?"{}":gap?"{\n"+gap+g.join(",\n"+gap)+"\n"+h+"}":"{"+g.join(",")+"}",gap=h,e}}"function"!=typeof Date.prototype.toJSON&&(Date.prototype.toJSON=function(){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z":null},String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(){return this.valueOf()});var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,escapable=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,gap,indent,meta={"\b":"\\b","	":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},rep;"function"!=typeof JSON.stringify&&(JSON.stringify=function(a,b,c){var d;if(gap="",indent="","number"==typeof c)for(d=0;c>d;d+=1)indent+=" ";else"string"==typeof c&&(indent=c);if(rep=b,b&&"function"!=typeof b&&("object"!=typeof b||"number"!=typeof b.length))throw new Error("JSON.stringify");return str("",{"":a})}),"function"!=typeof JSON.parse&&(JSON.parse=function(text,reviver){function walk(a,b){var c,d,e=a[b];if(e&&"object"==typeof e)for(c in e)Object.prototype.hasOwnProperty.call(e,c)&&(d=walk(e,c),void 0!==d?e[c]=d:delete e[c]);return reviver.call(a,b,e)}var j;if(text=String(text),cx.lastIndex=0,cx.test(text)&&(text=text.replace(cx,function(a){return"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)})),/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,"")))return j=eval("("+text+")"),"function"==typeof reviver?walk({"":j},""):j;throw new SyntaxError("JSON.parse")})}();
(function ( $ ) {
$.fn.onImagesLoaded = function(callback) {
if (this.length === 0) {
return this;
}
if (typeof callback !== 'function') $.error('onImagesLoaded needs a callback');
var $els = $(this);
var elementsToLoad = $els.length;
var i = 0;
var _img;
$els.each(function() {
_img = new Image();
_img.onload = function() {
i++;
if (i===elementsToLoad) callback();
};
_img.src = this.src;
this.onreadystatechange = function() {
if (this.readyState==='complete') {
i++;
if (i===elementsToLoad) callback();
}
};
});
return this;
};
}( jQuery ));
(function(w){var k=function(b,c){typeof c=="undefined"&&(c={});this.init(b,c)},a=k.prototype,o,p=["canvas","vml"],f=["oval","spiral","square","rect","roundRect"],x=/^\#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/,v=navigator.appVersion.indexOf("MSIE")!==-1&&parseFloat(navigator.appVersion.split("MSIE")[1])===8?true:false,y=!!document.createElement("canvas").getContext,q=true,n=function(b,c,a){var b=document.createElement(b),d;for(d in a)b[d]=a[d];typeof c!=="undefined"&&c.appendChild(b);return b},m=function(b,
c){for(var a in c)b.style[a]=c[a];return b},t=function(b,c){for(var a in c)b.setAttribute(a,c[a]);return b},u=function(b,c,a,d){b.save();b.translate(c,a);b.rotate(d);b.translate(-c,-a);b.beginPath()};a.init=function(b,c){if(typeof c.safeVML==="boolean")q=c.safeVML;try{this.mum=document.getElementById(b)!==void 0?document.getElementById(b):document.body}catch(a){this.mum=document.body}c.id=typeof c.id!=="undefined"?c.id:"canvasLoader";this.cont=n("div",this.mum,{id:c.id});if(y)o=p[0],this.can=n("canvas",
this.cont),this.con=this.can.getContext("2d"),this.cCan=m(n("canvas",this.cont),{display:"none"}),this.cCon=this.cCan.getContext("2d");else{o=p[1];if(typeof k.vmlSheet==="undefined"){document.getElementsByTagName("head")[0].appendChild(n("style"));k.vmlSheet=document.styleSheets[document.styleSheets.length-1];var d=["group","oval","roundrect","fill"],e;
for(e in d){
if( d.hasOwnProperty(e) ){
k.vmlSheet.addRule(d[e],"behavior:url(#default#VML); position:absolute;");
}
}
}this.vml=n("group",this.cont)}this.setColor(this.color);this.draw();
m(this.cont,{display:"none"})};a.cont={};a.can={};a.con={};a.cCan={};a.cCon={};a.timer={};a.activeId=0;a.diameter=40;a.setDiameter=function(b){this.diameter=Math.round(Math.abs(b));this.redraw()};a.getDiameter=function(){return this.diameter};a.cRGB={};a.color="#000000";a.setColor=function(b){this.color=x.test(b)?b:"#000000";this.cRGB=this.getRGB(this.color);this.redraw()};a.getColor=function(){return this.color};a.shape=f[0];a.setShape=function(b){for(var c in f)if(b===f[c]){this.shape=b;this.redraw();
break}};a.getShape=function(){return this.shape};a.density=40;a.setDensity=function(b){this.density=q&&o===p[1]?Math.round(Math.abs(b))<=40?Math.round(Math.abs(b)):40:Math.round(Math.abs(b));if(this.density>360)this.density=360;this.activeId=0;this.redraw()};a.getDensity=function(){return this.density};a.range=1.3;a.setRange=function(b){this.range=Math.abs(b);this.redraw()};a.getRange=function(){return this.range};a.speed=2;a.setSpeed=function(b){this.speed=Math.round(Math.abs(b))};a.getSpeed=function(){return this.speed};
a.fps=24;a.setFPS=function(b){this.fps=Math.round(Math.abs(b));this.reset()};a.getFPS=function(){return this.fps};a.getRGB=function(b){b=b.charAt(0)==="#"?b.substring(1,7):b;return{r:parseInt(b.substring(0,2),16),g:parseInt(b.substring(2,4),16),b:parseInt(b.substring(4,6),16)}};a.draw=function(){var b=0,c,a,d,e,h,k,j,r=this.density,s=Math.round(r*this.range),l,i,q=0;i=this.cCon;var g=this.diameter;if(o===p[0]){i.clearRect(0,0,1E3,1E3);t(this.can,{width:g,height:g});for(t(this.cCan,{width:g,height:g});b<
r;){l=b<=s?1-1/s*b:l=0;k=270-360/r*b;j=k/180*Math.PI;i.fillStyle="rgba("+this.cRGB.r+","+this.cRGB.g+","+this.cRGB.b+","+l.toString()+")";switch(this.shape){case f[0]:case f[1]:c=g*0.07;e=g*0.47+Math.cos(j)*(g*0.47-c)-g*0.47;h=g*0.47+Math.sin(j)*(g*0.47-c)-g*0.47;i.beginPath();this.shape===f[1]?i.arc(g*0.5+e,g*0.5+h,c*l,0,Math.PI*2,false):i.arc(g*0.5+e,g*0.5+h,c,0,Math.PI*2,false);break;case f[2]:c=g*0.12;e=Math.cos(j)*(g*0.47-c)+g*0.5;h=Math.sin(j)*(g*0.47-c)+g*0.5;u(i,e,h,j);i.fillRect(e,h-c*0.5,
c,c);break;case f[3]:case f[4]:a=g*0.3,d=a*0.27,e=Math.cos(j)*(d+(g-d)*0.13)+g*0.5,h=Math.sin(j)*(d+(g-d)*0.13)+g*0.5,u(i,e,h,j),this.shape===f[3]?i.fillRect(e,h-d*0.5,a,d):(c=d*0.55,i.moveTo(e+c,h-d*0.5),i.lineTo(e+a-c,h-d*0.5),i.quadraticCurveTo(e+a,h-d*0.5,e+a,h-d*0.5+c),i.lineTo(e+a,h-d*0.5+d-c),i.quadraticCurveTo(e+a,h-d*0.5+d,e+a-c,h-d*0.5+d),i.lineTo(e+c,h-d*0.5+d),i.quadraticCurveTo(e,h-d*0.5+d,e,h-d*0.5+d-c),i.lineTo(e,h-d*0.5+c),i.quadraticCurveTo(e,h-d*0.5,e+c,h-d*0.5))}i.closePath();i.fill();
i.restore();++b}}else{m(this.cont,{width:g,height:g});m(this.vml,{width:g,height:g});switch(this.shape){case f[0]:case f[1]:j="oval";c=140;break;case f[2]:j="roundrect";c=120;break;case f[3]:case f[4]:j="roundrect",c=300}a=d=c;e=500-d;for(h=-d*0.5;b<r;){l=b<=s?1-1/s*b:l=0;k=270-360/r*b;switch(this.shape){case f[1]:a=d=c*l;e=500-c*0.5-c*l*0.5;h=(c-c*l)*0.5;break;case f[0]:case f[2]:v&&(h=0,this.shape===f[2]&&(e=500-d*0.5));break;case f[3]:case f[4]:a=c*0.95,d=a*0.28,v?(e=0,h=500-d*0.5):(e=500-a,h=
-d*0.5),q=this.shape===f[4]?0.6:0}i=t(m(n("group",this.vml),{width:1E3,height:1E3,rotation:k}),{coordsize:"1000,1000",coordorigin:"-500,-500"});i=m(n(j,i,{stroked:false,arcSize:q}),{width:a,height:d,top:h,left:e});n("fill",i,{color:this.color,opacity:l});++b}}this.tick(true)};a.clean=function(){if(o===p[0])this.con.clearRect(0,0,1E3,1E3);else{var b=this.vml;if(b.hasChildNodes())for(;b.childNodes.length>=1;)b.removeChild(b.firstChild)}};a.redraw=function(){this.clean();this.draw()};a.reset=function(){typeof this.timer===
"number"&&(this.hide(),this.show())};a.tick=function(b){var a=this.con,f=this.diameter;b||(this.activeId+=360/this.density*this.speed);o===p[0]?(a.clearRect(0,0,f,f),u(a,f*0.5,f*0.5,this.activeId/180*Math.PI),a.drawImage(this.cCan,0,0,f,f),a.restore()):(this.activeId>=360&&(this.activeId-=360),m(this.vml,{rotation:this.activeId}))};a.show=function(){if(typeof this.timer!=="number"){var a=this;this.timer=self.setInterval(function(){a.tick()},Math.round(1E3/this.fps));m(this.cont,{display:"block"})}};
a.hide=function(){typeof this.timer==="number"&&(clearInterval(this.timer),delete this.timer,m(this.cont,{display:"none"}))};a.kill=function(){var a=this.cont;typeof this.timer==="number"&&this.hide();o===p[0]?(a.removeChild(this.can),a.removeChild(this.cCan)):a.removeChild(this.vml);for(var c in this)delete this[c]};w.CanvasLoader=k})(window);
var Base64String = {
compressToUTF16 : function (input) {
var output = [],
i,c,
current,
status = 0;
input = this.compress(input);
for (i=0 ; i<input.length ; i++) {
c = input.charCodeAt(i);
switch (status++) {
case 0:
output.push(String.fromCharCode((c >> 1)+32));
current = (c & 1) << 14;
break;
case 1:
output.push(String.fromCharCode((current + (c >> 2))+32));
current = (c & 3) << 13;
break;
case 2:
output.push(String.fromCharCode((current + (c >> 3))+32));
current = (c & 7) << 12;
break;
case 3:
output.push(String.fromCharCode((current + (c >> 4))+32));
current = (c & 15) << 11;
break;
case 4:
output.push(String.fromCharCode((current + (c >> 5))+32));
current = (c & 31) << 10;
break;
case 5:
output.push(String.fromCharCode((current + (c >> 6))+32));
current = (c & 63) << 9;
break;
case 6:
output.push(String.fromCharCode((current + (c >> 7))+32));
current = (c & 127) << 8;
break;
case 7:
output.push(String.fromCharCode((current + (c >> 8))+32));
current = (c & 255) << 7;
break;
case 8:
output.push(String.fromCharCode((current + (c >> 9))+32));
current = (c & 511) << 6;
break;
case 9:
output.push(String.fromCharCode((current + (c >> 10))+32));
current = (c & 1023) << 5;
break;
case 10:
output.push(String.fromCharCode((current + (c >> 11))+32));
current = (c & 2047) << 4;
break;
case 11:
output.push(String.fromCharCode((current + (c >> 12))+32));
current = (c & 4095) << 3;
break;
case 12:
output.push(String.fromCharCode((current + (c >> 13))+32));
current = (c & 8191) << 2;
break;
case 13:
output.push(String.fromCharCode((current + (c >> 14))+32));
current = (c & 16383) << 1;
break;
case 14:
output.push(String.fromCharCode((current + (c >> 15))+32, (c & 32767)+32));
status = 0;
break;
}
}
output.push(String.fromCharCode(current + 32));
return output.join('');
},
decompressFromUTF16 : function (input) {
var output = [],
current,c,
status=0,
i = 0;
while (i < input.length) {
c = input.charCodeAt(i) - 32;
switch (status++) {
case 0:
current = c << 1;
break;
case 1:
output.push(String.fromCharCode(current | (c >> 14)));
current = (c&16383) << 2;
break;
case 2:
output.push(String.fromCharCode(current | (c >> 13)));
current = (c&8191) << 3;
break;
case 3:
output.push(String.fromCharCode(current | (c >> 12)));
current = (c&4095) << 4;
break;
case 4:
output.push(String.fromCharCode(current | (c >> 11)));
current = (c&2047) << 5;
break;
case 5:
output.push(String.fromCharCode(current | (c >> 10)));
current = (c&1023) << 6;
break;
case 6:
output.push(String.fromCharCode(current | (c >> 9)));
current = (c&511) << 7;
break;
case 7:
output.push(String.fromCharCode(current | (c >> 8)));
current = (c&255) << 8;
break;
case 8:
output.push(String.fromCharCode(current | (c >> 7)));
current = (c&127) << 9;
break;
case 9:
output.push(String.fromCharCode(current | (c >> 6)));
current = (c&63) << 10;
break;
case 10:
output.push(String.fromCharCode(current | (c >> 5)));
current = (c&31) << 11;
break;
case 11:
output.push(String.fromCharCode(current | (c >> 4)));
current = (c&15) << 12;
break;
case 12:
output.push(String.fromCharCode(current | (c >> 3)));
current = (c&7) << 13;
break;
case 13:
output.push(String.fromCharCode(current | (c >> 2)));
current = (c&3) << 14;
break;
case 14:
output.push(String.fromCharCode(current | (c >> 1)));
current = (c&1) << 15;
break;
case 15:
output.push(String.fromCharCode(current | c));
status=0;
break;
}
i++;
}
return this.decompress(output.join(''));
},
_keyStr : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
decompress : function (input) {
var output = [];
var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
var i = 1;
var odd = input.charCodeAt(0) >> 8;
while (i < input.length*2 && (i < input.length*2-1 || odd==0)) {
if (i%2==0) {
chr1 = input.charCodeAt(i/2) >> 8;
chr2 = input.charCodeAt(i/2) & 255;
if (i/2+1 < input.length)
chr3 = input.charCodeAt(i/2+1) >> 8;
else
chr3 = NaN;
} else {
chr1 = input.charCodeAt((i-1)/2) & 255;
if ((i+1)/2 < input.length) {
chr2 = input.charCodeAt((i+1)/2) >> 8;
chr3 = input.charCodeAt((i+1)/2) & 255;
} else
chr2=chr3=NaN;
}
i+=3;
enc1 = chr1 >> 2;
enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
enc4 = chr3 & 63;
if (isNaN(chr2) || (i==input.length*2+1 && odd)) {
enc3 = enc4 = 64;
} else if (isNaN(chr3) || (i==input.length*2 && odd)) {
enc4 = 64;
}
output.push(this._keyStr.charAt(enc1));
output.push(this._keyStr.charAt(enc2));
output.push(this._keyStr.charAt(enc3));
output.push(this._keyStr.charAt(enc4));
}
return output.join('');
},
compress : function (input) {
var output = [],
ol = 1,
output_,
chr1, chr2, chr3,
enc1, enc2, enc3, enc4,
i = 0, flush=false;
input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
while (i < input.length) {
enc1 = this._keyStr.indexOf(input.charAt(i++));
enc2 = this._keyStr.indexOf(input.charAt(i++));
enc3 = this._keyStr.indexOf(input.charAt(i++));
enc4 = this._keyStr.indexOf(input.charAt(i++));
chr1 = (enc1 << 2) | (enc2 >> 4);
chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
chr3 = ((enc3 & 3) << 6) | enc4;
if (ol%2==0) {
output_ = chr1 << 8;
flush = true;
if (enc3 != 64) {
output.push(String.fromCharCode(output_ | chr2));
flush = false;
}
if (enc4 != 64) {
output_ = chr3 << 8;
flush = true;
}
} else {
output.push(String.fromCharCode(output_ | chr1));
flush = false;
if (enc3 != 64) {
output_ = chr2 << 8;
flush = true;
}
if (enc4 != 64) {
output.push(String.fromCharCode(output_ | chr3));
flush = false;
}
}
ol+=3;
}
if (flush) {
output.push(String.fromCharCode(output_));
output = output.join('');
output = String.fromCharCode(output.charCodeAt(0)|256) + output.substring(1);
} else {
output = output.join('');
}
return output;
}
}
var LZString=function(){function o(o,r){if(!t[o]){t[o]={};for(var n=0;n<o.length;n++)t[o][o.charAt(n)]=n}return t[o][r]}var r=String.fromCharCode,n="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",e="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+-$",t={},i={compressToBase64:function(o){if(null==o)return"";var r=i._compress(o,6,function(o){return n.charAt(o)});switch(r.length%4){default:case 0:return r;case 1:return r+"===";case 2:return r+"==";case 3:return r+"="}},decompressFromBase64:function(r){return null==r?"":""==r?null:i._decompress(r.length,32,function(e){return o(n,r.charAt(e))})},compressToUTF16:function(o){return null==o?"":i._compress(o,15,function(o){return r(o+32)})+" "},decompressFromUTF16:function(o){return null==o?"":""==o?null:i._decompress(o.length,16384,function(r){return o.charCodeAt(r)-32})},compressToUint8Array:function(o){for(var r=i.compress(o),n=new Uint8Array(2*r.length),e=0,t=r.length;t>e;e++){var s=r.charCodeAt(e);n[2*e]=s>>>8,n[2*e+1]=s%256}return n},decompressFromUint8Array:function(o){if(null===o||void 0===o)return i.decompress(o);for(var n=new Array(o.length/2),e=0,t=n.length;t>e;e++)n[e]=256*o[2*e]+o[2*e+1];var s=[];return n.forEach(function(o){s.push(r(o))}),i.decompress(s.join(""))},compressToEncodedURIComponent:function(o){return null==o?"":i._compress(o,6,function(o){return e.charAt(o)})},decompressFromEncodedURIComponent:function(r){return null==r?"":""==r?null:(r=r.replace(/ /g,"+"),i._decompress(r.length,32,function(n){return o(e,r.charAt(n))}))},compress:function(o){return i._compress(o,16,function(o){return r(o)})},_compress:function(o,r,n){if(null==o)return"";var e,t,i,s={},p={},u="",c="",a="",l=2,f=3,h=2,d=[],m=0,v=0;for(i=0;i<o.length;i+=1)if(u=o.charAt(i),Object.prototype.hasOwnProperty.call(s,u)||(s[u]=f++,p[u]=!0),c=a+u,Object.prototype.hasOwnProperty.call(s,c))a=c;else{if(Object.prototype.hasOwnProperty.call(p,a)){if(a.charCodeAt(0)<256){for(e=0;h>e;e++)m<<=1,v==r-1?(v=0,d.push(n(m)),m=0):v++;for(t=a.charCodeAt(0),e=0;8>e;e++)m=m<<1|1&t,v==r-1?(v=0,d.push(n(m)),m=0):v++,t>>=1}else{for(t=1,e=0;h>e;e++)m=m<<1|t,v==r-1?(v=0,d.push(n(m)),m=0):v++,t=0;for(t=a.charCodeAt(0),e=0;16>e;e++)m=m<<1|1&t,v==r-1?(v=0,d.push(n(m)),m=0):v++,t>>=1}l--,0==l&&(l=Math.pow(2,h),h++),delete p[a]}else for(t=s[a],e=0;h>e;e++)m=m<<1|1&t,v==r-1?(v=0,d.push(n(m)),m=0):v++,t>>=1;l--,0==l&&(l=Math.pow(2,h),h++),s[c]=f++,a=String(u)}if(""!==a){if(Object.prototype.hasOwnProperty.call(p,a)){if(a.charCodeAt(0)<256){for(e=0;h>e;e++)m<<=1,v==r-1?(v=0,d.push(n(m)),m=0):v++;for(t=a.charCodeAt(0),e=0;8>e;e++)m=m<<1|1&t,v==r-1?(v=0,d.push(n(m)),m=0):v++,t>>=1}else{for(t=1,e=0;h>e;e++)m=m<<1|t,v==r-1?(v=0,d.push(n(m)),m=0):v++,t=0;for(t=a.charCodeAt(0),e=0;16>e;e++)m=m<<1|1&t,v==r-1?(v=0,d.push(n(m)),m=0):v++,t>>=1}l--,0==l&&(l=Math.pow(2,h),h++),delete p[a]}else for(t=s[a],e=0;h>e;e++)m=m<<1|1&t,v==r-1?(v=0,d.push(n(m)),m=0):v++,t>>=1;l--,0==l&&(l=Math.pow(2,h),h++)}for(t=2,e=0;h>e;e++)m=m<<1|1&t,v==r-1?(v=0,d.push(n(m)),m=0):v++,t>>=1;for(;;){if(m<<=1,v==r-1){d.push(n(m));break}v++}return d.join("")},decompress:function(o){return null==o?"":""==o?null:i._decompress(o.length,32768,function(r){return o.charCodeAt(r)})},_decompress:function(o,n,e){var t,i,s,p,u,c,a,l,f=[],h=4,d=4,m=3,v="",w=[],A={val:e(0),position:n,index:1};for(i=0;3>i;i+=1)f[i]=i;for(p=0,c=Math.pow(2,2),a=1;a!=c;)u=A.val&A.position,A.position>>=1,0==A.position&&(A.position=n,A.val=e(A.index++)),p|=(u>0?1:0)*a,a<<=1;switch(t=p){case 0:for(p=0,c=Math.pow(2,8),a=1;a!=c;)u=A.val&A.position,A.position>>=1,0==A.position&&(A.position=n,A.val=e(A.index++)),p|=(u>0?1:0)*a,a<<=1;l=r(p);break;case 1:for(p=0,c=Math.pow(2,16),a=1;a!=c;)u=A.val&A.position,A.position>>=1,0==A.position&&(A.position=n,A.val=e(A.index++)),p|=(u>0?1:0)*a,a<<=1;l=r(p);break;case 2:return""}for(f[3]=l,s=l,w.push(l);;){if(A.index>o)return"";for(p=0,c=Math.pow(2,m),a=1;a!=c;)u=A.val&A.position,A.position>>=1,0==A.position&&(A.position=n,A.val=e(A.index++)),p|=(u>0?1:0)*a,a<<=1;switch(l=p){case 0:for(p=0,c=Math.pow(2,8),a=1;a!=c;)u=A.val&A.position,A.position>>=1,0==A.position&&(A.position=n,A.val=e(A.index++)),p|=(u>0?1:0)*a,a<<=1;f[d++]=r(p),l=d-1,h--;break;case 1:for(p=0,c=Math.pow(2,16),a=1;a!=c;)u=A.val&A.position,A.position>>=1,0==A.position&&(A.position=n,A.val=e(A.index++)),p|=(u>0?1:0)*a,a<<=1;f[d++]=r(p),l=d-1,h--;break;case 2:return w.join("")}if(0==h&&(h=Math.pow(2,m),m++),f[l])v=f[l];else{if(l!==d)return null;v=s+s.charAt(0)}w.push(v),f[d++]=s+v.charAt(0),h--,s=v,0==h&&(h=Math.pow(2,m),m++)}}};return i}();"function"==typeof define&&define.amd?define(function(){return LZString}):"undefined"!=typeof module&&null!=module&&(module.exports=LZString);
var XRegExp;XRegExp=XRegExp||function(n){"use strict";function v(n,i,r){var u;for(u in t.prototype)t.prototype.hasOwnProperty(u)&&(n[u]=t.prototype[u]);return n.xregexp={captureNames:i,isNative:!!r},n}function g(n){return(n.global?"g":"")+(n.ignoreCase?"i":"")+(n.multiline?"m":"")+(n.extended?"x":"")+(n.sticky?"y":"")}function o(n,r,u){if(!t.isRegExp(n))throw new TypeError("type RegExp expected");var f=i.replace.call(g(n)+(r||""),h,"");return u&&(f=i.replace.call(f,new RegExp("["+u+"]+","g"),"")),n=n.xregexp&&!n.xregexp.isNative?v(t(n.source,f),n.xregexp.captureNames?n.xregexp.captureNames.slice(0):null):v(new RegExp(n.source,f),null,!0)}function a(n,t){var i=n.length;if(Array.prototype.lastIndexOf)return n.lastIndexOf(t);while(i--)if(n[i]===t)return i;return-1}function s(n,t){return Object.prototype.toString.call(n).toLowerCase()==="[object "+t+"]"}function d(n){return n=n||{},n==="all"||n.all?n={natives:!0,extensibility:!0}:s(n,"string")&&(n=t.forEach(n,/[^\s,]+/,function(n){this[n]=!0},{})),n}function ut(n,t,i,u){var o=p.length,s=null,e,f;y=!0;try{while(o--)if(f=p[o],(f.scope==="all"||f.scope===i)&&(!f.trigger||f.trigger.call(u))&&(f.pattern.lastIndex=t,e=r.exec.call(f.pattern,n),e&&e.index===t)){s={output:f.handler.call(u,e,i),match:e};break}}catch(h){throw h;}finally{y=!1}return s}function b(n){t.addToken=c[n?"on":"off"],f.extensibility=n}function tt(n){RegExp.prototype.exec=(n?r:i).exec,RegExp.prototype.test=(n?r:i).test,String.prototype.match=(n?r:i).match,String.prototype.replace=(n?r:i).replace,String.prototype.split=(n?r:i).split,f.natives=n}var t,c,u,f={natives:!1,extensibility:!1},i={exec:RegExp.prototype.exec,test:RegExp.prototype.test,match:String.prototype.match,replace:String.prototype.replace,split:String.prototype.split},r={},k={},p=[],e="default",rt="class",it={"default":/^(?:\\(?:0(?:[0-3][0-7]{0,2}|[4-7][0-7]?)?|[1-9]\d*|x[\dA-Fa-f]{2}|u[\dA-Fa-f]{4}|c[A-Za-z]|[\s\S])|\(\?[:=!]|[?*+]\?|{\d+(?:,\d*)?}\??)/,"class":/^(?:\\(?:[0-3][0-7]{0,2}|[4-7][0-7]?|x[\dA-Fa-f]{2}|u[\dA-Fa-f]{4}|c[A-Za-z]|[\s\S]))/},et=/\$(?:{([\w$]+)}|(\d\d?|[\s\S]))/g,h=/([\s\S])(?=[\s\S]*\1)/g,nt=/^(?:[?*+]|{\d+(?:,\d*)?})\??/,ft=i.exec.call(/()??/,"")[1]===n,l=RegExp.prototype.sticky!==n,y=!1,w="gim"+(l?"y":"");return t=function(r,u){if(t.isRegExp(r)){if(u!==n)throw new TypeError("can't supply flags when constructing one RegExp from another");return o(r)}if(y)throw new Error("can't call the XRegExp constructor within token definition functions");var l=[],a=e,b={hasNamedCapture:!1,captureNames:[],hasFlag:function(n){return u.indexOf(n)>-1}},f=0,c,s,p;if(r=r===n?"":String(r),u=u===n?"":String(u),i.match.call(u,h))throw new SyntaxError("invalid duplicate regular expression flag");for(r=i.replace.call(r,/^\(\?([\w$]+)\)/,function(n,t){if(i.test.call(/[gy]/,t))throw new SyntaxError("can't use flag g or y in mode modifier");return u=i.replace.call(u+t,h,""),""}),t.forEach(u,/[\s\S]/,function(n){if(w.indexOf(n[0])<0)throw new SyntaxError("invalid regular expression flag "+n[0]);});f<r.length;)c=ut(r,f,a,b),c?(l.push(c.output),f+=c.match[0].length||1):(s=i.exec.call(it[a],r.slice(f)),s?(l.push(s[0]),f+=s[0].length):(p=r.charAt(f),p==="["?a=rt:p==="]"&&(a=e),l.push(p),++f));return v(new RegExp(l.join(""),i.replace.call(u,/[^gimy]+/g,"")),b.hasNamedCapture?b.captureNames:null)},c={on:function(n,t,r){r=r||{},n&&p.push({pattern:o(n,"g"+(l?"y":"")),handler:t,scope:r.scope||e,trigger:r.trigger||null}),r.customFlags&&(w=i.replace.call(w+r.customFlags,h,""))},off:function(){throw new Error("extensibility must be installed before using addToken");}},t.addToken=c.off,t.cache=function(n,i){var r=n+"/"+(i||"");return k[r]||(k[r]=t(n,i))},t.escape=function(n){return i.replace.call(n,/[-[\]{}()*+?.,\\^$|#\s]/g,"\\$&")},t.exec=function(n,t,i,u){var e=o(t,"g"+(u&&l?"y":""),u===!1?"y":""),f;return e.lastIndex=i=i||0,f=r.exec.call(e,n),u&&f&&f.index!==i&&(f=null),t.global&&(t.lastIndex=f?e.lastIndex:0),f},t.forEach=function(n,i,r,u){for(var e=0,o=-1,f;f=t.exec(n,i,e);)r.call(u,f,++o,n,i),e=f.index+(f[0].length||1);return u},t.globalize=function(n){return o(n,"g")},t.install=function(n){n=d(n),!f.natives&&n.natives&&tt(!0),!f.extensibility&&n.extensibility&&b(!0)},t.isInstalled=function(n){return!!f[n]},t.isRegExp=function(n){return s(n,"regexp")},t.matchChain=function(n,i){return function r(n,u){for(var o=i[u].regex?i[u]:{regex:i[u]},f=[],s=function(n){f.push(o.backref?n[o.backref]||"":n[0])},e=0;e<n.length;++e)t.forEach(n[e],o.regex,s);return u===i.length-1||!f.length?f:r(f,u+1)}([n],0)},t.replace=function(i,u,f,e){var c=t.isRegExp(u),s=u,h;return c?(e===n&&u.global&&(e="all"),s=o(u,e==="all"?"g":"",e==="all"?"":"g")):e==="all"&&(s=new RegExp(t.escape(String(u)),"g")),h=r.replace.call(String(i),s,f),c&&u.global&&(u.lastIndex=0),h},t.split=function(n,t,i){return r.split.call(n,t,i)},t.test=function(n,i,r,u){return!!t.exec(n,i,r,u)},t.uninstall=function(n){n=d(n),f.natives&&n.natives&&tt(!1),f.extensibility&&n.extensibility&&b(!1)},t.union=function(n,i){var l=/(\()(?!\?)|\\([1-9]\d*)|\\[\s\S]|\[(?:[^\\\]]|\\[\s\S])*]/g,o=0,f,h,c=function(n,t,i){var r=h[o-f];if(t){if(++o,r)return"(?<"+r+">"}else if(i)return"\\"+(+i+f);return n},e=[],r,u;if(!(s(n,"array")&&n.length))throw new TypeError("patterns must be a nonempty array");for(u=0;u<n.length;++u)r=n[u],t.isRegExp(r)?(f=o,h=r.xregexp&&r.xregexp.captureNames||[],e.push(t(r.source).source.replace(l,c))):e.push(t.escape(r));return t(e.join("|"),i)},t.version="2.0.0",r.exec=function(t){var r,f,e,o,u;if(this.global||(o=this.lastIndex),r=i.exec.apply(this,arguments),r){if(!ft&&r.length>1&&a(r,"")>-1&&(e=new RegExp(this.source,i.replace.call(g(this),"g","")),i.replace.call(String(t).slice(r.index),e,function(){for(var t=1;t<arguments.length-2;++t)arguments[t]===n&&(r[t]=n)})),this.xregexp&&this.xregexp.captureNames)for(u=1;u<r.length;++u)f=this.xregexp.captureNames[u-1],f&&(r[f]=r[u]);this.global&&!r[0].length&&this.lastIndex>r.index&&(this.lastIndex=r.index)}return this.global||(this.lastIndex=o),r},r.test=function(n){return!!r.exec.call(this,n)},r.match=function(n){if(t.isRegExp(n)){if(n.global){var u=i.match.apply(this,arguments);return n.lastIndex=0,u}}else n=new RegExp(n);return r.exec.call(n,this)},r.replace=function(n,r){var e=t.isRegExp(n),u,f,h,o;return e?(n.xregexp&&(u=n.xregexp.captureNames),n.global||(o=n.lastIndex)):n+="",s(r,"function")?f=i.replace.call(String(this),n,function(){var t=arguments,i;if(u)for(t[0]=new String(t[0]),i=0;i<u.length;++i)u[i]&&(t[0][u[i]]=t[i+1]);return e&&n.global&&(n.lastIndex=t[t.length-2]+t[0].length),r.apply(null,t)}):(h=String(this),f=i.replace.call(h,n,function(){var n=arguments;return i.replace.call(String(r),et,function(t,i,r){var f;if(i){if(f=+i,f<=n.length-3)return n[f]||"";if(f=u?a(u,i):-1,f<0)throw new SyntaxError("backreference to undefined group "+t);return n[f+1]||""}if(r==="$")return"$";if(r==="&"||+r==0)return n[0];if(r==="`")return n[n.length-1].slice(0,n[n.length-2]);if(r==="'")return n[n.length-1].slice(n[n.length-2]+n[0].length);if(r=+r,!isNaN(r)){if(r>n.length-3)throw new SyntaxError("backreference to undefined group "+t);return n[r]||""}throw new SyntaxError("invalid token "+t);})})),e&&(n.lastIndex=n.global?0:o),f},r.split=function(r,u){if(!t.isRegExp(r))return i.split.apply(this,arguments);var e=String(this),h=r.lastIndex,f=[],o=0,s;return u=(u===n?-1:u)>>>0,t.forEach(e,r,function(n){n.index+n[0].length>o&&(f.push(e.slice(o,n.index)),n.length>1&&n.index<e.length&&Array.prototype.push.apply(f,n.slice(1)),s=n[0].length,o=n.index+s)}),o===e.length?(!i.test.call(r,"")||s)&&f.push(""):f.push(e.slice(o)),r.lastIndex=h,f.length>u?f.slice(0,u):f},u=c.on,u(/\\([ABCE-RTUVXYZaeg-mopqyz]|c(?![A-Za-z])|u(?![\dA-Fa-f]{4})|x(?![\dA-Fa-f]{2}))/,function(n,t){if(n[1]==="B"&&t===e)return n[0];throw new SyntaxError("invalid escape "+n[0]);},{scope:"all"}),u(/\[(\^?)]/,function(n){return n[1]?"[\\s\\S]":"\\b\\B"}),u(/(?:\(\?#[^)]*\))+/,function(n){return i.test.call(nt,n.input.slice(n.index+n[0].length))?"":"(?:)"}),u(/\\k<([\w$]+)>/,function(n){var t=isNaN(n[1])?a(this.captureNames,n[1])+1:+n[1],i=n.index+n[0].length;if(!t||t>this.captureNames.length)throw new SyntaxError("backreference to undefined group "+n[0]);return"\\"+t+(i===n.input.length||isNaN(n.input.charAt(i))?"":"(?:)")}),u(/(?:\s+|#.*)+/,function(n){return i.test.call(nt,n.input.slice(n.index+n[0].length))?"":"(?:)"},{trigger:function(){return this.hasFlag("x")},customFlags:"x"}),u(/\./,function(){return"[\\s\\S]"},{trigger:function(){return this.hasFlag("s")},customFlags:"s"}),u(/\(\?P?<([\w$]+)>/,function(n){if(!isNaN(n[1]))throw new SyntaxError("can't use integer as capture name "+n[0]);return this.captureNames.push(n[1]),this.hasNamedCapture=!0,"("}),u(/\\(\d+)/,function(n,t){if(!(t===e&&/^[1-9]/.test(n[1])&&+n[1]<=this.captureNames.length)&&n[1]!=="0")throw new SyntaxError("can't use octal escape or backreference to undefined group "+n[0]);return n[0]},{scope:"all"}),u(/\((?!\?)/,function(){return this.hasFlag("n")?"(?:":(this.captureNames.push(null),"(")},{customFlags:"n"}),typeof exports!="undefined"&&(exports.XRegExp=t),t}();
(function(n){"use strict";function i(n){return n.replace(/[- _]+/g,"").toLowerCase()}function s(n){return n.replace(/\w{4}/g,"\\u$&")}function u(n){while(n.length<4)n="0"+n;return n}function f(n){return parseInt(n,16)}function r(n){return parseInt(n,10).toString(16)}function o(t){var e=[],i=-1,o;return n.forEach(t,/\\u(\w{4})(?:-\\u(\w{4}))?/,function(n){o=f(n[1]),o>i+1&&(e.push("\\u"+u(r(i+1))),o>i+2&&e.push("-\\u"+u(r(o-1)))),i=f(n[2]||n[1])}),i<65535&&(e.push("\\u"+u(r(i+1))),i<65534&&e.push("-\\uFFFF")),e.join("")}function e(n){return t["^"+n]||(t["^"+n]=o(t[n]))}var t={};n.install("extensibility"),n.addUnicodePackage=function(r,u){var f;if(!n.isInstalled("extensibility"))throw new Error("extensibility must be installed before adding Unicode packages");if(r)for(f in r)r.hasOwnProperty(f)&&(t[i(f)]=s(r[f]));if(u)for(f in u)u.hasOwnProperty(f)&&(t[i(u[f])]=t[i(f)])},n.addUnicodePackage({L:"0041-005A0061-007A00AA00B500BA00C0-00D600D8-00F600F8-02C102C6-02D102E0-02E402EC02EE0370-037403760377037A-037D03860388-038A038C038E-03A103A3-03F503F7-0481048A-05270531-055605590561-058705D0-05EA05F0-05F20620-064A066E066F0671-06D306D506E506E606EE06EF06FA-06FC06FF07100712-072F074D-07A507B107CA-07EA07F407F507FA0800-0815081A082408280840-085808A008A2-08AC0904-0939093D09500958-09610971-09770979-097F0985-098C098F09900993-09A809AA-09B009B209B6-09B909BD09CE09DC09DD09DF-09E109F009F10A05-0A0A0A0F0A100A13-0A280A2A-0A300A320A330A350A360A380A390A59-0A5C0A5E0A72-0A740A85-0A8D0A8F-0A910A93-0AA80AAA-0AB00AB20AB30AB5-0AB90ABD0AD00AE00AE10B05-0B0C0B0F0B100B13-0B280B2A-0B300B320B330B35-0B390B3D0B5C0B5D0B5F-0B610B710B830B85-0B8A0B8E-0B900B92-0B950B990B9A0B9C0B9E0B9F0BA30BA40BA8-0BAA0BAE-0BB90BD00C05-0C0C0C0E-0C100C12-0C280C2A-0C330C35-0C390C3D0C580C590C600C610C85-0C8C0C8E-0C900C92-0CA80CAA-0CB30CB5-0CB90CBD0CDE0CE00CE10CF10CF20D05-0D0C0D0E-0D100D12-0D3A0D3D0D4E0D600D610D7A-0D7F0D85-0D960D9A-0DB10DB3-0DBB0DBD0DC0-0DC60E01-0E300E320E330E40-0E460E810E820E840E870E880E8A0E8D0E94-0E970E99-0E9F0EA1-0EA30EA50EA70EAA0EAB0EAD-0EB00EB20EB30EBD0EC0-0EC40EC60EDC-0EDF0F000F40-0F470F49-0F6C0F88-0F8C1000-102A103F1050-1055105A-105D106110651066106E-10701075-1081108E10A0-10C510C710CD10D0-10FA10FC-1248124A-124D1250-12561258125A-125D1260-1288128A-128D1290-12B012B2-12B512B8-12BE12C012C2-12C512C8-12D612D8-13101312-13151318-135A1380-138F13A0-13F41401-166C166F-167F1681-169A16A0-16EA1700-170C170E-17111720-17311740-17511760-176C176E-17701780-17B317D717DC1820-18771880-18A818AA18B0-18F51900-191C1950-196D1970-19741980-19AB19C1-19C71A00-1A161A20-1A541AA71B05-1B331B45-1B4B1B83-1BA01BAE1BAF1BBA-1BE51C00-1C231C4D-1C4F1C5A-1C7D1CE9-1CEC1CEE-1CF11CF51CF61D00-1DBF1E00-1F151F18-1F1D1F20-1F451F48-1F4D1F50-1F571F591F5B1F5D1F5F-1F7D1F80-1FB41FB6-1FBC1FBE1FC2-1FC41FC6-1FCC1FD0-1FD31FD6-1FDB1FE0-1FEC1FF2-1FF41FF6-1FFC2071207F2090-209C21022107210A-211321152119-211D212421262128212A-212D212F-2139213C-213F2145-2149214E218321842C00-2C2E2C30-2C5E2C60-2CE42CEB-2CEE2CF22CF32D00-2D252D272D2D2D30-2D672D6F2D80-2D962DA0-2DA62DA8-2DAE2DB0-2DB62DB8-2DBE2DC0-2DC62DC8-2DCE2DD0-2DD62DD8-2DDE2E2F300530063031-3035303B303C3041-3096309D-309F30A1-30FA30FC-30FF3105-312D3131-318E31A0-31BA31F0-31FF3400-4DB54E00-9FCCA000-A48CA4D0-A4FDA500-A60CA610-A61FA62AA62BA640-A66EA67F-A697A6A0-A6E5A717-A71FA722-A788A78B-A78EA790-A793A7A0-A7AAA7F8-A801A803-A805A807-A80AA80C-A822A840-A873A882-A8B3A8F2-A8F7A8FBA90A-A925A930-A946A960-A97CA984-A9B2A9CFAA00-AA28AA40-AA42AA44-AA4BAA60-AA76AA7AAA80-AAAFAAB1AAB5AAB6AAB9-AABDAAC0AAC2AADB-AADDAAE0-AAEAAAF2-AAF4AB01-AB06AB09-AB0EAB11-AB16AB20-AB26AB28-AB2EABC0-ABE2AC00-D7A3D7B0-D7C6D7CB-D7FBF900-FA6DFA70-FAD9FB00-FB06FB13-FB17FB1DFB1F-FB28FB2A-FB36FB38-FB3CFB3EFB40FB41FB43FB44FB46-FBB1FBD3-FD3DFD50-FD8FFD92-FDC7FDF0-FDFBFE70-FE74FE76-FEFCFF21-FF3AFF41-FF5AFF66-FFBEFFC2-FFC7FFCA-FFCFFFD2-FFD7FFDA-FFDC"},{L:"Letter"}),n.addToken(/\\([pP]){(\^?)([^}]*)}/,function(n,r){var f=n[1]==="P"||n[2]?"^":"",u=i(n[3]);if(n[1]==="P"&&n[2])throw new SyntaxError("invalid double negation \\P{^");if(!t.hasOwnProperty(u))throw new SyntaxError("invalid or unknown Unicode property "+n[0]);return r==="class"?f?e(u):t[u]:"["+f+t[u]+"]"},{scope:"all"})})(XRegExp);
(function(n){"use strict";if(!n.addUnicodePackage)throw new ReferenceError("Unicode Base must be loaded before Unicode Categories");n.install("extensibility"),n.addUnicodePackage({Ll:"0061-007A00B500DF-00F600F8-00FF01010103010501070109010B010D010F01110113011501170119011B011D011F01210123012501270129012B012D012F01310133013501370138013A013C013E014001420144014601480149014B014D014F01510153015501570159015B015D015F01610163016501670169016B016D016F0171017301750177017A017C017E-0180018301850188018C018D019201950199-019B019E01A101A301A501A801AA01AB01AD01B001B401B601B901BA01BD-01BF01C601C901CC01CE01D001D201D401D601D801DA01DC01DD01DF01E101E301E501E701E901EB01ED01EF01F001F301F501F901FB01FD01FF02010203020502070209020B020D020F02110213021502170219021B021D021F02210223022502270229022B022D022F02310233-0239023C023F0240024202470249024B024D024F-02930295-02AF037103730377037B-037D039003AC-03CE03D003D103D5-03D703D903DB03DD03DF03E103E303E503E703E903EB03ED03EF-03F303F503F803FB03FC0430-045F04610463046504670469046B046D046F04710473047504770479047B047D047F0481048B048D048F04910493049504970499049B049D049F04A104A304A504A704A904AB04AD04AF04B104B304B504B704B904BB04BD04BF04C204C404C604C804CA04CC04CE04CF04D104D304D504D704D904DB04DD04DF04E104E304E504E704E904EB04ED04EF04F104F304F504F704F904FB04FD04FF05010503050505070509050B050D050F05110513051505170519051B051D051F05210523052505270561-05871D00-1D2B1D6B-1D771D79-1D9A1E011E031E051E071E091E0B1E0D1E0F1E111E131E151E171E191E1B1E1D1E1F1E211E231E251E271E291E2B1E2D1E2F1E311E331E351E371E391E3B1E3D1E3F1E411E431E451E471E491E4B1E4D1E4F1E511E531E551E571E591E5B1E5D1E5F1E611E631E651E671E691E6B1E6D1E6F1E711E731E751E771E791E7B1E7D1E7F1E811E831E851E871E891E8B1E8D1E8F1E911E931E95-1E9D1E9F1EA11EA31EA51EA71EA91EAB1EAD1EAF1EB11EB31EB51EB71EB91EBB1EBD1EBF1EC11EC31EC51EC71EC91ECB1ECD1ECF1ED11ED31ED51ED71ED91EDB1EDD1EDF1EE11EE31EE51EE71EE91EEB1EED1EEF1EF11EF31EF51EF71EF91EFB1EFD1EFF-1F071F10-1F151F20-1F271F30-1F371F40-1F451F50-1F571F60-1F671F70-1F7D1F80-1F871F90-1F971FA0-1FA71FB0-1FB41FB61FB71FBE1FC2-1FC41FC61FC71FD0-1FD31FD61FD71FE0-1FE71FF2-1FF41FF61FF7210A210E210F2113212F21342139213C213D2146-2149214E21842C30-2C5E2C612C652C662C682C6A2C6C2C712C732C742C76-2C7B2C812C832C852C872C892C8B2C8D2C8F2C912C932C952C972C992C9B2C9D2C9F2CA12CA32CA52CA72CA92CAB2CAD2CAF2CB12CB32CB52CB72CB92CBB2CBD2CBF2CC12CC32CC52CC72CC92CCB2CCD2CCF2CD12CD32CD52CD72CD92CDB2CDD2CDF2CE12CE32CE42CEC2CEE2CF32D00-2D252D272D2DA641A643A645A647A649A64BA64DA64FA651A653A655A657A659A65BA65DA65FA661A663A665A667A669A66BA66DA681A683A685A687A689A68BA68DA68FA691A693A695A697A723A725A727A729A72BA72DA72F-A731A733A735A737A739A73BA73DA73FA741A743A745A747A749A74BA74DA74FA751A753A755A757A759A75BA75DA75FA761A763A765A767A769A76BA76DA76FA771-A778A77AA77CA77FA781A783A785A787A78CA78EA791A793A7A1A7A3A7A5A7A7A7A9A7FAFB00-FB06FB13-FB17FF41-FF5A",Lu:"0041-005A00C0-00D600D8-00DE01000102010401060108010A010C010E01100112011401160118011A011C011E01200122012401260128012A012C012E01300132013401360139013B013D013F0141014301450147014A014C014E01500152015401560158015A015C015E01600162016401660168016A016C016E017001720174017601780179017B017D018101820184018601870189-018B018E-0191019301940196-0198019C019D019F01A001A201A401A601A701A901AC01AE01AF01B1-01B301B501B701B801BC01C401C701CA01CD01CF01D101D301D501D701D901DB01DE01E001E201E401E601E801EA01EC01EE01F101F401F6-01F801FA01FC01FE02000202020402060208020A020C020E02100212021402160218021A021C021E02200222022402260228022A022C022E02300232023A023B023D023E02410243-02460248024A024C024E03700372037603860388-038A038C038E038F0391-03A103A3-03AB03CF03D2-03D403D803DA03DC03DE03E003E203E403E603E803EA03EC03EE03F403F703F903FA03FD-042F04600462046404660468046A046C046E04700472047404760478047A047C047E0480048A048C048E04900492049404960498049A049C049E04A004A204A404A604A804AA04AC04AE04B004B204B404B604B804BA04BC04BE04C004C104C304C504C704C904CB04CD04D004D204D404D604D804DA04DC04DE04E004E204E404E604E804EA04EC04EE04F004F204F404F604F804FA04FC04FE05000502050405060508050A050C050E05100512051405160518051A051C051E05200522052405260531-055610A0-10C510C710CD1E001E021E041E061E081E0A1E0C1E0E1E101E121E141E161E181E1A1E1C1E1E1E201E221E241E261E281E2A1E2C1E2E1E301E321E341E361E381E3A1E3C1E3E1E401E421E441E461E481E4A1E4C1E4E1E501E521E541E561E581E5A1E5C1E5E1E601E621E641E661E681E6A1E6C1E6E1E701E721E741E761E781E7A1E7C1E7E1E801E821E841E861E881E8A1E8C1E8E1E901E921E941E9E1EA01EA21EA41EA61EA81EAA1EAC1EAE1EB01EB21EB41EB61EB81EBA1EBC1EBE1EC01EC21EC41EC61EC81ECA1ECC1ECE1ED01ED21ED41ED61ED81EDA1EDC1EDE1EE01EE21EE41EE61EE81EEA1EEC1EEE1EF01EF21EF41EF61EF81EFA1EFC1EFE1F08-1F0F1F18-1F1D1F28-1F2F1F38-1F3F1F48-1F4D1F591F5B1F5D1F5F1F68-1F6F1FB8-1FBB1FC8-1FCB1FD8-1FDB1FE8-1FEC1FF8-1FFB21022107210B-210D2110-211221152119-211D212421262128212A-212D2130-2133213E213F214521832C00-2C2E2C602C62-2C642C672C692C6B2C6D-2C702C722C752C7E-2C802C822C842C862C882C8A2C8C2C8E2C902C922C942C962C982C9A2C9C2C9E2CA02CA22CA42CA62CA82CAA2CAC2CAE2CB02CB22CB42CB62CB82CBA2CBC2CBE2CC02CC22CC42CC62CC82CCA2CCC2CCE2CD02CD22CD42CD62CD82CDA2CDC2CDE2CE02CE22CEB2CED2CF2A640A642A644A646A648A64AA64CA64EA650A652A654A656A658A65AA65CA65EA660A662A664A666A668A66AA66CA680A682A684A686A688A68AA68CA68EA690A692A694A696A722A724A726A728A72AA72CA72EA732A734A736A738A73AA73CA73EA740A742A744A746A748A74AA74CA74EA750A752A754A756A758A75AA75CA75EA760A762A764A766A768A76AA76CA76EA779A77BA77DA77EA780A782A784A786A78BA78DA790A792A7A0A7A2A7A4A7A6A7A8A7AAFF21-FF3A",Lt:"01C501C801CB01F21F88-1F8F1F98-1F9F1FA8-1FAF1FBC1FCC1FFC",Lm:"02B0-02C102C6-02D102E0-02E402EC02EE0374037A0559064006E506E607F407F507FA081A0824082809710E460EC610FC17D718431AA71C78-1C7D1D2C-1D6A1D781D9B-1DBF2071207F2090-209C2C7C2C7D2D6F2E2F30053031-3035303B309D309E30FC-30FEA015A4F8-A4FDA60CA67FA717-A71FA770A788A7F8A7F9A9CFAA70AADDAAF3AAF4FF70FF9EFF9F",Lo:"00AA00BA01BB01C0-01C3029405D0-05EA05F0-05F20620-063F0641-064A066E066F0671-06D306D506EE06EF06FA-06FC06FF07100712-072F074D-07A507B107CA-07EA0800-08150840-085808A008A2-08AC0904-0939093D09500958-09610972-09770979-097F0985-098C098F09900993-09A809AA-09B009B209B6-09B909BD09CE09DC09DD09DF-09E109F009F10A05-0A0A0A0F0A100A13-0A280A2A-0A300A320A330A350A360A380A390A59-0A5C0A5E0A72-0A740A85-0A8D0A8F-0A910A93-0AA80AAA-0AB00AB20AB30AB5-0AB90ABD0AD00AE00AE10B05-0B0C0B0F0B100B13-0B280B2A-0B300B320B330B35-0B390B3D0B5C0B5D0B5F-0B610B710B830B85-0B8A0B8E-0B900B92-0B950B990B9A0B9C0B9E0B9F0BA30BA40BA8-0BAA0BAE-0BB90BD00C05-0C0C0C0E-0C100C12-0C280C2A-0C330C35-0C390C3D0C580C590C600C610C85-0C8C0C8E-0C900C92-0CA80CAA-0CB30CB5-0CB90CBD0CDE0CE00CE10CF10CF20D05-0D0C0D0E-0D100D12-0D3A0D3D0D4E0D600D610D7A-0D7F0D85-0D960D9A-0DB10DB3-0DBB0DBD0DC0-0DC60E01-0E300E320E330E40-0E450E810E820E840E870E880E8A0E8D0E94-0E970E99-0E9F0EA1-0EA30EA50EA70EAA0EAB0EAD-0EB00EB20EB30EBD0EC0-0EC40EDC-0EDF0F000F40-0F470F49-0F6C0F88-0F8C1000-102A103F1050-1055105A-105D106110651066106E-10701075-1081108E10D0-10FA10FD-1248124A-124D1250-12561258125A-125D1260-1288128A-128D1290-12B012B2-12B512B8-12BE12C012C2-12C512C8-12D612D8-13101312-13151318-135A1380-138F13A0-13F41401-166C166F-167F1681-169A16A0-16EA1700-170C170E-17111720-17311740-17511760-176C176E-17701780-17B317DC1820-18421844-18771880-18A818AA18B0-18F51900-191C1950-196D1970-19741980-19AB19C1-19C71A00-1A161A20-1A541B05-1B331B45-1B4B1B83-1BA01BAE1BAF1BBA-1BE51C00-1C231C4D-1C4F1C5A-1C771CE9-1CEC1CEE-1CF11CF51CF62135-21382D30-2D672D80-2D962DA0-2DA62DA8-2DAE2DB0-2DB62DB8-2DBE2DC0-2DC62DC8-2DCE2DD0-2DD62DD8-2DDE3006303C3041-3096309F30A1-30FA30FF3105-312D3131-318E31A0-31BA31F0-31FF3400-4DB54E00-9FCCA000-A014A016-A48CA4D0-A4F7A500-A60BA610-A61FA62AA62BA66EA6A0-A6E5A7FB-A801A803-A805A807-A80AA80C-A822A840-A873A882-A8B3A8F2-A8F7A8FBA90A-A925A930-A946A960-A97CA984-A9B2AA00-AA28AA40-AA42AA44-AA4BAA60-AA6FAA71-AA76AA7AAA80-AAAFAAB1AAB5AAB6AAB9-AABDAAC0AAC2AADBAADCAAE0-AAEAAAF2AB01-AB06AB09-AB0EAB11-AB16AB20-AB26AB28-AB2EABC0-ABE2AC00-D7A3D7B0-D7C6D7CB-D7FBF900-FA6DFA70-FAD9FB1DFB1F-FB28FB2A-FB36FB38-FB3CFB3EFB40FB41FB43FB44FB46-FBB1FBD3-FD3DFD50-FD8FFD92-FDC7FDF0-FDFBFE70-FE74FE76-FEFCFF66-FF6FFF71-FF9DFFA0-FFBEFFC2-FFC7FFCA-FFCFFFD2-FFD7FFDA-FFDC",M:"0300-036F0483-04890591-05BD05BF05C105C205C405C505C70610-061A064B-065F067006D6-06DC06DF-06E406E706E806EA-06ED07110730-074A07A6-07B007EB-07F30816-0819081B-08230825-08270829-082D0859-085B08E4-08FE0900-0903093A-093C093E-094F0951-0957096209630981-098309BC09BE-09C409C709C809CB-09CD09D709E209E30A01-0A030A3C0A3E-0A420A470A480A4B-0A4D0A510A700A710A750A81-0A830ABC0ABE-0AC50AC7-0AC90ACB-0ACD0AE20AE30B01-0B030B3C0B3E-0B440B470B480B4B-0B4D0B560B570B620B630B820BBE-0BC20BC6-0BC80BCA-0BCD0BD70C01-0C030C3E-0C440C46-0C480C4A-0C4D0C550C560C620C630C820C830CBC0CBE-0CC40CC6-0CC80CCA-0CCD0CD50CD60CE20CE30D020D030D3E-0D440D46-0D480D4A-0D4D0D570D620D630D820D830DCA0DCF-0DD40DD60DD8-0DDF0DF20DF30E310E34-0E3A0E47-0E4E0EB10EB4-0EB90EBB0EBC0EC8-0ECD0F180F190F350F370F390F3E0F3F0F71-0F840F860F870F8D-0F970F99-0FBC0FC6102B-103E1056-1059105E-10601062-10641067-106D1071-10741082-108D108F109A-109D135D-135F1712-17141732-1734175217531772177317B4-17D317DD180B-180D18A91920-192B1930-193B19B0-19C019C819C91A17-1A1B1A55-1A5E1A60-1A7C1A7F1B00-1B041B34-1B441B6B-1B731B80-1B821BA1-1BAD1BE6-1BF31C24-1C371CD0-1CD21CD4-1CE81CED1CF2-1CF41DC0-1DE61DFC-1DFF20D0-20F02CEF-2CF12D7F2DE0-2DFF302A-302F3099309AA66F-A672A674-A67DA69FA6F0A6F1A802A806A80BA823-A827A880A881A8B4-A8C4A8E0-A8F1A926-A92DA947-A953A980-A983A9B3-A9C0AA29-AA36AA43AA4CAA4DAA7BAAB0AAB2-AAB4AAB7AAB8AABEAABFAAC1AAEB-AAEFAAF5AAF6ABE3-ABEAABECABEDFB1EFE00-FE0FFE20-FE26",Mn:"0300-036F0483-04870591-05BD05BF05C105C205C405C505C70610-061A064B-065F067006D6-06DC06DF-06E406E706E806EA-06ED07110730-074A07A6-07B007EB-07F30816-0819081B-08230825-08270829-082D0859-085B08E4-08FE0900-0902093A093C0941-0948094D0951-095709620963098109BC09C1-09C409CD09E209E30A010A020A3C0A410A420A470A480A4B-0A4D0A510A700A710A750A810A820ABC0AC1-0AC50AC70AC80ACD0AE20AE30B010B3C0B3F0B41-0B440B4D0B560B620B630B820BC00BCD0C3E-0C400C46-0C480C4A-0C4D0C550C560C620C630CBC0CBF0CC60CCC0CCD0CE20CE30D41-0D440D4D0D620D630DCA0DD2-0DD40DD60E310E34-0E3A0E47-0E4E0EB10EB4-0EB90EBB0EBC0EC8-0ECD0F180F190F350F370F390F71-0F7E0F80-0F840F860F870F8D-0F970F99-0FBC0FC6102D-10301032-10371039103A103D103E10581059105E-10601071-1074108210851086108D109D135D-135F1712-17141732-1734175217531772177317B417B517B7-17BD17C617C9-17D317DD180B-180D18A91920-19221927192819321939-193B1A171A181A561A58-1A5E1A601A621A65-1A6C1A73-1A7C1A7F1B00-1B031B341B36-1B3A1B3C1B421B6B-1B731B801B811BA2-1BA51BA81BA91BAB1BE61BE81BE91BED1BEF-1BF11C2C-1C331C361C371CD0-1CD21CD4-1CE01CE2-1CE81CED1CF41DC0-1DE61DFC-1DFF20D0-20DC20E120E5-20F02CEF-2CF12D7F2DE0-2DFF302A-302D3099309AA66FA674-A67DA69FA6F0A6F1A802A806A80BA825A826A8C4A8E0-A8F1A926-A92DA947-A951A980-A982A9B3A9B6-A9B9A9BCAA29-AA2EAA31AA32AA35AA36AA43AA4CAAB0AAB2-AAB4AAB7AAB8AABEAABFAAC1AAECAAEDAAF6ABE5ABE8ABEDFB1EFE00-FE0FFE20-FE26",Mc:"0903093B093E-09400949-094C094E094F0982098309BE-09C009C709C809CB09CC09D70A030A3E-0A400A830ABE-0AC00AC90ACB0ACC0B020B030B3E0B400B470B480B4B0B4C0B570BBE0BBF0BC10BC20BC6-0BC80BCA-0BCC0BD70C01-0C030C41-0C440C820C830CBE0CC0-0CC40CC70CC80CCA0CCB0CD50CD60D020D030D3E-0D400D46-0D480D4A-0D4C0D570D820D830DCF-0DD10DD8-0DDF0DF20DF30F3E0F3F0F7F102B102C10311038103B103C105610571062-10641067-106D108310841087-108C108F109A-109C17B617BE-17C517C717C81923-19261929-192B193019311933-193819B0-19C019C819C91A19-1A1B1A551A571A611A631A641A6D-1A721B041B351B3B1B3D-1B411B431B441B821BA11BA61BA71BAA1BAC1BAD1BE71BEA-1BEC1BEE1BF21BF31C24-1C2B1C341C351CE11CF21CF3302E302FA823A824A827A880A881A8B4-A8C3A952A953A983A9B4A9B5A9BAA9BBA9BD-A9C0AA2FAA30AA33AA34AA4DAA7BAAEBAAEEAAEFAAF5ABE3ABE4ABE6ABE7ABE9ABEAABEC",Me:"0488048920DD-20E020E2-20E4A670-A672",N:"0030-003900B200B300B900BC-00BE0660-066906F0-06F907C0-07C90966-096F09E6-09EF09F4-09F90A66-0A6F0AE6-0AEF0B66-0B6F0B72-0B770BE6-0BF20C66-0C6F0C78-0C7E0CE6-0CEF0D66-0D750E50-0E590ED0-0ED90F20-0F331040-10491090-10991369-137C16EE-16F017E0-17E917F0-17F91810-18191946-194F19D0-19DA1A80-1A891A90-1A991B50-1B591BB0-1BB91C40-1C491C50-1C5920702074-20792080-20892150-21822185-21892460-249B24EA-24FF2776-27932CFD30073021-30293038-303A3192-31953220-32293248-324F3251-325F3280-328932B1-32BFA620-A629A6E6-A6EFA830-A835A8D0-A8D9A900-A909A9D0-A9D9AA50-AA59ABF0-ABF9FF10-FF19",Nd:"0030-00390660-066906F0-06F907C0-07C90966-096F09E6-09EF0A66-0A6F0AE6-0AEF0B66-0B6F0BE6-0BEF0C66-0C6F0CE6-0CEF0D66-0D6F0E50-0E590ED0-0ED90F20-0F291040-10491090-109917E0-17E91810-18191946-194F19D0-19D91A80-1A891A90-1A991B50-1B591BB0-1BB91C40-1C491C50-1C59A620-A629A8D0-A8D9A900-A909A9D0-A9D9AA50-AA59ABF0-ABF9FF10-FF19",Nl:"16EE-16F02160-21822185-218830073021-30293038-303AA6E6-A6EF",No:"00B200B300B900BC-00BE09F4-09F90B72-0B770BF0-0BF20C78-0C7E0D70-0D750F2A-0F331369-137C17F0-17F919DA20702074-20792080-20892150-215F21892460-249B24EA-24FF2776-27932CFD3192-31953220-32293248-324F3251-325F3280-328932B1-32BFA830-A835",P:"0021-00230025-002A002C-002F003A003B003F0040005B-005D005F007B007D00A100A700AB00B600B700BB00BF037E0387055A-055F0589058A05BE05C005C305C605F305F40609060A060C060D061B061E061F066A-066D06D40700-070D07F7-07F90830-083E085E0964096509700AF00DF40E4F0E5A0E5B0F04-0F120F140F3A-0F3D0F850FD0-0FD40FD90FDA104A-104F10FB1360-13681400166D166E169B169C16EB-16ED1735173617D4-17D617D8-17DA1800-180A194419451A1E1A1F1AA0-1AA61AA8-1AAD1B5A-1B601BFC-1BFF1C3B-1C3F1C7E1C7F1CC0-1CC71CD32010-20272030-20432045-20512053-205E207D207E208D208E2329232A2768-277527C527C627E6-27EF2983-299829D8-29DB29FC29FD2CF9-2CFC2CFE2CFF2D702E00-2E2E2E30-2E3B3001-30033008-30113014-301F3030303D30A030FBA4FEA4FFA60D-A60FA673A67EA6F2-A6F7A874-A877A8CEA8CFA8F8-A8FAA92EA92FA95FA9C1-A9CDA9DEA9DFAA5C-AA5FAADEAADFAAF0AAF1ABEBFD3EFD3FFE10-FE19FE30-FE52FE54-FE61FE63FE68FE6AFE6BFF01-FF03FF05-FF0AFF0C-FF0FFF1AFF1BFF1FFF20FF3B-FF3DFF3FFF5BFF5DFF5F-FF65",Pd:"002D058A05BE140018062010-20152E172E1A2E3A2E3B301C303030A0FE31FE32FE58FE63FF0D",Ps:"0028005B007B0F3A0F3C169B201A201E2045207D208D23292768276A276C276E27702772277427C527E627E827EA27EC27EE2983298529872989298B298D298F299129932995299729D829DA29FC2E222E242E262E283008300A300C300E3010301430163018301A301DFD3EFE17FE35FE37FE39FE3BFE3DFE3FFE41FE43FE47FE59FE5BFE5DFF08FF3BFF5BFF5FFF62",Pe:"0029005D007D0F3B0F3D169C2046207E208E232A2769276B276D276F27712773277527C627E727E927EB27ED27EF298429862988298A298C298E2990299229942996299829D929DB29FD2E232E252E272E293009300B300D300F3011301530173019301B301E301FFD3FFE18FE36FE38FE3AFE3CFE3EFE40FE42FE44FE48FE5AFE5CFE5EFF09FF3DFF5DFF60FF63",Pi:"00AB2018201B201C201F20392E022E042E092E0C2E1C2E20",Pf:"00BB2019201D203A2E032E052E0A2E0D2E1D2E21",Pc:"005F203F20402054FE33FE34FE4D-FE4FFF3F",Po:"0021-00230025-0027002A002C002E002F003A003B003F0040005C00A100A700B600B700BF037E0387055A-055F058905C005C305C605F305F40609060A060C060D061B061E061F066A-066D06D40700-070D07F7-07F90830-083E085E0964096509700AF00DF40E4F0E5A0E5B0F04-0F120F140F850FD0-0FD40FD90FDA104A-104F10FB1360-1368166D166E16EB-16ED1735173617D4-17D617D8-17DA1800-18051807-180A194419451A1E1A1F1AA0-1AA61AA8-1AAD1B5A-1B601BFC-1BFF1C3B-1C3F1C7E1C7F1CC0-1CC71CD3201620172020-20272030-2038203B-203E2041-20432047-205120532055-205E2CF9-2CFC2CFE2CFF2D702E002E012E06-2E082E0B2E0E-2E162E182E192E1B2E1E2E1F2E2A-2E2E2E30-2E393001-3003303D30FBA4FEA4FFA60D-A60FA673A67EA6F2-A6F7A874-A877A8CEA8CFA8F8-A8FAA92EA92FA95FA9C1-A9CDA9DEA9DFAA5C-AA5FAADEAADFAAF0AAF1ABEBFE10-FE16FE19FE30FE45FE46FE49-FE4CFE50-FE52FE54-FE57FE5F-FE61FE68FE6AFE6BFF01-FF03FF05-FF07FF0AFF0CFF0EFF0FFF1AFF1BFF1FFF20FF3CFF61FF64FF65",S:"0024002B003C-003E005E0060007C007E00A2-00A600A800A900AC00AE-00B100B400B800D700F702C2-02C502D2-02DF02E5-02EB02ED02EF-02FF03750384038503F60482058F0606-0608060B060E060F06DE06E906FD06FE07F609F209F309FA09FB0AF10B700BF3-0BFA0C7F0D790E3F0F01-0F030F130F15-0F170F1A-0F1F0F340F360F380FBE-0FC50FC7-0FCC0FCE0FCF0FD5-0FD8109E109F1390-139917DB194019DE-19FF1B61-1B6A1B74-1B7C1FBD1FBF-1FC11FCD-1FCF1FDD-1FDF1FED-1FEF1FFD1FFE20442052207A-207C208A-208C20A0-20B9210021012103-21062108210921142116-2118211E-2123212521272129212E213A213B2140-2144214A-214D214F2190-2328232B-23F32400-24262440-244A249C-24E92500-26FF2701-27672794-27C427C7-27E527F0-29822999-29D729DC-29FB29FE-2B4C2B50-2B592CE5-2CEA2E80-2E992E9B-2EF32F00-2FD52FF0-2FFB300430123013302030363037303E303F309B309C319031913196-319F31C0-31E33200-321E322A-324732503260-327F328A-32B032C0-32FE3300-33FF4DC0-4DFFA490-A4C6A700-A716A720A721A789A78AA828-A82BA836-A839AA77-AA79FB29FBB2-FBC1FDFCFDFDFE62FE64-FE66FE69FF04FF0BFF1C-FF1EFF3EFF40FF5CFF5EFFE0-FFE6FFE8-FFEEFFFCFFFD",Sm:"002B003C-003E007C007E00AC00B100D700F703F60606-060820442052207A-207C208A-208C21182140-2144214B2190-2194219A219B21A021A321A621AE21CE21CF21D221D421F4-22FF2308-230B23202321237C239B-23B323DC-23E125B725C125F8-25FF266F27C0-27C427C7-27E527F0-27FF2900-29822999-29D729DC-29FB29FE-2AFF2B30-2B442B47-2B4CFB29FE62FE64-FE66FF0BFF1C-FF1EFF5CFF5EFFE2FFE9-FFEC",Sc:"002400A2-00A5058F060B09F209F309FB0AF10BF90E3F17DB20A0-20B9A838FDFCFE69FF04FFE0FFE1FFE5FFE6",Sk:"005E006000A800AF00B400B802C2-02C502D2-02DF02E5-02EB02ED02EF-02FF0375038403851FBD1FBF-1FC11FCD-1FCF1FDD-1FDF1FED-1FEF1FFD1FFE309B309CA700-A716A720A721A789A78AFBB2-FBC1FF3EFF40FFE3",So:"00A600A900AE00B00482060E060F06DE06E906FD06FE07F609FA0B700BF3-0BF80BFA0C7F0D790F01-0F030F130F15-0F170F1A-0F1F0F340F360F380FBE-0FC50FC7-0FCC0FCE0FCF0FD5-0FD8109E109F1390-1399194019DE-19FF1B61-1B6A1B74-1B7C210021012103-210621082109211421162117211E-2123212521272129212E213A213B214A214C214D214F2195-2199219C-219F21A121A221A421A521A7-21AD21AF-21CD21D021D121D321D5-21F32300-2307230C-231F2322-2328232B-237B237D-239A23B4-23DB23E2-23F32400-24262440-244A249C-24E92500-25B625B8-25C025C2-25F72600-266E2670-26FF2701-27672794-27BF2800-28FF2B00-2B2F2B452B462B50-2B592CE5-2CEA2E80-2E992E9B-2EF32F00-2FD52FF0-2FFB300430123013302030363037303E303F319031913196-319F31C0-31E33200-321E322A-324732503260-327F328A-32B032C0-32FE3300-33FF4DC0-4DFFA490-A4C6A828-A82BA836A837A839AA77-AA79FDFDFFE4FFE8FFEDFFEEFFFCFFFD",Z:"002000A01680180E2000-200A20282029202F205F3000",Zs:"002000A01680180E2000-200A202F205F3000",Zl:"2028",Zp:"2029",C:"0000-001F007F-009F00AD03780379037F-0383038B038D03A20528-05300557055805600588058B-058E059005C8-05CF05EB-05EF05F5-0605061C061D06DD070E070F074B074C07B2-07BF07FB-07FF082E082F083F085C085D085F-089F08A108AD-08E308FF097809800984098D098E0991099209A909B109B3-09B509BA09BB09C509C609C909CA09CF-09D609D8-09DB09DE09E409E509FC-0A000A040A0B-0A0E0A110A120A290A310A340A370A3A0A3B0A3D0A43-0A460A490A4A0A4E-0A500A52-0A580A5D0A5F-0A650A76-0A800A840A8E0A920AA90AB10AB40ABA0ABB0AC60ACA0ACE0ACF0AD1-0ADF0AE40AE50AF2-0B000B040B0D0B0E0B110B120B290B310B340B3A0B3B0B450B460B490B4A0B4E-0B550B58-0B5B0B5E0B640B650B78-0B810B840B8B-0B8D0B910B96-0B980B9B0B9D0BA0-0BA20BA5-0BA70BAB-0BAD0BBA-0BBD0BC3-0BC50BC90BCE0BCF0BD1-0BD60BD8-0BE50BFB-0C000C040C0D0C110C290C340C3A-0C3C0C450C490C4E-0C540C570C5A-0C5F0C640C650C70-0C770C800C810C840C8D0C910CA90CB40CBA0CBB0CC50CC90CCE-0CD40CD7-0CDD0CDF0CE40CE50CF00CF3-0D010D040D0D0D110D3B0D3C0D450D490D4F-0D560D58-0D5F0D640D650D76-0D780D800D810D840D97-0D990DB20DBC0DBE0DBF0DC7-0DC90DCB-0DCE0DD50DD70DE0-0DF10DF5-0E000E3B-0E3E0E5C-0E800E830E850E860E890E8B0E8C0E8E-0E930E980EA00EA40EA60EA80EA90EAC0EBA0EBE0EBF0EC50EC70ECE0ECF0EDA0EDB0EE0-0EFF0F480F6D-0F700F980FBD0FCD0FDB-0FFF10C610C8-10CC10CE10CF1249124E124F12571259125E125F1289128E128F12B112B612B712BF12C112C612C712D7131113161317135B135C137D-137F139A-139F13F5-13FF169D-169F16F1-16FF170D1715-171F1737-173F1754-175F176D17711774-177F17DE17DF17EA-17EF17FA-17FF180F181A-181F1878-187F18AB-18AF18F6-18FF191D-191F192C-192F193C-193F1941-1943196E196F1975-197F19AC-19AF19CA-19CF19DB-19DD1A1C1A1D1A5F1A7D1A7E1A8A-1A8F1A9A-1A9F1AAE-1AFF1B4C-1B4F1B7D-1B7F1BF4-1BFB1C38-1C3A1C4A-1C4C1C80-1CBF1CC8-1CCF1CF7-1CFF1DE7-1DFB1F161F171F1E1F1F1F461F471F4E1F4F1F581F5A1F5C1F5E1F7E1F7F1FB51FC51FD41FD51FDC1FF01FF11FF51FFF200B-200F202A-202E2060-206F20722073208F209D-209F20BA-20CF20F1-20FF218A-218F23F4-23FF2427-243F244B-245F27002B4D-2B4F2B5A-2BFF2C2F2C5F2CF4-2CF82D262D28-2D2C2D2E2D2F2D68-2D6E2D71-2D7E2D97-2D9F2DA72DAF2DB72DBF2DC72DCF2DD72DDF2E3C-2E7F2E9A2EF4-2EFF2FD6-2FEF2FFC-2FFF3040309730983100-3104312E-3130318F31BB-31BF31E4-31EF321F32FF4DB6-4DBF9FCD-9FFFA48D-A48FA4C7-A4CFA62C-A63FA698-A69EA6F8-A6FFA78FA794-A79FA7AB-A7F7A82C-A82FA83A-A83FA878-A87FA8C5-A8CDA8DA-A8DFA8FC-A8FFA954-A95EA97D-A97FA9CEA9DA-A9DDA9E0-A9FFAA37-AA3FAA4EAA4FAA5AAA5BAA7C-AA7FAAC3-AADAAAF7-AB00AB07AB08AB0FAB10AB17-AB1FAB27AB2F-ABBFABEEABEFABFA-ABFFD7A4-D7AFD7C7-D7CAD7FC-F8FFFA6EFA6FFADA-FAFFFB07-FB12FB18-FB1CFB37FB3DFB3FFB42FB45FBC2-FBD2FD40-FD4FFD90FD91FDC8-FDEFFDFEFDFFFE1A-FE1FFE27-FE2FFE53FE67FE6C-FE6FFE75FEFD-FF00FFBF-FFC1FFC8FFC9FFD0FFD1FFD8FFD9FFDD-FFDFFFE7FFEF-FFFBFFFEFFFF",Cc:"0000-001F007F-009F",Cf:"00AD0600-060406DD070F200B-200F202A-202E2060-2064206A-206FFEFFFFF9-FFFB",Co:"E000-F8FF",Cs:"D800-DFFF",Cn:"03780379037F-0383038B038D03A20528-05300557055805600588058B-058E059005C8-05CF05EB-05EF05F5-05FF0605061C061D070E074B074C07B2-07BF07FB-07FF082E082F083F085C085D085F-089F08A108AD-08E308FF097809800984098D098E0991099209A909B109B3-09B509BA09BB09C509C609C909CA09CF-09D609D8-09DB09DE09E409E509FC-0A000A040A0B-0A0E0A110A120A290A310A340A370A3A0A3B0A3D0A43-0A460A490A4A0A4E-0A500A52-0A580A5D0A5F-0A650A76-0A800A840A8E0A920AA90AB10AB40ABA0ABB0AC60ACA0ACE0ACF0AD1-0ADF0AE40AE50AF2-0B000B040B0D0B0E0B110B120B290B310B340B3A0B3B0B450B460B490B4A0B4E-0B550B58-0B5B0B5E0B640B650B78-0B810B840B8B-0B8D0B910B96-0B980B9B0B9D0BA0-0BA20BA5-0BA70BAB-0BAD0BBA-0BBD0BC3-0BC50BC90BCE0BCF0BD1-0BD60BD8-0BE50BFB-0C000C040C0D0C110C290C340C3A-0C3C0C450C490C4E-0C540C570C5A-0C5F0C640C650C70-0C770C800C810C840C8D0C910CA90CB40CBA0CBB0CC50CC90CCE-0CD40CD7-0CDD0CDF0CE40CE50CF00CF3-0D010D040D0D0D110D3B0D3C0D450D490D4F-0D560D58-0D5F0D640D650D76-0D780D800D810D840D97-0D990DB20DBC0DBE0DBF0DC7-0DC90DCB-0DCE0DD50DD70DE0-0DF10DF5-0E000E3B-0E3E0E5C-0E800E830E850E860E890E8B0E8C0E8E-0E930E980EA00EA40EA60EA80EA90EAC0EBA0EBE0EBF0EC50EC70ECE0ECF0EDA0EDB0EE0-0EFF0F480F6D-0F700F980FBD0FCD0FDB-0FFF10C610C8-10CC10CE10CF1249124E124F12571259125E125F1289128E128F12B112B612B712BF12C112C612C712D7131113161317135B135C137D-137F139A-139F13F5-13FF169D-169F16F1-16FF170D1715-171F1737-173F1754-175F176D17711774-177F17DE17DF17EA-17EF17FA-17FF180F181A-181F1878-187F18AB-18AF18F6-18FF191D-191F192C-192F193C-193F1941-1943196E196F1975-197F19AC-19AF19CA-19CF19DB-19DD1A1C1A1D1A5F1A7D1A7E1A8A-1A8F1A9A-1A9F1AAE-1AFF1B4C-1B4F1B7D-1B7F1BF4-1BFB1C38-1C3A1C4A-1C4C1C80-1CBF1CC8-1CCF1CF7-1CFF1DE7-1DFB1F161F171F1E1F1F1F461F471F4E1F4F1F581F5A1F5C1F5E1F7E1F7F1FB51FC51FD41FD51FDC1FF01FF11FF51FFF2065-206920722073208F209D-209F20BA-20CF20F1-20FF218A-218F23F4-23FF2427-243F244B-245F27002B4D-2B4F2B5A-2BFF2C2F2C5F2CF4-2CF82D262D28-2D2C2D2E2D2F2D68-2D6E2D71-2D7E2D97-2D9F2DA72DAF2DB72DBF2DC72DCF2DD72DDF2E3C-2E7F2E9A2EF4-2EFF2FD6-2FEF2FFC-2FFF3040309730983100-3104312E-3130318F31BB-31BF31E4-31EF321F32FF4DB6-4DBF9FCD-9FFFA48D-A48FA4C7-A4CFA62C-A63FA698-A69EA6F8-A6FFA78FA794-A79FA7AB-A7F7A82C-A82FA83A-A83FA878-A87FA8C5-A8CDA8DA-A8DFA8FC-A8FFA954-A95EA97D-A97FA9CEA9DA-A9DDA9E0-A9FFAA37-AA3FAA4EAA4FAA5AAA5BAA7C-AA7FAAC3-AADAAAF7-AB00AB07AB08AB0FAB10AB17-AB1FAB27AB2F-ABBFABEEABEFABFA-ABFFD7A4-D7AFD7C7-D7CAD7FC-D7FFFA6EFA6FFADA-FAFFFB07-FB12FB18-FB1CFB37FB3DFB3FFB42FB45FBC2-FBD2FD40-FD4FFD90FD91FDC8-FDEFFDFEFDFFFE1A-FE1FFE27-FE2FFE53FE67FE6C-FE6FFE75FEFDFEFEFF00FFBF-FFC1FFC8FFC9FFD0FFD1FFD8FFD9FFDD-FFDFFFE7FFEF-FFF8FFFEFFFF"},{Ll:"Lowercase_Letter",Lu:"Uppercase_Letter",Lt:"Titlecase_Letter",Lm:"Modifier_Letter",Lo:"Other_Letter",M:"Mark",Mn:"Nonspacing_Mark",Mc:"Spacing_Mark",Me:"Enclosing_Mark",N:"Number",Nd:"Decimal_Number",Nl:"Letter_Number",No:"Other_Number",P:"Punctuation",Pd:"Dash_Punctuation",Ps:"Open_Punctuation",Pe:"Close_Punctuation",Pi:"Initial_Punctuation",Pf:"Final_Punctuation",Pc:"Connector_Punctuation",Po:"Other_Punctuation",S:"Symbol",Sm:"Math_Symbol",Sc:"Currency_Symbol",Sk:"Modifier_Symbol",So:"Other_Symbol",Z:"Separator",Zs:"Space_Separator",Zl:"Line_Separator",Zp:"Paragraph_Separator",C:"Other",Cc:"Control",Cf:"Format",Co:"Private_Use",Cs:"Surrogate",Cn:"Unassigned"})})(XRegExp);
(function(n){"use strict";if(!n.addUnicodePackage)throw new ReferenceError("Unicode Base must be loaded before Unicode Scripts");n.install("extensibility"),n.addUnicodePackage({Arabic:"0600-06040606-060B060D-061A061E0620-063F0641-064A0656-065E066A-066F0671-06DC06DE-06FF0750-077F08A008A2-08AC08E4-08FEFB50-FBC1FBD3-FD3DFD50-FD8FFD92-FDC7FDF0-FDFCFE70-FE74FE76-FEFC",Armenian:"0531-05560559-055F0561-0587058A058FFB13-FB17",Balinese:"1B00-1B4B1B50-1B7C",Bamum:"A6A0-A6F7",Batak:"1BC0-1BF31BFC-1BFF",Bengali:"0981-09830985-098C098F09900993-09A809AA-09B009B209B6-09B909BC-09C409C709C809CB-09CE09D709DC09DD09DF-09E309E6-09FB",Bopomofo:"02EA02EB3105-312D31A0-31BA",Braille:"2800-28FF",Buginese:"1A00-1A1B1A1E1A1F",Buhid:"1740-1753",Canadian_Aboriginal:"1400-167F18B0-18F5",Cham:"AA00-AA36AA40-AA4DAA50-AA59AA5C-AA5F",Cherokee:"13A0-13F4",Common:"0000-0040005B-0060007B-00A900AB-00B900BB-00BF00D700F702B9-02DF02E5-02E902EC-02FF0374037E038503870589060C061B061F06400660-066906DD096409650E3F0FD5-0FD810FB16EB-16ED173517361802180318051CD31CE11CE9-1CEC1CEE-1CF31CF51CF62000-200B200E-2064206A-20702074-207E2080-208E20A0-20B92100-21252127-2129212C-21312133-214D214F-215F21892190-23F32400-24262440-244A2460-26FF2701-27FF2900-2B4C2B50-2B592E00-2E3B2FF0-2FFB3000-300430063008-30203030-3037303C-303F309B309C30A030FB30FC3190-319F31C0-31E33220-325F327F-32CF3358-33FF4DC0-4DFFA700-A721A788-A78AA830-A839FD3EFD3FFDFDFE10-FE19FE30-FE52FE54-FE66FE68-FE6BFEFFFF01-FF20FF3B-FF40FF5B-FF65FF70FF9EFF9FFFE0-FFE6FFE8-FFEEFFF9-FFFD",Coptic:"03E2-03EF2C80-2CF32CF9-2CFF",Cyrillic:"0400-04840487-05271D2B1D782DE0-2DFFA640-A697A69F",Devanagari:"0900-09500953-09630966-09770979-097FA8E0-A8FB",Ethiopic:"1200-1248124A-124D1250-12561258125A-125D1260-1288128A-128D1290-12B012B2-12B512B8-12BE12C012C2-12C512C8-12D612D8-13101312-13151318-135A135D-137C1380-13992D80-2D962DA0-2DA62DA8-2DAE2DB0-2DB62DB8-2DBE2DC0-2DC62DC8-2DCE2DD0-2DD62DD8-2DDEAB01-AB06AB09-AB0EAB11-AB16AB20-AB26AB28-AB2E",Georgian:"10A0-10C510C710CD10D0-10FA10FC-10FF2D00-2D252D272D2D",Glagolitic:"2C00-2C2E2C30-2C5E",Greek:"0370-03730375-0377037A-037D038403860388-038A038C038E-03A103A3-03E103F0-03FF1D26-1D2A1D5D-1D611D66-1D6A1DBF1F00-1F151F18-1F1D1F20-1F451F48-1F4D1F50-1F571F591F5B1F5D1F5F-1F7D1F80-1FB41FB6-1FC41FC6-1FD31FD6-1FDB1FDD-1FEF1FF2-1FF41FF6-1FFE2126",Gujarati:"0A81-0A830A85-0A8D0A8F-0A910A93-0AA80AAA-0AB00AB20AB30AB5-0AB90ABC-0AC50AC7-0AC90ACB-0ACD0AD00AE0-0AE30AE6-0AF1",Gurmukhi:"0A01-0A030A05-0A0A0A0F0A100A13-0A280A2A-0A300A320A330A350A360A380A390A3C0A3E-0A420A470A480A4B-0A4D0A510A59-0A5C0A5E0A66-0A75",Han:"2E80-2E992E9B-2EF32F00-2FD5300530073021-30293038-303B3400-4DB54E00-9FCCF900-FA6DFA70-FAD9",Hangul:"1100-11FF302E302F3131-318E3200-321E3260-327EA960-A97CAC00-D7A3D7B0-D7C6D7CB-D7FBFFA0-FFBEFFC2-FFC7FFCA-FFCFFFD2-FFD7FFDA-FFDC",Hanunoo:"1720-1734",Hebrew:"0591-05C705D0-05EA05F0-05F4FB1D-FB36FB38-FB3CFB3EFB40FB41FB43FB44FB46-FB4F",Hiragana:"3041-3096309D-309F",Inherited:"0300-036F04850486064B-0655065F0670095109521CD0-1CD21CD4-1CE01CE2-1CE81CED1CF41DC0-1DE61DFC-1DFF200C200D20D0-20F0302A-302D3099309AFE00-FE0FFE20-FE26",Javanese:"A980-A9CDA9CF-A9D9A9DEA9DF",Kannada:"0C820C830C85-0C8C0C8E-0C900C92-0CA80CAA-0CB30CB5-0CB90CBC-0CC40CC6-0CC80CCA-0CCD0CD50CD60CDE0CE0-0CE30CE6-0CEF0CF10CF2",Katakana:"30A1-30FA30FD-30FF31F0-31FF32D0-32FE3300-3357FF66-FF6FFF71-FF9D",Kayah_Li:"A900-A92F",Khmer:"1780-17DD17E0-17E917F0-17F919E0-19FF",Lao:"0E810E820E840E870E880E8A0E8D0E94-0E970E99-0E9F0EA1-0EA30EA50EA70EAA0EAB0EAD-0EB90EBB-0EBD0EC0-0EC40EC60EC8-0ECD0ED0-0ED90EDC-0EDF",Latin:"0041-005A0061-007A00AA00BA00C0-00D600D8-00F600F8-02B802E0-02E41D00-1D251D2C-1D5C1D62-1D651D6B-1D771D79-1DBE1E00-1EFF2071207F2090-209C212A212B2132214E2160-21882C60-2C7FA722-A787A78B-A78EA790-A793A7A0-A7AAA7F8-A7FFFB00-FB06FF21-FF3AFF41-FF5A",Lepcha:"1C00-1C371C3B-1C491C4D-1C4F",Limbu:"1900-191C1920-192B1930-193B19401944-194F",Lisu:"A4D0-A4FF",Malayalam:"0D020D030D05-0D0C0D0E-0D100D12-0D3A0D3D-0D440D46-0D480D4A-0D4E0D570D60-0D630D66-0D750D79-0D7F",Mandaic:"0840-085B085E",Meetei_Mayek:"AAE0-AAF6ABC0-ABEDABF0-ABF9",Mongolian:"1800180118041806-180E1810-18191820-18771880-18AA",Myanmar:"1000-109FAA60-AA7B",New_Tai_Lue:"1980-19AB19B0-19C919D0-19DA19DE19DF",Nko:"07C0-07FA",Ogham:"1680-169C",Ol_Chiki:"1C50-1C7F",Oriya:"0B01-0B030B05-0B0C0B0F0B100B13-0B280B2A-0B300B320B330B35-0B390B3C-0B440B470B480B4B-0B4D0B560B570B5C0B5D0B5F-0B630B66-0B77",Phags_Pa:"A840-A877",Rejang:"A930-A953A95F",Runic:"16A0-16EA16EE-16F0",Samaritan:"0800-082D0830-083E",Saurashtra:"A880-A8C4A8CE-A8D9",Sinhala:"0D820D830D85-0D960D9A-0DB10DB3-0DBB0DBD0DC0-0DC60DCA0DCF-0DD40DD60DD8-0DDF0DF2-0DF4",Sundanese:"1B80-1BBF1CC0-1CC7",Syloti_Nagri:"A800-A82B",Syriac:"0700-070D070F-074A074D-074F",Tagalog:"1700-170C170E-1714",Tagbanwa:"1760-176C176E-177017721773",Tai_Le:"1950-196D1970-1974",Tai_Tham:"1A20-1A5E1A60-1A7C1A7F-1A891A90-1A991AA0-1AAD",Tai_Viet:"AA80-AAC2AADB-AADF",Tamil:"0B820B830B85-0B8A0B8E-0B900B92-0B950B990B9A0B9C0B9E0B9F0BA30BA40BA8-0BAA0BAE-0BB90BBE-0BC20BC6-0BC80BCA-0BCD0BD00BD70BE6-0BFA",Telugu:"0C01-0C030C05-0C0C0C0E-0C100C12-0C280C2A-0C330C35-0C390C3D-0C440C46-0C480C4A-0C4D0C550C560C580C590C60-0C630C66-0C6F0C78-0C7F",Thaana:"0780-07B1",Thai:"0E01-0E3A0E40-0E5B",Tibetan:"0F00-0F470F49-0F6C0F71-0F970F99-0FBC0FBE-0FCC0FCE-0FD40FD90FDA",Tifinagh:"2D30-2D672D6F2D702D7F",Vai:"A500-A62B",Yi:"A000-A48CA490-A4C6"})})(XRegExp);
(function(n){"use strict";if(!n.addUnicodePackage)throw new ReferenceError("Unicode Base must be loaded before Unicode Blocks");n.install("extensibility"),n.addUnicodePackage({InBasic_Latin:"0000-007F",InLatin_1_Supplement:"0080-00FF",InLatin_Extended_A:"0100-017F",InLatin_Extended_B:"0180-024F",InIPA_Extensions:"0250-02AF",InSpacing_Modifier_Letters:"02B0-02FF",InCombining_Diacritical_Marks:"0300-036F",InGreek_and_Coptic:"0370-03FF",InCyrillic:"0400-04FF",InCyrillic_Supplement:"0500-052F",InArmenian:"0530-058F",InHebrew:"0590-05FF",InArabic:"0600-06FF",InSyriac:"0700-074F",InArabic_Supplement:"0750-077F",InThaana:"0780-07BF",InNKo:"07C0-07FF",InSamaritan:"0800-083F",InMandaic:"0840-085F",InArabic_Extended_A:"08A0-08FF",InDevanagari:"0900-097F",InBengali:"0980-09FF",InGurmukhi:"0A00-0A7F",InGujarati:"0A80-0AFF",InOriya:"0B00-0B7F",InTamil:"0B80-0BFF",InTelugu:"0C00-0C7F",InKannada:"0C80-0CFF",InMalayalam:"0D00-0D7F",InSinhala:"0D80-0DFF",InThai:"0E00-0E7F",InLao:"0E80-0EFF",InTibetan:"0F00-0FFF",InMyanmar:"1000-109F",InGeorgian:"10A0-10FF",InHangul_Jamo:"1100-11FF",InEthiopic:"1200-137F",InEthiopic_Supplement:"1380-139F",InCherokee:"13A0-13FF",InUnified_Canadian_Aboriginal_Syllabics:"1400-167F",InOgham:"1680-169F",InRunic:"16A0-16FF",InTagalog:"1700-171F",InHanunoo:"1720-173F",InBuhid:"1740-175F",InTagbanwa:"1760-177F",InKhmer:"1780-17FF",InMongolian:"1800-18AF",InUnified_Canadian_Aboriginal_Syllabics_Extended:"18B0-18FF",InLimbu:"1900-194F",InTai_Le:"1950-197F",InNew_Tai_Lue:"1980-19DF",InKhmer_Symbols:"19E0-19FF",InBuginese:"1A00-1A1F",InTai_Tham:"1A20-1AAF",InBalinese:"1B00-1B7F",InSundanese:"1B80-1BBF",InBatak:"1BC0-1BFF",InLepcha:"1C00-1C4F",InOl_Chiki:"1C50-1C7F",InSundanese_Supplement:"1CC0-1CCF",InVedic_Extensions:"1CD0-1CFF",InPhonetic_Extensions:"1D00-1D7F",InPhonetic_Extensions_Supplement:"1D80-1DBF",InCombining_Diacritical_Marks_Supplement:"1DC0-1DFF",InLatin_Extended_Additional:"1E00-1EFF",InGreek_Extended:"1F00-1FFF",InGeneral_Punctuation:"2000-206F",InSuperscripts_and_Subscripts:"2070-209F",InCurrency_Symbols:"20A0-20CF",InCombining_Diacritical_Marks_for_Symbols:"20D0-20FF",InLetterlike_Symbols:"2100-214F",InNumber_Forms:"2150-218F",InArrows:"2190-21FF",InMathematical_Operators:"2200-22FF",InMiscellaneous_Technical:"2300-23FF",InControl_Pictures:"2400-243F",InOptical_Character_Recognition:"2440-245F",InEnclosed_Alphanumerics:"2460-24FF",InBox_Drawing:"2500-257F",InBlock_Elements:"2580-259F",InGeometric_Shapes:"25A0-25FF",InMiscellaneous_Symbols:"2600-26FF",InDingbats:"2700-27BF",InMiscellaneous_Mathematical_Symbols_A:"27C0-27EF",InSupplemental_Arrows_A:"27F0-27FF",InBraille_Patterns:"2800-28FF",InSupplemental_Arrows_B:"2900-297F",InMiscellaneous_Mathematical_Symbols_B:"2980-29FF",InSupplemental_Mathematical_Operators:"2A00-2AFF",InMiscellaneous_Symbols_and_Arrows:"2B00-2BFF",InGlagolitic:"2C00-2C5F",InLatin_Extended_C:"2C60-2C7F",InCoptic:"2C80-2CFF",InGeorgian_Supplement:"2D00-2D2F",InTifinagh:"2D30-2D7F",InEthiopic_Extended:"2D80-2DDF",InCyrillic_Extended_A:"2DE0-2DFF",InSupplemental_Punctuation:"2E00-2E7F",InCJK_Radicals_Supplement:"2E80-2EFF",InKangxi_Radicals:"2F00-2FDF",InIdeographic_Description_Characters:"2FF0-2FFF",InCJK_Symbols_and_Punctuation:"3000-303F",InHiragana:"3040-309F",InKatakana:"30A0-30FF",InBopomofo:"3100-312F",InHangul_Compatibility_Jamo:"3130-318F",InKanbun:"3190-319F",InBopomofo_Extended:"31A0-31BF",InCJK_Strokes:"31C0-31EF",InKatakana_Phonetic_Extensions:"31F0-31FF",InEnclosed_CJK_Letters_and_Months:"3200-32FF",InCJK_Compatibility:"3300-33FF",InCJK_Unified_Ideographs_Extension_A:"3400-4DBF",InYijing_Hexagram_Symbols:"4DC0-4DFF",InCJK_Unified_Ideographs:"4E00-9FFF",InYi_Syllables:"A000-A48F",InYi_Radicals:"A490-A4CF",InLisu:"A4D0-A4FF",InVai:"A500-A63F",InCyrillic_Extended_B:"A640-A69F",InBamum:"A6A0-A6FF",InModifier_Tone_Letters:"A700-A71F",InLatin_Extended_D:"A720-A7FF",InSyloti_Nagri:"A800-A82F",InCommon_Indic_Number_Forms:"A830-A83F",InPhags_pa:"A840-A87F",InSaurashtra:"A880-A8DF",InDevanagari_Extended:"A8E0-A8FF",InKayah_Li:"A900-A92F",InRejang:"A930-A95F",InHangul_Jamo_Extended_A:"A960-A97F",InJavanese:"A980-A9DF",InCham:"AA00-AA5F",InMyanmar_Extended_A:"AA60-AA7F",InTai_Viet:"AA80-AADF",InMeetei_Mayek_Extensions:"AAE0-AAFF",InEthiopic_Extended_A:"AB00-AB2F",InMeetei_Mayek:"ABC0-ABFF",InHangul_Syllables:"AC00-D7AF",InHangul_Jamo_Extended_B:"D7B0-D7FF",InHigh_Surrogates:"D800-DB7F",InHigh_Private_Use_Surrogates:"DB80-DBFF",InLow_Surrogates:"DC00-DFFF",InPrivate_Use_Area:"E000-F8FF",InCJK_Compatibility_Ideographs:"F900-FAFF",InAlphabetic_Presentation_Forms:"FB00-FB4F",InArabic_Presentation_Forms_A:"FB50-FDFF",InVariation_Selectors:"FE00-FE0F",InVertical_Forms:"FE10-FE1F",InCombining_Half_Marks:"FE20-FE2F",InCJK_Compatibility_Forms:"FE30-FE4F",InSmall_Form_Variants:"FE50-FE6F",InArabic_Presentation_Forms_B:"FE70-FEFF",InHalfwidth_and_Fullwidth_Forms:"FF00-FFEF",InSpecials:"FFF0-FFFF"})})(XRegExp);
(function(n){"use strict";if(!n.addUnicodePackage)throw new ReferenceError("Unicode Base must be loaded before Unicode Properties");n.install("extensibility"),n.addUnicodePackage({Alphabetic:"0041-005A0061-007A00AA00B500BA00C0-00D600D8-00F600F8-02C102C6-02D102E0-02E402EC02EE03450370-037403760377037A-037D03860388-038A038C038E-03A103A3-03F503F7-0481048A-05270531-055605590561-058705B0-05BD05BF05C105C205C405C505C705D0-05EA05F0-05F20610-061A0620-06570659-065F066E-06D306D5-06DC06E1-06E806ED-06EF06FA-06FC06FF0710-073F074D-07B107CA-07EA07F407F507FA0800-0817081A-082C0840-085808A008A2-08AC08E4-08E908F0-08FE0900-093B093D-094C094E-09500955-09630971-09770979-097F0981-09830985-098C098F09900993-09A809AA-09B009B209B6-09B909BD-09C409C709C809CB09CC09CE09D709DC09DD09DF-09E309F009F10A01-0A030A05-0A0A0A0F0A100A13-0A280A2A-0A300A320A330A350A360A380A390A3E-0A420A470A480A4B0A4C0A510A59-0A5C0A5E0A70-0A750A81-0A830A85-0A8D0A8F-0A910A93-0AA80AAA-0AB00AB20AB30AB5-0AB90ABD-0AC50AC7-0AC90ACB0ACC0AD00AE0-0AE30B01-0B030B05-0B0C0B0F0B100B13-0B280B2A-0B300B320B330B35-0B390B3D-0B440B470B480B4B0B4C0B560B570B5C0B5D0B5F-0B630B710B820B830B85-0B8A0B8E-0B900B92-0B950B990B9A0B9C0B9E0B9F0BA30BA40BA8-0BAA0BAE-0BB90BBE-0BC20BC6-0BC80BCA-0BCC0BD00BD70C01-0C030C05-0C0C0C0E-0C100C12-0C280C2A-0C330C35-0C390C3D-0C440C46-0C480C4A-0C4C0C550C560C580C590C60-0C630C820C830C85-0C8C0C8E-0C900C92-0CA80CAA-0CB30CB5-0CB90CBD-0CC40CC6-0CC80CCA-0CCC0CD50CD60CDE0CE0-0CE30CF10CF20D020D030D05-0D0C0D0E-0D100D12-0D3A0D3D-0D440D46-0D480D4A-0D4C0D4E0D570D60-0D630D7A-0D7F0D820D830D85-0D960D9A-0DB10DB3-0DBB0DBD0DC0-0DC60DCF-0DD40DD60DD8-0DDF0DF20DF30E01-0E3A0E40-0E460E4D0E810E820E840E870E880E8A0E8D0E94-0E970E99-0E9F0EA1-0EA30EA50EA70EAA0EAB0EAD-0EB90EBB-0EBD0EC0-0EC40EC60ECD0EDC-0EDF0F000F40-0F470F49-0F6C0F71-0F810F88-0F970F99-0FBC1000-10361038103B-103F1050-10621065-1068106E-1086108E109C109D10A0-10C510C710CD10D0-10FA10FC-1248124A-124D1250-12561258125A-125D1260-1288128A-128D1290-12B012B2-12B512B8-12BE12C012C2-12C512C8-12D612D8-13101312-13151318-135A135F1380-138F13A0-13F41401-166C166F-167F1681-169A16A0-16EA16EE-16F01700-170C170E-17131720-17331740-17531760-176C176E-1770177217731780-17B317B6-17C817D717DC1820-18771880-18AA18B0-18F51900-191C1920-192B1930-19381950-196D1970-19741980-19AB19B0-19C91A00-1A1B1A20-1A5E1A61-1A741AA71B00-1B331B35-1B431B45-1B4B1B80-1BA91BAC-1BAF1BBA-1BE51BE7-1BF11C00-1C351C4D-1C4F1C5A-1C7D1CE9-1CEC1CEE-1CF31CF51CF61D00-1DBF1E00-1F151F18-1F1D1F20-1F451F48-1F4D1F50-1F571F591F5B1F5D1F5F-1F7D1F80-1FB41FB6-1FBC1FBE1FC2-1FC41FC6-1FCC1FD0-1FD31FD6-1FDB1FE0-1FEC1FF2-1FF41FF6-1FFC2071207F2090-209C21022107210A-211321152119-211D212421262128212A-212D212F-2139213C-213F2145-2149214E2160-218824B6-24E92C00-2C2E2C30-2C5E2C60-2CE42CEB-2CEE2CF22CF32D00-2D252D272D2D2D30-2D672D6F2D80-2D962DA0-2DA62DA8-2DAE2DB0-2DB62DB8-2DBE2DC0-2DC62DC8-2DCE2DD0-2DD62DD8-2DDE2DE0-2DFF2E2F3005-30073021-30293031-30353038-303C3041-3096309D-309F30A1-30FA30FC-30FF3105-312D3131-318E31A0-31BA31F0-31FF3400-4DB54E00-9FCCA000-A48CA4D0-A4FDA500-A60CA610-A61FA62AA62BA640-A66EA674-A67BA67F-A697A69F-A6EFA717-A71FA722-A788A78B-A78EA790-A793A7A0-A7AAA7F8-A801A803-A805A807-A80AA80C-A827A840-A873A880-A8C3A8F2-A8F7A8FBA90A-A92AA930-A952A960-A97CA980-A9B2A9B4-A9BFA9CFAA00-AA36AA40-AA4DAA60-AA76AA7AAA80-AABEAAC0AAC2AADB-AADDAAE0-AAEFAAF2-AAF5AB01-AB06AB09-AB0EAB11-AB16AB20-AB26AB28-AB2EABC0-ABEAAC00-D7A3D7B0-D7C6D7CB-D7FBF900-FA6DFA70-FAD9FB00-FB06FB13-FB17FB1D-FB28FB2A-FB36FB38-FB3CFB3EFB40FB41FB43FB44FB46-FBB1FBD3-FD3DFD50-FD8FFD92-FDC7FDF0-FDFBFE70-FE74FE76-FEFCFF21-FF3AFF41-FF5AFF66-FFBEFFC2-FFC7FFCA-FFCFFFD2-FFD7FFDA-FFDC",Uppercase:"0041-005A00C0-00D600D8-00DE01000102010401060108010A010C010E01100112011401160118011A011C011E01200122012401260128012A012C012E01300132013401360139013B013D013F0141014301450147014A014C014E01500152015401560158015A015C015E01600162016401660168016A016C016E017001720174017601780179017B017D018101820184018601870189-018B018E-0191019301940196-0198019C019D019F01A001A201A401A601A701A901AC01AE01AF01B1-01B301B501B701B801BC01C401C701CA01CD01CF01D101D301D501D701D901DB01DE01E001E201E401E601E801EA01EC01EE01F101F401F6-01F801FA01FC01FE02000202020402060208020A020C020E02100212021402160218021A021C021E02200222022402260228022A022C022E02300232023A023B023D023E02410243-02460248024A024C024E03700372037603860388-038A038C038E038F0391-03A103A3-03AB03CF03D2-03D403D803DA03DC03DE03E003E203E403E603E803EA03EC03EE03F403F703F903FA03FD-042F04600462046404660468046A046C046E04700472047404760478047A047C047E0480048A048C048E04900492049404960498049A049C049E04A004A204A404A604A804AA04AC04AE04B004B204B404B604B804BA04BC04BE04C004C104C304C504C704C904CB04CD04D004D204D404D604D804DA04DC04DE04E004E204E404E604E804EA04EC04EE04F004F204F404F604F804FA04FC04FE05000502050405060508050A050C050E05100512051405160518051A051C051E05200522052405260531-055610A0-10C510C710CD1E001E021E041E061E081E0A1E0C1E0E1E101E121E141E161E181E1A1E1C1E1E1E201E221E241E261E281E2A1E2C1E2E1E301E321E341E361E381E3A1E3C1E3E1E401E421E441E461E481E4A1E4C1E4E1E501E521E541E561E581E5A1E5C1E5E1E601E621E641E661E681E6A1E6C1E6E1E701E721E741E761E781E7A1E7C1E7E1E801E821E841E861E881E8A1E8C1E8E1E901E921E941E9E1EA01EA21EA41EA61EA81EAA1EAC1EAE1EB01EB21EB41EB61EB81EBA1EBC1EBE1EC01EC21EC41EC61EC81ECA1ECC1ECE1ED01ED21ED41ED61ED81EDA1EDC1EDE1EE01EE21EE41EE61EE81EEA1EEC1EEE1EF01EF21EF41EF61EF81EFA1EFC1EFE1F08-1F0F1F18-1F1D1F28-1F2F1F38-1F3F1F48-1F4D1F591F5B1F5D1F5F1F68-1F6F1FB8-1FBB1FC8-1FCB1FD8-1FDB1FE8-1FEC1FF8-1FFB21022107210B-210D2110-211221152119-211D212421262128212A-212D2130-2133213E213F21452160-216F218324B6-24CF2C00-2C2E2C602C62-2C642C672C692C6B2C6D-2C702C722C752C7E-2C802C822C842C862C882C8A2C8C2C8E2C902C922C942C962C982C9A2C9C2C9E2CA02CA22CA42CA62CA82CAA2CAC2CAE2CB02CB22CB42CB62CB82CBA2CBC2CBE2CC02CC22CC42CC62CC82CCA2CCC2CCE2CD02CD22CD42CD62CD82CDA2CDC2CDE2CE02CE22CEB2CED2CF2A640A642A644A646A648A64AA64CA64EA650A652A654A656A658A65AA65CA65EA660A662A664A666A668A66AA66CA680A682A684A686A688A68AA68CA68EA690A692A694A696A722A724A726A728A72AA72CA72EA732A734A736A738A73AA73CA73EA740A742A744A746A748A74AA74CA74EA750A752A754A756A758A75AA75CA75EA760A762A764A766A768A76AA76CA76EA779A77BA77DA77EA780A782A784A786A78BA78DA790A792A7A0A7A2A7A4A7A6A7A8A7AAFF21-FF3A",Lowercase:"0061-007A00AA00B500BA00DF-00F600F8-00FF01010103010501070109010B010D010F01110113011501170119011B011D011F01210123012501270129012B012D012F01310133013501370138013A013C013E014001420144014601480149014B014D014F01510153015501570159015B015D015F01610163016501670169016B016D016F0171017301750177017A017C017E-0180018301850188018C018D019201950199-019B019E01A101A301A501A801AA01AB01AD01B001B401B601B901BA01BD-01BF01C601C901CC01CE01D001D201D401D601D801DA01DC01DD01DF01E101E301E501E701E901EB01ED01EF01F001F301F501F901FB01FD01FF02010203020502070209020B020D020F02110213021502170219021B021D021F02210223022502270229022B022D022F02310233-0239023C023F0240024202470249024B024D024F-02930295-02B802C002C102E0-02E40345037103730377037A-037D039003AC-03CE03D003D103D5-03D703D903DB03DD03DF03E103E303E503E703E903EB03ED03EF-03F303F503F803FB03FC0430-045F04610463046504670469046B046D046F04710473047504770479047B047D047F0481048B048D048F04910493049504970499049B049D049F04A104A304A504A704A904AB04AD04AF04B104B304B504B704B904BB04BD04BF04C204C404C604C804CA04CC04CE04CF04D104D304D504D704D904DB04DD04DF04E104E304E504E704E904EB04ED04EF04F104F304F504F704F904FB04FD04FF05010503050505070509050B050D050F05110513051505170519051B051D051F05210523052505270561-05871D00-1DBF1E011E031E051E071E091E0B1E0D1E0F1E111E131E151E171E191E1B1E1D1E1F1E211E231E251E271E291E2B1E2D1E2F1E311E331E351E371E391E3B1E3D1E3F1E411E431E451E471E491E4B1E4D1E4F1E511E531E551E571E591E5B1E5D1E5F1E611E631E651E671E691E6B1E6D1E6F1E711E731E751E771E791E7B1E7D1E7F1E811E831E851E871E891E8B1E8D1E8F1E911E931E95-1E9D1E9F1EA11EA31EA51EA71EA91EAB1EAD1EAF1EB11EB31EB51EB71EB91EBB1EBD1EBF1EC11EC31EC51EC71EC91ECB1ECD1ECF1ED11ED31ED51ED71ED91EDB1EDD1EDF1EE11EE31EE51EE71EE91EEB1EED1EEF1EF11EF31EF51EF71EF91EFB1EFD1EFF-1F071F10-1F151F20-1F271F30-1F371F40-1F451F50-1F571F60-1F671F70-1F7D1F80-1F871F90-1F971FA0-1FA71FB0-1FB41FB61FB71FBE1FC2-1FC41FC61FC71FD0-1FD31FD61FD71FE0-1FE71FF2-1FF41FF61FF72071207F2090-209C210A210E210F2113212F21342139213C213D2146-2149214E2170-217F218424D0-24E92C30-2C5E2C612C652C662C682C6A2C6C2C712C732C742C76-2C7D2C812C832C852C872C892C8B2C8D2C8F2C912C932C952C972C992C9B2C9D2C9F2CA12CA32CA52CA72CA92CAB2CAD2CAF2CB12CB32CB52CB72CB92CBB2CBD2CBF2CC12CC32CC52CC72CC92CCB2CCD2CCF2CD12CD32CD52CD72CD92CDB2CDD2CDF2CE12CE32CE42CEC2CEE2CF32D00-2D252D272D2DA641A643A645A647A649A64BA64DA64FA651A653A655A657A659A65BA65DA65FA661A663A665A667A669A66BA66DA681A683A685A687A689A68BA68DA68FA691A693A695A697A723A725A727A729A72BA72DA72F-A731A733A735A737A739A73BA73DA73FA741A743A745A747A749A74BA74DA74FA751A753A755A757A759A75BA75DA75FA761A763A765A767A769A76BA76DA76F-A778A77AA77CA77FA781A783A785A787A78CA78EA791A793A7A1A7A3A7A5A7A7A7A9A7F8-A7FAFB00-FB06FB13-FB17FF41-FF5A",White_Space:"0009-000D0020008500A01680180E2000-200A20282029202F205F3000",Noncharacter_Code_Point:"FDD0-FDEFFFFEFFFF",Default_Ignorable_Code_Point:"00AD034F115F116017B417B5180B-180D200B-200F202A-202E2060-206F3164FE00-FE0FFEFFFFA0FFF0-FFF8",Any:"0000-FFFF",Ascii:"0000-007F",Assigned:"0000-0377037A-037E0384-038A038C038E-03A103A3-05270531-05560559-055F0561-05870589058A058F0591-05C705D0-05EA05F0-05F40600-06040606-061B061E-070D070F-074A074D-07B107C0-07FA0800-082D0830-083E0840-085B085E08A008A2-08AC08E4-08FE0900-09770979-097F0981-09830985-098C098F09900993-09A809AA-09B009B209B6-09B909BC-09C409C709C809CB-09CE09D709DC09DD09DF-09E309E6-09FB0A01-0A030A05-0A0A0A0F0A100A13-0A280A2A-0A300A320A330A350A360A380A390A3C0A3E-0A420A470A480A4B-0A4D0A510A59-0A5C0A5E0A66-0A750A81-0A830A85-0A8D0A8F-0A910A93-0AA80AAA-0AB00AB20AB30AB5-0AB90ABC-0AC50AC7-0AC90ACB-0ACD0AD00AE0-0AE30AE6-0AF10B01-0B030B05-0B0C0B0F0B100B13-0B280B2A-0B300B320B330B35-0B390B3C-0B440B470B480B4B-0B4D0B560B570B5C0B5D0B5F-0B630B66-0B770B820B830B85-0B8A0B8E-0B900B92-0B950B990B9A0B9C0B9E0B9F0BA30BA40BA8-0BAA0BAE-0BB90BBE-0BC20BC6-0BC80BCA-0BCD0BD00BD70BE6-0BFA0C01-0C030C05-0C0C0C0E-0C100C12-0C280C2A-0C330C35-0C390C3D-0C440C46-0C480C4A-0C4D0C550C560C580C590C60-0C630C66-0C6F0C78-0C7F0C820C830C85-0C8C0C8E-0C900C92-0CA80CAA-0CB30CB5-0CB90CBC-0CC40CC6-0CC80CCA-0CCD0CD50CD60CDE0CE0-0CE30CE6-0CEF0CF10CF20D020D030D05-0D0C0D0E-0D100D12-0D3A0D3D-0D440D46-0D480D4A-0D4E0D570D60-0D630D66-0D750D79-0D7F0D820D830D85-0D960D9A-0DB10DB3-0DBB0DBD0DC0-0DC60DCA0DCF-0DD40DD60DD8-0DDF0DF2-0DF40E01-0E3A0E3F-0E5B0E810E820E840E870E880E8A0E8D0E94-0E970E99-0E9F0EA1-0EA30EA50EA70EAA0EAB0EAD-0EB90EBB-0EBD0EC0-0EC40EC60EC8-0ECD0ED0-0ED90EDC-0EDF0F00-0F470F49-0F6C0F71-0F970F99-0FBC0FBE-0FCC0FCE-0FDA1000-10C510C710CD10D0-1248124A-124D1250-12561258125A-125D1260-1288128A-128D1290-12B012B2-12B512B8-12BE12C012C2-12C512C8-12D612D8-13101312-13151318-135A135D-137C1380-139913A0-13F41400-169C16A0-16F01700-170C170E-17141720-17361740-17531760-176C176E-1770177217731780-17DD17E0-17E917F0-17F91800-180E1810-18191820-18771880-18AA18B0-18F51900-191C1920-192B1930-193B19401944-196D1970-19741980-19AB19B0-19C919D0-19DA19DE-1A1B1A1E-1A5E1A60-1A7C1A7F-1A891A90-1A991AA0-1AAD1B00-1B4B1B50-1B7C1B80-1BF31BFC-1C371C3B-1C491C4D-1C7F1CC0-1CC71CD0-1CF61D00-1DE61DFC-1F151F18-1F1D1F20-1F451F48-1F4D1F50-1F571F591F5B1F5D1F5F-1F7D1F80-1FB41FB6-1FC41FC6-1FD31FD6-1FDB1FDD-1FEF1FF2-1FF41FF6-1FFE2000-2064206A-20712074-208E2090-209C20A0-20B920D0-20F02100-21892190-23F32400-24262440-244A2460-26FF2701-2B4C2B50-2B592C00-2C2E2C30-2C5E2C60-2CF32CF9-2D252D272D2D2D30-2D672D6F2D702D7F-2D962DA0-2DA62DA8-2DAE2DB0-2DB62DB8-2DBE2DC0-2DC62DC8-2DCE2DD0-2DD62DD8-2DDE2DE0-2E3B2E80-2E992E9B-2EF32F00-2FD52FF0-2FFB3000-303F3041-30963099-30FF3105-312D3131-318E3190-31BA31C0-31E331F0-321E3220-32FE3300-4DB54DC0-9FCCA000-A48CA490-A4C6A4D0-A62BA640-A697A69F-A6F7A700-A78EA790-A793A7A0-A7AAA7F8-A82BA830-A839A840-A877A880-A8C4A8CE-A8D9A8E0-A8FBA900-A953A95F-A97CA980-A9CDA9CF-A9D9A9DEA9DFAA00-AA36AA40-AA4DAA50-AA59AA5C-AA7BAA80-AAC2AADB-AAF6AB01-AB06AB09-AB0EAB11-AB16AB20-AB26AB28-AB2EABC0-ABEDABF0-ABF9AC00-D7A3D7B0-D7C6D7CB-D7FBD800-FA6DFA70-FAD9FB00-FB06FB13-FB17FB1D-FB36FB38-FB3CFB3EFB40FB41FB43FB44FB46-FBC1FBD3-FD3FFD50-FD8FFD92-FDC7FDF0-FDFDFE00-FE19FE20-FE26FE30-FE52FE54-FE66FE68-FE6BFE70-FE74FE76-FEFCFEFFFF01-FFBEFFC2-FFC7FFCA-FFCFFFD2-FFD7FFDA-FFDCFFE0-FFE6FFE8-FFEEFFF9-FFFD"})})(XRegExp);
(function(n){"use strict";function t(n,t,i,r){return{value:n,name:t,start:i,end:r}}n.matchRecursive=function(i,r,u,f,e){f=f||"",e=e||{};var g=f.indexOf("g")>-1,nt=f.indexOf("y")>-1,d=f.replace(/y/g,""),y=e.escapeChar,o=e.valueNames,v=[],b=0,h=0,s=0,c=0,p,w,l,a,k;if(r=n(r,d),u=n(u,d),y){if(y.length>1)throw new SyntaxError("can't use more than one escape character");y=n.escape(y),k=new RegExp("(?:"+y+"[\\S\\s]|(?:(?!"+n.union([r,u]).source+")[^"+y+"])+)+",f.replace(/[^im]+/g,""))}for(;;){if(y&&(s+=(n.exec(i,k,s,"sticky")||[""])[0].length),l=n.exec(i,r,s),a=n.exec(i,u,s),l&&a&&(l.index<=a.index?a=null:l=null),l||a)h=(l||a).index,s=h+(l||a)[0].length;else if(!b)break;if(nt&&!b&&h>c)break;if(l)b||(p=h,w=s),++b;else if(a&&b){if(!--b&&(o?(o[0]&&p>c&&v.push(t(o[0],i.slice(c,p),c,p)),o[1]&&v.push(t(o[1],i.slice(p,w),p,w)),o[2]&&v.push(t(o[2],i.slice(w,h),w,h)),o[3]&&v.push(t(o[3],i.slice(h,s),h,s))):v.push(i.slice(w,h)),c=s,!g))break}else throw new Error("string contains unbalanced delimiters");h===s&&++s}return g&&!nt&&o&&o[0]&&i.length>c&&v.push(t(o[0],i.slice(c),c,i.length)),v}})(XRegExp);
(function(n){"use strict";function u(n){var i=/^(?:\(\?:\))?\^/,t=/\$(?:\(\?:\))?$/;return t.test(n.replace(/\\[\s\S]/g,""))?n.replace(i,"").replace(t,""):n}function t(t){return n.isRegExp(t)?t.xregexp&&!t.xregexp.isNative?t:n(t.source):n(t)}var i=/(\()(?!\?)|\\([1-9]\d*)|\\[\s\S]|\[(?:[^\\\]]|\\[\s\S])*]/g,r=n.union([/\({{([\w$]+)}}\)|{{([\w$]+)}}/,i],"g");n.build=function(f,e,o){var w=/^\(\?([\w$]+)\)/.exec(f),l={},s=0,v,h=0,p=[0],y,a,c;w&&(o=o||"",w[1].replace(/./g,function(n){o+=o.indexOf(n)>-1?"":n}));for(c in e)e.hasOwnProperty(c)&&(a=t(e[c]),l[c]={pattern:u(a.source),names:a.xregexp.captureNames||[]});return f=t(f),y=f.xregexp.captureNames||[],f=f.source.replace(r,function(n,t,r,u,f){var o=t||r,e,c;if(o){if(!l.hasOwnProperty(o))throw new ReferenceError("undefined property "+n);return t?(e=y[h],p[++h]=++s,c="(?<"+(e||o)+">"):c="(?:",v=s,c+l[o].pattern.replace(i,function(n,t,i){if(t){if(e=l[o].names[s-v],++s,e)return"(?<"+e+">"}else if(i)return"\\"+(+i+v);return n})+")"}if(u){if(e=y[h],p[++h]=++s,e)return"(?<"+e+">"}else if(f)return"\\"+p[+f];return n}),n(f,o)}})(XRegExp);
(function(n){"use strict";function t(n,t){for(var i in t)t.hasOwnProperty(i)&&(n[i]=t[i])}t(n.prototype,{apply:function(n,t){return this.test(t[0])},call:function(n,t){return this.test(t)},forEach:function(t,i,r){return n.forEach(t,this,i,r)},globalize:function(){return n.globalize(this)},xexec:function(t,i,r){return n.exec(t,this,i,r)},xtest:function(t,i,r){return n.test(t,this,i,r)}})})(XRegExp)
;(function($, win, doc) {
"use strict";
$.anythingSlider = function(el, options) {
var base = this, o, t;
base.el = el;
base.$el = $(el).addClass('anythingBase').wrap('<div class="anythingSlider"><div class="anythingWindow" /></div>');
base.$el.data("AnythingSlider", base);
base.init = function(){
base.options = o = $.extend({}, $.anythingSlider.defaults, options);
base.initialized = false;
if ($.isFunction(o.onBeforeInitialize)) { base.$el.bind('before_initialize', o.onBeforeInitialize); }
base.$el.trigger('before_initialize', base);
$('<!--[if lte IE 8]><script>jQuery("body").addClass("as-oldie");</script><![endif]-->').appendTo('body').remove();
base.$wrapper = base.$el.parent().closest('div.anythingSlider').addClass('anythingSlider-' + o.theme);
base.$outer = base.$wrapper.parent();
base.$window = base.$el.closest('div.anythingWindow');
base.$win = $(win);
base.$controls = $('<div class="anythingControls"></div>');
base.$nav = $('<ol class="flex-control-nav flex-control-paging"><li><a><span></span></a></li></ol>');
base.$startStop = $('<a href="#" class="start-stop"></a>');
if (o.buildStartStop || o.buildNavigation) {
base.$controls.appendTo( (o.appendControlsTo && $(o.appendControlsTo).length) ? $(o.appendControlsTo) : base.$wrapper);
}
if (o.buildNavigation) {
base.$nav.appendTo( (o.appendNavigationTo && $(o.appendNavigationTo).length) ? $(o.appendNavigationTo) : base.$controls );
}
if (o.buildStartStop) {
base.$startStop.appendTo( (o.appendStartStopTo && $(o.appendStartStopTo).length) ? $(o.appendStartStopTo) : base.$controls );
}
base.runTimes = $('.anythingBase').length;
base.regex = (o.hashTags) ? new RegExp('panel' + base.runTimes + '-(\\d+)', 'i') : null;
if (base.runTimes === 1) { base.makeActive(); } // make the first slider on the page active
base.flag    = false; // event flag to prevent multiple calls (used in control click/focusin)
if (o.autoPlayLocked) { o.autoPlay = true; } // if autoplay is locked, start playing
base.playing = o.autoPlay; // slideshow state; removed "startStopped" option
base.slideshow = false; // slideshow flag needed to correctly trigger slideshow events
base.hovered = false; // actively hovering over the slider
base.panelSize = [];  // will contain dimensions and left position of each panel
base.currentPage = base.targetPage = o.startPanel = parseInt(o.startPanel,10) || 1; // make sure this isn't a string
o.changeBy = parseInt(o.changeBy,10) || 1;
t = (o.mode || 'h').toLowerCase().match(/(h|v|f)/);
t = o.vertical ? 'v' : (t || ['h'])[0];
o.mode = t === 'v' ? 'vertical' : t === 'f' ? 'fade' : 'horizontal';
if (t === 'f') {
o.showMultiple = 1; // all slides are stacked in fade mode
o.infiniteSlides = false; // no cloned slides
}
base.adj = (o.infiniteSlides) ? 0 : 1; // adjust page limits for infinite or limited modes
base.adjustMultiple = 0;
if (o.playRtl) { base.$wrapper.addClass('rtl'); }
if (o.buildStartStop) { base.buildAutoPlay(); }
if (o.buildArrows) { base.buildNextBackButtons(); }
base.$lastPage = base.$targetPage = base.$currentPage;
base.updateSlider();
if (o.expand) {
base.$window.css({ width: '100%', height: '100%' }); // needed for Opera
base.checkResize();
}
if (!$.isFunction($.easing[o.easing])) { o.easing = "swing"; }
if (o.pauseOnHover) {
base.$wrapper.hover(function() {
if (base.playing) {
base.$el.trigger('slideshow_paused', base);
base.clearTimer(true);
}
}, function() {
if (base.playing) {
base.$el.trigger('slideshow_unpaused', base);
base.startStop(base.playing, true);
}
});
}
base.slideControls(false);
base.$wrapper.bind('mouseenter mouseleave', function(e){
$(this)[e.type === 'mouseenter' ? 'addClass' : 'removeClass']('anythingSlider-hovered');
base.hovered = (e.type === 'mouseenter') ? true : false;
base.slideControls(base.hovered);
});
$(doc).keyup(function(e){
if (o.enableKeyboard && base.$wrapper.hasClass('activeSlider') && !e.target.tagName.match('TEXTAREA|INPUT|SELECT')) {
if (o.mode !== 'vertical' && (e.which === 38 || e.which === 40)) { return; }
switch (e.which) {
case 39: case 40: // right & down arrow
base.goForward();
break;
case 37: case 38: // left & up arrow
base.goBack();
break;
}
}
});
base.currentPage = ((o.hashTags) ? base.gotoHash() : '') || o.startPanel || 1;
base.gotoPage(base.currentPage, false, null, -1);
var triggers = "slideshow_paused slideshow_unpaused slide_init slide_begin slideshow_stop slideshow_start initialized swf_completed".split(" ");
$.each("onShowPause onShowUnpause onSlideInit onSlideBegin onShowStop onShowStart onInitialized onSWFComplete".split(" "), function(i,f){
if ($.isFunction(o[f])){
base.$el.bind(triggers[i], o[f]);
}
});
if ($.isFunction(o.onSlideComplete)){
base.$el.bind('slide_complete', function(){
setTimeout(function(){ o.onSlideComplete(base); }, 0);
return false;
});
}
base.initialized = true;
base.$el.trigger('initialized', base);
base.startStop(o.autoPlay);
};
base.updateSlider = function(){
base.$el.children('.cloned').remove();
base.navTextVisible = base.$nav.find('span:first').css('visibility') !== 'hidden';
base.$nav.empty();
base.currentPage = base.currentPage || 1;
base.$items = base.$el.children();
base.pages = base.$items.length;
if (!o.invert)
{
base.dir = (o.mode === 'vertical') ? 'top' : 'left';
} else
{
base.dir = (o.mode === 'vertical') ? 'bottom' : 'right';
}
o.showMultiple = parseInt(o.showMultiple, 10) || 1; // only integers allowed
o.navigationSize = (o.navigationSize === false) ? 0 : parseInt(o.navigationSize,10) || 0;
if (!o.preventFocus) {
base.$items.find('a').unbind('focus.AnythingSlider').bind('focus.AnythingSlider', function(e){
var panel = $(this).closest('.panel'),
indx = base.$items.index(panel) + base.adj; // index can be -1 in nested sliders - issue #208
base.$items.find('.focusedLink').removeClass('focusedLink');
$(this).addClass('focusedLink');
base.$window.scrollLeft(0).scrollTop(0);
if ( ( indx !== -1 && (indx >= base.currentPage + o.showMultiple || indx < base.currentPage) ) ) {
base.gotoPage(indx);
e.preventDefault();
}
});
}
if (o.showMultiple > 1) {
if (o.showMultiple > base.pages) { o.showMultiple = base.pages; }
base.adjustMultiple = (o.infiniteSlides && base.pages > 1) ? 0 : o.showMultiple - 1;
}
base.$controls
.add(base.$nav)
.add(base.$startStop)
.add(base.$forward)
.add(base.$back)[(base.pages <= 1) ? 'hide' : 'show']();
if (base.pages > 1) {
base.buildNavigation();
}
if (o.mode !== 'fade' && o.infiniteSlides && base.pages > 1) {
base.$el.prepend( base.$items.filter(':last').clone().addClass('cloned') );
if (o.showMultiple > 1) {
base.$el.append( base.$items.filter(':lt(' + o.showMultiple + ')').clone().addClass('cloned multiple') );
} else {
base.$el.append( base.$items.filter(':first').clone().addClass('cloned') );
}
base.$el.find('.cloned').each(function(){
$(this).find('a,input,textarea,select,button,area,form').attr({ disabled : 'disabled', name : '' });
$(this).find('[id]')[ $.fn.addBack ? 'addBack' : 'andSelf' ]().removeAttr('id');
});
}
base.$items = base.$el.addClass(o.mode).children().addClass('panel');
base.setDimensions();
if (o.resizeContents) {
base.$items.css('width', base.width);
base.$wrapper
.css('width', base.getDim(base.currentPage)[0])
.add(base.$items).css('height', base.height);
} else {
base.$win.on('load', function() {
base.setDimensions();
t = base.getDim(base.currentPage);
base.$wrapper.css({ width: t[0], height: t[1] });
base.setCurrentPage(base.currentPage, false);
});
}
if (base.currentPage > base.pages) {
base.currentPage = base.pages;
}
base.setCurrentPage(base.currentPage, false);
base.$nav.find('a').eq(base.currentPage - 1).addClass('flex-active'); // update current selection
if (o.mode === 'fade') {
t = base.$items.eq(base.currentPage-1);
if (o.resumeOnVisible) {
t.css({ opacity: 1 }).siblings().css({ opacity: 0 });
} else {
base.$items.css('opacity',1);
t.fadeIn(0).siblings().fadeOut(0);
}
}
};
base.buildNavigation = function() {
if (o.buildNavigation && (base.pages > 1)) {
var a, c, i, t, $li;
var l = base.$items.filter(':not(.cloned)').length;
var diff = Math.ceil( l / o.showMultiple);
for(var g = 0; g < diff; ++g)
{
$li = $('<li/>');
i = g + 1;
a = '<a class="png-bg">' + i + '</a>';
if ($.isFunction(o.navigationFormatter)) {
t = o.navigationFormatter(i, $(this));
if (typeof(t) === "string") {
$li.html(a.replace(/@/g,t));
} else {
$li = $('<li/>', t);
}
} else {
$li.html(a.replace(/@/g,i));
}
$li
.appendTo(base.$nav)
.addClass(c)
.data('index', o.showMultiple*g+1);
}
base.$nav.children('li').bind(o.clickControls, function(e) {
if (!base.flag && o.enableNavigation) {
base.flag = true; setTimeout(function(){ base.flag = false; }, 100);
base.gotoPage( $(this).data('index') );
}
e.preventDefault();
});
if (!!o.navigationSize && o.navigationSize < base.pages) {
if (!base.$controls.find('.anythingNavWindow').length){
base.$nav
.before('<ul><li class="prev"><a href="#"><span>' + o.backText + '</span></a></li></ul>')
.after('<ul><li class="next"><a href="#"><span>' + o.forwardText + '</span></a></li></ul>')
.wrap('<div class="anythingNavWindow"></div>');
}
base.navWidths = base.$nav.find('li').map(function(){
return $(this).outerWidth(true) + Math.ceil(parseInt($(this).find('span').css('left'),10)/2 || 0);
}).get();
base.navLeft = base.currentPage;
base.$nav.width( base.navWidth( 1, base.pages + 1 ) + 25 );
base.$controls.find('.anythingNavWindow')
.width( base.navWidth( 1, o.navigationSize + 1 ) ).end()
.find('.prev,.next').bind(o.clickControls, function(e) {
if (!base.flag) {
base.flag = true; setTimeout(function(){ base.flag = false; }, 200);
base.navWindow( base.navLeft + o.navigationSize * ( $(this).is('.prev') ? -1 : 1 ) );
}
e.preventDefault();
});
}
}
};
base.navWidth = function(x,y){
var i, s = Math.min(x,y),
e = Math.max(x,y),
w = 0;
for (i = s; i < e; i++) {
w += base.navWidths[i-1] || 0;
}
return w;
};
base.navWindow = function(n){
if (!!o.navigationSize && o.navigationSize < base.pages && base.navWidths) {
var p = base.pages - o.navigationSize + 1;
n = (n <= 1) ? 1 : (n > 1 && n < p) ? n : p;
if (n !== base.navLeft) {
base.$controls.find('.anythingNavWindow').animate(
{ scrollLeft: base.navWidth(1, n), width: base.navWidth(n, n + o.navigationSize) },
{ queue: false, duration: o.animationTime });
base.navLeft = n;
}
}
};
base.buildNextBackButtons = function() {
if (!o.invert) {
base.$forward = $('<span class="arrow forward"><a class="png-bg" href="#"><span>' + o.forwardText + '</span></a></span>');
base.$back = $('<span class="arrow back"><a class="png-bg" href="#"><span>' + o.backText + '</span></a></span>');
} else {
base.$back = $('<span class="arrow forward"><a href="#"><span>' + o.forwardText + '</span></a></span>');
base.$forward = $('<span class="arrow back"><a href="#"><span>' + o.backText + '</span></a></span>');
}
base.$back.bind(o.clickBackArrow, function(e) {
if (o.enableArrows && !base.flag) {
base.flag = true; setTimeout(function(){ base.flag = false; }, 100);
base.goBack();
}
e.preventDefault();
});
base.$forward.bind(o.clickForwardArrow, function(e) {
if (o.enableArrows && !base.flag) {
base.flag = true; setTimeout(function(){ base.flag = false; }, 100);
base.goForward();
}
e.preventDefault();
});
base.$back.add(base.$forward).find('a').bind('focusin focusout',function(){
$(this).toggleClass('hover');
});
base.$back.appendTo( (o.appendBackTo && $(o.appendBackTo).length) ? $(o.appendBackTo) : base.$wrapper );
base.$forward.appendTo( (o.appendForwardTo && $(o.appendForwardTo).length) ? $(o.appendForwardTo) : base.$wrapper );
base.arrowWidth = base.$forward.width(); // assuming the left & right arrows are the same width - used for toggle
base.arrowRight = parseInt(base.$forward.css('right'), 10);
base.arrowLeft = parseInt(base.$back.css('left'), 10);
};
base.buildAutoPlay = function(){
base.$startStop
.html('<span>' + (base.playing ? o.stopText : o.startText) + '</span>')
.bind(o.clickSlideshow, function(e) {
if (o.enableStartStop) {
base.startStop(!base.playing);
base.makeActive();
if (base.playing && !o.autoPlayDelayed) {
base.goForward(true, o.playRtl);
}
}
e.preventDefault();
})
.bind('focusin focusout',function(){
$(this).toggleClass('hover');
});
};
base.checkResize = function(stopTimer){
var vis = !!(doc.hidden || doc.webkitHidden || doc.mozHidden || doc.msHidden);
clearTimeout(base.resizeTimer);
base.resizeTimer = setTimeout(function(){
var w = base.$outer.width(),
h = base.$outer[0].tagName === "BODY" ? base.$win.height() : base.$outer.height();
if (!vis && (base.lastDim[0] !== w || base.lastDim[1] !== h)) {
base.setDimensions(); // adjust panel sizes
base.gotoPage(base.currentPage, base.playing, null, -1);
}
if (typeof(stopTimer) === 'undefined'){ base.checkResize(); }
}, vis ? 2000 : 500);
};
base.setDimensions = function(){
base.$wrapper.find('.anythingWindow, .anythingBase, .panel')[ $.fn.addBack ? 'addBack' : 'andSelf' ]().css({ width: '', height: '' });
base.width = base.$el.width();
base.height = base.$el.height();
base.outerPad = [ base.$wrapper.innerWidth() - base.$wrapper.width(), base.$wrapper.innerHeight() - base.$wrapper.height() ];
var w, h, c, t, edge = 0,
fullsize = { width: '100%', height: '100%' },
pw = (o.showMultiple > 1 && o.mode === 'horizontal') ? base.width || base.$window.width()/o.showMultiple : base.$window.width(),
ph = (o.showMultiple > 1 && o.mode === 'vertical') ? base.height/o.showMultiple || base.$window.height()/o.showMultiple : base.$window.height();
if (o.expand){
base.lastDim = [ base.$outer.width(), base.$outer.height() ];
w = base.lastDim[0] - base.outerPad[0];
h = base.lastDim[1] - base.outerPad[1];
base.$wrapper.add(base.$window).css({ width: w, height: h });
base.height = h = (o.showMultiple > 1 && o.mode === 'vertical') ? ph : h;
base.width = pw = (o.showMultiple > 1 && o.mode === 'horizontal') ? w/o.showMultiple : w;
base.$items.css({ width: pw, height: ph });
}
base.$items.each(function(i){
t = $(this);
c = t.children();
if (o.resizeContents) {
w = base.width;
h = base.height;
t.css({ width: w, height: h });
if (c.length) {
if (c[0].tagName === "EMBED") { c.attr(fullsize); } // needed for IE7; also c.length > 1 in IE7
if (c[0].tagName === "OBJECT") { c.find('embed').attr(fullsize); }
if (c.length === 1){ c.css(fullsize); }
}
} else {
if (o.mode === 'vertical') {
w = t.css('display','inline-block').width();
t.css('display','');
} else {
if (o.outerSize) {
w = t.outerWidth(true) || base.width; // if image hasn't finished loading, width will be zero, so set it to base width instead
} else {
w = t.width() || base.width; // if image hasn't finished loading, width will be zero, so set it to base width instead
}
}
if (c.length === 1 && w >= pw){
w = (c.width() >= pw) ? pw : c.width(); // get width of solitary child
c.css('max-width', w);   // set max width for all children
}
if (!o.outerSize) t.css({ width: w, height: '' }); // set width of panel
if (o.borderBox) {
h = t.outerHeight(true);
} else {
h = (c.length === 1 ? c.outerHeight(true) : t.height()); // get height after setting width
}
if (h <= base.outerPad[1]) { h = base.height; } // if height less than the outside padding, then set it to the preset height
if (!o.borderBox) {
t.css('height', h);
} else {
var _imgH = t.find('img').outerHeight(true); if (_imgH) t.css('height', _imgH);
else t.css('height', h);
if (core.lte7) h -= 2;
}
}
base.panelSize[i] = [w,h,edge];
edge += (o.mode === 'vertical') ? h : w;
});
if( o.invert ) {
var _size = [], _edge=0, _a;
for (var i=base.panelSize.length-1; i>=0; --i) {
_a = base.panelSize[i];
_size.push( [_a[0], _a[1], _edge] );
_edge += (o.mode === 'vertical') ? _a[1] : _a[0];
}
base.panelSize = _size;
}
base.$el.css((o.mode === 'vertical' ? 'height' : 'width'), o.mode === 'fade' ? base.width : edge );
if (o.invert) base.$el.css((o.mode === 'vertical' ? 'bottom' : 'right'), 0);
};
base.setThumbsDimensions = function( w, h ) {
base.tWidth = w;
base.tHeight = h;
base.setDimensions();
};
base.getDim = function(page) {
var t, i, w = base.width, h = base.height;
if (base.pages < 1 || isNaN(page)) { return [ w, h ]; } // prevent errors when base.panelSize is empty
page = (o.infiniteSlides && base.pages > 1) ? page : page - 1;
i = base.panelSize[page];
if (i) {
w = i[0] || w;
h = i[1] || h;
}
if (o.showMultiple > 1) {
for (i = 1; i < o.showMultiple; i++) {
t = page + i;
if (t<base.pages) {
if (o.mode === 'vertical') {
w = Math.max(w, base.panelSize[t][0]);
h += base.panelSize[t][1];
} else {
w += base.panelSize[t][0];
h = Math.max(h, base.panelSize[t][1]);
}
}
}
}
return [w,h];
};
base.goForward = function(autoplay, rtl) {
base.gotoPage(base[ o.allowRapidChange ? 'targetPage' : 'currentPage'] + o.changeBy * (rtl ? -1 : 1), autoplay);
};
base.goBack = function(autoplay) {
base.gotoPage(base[ o.allowRapidChange ? 'targetPage' : 'currentPage'] - o.changeBy, autoplay);
};
base.gotoPage = function(page, autoplay, callback, time) {
if (isNaN(page)) {
page = 1;
if (window.console && window.console.warn) console.warn('[AnythingSlider] missing page on :goTo');
}
if (autoplay !== true) {
autoplay = false;
base.startStop(false);
base.makeActive();
}
if (/^[#|.]/.test(page) && $(page).length) {
page = $(page).closest('.panel').index() + base.adj;
}
if (o.changeBy !== 1) {
var adj = base.pages - base.adjustMultiple;
if (page < 1) {
page = o.stopAtEnd ? 1 : ( o.infiniteSlides ? base.pages + page : ( o.showMultiple > 1 - page ? 1 : adj ) );
}
if (page > base.pages) {
page = o.stopAtEnd ? base.pages : ( o.showMultiple > 1 - page ? 1 : page -= adj );
} else if (page >= adj) {
page = adj;
}
} else if (o.showMultiple > 1) {
page = Math.max( 1, Math.min( page, base.pages - o.showMultiple + 1 ) );
}
if (base.pages <= 1) { return; } // prevents animation
base.$lastPage = base.$currentPage;
if (typeof(page) !== "number") {
page = parseInt(page,10) || o.startPanel;
base.setCurrentPage(page);
}
if (autoplay && o.isVideoPlaying(base)) { return; }
if (o.stopAtEnd && !o.infiniteSlides && page > base.pages - o.showMultiple) { page = base.pages - o.showMultiple + 1; } // fixes #515
base.exactPage = page;
if (page > base.pages + 1 - base.adj) { page = (!o.infiniteSlides && !o.stopAtEnd) ? 1 : base.pages; }
if (page < base.adj ) { page = (!o.infiniteSlides && !o.stopAtEnd) ? base.pages : 1; }
if (!o.infiniteSlides) { base.exactPage = page; } // exact page used by the fx extension
base.currentPage = ( page > base.pages ) ? base.pages : ( page < 1 ) ? 1 : base.currentPage;
base.$currentPage = base.$items.eq(base.currentPage - base.adj);
base.targetPage = (page === 0) ? base.pages : (page > base.pages) ? 1 : page;
base.$targetPage = base.$items.eq(base.targetPage - base.adj);
time = typeof time !== 'undefined' ? time : o.animationTime;
if (time >= 0) { base.$el.trigger('slide_init', base); }
if (time > 0) { base.slideControls(true); }
if (o.buildNavigation){
base.setNavigation(base.targetPage);
}
base.updateArrows();
if (autoplay !== true) { autoplay = false; }
if (!autoplay || (o.stopAtEnd && page === base.pages)) { base.startStop(false); }
if (time >= 0) { base.$el.trigger('slide_begin', base); }
setTimeout(function(d){
var t, p, empty = true;
if (o.allowRapidChange) {
base.$wrapper.add(base.$el).add(base.$items).stop(true, true);
}
if (!o.resizeContents) {
p = base.getDim(page); d = {};
if (base.$wrapper.width() !== p[0]) { d.width = p[0] || base.width; empty = false; }
if (base.$wrapper.height() !== p[1]) { d.height = p[1] || base.height; empty = false; }
if (!empty) {
base.$wrapper.filter(':not(:animated)').animate(d, { queue: false, duration: (time < 0 ? 0 : time), easing: o.easing });
}
}
if (o.mode === 'fade') {
if (base.$lastPage[0] !== base.$targetPage[0]) {
base.fadeIt( base.$lastPage, 0, time );
base.fadeIt( base.$targetPage, 1, time, function(){ base.endAnimation(page, callback, time); });
} else {
base.endAnimation(page, callback, time);
}
} else {
d = {};
d[base.dir] = -base.panelSize[(o.infiniteSlides && base.pages > 1) ? page : page - 1][2];
if (o.vAlignLastPage === 'bottom')
{
if (base.pages > o.showMultiple)
{
if (base.targetPage > base.pages - o.showMultiple) {
var _remain = base.$el.height() + d[base.dir];
d[base.dir] += (base.$window.height() - _remain) - 40;
}
if (o.mode === 'vertical' && !o.resizeContents) { d.width = p[0]; }
base.$el.filter(':not(:animated)').animate(
d, { queue: false, duration: time < 0 ? 0 : time, easing: o.easing, complete: function(){ base.endAnimation(page, callback, time); } }
);
} else
{
base.$el.height('auto');
setTimeout( function() {
base.$el.css('top', base.$window.height() - base.$el.height() - 20 );
}, 150);
}
} else
{
if (o.mode === 'vertical' && !o.resizeContents) { d.width = p[0]; }
base.$el.filter(':not(:animated)').animate(
d, { queue: false, duration: time < 0 ? 0 : time, easing: o.easing, complete: function(){ base.endAnimation(page, callback, time); } }
);
}
}
}, parseInt(o.delayBeforeAnimate, 10) || 0);
base.$wrapper.trigger('changePage', base.currentPage );
};
base.updateArrows = function() {
if (base.currentPage > base.pages - o.showMultiple)
{
if (!o.invert) base.$forward.addClass('off');
else base.$back.addClass('off');
}
else
{
if (!o.invert) base.$forward.removeClass('off');
else base.$back.removeClass('off');
}
if (base.currentPage === 1)
{
if (!o.invert) base.$back.addClass('off');
else base.$forward.addClass('off');
}
else
{
if (!o.invert) base.$back.removeClass('off');
else base.$forward.removeClass('off');
}
};
base.endAnimation = function(page, callback, time) {
if (page === 0) {
base.$el.css( base.dir, o.mode === 'fade' ? 0 : -base.panelSize[base.pages][2]);
page = base.pages;
} else if (page > base.pages) {
base.$el.css( base.dir, o.mode === 'fade' ? 0 : -base.panelSize[1][2]);
page = 1;
}
base.exactPage = page;
base.setCurrentPage(page, false);
if (o.mode === 'fade') {
base.fadeIt( base.$items.not(':eq(' + (page - base.adj) + ')'), 0, 0);
}
if (!base.hovered) { base.slideControls(false); }
if (o.hashTags) { base.setHash(page); }
if (time >= 0) { base.$el.trigger('slide_complete', base); }
if (typeof callback === 'function') { callback(base); }
if (o.autoPlayLocked && !base.playing) {
setTimeout(function(){
base.startStop(true);
}, o.resumeDelay - (o.autoPlayDelayed ? o.delay : 0));
}
};
base.fadeIt = function(el, toOpacity, time, callback){
var t = time < 0 ? 0 : time;
if (o.resumeOnVisible) {
el.filter(':not(:animated)').fadeTo(t, toOpacity, callback);
} else {
el.filter(':not(:animated)')[ toOpacity === 0 ? 'fadeOut' : 'fadeIn' ](t, callback);
}
};
base.setCurrentPage = function(page, move) {
page = parseInt(page, 10);
if (base.pages < 1 || page === 0 || isNaN(page)) { return; }
if (page > base.pages + 1 - base.adj) { page = base.pages - base.adj; }
if (page < base.adj ) { page = 1; }
if (o.buildArrows && !o.infiniteSlides && o.stopAtEnd){
base.$forward[ page === base.pages - base.adjustMultiple ? 'addClass' : 'removeClass']('disabled');
base.$back[ page === 1 ? 'addClass' : 'removeClass']('disabled');
if (page === base.pages && base.playing) { base.startStop(); }
}
if (!move)
{
var d = base.getDim(page),
css = {},
_offset = -40;
css[base.dir] = o.mode === 'fade' ? 0 : -base.panelSize[(o.infiniteSlides && base.pages > 1) ? page : page - 1][2];
if (o.vAlignLastPage == 'bottom') {
if (base.pages > o.showMultiple && !o.infiniteSlides) {
if (base.targetPage > base.pages - o.showMultiple) {
var _remain = base.$el.height() + css[base.dir];
css[base.dir] += (base.$window.height() - _remain) + _offset;
}
} else {
css[base.dir] = base.$window.height() - base.$el.height() + _offset;
}
}
base.$wrapper
.css({ width: d[0], height: d[1] })
.add(base.$window).scrollLeft(0).scrollTop(0); // reset in case tabbing changed this scrollLeft - probably overly redundant
base.$el.css( css );
}
base.currentPage = page;
base.$currentPage = base.$items.removeClass('activePage').eq(page - base.adj).addClass('activePage');
if (o.buildNavigation){
base.setNavigation(page);
}
base.updateArrows();
base.$wrapper.trigger('changePage', base.currentPage );
};
base.setNavigation = function(page){
if(o.showMultiple > 1) {
page = Math.round(page / o.showMultiple)+1;
}
base.$nav
.find('.flex-active').removeClass('flex-active').end()
.find('a').eq(page - 1).addClass('flex-active');
};
base.makeActive = function(){
if (!base.$wrapper.hasClass('activeSlider')){
$('.activeSlider').removeClass('activeSlider');
base.$wrapper.addClass('activeSlider');
}
};
base.gotoHash = function(){
var h = win.location.hash,
i = h.indexOf('&'),
n = h.match(base.regex);
if (n === null && !/^#&/.test(h) && !/#!?\//.test(h) && !/\=/.test(h)) {
h = h.substring(0, (i >= 0 ? i : h.length));
n = ($(h).length && $(h).closest('.anythingBase')[0] === base.el) ? base.$items.index($(h).closest('.panel')) + base.adj : null;
} else if (n !== null) {
n = (o.hashTags) ? parseInt(n[1],10) : null;
}
return n;
};
base.setHash = function(n){
var s = 'panel' + base.runTimes + '-',
h = win.location.hash;
if ( typeof h !== 'undefined' ) {
win.location.hash = (h.indexOf(s) > 0) ? h.replace(base.regex, s + n) : h + "&" + s + n;
}
};
base.slideControls = function(toggle){
var dir = (toggle) ? 'slideDown' : 'slideUp',
t1 = (toggle) ? 0 : o.animationTime,
t2 = (toggle) ? o.animationTime : 0,
op = (toggle) ? 1 : 0,
sign = (toggle) ? 0 : 1; // 0 = visible, 1 = hidden
if (o.toggleControls) {
base.$controls.stop(true,true).delay(t1)[dir](o.animationTime/2).delay(t2);
}
if (o.buildArrows && o.toggleArrows) {
if (!base.hovered && base.playing) { sign = 1; op = 0; } // don't animate arrows during slideshow
base.$forward.stop(true,true).delay(t1).animate({ right: base.arrowRight + (sign * base.arrowWidth), opacity: op }, o.animationTime/2);
base.$back.stop(true,true).delay(t1).animate({ left: base.arrowLeft + (sign * base.arrowWidth), opacity: op }, o.animationTime/2);
}
};
base.clearTimer = function(paused){
if (base.timer) {
win.clearInterval(base.timer);
if (!paused && base.slideshow) {
base.$el.trigger('slideshow_stop', base);
base.slideshow = false;
}
}
};
base.startStop = function(playing, paused) {
if (playing !== true) { playing = false; }  // Default if not supplied is false
base.playing = playing;
if (playing && !paused) {
base.$el.trigger('slideshow_start', base);
base.slideshow = true;
}
if (o.buildStartStop) {
base.$startStop.toggleClass('playing', playing).find('span').html( playing ? o.stopText : o.startText );
if ( base.$startStop.find('span').css('visibility') === "hidden" ) {
base.$startStop.addClass(o.tooltipClass).attr( 'title', playing ? o.stopText : o.startText );
}
}
if (playing){
base.clearTimer(true); // Just in case this was triggered twice in a row
base.timer = win.setInterval(function() {
if ( !!(doc.hidden || doc.webkitHidden || doc.mozHidden || doc.msHidden) ) {
if (!o.autoPlayLocked) {
base.startStop();
}
} else if ( !o.isVideoPlaying(base) ) {
base.goForward(true, o.playRtl);
} else if (!o.resumeOnVideoEnd) {
base.startStop();
}
}, o.delay);
} else {
base.clearTimer();
}
};
base.updateChangeBy = function( num ) {
if (num && num != o.changeBy) {
o.changeBy = o.showMultiple = num;
base.checkResize();
base.updateArrows();
} else {
var _d = o.mode=='vertical' ? base.$window.height() : base.$window.width(),
_current = base.currentPage - 1,
_count = 0,
_total = 0;
while( _total < _d ) {
if (_current < base.pages) {
_total += base.panelSize[_current][1];
if (_total < _d) {
++_current;
++_count;
} else {
break;
}
} else {
break;
}
}
if ( _total < _d ) {
if (_count < base.pages) {
_current = base.currentPage - 2;
while (_total < _d) {
if (_current >= 0) {
_total += base.panelSize[_current][1];
if (_total < _d) {
--_current;
++_count;
} else {
break;
}
} else {
break;
}
}
} else {
base.gotoPage( 1 );
}
}
o.changeBy = o.showMultiple = _count;
base.updateSlider();
}
};
base.showPage = function( num ) {
if (num < base.currentPage) {
base.setCurrentPage( num, false );
} else if (num > base.currentPage + o.showMultiple - 1) {
base.setCurrentPage( num-o.showMultiple+1, false );
}
};
base.init();
};
$.anythingSlider.defaults = {
theme               : "default", // Theme name, add the css stylesheet manually
mode                : "horiz",   // Set mode to "horizontal", "vertical" or "fade" (only first letter needed); replaces vertical option
invert              : false,
borderBox           : false,
outerSize           : false,
expand              : false,     // If true, the entire slider will expand to fit the parent element
resizeContents      : true,      // If true, solitary images/objects in the panel will expand to fit the viewport
showMultiple        : false,     // Set this value to a number and it will show that many slides at once
easing              : "swing",   // Anything other than "linear" or "swing" requires the easing plugin or jQuery UI
buildArrows         : true,      // If true, builds the forwards and backwards buttons
buildNavigation     : true,      // If true, builds a list of anchor links to link to each panel
buildStartStop      : true,      // ** If true, builds the start/stop button
appendForwardTo     : null,      // Append forward arrow to a HTML element (jQuery Object, selector or HTMLNode), if not null
appendBackTo        : null,      // Append back arrow to a HTML element (jQuery Object, selector or HTMLNode), if not null
appendControlsTo    : null,      // Append controls (navigation + start-stop) to a HTML element (jQuery Object, selector or HTMLNode), if not null
appendNavigationTo  : null,      // Append navigation buttons to a HTML element (jQuery Object, selector or HTMLNode), if not null
appendStartStopTo   : null,      // Append start-stop button to a HTML element (jQuery Object, selector or HTMLNode), if not null
toggleArrows        : false,     // If true, side navigation arrows will slide out on hovering & hide @ other times
toggleControls      : false,     // if true, slide in controls (navigation + play/stop button) on hover and slide change, hide @ other times
startText           : "Start",   // Start button text
stopText            : "Stop",    // Stop button text
forwardText         : "&raquo;", // Link text used to move the slider forward (hidden by CSS, replaced with arrow image)
backText            : "&laquo;", // Link text used to move the slider back (hidden by CSS, replace with arrow image)
tooltipClass        : "tooltip", // Class added to navigation & start/stop button (text copied to title if it is hidden by a negative text indent)
enableArrows        : true,      // if false, arrows will be visible, but not clickable.
enableNavigation    : true,      // if false, navigation links will still be visible, but not clickable.
enableStartStop     : true,      // if false, the play/stop button will still be visible, but not clickable. Previously "enablePlay"
enableKeyboard      : true,      // if false, keyboard arrow keys will not work for this slider.
startPanel          : 1,         // This sets the initial panel
changeBy            : 1,         // Amount to go forward or back when changing panels.
hashTags            : true,      // Should links change the hashtag in the URL?
infiniteSlides      : true,      // if false, the slider will not wrap & not clone any panels
navigationFormatter : null,      // Details at the top of the file on this use (advanced use)
navigationSize      : false,     // Set this to the maximum number of visible navigation tabs; false to disable
autoPlay            : false,     // If true, the slideshow will start running; replaces "startStopped" option
autoPlayLocked      : false,     // If true, user changing slides will not stop the slideshow
autoPlayDelayed     : false,     // If true, starting a slideshow will delay advancing slides; if false, the slider will immediately advance to the next slide when slideshow starts
pauseOnHover        : true,      // If true & the slideshow is active, the slideshow will pause on hover
stopAtEnd           : false,     // If true & the slideshow is active, the slideshow will stop on the last page. This also stops the rewind effect when infiniteSlides is false.
playRtl             : false,     // If true, the slideshow will move right-to-left
delay               : 3000,      // How long between slideshow transitions in AutoPlay mode (in milliseconds)
resumeDelay         : 15000,     // Resume slideshow after user interaction, only if autoplayLocked is true (in milliseconds).
animationTime       : 600,       // How long the slideshow transition takes (in milliseconds)
delayBeforeAnimate  : 0,         // How long to pause slide animation before going to the desired slide (used if you want your "out" FX to show).
clickForwardArrow   : "click",         // Event used to activate forward arrow functionality (e.g. add jQuery mobile's "swiperight")
clickBackArrow      : "click",         // Event used to activate back arrow functionality (e.g. add jQuery mobile's "swipeleft")
clickControls       : "click focusin", // Events used to activate navigation control functionality
clickSlideshow      : "click",         // Event used to activate slideshow play/stop button
allowRapidChange    : false,           // If true, allow rapid changing of the active pane, instead of ignoring activity during animation
resumeOnVideoEnd    : true,      // If true & the slideshow is active & a supported video is playing, it will pause the autoplay until the video is complete
resumeOnVisible     : true,      // If true the video will resume playing, if previously paused; if false, the video remains paused.
isVideoPlaying      : function(base){ return false; } // return true if video is playing or false if not - used by video extension
};
$.fn.anythingSlider = function(options, callback) {
return this.each(function(){
var page, anySlide = $(this).data('AnythingSlider');
if ((typeof(options)).match('object|undefined')){
if (!anySlide) {
(new $.anythingSlider(this, options));
} else {
anySlide.updateSlider();
}
} else if (/\d/.test(options) && !isNaN(options) && anySlide) {
page = (typeof(options) === "number") ? options : parseInt($.trim(options),10); // accepts "  2  "
if ( page >= 1 && page <= anySlide.pages ) {
anySlide.gotoPage(page, false, callback); // page #, autoplay, one time callback
}
} else if (/^[#|.]/.test(options) && $(options).length) {
anySlide.gotoPage(options, false, callback);
}
});
};
})(jQuery, window, document);!function($){$.flexslider=function(e,t){var a=$(e);a.vars=$.extend({},$.flexslider.defaults,t);var n=a.vars.namespace,i=window.navigator&&window.navigator.msPointerEnabled&&window.MSGesture,s=("ontouchstart"in window||i||window.DocumentTouch&&document instanceof DocumentTouch)&&a.vars.touch,r="click touchend MSPointerUp keyup",o="",l,c="vertical"===a.vars.direction,d=a.vars.reverse,u=a.vars.itemWidth>0,v="fade"===a.vars.animation,p=""!==a.vars.asNavFor,m={},f=!0;$.data(e,"flexslider",a),m={init:function(){a.animating=!1,a.currentSlide=parseInt(a.vars.startAt?a.vars.startAt:0,10),isNaN(a.currentSlide)&&(a.currentSlide=0),a.animatingTo=a.currentSlide,a.atEnd=0===a.currentSlide||a.currentSlide===a.last,a.containerSelector=a.vars.selector.substr(0,a.vars.selector.search(" ")),a.slides=$(a.vars.selector,a),a.container=$(a.containerSelector,a),a.count=a.slides.length,a.syncExists=$(a.vars.sync).length>0,"slide"===a.vars.animation&&(a.vars.animation="swing"),a.prop=c?"top":"marginLeft",a.args={},a.manualPause=!1,a.stopped=!1,a.started=!1,a.startTimeout=null,a.transitions=!a.vars.video&&!v&&a.vars.useCSS&&function(){var e=document.createElement("div"),t=["perspectiveProperty","WebkitPerspective","MozPerspective","OPerspective","msPerspective"];for(var n in t)if(void 0!==e.style[t[n]])return a.pfx=t[n].replace("Perspective","").toLowerCase(),a.prop="-"+a.pfx+"-transform",!0;return!1}(),a.ensureAnimationEnd="",""!==a.vars.controlsContainer&&(a.controlsContainer=$(a.vars.controlsContainer).length>0&&$(a.vars.controlsContainer)),""!==a.vars.manualControls&&(a.manualControls=$(a.vars.manualControls).length>0&&$(a.vars.manualControls)),""!==a.vars.customDirectionNav&&(a.customDirectionNav=2===$(a.vars.customDirectionNav).length&&$(a.vars.customDirectionNav)),a.vars.randomize&&(a.slides.sort(function(){return Math.round(Math.random())-.5}),a.container.empty().append(a.slides)),a.doMath(),a.setup("init"),a.vars.controlNav&&m.controlNav.setup(),a.vars.directionNav&&m.directionNav.setup(),a.vars.keyboard&&(1===$(a.containerSelector).length||a.vars.multipleKeyboard)&&$(document).bind("keyup",function(e){var t=e.keyCode;if(!a.animating&&(39===t||37===t)){var n=39===t?a.getTarget("next"):37===t?a.getTarget("prev"):!1;a.flexAnimate(n,a.vars.pauseOnAction)}}),a.vars.mousewheel&&a.bind("mousewheel",function(e,t,n,i){e.preventDefault();var s=a.getTarget(0>t?"next":"prev");a.flexAnimate(s,a.vars.pauseOnAction)}),a.vars.pausePlay&&m.pausePlay.setup(),a.vars.slideshow&&a.vars.pauseInvisible&&m.pauseInvisible.init(),a.vars.slideshow&&(a.vars.pauseOnHover&&a.hover(function(){a.manualPlay||a.manualPause||a.pause()},function(){a.manualPause||a.manualPlay||a.stopped||a.play()}),a.vars.pauseInvisible&&m.pauseInvisible.isHidden()||(a.vars.initDelay>0?a.startTimeout=setTimeout(a.play,a.vars.initDelay):a.play())),p&&m.asNav.setup(),s&&a.vars.touch&&m.touch(),(!v||v&&a.vars.smoothHeight)&&$(window).bind("resize orientationchange focus",m.resize),a.find("img").attr("draggable","false"),setTimeout(function(){a.vars.start(a)},200)},asNav:{setup:function(){a.asNav=!0,a.animatingTo=Math.floor(a.currentSlide/a.move),a.currentItem=a.currentSlide,a.slides.removeClass(n+"active-slide").eq(a.currentItem).addClass(n+"active-slide"),i?(e._slider=a,a.slides.each(function(){var e=this;e._gesture=new MSGesture,e._gesture.target=e,e.addEventListener("MSPointerDown",function(e){e.preventDefault(),e.currentTarget._gesture&&e.currentTarget._gesture.addPointer(e.pointerId)},!1),e.addEventListener("MSGestureTap",function(e){e.preventDefault();var t=$(this),n=t.index();$(a.vars.asNavFor).data("flexslider").animating||t.hasClass("active")||(a.direction=a.currentItem<n?"next":"prev",a.flexAnimate(n,a.vars.pauseOnAction,!1,!0,!0))})})):a.slides.on(r,function(e){e.preventDefault();var t=$(this),i=t.index(),s=t.offset().left-$(a).scrollLeft();0>=s&&t.hasClass(n+"active-slide")?a.flexAnimate(a.getTarget("prev"),!0):$(a.vars.asNavFor).data("flexslider").animating||t.hasClass(n+"active-slide")||(a.direction=a.currentItem<i?"next":"prev",a.flexAnimate(i,a.vars.pauseOnAction,!1,!0,!0))})}},controlNav:{setup:function(){a.manualControls?m.controlNav.setupManual():m.controlNav.setupPaging()},setupPaging:function(){var e="thumbnails"===a.vars.controlNav?"control-thumbs":"control-paging",t=1,i,s;if(a.controlNavScaffold=$('<ol class="'+n+"control-nav "+n+e+'"></ol>'),a.pagingCount>1)for(var l=0;l<a.pagingCount;l++){if(s=a.slides.eq(l),i="thumbnails"===a.vars.controlNav?'<img src="'+s.attr("data-thumb")+'"/>':"<a>"+t+"</a>","thumbnails"===a.vars.controlNav&&!0===a.vars.thumbCaptions){var c=s.attr("data-thumbcaption");""!==c&&void 0!==c&&(i+='<span class="'+n+'caption">'+c+"</span>")}a.controlNavScaffold.append("<li>"+i+"</li>"),t++}a.controlsContainer?$(a.controlsContainer).append(a.controlNavScaffold):a.append(a.controlNavScaffold),m.controlNav.set(),m.controlNav.active(),a.controlNavScaffold.delegate("a, img",r,function(e){if(e.preventDefault(),""===o||o===e.type){var t=$(this),i=a.controlNav.index(t);t.hasClass(n+"active")||(a.direction=i>a.currentSlide?"next":"prev",a.flexAnimate(i,a.vars.pauseOnAction))}""===o&&(o=e.type),m.setToClearWatchedEvent()})},setupManual:function(){a.controlNav=a.manualControls,m.controlNav.active(),a.controlNav.bind(r,function(e){if(e.preventDefault(),""===o||o===e.type){var t=$(this),i=a.controlNav.index(t);t.hasClass(n+"active")||(a.direction=i>a.currentSlide?"next":"prev",a.flexAnimate(i,a.vars.pauseOnAction))}""===o&&(o=e.type),m.setToClearWatchedEvent()})},set:function(){var e="thumbnails"===a.vars.controlNav?"img":"a";a.controlNav=$("."+n+"control-nav li "+e,a.controlsContainer?a.controlsContainer:a)},active:function(){a.controlNav.removeClass(n+"active").eq(a.animatingTo).addClass(n+"active")},update:function(e,t){a.pagingCount>1&&"add"===e?a.controlNavScaffold.append($("<li><a>"+a.count+"</a></li>")):1===a.pagingCount?a.controlNavScaffold.find("li").remove():a.controlNav.eq(t).closest("li").remove(),m.controlNav.set(),a.pagingCount>1&&a.pagingCount!==a.controlNav.length?a.update(t,e):m.controlNav.active()}},directionNav:{setup:function(){var e=$('<ul class="'+n+'direction-nav"><li class="'+n+'nav-prev"><a class="'+n+'prev" href="#">'+a.vars.prevText+'</a></li><li class="'+n+'nav-next"><a class="'+n+'next" href="#">'+a.vars.nextText+"</a></li></ul>");a.customDirectionNav?a.directionNav=a.customDirectionNav:a.controlsContainer?($(a.controlsContainer).append(e),a.directionNav=$("."+n+"direction-nav li a",a.controlsContainer)):(a.append(e),a.directionNav=$("."+n+"direction-nav li a",a)),m.directionNav.update(),a.directionNav.bind(r,function(e){e.preventDefault();var t;(""===o||o===e.type)&&(t=a.getTarget($(this).hasClass(n+"next")?"next":"prev"),a.flexAnimate(t,a.vars.pauseOnAction)),""===o&&(o=e.type),m.setToClearWatchedEvent()})},update:function(){var e=n+"disabled";1===a.pagingCount?a.directionNav.addClass(e).attr("tabindex","-1"):a.vars.animationLoop?a.directionNav.removeClass(e).removeAttr("tabindex"):0===a.animatingTo?a.directionNav.removeClass(e).filter("."+n+"prev").addClass(e).attr("tabindex","-1"):a.animatingTo===a.last?a.directionNav.removeClass(e).filter("."+n+"next").addClass(e).attr("tabindex","-1"):a.directionNav.removeClass(e).removeAttr("tabindex")}},pausePlay:{setup:function(){var e=$('<div class="'+n+'pauseplay"><a></a></div>');a.controlsContainer?(a.controlsContainer.append(e),a.pausePlay=$("."+n+"pauseplay a",a.controlsContainer)):(a.append(e),a.pausePlay=$("."+n+"pauseplay a",a)),m.pausePlay.update(a.vars.slideshow?n+"pause":n+"play"),a.pausePlay.bind(r,function(e){e.preventDefault(),(""===o||o===e.type)&&($(this).hasClass(n+"pause")?(a.manualPause=!0,a.manualPlay=!1,a.pause()):(a.manualPause=!1,a.manualPlay=!0,a.play())),""===o&&(o=e.type),m.setToClearWatchedEvent()})},update:function(e){"play"===e?a.pausePlay.removeClass(n+"pause").addClass(n+"play").html(a.vars.playText):a.pausePlay.removeClass(n+"play").addClass(n+"pause").html(a.vars.pauseText)}},touch:function(){function t(t){t.stopPropagation(),a.animating?t.preventDefault():(a.pause(),e._gesture.addPointer(t.pointerId),w=0,p=c?a.h:a.w,f=Number(new Date),l=u&&d&&a.animatingTo===a.last?0:u&&d?a.limit-(a.itemW+a.vars.itemMargin)*a.move*a.animatingTo:u&&a.currentSlide===a.last?a.limit:u?(a.itemW+a.vars.itemMargin)*a.move*a.currentSlide:d?(a.last-a.currentSlide+a.cloneOffset)*p:(a.currentSlide+a.cloneOffset)*p)}function n(t){t.stopPropagation();var a=t.target._slider;if(a){var n=-t.translationX,i=-t.translationY;return w+=c?i:n,m=w,y=c?Math.abs(w)<Math.abs(-n):Math.abs(w)<Math.abs(-i),t.detail===t.MSGESTURE_FLAG_INERTIA?void setImmediate(function(){e._gesture.stop()}):void((!y||Number(new Date)-f>500)&&(t.preventDefault(),!v&&a.transitions&&(a.vars.animationLoop||(m=w/(0===a.currentSlide&&0>w||a.currentSlide===a.last&&w>0?Math.abs(w)/p+2:1)),a.setProps(l+m,"setTouch"))))}}function s(e){e.stopPropagation();var t=e.target._slider;if(t){if(t.animatingTo===t.currentSlide&&!y&&null!==m){var a=d?-m:m,n=t.getTarget(a>0?"next":"prev");t.canAdvance(n)&&(Number(new Date)-f<550&&Math.abs(a)>50||Math.abs(a)>p/2)?t.flexAnimate(n,t.vars.pauseOnAction):v||t.flexAnimate(t.currentSlide,t.vars.pauseOnAction,!0)}r=null,o=null,m=null,l=null,w=0}}var r,o,l,p,m,f,g,h,S,y=!1,x=0,b=0,w=0;i?(e.style.msTouchAction="none",e._gesture=new MSGesture,e._gesture.target=e,e.addEventListener("MSPointerDown",t,!1),e._slider=a,e.addEventListener("MSGestureChange",n,!1),e.addEventListener("MSGestureEnd",s,!1)):(g=function(t){a.animating?t.preventDefault():(window.navigator.msPointerEnabled||1===t.touches.length)&&(a.pause(),p=c?a.h:a.w,f=Number(new Date),x=t.touches[0].pageX,b=t.touches[0].pageY,l=u&&d&&a.animatingTo===a.last?0:u&&d?a.limit-(a.itemW+a.vars.itemMargin)*a.move*a.animatingTo:u&&a.currentSlide===a.last?a.limit:u?(a.itemW+a.vars.itemMargin)*a.move*a.currentSlide:d?(a.last-a.currentSlide+a.cloneOffset)*p:(a.currentSlide+a.cloneOffset)*p,r=c?b:x,o=c?x:b,e.addEventListener("touchmove",h,!1),e.addEventListener("touchend",S,!1))},h=function(e){x=e.touches[0].pageX,b=e.touches[0].pageY,m=c?r-b:r-x,y=c?Math.abs(m)<Math.abs(x-o):Math.abs(m)<Math.abs(b-o);var t=500;(!y||Number(new Date)-f>t)&&(e.preventDefault(),!v&&a.transitions&&(a.vars.animationLoop||(m/=0===a.currentSlide&&0>m||a.currentSlide===a.last&&m>0?Math.abs(m)/p+2:1),a.setProps(l+m,"setTouch")))},S=function(t){if(e.removeEventListener("touchmove",h,!1),a.animatingTo===a.currentSlide&&!y&&null!==m){var n=d?-m:m,i=a.getTarget(n>0?"next":"prev");a.canAdvance(i)&&(Number(new Date)-f<550&&Math.abs(n)>50||Math.abs(n)>p/2)?a.flexAnimate(i,a.vars.pauseOnAction):v||a.flexAnimate(a.currentSlide,a.vars.pauseOnAction,!0)}e.removeEventListener("touchend",S,!1),r=null,o=null,m=null,l=null},e.addEventListener("touchstart",g,!1))},resize:function(){!a.animating&&a.is(":visible")&&(u||a.doMath(),v?m.smoothHeight():u?(a.slides.width(a.computedW),a.update(a.pagingCount),a.setProps()):c?(a.viewport.height(a.h),a.setProps(a.h,"setTotal")):(a.vars.smoothHeight&&m.smoothHeight(),a.newSlides.width(a.computedW),a.setProps(a.computedW,"setTotal")))},smoothHeight:function(e){if(!c||v){var t=v?a:a.viewport;e?t.animate({height:a.slides.eq(a.animatingTo).height()},e):t.height(a.slides.eq(a.animatingTo).height())}},sync:function(e){var t=$(a.vars.sync).data("flexslider"),n=a.animatingTo;switch(e){case"animate":t.flexAnimate(n,a.vars.pauseOnAction,!1,!0);break;case"play":t.playing||t.asNav||t.play();break;case"pause":t.pause()}},uniqueID:function(e){return e.filter("[id]").add(e.find("[id]")).each(function(){var e=$(this);e.attr("id",e.attr("id")+"_clone")}),e},pauseInvisible:{visProp:null,init:function(){var e=m.pauseInvisible.getHiddenProp();if(e){var t=e.replace(/[H|h]idden/,"")+"visibilitychange";document.addEventListener(t,function(){m.pauseInvisible.isHidden()?a.startTimeout?clearTimeout(a.startTimeout):a.pause():a.started?a.play():a.vars.initDelay>0?setTimeout(a.play,a.vars.initDelay):a.play()})}},isHidden:function(){var e=m.pauseInvisible.getHiddenProp();return e?document[e]:!1},getHiddenProp:function(){var e=["webkit","moz","ms","o"];if("hidden"in document)return"hidden";for(var t=0;t<e.length;t++)if(e[t]+"Hidden"in document)return e[t]+"Hidden";return null}},setToClearWatchedEvent:function(){clearTimeout(l),l=setTimeout(function(){o=""},3e3)}},a.flexAnimate=function(e,t,i,r,o){if(a.vars.animationLoop||e===a.currentSlide||(a.direction=e>a.currentSlide?"next":"prev"),p&&1===a.pagingCount&&(a.direction=a.currentItem<e?"next":"prev"),!a.animating&&(a.canAdvance(e,o)||i)&&a.is(":visible")){if(p&&r){var l=$(a.vars.asNavFor).data("flexslider");if(a.atEnd=0===e||e===a.count-1,l.flexAnimate(e,!0,!1,!0,o),a.direction=a.currentItem<e?"next":"prev",l.direction=a.direction,Math.ceil((e+1)/a.visible)-1===a.currentSlide||0===e)return a.currentItem=e,a.slides.removeClass(n+"active-slide").eq(e).addClass(n+"active-slide"),!1;a.currentItem=e,a.slides.removeClass(n+"active-slide").eq(e).addClass(n+"active-slide"),e=Math.floor(e/a.visible)}if(a.animating=!0,a.animatingTo=e,t&&a.pause(),a.vars.before(a),a.syncExists&&!o&&m.sync("animate"),a.vars.controlNav&&m.controlNav.active(),u||a.slides.removeClass(n+"active-slide").eq(e).addClass(n+"active-slide"),a.atEnd=0===e||e===a.last,a.vars.directionNav&&m.directionNav.update(),e===a.last&&(a.vars.end(a),a.vars.animationLoop||a.pause()),v)s?(a.slides.eq(a.currentSlide).css({opacity:0,zIndex:1}),a.slides.eq(e).css({opacity:1,zIndex:2}),a.wrapup(f)):(a.slides.eq(a.currentSlide).css({zIndex:1}).animate({opacity:0},a.vars.animationSpeed,a.vars.easing),a.slides.eq(e).css({zIndex:2}).animate({opacity:1},a.vars.animationSpeed,a.vars.easing,a.wrapup));else{var f=c?a.slides.filter(":first").height():a.computedW,g,h,S;u?(g=a.vars.itemMargin,S=(a.itemW+g)*a.move*a.animatingTo,h=S>a.limit&&1!==a.visible?a.limit:S):h=0===a.currentSlide&&e===a.count-1&&a.vars.animationLoop&&"next"!==a.direction?d?(a.count+a.cloneOffset)*f:0:a.currentSlide===a.last&&0===e&&a.vars.animationLoop&&"prev"!==a.direction?d?0:(a.count+1)*f:d?(a.count-1-e+a.cloneOffset)*f:(e+a.cloneOffset)*f,a.setProps(h,"",a.vars.animationSpeed),a.transitions?(a.vars.animationLoop&&a.atEnd||(a.animating=!1,a.currentSlide=a.animatingTo),a.container.unbind("webkitTransitionEnd transitionend"),a.container.bind("webkitTransitionEnd transitionend",function(){clearTimeout(a.ensureAnimationEnd),a.wrapup(f)}),clearTimeout(a.ensureAnimationEnd),a.ensureAnimationEnd=setTimeout(function(){a.wrapup(f)},a.vars.animationSpeed+100)):a.container.animate(a.args,a.vars.animationSpeed,a.vars.easing,function(){a.wrapup(f)})}a.vars.smoothHeight&&m.smoothHeight(a.vars.animationSpeed)}},a.wrapup=function(e){v||u||(0===a.currentSlide&&a.animatingTo===a.last&&a.vars.animationLoop?a.setProps(e,"jumpEnd"):a.currentSlide===a.last&&0===a.animatingTo&&a.vars.animationLoop&&a.setProps(e,"jumpStart")),a.animating=!1,a.currentSlide=a.animatingTo,a.vars.after(a)},a.animateSlides=function(){!a.animating&&f&&a.flexAnimate(a.getTarget("next"))},a.pause=function(){clearInterval(a.animatedSlides),a.animatedSlides=null,a.playing=!1,a.vars.pausePlay&&m.pausePlay.update("play"),a.syncExists&&m.sync("pause")},a.play=function(){a.playing&&clearInterval(a.animatedSlides),a.animatedSlides=a.animatedSlides||setInterval(a.animateSlides,a.vars.slideshowSpeed),a.started=a.playing=!0,a.vars.pausePlay&&m.pausePlay.update("pause"),a.syncExists&&m.sync("play")},a.stop=function(){a.pause(),a.stopped=!0},a.canAdvance=function(e,t){var n=p?a.pagingCount-1:a.last;return t?!0:p&&a.currentItem===a.count-1&&0===e&&"prev"===a.direction?!0:p&&0===a.currentItem&&e===a.pagingCount-1&&"next"!==a.direction?!1:e!==a.currentSlide||p?a.vars.animationLoop?!0:a.atEnd&&0===a.currentSlide&&e===n&&"next"!==a.direction?!1:a.atEnd&&a.currentSlide===n&&0===e&&"next"===a.direction?!1:!0:!1},a.getTarget=function(e){return a.direction=e,"next"===e?a.currentSlide===a.last?0:a.currentSlide+1:0===a.currentSlide?a.last:a.currentSlide-1},a.setProps=function(e,t,n){var i=function(){var n=e?e:(a.itemW+a.vars.itemMargin)*a.move*a.animatingTo,i=function(){if(u)return"setTouch"===t?e:d&&a.animatingTo===a.last?0:d?a.limit-(a.itemW+a.vars.itemMargin)*a.move*a.animatingTo:a.animatingTo===a.last?a.limit:n;switch(t){case"setTotal":return d?(a.count-1-a.currentSlide+a.cloneOffset)*e:(a.currentSlide+a.cloneOffset)*e;case"setTouch":return d?e:e;case"jumpEnd":return d?e:a.count*e;case"jumpStart":return d?a.count*e:e;default:return e}}();return-1*i+"px"}();a.transitions&&(i=c?"translate3d(0,"+i+",0)":"translate3d("+i+",0,0)",n=void 0!==n?n/1e3+"s":"0s",a.container.css("-"+a.pfx+"-transition-duration",n),a.container.css("transition-duration",n)),a.args[a.prop]=i,(a.transitions||void 0===n)&&a.container.css(a.args),a.container.css("transform",i)},a.setup=function(e){if(v)a.slides.css({width:"100%","float":"left",marginRight:"-100%",position:"relative"}),"init"===e&&(s?a.slides.css({opacity:0,display:"block",webkitTransition:"opacity "+a.vars.animationSpeed/1e3+"s ease",zIndex:1}).eq(a.currentSlide).css({opacity:1,zIndex:2}):0==a.vars.fadeFirstSlide?a.slides.css({opacity:0,display:"block",zIndex:1}).eq(a.currentSlide).css({zIndex:2}).css({opacity:1}):a.slides.css({opacity:0,display:"block",zIndex:1}).eq(a.currentSlide).css({zIndex:2}).animate({opacity:1},a.vars.animationSpeed,a.vars.easing)),a.vars.smoothHeight&&m.smoothHeight();else{var t,i;"init"===e&&(a.viewport=$('<div class="'+n+'viewport"></div>').css({overflow:"hidden",position:"relative"}).appendTo(a).append(a.container),a.cloneCount=0,a.cloneOffset=0,d&&(i=$.makeArray(a.slides).reverse(),a.slides=$(i),a.container.empty().append(a.slides))),a.vars.animationLoop&&!u&&(a.cloneCount=2,a.cloneOffset=1,"init"!==e&&a.container.find(".clone").remove(),a.container.append(m.uniqueID(a.slides.first().clone().addClass("clone")).attr("aria-hidden","true")).prepend(m.uniqueID(a.slides.last().clone().addClass("clone")).attr("aria-hidden","true"))),a.newSlides=$(a.vars.selector,a),t=d?a.count-1-a.currentSlide+a.cloneOffset:a.currentSlide+a.cloneOffset,c&&!u?(a.container.height(200*(a.count+a.cloneCount)+"%").css("position","absolute").width("100%"),setTimeout(function(){a.newSlides.css({display:"block"}),a.doMath(),a.viewport.height(a.h),a.setProps(t*a.h,"init")},"init"===e?100:0)):(a.container.width(200*(a.count+a.cloneCount)+"%"),a.setProps(t*a.computedW,"init"),setTimeout(function(){a.doMath(),a.newSlides.css({width:a.computedW,"float":"left",display:"block"}),a.vars.smoothHeight&&m.smoothHeight()},"init"===e?100:0))}u||a.slides.removeClass(n+"active-slide").eq(a.currentSlide).addClass(n+"active-slide"),a.vars.init(a)},a.doMath=function(){var e=a.slides.first(),t=a.vars.itemMargin,n=a.vars.minItems,i=a.vars.maxItems;a.w=void 0===a.viewport?a.width():a.viewport.width(),a.h=e.height(),a.boxPadding=e.outerWidth()-e.width(),u?(a.itemT=a.vars.itemWidth+t,a.minW=n?n*a.itemT:a.w,a.maxW=i?i*a.itemT-t:a.w,a.itemW=a.minW>a.w?(a.w-t*(n-1))/n:a.maxW<a.w?(a.w-t*(i-1))/i:a.vars.itemWidth>a.w?a.w:a.vars.itemWidth,a.visible=Math.floor(a.w/a.itemW),a.move=a.vars.move>0&&a.vars.move<a.visible?a.vars.move:a.visible,a.pagingCount=Math.ceil((a.count-a.visible)/a.move+1),a.last=a.pagingCount-1,a.limit=1===a.pagingCount?0:a.vars.itemWidth>a.w?a.itemW*(a.count-1)+t*(a.count-1):(a.itemW+t)*a.count-a.w-t):(a.itemW=a.w,a.pagingCount=a.count,a.last=a.count-1),a.computedW=a.itemW-a.boxPadding},a.update=function(e,t){a.doMath(),u||(e<a.currentSlide?a.currentSlide+=1:e<=a.currentSlide&&0!==e&&(a.currentSlide-=1),a.animatingTo=a.currentSlide),a.vars.controlNav&&!a.manualControls&&("add"===t&&!u||a.pagingCount>a.controlNav.length?m.controlNav.update("add"):("remove"===t&&!u||a.pagingCount<a.controlNav.length)&&(u&&a.currentSlide>a.last&&(a.currentSlide-=1,a.animatingTo-=1),m.controlNav.update("remove",a.last))),a.vars.directionNav&&m.directionNav.update()},a.addSlide=function(e,t){var n=$(e);a.count+=1,a.last=a.count-1,c&&d?void 0!==t?a.slides.eq(a.count-t).after(n):a.container.prepend(n):void 0!==t?a.slides.eq(t).before(n):a.container.append(n),a.update(t,"add"),a.slides=$(a.vars.selector+":not(.clone)",a),a.setup(),a.vars.added(a)},a.removeSlide=function(e){var t=isNaN(e)?a.slides.index($(e)):e;a.count-=1,a.last=a.count-1,isNaN(e)?$(e,a.slides).remove():c&&d?a.slides.eq(a.last).remove():a.slides.eq(e).remove(),a.doMath(),a.update(t,"remove"),a.slides=$(a.vars.selector+":not(.clone)",a),a.setup(),a.vars.removed(a)},m.init()},$(window).blur(function(e){focused=!1}).focus(function(e){focused=!0}),$.flexslider.defaults={namespace:"flex-",selector:".slides > li",animation:"fade",easing:"swing",direction:"horizontal",reverse:!1,animationLoop:!0,smoothHeight:!1,startAt:0,slideshow:!0,slideshowSpeed:7e3,animationSpeed:600,initDelay:0,randomize:!1,fadeFirstSlide:!0,thumbCaptions:!1,pauseOnAction:!0,pauseOnHover:!1,pauseInvisible:!0,useCSS:!0,touch:!0,video:!1,controlNav:!0,directionNav:!0,prevText:"Previous",nextText:"Next",keyboard:!0,multipleKeyboard:!1,mousewheel:!1,pausePlay:!1,pauseText:"Pause",playText:"Play",controlsContainer:"",manualControls:"",customDirectionNav:"",sync:"",asNavFor:"",itemWidth:0,itemMargin:0,minItems:1,maxItems:0,move:0,allowOneSlide:!0,start:function(){},before:function(){},after:function(){},end:function(){},added:function(){},removed:function(){},init:function(){}},$.fn.flexslider=function(e){if(void 0===e&&(e={}),"object"==typeof e)return this.each(function(){var t=$(this),a=e.selector?e.selector:".slides > li",n=t.find(a);1===n.length&&e.allowOneSlide===!0||0===n.length?(n.fadeIn(400),e.start&&e.start(t)):void 0===t.data("flexslider")&&new $.flexslider(this,e)});var t=$(this).data("flexslider");switch(e){case"play":t.play();break;case"pause":t.pause();break;case"stop":t.stop();break;case"next":t.flexAnimate(t.getTarget("next"),!0);break;case"prev":case"previous":t.flexAnimate(t.getTarget("prev"),!0);break;default:"number"==typeof e&&t.flexAnimate(e,!0)}}}(jQuery);
(function( w, $ ) {
fontSpy = function  ( fontName, conf ) {
var $html = $('html'),
$body = $('body'),
fontFamilyName = fontName;
if (typeof fontFamilyName !== 'string' || fontFamilyName === '') {
throw 'A valid fontName is required. fontName must be a string and must not be an empty string.';
}
var defaults = {
font: fontFamilyName,
fontClass: fontFamilyName.toLowerCase().replace( /\s/g, '' ),
success: function() {},
failure: function() {},
testFont: 'Courier New',
testString: 'QW@HhsXJ',
glyphs: '',
delay: 50,
timeOut: 1000,
callback: $.noop
};
var config = $.extend( defaults, conf );
var $tester = $('<span>' + config.testString+config.glyphs + '</span>')
.css('position', 'absolute')
.css('top', '-9999px')
.css('left', '-9999px')
.css('visibility', 'hidden')
.css('fontFamily', config.testFont)
.css('fontSize', '250px');
$body.append($tester);
var fallbackFontWidth = $tester.outerWidth();
$tester.css('fontFamily', config.font + ',' + config.testFont);
var failure = function () {
$html.addClass("no-"+config.fontClass);
if( config && config.failure ) {
config.failure();
}
config.callback(new Error('FontSpy timeout'));
$tester.remove();
};
var success = function () {
config.callback();
$html.addClass(config.fontClass);
if( config && config.success ) {
config.success();
}
$tester.remove();
};
var retry = function () {
setTimeout(checkFont, config.delay);
config.timeOut = config.timeOut - config.delay;
};
var checkFont = function () {
var loadedFontWidth = $tester.outerWidth();
if (fallbackFontWidth !== loadedFontWidth){
success();
} else if(config.timeOut < 0) {
failure();
} else {
retry();
}
}
checkFont();
}
})( this, jQuery );
(function(t,e){"use strict";function n(){if(!i.READY){i.event.determineEventTypes();for(var t in i.gestures)i.gestures.hasOwnProperty(t)&&i.detection.register(i.gestures[t]);i.event.onTouch(i.DOCUMENT,i.EVENT_MOVE,i.detection.detect),i.event.onTouch(i.DOCUMENT,i.EVENT_END,i.detection.detect),i.READY=!0}}var i=function(t,e){return new i.Instance(t,e||{})};i.defaults={stop_browser_behavior:{userSelect:"none",touchAction:"none",touchCallout:"none",contentZooming:"none",userDrag:"none",tapHighlightColor:"rgba(0,0,0,0)"}},i.HAS_POINTEREVENTS=navigator.pointerEnabled||navigator.msPointerEnabled,i.HAS_TOUCHEVENTS="ontouchstart"in t,i.MOBILE_REGEX=/mobile|tablet|ip(ad|hone|od)|android/i,i.NO_MOUSEEVENTS=i.HAS_TOUCHEVENTS&&navigator.userAgent.match(i.MOBILE_REGEX),i.EVENT_TYPES={},i.DIRECTION_DOWN="down",i.DIRECTION_LEFT="left",i.DIRECTION_UP="up",i.DIRECTION_RIGHT="right",i.POINTER_MOUSE="mouse",i.POINTER_TOUCH="touch",i.POINTER_PEN="pen",i.EVENT_START="start",i.EVENT_MOVE="move",i.EVENT_END="end",i.DOCUMENT=document,i.plugins={},i.READY=!1,i.Instance=function(t,e){var r=this;return n(),this.element=t,this.enabled=!0,this.options=i.utils.extend(i.utils.extend({},i.defaults),e||{}),this.options.stop_browser_behavior&&i.utils.stopDefaultBrowserBehavior(this.element,this.options.stop_browser_behavior),i.event.onTouch(t,i.EVENT_START,function(t){r.enabled&&i.detection.startDetect(r,t)}),this},i.Instance.prototype={on:function(t,e){for(var n=t.split(" "),i=0;n.length>i;i++)this.element.addEventListener(n[i],e,!1);return this},off:function(t,e){for(var n=t.split(" "),i=0;n.length>i;i++)this.element.removeEventListener(n[i],e,!1);return this},trigger:function(t,e){var n=i.DOCUMENT.createEvent("Event");n.initEvent(t,!0,!0),n.gesture=e;var r=this.element;return i.utils.hasParent(e.target,r)&&(r=e.target),r.dispatchEvent(n),this},enable:function(t){return this.enabled=t,this}};var r=null,o=!1,s=!1;i.event={bindDom:function(t,e,n){for(var i=e.split(" "),r=0;i.length>r;r++)t.addEventListener(i[r],n,!1)},onTouch:function(t,e,n){var a=this;this.bindDom(t,i.EVENT_TYPES[e],function(c){var u=c.type.toLowerCase();if(!u.match(/mouse/)||!s){(u.match(/touch/)||u.match(/pointerdown/)||u.match(/mouse/)&&1===c.which)&&(o=!0),u.match(/touch|pointer/)&&(s=!0);var h=0;o&&(i.HAS_POINTEREVENTS&&e!=i.EVENT_END?h=i.PointerEvent.updatePointer(e,c):u.match(/touch/)?h=c.touches.length:s||(h=u.match(/up/)?0:1),h>0&&e==i.EVENT_END?e=i.EVENT_MOVE:h||(e=i.EVENT_END),h||null===r?r=c:c=r,n.call(i.detection,a.collectEventData(t,e,c)),i.HAS_POINTEREVENTS&&e==i.EVENT_END&&(h=i.PointerEvent.updatePointer(e,c))),h||(r=null,o=!1,s=!1,i.PointerEvent.reset())}})},determineEventTypes:function(){var t;t=i.HAS_POINTEREVENTS?i.PointerEvent.getEvents():i.NO_MOUSEEVENTS?["touchstart","touchmove","touchend touchcancel"]:["touchstart mousedown","touchmove mousemove","touchend touchcancel mouseup"],i.EVENT_TYPES[i.EVENT_START]=t[0],i.EVENT_TYPES[i.EVENT_MOVE]=t[1],i.EVENT_TYPES[i.EVENT_END]=t[2]},getTouchList:function(t){return i.HAS_POINTEREVENTS?i.PointerEvent.getTouchList():t.touches?t.touches:[{identifier:1,pageX:t.pageX,pageY:t.pageY,target:t.target}]},collectEventData:function(t,e,n){var r=this.getTouchList(n,e),o=i.POINTER_TOUCH;return(n.type.match(/mouse/)||i.PointerEvent.matchType(i.POINTER_MOUSE,n))&&(o=i.POINTER_MOUSE),{center:i.utils.getCenter(r),timeStamp:(new Date).getTime(),target:n.target,touches:r,eventType:e,pointerType:o,srcEvent:n,preventDefault:function(){this.srcEvent.preventManipulation&&this.srcEvent.preventManipulation(),this.srcEvent.preventDefault&&this.srcEvent.preventDefault()},stopPropagation:function(){this.srcEvent.stopPropagation()},stopDetect:function(){return i.detection.stopDetect()}}}},i.PointerEvent={pointers:{},getTouchList:function(){var t=this,e=[];return Object.keys(t.pointers).sort().forEach(function(n){e.push(t.pointers[n])}),e},updatePointer:function(t,e){return t==i.EVENT_END?this.pointers={}:(e.identifier=e.pointerId,this.pointers[e.pointerId]=e),Object.keys(this.pointers).length},matchType:function(t,e){if(!e.pointerType)return!1;var n={};return n[i.POINTER_MOUSE]=e.pointerType==e.MSPOINTER_TYPE_MOUSE||e.pointerType==i.POINTER_MOUSE,n[i.POINTER_TOUCH]=e.pointerType==e.MSPOINTER_TYPE_TOUCH||e.pointerType==i.POINTER_TOUCH,n[i.POINTER_PEN]=e.pointerType==e.MSPOINTER_TYPE_PEN||e.pointerType==i.POINTER_PEN,n[t]},getEvents:function(){return["pointerdown MSPointerDown","pointermove MSPointerMove","pointerup pointercancel MSPointerUp MSPointerCancel"]},reset:function(){this.pointers={}}},i.utils={extend:function(t,n,i){for(var r in n)t[r]!==e&&i||(t[r]=n[r]);return t},hasParent:function(t,e){for(;t;){if(t==e)return!0;t=t.parentNode}return!1},getCenter:function(t){for(var e=[],n=[],i=0,r=t.length;r>i;i++)e.push(t[i].pageX),n.push(t[i].pageY);return{pageX:(Math.min.apply(Math,e)+Math.max.apply(Math,e))/2,pageY:(Math.min.apply(Math,n)+Math.max.apply(Math,n))/2}},getVelocity:function(t,e,n){return{x:Math.abs(e/t)||0,y:Math.abs(n/t)||0}},getAngle:function(t,e){var n=e.pageY-t.pageY,i=e.pageX-t.pageX;return 180*Math.atan2(n,i)/Math.PI},getDirection:function(t,e){var n=Math.abs(t.pageX-e.pageX),r=Math.abs(t.pageY-e.pageY);return n>=r?t.pageX-e.pageX>0?i.DIRECTION_LEFT:i.DIRECTION_RIGHT:t.pageY-e.pageY>0?i.DIRECTION_UP:i.DIRECTION_DOWN},getDistance:function(t,e){var n=e.pageX-t.pageX,i=e.pageY-t.pageY;return Math.sqrt(n*n+i*i)},getScale:function(t,e){return t.length>=2&&e.length>=2?this.getDistance(e[0],e[1])/this.getDistance(t[0],t[1]):1},getRotation:function(t,e){return t.length>=2&&e.length>=2?this.getAngle(e[1],e[0])-this.getAngle(t[1],t[0]):0},isVertical:function(t){return t==i.DIRECTION_UP||t==i.DIRECTION_DOWN},stopDefaultBrowserBehavior:function(t,e){var n,i=["webkit","khtml","moz","ms","o",""];if(e&&t.style){for(var r=0;i.length>r;r++)for(var o in e)e.hasOwnProperty(o)&&(n=o,i[r]&&(n=i[r]+n.substring(0,1).toUpperCase()+n.substring(1)),t.style[n]=e[o]);"none"==e.userSelect&&(t.onselectstart=function(){return!1})}}},i.detection={gestures:[],current:null,previous:null,stopped:!1,startDetect:function(t,e){this.current||(this.stopped=!1,this.current={inst:t,startEvent:i.utils.extend({},e),lastEvent:!1,name:""},this.detect(e))},detect:function(t){if(this.current&&!this.stopped){t=this.extendEventData(t);for(var e=this.current.inst.options,n=0,r=this.gestures.length;r>n;n++){var o=this.gestures[n];if(!this.stopped&&e[o.name]!==!1&&o.handler.call(o,t,this.current.inst)===!1){this.stopDetect();break}}return this.current&&(this.current.lastEvent=t),t.eventType==i.EVENT_END&&!t.touches.length-1&&this.stopDetect(),t}},stopDetect:function(){this.previous=i.utils.extend({},this.current),this.current=null,this.stopped=!0},extendEventData:function(t){var e=this.current.startEvent;if(e&&(t.touches.length!=e.touches.length||t.touches===e.touches)){e.touches=[];for(var n=0,r=t.touches.length;r>n;n++)e.touches.push(i.utils.extend({},t.touches[n]))}var o=t.timeStamp-e.timeStamp,s=t.center.pageX-e.center.pageX,a=t.center.pageY-e.center.pageY,c=i.utils.getVelocity(o,s,a);return i.utils.extend(t,{deltaTime:o,deltaX:s,deltaY:a,velocityX:c.x,velocityY:c.y,distance:i.utils.getDistance(e.center,t.center),angle:i.utils.getAngle(e.center,t.center),direction:i.utils.getDirection(e.center,t.center),scale:i.utils.getScale(e.touches,t.touches),rotation:i.utils.getRotation(e.touches,t.touches),startEvent:e}),t},register:function(t){var n=t.defaults||{};return n[t.name]===e&&(n[t.name]=!0),i.utils.extend(i.defaults,n,!0),t.index=t.index||1e3,this.gestures.push(t),this.gestures.sort(function(t,e){return t.index<e.index?-1:t.index>e.index?1:0}),this.gestures}},i.gestures=i.gestures||{},i.gestures.Hold={name:"hold",index:10,defaults:{hold_timeout:500,hold_threshold:1},timer:null,handler:function(t,e){switch(t.eventType){case i.EVENT_START:clearTimeout(this.timer),i.detection.current.name=this.name,this.timer=setTimeout(function(){"hold"==i.detection.current.name&&e.trigger("hold",t)},e.options.hold_timeout);break;case i.EVENT_MOVE:t.distance>e.options.hold_threshold&&clearTimeout(this.timer);break;case i.EVENT_END:clearTimeout(this.timer)}}},i.gestures.Tap={name:"tap",index:100,defaults:{tap_max_touchtime:250,tap_max_distance:10,tap_always:!0,doubletap_distance:20,doubletap_interval:300},handler:function(t,e){if(t.eventType==i.EVENT_END){var n=i.detection.previous,r=!1;if(t.deltaTime>e.options.tap_max_touchtime||t.distance>e.options.tap_max_distance)return;n&&"tap"==n.name&&t.timeStamp-n.lastEvent.timeStamp<e.options.doubletap_interval&&t.distance<e.options.doubletap_distance&&(e.trigger("doubletap",t),r=!0),(!r||e.options.tap_always)&&(i.detection.current.name="tap",e.trigger(i.detection.current.name,t))}}},i.gestures.Swipe={name:"swipe",index:40,defaults:{swipe_max_touches:1,swipe_velocity:.7},handler:function(t,e){if(t.eventType==i.EVENT_END){if(e.options.swipe_max_touches>0&&t.touches.length>e.options.swipe_max_touches)return;(t.velocityX>e.options.swipe_velocity||t.velocityY>e.options.swipe_velocity)&&(e.trigger(this.name,t),e.trigger(this.name+t.direction,t))}}},i.gestures.Drag={name:"drag",index:50,defaults:{drag_min_distance:10,drag_max_touches:1,drag_block_horizontal:!1,drag_block_vertical:!1,drag_lock_to_axis:!1,drag_lock_min_distance:25},triggered:!1,handler:function(t,n){if(i.detection.current.name!=this.name&&this.triggered)return n.trigger(this.name+"end",t),this.triggered=!1,e;if(!(n.options.drag_max_touches>0&&t.touches.length>n.options.drag_max_touches))switch(t.eventType){case i.EVENT_START:this.triggered=!1;break;case i.EVENT_MOVE:if(t.distance<n.options.drag_min_distance&&i.detection.current.name!=this.name)return;i.detection.current.name=this.name,(i.detection.current.lastEvent.drag_locked_to_axis||n.options.drag_lock_to_axis&&n.options.drag_lock_min_distance<=t.distance)&&(t.drag_locked_to_axis=!0);var r=i.detection.current.lastEvent.direction;t.drag_locked_to_axis&&r!==t.direction&&(t.direction=i.utils.isVertical(r)?0>t.deltaY?i.DIRECTION_UP:i.DIRECTION_DOWN:0>t.deltaX?i.DIRECTION_LEFT:i.DIRECTION_RIGHT),this.triggered||(n.trigger(this.name+"start",t),this.triggered=!0),n.trigger(this.name,t),n.trigger(this.name+t.direction,t),(n.options.drag_block_vertical&&i.utils.isVertical(t.direction)||n.options.drag_block_horizontal&&!i.utils.isVertical(t.direction))&&t.preventDefault();break;case i.EVENT_END:this.triggered&&n.trigger(this.name+"end",t),this.triggered=!1}}},i.gestures.Transform={name:"transform",index:45,defaults:{transform_min_scale:.01,transform_min_rotation:1,transform_always_block:!1},triggered:!1,handler:function(t,n){if(i.detection.current.name!=this.name&&this.triggered)return n.trigger(this.name+"end",t),this.triggered=!1,e;if(!(2>t.touches.length))switch(n.options.transform_always_block&&t.preventDefault(),t.eventType){case i.EVENT_START:this.triggered=!1;break;case i.EVENT_MOVE:var r=Math.abs(1-t.scale),o=Math.abs(t.rotation);if(n.options.transform_min_scale>r&&n.options.transform_min_rotation>o)return;i.detection.current.name=this.name,this.triggered||(n.trigger(this.name+"start",t),this.triggered=!0),n.trigger(this.name,t),o>n.options.transform_min_rotation&&n.trigger("rotate",t),r>n.options.transform_min_scale&&(n.trigger("pinch",t),n.trigger("pinch"+(1>t.scale?"in":"out"),t));break;case i.EVENT_END:this.triggered&&n.trigger(this.name+"end",t),this.triggered=!1}}},i.gestures.Touch={name:"touch",index:-1/0,defaults:{prevent_default:!1,prevent_mouseevents:!1},handler:function(t,n){return n.options.prevent_mouseevents&&t.pointerType==i.POINTER_MOUSE?(t.stopDetect(),e):(n.options.prevent_default&&t.preventDefault(),t.eventType==i.EVENT_START&&n.trigger(this.name,t),e)}},i.gestures.Release={name:"release",index:1/0,handler:function(t,e){t.eventType==i.EVENT_END&&e.trigger(this.name,t)}},"object"==typeof module&&"object"==typeof module.exports?module.exports=i:(t.Hammer=i,"function"==typeof t.define&&t.define.amd&&t.define("hammer",[],function(){return i}))})(this),function(t,e){"use strict";t!==e&&(Hammer.event.bindDom=function(n,i,r){t(n).on(i,function(t){var n=t.originalEvent||t;n.pageX===e&&(n.pageX=t.pageX,n.pageY=t.pageY),n.target||(n.target=t.target),n.which===e&&(n.which=n.button),n.preventDefault||(n.preventDefault=t.preventDefault),n.stopPropagation||(n.stopPropagation=t.stopPropagation),r.call(this,n)})},Hammer.Instance.prototype.on=function(e,n){return t(this.element).on(e,n)},Hammer.Instance.prototype.off=function(e,n){return t(this.element).off(e,n)},Hammer.Instance.prototype.trigger=function(e,n){var i=t(this.element);return i.has(n.target).length&&(i=t(n.target)),i.trigger({type:e,gesture:n})},t.fn.hammer=function(e){return this.each(function(){var n=t(this),i=n.data("hammer");i?i&&e&&Hammer.utils.extend(i.options,e):n.data("hammer",new Hammer(this,e||{}))})})}(window.jQuery||window.Zepto);
var Handlebars = (function() {
var __module3__ = (function() {
"use strict";
var __exports__;
function SafeString(string) {
this.string = string;
}
SafeString.prototype.toString = function() {
return "" + this.string;
};
__exports__ = SafeString;
return __exports__;
})();
var __module2__ = (function(__dependency1__) {
"use strict";
var __exports__ = {};
var SafeString = __dependency1__;
var escape = {
"&": "&amp;",
"<": "&lt;",
">": "&gt;",
'"': "&quot;",
"'": "&#x27;",
"`": "&#x60;"
};
var badChars = /[&<>"'`]/g;
var possible = /[&<>"'`]/;
function escapeChar(chr) {
return escape[chr] || "&amp;";
}
function extend(obj, value) {
for(var key in value) {
if(Object.prototype.hasOwnProperty.call(value, key)) {
obj[key] = value[key];
}
}
}
__exports__.extend = extend;var toString = Object.prototype.toString;
__exports__.toString = toString;
var isFunction = function(value) {
return typeof value === 'function';
};
if (isFunction(/x/)) {
isFunction = function(value) {
return typeof value === 'function' && toString.call(value) === '[object Function]';
};
}
var isFunction;
__exports__.isFunction = isFunction;
var isArray = Array.isArray || function(value) {
return (value && typeof value === 'object') ? toString.call(value) === '[object Array]' : false;
};
__exports__.isArray = isArray;
function escapeExpression(string) {
if (string instanceof SafeString) {
return string.toString();
} else if (!string && string !== 0) {
return "";
}
string = "" + string;
if(!possible.test(string)) { return string; }
return string.replace(badChars, escapeChar);
}
__exports__.escapeExpression = escapeExpression;function isEmpty(value) {
if (!value && value !== 0) {
return true;
} else if (isArray(value) && value.length === 0) {
return true;
} else {
return false;
}
}
__exports__.isEmpty = isEmpty;
return __exports__;
})(__module3__);
var __module4__ = (function() {
"use strict";
var __exports__;
var errorProps = ['description', 'fileName', 'lineNumber', 'message', 'name', 'number', 'stack'];
function Exception(message, node) {
var line;
if (node && node.firstLine) {
line = node.firstLine;
message += ' - ' + line + ':' + node.firstColumn;
}
var tmp = Error.prototype.constructor.call(this, message);
for (var idx = 0; idx < errorProps.length; idx++) {
this[errorProps[idx]] = tmp[errorProps[idx]];
}
if (line) {
this.lineNumber = line;
this.column = node.firstColumn;
}
}
Exception.prototype = new Error();
__exports__ = Exception;
return __exports__;
})();
var __module1__ = (function(__dependency1__, __dependency2__) {
"use strict";
var __exports__ = {};
var Utils = __dependency1__;
var Exception = __dependency2__;
var VERSION = "1.3.0";
__exports__.VERSION = VERSION;var COMPILER_REVISION = 4;
__exports__.COMPILER_REVISION = COMPILER_REVISION;
var REVISION_CHANGES = {
1: '<= 1.0.rc.2', // 1.0.rc.2 is actually rev2 but doesn't report it
2: '== 1.0.0-rc.3',
3: '== 1.0.0-rc.4',
4: '>= 1.0.0'
};
__exports__.REVISION_CHANGES = REVISION_CHANGES;
var isArray = Utils.isArray,
isFunction = Utils.isFunction,
toString = Utils.toString,
objectType = '[object Object]';
function HandlebarsEnvironment(helpers, partials) {
this.helpers = helpers || {};
this.partials = partials || {};
registerDefaultHelpers(this);
}
__exports__.HandlebarsEnvironment = HandlebarsEnvironment;HandlebarsEnvironment.prototype = {
constructor: HandlebarsEnvironment,
logger: logger,
log: log,
registerHelper: function(name, fn, inverse) {
if (toString.call(name) === objectType) {
if (inverse || fn) { throw new Exception('Arg not supported with multiple helpers'); }
Utils.extend(this.helpers, name);
} else {
if (inverse) { fn.not = inverse; }
this.helpers[name] = fn;
}
},
registerPartial: function(name, str) {
if (toString.call(name) === objectType) {
Utils.extend(this.partials,  name);
} else {
this.partials[name] = str;
}
}
};
function registerDefaultHelpers(instance) {
instance.registerHelper('helperMissing', function(arg) {
if(arguments.length === 2) {
return undefined;
} else {
throw new Exception("Missing helper: '" + arg + "'");
}
});
instance.registerHelper('blockHelperMissing', function(context, options) {
var inverse = options.inverse || function() {}, fn = options.fn;
if (isFunction(context)) { context = context.call(this); }
if(context === true) {
return fn(this);
} else if(context === false || context == null) {
return inverse(this);
} else if (isArray(context)) {
if(context.length > 0) {
return instance.helpers.each(context, options);
} else {
return inverse(this);
}
} else {
return fn(context);
}
});
instance.registerHelper('each', function(context, options) {
var fn = options.fn, inverse = options.inverse;
var i = 0, ret = "", data;
if (isFunction(context)) { context = context.call(this); }
if (options.data) {
data = createFrame(options.data);
}
if(context && typeof context === 'object') {
if (isArray(context)) {
for(var j = context.length; i<j; i++) {
if (data) {
data.index = i;
data.first = (i === 0);
data.last  = (i === (context.length-1));
}
ret = ret + fn(context[i], { data: data });
}
} else {
for(var key in context) {
if(context.hasOwnProperty(key)) {
if(data) {
data.key = key;
data.index = i;
data.first = (i === 0);
}
ret = ret + fn(context[key], {data: data});
i++;
}
}
}
}
if(i === 0){
ret = inverse(this);
}
return ret;
});
instance.registerHelper('if', function(conditional, options) {
if (isFunction(conditional)) { conditional = conditional.call(this); }
if ((!options.hash.includeZero && !conditional) || Utils.isEmpty(conditional)) {
return options.inverse(this);
} else {
return options.fn(this);
}
});
instance.registerHelper('unless', function(conditional, options) {
return instance.helpers['if'].call(this, conditional, {fn: options.inverse, inverse: options.fn, hash: options.hash});
});
instance.registerHelper('with', function(context, options) {
if (isFunction(context)) { context = context.call(this); }
if (!Utils.isEmpty(context)) return options.fn(context);
});
instance.registerHelper('log', function(context, options) {
var level = options.data && options.data.level != null ? parseInt(options.data.level, 10) : 1;
instance.log(level, context);
});
}
var logger = {
methodMap: { 0: 'debug', 1: 'info', 2: 'warn', 3: 'error' },
DEBUG: 0,
INFO: 1,
WARN: 2,
ERROR: 3,
level: 3,
log: function(level, obj) {
if (logger.level <= level) {
var method = logger.methodMap[level];
if (typeof console !== 'undefined' && console[method]) {
console[method].call(console, obj);
}
}
}
};
__exports__.logger = logger;
function log(level, obj) { logger.log(level, obj); }
__exports__.log = log;var createFrame = function(object) {
var obj = {};
Utils.extend(obj, object);
return obj;
};
__exports__.createFrame = createFrame;
return __exports__;
})(__module2__, __module4__);
var __module5__ = (function(__dependency1__, __dependency2__, __dependency3__) {
"use strict";
var __exports__ = {};
var Utils = __dependency1__;
var Exception = __dependency2__;
var COMPILER_REVISION = __dependency3__.COMPILER_REVISION;
var REVISION_CHANGES = __dependency3__.REVISION_CHANGES;
function checkRevision(compilerInfo) {
var compilerRevision = compilerInfo && compilerInfo[0] || 1,
currentRevision = COMPILER_REVISION;
if (compilerRevision !== currentRevision) {
if (compilerRevision < currentRevision) {
var runtimeVersions = REVISION_CHANGES[currentRevision],
compilerVersions = REVISION_CHANGES[compilerRevision];
throw new Exception("Template was precompiled with an older version of Handlebars than the current runtime. "+
"Please update your precompiler to a newer version ("+runtimeVersions+") or downgrade your runtime to an older version ("+compilerVersions+").");
} else {
throw new Exception("Template was precompiled with a newer version of Handlebars than the current runtime. "+
"Please update your runtime to a newer version ("+compilerInfo[1]+").");
}
}
}
__exports__.checkRevision = checkRevision;// TODO: Remove this line and break up compilePartial
function template(templateSpec, env) {
if (!env) {
throw new Exception("No environment passed to template");
}
var invokePartialWrapper = function(partial, name, context, helpers, partials, data) {
var result = env.VM.invokePartial.apply(this, arguments);
if (result != null) { return result; }
if (env.compile) {
var options = { helpers: helpers, partials: partials, data: data };
partials[name] = env.compile(partial, { data: data !== undefined }, env);
return partials[name](context, options);
} else {
throw new Exception("The partial " + name + " could not be compiled when running in runtime-only mode");
}
};
var container = {
escapeExpression: Utils.escapeExpression,
invokePartial: invokePartialWrapper,
programs: [],
program: function(i, fn, data) {
var programWrapper = this.programs[i];
if(data) {
programWrapper = program(i, fn, data);
} else if (!programWrapper) {
programWrapper = this.programs[i] = program(i, fn);
}
return programWrapper;
},
merge: function(param, common) {
var ret = param || common;
if (param && common && (param !== common)) {
ret = {};
Utils.extend(ret, common);
Utils.extend(ret, param);
}
return ret;
},
programWithDepth: env.VM.programWithDepth,
noop: env.VM.noop,
compilerInfo: null
};
return function(context, options) {
options = options || {};
var namespace = options.partial ? options : env,
helpers,
partials;
if (!options.partial) {
helpers = options.helpers;
partials = options.partials;
}
var result = templateSpec.call(
container,
namespace, context,
helpers,
partials,
options.data);
if (!options.partial) {
env.VM.checkRevision(container.compilerInfo);
}
return result;
};
}
__exports__.template = template;function programWithDepth(i, fn, data) {
var args = Array.prototype.slice.call(arguments, 3);
var prog = function(context, options) {
options = options || {};
return fn.apply(this, [context, options.data || data].concat(args));
};
prog.program = i;
prog.depth = args.length;
return prog;
}
__exports__.programWithDepth = programWithDepth;function program(i, fn, data) {
var prog = function(context, options) {
options = options || {};
return fn(context, options.data || data);
};
prog.program = i;
prog.depth = 0;
return prog;
}
__exports__.program = program;function invokePartial(partial, name, context, helpers, partials, data) {
var options = { partial: true, helpers: helpers, partials: partials, data: data };
if(partial === undefined) {
throw new Exception("The partial " + name + " could not be found");
} else if(partial instanceof Function) {
return partial(context, options);
}
}
__exports__.invokePartial = invokePartial;function noop() { return ""; }
__exports__.noop = noop;
return __exports__;
})(__module2__, __module4__, __module1__);
var __module0__ = (function(__dependency1__, __dependency2__, __dependency3__, __dependency4__, __dependency5__) {
"use strict";
var __exports__;
var base = __dependency1__;
var SafeString = __dependency2__;
var Exception = __dependency3__;
var Utils = __dependency4__;
var runtime = __dependency5__;
var create = function() {
var hb = new base.HandlebarsEnvironment();
Utils.extend(hb, base);
hb.SafeString = SafeString;
hb.Exception = Exception;
hb.Utils = Utils;
hb.VM = runtime;
hb.template = function(spec) {
return runtime.template(spec, hb);
};
return hb;
};
var Handlebars = create();
Handlebars.create = create;
__exports__ = Handlebars;
return __exports__;
})(__module1__, __module3__, __module4__, __module2__, __module5__);
return __module0__;
})();
!function(e,n,t){function r(e){var n=w.className,t=Modernizr._config.classPrefix||"";if(S&&(n=n.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(r,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),S?w.className.baseVal=n:w.className=n)}function o(e,n){return typeof e===n}function s(){var e,n,t,r,s,i,a;for(var l in C)if(C.hasOwnProperty(l)){if(e=[],n=C[l],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(r=o(n.fn,"function")?n.fn():n.fn,s=0;s<e.length;s++)i=e[s],a=i.split("."),1===a.length?Modernizr[a[0]]=r:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=r),h.push((r?"":"no-")+a.join("-"))}}function i(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function a(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):S?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function l(){var e=n.body;return e||(e=a(S?"svg":"body"),e.fake=!0),e}function u(e,t,r,o){var s,i,u,f,c="modernizr",p=a("div"),d=l();if(parseInt(r,10))for(;r--;)u=a("div"),u.id=o?o[r]:c+(r+1),p.appendChild(u);return s=a("style"),s.type="text/css",s.id="s"+c,(d.fake?d:p).appendChild(s),d.appendChild(p),s.styleSheet?s.styleSheet.cssText=e:s.appendChild(n.createTextNode(e)),p.id=c,d.fake&&(d.style.background="",d.style.overflow="hidden",f=w.style.overflow,w.style.overflow="hidden",w.appendChild(d)),i=t(p,e),d.fake?(d.parentNode.removeChild(d),w.style.overflow=f,w.offsetHeight):p.parentNode.removeChild(p),!!i}function f(e,n){return!!~(""+e).indexOf(n)}function c(e,n){return function(){return e.apply(n,arguments)}}function p(e,n,t){var r;for(var s in e)if(e[s]in n)return t===!1?e[s]:(r=n[e[s]],o(r,"function")?c(r,t||n):r);return!1}function d(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function m(n,r){var o=n.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(d(n[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var s=[];o--;)s.push("("+d(n[o])+":"+r+")");return s=s.join(" or "),u("@supports ("+s+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return t}function v(e,n,r,s){function l(){c&&(delete A.style,delete A.modElem)}if(s=o(s,"undefined")?!1:s,!o(r,"undefined")){var u=m(e,r);if(!o(u,"undefined"))return u}for(var c,p,d,v,y,g=["modernizr","tspan","samp"];!A.style&&g.length;)c=!0,A.modElem=a(g.shift()),A.style=A.modElem.style;for(d=e.length,p=0;d>p;p++)if(v=e[p],y=A.style[v],f(v,"-")&&(v=i(v)),A.style[v]!==t){if(s||o(r,"undefined"))return l(),"pfx"==n?v:!0;try{A.style[v]=r}catch(h){}if(A.style[v]!=y)return l(),"pfx"==n?v:!0}return l(),!1}function y(e,n,t,r,s){var i=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+N.join(i+" ")+i).split(" ");return o(n,"string")||o(n,"undefined")?v(a,n,r,s):(a=(e+" "+T.join(i+" ")+i).split(" "),p(a,n,t))}function g(e,n,r){return y(e,t,t,n,r)}var h=[],C=[],x={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){C.push({name:e,fn:n,options:t})},addAsyncTest:function(e){C.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=x,Modernizr=new Modernizr;var w=n.documentElement,S="svg"===w.nodeName.toLowerCase(),b=x._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];x._prefixes=b;var _="Moz O ms Webkit",T=x._config.usePrefixes?_.toLowerCase().split(" "):[];x._domPrefixes=T,Modernizr.addTest("video",function(){var e=a("video"),n=!1;try{(n=!!e.canPlayType)&&(n=new Boolean(n),n.ogg=e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),n.h264=e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),n.webm=e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""),n.vp9=e.canPlayType('video/webm; codecs="vp9"').replace(/^no$/,""),n.hls=e.canPlayType('application/x-mpegURL; codecs="avc1.42E01E"').replace(/^no$/,""))}catch(t){}return n}),Modernizr.addTest("opacity",function(){var e=a("a").style;return e.cssText=b.join("opacity:.55;"),/^0.55$/.test(e.opacity)}),Modernizr.addTest("rgba",function(){var e=a("a").style;return e.cssText="background-color:rgba(150,255,150,.5)",(""+e.backgroundColor).indexOf("rgba")>-1});var P="CSS"in e&&"supports"in e.CSS,E="supportsCSS"in e;Modernizr.addTest("supports",P||E);var z=function(){var n=e.matchMedia||e.msMatchMedia;return n?function(e){var t=n(e);return t&&t.matches||!1}:function(n){var t=!1;return u("@media "+n+" { #modernizr { position: absolute; } }",function(n){t="absolute"==(e.getComputedStyle?e.getComputedStyle(n,null):n.currentStyle).position}),t}}();x.mq=z;var k=x.testStyles=u,N=x._config.usePrefixes?_.split(" "):[];x._cssomPrefixes=N;var $=function(n){var r,o=b.length,s=e.CSSRule;if("undefined"==typeof s)return t;if(!n)return!1;if(n=n.replace(/^@/,""),r=n.replace(/-/g,"_").toUpperCase()+"_RULE",r in s)return"@"+n;for(var i=0;o>i;i++){var a=b[i],l=a.toUpperCase()+"_"+r;if(l in s)return"@-"+a.toLowerCase()+"-"+n}return!1};x.atRule=$;var j={elem:a("modernizr")};Modernizr._q.push(function(){delete j.elem});var A={style:j.elem.style};Modernizr._q.unshift(function(){delete A.style});x.testProp=function(e,n,r){return v([e],t,n,r)};x.testAllProps=y;var L=x.prefixed=function(e,n,t){return 0===e.indexOf("@")?$(e):(-1!=e.indexOf("-")&&(e=i(e)),n?y(e,n,t):y(e,"pfx"))};Modernizr.addTest("fullscreen",!(!L("exitFullscreen",n,!1)&&!L("cancelFullScreen",n,!1))),x.testAllProps=g,Modernizr.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&g("transform","scale(1)",!0)}),Modernizr.addTest("csstransforms3d",function(){var e=!!g("perspective","1px",!0),n=Modernizr._config.usePrefixes;if(e&&(!n||"webkitPerspective"in w.style)){var t,r="#modernizr{width:0;height:0}";Modernizr.supports?t="@supports (perspective: 1px)":(t="@media (transform-3d)",n&&(t+=",(-webkit-transform-3d)")),t+="{#modernizr{width:7px;height:18px;margin:0;padding:0;border:0}}",k(r+t,function(n){e=7===n.offsetWidth&&18===n.offsetHeight})}return e}),Modernizr.addTest("csstransitions",g("transition","all",!0)),s(),r(h),delete x.addTest,delete x.addAsyncTest;for(var O=0;O<Modernizr._q.length;O++)Modernizr._q[O]();e.Modernizr=Modernizr}(window,document);
(function(i){function h(a,b,c,d,e){this._listener=b;this._isOnce=c;this.context=d;this._signal=a;this._priority=e||0}function g(a,b){if(typeof a!=="function")throw Error("listener is a required param of {fn}() and should be a Function.".replace("{fn}",b));}function e(){this._bindings=[];this._prevParams=null;var a=this;this.dispatch=function(){e.prototype.dispatch.apply(a,arguments)}}h.prototype={active:!0,params:null,execute:function(a){var b;this.active&&this._listener&&(a=this.params?this.params.concat(a):
a,b=this._listener.apply(this.context,a),this._isOnce&&this.detach());return b},detach:function(){return this.isBound()?this._signal.remove(this._listener,this.context):null},isBound:function(){return!!this._signal&&!!this._listener},isOnce:function(){return this._isOnce},getListener:function(){return this._listener},getSignal:function(){return this._signal},_destroy:function(){delete this._signal;delete this._listener;delete this.context},toString:function(){return"[SignalBinding isOnce:"+this._isOnce+
", isBound:"+this.isBound()+", active:"+this.active+"]"}};e.prototype={VERSION:"1.0.0",memorize:!1,_shouldPropagate:!0,active:!0,_registerListener:function(a,b,c,d){var e=this._indexOfListener(a,c);if(e!==-1){if(a=this._bindings[e],a.isOnce()!==b)throw Error("You cannot add"+(b?"":"Once")+"() then add"+(!b?"":"Once")+"() the same listener without removing the relationship first.");}else a=new h(this,a,b,c,d),this._addBinding(a);this.memorize&&this._prevParams&&a.execute(this._prevParams);return a},
_addBinding:function(a){var b=this._bindings.length;do--b;while(this._bindings[b]&&a._priority<=this._bindings[b]._priority);this._bindings.splice(b+1,0,a)},_indexOfListener:function(a,b){for(var c=this._bindings.length,d;c--;)if(d=this._bindings[c],d._listener===a&&d.context===b)return c;return-1},has:function(a,b){return this._indexOfListener(a,b)!==-1},add:function(a,b,c){g(a,"add");return this._registerListener(a,!1,b,c)},addOnce:function(a,b,c){g(a,"addOnce");return this._registerListener(a,
!0,b,c)},remove:function(a,b){g(a,"remove");var c=this._indexOfListener(a,b);c!==-1&&(this._bindings[c]._destroy(),this._bindings.splice(c,1));return a},removeAll:function(){for(var a=this._bindings.length;a--;)this._bindings[a]._destroy();this._bindings.length=0},getNumListeners:function(){return this._bindings.length},halt:function(){this._shouldPropagate=!1},dispatch:function(a){if(this.active){var b=Array.prototype.slice.call(arguments),c=this._bindings.length,d;if(this.memorize)this._prevParams=
b;if(c){d=this._bindings.slice();this._shouldPropagate=!0;do c--;while(d[c]&&this._shouldPropagate&&d[c].execute(b)!==!1)}}},forget:function(){this._prevParams=null},dispose:function(){this.removeAll();delete this._bindings;delete this._prevParams},toString:function(){return"[Signal active:"+this.active+" numListeners:"+this.getNumListeners()+"]"}};var f=e;f.Signal=e;typeof define==="function"&&define.amd?define(function(){return f}):typeof module!=="undefined"&&module.exports?module.exports=f:i.signals=
f})(this);
(function(){var a=function(b){var c=(function(k){var p=25,r=k.document,n=k.history,x=b.Signal,f,v,m,F,d,D,t=/#(.*)$/,j=/(\?.*)|(\#.*)/,g=/^\#/,i=(!+"\v1"),B=("onhashchange" in k)&&r.documentMode!==7,e=i&&!B,s=(location.protocol==="file:");function o(G){return String(G||"").replace(/[\\.+*?\^$\[\](){}\/'#]/g,"\\$&")}function u(H){if(!H){return""}var G=new RegExp("^"+o(f.prependHash)+"|"+o(f.appendHash)+"$","g");return H.replace(G,"")}function E(){var G=t.exec(f.getURL());return(G&&G[1])?decodeURIComponent(G[1]):""}function A(){return(d)?d.contentWindow.frameHash:null}function z(){d=r.createElement("iframe");d.src="about:blank";d.style.display="none";r.body.appendChild(d)}function h(){if(d&&v!==A()){var G=d.contentWindow.document;G.open();G.write("<html><head><title>"+r.title+'</title><script type="text/javascript">var frameHash="'+v+'";<\/script></head><body>&nbsp;</body></html>');G.close()}}function l(G,H){if(v!==G){var I=v;v=G;if(e){if(!H){h()}else{d.contentWindow.frameHash=G}}f.changed.dispatch(u(G),u(I))}}if(e){D=function(){var H=E(),G=A();if(G!==v&&G!==H){f.setHash(u(G))}else{if(H!==v){l(H)}}}}else{D=function(){var G=E();if(G!==v){l(G)}}}function C(I,G,H){if(I.addEventListener){I.addEventListener(G,H,false)}else{if(I.attachEvent){I.attachEvent("on"+G,H)}}}function y(I,G,H){if(I.removeEventListener){I.removeEventListener(G,H,false)}else{if(I.detachEvent){I.detachEvent("on"+G,H)}}}function q(H){H=Array.prototype.slice.call(arguments);var G=H.join(f.separator);G=G?f.prependHash+G.replace(g,"")+f.appendHash:G;return G}function w(G){G=encodeURI(G);if(i&&s){G=G.replace(/\?/,"%3F")}return G}f={VERSION:"1.1.4",appendHash:"",prependHash:"/",separator:"/",changed:new x(),stopped:new x(),initialized:new x(),init:function(){if(F){return}v=E();if(B){C(k,"hashchange",D)}else{if(e){if(!d){z()}h()}m=setInterval(D,p)}F=true;f.initialized.dispatch(u(v))},stop:function(){if(!F){return}if(B){y(k,"hashchange",D)}else{clearInterval(m);m=null}F=false;f.stopped.dispatch(u(v))},isActive:function(){return F},getURL:function(){return k.location.href},getBaseURL:function(){return f.getURL().replace(j,"")},setHash:function(G){G=q.apply(null,arguments);if(G!==v){l(G);if(G===v){k.location.hash="#"+w(G)}}},replaceHash:function(G){G=q.apply(null,arguments);if(G!==v){l(G,true);if(G===v){k.location.replace("#"+w(G))}}},getHash:function(){return u(v)},getHashAsArray:function(){return f.getHash().split(f.separator)},dispose:function(){f.stop();f.initialized.dispose();f.stopped.dispose();f.changed.dispose();d=f=k.hasher=null},toString:function(){return'[hasher version="'+f.VERSION+'" hash="'+f.getHash()+'"]'}};f.initialized.memorize=true;return f}(window));return c};if(typeof define==="function"&&define.amd){define(["signals"],a)}else{if(typeof exports==="object"){module.exports=a(require("signals"))}else{window.hasher=a(window.signals)}}}());
;(function(factory) {
if (typeof define === 'function' && define.amd) {
define(['jquery'], factory);
}
else if (typeof exports === 'object') {
module.exports = factory(require("jquery"));
}
else {
factory(jQuery);
}
}
(function($) {
"use strict";
var pluginName = "tinyscrollbar"
,   defaults = {
axis : 'y'
,   wheel : true
,   wheelSpeed : 40
,   wheelLock : true
,   touchLock : true
,   trackSize : false
,   thumbSize : false
,   thumbSizeMin : 20
,   touch        : true   // Set to false to disable touch on viewport, & limit touch to scrollbar
}
;
function Plugin($container, options) {
this.options = $.extend({}, defaults, options);
this._defaults = defaults;
this._name = pluginName;
var self = this
,   $viewport = $container.find(".viewport")
,   $overview = $container.find(".overview")
,   $scrollbar = $container.find(".scrollbar")
,   $track = $scrollbar.find(".track")
,   $thumb = $scrollbar.find(".thumb")
,   hasTouchEvents = ("ontouchstart" in document.documentElement)
,   wheelEvent = "onwheel" in document.createElement("div") ? "wheel" : // Modern browsers support "wheel"
document.onmousewheel !== undefined ? "mousewheel" : // Webkit and IE support at least "mousewheel"
"DOMMouseScroll" // let's assume that remaining browsers are older Firefox
,   isHorizontal = this.options.axis === 'x'
,   sizeLabel = isHorizontal ? "width" : "height"
,   posiLabel = isHorizontal ? "left" : "top"
,   mousePosition = 0
;
this.contentPosition = 0;
this.viewportSize = 0;
this.contentSize = 0;
this.contentRatio = 0;
this.trackSize = 0;
this.trackRatio = 0;
this.thumbSize = 0;
this.thumbPosition = 0;
this.hasContentToSroll = false;
function _initialize() {
self.update();
_setEvents();
return self;
}
this.update = function(scrollTo) {
var sizeLabelCap = sizeLabel.charAt(0).toUpperCase() + sizeLabel.slice(1).toLowerCase();
this.viewportSize = $viewport[0]['offset'+ sizeLabelCap];
this.contentSize = $overview[0]['scroll'+ sizeLabelCap];
this.contentRatio = this.viewportSize / this.contentSize;
this.trackSize = this.options.trackSize || this.viewportSize;
this.thumbSize = Math.min(this.trackSize, Math.max(this.options.thumbSizeMin, (this.options.thumbSize || (this.trackSize * this.contentRatio))));
this.trackRatio = (this.contentSize - this.viewportSize) / (this.trackSize - this.thumbSize);
this.hasContentToSroll = this.contentRatio < 1;
$scrollbar.toggleClass("disable", !this.hasContentToSroll);
switch (scrollTo) {
case "bottom":
this.contentPosition = Math.max(this.contentSize - this.viewportSize, 0);
break;
case "relative":
this.contentPosition = Math.min(Math.max(this.contentSize - this.viewportSize, 0), Math.max(0, this.contentPosition));
break;
default:
this.contentPosition = parseInt(scrollTo, 10) || 0;
}
this.thumbPosition = this.contentPosition / this.trackRatio;
_setCss();
return self;
};
function _setCss() {
$thumb.css(posiLabel, self.thumbPosition);
$overview.css(posiLabel, -self.contentPosition);
$scrollbar.css(sizeLabel, self.trackSize);
$track.css(sizeLabel, self.trackSize);
$thumb.css(sizeLabel, self.thumbSize);
}
function _setEvents() {
if(hasTouchEvents) {
var _$el;
if (self.options.touch) {
_$el = $viewport[0];
} else {
_$el = $scrollbar[0];
}
_$el.ontouchstart = function(event) {
if(1 === event.touches.length) {
event.stopPropagation();
_start(event.touches[0]);
}
};
}
else {
$thumb.bind("mousedown", function(event){
event.stopPropagation();
_start(event);
});
$track.bind("mousedown", function(event){
_start(event, true);
});
}
$(window).resize(function() {
self.update("relative");
});
if(self.options.wheel && window.addEventListener) {
$container[0].addEventListener(wheelEvent, _wheel, false);
}
else if(self.options.wheel) {
$container[0].onmousewheel = _wheel;
}
}
function _isAtBegin() {
return self.contentPosition > 0;
}
function _isAtEnd() {
return self.contentPosition <= (self.contentSize - self.viewportSize) - 5;
}
function _start(event, gotoMouse) {
if(self.hasContentToSroll) {
$("body").addClass("noSelect");
mousePosition = gotoMouse ? $thumb.offset()[posiLabel] : (isHorizontal ? event.pageX : event.pageY);
if(hasTouchEvents) {
document.ontouchmove = function(event) {
if(self.options.touchLock || _isAtBegin() && _isAtEnd()) {
event.preventDefault();
}
_drag(event.touches[0]);
};
document.ontouchend = _end;
}
else {
$(document).bind("mousemove", _drag);
$(document).bind("mouseup", _end);
$thumb.bind("mouseup", _end);
$track.bind("mouseup", _end);
}
_drag(event);
}
}
function _wheel(event) {
if(self.hasContentToSroll) {
var evntObj = event || window.event
,   wheelDelta = -(evntObj.deltaY || evntObj.detail || (-1 / 3 * evntObj.wheelDelta)) / 40
,   multiply = (evntObj.deltaMode === 1) ? self.options.wheelSpeed : 1
;
self.contentPosition -= wheelDelta * multiply * self.options.wheelSpeed;
self.contentPosition = Math.min((self.contentSize - self.viewportSize), Math.max(0, self.contentPosition));
self.thumbPosition = self.contentPosition / self.trackRatio;
$container.trigger("move");
$thumb.css(posiLabel, self.thumbPosition);
$overview.css(posiLabel, -self.contentPosition);
if(self.options.wheelLock || _isAtBegin() && _isAtEnd()) {
evntObj = $.event.fix(evntObj);
evntObj.preventDefault();
}
}
}
function _drag(event) {
if(self.hasContentToSroll) {
var mousePositionNew = isHorizontal ? event.pageX : event.pageY
,   thumbPositionDelta = hasTouchEvents ? (mousePosition - mousePositionNew) : (mousePositionNew - mousePosition)
,   thumbPositionNew = Math.min((self.trackSize - self.thumbSize), Math.max(0, self.thumbPosition + thumbPositionDelta))
;
self.contentPosition = thumbPositionNew * self.trackRatio;
$container.trigger("move");
$thumb.css(posiLabel, thumbPositionNew);
$overview.css(posiLabel, -self.contentPosition);
}
}
function _end() {
self.thumbPosition = parseInt($thumb.css(posiLabel), 10) || 0;
$("body").removeClass("noSelect");
$(document).unbind("mousemove", _drag);
$(document).unbind("mouseup", _end);
$thumb.unbind("mouseup", _end);
$track.unbind("mouseup", _end);
document.ontouchmove = document.ontouchend = null;
}
return _initialize();
}
$.fn[pluginName] = function(options) {
return this.each(function() {
if(!$.data(this, "plugin_" + pluginName)) {
$.data(this, "plugin_" + pluginName, new Plugin($(this), options));
}
});
};
}));
if (typeof JSON !== 'object') {
JSON = {};
}
(function () {
'use strict';
function f(n) {
return n < 10 ? '0' + n : n;
}
if (typeof Date.prototype.toJSON !== 'function') {
Date.prototype.toJSON = function () {
return isFinite(this.valueOf())
? this.getUTCFullYear()     + '-' +
f(this.getUTCMonth() + 1) + '-' +
f(this.getUTCDate())      + 'T' +
f(this.getUTCHours())     + ':' +
f(this.getUTCMinutes())   + ':' +
f(this.getUTCSeconds())   + 'Z'
: null;
};
String.prototype.toJSON      =
Number.prototype.toJSON  =
Boolean.prototype.toJSON = function () {
return this.valueOf();
};
}
var cx = /[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
escapable = /[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
gap,
indent,
meta = {    // table of character substitutions
'\b': '\\b',
'\t': '\\t',
'\n': '\\n',
'\f': '\\f',
'\r': '\\r',
'"' : '\\"',
'\\': '\\\\'
},
rep;
function quote(string) {
escapable.lastIndex = 0;
return escapable.test(string) ? '"' + string.replace(escapable, function (a) {
var c = meta[a];
return typeof c === 'string'
? c
: '\\u' + ('0000' + a.charCodeAt(0).toString(16)).slice(-4);
}) + '"' : '"' + string + '"';
}
function str(key, holder) {
var i,          // The loop counter.
k,          // The member key.
v,          // The member value.
length,
mind = gap,
partial,
value = holder[key];
if (value && typeof value === 'object' &&
typeof value.toJSON === 'function') {
value = value.toJSON(key);
}
if (typeof rep === 'function') {
value = rep.call(holder, key, value);
}
switch (typeof value) {
case 'string':
return quote(value);
case 'number':
return isFinite(value) ? String(value) : 'null';
case 'boolean':
case 'null':
return String(value);
case 'object':
if (!value) {
return 'null';
}
gap += indent;
partial = [];
if (Object.prototype.toString.apply(value) === '[object Array]') {
length = value.length;
for (i = 0; i < length; i += 1) {
partial[i] = str(i, value) || 'null';
}
v = partial.length === 0
? '[]'
: gap
? '[\n' + gap + partial.join(',\n' + gap) + '\n' + mind + ']'
: '[' + partial.join(',') + ']';
gap = mind;
return v;
}
if (rep && typeof rep === 'object') {
length = rep.length;
for (i = 0; i < length; i += 1) {
if (typeof rep[i] === 'string') {
k = rep[i];
v = str(k, value);
if (v) {
partial.push(quote(k) + (gap ? ': ' : ':') + v);
}
}
}
} else {
for (k in value) {
if (Object.prototype.hasOwnProperty.call(value, k)) {
v = str(k, value);
if (v) {
partial.push(quote(k) + (gap ? ': ' : ':') + v);
}
}
}
}
v = partial.length === 0
? '{}'
: gap
? '{\n' + gap + partial.join(',\n' + gap) + '\n' + mind + '}'
: '{' + partial.join(',') + '}';
gap = mind;
return v;
}
}
if (typeof JSON.stringify !== 'function') {
JSON.stringify = function (value, replacer, space) {
var i;
gap = '';
indent = '';
if (typeof space === 'number') {
for (i = 0; i < space; i += 1) {
indent += ' ';
}
} else if (typeof space === 'string') {
indent = space;
}
rep = replacer;
if (replacer && typeof replacer !== 'function' &&
(typeof replacer !== 'object' ||
typeof replacer.length !== 'number')) {
throw new Error('JSON.stringify');
}
return str('', {'': value});
};
}
if (typeof JSON.parse !== 'function') {
JSON.parse = function (text, reviver) {
var j;
function walk(holder, key) {
var k, v, value = holder[key];
if (value && typeof value === 'object') {
for (k in value) {
if (Object.prototype.hasOwnProperty.call(value, k)) {
v = walk(value, k);
if (v !== undefined) {
value[k] = v;
} else {
delete value[k];
}
}
}
}
return reviver.call(holder, key, value);
}
text = String(text);
cx.lastIndex = 0;
if (cx.test(text)) {
text = text.replace(cx, function (a) {
return '\\u' +
('0000' + a.charCodeAt(0).toString(16)).slice(-4);
});
}
if (/^[\],:{}\s]*$/
.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g, '@')
.replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']')
.replace(/(?:^|:|,)(?:\s*\[)+/g, ''))) {
j = eval('(' + text + ')');
return typeof reviver === 'function'
? walk({'': j}, '')
: j;
}
throw new SyntaxError('JSON.parse');
};
}
}());
(function ( $ ) {
$.fn.limitedField = function( limit , callback) {
if (this.length === 0) {
return this;
}
var $field = this;
var _count;
var _lines;
var _charsToDelete;
var _lastIndex;
var limitLength = function() {
_lines = $field.val().split(/\r?\n|\r/g);
_count= 0;
for (var i = 0, j = _lines.length; i<j ; ++i)  {
_count += _lines[i].length;
}
if (_count>limit) {
_lastIndex = _lines.length-1;
_charsToDelete = _count-limit;
while (_charsToDelete>0) {
_lines[_lastIndex] = _lines[_lastIndex].substring(0,_lines[_lines.length-1].length - _charsToDelete);
_count -= _charsToDelete;
_lastIndex--;
_charsToDelete = _count-limit;
}
_lines = _lines.join('\n');
$field.val(_lines);
_count = limit;
}
if (typeof callback === "function") callback(_count, limit);
}
limitLength();
$field.on('input keyup', limitLength);
return this;
};
}( jQuery ));
var AssetLoader = function() {
this.loaded = []; // array of loaded files
this.errors = []; // logged errors
this.loadingList= []; // active loadingList
for (var i = 0, j = arguments.length; i<j; ++i) {
this.preload([arguments[i]]);
}
};
AssetLoader.prototype = {
preload: function( array, callback ) {
this.loadingList = typeof array === "string" ? [array] : array;
this.activeIndex = null;
this.callback = callback;
this.preloadIndex();
},
preloadIndex: function( ) {
this.activeIndex = this.activeIndex === null ? 0 : this.activeIndex+1;
if (this.activeIndex < this.loadingList.length ) {
if (this.isImage(this.loadingList[this.activeIndex]))
func = this.preloadImage;
else if (this.isVideo(this.loadingList[this.activeIndex]))
func = this.preloadVideo;
else {
this.preloadIndex(); //throw "File must be a supported video or image format";
return false;
}
func.call(this,this.loadingList[this.activeIndex]);
} else {
this.callback.call(this);
}
},
preloadImage: function( url ) {
if  (this.loaded.indexOf(url) === -1 ) {
var _img = new Image();
var _this = this;
_img.onload = function() {
_img.onload = null;
_this.loaded.push(url);
_this.preloadIndex();
};
_img.onerror = _img.onabort = function(e){
_this.errors.push({url: url, error:e});
};
_img.src = url;
} else {
this.preloadIndex();
}
},
preloadVideo: function( url ) {
if  (this.loaded.indexOf(url) < 0 ) {
var _video = document.createElement('video');
var _src   = document.createElement('source');
var _this = this;
_video.ondurationchange = function() {
_video.ondurationchange = null;
_this.loaded.push(url);
_this.preloadIndex();
};
_src.src = url;
_src.type = this.getVideoType(url);
_video.appendChild(_src);
} else {
_this.preloadIndex();
}
},
isImage: function(_url) {
return /^.*\.(jpg|jpeg|gif|bmp|png)$/.test(_url);
},
isVideo: function(_url) {
return /^.*\.(mpeg|mp4|ogg|avi)$/.test(_url);
},
getVideoType: function(_url) {
return "video/"+(_url.split(".").pop());
}
};
(function ( $ ) {
var Tooltip = function($trigger, options) {
this.init($trigger, options);
};
Tooltip.prototype = {
init: function($trigger, options) {
var _defaults = {
$container: $('.js-tooltip-container'),
$messageContainer: $('.js-tooltip-message-container'),
message: '.js-tooltip-message',
$triangle: $('.js-tooltip-triangle'),
minWidth: 50,
maxWidth: null,
margin: 10,
events: 'click blur'
};
var _this = this;
this.o = $.extend(_defaults, options);
this.$triggers = $trigger;
this.fn = {
toggle: function(e) {
_this.toggle(e, $(e.currentTarget));
}
};
this.$triggers.on(this.o.events, this.fn.toggle);
$(document).on('keydown', function(e) {
if(e.originalEvent.keyCode === 27 && _this.o.$container.hasClass('active')) {
_this.o.$container.toggleClass('active', false);
}
})
},
toggle: function(e, $trigger) {
e.preventDefault();
this.triggerPosition = $trigger.position();
this.triggerOffset = $trigger.offset();
this.setContainerWidth($trigger, this.o.$container);
this.$triggers.not($trigger).removeClass('active');
$trigger.toggleClass('active');
this.o.$messageContainer.html( $trigger.find(this.o.message).html() );
var active = $trigger.hasClass('active');
this.setContainerPosition($trigger, active);
this.o.$container.toggleClass('active', active);
},
setContainerWidth: function($trigger) {
var messageWidth = this.o.width ? this.o.width : $trigger.find(this.o.message).html().length *5;
var containerMaxWidth = this.o.maxWidth ? this.o.maxWidth : $(window).width() - 60;
containerWidth = Math.max( Math.min(messageWidth,containerMaxWidth), this.o.minWidth);
this.o.$container.width(containerWidth);
},
setContainerPosition: function($trigger, active) {
if (!active) {
return this.o.$container.removeAttr('style');
}
this.cssPosition = {
top: Math.min(
Math.floor(Math.max(this.o.margin, this.triggerOffset.top  - this.o.$container.outerHeight() - this.o.margin)),
$(document).height() - this.o.$container.outerHeight() - this.o.margin
),
left: Math.min(
Math.floor(Math.max( this.triggerOffset.left  - this.o.$container.outerWidth() *.5 + $trigger.outerWidth() *.5, this.o.margin)),
$(window).width() - this.o.$container.outerWidth() - this.o.margin
)
};
this.o.$container.css(this.cssPosition);
if (this.o.$triangle.length) this.setTrianglePosition($trigger);
},
setTrianglePosition: function($trigger) {
this.o.$triangle.css('left',  Math.floor(this.triggerOffset.left - this.cssPosition.left + $trigger.outerWidth() *.5 - this.o.$triangle.outerWidth() *.5) );
},
destroy: function() {
this.$triggers.off('click', this.fn.toggle);
}
};
$.fn.tooltip = function(options) {
if (this.length === 0)
return this;
if ($(this).data('tooltip')) return $(this).data('tooltip');
return new Tooltip( $(this), options );
};
$.tooltip = function(el, options) {
return $(el).tooltip(options);
};
})( jQuery );
!function(a,b){"use strict";var c,d,e,f=a,g=f.document,h=f.navigator,i=f.setTimeout,j=f.clearTimeout,k=f.setInterval,l=f.clearInterval,m=f.getComputedStyle,n=f.encodeURIComponent,o=f.ActiveXObject,p=f.Error,q=f.Number.parseInt||f.parseInt,r=f.Number.parseFloat||f.parseFloat,s=f.Number.isNaN||f.isNaN,t=f.Date.now,u=f.Object.keys,v=f.Object.defineProperty,w=f.Object.prototype.hasOwnProperty,x=f.Array.prototype.slice,y=function(){var a=function(a){return a};if("function"==typeof f.wrap&&"function"==typeof f.unwrap)try{var b=g.createElement("div"),c=f.unwrap(b);1===b.nodeType&&c&&1===c.nodeType&&(a=f.unwrap)}catch(d){}return a}(),z=function(a){return x.call(a,0)},A=function(){var a,c,d,e,f,g,h=z(arguments),i=h[0]||{};for(a=1,c=h.length;c>a;a++)if(null!=(d=h[a]))for(e in d)w.call(d,e)&&(f=i[e],g=d[e],i!==g&&g!==b&&(i[e]=g));return i},B=function(a){var b,c,d,e;if("object"!=typeof a||null==a||"number"==typeof a.nodeType)b=a;else if("number"==typeof a.length)for(b=[],c=0,d=a.length;d>c;c++)w.call(a,c)&&(b[c]=B(a[c]));else{b={};for(e in a)w.call(a,e)&&(b[e]=B(a[e]))}return b},C=function(a,b){for(var c={},d=0,e=b.length;e>d;d++)b[d]in a&&(c[b[d]]=a[b[d]]);return c},D=function(a,b){var c={};for(var d in a)-1===b.indexOf(d)&&(c[d]=a[d]);return c},E=function(a){if(a)for(var b in a)w.call(a,b)&&delete a[b];return a},F=function(a,b){if(a&&1===a.nodeType&&a.ownerDocument&&b&&(1===b.nodeType&&b.ownerDocument&&b.ownerDocument===a.ownerDocument||9===b.nodeType&&!b.ownerDocument&&b===a.ownerDocument))do{if(a===b)return!0;a=a.parentNode}while(a);return!1},G=function(a){var b;return"string"==typeof a&&a&&(b=a.split("#")[0].split("?")[0],b=a.slice(0,a.lastIndexOf("/")+1)),b},H=function(a){var b,c;return"string"==typeof a&&a&&(c=a.match(/^(?:|[^:@]*@|.+\)@(?=http[s]?|file)|.+?\s+(?: at |@)(?:[^:\(]+ )*[\(]?)((?:http[s]?|file):\/\/[\/]?.+?\/[^:\)]*?)(?::\d+)(?::\d+)?/),c&&c[1]?b=c[1]:(c=a.match(/\)@((?:http[s]?|file):\/\/[\/]?.+?\/[^:\)]*?)(?::\d+)(?::\d+)?/),c&&c[1]&&(b=c[1]))),b},I=function(){var a,b;try{throw new p}catch(c){b=c}return b&&(a=b.sourceURL||b.fileName||H(b.stack)),a},J=function(){var a,c,d;if(g.currentScript&&(a=g.currentScript.src))return a;if(c=g.getElementsByTagName("script"),1===c.length)return c[0].src||b;if("readyState"in c[0])for(d=c.length;d--;)if("interactive"===c[d].readyState&&(a=c[d].src))return a;return"loading"===g.readyState&&(a=c[c.length-1].src)?a:(a=I())?a:b},K=function(){var a,c,d,e=g.getElementsByTagName("script");for(a=e.length;a--;){if(!(d=e[a].src)){c=null;break}if(d=G(d),null==c)c=d;else if(c!==d){c=null;break}}return c||b},L=function(){var a=G(J())||K()||"";return a+"ZeroClipboard.swf"},M=function(){var a=/win(dows|[\s]?(nt|me|ce|xp|vista|[\d]+))/i;return!!h&&(a.test(h.appVersion||"")||a.test(h.platform||"")||-1!==(h.userAgent||"").indexOf("Windows"))},N=function(){return null==a.opener&&(!!a.top&&a!=a.top||!!a.parent&&a!=a.parent)}(),O={bridge:null,version:"0.0.0",pluginType:"unknown",disabled:null,outdated:null,sandboxed:null,unavailable:null,degraded:null,deactivated:null,overdue:null,ready:null},P="11.0.0",Q={},R={},S=null,T=0,U=0,V={ready:"Flash communication is established",error:{"flash-disabled":"Flash is disabled or not installed. May also be attempting to run Flash in a sandboxed iframe, which is impossible.","flash-outdated":"Flash is too outdated to support ZeroClipboard","flash-sandboxed":"Attempting to run Flash in a sandboxed iframe, which is impossible","flash-unavailable":"Flash is unable to communicate bidirectionally with JavaScript","flash-degraded":"Flash is unable to preserve data fidelity when communicating with JavaScript","flash-deactivated":"Flash is too outdated for your browser and/or is configured as click-to-activate.\nThis may also mean that the ZeroClipboard SWF object could not be loaded, so please check your `swfPath` configuration and/or network connectivity.\nMay also be attempting to run Flash in a sandboxed iframe, which is impossible.","flash-overdue":"Flash communication was established but NOT within the acceptable time limit","version-mismatch":"ZeroClipboard JS version number does not match ZeroClipboard SWF version number","clipboard-error":"At least one error was thrown while ZeroClipboard was attempting to inject your data into the clipboard","config-mismatch":"ZeroClipboard configuration does not match Flash's reality","swf-not-found":"The ZeroClipboard SWF object could not be loaded, so please check your `swfPath` configuration and/or network connectivity"}},W=["flash-unavailable","flash-degraded","flash-overdue","version-mismatch","config-mismatch","clipboard-error"],X=["flash-disabled","flash-outdated","flash-sandboxed","flash-unavailable","flash-degraded","flash-deactivated","flash-overdue"],Y=new RegExp("^flash-("+X.map(function(a){return a.replace(/^flash-/,"")}).join("|")+")$"),Z=new RegExp("^flash-("+X.slice(1).map(function(a){return a.replace(/^flash-/,"")}).join("|")+")$"),$={swfPath:L(),trustedDomains:a.location.host?[a.location.host]:[],cacheBust:!0,forceEnhancedClipboard:!1,flashLoadTimeout:3e4,autoActivate:!0,bubbleEvents:!0,fixLineEndings:!0,containerId:"global-zeroclipboard-html-bridge",containerClass:"global-zeroclipboard-container",swfObjectId:"global-zeroclipboard-flash-bridge",hoverClass:"zeroclipboard-is-hover",activeClass:"zeroclipboard-is-active",forceHandCursor:!1,title:null,zIndex:999999999},_=function(a){if("object"==typeof a&&null!==a)for(var b in a)if(w.call(a,b))if(/^(?:forceHandCursor|title|zIndex|bubbleEvents|fixLineEndings)$/.test(b))$[b]=a[b];else if(null==O.bridge)if("containerId"===b||"swfObjectId"===b){if(!oa(a[b]))throw new Error("The specified `"+b+"` value is not valid as an HTML4 Element ID");$[b]=a[b]}else $[b]=a[b];{if("string"!=typeof a||!a)return B($);if(w.call($,a))return $[a]}},aa=function(){return Va(),{browser:C(h,["userAgent","platform","appName","appVersion"]),flash:D(O,["bridge"]),zeroclipboard:{version:Xa.version,config:Xa.config()}}},ba=function(){return!!(O.disabled||O.outdated||O.sandboxed||O.unavailable||O.degraded||O.deactivated)},ca=function(a,d){var e,f,g,h={};if("string"==typeof a&&a)g=a.toLowerCase().split(/\s+/);else if("object"==typeof a&&a&&"undefined"==typeof d)for(e in a)w.call(a,e)&&"string"==typeof e&&e&&"function"==typeof a[e]&&Xa.on(e,a[e]);if(g&&g.length){for(e=0,f=g.length;f>e;e++)a=g[e].replace(/^on/,""),h[a]=!0,Q[a]||(Q[a]=[]),Q[a].push(d);if(h.ready&&O.ready&&Xa.emit({type:"ready"}),h.error){for(e=0,f=X.length;f>e;e++)if(O[X[e].replace(/^flash-/,"")]===!0){Xa.emit({type:"error",name:X[e]});break}c!==b&&Xa.version!==c&&Xa.emit({type:"error",name:"version-mismatch",jsVersion:Xa.version,swfVersion:c})}}return Xa},da=function(a,b){var c,d,e,f,g;if(0===arguments.length)f=u(Q);else if("string"==typeof a&&a)f=a.split(/\s+/);else if("object"==typeof a&&a&&"undefined"==typeof b)for(c in a)w.call(a,c)&&"string"==typeof c&&c&&"function"==typeof a[c]&&Xa.off(c,a[c]);if(f&&f.length)for(c=0,d=f.length;d>c;c++)if(a=f[c].toLowerCase().replace(/^on/,""),g=Q[a],g&&g.length)if(b)for(e=g.indexOf(b);-1!==e;)g.splice(e,1),e=g.indexOf(b,e);else g.length=0;return Xa},ea=function(a){var b;return b="string"==typeof a&&a?B(Q[a])||null:B(Q)},fa=function(a){var b,c,d;return a=pa(a),a&&!wa(a)?"ready"===a.type&&O.overdue===!0?Xa.emit({type:"error",name:"flash-overdue"}):(b=A({},a),ua.call(this,b),"copy"===a.type&&(d=Ea(R),c=d.data,S=d.formatMap),c):void 0},ga=function(){var a=O.sandboxed;if(Va(),"boolean"!=typeof O.ready&&(O.ready=!1),O.sandboxed!==a&&O.sandboxed===!0)O.ready=!1,Xa.emit({type:"error",name:"flash-sandboxed"});else if(!Xa.isFlashUnusable()&&null===O.bridge){var b=$.flashLoadTimeout;"number"==typeof b&&b>=0&&(T=i(function(){"boolean"!=typeof O.deactivated&&(O.deactivated=!0),O.deactivated===!0&&Xa.emit({type:"error",name:"flash-deactivated"})},b)),O.overdue=!1,Ca()}},ha=function(){Xa.clearData(),Xa.blur(),Xa.emit("destroy"),Da(),Xa.off()},ia=function(a,b){var c;if("object"==typeof a&&a&&"undefined"==typeof b)c=a,Xa.clearData();else{if("string"!=typeof a||!a)return;c={},c[a]=b}for(var d in c)"string"==typeof d&&d&&w.call(c,d)&&"string"==typeof c[d]&&c[d]&&(R[d]=Ua(c[d]))},ja=function(a){"undefined"==typeof a?(E(R),S=null):"string"==typeof a&&w.call(R,a)&&delete R[a]},ka=function(a){return"undefined"==typeof a?B(R):"string"==typeof a&&w.call(R,a)?R[a]:void 0},la=function(a){if(a&&1===a.nodeType){d&&(Ma(d,$.activeClass),d!==a&&Ma(d,$.hoverClass)),d=a,La(a,$.hoverClass);var b=a.getAttribute("title")||$.title;if("string"==typeof b&&b){var c=Ba(O.bridge);c&&c.setAttribute("title",b)}var e=$.forceHandCursor===!0||"pointer"===Na(a,"cursor");Sa(e),Ra()}},ma=function(){var a=Ba(O.bridge);a&&(a.removeAttribute("title"),a.style.left="0px",a.style.top="-9999px",a.style.width="1px",a.style.height="1px"),d&&(Ma(d,$.hoverClass),Ma(d,$.activeClass),d=null)},na=function(){return d||null},oa=function(a){return"string"==typeof a&&a&&/^[A-Za-z][A-Za-z0-9_:\-\.]*$/.test(a)},pa=function(a){var b;if("string"==typeof a&&a?(b=a,a={}):"object"==typeof a&&a&&"string"==typeof a.type&&a.type&&(b=a.type),b){b=b.toLowerCase(),!a.target&&(/^(copy|aftercopy|_click)$/.test(b)||"error"===b&&"clipboard-error"===a.name)&&(a.target=e),A(a,{type:b,target:a.target||d||null,relatedTarget:a.relatedTarget||null,currentTarget:O&&O.bridge||null,timeStamp:a.timeStamp||t()||null});var c=V[a.type];return"error"===a.type&&a.name&&c&&(c=c[a.name]),c&&(a.message=c),"ready"===a.type&&A(a,{target:null,version:O.version}),"error"===a.type&&(Y.test(a.name)&&A(a,{target:null,minimumVersion:P}),Z.test(a.name)&&A(a,{version:O.version})),"copy"===a.type&&(a.clipboardData={setData:Xa.setData,clearData:Xa.clearData}),"aftercopy"===a.type&&(a=Fa(a,S)),a.target&&!a.relatedTarget&&(a.relatedTarget=qa(a.target)),ra(a)}},qa=function(a){var b=a&&a.getAttribute&&a.getAttribute("data-clipboard-target");return b?g.getElementById(b):null},ra=function(a){if(a&&/^_(?:click|mouse(?:over|out|down|up|move))$/.test(a.type)){var c=a.target,d="_mouseover"===a.type&&a.relatedTarget?a.relatedTarget:b,e="_mouseout"===a.type&&a.relatedTarget?a.relatedTarget:b,h=Oa(c),i=f.screenLeft||f.screenX||0,j=f.screenTop||f.screenY||0,k=g.body.scrollLeft+g.documentElement.scrollLeft,l=g.body.scrollTop+g.documentElement.scrollTop,m=h.left+("number"==typeof a._stageX?a._stageX:0),n=h.top+("number"==typeof a._stageY?a._stageY:0),o=m-k,p=n-l,q=i+o,r=j+p,s="number"==typeof a.movementX?a.movementX:0,t="number"==typeof a.movementY?a.movementY:0;delete a._stageX,delete a._stageY,A(a,{srcElement:c,fromElement:d,toElement:e,screenX:q,screenY:r,pageX:m,pageY:n,clientX:o,clientY:p,x:o,y:p,movementX:s,movementY:t,offsetX:0,offsetY:0,layerX:0,layerY:0})}return a},sa=function(a){var b=a&&"string"==typeof a.type&&a.type||"";return!/^(?:(?:before)?copy|destroy)$/.test(b)},ta=function(a,b,c,d){d?i(function(){a.apply(b,c)},0):a.apply(b,c)},ua=function(a){if("object"==typeof a&&a&&a.type){var b=sa(a),c=Q["*"]||[],d=Q[a.type]||[],e=c.concat(d);if(e&&e.length){var g,h,i,j,k,l=this;for(g=0,h=e.length;h>g;g++)i=e[g],j=l,"string"==typeof i&&"function"==typeof f[i]&&(i=f[i]),"object"==typeof i&&i&&"function"==typeof i.handleEvent&&(j=i,i=i.handleEvent),"function"==typeof i&&(k=A({},a),ta(i,j,[k],b))}return this}},va=function(a){var b=null;return(N===!1||a&&"error"===a.type&&a.name&&-1!==W.indexOf(a.name))&&(b=!1),b},wa=function(a){var b=a.target||d||null,f="swf"===a._source;switch(delete a._source,a.type){case"error":var g="flash-sandboxed"===a.name||va(a);"boolean"==typeof g&&(O.sandboxed=g),-1!==X.indexOf(a.name)?A(O,{disabled:"flash-disabled"===a.name,outdated:"flash-outdated"===a.name,unavailable:"flash-unavailable"===a.name,degraded:"flash-degraded"===a.name,deactivated:"flash-deactivated"===a.name,overdue:"flash-overdue"===a.name,ready:!1}):"version-mismatch"===a.name&&(c=a.swfVersion,A(O,{disabled:!1,outdated:!1,unavailable:!1,degraded:!1,deactivated:!1,overdue:!1,ready:!1})),Qa();break;case"ready":c=a.swfVersion;var h=O.deactivated===!0;A(O,{disabled:!1,outdated:!1,sandboxed:!1,unavailable:!1,degraded:!1,deactivated:!1,overdue:h,ready:!h}),Qa();break;case"beforecopy":e=b;break;case"copy":var i,j,k=a.relatedTarget;!R["text/html"]&&!R["text/plain"]&&k&&(j=k.value||k.outerHTML||k.innerHTML)&&(i=k.value||k.textContent||k.innerText)?(a.clipboardData.clearData(),a.clipboardData.setData("text/plain",i),j!==i&&a.clipboardData.setData("text/html",j)):!R["text/plain"]&&a.target&&(i=a.target.getAttribute("data-clipboard-text"))&&(a.clipboardData.clearData(),a.clipboardData.setData("text/plain",i));break;case"aftercopy":xa(a),Xa.clearData(),b&&b!==Ka()&&b.focus&&b.focus();break;case"_mouseover":Xa.focus(b),$.bubbleEvents===!0&&f&&(b&&b!==a.relatedTarget&&!F(a.relatedTarget,b)&&ya(A({},a,{type:"mouseenter",bubbles:!1,cancelable:!1})),ya(A({},a,{type:"mouseover"})));break;case"_mouseout":Xa.blur(),$.bubbleEvents===!0&&f&&(b&&b!==a.relatedTarget&&!F(a.relatedTarget,b)&&ya(A({},a,{type:"mouseleave",bubbles:!1,cancelable:!1})),ya(A({},a,{type:"mouseout"})));break;case"_mousedown":La(b,$.activeClass),$.bubbleEvents===!0&&f&&ya(A({},a,{type:a.type.slice(1)}));break;case"_mouseup":Ma(b,$.activeClass),$.bubbleEvents===!0&&f&&ya(A({},a,{type:a.type.slice(1)}));break;case"_click":e=null,$.bubbleEvents===!0&&f&&ya(A({},a,{type:a.type.slice(1)}));break;case"_mousemove":$.bubbleEvents===!0&&f&&ya(A({},a,{type:a.type.slice(1)}))}return/^_(?:click|mouse(?:over|out|down|up|move))$/.test(a.type)?!0:void 0},xa=function(a){if(a.errors&&a.errors.length>0){var b=B(a);A(b,{type:"error",name:"clipboard-error"}),delete b.success,i(function(){Xa.emit(b)},0)}},ya=function(a){if(a&&"string"==typeof a.type&&a){var b,c=a.target||null,d=c&&c.ownerDocument||g,e={view:d.defaultView||f,canBubble:!0,cancelable:!0,detail:"click"===a.type?1:0,button:"number"==typeof a.which?a.which-1:"number"==typeof a.button?a.button:d.createEvent?0:1},h=A(e,a);c&&d.createEvent&&c.dispatchEvent&&(h=[h.type,h.canBubble,h.cancelable,h.view,h.detail,h.screenX,h.screenY,h.clientX,h.clientY,h.ctrlKey,h.altKey,h.shiftKey,h.metaKey,h.button,h.relatedTarget],b=d.createEvent("MouseEvents"),b.initMouseEvent&&(b.initMouseEvent.apply(b,h),b._source="js",c.dispatchEvent(b)))}},za=function(){var a=$.flashLoadTimeout;if("number"==typeof a&&a>=0){var b=Math.min(1e3,a/10),c=$.swfObjectId+"_fallbackContent";U=k(function(){var a=g.getElementById(c);Pa(a)&&(Qa(),O.deactivated=null,Xa.emit({type:"error",name:"swf-not-found"}))},b)}},Aa=function(){var a=g.createElement("div");return a.id=$.containerId,a.className=$.containerClass,a.style.position="absolute",a.style.left="0px",a.style.top="-9999px",a.style.width="1px",a.style.height="1px",a.style.zIndex=""+Ta($.zIndex),a},Ba=function(a){for(var b=a&&a.parentNode;b&&"OBJECT"===b.nodeName&&b.parentNode;)b=b.parentNode;return b||null},Ca=function(){var a,b=O.bridge,c=Ba(b);if(!b){var d=Ja(f.location.host,$),e="never"===d?"none":"all",h=Ha(A({jsVersion:Xa.version},$)),i=$.swfPath+Ga($.swfPath,$);c=Aa();var j=g.createElement("div");c.appendChild(j),g.body.appendChild(c);var k=g.createElement("div"),l="activex"===O.pluginType;k.innerHTML='<object id="'+$.swfObjectId+'" name="'+$.swfObjectId+'" width="100%" height="100%" '+(l?'classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"':'type="application/x-shockwave-flash" data="'+i+'"')+">"+(l?'<param name="movie" value="'+i+'"/>':"")+'<param name="allowScriptAccess" value="'+d+'"/><param name="allowNetworking" value="'+e+'"/><param name="menu" value="false"/><param name="wmode" value="transparent"/><param name="flashvars" value="'+h+'"/><div id="'+$.swfObjectId+'_fallbackContent">&nbsp;</div></object>',b=k.firstChild,k=null,y(b).ZeroClipboard=Xa,c.replaceChild(b,j),za()}return b||(b=g[$.swfObjectId],b&&(a=b.length)&&(b=b[a-1]),!b&&c&&(b=c.firstChild)),O.bridge=b||null,b},Da=function(){var a=O.bridge;if(a){var d=Ba(a);d&&("activex"===O.pluginType&&"readyState"in a?(a.style.display="none",function e(){if(4===a.readyState){for(var b in a)"function"==typeof a[b]&&(a[b]=null);a.parentNode&&a.parentNode.removeChild(a),d.parentNode&&d.parentNode.removeChild(d)}else i(e,10)}()):(a.parentNode&&a.parentNode.removeChild(a),d.parentNode&&d.parentNode.removeChild(d))),Qa(),O.ready=null,O.bridge=null,O.deactivated=null,c=b}},Ea=function(a){var b={},c={};if("object"==typeof a&&a){for(var d in a)if(d&&w.call(a,d)&&"string"==typeof a[d]&&a[d])switch(d.toLowerCase()){case"text/plain":case"text":case"air:text":case"flash:text":b.text=a[d],c.text=d;break;case"text/html":case"html":case"air:html":case"flash:html":b.html=a[d],c.html=d;break;case"application/rtf":case"text/rtf":case"rtf":case"richtext":case"air:rtf":case"flash:rtf":b.rtf=a[d],c.rtf=d}return{data:b,formatMap:c}}},Fa=function(a,b){if("object"!=typeof a||!a||"object"!=typeof b||!b)return a;var c={};for(var d in a)if(w.call(a,d))if("errors"===d){c[d]=a[d]?a[d].slice():[];for(var e=0,f=c[d].length;f>e;e++)c[d][e].format=b[c[d][e].format]}else if("success"!==d&&"data"!==d)c[d]=a[d];else{c[d]={};var g=a[d];for(var h in g)h&&w.call(g,h)&&w.call(b,h)&&(c[d][b[h]]=g[h])}return c},Ga=function(a,b){var c=null==b||b&&b.cacheBust===!0;return c?(-1===a.indexOf("?")?"?":"&")+"noCache="+t():""},Ha=function(a){var b,c,d,e,g="",h=[];if(a.trustedDomains&&("string"==typeof a.trustedDomains?e=[a.trustedDomains]:"object"==typeof a.trustedDomains&&"length"in a.trustedDomains&&(e=a.trustedDomains)),e&&e.length)for(b=0,c=e.length;c>b;b++)if(w.call(e,b)&&e[b]&&"string"==typeof e[b]){if(d=Ia(e[b]),!d)continue;if("*"===d){h.length=0,h.push(d);break}h.push.apply(h,[d,"//"+d,f.location.protocol+"//"+d])}return h.length&&(g+="trustedOrigins="+n(h.join(","))),a.forceEnhancedClipboard===!0&&(g+=(g?"&":"")+"forceEnhancedClipboard=true"),"string"==typeof a.swfObjectId&&a.swfObjectId&&(g+=(g?"&":"")+"swfObjectId="+n(a.swfObjectId)),"string"==typeof a.jsVersion&&a.jsVersion&&(g+=(g?"&":"")+"jsVersion="+n(a.jsVersion)),g},Ia=function(a){if(null==a||""===a)return null;if(a=a.replace(/^\s+|\s+$/g,""),""===a)return null;var b=a.indexOf("//");a=-1===b?a:a.slice(b+2);var c=a.indexOf("/");return a=-1===c?a:-1===b||0===c?null:a.slice(0,c),a&&".swf"===a.slice(-4).toLowerCase()?null:a||null},Ja=function(){var a=function(a){var b,c,d,e=[];if("string"==typeof a&&(a=[a]),"object"!=typeof a||!a||"number"!=typeof a.length)return e;for(b=0,c=a.length;c>b;b++)if(w.call(a,b)&&(d=Ia(a[b]))){if("*"===d){e.length=0,e.push("*");break}-1===e.indexOf(d)&&e.push(d)}return e};return function(b,c){var d=Ia(c.swfPath);null===d&&(d=b);var e=a(c.trustedDomains),f=e.length;if(f>0){if(1===f&&"*"===e[0])return"always";if(-1!==e.indexOf(b))return 1===f&&b===d?"sameDomain":"always"}return"never"}}(),Ka=function(){try{return g.activeElement}catch(a){return null}},La=function(a,b){var c,d,e,f=[];if("string"==typeof b&&b&&(f=b.split(/\s+/)),a&&1===a.nodeType&&f.length>0){for(e=(" "+(a.className||"")+" ").replace(/[\t\r\n\f]/g," "),c=0,d=f.length;d>c;c++)-1===e.indexOf(" "+f[c]+" ")&&(e+=f[c]+" ");e=e.replace(/^\s+|\s+$/g,""),e!==a.className&&(a.className=e)}return a},Ma=function(a,b){var c,d,e,f=[];if("string"==typeof b&&b&&(f=b.split(/\s+/)),a&&1===a.nodeType&&f.length>0&&a.className){for(e=(" "+a.className+" ").replace(/[\t\r\n\f]/g," "),c=0,d=f.length;d>c;c++)e=e.replace(" "+f[c]+" "," ");e=e.replace(/^\s+|\s+$/g,""),e!==a.className&&(a.className=e)}return a},Na=function(a,b){var c=m(a,null).getPropertyValue(b);return"cursor"!==b||c&&"auto"!==c||"A"!==a.nodeName?c:"pointer"},Oa=function(a){var b={left:0,top:0,width:0,height:0};if(a.getBoundingClientRect){var c=a.getBoundingClientRect(),d=f.pageXOffset,e=f.pageYOffset,h=g.documentElement.clientLeft||0,i=g.documentElement.clientTop||0,j=0,k=0;if("relative"===Na(g.body,"position")){var l=g.body.getBoundingClientRect(),m=g.documentElement.getBoundingClientRect();j=l.left-m.left||0,k=l.top-m.top||0}b.left=c.left+d-h-j,b.top=c.top+e-i-k,b.width="width"in c?c.width:c.right-c.left,b.height="height"in c?c.height:c.bottom-c.top}return b},Pa=function(a){if(!a)return!1;var b=m(a,null);if(!b)return!1;var c=r(b.height)>0,d=r(b.width)>0,e=r(b.top)>=0,f=r(b.left)>=0,g=c&&d&&e&&f,h=g?null:Oa(a),i="none"!==b.display&&"collapse"!==b.visibility&&(g||!!h&&(c||h.height>0)&&(d||h.width>0)&&(e||h.top>=0)&&(f||h.left>=0));return i},Qa=function(){j(T),T=0,l(U),U=0},Ra=function(){var a;if(d&&(a=Ba(O.bridge))){var b=Oa(d);A(a.style,{width:b.width+"px",height:b.height+"px",top:b.top+"px",left:b.left+"px",zIndex:""+Ta($.zIndex)})}},Sa=function(a){O.ready===!0&&(O.bridge&&"function"==typeof O.bridge.setHandCursor?O.bridge.setHandCursor(a):O.ready=!1)},Ta=function(a){if(/^(?:auto|inherit)$/.test(a))return a;var b;return"number"!=typeof a||s(a)?"string"==typeof a&&(b=Ta(q(a,10))):b=a,"number"==typeof b?b:"auto"},Ua=function(a){var b=/(\r\n|\r|\n)/g;return"string"==typeof a&&$.fixLineEndings===!0&&(M()?/((^|[^\r])\n|\r([^\n]|$))/.test(a)&&(a=a.replace(b,"\r\n")):/\r/.test(a)&&(a=a.replace(b,"\n"))),a},Va=function(b){var c,d,e,f=O.sandboxed,g=null;if(b=b===!0,N===!1)g=!1;else{try{d=a.frameElement||null}catch(h){e={name:h.name,message:h.message}}if(d&&1===d.nodeType&&"IFRAME"===d.nodeName)try{g=d.hasAttribute("sandbox")}catch(h){g=null}else{try{c=document.domain||null}catch(h){c=null}(null===c||e&&"SecurityError"===e.name&&/(^|[\s\(\[@])sandbox(es|ed|ing|[\s\.,!\)\]@]|$)/.test(e.message.toLowerCase()))&&(g=!0)}}return O.sandboxed=g,f===g||b||Wa(o),g},Wa=function(a){function b(a){var b=a.match(/[\d]+/g);return b.length=3,b.join(".")}function c(a){return!!a&&(a=a.toLowerCase())&&(/^(pepflashplayer\.dll|libpepflashplayer\.so|pepperflashplayer\.plugin)$/.test(a)||"chrome.plugin"===a.slice(-13))}function d(a){a&&(i=!0,a.version&&(l=b(a.version)),!l&&a.description&&(l=b(a.description)),a.filename&&(k=c(a.filename)))}var e,f,g,i=!1,j=!1,k=!1,l="";if(h.plugins&&h.plugins.length)e=h.plugins["Shockwave Flash"],d(e),h.plugins["Shockwave Flash 2.0"]&&(i=!0,l="2.0.0.11");else if(h.mimeTypes&&h.mimeTypes.length)g=h.mimeTypes["application/x-shockwave-flash"],e=g&&g.enabledPlugin,d(e);else if("undefined"!=typeof a){j=!0;try{f=new a("ShockwaveFlash.ShockwaveFlash.7"),i=!0,l=b(f.GetVariable("$version"))}catch(m){try{f=new a("ShockwaveFlash.ShockwaveFlash.6"),i=!0,l="6.0.21"}catch(n){try{f=new a("ShockwaveFlash.ShockwaveFlash"),i=!0,l=b(f.GetVariable("$version"))}catch(o){j=!1}}}}O.disabled=i!==!0,O.outdated=l&&r(l)<r(P),O.version=l||"0.0.0",O.pluginType=k?"pepper":j?"activex":i?"netscape":"unknown"};Wa(o),Va(!0);var Xa=function(){return this instanceof Xa?void("function"==typeof Xa._createClient&&Xa._createClient.apply(this,z(arguments))):new Xa};v(Xa,"version",{value:"2.3.0-beta.1",writable:!1,configurable:!0,enumerable:!0}),Xa.config=function(){return _.apply(this,z(arguments))},Xa.state=function(){return aa.apply(this,z(arguments))},Xa.isFlashUnusable=function(){return ba.apply(this,z(arguments))},Xa.on=function(){return ca.apply(this,z(arguments))},Xa.off=function(){return da.apply(this,z(arguments))},Xa.handlers=function(){return ea.apply(this,z(arguments))},Xa.emit=function(){return fa.apply(this,z(arguments))},Xa.create=function(){return ga.apply(this,z(arguments))},Xa.destroy=function(){return ha.apply(this,z(arguments))},Xa.setData=function(){return ia.apply(this,z(arguments))},Xa.clearData=function(){return ja.apply(this,z(arguments))},Xa.getData=function(){return ka.apply(this,z(arguments))},Xa.focus=Xa.activate=function(){return la.apply(this,z(arguments))},Xa.blur=Xa.deactivate=function(){return ma.apply(this,z(arguments))},Xa.activeElement=function(){return na.apply(this,z(arguments))};var Ya=0,Za={},$a=0,_a={},ab={};A($,{autoActivate:!0});var bb=function(a){var b=this;b.id=""+Ya++,Za[b.id]={instance:b,elements:[],handlers:{}},a&&b.clip(a),Xa.on("*",function(a){return b.emit(a)}),Xa.on("destroy",function(){b.destroy()}),Xa.create()},cb=function(a,d){var e,f,g,h={},i=Za[this.id],j=i&&i.handlers;if(!i)throw new Error("Attempted to add new listener(s) to a destroyed ZeroClipboard client instance");if("string"==typeof a&&a)g=a.toLowerCase().split(/\s+/);else if("object"==typeof a&&a&&"undefined"==typeof d)for(e in a)w.call(a,e)&&"string"==typeof e&&e&&"function"==typeof a[e]&&this.on(e,a[e]);if(g&&g.length){for(e=0,f=g.length;f>e;e++)a=g[e].replace(/^on/,""),h[a]=!0,j[a]||(j[a]=[]),j[a].push(d);if(h.ready&&O.ready&&this.emit({type:"ready",client:this}),h.error){for(e=0,f=X.length;f>e;e++)if(O[X[e].replace(/^flash-/,"")]){this.emit({type:"error",name:X[e],client:this});break}c!==b&&Xa.version!==c&&this.emit({type:"error",name:"version-mismatch",jsVersion:Xa.version,swfVersion:c})}}return this},db=function(a,b){var c,d,e,f,g,h=Za[this.id],i=h&&h.handlers;if(!i)return this;if(0===arguments.length)f=u(i);else if("string"==typeof a&&a)f=a.split(/\s+/);else if("object"==typeof a&&a&&"undefined"==typeof b)for(c in a)w.call(a,c)&&"string"==typeof c&&c&&"function"==typeof a[c]&&this.off(c,a[c]);if(f&&f.length)for(c=0,d=f.length;d>c;c++)if(a=f[c].toLowerCase().replace(/^on/,""),g=i[a],g&&g.length)if(b)for(e=g.indexOf(b);-1!==e;)g.splice(e,1),e=g.indexOf(b,e);else g.length=0;return this},eb=function(a){var b=null,c=Za[this.id]&&Za[this.id].handlers;return c&&(b="string"==typeof a&&a?c[a]?c[a].slice(0):[]:B(c)),b},fb=function(a){if(kb.call(this,a)){"object"==typeof a&&a&&"string"==typeof a.type&&a.type&&(a=A({},a));var b=A({},pa(a),{client:this});lb.call(this,b)}return this},gb=function(a){if(!Za[this.id])throw new Error("Attempted to clip element(s) to a destroyed ZeroClipboard client instance");a=mb(a);for(var b=0;b<a.length;b++)if(w.call(a,b)&&a[b]&&1===a[b].nodeType){a[b].zcClippingId?-1===_a[a[b].zcClippingId].indexOf(this.id)&&_a[a[b].zcClippingId].push(this.id):(a[b].zcClippingId="zcClippingId_"+$a++,_a[a[b].zcClippingId]=[this.id],$.autoActivate===!0&&nb(a[b]));var c=Za[this.id]&&Za[this.id].elements;-1===c.indexOf(a[b])&&c.push(a[b])}return this},hb=function(a){var b=Za[this.id];if(!b)return this;var c,d=b.elements;a="undefined"==typeof a?d.slice(0):mb(a);for(var e=a.length;e--;)if(w.call(a,e)&&a[e]&&1===a[e].nodeType){for(c=0;-1!==(c=d.indexOf(a[e],c));)d.splice(c,1);var f=_a[a[e].zcClippingId];if(f){for(c=0;-1!==(c=f.indexOf(this.id,c));)f.splice(c,1);0===f.length&&($.autoActivate===!0&&ob(a[e]),delete a[e].zcClippingId)}}return this},ib=function(){var a=Za[this.id];return a&&a.elements?a.elements.slice(0):[]},jb=function(){Za[this.id]&&(this.unclip(),this.off(),delete Za[this.id])},kb=function(a){if(!a||!a.type)return!1;if(a.client&&a.client!==this)return!1;var b=Za[this.id],c=b&&b.elements,d=!!c&&c.length>0,e=!a.target||d&&-1!==c.indexOf(a.target),f=a.relatedTarget&&d&&-1!==c.indexOf(a.relatedTarget),g=a.client&&a.client===this;return b&&(e||f||g)?!0:!1},lb=function(a){var b=Za[this.id];if("object"==typeof a&&a&&a.type&&b){var c=sa(a),d=b&&b.handlers["*"]||[],e=b&&b.handlers[a.type]||[],g=d.concat(e);if(g&&g.length){var h,i,j,k,l,m=this;for(h=0,i=g.length;i>h;h++)j=g[h],k=m,"string"==typeof j&&"function"==typeof f[j]&&(j=f[j]),"object"==typeof j&&j&&"function"==typeof j.handleEvent&&(k=j,j=j.handleEvent),"function"==typeof j&&(l=A({},a),ta(j,k,[l],c))}}},mb=function(a){return"string"==typeof a&&(a=[]),"number"!=typeof a.length?[a]:a},nb=function(a){if(a&&1===a.nodeType){var b=function(a){(a||(a=f.event))&&("js"!==a._source&&(a.stopImmediatePropagation(),a.preventDefault()),delete a._source)},c=function(c){(c||(c=f.event))&&(b(c),Xa.focus(a))};a.addEventListener("mouseover",c,!1),a.addEventListener("mouseout",b,!1),a.addEventListener("mouseenter",b,!1),a.addEventListener("mouseleave",b,!1),a.addEventListener("mousemove",b,!1),ab[a.zcClippingId]={mouseover:c,mouseout:b,mouseenter:b,mouseleave:b,mousemove:b}}},ob=function(a){if(a&&1===a.nodeType){var b=ab[a.zcClippingId];if("object"==typeof b&&b){for(var c,d,e=["move","leave","enter","out","over"],f=0,g=e.length;g>f;f++)c="mouse"+e[f],d=b[c],"function"==typeof d&&a.removeEventListener(c,d,!1);delete ab[a.zcClippingId]}}};Xa._createClient=function(){bb.apply(this,z(arguments))},Xa.prototype.on=function(){return cb.apply(this,z(arguments))},Xa.prototype.off=function(){return db.apply(this,z(arguments))},Xa.prototype.handlers=function(){return eb.apply(this,z(arguments))},Xa.prototype.emit=function(){return fb.apply(this,z(arguments))},Xa.prototype.clip=function(){return gb.apply(this,z(arguments))},Xa.prototype.unclip=function(){return hb.apply(this,z(arguments))},Xa.prototype.elements=function(){return ib.apply(this,z(arguments))},Xa.prototype.destroy=function(){return jb.apply(this,z(arguments))},Xa.prototype.setText=function(a){if(!Za[this.id])throw new Error("Attempted to set pending clipboard data from a destroyed ZeroClipboard client instance");return Xa.setData("text/plain",a),this},Xa.prototype.setHtml=function(a){if(!Za[this.id])throw new Error("Attempted to set pending clipboard data from a destroyed ZeroClipboard client instance");return Xa.setData("text/html",a),this},Xa.prototype.setRichText=function(a){if(!Za[this.id])throw new Error("Attempted to set pending clipboard data from a destroyed ZeroClipboard client instance");return Xa.setData("application/rtf",a),this},Xa.prototype.setData=function(){if(!Za[this.id])throw new Error("Attempted to set pending clipboard data from a destroyed ZeroClipboard client instance");return Xa.setData.apply(this,z(arguments)),this},Xa.prototype.clearData=function(){if(!Za[this.id])throw new Error("Attempted to clear pending clipboard data from a destroyed ZeroClipboard client instance");return Xa.clearData.apply(this,z(arguments)),this},Xa.prototype.getData=function(){if(!Za[this.id])throw new Error("Attempted to get pending clipboard data from a destroyed ZeroClipboard client instance");return Xa.getData.apply(this,z(arguments))},"function"==typeof define&&define.amd?define(function(){return Xa}):"object"==typeof module&&module&&"object"==typeof module.exports&&module.exports?module.exports=Xa:a.ZeroClipboard=Xa}(function(){return this||window}());
(function( modules ) {
modules.Forms = {
init: function () {
$('.js-select').each( function() {
var $this = $(this);
if (!modules.Forms.addedDefaultOptions && $this.attr('data-default')) {
$this.prepend('<option value="" class="js-custom-select-default">'+$this.attr('data-default')+'</option>');
if (!$this.find('option[selected]').length) $this[0].selectedIndex= 0;
}
var _defaultInList = $this.hasClass('js-default-in-list') ? 1 : 0;
$this.customSelect({
isDefault: function($option) {
return $option.hasClass('js-custom-select-default');
},
sizeToOptions: 0, // Smile: Set this value to 0, to not set the largest value of the list as label value
defaultInList: _defaultInList //should default option show in list
});
});
this.addedDefaultOptions = true;
if (core.lte9) {
$('input[type=text]').add('input[type=password]').add('input[type=email]').on('focusin', function() {
var $this = $(this),
isPassword = $this.is('input[type=password]');
modules.Forms.inputFocusIn($this, isPassword);
});
$('input[type=text]').add('input[type=password]').add('input[type=email]').on('focusout', function() {
var $this = $(this),
isPassword = $this.is('input[type=password]');
modules.Forms.inputFocusOut($this, isPassword);
});
$('input[type=password]').each(function() {
if ($(this).attr('placeholder')) {
modules.Forms.changeInputType($(this),"text");
}
});
} else {
$('input[type=text]').add('input[type=password]').add('input[type=email]')
.not('div.js-china-magento input[type=text]')
.not('div.js-china-magento input[type=password]')
.not('div.js-china-magento input[type=email]')
.each(function() {
if ($(this).data('default') && $(this).data('default')!="") {
$(this).val('');
}
});
}
},
changeInputType: function( $input, newType ) {
if (core.ie9) {
$input.attr('type', newType);
return $input;
} else if (core.lte8) {
var newObject = document.createElement('input');
newObject.type = newType;
var oldData = $input.data();
var oldObject = $input[0];
if(oldObject.size) newObject.size = oldObject.size;
if(oldObject.value) newObject.value = oldObject.value;
if(oldObject.name) newObject.name = oldObject.name;
if(oldObject.id) newObject.id = oldObject.id;
if(oldObject.className) newObject.className = oldObject.className;
oldObject.parentNode.replaceChild(newObject,oldObject);
for(var data in oldData){
$(newObject).attr('data-'+data, oldData[data]);
}
$(newObject).on('focusin', function() {
modules.Forms.inputFocusIn($(this), true);
});
$(newObject).on('focusout', function() {
modules.Forms.inputFocusOut($(this), true);
});
return $(newObject);
}
},
inputFocusIn: function( $input , isPassword) {
if ($input.attr('data-default') && $input.val() === $input.attr('data-default')) {
$input.val('');
if (isPassword)  {
var $newInput = modules.Forms.changeInputType($input,"password");
if (core.ie6) {
$newInput.focus().focus;
} else {
$newInput.focus();
}
}
}
},
inputFocusOut: function( $input, isPassword ) {
if ($input.attr('data-default') && $input.val() === '') {
$input.val($input.attr('data-default'));
if(isPassword) modules.Forms.changeInputType($input,"text");
}
},
validate: function( $form ) {
},
reset: function( $form ) {
}
};
})( window.modules = window.modules || {} );
(function( utils, window ) {
utils.FormValidator = {
init: function() {
$( "form button[type='submit'][data-check=required]" ).on( 'click', utils.FormValidator.validFormFromSubmit );
},
validFormFromSubmit: function(event) {
event.preventDefault();
var form = $(this).parents('form:first'),
errorField = $(this).parents('#content, #popin-wrapper').find('.error-msg');
return utils.FormValidator.validForm( form, errorField);
},
validForm: function( form, errorField ) {
var $form = $(form),
isValid = true,
errorTemplate = '',
requiredMessage      = $form.data('required-message') ? $form.data('required-message') : '',
emailMessage         = $form.data('email-message') ? $form.data('email-message') : '',
numberErrorsToShow   = parseInt($form.data('number-errors')) ? $form.data('number-errors') : $form.find('input').length,
errorArray = [],
checkboxGroups = {},
$this;
if (!errorField || errorField.length==0) {
errorField = $('#wrapper').find('.fstd-error:first');
}
if ($form.is(':visible')) {
$form.find( "input[data-check=required]:visible,textarea[data-check=required]:visible" ).each( function() {
$this = $(this);
var message = $this.data('error') ? $this.data('error') : requiredMessage;
if( utils.FormValidator.isEmpty(this) ) {
var label = $('label[for="'+$this.attr('id')+'"]');
if (label.length > 0) {
$this.parents('li:first').addClass('error');
}
else {
$this.addClass( "error" );
}
isValid = false;
errorArray.push(message);
}
else {
$this.removeClass('error').parents('li:first').removeClass( "error" );
}
});
$form.find( "input#email, input.email, .js-email" ).each( function() {
$this = $(this);
var message = $this.data('error') ? $this.data('error') : emailMessage;
if( !utils.FormValidator.isValidMail( this ) ) {
$( this ).addClass( "error" );
isValid = false;
errorArray.push(message);
} else {
$( this ).removeClass( "error" );
}
});
$form.find('*[data-checkboxgroup]').each( function(i) {
$this = $(this),
group = $this.data('checkboxgroup'),
minCheck = $this.data('checkboxgroup-mincheck'),
message = $this.data('error'),
_isChecked = false;
if(checkboxGroups[group] != undefined) {
checkboxGroups[group].items.push($this);
}
else {
checkboxGroups[group] = {};
checkboxGroups[group].items = [];
checkboxGroups[group].items.push($this);
checkboxGroups[group].minCheck = minCheck;
}
});
for(var i in checkboxGroups) {
var group = checkboxGroups[i];
var nbCheck = 0;
for(var j=0; j<group.items.length; j++) {
var checkbox = group.items[j];
if (checkbox.is(':checked')) nbCheck ++;
}
if (nbCheck < group.minCheck) {
for(var j=0; j<group.items.length; j++) {
group.items[j].parent().addClass( "error" );
}
isValid = false;
errorArray.push(message);
}
else {
for(var j=0; j<group.items.length; j++) {
group.items[j].parent().removeClass( "error" );
}
}
}
$form.find('.checkbox[data-check=checked], .js-force-check').not('[data-checkboxgroup]').each( function(i) {
$this = $(this);
var message = $this.data('error') ? $this.data('error') : requiredMessage;
if (!$(this).is(':checked')) {
$this.parent().addClass('error');
isValid = false;
errorArray.push(message);
} else {
$this.parent().removeClass('error');
}
});
$form.find( "select[data-check=required]" ).each( function() {
$this = $(this);
if ($this.parents('li:first').is(':visible')) {
var message = $this.data('error') ? $this.data('error') : requiredMessage;
var _val = $this.parents('.custom-select:first').find('.custom-select:first p').html() || $this.val(),
_default = $this.data('default'),
selectIsVisible = $this.parents('.custom-select:first').is(':visible') || $this.is(':visible'),
label = $('label[for="'+$this.attr('id')+'"]');
if(selectIsVisible && (!_val || _val==='' || _val=== '&nbsp;' || _val === '\xa0') || (_default && _val==_default)) {
$this.parents('li:first').addClass( "error" );
isValid = false;
errorArray.push(message);
} else {
if ( !$this.find(":selected").data('default') ) {
$this.parents('li:first').removeClass( "error" );
} else { // Selected is the placeholder
$this.parents('li:first').addClass( "error" );
}
}
}
});
$form.find( 'input[name$="-valid"]:visible' ).each( function() {
$this = $(this);
var id = $this.attr('id');
var otherElement = $( form ).find( "#"+id.split('-valid')[ 0 ] );
if( $this.is(':visible') && ($this.val()=='' || $this.val() !== $(otherElement).val()) ) {
if (label.length > 0) {
$this.parent().addClass('error');
}
else {
$this.addClass( "error" );
}
isValid = false;
errorArray[$this.attr('tabindex')] = $this.attr('data-error');
} else {
$this.removeClass('error').parent().removeClass( "error" );
}
});
$form.find( 'input[data-regex]:visible' ).each( function() {
$this = $(this);
var message      = $this.data('error') ? $this.data('error') : emailMessage,
regexType    = $this.data('regex'),
regexIsValid = true;
switch (regexType) {
case 'alphanum':
regexIsValid = utils.FormValidator.isValidAlphaNum( this );
break;
case 'alpha':
regexIsValid = utils.FormValidator.isValidAlpha( this );
break;
case 'num':
regexIsValid = utils.FormValidator.isValidNum( this );
break;
default :
regexIsValid = false;
}
if( !regexIsValid ) {
$( this ).addClass( "error" );
isValid = false;
errorArray.push(message);
} else {
$( this ).removeClass( "error" );
}
});
var sizeInput = $form.find("input[data-size]");
if (sizeInput.length > 0) {
sizeInput.each(function(i){
$this = $(this);
if( $this.val().length > $this.data('size') && !utils.FormValidator.isEmpty(this) ) {
$this.parents('li').find('label').addClass('error');
isValid = false;
errorArray[$this.attr('tabindex')] = $this.attr('data-error');
}
else {
$this.parents('li').find('label').removeClass('error');
}
});
}
$form.find( 'input[data-minsize]:visible' ).each( function() {
$this = $(this);
var message = $this.data('error') ? $this.data('error') : requiredMessage,
minSize = parseInt($this.data('minsize'));
if ( utils.FormValidator.isEmpty(this) || ( !utils.FormValidator.isEmpty(this) && $this.val().length < minSize ) ) {
$( this ).addClass( "error" );
isValid = false;
errorArray.push(message);
}
else {
$( this ).removeClass( "error" );
}
});
if (!isValid && errorField != undefined) {
errorField.empty();
errorArray = jQuery.grep(errorArray, function(n, i){
return (n !== "" && n != null && $.inArray(n, errorArray) == i);
});
for (i= 0; i< numberErrorsToShow && i< errorArray.length ;i++) {
errorField.append( '<li>' + errorArray[i]+'</li>');
}
errorField.show();
} else {
if (errorField != undefined)
errorField.empty();
if(!$form.hasClass('noSubmit')) {
if($('#wrapper').hasClass('newsletter')) {
dataLayer.push( {'event':'trackEvent', 'eventCategory': 'DiorCom_Newsletter', 'eventAction': 'InscriptionNewsletter', 'eventLabel': $('#email').val()} );
}
$form.submit();
}
};
}
return isValid;
},
isEmpty: function( el ) {
var value = $(el).val(),
defaultValue = $(el).data('default');
if (value) {
if (defaultValue && defaultValue!='') {
return (utils.FormValidator.isEmptyString( value ) || value==defaultValue);
} else {
return utils.FormValidator.isEmptyString( value );
}
} else {
return true;
}
},
isEmptyString: function( str) {
return ( str.split(" ").join("").split( '\xa0' ).join("").length == 0 );
},
isValidMail: function( el ) {
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
if( utils.FormValidator.isEmptyString( $(el).val() ) ) return false;
return ( emailReg.test( $( el ).val() )) ? true : false;
},
isValidAlpha: function( el ) {
var alphaReg = /^[a-zA-Z _'-]*$/;
if( utils.FormValidator.isEmptyString( $(el).val() ) ) return false;
return ( alphaReg.test( $( el ).val() )) ? true : false;
},
isValidNum: function( el ) {
var numReg = /^[0-9]*$/;
if( utils.FormValidator.isEmptyString( $(el).val() ) ) return false;
return ( numReg.test( $( el ).val() )) ? true : false;
},
isValidAlphaNum: function( el ) {
var alphaNumReg = /^[a-zA-Z0-9 _'-]*$/;
if( utils.FormValidator.isEmptyString( $(el).val() ) ) return false;
return ( alphaNumReg.test( $( el ).val() )) ? true : false;
},
isValidSize: function( el, size ) {
var value = $(el).val();
return ( value.length < size+1 ) ? true : false;
},
getParams: function( $form ) {
return $form.serialize();
},
errors: function( $form, response ) {
for (var i=0, l=response.errorFields.length; i<l; ++i) {
$form.find('#'+response.errorFields[i]).addClass('error');
}
$form.find('.error-msg').show().html( response.errorMessages.join('<br/>') );
},
resetForm: function( $form, errorField ) {
var $form= $($form);
$form.find('.error').removeClass('error');
$form[0].reset();
if(errorField) errorField.empty();
},
resetFieldset: function( $fieldset, errorField , resetJqtransform ){
var jqtransform = resetJqtransform ? resetJqtransform : false;
$fieldset.find('.error').removeClass('error');
$fieldset.find('input, select, textarea').each(function(){
if( $(this).attr('data-default') ) {
$(this).val($(this).attr('data-default'));
} else {
$(this).val('');
}
});
if ( resetJqtransform ) {
if ( $fieldset.find('.jqTransformSelectWrapper').length > 0 ) {
$fieldset.find('.jqTransformSelectWrapper').each(function() {
var dataDefault = '';
if ($(this).find('select[data-default]').length > 0) {
dataDefault = $(this).find('select[data-default]').attr('data-default');
}
else {
dataDefault = $(this).find('ul li:first a').html();
}
$(this).find('span').html(dataDefault);
$(this).find('ul a.selected').removeClass('selected');
});
}
}
if(errorField) errorField.empty();
}
};
utils.FormValidator.init();
})( window.utils = window.utils || {}, window );
(function( utils, window ) {
utils.CharCounter = {
nbrCar : 0,
maxCountPerLine : 34,
maxCountTotal : 136,
currentCarCount : 0,
$inputContainer : null,
$counter : null,
init : function($inputContainer, $counter , maxCountTotal, maxCountPerLine, inputWrapperSelector) {
this.$inputContainer = $inputContainer ? $inputContainer : $('.js-giftmessage');
this.$counter = $counter ? $counter : $('.js-counter');
if (inputWrapperSelector) this.inputWrapperSelector = inputWrapperSelector;
if(maxCountTotal) this.maxCountTotal = maxCountTotal;
if(maxCountPerLine) this.maxCountPerLine = maxCountPerLine;
this.$counter.html(utils.CharCounter.maxCountTotal);
this.$inputContainer.find('input').attr('maxlength',utils.CharCounter.maxCountPerLine);
this.$inputContainer.find('input').on('click', function(){
utils.CharCounter.$inputContainer.find('input').addClass('on');
var allEmpty = utils.CharCounter.$inputContainer.find('input').filter(function () {
return $.trim(this.value) != '';
}).length == 0;
if(allEmpty) {
utils.CharCounter.$inputContainer.find('input').first().focus();
}
});
this.$inputContainer.find('input').on('keydown', function(e) {
utils.CharCounter.messageIsTyping(e, this);
});
var $this;
this.$inputContainer.find('input').on('input keydown keyup', function() {
$this = $(this);
if($this.val().match(utils.CharCounter.emojiRegex))
$this.val($this.val().replace(utils.CharCounter.emojiRegex, ''));
});
this.$inputContainer.find('input').on('cut copy paste', function(e) {
e.preventDefault();
});
this.checkCar($inputContainer.find('input:first')[0], false);
},
messageIsTyping : function(e, _this) {
if(e.keyCode == 13 || e.keyCode == 40) {
e.preventDefault();
utils.CharCounter.changeFocus($(_this));
}
if(e.keyCode == 38) {
utils.CharCounter.focusUp($(_this));
}
utils.CharCounter.nbrCar = $(_this).val().length+1;
if(e.keyCode != 13 && e.keyCode != 40 && e.keyCode != 38) {
if(((utils.CharCounter.currentCarCount + 1 > utils.CharCounter.maxCountTotal||
(utils.CharCounter.nbrCar > utils.CharCounter.maxCountPerLine &&  $(_this).next().length < 1)) )
&& e.keyCode != 8 && e.keyCode != 12 && e.keyCode != 37 && e.keyCode != 39)  {
e.preventDefault();
}
else {
setTimeout(function(){utils.CharCounter.checkCar($(_this), true, e)}, 0);
}
}
},
emojiRegex: new RegExp('\ud83c[\udf00-\udfff]|\ud83d[\udc00-\ude4f]|\ud83d[\ude80-\udeff]|\u263A\uFE0F|\u270A\uD83C\uDFFB|\u270C\uD83C\uDFFB|\u270A\uD83C\uDFFB|\u2728|\uD83E\uDD10|\uD83E\uDD15|\u270A\uD83C\uDFFC|\u270A\uD83C\uDFFD|\uD83D\uDC69|\u200D|\u2764|\uFE0F|\u200D|\uD83D\uDC8B|\u200D|\uD83D\uDC68|\uD83D\uDC8F|\u26D1|\u26BD|\u26BE', 'g'),
checkCar : function(_this, focus, e) {
var $this = $(_this);
utils.CharCounter.nbrCar = $this.val().length;
if(utils.CharCounter.nbrCar == 0 && focus && (!e || e.keyCode !== 16)) {
utils.CharCounter.focusUp($this);
}
if(utils.CharCounter.nbrCar >= utils.CharCounter.maxCountPerLine &&  $this.parent().next().length > 0) {
if( $this.index() < 3) utils.CharCounter.changeFocus(_this);
}
utils.CharCounter.currentCarCount = 0;
utils.CharCounter.$inputContainer.find('input').each(function() {
utils.CharCounter.currentCarCount += $(this).val().length;
});
utils.CharCounter.$counter.html(utils.CharCounter.maxCountTotal - utils.CharCounter.currentCarCount);
},
changeFocus : function(_this) {
var $next = this.inputWrapperSelector ? $(_this).parents(this.inputWrapperSelector).next(this.inputWrapperSelector).find('input') : $(_this).next();
$next.removeAttr('disabled').focus();
var nbrCarOnFocus = $next.val().length;
utils.CharCounter.nbrCar = nbrCarOnFocus;
},
focusUp : function(_this) {
var index = this.inputWrapperSelector ? parseInt($(_this).parents(this.inputWrapperSelector).index()) - 1 : parseInt($(_this).index()) - 1;
if(index < 0) index = 0;
utils.CharCounter.$inputContainer.find('input').eq(index).focus();
}
};
})( window.utils = window.utils || {}, window );
(function( utils, window ) {
utils.NumberSeparator = {
defaultDecimalSeparator: '.',
defaultThousandSeparator: '',
parse: function( number,thousandSeparator, decimalSeparator ) {
var decimalSep = decimalSeparator ? decimalSeparator : utils.NumberSeparator.defaultDecimalSeparator,
thousandSep = thousandSeparator ? thousandSeparator : utils.NumberSeparator.defaultThousandSeparator,
x = number.split('.'),
x1 = x[0], // entire part
x2 = x.length > 1 ? decimalSeparator + x[1] : '', // decimal part
rgx = /(\d+)(\d{3})/; // regex cut number by group of 3
while (rgx.test(x1)) {
x1 = x1.replace(rgx, '$1' + thousandSep + '$2');
}
return x1 + x2;
}
};
})( window.utils = window.utils || {}, window );
(function( core ) {
var prefix = "/"+ location.pathname.split("/")[1] + "/" + location.pathname.split("/")[2] + "/";
core.AjaxConfig = {
Global: {
COUNTRIES:              {url: '../../assets/json/getSubCountries.json', method: 'POST'},
COUNTY_LIST:            {url: '../../assets/json/county.json', method: 'GET'}
},
Account: {
LOGIN:                  {url: '../../assets/json/account_login_fail.json', method: 'POST'},
ORDERS:                 {url: '../dynamic/account/commandes.json', method: 'GET'},
RESET_PASSWORD:         {url: '../../assets/json/resetPass.json', method: 'POST'},
NEW_PASSWORD:           {url: '../dynamic/account/newPass.json', method: 'POST'},
PICKUP_ADRESS:          {url: '../dynamic/account/adresseEnlevement.json', method: 'GET'},
UPDATE_ADRESS:          {url: 'updateAdresse.php', method: 'POST'},
HEADER_RESET_PASSWORD:         {url: '../../assets/json/account_resetPass.json', method: 'POST'}
},
Tunnel: {
GET_BASKET:             {url: '../../assets/json/cart_tunnel.json', method: 'GET'},
UPDATE_ITEM_QUANTITY:   {url: '../../assets/json/cart_tunnel.json', method: 'GET'},
DELETE_ITEM:            {url: '../../assets/json/cart_tunnel.json', method: 'GET'},
SET_SHIPPING_MODE:      {url: '../../assets/json/cart_tunnel.json', method: 'GET'},
SET_SHIPPING_ADDRESS:   {url: '../../assets/json/cart_tunnel.json', method: 'GET'},
APPLY_GIFT_WRAP:        {url: '../../assets/json/cart_tunnel.json', method: 'GET'},
APPLY_PROMOCODE:        {url: '../../assets/json/checkPromoCode.json', method: 'GET'},
UPDATE_GIFT_MESSAGE:    {url: '../../assets/json/cart_tunnel.json', method: 'GET'},
STEP1_SELECT_ADRESS:    {url: 'step1_formSelectAdress.html', method: 'GET'},
ZIPCODE_SEARCH:         {url: '../../assets/json/zipcode_ko.json', method: 'GET'},
DELIVERY_DAY_JP:        {url: '../../assets/json/deliveryTime.json?', method: 'GET'},
STORES:                 {url: '../../assets/json/stores.json', method: 'GET'}
},
Product: {
ADD_TO_CART:            {url: '../../assets/json/addToCart.json', method: 'GET'},
MULTIPLE_ADD_TO_CART:   {url: '../../assets/json/addToCartMultiple.json', method: 'POST'},
STORE_LOCATOR:          {url: '../../assets/json/storeLoc.json', method: 'POST'},
STOCK_ALERT:            {url: '../../assets/json/stockAlert.json', method: 'POST'},
SEND_BY_MAIL:           {url: '../../assets/json/sendByMail.json', method: 'POST'}
},
QuickBuy : {url : '../../assets/json/quick_buy_ALL.json', url_confirm :'../../assets/json/quick_buy_confirmation_only.json', method: 'GET'},
Newsletter: {url: '../../assets/json/newsletter.json', 'method': 'GET'},
Cart: {
PCD: {
COOKIE:             'CartItemsCount',
GET_BASKET:         {url: '../../assets/json/cart_tunnel.json', method: 'GET'},
DELETE_ITEM:        {url: '../../assets/json/cart_tunnel.json', method: 'GET'}
},
CDC: {
COOKIE:             'cdc_cart_items_count',
GET_BASKET:         {url: '../../assets/json/cart_tunnel_cdc.json', method: 'GET'},
DELETE_ITEM:        {url: '../../assets/json/cart_tunnel.json', method: 'GET'}
},
TIMEOUT_DELAY:          5000
},
Sampling: {
REQUEST:                {url: '../../assets/json/request_sampling.json', method: 'POST'}
},
Contact: { url: '../../assets/json/contact.json', method: 'POST'  },
aog: {
CATALOG:                {url: '../../assets/json/catalog.json', method: 'GET'}
},
Search: {
PAGENAME:               {url: 'search.php'},
GSA:                    {url: 'http://gsa.dior.com/search', method: 'GET'}, //'http://dior.com:8888/search'
PRICESRANGE:            {url: '../../assets/json/pricesrange.json', method: 'GET'},
AUTOCOMPLETE_SUGGESTIONS:            {url: '../../assets/json/search_suggest.json' , method: 'GET'}, //http://gsa.dior.com/suggest //'http://dior.com:8888/suggest'
SEARCH_SUGGESTIONS:     {url: '../../assets/json/suggestions.json' , method: 'GET'}
}
};
core.ImgConfig = {
Global : {
src : "../../assets/img"
}
};
core.CssConfig = {
Global : {
src : "../../assets/css"
}
};
core.SwfConfig = {
Global : {
src : "../../assets/swf"
}
};
core.recentProducts = {
maxProducts : 18,
cookieMaxSize : 3500
};
core.diorTV = 'http://www.dior.com/diortv/fr_fr';
core.universe = 'PCD';
core.trackName = 'DiorCom';
core.trackPage = ''; // [String] defined in pages.*.js
core.websockets =  {
defileLive: "ws://dior-defile-pp.smile-hosting.fr:80"
};
core.Eco = {
PCD: ["fr_fr", "en_us", "ja_jp", "en_gb"],
CDC: ["de_de", "es_es", "fr_fr", "it_it", "en_gb"]
};
core.searchSuggestionsDebounce = 200;
})( window.core = window.core || {} );
(function( core ) {
core.AjaxConfig.Tunnel.GET_BASKET = {url: '/couture/ecommerce/checkout/cart/getjsoncartitems_V2', method: 'GET'};
core.AjaxConfig.Tunnel.UPDATE_ITEM_QUANTITY = {url: '/couture/ecommerce/checkout/cart/etape1Post', method: 'POST'};
core.AjaxConfig.Tunnel.DELETE_ITEM = {url: '/couture/ecommerce/checkout/cart/deletePost', method: 'POST'};
core.AjaxConfig.Tunnel.SET_SHIPPING_MODE = {url: '/couture/ecommerce/checkout/cart/setshipping', method: 'GET'};
core.AjaxConfig.Tunnel.SET_SHIPPING_ADDRESS = {url: '/couture/ecommerce/checkout/cdc/addressesPost', method: 'POST'};
core.AjaxConfig.Tunnel.APPLY_GIFT_WRAP = {url: '/couture/ecommerce/checkout/cart/setGiftMsg', method: 'GET'};
core.AjaxConfig.Tunnel.APPLY_PROMOCODE = {url: '/couture/ecommerce/checkout/cart/getjsoncartitems_V2', method: 'GET'};
core.AjaxConfig.Tunnel.UPDATE_GIFT_MESSAGE = {url: '/couture/ecommerce/checkout/cart/setGiftMsg', method: 'POST'};
core.AjaxConfig.Tunnel.STEP1_SELECT_ADRESS = {url: '/couture/ecommerce/checkout/cart/getjsoncartitems_V2', method: 'GET'};
core.AjaxConfig.Tunnel.ZIPCODE_SEARCH = {url: '/couture/ecommerce/postcodify/search', method: 'GET'};
core.AjaxConfig.Product.MULTIPLE_ADD_TO_CART =  {url: '/couture/ecommerce/checkout/cart/addAjaxMultiple/product/', method: 'GET'};
core.AjaxConfig.Product.SEND_BY_MAIL = {url: '/couture/ecommerce/sendtofriend/product/sendproduct', method: 'POST'};
core.AjaxConfig.Newsletter = {url: '/couture/ecommerce/newsletter/index/subscribeHeader', method: 'POST'};
core.AjaxConfig.Cart.PCD.GET_BASKET = {url: '/couture/ecommerce/checkout/cart/getjsonpcdcartitems?___store=', method: 'GET'};
core.AjaxConfig.Cart.PCD.DELETE_ITEM = {url: '/couture/ecommerce/checkout/cart/removePcdItem?___store=', method: 'GET'};
core.AjaxConfig.Cart.CDC.GET_BASKET = {url: '/couture/ecommerce/checkout/cart/getjsoncartitems_V2?___store=', method: 'GET'};
core.AjaxConfig.Cart.CDC.DELETE_ITEM = {url: '/couture/ecommerce/checkout/cart/deletePost?___store=', method: 'GET'};
core.AjaxConfig.Search.PAGENAME = {url: 'results'};
core.AjaxConfig.Search.GSA = {url: 'https://gsa.dior.com/search', method: 'GET'};
core.AjaxConfig.Search.PRICESRANGE = {url: '/search/recherche/pricesrange', method: 'GET'};
core.AjaxConfig.Search.AUTOCOMPLETE_SUGGESTIONS = {url: 'https://gsa.dior.com/suggest' , method: 'GET'};
core.AjaxConfig.Search.SEARCH_SUGGESTIONS = {url: '/search/recherche/suggestions', method: 'GET'};
core.ImgConfig.Global.src = "/couture/extension/smilediorrefonte/design/diorrefonte/images";
core.CssConfig.Global.src = "/couture/extension/smilediorrefonte/design/diorrefonte/stylesheets";
core.SwfConfig.Global.src = "/couture/extension/smilediorrefonte/design/diorrefonte/swf";
core.recentProducts.maxProducts = 12;
core.websockets = {defileLive: "wss://defile-js.dior.com"}
core.universe = 'CDC';
})( window.core = window.core || {} );
(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
(function() {
'use strict';
var Popin = require('./modules/popins/Popin.js');
var AutoComplete = require('./modules/autocomplete.js');
var Accordion = require('./modules/accordion.js');
var PopinSizeGuide = require('./modules/popins/PopinSizeGuide.js');
var Tags = require('./modules/tags.js');
window.popins = {};
window.common = {
addToCart : require('./modules/addToCart.js'),
player :    require('./modules/player.js'),
fsPlayer :  require('./modules/playerFS'),
init: function() {
this.addToCart.version = 'v6';
this.addToCart.init();
this.player.init();
this.fsPlayer.init();
this.initPopins();
this.initAutocomplete();
this.initTags();
},
getPopinParam: function() {
var queryString = location.search.replace('?','');
var popinToOpen;
if (queryString) {
queryString = queryString.split(/[&=]/g);
var popinId = queryString.indexOf('popin');
if (popinId > -1) popinToOpen = queryString[popinId+1];
}
return popinToOpen;
},
initPopins: function() {
this.initGeolocPopin();
window.popins.eshopAdvantages = new Popin({
$popin:   $('.js-popin-eshop-advantages'),
$open:    $('.js-popin-eshop-advantages-trigger')
});
window.popins.sizeGuide = new PopinSizeGuide({
$popin:   $('.js-popin-size'),
$open:    $('.js-popin-size-trigger')
});
var queryString = location.search.replace('?','');
var popinToOpen;
if (queryString) {
queryString = queryString.split(/[&=]/g);
var popinId = queryString.indexOf('popin');
if (popinId > -1) popinToOpen = queryString[popinId+1];
}
if (!popinId && $('.js-popin-open').length) {
if ($('.js-popin-open').is(this.popinGeoloc.$popin)) popinToOpen = 'geolocation';
}
switch (popinToOpen) {
case "geolocation":
this.popinGeoloc.open();
break;
}
},
initGeolocPopin: function() {
this.popinGeoloc = new Popin({
$popin: $('.js-popin-geoloc'),
onOpen: function() {
modules.Accordion.init('.js-popin-geoloc .js-accordion','.js-popin-geoloc .js-accordion-trigger', '.js-popin-geoloc .js-accordion-section' );
},
onClose: function() {
if (dataLayer && this.$popin.data('tracking-close')) dataLayer.push(this.$popin.data('tracking-close'));
}
});
modules.Accordion.signals.add(function (type, $section) {
if ( (type === 'accordion::opened' || type === 'accordion::closed') && $section.parents(common.popinGeoloc.$popin).length) {
common.popinGeoloc.resize();
}
if (type === 'accordion::opened' ) {
$('.popin-wrapper').animate({scrollTop: $section.offset().top });
}
});
},
initAutocomplete: function() {
var $autocomplete;
common.autoCompletes = [];
$('body').find('.js-autocomplete').each(function () {
$autocomplete = $(this);
$autocomplete.after('<ul class="autocomplete-list js-autocomplete-list"></ul>');
var _options = {
$input: $(this),
fillFromUrl: false,
restrictive: true,
valueSubParam: $autocomplete.attr('data-autocomplete-key') || 'key'
};
if ($autocomplete.attr('data-autocomplete-url')) _options.prefillUrl = $autocomplete.attr('data-autocomplete-url');
else if ($autocomplete.attr('data-autocomplete-values')) _options.values = $autocomplete.data('autocomplete-values');
if ($autocomplete.attr('data-input-hidden')) _options.inputHidden = $autocomplete.data('input-hidden');
if ($autocomplete.attr('data-value-id')) _options.valueIdParam = $autocomplete.data('value-id');
common.autoCompletes.push(new AutoComplete(_options));
});
},
initTags: function() {
this.tags = [];
$('.js-tag-wrapper').each(function() {
window.common.tags.push( new Tags($(this)) );
});
}
}
})();
},{"./modules/accordion.js":7,"./modules/addToCart.js":8,"./modules/autocomplete.js":9,"./modules/player.js":12,"./modules/playerFS":13,"./modules/popins/Popin.js":16,"./modules/popins/PopinSizeGuide.js":19,"./modules/tags.js":28}],2:[function(require,module,exports){
Handlebars.registerHelper("foreach",function(arr,options) {
if(options.inverse && !arr.length)
return options.inverse(this);
return $.map(arr,function(item,index) {
item.$index = index;
item.$first = index === 0;
item.$last  = index === arr.length-1;
return options.fn(item);
}).join('');
});
},{}],3:[function(require,module,exports){
Handlebars.registerHelper('ifCond', function (v1, operator, v2, options) {
switch (operator) {
case '==':
return (v1 == v2) ? options.fn(this) : options.inverse(this);
case '===':
return (v1 === v2) ? options.fn(this) : options.inverse(this);
case '!=':
return (v1 != v2) ? options.fn(this) : options.inverse(this);
case '!==':
return (v1 !== v2) ? options.fn(this) : options.inverse(this);
case '<':
return (v1 < v2) ? options.fn(this) : options.inverse(this);
case '<=':
return (v1 <= v2) ? options.fn(this) : options.inverse(this);
case '>':
return (v1 > v2) ? options.fn(this) : options.inverse(this);
case '>=':
return (v1 >= v2) ? options.fn(this) : options.inverse(this);
case '&&':
return (v1 && v2) ? options.fn(this) : options.inverse(this);
case '||':
return (v1 || v2) ? options.fn(this) : options.inverse(this);
default:
return options.inverse(this);
}
});
},{}],4:[function(require,module,exports){
Handlebars.registerHelper('stringify', function(context) {
if (context) {
return JSON.stringify(context).replace(/(['])/g, '&apos;');
}
return;
});
},{}],5:[function(require,module,exports){
Handlebars.registerHelper ('truncate', function (str, len) {
if (str.length > len && str.length > 0) {
var new_str = str + " ";
new_str = str.substr (0, len);
new_str = str.substr (0, new_str.lastIndexOf(" "));
new_str = (new_str.length > 0) ? new_str : str.substr (0, len);
return new Handlebars.SafeString ( new_str +'...' );
}
return str;
});
},{}],6:[function(require,module,exports){
var Dispatcher = function() {
this.actions = [];
};
Dispatcher.prototype = {
on: function(action, callback, scope) {
if (!this.actions[action]) this.actions[action] = [{
scope: scope,
callback: callback
}];
else this.actions[action].push({
scope: scope,
callback: callback
});
return this;
},
off: function(action, callback) {
if (!this.actions[action]) console.warn('Dispatcher->'+action+' is undefined');
if (!callback) this.actions[action] = [];
var _index = this.actions[action].indexOf(callback);
if (_index > -1) this.actions[action].splice(_index,1);
return this;
},
trigger: function(action) {
var params = [];
for (var i=1, iLength = arguments.length; i < iLength; i++) {
if (arguments[i]) params.push(arguments[i]);
}
if (this.actions[action]) {
this.actions[action].forEach(function(_action) {
if (typeof _action.callback === 'function') {
if (_action.scope) _action.callback.apply(_action.scope, params);
else _action.callback.apply(null,params);
}
});
}
return this;
}
};
module.exports = Dispatcher;
},{}],7:[function(require,module,exports){
modules.Accordion = {
defaultContainerSelector:   '.js-accordion',
defaultTriggerSelector:     '.js-accordion-trigger',
defaultSectionSelector:     '.js-accordion-section',
signals: new signals.Signal(),
init: function ( containerSelector, triggerSelector, sectionSelector ) {
modules.Accordion.containerSelector = containerSelector ? containerSelector : modules.Accordion.defaultContainerSelector;
modules.Accordion.triggerSelector = triggerSelector ? triggerSelector : modules.Accordion.defaultTriggerSelector;
modules.Accordion.sectionSelector = sectionSelector ? sectionSelector : modules.Accordion.defaultSectionSelector;
$(modules.Accordion.triggerSelector).on('click', function (e) {
if(! $(this).hasClass('accordion-trigger--active') ) {
modules.Accordion.open( $(this) );
} else {
modules.Accordion.close( $(this) );
}
if (core.lte8){
$(this).parents(modules.Accordion.containerSelector).toggleClass('repaint');
}
});
},
open: function($this) {
var _$container = $this.parents(modules.Accordion.containerSelector);
var _$section = $this.attr('data-accordion-target') ? $($this.attr('data-accordion-target')) :  $this.next(modules.Accordion.sectionSelector);
var $active = _$container.find('.accordion-trigger--active');
if ($active.length) {
modules.Accordion.close( $active );
}
$this.addClass('accordion-trigger--active');
_$section.addClass('accordion-section--active').slideDown(function(){
modules.Accordion.signals.dispatch('accordion::opened',_$section);
if (core.lte8) $('body').toggleClass('repaint');
});
if (_$section.find('.js-block-video').length>0) {
common.player.resize( _$section.find('.js-block-video') );
}
modules.Accordion.signals.dispatch('accordion::open',_$section);
},
close: function($this) {
var _$section = $this.attr('data-accordion-target') ? $($this.attr('data-accordion-target')) :  $this.next(modules.Accordion.sectionSelector);
modules.Accordion.signals.dispatch('accordion::close',_$section);
$this.removeClass('accordion-trigger--active');
_$section.removeClass('accordion-section--active').slideUp(function(){
modules.Accordion.signals.dispatch('accordion::closed',_$section);
if (core.lte8) $('body').toggleClass('repaint');
});
if (_$section.find('.js-block-video').length>0) {
var _player = modules.Player.getPlayer( _$section.find('.js-block-video').attr('id') );
if (_player && _player.isPlaying()) {
_player.params.autoPaused = true;
_player.pause();
}
}
}
};
module.exports = modules.Accordion;
},{}],8:[function(require,module,exports){
modules.AddToCart =
{
Interval : null,
IntervalOut : 250,
ItemHeight: 100,
Timer : null,
TimeOut : 3000,
Popin:          require('../modules/popins/Popin.js'),
confirmPopin: null,
QuickBuyPopin:  require('../modules/popins/PopinQuickbuy.js'),
qbPopin: null,
PopinData : null,
elementIsClicked : null,
positionY       : null,
verticalCenter  : require("../modules/verticalCenter.js"),
noAction: false, // No action fired on addToCart completion
waiting: false,
$currentButton: null,
init : function()
{
$('body').on('click','.js-addtocart',modules.AddToCart.createPopin);
},
createPopin: function(e) {
e.preventDefault();
modules.AddToCart.$currentButton  = $(this);
var productCode     = modules.AddToCart.$currentButton.attr('data-productqb') ? modules.AddToCart.$currentButton.attr('data-productqb') : -1;
var sku             = modules.AddToCart.$currentButton.attr('data-sku') || modules.AddToCart.$currentButton.attr('data-skus') || modules.AddToCart.$currentButton.attr('data-sku') === "" ? modules.AddToCart.$currentButton.attr('data-sku') : -1;
if (sku === -1) {
modules.AddToCart.qbPopin = new modules.AddToCart.QuickBuyPopin({
$popin:         $('.js-popin-quickbuy'),
$triggerButton: modules.AddToCart.$currentButton
});
} else if ( e!== undefined ){
if ( modules.AddToCart.$currentButton.attr('data-sku') && modules.AddToCart.$currentButton.attr('data-sku') !== "" ) {
modules.AddToCart.Add(e);
}
else if(  modules.AddToCart.$currentButton.attr('data-skus') !== "" && typeof modules.AddToCart.$currentButton.attr('data-skus') !== "undefined"  ) {
modules.AddToCart.AddMultiple(e);
} else {
var _btn = $('#gocart-trigger > a');
modules.header.rolls.toggle( $('.js-error-roll'), _btn);
modules.header.rolls.timerOut = window.setTimeout(function() {
modules.header.rolls.close();
}, 2500);
}
}
},
Add :function( e )
{
if (!modules.AddToCart.waiting)
{
var $buyBtn =  $(e.currentTarget);
modules.AddToCart.Feedback.Clean();
window.clearTimeout( modules.AddToCart.Timer );
modules.AddToCart.waiting = true;
modules.AddToCart.PopinData = null;
var origin = $buyBtn.attr('data-origin');
if (origin === undefined) {
origin = $('body').data('origin');
if (origin === undefined) {
console.warn('[Cart]: missing origin on body, and nothing set in trigger data-origin.');
return;
}
}
var engravingMessage = $buyBtn.attr('data-engraving') || '';
$.ajax({
url: core.AjaxConfig.Product.ADD_TO_CART.url,
type: core.AjaxConfig.Product.ADD_TO_CART.method,
data : 'sku='+ $buyBtn.attr('data-sku') +'&quantity='+ $buyBtn.attr('data-quantity')+'&engravingMessage='+ engravingMessage,
formatter: core.AjaxConfig.Product.ADD_TO_CART.formatter,
success : function(data)
{
console.log(data);
modules.AddToCart.PopinData = $.parseJSON(data); //SMILE
if(modules.AddToCart.PopinData.status == 'ok' || modules.AddToCart.PopinData.success) {//SMILE
modules.AddToCart.Confirm( modules.AddToCart.PopinData.basketsize, $buyBtn, origin );//SMILE
} else {
modules.AddToCart.AddFail(data);
}
modules.AddToCart.waiting = false;
}
});
}
},
AddMultiple :function(e)
{
if (!modules.AddToCart.waiting)
{
var $buyBtn       = $(e.currentTarget);
var quantities  = $buyBtn.attr('data-quantities').split(','),
skus        = $buyBtn.attr('data-skus').split(','),
messages    = $buyBtn.attr('data-messages'),
_l          = quantities.length;
if(_l>0 && parseInt(quantities[0],10)>0)
{
modules.AddToCart.Feedback.Clean();
window.clearTimeout( modules.AddToCart.Timer );
modules.AddToCart.waiting = true;
modules.AddToCart.PopinData = null;
var tmpStack = [];
for (var i=0; i<_l; ++i) {
tmpStack.push('sku='+skus[i]+':quantity='+quantities[i]);
}
var _preparedSku = tmpStack.join(',');
$.ajax({
type: core.AjaxConfig.Product.MULTIPLE_ADD_TO_CART.method,
url: core.AjaxConfig.Product.MULTIPLE_ADD_TO_CART.url,
dataType: 'json',
data: {
skus: _preparedSku,
giftMessage: messages
},
success: function (data) {
modules.AddToCart.PopinData = data.product;
if(modules.AddToCart.PopinData .status == 'ok' || modules.AddToCart.PopinData.success) {
modules.AddToCart.Confirm( data.basketsize, $buyBtn );
} else {
modules.AddToCart.AddFail(data);
}
modules.AddToCart.waiting = false;
}
});
}
}
},
Confirm : function( total, $buyBtn, origin, silent ){
if (!silent) core.signals.global.dispatch('addToCart::success', modules.AddToCart.PopinData, origin);
if ($buyBtn.attr('data-product-track-object')) {
if (core.tracking) core.tracking.trackProductClick( $buyBtn.attr('data-product-track-object') );
}
if ($buyBtn.attr('data-track-object')) {
if (core.tracking) core.tracking.trackObject($buyBtn.attr('data-track-object'));
}
$('.js-popin-addtocart-confirm').find('.js-addtocart-message').html(modules.AddToCart.PopinData.message);
if( modules.AddToCart.qbPopin && modules.AddToCart.qbPopin.$popin.is(':visible')) {
modules.AddToCart.qbPopin.$popin.find('.js-popin-content').html($('.js-popin-addtocart-confirm .js-popin-content').clone());
modules.AddToCart.qbPopin.$popin.css('line-height','normal');
modules.AddToCart.qbPopin.placeInWindow();
}
else if (!modules.AddToCart.$currentButton || modules.AddToCart.$currentButton.data('open-roll')) {
var _btn = $('#gocart-trigger > a'),
_roll = $('#'+_btn.data('targetroll'));
modules.header.rolls.toggle( _roll, _btn);
if(_roll.data('auto-close') === undefined || (_roll.data('auto-close') !== undefined && _roll.data('auto-close'))) {
modules.header.rolls.timerOut = window.setTimeout(function () {
modules.header.rolls.close();
}, 2500);
}
}
else if (modules.AddToCart.PopinData.checkoutShoppingCartHref !== "" && modules.AddToCart.$currentButton.data('redirect') ) { // redirect after addtocart
window.location = modules.AddToCart.PopinData.checkoutShoppingCartHref;
}
else if(!modules.AddToCart.noAction) { // open confirm
modules.AddToCart.confirmPopin = new modules.AddToCart.Popin({
$popin: $('.js-popin-addtocart-confirm')
});
modules.AddToCart.confirmPopin.open();
}
$('body').off('click', '.js-addtocart-continue')
.on('click', '.js-addtocart-continue', function(e) {
e.preventDefault();
if( modules.AddToCart.qbPopin && modules.AddToCart.qbPopin.$popin.is(':visible')) {
modules.AddToCart.qbPopin.close();
}
else {
modules.AddToCart.confirmPopin.close();
}
if (core.signals && core.signals.global )  core.signals.global.dispatch('addToCart::continue');
});
$('body').off('click', '.js-addtocart-checkout')
.on('click', '.js-addtocart-checkout', function(e) {
if (core.signals && core.signals.global )  core.signals.global.dispatch('addToCart::checkout');
});
modules.AddToCart.$currentButton = null;
},
AddFail : function(data)
{
if(data && data.status && data.status === 'customisation') { // ?
modules.AddToCart.qbPopin = new modules.AddToCart.QuickBuyPopin({
$popin:         $('.js-popin-customisation-error'),
$triggerButton: modules.AddToCart.$currentButton
});
} else if (data && data.engravingError) {
modules.AddToCart.engravingErrorPopin = new this.Popin({
$popin:   $('.js-popin-error-engraving')
});
modules.AddToCart.engravingErrorPopin.open();
} else {
if (typeof modules.AddToCart.PopinData.errorMessages == 'string') {
$('#errorRoll .default-message').html( modules.AddToCart.PopinData.errorMessages );
} else {
$('#errorRoll .default-message').html( modules.AddToCart.PopinData.errorMessages.join('<br/>') );
}
modules.AddToCart.Feedback.Error();
if ( $('.js-popin-quickbuy:first').is(":visible") ) {
modules.AddToCart.qbPopin.close();
}
}
},
Feedback:
{
Update: function(_val)
{
$('.js-cart-total').html(_val);
if (core.universe == 'PCD') {
$.cookie( core.AjaxConfig.Cart.PCD.COOKIE, +_val, modules.header.cookieOptions);
}
},
Hide: function()
{
window.clearTimeout(modules.AddToCart.Timer);
$( document.getElementById('cart-total-preview') ).removeClass('active');
modules.footer.overlay.Hide();
$( document.getElementById('cart-feedback-display') ).animate({'height' : 0}, 'slow');
},
Clean : function()
{
$( document.getElementById('cart-feedback-display') ).html( modules.AddToCart.WaitMessage );
},
Show: function()
{
$( document.getElementById('cart-total-preview') ).addClass('active');
$( document.getElementById('cart-feedback-display') ).slideDown();
},
Error: function(){
if( modules.header ) {
if (modules.header.rolls.isOpened) {
modules.header.rolls.close();
}
setTimeout( function() {
modules.header.error.open();
}, 500);
}
}
}
};
module.exports = modules.AddToCart;
},{"../modules/popins/Popin.js":16,"../modules/popins/PopinQuickbuy.js":18,"../modules/verticalCenter.js":29}],9:[function(require,module,exports){
var AutoComplete = function(options) {
var _defaults = {
form: undefined,
$input: $('.js-autocomplete-input'),
list: '.js-autocomplete-list',
$list: undefined,
fillFromUrl: false,
restrictive: false,
separator: '+',
ajaxParams: false,
ajaxTimeout: null,
values: {},
prefillUrl: false,
valueSubParam: undefined,
preventSubmit: false,
submitOnClick: false, //
inputHidden: null,
valueIdParam: false,
onClick: function($input) {} //
};
$.extend(this, $.extend(_defaults, options) );
if (this.inputHidden) this.$inputHidden = $(this.inputHidden);
else this.$inputHidden = this.$input.parents('li:first').find('input[type=hidden]');
if (this.form) this.$form   = $(this.form);
if (!this.$list) this.$list   = this.$input.siblings(this.list);
if (this.prefillUrl) {
var _this = this;
$.getJSON(this.prefillUrl, function (data) {
_this.values = data;
_this.init();
});
} else  {
this.init();
}
};
AutoComplete.prototype = {
init: function() {
var _this = this;
if (this.fillFromUrl) {
this.query = decodeURI(core.getQuery('q'));
if(this.query && this.query != 'undefined') this.$input.val(this.query.replaceAll(this.separator, ' '));
}
this.fn = {
onFocus: function () {
setTimeout(function () {
_this.onKeyUp(_this.$input.val());
}, 10);
},
onFocusOut: this.onFocusOut.bind(this),
onSubmit: this.onSubmit.bind(this),
onClick: function() {
$(this).prev().val('');
},
onOptionClick: this.onOptionClick.bind(this)
};
this.$input.on('keyup focus', this.fn.onFocus);
this.$input.on('focusout', this.fn.onFocusOut);
if (this.form) {
this.$form.on('submit', this.fn.onSubmit);
this.$form.find('.js-clear-input').on('click', this.fn.onClick );
}
$('.js-autocomplete-update').each(function() {
if ( $( $(this).attr('data-autocomplete-update') )[0] === _this.$input[0]) _this.initAutocompleteUpdate( $(this) );
});
if (this.$inputHidden && this.$inputHidden.val() != '') {
var _id = this.$inputHidden.val();
for (var i=0; i<_this.values.length; ++i) {
if (_id == _this.values[i][_this.valueIdParam]) {
_this.$input.val( _this.values[i][_this.valueSubParam] );
break;
}
}
}
this.$list.on('click', 'a', this.fn.onOptionClick);
},
onOptionClick: function(e){
e.preventDefault();
this.$input.val($(e.currentTarget).text());
if (this.valueIdParam) {
this.$inputHidden.val( $(e.currentTarget).data('id') );
}
if (this.$input.parents('.form-field:first').length) this.$input.parents('.form-field:first').addClass('has-success');
this.onClick(this.$input);
if (this.submitOnClick) this.$form.submit();
},
onKeyUp: function(val) {
var _this = this;
if (val !== '') {
if (this.ajaxParams) {
_this.getFromAjax(val,function(data) {
if (_this.restrictive && data.length === 0) _this.$input.val(val.substring(0, val.length-1));
_this.showSuggestions(data);
});
} else {
_this.showSuggestions( _this.sortValues(val) );
}
} else { // hide suggestions is we already performed a search and val is empty
if (_this.$list.hasClass('list-active'))
_this.$list.removeClass('list-active keyboard-selection').empty();
}
},
onFocusOut: function() {
var _this = this;
setTimeout(function(){
if (_this.$list.hasClass('list-active')) {
_this.$list.removeClass('list-active keyboard-selection').empty();
}
}, 200);
if (this.restrictive) {
var _val;
for (var i= 0, j = this.values.length; i<j; ++i) {
_val = this.valueSubParam ? this.values[i][this.valueSubParam] : this.values[i];
if (_val === this.$input.val()) {
return;
}
}
this.$input.val('');
if (this.$input.parents('.form-field:first').length) {
this.$input.parents('.form-field:first').removeClass('has-success');
}
}
},
onSubmit: function() {
var replacedVal = this.$input.val(this.$input.val().trim());
if ( this.preventSubmit && (replacedVal === this.query || replacedVal === ''))
return false;
},
getFromAjax: function(_string, callback) {
this.ajaxParams.data[this.ajaxParams.valueParameter] = _string;
this.ajaxParams.success = callback;
if (this.ajaxTimeout) {
var _this = this;
clearTimeout(this.ajaxTimeoutRef);
this.ajaxTimeoutRef = setTimeout(function() {
$.ajax(_this.ajaxParams);
}, this.ajaxTimeout);
} else {
$.ajax(this.ajaxParams);
}
},
sortValues: function(val){
var _val;
var _results = [];
for (var i = 0, j = this.values.length; i<j ;++i) {
_val = this.valueSubParam ? this.values[i][this.valueSubParam] : this.values[i];
if (_val.toLowerCase().indexOf(val.toLowerCase()) === 0) {
var _result = {
name: _val
};
if (this.valueIdParam) {
_result.id = this.values[i][this.valueIdParam];
}
_results.push( _result );
}
}
if (this.restrictive && _results.length === 0) {
var _prev = val.substring(0, val.length-1);
this.$input.val(_prev);
var _this = this;
setTimeout(function() {
_this.onKeyUp(_prev);
},100);
}
return {results: _results };
},
showSuggestions: function(data){
var _this           = this;
data            = data.results;
var resultLength    = data.length;
this.$list.empty();
if (resultLength > 0) {
if (!this.$list.hasClass('list-active'))
this.$list.addClass('list-active');
for (var i = 0; i < resultLength; i++) {
var _regexp = new RegExp('/'+this.separator+'/g');
if (this.valueIdParam) {
this.$list.append('<li><a href="#" data-id="'+ data[i].id +'">' + data[i].name.replaceAll(this.separator, ' ') + '</a></li>');
} else {
this.$list.append('<li><a href="#">' + data[i].name.replace(_regexp, ' ') + '</a></li>');
}
}
} else {
if (this.$list.hasClass('list-active'))
this.$list.removeClass('list-active keyboard-selection');
}
},
initAutocompleteUpdate: function($select) {
var _this = this;
var $option;
$select.on('change', function(e) {
$option = $("option:selected", this);
if ( $option.attr('data-autocomplete-values') ) {
_this.updateValue($.parseJSON( $option.attr('data-autocomplete-values') ));
} else if ( $option.attr('data-autocomplete-url') ) {
_this.updateFromUrl( $option.attr('data-autocomplete-url') );
} else {
_this.values = [];
}
_this.$input.val('');
if ( _this.$input.parents('.form-field').length ) _this.$input.parents('.form-field').removeClass('has-success');
});
$select.trigger('change');
},
updateValue: function(data) {
this.values = data;
this.onFocusOut();
},
updateFromUrl: function(url) {
var _this = this;
$.getJSON(url || this.prefillUrl, function (data) {
_this.values = data;
_this.onFocusOut();
});
},
getSuggestions: function(val){
return $.ajax({
url: core.AjaxConfig.Search.AUTOCOMPLETE_SUGGESTIONS.url,
method: 'GET',
data: {
q: val,
rc: 1,
oe: "UTF-8",
ie: "UTF-8",
max: 10,
format: 'rich',
client:'dior_'+pages.search.lang.substr(0,2)
}
});
},
destroy: function() {
this.$input.off('keyup focus', this.fn.onFocus);
this.$input.off('focusout', this.fn.onFocusOut);
if (this.form) {
this.$form.off('submit', this.fn.onSubmit);
this.$form.find('.js-clear-input').off('click', this.fn.onClick );
}
this.$list.off('click', 'a', this.fn.onOptionClick);
}
};
module.exports = AutoComplete;
},{}],10:[function(require,module,exports){
function DropDown(options) {
this.o =  {
$container          : $('.js-dropdown'),
itemSelector        : '.js-dropdown-item',
triggerSelector     : '.js-dropdown-trigger',
listSelector        : '.js-dropdown-items',
rowSelector         : '.js-dropdown-row',
maxListHeight       : 124,
listAnimationSpeed  : 400,
maxElBeforeScroll   : 3
}
this.o = $.extend(this.o, options);
this.init();
return this;
}
DropDown.prototype = {
init: function(options){
if (options) {
this.o = $.extend(this.o, options);
}
this.$container = this.o.$container;
this.$list      = this.$container.find(this.o.listSelector);
this.$trigger   = this.$container.find(this.o.triggerSelector);
this.signals    = new signals.Signal();
this.isOpened   = false;
this.$trigger.on('click', $.proxy(this.toggle, this));
this.$container.on('click touchstart', this.o.itemSelector, $.proxy(this.onItemSelected, this));
var scope = this;
core.signals.global.add(function (type, event) {
switch (type) {
case 'document::click':
var $trigger = scope.$trigger;
var $list = scope.$list;
var isChildOfDropUp = $(event.target).parents('.js-dropdown:first').length > 0;
if(!$trigger.is(event.target) && $trigger.has(event.target).length === 0
&& !$list.is(event.target) && $list.has(event.target).length === 0
&& scope.isOpened && !isChildOfDropUp ) {
scope.close();
}
break;
}
});
},
toggle: function(e) {
if (e) {
e.preventDefault();
e.stopPropagation();
}
if( !this.isOpened )
this.open();
else
this.close();
},
open : function (e) {
this.$container.addClass('mod-dropdown--open');
var $container;
var hList    = this.o.maxListHeight;
var nbrEl    = this.$list.find(this.o.itemSelector).length;
var nbrLines = this.$list.find(this.o.rowSelector).length;
if( core.universe == core.pcd ) {
if( nbrEl > this.o.maxElBeforeScroll) {
this.createScrollableList();
$container = this.$list.parents('.js-dropdown-scroller');
} else {
hList = nbrEl * this.$list.find(this.o.itemSelector).parent().height();
$container = this.$list;
}
} else {
hList = nbrLines * ( this.$list.find(this.o.rowSelector).height() + 1 ); // +1 = table border
$container = this.$list;
}
$container.animate( { 'height': hList+'px' }, this.o.listAnimationSpeed );
this.isOpened = true;
},
close : function (){
if(this.$list.parents('.js-dropdown-scroller').length <= 0 ) {
var _this = this;
this.$list.animate({
'height': '0'
}, { complete: function(){
_this.$container.removeClass('mod-dropdown--open');
}});
}
else {
var _this = this;
this.$list.parents('.js-dropdown-scroller').animate({
'height': '0'
}, { complete: function(){
_this.$container.removeClass('mod-dropdown--open');
}});
}
this.isOpened = false;
},
onItemSelected: function (e){
e.preventDefault(); // event need to be trigger on product selector too
e.stopPropagation();
var $item       = $(e.currentTarget);
this.setActiveItem($item, true);
this.close();
this.signals.dispatch('DropDown::change',$item);
},
setActiveItem: function($item, silently) {
var $label = this.$container.find('.js-dropdown-activeLabel');
var _text = $item.find('.js-dropdown-label').text();
this.$trigger.find('.js-dropdown-activeLabel').html(_text);
this.$trigger.parents('.js-quickbuy').find('.js-dropdown-activeValue').html($item.find('.js-dropdown-value').data('value'));
this.$list.find('.active').removeClass('active');
$item.addClass('active');
if ($label.attr('data-default')) {
$label.toggleClass('select-value-default', _text === $label.attr('data-default'));
}
if (!silently) this.signals.dispatch('DropDown::change',$item);
},
createScrollableList : function(){
if(this.$list.parents('.js-dropdown-scroller').length <= 0 ) {
var $scroller = $('<div/>',{
'class': 'scroller js-dropdown-scroller'
});
var $viewport = $('<div/>',{
'class': 'viewport'
});
var $scrollbar = $('<div/>',{
'class': 'scrollbar',
'html': '<div class="track"><div class="thumb"><div class="end"></div></div></div>'
});
this.$list.height('auto').addClass('overview').detach();
$viewport.append(this.$list).height(this.o.maxListHeight);
$scroller.append($viewport);
$scroller.append($scrollbar);
this.$container.append($scroller);
$scroller.tinyscrollbar();
$scroller.height(0);
}
}
};
module.exports = DropDown;
},{}],11:[function(require,module,exports){
modules.equalHeight = {
defaultContainer: '#container',
defaultSelector: '.js-equal-height',
defaultMainSelector: '.js-equal-height-main',
equalize: function(itemContainer, itemSelector, mainSelector, removePadding)
{
var container = itemContainer ? itemContainer : modules.equalHeight.defaultContainer,
selector = itemSelector ? itemSelector : modules.equalHeight.defaultSelector,
main = mainSelector ? mainSelector : modules.equalHeight.defaultMainSelector;
$(container).each(function() {
var $items = $(this).find(selector),
maxH = $items.find(main).length > 0 ? $items.find(main).outerHeight() : 0;
if ($items.find(main).length <= 0) { // if no main get max
$items.each(function () {
var oldStyle = $(this).attr('style');
$(this).attr('style', '');
var itemH = parseFloat($(this).outerHeight()) - parseFloat($(this).css('padding-top')) - parseFloat($(this).css('padding-bottom'));
maxH = ( itemH > maxH ) ? itemH : maxH;
$(this).attr('style', oldStyle);
});
}
if (!removePadding) {
$items.height(maxH);
} else {
$items.each(function() {
var $this = $(this);
$this.height( maxH - parseFloat($(this).css('padding-top')) - parseFloat($(this).css('padding-bottom')) );
});
}
});
}
};
module.exports = modules.equalHeight;
},{}],12:[function(require,module,exports){
if (!window.modules) modules = {};
modules.Player = {
playerMMM:  require('./playerMMM.js'),
playerFC:   require('./playerFreecaster.js'),
templates:  require('../templates/player.js')(Handlebars),
playerFS:   require('./playerFS.js'),
params: {},
instances: {},
mmmController: null,
num: 0,
fsPlayerEl: null,
mmm_initialized: false,
$elScroll: $(window),
firstStartProxy: null,
autoPlayId: null,
targetPlayer: null,
targetTop: 0,
matchTimes: 0,
matchTimesNum: 4,
matchDelay: 150,
tooltipsThreshold: 561,
defaultOptions: {
resizable: true,
type: "MMM",
resource_id: "",
target: "",
sizingMethod: "crop",
width: "100%",
height: "100%",
controls: true,
controlsType: "default",        // default | tiny
vAlign: "top",
position: "left",
autoPlay: true,
autoRewind: false,
loop: false,
locaFullscreen: "Plein écran",
locaNormalScreen: "Quitter le mode plein écran",
locaVolume: "Volume",
locaSubtitles: "Sous-titres",
locaShare: "Partager",
poster: "",
muted: true,
posterAlign: "C",
diorTV: core.diorTV,
subtitles: null,
subtitlesBg: "#000000",
subtitlesBtn: false,
background: "#000000",
fadeControlDelay: 3000,
forceHTML5: false,
debugJS: false,
chapters: null,
ready: false,
autoPlayVisibility: false,
autoPaused: true,
share: false,
fullscreen: false
},
init: function( players, commonOptions )
{
if (window.core==undefined) {
window.core = {};
}
if (/Android/i.test(navigator.userAgent)) {
core.android = true;
core.iphone = core.ipad = false;
if (/(Mobile)/.test(navigator.userAgent)) {
core.tablet = false;
core.mobile = true;
} else {
core.tablet = true;
core.mobile = false;
}
} else {
core.android = false;
if (/(iPod|iPhone)/.test(navigator.userAgent)) {
core.iphone = true;
core.tablet = false;
core.mobile = true;
} else if (/(iPad)/.test(navigator.userAgent)) {
core.ipad = true;
core.tablet = true;
core.mobile = false;
}
}
if (typeof console === "undefined" || typeof console.log === "undefined") {
console = {};
console.log = function () { };
}
var _hasMMMPlayer = false,
$players = players ? players : $('.js-block-video, .js-push-video'),
_hash = window.location.hash.substring(1);
if (_hash=="") {
var queryString = /\?anchor=([\w-]*)/.exec( location );
if (queryString) _hash = queryString[1];
}
if (_hash.indexOf('video-')!=-1)
{
modules.Player.autoPlayId = _hash.replace('video-', '');
modules.Player.targetPlayer = $('.js-block-video[id='+modules.Player.autoPlayId+']');
if (!modules.Player.targetPlayer.length) modules.Player.targetPlayer = $('.js-push-video[id='+modules.Player.autoPlayId+']');
if (modules.Player.targetPlayer.length>0) {
modules.Player.targetTop = 0;
modules.Player.checkTargetTop();
} else {
throw new Error("[Player] missing element for anchor "+modules.Player.autoPlayId);
}
}
if (Modernizr.fullscreen) {
document.addEventListener("fullscreenchange", modules.Player.onFullscreenEvent);
document.addEventListener("webkitfullscreenchange", modules.Player.onFullscreenEvent);
document.addEventListener("mozfullscreenchange", modules.Player.onFullscreenEvent);
document.addEventListener("MSFullscreenChange", modules.Player.onFullscreenEvent);
}
$players.each(function() {
var _this = $(this),
_options = _this.data('options');
if (commonOptions) {
_options = $.extend({}, _options, commonOptions);
}
if (_options) {
if (_options.type === 'MMM') {
if (!_options.hasOwnProperty('resource_id')) {
throw new Error("[PlayerMMM] no resource_id provided");
return;
}
_options.instanceName = 'mmm_' + modules.Player.playerMMM.account + '_' + _this.attr('id');
} else if (_options.type === 'FC' ) {
if (!_options.hasOwnProperty('resource_id')) {
throw new Error("[PlayerFC] no resource_id provided");
return;
}
_options.instanceName = 'fc_' + _this.attr('id');
} else {
_options.instanceName = 'vjs_player_' + _options.poster;
}
if (modules.Player.params[_options.instanceName] != undefined) {
if (window.console) {
console.warn('[modules.Player] player ' + _options.instanceName + ' already instantiated.')
}
} else {
_this.addClass('loading');
_options = $.extend({}, modules.Player.defaultOptions, _options);
_options.forceHTML5 = Modernizr.video ? true : false;
if (core.ie9) _options.forceHTML5 = false;
if (_options.loop) {
_options.loop = parseInt( _options.loop );
if (isNaN(_options.loop)) {
_options.loop = false;
} else {
_options.currentLoop = 0;
}
}
if (_options.resizable) {
_this.addClass('js-video-resizable');
var $img = $('<img class="video-poster" />');
$img.on('load', function () {
modules.Player.resize(_this);
});
if (_options && _options.poster != "") {
$img.attr("src", _options.poster);
_this.parent().prepend($img);
}
else {
$img.attr("src", _this.parent().find('> img:first').attr('src'));
}
_this.data('poster', _this.parent().find('> img:first'));
}
if (!_options.controls) {
_this.addClass('no-controls');
_options.controls = true;
} else {
_this.addClass(_options.controlsType);
if (_options.controlsType == 'tiny') {
_options.diorTV = false;
_options.share = false;
}
if (!_options.autoPlay) {
_this.addClass('controls-hidden');
_options.firstStart = true;
}
}
if (_options.type === 'MMM') {
_options.instanceName = 'mmm_' + modules.Player.playerMMM.account + '_' + _this.attr('id');
_options.$el = _this;
_options.target = _this.attr('id');
_options.fadeControlDelay = core.isTactile ? 0 : _options.fadeControlDelay;
if (_this.parents('.cover').length > 0) {
if (core.isTactile) _options.autoPlay = false;
else _options.autoPlay = true;
_options.autoPlayVisibility = true;
_options.autoRewind = true;
_options.cover = true;
}
if (_options.subtitles) {
_options.html5_subtitleFCT = $.proxy(modules.Player.onUpdateSubtitle, _this);
}
if (_options.chapters) {
_options.chapters = JSON.parse(_this.attr('data-chapters')).chapters;
_options.updateCallback = _this.data('updatecallback') ? _this.data('updatecallback') : "pages.GammeLook.updateVideo";
_options.chapterCallback = _this.data('chaptercallback') ? _this.data('chaptercallback') : "pages.GammeLook.previewChapter";
_options.seekCallback = _this.data('seekcallback') ? _this.data('seekcallback') : "pages.GammeLook.seekToChapter";
_options.fadeControlDelay = 0;
_this.addClass('has-chapters');
}
var d = new Date();
_options.startTime = d.getTime();
modules.Player.params[_options.instanceName] = _options;
++modules.Player.num;
_hasMMMPlayer = true;
} else if (_options.type === 'FC' ) {
_options.$el = _this;
modules.PlayerFC.buildPlayer( _options, false );
} else {
modules.Player.params[_options.instanceName] = _options;
if (!core.lte7) {
modules.Player.addVideoJSPlayer(_this, _options);
} else {
var $parent = _this.parent();
var $poster = $parent.find('.video-poster').removeClass('video-poster invisible').detach();
_this.addClass('push-pic')
.removeClass('push-video js-push-video js-video-resizable')
.removeAttr('style')
.prepend($poster).find('video').remove();
}
}
if (_options.autoPlayVisibility) {
_options.autoPaused = true;
_this.addClass('js-video-autoplay');
modules.Player.$elScroll.on('scroll', modules.Player.checkPlayerVisibility);
}
}
}
});
if (_hasMMMPlayer) {
if (!modules.Player.playerMMM.loaded) modules.Player.playerMMM.loadScript(modules.Player.onMMMReady, core.mobile);
else modules.Player.onMMMReady();
}
},
onResize: function() {
$('.js-video-resizable').each( function() {
modules.Player.resize( $(this) );
});
},
resize: function( $player ) {
var $poster = $player.data('poster');
if ($poster && $poster.width) {
$player.width( $poster.width() )
.height( $poster.outerHeight(true) );
if (core.ipad) {
$player.find('video').height( $poster.outerHeight(true) ).parent().height( $poster.outerHeight(true) );
}
if ($player.parents('.cover:first').length>0) {
var _ratio = Math.round(($poster.width() / $poster.outerHeight(true)) * 10000);
if (_ratio < 17760) {
$player.height(Math.floor($poster.width() / 1.777));
}
var _w = $player.parent().width();
if ($player.width() > _w) {
$player.find('._globalPlayPause, .subtitleArea').width( _w );
} else {
$player.find('._globalPlayPause, .subtitleArea').width( '100%' );
}
}
if ($player.hasClass('has-chapters')) {
var _inst = modules.Player.getPlayer( $player.attr('id') );
if (_inst && _inst.params) {
var $controls = _inst.params.$controls;
if ($controls) {
var $btn = _inst.params.$controls.find('> .chapters li');
var _l = $btn.length;
var _numVisible = Math.min(_l, 5);
var chapterWidth = _inst.params.$controls.width() / _numVisible * 0.92;
var chaptersWidth = (chapterWidth + 1) * _l;
_inst.params.chapterWidth = chapterWidth;
_inst.params.leftLimit = -(_l - _numVisible) * chapterWidth;
_inst.params.chaptersLeft = Math.max(_inst.params.leftLimit, -_inst.params.currentChapter * chapterWidth);
chapterWidth -= 60;
$btn.width(chapterWidth);
_inst.params.$controls.find('.js-slider-container').css('left', _inst.params.chaptersLeft)
.find('ul').width(chaptersWidth);
}
}
}
if ($player.data('options').type=="MMM") {
if ($player.width() < modules.Player.tooltipsThreshold) {
$player.addClass('tooltips-hidden');
}
}
}
},
onFullscreenEvent: function(e) {
var $el;
if (document.mozFullScreenElement) {
$el = $(document.mozFullScreenElement);
} else if (document.fullscreenElement) {
$el = $(document.fullscreenElement);
} else if (document.webkitFullscreenElement) {
$el = $(document.webkitFullscreenElement);
} else if (document.msFullscreenElement) {
$el = $(document.msFullscreenElement);
}
if ($el) {
modules.Player.fsPlayerEl = $el;
} else {
if (modules.Player.fsPlayerEl.parent().hasClass('popin')) {
common.fsPlayer.close();
}
}
if (modules.Player.fsPlayerEl.hasClass('is-fullscreen')) {
modules.Player.fsPlayerEl.removeClass('is-fullscreen');
modules.Player.fsPlayerEl = null;
} else {
modules.Player.fsPlayerEl.addClass('is-fullscreen');
}
},
enterFullscreen: function( element ) {
modules.Player.fsPlayerEl = $(element);
if (element.requestFullscreen) {
element.requestFullscreen();
} else if (element.mozRequestFullScreen) {
element.mozRequestFullScreen();
} else if (element.webkitRequestFullscreen) {
element.webkitRequestFullscreen();
} else if (element.msRequestFullscreen) {
element.msRequestFullscreen();
}
},
exitFullscreen: function() {
if (modules.Player.fsPlayerEl) {
if (document.exitFullscreen) {
document.exitFullscreen();
} else if (document.mozCancelFullScreen) {
document.mozCancelFullScreen();
} else if (document.webkitExitFullscreen) {
document.webkitExitFullscreen();
}else if (document.msExitFullscreen) {
document.msExitFullscreen();
}
} else {
common.fsPlayer.close();
}
},
onMMMReady: function() {
for (var _name in modules.Player.params) {
if (_name.indexOf('mmm_') != -1) {
if (!modules.Player.instances[_name] || modules.Player.instances[_name] == null) {
var _inst = new mmmController(_name, 'onedior');
_inst.ToggleFullscreen = modules.Player.ToggleFullscreen.bind( _inst );
_inst.addEventListener('CONTROLLER_READY', $.proxy(modules.Player.onMMMInstanceReady, _inst));
window[_name] = _inst;
var _param =  modules.Player.params[ _name ];
var d = new Date();
var _delta = d.getTime() - _param.startTime;
core.tracking.trackEvent( 'MMM_'+ _param.$el.attr("id"), 'Instance Ready '+ _delta );
if (window.console) console.log( "MMM_" + _param.$el.attr("id") + ": Instance Ready " + _delta );
_inst.addEventListener('START', $.proxy(modules.Player.trackStart, _inst));
_inst.addEventListener('COMPLETION_25', $.proxy(modules.Player.track25, _inst));
_inst.addEventListener('COMPLETION_100', $.proxy(modules.Player.track100, _inst));
_inst.addEventListener('SEEK', $.proxy(modules.Player.trackSeek, _inst));
_inst.addEventListener('FULLSCREEN', $.proxy(modules.Player.trackFS, _inst));
_inst.addEventListener('END', $.proxy(modules.Player.onEnd, _inst));
modules.Player.instances[_name] = _inst;
}
}
}
},
onMMMInstanceReady: function() {
if (this.name) {
this.removeEventListener('CONTROLLER_READY');
var _params = modules.Player.params[ this.name ];
this.params = _params;
if (mmm_ctrlmanager.currentDevice.computer && !mmm_ctrlmanager.fFlashVersion && !Modernizr.video) {
this.params.$el.addClass('no-flash')
.append(
'<div>\n\
<span>This site requires the latest version of Adobe Shockwave Player.</span>\n\
<a href="http://get.adobe.com/fr/flashplayer/" target="_blank" border="0">\n\
<div class="get-flash-player"></div>\n\
</a>\n\
</div>' );
}
else {
if (this.params) {
if (modules.Player.autoPlayId == this.params.target) {
modules.Player.autoPlayId = null;
this.params.autostart = true;
}
this.addEventListener('FLASH_PLAYER_READY', $.proxy(modules.Player.onMMMFlashReady, this));
this.addEventListener('HTML5_PLAYER_READY', $.proxy(modules.Player.onMMMHTMLReady, this));
modules.Player.playerMMM.buildPlayer(this, _params, core.mobile);
}
}
}
},
onMMMFlashReady: function() {
var d = new Date();
var _delta = d.getTime() - this.params.startTime;
core.tracking.trackEvent( 'MMM_'+ this.params.$el.attr('id'), 'Player Ready '+ _delta );
if (window.console) console.log( "MMM_" + this.params.$el.attr('id') + ": Player Ready " + _delta );
this.params.ready = true;
var _this = this;
var _wait = core.lte8 ? 1250 : 550;
if (this.params.controls) {
setTimeout( function() {
modules.Player.BuildControls.call(_this);
}, _wait);
} else {
setTimeout( function() {
modules.Player.BuildNoControls.call(_this);
}, _wait);
}
if (this.params.autoPlayVisibility) {
modules.Player.checkPlayerVisibility();
}
},
onMMMHTMLReady: function() {
var d = new Date();
var _delta = d.getTime() - this.params.startTime;
core.tracking.trackEvent( 'MMM_'+ this.params.$el.attr('id'), 'Player Ready '+ _delta );
if (window.console) console.log( "MMM_" + this.params.$el.attr('id') + ": Player Ready " + _delta );
var _this = this;
this.params.ready = true;
if (!this.params.controls) {
this.params.$el.find('video').attr('controls', false);
modules.Player.BuildNoControls.call(this);
} else {
modules.Player.BuildControls.call(this);
}
if (core.tablet) {
this.params.$el.find('._container').attr('mode', 'display').hide();
}
if (core.isTactile) {
this.params.$el.find('video').attr('height', '100%')
.attr('width', '100%');
this.params.onPlayProxy = $.proxy(modules.Player.firstStart, this);
this.params.$el.on('click, touchstart', this.params.onPlayProxy );
if (core.iphone) {
var _poster = '<div><img src="'+ this.params.$el.find('video').attr('poster') +'" alt="" /></div>';
this.params.$el.find('._container').after( _poster );
}
} else {
this.params.$el.hover(  function() {
clearTimeout( _this.hideTimeout );
$(this).find('._container').attr('mode', 'display');
},
function() {
clearTimeout( _this.hideTimeout );
_this.hideTimeout = setTimeout( $.proxy(modules.Player.hideControls, _this), 3000 );
}
);
}
if (this.params.autoPlayVisibility) {
modules.Player.checkPlayerVisibility();
}
setTimeout( function() {
modules.Player.resize( _this.params.$el );
}, 50);
},
onPlay: function() {
if (this.params.firstStart) {
modules.Player.firstStart.call(this);
} else {
modules.Player.hidePoster.call(this);
}
},
onEnd: function() {
if (this.params.loop) {
if (this.params.loop == -1) {
this.replay();
} else if (this.params.loop > 0) {
++this.params.currentLoop;
if (this.params.currentLoop < this.params.loop) {
this.replay();
} else {
this.pause();
modules.Player.showPoster.call(this);
}
}
} else {
modules.Player.showPoster.call(this);
}
},
showPoster: function() {
clearInterval(this.params.updateInterval);
this.rewind();
this.params.$el.find('._playPause').attr('mode', 'replay');
this.params.$el.find('._globalPlayPause').attr('mode', 'replay');
this.params.$el.addClass('video--ended');
if (core.lte8) {
this.params.$el.find('._globalPlayPause').show();
this.params.$el.find('._poster').show();
}
modules.Player.exitFullscreen();
this.fullscreen = false;
},
hidePoster: function() {
this.params.$el.removeClass('video--ended');
this.params.updateInterval = setInterval( $.proxy(modules.Player.Update, this), 35 );
this.params.$controls.find('._playPause').attr('mode', 'play');
this.params.$el.find('._globalPlayPause').attr('mode', 'play');
this.params.$el.find('._poster').removeClass('visible');
if (core.lte8) {
this.params.$el.find('._globalPlayPause').hide();
this.params.$el.find('._poster').hide();
}
},
onThumbnailLoaded: function( event )
{
this.params.$el.find('.thumbs-viewport').append( event.result );
},
removeSubtitlesContainer: function( $el ) {
$el.find('.subtitleArea, .metaArea').remove();
},
onUpdateSubtitle: function( captionContent, region ) {
try {
var $region = this.find('.'+region);
$region.empty();
if ( typeof(captionContent[0]) == 'object' ) {
if ( $(captionContent[0]).text().length > 14 ) {
$region.append( captionContent).addClass('visible');
} else {
$region.removeClass('visible');
}
}
} catch(e) {}
},
onHideSubtitle: function() {
},
hideControls: function() {
this.params.$el.find('._container').attr('mode', 'hide');
},
timeToString: function( ms ) {
var _sec = ms / 1000;
var _min = Math.floor( _sec / 60 );
_sec -= _min * 60;
_sec = Math.floor(_sec);
if (_min<10) {
if (_min>0) _min = "0"+_min;
else _min = "00";
}
if (_sec < 10) {
if (_sec>0) _sec = "0"+_sec;
else _sec = "00";
}
return _min+':'+_sec;
},
getDuration: function() {
if (!this.currentVideo || this.currentVideo.duration == undefined) {
setTimeout( $.proxy(modules.Player.getDuration, this), 3500 );
} else {
this.params.duration = modules.Player.timeToString(this.currentVideo.duration);
this.params.$controls.find('._durationLabel span').text(' / '+this.params.duration);
modules.Player.BuildThumbnails.call(this);
}
},
BuildNoControls: function() {
this.params.controls = null;
this.params.$el.append( modules.Player.templates.controls(this.params) );
this.params.$controls = this.params.$el;
modules.Player.addFullscreen.call(this);
modules.Player.getDuration.call(this);
modules.Player.addEvents.call(this);
},
BuildControls: function() {
var _this = this;
if (this.params.chapters) {
this.params.chaptersNeedSlide = this.params.chapters.length > 5;
var _numVisible = Math.min(this.params.chapters.length, 5);
this.params.chapterWidth = (this.params.$el.width() / _numVisible * 0.92);
this.params.chaptersWidth = (this.params.chapterWidth + 1) * this.params.chapters.length;
this.params.chapterWidth -= 60;
}
this.params.lte8 = core.lte8;
if (core.ie6) {
this.params.diorTV = false;
}
this.params.ipad = core.ipad;
this.params.$el.append(modules.Player.templates.controls(this.params));
this.params.$controls = this.params.$el.find('._container');
if (core.ie6) {
setTimeout( function() {
DD_belatedPNG.fix( '.block-video .png-bg' );
}, 150);
}
modules.Player.BuildChapters.call(this);
modules.Player.BuildShare.call(this);
modules.Player.getDuration.call(this);
this.params.$controls.find('#'+this.params.target+'_playPause').on('click', function(e) {
e.preventDefault();
_this.playPause();
});
this.params.$controls.find('#'+this.params.target+'_progressContainer').on('click', function(e) {
e.preventDefault();
_this.seek( e.offsetX / _this.params.$controls.width() * _this.currentVideo.duration / 1000 );
});
if (Modernizr.video) {
_this.params.$el.find('video').on('click', function() {
_this.playPause();
});
} else {
_this.params.$el.find('object').on('mousedown', function() {
_this.playPause();
});
_this.params.$el.find('._globalPlayPause').on('click', function() {
_this.play();
});
}
var _$toggleSound = this.params.$controls.find('.toggle-sound:first');
_$toggleSound.on('click', function(e) {
e.preventDefault();
e.stopPropagation();
var $this = $(this);
if ($this.attr('mode')=='on') {
modules.Player.volume.call( _this, 0 );
} else {
modules.Player.restoreVolume.call( _this );
}
});
var _$sound = this.params.$controls.find('.sound:first');
_$sound.on('click', function(e) {
e.preventDefault();
e.stopPropagation();
var $this = $(this);
var _volume = Math.min(1, Math.max(0, (e.clientX-_$sound.offset().left) / $this.width()));
modules.Player.volume.call( _this, _volume );
});
this.params.$controls.find('._globalPlayPause').removeAttr('style');
modules.Player.addFullscreen.call( this );
this.params.$controls.find('.js-subtitles-toggle').on('click', function() {
var $this = $(this);
if ($this.attr('mode')=='on') {
$this.attr('mode', 'off');
_this.params.$el.addClass('subtitles-off');
} else {
$this.attr('mode', 'on');
_this.params.$el.removeClass('subtitles-off');
}
});
this.params.$controls.find('.js-tooltip-trigger').on('mouseover', function() {
_this.params.$controls.find('.js-tooltip[data-tooltip="'+$(this).data('tooltip')+'"]').addClass('visible');
}).on('mouseout', function() {
_this.params.$controls.find('.js-tooltip[data-tooltip="'+$(this).data('tooltip')+'"]').removeClass('visible');
});
modules.Player.addEvents.call(this);
},
addEvents: function()
{
var _this = this;
this.addEventListener('START', function() {
var d = new Date();
var _delta = d.getTime() - _this.params.startTime;
core.tracking.trackEvent( 'MMM_'+ _this.params.$el.attr('id'), 'Play '+ _delta );
if (window.console) console.log( "MMM_" + _this.params.$el.attr('id') + ": Play " + _delta );
_this.params.firstStart = false;
_this.params.$el.removeClass('controls-hidden video--ended');
setTimeout( function() { _this.params.$controls.attr('mode', 'display'); }, 25 );
modules.Player.onPlay.call(_this);
});
this.addEventListener('PLAY', function() {
modules.Player.onPlay.call(_this);
});
this.addEventListener('PAUSE', function() {
clearInterval(_this.params.updateInterval);
_this.params.$controls.find('._playPause').attr('mode', 'pause');
_this.params.$el.find('._globalPlayPause').attr('mode', 'pause');
if (core.lte8) _this.params.$el.find('._globalPlayPause').show();
if (core.ie6) _this.params.$controls.find('._playPause').hide().show();
});
this.params.$el.removeClass('loading');
this.params.$el.trigger('player:ready', this);
if (this.params.muted) {
modules.Player.volume.call( this, 0, true );
} else {
modules.Player.volume.call( this );
}
},
addFullscreen: function() {
this.fullscreen = false;
if (Modernizr.fullscreen) {
this.params.$el.find('.icon-player-fullscreen, .icon-close').off('click').on('click', this.ToggleFullscreen.bind(this) );
} else {
if (!this.params.$el.parent().hasClass('popin-video-fullscreen')) {
this.params.fullscreenData = {
player: this,
resource_id: this.params.resource_id,
autoPlay: true,
subtitles: this.params.subtitles,
share: this.params.share
};
this.params.$el.find('.icon-player-fullscreen').addClass('js-fsplayer')
.data('options', this.params.fullscreenData);
modules.Player.playerFS.init();
}
}
},
BuildThumbnails: function() {
if (!core.isTactile) {
var _this = this;
var _account = this.currentAccount;
var _duration = 0;
if (this.currentVideo) {
try {
_duration = this.currentVideo.duration;
} catch (e) {
throw new Error(e);
}
} else {
}
var _numThumbs = _duration / 2000 / 25;
this.preloader = new createjs.LoadQueue(false);
this.preloader.on("fileload", modules.Player.onThumbnailLoaded, this);
for (var i = 0; i < _numThumbs; ++i) {
var _frameNum = "" + i;
while (_frameNum.length < 4) {
_frameNum = "0" + _frameNum;
}
var _src;
if (window.location.protocol == 'http:') {
_src = window.location.protocol + "//wwcache.massmotionmedia.com/" + _account + "/projects/" + this._idVideo + "/datas/storyboard_" + _frameNum + ".jpg";
} else {
_src = window.location.protocol + "//secure.massmotionmedia.com/" + _account + "/projects/" + this._idVideo + "/datas/storyboard_" + _frameNum + ".jpg";
}
this.preloader.loadFile(_src);
}
var $thumbnails = this.params.$el.find('.thumbnails');
var displayThumb = function (e) {
var _frame = Math.round(e.offsetX / _this.params.$controls.width() * _duration / 2000);
var _jpg = Math.floor(_frame / 25);
_frame -= (_jpg * 25);
var _offset = Math.min(_this.params.$controls.width() - 164, Math.max(0, e.offsetX - 82));
$thumbnails.addClass('visible').css('left', _offset)
.find('img:eq(' + _jpg + ')').addClass('visible').css('left', (-_frame * 160) + "px");
};
this.params.$controls.find('._progressContainer')
.on("mouseover", displayThumb)
.on("mouseout", function () {
$thumbnails.removeClass('visible');
}).on("mousemove", displayThumb);
}
},
BuildChapters: function() {
if (this.params.chapters) {
var _this = this;
this.params.chapterWidth += 60;
this.params.currentChapter = 0;
this.params.chaptersLeft = 0;
var _hoverCallback = modules.Player.getFunctionByName(this.params.chapterCallback),
_l = this.params.chapters.length,
_numVisible = Math.min(_l, 5),
_$cursor = this.params.$el.find('.js-chapter-cursor').css('left', (_this.params.chapterWidth * 0.5));
this.params.$el.find('.chapters li').each( function(i) {
$(this).on('click', function(e) {
e.preventDefault();
_this.params.currentChapter = i;
_this.seek( parseInt(_this.params.chapters[i].time) );
})
.on('mouseover', function(e) {
_$cursor.css('left', (_this.params.chapterWidth * i) + (_this.params.chapterWidth * 0.5) );
_hoverCallback(i);
})
.on('mouseout', function(e) {
_$cursor.css('left', (_this.params.chapterWidth * _this.params.currentChapter) + (_this.params.chapterWidth * 0.5) );
_hoverCallback();
});
if (i==0) $(this).addClass('active');
else if (i==(_l-1)) $(this).addClass('last');
});
_hoverCallback(0);
this.params.leftLimit = -(_l - _numVisible) * this.params.chapterWidth;
var _chaptersList = this.params.$el.find('.chapters .js-slider-container'),
_slideTo = function( dir ) {
_this.params.chaptersLeft += (_this.params.chapterWidth * dir);
if (_this.params.chaptersLeft > 0) _this.params.chaptersLeft = 0;
else if (_this.params.chaptersLeft<_this.params.leftLimit) _this.params.chaptersLeft = _this.params.leftLimit;
_chaptersList.css('left', _this.params.chaptersLeft);
var _offsetNum = -_this.params.chaptersLeft / _this.params.chapterWidth;
if (_offsetNum<=0) {
_this.params.$el.find('.chapters-btn.previous').hide();
} else {
_this.params.$el.find('.chapters-btn.previous').show();
}
if (_offsetNum+5 >= _l) {
_this.params.$el.find('.chapters-btn.next').hide();
} else {
_this.params.$el.find('.chapters-btn.next').show();
}
};
this.params.$el.find('.chapters-btn.previous').on('click', function() {
_slideTo( 1 );
}).hide();
this.params.$el.find('.chapters-btn.next').on('click', function() {
_slideTo( -1 );
});
this.checkCurrentChapter = function( id ) {
var _offsetNum = -_this.params.chaptersLeft / _this.params.chapterWidth;
_this.params.currentChapter = id;
if (id > (_offsetNum+4)) {
_slideTo( (_offsetNum+4)-id );
} else if (id < _offsetNum) {
_slideTo( _offsetNum-id );
}
_$cursor.addClass('active').css('left', (_this.params.chapterWidth * id) + (_this.params.chapterWidth * 0.5) );
};
this.params.$el.find('video').on("timeupdate", function( e ) {
modules.Player.getFunctionByName(_this.params.updateCallback)( e, _this );
});
}
},
BuildShare: function() {
if (this.params.share) {
var _this = this;
var _closeWidth = this.params.$controls.find('li.share-open').outerWidth(true);
var _openWidth = this.params.$controls.find('.share-container').width() - _closeWidth;
this.params.$controls.find('.icon-player-share').on('click', function(e) {
e.preventDefault();
_this.params.$controls.find('.share-container').width(_openWidth).addClass('open');
});
this.params.$controls.find('.icon-player-close-share').on('click', function(e) {
e.preventDefault();
_this.params.$controls.find('.share-container').width(_closeWidth).removeClass('open');
});
this.params.$controls.find('.share-container').width(_closeWidth);
if (window.clipboardData) {
this.params.$el.find('.copy').on('click', function() {
window.clipboardData.setData( 'Text', _this.params.$el.find('.insert textarea').val() );
});
} else {
ZeroClipboard.config( { swfPath: core.SwfConfig.Global.src + "/ZeroClipboard.swf" } );
var $btn = $(document.getElementById("copy-button"));
var _client = new ZeroClipboard( $btn );
_client.on( "ready", function( readyEvent ) {
_client.on( 'copy', function(event) {
event.clipboardData.setData('text/plain', _this.params.$el.find('.insert textarea').val());
} );
_client.on( "aftercopy", function( event ) {
$btn.html( $btn.data('clipboard-copied') );
});
});
}
this.params.$el.find('.icon-player-embed').on('click', function(e) {
e.preventDefault();
var _layer = _this.params.$el.find('#'+_this.params.target+'_embedLayer');
_layer.toggle();
if (!window.clipboardData) {
if (!_layer.is(':visible')) {
$btn.html($btn.data('clipboard-text'));
}
}
});
this.params.$el.find('.share-container .icon-player-layer-close').on('click', function(e) {
e.preventDefault();
_this.params.$el.find('#'+_this.params.target+'_embedLayer').hide();
if (!window.clipboardData) $btn.html( $btn.data('clipboard-text') );
});
}
},
Update: function() {
var _current = this.getCurrentTime();
if (this.params.$controls) {
this.params.$controls.find('._timeLabel > span').text(modules.Player.timeToString(_current));
this.params.$controls.find('._progressBar').width(_current / this.currentVideo.duration * this.params.$controls.width());
}
if (this.params.chapters && core.lte8) {
modules.Player.getFunctionByName(this.params.updateCallback)( _current/1000, this );
}
},
ToggleFullscreen: function(e) {
e.preventDefault();
e.stopPropagation();
var element = this.params.$el[0];
if (this.fullscreen) {
this.fullscreen = false;
modules.Player.exitFullscreen();
} else {
this.fullscreen = true;
modules.Player.enterFullscreen( element );
}
},
volume: function( vol, dontRecord ) {
if (vol != undefined) {
if (!dontRecord) $.cookie('player-volume-last', vol, {expires: 30});
if (vol != 0) $.cookie('player-volume', vol, {expires: 30});
} else {
var vol = $.cookie('player-volume-last');
if (vol == undefined) vol = 0.75;
}
modules.Player.updateVolumeUI.call(this, vol);
},
restoreVolume: function() {
var vol = $.cookie( 'player-volume' );
if (vol == undefined || vol == 0) vol = 0.75;
$.cookie( 'player-volume-last', vol, {expires: 7} );
modules.Player.updateVolumeUI.call(this, vol);
},
updateVolumeUI: function(vol) {
var _$btn = this.params.$controls.find('.toggle-sound:first');
if (vol == 0) {
_$btn.attr('mode', 'off');
} else {
_$btn.attr('mode', 'on');
}
var _bars = Math.ceil( vol * 8 );
var _$bars = this.params.$controls.find('.sound:first');
_$bars.find('li').removeClass('active');
_$bars.find('li:lt('+_bars+')').addClass('active');
this.volume(vol);
},
getPlayer: function( id ) {
return modules.Player.instances[ 'mmm_' + modules.Player.playerMMM.account + '_' + id ];
},
getFlashObject: function( id ) {
if (navigator.appName.indexOf("Microsoft") != -1) {
return window[id+'fl'];
}
else {
return document[id+'fl'];
}
},
reinitPlayer: function( $modVideo ) {
if ($modVideo.length > 0) {
var _player = modules.Player.getPlayer( $modVideo.attr('id') );
if ( _player.getMediaPlayer()["id"].indexOf('fl')!=-1 ) {
_player.params.ready = false;
}
modules.Player.resize( _player.params.$el );
}
},
killPlayer: function( id ) {
var _name = 'mmm_' + modules.Player.playerMMM.account + '_' + id;
if (modules.Player.instances[_name]) modules.Player.instances[_name].close();
if (core.lte8) {
window[_name] = null;
modules.Player.params[_name] = null;
modules.Player.instances[_name] = null;
} else {
delete window[_name];
delete modules.Player.params[_name];
delete modules.Player.instances[_name];
}
},
trackStart: function() {
core.tracking.trackEvent( 'MMM_'+this.params.$el.attr('id'), 'Play' );
this.params.$el.find('._container').attr('mode', 'display');
},
track25: function() {
core.tracking.trackEvent( 'MMM_'+this.params.$el.attr('id'), 'Completion 25' );
},
track100: function() {
core.tracking.trackEvent( 'MMM_'+this.params.$el.attr('id'), 'Completion 100' );
},
trackSeek: function() {
core.tracking.trackEvent( 'MMM_'+this.params.$el.attr('id'), 'Timeline' );
},
trackFS: function() {
core.tracking.trackEvent( 'MMM_'+this.params.$el.attr('id'), 'Fullscreen' );
},
addVideoJSPlayer: function( $el, options ) {
var _id = $el.attr('id');
if (!_id) {
_id = $el.find('video').attr('id');
}
$el.addClass('vjs-dior-skin');
var defaultSetup = {
resizable: true,
nativeControlsForTouch: false,
autoplay: true,
loop: true,
background: "#ffffff"
};
var _setup = $.extend({}, defaultSetup, options);
$el.find('video').data('setup', _setup);
var _video = videojs(_id, _setup);
if (core.ie6) {
setTimeout(function () {
modules.Player.initVideoJS($el, _video);
}, 1500);
} else {
modules.Player.initVideoJS($el, _video);
}
},
initVideoJS: function( $el, _video ) {
var _parent = $el.parent(),
_legend = null;
if (_parent && _parent.hasClass('cover')) {
_legend = _parent.find('.coverContent');
_video.ready( function() {
_legend.fadeOut();
this.play();
$(window).off('resize');
});
$(window).on('resize', function() {
var cover       = _parent.find('img:first'),
position    = _parent.find('.decor').attr('data-position'),
css         = null;
switch(position) {
case 'right':
css =  { right: 0 };
break;
case 'center':
var extraPart = ( $(window).width() - cover.width() ) * .5,
extra 	  = ( $(window).width() - cover.width() );
css       = { left: extraPart+'px' };
break;
default:
css =  { left: 0 };
break;
}
$el.find('.vjs-poster').css(css);
}).trigger('resize');
} else {
var _$player = $el.find('.vjs-tech');
if (!_video) {
return;
}
_video.on("loadedmetadata", function(e) {
if (e.target.tagName=="VIDEO") {
$el.trigger('loadedmetadata', {width: e.target.videoWidth, height: e.target.videoHeight} );
} else {
$el.trigger('loadedmetadata', null );
}
});
_video.ready( function() {
$(this.a).append( '<div class="vjs-close icon close"></div>' )
.find('.vjs-close').on('click', function() {
_video.cancelFullScreen();
});
var _firstStart = true;
_$player.find('video').css('pointer-events', 'initial');
var _controlsTimer;
$(this.a).on('mousemove', function() {
clearTimeout(_controlsTimer);
_$player.find('.vjs-control-bar').fadeIn();
_controlsTimer = setTimeout( function() {
_$player.find('.vjs-control-bar').fadeOut();
}, 3000);
});
this.on('play', function() {
_$player.parent().removeClass('vjs-ended');
});
$(this.a).append( '<div class="vjs-replay-button" aria-live="polite" tabindex="0" aria-label="play video">\n\
<span></span>\n\
</div>');
this.on('ended', function() {
if ($el.data('loop')==true) {
_video.play();
} else {
$el.find('.vjs-replay-button')
.off('click')
.on('click', function() {
_video.play();
});
_$player.trigger('load');
_$player.parent().removeClass('vjs-paused').addClass('vjs-ended');
}
});
if (_$player.hasClass('no-controls')) {
$el.on('mousedown touchend', function(e) {
e.preventDefault();
if ($el.hasClass('vjs-ended') || $el.hasClass('vjs-paused')) {
_video.play();
} else {
_video.pause();
}
});
}
if (this.options_.autoplay==true) {
_$player.find('.vjs-poster').remove();
var _$video = _$player.find('video');
if (_$video.length>0) {
$el.trigger('loadedmetadata', {width: _$video[0].videoWidth, height: _$video[0].videoHeight} );
}
if (core.lte8) {
setTimeout( function() {
$el.trigger('loadedmetadata', null);
}, 150 );
}
}
if (core.ie6 && !this.options_.autoplay) {
$el.find('.vjs-poster').show();
DD_belatedPNG.fix('.vjs-replay-button span');
DD_belatedPNG.fix('.vjs-big-play-button span');
}
$el.trigger('player:ready', this);
});
}
},
firstStart: function(e) {
if (this.params.size === 'cover') {
if (this.params.poster) {
this.params.poster.removeAttr('style')
.off('click, touchstart');
}
this.params.$el.find('div:first').show();
}
if (core.isTactile) {
if (e) {
e.preventDefault();
e.stopPropagation();
}
if (core.tablet) this.params.$el.find('._container').show();
this.params.$el/*.removeClass('tablet')*/
.off('click, touchstart', this.params.firstStartProxy)
.find('._container').attr('mode', 'display');
if (!core.android) {
var _this = this;
setTimeout( function() {
_this.params.$el.find('> div:first').on('click', function(e) {
e.preventDefault();
e.stopPropagation();
if (!_this.isPlaying()) {
_this.play();
} else {
_this.pause();
}
});
}, 0);
} else {
this.params.$el.find('video').addClass('android');
}
this.play();
} else {
this.params.$el.find('._container').attr('mode', 'hide');
this.params.$el.find('._poster').removeClass('visible');
}
},
checkPlayerVisibility: function() {
if ($('#fullScreenPlayer').is(':visible')) {
return;
}
var _wTop = modules.Player.$elScroll.scrollTop(),
_wBottom = _wTop + $(window).height(),
_top = 0,
_$player,
_player;
$('.js-video-autoplay').each( function() {
_$player = $(this);
_player = modules.Player.getPlayer( _$player.attr('id') );
if (_player && _player.params && _player.params.ready) {
_top = _$player.offset().top;
if (_wTop <= _top && _wBottom >= (_top + (_$player.height() * .8)) && _$player.is(':visible')) {
if (!_player.isPlaying() && _player.params.autoPaused) {
_player.play();
_player.params.autoPaused = false;
if (core.lte9) {
modules.Player.onPlay.call( _player );
}
}
}
else {
try {
_player.params.autoPaused = true;
_player.pause();
} catch(e) {
if (window.console) {
window.console.log("-> MMM Controller Error: Flash player not ready");
}
throw new Error(e);
}
}
}
});
},
pauseAll: function() {
for (var _inst in modules.Player.instances) {
var _player = modules.Player.instances[_inst];
if (_player) {
if (_player && _player.params.ready && _player.isPlaying()) {
_player.pause();
}
}
}
},
checkTargetTop: function() {
var _top = modules.Player.targetPlayer.offset().top;
if (_top != modules.Player.targetTop)
{
modules.Player.matchTimes = 0;
modules.Player.targetTop = _top;
modules.Player.timer = setTimeout(modules.Player.checkTargetTop, modules.Player.matchDelay);
}
else if (modules.Player.matchTimes < modules.Player.matchTimesNum)
{
++modules.Player.matchTimes;
modules.Player.timer = setTimeout(modules.Player.checkTargetTop, modules.Player.matchDelay);
} else {
$('html, body').scrollTop( modules.Player.targetTop-56 );
}
},
getFunctionByName: function (functionName, context) {
var namespaces = functionName.split("."),
func = namespaces.pop();
if (!context) context = window;
for(var i = 0; i < namespaces.length; i++) {
context = context[namespaces[i]];
}
return context[func];
}
};
module.exports = modules.Player;
},{"../templates/player.js":30,"./playerFS.js":13,"./playerFreecaster.js":14,"./playerMMM.js":15}],13:[function(require,module,exports){
var playerMMM = require('./playerMMM.js');
var PopinFullscreen = require('./popins/PopinFullscreen.js');
var _instance = null;
var _this;
FSPlayer.instance = null;
FSPlayer.prototype.$el = null;
FSPlayer.prototype.params = {};
FSPlayer.prototype.popin = null;
FSPlayer.prototype.mmmName = '';
FSPlayer.prototype.firstStart = true;
FSPlayer.prototype.isReady = false;
function FSPlayer() {
_this = this;
if ( FSPlayer.caller !== FSPlayer.getInstance ) {
throw new Error("This object cannot be instanciated");
}
this.$el = $(document.getElementById('fullScreenPlayer'));
this.mmmName = 'mmm_onedior_' + this.$el.attr('id');
this.params = {
$popin: this.$el,
onOpened: $.proxy(this.onOpened, this),
onClose: $.proxy(this.close, this),
onClosed: $.proxy(this.onClosed, this),
onResize: $.proxy(this.resize, this),
noScroll: true
};
this.popin = new PopinFullscreen( this.params, false );
}
FSPlayer.getInstance = function() {
if (_instance === null) {
_instance = new FSPlayer();
}
return _instance;
};
FSPlayer.prototype.loadVideo = function( $link ) {
var _w = core.isTactile ? $(window).width()+'px' : '100%',
_h = core.isTactile ? $(window).height()+'px' : '100%',
_video = this.$el.find('.js-block-video');
var _options = {
type: 'MMM',
$el: _video,
target: _video.attr('id'),
sizingMethod: "crop",
width: _w,
height: _h,
autoPlay: true,
instanceName: this.mmmName,
resizable: false,
muted: false
};
var _linkOptions = $link.data('options');
if (_linkOptions.hasOwnProperty('player') && _linkOptions.player != undefined) {
_linkOptions.isPlaying = _linkOptions.player.isPlaying();
_linkOptions.player.pause();
_linkOptions.autoPlay = true;
var _currentTime = _linkOptions.player.getCurrentTime();
if (_currentTime < _linkOptions.player.currentVideo.duration) {
_options.start = _currentTime / 1000;
} else {
_options.start = 0;
}
} else {
_options.start = 0;
_linkOptions.player = null;
}
_linkOptions.resizable = false;
this.params = {};
$.extend( this.params,  _options, _linkOptions );
_video.data('options', this.params);
this.popin.open();
_video.off('player:ready').on('player:ready', $.proxy(this.onPlayerReady, this) );
var _this = this;
if (core.isTactile) {
core.Orientation.add( function(event) {
_this.resize.apply(_this);
} );
}
common.player.pauseAll();
setTimeout( function() {
if (!Modernizr.fullscreen) {
_video.on('player:ready', function() {
setTimeout(function () {
_this.$el.find('.icon-player-fullscreen').on('click', function () {
_this.popin.close();
});
}, 250);
});
}
common.player.init( _video );
}, 50);
};
FSPlayer.prototype.onPlayerReady = function(e, player) {
if (this.params.hasOwnProperty('start') && this.params.start>0) {
var _timeout = core.ie6 ? 2000 : (this._isHTML5 ? 150 : 1500);
var _this = this;
var _video = _this.$el.find('.js-block-video');
setTimeout( function() {
modules.Player.getPlayer(_video.attr('id')).seek(_this.params.start);
setTimeout( function() {
var _player = modules.Player.getPlayer(_video.attr('id'));
if (_player) {
_player.play();
}
_video.find('._globalPlayPause').hide();
}, 250);
}, _timeout);
}
};
FSPlayer.prototype.setTop = function( top ) {
_this.$el.css('top', top);
};
FSPlayer.prototype.resize = function() {
var height = !core.ios7 ? $(window).height() : window.innerHeight;
this.$el.height( height).find('> div:first').height('100%').find('video').height('100%');
};
FSPlayer.prototype.close = function() {
common.player.getPlayer( this.$el.find('.js-block-video').attr('id') ).pause();
};
FSPlayer.prototype.onClosed = function() {
common.player.killPlayer( this.$el.find('.js-block-video').attr('id') );
};
FSPlayer.close = function() {
if (_instance) {
_instance.popin.close();
}
};
FSPlayer.resize = function() {
if (_instance) _instance.resize();
};
FSPlayer.init = function( noListener ) {
if (!noListener) {
$('.js-fsplayer').off('click').on('click', function (e) {
e.preventDefault();
FSPlayer.getInstance().loadVideo( $(this) );
});
}
};
module.exports = FSPlayer;
},{"./playerMMM.js":15,"./popins/PopinFullscreen.js":17}],14:[function(require,module,exports){
modules.PlayerFC = {
defaultId: '1074627',
account: 'http://player.freecaster.com/embed/',
sep: '&amp;',
instances: {},
params: {},
buildPlayer: function( _params, mobile ) {
if (_params!==undefined) {
if (_params.controlsType && _params.controlsType == "tiny") {
_params.$el.append( '<div id="'+ _params.$el.attr('id') +'__container" class="fcplayer-light"></div>' );
} else {
_params.$el.append( '<div id="'+ _params.$el.attr('id') +'__container"></div>' );
}
_query = modules.PlayerFC.account + _params.resource_id + ".js?id=" + _params.$el.attr('id') + '_';
if (_params.width)      _query += modules.PlayerFC.sep + "width="+_params.width;
if (_params.height)     _query += modules.PlayerFC.sep + "height="+_params.height;
if (_params.autoPlay)   _query += modules.PlayerFC.sep + "autoplay="+_params.autoPlay;
if (_params.loop)       _query += modules.PlayerFC.sep + "loop="+_params.loop;
if (_params.controls)   _query += modules.PlayerFC.sep + "controls="+_params.controls;
if (_params.poster)     _query += modules.PlayerFC.sep + "image="+_params.poster;
if (mobile) _query += modules.PlayerFC.sep + "mobile=true";
_query +=  modules.PlayerFC.sep + "stretching=fill";
var d = new Date();
_params.startTime = d.getTime();
modules.PlayerFC.params[ _params.$el.attr('id')+"_" ] = _params;
core.tracking.trackEvent( 'FC_'+_params.$el.attr('id'), 'Creation' );
if (window.console) console.log( "FC_" + _params.$el.attr('id') + ": Creation" );
_params.$el.append( '<script type="text/javascript" src="'+_query+'"></script>' );
}
},
playerReady: function( event ) {
var player = fcplayer(event.id);
var _param =  modules.PlayerFC.params[ player.id ];
var d = new Date();
var _delta = d.getTime() - _param.startTime;
core.tracking.trackEvent( 'FC_'+ player.id, 'Instance Ready '+ _delta );
if (window.console) console.log( "FC_" + player.id + ": Instance Ready " + _delta );
player.on("firstFrame", function() {
var d = new Date();
var _delta = d.getTime() - _param.startTime;
core.tracking.trackEvent( 'FC_'+ player.id, 'Play '+ _delta );
if (window.console) console.log( "FC_" + player.id + ": Play " + _delta );
});
}
};
module.exports = modules.PlayerFC;
var _fcpr = _fcpr || [];
_fcpr.push( modules.PlayerFC.playerReady );
window._fcpr = _fcpr;
},{}],15:[function(require,module,exports){
modules.PlayerMMM = {
account: 'onedior',
callback: null,
loaded: false,
loadScript: function( _callback, mobile ) {
if (!modules.PlayerMMM.loaded) {
window['mmm_ready_mmm_'+modules.PlayerMMM.account] = _callback;
var _targetElt 	= document.getElementsByTagName('head')[0],
_newScript	= document.createElement('script');
_newScript.type 	= 'text/javascript';
_newScript.src 	= 'https://secure.massmotionmedia.com/'+ modules.PlayerMMM.account +'/player/js/controller_vs.js';
_targetElt.appendChild(_newScript);
} else {
_callback();
}
},
buildPlayer: function( _instance, _params, mobile ) {
modules.PlayerMMM.loaded = true;
if (_params!==undefined) {
_params.flashvars = {
playerType: _params.sizingMethod,
displayControls: false,
controlsType: _params.controlsType,
vAlign: _params.vAlign,
autoplay: _params.autoPlay,
autorewind: _params.autorewind,
poster: _params.poster,
posterAlign: _params.posterAlign,
locaVolume: _params.locaVolume,
locaFullscreen: _params.locaFullscreen,
locaNormalScreen: _params.locaNormalScreen,
subtitle: _params.subtitles,
diorTV: _params.diorTV,
debugJS: _params.debugJS
};
if (_params.chapters) {
_params.flashvars.chapters = _params.chapters;
_params.flashvars.updateCallback = _params.updateCallback;
_params.flashvars.chapterCallback = _params.chapterCallback;
_params.flashvars.seekCallback = _params.seekCallback;
}
_params.autostart = _params.autoPlay;
_params.autorewind = _params.autoRewind;
_params.flash_width = _params.width;
_params.flash_height = _params.height;
_params.flash_player = core.SwfConfig.Global.src + '/player_dior.swf';
_params.flash_skin = '';
_params.flash_id = _params.target;
_params.flash_name = _params.target;
_params.flash_bgcolor = _params.background;
_params.flash_wmode = core.lte8 ? "transparent" : "opaque";
_params.flash_scale = "default";
_params.flashvars = _params.flashvars;
_params.html5_controls = false;
_params.html5_width = _params.width;
_params.html5_height = _params.height;
_params.html5_skin = '';
_params.html5_displayTimeCursor = false;
_params.html5_fadeControlDelay = _params.fadeControlDelay;
_instance.buildPlayer_v2( _params );
}
}
};
module.exports = modules.PlayerMMM;
},{}],16:[function(require,module,exports){
function Popin(options, override) {
this.open = this.defaultOpen;
this.close = this.defaultClose;
if (!override)
this.init(options);
}
Popin.prototype = {
init: function(options) {
if (!core.signals) core.signals = {};
if (!core.signals.global) core.signals.global = new signals.Signal();
var _default = {
$popin:      $(".js-popin"),
$open: undefined,
$overlay: $(".popin-overlay"),
$popinWrapper: core && core.v6 ? $(".popin-wrapper") : $(".popin-wrapper-v6") ,
closeButton: true,
onOpen: function() {},
onOpened: function() {},
onClose: function() {},
onClosed: function() {},
onResize: function() {},
onInit: function() {},
signals: core.signals.global,
defaultOffsetTop: 40
};
if (options) $.extend(_default, options);
_default.$close = _default.$popin.find(".js-popin-close");
$.extend(this, _default);
this.buildElements();
this.addEventListeners();
this.onInit();
if (_default.$popin.hasClass('js-auto-open')) this.open();
},
buildElements: function() {
if (!this.$overlay.length) this.$popinWrapper.append("<div class='popin-overlay'></div>");
if (this.closeButton && !this.$close.length ) {
this.$close = $("<button class='close js-popin-close png-bg'></button>");
this.$popin.append(this.$close);
}
},
addEventListeners: function() {
var _this = this;
if (this.$open) {
this.updateOpenTriggers( this.$open );
}
if (this.$close) {
this.$close.off("click touchstart");
if (!this.tablet) this.$close.on("click", function(e) { $.proxy(_this.close, _this, e)(); });
else this.$close.on( "touchstart", function(e) { $.proxy(_this.close, _this, e)(); });
}
this.$overlay.off('click').on("click", $.proxy(_this.close, _this));
$(window).on("resize", $.proxy(this.resize, _this) );
},
updateOpenTriggers: function( $elements) {
if (this.$open) {
this.$open.off("click touchstart");
}
this.$open = $elements;
var _this = this;
this.$open.each(function() {
if (!this.tablet) $(this).on("click", function(e) { $.proxy(_this.open, _this, e)(); });
else $(this).on( "touchstart", function(e) { $.proxy(_this.open, _this, e)(); });
});
},
defaultOpen: function(e) {
if (!this.opened || !this.$popin.is(':visible')) {
if (!core.popinsOpened) {
core.popinsOpened = 1;
this.disableScroll();
} else {
var _popinIndex = parseInt(this.$popin.css("z-index"))+core.popinsOpened;
this.$overlay.css("z-index", _popinIndex);
this.$popin.css("z-index", _popinIndex+1 );
++core.popinsOpened;
}
this.$popinWrapper.addClass("visible");
this.signals.dispatch("Popin::open");
this.onOpen(e);
this.opened = true;
this.placeInWindow();
var _this = this;
if (!core.ie6) {
this.$overlay.fadeIn();
this.$popin.fadeIn(function() {
_this.signals.dispatch("Popin::opened");
_this.onOpened(e);
});
} else {
this.$overlay.add(this.$popin).show();
this.signals.dispatch("Popin::opened");
this.onOpened(e);
}
if (e) {
var _href = e.currentTarget.getAttribute('href');
if (_href && _href.length>1 && _href.charAt(0)=='#') {
var $anchor = this.$popin.find( _href.replace('anchor-','') );
if ($anchor.length) {
_this.$popinWrapper.scrollTop( $anchor.position().top );
}
}
}
}
},
defaultClose: function(e) {
if (this.opened || this.$popin.is(':visible')) {
--core.popinsOpened;
var _this = this;
this.signals.dispatch("Popin::close");
this.onClose(e);
this.opened = false;
if (!core.popinsOpened) this.$overlay.fadeOut();
this.$popin.fadeOut(function() { _this.$popin.removeAttr("style"); });
if (!core.ie6) {
if (!core.popinsOpened ) this.$overlay.fadeOut();
this.$popin.fadeOut( $.proxy(this.internalOnClosed, this) );
} else {
if (!core.popinsOpened ) this.$overlay.hide();
this.$popin.hide();
this.internalOnClosed();
}
}
},
internalOnClosed: function(e) {
this.$popin.removeAttr("style");
if (!core.popinsOpened) {
this.$popinWrapper.removeClass("visible");
this.$overlay.removeAttr("style");
this.enableScroll();
} else {
this.$overlay.css("z-index", this.$overlay.css("z-index") - 1 );
}
this.signals.dispatch("Popin::closed");
this.onClosed(e);
},
toggle: function() {
if (this.opened) this.close();
else this.open();
},
placeInWindow: function() {
this.width = this.$popin.outerWidth(true);
this.height = this.$popin.outerHeight(true);
var _windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
var _windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
this.offsetLeft = (_windowWidth- this.width) / 2;
if (this.height < _windowHeight) {
this.offsetTop = ( _windowHeight - this.height) / 2;
} else {
this.offsetTop = this.defaultOffsetTop;
this.$overlay.height( this.height + this.offsetTop*2 );
}
this.$popin.css({
top: this.offsetTop,
left: this.offsetLeft
});
},
disableScroll: function() {
this.scrollLevel = document.body.scrollTop || document.documentElement.scrollTop;
document.body.style.height = window.innerHeight+"px";
document.body.style.overflow = "hidden";
document.documentElement.style.overflowY = 'scroll';
setTimeout(function() {
document.documentElement.scrollTop = 0;
}, 100);
document.body.scrollTop = this.scrollLevel;
},
enableScroll: function() {
document.body.style.height= "auto";
document.body.style.overflow= "auto";
document.documentElement.style.overflowY = 'auto';
document.body.scrollTop = 0;
document.body.style.position = 'static';
window.scrollTo(0,this.scrollLevel);
},
resize: function() {
this.placeInWindow();
this.onResize();
this.signals.dispatch("Popin::resize");
}
};
module.exports = modules.Popin = Popin;
},{}],17:[function(require,module,exports){
var Popin = require("./Popin");
PopinFullscreen.prototype = new Popin({}, true);
function PopinFullscreen (options, override) {
if (!override)
this.init(options);
if (options.noScroll) {
this.$popinWrapper.addClass('no-scroll');
}
}
PopinFullscreen.prototype.open = function(e) {
this.defaultOffsetTop = 0;
this.oldStyle = this.$popinWrapper.attr("style");
this.$popinWrapper.css("overflow", "auto");
this.defaultOpen(e);
if (!this.$popin.hasClass("fullscreen")) this.$popin.addClass("fullscreen").css({left:0, top: 0});
$('body, html').animate({scrollTop : 0}, 0);
};
PopinFullscreen.prototype.close= function() {
this.defaultClose();
this.$popinWrapper.attr("style", this.oldStyle);
};
PopinFullscreen.prototype.placeInWindow = function() {
var _windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
var _windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
this.width = _windowWidth;
this.height = _windowHeight;
this.$overlay.height( _windowHeight );
this.$popin.css({
top: 0,
left: 0
});
};
module.exports = modules.PopinFullscreen = PopinFullscreen;
},{"./Popin":16}],18:[function(require,module,exports){
var Popin 			= require("./Popin");
var foreachHelp 	= require("../../helpers/foreach.js");
var ifCondHelp 		= require("../../helpers/ifCond.js");
var truncateHelp 	= require("../../helpers/truncate.js");
var stringifyHelp 	= require("../../helpers/stringify.js");
var templates 		= require("../../templates/quickbuy.js")(Handlebars);
var QuickBuy    	= require("../quickBuy.js");
var quickbuy     	= null;
var equalHeight     = require("../equalHeight.js");
var verticalCenter  = require("../verticalCenter.js");
PopinQuickbuy.prototype = new Popin({}, true);
function PopinQuickbuy (options) {
this.init(options);
this.getQuickBuyData();
}
PopinQuickbuy.prototype.getQuickBuyData = function() {
var productCode = this.$triggerButton.attr('data-productqb');
var categoryId 	= this.$triggerButton.attr('data-categoryqb');
var productSkus = this.$triggerButton.attr('data-productskusqb');
switch (productCode) {
case '1':
core.AjaxConfig.QuickBuy.url = '../../assets/json/quick_buy_fragrance.json';
break;
case '2':
core.AjaxConfig.QuickBuy.url = '../../assets/json/quick_buy_makeup.json';
break;
}
var scope = this;
$.ajax({
url     : core.AjaxConfig.QuickBuy.url,
type    : core.AjaxConfig.QuickBuy.method,
data    : 'productCode=' + productCode + '&categoryGuid=' + categoryId + "&productSkus=" + productSkus,
success : function(data) {
var _l = data.product.skus.length;
for (var i=0; i<_l; ++i) {
var sku = data.product.skus[i];
if (sku.selectedSku) {
data.product.selected = sku;
break;
}
}
if (!data.product.selected) data.product.selected = data.product.skus[0];
scope.createTemplate(data);
},
error: function(data)
{
}
});
};
PopinQuickbuy.prototype.createTemplate = function(data) {
var template, output;
template = (data.product.color === 0) ? templates.fragrance : templates.makeup;
var _l = data.product.skus.length;
for (var i=0; i<_l; ++i) {
if (data.product.skus[i].active || data.product.skus[i].selectedSku==1) data.product.selectedSku = data.product.skus[i].skuCode;
}
output = template( data );
if(data.product.color === 0){
output += '<input type="hidden" id="quickbuyPage" value ="quickbuy-fragrance" />';
}
else {
output += '<input type="hidden" id="quickbuyPage" value ="quickbuy-makeup" />';
}
output += '<input type="hidden" id="defaultSku" value ="' + data.product.selectedSku +'" />';
var listeSku ="";
for (i=0;i<data.product.skus.length;i++) {
listeSku = listeSku + data.product.skus[i].skuCode +',';
}
output = output + '<input type="hidden" id="quickbuySkus" value ="' + listeSku.substring(0,listeSku.length -1) +'" />';
this.$popin.find('.js-popin-content').html(output);
this.open();
quickbuy = new QuickBuy({
containerSelector: '.js-popin-quickbuy'
});
};
module.exports = modules.PopinQuickbuy = PopinQuickbuy;
},{"../../helpers/foreach.js":2,"../../helpers/ifCond.js":3,"../../helpers/stringify.js":4,"../../helpers/truncate.js":5,"../../templates/quickbuy.js":31,"../equalHeight.js":11,"../quickBuy.js":22,"../verticalCenter.js":29,"./Popin":16}],19:[function(require,module,exports){
var Popin = require("./Popin");
var tabs  = require('../tabs.js');
PopinSizeGuide.prototype = new Popin({},true);
function PopinSizeGuide (options) {
var _this = this;
options.onOpened = function() {
var _max = 0;
var $tabs = $('.js-tab-content');
$tabs.each( function() {
var _h = $(this).height();
if (_h > _max) _max = _h;
});
$tabs.height( _max );
_this.placeInWindow();
};
options.onOpen = function() {
tabs.open(0);
};
this.init( options );
this.$popin.find('.js-table-select').on('change', function(e) {
var $this = $(this);
if ($this.val()) {
var $tab = $(this).parents('.js-tab-content');
$tab.find('.js-table.active').removeClass('active');
$tab.find('#'+$this.val()).addClass('active');
}
});
tabs.init();
$('.js-tab-trigger').on('click', function() {
tabs.open( $(this).data('index') );
});
this.$popin.find('.js-table-select').customSelect({
isDefault: function ($option) {
return $option.hasClass('js-custom-select-default');
}
});
$('.js-print').on('click', function() {
var _link = $(this).data('print-url');
if (_link.indexOf('.pdf') > -1) {
window.open( _link );
return;
}
var w = window.open();
var html = "<!DOCTYPE HTML>";
html += '<html lang="en-us">' +
'<head>' +
'<style type="text/css" media="all">' +
'@page {' +
'size: A4;' +
'margin: 0;' +
'}' +
'body {' +
'width: 21cm;' +
'min-height: 29.7cm;' +
'padding: 0cm;' +
'margin: 0cm auto;' +
'border: 1px #D3D3D3 solid;' +
'border-radius: 5px;' +
'background: white;' +
'box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);' +
'}' +
'img {' +
'display: block;'+
'width: 100%;' +
'height: auto;' +
'page-break-after: avoid;' +
'}' +
'@page {' +
'size: A4;' +
'margin: 0;' +
'}' +
'@media print {' +
'body {' +
'margin: 0;' +
'border: initial;' +
'border-radius: initial;' +
'width: initial;' +
'min-height: initial;' +
'box-shadow: initial;' +
'background: initial;' +
'}' +
'}' +
'</style>' +
'</head>' +
'<body>' +
'<img src="'+$(this).data('print-url')+'" />' +
'</body></html>';
w.document.write(html);
setTimeout( function() {
w.window.print();
}, 500);
w.document.close();
});
};
module.exports = modules.PopinSizeGuide = PopinSizeGuide;
},{"../tabs.js":26,"./Popin":16}],20:[function(require,module,exports){
modules.productFilter = {
defaultFilterableSelector       : '.js-filterable',
itemFilterable                  : '.js-swatch-hover',
nonCumulativeGroupData          : 'noncumulative-group',
equalHeight                     : require('../modules/equalHeight.js'),
wrapperPagination               : $(document.getElementById('productListAnchor')),
nbProducts                      : $('.js-product:not(.js-no-count)').length,
$filtersPanel                   : $('.js-filters-panel'),
$filtersCheckboxes              : $('.js-filters-checkbox'),
$filtersClose                   : $('.js-filters-close'),
$filtersReset                   : $('.js-filters-reset'),
$filterApplied                  : $('.js-filter-applied'),
$filterDropdown                 : $('.js-filter-dropdown'),
$filtersItemsCount              : $('.js-filters-count'),
$nbProductsCount                : $('.js-nb-products-container'),
$filtersResultsCount            : $('.js-filters-result'),
$filtersRecap                   : $('.js-filters-recap'),
$filtersSubmit                  : $('.js-filters-submit'),
$trigger                        : $('.js-filters-trigger'),
$productlist                    : $('.js-productlist'),
isOpen                          : false,
slideSpeed                      : 500,
nbrItems            : 0,
items               : [],
currentTotal        : 0,
filters             : [],
nonCumulativeGroupFilters   : null,
selectedNonCumulativeGroupNum: 0,
selectedFilters                     : [],
selectedNonCumulativeGroupFilters   : {},
updateEnabledFilters                : false,
countVariants                       : false,
dataSeparator       : '-',
dontMatch: 'dont-match',
lineNum             : 3,
needLines           : false,
signals             : new signals.Signal(),
init: function( filterableSelector, filterContainer )
{
modules.productFilter.setNbProducts(modules.productFilter.nbProducts);
modules.productFilter.filterableSelector = filterableSelector ? filterableSelector : modules.productFilter.defaultFilterableSelector;
modules.productFilter.itemFilterable = filterContainer ? filterContainer : modules.productFilter.itemFilterable;
modules.productFilter.lineNum = ($('.js-categories').data('products-per-line')) ? $('.js-categories').data('products-per-line') : modules.productFilter.lineNum;
modules.productFilter.needLines = ($('.js-categories').data('products-line')) ? $('.js-categories').data('products-line') : false;
var group, $this, $parent, filter;
$('.js-filters-group').each( function() {
$this = $(this);
group = $this.data( modules.productFilter.nonCumulativeGroupData );
if (group && group != "") {
if (!modules.productFilter.nonCumulativeGroupFilters) {
modules.productFilter.nonCumulativeGroupFilters = {};
modules.productFilter.selectedNonCumulativeGroupFilters = {};
}
if (!modules.productFilter.nonCumulativeGroupFilters[group]) {
modules.productFilter.nonCumulativeGroupFilters[group] = [];
modules.productFilter.selectedNonCumulativeGroupFilters[group] = [];
}
$this.find('.js-filters-checkbox').each( function() {
modules.productFilter.nonCumulativeGroupFilters[group].push( $(this).data("filter") );
}
);
} else {
$this.find('.js-filters-checkbox').each( function() {
modules.productFilter.filters.push( $(this).data("filter") );
}
);
}
});
modules.productFilter.$filtersCheckboxes.find('.js-checkbox').on( 'change', function( event ) {
$parent = $( this ).parents('.js-filters-checkbox:first');
group = $parent.parents('.js-filters-group:first').data( modules.productFilter.nonCumulativeGroupData );
if( $parent.hasClass('disabled') && $parent.find('input').is(':checked') ) {
event.stopPropagation();
event.preventDefault();
return;
}
var filter = $parent.attr('data-filter');
if ($(this).is(':checked')) {
modules.productFilter.addFilter( filter, group );
} else {
modules.productFilter.removeFilter( filter, group );
}
if( modules.productFilter.$filtersSubmit.length <= 0 || $(this).hasClass('js-force-filter') ) {
modules.productFilter.filter();
}
else {
modules.productFilter.checkDispo( false, group );
}
});
modules.productFilter.$trigger.on( 'click', modules.productFilter.toggle);
modules.productFilter.$filtersReset.on( 'click', modules.productFilter.reset);
modules.productFilter.$filtersClose.on( 'click', modules.productFilter.close);
modules.productFilter.$filtersSubmit.on('click', modules.productFilter.filter);
modules.productFilter.$filtersRecap.on('click',  '.js-filter-applied', modules.productFilter.removeRecapLabel);
modules.productFilter.$filterDropdown.on('click', modules.productFilter.toggleDropdown);
$(window).on('click', function(event){
if (modules.productFilter.$filterDropdown.has(event.target).length === 0 &&
!modules.productFilter.$filterDropdown.is(event.target)) {
modules.productFilter.toggleDropdown(event, true);
}
});
modules.productFilter.updateProductFiltersIds();
modules.productFilter.checkDispo( true, '', true );
modules.productFilter.$filtersPanel.addClass('invisible');
modules.productFilter.equalHeight.equalize('.js-filters-columns');
modules.productFilter.$filtersPanel.removeClass('invisible');
if ($(modules.productFilter.filterableSelector+':visible .js-swatch-hover:visible').length) {
modules.productFilter.countVariants = true;
modules.productFilter.nbrItems = $(modules.productFilter.filterableSelector+':visible .js-swatch-hover:visible').length;
} else {
modules.productFilter.nbrItems = $(modules.productFilter.filterableSelector+':visible:not(".js-no-count")').length;
}
modules.productFilter.total( modules.productFilter.nbrItems );
},
setNbProducts: function(nbProducts) {
$('.js-products-count').html(nbProducts);
},
toggle: function(e) {
if (e) e.preventDefault();
if( modules.productFilter.isOpen ) {
modules.productFilter.close();
} else {
modules.productFilter.open();
}
},
toggleDropdown: function(e, force) {
e.stopPropagation();
if ($(e.target).hasClass('js-filter-dropdown') || force) {
if ($(this).hasClass('filter-dropdown--deployed')) {
$(this).removeClass('filter-dropdown--deployed');
} else {
modules.productFilter.$filterDropdown.removeClass('filter-dropdown--deployed');
$(this).addClass('filter-dropdown--deployed');
}
}
},
open: function() {
modules.productFilter.$filtersPanel.slideDown( modules.productFilter.slideSpeed,function(){
if(core.lte7) {
setTimeout(function(){
modules.productFilter.$filtersPanel.toggleClass('open');
},1000);
}
});
modules.productFilter.isOpen = true;
modules.productFilter.$trigger.addClass('open');
},
close: function(e) {
if (e) e.preventDefault();
modules.productFilter.$filtersPanel.slideUp( modules.productFilter.slideSpeed,function() {
if(core.lte7) {
setTimeout(function(){
modules.productFilter.$filtersPanel.toggleClass('open');
},1000);
}
});
modules.productFilter.isOpen = false;
modules.productFilter.$trigger.removeClass('open');
},
updateProductFiltersIds: function() {
$(modules.productFilter.filterableSelector+':visible').each( function() {
var $filterable = $(this);
if ( $filterable.find('*[data-filter-id]').length > 0) {
var filterIds = [];
$filterable.find( modules.productFilter.itemFilterable ).each( function() {
var $this = $(this);
var filter = $this.attr('data-filter-id');
if ($.inArray(filter,filterIds) < 0) {
filterIds.push(filter);
}
var _nonCumulatives = $this.attr('data-cumulative-filter-id');
if (_nonCumulatives) {
$this.attr('data-filter-ids', ($this.attr('data-filter-id') + '-' + _nonCumulatives) );
if ($.inArray(_nonCumulatives,filterIds) < 0) {
filterIds.push(_nonCumulatives);
}
} else {
$this.attr('data-filter-ids', $this.attr('data-filter-id') );
}
});
$filterable.attr('data-filter-ids', filterIds.join(modules.productFilter.dataSeparator));
}
});
},
checkDispo: function( allProducts, currentGroupId, remove ) {
var availableFilters = [],
availableNonCumulativeGroupFilters = {},
$selector = $(modules.productFilter.filterableSelector),
count = 0;
for (var i = 0, l = $selector.length; i < l; ++i) {
var $this = $($selector[i]);
var filters = $this.data('filter-ids');
if( filters !== undefined ) {
var _result = modules.productFilter.itemMatch($this, allProducts);
if (!allProducts) {
if (!_result.match) {
continue;
} else {
if (!$this.hasClass('js-no-count')) {
count += _result.count;
}
}
} else {
if (!$this.hasClass('js-no-count')) {
count += _result.count;
}
}
if (allProducts || modules.productFilter.updateEnabledFilters) {
filters = filters.split(modules.productFilter.dataSeparator);
var filter;
for (var key in modules.productFilter.filters) {
filter = modules.productFilter.filters[key];
if ($.inArray(filter, filters) > -1 && $.inArray(filter, availableFilters) < 0) {
availableFilters.push(filter);
}
}
for (var group in modules.productFilter.nonCumulativeGroupFilters) {
var currentGroup = modules.productFilter.nonCumulativeGroupFilters[group];
for (key in currentGroup) {
filter = currentGroup[key];
if ($.inArray(filter, filters) > -1) {
if (!availableNonCumulativeGroupFilters[group]) {
availableNonCumulativeGroupFilters[group] = [];
availableNonCumulativeGroupFilters[group].push(filter);
} else {
if ($.inArray(filter, availableNonCumulativeGroupFilters[group]) < 0) {
availableNonCumulativeGroupFilters[group].push(filter);
}
}
}
}
}
}
}
}
if (allProducts || modules.productFilter.updateEnabledFilters) {
modules.productFilter.disableFilters(availableFilters, availableNonCumulativeGroupFilters, currentGroupId, remove);
}
modules.productFilter.currentTotal( count );
},
disableFilters: function( availableFilters , availableNonCumulativeGroupFilters, currentGroupId, remove ) {
modules.productFilter.$filtersCheckboxes.each( function() {
var $this = $(this);
var $parent = $this.parent();
var groupId = $parent.data( modules.productFilter.nonCumulativeGroupData );
var filter = $this.data('filter');
if (groupId) {
if ( groupId !== currentGroupId) {
if ($.inArray(filter, availableNonCumulativeGroupFilters[groupId]) < 0) {
if (remove) {
if ($this.parents('.js-filters-group').length) $this.parents('.js-filters-group').remove();
else $this.remove();
} else {
$this.addClass('disabled');
if (!$this.find('input').is(':checked')) {
$this.find('input').attr('disabled', 'disabled');
}
}
} else {
$this.removeClass('disabled').find('input').removeAttr('disabled');
}
}
} else {
if ($.inArray(filter, availableFilters) < 0) {
if (remove) {
$this.remove();
} else {
$this.addClass('disabled');
if (!$this.find('input').is(':checked')) {
$this.find('input').attr('disabled', 'disabled');
}
}
} else {
$this.removeClass('disabled').find('input').removeAttr('disabled');
}
}
});
modules.productFilter.updateColumnsTitle();
},
updateColumnsTitle: function() {
$('.js-filters-columns > .filters-column').each( function() {
if ($(this).find('.js-filters-checkbox:not(.disabled)').length === 0) {
$(this).find('.column-title').addClass('disabled');
} else {
$(this).find('.column-title').removeClass('disabled');
}
});
$('.category:visible').removeClass('category--below-filters').first().addClass('category--below-filters');
},
addFilter: function( filter, group ) {
modules.productFilter.addRecapLabel(filter, group);
if (!group) {
modules.productFilter.selectedFilters.push( filter );
}
else {
++modules.productFilter.selectedNonCumulativeGroupNum;
modules.productFilter.selectedNonCumulativeGroupFilters[group].push( filter );
}
},
toggleRecapFilters: function(bool) {
var deployedClass = 'filters-recap--deployed';
bool ?
modules.productFilter.$filtersRecap.addClass(deployedClass) :
modules.productFilter.$filtersRecap.removeClass(deployedClass);
},
addRecapLabel: function(filter, group) {
var filterLabel = this.$filtersCheckboxes.filter('*[data-filter="'+filter+'"]').find('label').text();
$('.js-filters-recap').append('<div class="filter-applied js-filter-applied" data-filter="'+filter+'" data-group="'+group+'"><span>'+filterLabel+'</span></div>');
},
removeRecapLabel: function() {
var filter = $(this).attr('data-filter');
var group = $(this).attr('data-group');
$(this).remove();
$('.js-filters-group[data-noncumulative-group="'+group+'"]')
.find('.js-filters-checkbox[data-filter="'+filter+'"] .js-checkbox-label')
.click();
},
removeFilter: function( filter, group ) {
if (!group) {
modules.productFilter.selectedFilters.splice( modules.productFilter.selectedFilters.indexOf(filter), 1 );
modules.productFilter.$filtersRecap.find('.js-filter-applied[data-filter="'+filter+'"]').remove();
}
else {
--modules.productFilter.selectedNonCumulativeGroupNum;
modules.productFilter.selectedNonCumulativeGroupFilters[group].splice( modules.productFilter.selectedNonCumulativeGroupFilters[group].indexOf(filter), 1 );
modules.productFilter.$filtersRecap.find('.js-filter-applied[data-filter="'+filter+'"][data-group="'+group+'"]').remove();
}
},
filter: function( e ) {
if (e) e.preventDefault();
if ( modules.productFilter.selectedFilters.length > 0 || modules.productFilter.selectedNonCumulativeGroupNum > 0 ) {
$(modules.productFilter.filterableSelector).each( function() {
var $product = $(this);
var _result = modules.productFilter.itemMatch($product, true);
if ( _result.match ) {
$product.removeClass( modules.productFilter.dontMatch );
if ($product.hasClass('js-swatch')) {
modules.productFilter.updateSwatches( $product );
}
} else {
$product.addClass( modules.productFilter.dontMatch );
}
});
if( $('.js-category').find('.js-parallax').length > 0 ){
$('.js-category').find('.js-parallax').hide();
$('.js-categories').removeClass('categories--covers');
}
modules.productFilter.toggleRecapFilters(true);
}
else {
modules.productFilter.toggleRecapFilters(false);
$(modules.productFilter.filterableSelector).removeClass( modules.productFilter.dontMatch );
$('.js-swatch-hover').parent().show();
if ( $('.js-category').find('.js-parallax').length > 0 ) {
$('.js-category').find('.js-parallax').show();
$('.js-categories').addClass('categories--covers');
}
}
$('.js-category').show();
$('.js-category').each(function(){
var $cat = $(this),
$products = $cat.find( modules.productFilter.filterableSelector+':visible' );
if( $products.length === 0 ) {
$cat.hide();
}
else {
if (modules.productFilter.needLines) {
$cat.find('.js-products-line').remove();
}
var _lineI = 0;
$products.each(function(i) {
var $product = $(this);
if(_lineI % modules.productFilter.lineNum === 0){
$product.addClass('column-no-margin');
}
else {
$product.removeClass('column-no-margin');
}
if(modules.productFilter.needLines && _lineI % modules.productFilter.lineNum === modules.productFilter.lineNum-1 && _lineI < $products.length-1) {
$product.after($('<hr class="products-line js-products-line"/>'));
}
if ($product.hasClass('one-third') || $product.hasClass('one-half')) {
++_lineI;
} else {
_lineI += 2;
}
});
}
});
modules.productFilter.total( $(modules.productFilter.filterableSelector+':visible:not(".js-no-count")').length );
if ($('*[data-filter-id]:visible').length > 0) {
modules.productFilter.updateProductFiltersIds();
}
modules.productFilter.checkDispo( false, '' );
modules.productFilter.close();
modules.productFilter.signals.dispatch('productFilter::change');
},
itemMatch: function( $product, allProducts ) {
var _ids = $product.attr('data-filter-ids');
var matchCumulativeFilter = true,
result = {match: true, count: 0};
if (_ids && _ids.length) {
var productFilters = _ids.split('-');
if (modules.productFilter.selectedFilters.length > 0) {
for (var filterKey in modules.productFilter.selectedFilters) {
var filter = modules.productFilter.selectedFilters[filterKey];
if ($.inArray(filter, productFilters) < 0) {
result.match = false;
return false;
}
}
}
}
var _hasCumulativeFilters = false;
for (var groupId in modules.productFilter.selectedNonCumulativeGroupFilters) {
var group = modules.productFilter.selectedNonCumulativeGroupFilters[groupId];
var groupLength = group.length;
if (groupLength > 0) {
_hasCumulativeFilters = true;
matchCumulativeFilter = false;
for (var i = 0; i < groupLength; ++i) {
var filter = group[i];
if($.inArray(filter, productFilters) >= 0) {
matchCumulativeFilter = true;
if (modules.productFilter.countVariants) {
result.count += $product.find(".js-swatch-hover[data-filter-id='"+filter+"']").length;
}
continue;
}
}
if (!matchCumulativeFilter) {
result.match = false;
result.count = 0;
return result;
}
}
}
if (!_hasCumulativeFilters) {
if (!modules.productFilter.countVariants) {
if (!$product.hasClass('js-no-count')) result.count = 1;
}
else {
result.count = $product.find(".js-swatch-hover").length;
}
return result;
}
if (!modules.productFilter.countVariants && !$product.hasClass('js-no-count')) result.count = 1;
return result;
},
updateSwatches: function( $el ) {
var _selectedIsHidden = false;
$el.find('.js-swatch-hover').each( function() {
var $this = $(this);
var _result = modules.productFilter.itemMatch( $this, false );
if (_result.match) {
$this.parent().show();
} else {
$this.parent().hide();
if (!_selectedIsHidden) {
_selectedIsHidden = $this.parent().hasClass('selected');
$this.parent().removeClass('selected');
}
}
});
if (_selectedIsHidden) {
$el.find('.js-swatch-hover:visible:first').trigger('click').parent().addClass('selected');
$('.js-swatch-name').html($el.find('.selected .js-swatch-hover').data('swatch-name'));
}
},
reset: function() {
modules.productFilter.$filtersCheckboxes.removeClass('disabled').find('input').each( function() {
this.checked = false;
} );
if (core.lte8 && !core.ie6)modules.productFilter.$filtersCheckboxes.find('.js-checkbox-label').removeClass('checked');
modules.productFilter.selectedNonCumulativeGroupNum = 0;
modules.productFilter.selectedFilters = [];
for (var _group in modules.productFilter.selectedNonCumulativeGroupFilters) {
modules.productFilter.selectedNonCumulativeGroupFilters[_group] = [];
}
modules.productFilter.filter();
$('.js-filter-applied').remove();
},
total: function(count) {
if (core.tablet) {
modules.productFilter.$filtersResultsCount.hide();
}
modules.productFilter.$filtersResultsCount.html( count+' / '+modules.productFilter.nbrItems );
if (core.tablet) {
setTimeout( function() {
modules.productFilter.$filtersResultsCount.show();
}, 50);
}
},
currentTotal: function(count) {
modules.productFilter.$filtersItemsCount.html( count );
if (count < modules.productFilter.nbProducts) {
modules.productFilter.$filtersItemsCount.parent().removeClass('isHidden');
modules.productFilter.$nbProductsCount.addClass('isHidden');
} else {
modules.productFilter.$filtersItemsCount.parent().addClass('isHidden');
modules.productFilter.$nbProductsCount.removeClass('isHidden');
}
}
};
module.exports = modules.productFilter;
},{"../modules/equalHeight.js":11}],21:[function(require,module,exports){
function ProductSelector(options) {
this.o =
{
containerSelector   : '.js-products-selector',
itemSelector        : '.js-product-selector',
defaultSelected     : true
};
this.o = $.extend(this.o, options);
this.init();
}
ProductSelector.prototype = {
init: function(){
this.$container = $(this.o.containerSelector);
this.signals = new signals.Signal();
if (this.$container.find('.selected').length > 0) {
this.$selected = this.$container.find('.selected '+this.o.itemSelector);
} else if (this.o.defaultSelected) {
this.$selected = this.$container.find(this.o.itemSelector).first();
}
var scope = this;
if (!core.isTactile) {
this.$container.on('click',this.o.itemSelector, $.proxy(this.selectProduct,scope));
if (this.$container.find('.js-swatch-hover').length > 0) {
this.$container.on('mouseover', this.o.itemSelector, $.proxy(this.mouseOverProduct, scope));
this.$container.on('mouseout', this.o.itemSelector, $.proxy(this.mouseOutProduct, scope));
}
} else {
this.$container.on('click',this.o.itemSelector, function(e) {
scope.mouseOverProduct.call(scope, e);
scope.selectProduct.call(scope, e);
});
}
if (this.$selected) {
this.$selected.trigger('click');
this.$selected.trigger('mouseover');
}
},
selectProduct: function(e) {
e.preventDefault();
var $selector = $(e.currentTarget);
var $parent = $selector.parents('.js-quickbuy');
if ($parent.length && $parent.find('.js-wishlist-add').length) {
$parent.find('.js-wishlist-add').attr('data-identifier', $selector.attr('data-sku'));
}
if (core.universe == core.cdc && $selector.hasClass('js-item-not-available')) {
e.stopPropagation();
return;
}
var $pictureTarget = $($selector.attr('data-picture-target'));
var pictureSrc = $selector.attr('data-picture-src');
if ($pictureTarget.is('img')) {
$pictureTarget.attr('src',pictureSrc);
}
else if ($pictureTarget.is('div')) {
$pictureTarget.css('background-image','url(' + pictureSrc + ')');
}
if ($selector.attr('data-thumbs-target') && $selector.attr('data-thumbs-srcs')) {
var $thumbsTarget = $($selector.attr('data-thumbs-target'));
var thumbsSrcs = JSON.parse($selector.attr('data-thumbs-srcs'));
var _altViews = JSON.parse($selector.attr('data-zoom-views'));
if (_altViews.views) {
_altViews = _altViews.views;
}
if ($thumbsTarget.length > 0) {
$thumbsTarget.empty();
var liStr = "";
for (var i = 0; i < thumbsSrcs.length; i++) {
var _zoom = 'data-zoom=\'{"src":"' + _altViews[i].src + '", "thumb": "' + _altViews[i].thumb + '"}\'';
if (_altViews[i].title) _zoom.title = _altViews[i].title;
if (i === 0) {
liStr += '<li><a href="javascript:void(0);" class="js-zoom-trigger" data-zoom-gallery="fpzoom" data-zoom-id="' + i + '" ' + _zoom + '><img src="' + thumbsSrcs[i] + '" alt=""></a></li><!--';
} else if (i === thumbsSrcs.length - 1) {
liStr += '--><li><a href="javascript:void(0);" class="js-zoom-trigger" data-zoom-gallery="fpzoom" data-zoom-id="' + i + '" ' + _zoom + '><img src="' + thumbsSrcs[i] + '" alt=""></a></li>';
} else {
liStr += '--><li><a href="javascript:void(0);" class="js-zoom-trigger" data-zoom-gallery="fpzoom" data-zoom-id="' + i + '" ' + _zoom + '><img src="' + thumbsSrcs[i] + '" alt=""></a></li><!--';
}
}
$thumbsTarget.append(liStr);
}
$('.js-cover-fp > .js-zoom-trigger').attr('data-zoom-views', $selector.attr('data-zoom-views'));
pages.fp.zoom.updateOpenTriggers($('.js-zoom-trigger'));
}
if (this.$selected) this.$selected.parent().removeClass('selected');
$selector.parent().addClass('selected');
this.$selected = $selector;
this.signals.dispatch('productSelector::change', $selector);
if (window.diorV7) {
diorV7.WishListModule.refreshTriggers();
}
},
unSelectProduct: function(e) {
this.$selected.parent().removeClass('selected');
$(this.$selected.attr('data-picture-target')).attr('style','');
},
mouseOverProduct: function(e) {
e.preventDefault();
var $selector = $(e.currentTarget);
var hoverTarget = this.$container.attr('data-hover-target');
var $hoverTarget = this.$container.parents('.js-quickbuy, .js-push, .shadecomparator-productsselector').first().find(hoverTarget);
this.displaySwatchName( $selector, $hoverTarget );
this.signals.dispatch('productSelector::mouseOver');
},
displaySwatchName: function( $el, $hoverTarget ) {
clearTimeout( this.mouseOut );
var _name = '<span>'+$el.attr('data-swatch-name')+'</span>';
if ($el.data('novelty')) _name += " " + $('.js-hashtags .js-hashtag--novelty').html();
if ($el.data('exclu')) _name += " " + $('.js-hashtags .js-hashtag--exclu').html();
$hoverTarget.html( _name );
},
mouseOutProduct: function(e) {
e.preventDefault();
clearTimeout( this.mouseOut );
this.mouseOut = setTimeout( this.displayDefaultSwatch.bind(this), 250);
},
displayDefaultSwatch: function() {
var $selector = this.$container.find('li.selected .js-swatch-hover');
var hoverTarget = this.$container.attr('data-hover-target');
var $hoverTarget = this.$container.parents('.js-quickbuy, .js-push, .shadecomparator-productsselector').first().find(hoverTarget);
this.displaySwatchName( $selector, $hoverTarget );
this.signals.dispatch('productSelector::mouseOut');
}
};
module.exports = ProductSelector;
},{}],22:[function(require,module,exports){
function QuickBuy(options) {
this.o =
{
containerSelector   : '.js-quickbuy'
};
this.o = $.extend(this.o, options);
this.init();
}
QuickBuy.prototype = {
init: function() {
this.$container         = $(this.o.containerSelector);
this.modProductSelector = require('../modules/productSelector.js');
this.productSelector    = null;
this.modShadeComparator = require('../modules/shadeComparator.js');
this.DropDown           = require('../modules/dropDown.js');
this.dropDowns          = [];
this.modStockAlert      = require('../modules/stockAlert.js');
this.modProductFilter   = require('../modules/productFilter.js');
this.modSendByMail      = require('../modules/sendByMail.js');
this.$orderDetails      = this.$container.find('.js-order-details');
this.$orderForm         = this.$orderDetails.find('.js-order-form');
this.$orderValue        = this.$container.find('.js-order-value');
this.$orderBtn          = this.$orderForm.find('.js-order-btn');
this.signals            = new signals.Signal();
var scope               = this;
this.$container.find('.js-dropdown').each(function(i){
var $dropdown = $(this);
scope.dropDowns[i] = new scope.DropDown({
$container : $dropdown
});
scope.dropDowns[i].signals.add(function (type, $item) {
switch (type) {
case 'dropDown::change':
if ($item.attr('data-quantity')) {
scope.updateOrderQuantity($item);
}
break;
}
});
});
this.modStockAlert.init();
this.modSendByMail.init();
if ($('.js-shade-comparator-trigger').length > 0) {
this.modShadeComparator.init();
if(this.modShadeComparator.signals) {
this.modShadeComparator.signals.add(function (type, index) {
switch (type) {
case 'shadeComparator::change':
scope.productSelector.$container.find(scope.productSelector.o.itemSelector).eq(index).trigger('click');
break;
}
});
}
}
if ($('.js-filterable').length > 0) {
this.modProductFilter.init( '.js-filterable', '.js-swatch-hover' );
}
this.productSelector    = new this.modProductSelector({
containerSelector: this.o.containerSelector + ' .js-products-selector',
defaultSelected: false
});
if (this.productSelector.signals) {
this.productSelector.signals.add(function (type, $item) {
switch (type) {
case 'productSelector::change':
scope.checkAvailability();
if ( $('.js-products-selector').length ) scope.checkHashtags();
scope.modSendByMail.selectProduct( type, $item );
break;
}
});
}
if (this.productSelector.$selected) {
this.checkAvailability();
if ( $('.js-products-selector').length ) this.checkHashtags();
}
},
checkAvailability: function() {
var _this = this;
var avaibility = this.productSelector.$selected.attr('data-availability');
this.$orderBtn.attr('data-sku',this.productSelector.$selected.attr('data-sku'));
switch (avaibility) {
case 'available':
this.$orderDetails.removeClass('order-details--nostock order-details--notonline').addClass('order-details--available');
if(this.productSelector.$selected.attr('data-value')) {
this.$orderValue.html(this.productSelector.$selected.attr('data-value'));
}
if(this.productSelector.$selected.attr('data-track-object')) {
this.$orderBtn.attr('data-track-object', this.productSelector.$selected.attr('data-track-object'));
}
break;
case 'nostock':
this.$orderDetails.removeClass('order-details--available order-details--notonline').addClass('order-details--nostock');
break;
case 'notonline':
this.$orderDetails.removeClass('order-details--available order-details--nostock').addClass('order-details--notonline');
break;
default:
}
},
checkHashtags: function() {
$('.js-hashtags').children().addClass('hashtag--hidden');
if (this.productSelector.$selected.data('exclu')) {
this.$container.find(".js-hashtags .js-hashtag--exclu").removeClass('hashtag--hidden');
}
if (this.productSelector.$selected.data('novelty')) {
this.$container.find(".js-hashtags .js-hashtag--novelty").removeClass('hashtag--hidden');
}
if (this.productSelector.$selected.data('engraving')) {
this.$container.find(".js-hashtags .js-hashtag--engravable").removeClass('hashtag--hidden');
}
},
updateOrderQuantity: function($item){
var newQuantity = 0;
if ($item.attr('data-quantity')) {
newQuantity = parseInt($item.attr('data-quantity'));
}
if (newQuantity > 0) {
this.$orderBtn.attr('data-quantity',newQuantity);
if (this.$orderBtn.attr('data-track-object')) {
var dataTrackObject = $.parseJSON(this.$orderBtn.attr('data-track-object').replace(/(\&apos\;)/g, '\''));
if (!$.isEmptyObject(dataTrackObject)) {
dataTrackObject.ecommerce.add.products[0].quantity = newQuantity;
this.$orderBtn.attr('data-track-object', JSON.stringify(dataTrackObject).replace(/(['])/g, '&apos;'));
}
}
if (this.productSelector) {
this.productSelector.$container.find(this.productSelector.o.itemSelector).each(function () {
if($(this).attr('data-track-object')) {
var dataTrackObject = $.parseJSON($(this).attr('data-track-object').replace(/(\&apos\;)/g, '\''));
if (!$.isEmptyObject(dataTrackObject)) {
dataTrackObject.ecommerce.add.products[0].quantity = newQuantity;
$(this).attr('data-track-object', JSON.stringify(dataTrackObject).replace(/(['])/g, '&apos;'));
}
}
});
}
}
}
};
module.exports = QuickBuy;
},{"../modules/dropDown.js":10,"../modules/productFilter.js":20,"../modules/productSelector.js":21,"../modules/sendByMail.js":23,"../modules/shadeComparator.js":24,"../modules/stockAlert.js":25}],23:[function(require,module,exports){
modules.SendByMail =
{
defaultContainer:       '.js-send-by-mail',
$container:             null,
Popin:                  require('../modules/popins/Popin.js'),
currentPopin:           null,
init: function(itemContainer, callback)
{
var container = itemContainer ? itemContainer : modules.SendByMail.defaultContainer;
modules.SendByMail.$container    = $(container),
modules.SendByMail.$form         = modules.SendByMail.$container.find('.js-send-by-mail-form'),
modules.SendByMail.$errorField   = modules.SendByMail.$container.find('.js-error-msg'),
modules.SendByMail.$successField = modules.SendByMail.$container.find('.js-send-by-mail-success');
modules.SendByMail.currentPopin = new modules.SendByMail.Popin({
$popin:  modules.SendByMail.$container,
$open:   $('.js-send-by-mail-trigger'),
onClosed: function() {
modules.SendByMail.$successField.hide();
modules.SendByMail.$form.show();
modules.SendByMail.$form[0].reset();
}
});
modules.SendByMail.$container.on('click','.js-send-by-mail-valid', modules.SendByMail.checkForm);
},
selectProduct: function( event, $item ) {
modules.SendByMail.$form.find('.js-send-by-mail-sku').attr('value',$item.data('sku'));
},
checkForm: function(e) {
e.preventDefault();
if (utils.FormValidator.validForm(modules.SendByMail.$form, modules.SendByMail.$errorField)) {
modules.SendByMail.saveForm();
}
},
saveForm: function() {
$.ajax({
url     : core.AjaxConfig.Product.SEND_BY_MAIL.url,
type    : core.AjaxConfig.Product.SEND_BY_MAIL.method,
data    : modules.SendByMail.$form.serialize(),
success : function(response) {
if (core.isTactile) {
setTimeout( function() {$('body').stop().animate( {scrollTop: (window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop)+1 }, 0, 'linear');}, 100 );
}
if(response.status === 'nok') {
modules.SendByMail.$errorField.show().html(response.message);
modules.SendByMail.currentPopin.placeInWindow();
}
else {
modules.SendByMail.$form.hide();
modules.SendByMail.$successField.show().html(response.message);
modules.SendByMail.currentPopin.placeInWindow();
setTimeout( function() {
modules.SendByMail.currentPopin.close();
}, 3000);
}
}
});
if (core.isTactile) {
setTimeout( function() {$('body').stop().animate( {scrollTop: (window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop)+1 }, 0, 'linear');}, 500 );
}
}
};
module.exports = modules.SendByMail;
},{"../modules/popins/Popin.js":16}],24:[function(require,module,exports){
modules.ShadeComparator =
{
defaultContainer:       '.js-shadecomparator',
$container:             null,
mouseMove:              null,
Popin:                  require('../modules/popins/Popin.js'),
currentPopin:           null,
verticalCenter:         require('../modules/verticalCenter.js'),
productSelector:        require('../modules/productSelector.js'),
productSelectorLeft:    null,
productSelectorRight:   null,
signals:                new signals.Signal(),
init : function( itemContainer)
{
var container = itemContainer ? itemContainer : modules.ShadeComparator.defaultContainer;
modules.ShadeComparator.$container = $(container);
modules.ShadeComparator.productSelectorLeft = new modules.ShadeComparator.productSelector({
containerSelector   : '.js-products-selector-left'
});
modules.ShadeComparator.productSelectorRight = new modules.ShadeComparator.productSelector({
containerSelector   : '.js-products-selector-right'
});
modules.ShadeComparator.productSelectorRight.unSelectProduct();
modules.ShadeComparator.verticalCenter.centerize('.js-shadecomparator-content');
if(!core.tablet) {
modules.ShadeComparator.$container.on('click','.js-toneslider-trigger', function(e) {
e.preventDefault();
});
modules.ShadeComparator.$container.on('mousedown','.js-toneslider-trigger', function(e) {
e.preventDefault();
var _target = e.target !== null ? e.target : e.srcElement;
document.body.focus();
document.onselectstart = function () { return false; };
_target.ondragstart = function() { return false; };
$(document).on('mousemove', modules.ShadeComparator.onMouseMove);
});
$(document).on('mouseup', function() {
$(document).off('mousemove',  modules.ShadeComparator.onMouseMove);
});
} else {
modules.ShadeComparator.$container[0].addEventListener("touchmove", modules.ShadeComparator.onMouseMove);
modules.ShadeComparator.$container.on('touchend', function() {
$(this).off('touchmove',  modules.ShadeComparator.onMouseMove);
});
}
modules.ShadeComparator.$container.on('click','.js-choose-button', modules.ShadeComparator.validShade);
modules.ShadeComparator.currentPopin = new modules.ShadeComparator.Popin({
$popin:  modules.ShadeComparator.$container,
$open:   $('.js-shade-comparator-trigger'),
onOpened: function() {
if(core.lte7) modules.ShadeComparator.verticalCenter.centerize('.js-shadecomparator-content');
}
});
if (common.getPopinParam() === 'shade-selector') {
modules.ShadeComparator.currentPopin.open();
}
},
validShade : function(e) {
e.preventDefault();
var swatchIndex = 0;
if ($(this).parents('.productsselector-right').length > 0) {
swatchIndex = modules.ShadeComparator.productSelectorRight.$selected.parents('li').index();
}
else {
swatchIndex = modules.ShadeComparator.productSelectorLeft.$selected.parents('li').index();
}
modules.ShadeComparator.signals.dispatch('shadeComparator::change',swatchIndex);
modules.ShadeComparator.currentPopin.close();
},
onMouseMove : function(event) {
if (event) {
event.stopPropagation();
event.preventDefault();
} else {
event = window.element;
}
var _target = event.target !== null ? event.target : event.srcElement;
document.body.focus();
document.onselectstart = function () { return false; };
_target.ondragstart = function() { return false; };
var slider             = modules.ShadeComparator.$container.find('.js-toneslider');
sliderPosition     = slider.offset(),
sliderX            = sliderPosition.left,
sliderWidth        = slider.width(),
mouseX             = event.changedTouches ? event.changedTouches[0].pageX : event.pageX,
xPosition          = mouseX - sliderX,
percent            = 100 - (( xPosition / sliderWidth) * 100);
if(percent > 100) percent = 100;
if(percent < 0) percent = 0;
modules.ShadeComparator.$container.find('.js-toneslider-halftone').css({'width' : percent + '%'});
}
};
module.exports = modules.ShadeComparator;
},{"../modules/popins/Popin.js":16,"../modules/productSelector.js":21,"../modules/verticalCenter.js":29}],25:[function(require,module,exports){
modules.StockAlert =
{
defaultContainer:       '.js-stockalert',
$container:             null,
Popin:                  require('../modules/popins/Popin.js'),
currentPopin:           null,
init: function(itemContainer, callback)
{
var container = itemContainer ? itemContainer : modules.StockAlert.defaultContainer;
modules.StockAlert.$container       = $(container);
modules.StockAlert.$form            = modules.StockAlert.$container.find('.js-stockalert-form'),
modules.StockAlert.$popinsubtitle   = modules.StockAlert.$container.find('.js-popin-subtitle'),
modules.StockAlert.$legalBlock      = modules.StockAlert.$container.find('.js-stockalert-legal'),
modules.StockAlert.$succesBlock     = modules.StockAlert.$container.find('.js-stockalert-success'),
modules.StockAlert.$errorField      = modules.StockAlert.$container.find('.js-error-msg'),
modules.StockAlert.$errorLegalField = modules.StockAlert.$container.find('.js-legal-error-msg'),
modules.StockAlert.$checkAccess     = modules.StockAlert.$container.find('.js-stockalert-accessories'),
modules.StockAlert.$checkBeauty     = modules.StockAlert.$container.find('.js-stockalert-beauty'),
modules.StockAlert.$checkLegal      = modules.StockAlert.$container.find('.js-legal-accept');
modules.StockAlert.currentPopin = new modules.StockAlert.Popin({
$popin:  modules.StockAlert.$container,
$open:   $('.js-stockalert-trigger'),
onClosed: function() {
modules.StockAlert.$succesBlock.hide();
modules.StockAlert.$legalBlock.hide();
modules.StockAlert.$checkLegal.prop( "checked", false );
modules.StockAlert.$form[0].reset();
modules.StockAlert.$form.show();
modules.StockAlert.$popinsubtitle.show();
}
});
modules.StockAlert.$container.on('click','.js-stockalert-valid', modules.StockAlert.checkForm);
},
checkForm: function(e) {
e.preventDefault();
if (utils.FormValidator.validForm(modules.StockAlert.$form, modules.StockAlert.$errorField)) {
if ( $(this).hasClass('legal-trigger') ) {
if(modules.StockAlert.$legalBlock.is(':visible')) {
if ( modules.StockAlert.$checkLegal.is(':checked') ) {
modules.StockAlert.$errorLegalField.hide();
modules.StockAlert.saveEmail();
} else {
modules.StockAlert.$errorLegalField.show();
return false;
}
} else {
modules.StockAlert.$form.hide();
modules.StockAlert.$popinsubtitle.hide();
modules.StockAlert.$legalBlock.show();
modules.StockAlert.$container.find('.js-scroller').tinyscrollbar();
}
} else {
modules.StockAlert.saveEmail();
}
}
},
saveEmail: function() {
var email = modules.StockAlert.$container.find('.js-stockalert-email').val();
if (email && email!=='') {
var _data = {
email: email,
isSubscribeBeauty: modules.StockAlert.$checkBeauty.prop('checked'),
isSubscribeFashion: modules.StockAlert.$checkAccess.prop('checked'),
skuCode: $('.js-cover-quickbuy .js-addtocart').data('sku')
};
$.ajax({
url: core.AjaxConfig.Product.STOCK_ALERT.url,
type : core.AjaxConfig.Product.STOCK_ALERT.method,
data : _data,
formatter: core.AjaxConfig.Product.STOCK_ALERT.formatter,
contentType: core.AjaxConfig.Product.STOCK_ALERT.contentType,
success : function(response) {
if(response.subscribeNewsletter){
$.ajax({
url: core.AjaxConfig.Product.STOCK_ALERT_NEWSLETTER.url,
type: core.AjaxConfig.Product.STOCK_ALERT_NEWSLETTER.method,
data: _data,
formatter: core.AjaxConfig.Product.STOCK_ALERT_NEWSLETTER.formatter,
success : function(response) {
if (response.status == 'ok') {
window.console && console.log("Newsletter subcribtion : success");
} else {
window.console && console.log("Newsletter subcribtion : fail");
}
}
});
}
if (core.isTactile) {
setTimeout( function() {$('body').stop().animate( {scrollTop: (window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop)+1 }, 0, 'linear');}, 100 );
}
if(response.status === 'nok') {
modules.StockAlert.$errorField.show().html(response.errorMessages);
modules.StockAlert.currentPopin.placeInWindow();
}
else {
modules.StockAlert.$form.hide();
modules.StockAlert.$popinsubtitle.hide();
modules.StockAlert.$legalBlock.hide();
modules.StockAlert.$errorField.hide();
modules.StockAlert.$errorLegalField.hide();
modules.StockAlert.$succesBlock.show().html(response.message);
modules.StockAlert.currentPopin.placeInWindow();
setTimeout( function() {
modules.StockAlert.currentPopin.close();
}, 3000 );
}
}
});
} else if (core.isTactile) {
setTimeout( function() {$('body').stop().animate( {scrollTop: (window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop)+1 }, 0, 'linear');}, 500 );
}
}
};
module.exports = modules.StockAlert;
},{"../modules/popins/Popin.js":16}],26:[function(require,module,exports){
modules.tabs = {
defaultContainer: '.js-tabs',
defaultHeaderSelector: '.js-tab-header',
defaultContentSelector: '.js-tab-content',
init: function(itemContainer, itemHeaderSelector, itemContentSelector)
{
var container = itemContainer ? itemContainer : modules.tabs.defaultContainer,
headerSelector = itemHeaderSelector ? itemHeaderSelector : modules.tabs.defaultHeaderSelector,
contentSelector = itemContentSelector ? itemContentSelector : modules.tabs.defaultContentSelector;
$(headerSelector).on('click', function(e) {
e.preventDefault();
$(this).parents(container).find(headerSelector).removeClass('tab-header--active');
$(this).parents(container).find(contentSelector).removeClass('tab-content--active');
var targetContentSelector = $(this).attr('data-tab-target');
$(this).addClass('tab-header--active').parents(container).find(targetContentSelector).addClass('tab-content--active');
if(core.ie7) {
$(this).parents('.column').hide().show();
}
});
},
open: function(i) {
$(modules.tabs.defaultHeaderSelector+':eq('+i+')').trigger('click');
}
};
module.exports = modules.tabs;
},{}],27:[function(require,module,exports){
var Dispatcher = require('./Dispatcher.js');
function Tag($tag, options) {
this.init($tag, options);
return this;
}
Tag.prototype = {
init: function($tag, options) {
this.o = {
classNames: {
tagWrapper: 'js-tag-wrapper',
tagArrow: 'js-tag-arrow',
tagContent: 'js-tag-content',
tagHoverZone: 'tag-hoverzone js-tag-hoverzone',
tag: 'js-tag',
positionLeft: 'tag--left',
positionCenter: 'tag--center',
positionRight: 'tag--right',
},
hoverZone: false,
hoverWidth: "10%",
hoverHeight: "50%",
safetyMargin: 20
};
if (options) {
this.o = $.extend(this.o, options);
}
this.$tag = $tag;
this.$arrow = this.$tag.find("."+this.o.classNames.tagArrow);
this.$content = this.$tag.find("."+this.o.classNames.tagContent);
this.$wrapper = this.$tag.parents("."+this.o.classNames.tagWrapper);
this.dispatcher = new Dispatcher();
this.addListeners();
this.mouseOverTag = false;
this.hoverWidth = this.o.hoverWidth.indexOf('%') > 0 ?  parseInt(this.o.hoverWidth.substr(0,this.o.hoverWidth.length-1)) : ( parseInt(this.o.hoverWidth.substr(0,this.o.hoverWidth.length-2)) * 100 ) / this.$wrapper.find('img').get(0).naturalWidth;
this.hoverHeight = this.o.hoverHeight.indexOf('%') > 0 ?  parseInt(this.o.hoverHeight.substr(0,this.o.hoverHeight.length-1)) : ( parseInt(this.o.hoverHeight.substr(0,this.o.hoverHeight.length-2)) * 100 ) / this.$wrapper.find('img').get(0).naturalHeight;
},
setTagPosition: function() {
var style = this.getTagPosition({
tagLeft: parseInt(this.$content[0].style.left),
tagTop:parseInt(this.$content[0].style.top)
}, this.$content[0]);
this.$arrow.css('top', style.top);
this.$content.css({
left: style.left,
top: style.top
});
},
getTagPosition: function(label, ref) {
var parent = this.$wrapper[0];
var offsetLeft = ref.offsetWidth*.5 / parent.offsetWidth  * 100;
var offsetTop = ref.offsetHeight*.5 / parent.offsetHeight  * 100;
var maxX = 100 - offsetLeft  - this.o.safetyMargin * 100 / parent.offsetWidth;
var maxY = 100 - offsetTop - this.o.safetyMargin * 100 / parent.offsetHeight;
var top = Math.max( parseInt(label.tagTop), 2 + offsetTop );
var left = Math.max( parseInt(label.tagLeft), 2 + offsetLeft );
if ($(window).width() <= 1024 &&
ref.offsetWidth > parent.offsetWidth - this.o.safetyMargin*2 ) {
left = ((parent.offsetWidth - ref.offsetWidth) * .5 + ref.offsetWidth*.5)+'px';
} else {
left = Math.min( left, maxX)+'%';
}
return {
top: Math.min( top, maxY)+'%',
left: left
};
},
trigger: function(event, force) {
if (this.o.triggerEvents) this.dispatcher.trigger(event, this);
},
on: function(event, callback, scope) {
this.dispatcher.on(event, callback, scope);
},
off: function( event, callback, scope ) {
this.dispatcher.off(event, callback, scope);
},
isMouseOver: function(e) {
return this.mouseOverTag || this.isMouseOverZone(e);
},
isMouseOverZone: function(e) {
var mouseX = e.clientX;
var mouseY = e.clientY;
var arrow = this.$arrow[0];
var tagX = (parseInt(arrow.style.left)*this.wrapperW)/100 + this.$wrapper.offset().left;
var tagY = (parseInt(arrow.style.top)*this.wrapperH)/100 + this.$wrapper.offset().top;
var hoverWidthPx = (this.hoverWidth*this.wrapperW/100);
var hoverHeightPx = (this.hoverHeight*this.wrapperH/100);
return (this.o.hoverWidth !== "100%" && mouseX > tagX - hoverWidthPx/2 && mouseX < tagX + hoverWidthPx/2 && this.o.hoverHeight !== "100%" && mouseY > tagY - hoverHeightPx/2 && mouseY < tagY + hoverHeightPx/2) ||
(this.o.hoverHeight === "100%" && this.o.hoverWidth === "100%") ||
(this.o.hoverHeight === "100%" && this.o.hoverWidth !== "100%" && mouseX > tagX - hoverWidthPx/2 && mouseX < tagX + hoverWidthPx/2) ||
(this.o.hoverWidth === "100%" && this.o.hoverHeight !== "100%" && mouseY > tagY - hoverHeightPx/2 && mouseY < tagY + hoverHeightPx/2);
},
onmouseOverTag: function(e) {
this.mouseOverTag = true;
this.dispatcher.trigger('enter', this, e);
},
onMouseouttag: function(e) {
this.mouseOverTag = false;
this.dispatcher.trigger('leave', this, e);
},
active: function() {
this.$tag.addClass('tag--active');
this.setTagPosition();
},
deactivate: function() {
this.$tag.removeClass('tag--active');
this.mouseOverTag = false;
},
addListeners: function() {
this._onmouseOverTag = this.onmouseOverTag.bind(this);
this._onMouseouttag = this.onMouseouttag.bind(this);
this.$tag.on('mouseenter', this._onmouseOverTag);
this.$tag.on('mouseleave', this._onMouseouttag);
},
removeListeners: function() {
this.$tag.off('mouseenter', this._onmouseOverTag);
this.$tag.off('mouseleave', this._onMouseouttag);
}
};
module.exports = Tag;
},{"./Dispatcher.js":6}],28:[function(require,module,exports){
var Tag = require('./tag.js');
function Tags($el,options) {
this.o = {
$current : null,
current : null,
multiple : false
};
this.init($el, options );
return this;
}
Tags.prototype = {
init: function(  $wrapper, options ) {
if (options) {
this.o = $.extend(this.o, options);
}
this.$wrapper = $wrapper;
this.$tags = $wrapper.find('.js-tag');
if (typeof options === 'undefined' || typeof options.multiple === 'undefined')
this.o.multiple =  this.$wrapper.data('multiple') ;
this.tags = [];
var _this = this;
this.$tags.each(function(i, el){
var $tag = $(el);
var _tag = new Tag( $tag, {
hoverZone: true,
hoverHeight: $tag.data('hoverheight'),
hoverWidth: $tag.data('hoverwidth')
});
_tag.on('enter', _this.onTagMouseEnter.bind(_this) );
_tag.on('leave', _this.onTagMouseLeave.bind(_this) );
_this.tags.push( _tag );
});
this.length = this.tags.length;
this.addListeners();
},
onTagMouseEnter: function( tag, e ) {
if (!this.current) {
this.current = tag;
this.current.active();
} else {
if (!this.current.isMouseOver(e)) {
this.current.deactive();
this.current = tag;
this.current.active();
} else {
}
}
},
onTagMouseLeave: function( tag, e ) {
},
onMouseoutWrapper: function(e) {
for (var i=0; i<this.length; ++i) {
this.tags[i].deactivate();
}
this.current = null;
},
onMousemoveWrapper: function(e) {
for (var i=0; i<this.length; ++i) {
var _tag = this.tags[i];
if (_tag.isMouseOver(e)) {
if (!this.current || this.o.multiple || !this.current.isMouseOver(e)) {
if (this.current && !this.o.multiple) this.current.deactivate();
this.current = _tag;
this.current.active();
}
}
}
},
onResize: function() {
for (var i=0; i<this.length; ++i) {
this.tags[i].wrapperW = this.$wrapper.outerWidth();
this.tags[i].wrapperH = this.$wrapper.outerHeight();
}
},
addListeners: function() {
this._onMousemoveWrapper = this.onMousemoveWrapper.bind(this);
this._onMouseoutWrapper = this.onMouseoutWrapper.bind(this);
this._onResize = this.onResize.bind(this);
this.$wrapper.on('mousemove', this._onMousemoveWrapper);
this.$wrapper.on('mouseleave', this._onMouseoutWrapper);
$(window).on('resize', this._onResize);
this.onResize();
},
removeListeners: function() {
this.$wrapper.off('mousemove', this._onMousemoveWrapper);
this.$wrapper.off('mouseleave', this._onMouseoutWrapper);
$(window).off('resize', this._resize);
}
};
module.exports = Tags;
},{"./tag.js":27}],29:[function(require,module,exports){
modules.verticalCenter = {
defaultContainerSelector: '#container',
defaultSelector: '.js-center-vertical',
centerize: function(itemContainerSelector, itemSelector)
{
var container = itemContainerSelector ? itemContainerSelector : modules.verticalCenter.defaultContainerSelector,
selector = itemSelector ? itemSelector : modules.verticalCenter.defaultSelector,
$items = $(container).find(selector);
$items.each(function(){
var $item = $(this),
$container = $item.parents(container);
var containerHeight = $container.height(),
itemPositon = $item.css('position').toLowerCase();
if (itemPositon != "absolute") { //if absolute center with top
if (core.lte7) {
var margTop = ( containerHeight - $item.height() ) * 0.5;
$item.css('margin-top', margTop);
} else {
$item.addClass('inline-block');
$container.css('line-height', containerHeight + 'px');
}
}
else {
var top = ( containerHeight - $item.height() ) * 0.5;
$item.css({'top': top, 'bottom': 'auto'});
}
});
},
reset: function(itemContainerSelector, itemSelector)
{
var container = itemContainerSelector ? itemContainerSelector : modules.equalHeight.defaultContainer,
selector = itemSelector ? itemSelector : modules.verticalCenter.defaultSelector,
$items = $(container).find(selector);
$items.each(function(){
var $item = $(this),
$container = $item.parents(container);
var containerHeight = $container.height(),
itemPositon = $item.css('position').toLowerCase();
if (itemPositon != "absolute") { //if absolute center with top
if (core.lte7) {
$item.css('margin-top', 0);
} else {
$item.removeClass('inline-block');
$container.css('line-height', 'normal');
}
}
else {
$item.css('top', 0);
}
});
}
};
module.exports = modules.verticalCenter;
},{}],30:[function(require,module,exports){
module.exports = function(Handlebars) {
this["DiorTpl"] = this["DiorTpl"] || {};
this["DiorTpl"]["controls"] = Handlebars.template(function (Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [4,'>= 1.0.0'];
helpers = this.merge(helpers, Handlebars.helpers); data = data || {};
var buffer = "", stack1, helper, functionType="function", escapeExpression=this.escapeExpression, self=this;
function program1(depth0,data) {
return "\n    <div class=\"player-ui\">\n        <span class=\"chapter-title\"></span>\n    </div>\n    ";
}
function program3(depth0,data) {
var buffer = "", stack1, helper;
buffer += "\n    <div class=\"player-ui\">\n        <div id=\"";
if (helper = helpers.target) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.target); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "_timeDisplay\" class=\"_timeLabel\">\n            <span unselectable=\"on\">00:00</span>\n        </div>\n        <div id=\"";
if (helper = helpers.target) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.target); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "_durationLabel\" class=\"_durationLabel\">\n            <span unselectable=\"on\"> / ";
if (helper = helpers.duration) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.duration); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "</span>\n        </div>\n    </div>\n    ";
return buffer;
}
function program5(depth0,data) {
var buffer = "", stack1, helper;
buffer += "\n        <div class=\"player-ui border-left\">\n            <a id=\"";
if (helper = helpers.target) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.target); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "_diorTv\" class=\"diortv\" href=\"";
if (helper = helpers.diorTV) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.diorTV); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "\" target=\"_blank\">\n                <span class=\"icon-player-diortv png-bg\"></span>\n            </a>\n        </div>\n        ";
return buffer;
}
function program7(depth0,data) {
var buffer = "", stack1;
buffer += "\n            <div class=\"share-container\">\n                <ul class=\"share\">\n                    <li class=\"share-open\"><a href=\"javascript:void(0);\" class=\"icon-player-share js-tooltip-trigger png-bg\" data-tooltip=\"share\"></a></li>\n                    ";
stack1 = helpers['if'].call(depth0, ((stack1 = (depth0 && depth0.share)),stack1 == null || stack1 === false ? stack1 : stack1.embed), {hash:{},inverse:self.noop,fn:self.program(8, program8, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n                    ";
stack1 = helpers['if'].call(depth0, ((stack1 = (depth0 && depth0.share)),stack1 == null || stack1 === false ? stack1 : stack1.facebook), {hash:{},inverse:self.noop,fn:self.program(10, program10, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n                    ";
stack1 = helpers['if'].call(depth0, ((stack1 = (depth0 && depth0.share)),stack1 == null || stack1 === false ? stack1 : stack1.twitter), {hash:{},inverse:self.noop,fn:self.program(12, program12, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n                    ";
stack1 = helpers['if'].call(depth0, ((stack1 = (depth0 && depth0.share)),stack1 == null || stack1 === false ? stack1 : stack1.tumblr), {hash:{},inverse:self.noop,fn:self.program(14, program14, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n                    <li class=\"icon-player-close-share png-bg\"></li>\n                </ul>\n            </div>\n            ";
return buffer;
}
function program8(depth0,data) {
return "<li><a href=\"javascript:void(0);\" class=\"icon-player-embed png-bg\"></a></li>";
}
function program10(depth0,data) {
var buffer = "", stack1;
buffer += "<li><a href=\""
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.share)),stack1 == null || stack1 === false ? stack1 : stack1.facebook)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\" class=\"icon-player-facebook png-bg\"></a></li>";
return buffer;
}
function program12(depth0,data) {
var buffer = "", stack1;
buffer += "<li><a href=\""
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.share)),stack1 == null || stack1 === false ? stack1 : stack1.twitter)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\" class=\"icon-player-twitter png-bg\"></a></li>";
return buffer;
}
function program14(depth0,data) {
var buffer = "", stack1;
buffer += "<li><a href=\""
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.share)),stack1 == null || stack1 === false ? stack1 : stack1.tumblr)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\" class=\"icon-player-tumblr png-bg\"></a></li>";
return buffer;
}
function program16(depth0,data) {
var buffer = "", stack1, helper;
buffer += "\n            <a href=\"javascript:void(0);\" id=\"";
if (helper = helpers.target) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.target); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "_subtitles\" class=\"subtitles js-tooltip-trigger js-subtitles-toggle png-bg\" mode=\"on\" data-tooltip=\"subtitles\"></a>\n            ";
return buffer;
}
function program18(depth0,data) {
return "\n            <a href=\"javascript:void(0);\" class=\"toggle-sound js-sound-toggle\" mode=\"on\">\n                <span class=\"sound-on icon-player-sound-on png-bg\"></span>\n                <span class=\"sound-off icon-player-sound-off png-bg\"></span>\n            </a>\n\n            <ul class=\"sound js-tooltip-trigger\" data-tooltip=\"volume\">\n                <li class=\"sound-bar active\" unselectable=\"on\"></li>\n                <li class=\"sound-bar active\" unselectable=\"on\"></li>\n                <li class=\"sound-bar active\" unselectable=\"on\"></li>\n                <li class=\"sound-bar active\" unselectable=\"on\"></li>\n                <li class=\"sound-bar active\" unselectable=\"on\"></li>\n                <li class=\"sound-bar active\" unselectable=\"on\"></li>\n                <li class=\"sound-bar active\" unselectable=\"on\"></li>\n                <li class=\"sound-bar active\" unselectable=\"on\"></li>\n            </ul>\n            ";
}
function program20(depth0,data) {
return "style=\"display: none;\"";
}
function program22(depth0,data) {
var buffer = "", stack1, helper;
buffer += "<span class=\"js-tooltip\" data-tooltip=\"share\">";
if (helper = helpers.locaShare) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.locaShare); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "</span>";
return buffer;
}
function program24(depth0,data) {
var buffer = "", stack1, helper;
buffer += "<span class=\"js-tooltip\" data-tooltip=\"subtitles\" mode=\"on\">";
if (helper = helpers.locaSubtitles) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.locaSubtitles); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "</span>";
return buffer;
}
function program26(depth0,data,depth1) {
var buffer = "", stack1;
buffer += "\n    <div class=\"chapters\">\n        <div class=\"list-viewport\">\n            <div class=\"slider-container js-slider-container\">\n                <ul style=\"width:"
+ escapeExpression(((stack1 = (depth1 && depth1.chaptersWidth)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "px;\">\n                    ";
stack1 = helpers.each.call(depth0, (depth0 && depth0.chapters), {hash:{},inverse:self.noop,fn:self.programWithDepth(27, program27, data, depth0),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n                </ul>\n                <span class=\"icon-player-chapter_cursor js-chapter-cursor png-bg\"></span>\n            </div>\n        </div>\n\n        ";
stack1 = helpers['if'].call(depth0, (depth0 && depth0.chaptersNeedSlide), {hash:{},inverse:self.noop,fn:self.program(29, program29, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n    </div>\n    ";
return buffer;
}
function program27(depth0,data,depth1) {
var buffer = "", stack1, helper;
buffer += "\n                    <li style=\"width:"
+ escapeExpression(((stack1 = (depth1 && depth1.chapterWidth)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "px;\">\n                        <a href=\"javascript:void(0);\">";
if (helper = helpers.name) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.name); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "</a>\n                    </li>\n                    ";
return buffer;
}
function program29(depth0,data) {
return "\n        <div class=\"chapters-btn previous\">\n            <i class=\"icon-player-previous png-bg\"></i>\n        </div>\n        <div class=\"chapters-btn next\">\n            <i class=\"icon-player-next png-bg\"></i>\n        </div>\n        ";
}
function program31(depth0,data) {
var buffer = "", stack1, helper;
buffer += "\n<div id=\"";
if (helper = helpers.target) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.target); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "_embedLayer\" class=\"player-layer\">\n    <div class=\"insert\">\n        <a href=\"javascript:void(0);\" class=\"icon-player-layer-close\"></a>\n        <h3>Embed</h3>\n        <textarea autocomplete=\"off\" autocorrect=\"off\" autocapitalize=\"off\" spellcheck=\"false\" class=\"code\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.share)),stack1 == null || stack1 === false ? stack1 : stack1.embed)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</textarea>\n        <a id=\"copy-button\" href=\"javascript:void(0);\" class=\"btn btn-dark copy\" data-clipboard-text=\"Copier le lien\" data-clipboard-copied=\"Copié\">Copier le lien</a>\n    </div>\n</div>\n";
return buffer;
}
function program33(depth0,data) {
return "\n<div class=\"subtitleArea\">\n\n</div>\n<div class=\"metaArea\">\n\n</div>\n";
}
function program35(depth0,data) {
var buffer = "", stack1, helper;
buffer += "\n<div id=\"";
if (helper = helpers.target) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.target); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "_globalPlayPause png-bg\" class=\"_globalPlayPause\" mode=\"play\"></div>\n";
return buffer;
}
function program37(depth0,data) {
var buffer = "", stack1, helper;
buffer += "\n<div id=\"";
if (helper = helpers.target) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.target); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "_poster\" class=\"_poster ";
stack1 = helpers.unless.call(depth0, (depth0 && depth0.autoPlay), {hash:{},inverse:self.noop,fn:self.program(38, program38, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\">\n    <img src=\"";
if (helper = helpers.poster) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.poster); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "\" alt=\"video poster ";
if (helper = helpers.resource_id) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.resource_id); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "\">\n</div>\n";
return buffer;
}
function program38(depth0,data) {
return "visible";
}
buffer += "<div id=\"";
if (helper = helpers.target) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.target); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "_Container\" class=\"_container\" mode=\"display\">\n    <div id=\"";
if (helper = helpers.target) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.target); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "_progressContainer\" class=\"_progressContainer\">\n        <div id=\"";
if (helper = helpers.target) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.target); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "_progressBarContainer\" class=\"_progressBarContainer\">\n            <div id=\"";
if (helper = helpers.target) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.target); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "_progressBar\" class=\"_progressBar\"></div>\n        </div>\n    </div>\n\n    <div class=\"player-ui border-right play-pause\">\n        <a id=\"";
if (helper = helpers.target) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.target); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "_playPause\" class=\"_playPause png-bg\" href=\"javascript:void(0);\" mode=\"pause\"></a>\n    </div>\n\n    ";
stack1 = helpers['if'].call(depth0, (depth0 && depth0.chapters), {hash:{},inverse:self.program(3, program3, data),fn:self.program(1, program1, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n\n    <div class=\"controls-right\">\n        ";
stack1 = helpers['if'].call(depth0, (depth0 && depth0.diorTV), {hash:{},inverse:self.noop,fn:self.program(5, program5, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n\n        <div class=\"player-ui border-left\">\n            ";
stack1 = helpers['if'].call(depth0, (depth0 && depth0.share), {hash:{},inverse:self.noop,fn:self.program(7, program7, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n\n            ";
stack1 = helpers['if'].call(depth0, (depth0 && depth0.subtitles), {hash:{},inverse:self.noop,fn:self.program(16, program16, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n\n            ";
stack1 = helpers.unless.call(depth0, (depth0 && depth0.ipad), {hash:{},inverse:self.noop,fn:self.program(18, program18, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n\n            <a href=\"javascript:void(0);\" id=\"";
if (helper = helpers.target) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.target); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "_fullscreen\" class=\"icon-player-fullscreen js-tooltip-trigger png-bg\" data-tooltip=\"fullscreen\"></a>\n        </div>\n\n        <div class=\"tooltips\" ";
stack1 = helpers['if'].call(depth0, (depth0 && depth0.tooltipsHidden), {hash:{},inverse:self.noop,fn:self.program(20, program20, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += ">\n            ";
stack1 = helpers['if'].call(depth0, (depth0 && depth0.share), {hash:{},inverse:self.noop,fn:self.program(22, program22, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n            ";
stack1 = helpers['if'].call(depth0, (depth0 && depth0.subtitles), {hash:{},inverse:self.noop,fn:self.program(24, program24, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n            <span class=\"js-tooltip\" data-tooltip=\"volume\">";
if (helper = helpers.locaVolume) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.locaVolume); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "</span>\n            <span class=\"js-tooltip\" data-tooltip=\"fullscreen\">";
if (helper = helpers.locaFullscreen) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.locaFullscreen); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "</span>\n        </div>\n    </div>\n\n    <div class=\"thumbnails\">\n        <div class=\"thumbs-viewport\">\n\n        </div>\n        <span class=\"icon-player-chapter_cursor_black png-bg\"></span>\n    </div>\n\n    ";
stack1 = helpers['if'].call(depth0, (depth0 && depth0.chapters), {hash:{},inverse:self.noop,fn:self.programWithDepth(26, program26, data, depth0),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n</div>\n\n";
stack1 = helpers['if'].call(depth0, ((stack1 = (depth0 && depth0.share)),stack1 == null || stack1 === false ? stack1 : stack1.embed), {hash:{},inverse:self.noop,fn:self.program(31, program31, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n\n";
stack1 = helpers['if'].call(depth0, (depth0 && depth0.subtitles), {hash:{},inverse:self.noop,fn:self.program(33, program33, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n\n<div class=\"icon-close\">\n    <a class=\"icon-player-layer-close png-bg\" href=\"javascript:void(0);\"></a>\n</div>\n\n";
stack1 = helpers['if'].call(depth0, (depth0 && depth0.lte8), {hash:{},inverse:self.noop,fn:self.program(35, program35, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n\n";
stack1 = helpers['if'].call(depth0, (depth0 && depth0.poster), {hash:{},inverse:self.noop,fn:self.program(37, program37, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n\n\n";
return buffer;
});
return this["DiorTpl"];
};
},{}],31:[function(require,module,exports){
module.exports = function(Handlebars) {
this["DiorTpl"] = this["DiorTpl"] || {};
this["DiorTpl"]["fragrance"] = Handlebars.template(function (Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [4,'>= 1.0.0'];
helpers = this.merge(helpers, Handlebars.helpers); data = data || {};
var buffer = "", stack1, helper, options, functionType="function", escapeExpression=this.escapeExpression, self=this, blockHelperMissing=helpers.blockHelperMissing, helperMissing=helpers.helperMissing;
function program1(depth0,data) {
return "hashtag--hidden";
}
function program3(depth0,data) {
var buffer = "", stack1;
buffer += "<h2 class=\"quickbuy-subtitle\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.subtitle)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</h2>";
return buffer;
}
function program5(depth0,data) {
var buffer = "", stack1, helper, options;
buffer += "\n                            <li class=\"dropdown-item ";
options={hash:{},inverse:self.noop,fn:self.program(6, program6, data),data:data}
if (helper = helpers.active) { stack1 = helper.call(depth0, options); }
else { helper = (depth0 && depth0.active); stack1 = typeof helper === functionType ? helper.call(depth0, options) : helper; }
if (!helpers.active) { stack1 = blockHelperMissing.call(depth0, stack1, {hash:{},inverse:self.noop,fn:self.program(6, program6, data),data:data}); }
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += " ";
stack1 = (helper = helpers.ifCond || (depth0 && depth0.ifCond),options={hash:{},inverse:self.noop,fn:self.program(8, program8, data),data:data},helper ? helper.call(depth0, (depth0 && depth0.stockStatus), "!==", "available", options) : helperMissing.call(depth0, "ifCond", (depth0 && depth0.stockStatus), "!==", "available", options));
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\">\n                                <a href=\"#\" class=\"js-dropdown-item js-product-selector js-noclick-track\"\n                                   data-picture-target=\".js-quickbuy-img\"\n                                   data-picture-src=\""
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.assets)),stack1 == null || stack1 === false ? stack1 : stack1.packshot)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\"\n                                   data-exclu=\"";
if (helper = helpers.exclu) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.exclu); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "\"\n                                   data-novelty=\"";
if (helper = helpers.novelty) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.novelty); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "\"\n                                   data-availability=\"";
if (helper = helpers.stockStatus) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.stockStatus); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "\"\n                                   data-sku=\"";
if (helper = helpers.skuCode) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.skuCode); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "\"\n                                   data-track-object='"
+ escapeExpression((helper = helpers.stringify || (depth0 && depth0.stringify),options={hash:{},data:data},helper ? helper.call(depth0, (depth0 && depth0.clickTrackObject), options) : helperMissing.call(depth0, "stringify", (depth0 && depth0.clickTrackObject), options)))
+ "'>\n                                    <span class=\"label js-dropdown-label\">";
if (helper = helpers.optionValue) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.optionValue); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "</span><!--\n                                    --><span class=\"break\"></span><!--\n                                    --><span class=\"value js-dropdown-value\" data-value=\"";
if (helper = helpers.productPriceWithCurrency) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.productPriceWithCurrency); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "\">";
if (helper = helpers.productPriceWithCurrency) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.productPriceWithCurrency); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "</span>\n                                </a>\n                            </li>\n                            ";
return buffer;
}
function program6(depth0,data) {
return "selected";
}
function program8(depth0,data) {
return "item-not-available";
}
function program10(depth0,data,depth1) {
var buffer = "", stack1;
buffer += "<li>";
stack1 = ((stack1 = ((stack1 = (depth1 && depth1.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence1)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1);
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "</li>";
return buffer;
}
function program12(depth0,data,depth1) {
var buffer = "", stack1;
buffer += "<li>";
stack1 = ((stack1 = ((stack1 = (depth1 && depth1.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence2)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1);
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "</li>";
return buffer;
}
function program14(depth0,data,depth1) {
var buffer = "", stack1;
buffer += "<li>";
stack1 = ((stack1 = ((stack1 = (depth1 && depth1.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence3)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1);
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "</li>";
return buffer;
}
function program16(depth0,data,depth1) {
var buffer = "", stack1;
buffer += "<li>";
stack1 = ((stack1 = ((stack1 = (depth1 && depth1.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence4)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1);
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "</li>";
return buffer;
}
function program18(depth0,data,depth1) {
var buffer = "", stack1;
buffer += "<li>";
stack1 = ((stack1 = ((stack1 = (depth1 && depth1.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence5)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1);
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "</li>";
return buffer;
}
buffer += "<div class=\"popin-quickbuy--fragrance\">\n    <h2 class=\"popin-title\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.popinTitle)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</h2>\n    <div class=\"popin-packshot js-equal-height\">\n        <img src=\""
+ escapeExpression(((stack1 = ((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.assets)),stack1 == null || stack1 === false ? stack1 : stack1.packshot)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\" class=\"js-quickbuy-img js-center-vertical png-bg\"/>\n    </div><!--\n    --><div class=\"quickbuy quickbuy--fragrance js-quickbuy js-equal-height js-equal-height-main\">\n    <ul class=\"quickbuy-hashtags js-hashtags\">\n        <li class=\"";
stack1 = helpers.unless.call(depth0, ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.novelty), {hash:{},inverse:self.noop,fn:self.program(1, program1, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += " js-hashtag--novelty\"><a href=\"#\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.hashtagNew)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</a></li>\n        <li class=\"";
stack1 = helpers.unless.call(depth0, ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.exclu), {hash:{},inverse:self.noop,fn:self.program(1, program1, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += " js-hashtag--exclu\"><a href=\"#\" class=\"gold\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.hashtagExclu)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</a></li>\n    </ul>\n    <h1 class=\"quickbuy-title\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.title)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</h1>\n    ";
stack1 = helpers['if'].call(depth0, ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.subtitle), {hash:{},inverse:self.noop,fn:self.program(3, program3, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n    <div class=\"quickbuy-details\">\n        <span class=\"details-price js-dropdown-activeValue\">"
+ escapeExpression(((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.productPriceWithCurrency)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</span>\n    </div><!-- end .quickbuy-details -->\n    <p class=\"quickbuy-description\">"
+ escapeExpression((helper = helpers.truncate || (depth0 && depth0.truncate),options={hash:{},data:data},helper ? helper.call(depth0, ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.description), 170, options) : helperMissing.call(depth0, "truncate", ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.description), 170, options)))
+ "</p>\n    <a href=\""
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.href)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\" class=\"details-link quickbuy-link\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.popinMore)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</a>\n    <div class=\"quickbuy-order\">\n        <div class=\"order-details order-details--available js-order-details\">\n            <div class=\"order-form js-order-form\">\n                <div class=\"order-product-choice\">\n                    <div class=\"order-dropdown mod-dropdown js-dropdown order-value js-order-value js-products-selector\">\n                        <a href=\"#\" class=\"dropdown-trigger js-dropdown-trigger\">\n                            <small class=\"label js-dropdown-activeLabel\">"
+ escapeExpression(((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.optionValue)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</small>\n                            <i class=\"icon dropdown-arrow\"></i>\n                        </a>\n                        <ul class=\"dropdown-list js-dropdown-items\">\n                            ";
stack1 = ((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.skus)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1)),blockHelperMissing.call(depth0, stack1, {hash:{},inverse:self.noop,fn:self.program(5, program5, data),data:data}));
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n                        </ul>\n                    </div>\n                </div>\n                <a href=\"#\" class=\"btn btn-dark btn-order js-order-btn js-addtocart js-noclick-track\"\n                  data-quantity=\"1\"\n                  data-sku=\""
+ escapeExpression(((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.skuCode)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\"\n                  data-track-object='"
+ escapeExpression((helper = helpers.stringify || (depth0 && depth0.stringify),options={hash:{},data:data},helper ? helper.call(depth0, ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.clickTrackObject), options) : helperMissing.call(depth0, "stringify", ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.clickTrackObject), options)))
+ "'>"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.popinOrder)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</a>\n            </div>\n            <ul class=\"order-delivery\">\n                ";
stack1 = ((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence1)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1)),blockHelperMissing.call(depth0, stack1, {hash:{},inverse:self.noop,fn:self.programWithDepth(10, program10, data, depth0),data:data}));
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n                ";
stack1 = ((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence2)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1)),blockHelperMissing.call(depth0, stack1, {hash:{},inverse:self.noop,fn:self.programWithDepth(12, program12, data, depth0),data:data}));
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n                ";
stack1 = ((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence3)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1)),blockHelperMissing.call(depth0, stack1, {hash:{},inverse:self.noop,fn:self.programWithDepth(14, program14, data, depth0),data:data}));
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n                ";
stack1 = ((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence4)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1)),blockHelperMissing.call(depth0, stack1, {hash:{},inverse:self.noop,fn:self.programWithDepth(16, program16, data, depth0),data:data}));
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n                ";
stack1 = ((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence5)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1)),blockHelperMissing.call(depth0, stack1, {hash:{},inverse:self.noop,fn:self.programWithDepth(18, program18, data, depth0),data:data}));
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n            </ul>\n            <div class=\"order-notonline\">\n                <ul><li><a href=\""
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.storeLocatorUrl)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.storeLocator)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</a></li></ul>\n            </div>\n            <div class=\"order-nostock\">\n                <span>"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.popinAvailabilityLabel)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</span>\n                <ul>\n                    <li><a href=\"#\" class=\"js-stockalert-trigger\" data-sku=\""
+ escapeExpression(((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.skuCode)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.alertAvailability)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</a></li>\n                    <li><a href=\""
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.storeLocatorUrl)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.storeLocator)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</a></li>\n                </ul>\n            </div>\n        </div><!-- end .order-details -->\n    </div><!-- end .quickbuy-order -->\n</div><!-- end .quickbuy -->\n</div><!-- end .popin -->\n\n";
return buffer;
});
this["DiorTpl"]["makeup"] = Handlebars.template(function (Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [4,'>= 1.0.0'];
helpers = this.merge(helpers, Handlebars.helpers); data = data || {};
var buffer = "", stack1, helper, options, functionType="function", escapeExpression=this.escapeExpression, self=this, helperMissing=helpers.helperMissing, blockHelperMissing=helpers.blockHelperMissing;
function program1(depth0,data) {
return "hashtag--hidden";
}
function program3(depth0,data) {
var buffer = "", stack1;
buffer += "<h2 class=\"quickbuy-subtitle\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.subtitle)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</h2>";
return buffer;
}
function program5(depth0,data) {
var buffer = "", stack1, helper, options;
buffer += "\n            <li ";
stack1 = helpers['if'].call(depth0, (depth0 && depth0.active), {hash:{},inverse:self.noop,fn:self.program(6, program6, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += ">\n                <a href=\"#\" class=\"js-swatch-hover js-product-selector js-noclick-track\"\n                   data-picture-target=\".js-quickbuy-img\"\n                   data-picture-src=\""
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.assets)),stack1 == null || stack1 === false ? stack1 : stack1.packshot)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\"\n                   data-exclu=\"";
if (helper = helpers.exclu) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.exclu); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "\"\n                   data-novelty=\"";
if (helper = helpers.novelty) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.novelty); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "\"\n                   data-availability=\"";
if (helper = helpers.stockStatus) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.stockStatus); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "\"\n                   data-value=\"";
if (helper = helpers.productPriceWithCurrency) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.productPriceWithCurrency); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "\"\n                   data-sku=\"";
if (helper = helpers.skuCode) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.skuCode); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "\"\n                   data-swatch-name=\"";
if (helper = helpers.optionValue) { stack1 = helper.call(depth0, {hash:{},data:data}); }
else { helper = (depth0 && depth0.optionValue); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
buffer += escapeExpression(stack1)
+ "\"\n                   data-track-object='"
+ escapeExpression((helper = helpers.stringify || (depth0 && depth0.stringify),options={hash:{},data:data},helper ? helper.call(depth0, (depth0 && depth0.clickTrackObject), options) : helperMissing.call(depth0, "stringify", (depth0 && depth0.clickTrackObject), options)))
+ "'>\n                    <img src=\""
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.assets)),stack1 == null || stack1 === false ? stack1 : stack1.swatch)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\" alt=\"\" />\n                </a>\n            </li>\n            ";
return buffer;
}
function program6(depth0,data) {
return "class=\"selected\"";
}
function program8(depth0,data,depth1) {
var buffer = "", stack1;
buffer += "<li>";
stack1 = ((stack1 = ((stack1 = (depth1 && depth1.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence1)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1);
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "</li>";
return buffer;
}
function program10(depth0,data,depth1) {
var buffer = "", stack1;
buffer += "<li>";
stack1 = ((stack1 = ((stack1 = (depth1 && depth1.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence2)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1);
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "</li>";
return buffer;
}
function program12(depth0,data,depth1) {
var buffer = "", stack1;
buffer += "<li>";
stack1 = ((stack1 = ((stack1 = (depth1 && depth1.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence3)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1);
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "</li>";
return buffer;
}
function program14(depth0,data,depth1) {
var buffer = "", stack1;
buffer += "<li>";
stack1 = ((stack1 = ((stack1 = (depth1 && depth1.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence4)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1);
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "</li>";
return buffer;
}
function program16(depth0,data,depth1) {
var buffer = "", stack1;
buffer += "<li>";
stack1 = ((stack1 = ((stack1 = (depth1 && depth1.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence5)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1);
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "</li>";
return buffer;
}
buffer += "<div class=\"popin-quickbuy--makeup\">\n    <h2 class=\"popin-title\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.popinTitle)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</h2>\n    <div class=\"popin-packshot js-equal-height\">\n        <img src=\""
+ escapeExpression(((stack1 = ((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.assets)),stack1 == null || stack1 === false ? stack1 : stack1.packshot)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\" class=\"js-quickbuy-img js-center-vertical png-bg\"/>\n    </div><!--\n    --><div class=\"quickbuy quickbuy--makeup js-quickbuy js-equal-height js-equal-height-main\">\n    <ul class=\"quickbuy-hashtags js-hashtags\">\n        <li class=\"";
stack1 = helpers.unless.call(depth0, ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.novelty), {hash:{},inverse:self.noop,fn:self.program(1, program1, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += " js-hashtag--novelty\"><a href=\"#\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.hashtagNew)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</a></li>\n        <li class=\"";
stack1 = helpers.unless.call(depth0, ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.exclu), {hash:{},inverse:self.noop,fn:self.program(1, program1, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += " js-hashtag--exclu\"><a href=\"#\" class=\"gold\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.hashtagExclu)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</a></li>\n    </ul>\n    <h1 class=\"quickbuy-title\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.title)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</h1>\n    ";
stack1 = helpers['if'].call(depth0, ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.subtitle), {hash:{},inverse:self.noop,fn:self.program(3, program3, data),data:data});
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n    <div class=\"quickbuy-details\">\n        <span class=\"details-price\">"
+ escapeExpression(((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.productPriceWithCurrency)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</span>\n    </div><!-- end .quickbuy-details -->\n    <p class=\"quickbuy-description\">"
+ escapeExpression((helper = helpers.truncate || (depth0 && depth0.truncate),options={hash:{},data:data},helper ? helper.call(depth0, ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.description), 170, options) : helperMissing.call(depth0, "truncate", ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.description), 170, options)))
+ "</p>\n    <a href=\""
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.href)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\" class=\"details-link quickbuy-link\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.popinMore)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</a>\n    <div class=\"quickbuy-swatches\">\n        <div class=\"swatches-header\">\n            <span class=\"swatch-name js-swatch-name\">121 - LILI</span>\n        </div>\n        <ul class=\"swatches-list js-products-selector\" data-hover-target=\".js-swatch-name\">\n            ";
stack1 = (helper = helpers.foreach || (depth0 && depth0.foreach),options={hash:{},inverse:self.noop,fn:self.program(5, program5, data),data:data},helper ? helper.call(depth0, ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.skus), options) : helperMissing.call(depth0, "foreach", ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.skus), options));
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n            </ul>\n        </div>\n        <div class=\"quickbuy-order\">\n            <div class=\"order-details order-details--available js-order-details\">\n                <div class=\"order-form js-order-form\">\n                    <a href=\"#\" class=\"btn btn-dark btn-order js-order-btn js-addtocart js-noclick-track\"\n                      data-quantity=\"1\"\n                      data-sku=\""
+ escapeExpression(((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.skuCode)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\"\n                      data-track-object='"
+ escapeExpression((helper = helpers.stringify || (depth0 && depth0.stringify),options={hash:{},data:data},helper ? helper.call(depth0, ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.clickTrackObject), options) : helperMissing.call(depth0, "stringify", ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.clickTrackObject), options)))
+ "'>"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.popinOrder)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</a>\n                </div>\n                <ul class=\"order-delivery\">\n                    ";
stack1 = ((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence1)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1)),blockHelperMissing.call(depth0, stack1, {hash:{},inverse:self.noop,fn:self.programWithDepth(8, program8, data, depth0),data:data}));
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n                    ";
stack1 = ((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence2)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1)),blockHelperMissing.call(depth0, stack1, {hash:{},inverse:self.noop,fn:self.programWithDepth(10, program10, data, depth0),data:data}));
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n                    ";
stack1 = ((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence3)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1)),blockHelperMissing.call(depth0, stack1, {hash:{},inverse:self.noop,fn:self.programWithDepth(12, program12, data, depth0),data:data}));
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n                    ";
stack1 = ((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence4)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1)),blockHelperMissing.call(depth0, stack1, {hash:{},inverse:self.noop,fn:self.programWithDepth(14, program14, data, depth0),data:data}));
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n                    ";
stack1 = ((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.sentence5)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1)),blockHelperMissing.call(depth0, stack1, {hash:{},inverse:self.noop,fn:self.programWithDepth(16, program16, data, depth0),data:data}));
if(stack1 || stack1 === 0) { buffer += stack1; }
buffer += "\n                </ul>\n                <div class=\"order-notonline\">\n                    <ul><li><a href=\""
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.storeLocatorUrl)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.storeLocator)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</a></li></ul>\n                </div>\n                <div class=\"order-nostock\">\n                    <span>"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.popinAvailabilityLabel)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</span>\n                    <ul>\n                        <li><a href=\"#\" class=\"js-stockalert-trigger\" data-sku=\""
+ escapeExpression(((stack1 = ((stack1 = ((stack1 = (depth0 && depth0.product)),stack1 == null || stack1 === false ? stack1 : stack1.selected)),stack1 == null || stack1 === false ? stack1 : stack1.skuCode)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.alertAvailability)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</a></li>\n                        <li><a href=\""
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.storeLocatorUrl)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "\">"
+ escapeExpression(((stack1 = ((stack1 = (depth0 && depth0.wording)),stack1 == null || stack1 === false ? stack1 : stack1.storeLocator)),typeof stack1 === functionType ? stack1.apply(depth0) : stack1))
+ "</a></li>\n                    </ul>\n                </div>\n            </div>\n        </div><!-- end .quickbuy-order -->\n    </div><!-- end .quickbuy -->\n</div>\n";
return buffer;
});
return this["DiorTpl"];
};
},{}]},{},[1]);
(function( core ) {
core.ready = false;
core.loaded = false;
core.v6 = true;
core.ie = false;
core.ie6 = false;
core.ie7 = false;
core.ie8 = false;
core.ie9 = false;
core.lte7 = false;
core.lte8 = false;
core.lte9 = false;
core.ko = false;
core.isTactile = false;
core.tablet = false;
core.android = false;
core.ipad = false;
core.ios7 = false;
core.cdc = 'CDC';
core.pcd = 'PCD';
core.universe = core.cdc; //Smile
core.orientationDelay = 50;
core.orientationTimer = null;
core.landscape = true;
core.browserName = null;
core.browserVersion = null;
core.scrollSignal = null;
core.popinSignal = null;
core.onTransitionEnd = null;
core.$advantages = $(document.getElementById('advantagesContent'));
core.$header     = $(document.getElementById('dior-header'));
core.$footer     = $(document.getElementById('dior-footer'));
core.$container  = $(document.getElementById('container'));
core.$subNav     = $('.js-header-subnav');
core.windowWidth = 0;
core.windowHeight = 0;
core.breakpoints = {
xLarge: 1600,
large: 1440,
small: 1024,
isLarge: false,
isSmall: false,
isTablet: false
};
core.windowWidth = core.windowHeight = 0;
core.imgPreloader = null;
core.imgLoadedClass = "img--loaded";
core.baseURL = function(){
var pathArray = location.href.split( '/' );
var protocol = pathArray[0];
var host = pathArray[2];
return protocol + '//' + host;
},
core.getLang = function(){
var _reg = /\/[^\/]*([A-Za-z]{2}_[A-Za-z]{2,3})\//g;
var arr = _reg.exec(window.location.href);
if (arr) {
return arr[1];
} else {
var _queryOptions = core.getQuery();
if (_queryOptions.hasOwnProperty('lang')) {
return _queryOptions.lang;
} else {
return 'fr_fr';
}
}
},
core.getBrowserName = function() {
if (!core.browserName) {
var N=navigator.appName, ua=navigator.userAgent, tem;
var M=ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];
M=M? [M[1], M[2]]: [N, navigator.appVersion, '-?'];
core.browserName = M[0];
}
return core.browserName;
},
core.getBrowserVersion = function () {
if (!core.browserVersion) {
var N=navigator.appName, ua=navigator.userAgent, tem;
var M=ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];
M = M ? [M[1], M[2]]: [N, navigator.appVersion, '-?'];
core.browserVersion = M[1];
}
return core.browserVersion;
},
core.getBrowserMajorVersion = function () {
return core.getBrowserVersion().split('.')[0];
},
core.hyphenate = function( str ) {
if (str) return str.replace(/([A-Z])/g, function(str,m1){ return '-' + m1.toLowerCase(); }).replace(/^ms-/,'-ms-');
else return;
},
core.init = function()
{
core.scrollSignal = new signals.Signal();
if (!core.lte7) {
core.$container.find('img').onImagesLoaded(core.imagesLoaded.bind(this));
} else {
core.imagesLoaded();
}
$(window).on('scroll', function(){
core.scrollSignal.dispatch('document::onScroll');
});
var _html = document.getElementsByTagName('html')[0];
if (_html.className.match(/ie/)) {
core.ie = true;
if (_html.className.match(/ie6/)) {
core.ie6 = true;
core.lte7 = true;
core.lte8 = true;
core.lte9 = true;
}
else if (_html.className.match(/ie7/)) {
core.ie7 = true;
core.lte7 = true;
core.lte8 = true;
core.lte9 = true;
}
else if (_html.className.match(/ie8/)) {
core.ie8 = true;
core.lte8 = true;
core.lte9 = true;
}
else if (_html.className.match(/ie9/)) {
core.ie9 = true;
core.lte9 = true;
}
}
var transEndEventNames = {
'WebkitTransition' : 'webkitTransitionEnd',// Saf 6, Android Browser
'MozTransition'    : 'transitionend',      // only for FF < 15
'transition'       : 'transitionend'       // IE10, Opera, Chrome, FF 15+, Saf 7+
};
core.onTransitionEnd = transEndEventNames[ Modernizr.prefixed('transition') ];
if ( /Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile|webOS/i.test(navigator.userAgent) ) { // If on Mobile/Tablet
core.isTactile = true;
if (/Android/i.test(navigator.userAgent)) {
core.android = true;
core.orientationDelay = 350;
}
else if (/(iPod|iPhone|iPad)/.test(navigator.userAgent)) {
core.ipad = true;
core.orientationDelay = 250;
if (/OS 7/.test(navigator.userAgent)) core.ios7 = true;
if (/(iPod|iPhone)/.test(navigator.userAgent)) {
core.iphone = true;
}
}
$('html').addClass('tablet');
core.Orientation = new signals.Signal();
window.onorientationchange = core.onOrientationChanged;
core.onOrientationChanged();
}
if( /Android|iPad/i.test(navigator.userAgent))
{
$('body').removeClass('noTouch');
core.tablet = true;
}
if( navigator.userAgent.indexOf('SamsungBrowser') > -1 ) {
$('html').addClass('android-samsung');
}
core.onResize();
$(window).on('resize', core.onResize);
if (modules.header && modules.header.init) modules.header.init();
if (modules.footer && modules.footer.init) modules.footer.init();
modules.Forms.init();
fontSpy('diorcom-icons', {
glyphs: '\ue601\ue607\ue606',
success: function() {
$(document.body).removeClass('loading');
core.signals.global.dispatch('document::fontloaded', 'diorcom-icons');
},
failure: function() {
$(document.body).removeClass('loading');
core.signals.global.dispatch('document::fontloaded', 'diorcom-icons');
},
delay: 15,
timeOut: 1000
});
fontSpy('CenturyGothic-Regular', {
glyphs: 'dior com vapo. : 100ml',
success: function() {
core.signals.global.dispatch('document::fontloaded', 'CenturyGothic-Regular');
},
failure: function() {
core.signals.global.dispatch('document::fontloaded', 'CenturyGothic-Regular');
},
delay: 15,
timeOut: 1000
});
if (core.isTactile) {
$(document).on('touchstart',function(event) {
core.signals.global.dispatch('document::click', event);
});
} else {
$(document).on('click',function(event) {
core.signals.global.dispatch('document::click', event);
});
}
common.init();
$.support.cors = true;
core.initPage();
},
core.onOrientationChanged = function(e) {
clearTimeout(core.orientationTimer);
core.orientationTimer = setTimeout(core.checkOrientation, core.orientationDelay);
},
core.checkOrientation = function() {
if ( (core.ipad && window.orientation && Math.abs(window.orientation) === 90) ||
(core.ipad && !window.orientation && screen.width > screen.height) ||
(!core.ipad && screen.width > screen.height) ) {
if (!core.landscape) {
core.landscape = true;
core.Orientation.dispatch('landscape');
}
} else {
if (core.landscape) {
core.landscape = false;
core.Orientation.dispatch('portrait');
}
}
},
core.initSignals = function() {
core.signals = {};
core.signals.dropUp = new signals.Signal();
core.signals.header = new signals.Signal();
core.signals.ajaxResponse = new signals.Signal();
core.signals.popinSignal = new signals.Signal();
core.signals.eco = new signals.Signal();
core.signals.global = new signals.Signal();
},
core.imagesLoaded = function() {
core.$container.find('img').addClass(core.imgLoadedClass);
if ($('.js-auto-scroll-to-anchor').length) core.scrollToAnchor($('.js-auto-scroll-to-anchor').attr('data-hash'));
else core.scrollToAnchor();
},
core.scrollToAnchor = function( specificAnchor ) {
var anchor = specificAnchor ? specificAnchor : location.hash.split('#')[1];
if (!anchor) {
var queryString = /\?anchor=([\w-]*)/.exec(location);
if (queryString) anchor = queryString[1];
}
if (anchor) {
if (anchor.indexOf('roll--') != -1) {
var _rollName = anchor.replace('roll--', '');
var _$link = $('.js-header-bar a[data-targetroll="'+_rollName+'"]');
if (_$link.length == 0) {
if (_rollName.indexOf('account')!=-1) {
_$link = $('.js-header-bar a[data-targetroll="accountRoll"]');
_$link.attr('data-targetroll', _rollName);
} else {
return;
}
}
if (modules.header && modules.header.rolls) {
modules.header.rolls.toggle(
$('#'+_rollName),
_$link
);
}
}
else if ($('[data-hash]').length > 0 && $('[data-hash="' + anchor + '"]').length > 0) {
var topPos = 0,
anchorGap = 20;
topPos = $('[data-hash="' + anchor + '"]').offset().top - anchorGap;
$('html, body').stop().animate({scrollTop: topPos}, 'slow').promise().then(function() {
core.signals.global.dispatch('scrollToAnchor::scrolled',anchor);
});
} else if (anchor.indexOf('video-') > -1) {
var $btn = $('#' + anchor.replace('video-', ''));
if ($btn.length>0) {
var json = $btn.data('options');
json.autoPlay = true;
$btn.data('options', json);
common.fsPlayer.getInstance().loadVideo($btn);
} else {
throw new Error('[Anchor] missing target element');
}
}
}
},
core.onResize = function() {
if (core.windowHeight == $(window).height() && core.windowWidth == $(window).width())
return;
var $body = $('body'),
windowWidth = $(window).width(),
windowHeight = core.ios7 ? window.innerHeight : $(window).height(),
windowRatio = windowWidth / windowHeight,
itemRatio = 0;
if (core.windowWidth == windowWidth && core.windowHeight == windowHeight)
return;
if (windowWidth > core.breakpoints.xLarge) { // >= 1600
if(core.lte8) {
$body.removeClass('breakpoint-tablet breakpoint-small').addClass('breakpoint-x-large breakpoint-large');
}
core.breakpoints.isLarge = false;
core.breakpoints.isSmall = false;
core.breakpoints.isTablet = false;
}
else if (windowWidth > core.breakpoints.large && windowWidth < core.breakpoints.xLarge) { //1400 >= wW < 1600
if(core.lte8) {
$body.removeClass('breakpoint-tablet breakpoint-small breakpoint-x-large').addClass('breakpoint-large');
}
core.breakpoints.isLarge = true;
core.breakpoints.isSmall = false;
core.breakpoints.isTablet = false;
}
else if (windowWidth <= core.breakpoints.large && windowWidth > core.breakpoints.small) { // 1024 >= wW < 1400
if(core.lte8) {
$body.removeClass('breakpoint-tablet breakpoint-large breakpoint-x-large').addClass('breakpoint-small');
}
core.breakpoints.isLarge = false;
core.breakpoints.isSmall = true;
core.breakpoints.isTablet = false;
}
else if (windowWidth <= core.breakpoints.small) {
if(core.lte8) {
$body.removeClass('breakpoint-small breakpoint-large breakpoint-x-large').addClass('breakpoint-tablet');
}
core.breakpoints.isLarge = false;
core.breakpoints.isSmall = false;
core.breakpoints.isTablet = true;
}
core.windowWidth = windowWidth;
core.windowHeight = windowHeight;
clearTimeout( core.resizeTimeout );
core.resizeTimeout = setTimeout( core.pageResize, 30 );
},
core.pageResize = function() {
var _pageClass = core.$container.data('page');
if (_pageClass) {
pages[_pageClass].onResize();
}
if (core.lte7 ) { $('body').toggleClass('repaint'); }
},
core.initPage = function() {
core.ready = true;
core.pageClass = core.$container.data('page');
if (core.pageClass) {
pages[core.pageClass].init();
if (core.loaded) {
if (pages[core.pageClass].pageReady) pages[core.pageClass].pageReady();
core.pageReady();
}
} else {
core.pageReady();
}
},
core.pageReady = function()
{
document.body.style.overflow = '';
document.body.scroll = 'yes';
hasher.changed.add( core.scrollToAnchor );
$('.js-anchor').on('click', function() {
core.scrollToAnchor($(this).attr('href').replace('#',''));
});
hasher.init();
$(window).trigger('resize');
},
core.getQuery = function(param) {
var query_string    = {};
var query           = window.location.search.substring(1);
var vars            = query.split("&");
var varsLength      = vars.length;
for (var i = 0; i < varsLength; i++) {
var pair = vars[i].split("=");
if (typeof query_string[pair[0]] === "undefined") { // If first entry with this name
query_string[pair[0]] = decodeURIComponent(pair[1]);
} else if (typeof query_string[pair[0]] === "string") { // If second entry with this name
var arr = [ query_string[pair[0]],decodeURIComponent(pair[1]) ];
query_string[pair[0]] = arr;
} else { // If third or later entry with this name
query_string[pair[0]].push(decodeURIComponent(pair[1]));
}
}
return param ? query_string[param] : query_string;
},
core.consoleIE = function(log){
if (core.lte8) {
function print_r(printthis) {
var output = '';
if ($.isArray(printthis) || typeof(printthis) == 'object') {
for(var i in printthis) {
output += i + ' : ' + print_r(printthis[i], true) + '\n';
}
} else {
output += printthis;
}
return output;
}
if (!$('#consoleIE').length) {
$('body').append('<div id="consoleIE"><div id="consoleIE-inner"></div></div>');
$('#consoleIE').css({
'background-color': 'white',
'position': 'fixed',
'bottom': 0,
'right': 0,
'height': '150px',
'width': '100%',
'z-index': 50,
'border-top': '1px solid black',
'border-left': '1px solid black'
});
$('#consoleIE-inner').css({
'padding': '20px',
'overflow-y': 'scroll',
'height': '100%'
});
$('body').css('position', 'relative');
}
if (typeof log === 'object' || typeof log === 'array')
log = print_r(log);
log = '<p>' + log + '</p>';
$('#consoleIE-inner').append(log);
$('#consoleIE p').css({
'line-height': '18px',
'padding-bottom': '6px',
'margin-bottom': '6px',
'border-bottom': '1px solid lightgrey'
});
}
},
core.whichTransitionEvent = function(){
var t;
var el = document.createElement('fakeelement');
var transitions = {
'transition':'transitionend',
'OTransition':'oTransitionEnd',
'MozTransition':'transitionend',
'WebkitTransition':'webkitTransitionEnd'
}
for(t in transitions){
if( el.style[t] !== undefined ){
return transitions[t];
}
}
return false;
};
core.initSignals();
$(document).ready( core.init );
$(window).on('load', function() {
core.loaded = true;
if (core.ready) {
if (core.pageClass && pages[core.pageClass].onPageReady) {
pages[core.pageClass].onPageReady();
}
core.pageReady();
}
});
})( window.core = window.core || {} );
if (!Array.prototype.indexOf) {
Array.prototype.indexOf = function(elt) {
var len = this.length >>> 0;
var from = Number(arguments[1]) || 0;
from = (from < 0) ? Math.ceil(from) : Math.floor(from);
if (from < 0) from += len;
for (; from < len; ++from) {
if (from in this &&
this[from] === elt)
return from;
}
return -1;
};
}
if (!Array.prototype.chunk) {
Array.prototype.chunk = function(len) {
var chunks  = [];
var i       = 0;
var n       = this.length;
while (i < n) {
chunks.push(this.slice(i, i += len));
}
return chunks;
};
}
Object.size = function(obj) {
var size = 0, key;
for (key in obj) {
if (obj.hasOwnProperty(key)) size++;
}
return size;
};
String.prototype.replaceAll = function(str1, str2, ignore) {
return this.replace(new RegExp(str1.replace(/([\/\,\!\\\^\$\{\}\[\]\(\)\.\*\+\?\|\<\>\-\&])/g,"\\$&"),(ignore?"gi":"g")),(typeof(str2)=="string")?str2.replace(/\$/g,"$$$$"):str2);
};
if (!Array.prototype.forEach) {
Array.prototype.forEach = function(callback, thisArg) {
if(typeof(callback) !== "function") {
throw new TypeError(callback + " is not a function!");
}
var len = this.length;
for(var i = 0; i < len; i++) {
callback.call(thisArg, this[i], i, this)
}
};
}
if (!Function.prototype.bind) {
Function.prototype.bind = function (oThis) {
if (typeof this !== "function") {
throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");
}
var aArgs = Array.prototype.slice.call(arguments, 1),
fToBind = this,
fNOP = function () {
},
fBound = function () {
return fToBind.apply(this instanceof fNOP && oThis ? this : oThis, aArgs.concat(Array.prototype.slice.call(arguments)));
};
fNOP.prototype = this.prototype;
fBound.prototype = new fNOP();
return fBound;
};
}
(function( core ) {
core.tracking = {
init : function () {
var _this = this;
var _eventAction ;
var _eventLabel;
var _page;
$(document).on('click','.js-track', function(){
_eventAction = $(this).attr('data-eventaction');
_eventLabel = $(this).attr('data-eventlabel');
_page = $(this).attr('data-tpv');
if (_eventAction && _eventLabel) _this.trackEvent(_eventAction,_eventLabel);
if (_page) _this.trackPageView(_page);
});
$(document).on("click","*[data-track-object]", function(e) {
if (!$(this).hasClass("js-noclick-track") && $(this).attr('data-track-object') !== "") {
_this.trackObject($(this).attr('data-track-object'));
}
if ($(this).hasClass("js-stop-propagation")) {
e.stopPropagation();
}
});
$(document).on("click","*[data-product-track-object]", function(e) {
if (!$(this).hasClass("js-noclick-track") && $(this).attr('data-product-track-object') !== "") {
_this.trackProductClick( $(this).attr('data-product-track-object') );
}
if ($(this).hasClass("js-stop-propagation")) {
e.stopPropagation();
}
});
},
trackEvent: function(action, label) {
if (!core.tracking.trackPage) {
if (window.dataLayer && dataLayer.length) {
core.tracking.trackPage = dataLayer[0].pageType;
} else {
core.tracking.trackPage = core.trackName + '_' + core.universe + '_' + $('#container').attr('data-page');
}
}
dataLayer.push( {'event':'trackEvent', 'eventCategory': core.tracking.trackPage, 'eventAction': action, 'eventLabel': label} );
},
trackPageView: function(url) {
dataLayer.push( {
'event': 'tpv',
'pageVirtualPath': url.charAt(0) != '/' ? '/' + url : url
});
},
trackObject: function(trackObject){
var trackObjects = $.parseJSON(trackObject.replace(/(\&apos\;)/g, '\''));
if (!$.isEmptyObject(trackObjects)) {
if ($.isArray(trackObjects)) {
for (var key in trackObjects) {
dataLayer.push(trackObjects[key]);
}
}
else if ($.isPlainObject(trackObjects)) {
dataLayer.push(trackObjects);
}
}
},
trackProductClick: function(trackObject) {
var trackObjects = $.parseJSON(trackObject.replace(/(\&apos\;)/g, '\''));
if (!$.isEmptyObject(trackObjects)) {
if ($.isArray(trackObjects)) {
for (var key in trackObjects) {
trackObjects[key].ecommerce.click.actionField.list = dataLayer[0].pageType;
dataLayer.push(trackObjects[key]);
}
}
else if ($.isPlainObject(trackObjects)) {
trackObjects.ecommerce.click.actionField.list = dataLayer[0].pageType;
dataLayer.push(trackObjects);
}
}
}
};
core.tracking.init();
})( window.core = window.core || {} );
(function( core ) {
core.CookieConfig = {
updateSiteAccess: function (siteaccess) {
var date = new Date();
date.setTime(date.getTime() + 365 * 24 * 60 * 60 * 1000);
document.cookie = "siteaccess=" + siteaccess + "; domain=" + cookieDomain + "; expires=" + date.toGMTString() + "; path=/";
}
};
})( window.core = window.core || {} );
function isFirstVisit(version) {
console.log(version);
var cookie = document.cookie.split(';');
var korean = false;
for (var i = 0; i < cookie.length; i++) {
var c = cookie[i];
if (c.indexOf('alreadyVisit') >= 0) return;
if (c.indexOf('ko_kr') >= 0) korean = true;
}
if(!korean) return;
document.cookie = 'alreadyVisit';
if(version == "v5") {
var popVisit = new modules.Popin({
height: 250,
width: 500,
disposition: 'center',
content: $('#popinFirstVisit'),
returnUrl: this.href
});
$('.popinContent').show();
popVisit.Display();
} else if (version == "v6") {
var popVisit = new pages.fp.Popin({});
popVisit.Display();
$('.popinContent').show();
}
}
if($('.cover') != undefined && $('.cover').hasClass('fp-strate-cover')) {
var win = $('.fp-strate-cover');
var area = $('.center');
$('.center').css({
position: 'absolute',
top: (win.height() - area.outerHeight()) / 2
});
$(window).resize(function () {
var win = $('.fp-strate-cover');
var area = $('.center');
$('.center').css({
position: 'absolute',
top: (win.height() - area.outerHeight()) / 2
});
});
}
if($( ".js-collectionalert-trigger" )) {
function openCollectionAlert(e) {
popCollectionAlert.open();
}
}
function formValidator() {
var $this = $(this);
var $input = $this.find('input');
var valid = false;
var errorMessage = "";
$input.each(function () {
var $elem = $(this);
var regex = $elem.data('regex');
if ($elem.val().trim() === "") {
$valid = false;
$errorMessage = $elem.data('empty');
} else if ($elem.val().match(regex)) {
$valid = true;
$errorMessage = "";
} else {
$valid = false;
$errorMessage = $elem.data('error')
}
});
var $errorContainer = $this.find('.form-field-error ');
if (!valid) {
$this.removeClass('has-success');
$this.addClass('has-error');
$errorContainer.text($errorMessage);
} else {
$this.removeClass('has-error');
$this.addClass('has-success');
$errorContainer.text($errorMessage);
}
}
function eventSmile() {
$('.form-field-multiple').on('keydown', formValidator);
$('.form-field-multiple').focusin(formValidator);
$('.form-field-multiple').focusout(formValidator);
$('.form-field-multiple').focus(formValidator);
}
function removeEventHE() {
$('.form-field-multiple').unbind();
$('.form-field-multiple input').unbind();
eventSmile();
}
