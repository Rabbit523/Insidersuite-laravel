
(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
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
},{}],2:[function(require,module,exports){
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
},{}],3:[function(require,module,exports){
(function( pages, window ) {
'use strict';
pages.contact = {
equalHeight:    require('../modules/equalHeight.js'),
Popin:          require('../modules/popins/Popin.js'),
preloader:      null,
pending: false,
init: function() {
var _this = this;
if ($('#container').hasClass('contact-dispatch')) {
core.tracking.trackPage = "Contact_Dispatch";
} else {
core.tracking.trackPage = "Contact";
}
pages.contact.onResize();
$('.js-form-call-country').on('change', function() {
var $selected = $(this).find(':selected');
$.each($selected[0].attributes, function() {
if (this.specified) {
var index = this.name.split('-')[2];
_this.onCountrySelectChange(index, this.value);
}
});
core.tracking.trackEvent( "Click to call", $selected.val() );
});
$('#form-mail-object').on('change', function() {
core.tracking.trackEvent( "Contact Form Object", $(this).val() );
});
this.contactPopin = new this.Popin({
$popin:   $('.js-popin-contact'),
$open:    $('.js-trigger-validate-form')
});
var $form = $('.js-form-send-mail');
$form.on('submit', function(e) {
e.preventDefault();
if(utils.FormValidator.validForm($form, $form.find('.js-form-error')) && !pages.contact.pending) {
pages.contact.pending = true;
$.ajax({
url: core.AjaxConfig.Contact.url,
type: core.AjaxConfig.Contact.method,
data: $form.serialize(),
success: function(data) {
if (data.status === "ok")  {
_this.contactPopin.open();
$form[0].reset();
$form.find('select').each( function() {
$(this).data('customSelect').refresh();
});
$form.find('.js-limited-field').trigger('input');
if (data.trackingContact) {
dataLayer.push( data.trackingContact );
}
}
else {
$('.js-form-error').html("<li>"+data.errorMessages.join('<br/>')+"</li>").show();
for (var i= 0, j = data.errorFields.length; i<j; ++i) {
$("#"+data.errorFields[i]).addClass('error');
}
}
},
complete: function() {
pages.contact.pending = false;
}
});
}
});
this.$textarea = $('.js-limited-field');
this.$charCount = $('.js-char-count');
this.$textarea.limitedField( parseInt( this.$textarea.attr('data-char-limit') ), function(val,limit) {
_this.$charCount.text(val+" / "+limit);
});
var _codeLang = core.getLang();
if (!_codeLang) {
console.warn('[ContactForm]: no lang in url. So for debug only, assume we are in \'fr_fr\'');
_codeLang = 'fr_fr';
}
var _lang = _codeLang.indexOf('_') > -1 ? _codeLang.split('_')[1] : _codeLang;
var _selectLang = $form.find('.js-select');
_selectLang.each( function() {
var _customSelect = $(this).data('customSelect');
if (_customSelect) {
var _option = $(this).find('option[data-lang="'+_codeLang+'"], option[data-lang="'+_lang+'"]');
if (_option.length) _customSelect.selectIndex( _option.index() );
else {
console.warn('[ContactForm]: no option corresponding to current lang: '+_lang);
}
} else {
console.warn("[ContactForm]: missing customSelect on country.");
}
});
pages.contact.tracking.init();
},
onCountrySelectChange: function(index, value){
var $selector = $('.js-phone-number-' + index);
if ($selector.length > 0)
$selector.text(value).parent().removeClass('invisible');
},
imagesLoaded: function(){
pages.contact.onResize();
},
onResize: function() {
this.equalHeight.equalize('.js-row');
this.equalHeight.equalize('.js-row','.js-equal-text');
},
onOrientationChanged: function() {
},
tracking : {
init : function () {
}
}
};
})( window.pages = window.pages || {}, window );
},{"../modules/equalHeight.js":1,"../modules/popins/Popin.js":2}]},{},[3]);
