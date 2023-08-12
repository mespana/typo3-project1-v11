
/*!
 * JavaScript Cookie v2.2.1
 * https://github.com/js-cookie/js-cookie
 *
 * Copyright 2006, 2015 Klaus Hartl & Fagner Brack
 * Released under the MIT license
 */
;(function (factory) {
	var registeredInModuleLoader;
	if (typeof define === 'function' && define.amd) {
		define(factory);
		registeredInModuleLoader = true;
	}
	if (typeof exports === 'object') {
		module.exports = factory();
		registeredInModuleLoader = true;
	}
	if (!registeredInModuleLoader) {
		var OldCookies = window.Cookies;
		var api = window.Cookies = factory();
		api.noConflict = function () {
			window.Cookies = OldCookies;
			return api;
		};
	}
}(function () {
	function extend () {
		var i = 0;
		var result = {};
		for (; i < arguments.length; i++) {
			var attributes = arguments[ i ];
			for (var key in attributes) {
				result[key] = attributes[key];
			}
		}
		return result;
	}

	function decode (s) {
		return s.replace(/(%[0-9A-Z]{2})+/g, decodeURIComponent);
	}

	function init (converter) {
		function api() {}

		function set (key, value, attributes) {
			if (typeof document === 'undefined') {
				return;
			}

			attributes = extend({
				path: '/'
			}, api.defaults, attributes);

			if (typeof attributes.expires === 'number') {
				attributes.expires = new Date(new Date() * 1 + attributes.expires * 864e+5);
			}

			// We're using "expires" because "max-age" is not supported by IE
			attributes.expires = attributes.expires ? attributes.expires.toUTCString() : '';

			try {
				var result = JSON.stringify(value);
				if (/^[\{\[]/.test(result)) {
					value = result;
				}
			} catch (e) {}

			value = converter.write ?
				converter.write(value, key) :
				encodeURIComponent(String(value))
					.replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent);

			key = encodeURIComponent(String(key))
				.replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent)
				.replace(/[\(\)]/g, escape);

			var stringifiedAttributes = '';
			for (var attributeName in attributes) {
				if (!attributes[attributeName]) {
					continue;
				}
				stringifiedAttributes += '; ' + attributeName;
				if (attributes[attributeName] === true) {
					continue;
				}

				// Considers RFC 6265 section 5.2:
				// ...
				// 3.  If the remaining unparsed-attributes contains a %x3B (";")
				//     character:
				// Consume the characters of the unparsed-attributes up to,
				// not including, the first %x3B (";") character.
				// ...
				stringifiedAttributes += '=' + attributes[attributeName].split(';')[0];
			}

			return (document.cookie = key + '=' + value + stringifiedAttributes);
		}

		function get (key, json) {
			if (typeof document === 'undefined') {
				return;
			}

			var jar = {};
			// To prevent the for loop in the first place assign an empty array
			// in case there are no cookies at all.
			var cookies = document.cookie ? document.cookie.split('; ') : [];
			var i = 0;

			for (; i < cookies.length; i++) {
				var parts = cookies[i].split('=');
				var cookie = parts.slice(1).join('=');

				if (!json && cookie.charAt(0) === '"') {
					cookie = cookie.slice(1, -1);
				}

				try {
					var name = decode(parts[0]);
					cookie = (converter.read || converter)(cookie, name) ||
						decode(cookie);

					if (json) {
						try {
							cookie = JSON.parse(cookie);
						} catch (e) {}
					}

					jar[name] = cookie;

					if (key === name) {
						break;
					}
				} catch (e) {}
			}

			return key ? jar[key] : jar;
		}

		api.set = set;
		api.get = function (key) {
			return get(key, false /* read as raw */);
		};
		api.getJSON = function (key) {
			return get(key, true /* read as json */);
		};
		api.remove = function (key, attributes) {
			set(key, '', extend(attributes, {
				expires: -1
			}));
		};

		api.defaults = {};

		api.withConverter = init;

		return api;
	}

	return init(function () {});
}));

var cookieman=function(){"use strict";var e="CookieConsent",t=document.querySelector("[data-cookieman-form]"),n=document.querySelector("[data-cookieman-settings]"),o=n,r=JSON.parse(n.dataset.cookiemanSettings),i=t.querySelectorAll("[type=checkbox][name]"),c=document.querySelectorAll("[data-cookieman-save]"),a=document.querySelectorAll("[data-cookieman-accept-all]"),s=document.querySelectorAll("[data-cookieman-accept-none]"),u=[],l={};function d(){for(var t=[],n=0;n<i.length;n++)i[n].checked&&t.push(i[n].name);Cookies.set(e,t.join("|"),{expires:365,sameSite:"lax"})}function f(e,t){e.checked=t}function v(){for(var e=0;e<i.length;e++){var t=i[e];t.disabled||f(t,!1)}}function m(e){for(var t=h(),n=0;n<t.length;n++)if(t[n]===e)return!0;return!1}function p(){var t=Cookies.get(e);return t?t.split("|"):[]}function h(){return p().filter((function(e){var t=r.groups[e];return void 0!==t&&(!t.respectDnt||"1"!==window.navigator.doNotTrack)}))}function k(e){e.preventDefault(),d(),cookieman.hide(),function(){for(var e in r.groups)if(Object.prototype.hasOwnProperty.call(r.groups,e)&&!m(e))for(var t=r.groups[e],n=0;n<t.trackingObjects.length;n++){var o=t.trackingObjects[n];y(o,r.trackingObjects[o])}}(),w()}function g(e){e.preventDefault(),function(){for(var e=0;e<i.length;e++)f(i[e],!0)}()}function b(e){e.preventDefault(),v()}function O(e,t){if(void 0!==t){if(void 0!==t.inject){var n,o=document.createElement("div");o.innerHTML=t.inject;for(var r=0,i=0;i<o.children.length;i++){var c=o.children[i];if("SCRIPT"===c.tagName){(n=document.createElement("script")).textContent=c.textContent;for(var a=0;a<c.attributes.length;a++){var s=c.attributes[a];n.setAttribute(s.name,s.value)}n.addEventListener("load",function(e,t,n,o){return function(r){void 0===l[n]&&(l[n]=[]),l[n].push(t),j("scriptLoaded",{detail:{trackingObjectKey:n,trackingObjectSettings:o,scriptId:t,node:e}})}}(n,r++,e,t)),c=n}else i--;document.body.appendChild(c)}u.push(e)}}else console.error("Used trackingObject ‹"+e+"› is undefined.")}function y(e,t){if(void 0!==t)for(var n in t.show){if(Object.prototype.hasOwnProperty.call(t.show,n))C(n,t.show[n])}else console.error("Used trackingObject ‹"+e+"› is undefined.")}function C(e,t){if("cookie_http+html"===t.type){if(Object.prototype.hasOwnProperty.call(t,"htmlCookieRemovalPattern")&&""!==t.htmlCookieRemovalPattern){var n,o=Cookies.get();try{n=RegExp(t.htmlCookieRemovalPattern)}catch(t){return console.error('Malformed pattern for cookie deletion on trackingObjectItem "'+e+'": '+t.message),!1}for(var r in o)null!==r.match(n)&&E(r)}else E(e);return!0}return!1}function w(){for(var e=h(),t=0;t<e.length;t++)for(var n=r.groups[e[t]],o=0;o<n.trackingObjects.length;o++){var i=n.trackingObjects[o];-1===u.indexOf(i)&&O(i,r.trackingObjects[i])}}function j(e,t){"function"!=typeof window.CustomEvent&&(window.CustomEvent=function(e,t){t=t||{bubbles:!1,cancelable:!1,detail:void 0};var n=document.createEvent("CustomEvent");return n.initCustomEvent(e,t.bubbles,t.cancelable,t.detail),n},window.CustomEvent.prototype=window.Event.prototype),o.dispatchEvent(new window.CustomEvent(e,t))}function E(e){var t=document.location.host,n=t.split(".").slice(-2).join(".");Cookies.remove(e),Cookies.remove(e,{path:"/"}),Cookies.remove(e,{path:"",domain:t}),Cookies.remove(e,{path:"/",domain:t}),Cookies.remove(e,{path:"",domain:"."+n}),Cookies.remove(e,{path:"/",domain:"."+n})}return function(){for(var n=0;n<a.length;n++)a[n].addEventListener("click",g);for(n=0;n<s.length;n++)s[n].addEventListener("click",b);for(n=0;n<c.length;n++)c[n].addEventListener("click",k);!function(){if(void 0!==Cookies.get(e)){var n=p();v();for(var o=0;o<n.length;o++){var r=t.querySelector("[name="+n[o]+"]");r&&f(r,!0)}}}(),function(){if("1"===window.navigator.doNotTrack)for(var e=document.querySelectorAll("[data-cookieman-dnt]"),n=0;n<e.length;n++)e[n].innerHTML=t.dataset.cookiemanDntEnabled}(),w()}(),{show:function(){console.error("Your theme should implement function cookieman.show()")},hide:function(){console.error("Your theme should implement function cookieman.hide()")},showOnce:function(){void 0===Cookies.get(e)&&cookieman.show()},hasConsented:m,hasConsentedTrackingObject:function(e){var t=function(e){return Object.keys(r.groups).filter((function(t){return Object.prototype.hasOwnProperty.call(r.groups[t],"trackingObjects")&&r.groups[t].trackingObjects.indexOf(e)>-1}))}(e);return t.reduce((function(e,t){return e&&m(t)}),t.length>0)},consenteds:h,consent:function(e){f(t.querySelector('[type=checkbox][name="'+e+'"]'),!0),d(),w()},onScriptLoaded:function(e,t,n){void 0===l[e]&&(l[e]=[]),-1===l[e].indexOf(t)?o.addEventListener("scriptLoaded",(function(o){o.detail.trackingObjectKey===e&&o.detail.scriptId===t&&n(o.detail.trackingObjectKey,o.detail.scriptId)})):n(e,t)},eventsEl:o}}();

!function(){"use strict";jQuery((function(){jQuery('[aria-controls="cookieman-settings"]').on("click",(function(){jQuery("[data-cookieman-save]").show()}))})),cookieman.show=function(){jQuery((function(){jQuery("#cookieman-modal").modal({show:!0,backdrop:true})}))},cookieman.hide=function(){jQuery((function(){jQuery("#cookieman-modal").modal("hide")}))}}();

null!==document.querySelector('[data-cookieman-showonce="1"]')&&setTimeout(cookieman.showOnce,2e3);

// Consent class
let ConsentApp = new function ConsentController() {
    //-- global variables ---
    window.dataLayer = window.dataLayer || [];

    //--- public functions ---
    /**
     * Callback function for GoogleTagManager Script to fire the dataLayer trigger
     * @param bool state
     * @param object service
     */
    this.consentChanged = function (state, service) {
        if (state === true) {
            if (service.name.indexOf('google-tagmanager-service') !== -1) {
                let tempObj = {
                    event: service.gtm.trigger
                };
                tempObj[service.gtm.variable] = true;
                window.dataLayer.push(tempObj);

                /*
                //ES6 - https://stackoverflow.com/questions/11508463/javascript-set-object-key-by-variable
                window.dataLayer.push({
                    event: service.name,
                    [service.name]: true
                });
                */
            }
        } else if (state === false) {
            if (service.name.indexOf('google-tagmanager-service') !== -1) {
                let tempObj = {
                    event: service.gtm.trigger
                };
                tempObj[service.gtm.variable] = false;
                window.dataLayer.push(tempObj);
				    }
        }

        //Check if the own callback function is allready defined
        if (typeof window[service.ownCallback] === "function") {
            window[service.ownCallback](state, service);
        } else if (service.ownCallback !== '') {
            console.error('The Callback function ' + service.ownCallback + ' is not yet defined. Please create it first.');
        }
    };

    //--- constructor ---
    (function contruct() {
        $(document).ready(function () {
            //Listener for the button on the privacy page, to edit the consent
            $(document).on('click', '.js-showConsentModal', function (event) {
                event.preventDefault();
                klaro.show();
            });
        });
    })();

    // v3.0.2 - safari -gf20220517
    const isSafari = navigator.vendor && 
           navigator.vendor.indexOf('Apple') > -1 &&
           navigator.userAgent &&
           navigator.userAgent.indexOf('CriOS') == -1 &&
           navigator.userAgent.indexOf('FxiOS') == -1;

    $(function() {
      setTimeout(function() {
        // console.log("isSafari? ("+isSafari+")");
        if (isSafari!=true) {
          $('#klaro').removeClass('safari');
          // $('#klaro').addClass('no-safari');
        } else { 
          $('#klaro').addClass('safari'); 
          // $('#klaro').removeClass('no-safari');
        }
      })
    });
    // v3.0.2 - safari -gf20220517 END.

};


//--- Functions after window.load(): ---
$(function() {
		if($('iframe').length>0) {
				var counterOfIframe = 0;
				var attrDataSrc;
				$('iframe').each(function() {
						attrDataSrc=$(this).attr('src'); 
						if (!attrDataSrc) {
								attrDataSrc=$(this).attr('data-src'); 
						}
						if (attrDataSrc && ( attrDataSrc.indexOf("youtu") > -1 || attrDataSrc.indexOf("vimeo") > -1 )) {
								/* Adjust measures for videoOverlay similar to iframe: */
								$(this).parent().find('.klaro.cm-as-context-notice').css({'width':$(this).width()});
								// $(this).parent().find('.klaro.cm-as-context-notice').css({'height':'100%'});  // Activate if height isn't set to 100% by css.
								if ($(this).height() < $(this).parent().find('.klaro.cm-as-context-notice').height()) {
										$(this).parent().find('.klaro.cm-as-context-notice .cm-buttons').css('margin-top','1em');
								}
						}
						counterOfIframe++;
				});
		}

    /**   Add class for small context-notice box  gf20211115 **/
		$('.klaro.we_cookie_consent.cm-as-context-notice').each(function() {
				if ($(this).width() <= 300) {
						$(this).addClass('notice--minified');
				}
		});

    /** Add class to avoid Google to crawl consent info text  gf20220623 **/
    $('.klaro.we_cookie_consent .cn-body').each(function() {
      $(this).attr('data-nosnippet','data-nosnippet');
    });
});
