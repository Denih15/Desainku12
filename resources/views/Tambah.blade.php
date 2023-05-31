<html lang="en-US" class="browser-Chrome platform-Windows js_active vc_desktop vc_transform vc_transform wd-scrollbar">

<head>
	<meta charset="UTF-8">
	<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
	<script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=UA-203533942-1&amp;l=dataLayer&amp;cx=c"></script>
	<script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-CHNWPRDZ8S&amp;l=dataLayer&amp;cx=c"></script>
	<script src="https://connect.facebook.net/signals/config/179029794322311?v=2.9.104&amp;r=stable" async=""></script>
	<script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
	<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
	<script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-N7MT9VT"></script>
	<script>
		if (navigator.userAgent.match(/MSIE|Internet Explorer/i) || navigator.userAgent.match(/Trident\/7\..*?rv:11/i)) {
			var href = document.location.href;
			if (!href.match(/[?&]nowprocket/)) {
				if (href.indexOf("?") == -1) {
					if (href.indexOf("#") == -1) {
						document.location.href = href + "?nowprocket=1"
					} else {
						document.location.href = href.replace("#", "?nowprocket=1#")
					}
				} else {
					if (href.indexOf("#") == -1) {
						document.location.href = href + "&nowprocket=1"
					} else {
						document.location.href = href.replace("#", "&nowprocket=1#")
					}
				}
			}
		}
	</script>
	<script>
		class RocketLazyLoadScripts {
			constructor() {
				this.v = "1.2.3", this.triggerEvents = ["keydown", "mousedown", "mousemove", "touchmove", "touchstart", "touchend", "wheel"], this.userEventHandler = this._triggerListener.bind(this), this.touchStartHandler = this._onTouchStart.bind(this), this.touchMoveHandler = this._onTouchMove.bind(this), this.touchEndHandler = this._onTouchEnd.bind(this), this.clickHandler = this._onClick.bind(this), this.interceptedClicks = [], window.addEventListener("pageshow", t => {
					this.persisted = t.persisted
				}), window.addEventListener("DOMContentLoaded", () => {
					this._preconnect3rdParties()
				}), this.delayedScripts = {
					normal: [],
					async: [],
					defer: []
				}, this.trash = [], this.allJQueries = []
			}
			_addUserInteractionListener(t) {
				if (document.hidden) {
					t._triggerListener();
					return
				}
				this.triggerEvents.forEach(e => window.addEventListener(e, t.userEventHandler, {
					passive: !0
				})), window.addEventListener("touchstart", t.touchStartHandler, {
					passive: !0
				}), window.addEventListener("mousedown", t.touchStartHandler), document.addEventListener("visibilitychange", t.userEventHandler)
			}
			_removeUserInteractionListener() {
				this.triggerEvents.forEach(t => window.removeEventListener(t, this.userEventHandler, {
					passive: !0
				})), document.removeEventListener("visibilitychange", this.userEventHandler)
			}
			_onTouchStart(t) {
				"HTML" !== t.target.tagName && (window.addEventListener("touchend", this.touchEndHandler), window.addEventListener("mouseup", this.touchEndHandler), window.addEventListener("touchmove", this.touchMoveHandler, {
					passive: !0
				}), window.addEventListener("mousemove", this.touchMoveHandler), t.target.addEventListener("click", this.clickHandler), this._renameDOMAttribute(t.target, "onclick", "rocket-onclick"), this._pendingClickStarted())
			}
			_onTouchMove(t) {
				window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, {
					passive: !0
				}), window.removeEventListener("mousemove", this.touchMoveHandler), t.target.removeEventListener("click", this.clickHandler), this._renameDOMAttribute(t.target, "rocket-onclick", "onclick"), this._pendingClickFinished()
			}
			_onTouchEnd(t) {
				window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, {
					passive: !0
				}), window.removeEventListener("mousemove", this.touchMoveHandler)
			}
			_onClick(t) {
				t.target.removeEventListener("click", this.clickHandler), this._renameDOMAttribute(t.target, "rocket-onclick", "onclick"), this.interceptedClicks.push(t), t.preventDefault(), t.stopPropagation(), t.stopImmediatePropagation(), this._pendingClickFinished()
			}
			_replayClicks() {
				window.removeEventListener("touchstart", this.touchStartHandler, {
					passive: !0
				}), window.removeEventListener("mousedown", this.touchStartHandler), this.interceptedClicks.forEach(t => {
					t.target.dispatchEvent(new MouseEvent("click", {
						view: t.view,
						bubbles: !0,
						cancelable: !0
					}))
				})
			}
			_waitForPendingClicks() {
				return new Promise(t => {
					this._isClickPending ? this._pendingClickFinished = t : t()
				})
			}
			_pendingClickStarted() {
				this._isClickPending = !0
			}
			_pendingClickFinished() {
				this._isClickPending = !1
			}
			_renameDOMAttribute(t, e, r) {
				t.hasAttribute && t.hasAttribute(e) && (event.target.setAttribute(r, event.target.getAttribute(e)), event.target.removeAttribute(e))
			}
			_triggerListener() {
				this._removeUserInteractionListener(this), "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", this._loadEverythingNow.bind(this)) : this._loadEverythingNow()
			}
			_preconnect3rdParties() {
				let t = [];
				document.querySelectorAll("script[type=rocketlazyloadscript]").forEach(e => {
					if (e.hasAttribute("src")) {
						let r = new URL(e.src).origin;
						r !== location.origin && t.push({
							src: r,
							crossOrigin: e.crossOrigin || "module" === e.getAttribute("data-rocket-type")
						})
					}
				}), t = [...new Map(t.map(t => [JSON.stringify(t), t])).values()], this._batchInjectResourceHints(t, "preconnect")
			}
			async _loadEverythingNow() {
				this.lastBreath = Date.now(), this._delayEventListeners(this), this._delayJQueryReady(this), this._handleDocumentWrite(), this._registerAllDelayedScripts(), this._preloadAllScripts(), await this._loadScriptsFromList(this.delayedScripts.normal), await this._loadScriptsFromList(this.delayedScripts.defer), await this._loadScriptsFromList(this.delayedScripts.async);
				try {
					await this._triggerDOMContentLoaded(), await this._triggerWindowLoad()
				} catch (t) {
					console.error(t)
				}
				window.dispatchEvent(new Event("rocket-allScriptsLoaded")), this._waitForPendingClicks().then(() => {
					this._replayClicks()
				}), this._emptyTrash()
			}
			_registerAllDelayedScripts() {
				document.querySelectorAll("script[type=rocketlazyloadscript]").forEach(t => {
					t.hasAttribute("data-rocket-src") ? t.hasAttribute("async") && !1 !== t.async ? this.delayedScripts.async.push(t) : t.hasAttribute("defer") && !1 !== t.defer || "module" === t.getAttribute("data-rocket-type") ? this.delayedScripts.defer.push(t) : this.delayedScripts.normal.push(t) : this.delayedScripts.normal.push(t)
				})
			}
			async _transformScript(t) {
				return new Promise((await this._littleBreath(), navigator.userAgent.indexOf("Firefox/") > 0 || "" === navigator.vendor) ? e => {
					let r = document.createElement("script");
					[...t.attributes].forEach(t => {
						let e = t.nodeName;
						"type" !== e && ("data-rocket-type" === e && (e = "type"), "data-rocket-src" === e && (e = "src"), r.setAttribute(e, t.nodeValue))
					}), t.text && (r.text = t.text), r.hasAttribute("src") ? (r.addEventListener("load", e), r.addEventListener("error", e)) : (r.text = t.text, e());
					try {
						t.parentNode.replaceChild(r, t)
					} catch (i) {
						e()
					}
				} : async e => {
					function r() {
						t.setAttribute("data-rocket-status", "failed"), e()
					}
					try {
						let i = t.getAttribute("data-rocket-type"),
							n = t.getAttribute("data-rocket-src");
						t.text, i ? (t.type = i, t.removeAttribute("data-rocket-type")) : t.removeAttribute("type"), t.addEventListener("load", function r() {
							t.setAttribute("data-rocket-status", "executed"), e()
						}), t.addEventListener("error", r), n ? (t.removeAttribute("data-rocket-src"), t.src = n) : t.src = "data:text/javascript;base64," + window.btoa(unescape(encodeURIComponent(t.text)))
					} catch (s) {
						r()
					}
				})
			}
			async _loadScriptsFromList(t) {
				let e = t.shift();
				return e && e.isConnected ? (await this._transformScript(e), this._loadScriptsFromList(t)) : Promise.resolve()
			}
			_preloadAllScripts() {
				this._batchInjectResourceHints([...this.delayedScripts.normal, ...this.delayedScripts.defer, ...this.delayedScripts.async], "preload")
			}
			_batchInjectResourceHints(t, e) {
				var r = document.createDocumentFragment();
				t.forEach(t => {
					let i = t.getAttribute && t.getAttribute("data-rocket-src") || t.src;
					if (i) {
						let n = document.createElement("link");
						n.href = i, n.rel = e, "preconnect" !== e && (n.as = "script"), t.getAttribute && "module" === t.getAttribute("data-rocket-type") && (n.crossOrigin = !0), t.crossOrigin && (n.crossOrigin = t.crossOrigin), t.integrity && (n.integrity = t.integrity), r.appendChild(n), this.trash.push(n)
					}
				}), document.head.appendChild(r)
			}
			_delayEventListeners(t) {
				let e = {};

				function r(t, r) {
					! function t(r) {
						!e[r] && (e[r] = {
							originalFunctions: {
								add: r.addEventListener,
								remove: r.removeEventListener
							},
							eventsToRewrite: []
						}, r.addEventListener = function() {
							arguments[0] = i(arguments[0]), e[r].originalFunctions.add.apply(r, arguments)
						}, r.removeEventListener = function() {
							arguments[0] = i(arguments[0]), e[r].originalFunctions.remove.apply(r, arguments)
						});

						function i(t) {
							return e[r].eventsToRewrite.indexOf(t) >= 0 ? "rocket-" + t : t
						}
					}(t), e[t].eventsToRewrite.push(r)
				}

				function i(t, e) {
					let r = t[e];
					Object.defineProperty(t, e, {
						get: () => r || function() {},
						set(i) {
							t["rocket" + e] = r = i
						}
					})
				}
				r(document, "DOMContentLoaded"), r(window, "DOMContentLoaded"), r(window, "load"), r(window, "pageshow"), r(document, "readystatechange"), i(document, "onreadystatechange"), i(window, "onload"), i(window, "onpageshow")
			}
			_delayJQueryReady(t) {
				let e;

				function r(r) {
					if (r && r.fn && !t.allJQueries.includes(r)) {
						r.fn.ready = r.fn.init.prototype.ready = function(e) {
							return t.domReadyFired ? e.bind(document)(r) : document.addEventListener("rocket-DOMContentLoaded", () => e.bind(document)(r)), r([])
						};
						let i = r.fn.on;
						r.fn.on = r.fn.init.prototype.on = function() {
							if (this[0] === window) {
								function t(t) {
									return t.split(" ").map(t => "load" === t || 0 === t.indexOf("load.") ? "rocket-jquery-load" : t).join(" ")
								}
								"string" == typeof arguments[0] || arguments[0] instanceof String ? arguments[0] = t(arguments[0]) : "object" == typeof arguments[0] && Object.keys(arguments[0]).forEach(e => {
									let r = arguments[0][e];
									delete arguments[0][e], arguments[0][t(e)] = r
								})
							}
							return i.apply(this, arguments), this
						}, t.allJQueries.push(r)
					}
					e = r
				}
				r(window.jQuery), Object.defineProperty(window, "jQuery", {
					get: () => e,
					set(t) {
						r(t)
					}
				})
			}
			async _triggerDOMContentLoaded() {
				this.domReadyFired = !0, await this._littleBreath(), document.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this._littleBreath(), window.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this._littleBreath(), document.dispatchEvent(new Event("rocket-readystatechange")), await this._littleBreath(), document.rocketonreadystatechange && document.rocketonreadystatechange()
			}
			async _triggerWindowLoad() {
				await this._littleBreath(), window.dispatchEvent(new Event("rocket-load")), await this._littleBreath(), window.rocketonload && window.rocketonload(), await this._littleBreath(), this.allJQueries.forEach(t => t(window).trigger("rocket-jquery-load")), await this._littleBreath();
				let t = new Event("rocket-pageshow");
				t.persisted = this.persisted, window.dispatchEvent(t), await this._littleBreath(), window.rocketonpageshow && window.rocketonpageshow({
					persisted: this.persisted
				})
			}
			_handleDocumentWrite() {
				let t = new Map;
				document.write = document.writeln = function(e) {
					let r = document.currentScript;
					r || console.error("WPRocket unable to document.write this: " + e);
					let i = document.createRange(),
						n = r.parentElement,
						s = t.get(r);
					void 0 === s && (s = r.nextSibling, t.set(r, s));
					let a = document.createDocumentFragment();
					i.setStart(a, 0), a.appendChild(i.createContextualFragment(e)), n.insertBefore(a, s)
				}
			}
			async _littleBreath() {
				Date.now() - this.lastBreath > 45 && (await this._requestAnimFrame(), this.lastBreath = Date.now())
			}
			async _requestAnimFrame() {
				return document.hidden ? new Promise(t => setTimeout(t)) : new Promise(t => requestAnimationFrame(t))
			}
			_emptyTrash() {
				this.trash.forEach(t => t.remove())
			}
			static run() {
				let t = new RocketLazyLoadScripts;
				t._addUserInteractionListener(t)
			}
		}
		RocketLazyLoadScripts.run();
	</script>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="https://www.hercodigital.id/xmlrpc.php">
	<script src="data:text/javascript;base64,d2luZG93Lk1TSW5wdXRNZXRob2RDb250ZXh0ICYmIGRvY3VtZW50LmRvY3VtZW50TW9kZSAmJiBkb2N1bWVudC53cml0ZSgnPHNjcmlwdCBzcmM9Imh0dHBzOi8vd3d3LmhlcmNvZGlnaXRhbC5pZC93cC1jb250ZW50L3RoZW1lcy93b29kbWFydC9qcy9saWJzL2llMTFDdXN0b21Qcm9wZXJ0aWVzLm1pbi5qcyIgZGVmZXI+PFwvc2NyaXB0PicpOw==" data-rocket-status="executed">
		window.MSInputMethodContext && document.documentMode && document.write('<script src="https://www.hercodigital.id/wp-content/themes/woodmart/js/libs/ie11CustomProperties.min.js" defer><\/script>');
	</script>
	<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

	<title>Jasa Desain Grafis, Logo, Brosur, Flyer, Banner Profesional - Herco Digital</title>
	<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Manrope%3A400%2C600%2C700%2C800&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope%3A400%2C600%2C700%2C800&amp;display=swap" media="all" onload="this.media='all'"><noscript>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope%3A400%2C600%2C700%2C800&#038;display=swap" />
	</noscript>
	<link rel="preload" as="font" href="https://www.hercodigital.id/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/webfonts/fa-brands-400.woff" crossorigin="">
	<link rel="preload" as="font" href="https://www.hercodigital.id/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/webfonts/fa-brands-400.woff2" crossorigin="">
	<link rel="preload" as="font" href="https://www.hercodigital.id/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/webfonts/fa-regular-400.woff" crossorigin="">
	<link rel="preload" as="font" href="https://www.hercodigital.id/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/webfonts/fa-regular-400.woff2" crossorigin="">
	<link rel="preload" as="font" href="https://www.hercodigital.id/wp-content/themes/woodmart/fonts/woodmart-font-1-400.woff2" crossorigin="">
	<link rel="preload" as="font" href="https://www.hercodigital.id/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/webfonts/fa-solid-900.woff" crossorigin="">
	<link rel="preload" as="font" href="https://www.hercodigital.id/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/webfonts/fa-solid-900.woff2" crossorigin="">
	<link rel="stylesheet" href="https://www.hercodigital.id/wp-content/cache/min/1/f3f4ffaea611380a8c5017d6ab6dfdad.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" media="all" data-minify="1">
	<meta name="description" content="Capai tujuan bisnis Anda dengan konten powerfull dengan Jasa Desain Grafis Profesional. Jasa Desain Logo, Jasa Desain Kartu Nama, Jasa Desain Brosur Perusahaan">
	<link rel="canonical" href="https://www.hercodigital.id/jasa-desain-grafis/">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="article">
	<meta property="og:title" content="Jasa Desain Grafis, Logo, Brosur, Flyer, Banner Profesional - Herco Digital">
	<meta property="og:description" content="Capai tujuan bisnis Anda dengan konten powerfull dengan Jasa Desain Grafis Profesional. Jasa Desain Logo, Jasa Desain Kartu Nama, Jasa Desain Brosur Perusahaan">
	<meta property="og:url" content="https://www.hercodigital.id/jasa-desain-grafis/">
	<meta property="og:site_name" content="Herco Digital">
	<meta property="article:modified_time" content="2023-05-19T03:19:07+00:00">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:label1" content="Est. reading time">
	<meta name="twitter:data1" content="11 minutes">

	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link href="https://fonts.gstatic.com" crossorigin="" rel="preconnect">
	<link rel="alternate" type="application/rss+xml" title="Herco Digital » Feed" href="https://www.hercodigital.id/feed/">
	<link rel="alternate" type="application/rss+xml" title="Herco Digital » Comments Feed" href="https://www.hercodigital.id/comments/feed/">
	<style id="safe-svg-svg-icon-style-inline-css" type="text/css">
		.safe-svg-cover .safe-svg-inside {
			display: inline-block;
			max-width: 100%
		}

		.safe-svg-cover svg {
			height: 100%;
			max-height: 100%;
			max-width: 100%;
			width: 100%
		}
	</style>
	<style id="rocket-lazyload-inline-css" type="text/css">
		.rll-youtube-player {
			position: relative;
			padding-bottom: 56.23%;
			height: 0;
			overflow: hidden;
			max-width: 100%;
		}

		.rll-youtube-player:focus-within {
			outline: 2px solid currentColor;
			outline-offset: 5px;
		}

		.rll-youtube-player iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 100;
			background: 0 0
		}

		.rll-youtube-player img {
			bottom: 0;
			display: block;
			left: 0;
			margin: auto;
			max-width: 100%;
			width: 100%;
			position: absolute;
			right: 0;
			top: 0;
			border: none;
			height: auto;
			-webkit-transition: .4s all;
			-moz-transition: .4s all;
			transition: .4s all
		}

		.rll-youtube-player img:hover {
			-webkit-filter: brightness(75%)
		}

		.rll-youtube-player .play {
			height: 100%;
			width: 100%;
			left: 0;
			top: 0;
			position: absolute;
			background: url(https://www.hercodigital.id/wp-content/plugins/wp-rocket/assets/img/youtube.png) no-repeat center;
			background-color: transparent !important;
			cursor: pointer;
			border: none;
		}
	</style>
	<script type="text/javascript" id="jquery-core-js" defer="" src="https://www.hercodigital.id/wp-includes/js/jquery/jquery.min.js?ver=3.6.4" data-rocket-status="executed"></script>
	<script type="text/javascript" id="jquery-migrate-js" defer="" src="https://www.hercodigital.id/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0" data-rocket-status="executed"></script>
	<script type="text/javascript" id="wd-device-library-js" defer="" src="https://www.hercodigital.id/wp-content/themes/woodmart/js/libs/device.min.js?ver=7.2.4" data-rocket-status="executed"></script>
	<script type="text/javascript" id="sib-front-js-js-extra">
		/* <![CDATA[ */
		var sibErrMsg = {
			"invalidMail": "Please fill out valid email address",
			"requiredField": "Please fill out required fields",
			"invalidDateFormat": "Please fill out valid date format",
			"invalidSMSFormat": "Please fill out valid phone number"
		};
		var ajax_sib_front_object = {
			"ajax_url": "https:\/\/www.hercodigital.id\/wp-admin\/admin-ajax.php",
			"ajax_nonce": "db3145004a",
			"flag_url": "https:\/\/www.hercodigital.id\/wp-content\/plugins\/mailin\/img\/flags\/"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" data-minify="1" id="sib-front-js-js" defer="" src="https://www.hercodigital.id/wp-content/cache/min/1/wp-content/plugins/mailin/js/mailin-front.js?ver=1684298285" data-rocket-status="executed"></script>
	<link rel="https://api.w.org/" href="https://www.hercodigital.id/wp-json/">
	<link rel="alternate" type="application/json" href="https://www.hercodigital.id/wp-json/wp/v2/pages/15008">
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.hercodigital.id/xmlrpc.php?rsd">
	<link rel="alternate" type="application/json+oembed" href="https://www.hercodigital.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.hercodigital.id%2Fjasa-desain-grafis%2F">
	<link rel="alternate" type="text/xml+oembed" href="https://www.hercodigital.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.hercodigital.id%2Fjasa-desain-grafis%2F&amp;format=xml">

	<script src="data:text/javascript;base64,KGZ1bmN0aW9uKHcsZCxzLGwsaSl7d1tsXT13W2xdfHxbXTt3W2xdLnB1c2goeydndG0uc3RhcnQnOgpuZXcgRGF0ZSgpLmdldFRpbWUoKSxldmVudDonZ3RtLmpzJ30pO3ZhciBmPWQuZ2V0RWxlbWVudHNCeVRhZ05hbWUocylbMF0sCmo9ZC5jcmVhdGVFbGVtZW50KHMpLGRsPWwhPSdkYXRhTGF5ZXInPycmbD0nK2w6Jyc7ai5hc3luYz10cnVlO2ouc3JjPQonaHR0cHM6Ly93d3cuZ29vZ2xldGFnbWFuYWdlci5jb20vZ3RtLmpzP2lkPScraStkbDtmLnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKGosZik7Cn0pKHdpbmRvdyxkb2N1bWVudCwnc2NyaXB0JywnZGF0YUxheWVyJywnR1RNLU43TVQ5VlQnKTs=" data-rocket-status="executed">
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-N7MT9VT');
	</script>


	<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-CHNWPRDZ8S" data-rocket-status="executed"></script>
	<script src="data:text/javascript;base64,CiAgd2luZG93LmRhdGFMYXllciA9IHdpbmRvdy5kYXRhTGF5ZXIgfHwgW107CiAgZnVuY3Rpb24gZ3RhZygpe2RhdGFMYXllci5wdXNoKGFyZ3VtZW50cyk7fQogIGd0YWcoJ2pzJywgbmV3IERhdGUoKSk7CgogIGd0YWcoJ2NvbmZpZycsICdHLUNITldQUkRaOFMnKTsK" data-rocket-status="executed">
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-CHNWPRDZ8S');
	</script>

	<script type="text/javascript" src="data:text/javascript;base64,CiAgKGZ1bmN0aW9uICgpIHsKICAgIHZhciBzID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgic2NyaXB0IiksCiAgICAgIGggPSBkb2N1bWVudC5oZWFkOwogICAgcy5hc3luYyA9IDE7CiAgICBzLnNyYyA9ICJodHRwczovL21vbml0b3IuZnJhdWRibG9ja2VyLmNvbS9mYnQuanM/c2lkPVFlYWZveVVfNWxsenhsaWhLaGF0ZSI7CiAgICBoLmFwcGVuZENoaWxkKHMpOwogIH0pKCk7Cg==" data-rocket-status="executed">
		(function() {
			var s = document.createElement("script"),
				h = document.head;
			s.async = 1;
			s.src = "https://monitor.fraudblocker.com/fbt.js?sid=QeafoyU_5llzxlihKhate";
			h.appendChild(s);
		})();
	</script>
	<noscript>
		<a href="https://fraudblocker.com" rel="nofollow">
			<img src="https://monitor.fraudblocker.com/fbt.gif?sid=QeafoyU_5llzxlihKhate" alt="Fraud Blocker" />
		</a>
	</noscript>
	<style>
		#ez-toc-container {
			background: #f9f9f9;
			border: 1px solid #aaa;
			border-radius: 4px;
			-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
			box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
			display: table;
			margin-bottom: 1em;
			padding: 10px;
			position: relative;
			width: auto
		}

		div.ez-toc-widget-container {
			padding: 0;
			position: relative
		}

		#ez-toc-container.ez-toc-light-blue {
			background: #edf6ff
		}

		#ez-toc-container.ez-toc-white {
			background: #fff
		}

		#ez-toc-container.ez-toc-black {
			background: #000
		}

		#ez-toc-container.ez-toc-transparent {
			background: none
		}

		div.ez-toc-widget-container ul {
			display: block
		}

		div.ez-toc-widget-container li {
			border: none;
			padding: 0
		}

		div.ez-toc-widget-container ul.ez-toc-list {
			padding: 10px
		}

		#ez-toc-container ul ul,
		.ez-toc div.ez-toc-widget-container ul ul {
			margin-left: 1.5em
		}

		#ez-toc-container li,
		#ez-toc-container ul {
			padding: 0
		}

		#ez-toc-container li,
		#ez-toc-container ul,
		#ez-toc-container ul li,
		div.ez-toc-widget-container,
		div.ez-toc-widget-container li {
			background: 0 0;
			list-style: none;
			line-height: 1.6;
			margin: 0;
			overflow: hidden;
			z-index: 1
		}

		#ez-toc-container p.ez-toc-title {
			text-align: left;
			line-height: 1.45;
			margin: 0;
			padding: 0
		}

		.ez-toc-title-container {
			display: table;
			width: 100%
		}

		.ez-toc-title,
		.ez-toc-title-toggle {
			display: inline;
			text-align: left;
			vertical-align: middle
		}

		.ez-toc-btn,
		.ez-toc-glyphicon {
			display: inline-block;
			font-weight: 400
		}

		#ez-toc-container.ez-toc-black a,
		#ez-toc-container.ez-toc-black a:visited,
		#ez-toc-container.ez-toc-black p.ez-toc-title {
			color: #fff
		}

		#ez-toc-container div.ez-toc-title-container+ul.ez-toc-list {
			margin-top: 1em
		}

		.ez-toc-wrap-left {
			float: left;
			margin-right: 10px
		}

		.ez-toc-wrap-right {
			float: right;
			margin-left: 10px
		}

		#ez-toc-container a {
			color: #444;
			box-shadow: none;
			text-decoration: none;
			text-shadow: none;
			display: inline-flex;
			align-items: stretch;
			flex-wrap: nowrap
		}

		#ez-toc-container a:visited {
			color: #9f9f9f
		}

		#ez-toc-container a:hover {
			text-decoration: underline
		}

		.ez-toc-widget-container ul.ez-toc-list li::before {
			content: ' ';
			position: absolute;
			left: 0;
			right: 0;
			height: 30px;
			line-height: 30px;
			z-index: -1
		}

		.ez-toc-widget-container ul.ez-toc-list li.active {
			background-color: #ededed;
			height: auto !important
		}

		.ez-toc-widget-container li.active>a {
			font-weight: 900
		}

		.ez-toc-btn {
			padding: 6px 12px;
			margin-bottom: 0;
			font-size: 14px;
			line-height: 1.428571429;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			cursor: pointer;
			background-image: none;
			border: 1px solid transparent;
			border-radius: 4px;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			-o-user-select: none;
			user-select: none
		}

		.ez-toc-btn:focus {
			outline: #333 dotted thin;
			outline: -webkit-focus-ring-color auto 5px;
			outline-offset: -2px
		}

		.ez-toc-btn:focus,
		.ez-toc-btn:hover {
			color: #333;
			text-decoration: none
		}

		.ez-toc-btn.active,
		.ez-toc-btn:active {
			background-image: none;
			outline: 0;
			-webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
			box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
		}

		.ez-toc-btn-default {
			color: #333;
			background-color: #fff;
			-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 1px rgba(0, 0, 0, .075);
			box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 1px rgba(0, 0, 0, .075);
			text-shadow: 0 1px 0 #fff;
			background-image: -webkit-gradient(linear, left 0, left 100%, from(#fff), to(#e0e0e0));
			background-image: -webkit-linear-gradient(top, #fff 0, #e0e0e0 100%);
			background-image: -moz-linear-gradient(top, #fff 0, #e0e0e0 100%);
			background-image: linear-gradient(to bottom, #fff 0, #e0e0e0 100%);
			background-repeat: repeat-x;
			border-color: #ccc
		}

		.ez-toc-btn-default.active,
		.ez-toc-btn-default:active,
		.ez-toc-btn-default:focus,
		.ez-toc-btn-default:hover {
			color: #333;
			background-color: #ebebeb;
			border-color: #adadad
		}

		.ez-toc-btn-default.active,
		.ez-toc-btn-default:active {
			background-image: none;
			background-color: #e0e0e0;
			border-color: #dbdbdb
		}

		.ez-toc-btn-sm,
		.ez-toc-btn-xs {
			padding: 5px 10px;
			font-size: 12px;
			line-height: 1.5;
			border-radius: 3px
		}

		.ez-toc-btn-xs {
			padding: 1px 5px
		}

		.ez-toc-btn-default:active {
			-webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
			box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
		}

		.btn.active,
		.ez-toc-btn:active {
			background-image: none
		}

		.ez-toc-btn-default:focus,
		.ez-toc-btn-default:hover {
			background-color: #e0e0e0;
			background-position: 0 -15px
		}

		.ez-toc-pull-right {
			float: right !important;
			margin-left: 10px
		}

		#ez-toc-container label.cssicon,
		#ez-toc-widget-container label.cssicon {
			height: 30px
		}

		.ez-toc-glyphicon {
			position: relative;
			top: 1px;
			font-family: 'Glyphicons Halflings';
			-webkit-font-smoothing: antialiased;
			font-style: normal;
			line-height: 1;
			-moz-osx-font-smoothing: grayscale
		}

		.ez-toc-glyphicon:empty {
			width: 1em
		}

		.ez-toc-toggle i.ez-toc-glyphicon,
		label.cssicon .ez-toc-glyphicon:empty {
			font-size: 16px;
			margin-left: 2px
		}

		#ez-toc-container input,
		.ez-toc-toggle #item {
			position: absolute;
			left: -999em
		}

		#ez-toc-container input[type=checkbox]:checked+nav,
		#ez-toc-widget-container input[type=checkbox]:checked+nav {
			opacity: 0;
			max-height: 0;
			border: none;
			display: none
		}

		#ez-toc-container nav ul.eztoc-visibility-hide-by-default,
		#ez-toc-widget-container nav ul.eztoc-visibility-hide-by-default,
		label.cssiconcheckbox {
			display: none
		}

		#ez-toc-container label {
			float: right;
			position: relative;
			font-size: 16px;
			padding: 0 4px 0 5px;
			border: 1px solid #999191;
			border-radius: 5px;
			cursor: pointer;
			width: 30px;
			left: 10px
		}

		#ez-toc-container .ez-toc-toggle label,
		#ez-toc-container label.cssicon,
		#ez-toc-widget-container label.cssicon {
			float: right;
			position: relative;
			font-size: 16px;
			padding: 0;
			border: 1px solid #999191;
			border-radius: 5px;
			cursor: pointer;
			left: 10px;
			width: 35px
		}

		div#ez-toc-container p.ez-toc-title {
			display: contents
		}

		div#ez-toc-container {
			padding-right: 20px
		}

		.ez-toc-wrap-center {
			margin: 0 auto
		}

		#ez-toc-container a.ez-toc-toggle {
			display: flex;
			align-items: center;
			color: #444;
			background: inherit;
			border: inherit
		}

		.ez-toc-widget-container ul li a {
			padding-left: 10px;
			display: inline-flex;
			align-items: stretch;
			flex-wrap: nowrap
		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		.recentcomments a {
			display: inline !important;
			padding: 0 !important;
			margin: 0 !important;
		}
	</style>
	<script type="application/ld+json" class="saswp-custom-schema-markup-output">
		{
			"@context": "https://schema.org/",
			"@type": "Product",
			"name": "Jasa Desain Grafis Profesional - Herco Digital",
			"description": "Tingkatkan branding usaha Anda dengan Jasa Design Profesional dari Desain Logo, Kartu Nama, Company Profile, Kemasan ..",
			"review": {
				"@type": "Review",
				"reviewRating": {
					"@type": "Rating",
					"ratingValue": "4",
					"bestRating": "5"
				},
				"author": {
					"@type": "Person",
					"name": "Septian Eka"
				}
			},
			"aggregateRating": {
				"@type": "AggregateRating",
				"ratingValue": "4.4",
				"reviewCount": "198"
			}
		}
	</script>
	<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
	<link rel="icon" href="https://www.hercodigital.id/wp-content/uploads/2021/06/favicon-150x150.png" sizes="32x32">
	<link rel="icon" href="https://www.hercodigital.id/wp-content/uploads/2021/06/favicon.png" sizes="192x192">
	<link rel="apple-touch-icon" href="https://www.hercodigital.id/wp-content/uploads/2021/06/favicon.png">
	<meta name="msapplication-TileImage" content="https://www.hercodigital.id/wp-content/uploads/2021/06/favicon.png">
	<style type="text/css" id="wp-custom-css">
		.btn-baru a {
			background-color: #ff5400 !important;
		}

		.btn-baru a:hover {
			border-color: #fff !important;
		}
	</style>
	<style>

	</style>
	<style data-type="woodmart_shortcodes-custom-css">
		#wd-6103170534bff .woodmart-title-container {
			line-height: 52px;
			font-size: 42px;
		}

		#wd-61031933be34d .woodmart-title-container {
			line-height: 42px;
			font-size: 32px;
			color: #ffffff;
		}

		#wd-612c8ff43bf1b .woodmart-text-block {
			line-height: 26px;
			font-size: 16px;
			color: #ffffff;
		}

		#wd-6103a19f66573 .woodmart-title-container {
			font-size: 32px;
			line-height: 54px;
		}

		#wd-61032871172bf .woodmart-text-block {
			line-height: 30px;
			font-size: 20px;
		}

		#wd-610327fd64426 .woodmart-text-block {
			line-height: 30px;
			font-size: 20px;
		}

		#wd-60fef826cf7d4 .list-icon {
			color: #f25543;
		}

		#wd-60fdcd044d19e .woodmart-text-block {
			line-height: 26px;
			font-size: 16px;
			color: #d30000;
		}

		#wd-61032beb8e166 .woodmart-title-container {
			line-height: 38px;
			font-size: 28px;
			color: #ffffff;
		}

		#wd-6103b418d009d .woodmart-text-block {
			color: #ffffff;
		}

		#wd-6103b4021e164 li {
			color: #ffffff;
		}

		#wd-6103b4021e164 li:hover {
			color: #ffffff;
		}

		#wd-6103b4021e164 .list-icon {
			color: #ffffff;
		}

		#wd-6103b4021e164 li:hover .list-icon {
			color: #ffffff;
		}

		#wd-6103b3d339913 li {
			color: #ffffff;
		}

		#wd-6103b3d339913 li:hover {
			color: #ffffff;
		}

		#wd-6103b3d339913 .list-icon {
			color: #ffffff;
		}

		#wd-6103b3d339913 li:hover .list-icon {
			color: #ffffff;
		}

		#wd-60fb2071f418d .woodmart-title-container {
			line-height: 46px;
			font-size: 36px;
			color: #2035f2;
		}

		#wd-612c9044d9ff4 .woodmart-title-container {
			line-height: 46px;
			font-size: 36px;
		}

		#wd-6103c64d940e3 .woodmart-title-container {
			font-size: 32px;
			line-height: 54px;
		}

		#wd-610421ab1086c .woodmart-title-container {
			font-size: 32px;
			line-height: 54px;
		}

		#wd-6116a9f29cc32 .woodmart-title-container {
			line-height: 36px;
			font-size: 26px;
			color: #1f2df2;
		}

		#wd-6116a9f29cc32 .title-subtitle {
			line-height: 38px;
			font-size: 28px;
		}

		#wd-6116a9f29cc32 .title-after_title {
			line-height: 26px;
			font-size: 16px;
		}

		#wd-612769e9b0fd3 .woodmart-text-block {
			line-height: 26px;
			font-size: 16px;
		}

		#wd-6125c7e3ddfe5 .woodmart-title-container {
			line-height: 36px;
			font-size: 26px;
			color: #1f2df2;
		}

		#wd-6125c7e3ddfe5 .title-subtitle {
			line-height: 38px;
			font-size: 28px;
		}

		#wd-6125c7e3ddfe5 .title-after_title {
			line-height: 26px;
			font-size: 16px;
		}

		#wd-6125c7c82ae36 .woodmart-text-block {
			line-height: 26px;
			font-size: 16px;
		}

		#wd-6125c7eb5da4f .woodmart-title-container {
			line-height: 36px;
			font-size: 26px;
			color: #1f2df2;
		}

		#wd-6125c7eb5da4f .title-subtitle {
			line-height: 38px;
			font-size: 28px;
		}

		#wd-6125c7eb5da4f .title-after_title {
			line-height: 26px;
			font-size: 16px;
		}

		#wd-61c56fe6e7e6f .woodmart-text-block {
			line-height: 26px;
			font-size: 16px;
		}

		#wd-628d9b1be90db .woodmart-title-container {
			line-height: 42px;
			font-size: 32px;
		}

		#wd-628d9adbbfd98 .woodmart-title-container {
			line-height: 42px;
			font-size: 32px;
		}

		#wd-610428a5b0a70 .woodmart-title-container {
			font-size: 32px;
			line-height: 54px;
		}

		#wd-60fdde653fba6 .woodmart-title-container {
			line-height: 42px;
			font-size: 32px;
		}

		#wd-60fddf26b6640 .woodmart-title-container {
			line-height: 46px;
			font-size: 36px;
		}

		#wd-60fddf26b6640 .title-after_title {
			line-height: 28px;
			font-size: 18px;
		}

		#wd-60fde3722c5b5 a {
			background-color: #1d9715;
			border-color: #1d9715 !important;
		}

		#wd-60fde3722c5b5 a:hover {
			background-color: #2c8e7b;
			border-color: #2c8e7b !important;
		}

		#wd-60e89b9a4ee67 .woodmart-title-container {
			line-height: 46px;
			font-size: 36px;
		}

		#wd-60e89b9a4ee67 .title-after_title {
			line-height: 26px;
			font-size: 16px;
		}

		#wd-6103db754da97 .woodmart-title-container {
			line-height: 46px;
			font-size: 36px;
		}

		#wd-6103db3405a50 .info-box-title {
			color: #2035f2;
		}

		#wd-610425c97c395 .info-box-title {
			color: #2035f2;
		}

		#wd-610427055b221 .info-box-title {
			color: #2035f2;
		}

		#wd-6103d3ea971be .woodmart-title-container {
			line-height: 42px;
			font-size: 32px;
		}

		#wd-60fb31c469031 .woodmart-title-container {
			line-height: 38px;
			font-size: 28px;
			color: #1f2df2;
		}

		#wd-60fb31c469031 .title-after_title {
			line-height: 26px;
			font-size: 16px;
		}

		#wd-61baa87c377b1 a {
			background-color: #ff4c00;
			border-color: #ff4c00 !important;
		}

		#wd-61baa87c377b1 a:hover {
			background-color: #ff1900;
			border-color: #ff1900 !important;
		}

		#wd-6103d80cc2927 .woodmart-title-container {
			line-height: 52px;
			font-size: 42px;
		}

		#wd-612c5641b8a5a a {
			background-color: #00ad0b;
			border-color: #00ad0b !important;
		}

		#wd-612c5641b8a5a a:hover {
			background-color: #30b24a;
			border-color: #30b24a !important;
		}

		@media (max-width: 1199px) {
			#wd-6103170534bff .woodmart-title-container {
				line-height: 46px;
				font-size: 36px;
			}

			#wd-61031933be34d .woodmart-title-container {
				line-height: 36px;
				font-size: 26px;
			}

			#wd-612c8ff43bf1b .woodmart-text-block {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-6103a19f66573 .woodmart-title-container {
				font-size: 28px;
				line-height: 50px;
			}

			#wd-61032871172bf .woodmart-text-block {
				line-height: 30px;
				font-size: 20px;
			}

			#wd-610327fd64426 .woodmart-text-block {
				line-height: 30px;
				font-size: 20px;
			}

			#wd-60fdcd044d19e .woodmart-text-block {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-61032beb8e166 .woodmart-title-container {
				line-height: 36px;
				font-size: 26px;
			}

			#wd-60fb2071f418d .woodmart-title-container {
				line-height: 42px;
				font-size: 32px;
			}

			#wd-612c9044d9ff4 .woodmart-title-container {
				line-height: 38px;
				font-size: 28px;
			}

			#wd-6103c64d940e3 .woodmart-title-container {
				font-size: 28px;
				line-height: 50px;
			}

			#wd-610421ab1086c .woodmart-title-container {
				font-size: 28px;
				line-height: 50px;
			}

			#wd-6116a9f29cc32 .woodmart-title-container {
				line-height: 34px;
				font-size: 24px;
			}

			#wd-6116a9f29cc32 .title-subtitle {
				line-height: 34px;
				font-size: 24px;
			}

			#wd-6116a9f29cc32 .title-after_title {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-612769e9b0fd3 .woodmart-text-block {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-6125c7e3ddfe5 .woodmart-title-container {
				line-height: 34px;
				font-size: 24px;
			}

			#wd-6125c7e3ddfe5 .title-subtitle {
				line-height: 34px;
				font-size: 24px;
			}

			#wd-6125c7e3ddfe5 .title-after_title {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-6125c7c82ae36 .woodmart-text-block {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-6125c7eb5da4f .woodmart-title-container {
				line-height: 34px;
				font-size: 24px;
			}

			#wd-6125c7eb5da4f .title-subtitle {
				line-height: 34px;
				font-size: 24px;
			}

			#wd-6125c7eb5da4f .title-after_title {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-61c56fe6e7e6f .woodmart-text-block {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-628d9b1be90db .woodmart-title-container {
				line-height: 38px;
				font-size: 28px;
			}

			#wd-628d9adbbfd98 .woodmart-title-container {
				line-height: 38px;
				font-size: 28px;
			}

			#wd-610428a5b0a70 .woodmart-title-container {
				font-size: 28px;
				line-height: 50px;
			}

			#wd-60fdde653fba6 .woodmart-title-container {
				line-height: 38px;
				font-size: 28px;
			}

			#wd-60fddf26b6640 .woodmart-title-container {
				line-height: 42px;
				font-size: 32px;
			}

			#wd-60fddf26b6640 .title-after_title {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-60e89b9a4ee67 .woodmart-title-container {
				line-height: 42px;
				font-size: 32px;
			}

			#wd-60e89b9a4ee67 .title-after_title {
				line-height: 24px;
				font-size: 14px;
			}

			#wd-6103db754da97 .woodmart-title-container {
				line-height: 38px;
				font-size: 28px;
			}

			#wd-6103d3ea971be .woodmart-title-container {
				line-height: 38px;
				font-size: 28px;
			}

			#wd-60fb31c469031 .woodmart-title-container {
				line-height: 36px;
				font-size: 26px;
			}

			#wd-60fb31c469031 .title-after_title {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-6103d80cc2927 .woodmart-title-container {
				line-height: 38px;
				font-size: 28px;
			}
		}

		@media (max-width: 767px) {
			#wd-6103170534bff .woodmart-title-container {
				line-height: 42px;
				font-size: 32px;
			}

			#wd-6103170534bff .title-after_title {
				line-height: 2px;
			}

			#wd-61031933be34d .woodmart-title-container {
				line-height: 34px;
				font-size: 24px;
			}

			#wd-612c8ff43bf1b .woodmart-text-block {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-6103a19f66573 .woodmart-title-container {
				font-size: 24px;
				line-height: 36px;
			}

			#wd-61032871172bf .woodmart-text-block {
				line-height: 28px;
				font-size: 18px;
			}

			#wd-610327fd64426 .woodmart-text-block {
				line-height: 28px;
				font-size: 18px;
			}

			#wd-60fdcd044d19e .woodmart-text-block {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-61032beb8e166 .woodmart-title-container {
				line-height: 34px;
				font-size: 24px;
			}

			#wd-60fb2071f418d .woodmart-title-container {
				line-height: 38px;
				font-size: 28px;
			}

			#wd-612c9044d9ff4 .woodmart-title-container {
				line-height: 34px;
				font-size: 24px;
			}

			#wd-6103c64d940e3 .woodmart-title-container {
				font-size: 24px;
				line-height: 36px;
			}

			#wd-610421ab1086c .woodmart-title-container {
				font-size: 24px;
				line-height: 36px;
			}

			#wd-6116a9f29cc32 .woodmart-title-container {
				line-height: 32px;
				font-size: 22px;
			}

			#wd-6116a9f29cc32 .title-subtitle {
				line-height: 32px;
				font-size: 22px;
			}

			#wd-6116a9f29cc32 .title-after_title {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-612769e9b0fd3 .woodmart-text-block {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-6125c7e3ddfe5 .woodmart-title-container {
				line-height: 32px;
				font-size: 22px;
			}

			#wd-6125c7e3ddfe5 .title-subtitle {
				line-height: 32px;
				font-size: 22px;
			}

			#wd-6125c7e3ddfe5 .title-after_title {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-6125c7c82ae36 .woodmart-text-block {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-6125c7eb5da4f .woodmart-title-container {
				line-height: 32px;
				font-size: 22px;
			}

			#wd-6125c7eb5da4f .title-subtitle {
				line-height: 32px;
				font-size: 22px;
			}

			#wd-6125c7eb5da4f .title-after_title {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-61c56fe6e7e6f .woodmart-text-block {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-628d9b1be90db .woodmart-title-container {
				line-height: 34px;
				font-size: 24px;
			}

			#wd-628d9adbbfd98 .woodmart-title-container {
				line-height: 34px;
				font-size: 24px;
			}

			#wd-610428a5b0a70 .woodmart-title-container {
				font-size: 24px;
				line-height: 36px;
			}

			#wd-60fdde653fba6 .woodmart-title-container {
				line-height: 34px;
				font-size: 24px;
			}

			#wd-60fddf26b6640 .woodmart-title-container {
				line-height: 38px;
				font-size: 28px;
			}

			#wd-60fddf26b6640 .title-after_title {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-60e89b9a4ee67 .woodmart-title-container {
				line-height: 38px;
				font-size: 28px;
			}

			#wd-60e89b9a4ee67 .title-after_title {
				line-height: 24px;
				font-size: 14px;
			}

			#wd-6103db754da97 .woodmart-title-container {
				line-height: 34px;
				font-size: 24px;
			}

			#wd-6103d3ea971be .woodmart-title-container {
				line-height: 34px;
				font-size: 24px;
			}

			#wd-60fb31c469031 .woodmart-title-container {
				line-height: 34px;
				font-size: 24px;
			}

			#wd-60fb31c469031 .title-after_title {
				line-height: 26px;
				font-size: 16px;
			}

			#wd-6103d80cc2927 .woodmart-title-container {
				line-height: 34px;
				font-size: 24px;
			}
		}
	</style>
	<style type="text/css" data-type="vc_shortcodes-custom-css">
		.vc_custom_1625813103269 {
			margin-top: -40px !important;
			padding-top: 4vh !important;
			padding-bottom: 8vh !important;
		}

		.vc_custom_1627059347283 {
			padding-top: 4vh !important;
			padding-bottom: 4vh !important;
			background-color: #00203f !important;
		}

		.vc_custom_1627629623236 {
			padding-top: 4vh !important;
			padding-bottom: 4vh !important;
		}

		.vc_custom_1684466343157 {
			margin-bottom: 35px !important;
			padding-top: 4vh !important;
			padding-bottom: 4vh !important;
			background-color: #00203f !important;
			border-radius: 15px !important;
		}

		.vc_custom_1622990793590 {
			padding-top: 4vh !important;
			padding-bottom: 4vh !important;
		}

		.vc_custom_1626735615458 {
			padding-top: 4vh !important;
			padding-bottom: 4vh !important;
			background-color: #f2fbff !important;
		}

		.vc_custom_1622990793590 {
			padding-top: 4vh !important;
			padding-bottom: 4vh !important;
		}

		.vc_custom_1684466312933 {
			padding-top: 4vh !important;
		}

		.vc_custom_1627660614004 {
			padding-top: 4vh !important;
			padding-bottom: 4vh !important;
		}

		.vc_custom_1627660631807 {
			padding-top: 4vh !important;
			padding-bottom: 4vh !important;
		}

		.vc_custom_1653447273315 {
			margin-bottom: 4vh !important;
			padding-top: 4vh !important;
			padding-bottom: 4vh !important;
		}

		.vc_custom_1653447289462 {
			margin-bottom: 4vh !important;
			padding-top: 4vh !important;
			padding-bottom: 4vh !important;
		}

		.vc_custom_1653450445465 {
			margin-bottom: 4vh !important;
			padding-top: 4vh !important;
			padding-bottom: 4vh !important;
		}

		.vc_custom_1627660799490 {
			padding-top: 6vh !important;
			padding-bottom: 6vh !important;
		}

		.vc_custom_1627631953821 {
			padding-top: 4vh !important;
			padding-bottom: 4vh !important;
		}

		.vc_custom_1627631970026 {
			padding-top: 6vh !important;
			padding-bottom: 8vh !important;
			background-color: #fff7f4 !important;
		}

		.vc_custom_1622990793590 {
			padding-top: 4vh !important;
			padding-bottom: 4vh !important;
		}

		.vc_custom_1627250536260 {
			padding-top: 4vh !important;
			padding-bottom: 4vh !important;
			background-color: #fff7f7 !important;
		}

		.vc_custom_1626735467742 {
			padding-bottom: 4vh !important;
		}

		.vc_custom_1626982155737 {
			padding-top: 4vh !important;
			padding-bottom: 6vh !important;
			background-color: #fff3ef !important;
		}

		.vc_custom_1624517057900 {
			padding-top: 8vh !important;
			padding-bottom: 4vh !important;
		}

		.vc_custom_1626793384191 {
			margin-top: 0px !important;
			margin-bottom: 0px !important;
			padding-top: 0px !important;
			padding-bottom: 0px !important;
		}

		.vc_custom_1627593125050 {
			margin-bottom: 45px !important;
		}

		.vc_custom_1627627983128 {
			margin-bottom: 45px !important;
		}

		.vc_custom_1627322440283 {
			margin-bottom: 10px !important;
		}

		.vc_custom_1627632674481 {
			margin-top: 20px !important;
		}

		.vc_custom_1627070591692 {
			margin-bottom: 25px !important;
		}

		.vc_custom_1630310427972 {
			margin-top: 20px !important;
		}

		.vc_custom_1630310475594 {
			margin-bottom: 40px !important;
		}

		.vc_custom_1627637339539 {
			margin-bottom: 55px !important;
		}

		.vc_custom_1627661113495 {
			padding-top: 4vh !important;
		}

		.vc_custom_1627660728586 {
			margin-bottom: 25px !important;
		}

		.vc_custom_1653447456347 {
			margin-bottom: 10vh !important;
		}

		.vc_custom_1653447401870 {
			margin-bottom: 4vh !important;
		}

		.vc_custom_1655186145121 {
			margin-top: 10vh !important;
		}

		.vc_custom_1627662507875 {
			margin-bottom: 55px !important;
		}

		.vc_custom_1650959519089 {
			margin-bottom: 60px !important;
		}

		.vc_custom_1650959528685 {
			margin-bottom: 60px !important;
		}

		.vc_custom_1650959537800 {
			margin-bottom: 60px !important;
		}

		.vc_custom_1650959546584 {
			margin-bottom: 60px !important;
		}

		.vc_custom_1650959556096 {
			margin-bottom: 60px !important;
		}

		.vc_custom_1650959564552 {
			margin-bottom: 60px !important;
		}

		.vc_custom_1650959572512 {
			margin-bottom: 60px !important;
		}

		.vc_custom_1650959580523 {
			margin-bottom: 60px !important;
		}

		.vc_custom_1650959588729 {
			margin-bottom: 60px !important;
		}

		.vc_custom_1650959596389 {
			margin-bottom: 60px !important;
		}

		.vc_custom_1650959604252 {
			margin-bottom: 60px !important;
		}

		.vc_custom_1650959613272 {
			margin-bottom: 60px !important;
		}

		.vc_custom_1625723313621 {
			margin-top: 10px !important;
			margin-bottom: 10px !important;
		}

		.vc_custom_1625723319867 {
			margin-top: 10px !important;
			margin-bottom: 10px !important;
		}

		.vc_custom_1627642768223 {
			margin-bottom: 60px !important;
		}

		.vc_custom_1627642691102 {
			margin-bottom: 20px !important;
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			background-color: #ffffff !important;
			border-left-color: #ffffff !important;
			border-left-style: solid !important;
			border-right-color: #ffffff !important;
			border-right-style: solid !important;
			border-top-color: #ffffff !important;
			border-top-style: solid !important;
			border-bottom-color: #ffffff !important;
			border-bottom-style: solid !important;
			border-radius: 10px !important;
		}

		.vc_custom_1627662081987 {
			margin-bottom: 20px !important;
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			background-color: #ffffff !important;
			border-left-color: #ffffff !important;
			border-left-style: solid !important;
			border-right-color: #ffffff !important;
			border-right-style: solid !important;
			border-top-color: #ffffff !important;
			border-top-style: solid !important;
			border-bottom-color: #ffffff !important;
			border-bottom-style: solid !important;
			border-radius: 10px !important;
		}

		.vc_custom_1627662093215 {
			margin-bottom: 20px !important;
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			background-color: #ffffff !important;
			border-left-color: #ffffff !important;
			border-left-style: solid !important;
			border-right-color: #ffffff !important;
			border-right-style: solid !important;
			border-top-color: #ffffff !important;
			border-top-style: solid !important;
			border-bottom-color: #ffffff !important;
			border-bottom-style: solid !important;
			border-radius: 10px !important;
		}

		.vc_custom_1627075016959 {
			margin-bottom: 20px !important;
		}

		.vc_custom_1626735840805 {
			padding-top: 0px !important;
			padding-bottom: 0px !important;
		}
	</style><noscript>
		<style>
			.wpb_animate_when_almost_visible {
				opacity: 1;
			}
		</style>
	</noscript>
	<style id="wd-style-default_header-css" data-type="wd-style-default_header">
		:root {
			--wd-top-bar-h: 0.001px;
			--wd-top-bar-sm-h: 0.001px;
			--wd-top-bar-sticky-h: 0.001px;

			--wd-header-general-h: 90px;
			--wd-header-general-sm-h: 60px;
			--wd-header-general-sticky-h: 0.001px;

			--wd-header-bottom-h: 50px;
			--wd-header-bottom-sm-h: 0.001px;
			--wd-header-bottom-sticky-h: 0.001px;

			--wd-header-clone-h: 0.001px;
		}



		.whb-header-bottom .wd-dropdown {
			margin-top: 5px;
		}

		.whb-header-bottom .wd-dropdown:after {
			height: 15px;
		}


		.whb-header .whb-header-bottom .wd-header-cats {
			margin-top: -0px;
			margin-bottom: -0px;
			height: calc(100% + 0px);
		}


		@media (min-width: 1025px) {

			.whb-general-header-inner {
				height: 90px;
				max-height: 90px;
			}

			.whb-sticked .whb-general-header-inner {
				height: 60px;
				max-height: 60px;
			}

			.whb-header-bottom-inner {
				height: 50px;
				max-height: 50px;
			}

			.whb-sticked .whb-header-bottom-inner {
				height: 50px;
				max-height: 50px;
			}


		}

		@media (max-width: 1024px) {

			.whb-general-header-inner {
				height: 60px;
				max-height: 60px;
			}



		}

		.whb-general-header {
			border-bottom-width: 0px;
			border-bottom-style: solid;
		}
	</style>
	<style id="wd-style-theme_settings_default-css" data-type="wd-style-theme_settings_default">
		@font-face {
			font-weight: normal;
			font-style: normal;
			font-family: "woodmart-font";
			src: url("//www.hercodigital.id/wp-content/themes/woodmart/fonts/woodmart-font-1-400.woff2?v=7.2.4") format("woff2");
			font-display: swap;
		}

		.wd-popup.wd-promo-popup {
			background-color: #111111;
			background-image: none;
			background-repeat: no-repeat;
			background-size: contain;
			background-position: left center;
		}

		.page-title-default {
			background-color: rgb(255, 106, 0);
			background-image: none;
			background-size: cover;
			background-position: center center;
		}

		.footer-container {
			background-color: #ffffff;
			background-image: none;
		}

		:root {
			--wd-text-font: "Manrope", Arial, Helvetica, sans-serif;
			--wd-text-font-weight: 400;
			--wd-text-color: rgb(0, 32, 63);
			--wd-text-font-size: 15px;
		}

		:root {
			--wd-title-font: "Manrope", Arial, Helvetica, sans-serif;
			--wd-title-font-weight: 700;
			--wd-title-color: rgb(0, 32, 63);
		}

		:root {
			--wd-entities-title-font: "Manrope", Arial, Helvetica, sans-serif;
			--wd-entities-title-font-weight: 700;
			--wd-entities-title-color: #333333;
			--wd-entities-title-color-hover: rgb(51 51 51 / 65%);
		}

		:root {
			--wd-alternative-font: "Manrope", Arial, Helvetica, sans-serif;
		}

		:root {
			--wd-widget-title-font: "Manrope", Arial, Helvetica, sans-serif;
			--wd-widget-title-font-weight: 700;
			--wd-widget-title-transform: uppercase;
			--wd-widget-title-color: #333;
			--wd-widget-title-font-size: 18px;
		}

		:root {
			--wd-header-el-font: "Manrope", Arial, Helvetica, sans-serif;
			--wd-header-el-font-weight: 700;
			--wd-header-el-transform: capitalize;
			--wd-header-el-font-size: 15px;
		}

		bolder {
			font-family: "Manrope", Arial, Helvetica, sans-serif;
			font-weight: 800;
		}

		:root {
			--wd-primary-color: rgb(31, 45, 242);
		}

		:root {
			--wd-alternative-color: #FF5E19;
		}

		:root {
			--wd-link-color: rgb(31, 45, 242);
			--wd-link-color-hover: rgb(30, 115, 190);
		}

		:root {
			--btn-default-bgcolor: rgb(255, 94, 25);
		}

		:root {
			--btn-default-bgcolor-hover: rgb(65, 3, 250);
		}

		:root {
			--btn-accented-bgcolor: rgb(255, 94, 25);
		}

		:root {
			--btn-accented-bgcolor-hover: rgb(249, 132, 19);
		}

		:root {
			--notices-success-bg: #459647;
		}

		:root {
			--notices-success-color: #fff;
		}

		:root {
			--notices-warning-bg: #E0B252;
		}

		:root {
			--notices-warning-color: #fff;
		}

		:root {

			--wd-form-brd-radius: 5px;


			--wd-form-brd-width: 2px;

			--btn-default-color: #333;

			--btn-default-color-hover: #333;

			--btn-accented-color: #fff;

			--btn-accented-color-hover: #fff;




			--btn-default-brd-radius: 5px;
			--btn-default-box-shadow: none;
			--btn-default-box-shadow-hover: none;




			--btn-accented-brd-radius: 5px;
			--btn-accented-box-shadow: none;
			--btn-accented-box-shadow-hover: none;


			--wd-brd-radius: 0px;
		}



		@media (min-width: 1025px) {
			.whb-boxed:not(.whb-sticked):not(.whb-full-width) .whb-main-header {
				max-width: 1192px;
			}
		}

		.container {
			max-width: 1222px;
		}

		:root {
			--wd-container-w: 1222px;
		}

		@media (min-width: 1222px) {

			[data-vc-full-width]:not([data-vc-stretch-content]),
			:is(.vc_section, .vc_row).wd-section-stretch {
				padding-left: calc((100vw - 1222px - var(--wd-sticky-nav-w) - var(--wd-scroll-w)) / 2);
				padding-right: calc((100vw - 1222px - var(--wd-sticky-nav-w) - var(--wd-scroll-w)) / 2);
			}
		}





		.woodmart-woocommerce-layered-nav .wd-scroll-content {
			max-height: 280px;
		}


		.lm label,
		.wa-chat {
			font-size: 14px;
			font-weight: 700
		}

		.btn-submit,
		.lm label,
		.wa-chat {
			font-weight: 700
		}

		.wa-chat {
			position: fixed;
			bottom: 1.5%;
			right: 1.5%;
			z-index: 330;
			text-transform: capitalize
		}

		.blog-design-masonry .post-title {
			font-size: 18px;
			line-height: 1.5
		}

		.wd-timeline-breakpoint {
			margin-bottom: 0 !important
		}

		.shadow-img img {
			border-radius: 15px;
			box-shadow: #d0cdcd 0 5px 30px
		}

		.wd-timeline-title {
			font-size: 24px
		}

		.row-shadow {
			-webkit-box-shadow: 0 9px 68px 0 rgb(62 57 107 / 20%);
			box-shadow: 0 9px 68px 0 rgb(62 57 107 / 20%);
			border-radius: 10px
		}

		.wa-chat .wd-btn-icon {
			margin-right: 5px;
			font-size: 22px;
			font-weight: 400
		}

		.vc_tta.vc_general .vc_tta-panel-title>a {
			line-height: 1.65
		}

		.banner-mask .wrapper-content-banner {
			background-color: rgb(216 70 20 / 30%) !important;
			transition: background-color .5s cubic-bezier(0, 0, .44, 1.18) !important
		}

		.footer-contact h4 {
			margin-bottom: 2px !important
		}

		.konsultasi textarea {
			overflow: auto;
			padding: 10px 15px;
			min-height: 125px
		}

		.vc_tta-panel .vc_tta-panel-title>a {
			color: inherit
		}

		#goals .promo-banner {
			margin-bottom: 30px;
			border-radius: 15px
		}

		.wd-list li {
			align-items: baseline !important
		}

		.img-shadow {
			border-radius: 20px;
			box-shadow: -5px 18px 60px 0 rgb(210 210 234 / 40%)
		}

		button.mfp-close {
			background: #ff5400
		}

		.wd-title-style-simple.text-center .liner-continer:after {
			left: calc(50% - 42px) !important;
			width: 84px !important;
			height: 6px !important;
			border-radius: 3px;
			margin-top: 8px
		}

		.wd-nav-portfolio li a {
			font-size: 12px;
			padding-right: 15px;
			padding-left: 15px
		}

		.portfolio-entry .wrap-meta {
			display: none
		}

		body {
			line-height: 1.8
		}

		.btn-submit {
			padding: 16px 28px;
			font-size: 16px;
			line-height: 20px;
			width: 100%
		}

		.woodmart-title-container {
			letter-spacing: -.2px
		}

		.wp-caption .wp-caption-text,
		.wp-caption-dd {
			padding: 5px 10px 5px 0;
			font-style: italic;
			line-height: 1.6;
			opacity: .8;
			text-align: center
		}

		@media (min-width: 1025px) {
			#heroimg .vc_column-inner {
				padding-top: 32vh !important;
				padding-bottom: 32vh !important
			}

			.wd-item-position-left .timeline-col-secondary {
				margin-left: 30px;
				text-align: left
			}

			.wd-item-position-left .timeline-col,
			.wd-item-position-right .timeline-col {
				padding: 0
			}

			.wd-timeline-item {
				margin-bottom: 0 !important
			}

			.solution-menu li a {
				color: var(--wd-primary-color);
				font-size: 16px;
				font-weight: 700;
				padding-top: 12px;
				padding-bottom: 12px
			}

			.wd-nav>li>a {
				padding-right: 10px;
				padding-left: 10px
			}

			.wd-nav-secondary {
				margin-left: 10px
			}

			.wd-nav-secondary>li>a {
				color: var(--wd-primary-color) !important;
				font-weight: 700
			}

			.wd-nav[class*=wd-style-]>li.menu-item-has-children>a:after,
			.wd-nav[class*=wd-style-]>li.wd-has-children>a:after {
				color: var(--wd-alternative-color) !important
			}

			.wd-dropdown-menu.wd-design-full-width {
				padding-top: 0 !important
			}

			.HideOnDesktop {
				display: none !important
			}
		}

		@media (min-width: 768px) and (max-width: 1024px) {
			#heroimg .vc_column-inner {
				padding-top: 27vh !important;
				padding-bottom: 27vh !important;
			}

			.HideOnMobile {
				display: none !important;
			}
		}

		@media (min-width: 577px) and (max-width: 767px) {
			#heroimg .vc_column-inner {
				padding-top: 27vh !important;
				padding-bottom: 27vh !important;
			}

			.HideOnMobile {
				display: none !important;
			}
		}

		@media (max-width: 576px) {
			#heroimg .vc_column-inner {
				padding-top: 27vh !important;
				padding-bottom: 27vh !important
			}

			.alt2.wd-info-box,
			.googlepartnerbadge.wd-info-box {
				display: block;
				text-align: center
			}

			.alt2 .box-icon-wrapper,
			.googlepartnerbadge .box-icon-wrapper {
				margin-right: 0 !important;
				max-width: 100% !important;
				margin-bottom: 20px !important
			}

			.pum-theme-17719 .pum-container {
				padding: 25px
			}

			.HideOnMobile {
				display: none !important
			}
		}
	</style>
	<style>
		.ai-viewports {
			--ai: 1;
		}

		.ai-viewport-3 {
			display: none !important;
		}

		.ai-viewport-2 {
			display: none !important;
		}

		.ai-viewport-1 {
			display: inherit !important;
		}

		.ai-viewport-0 {
			display: none !important;
		}

		@media (min-width: 768px) and (max-width: 979px) {
			.ai-viewport-1 {
				display: none !important;
			}

			.ai-viewport-2 {
				display: inherit !important;
			}
		}

		@media (max-width: 767px) {
			.ai-viewport-1 {
				display: none !important;
			}

			.ai-viewport-3 {
				display: inherit !important;
			}
		}
	</style>
	<noscript>
		<style id="rocket-lazyload-nojs-css">
			.rll-youtube-player,
			[data-lazy-src] {
				display: none !important;
			}
		</style>
	</noscript>
	<script src="data:text/javascript;base64,Ci8qISBsb2FkQ1NTIHJlbD1wcmVsb2FkIHBvbHlmaWxsLiBbY10yMDE3IEZpbGFtZW50IEdyb3VwLCBJbmMuIE1JVCBMaWNlbnNlICovCihmdW5jdGlvbih3KXsidXNlIHN0cmljdCI7aWYoIXcubG9hZENTUyl7dy5sb2FkQ1NTPWZ1bmN0aW9uKCl7fX0KdmFyIHJwPWxvYWRDU1MucmVscHJlbG9hZD17fTtycC5zdXBwb3J0PShmdW5jdGlvbigpe3ZhciByZXQ7dHJ5e3JldD13LmRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoImxpbmsiKS5yZWxMaXN0LnN1cHBvcnRzKCJwcmVsb2FkIil9Y2F0Y2goZSl7cmV0PSExfQpyZXR1cm4gZnVuY3Rpb24oKXtyZXR1cm4gcmV0fX0pKCk7cnAuYmluZE1lZGlhVG9nZ2xlPWZ1bmN0aW9uKGxpbmspe3ZhciBmaW5hbE1lZGlhPWxpbmsubWVkaWF8fCJhbGwiO2Z1bmN0aW9uIGVuYWJsZVN0eWxlc2hlZXQoKXtsaW5rLm1lZGlhPWZpbmFsTWVkaWF9CmlmKGxpbmsuYWRkRXZlbnRMaXN0ZW5lcil7bGluay5hZGRFdmVudExpc3RlbmVyKCJsb2FkIixlbmFibGVTdHlsZXNoZWV0KX1lbHNlIGlmKGxpbmsuYXR0YWNoRXZlbnQpe2xpbmsuYXR0YWNoRXZlbnQoIm9ubG9hZCIsZW5hYmxlU3R5bGVzaGVldCl9CnNldFRpbWVvdXQoZnVuY3Rpb24oKXtsaW5rLnJlbD0ic3R5bGVzaGVldCI7bGluay5tZWRpYT0ib25seSB4In0pO3NldFRpbWVvdXQoZW5hYmxlU3R5bGVzaGVldCwzMDAwKX07cnAucG9seT1mdW5jdGlvbigpe2lmKHJwLnN1cHBvcnQoKSl7cmV0dXJufQp2YXIgbGlua3M9dy5kb2N1bWVudC5nZXRFbGVtZW50c0J5VGFnTmFtZSgibGluayIpO2Zvcih2YXIgaT0wO2k8bGlua3MubGVuZ3RoO2krKyl7dmFyIGxpbms9bGlua3NbaV07aWYobGluay5yZWw9PT0icHJlbG9hZCImJmxpbmsuZ2V0QXR0cmlidXRlKCJhcyIpPT09InN0eWxlIiYmIWxpbmsuZ2V0QXR0cmlidXRlKCJkYXRhLWxvYWRjc3MiKSl7bGluay5zZXRBdHRyaWJ1dGUoImRhdGEtbG9hZGNzcyIsITApO3JwLmJpbmRNZWRpYVRvZ2dsZShsaW5rKX19fTtpZighcnAuc3VwcG9ydCgpKXtycC5wb2x5KCk7dmFyIHJ1bj13LnNldEludGVydmFsKHJwLnBvbHksNTAwKTtpZih3LmFkZEV2ZW50TGlzdGVuZXIpe3cuYWRkRXZlbnRMaXN0ZW5lcigibG9hZCIsZnVuY3Rpb24oKXtycC5wb2x5KCk7dy5jbGVhckludGVydmFsKHJ1bil9KX1lbHNlIGlmKHcuYXR0YWNoRXZlbnQpe3cuYXR0YWNoRXZlbnQoIm9ubG9hZCIsZnVuY3Rpb24oKXtycC5wb2x5KCk7dy5jbGVhckludGVydmFsKHJ1bil9KX19CmlmKHR5cGVvZiBleHBvcnRzIT09InVuZGVmaW5lZCIpe2V4cG9ydHMubG9hZENTUz1sb2FkQ1NTfQplbHNle3cubG9hZENTUz1sb2FkQ1NTfX0odHlwZW9mIGdsb2JhbCE9PSJ1bmRlZmluZWQiP2dsb2JhbDp0aGlzKSkK" data-rocket-status="executed">
		/*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
		(function(w) {
			"use strict";
			if (!w.loadCSS) {
				w.loadCSS = function() {}
			}
			var rp = loadCSS.relpreload = {};
			rp.support = (function() {
				var ret;
				try {
					ret = w.document.createElement("link").relList.supports("preload")
				} catch (e) {
					ret = !1
				}
				return function() {
					return ret
				}
			})();
			rp.bindMediaToggle = function(link) {
				var finalMedia = link.media || "all";

				function enableStylesheet() {
					link.media = finalMedia
				}
				if (link.addEventListener) {
					link.addEventListener("load", enableStylesheet)
				} else if (link.attachEvent) {
					link.attachEvent("onload", enableStylesheet)
				}
				setTimeout(function() {
					link.rel = "stylesheet";
					link.media = "only x"
				});
				setTimeout(enableStylesheet, 3000)
			};
			rp.poly = function() {
				if (rp.support()) {
					return
				}
				var links = w.document.getElementsByTagName("link");
				for (var i = 0; i < links.length; i++) {
					var link = links[i];
					if (link.rel === "preload" && link.getAttribute("as") === "style" && !link.getAttribute("data-loadcss")) {
						link.setAttribute("data-loadcss", !0);
						rp.bindMediaToggle(link)
					}
				}
			};
			if (!rp.support()) {
				rp.poly();
				var run = w.setInterval(rp.poly, 500);
				if (w.addEventListener) {
					w.addEventListener("load", function() {
						rp.poly();
						w.clearInterval(run)
					})
				} else if (w.attachEvent) {
					w.attachEvent("onload", function() {
						rp.poly();
						w.clearInterval(run)
					})
				}
			}
			if (typeof exports !== "undefined") {
				exports.loadCSS = loadCSS
			} else {
				w.loadCSS = loadCSS
			}
		}(typeof global !== "undefined" ? global : this))
	</script>
	<script async="" src="https://monitor.fraudblocker.com/fbt.js?sid=QeafoyU_5llzxlihKhate"></script>
	<script async="" type="text/javascript" src="https://www.clickcease.com/monitor/stat.js"></script>
	<link rel="stylesheet" id="wd-mod-nav-menu-label-css" href="https://www.hercodigital.id/wp-content/themes/woodmart/css/parts/mod-nav-menu-label.min.css?ver=7.2.4" type="text/css" media="all">
	<link rel="prefetch" href="https://www.hercodigital.id/contact-us/">
	<link rel="prefetch" href="https://www.hercodigital.id/">
	<link rel="prefetch" href="https://www.hercodigital.id/jasa-iklan-facebook-instagram-tertarget/">
</head>

<body data-rsssl="1" class="page-template-default page page-id-15008 wrapper-full-width  catalog-mode-on categories-accordion-on offcanvas-sidebar-tablet wpb-js-composer js-comp-ver-6.11.0 vc_responsive">

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7MT9VT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script type="text/javascript" id="wd-flicker-fix" src="data:text/javascript;base64,Ly8gRmxpY2tlciBmaXgu" data-rocket-status="executed">
		// Flicker fix.
	</script>
	<div class="website-wrapper">
		<header class="whb-header whb-default_header whb-full-width whb-sticky-shadow whb-scroll-stick whb-sticky-real">
			<div class="whb-main-header">
				<div class="whb-row whb-top-bar whb-not-sticky-row whb-without-bg whb-without-border whb-color-light whb-flex-flex-middle whb-hidden-desktop whb-hidden-mobile">
					<div class="container">
						<div class="whb-flex-row whb-top-bar-inner">
							<div class="whb-column whb-col-left whb-visible-lg whb-empty-column">
							</div>
							<div class="whb-column whb-col-center whb-visible-lg whb-empty-column">
							</div>
							<div class="whb-column whb-col-right whb-visible-lg whb-empty-column">
							</div>
							<div class="whb-column whb-col-mobile whb-hidden-lg">
								<div class="wd-social-icons  icons-design-default icons-size-small color-scheme-light social-share social-form-circle text-center">
									<a rel="noopener noreferrer nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.hercodigital.id/jasa-desain-grafis/" target="_blank" class=" wd-social-icon social-facebook" aria-label="Facebook social link">
										<span class="wd-icon"></span>
									</a>
									<a rel="noopener noreferrer nofollow" href="https://twitter.com/share?url=https://www.hercodigital.id/jasa-desain-grafis/" target="_blank" class=" wd-social-icon social-twitter" aria-label="Twitter social link">
										<span class="wd-icon"></span>
									</a>
									<a rel="noopener noreferrer nofollow" href="https://api.whatsapp.com/send?text=https%3A%2F%2Fwww.hercodigital.id%2Fjasa-desain-grafis%2F" target="_blank" class="whatsapp-desktop  wd-social-icon social-whatsapp" aria-label="WhatsApp social link">
										<span class="wd-icon"></span>
									</a>
									<a rel="noopener noreferrer nofollow" href="whatsapp://send?text=https%3A%2F%2Fwww.hercodigital.id%2Fjasa-desain-grafis%2F" target="_blank" class="whatsapp-mobile  wd-social-icon social-whatsapp" aria-label="WhatsApp social link">
										<span class="wd-icon"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="whb-row whb-general-header whb-not-sticky-row whb-without-bg whb-without-border whb-color-dark whb-flex-flex-middle">
					<div class="container">
						<div class="whb-flex-row whb-general-header-inner">
							<div class="whb-column whb-col-left whb-visible-lg">
								<div class="site-logo">
									<a href="https://www.hercodigital.id/" class="wd-logo wd-main-logo" rel="home">
										<img width="320" height="58" src="https://www.hercodigital.id/wp-content/uploads/2021/06/hercodigital.png" alt="Herco Digital" style="max-width: 186px;" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/06/hercodigital.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img width="320" height="58" src="https://www.hercodigital.id/wp-content/uploads/2021/06/hercodigital.png" alt="Herco Digital" style="max-width: 186px;" /></noscript> </a>
								</div>
								<div class="wd-header-nav wd-header-secondary-nav text-right" role="navigation" aria-label="Secondary navigation">
									<ul id="menu-menu" class="menu wd-nav wd-nav-secondary wd-style-default wd-gap-s dropdowns-loaded">
										<li id="menu-item-15055" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15055 item-level-0 menu-mega-dropdown wd-event-hover menu-item-has-children dropdown-load-ajax"><a href="https://www.hercodigital.id/services/" class="woodmart-nav-link"><span class="nav-link-text">Services</span></a>
											<div class="wd-dropdown-menu wd-dropdown wd-design-full-width color-scheme-dark" style="">
												<div class="container">
													<style data-type="vc_shortcodes-custom-css">
														.vc_custom_1624658734328 {
															padding-top: 35px !important;
															padding-right: 3vw !important;
															padding-bottom: 35px !important;
															padding-left: 3vw !important;
														}

														.vc_custom_1624658542449 {
															background-color: #2e22d6 !important;
														}

														.vc_custom_1625637353009 {
															margin-bottom: 10px !important;
														}
													</style>
													<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex" style="position: relative; left: 15px; box-sizing: border-box; width: 798px; max-width: 798px;">
														<div class="wpb_column vc_column_container vc_col-sm-8">
															<div class="vc_column-inner vc_custom_1624658734328">
																<div class="wpb_wrapper">
																	<div id="wd-60e541e071775" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-60e541e071775 wd-title-color-primary wd-title-style-underlined text-left vc_custom_1625637353009 wd-underline-colored">

																		<div class="liner-continer">
																			<h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-xl">Layanan Kami</h4>
																		</div>



																	</div>

																	<div class="vc_row wpb_row vc_inner vc_row-fluid">
																		<div class="wpb_column vc_column_container vc_col-sm-6">
																			<div class="vc_column-inner">
																				<div class="wpb_wrapper">
																					<ul class="wd-sub-menu solution-menu mega-menu-list wd-wpb">
																						<li class="">
																							<a>

																								<span class="nav-link-text">
																								</span>
																							</a>
																							<ul class="sub-sub-menu">

																								<li class="">
																									<a href="https://www.hercodigital.id/jasa-iklan-google/" title="Service – Google Ads">

																										Google Ads </a>
																								</li>


																								<li class="">
																									<a href="https://www.hercodigital.id/jasa-social-media-management/" title="Service – Social Media Management">

																										Social Media Management </a>
																								</li>


																								<li class="">
																									<a href="https://www.hercodigital.id/jasa-iklan-kolaboratif-marketplace/" title="Iklan Kolaboratif Marketplace">

																										Jasa Iklan Marketplace </a>
																								</li>


																								<li class="">
																									<a href="https://www.hercodigital.id/jasa-pembuatan-konten-sosial-media/" title="Service – Content Creation">

																										Content Creation </a>
																								</li>


																								<li class=" navigasi">
																									<a href="https://www.hercodigital.id/jasa-pembuatan-website/" title="Service – Website">

																										Web Development </a>
																								</li>


																								<li class=" navigasi">
																									<a href="https://www.hercodigital.id/jasa-kelola-marketplace/" title="Service – Jasa Kelola Marketplace">

																										Jasa Kelola Marketplace </a>
																								</li>

																							</ul>
																						</li>
																					</ul>

																				</div>
																			</div>
																		</div>
																		<div class="wpb_column vc_column_container vc_col-sm-6">
																			<div class="vc_column-inner">
																				<div class="wpb_wrapper">
																					<ul class="wd-sub-menu solution-menu mega-menu-list wd-wpb">
																						<li class="">
																							<a>

																								<span class="nav-link-text">
																								</span>
																							</a>
																							<ul class="sub-sub-menu">

																								<li class="">
																									<a href="https://www.hercodigital.id/jasa-iklan-facebook-instagram-tertarget/" title="Service – Social Media Advertising">

																										Social Media Advertising </a>
																								</li>


																								<li class="">
																									<a href="https://www.hercodigital.id/jasa-seo/" title="Service – Jasa SEO">

																										Jasa SEO </a>
																								</li>


																								<li class="">
																									<a href="https://www.hercodigital.id/jasa-desain-grafis/" title="Desain Grafis">

																										Graphic Design </a>
																								</li>


																								<li class="">
																									<a href="https://www.hercodigital.id/jasa-iklan-youtube/" title="Service – Youtube Ads">

																										Youtube Ads </a>
																								</li>


																								<li class="">
																									<a href="https://www.hercodigital.id/jasa-iklan-tiktok/" title="Service – Tiktok Ads">

																										TikTok Ads </a>
																								</li>


																								<li class="">
																									<a href="https://www.hercodigital.id/jasa-tiktok-management/" title="Tiktok Management">

																										TikTok Management </a>
																								</li>

																							</ul>
																						</li>
																					</ul>

																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
															<div class="vc_column-inner vc_custom_1624658542449">
																<div class="wpb_wrapper">
																	<div id="wd-60e541bca5b59" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-60e541bca5b59 wd-title-color-white wd-title-style-default text-center  wd-underline-colored">

																		<div class="liner-continer">
																			<h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-xl">Temukan solusi digital marketing yang tepat untuk bisnis Anda</h4>
																		</div>



																	</div>

																	<div id="wd-60e5415eaee8a" class=" wd-rs-60e5415eaee8a  wd-button-wrapper text-center"><a href="https://www.hercodigital.id/solutions" title="Contact Us" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-default btn-icon-pos-left">Contact Us<span class="wd-btn-icon"><span class="wd-icon fas fa-long-arrow-alt-right"></span></span></a></div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row-full-width vc_clearfix"></div>
												</div>
											</div>
										</li>
										<li id="menu-item-15056" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15056 item-level-0 menu-mega-dropdown wd-event-hover menu-item-has-children dropdown-load-ajax"><a href="https://www.hercodigital.id/solutions/" class="woodmart-nav-link"><span class="nav-link-text">Solutions</span></a>
											<div class="wd-dropdown-menu wd-dropdown wd-design-full-width color-scheme-dark" style="">
												<div class="container">
													<style data-type="vc_shortcodes-custom-css">
														.vc_custom_1624658734328 {
															padding-top: 35px !important;
															padding-right: 3vw !important;
															padding-bottom: 35px !important;
															padding-left: 3vw !important;
														}

														.vc_custom_1624658542449 {
															background-color: #2e22d6 !important;
														}

														.vc_custom_1625339378561 {
															margin-bottom: 10px !important;
														}
													</style>
													<p></p>
													<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex" style="position: relative; left: 15px; box-sizing: border-box; width: 798px; max-width: 798px;">
														<div class="wpb_column vc_column_container vc_col-sm-8">
															<div class="vc_column-inner vc_custom_1624658734328">
																<div class="wpb_wrapper">
																	<div id="wd-60e0b5d934013" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-60e0b5d934013 wd-title-color-primary wd-title-style-underlined text-left vc_custom_1625339378561 wd-underline-colored">

																		<div class="liner-continer">
																			<h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-xl">Temukan solusi digital marketing terbaik untuk bisnis Anda</h4>
																		</div>



																	</div>

																	<div class="vc_row wpb_row vc_inner vc_row-fluid">
																		<div class="wpb_column vc_column_container vc_col-sm-6">
																			<div class="vc_column-inner">
																				<div class="wpb_wrapper">
																					<ul class="wd-sub-menu solution-menu mega-menu-list wd-wpb">
																						<li class="">
																							<a>

																								<span class="nav-link-text">
																								</span>
																							</a>
																							<ul class="sub-sub-menu">

																								<li class="">
																									<a href="https://www.hercodigital.id/ecommerce-retail/" title="Solutions – E-commerce &amp; retail">

																										E-commerce &amp; Retail </a>
																								</li>


																								<li class="">
																									<a href="https://www.hercodigital.id/jasa-digital-marketing-untuk-sekolah-universitas/" title="Solutions – Education">

																										Education </a>
																								</li>


																								<li class="">
																									<a href="https://www.hercodigital.id/konsultan-digital-marketing-perbankan/" title="Solutions – Financial Services">

																										Financial </a>
																								</li>


																								<li class="">
																									<a href="https://www.hercodigital.id/jasa-digital-branding-untuk-instansi-pemerintah/" title="Solutions – Government">

																										Government </a>
																								</li>

																							</ul>
																						</li>
																					</ul>

																				</div>
																			</div>
																		</div>
																		<div class="wpb_column vc_column_container vc_col-sm-6">
																			<div class="vc_column-inner">
																				<div class="wpb_wrapper">
																					<ul class="wd-sub-menu solution-menu mega-menu-list wd-wpb">
																						<li class="">
																							<a>

																								<span class="nav-link-text">
																								</span>
																							</a>
																							<ul class="sub-sub-menu">

																								<li class="">
																									<a href="https://www.hercodigital.id/jasa-digital-marketing-produk-kesehatan/" title="Solutions – Health">

																										Health </a>
																								</li>


																								<li class="">
																									<a href="https://www.hercodigital.id/konsultan-digital-marketing-untuk-bisnis-jasa/" title="Solutions – Professional Service">

																										Professional Service </a>
																								</li>


																								<li class="">
																									<a href="https://www.hercodigital.id/jasa-digital-marketing-property/" title="Solutions – Property &amp; Home Decor">

																										Property / Home Decor </a>
																								</li>


																								<li class="">
																									<a href="https://www.hercodigital.id/solutions-manufacturing/" title="Solutions – B2B &amp; Manufacture">

																										B2B &amp; Manufaktur </a>
																								</li>

																							</ul>
																						</li>
																					</ul>

																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
															<div class="vc_column-inner vc_custom_1624658542449">
																<div class="wpb_wrapper">
																	<div id="wd-60d65721ba88f" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-60d65721ba88f wd-title-color-white wd-title-style-default text-center  wd-underline-colored">

																		<div class="liner-continer">
																			<h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-xl">Anda bergerak di bisnis lainnya?<br>
																				Hubungi kami!</h4>
																		</div>



																	</div>

																	<div id="wd-60e0b8b03cdcb" class=" wd-rs-60e0b8b03cdcb  wd-button-wrapper text-center"><a href="https://www.hercodigital.id/contact-us/" title="Contact Us" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-default btn-icon-pos-left">Contact Us<span class="wd-btn-icon"><span class="wd-icon fas fa-long-arrow-alt-right"></span></span></a></div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row-full-width vc_clearfix"></div>
													<p></p>

												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="whb-column whb-col-center whb-visible-lg whb-empty-column">
							</div>
							<div class="whb-column whb-col-right whb-visible-lg">
								<div class="wd-header-nav wd-header-main-nav text-right wd-design-1" role="navigation" aria-label="Main navigation">
									<ul id="menu-main-menu" class="menu wd-nav wd-nav-main wd-style-default wd-gap-s">
										<li id="menu-item-15058" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-15058 item-level-0 menu-simple-dropdown wd-event-hover"><a href="https://www.hercodigital.id/case-studies/" class="woodmart-nav-link"><span class="nav-link-text">Case Studies</span></a>
											<div class="color-scheme-dark wd-design-default wd-dropdown-menu wd-dropdown" style="">
												<div class="container">
													<ul class="wd-sub-menu color-scheme-dark">
														<li id="menu-item-16153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16153 item-level-1 wd-event-hover"><a href="https://www.hercodigital.id/jasa-social-media-management-ads/" class="woodmart-nav-link">Social Media</a></li>
														<li id="menu-item-16151" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16151 item-level-1 wd-event-hover"><a href="https://www.hercodigital.id/jasa-seo-professional/" class="woodmart-nav-link">SEO</a></li>
														<li id="menu-item-16154" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16154 item-level-1 wd-event-hover"><a href="https://www.hercodigital.id/jasa-google-ads-youtube-ads/" class="woodmart-nav-link">Google &amp; Youtube Ads</a></li>
														<li id="menu-item-16152" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16152 item-level-1 wd-event-hover"><a href="https://www.hercodigital.id/jasa-pembuatan-foto-video/" class="woodmart-nav-link">Content Creation</a></li>
														<li id="menu-item-16150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16150 item-level-1 wd-event-hover"><a href="https://www.hercodigital.id/jasa-website-development/" class="woodmart-nav-link">Website Development</a></li>
													</ul>
												</div>
											</div>
										</li>
										<li id="menu-item-15057" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15057 item-level-0 menu-simple-dropdown wd-event-hover"><a href="https://www.hercodigital.id/company/" class="woodmart-nav-link"><span class="nav-link-text">Company</span></a></li>
										<li id="menu-item-15059" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15059 item-level-0 menu-simple-dropdown wd-event-hover"><a href="https://www.hercodigital.id/career/" class="woodmart-nav-link"><span class="nav-link-text">Career</span></a></li>
									</ul>
								</div>
								<div id="wd-646abfae5f8f2" class="  whb-0xnlvuwrw8vylqbs1q26 wd-button-wrapper text-center"><a href="https://www.hercodigital.id/contact-us/" title="" class="btn btn-color-primary btn-style-default btn-style-semi-round btn-size-default">Contact Us</a></div>
							</div>
							<div class="whb-column whb-mobile-left whb-hidden-lg">
								<div class="wd-tools-element wd-header-mobile-nav wd-style-icon wd-design-1 whb-wn5z894j1g5n0yp3eeuz">
									<a href="#" rel="nofollow" aria-label="Open mobile menu">
										<span class="wd-tools-icon">
										</span>
										<span class="wd-tools-text">Menu</span>
									</a>
								</div>
								<div class="site-logo">
									<a href="https://www.hercodigital.id/" class="wd-logo wd-main-logo" rel="home">
										<img width="320" height="58" src="https://www.hercodigital.id/wp-content/uploads/2021/06/hercodigital.png" alt="Herco Digital" style="max-width: 120px;" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/06/hercodigital.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img width="320" height="58" src="https://www.hercodigital.id/wp-content/uploads/2021/06/hercodigital.png" alt="Herco Digital" style="max-width: 120px;" /></noscript> </a>
								</div>
							</div>
							<div class="whb-column whb-mobile-center whb-hidden-lg whb-empty-column">
							</div>
							<div class="whb-column whb-mobile-right whb-hidden-lg">
								<div id="wd-646abfae5fa45" class="  whb-z1lg5wtkcrsx1qgt93ci wd-button-wrapper text-center"><a href="https://www.hercodigital.id/contact-us/" title="" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-small btn-icon-pos-left">Let's Talk<span class="wd-btn-icon"><span class="wd-icon fab fa-whatsapp"></span></span></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="main-page-wrapper">

			<div class="container">
				<div class="row content-layout-wrapper align-items-start">
					<div class="site-content col-lg-12 col-12 col-md-12" role="main">
						<article id="post-15008" class="post-15008 page type-page status-publish hentry">
							<div class="entry-content">
								<div class="bialty-container">
									<section class="wpb-content-wrapper">
										<div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1625813103269 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex" style="position: relative; left: 0px; box-sizing: border-box; width: 798px; max-width: 798px; padding-left: 0px; padding-right: 0px;">
											<div class="wpb_column vc_column_container vc_col-sm-6">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div id="wd-6103170534bff" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-6103170534bff wd-title-color-default wd-title-style-default text-left  wd-underline-colored">
															<div class="liner-continer">
																<h1 class="woodmart-title-container title  wd-font-weight- wd-fontsize-xxl">Jasa Desain Grafis</h1>
															</div>
														</div>
														<div id="wd-610318c63729f" class="wd-text-block-wrapper wd-wpb wd-rs-610318c63729f color-scheme- text-left ">
															<div class="woodmart-title-container woodmart-text-block reset-last-child font-primary wd-font-weight-500 wd-fontsize-m">
																Tingkatkan branding produk Anda dengan menunjukkan identitas brand Anda melalui ciri khas visual yang menarik, mudah dikenali dan diingat! </div>
														</div>
														<ul class=" wd-rs-61031a8685f24 wd-list wd-wpb color-scheme- wd-fontsize-s wd-list-type-icon wd-list-style-default wd-justify-left " id="wd-61031a8685f24">
															<li>
																<span class="list-icon fas fa-check"></span>
																<span class="list-content">Eksklusif &amp; professional design</span>
															</li>
															<li>
																<span class="list-icon fas fa-check"></span>
																<span class="list-content">Style design fresh dan up-to-date</span>
															</li>
															<li>
																<span class="list-icon fas fa-check"></span>
																<span class="list-content">File master lengkap &amp; resolusi tinggi</span>
															</li>
														</ul>
														<div id="wd-6466ea906d1e7" class=" wd-rs-6466ea906d1e7  wd-button-wrapper wd-smooth-scroll text-left" data-smooth-time="100" data-smooth-offset="100"><a href="#price" title="" class="btn btn-color-primary btn-style-default btn-style-semi-round btn-size-extra-large btn-icon-pos-right">Pilihan Paket<span class="wd-btn-icon"><span class="wd-icon fas fa-long-arrow-alt-right"></span></span></a></div>
													</div>
												</div>
											</div>
											<div class="wpb_column vc_column_container vc_col-sm-6">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="wpb_single_image wpb_content_element vc_align_center">
															<figure class="wpb_wrapper vc_figure">
																<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="650" height="519" src="https://www.hercodigital.id/wp-content/uploads/2021/08/service-graphic-design.png" class="vc_single_image-img attachment-full entered lazyloaded" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="service-graphic-design" data-lazy-srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/service-graphic-design.png 650w, https://www.hercodigital.id/wp-content/uploads/2021/08/service-graphic-design-300x240.png 300w" data-lazy-sizes="(max-width: 650px) 100vw, 650px" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/08/service-graphic-design.png" data-ll-status="loaded" sizes="(max-width: 650px) 100vw, 650px" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/service-graphic-design.png 650w, https://www.hercodigital.id/wp-content/uploads/2021/08/service-graphic-design-300x240.png 300w"><noscript><img width="650" height="519" src="https://www.hercodigital.id/wp-content/uploads/2021/08/service-graphic-design.png" class="vc_single_image-img attachment-full" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="service-graphic-design" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/service-graphic-design.png 650w, https://www.hercodigital.id/wp-content/uploads/2021/08/service-graphic-design-300x240.png 300w" sizes="(max-width: 650px) 100vw, 650px"></noscript></div>
															</figure>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="vc_row-full-width vc_clearfix"></div>
										<div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1627059347283 vc_row-has-fill" style="position: relative; left: 0px; box-sizing: border-box; width: 798px; max-width: 798px; padding-left: 0px; padding-right: 0px;">
											<div class="wpb_column vc_column_container vc_col-sm-12">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div id="wd-61031933be34d" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-61031933be34d wd-title-color-alt wd-title-style-simple text-center vc_custom_1627593125050 wd-underline-colored">
															<div class="liner-continer">
																<h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-xl">Desain Branding Mencerminkan Citra Bisnis Anda</h4>
															</div>
														</div>
														<div class="vc_row wpb_row vc_inner vc_row-fluid">
															<div class="wpb_column vc_column_container vc_col-sm-2">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper"></div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-8">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div id="wd-612c8ff43bf1b" class="wd-text-block-wrapper wd-wpb wd-rs-612c8ff43bf1b color-scheme-custom text-center ">
																			<div class="woodmart-title-container woodmart-text-block reset-last-child font-primary wd-font-weight-500 ">
																				90% dari kebanyakan orang akan menilai value dari brand melalui tampilan desain yang Anda sajikan. Itulah mengapa, dalam kurun waktu kurang dari 10 tahun terakhir, perusahaan seperti Instagram, Go-jek, bahkan Google pun juga merubah design logo dan <em>brand identity</em>-nya untuk terus mengikuti perkembangan trend. </div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-2">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="vc_row-full-width vc_clearfix"></div>
										<div class="vc_row wpb_row vc_row-fluid vc_custom_1627629623236">
											<div class="wpb_column vc_column_container vc_col-sm-12">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">


													</div>
												</div>
											</div>
										</div>
										<div class="vc_row wpb_row vc_row-fluid vc_custom_1684466343157 vc_row-has-fill wd-rs-6466eaa191612">
											<div class="wpb_column vc_column_container vc_col-sm-12 color-scheme-light">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div id="wd-61032beb8e166" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-61032beb8e166 wd-title-color-alt wd-title-style-simple text-center  wd-underline-colored">
															<div class="liner-continer">
																<h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-xl">Namun masalahnya..<br>
																	Membuat design branding bukan perkara mudah</h4>
															</div>
														</div>
														<div class="vc_row wpb_row vc_inner vc_row-fluid">
															<div class="wpb_column vc_column_container vc_col-sm-2">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper"></div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<ul class=" wd-rs-6103b4021e164 wd-list wd-wpb color-scheme-custom wd-fontsize-s wd-list-type-icon wd-list-style-default wd-justify-left " id="wd-6103b4021e164">
																			<li>
																				<span class="list-icon fas fa-check"></span>
																				<span class="list-content">Anda harus riset desain yang sesuai dengan trend saat ini</span>
																			</li>
																			<li>
																				<span class="list-icon fas fa-check"></span>
																				<span class="list-content">Anda harus menghabiskan waktu memikirkan ide &amp; konsep yang tepat</span>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<ul class=" wd-rs-6103b3d339913 wd-list wd-wpb color-scheme-custom wd-fontsize-s wd-list-type-icon wd-list-style-default wd-justify-left " id="wd-6103b3d339913">
																			<li>
																				<span class="list-icon fas fa-check"></span>
																				<span class="list-content">Anda harus memiliki kemampuan / skill desain grafis professional</span>
																			</li>
																			<li>
																				<span class="list-icon fas fa-check"></span>
																				<span class="list-content">Anda harus membuat design sesuai ciri khas brand Anda</span>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-2">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper"></div>
																</div>
															</div>
														</div>
														<div id="wd-6103b418d009d" class="wd-text-block-wrapper wd-wpb wd-rs-6103b418d009d color-scheme-custom text-center vc_custom_1627632674481">
															<div class="woodmart-title-container woodmart-text-block reset-last-child font-primary wd-font-weight-700 wd-fontsize-m">
																Hemat waktu dan tenaga Anda untuk mengembangkan bisnis<br>
																Serahkan pembuatan desainnya pada kami. </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="vc_row wpb_row vc_row-fluid vc_custom_1622990793590">
											<div class="wpb_column vc_column_container vc_col-sm-2">
												<div class="vc_column-inner">
													<div class="wpb_wrapper"></div>
												</div>
											</div>
											<div class="wpb_column vc_column_container vc_col-sm-8">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div id="wd-60fb2071f418d" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-60fb2071f418d wd-title-color-alt wd-title-style-simple text-center vc_custom_1627070591692 wd-underline-colored">
															<div class="liner-continer">
																<h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-xxl">Bisnis Anda Layak Mendapatkan Yang Terbaik</h4>
															</div>
														</div>
														<div id="wd-612c901050648" class="wd-text-block-wrapper wd-wpb wd-rs-612c901050648 color-scheme- text-center vc_custom_1630310427972">
															<div class="woodmart-title-container woodmart-text-block reset-last-child font-primary wd-font-weight-400 wd-fontsize-m">
																<strong>Kami telah menyiapkan solusi untuk Anda.</strong>
																<p>Anda tidak perlu repot memikirkan ide &amp; konsep design yang profesional untuk bisnis Anda. Serahkan kebutuhan desain grafis Anda kepada kami, Anda cukup memberi kami brief, kami urus desainnya. Anda cukup terima beres </p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="wpb_column vc_column_container vc_col-sm-2">
												<div class="vc_column-inner">
													<div class="wpb_wrapper"></div>
												</div>
											</div>
										</div>
										<div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1626735615458 vc_row-has-fill" style="position: relative; left: 0px; box-sizing: border-box; width: 798px; max-width: 798px; padding-left: 0px; padding-right: 0px;">
											<div class="wpb_column vc_column_container vc_col-sm-12">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="wpb_single_image wpb_content_element vc_align_center">
															<figure class="wpb_wrapper vc_figure">
																<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img entered lazyloaded" src="https://www.hercodigital.id/wp-content/uploads/2021/06/hercodigital-180x33.png" width="180" height="33" alt="hercodigital" title="hercodigital" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/06/hercodigital-180x33.png" data-ll-status="loaded"><noscript><img class="vc_single_image-img " src="https://www.hercodigital.id/wp-content/uploads/2021/06/hercodigital-180x33.png" width="180" height="33" alt="hercodigital" title="hercodigital"></noscript></div>
															</figure>
														</div>
														<div id="wd-612c9044d9ff4" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-612c9044d9ff4 wd-title-color-alt wd-title-style-default text-center vc_custom_1630310475594 wd-underline-colored">
															<div class="liner-continer">
																<h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-xxl">Jasa Desain Grafis Professional</h4>
															</div>
															<div class="title-after_title  set-cont-mb-s reset-last-child  wd-fontsize-s">Berbeda dengan creative agency lainnya, kami memberikan <u><strong>all in one solution</strong></u> untuk bisnis Anda</div>
														</div>
														<div class="vc_row wpb_row vc_inner vc_row-fluid">
															<div class="wpb_column vc_column_container vc_col-sm-2">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper"></div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<ul class=" wd-rs-6103ac2a936a7 wd-list wd-wpb color-scheme-custom wd-fontsize-s wd-list-type-icon wd-list-style-default wd-justify-left " id="wd-6103ac2a936a7">
																			<li>
																				<span class="list-icon fas fa-check"></span>
																				<span class="list-content">Jasa Design Logo</span>
																			</li>
																			<li>
																				<span class="list-icon fas fa-check"></span>
																				<span class="list-content">Jasa Company Profile</span>
																			</li>
																			<li>
																				<span class="list-icon fas fa-check"></span>
																				<span class="list-content">Jasa Design Packaging</span>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<ul class=" wd-rs-6103aaa5b779c wd-list wd-wpb color-scheme-custom wd-fontsize-s wd-list-type-icon wd-list-style-default wd-justify-left " id="wd-6103aaa5b779c">
																			<li>
																				<span class="list-icon fas fa-check"></span>
																				<span class="list-content">Jasa Design Konten Social Media</span>
																			</li>
																			<li>
																				<span class="list-icon fas fa-check"></span>
																				<span class="list-content">Jasa Design Banner Ads / Iklan</span>
																			</li>
																			<li>
																				<span class="list-icon fas fa-check"></span>
																				<span class="list-content">Jasa Design Stationery</span>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-2">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="vc_row-full-width vc_clearfix"></div>
										<div class="vc_row wpb_row vc_row-fluid vc_custom_1622990793590">
											<div class="wpb_column vc_column_container vc_col-sm-12">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">


													</div>
												</div>

												<div id="wd-610421ab1086c" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-610421ab1086c wd-title-color-default wd-title-style-default text-center vc_custom_1627660728586 wd-underline-colored">
													<div class="liner-continer">
														<h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-xxl">Layanan Jasa Desain untuk Bisnis Ada</h4>
													</div>
												</div>
											</div>
										</div>
								</div>
							</div>
							<div class="vc_row wpb_row vc_row-fluid vc_custom_1627660614004 vc_row-o-content-middle vc_row-flex">
								<div class="wpb_column vc_column_container vc_col-sm-6">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_single_image wpb_content_element vc_align_center">
												<figure class="wpb_wrapper vc_figure">
													<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="600" height="455" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-branding.jpg" class="vc_single_image-img attachment-full entered lazyloaded" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-branding" data-lazy-srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-branding.jpg 600w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-branding-300x228.jpg 300w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-branding.jpg" data-ll-status="loaded" sizes="(max-width: 600px) 100vw, 600px" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-branding.jpg 600w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-branding-300x228.jpg 300w"><noscript><img width="600" height="455" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-branding.jpg" class="vc_single_image-img attachment-full" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-branding" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-branding.jpg 600w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-branding-300x228.jpg 300w" sizes="(max-width: 600px) 100vw, 600px"></noscript></div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-6">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div id="wd-6116a9f29cc32" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-6116a9f29cc32 wd-title-color-default wd-title-style-default text-left  wd-underline-colored">
												<div class="liner-continer">
													<h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-xl">Jasa Design Branding</h4>
												</div>
												<div class="title-after_title  set-cont-mb-s reset-last-child  wd-fontsize-s">Proses Menerjemahkan Nilai yang di Miliki Suatu Brand menjadi sebuah identitas yang kuat, baik secara verbal maupun visual.</div>
											</div>
											<div class="vc_row wpb_row vc_inner vc_row-fluid">
												<div class="wpb_column vc_column_container vc_col-sm-6">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<ul class=" wd-rs-6103d24c77030 wd-list wd-wpb color-scheme- wd-fontsize-s wd-list-type-icon wd-list-style-default wd-justify-left " id="wd-6103d24c77030">
																<li>
																	<span class="list-icon fas fa-long-arrow-alt-right"></span>
																	<span class="list-content">Design Logo</span>
																</li>
																<li>
																	<span class="list-icon fas fa-long-arrow-alt-right"></span>
																	<span class="list-content">Design Brand Book / Catalog Produk</span>
																</li>
																<li>
																	<span class="list-icon fas fa-long-arrow-alt-right"></span>
																	<span class="list-content">Design Company Profile</span>
																</li>
																<li>
																	<span class="list-icon fas fa-long-arrow-alt-right"></span>
																	<span class="list-content">Design Merchandise / Stationary</span>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="wpb_column vc_column_container vc_col-sm-6">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<ul class=" wd-rs-6103d27462539 wd-list wd-wpb color-scheme- wd-fontsize-s wd-list-type-icon wd-list-style-default wd-justify-left " id="wd-6103d27462539">
																<li>
																	<span class="list-icon fas fa-long-arrow-alt-right"></span>
																	<span class="list-content">Design Kartu Nama</span>
																</li>
																<li>
																	<span class="list-icon fas fa-long-arrow-alt-right"></span>
																	<span class="list-content">Design Kop Surat</span>
																</li>
																<li>
																	<span class="list-icon fas fa-long-arrow-alt-right"></span>
																	<span class="list-content">Design Map / Amplop</span>
																</li>
																<li>
																	<span class="list-icon fas fa-long-arrow-alt-right"></span>
																	<span class="list-content">Design Label Produk</span>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div id="wd-612769e9b0fd3" class="wd-text-block-wrapper wd-wpb wd-rs-612769e9b0fd3 color-scheme- text-left ">
												<div class="woodmart-title-container woodmart-text-block reset-last-child font-primary wd-font-weight-700 ">
													Harga Mulai Rp. 1.999.000 </div>
											</div>
											<div id="wd-612c53a5b0e9b" class=" wd-rs-612c53a5b0e9b  wd-button-wrapper text-left"><a href="https://api.whatsapp.com/send?phone=6281236565935&amp;text=Halo%2C%20Herco%20Digital.%20Saya%20tertarik%20mengenai%20paket%20Jasa%20Design%20Branding.%0ABisa%20dibantu%3F" title="" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-default">Pesan Sekarang</a></div>
										</div>
									</div>
								</div>
							</div>
							<div class="vc_row wpb_row vc_row-fluid vc_custom_1627660631807 vc_row-o-content-middle vc_row-flex">
								<div class="wpb_column vc_column_container vc_col-sm-6">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div id="wd-6125c7e3ddfe5" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-6125c7e3ddfe5 wd-title-color-default wd-title-style-default text-left  wd-underline-colored">
												<div class="liner-continer">


												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row wpb_row vc_row-fluid vc_custom_1653447273315 vc_row-o-content-middle vc_row-flex wd-rs-628d9a631da2f">
									<div class="wpb_column vc_column_container vc_col-sm-6">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">

											</div>
										</div>


									</div>
								</div>
							</div>
					</div>
					<div class="vc_row-full-width vc_clearfix"></div>
					<div class="vc_row wpb_row vc_row-fluid vc_custom_1627660799490">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner">
								<div class="wpb_wrapper">
									<div id="wd-610428a5b0a70" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-610428a5b0a70 wd-title-color-alt wd-title-style-simple text-center vc_custom_1627662507875 wd-underline-colored">
										<div class="liner-continer">
											<h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-xxl">Pilih Jasa Desain yang Anda Butuhkan</h4>
										</div>
									</div>
									<div class="vc_row wpb_row vc_inner vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-3">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="info-box-wrapper">
														<div id="wd-6267a4989be08" class=" wd-rs-6267a4989be08 wd-info-box wd-wpb text-center box-icon-align-top box-style- color-scheme- wd-bg-none with-btn box-btn-static vc_custom_1650959519089">
															<div class="box-icon-wrapper  box-with-icon box-icon-simple">
																<div class="info-box-icon">
																	<img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-logo.jpg" class="info-icon image-1 attachment-full entered lazyloaded" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-logo" data-lazy-srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-logo.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-logo-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-logo-150x150.jpg 150w" data-lazy-sizes="(max-width: 567px) 100vw, 567px" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-logo.jpg" data-ll-status="loaded" sizes="(max-width: 567px) 100vw, 567px" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-logo.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-logo-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-logo-150x150.jpg 150w"><noscript><img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-logo.jpg" class="info-icon image-1 attachment-full" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-logo" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-logo.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-logo-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-logo-150x150.jpg 150w" sizes="(max-width: 567px) 100vw, 567px"></noscript>
																</div>
															</div>
															<div class="info-box-content">
																<h2 class="info-box-title title box-title-style-default wd-fontsize-s">Desain Logo Profesional</h2>
																<div class="info-box-inner set-cont-mb-s reset-last-child">
																	<p>Harga Mulai Rp. 500.000</p>
																</div>
																<div class="info-btn-wrapper">
																	<div id="wd-646abfae70597" class="  wd-button-wrapper text-center"><a href="https://api.whatsapp.com/send?phone=6281236565935&amp;text=Halo%2C%20Herco%20Digital.%20Saya%20tertarik%20mengenai%20paket%20Jasa%20Desain%20Logo%20Profesional.%0ABisa%20dibantu%3F" title="" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-small">Pesan Sekarang</a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-3">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="info-box-wrapper">
														<div id="wd-6267a4a26228a" class=" wd-rs-6267a4a26228a wd-info-box wd-wpb text-center box-icon-align-top box-style- color-scheme- wd-bg-none with-btn box-btn-static vc_custom_1650959528685">
															<div class="box-icon-wrapper  box-with-icon box-icon-simple">
																<div class="info-box-icon">
																	<img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kartu-nama.jpg" class="info-icon image-1 attachment-full entered lazyloaded" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-kartu-nama" data-lazy-srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kartu-nama.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kartu-nama-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kartu-nama-150x150.jpg 150w" data-lazy-sizes="(max-width: 567px) 100vw, 567px" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kartu-nama.jpg" data-ll-status="loaded" sizes="(max-width: 567px) 100vw, 567px" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kartu-nama.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kartu-nama-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kartu-nama-150x150.jpg 150w"><noscript><img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kartu-nama.jpg" class="info-icon image-1 attachment-full" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-kartu-nama" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kartu-nama.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kartu-nama-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kartu-nama-150x150.jpg 150w" sizes="(max-width: 567px) 100vw, 567px"></noscript>
																</div>
															</div>
															<div class="info-box-content">
																<h2 class="info-box-title title box-title-style-default wd-fontsize-s">Desain Kartu Nama</h2>
																<div class="info-box-inner set-cont-mb-s reset-last-child">
																	<p>Harga Mulai Rp. 150.000</p>
																</div>
																<div class="info-btn-wrapper">
																	<div id="wd-646abfae70ac5" class="  wd-button-wrapper text-center"><a href="https://api.whatsapp.com/send?phone=6281236565935&amp;text=Halo%2C%20Herco%20Digital.%20Saya%20tertarik%20mengenai%20paket%20Jasa%20Desain%20Kartu%20Nama.%0ABisa%20dibantu%3F" title="" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-small">Pesan Sekarang</a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-3">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="info-box-wrapper">
														<div id="wd-6267a4acb1835" class=" wd-rs-6267a4acb1835 wd-info-box wd-wpb text-center box-icon-align-top box-style- color-scheme- wd-bg-none with-btn box-btn-static vc_custom_1650959537800">
															<div class="box-icon-wrapper  box-with-icon box-icon-simple">
																<div class="info-box-icon">
																	<img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kemasan.jpg" class="info-icon image-1 attachment-full entered lazyloaded" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-kemasan" data-lazy-srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kemasan.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kemasan-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kemasan-150x150.jpg 150w" data-lazy-sizes="(max-width: 567px) 100vw, 567px" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kemasan.jpg" data-ll-status="loaded" sizes="(max-width: 567px) 100vw, 567px" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kemasan.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kemasan-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kemasan-150x150.jpg 150w"><noscript><img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kemasan.jpg" class="info-icon image-1 attachment-full" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-kemasan" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kemasan.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kemasan-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kemasan-150x150.jpg 150w" sizes="(max-width: 567px) 100vw, 567px"></noscript>
																</div>
															</div>
															<div class="info-box-content">
																<h2 class="info-box-title title box-title-style-default wd-fontsize-s">Desain Kemasan</h2>
																<div class="info-box-inner set-cont-mb-s reset-last-child">
																	<p>Harga Mulai Rp. 300.000</p>
																</div>
																<div class="info-btn-wrapper">
																	<div id="wd-646abfae70fe5" class="  wd-button-wrapper text-center"><a href="https://api.whatsapp.com/send?phone=6281236565935&amp;text=Halo%2C%20Herco%20Digital.%20Saya%20tertarik%20mengenai%20paket%20Jasa%20Desain%20Kemasan.%0ABisa%20dibantu%3F" title="" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-small">Pesan Sekarang</a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-3">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="info-box-wrapper">
														<div id="wd-6267a4b54e7b4" class=" wd-rs-6267a4b54e7b4 wd-info-box wd-wpb text-center box-icon-align-top box-style- color-scheme- wd-bg-none with-btn box-btn-static vc_custom_1650959546584">
															<div class="box-icon-wrapper  box-with-icon box-icon-simple">
																<div class="info-box-icon">
																	<img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-banner.jpg" class="info-icon image-1 attachment-full entered lazyloaded" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-banner" data-lazy-srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-banner.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-banner-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-banner-150x150.jpg 150w" data-lazy-sizes="(max-width: 567px) 100vw, 567px" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-banner.jpg" data-ll-status="loaded" sizes="(max-width: 567px) 100vw, 567px" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-banner.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-banner-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-banner-150x150.jpg 150w"><noscript><img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-banner.jpg" class="info-icon image-1 attachment-full" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-banner" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-banner.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-banner-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-banner-150x150.jpg 150w" sizes="(max-width: 567px) 100vw, 567px"></noscript>
																</div>
															</div>
															<div class="info-box-content">
																<h2 class="info-box-title title box-title-style-default wd-fontsize-s">Desain Banner</h2>
																<div class="info-box-inner set-cont-mb-s reset-last-child">
																	<p>Harga Mulai Rp. 200.000</p>
																</div>
																<div class="info-btn-wrapper">
																	<div id="wd-646abfae71504" class="  wd-button-wrapper text-center"><a href="https://api.whatsapp.com/send?phone=6281236565935&amp;text=Halo%2C%20Herco%20Digital.%20Saya%20tertarik%20mengenai%20paket%20Jasa%20Desain%20Banner.%0ABisa%20dibantu%3F" title="" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-small">Pesan Sekarang</a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="vc_row wpb_row vc_inner vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-3">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="info-box-wrapper">
														<div id="wd-6267a4bedb6ac" class=" wd-rs-6267a4bedb6ac wd-info-box wd-wpb text-center box-icon-align-top box-style- color-scheme- wd-bg-none with-btn box-btn-static vc_custom_1650959556096">
															<div class="box-icon-wrapper  box-with-icon box-icon-simple">
																<div class="info-box-icon">
																	<img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-brosur.jpg" class="info-icon image-1 attachment-full entered lazyloaded" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-brosur" data-lazy-srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-brosur.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-brosur-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-brosur-150x150.jpg 150w" data-lazy-sizes="(max-width: 567px) 100vw, 567px" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-brosur.jpg" data-ll-status="loaded" sizes="(max-width: 567px) 100vw, 567px" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-brosur.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-brosur-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-brosur-150x150.jpg 150w"><noscript><img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-brosur.jpg" class="info-icon image-1 attachment-full" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-brosur" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-brosur.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-brosur-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-brosur-150x150.jpg 150w" sizes="(max-width: 567px) 100vw, 567px"></noscript>
																</div>
															</div>
															<div class="info-box-content">
																<h2 class="info-box-title title box-title-style-default wd-fontsize-s">Desain Brosur</h2>
																<div class="info-box-inner set-cont-mb-s reset-last-child">
																	<p>Harga Mulai Rp. 150.000 / Halaman</p>
																</div>
																<div class="info-btn-wrapper">
																	<div id="wd-646abfae71b59" class="  wd-button-wrapper text-center"><a href="https://api.whatsapp.com/send?phone=6281236565935&amp;text=Halo%2C%20Herco%20Digital.%20Saya%20tertarik%20mengenai%20paket%20Jasa%20Desain%20Brosur.%0ABisa%20dibantu%3F" title="" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-small">Pesan Sekarang</a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-3">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="info-box-wrapper">
														<div id="wd-6267a4c7759a7" class=" wd-rs-6267a4c7759a7 wd-info-box wd-wpb text-center box-icon-align-top box-style- color-scheme- wd-bg-none with-btn box-btn-static vc_custom_1650959564552">
															<div class="box-icon-wrapper  box-with-icon box-icon-simple">
																<div class="info-box-icon">
																	<img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-produk-label.jpg" class="info-icon image-1 attachment-full entered lazyloaded" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-produk-label" data-lazy-srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-produk-label.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-produk-label-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-produk-label-150x150.jpg 150w" data-lazy-sizes="(max-width: 567px) 100vw, 567px" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-produk-label.jpg" data-ll-status="loaded" sizes="(max-width: 567px) 100vw, 567px" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-produk-label.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-produk-label-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-produk-label-150x150.jpg 150w"><noscript><img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-produk-label.jpg" class="info-icon image-1 attachment-full" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-produk-label" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-produk-label.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-produk-label-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-produk-label-150x150.jpg 150w" sizes="(max-width: 567px) 100vw, 567px"></noscript>
																</div>
															</div>
															<div class="info-box-content">
																<h2 class="info-box-title title box-title-style-default wd-fontsize-s">Desain Produk Label</h2>
																<div class="info-box-inner set-cont-mb-s reset-last-child">
																	<p>Harga Mulai Rp. 150.000</p>
																</div>
																<div class="info-btn-wrapper">
																	<div id="wd-646abfae72030" class="  wd-button-wrapper text-center"><a href="https://api.whatsapp.com/send?phone=6281236565935&amp;text=Halo%2C%20Herco%20Digital.%20%0ASaya%20tertarik%20mengenai%20Jasa%20Desain%20Produk%20Label.%0ABisa%20dibantu%3F" title="" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-small">Pesan Sekarang</a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-3">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="info-box-wrapper">
														<div id="wd-6267a4d06f960" class=" wd-rs-6267a4d06f960 wd-info-box wd-wpb text-center box-icon-align-top box-style- color-scheme- wd-bg-none with-btn box-btn-static vc_custom_1650959572512">
															<div class="box-icon-wrapper  box-with-icon box-icon-simple">
																<div class="info-box-icon">
																	<img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-stamp-1.jpg" class="info-icon image-1 attachment-full entered lazyloaded" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-stamp (1)" data-lazy-srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-stamp-1.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-stamp-1-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-stamp-1-150x150.jpg 150w" data-lazy-sizes="(max-width: 567px) 100vw, 567px" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-stamp-1.jpg" data-ll-status="loaded" sizes="(max-width: 567px) 100vw, 567px" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-stamp-1.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-stamp-1-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-stamp-1-150x150.jpg 150w"><noscript><img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-stamp-1.jpg" class="info-icon image-1 attachment-full" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-stamp (1)" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-stamp-1.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-stamp-1-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-stamp-1-150x150.jpg 150w" sizes="(max-width: 567px) 100vw, 567px"></noscript>
																</div>
															</div>
															<div class="info-box-content">
																<h2 class="info-box-title title box-title-style-default wd-fontsize-s">Desain Stamp</h2>
																<div class="info-box-inner set-cont-mb-s reset-last-child">
																	<p>Harga Mulai Rp. 150.000</p>
																</div>
																<div class="info-btn-wrapper">
																	<div id="wd-646abfae7253c" class="  wd-button-wrapper text-center"><a href="https://api.whatsapp.com/send?phone=6281236565935&amp;text=Halo%2C%20Herco%20Digital.%20%0ASaya%20tertarik%20mengenai%20Jasa%20Desain%20Logo%20Toko%20Online.%0ABisa%20dibantu%3F" title="" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-small">Pesan Sekarang</a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-3">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="info-box-wrapper">
														<div id="wd-6267a4d803ccd" class=" wd-rs-6267a4d803ccd wd-info-box wd-wpb text-center box-icon-align-top box-style- color-scheme- wd-bg-none with-btn box-btn-static vc_custom_1650959580523">
															<div class="box-icon-wrapper  box-with-icon box-icon-simple">
																<div class="info-box-icon">
																	<img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kalender.jpg" class="info-icon image-1 attachment-full entered lazyloaded" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-kalender" data-lazy-srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kalender.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kalender-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kalender-150x150.jpg 150w" data-lazy-sizes="(max-width: 567px) 100vw, 567px" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kalender.jpg" data-ll-status="loaded" sizes="(max-width: 567px) 100vw, 567px" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kalender.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kalender-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kalender-150x150.jpg 150w"><noscript><img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kalender.jpg" class="info-icon image-1 attachment-full" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-kalender" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kalender.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kalender-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kalender-150x150.jpg 150w" sizes="(max-width: 567px) 100vw, 567px"></noscript>
																</div>
															</div>
															<div class="info-box-content">
																<h2 class="info-box-title title box-title-style-default wd-fontsize-s">Desain Kalender</h2>
																<div class="info-box-inner set-cont-mb-s reset-last-child">
																	<p>Harga Mulai Rp. 500.000</p>
																</div>
																<div class="info-btn-wrapper">
																	<div id="wd-646abfae72a7a" class="  wd-button-wrapper text-center"><a href="https://api.whatsapp.com/send?phone=6281236565935&amp;text=Halo%2C%20Herco%20Digital.%20%0ASaya%20tertarik%20mengenai%20Jasa%20Desain%20Kalender.%0ABisa%20dibantu%3F" title="" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-small">Pesan Sekarang</a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="vc_row wpb_row vc_inner vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-3">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="info-box-wrapper">
														<div id="wd-6267a4e06facc" class=" wd-rs-6267a4e06facc wd-info-box wd-wpb text-center box-icon-align-top box-style- color-scheme- wd-bg-none with-btn box-btn-static vc_custom_1650959588729">
															<div class="box-icon-wrapper  box-with-icon box-icon-simple">
																<div class="info-box-icon">
																	<img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-sertifikat.jpg" class="info-icon image-1 attachment-full entered lazyloaded" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-sertifikat" data-lazy-srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-sertifikat.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-sertifikat-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-sertifikat-150x150.jpg 150w" data-lazy-sizes="(max-width: 567px) 100vw, 567px" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-sertifikat.jpg" data-ll-status="loaded" sizes="(max-width: 567px) 100vw, 567px" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-sertifikat.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-sertifikat-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-sertifikat-150x150.jpg 150w"><noscript><img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-sertifikat.jpg" class="info-icon image-1 attachment-full" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-sertifikat" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-sertifikat.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-sertifikat-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-sertifikat-150x150.jpg 150w" sizes="(max-width: 567px) 100vw, 567px"></noscript>
																</div>
															</div>
															<div class="info-box-content">
																<h2 class="info-box-title title box-title-style-default wd-fontsize-s">Desain Sertifikat</h2>
																<div class="info-box-inner set-cont-mb-s reset-last-child">
																	<p>Harga Mulai Rp. 200.000</p>
																</div>
																<div class="info-btn-wrapper">
																	<div id="wd-646abfae73093" class="  wd-button-wrapper text-center"><a href="https://api.whatsapp.com/send?phone=6281236565935&amp;text=Halo%2C%20Herco%20Digital.%20%0ASaya%20tertarik%20mengenai%20Jasa%20Desain%20Sertifikat.%0ABisa%20dibantu%3F" title="" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-small">Pesan Sekarang</a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-3">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="info-box-wrapper">
														<div id="wd-6267a4e7ddfd6" class=" wd-rs-6267a4e7ddfd6 wd-info-box wd-wpb text-center box-icon-align-top box-style- color-scheme- wd-bg-none with-btn box-btn-static vc_custom_1650959596389">
															<div class="box-icon-wrapper  box-with-icon box-icon-simple">
																<div class="info-box-icon">
																	<img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-amplop.jpg" class="info-icon image-1 attachment-full entered lazyloaded" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-amplop" data-lazy-srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-amplop.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-amplop-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-amplop-150x150.jpg 150w" data-lazy-sizes="(max-width: 567px) 100vw, 567px" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-amplop.jpg" data-ll-status="loaded" sizes="(max-width: 567px) 100vw, 567px" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-amplop.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-amplop-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-amplop-150x150.jpg 150w"><noscript><img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-amplop.jpg" class="info-icon image-1 attachment-full" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-amplop" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-amplop.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-amplop-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-amplop-150x150.jpg 150w" sizes="(max-width: 567px) 100vw, 567px"></noscript>
																</div>
															</div>
															<div class="info-box-content">
																<h2 class="info-box-title title box-title-style-default wd-fontsize-s">Desain Amplop</h2>
																<div class="info-box-inner set-cont-mb-s reset-last-child">
																	<p>Harga Mulai Rp. 100.000</p>
																</div>
																<div class="info-btn-wrapper">
																	<div id="wd-646abfae73579" class="  wd-button-wrapper text-center"><a href="https://api.whatsapp.com/send?phone=6281236565935&amp;text=Halo%2C%20Herco%20Digital.%20%0ASaya%20tertarik%20mengenai%20Jasa%20Desain%20Amplop.%0ABisa%20dibantu%3F" title="" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-small">Pesan Sekarang</a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-3">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="info-box-wrapper">
														<div id="wd-6267a4f04ed76" class=" wd-rs-6267a4f04ed76 wd-info-box wd-wpb text-center box-icon-align-top box-style- color-scheme- wd-bg-none with-btn box-btn-static vc_custom_1650959604252">
															<div class="box-icon-wrapper  box-with-icon box-icon-simple">
																<div class="info-box-icon">
																	<img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kop-surat.jpg" class="info-icon image-1 attachment-full entered lazyloaded" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-kop-surat" data-lazy-srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kop-surat.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kop-surat-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kop-surat-150x150.jpg 150w" data-lazy-sizes="(max-width: 567px) 100vw, 567px" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kop-surat.jpg" data-ll-status="loaded" sizes="(max-width: 567px) 100vw, 567px" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kop-surat.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kop-surat-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kop-surat-150x150.jpg 150w"><noscript><img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kop-surat.jpg" class="info-icon image-1 attachment-full" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-kop-surat" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kop-surat.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kop-surat-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-kop-surat-150x150.jpg 150w" sizes="(max-width: 567px) 100vw, 567px"></noscript>
																</div>
															</div>
															<div class="info-box-content">
																<h2 class="info-box-title title box-title-style-default wd-fontsize-s">Desain Kop Surat</h2>
																<div class="info-box-inner set-cont-mb-s reset-last-child">
																	<p>Harga Mulai Rp. 100.000</p>
																</div>
																<div class="info-btn-wrapper">
																	<div id="wd-646abfae73a98" class="  wd-button-wrapper text-center"><a href="https://api.whatsapp.com/send?phone=6281236565935&amp;text=Halo%2C%20Herco%20Digital.%20%0ASaya%20tertarik%20mengenai%20Jasa%20Desain%20Kop%20Surat.%0ABisa%20dibantu%3F" title="" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-small">Pesan Sekarang</a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-3">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="info-box-wrapper">
														<div id="wd-6267a4f7c8bdb" class=" wd-rs-6267a4f7c8bdb wd-info-box wd-wpb text-center box-icon-align-top box-style- color-scheme- wd-bg-none with-btn box-btn-static vc_custom_1650959613272">
															<div class="box-icon-wrapper  box-with-icon box-icon-simple">
																<div class="info-box-icon">
																	<img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-merchandise.jpg" class="info-icon image-1 attachment-full entered lazyloaded" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-merchandise" data-lazy-srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-merchandise.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-merchandise-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-merchandise-150x150.jpg 150w" data-lazy-sizes="(max-width: 567px) 100vw, 567px" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-merchandise.jpg" data-ll-status="loaded" sizes="(max-width: 567px) 100vw, 567px" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-merchandise.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-merchandise-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-merchandise-150x150.jpg 150w"><noscript><img width="567" height="567" src="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-merchandise.jpg" class="info-icon image-1 attachment-full" alt="Jasa Desain, Service &amp;#8211; Desain Grafis" decoding="async" title="jasa-design-merchandise" srcset="https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-merchandise.jpg 567w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-merchandise-300x300.jpg 300w, https://www.hercodigital.id/wp-content/uploads/2021/08/jasa-design-merchandise-150x150.jpg 150w" sizes="(max-width: 567px) 100vw, 567px"></noscript>
																</div>
															</div>
															<div class="info-box-content">
																<h2 class="info-box-title title box-title-style-default wd-fontsize-s">Desain Merchandise</h2>
																<div class="info-box-inner set-cont-mb-s reset-last-child">
																	<p>Harga Mulai Rp. 150.000</p>
																</div>
																<div class="info-btn-wrapper">
																	<div id="wd-646abfae73f5e" class="  wd-button-wrapper text-center"><a href="https://api.whatsapp.com/send?phone=6281236565935&amp;text=Halo%2C%20Herco%20Digital.%20%0ASaya%20tertarik%20mengenai%20Jasa%20Desain%20Merchandise.%0ABisa%20dibantu%3F" title="" class="btn btn-color-alt btn-style-default btn-style-semi-round btn-size-small">Pesan Sekarang</a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="vc_row wpb_row vc_row-fluid vc_custom_1622990793590">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner">
								<div class="wpb_wrapper"></div>
							</div>
						</div>
					</div>
					<div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1627250536260 vc_row-has-fill" style="position: relative; left: 0px; box-sizing: border-box; width: 798px; max-width: 798px; padding-left: 0px; padding-right: 0px;">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner">
								<div class="wpb_wrapper">
									<div id="wd-6103db754da97" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-6103db754da97 wd-title-color-alt wd-title-style-simple text-center vc_custom_1627642768223 wd-underline-colored">

									</div>
									<style></style>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-2">
					<div class="vc_column-inner">
						<div class="wpb_wrapper"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	<div class="vc_row-full-width vc_clearfix"></div>
	<div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1626735467742" style="position: relative; left: 0px; box-sizing: border-box; width: 798px; max-width: 798px; padding-left: 0px; padding-right: 0px;">
		<div class="wpb_column vc_column_container vc_col-sm-12">
			<div class="vc_column-inner">
				<div class="wpb_wrapper">
					<div id="wd-6103d3ea971be" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-6103d3ea971be wd-title-color-default wd-title-style-default text-center  wd-underline-colored">
						<div class="liner-continer">

						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="wpb_column vc_column_container vc_col-sm-4">
		<div class="vc_column-inner">
			<div class="wpb_wrapper">
				<div id="wd-612d18e54c6eb" class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-612d18e54c6eb wd-title-color-default wd-title-style-default text-left  wd-underline-colored">
					<div class="liner-continer">
						<h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-l">Contact Us</h4>
					</div>
				</div>
				<div class="info-box-wrapper">
					<div id="wd-63fd88e817f9b" class=" wd-rs-63fd88e817f9b cursor-pointer wd-info-box wd-wpb text-left box-icon-align-left box-style- color-scheme- wd-bg-none wd-items-top footer-contact footer-wa vc_custom_1677560046684">
						<div class="box-icon-wrapper  box-with-icon box-icon-simple">
							<div class="info-box-icon">
								<img class="info-icon image-1 " src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2040%2041'%3E%3C/svg%3E" width="40" height="41" alt="whaicon" title="whaicon" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/06/whaicon-40x41.png"><noscript><img class="info-icon image-1 " src="https://www.hercodigital.id/wp-content/uploads/2021/06/whaicon-40x41.png" width="40" height="41" alt="whaicon" title="whaicon" /></noscript>
							</div>
						</div>
						<div class="info-box-content">
							<h4 class="info-box-title title box-title-style-default wd-fontsize-m">Chat Whatsapp</h4>
							<div class="info-box-inner set-cont-mb-s reset-last-child">
								<p><span style="color: #00203f;"><a style="color: #00203f;" href="http://bit.ly/kontakwafooter" target="_blank" rel="noopener">0812 3656 5935</a></span><br>
									<span style="color: #00203f;"><a style="color: #00203f;" href="https://api.whatsapp.com/send?phone=628126868945&amp;text=Halo,+Herco+Digital.+Saya+ingin+konsultasi+mengenai+digital+marketing+untuk+bisnis+Saya.+Bisa+dibantu%3F">0812 6868 945</a></span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="info-box-wrapper">
					<div id="wd-612e78b074e28" class=" wd-rs-612e78b074e28 cursor-pointer wd-info-box wd-wpb text-left box-icon-align-left box-style- color-scheme- wd-bg-none wd-items-top footer-contact footer-email vc_custom_1630435513131" onclick="window.location.href=&quot;mailto:sales@hercodigital.id&quot;">
						<div class="box-icon-wrapper  box-with-icon box-icon-simple">
							<div class="info-box-icon">
								<img class="info-icon image-1 " src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2041%2036'%3E%3C/svg%3E" width="41" height="36" alt="mail" title="mail" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2021/06/mail-41x36.png"><noscript><img class="info-icon image-1 " src="https://www.hercodigital.id/wp-content/uploads/2021/06/mail-41x36.png" width="41" height="36" alt="mail" title="mail" /></noscript>
							</div>
						</div>
						<div class="info-box-content">
							<h4 class="info-box-title title box-title-style-default wd-fontsize-m">Email</h4>
							<div class="info-box-inner set-cont-mb-s reset-last-child">
								<p>sales@hercodigital.id</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wpb_column vc_column_container vc_col-sm-4">
		<div class="vc_column-inner">
			<div class="wpb_wrapper">
				<div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex wd-rs-63ca429a4bc2b">
					<div class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-6">
						<div class="vc_column-inner">
							<div class="wpb_wrapper">
								<div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1677554924251">
									<figure class="wpb_wrapper vc_figure">
										<a href="https://www.google.com/partners/agency?id=7725447487" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%2096'%3E%3C/svg%3E" width="100" height="96" alt="Klik Badge Untuk Verifikasi" title="Hercodigital Google Premier Partner Badge" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2023/02/PremierBadge-1-100x96.webp"><noscript><img class="vc_single_image-img " src="https://www.hercodigital.id/wp-content/uploads/2023/02/PremierBadge-1-100x96.webp" width="100" height="96" alt="Klik Badge Untuk Verifikasi" title="Hercodigital Google Premier Partner Badge" /></noscript></a>
									</figure>
								</div>
							</div>
						</div>
					</div>
					<div class="wpb_column vc_column_container vc_col-sm-4">
						<div class="vc_column-inner">
							<div class="wpb_wrapper">
								<div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1677554932375">
									<figure class="wpb_wrapper vc_figure">
										<a href="https://www.credly.com/badges/34e1a91d-dac5-4c9e-b7a1-af48def239aa/embedded" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%20100'%3E%3C/svg%3E" width="100" height="100" alt="Klik Badge Untuk Verifikasi" title="Meta Certified Digital Marketing Associate" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2022/01/Meta-Certified-100x100.png"><noscript><img class="vc_single_image-img " src="https://www.hercodigital.id/wp-content/uploads/2022/01/Meta-Certified-100x100.png" width="100" height="100" alt="Klik Badge Untuk Verifikasi" title="Meta Certified Digital Marketing Associate" /></noscript></a>
									</figure>
								</div>
							</div>
						</div>
					</div>
					<div class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-6">
						<div class="vc_column-inner">
							<div class="wpb_wrapper">
								<div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1683259172984">
									<figure class="wpb_wrapper vc_figure">
										<a href=" https://www.credly.com/badges/9fff653e-39be-4370-85b3-11f0099f325a/public_url" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%20100'%3E%3C/svg%3E" width="100" height="100" alt="Klik Badge Untuk Verifikasi" title="certified badge meta creative" data-lazy-src="https://www.hercodigital.id/wp-content/uploads/2023/05/certified-badge-meta-creative-100x100.webp"><noscript><img class="vc_single_image-img " src="https://www.hercodigital.id/wp-content/uploads/2023/05/certified-badge-meta-creative-100x100.webp" width="100" height="100" alt="Klik Badge Untuk Verifikasi" title="certified badge meta creative" /></noscript></a>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wpb_text_column wpb_content_element vc_custom_1678350754552">
					<div class="wpb_wrapper">
						<p><a href="https://www.hercodigital.id/googlepartner/">Tentang Google Partner?</a></p>
					</div>
				</div>
				<div class="wd-social-icons  icons-design-default icons-size-small color-scheme-dark social-follow social-form-circle text-left">
					<a rel="noopener noreferrer nofollow" href="https://www.facebook.com/hercodigitalindonesia" target="_blank" class=" wd-social-icon social-facebook" aria-label="Facebook social link">
						<span class="wd-icon"></span>
					</a>
					<a rel="noopener noreferrer nofollow" href="https://www.instagram.com/hercodigitalindonesia/" target="_blank" class=" wd-social-icon social-instagram" aria-label="Instagram social link">
						<span class="wd-icon"></span>
					</a>
					<a rel="noopener noreferrer nofollow" href="https://www.youtube.com/@hercodigital" target="_blank" class=" wd-social-icon social-youtube" aria-label="YouTube social link">
						<span class="wd-icon"></span>
					</a>
					<a rel="noopener noreferrer nofollow" href="https://www.tiktok.com/@hercodigitalindonesia" target="_blank" class=" wd-social-icon social-tiktok" aria-label="TikTok social link">
						<span class="wd-icon"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="vc_row-full-width vc_clearfix"></div>
	<p></p>
	</div>
	</div>
	<footer class="footer-container color-scheme-dark">
		<div class="copyrights-wrapper copyrights-centered">
			<div class="container">
				<div class="min-footer">
					<div class="col-left set-cont-mb-s reset-last-child">
						<small><i class="fa fa-copyright"></i> <span id="tahun">2023</span> <a href="https://www.hercodigital.id/"><strong> PT Herco Digital Indonesia. All rights reserved</strong></a><br>
							<a href="https://www.hercodigital.id/privacy-policy/">Privacy Policy</a> | <a href="https://www.hercodigital.id/terms-of-service/">Terms of service</a> | <a href="https://www.hercodigital.id/google-certified-partner-disclosure/">Google Certified Partner Disclosure</a><a></a></small><a> </a>
					</div><a>
					</a>
				</div><a>
				</a>
			</div><a>
			</a>
		</div><a>
		</a>
	</footer><a>
	</a></div><a>
		<div class="wd-close-side wd-fill"></div>
	</a>
	<div class="mobile-nav wd-side-hidden wd-left"><a></a>
		<ul id="menu-mobile-menu" class="mobile-pages-menu wd-nav wd-nav-mobile wd-active"><a></a>
			<li id="menu-item-15061" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15061 item-level-0"><a></a><a href="https://www.hercodigital.id/?utm_source=nav&amp;utm_medium=menu&amp;utm_campaign=klik" class="woodmart-nav-link"><span class="nav-link-text">Home</span></a></li>
			<li id="menu-item-15069" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-15069 item-level-0"><a href="https://www.hercodigital.id/solutions/" class="woodmart-nav-link"><span class="nav-link-text">Solutions</span></a>
				<ul class="wd-sub-menu">
					<li id="menu-item-16803" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16803 item-level-1"><a href="https://www.hercodigital.id/ecommerce-retail/" class="woodmart-nav-link">E-commerce &amp; Retail</a></li>
					<li id="menu-item-16804" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16804 item-level-1"><a href="https://www.hercodigital.id/jasa-digital-marketing-untuk-sekolah-universitas/" class="woodmart-nav-link">Education</a></li>
					<li id="menu-item-16805" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16805 item-level-1"><a href="https://www.hercodigital.id/konsultan-digital-marketing-perbankan/" class="woodmart-nav-link">Financial</a></li>
					<li id="menu-item-16806" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16806 item-level-1"><a href="https://www.hercodigital.id/jasa-digital-branding-untuk-instansi-pemerintah/" class="woodmart-nav-link">Government</a></li>
					<li id="menu-item-16807" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16807 item-level-1"><a href="https://www.hercodigital.id/jasa-digital-marketing-produk-kesehatan/" class="woodmart-nav-link">Health</a></li>
					<li id="menu-item-16808" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16808 item-level-1"><a href="https://www.hercodigital.id/solutions-manufacturing/" class="woodmart-nav-link">Manufacturing</a></li>
					<li id="menu-item-16809" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16809 item-level-1"><a href="https://www.hercodigital.id/konsultan-digital-marketing-untuk-bisnis-jasa/" class="woodmart-nav-link">Professional Service</a></li>
					<li id="menu-item-16810" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16810 item-level-1"><a href="https://www.hercodigital.id/jasa-digital-marketing-property/" class="woodmart-nav-link">Property &amp; Home Decor</a></li>
				</ul>
				<span class="wd-nav-opener"></span>
			</li>
			<li id="menu-item-15068" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-15068 item-level-0"><a href="https://www.hercodigital.id/services/" class="woodmart-nav-link"><span class="nav-link-text">Services</span></a>
				<ul class="wd-sub-menu">
					<li id="menu-item-16801" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16801 item-level-1"><a href="https://www.hercodigital.id/jasa-iklan-google/" class="woodmart-nav-link">Google Ads</a></li>
					<li id="menu-item-16797" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16797 item-level-1"><a href="https://www.hercodigital.id/jasa-social-media-management/" class="woodmart-nav-link">Social Media Management</a></li>
					<li id="menu-item-18541" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18541 item-level-1"><a href="https://www.hercodigital.id/jasa-iklan-kolaboratif-marketplace/" class="woodmart-nav-link">Jasa Iklan Marketplace</a></li>
					<li id="menu-item-16799" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16799 item-level-1"><a href="https://www.hercodigital.id/jasa-pembuatan-konten-sosial-media/" class="woodmart-nav-link">Content Creation</a></li>
					<li id="menu-item-16798" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16798 item-level-1"><a href="https://www.hercodigital.id/jasa-iklan-facebook-instagram-tertarget/" class="woodmart-nav-link">Social Media Advertising</a></li>
					<li id="menu-item-19297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19297 item-level-1"><a href="https://www.hercodigital.id/jasa-iklan-tiktok/" class="woodmart-nav-link">Tiktok Ads</a></li>
					<li id="menu-item-20853" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20853 item-level-1"><a href="https://www.hercodigital.id/jasa-tiktok-management/" class="woodmart-nav-link">Tiktok Management</a></li>
					<li id="menu-item-16800" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-15008 current_page_item menu-item-16800 item-level-1"><a href="https://www.hercodigital.id/jasa-desain-grafis/" class="woodmart-nav-link">Desain Grafis</a></li>
					<li id="menu-item-16795" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16795 item-level-1"><a href="https://www.hercodigital.id/jasa-iklan-youtube/" class="woodmart-nav-link">Youtube Ads</a></li>
					<li id="menu-item-16796" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16796 item-level-1"><a href="https://www.hercodigital.id/jasa-pembuatan-website/" class="woodmart-nav-link">Website</a></li>
					<li id="menu-item-16802" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16802 item-level-1"><a href="https://www.hercodigital.id/jasa-seo/" class="woodmart-nav-link">Jasa SEO</a></li>
					<li id="menu-item-20107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20107 item-level-1"><a href="https://www.hercodigital.id/service-admin-marketplace/" class="woodmart-nav-link">Jasa Admin Marketplace</a></li>
				</ul>
				<span class="wd-nav-opener"></span>
			</li>
			<li id="menu-item-15065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-15065 item-level-0"><a href="https://www.hercodigital.id/case-studies/" class="woodmart-nav-link"><span class="nav-link-text">Case Studies</span></a>
				<ul class="wd-sub-menu">
					<li id="menu-item-16158" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16158 item-level-1"><a href="https://www.hercodigital.id/jasa-social-media-management-ads/" class="woodmart-nav-link">Jasa Social Media</a></li>
					<li id="menu-item-16157" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16157 item-level-1"><a href="https://www.hercodigital.id/jasa-pembuatan-foto-video/" class="woodmart-nav-link">Content Creation</a></li>
					<li id="menu-item-16159" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16159 item-level-1"><a href="https://www.hercodigital.id/jasa-google-ads-youtube-ads/" class="woodmart-nav-link">Google &amp; Youtube Ads</a></li>
					<li id="menu-item-16156" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16156 item-level-1"><a href="https://www.hercodigital.id/jasa-seo-professional/" class="woodmart-nav-link">SEO</a></li>
					<li id="menu-item-16155" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16155 item-level-1"><a href="https://www.hercodigital.id/jasa-website-development/" class="woodmart-nav-link">Website Development</a></li>
				</ul>
				<span class="wd-nav-opener"></span>
			</li>
			<li id="menu-item-15066" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15066 item-level-0"><a href="https://www.hercodigital.id/company/" class="woodmart-nav-link"><span class="nav-link-text">Company</span></a></li>
			<li id="menu-item-15063" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15063 item-level-0"><a href="https://www.hercodigital.id/career/" class="woodmart-nav-link"><span class="nav-link-text">Career</span></a></li>
			<li id="menu-item-15062" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15062 item-level-0"><a href="https://www.hercodigital.id/articles/" class="woodmart-nav-link"><span class="nav-link-text">Articles</span></a></li>
			<li id="menu-item-15067" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15067 item-level-0"><a href="https://www.hercodigital.id/contact-us/" class="woodmart-nav-link"><span class="nav-link-text">Contact Us</span></a></li>
		</ul>
	</div>
	<style id="woodmart-inline-css-inline-css" type="text/css">
		#wd-61031a8685f24 .list-icon {
			color: #333333;
		}

		#wd-6103b4021e164 .list-icon {
			color: eyJwYXJhbV90eXBlIjoid29vZG1hcnRfY29sb3JwaWNrZXIiLCJjc3NfYXJncyI6eyJjb2xvciI6WyIgLmxpc3QtaWNvbiJdfSwic2VsZWN0b3JfaWQiOiI2MTAzYjQwMjFlMTY0IiwiZGF0YSI6eyJkZXNrdG9wIjoiI2ZmZmZmZiJ9fQ==;
		}

		#wd-6103b3d339913 .list-icon {
			color: eyJwYXJhbV90eXBlIjoid29vZG1hcnRfY29sb3JwaWNrZXIiLCJjc3NfYXJncyI6eyJjb2xvciI6WyIgLmxpc3QtaWNvbiJdfSwic2VsZWN0b3JfaWQiOiI2MTAzYjNkMzM5OTEzIiwiZGF0YSI6eyJkZXNrdG9wIjoiI2ZmZmZmZiJ9fQ==;
		}

		#wd-6103ac2a936a7 .list-icon {
			color: #333333;
		}

		#wd-6103aaa5b779c .list-icon {
			color: #333333;
		}

		#wd-6103d24c77030 .list-icon {
			color: #333333;
		}

		#wd-6103d27462539 .list-icon {
			color: #333333;
		}

		#wd-6116ab2ad5245 .list-icon {
			color: #333333;
		}

		#wd-6116ab3842ba6 .list-icon {
			color: #333333;
		}
	</style>
	<script type="text/javascript" data-minify="1" id="swv-js" defer="" src="https://www.hercodigital.id/wp-content/cache/min/1/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=1684298285" data-rocket-status="executed"></script>
	<script type="text/javascript" id="contact-form-7-js-extra">
		/* <![CDATA[ */
		var wpcf7 = {
			"api": {
				"root": "https:\/\/www.hercodigital.id\/wp-json\/",
				"namespace": "contact-form-7\/v1"
			},
			"cached": "1"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" data-minify="1" id="contact-form-7-js" defer="" src="https://www.hercodigital.id/wp-content/cache/min/1/wp-content/plugins/contact-form-7/includes/js/index.js?ver=1684298285" data-rocket-status="executed"></script>
	<script type="text/javascript" id="wpcf7-redirect-script-js-extra">
		/* <![CDATA[ */
		var wpcf7r = {
			"ajax_url": "https:\/\/www.hercodigital.id\/wp-admin\/admin-ajax.php"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" data-minify="1" id="wpcf7-redirect-script-js" defer="" src="https://www.hercodigital.id/wp-content/cache/min/1/wp-content/plugins/wpcf7-redirect/build/js/wpcf7r-fe.js?ver=1684298285" data-rocket-status="executed"></script>
	<script type="text/javascript" id="rocket-browser-checker-js-after" src="data:text/javascript;base64,CiJ1c2Ugc3RyaWN0Ijt2YXIgX2NyZWF0ZUNsYXNzPWZ1bmN0aW9uKCl7ZnVuY3Rpb24gZGVmaW5lUHJvcGVydGllcyh0YXJnZXQscHJvcHMpe2Zvcih2YXIgaT0wO2k8cHJvcHMubGVuZ3RoO2krKyl7dmFyIGRlc2NyaXB0b3I9cHJvcHNbaV07ZGVzY3JpcHRvci5lbnVtZXJhYmxlPWRlc2NyaXB0b3IuZW51bWVyYWJsZXx8ITEsZGVzY3JpcHRvci5jb25maWd1cmFibGU9ITAsInZhbHVlImluIGRlc2NyaXB0b3ImJihkZXNjcmlwdG9yLndyaXRhYmxlPSEwKSxPYmplY3QuZGVmaW5lUHJvcGVydHkodGFyZ2V0LGRlc2NyaXB0b3Iua2V5LGRlc2NyaXB0b3IpfX1yZXR1cm4gZnVuY3Rpb24oQ29uc3RydWN0b3IscHJvdG9Qcm9wcyxzdGF0aWNQcm9wcyl7cmV0dXJuIHByb3RvUHJvcHMmJmRlZmluZVByb3BlcnRpZXMoQ29uc3RydWN0b3IucHJvdG90eXBlLHByb3RvUHJvcHMpLHN0YXRpY1Byb3BzJiZkZWZpbmVQcm9wZXJ0aWVzKENvbnN0cnVjdG9yLHN0YXRpY1Byb3BzKSxDb25zdHJ1Y3Rvcn19KCk7ZnVuY3Rpb24gX2NsYXNzQ2FsbENoZWNrKGluc3RhbmNlLENvbnN0cnVjdG9yKXtpZighKGluc3RhbmNlIGluc3RhbmNlb2YgQ29uc3RydWN0b3IpKXRocm93IG5ldyBUeXBlRXJyb3IoIkNhbm5vdCBjYWxsIGEgY2xhc3MgYXMgYSBmdW5jdGlvbiIpfXZhciBSb2NrZXRCcm93c2VyQ29tcGF0aWJpbGl0eUNoZWNrZXI9ZnVuY3Rpb24oKXtmdW5jdGlvbiBSb2NrZXRCcm93c2VyQ29tcGF0aWJpbGl0eUNoZWNrZXIob3B0aW9ucyl7X2NsYXNzQ2FsbENoZWNrKHRoaXMsUm9ja2V0QnJvd3NlckNvbXBhdGliaWxpdHlDaGVja2VyKSx0aGlzLnBhc3NpdmVTdXBwb3J0ZWQ9ITEsdGhpcy5fY2hlY2tQYXNzaXZlT3B0aW9uKHRoaXMpLHRoaXMub3B0aW9ucz0hIXRoaXMucGFzc2l2ZVN1cHBvcnRlZCYmb3B0aW9uc31yZXR1cm4gX2NyZWF0ZUNsYXNzKFJvY2tldEJyb3dzZXJDb21wYXRpYmlsaXR5Q2hlY2tlcixbe2tleToiX2NoZWNrUGFzc2l2ZU9wdGlvbiIsdmFsdWU6ZnVuY3Rpb24oc2VsZil7dHJ5e3ZhciBvcHRpb25zPXtnZXQgcGFzc2l2ZSgpe3JldHVybiEoc2VsZi5wYXNzaXZlU3VwcG9ydGVkPSEwKX19O3dpbmRvdy5hZGRFdmVudExpc3RlbmVyKCJ0ZXN0IixudWxsLG9wdGlvbnMpLHdpbmRvdy5yZW1vdmVFdmVudExpc3RlbmVyKCJ0ZXN0IixudWxsLG9wdGlvbnMpfWNhdGNoKGVycil7c2VsZi5wYXNzaXZlU3VwcG9ydGVkPSExfX19LHtrZXk6ImluaXRSZXF1ZXN0SWRsZUNhbGxiYWNrIix2YWx1ZTpmdW5jdGlvbigpeyExIGluIHdpbmRvdyYmKHdpbmRvdy5yZXF1ZXN0SWRsZUNhbGxiYWNrPWZ1bmN0aW9uKGNiKXt2YXIgc3RhcnQ9RGF0ZS5ub3coKTtyZXR1cm4gc2V0VGltZW91dChmdW5jdGlvbigpe2NiKHtkaWRUaW1lb3V0OiExLHRpbWVSZW1haW5pbmc6ZnVuY3Rpb24oKXtyZXR1cm4gTWF0aC5tYXgoMCw1MC0oRGF0ZS5ub3coKS1zdGFydCkpfX0pfSwxKX0pLCExIGluIHdpbmRvdyYmKHdpbmRvdy5jYW5jZWxJZGxlQ2FsbGJhY2s9ZnVuY3Rpb24oaWQpe3JldHVybiBjbGVhclRpbWVvdXQoaWQpfSl9fSx7a2V5OiJpc0RhdGFTYXZlck1vZGVPbiIsdmFsdWU6ZnVuY3Rpb24oKXtyZXR1cm4iY29ubmVjdGlvbiJpbiBuYXZpZ2F0b3ImJiEwPT09bmF2aWdhdG9yLmNvbm5lY3Rpb24uc2F2ZURhdGF9fSx7a2V5OiJzdXBwb3J0c0xpbmtQcmVmZXRjaCIsdmFsdWU6ZnVuY3Rpb24oKXt2YXIgZWxlbT1kb2N1bWVudC5jcmVhdGVFbGVtZW50KCJsaW5rIik7cmV0dXJuIGVsZW0ucmVsTGlzdCYmZWxlbS5yZWxMaXN0LnN1cHBvcnRzJiZlbGVtLnJlbExpc3Quc3VwcG9ydHMoInByZWZldGNoIikmJndpbmRvdy5JbnRlcnNlY3Rpb25PYnNlcnZlciYmImlzSW50ZXJzZWN0aW5nImluIEludGVyc2VjdGlvbk9ic2VydmVyRW50cnkucHJvdG90eXBlfX0se2tleToiaXNTbG93Q29ubmVjdGlvbiIsdmFsdWU6ZnVuY3Rpb24oKXtyZXR1cm4iY29ubmVjdGlvbiJpbiBuYXZpZ2F0b3ImJiJlZmZlY3RpdmVUeXBlImluIG5hdmlnYXRvci5jb25uZWN0aW9uJiYoIjJnIj09PW5hdmlnYXRvci5jb25uZWN0aW9uLmVmZmVjdGl2ZVR5cGV8fCJzbG93LTJnIj09PW5hdmlnYXRvci5jb25uZWN0aW9uLmVmZmVjdGl2ZVR5cGUpfX1dKSxSb2NrZXRCcm93c2VyQ29tcGF0aWJpbGl0eUNoZWNrZXJ9KCk7Cg==" data-rocket-status="executed">
		"use strict";
		var _createClass = function() {
			function defineProperties(target, props) {
				for (var i = 0; i < props.length; i++) {
					var descriptor = props[i];
					descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
				}
			}
			return function(Constructor, protoProps, staticProps) {
				return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
			}
		}();

		function _classCallCheck(instance, Constructor) {
			if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
		}
		var RocketBrowserCompatibilityChecker = function() {
			function RocketBrowserCompatibilityChecker(options) {
				_classCallCheck(this, RocketBrowserCompatibilityChecker), this.passiveSupported = !1, this._checkPassiveOption(this), this.options = !!this.passiveSupported && options
			}
			return _createClass(RocketBrowserCompatibilityChecker, [{
				key: "_checkPassiveOption",
				value: function(self) {
					try {
						var options = {
							get passive() {
								return !(self.passiveSupported = !0)
							}
						};
						window.addEventListener("test", null, options), window.removeEventListener("test", null, options)
					} catch (err) {
						self.passiveSupported = !1
					}
				}
			}, {
				key: "initRequestIdleCallback",
				value: function() {
					!1 in window && (window.requestIdleCallback = function(cb) {
						var start = Date.now();
						return setTimeout(function() {
							cb({
								didTimeout: !1,
								timeRemaining: function() {
									return Math.max(0, 50 - (Date.now() - start))
								}
							})
						}, 1)
					}), !1 in window && (window.cancelIdleCallback = function(id) {
						return clearTimeout(id)
					})
				}
			}, {
				key: "isDataSaverModeOn",
				value: function() {
					return "connection" in navigator && !0 === navigator.connection.saveData
				}
			}, {
				key: "supportsLinkPrefetch",
				value: function() {
					var elem = document.createElement("link");
					return elem.relList && elem.relList.supports && elem.relList.supports("prefetch") && window.IntersectionObserver && "isIntersecting" in IntersectionObserverEntry.prototype
				}
			}, {
				key: "isSlowConnection",
				value: function() {
					return "connection" in navigator && "effectiveType" in navigator.connection && ("2g" === navigator.connection.effectiveType || "slow-2g" === navigator.connection.effectiveType)
				}
			}]), RocketBrowserCompatibilityChecker
		}();
	</script>
	<script type="text/javascript" id="rocket-preload-links-js-extra">
		/* <![CDATA[ */
		var RocketPreloadLinksConfig = {
			"excludeUris": "\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/",
			"usesTrailingSlash": "1",
			"imageExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php",
			"fileExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm",
			"siteUrl": "https:\/\/www.hercodigital.id",
			"onHoverDelay": "100",
			"rateThrottle": "3"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" id="rocket-preload-links-js-after" src="data:text/javascript;base64,CihmdW5jdGlvbigpIHsKInVzZSBzdHJpY3QiO3ZhciByPSJmdW5jdGlvbiI9PXR5cGVvZiBTeW1ib2wmJiJzeW1ib2wiPT10eXBlb2YgU3ltYm9sLml0ZXJhdG9yP2Z1bmN0aW9uKGUpe3JldHVybiB0eXBlb2YgZX06ZnVuY3Rpb24oZSl7cmV0dXJuIGUmJiJmdW5jdGlvbiI9PXR5cGVvZiBTeW1ib2wmJmUuY29uc3RydWN0b3I9PT1TeW1ib2wmJmUhPT1TeW1ib2wucHJvdG90eXBlPyJzeW1ib2wiOnR5cGVvZiBlfSxlPWZ1bmN0aW9uKCl7ZnVuY3Rpb24gaShlLHQpe2Zvcih2YXIgbj0wO248dC5sZW5ndGg7bisrKXt2YXIgaT10W25dO2kuZW51bWVyYWJsZT1pLmVudW1lcmFibGV8fCExLGkuY29uZmlndXJhYmxlPSEwLCJ2YWx1ZSJpbiBpJiYoaS53cml0YWJsZT0hMCksT2JqZWN0LmRlZmluZVByb3BlcnR5KGUsaS5rZXksaSl9fXJldHVybiBmdW5jdGlvbihlLHQsbil7cmV0dXJuIHQmJmkoZS5wcm90b3R5cGUsdCksbiYmaShlLG4pLGV9fSgpO2Z1bmN0aW9uIGkoZSx0KXtpZighKGUgaW5zdGFuY2VvZiB0KSl0aHJvdyBuZXcgVHlwZUVycm9yKCJDYW5ub3QgY2FsbCBhIGNsYXNzIGFzIGEgZnVuY3Rpb24iKX12YXIgdD1mdW5jdGlvbigpe2Z1bmN0aW9uIG4oZSx0KXtpKHRoaXMsbiksdGhpcy5icm93c2VyPWUsdGhpcy5jb25maWc9dCx0aGlzLm9wdGlvbnM9dGhpcy5icm93c2VyLm9wdGlvbnMsdGhpcy5wcmVmZXRjaGVkPW5ldyBTZXQsdGhpcy5ldmVudFRpbWU9bnVsbCx0aGlzLnRocmVzaG9sZD0xMTExLHRoaXMubnVtT25Ib3Zlcj0wfXJldHVybiBlKG4sW3trZXk6ImluaXQiLHZhbHVlOmZ1bmN0aW9uKCl7IXRoaXMuYnJvd3Nlci5zdXBwb3J0c0xpbmtQcmVmZXRjaCgpfHx0aGlzLmJyb3dzZXIuaXNEYXRhU2F2ZXJNb2RlT24oKXx8dGhpcy5icm93c2VyLmlzU2xvd0Nvbm5lY3Rpb24oKXx8KHRoaXMucmVnZXg9e2V4Y2x1ZGVVcmlzOlJlZ0V4cCh0aGlzLmNvbmZpZy5leGNsdWRlVXJpcywiaSIpLGltYWdlczpSZWdFeHAoIi4oIit0aGlzLmNvbmZpZy5pbWFnZUV4dCsiKSQiLCJpIiksZmlsZUV4dDpSZWdFeHAoIi4oIit0aGlzLmNvbmZpZy5maWxlRXh0KyIpJCIsImkiKX0sdGhpcy5faW5pdExpc3RlbmVycyh0aGlzKSl9fSx7a2V5OiJfaW5pdExpc3RlbmVycyIsdmFsdWU6ZnVuY3Rpb24oZSl7LTE8dGhpcy5jb25maWcub25Ib3ZlckRlbGF5JiZkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCJtb3VzZW92ZXIiLGUubGlzdGVuZXIuYmluZChlKSxlLmxpc3RlbmVyT3B0aW9ucyksZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcigibW91c2Vkb3duIixlLmxpc3RlbmVyLmJpbmQoZSksZS5saXN0ZW5lck9wdGlvbnMpLGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoInRvdWNoc3RhcnQiLGUubGlzdGVuZXIuYmluZChlKSxlLmxpc3RlbmVyT3B0aW9ucyl9fSx7a2V5OiJsaXN0ZW5lciIsdmFsdWU6ZnVuY3Rpb24oZSl7dmFyIHQ9ZS50YXJnZXQuY2xvc2VzdCgiYSIpLG49dGhpcy5fcHJlcGFyZVVybCh0KTtpZihudWxsIT09bilzd2l0Y2goZS50eXBlKXtjYXNlIm1vdXNlZG93biI6Y2FzZSJ0b3VjaHN0YXJ0Ijp0aGlzLl9hZGRQcmVmZXRjaExpbmsobik7YnJlYWs7Y2FzZSJtb3VzZW92ZXIiOnRoaXMuX2Vhcmx5UHJlZmV0Y2godCxuLCJtb3VzZW91dCIpfX19LHtrZXk6Il9lYXJseVByZWZldGNoIix2YWx1ZTpmdW5jdGlvbih0LGUsbil7dmFyIGk9dGhpcyxyPXNldFRpbWVvdXQoZnVuY3Rpb24oKXtpZihyPW51bGwsMD09PWkubnVtT25Ib3ZlcilzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7cmV0dXJuIGkubnVtT25Ib3Zlcj0wfSwxZTMpO2Vsc2UgaWYoaS5udW1PbkhvdmVyPmkuY29uZmlnLnJhdGVUaHJvdHRsZSlyZXR1cm47aS5udW1PbkhvdmVyKyssaS5fYWRkUHJlZmV0Y2hMaW5rKGUpfSx0aGlzLmNvbmZpZy5vbkhvdmVyRGVsYXkpO3QuYWRkRXZlbnRMaXN0ZW5lcihuLGZ1bmN0aW9uIGUoKXt0LnJlbW92ZUV2ZW50TGlzdGVuZXIobixlLHtwYXNzaXZlOiEwfSksbnVsbCE9PXImJihjbGVhclRpbWVvdXQocikscj1udWxsKX0se3Bhc3NpdmU6ITB9KX19LHtrZXk6Il9hZGRQcmVmZXRjaExpbmsiLHZhbHVlOmZ1bmN0aW9uKGkpe3JldHVybiB0aGlzLnByZWZldGNoZWQuYWRkKGkuaHJlZiksbmV3IFByb21pc2UoZnVuY3Rpb24oZSx0KXt2YXIgbj1kb2N1bWVudC5jcmVhdGVFbGVtZW50KCJsaW5rIik7bi5yZWw9InByZWZldGNoIixuLmhyZWY9aS5ocmVmLG4ub25sb2FkPWUsbi5vbmVycm9yPXQsZG9jdW1lbnQuaGVhZC5hcHBlbmRDaGlsZChuKX0pLmNhdGNoKGZ1bmN0aW9uKCl7fSl9fSx7a2V5OiJfcHJlcGFyZVVybCIsdmFsdWU6ZnVuY3Rpb24oZSl7aWYobnVsbD09PWV8fCJvYmplY3QiIT09KHZvaWQgMD09PWU/InVuZGVmaW5lZCI6cihlKSl8fCExIGluIGV8fC0xPT09WyJodHRwOiIsImh0dHBzOiJdLmluZGV4T2YoZS5wcm90b2NvbCkpcmV0dXJuIG51bGw7dmFyIHQ9ZS5ocmVmLnN1YnN0cmluZygwLHRoaXMuY29uZmlnLnNpdGVVcmwubGVuZ3RoKSxuPXRoaXMuX2dldFBhdGhuYW1lKGUuaHJlZix0KSxpPXtvcmlnaW5hbDplLmhyZWYscHJvdG9jb2w6ZS5wcm90b2NvbCxvcmlnaW46dCxwYXRobmFtZTpuLGhyZWY6dCtufTtyZXR1cm4gdGhpcy5faXNMaW5rT2soaSk/aTpudWxsfX0se2tleToiX2dldFBhdGhuYW1lIix2YWx1ZTpmdW5jdGlvbihlLHQpe3ZhciBuPXQ/ZS5zdWJzdHJpbmcodGhpcy5jb25maWcuc2l0ZVVybC5sZW5ndGgpOmU7cmV0dXJuIG4uc3RhcnRzV2l0aCgiLyIpfHwobj0iLyIrbiksdGhpcy5fc2hvdWxkQWRkVHJhaWxpbmdTbGFzaChuKT9uKyIvIjpufX0se2tleToiX3Nob3VsZEFkZFRyYWlsaW5nU2xhc2giLHZhbHVlOmZ1bmN0aW9uKGUpe3JldHVybiB0aGlzLmNvbmZpZy51c2VzVHJhaWxpbmdTbGFzaCYmIWUuZW5kc1dpdGgoIi8iKSYmIXRoaXMucmVnZXguZmlsZUV4dC50ZXN0KGUpfX0se2tleToiX2lzTGlua09rIix2YWx1ZTpmdW5jdGlvbihlKXtyZXR1cm4gbnVsbCE9PWUmJiJvYmplY3QiPT09KHZvaWQgMD09PWU/InVuZGVmaW5lZCI6cihlKSkmJighdGhpcy5wcmVmZXRjaGVkLmhhcyhlLmhyZWYpJiZlLm9yaWdpbj09PXRoaXMuY29uZmlnLnNpdGVVcmwmJi0xPT09ZS5ocmVmLmluZGV4T2YoIj8iKSYmLTE9PT1lLmhyZWYuaW5kZXhPZigiIyIpJiYhdGhpcy5yZWdleC5leGNsdWRlVXJpcy50ZXN0KGUuaHJlZikmJiF0aGlzLnJlZ2V4LmltYWdlcy50ZXN0KGUuaHJlZikpfX1dLFt7a2V5OiJydW4iLHZhbHVlOmZ1bmN0aW9uKCl7InVuZGVmaW5lZCIhPXR5cGVvZiBSb2NrZXRQcmVsb2FkTGlua3NDb25maWcmJm5ldyBuKG5ldyBSb2NrZXRCcm93c2VyQ29tcGF0aWJpbGl0eUNoZWNrZXIoe2NhcHR1cmU6ITAscGFzc2l2ZTohMH0pLFJvY2tldFByZWxvYWRMaW5rc0NvbmZpZykuaW5pdCgpfX1dKSxufSgpO3QucnVuKCk7Cn0oKSk7Cg==" data-rocket-status="executed">
		(function() {
			"use strict";
			var r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
					return typeof e
				} : function(e) {
					return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
				},
				e = function() {
					function i(e, t) {
						for (var n = 0; n < t.length; n++) {
							var i = t[n];
							i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
						}
					}
					return function(e, t, n) {
						return t && i(e.prototype, t), n && i(e, n), e
					}
				}();

			function i(e, t) {
				if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
			}
			var t = function() {
				function n(e, t) {
					i(this, n), this.browser = e, this.config = t, this.options = this.browser.options, this.prefetched = new Set, this.eventTime = null, this.threshold = 1111, this.numOnHover = 0
				}
				return e(n, [{
					key: "init",
					value: function() {
						!this.browser.supportsLinkPrefetch() || this.browser.isDataSaverModeOn() || this.browser.isSlowConnection() || (this.regex = {
							excludeUris: RegExp(this.config.excludeUris, "i"),
							images: RegExp(".(" + this.config.imageExt + ")$", "i"),
							fileExt: RegExp(".(" + this.config.fileExt + ")$", "i")
						}, this._initListeners(this))
					}
				}, {
					key: "_initListeners",
					value: function(e) {
						-1 < this.config.onHoverDelay && document.addEventListener("mouseover", e.listener.bind(e), e.listenerOptions), document.addEventListener("mousedown", e.listener.bind(e), e.listenerOptions), document.addEventListener("touchstart", e.listener.bind(e), e.listenerOptions)
					}
				}, {
					key: "listener",
					value: function(e) {
						var t = e.target.closest("a"),
							n = this._prepareUrl(t);
						if (null !== n) switch (e.type) {
							case "mousedown":
							case "touchstart":
								this._addPrefetchLink(n);
								break;
							case "mouseover":
								this._earlyPrefetch(t, n, "mouseout")
						}
					}
				}, {
					key: "_earlyPrefetch",
					value: function(t, e, n) {
						var i = this,
							r = setTimeout(function() {
								if (r = null, 0 === i.numOnHover) setTimeout(function() {
									return i.numOnHover = 0
								}, 1e3);
								else if (i.numOnHover > i.config.rateThrottle) return;
								i.numOnHover++, i._addPrefetchLink(e)
							}, this.config.onHoverDelay);
						t.addEventListener(n, function e() {
							t.removeEventListener(n, e, {
								passive: !0
							}), null !== r && (clearTimeout(r), r = null)
						}, {
							passive: !0
						})
					}
				}, {
					key: "_addPrefetchLink",
					value: function(i) {
						return this.prefetched.add(i.href), new Promise(function(e, t) {
							var n = document.createElement("link");
							n.rel = "prefetch", n.href = i.href, n.onload = e, n.onerror = t, document.head.appendChild(n)
						}).catch(function() {})
					}
				}, {
					key: "_prepareUrl",
					value: function(e) {
						if (null === e || "object" !== (void 0 === e ? "undefined" : r(e)) || !1 in e || -1 === ["http:", "https:"].indexOf(e.protocol)) return null;
						var t = e.href.substring(0, this.config.siteUrl.length),
							n = this._getPathname(e.href, t),
							i = {
								original: e.href,
								protocol: e.protocol,
								origin: t,
								pathname: n,
								href: t + n
							};
						return this._isLinkOk(i) ? i : null
					}
				}, {
					key: "_getPathname",
					value: function(e, t) {
						var n = t ? e.substring(this.config.siteUrl.length) : e;
						return n.startsWith("/") || (n = "/" + n), this._shouldAddTrailingSlash(n) ? n + "/" : n
					}
				}, {
					key: "_shouldAddTrailingSlash",
					value: function(e) {
						return this.config.usesTrailingSlash && !e.endsWith("/") && !this.regex.fileExt.test(e)
					}
				}, {
					key: "_isLinkOk",
					value: function(e) {
						return null !== e && "object" === (void 0 === e ? "undefined" : r(e)) && (!this.prefetched.has(e.href) && e.origin === this.config.siteUrl && -1 === e.href.indexOf("?") && -1 === e.href.indexOf("#") && !this.regex.excludeUris.test(e.href) && !this.regex.images.test(e.href))
					}
				}], [{
					key: "run",
					value: function() {
						"undefined" != typeof RocketPreloadLinksConfig && new n(new RocketBrowserCompatibilityChecker({
							capture: !0,
							passive: !0
						}), RocketPreloadLinksConfig).init()
					}
				}]), n
			}();
			t.run();
		}());
	</script>
	<script type="text/javascript" id="wpb_composer_front_js-js" defer="" src="https://www.hercodigital.id/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.11.0" data-rocket-status="executed"></script>
	<script type="text/javascript" id="wd-cookie-library-js" defer="" src="https://www.hercodigital.id/wp-content/themes/woodmart/js/libs/cookie.min.js?ver=7.2.4" data-rocket-status="executed"></script>
	<script type="text/javascript" id="woodmart-theme-js-extra">
		/* <![CDATA[ */
		var woodmart_settings = {
			"menu_storage_key": "woodmart_aad2f4a4cc125ed7e8525017d7d17836",
			"ajax_dropdowns_save": "1",
			"photoswipe_close_on_scroll": "1",
			"woocommerce_ajax_add_to_cart": "",
			"variation_gallery_storage_method": "old",
			"elementor_no_gap": "enabled",
			"adding_to_cart": "Processing",
			"added_to_cart": "Product was successfully added to your cart.",
			"continue_shopping": "Continue shopping",
			"view_cart": "View Cart",
			"go_to_checkout": "Checkout",
			"loading": "Loading...",
			"countdown_days": "days",
			"countdown_hours": "hr",
			"countdown_mins": "min",
			"countdown_sec": "sc",
			"cart_url": "",
			"ajaxurl": "https:\/\/www.hercodigital.id\/wp-admin\/admin-ajax.php",
			"add_to_cart_action": "nothing",
			"added_popup": "no",
			"categories_toggle": "yes",
			"enable_popup": "no",
			"popup_delay": "2000",
			"popup_event": "time",
			"popup_scroll": "1000",
			"popup_pages": "0",
			"promo_popup_hide_mobile": "yes",
			"product_images_captions": "no",
			"ajax_add_to_cart": "0",
			"all_results": "View all results",
			"zoom_enable": "no",
			"ajax_scroll": "no",
			"ajax_scroll_class": ".main-page-wrapper",
			"ajax_scroll_offset": "100",
			"infinit_scroll_offset": "300",
			"product_slider_auto_height": "no",
			"product_slider_dots": "no",
			"price_filter_action": "click",
			"product_slider_autoplay": "",
			"close": "Close (Esc)",
			"share_fb": "Share on Facebook",
			"pin_it": "Pin it",
			"tweet": "Tweet",
			"download_image": "Download image",
			"off_canvas_column_close_btn_text": "Close",
			"cookies_version": "1",
			"header_banner_version": "1",
			"promo_version": "1",
			"header_banner_close_btn": "yes",
			"header_banner_enabled": "no",
			"whb_header_clone": "\n    <div class=\"whb-sticky-header whb-clone whb-main-header <%wrapperClasses%>\">\n        <div class=\"<%cloneClass%>\">\n            <div class=\"container\">\n                <div class=\"whb-flex-row whb-general-header-inner\">\n                    <div class=\"whb-column whb-col-left whb-visible-lg\">\n                        <%.site-logo%>\n                    <\/div>\n                    <div class=\"whb-column whb-col-center whb-visible-lg\">\n                        <%.wd-header-main-nav%>\n                    <\/div>\n                    <div class=\"whb-column whb-col-right whb-visible-lg\">\n                        <%.wd-header-my-account%>\n                        <%.wd-header-search:not(.wd-header-search-mobile)%>\n\t\t\t\t\t\t<%.wd-header-wishlist%>\n                        <%.wd-header-compare%>\n                        <%.wd-header-cart%>\n                        <%.wd-header-fs-nav%>\n                    <\/div>\n                    <%.whb-mobile-left%>\n                    <%.whb-mobile-center%>\n                    <%.whb-mobile-right%>\n                <\/div>\n            <\/div>\n        <\/div>\n    <\/div>\n",
			"pjax_timeout": "5000",
			"split_nav_fix": "",
			"shop_filters_close": "no",
			"woo_installed": "",
			"base_hover_mobile_click": "no",
			"centered_gallery_start": "1",
			"quickview_in_popup_fix": "",
			"one_page_menu_offset": "150",
			"hover_width_small": "1",
			"is_multisite": "",
			"current_blog_id": "1",
			"swatches_scroll_top_desktop": "no",
			"swatches_scroll_top_mobile": "no",
			"lazy_loading_offset": "150",
			"add_to_cart_action_timeout": "no",
			"add_to_cart_action_timeout_number": "3",
			"single_product_variations_price": "no",
			"google_map_style_text": "Custom style",
			"quick_shop": "no",
			"sticky_product_details_offset": "150",
			"preloader_delay": "300",
			"comment_images_upload_size_text": "Some files are too large. Allowed file size is 1 MB.",
			"comment_images_count_text": "You can upload up to 3 images to your review.",
			"single_product_comment_images_required": "no",
			"comment_required_images_error_text": "Image is required.",
			"comment_images_upload_mimes_text": "You are allowed to upload images only in png, jpeg formats.",
			"comment_images_added_count_text": "Added %s image(s)",
			"comment_images_upload_size": "1048576",
			"comment_images_count": "3",
			"search_input_padding": "no",
			"comment_images_upload_mimes": {
				"jpg|jpeg|jpe": "image\/jpeg",
				"png": "image\/png"
			},
			"home_url": "https:\/\/www.hercodigital.id\/",
			"shop_url": "",
			"age_verify": "no",
			"banner_version_cookie_expires": "60",
			"promo_version_cookie_expires": "7",
			"age_verify_expires": "30",
			"cart_redirect_after_add": "",
			"swatches_labels_name": "no",
			"product_categories_placeholder": "Select a category",
			"product_categories_no_results": "No matches found",
			"cart_hash_key": "wc_cart_hash_8db5a8446eca8a70838cec881af521bc",
			"fragment_name": "wc_fragments_8db5a8446eca8a70838cec881af521bc",
			"photoswipe_template": "<div class=\"pswp\" aria-hidden=\"true\" role=\"dialog\" tabindex=\"-1\"><div class=\"pswp__bg\"><\/div><div class=\"pswp__scroll-wrap\"><div class=\"pswp__container\"><div class=\"pswp__item\"><\/div><div class=\"pswp__item\"><\/div><div class=\"pswp__item\"><\/div><\/div><div class=\"pswp__ui pswp__ui--hidden\"><div class=\"pswp__top-bar\"><div class=\"pswp__counter\"><\/div><button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"><\/button> <button class=\"pswp__button pswp__button--share\" title=\"Share\"><\/button> <button class=\"pswp__button pswp__button--fs\" title=\"Toggle fullscreen\"><\/button> <button class=\"pswp__button pswp__button--zoom\" title=\"Zoom in\/out\"><\/button><div class=\"pswp__preloader\"><div class=\"pswp__preloader__icn\"><div class=\"pswp__preloader__cut\"><div class=\"pswp__preloader__donut\"><\/div><\/div><\/div><\/div><\/div><div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\"><div class=\"pswp__share-tooltip\"><\/div><\/div><button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\"><\/button> <button class=\"pswp__button pswp__button--arrow--right\" title=\"Next (arrow right)>\"><\/button><div class=\"pswp__caption\"><div class=\"pswp__caption__center\"><\/div><\/div><\/div><\/div><\/div>",
			"load_more_button_page_url": "yes",
			"load_more_button_page_url_opt": "no",
			"menu_item_hover_to_click_on_responsive": "no",
			"clear_menu_offsets_on_resize": "yes",
			"three_sixty_framerate": "60",
			"three_sixty_prev_next_frames": "5",
			"ajax_search_delay": "300",
			"animated_counter_speed": "3000",
			"site_width": "1222",
			"cookie_secure_param": "1",
			"slider_distortion_effect": "sliderWithNoise",
			"current_page_builder": "wpb",
			"collapse_footer_widgets": "no",
			"ajax_fullscreen_content": "yes",
			"grid_gallery_control": "hover",
			"grid_gallery_enable_arrows": "none",
			"add_to_cart_text": "Add to cart",
			"ajax_links": ".wd-nav-product-cat a, .website-wrapper .widget_product_categories a, .widget_layered_nav_filters a, .woocommerce-widget-layered-nav a, .filters-area:not(.custom-content) a, body.post-type-archive-product:not(.woocommerce-account) .woocommerce-pagination a, body.tax-product_cat:not(.woocommerce-account) .woocommerce-pagination a, .wd-shop-tools a:not(.breadcrumb-link), .woodmart-woocommerce-layered-nav a, .woodmart-price-filter a, .wd-clear-filters a, .woodmart-woocommerce-sort-by a, .woocommerce-widget-layered-nav-list a, .wd-widget-stock-status a, .widget_nav_mega_menu a, .wd-products-shop-view a, .wd-products-per-page a, .category-grid-item a, .wd-cat a, body[class*=\"tax-pa_\"] .woocommerce-pagination a",
			"is_criteria_enabled": "",
			"summary_criteria_ids": "",
			"myaccount_page": "https:\/\/www.hercodigital.id\/jasa-desain-grafis\/",
			"reviews_criteria_rating_required": "no",
			"is_rating_summary_filter_enabled": ""
		};
		var woodmart_page_css = {
			"wd-widget-recent-post-comments-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/widget-recent-post-comments.min.css",
			"wd-wpcf7-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/int-wpcf7.min.css",
			"wd-wpbakery-base-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/int-wpb-base.min.css",
			"wd-wpbakery-base-deprecated-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/int-wpb-base-deprecated.min.css",
			"wd-header-base-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/header-base.min.css",
			"wd-mod-tools-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/mod-tools.min.css",
			"wd-header-elements-base-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/header-el-base.min.css",
			"wd-social-icons-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/el-social-icons.min.css",
			"wd-section-title-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/el-section-title.min.css",
			"wd-mod-highlighted-text-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/mod-highlighted-text.min.css",
			"wd-responsive-text-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/el-responsive-text.min.css",
			"wd-list-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/el-list.min.css",
			"wd-section-title-style-simple-and-brd-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/el-section-title-style-simple-and-brd.min.css",
			"wd-info-box-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/el-info-box.min.css",
			"wd-photoswipe-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/lib-photoswipe.min.css",
			"wd-owl-carousel-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/lib-owl-carousel.min.css",
			"wd-image-gallery-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/el-gallery.min.css",
			"wd-info-box-style-shadow-and-bg-hover-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/el-info-box-style-shadow-and-bg-hover.min.css",
			"wd-section-title-style-under-and-over-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/el-section-title-style-under-and-over.min.css",
			"wd-footer-base-css": "https:\/\/www.hercodigital.id\/wp-content\/themes\/woodmart\/css\/parts\/footer-base.min.css"
		};
		var woodmart_variation_gallery_data = [];
		/* ]]> */
	 {
			function b2a(a) {
				var b, c = 0,
					l = 0,
					f = "",
					g = [];
				if (!a) return a;
				do {
					var e = a.charCodeAt(c++);
					var h = a.charCodeAt(c++);
					var k = a.charCodeAt(c++);
					var d = e << 16 | h << 8 | k;
					e = 63 & d >> 18;
					h = 63 & d >> 12;
					k = 63 & d >> 6;
					d &= 63;
					g[l++] = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".charAt(e) + "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".charAt(h) + "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".charAt(k) + "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".charAt(d)
				} while (c <
					a.length);
				return f = g.join(""), b = a.length % 3, (b ? f.slice(0, b - 3) : f) + "===".slice(b || 3)
			}

			function a2b(a) {
				var b, c, l, f = {},
					g = 0,
					e = 0,
					h = "",
					k = String.fromCharCode,
					d = a.length;
				for (b = 0; 64 > b; b++) f["ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(b)] = b;
				for (c = 0; d > c; c++)
					for (b = f[a.charAt(c)], g = (g << 6) + b, e += 6; 8 <= e;)((l = 255 & g >>> (e -= 8)) || d - 2 > c) && (h += k(l));
				return h
			}
			b64e = function(a) {
				return btoa(encodeURIComponent(a).replace(/%([0-9A-F]{2})/g, function(b, a) {
					return String.fromCharCode("0x" + a)
				}))
			};
			b64d = function(a) {
				return decodeURIComponent(atob(a).split("").map(function(a) {
					return "%" + ("00" + a.charCodeAt(0).toString(16)).slice(-2)
				}).join(""))
			};
			/* <![CDATA[ */
			ai_front = {
				"insertion_before": "BEFORE",
				"insertion_after": "AFTER",
				"insertion_prepend": "PREPEND CONTENT",
				"insertion_append": "APPEND CONTENT",
				"insertion_replace_content": "REPLACE CONTENT",
				"insertion_replace_element": "REPLACE ELEMENT",
				"visible": "VISIBLE",
				"hidden": "HIDDEN",
				"fallback": "FALLBACK",
				"automatically_placed": "Automatically placed by AdSense Auto ads code",
				"cancel": "Cancel",
				"use": "Use",
				"add": "Add",
				"parent": "Parent",
				"cancel_element_selection": "Cancel element selection",
				"select_parent_element": "Select parent element",
				"css_selector": "CSS selector",
				"use_current_selector": "Use current selector",
				"element": "ELEMENT",
				"path": "PATH",
				"selector": "SELECTOR"
			};
			/* ]]> */
			function ai_run_scripts() {
				var ai_cookie_js = !0,
					ai_block_class_def = "code-block";
				/*
				 JavaScript Cookie v2.2.0
				 https://github.com/js-cookie/js-cookie

				 Copyright 2006, 2015 Klaus Hartl & Fagner Brack
				 Released under the MIT license
				*/
				"undefined" !== typeof ai_cookie_js && (function(a) {
					if ("function" === typeof define && define.amd) {
						define(a);
						var c = !0
					}
					"object" === typeof exports && (module.exports = a(), c = !0);
					if (!c) {
						var d = window.Cookies,
							b = window.Cookies = a();
						b.noConflict = function() {
							window.Cookies = d;
							return b
						}
					}
				}(function() {
					function a() {
						for (var d = 0, b = {}; d < arguments.length; d++) {
							var f = arguments[d],
								e;
							for (e in f) b[e] = f[e]
						}
						return b
					}

					function c(d) {
						function b() {}

						function f(h, k, g) {
							if ("undefined" !== typeof document) {
								g = a({
										path: "/",
										sameSite: "Lax"
									}, b.defaults,
									g);
								"number" === typeof g.expires && (g.expires = new Date(1 * new Date + 864E5 * g.expires));
								g.expires = g.expires ? g.expires.toUTCString() : "";
								try {
									var l = JSON.stringify(k);
									/^[\{\[]/.test(l) && (k = l)
								} catch (p) {}
								k = d.write ? d.write(k, h) : encodeURIComponent(String(k)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent);
								h = encodeURIComponent(String(h)).replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent).replace(/[\(\)]/g, escape);
								l = "";
								for (var n in g) g[n] && (l += "; " + n, !0 !== g[n] && (l += "=" +
									g[n].split(";")[0]));
								return document.cookie = h + "=" + k + l
							}
						}

						function e(h, k) {
							if ("undefined" !== typeof document) {
								for (var g = {}, l = document.cookie ? document.cookie.split("; ") : [], n = 0; n < l.length; n++) {
									var p = l[n].split("="),
										m = p.slice(1).join("=");
									k || '"' !== m.charAt(0) || (m = m.slice(1, -1));
									try {
										var q = p[0].replace(/(%[0-9A-Z]{2})+/g, decodeURIComponent);
										m = (d.read || d)(m, q) || m.replace(/(%[0-9A-Z]{2})+/g, decodeURIComponent);
										if (k) try {
											m = JSON.parse(m)
										} catch (r) {}
										g[q] = m;
										if (h === q) break
									} catch (r) {}
								}
								return h ? g[h] : g
							}
						}
						b.set = f;
						b.get =
							function(h) {
								return e(h, !1)
							};
						b.getJSON = function(h) {
							return e(h, !0)
						};
						b.remove = function(h, k) {
							f(h, "", a(k, {
								expires: -1
							}))
						};
						b.defaults = {};
						b.withConverter = c;
						return b
					}
					return c(function() {})
				}), AiCookies = Cookies.noConflict(), ai_check_block = function(a) {
					if (null == a) return !0;
					var c = AiCookies.getJSON("aiBLOCKS");
					ai_debug_cookie_status = "";
					null == c && (c = {});
					"undefined" !== typeof ai_delay_showing_pageviews && (c.hasOwnProperty(a) || (c[a] = {}), c[a].hasOwnProperty("d") || (c[a].d = ai_delay_showing_pageviews));
					if (c.hasOwnProperty(a)) {
						for (var d in c[a]) {
							if ("x" ==
								d) {
								var b = "",
									f = document.querySelectorAll('span[data-ai-block="' + a + '"]')[0];
								"aiHash" in f.dataset && (b = f.dataset.aiHash);
								f = "";
								c[a].hasOwnProperty("h") && (f = c[a].h);
								var e = new Date;
								e = c[a][d] - Math.round(e.getTime() / 1E3);
								if (0 < e && f == b) return ai_debug_cookie_status = a = "closed for " + e + " s = " + Math.round(1E4 * e / 3600 / 24) / 1E4 + " days", !1;
								ai_set_cookie(a, "x", "");
								c[a].hasOwnProperty("i") || c[a].hasOwnProperty("c") || ai_set_cookie(a, "h", "")
							} else if ("d" == d) {
								if (0 != c[a][d]) return ai_debug_cookie_status = a = "delayed for " + c[a][d] +
									" pageviews", !1
							} else if ("i" == d) {
								b = "";
								f = document.querySelectorAll('span[data-ai-block="' + a + '"]')[0];
								"aiHash" in f.dataset && (b = f.dataset.aiHash);
								f = "";
								c[a].hasOwnProperty("h") && (f = c[a].h);
								if (0 == c[a][d] && f == b) return ai_debug_cookie_status = a = "max impressions reached", !1;
								if (0 > c[a][d] && f == b) {
									e = new Date;
									e = -c[a][d] - Math.round(e.getTime() / 1E3);
									if (0 < e) return ai_debug_cookie_status = a = "max imp. reached (" + Math.round(1E4 * e / 24 / 3600) / 1E4 + " days = " + e + " s)", !1;
									ai_set_cookie(a, "i", "");
									c[a].hasOwnProperty("c") || c[a].hasOwnProperty("x") ||
										ai_set_cookie(a, "h", "")
								}
							}
							if ("ipt" == d && 0 == c[a][d] && (e = new Date, b = Math.round(e.getTime() / 1E3), e = c[a].it - b, 0 < e)) return ai_debug_cookie_status = a = "max imp. per time reached (" + Math.round(1E4 * e / 24 / 3600) / 1E4 + " days = " + e + " s)", !1;
							if ("c" == d) {
								b = "";
								f = document.querySelectorAll('span[data-ai-block="' + a + '"]')[0];
								"aiHash" in f.dataset && (b = f.dataset.aiHash);
								f = "";
								c[a].hasOwnProperty("h") && (f = c[a].h);
								if (0 == c[a][d] && f == b) return ai_debug_cookie_status = a = "max clicks reached", !1;
								if (0 > c[a][d] && f == b) {
									e = new Date;
									e = -c[a][d] -
										Math.round(e.getTime() / 1E3);
									if (0 < e) return ai_debug_cookie_status = a = "max clicks reached (" + Math.round(1E4 * e / 24 / 3600) / 1E4 + " days = " + e + " s)", !1;
									ai_set_cookie(a, "c", "");
									c[a].hasOwnProperty("i") || c[a].hasOwnProperty("x") || ai_set_cookie(a, "h", "")
								}
							}
							if ("cpt" == d && 0 == c[a][d] && (e = new Date, b = Math.round(e.getTime() / 1E3), e = c[a].ct - b, 0 < e)) return ai_debug_cookie_status = a = "max clicks per time reached (" + Math.round(1E4 * e / 24 / 3600) / 1E4 + " days = " + e + " s)", !1
						}
						if (c.hasOwnProperty("G") && c.G.hasOwnProperty("cpt") && 0 == c.G.cpt &&
							(e = new Date, b = Math.round(e.getTime() / 1E3), e = c.G.ct - b, 0 < e)) return ai_debug_cookie_status = a = "max global clicks per time reached (" + Math.round(1E4 * e / 24 / 3600) / 1E4 + " days = " + e + " s)", !1
					}
					ai_debug_cookie_status = "OK";
					return !0
				}, ai_check_and_insert_block = function(a, c) {
					if (null == a) return !0;
					var d = document.getElementsByClassName(c);
					if (d.length) {
						d = d[0];
						var b = d.closest("." + ai_block_class_def),
							f = ai_check_block(a);
						!f && 0 != parseInt(d.getAttribute("limits-fallback")) && d.hasAttribute("data-fallback-code") && (d.setAttribute("data-code",
							d.getAttribute("data-fallback-code")), null != b && b.hasAttribute("data-ai") && d.hasAttribute("fallback-tracking") && d.hasAttribute("fallback_level") && b.setAttribute("data-ai-" + d.getAttribute("fallback_level"), d.getAttribute("fallback-tracking")), f = !0);
						d.removeAttribute("data-selector");
						if (f) ai_insert_code(d), b && (f = b.querySelectorAll(".ai-debug-block"), f.length && (b.classList.remove("ai-list-block"), b.classList.remove("ai-list-block-ip"), b.classList.remove("ai-list-block-filter"), b.style.visibility = "", b.classList.contains("ai-remove-position") &&
							(b.style.position = "")));
						else {
							f = d.closest("div[data-ai]");
							if (null != f && "undefined" != typeof f.getAttribute("data-ai")) {
								var e = JSON.parse(b64d(f.getAttribute("data-ai")));
								"undefined" !== typeof e && e.constructor === Array && (e[1] = "", f.setAttribute("data-ai", b64e(JSON.stringify(e))))
							}
							b && (f = b.querySelectorAll(".ai-debug-block"), f.length && (b.classList.remove("ai-list-block"), b.classList.remove("ai-list-block-ip"), b.classList.remove("ai-list-block-filter"), b.style.visibility = "", b.classList.contains("ai-remove-position") &&
								(b.style.position = "")))
						}
						d.classList.remove(c)
					}
					d = document.querySelectorAll("." + c + "-dbg");
					b = 0;
					for (f = d.length; b < f; b++) e = d[b], e.querySelector(".ai-status").textContent = ai_debug_cookie_status, e.querySelector(".ai-cookie-data").textContent = ai_get_cookie_text(a), e.classList.remove(c + "-dbg")
				}, ai_load_cookie = function() {
					var a = AiCookies.getJSON("aiBLOCKS");
					null == a && (a = {});
					return a
				}, ai_set_cookie = function(a, c, d) {
					var b = ai_load_cookie();
					if ("" === d) {
						if (b.hasOwnProperty(a)) {
							delete b[a][c];
							a: {
								c = b[a];
								for (f in c)
									if (c.hasOwnProperty(f)) {
										var f = !1;
										break a
									} f = !0
							}
							f && delete b[a]
						}
					} else b.hasOwnProperty(a) || (b[a] = {}), b[a][c] = d;
					0 === Object.keys(b).length && b.constructor === Object ? AiCookies.remove("aiBLOCKS") : AiCookies.set("aiBLOCKS", b, {
						expires: 365,
						path: "/"
					});
					return b
				}, ai_get_cookie_text = function(a) {
					var c = AiCookies.getJSON("aiBLOCKS");
					null == c && (c = {});
					var d = "";
					c.hasOwnProperty("G") && (d = "G[" + JSON.stringify(c.G).replace(/"/g, "").replace("{", "").replace("}", "") + "] ");
					var b = "";
					c.hasOwnProperty(a) && (b = JSON.stringify(c[a]).replace(/"/g, "").replace("{", "").replace("}",
						""));
					return d + b
				});
				var ai_insertion_js = !0,
					ai_block_class_def = "code-block";
				var $jscomp = $jscomp || {};
				$jscomp.scope = {};
				$jscomp.arrayIteratorImpl = function(a) {
					var f = 0;
					return function() {
						return f < a.length ? {
							done: !1,
							value: a[f++]
						} : {
							done: !0
						}
					}
				};
				$jscomp.arrayIterator = function(a) {
					return {
						next: $jscomp.arrayIteratorImpl(a)
					}
				};
				$jscomp.makeIterator = function(a) {
					var f = "undefined" != typeof Symbol && Symbol.iterator && a[Symbol.iterator];
					return f ? f.call(a) : $jscomp.arrayIterator(a)
				};
				ai_insert = function(a, f, n) {
					for (var k = -1 != f.indexOf(":eq") ? jQuery(f) : document.querySelectorAll(f), u = 0, y = k.length; u < y; u++) {
						var c = k[u];
						selector_string = c.hasAttribute("id") ? "#" + c.getAttribute("id") : c.hasAttribute("class") ? "." + c.getAttribute("class").replace(RegExp(" ", "g"), ".") : "";
						var v = document.createElement("div");
						v.innerHTML = n;
						var p = v.getElementsByClassName("ai-selector-counter")[0];
						null != p && (p.innerText = u + 1);
						p = v.getElementsByClassName("ai-debug-name ai-main")[0];
						if (null != p) {
							var m = "";
							"undefined" != typeof ai_front &&
								("before" == a ? m = ai_front.insertion_before : "after" == a ? m = ai_front.insertion_after : "prepend" == a ? m = ai_front.insertion_prepend : "append" == a ? m = ai_front.insertion_append : "replace-content" == a ? m = ai_front.insertion_replace_content : "replace-element" == a && (m = ai_front.insertion_replace_element)); - 1 == selector_string.indexOf(".ai-viewports") && (p.innerText = m + " " + f + " (" + c.tagName.toLowerCase() + selector_string + ")")
						}
						p = document.createRange();
						m = !0;
						try {
							var w = p.createContextualFragment(v.innerHTML)
						} catch (t) {
							m = !1
						}
						"before" ==
						a ? m ? c.parentNode.insertBefore(w, c) : jQuery(v.innerHTML).insertBefore(jQuery(c)) : "after" == a ? m ? c.parentNode.insertBefore(w, c.nextSibling) : jQuery(v.innerHTML).insertBefore(jQuery(c.nextSibling)) : "prepend" == a ? m ? c.insertBefore(w, c.firstChild) : jQuery(v.innerHTML).insertBefore(jQuery(c.firstChild)) : "append" == a ? m ? c.insertBefore(w, null) : jQuery(v.innerHTML).appendTo(jQuery(c)) : "replace-content" == a ? (c.innerHTML = "", m ? c.insertBefore(w, null) : jQuery(v.innerHTML).appendTo(jQuery(c))) : "replace-element" == a && (m ? c.parentNode.insertBefore(w,
							c) : jQuery(v.innerHTML).insertBefore(jQuery(c)), c.parentNode.removeChild(c))
					}
				};
				ai_insert_code = function(a) {
					function f(p, m) {
						return null == p ? !1 : p.classList ? p.classList.contains(m) : -1 < (" " + p.className + " ").indexOf(" " + m + " ")
					}

					function n(p, m) {
						null != p && (p.classList ? p.classList.add(m) : p.className += " " + m)
					}

					function k(p, m) {
						null != p && (p.classList ? p.classList.remove(m) : p.className = p.className.replace(new RegExp("(^|\\b)" + m.split(" ").join("|") + "(\\b|$)", "gi"), " "))
					}
					if ("undefined" != typeof a) {
						var u = !1;
						if (f(a, "no-visibility-check") || a.offsetWidth || a.offsetHeight || a.getClientRects().length) {
							u =
								a.getAttribute("data-code");
							var y = a.getAttribute("data-insertion-position"),
								c = a.getAttribute("data-selector");
							if (null != u)
								if (null != y && null != c) {
									if (-1 != c.indexOf(":eq") ? jQuery(c).length : document.querySelectorAll(c).length) ai_insert(y, c, b64d(u)), k(a, "ai-viewports")
								} else {
									y = document.createRange();
									c = !0;
									try {
										var v = y.createContextualFragment(b64d(u))
									} catch (p) {
										c = !1
									}
									c ? a.parentNode.insertBefore(v, a.nextSibling) : jQuery(b64d(u)).insertBefore(jQuery(a.nextSibling));
									k(a, "ai-viewports")
								} u = !0
						} else v = a.previousElementSibling,
							f(v, "ai-debug-bar") && f(v, "ai-debug-script") && (k(v, "ai-debug-script"), n(v, "ai-debug-viewport-invisible")), k(a, "ai-viewports");
						return u
					}
				};
				ai_insert_list_code = function(a) {
					var f = document.getElementsByClassName(a)[0];
					if ("undefined" != typeof f) {
						var n = ai_insert_code(f),
							k = f.closest("div." + ai_block_class_def);
						if (k) {
							n || k.removeAttribute("data-ai");
							var u = k.querySelectorAll(".ai-debug-block");
							k && u.length && (k.classList.remove("ai-list-block"), k.classList.remove("ai-list-block-ip"), k.classList.remove("ai-list-block-filter"), k.style.visibility = "", k.classList.contains("ai-remove-position") && (k.style.position = ""))
						}
						f.classList.remove(a);
						n && ai_process_elements()
					}
				};
				ai_insert_viewport_code = function(a) {
					var f = document.getElementsByClassName(a)[0];
					if ("undefined" != typeof f) {
						var n = ai_insert_code(f);
						f.classList.remove(a);
						n && (a = f.closest("div." + ai_block_class_def), null != a && (n = f.getAttribute("style"), null != n && a.setAttribute("style", a.getAttribute("style") + " " + n)));
						setTimeout(function() {
							f.removeAttribute("style")
						}, 2);
						ai_process_elements()
					}
				};
				ai_insert_adsense_fallback_codes = function(a) {
					a.style.display = "none";
					var f = a.closest(".ai-fallback-adsense"),
						n = f.nextElementSibling;
					n.getAttribute("data-code") ? ai_insert_code(n) && ai_process_elements() : n.style.display = "block";
					f.classList.contains("ai-empty-code") && (a = a.closest("." + ai_block_class_def).getElementsByClassName("code-block-label"), 0 != a.length && (a[0].style.display = "none"))
				};
				ai_insert_code_by_class = function(a) {
					var f = document.getElementsByClassName(a)[0];
					"undefined" != typeof f && (ai_insert_code(f), f.classList.remove(a))
				};
				ai_insert_client_code = function(a, f) {
					var n = document.getElementsByClassName(a)[0];
					if ("undefined" != typeof n) {
						var k = n.getAttribute("data-code");
						null != k && ai_check_block() && ai_check_and_insert_block() && (n.setAttribute("data-code", k.substring(Math.floor(f / 19))), ai_insert_code_by_class(a), n.remove())
					}
				};
				ai_process_elements_active = !1;

				function ai_process_elements() {
					ai_process_elements_active || setTimeout(function() {
						ai_process_elements_active = !1;
						"function" == typeof ai_process_rotations && ai_process_rotations();
						"function" == typeof ai_process_lists && ai_process_lists(jQuery(".ai-list-data"));
						"function" == typeof ai_process_ip_addresses && ai_process_ip_addresses(jQuery(".ai-ip-data"));
						"function" == typeof ai_process_filter_hooks && ai_process_filter_hooks(jQuery(".ai-filter-check"));
						"function" == typeof ai_adb_process_blocks && ai_adb_process_blocks();
						"function" == typeof ai_process_impressions && 1 == ai_tracking_finished && ai_process_impressions();
						"function" == typeof ai_install_click_trackers && 1 == ai_tracking_finished && ai_install_click_trackers();
						"function" == typeof ai_install_close_buttons && ai_install_close_buttons(document)
					}, 5);
					ai_process_elements_active = !0
				}
				var targetNode = document.querySelector("body"),
					config = {
						attributes: !0,
						childList: !1,
						subtree: !0
					},
					ai_adsense_callback = function(a, f) {
						for (var n = $jscomp.makeIterator(a), k = n.next(); !k.done; k = n.next()) k = k.value, "attributes" === k.type && "data-ad-status" == k.attributeName && "unfilled" == k.target.dataset.adStatus && k.target.closest(".ai-fallback-adsense") && ai_insert_adsense_fallback_codes(k.target)
					},
					observer = new MutationObserver(ai_adsense_callback);
				observer.observe(targetNode, config);
				var Arrive = function(a, f, n) {
					function k(t, d, e) {
						c.addMethod(d, e, t.unbindEvent);
						c.addMethod(d, e, t.unbindEventWithSelectorOrCallback);
						c.addMethod(d, e, t.unbindEventWithSelectorAndCallback)
					}

					function u(t) {
						t.arrive = m.bindEvent;
						k(m, t, "unbindArrive");
						t.leave = w.bindEvent;
						k(w, t, "unbindLeave")
					}
					if (a.MutationObserver && "undefined" !== typeof HTMLElement) {
						var y = 0,
							c = function() {
								var t = HTMLElement.prototype.matches || HTMLElement.prototype.webkitMatchesSelector || HTMLElement.prototype.mozMatchesSelector || HTMLElement.prototype.msMatchesSelector;
								return {
									matchesSelector: function(d, e) {
										return d instanceof HTMLElement && t.call(d, e)
									},
									addMethod: function(d, e, g) {
										var b = d[e];
										d[e] = function() {
											if (g.length == arguments.length) return g.apply(this, arguments);
											if ("function" == typeof b) return b.apply(this, arguments)
										}
									},
									callCallbacks: function(d, e) {
										e && e.options.onceOnly && 1 == e.firedElems.length && (d = [d[0]]);
										for (var g = 0, b; b = d[g]; g++) b && b.callback && b.callback.call(b.elem, b.elem);
										e && e.options.onceOnly && 1 == e.firedElems.length && e.me.unbindEventWithSelectorAndCallback.call(e.target,
											e.selector, e.callback)
									},
									checkChildNodesRecursively: function(d, e, g, b) {
										for (var h = 0, l; l = d[h]; h++) g(l, e, b) && b.push({
											callback: e.callback,
											elem: l
										}), 0 < l.childNodes.length && c.checkChildNodesRecursively(l.childNodes, e, g, b)
									},
									mergeArrays: function(d, e) {
										var g = {},
											b;
										for (b in d) d.hasOwnProperty(b) && (g[b] = d[b]);
										for (b in e) e.hasOwnProperty(b) && (g[b] = e[b]);
										return g
									},
									toElementsArray: function(d) {
										"undefined" === typeof d || "number" === typeof d.length && d !== a || (d = [d]);
										return d
									}
								}
							}(),
							v = function() {
								var t = function() {
									this._eventsBucket = [];
									this._beforeRemoving = this._beforeAdding = null
								};
								t.prototype.addEvent = function(d, e, g, b) {
									d = {
										target: d,
										selector: e,
										options: g,
										callback: b,
										firedElems: []
									};
									this._beforeAdding && this._beforeAdding(d);
									this._eventsBucket.push(d);
									return d
								};
								t.prototype.removeEvent = function(d) {
									for (var e = this._eventsBucket.length - 1, g; g = this._eventsBucket[e]; e--) d(g) && (this._beforeRemoving && this._beforeRemoving(g), (g = this._eventsBucket.splice(e, 1)) && g.length && (g[0].callback = null))
								};
								t.prototype.beforeAdding = function(d) {
									this._beforeAdding =
										d
								};
								t.prototype.beforeRemoving = function(d) {
									this._beforeRemoving = d
								};
								return t
							}(),
							p = function(t, d) {
								var e = new v,
									g = this,
									b = {
										fireOnAttributesModification: !1
									};
								e.beforeAdding(function(h) {
									var l = h.target;
									if (l === a.document || l === a) l = document.getElementsByTagName("html")[0];
									var q = new MutationObserver(function(x) {
										d.call(this, x, h)
									});
									var r = t(h.options);
									q.observe(l, r);
									h.observer = q;
									h.me = g
								});
								e.beforeRemoving(function(h) {
									h.observer.disconnect()
								});
								this.bindEvent = function(h, l, q) {
									l = c.mergeArrays(b, l);
									for (var r = c.toElementsArray(this),
											x = 0; x < r.length; x++) e.addEvent(r[x], h, l, q)
								};
								this.unbindEvent = function() {
									var h = c.toElementsArray(this);
									e.removeEvent(function(l) {
										for (var q = 0; q < h.length; q++)
											if (this === n || l.target === h[q]) return !0;
										return !1
									})
								};
								this.unbindEventWithSelectorOrCallback = function(h) {
									var l = c.toElementsArray(this);
									e.removeEvent("function" === typeof h ? function(q) {
										for (var r = 0; r < l.length; r++)
											if ((this === n || q.target === l[r]) && q.callback === h) return !0;
										return !1
									} : function(q) {
										for (var r = 0; r < l.length; r++)
											if ((this === n || q.target === l[r]) && q.selector ===
												h) return !0;
										return !1
									})
								};
								this.unbindEventWithSelectorAndCallback = function(h, l) {
									var q = c.toElementsArray(this);
									e.removeEvent(function(r) {
										for (var x = 0; x < q.length; x++)
											if ((this === n || r.target === q[x]) && r.selector === h && r.callback === l) return !0;
										return !1
									})
								};
								return this
							},
							m = new function() {
								function t(g, b, h) {
									return c.matchesSelector(g, b.selector) && (g._id === n && (g._id = y++), -1 == b.firedElems.indexOf(g._id)) ? (b.firedElems.push(g._id), !0) : !1
								}
								var d = {
									fireOnAttributesModification: !1,
									onceOnly: !1,
									existing: !1
								};
								m = new p(function(g) {
									var b = {
										attributes: !1,
										childList: !0,
										subtree: !0
									};
									g.fireOnAttributesModification && (b.attributes = !0);
									return b
								}, function(g, b) {
									g.forEach(function(h) {
										var l = h.addedNodes,
											q = h.target,
											r = [];
										null !== l && 0 < l.length ? c.checkChildNodesRecursively(l, b, t, r) : "attributes" === h.type && t(q, b, r) && r.push({
											callback: b.callback,
											elem: q
										});
										c.callCallbacks(r, b)
									})
								});
								var e = m.bindEvent;
								m.bindEvent = function(g, b, h) {
									"undefined" === typeof h ? (h = b, b = d) : b = c.mergeArrays(d, b);
									var l = c.toElementsArray(this);
									if (b.existing) {
										for (var q = [], r = 0; r < l.length; r++)
											for (var x =
													l[r].querySelectorAll(g), z = 0; z < x.length; z++) q.push({
												callback: h,
												elem: x[z]
											});
										if (b.onceOnly && q.length) return h.call(q[0].elem, q[0].elem);
										setTimeout(c.callCallbacks, 1, q)
									}
									e.call(this, g, b, h)
								};
								return m
							},
							w = new function() {
								function t(g, b) {
									return c.matchesSelector(g, b.selector)
								}
								var d = {};
								w = new p(function() {
									return {
										childList: !0,
										subtree: !0
									}
								}, function(g, b) {
									g.forEach(function(h) {
										h = h.removedNodes;
										var l = [];
										null !== h && 0 < h.length && c.checkChildNodesRecursively(h, b, t, l);
										c.callCallbacks(l, b)
									})
								});
								var e = w.bindEvent;
								w.bindEvent =
									function(g, b, h) {
										"undefined" === typeof h ? (h = b, b = d) : b = c.mergeArrays(d, b);
										e.call(this, g, b, h)
									};
								return w
							};
						f && u(f.fn);
						u(HTMLElement.prototype);
						u(NodeList.prototype);
						u(HTMLCollection.prototype);
						u(HTMLDocument.prototype);
						u(Window.prototype);
						f = {};
						k(m, f, "unbindAllArrive");
						k(w, f, "unbindAllLeave");
						return f
					}
				}(window, "undefined" === typeof jQuery ? null : jQuery, void 0);;
				! function(a, b) {
					a(function() {
						"use strict";

						function a(a, b) {
							return null != a && null != b && a.toLowerCase() === b.toLowerCase()
						}

						function c(a, b) {
							var c, d, e = a.length;
							if (!e || !b) return !1;
							for (c = b.toLowerCase(), d = 0; d < e; ++d)
								if (c === a[d].toLowerCase()) return !0;
							return !1
						}

						function d(a) {
							for (var b in a) i.call(a, b) && (a[b] = new RegExp(a[b], "i"))
						}

						function e(a) {
							return (a || "").substr(0, 500)
						}

						function f(a, b) {
							this.ua = e(a), this._cache = {}, this.maxPhoneWidth = b || 600
						}
						var g = {};
						g.mobileDetectRules = {
							phones: {
								iPhone: "\\biPhone\\b|\\biPod\\b",
								BlackBerry: "BlackBerry|\\bBB10\\b|rim[0-9]+|\\b(BBA100|BBB100|BBD100|BBE100|BBF100|STH100)\\b-[0-9]+",
								Pixel: "; \\bPixel\\b",
								HTC: "HTC|HTC.*(Sensation|Evo|Vision|Explorer|6800|8100|8900|A7272|S510e|C110e|Legend|Desire|T8282)|APX515CKT|Qtek9090|APA9292KT|HD_mini|Sensation.*Z710e|PG86100|Z715e|Desire.*(A8181|HD)|ADR6200|ADR6400L|ADR6425|001HT|Inspire 4G|Android.*\\bEVO\\b|T-Mobile G1|Z520m|Android [0-9.]+; Pixel",
								Nexus: "Nexus One|Nexus S|Galaxy.*Nexus|Android.*Nexus.*Mobile|Nexus 4|Nexus 5|Nexus 5X|Nexus 6",
								Dell: "Dell[;]? (Streak|Aero|Venue|Venue Pro|Flash|Smoke|Mini 3iX)|XCD28|XCD35|\\b001DL\\b|\\b101DL\\b|\\bGS01\\b",
								Motorola: "Motorola|DROIDX|DROID BIONIC|\\bDroid\\b.*Build|Android.*Xoom|HRI39|MOT-|A1260|A1680|A555|A853|A855|A953|A955|A956|Motorola.*ELECTRIFY|Motorola.*i1|i867|i940|MB200|MB300|MB501|MB502|MB508|MB511|MB520|MB525|MB526|MB611|MB612|MB632|MB810|MB855|MB860|MB861|MB865|MB870|ME501|ME502|ME511|ME525|ME600|ME632|ME722|ME811|ME860|ME863|ME865|MT620|MT710|MT716|MT720|MT810|MT870|MT917|Motorola.*TITANIUM|WX435|WX445|XT300|XT301|XT311|XT316|XT317|XT319|XT320|XT390|XT502|XT530|XT531|XT532|XT535|XT603|XT610|XT611|XT615|XT681|XT701|XT702|XT711|XT720|XT800|XT806|XT860|XT862|XT875|XT882|XT883|XT894|XT901|XT907|XT909|XT910|XT912|XT928|XT926|XT915|XT919|XT925|XT1021|\\bMoto E\\b|XT1068|XT1092|XT1052",
								Samsung: "\\bSamsung\\b|SM-G950F|SM-G955F|SM-G9250|GT-19300|SGH-I337|BGT-S5230|GT-B2100|GT-B2700|GT-B2710|GT-B3210|GT-B3310|GT-B3410|GT-B3730|GT-B3740|GT-B5510|GT-B5512|GT-B5722|GT-B6520|GT-B7300|GT-B7320|GT-B7330|GT-B7350|GT-B7510|GT-B7722|GT-B7800|GT-C3010|GT-C3011|GT-C3060|GT-C3200|GT-C3212|GT-C3212I|GT-C3262|GT-C3222|GT-C3300|GT-C3300K|GT-C3303|GT-C3303K|GT-C3310|GT-C3322|GT-C3330|GT-C3350|GT-C3500|GT-C3510|GT-C3530|GT-C3630|GT-C3780|GT-C5010|GT-C5212|GT-C6620|GT-C6625|GT-C6712|GT-E1050|GT-E1070|GT-E1075|GT-E1080|GT-E1081|GT-E1085|GT-E1087|GT-E1100|GT-E1107|GT-E1110|GT-E1120|GT-E1125|GT-E1130|GT-E1160|GT-E1170|GT-E1175|GT-E1180|GT-E1182|GT-E1200|GT-E1210|GT-E1225|GT-E1230|GT-E1390|GT-E2100|GT-E2120|GT-E2121|GT-E2152|GT-E2220|GT-E2222|GT-E2230|GT-E2232|GT-E2250|GT-E2370|GT-E2550|GT-E2652|GT-E3210|GT-E3213|GT-I5500|GT-I5503|GT-I5700|GT-I5800|GT-I5801|GT-I6410|GT-I6420|GT-I7110|GT-I7410|GT-I7500|GT-I8000|GT-I8150|GT-I8160|GT-I8190|GT-I8320|GT-I8330|GT-I8350|GT-I8530|GT-I8700|GT-I8703|GT-I8910|GT-I9000|GT-I9001|GT-I9003|GT-I9010|GT-I9020|GT-I9023|GT-I9070|GT-I9082|GT-I9100|GT-I9103|GT-I9220|GT-I9250|GT-I9300|GT-I9305|GT-I9500|GT-I9505|GT-M3510|GT-M5650|GT-M7500|GT-M7600|GT-M7603|GT-M8800|GT-M8910|GT-N7000|GT-S3110|GT-S3310|GT-S3350|GT-S3353|GT-S3370|GT-S3650|GT-S3653|GT-S3770|GT-S3850|GT-S5210|GT-S5220|GT-S5229|GT-S5230|GT-S5233|GT-S5250|GT-S5253|GT-S5260|GT-S5263|GT-S5270|GT-S5300|GT-S5330|GT-S5350|GT-S5360|GT-S5363|GT-S5369|GT-S5380|GT-S5380D|GT-S5560|GT-S5570|GT-S5600|GT-S5603|GT-S5610|GT-S5620|GT-S5660|GT-S5670|GT-S5690|GT-S5750|GT-S5780|GT-S5830|GT-S5839|GT-S6102|GT-S6500|GT-S7070|GT-S7200|GT-S7220|GT-S7230|GT-S7233|GT-S7250|GT-S7500|GT-S7530|GT-S7550|GT-S7562|GT-S7710|GT-S8000|GT-S8003|GT-S8500|GT-S8530|GT-S8600|SCH-A310|SCH-A530|SCH-A570|SCH-A610|SCH-A630|SCH-A650|SCH-A790|SCH-A795|SCH-A850|SCH-A870|SCH-A890|SCH-A930|SCH-A950|SCH-A970|SCH-A990|SCH-I100|SCH-I110|SCH-I400|SCH-I405|SCH-I500|SCH-I510|SCH-I515|SCH-I600|SCH-I730|SCH-I760|SCH-I770|SCH-I830|SCH-I910|SCH-I920|SCH-I959|SCH-LC11|SCH-N150|SCH-N300|SCH-R100|SCH-R300|SCH-R351|SCH-R400|SCH-R410|SCH-T300|SCH-U310|SCH-U320|SCH-U350|SCH-U360|SCH-U365|SCH-U370|SCH-U380|SCH-U410|SCH-U430|SCH-U450|SCH-U460|SCH-U470|SCH-U490|SCH-U540|SCH-U550|SCH-U620|SCH-U640|SCH-U650|SCH-U660|SCH-U700|SCH-U740|SCH-U750|SCH-U810|SCH-U820|SCH-U900|SCH-U940|SCH-U960|SCS-26UC|SGH-A107|SGH-A117|SGH-A127|SGH-A137|SGH-A157|SGH-A167|SGH-A177|SGH-A187|SGH-A197|SGH-A227|SGH-A237|SGH-A257|SGH-A437|SGH-A517|SGH-A597|SGH-A637|SGH-A657|SGH-A667|SGH-A687|SGH-A697|SGH-A707|SGH-A717|SGH-A727|SGH-A737|SGH-A747|SGH-A767|SGH-A777|SGH-A797|SGH-A817|SGH-A827|SGH-A837|SGH-A847|SGH-A867|SGH-A877|SGH-A887|SGH-A897|SGH-A927|SGH-B100|SGH-B130|SGH-B200|SGH-B220|SGH-C100|SGH-C110|SGH-C120|SGH-C130|SGH-C140|SGH-C160|SGH-C170|SGH-C180|SGH-C200|SGH-C207|SGH-C210|SGH-C225|SGH-C230|SGH-C417|SGH-C450|SGH-D307|SGH-D347|SGH-D357|SGH-D407|SGH-D415|SGH-D780|SGH-D807|SGH-D980|SGH-E105|SGH-E200|SGH-E315|SGH-E316|SGH-E317|SGH-E335|SGH-E590|SGH-E635|SGH-E715|SGH-E890|SGH-F300|SGH-F480|SGH-I200|SGH-I300|SGH-I320|SGH-I550|SGH-I577|SGH-I600|SGH-I607|SGH-I617|SGH-I627|SGH-I637|SGH-I677|SGH-I700|SGH-I717|SGH-I727|SGH-i747M|SGH-I777|SGH-I780|SGH-I827|SGH-I847|SGH-I857|SGH-I896|SGH-I897|SGH-I900|SGH-I907|SGH-I917|SGH-I927|SGH-I937|SGH-I997|SGH-J150|SGH-J200|SGH-L170|SGH-L700|SGH-M110|SGH-M150|SGH-M200|SGH-N105|SGH-N500|SGH-N600|SGH-N620|SGH-N625|SGH-N700|SGH-N710|SGH-P107|SGH-P207|SGH-P300|SGH-P310|SGH-P520|SGH-P735|SGH-P777|SGH-Q105|SGH-R210|SGH-R220|SGH-R225|SGH-S105|SGH-S307|SGH-T109|SGH-T119|SGH-T139|SGH-T209|SGH-T219|SGH-T229|SGH-T239|SGH-T249|SGH-T259|SGH-T309|SGH-T319|SGH-T329|SGH-T339|SGH-T349|SGH-T359|SGH-T369|SGH-T379|SGH-T409|SGH-T429|SGH-T439|SGH-T459|SGH-T469|SGH-T479|SGH-T499|SGH-T509|SGH-T519|SGH-T539|SGH-T559|SGH-T589|SGH-T609|SGH-T619|SGH-T629|SGH-T639|SGH-T659|SGH-T669|SGH-T679|SGH-T709|SGH-T719|SGH-T729|SGH-T739|SGH-T746|SGH-T749|SGH-T759|SGH-T769|SGH-T809|SGH-T819|SGH-T839|SGH-T919|SGH-T929|SGH-T939|SGH-T959|SGH-T989|SGH-U100|SGH-U200|SGH-U800|SGH-V205|SGH-V206|SGH-X100|SGH-X105|SGH-X120|SGH-X140|SGH-X426|SGH-X427|SGH-X475|SGH-X495|SGH-X497|SGH-X507|SGH-X600|SGH-X610|SGH-X620|SGH-X630|SGH-X700|SGH-X820|SGH-X890|SGH-Z130|SGH-Z150|SGH-Z170|SGH-ZX10|SGH-ZX20|SHW-M110|SPH-A120|SPH-A400|SPH-A420|SPH-A460|SPH-A500|SPH-A560|SPH-A600|SPH-A620|SPH-A660|SPH-A700|SPH-A740|SPH-A760|SPH-A790|SPH-A800|SPH-A820|SPH-A840|SPH-A880|SPH-A900|SPH-A940|SPH-A960|SPH-D600|SPH-D700|SPH-D710|SPH-D720|SPH-I300|SPH-I325|SPH-I330|SPH-I350|SPH-I500|SPH-I600|SPH-I700|SPH-L700|SPH-M100|SPH-M220|SPH-M240|SPH-M300|SPH-M305|SPH-M320|SPH-M330|SPH-M350|SPH-M360|SPH-M370|SPH-M380|SPH-M510|SPH-M540|SPH-M550|SPH-M560|SPH-M570|SPH-M580|SPH-M610|SPH-M620|SPH-M630|SPH-M800|SPH-M810|SPH-M850|SPH-M900|SPH-M910|SPH-M920|SPH-M930|SPH-N100|SPH-N200|SPH-N240|SPH-N300|SPH-N400|SPH-Z400|SWC-E100|SCH-i909|GT-N7100|GT-N7105|SCH-I535|SM-N900A|SGH-I317|SGH-T999L|GT-S5360B|GT-I8262|GT-S6802|GT-S6312|GT-S6310|GT-S5312|GT-S5310|GT-I9105|GT-I8510|GT-S6790N|SM-G7105|SM-N9005|GT-S5301|GT-I9295|GT-I9195|SM-C101|GT-S7392|GT-S7560|GT-B7610|GT-I5510|GT-S7582|GT-S7530E|GT-I8750|SM-G9006V|SM-G9008V|SM-G9009D|SM-G900A|SM-G900D|SM-G900F|SM-G900H|SM-G900I|SM-G900J|SM-G900K|SM-G900L|SM-G900M|SM-G900P|SM-G900R4|SM-G900S|SM-G900T|SM-G900V|SM-G900W8|SHV-E160K|SCH-P709|SCH-P729|SM-T2558|GT-I9205|SM-G9350|SM-J120F|SM-G920F|SM-G920V|SM-G930F|SM-N910C|SM-A310F|GT-I9190|SM-J500FN|SM-G903F|SM-J330F|SM-G610F|SM-G981B|SM-G892A|SM-A530F",
								LG: "\\bLG\\b;|LG[- ]?(C800|C900|E400|E610|E900|E-900|F160|F180K|F180L|F180S|730|855|L160|LS740|LS840|LS970|LU6200|MS690|MS695|MS770|MS840|MS870|MS910|P500|P700|P705|VM696|AS680|AS695|AX840|C729|E970|GS505|272|C395|E739BK|E960|L55C|L75C|LS696|LS860|P769BK|P350|P500|P509|P870|UN272|US730|VS840|VS950|LN272|LN510|LS670|LS855|LW690|MN270|MN510|P509|P769|P930|UN200|UN270|UN510|UN610|US670|US740|US760|UX265|UX840|VN271|VN530|VS660|VS700|VS740|VS750|VS910|VS920|VS930|VX9200|VX11000|AX840A|LW770|P506|P925|P999|E612|D955|D802|MS323|M257)|LM-G710",
								Sony: "SonyST|SonyLT|SonyEricsson|SonyEricssonLT15iv|LT18i|E10i|LT28h|LT26w|SonyEricssonMT27i|C5303|C6902|C6903|C6906|C6943|D2533|SOV34|601SO|F8332",
								Asus: "Asus.*Galaxy|PadFone.*Mobile",
								Xiaomi: "^(?!.*\\bx11\\b).*xiaomi.*$|POCOPHONE F1|MI 8|Redmi Note 9S|Redmi Note 5A Prime|N2G47H|M2001J2G|M2001J2I|M1805E10A|M2004J11G|M1902F1G|M2002J9G|M2004J19G|M2003J6A1G",
								NokiaLumia: "Lumia [0-9]{3,4}",
								Micromax: "Micromax.*\\b(A210|A92|A88|A72|A111|A110Q|A115|A116|A110|A90S|A26|A51|A35|A54|A25|A27|A89|A68|A65|A57|A90)\\b",
								Palm: "PalmSource|Palm",
								Vertu: "Vertu|Vertu.*Ltd|Vertu.*Ascent|Vertu.*Ayxta|Vertu.*Constellation(F|Quest)?|Vertu.*Monika|Vertu.*Signature",
								Pantech: "PANTECH|IM-A850S|IM-A840S|IM-A830L|IM-A830K|IM-A830S|IM-A820L|IM-A810K|IM-A810S|IM-A800S|IM-T100K|IM-A725L|IM-A780L|IM-A775C|IM-A770K|IM-A760S|IM-A750K|IM-A740S|IM-A730S|IM-A720L|IM-A710K|IM-A690L|IM-A690S|IM-A650S|IM-A630K|IM-A600S|VEGA PTL21|PT003|P8010|ADR910L|P6030|P6020|P9070|P4100|P9060|P5000|CDM8992|TXT8045|ADR8995|IS11PT|P2030|P6010|P8000|PT002|IS06|CDM8999|P9050|PT001|TXT8040|P2020|P9020|P2000|P7040|P7000|C790",
								Fly: "IQ230|IQ444|IQ450|IQ440|IQ442|IQ441|IQ245|IQ256|IQ236|IQ255|IQ235|IQ245|IQ275|IQ240|IQ285|IQ280|IQ270|IQ260|IQ250",
								Wiko: "KITE 4G|HIGHWAY|GETAWAY|STAIRWAY|DARKSIDE|DARKFULL|DARKNIGHT|DARKMOON|SLIDE|WAX 4G|RAINBOW|BLOOM|SUNSET|GOA(?!nna)|LENNY|BARRY|IGGY|OZZY|CINK FIVE|CINK PEAX|CINK PEAX 2|CINK SLIM|CINK SLIM 2|CINK +|CINK KING|CINK PEAX|CINK SLIM|SUBLIM",
								iMobile: "i-mobile (IQ|i-STYLE|idea|ZAA|Hitz)",
								SimValley: "\\b(SP-80|XT-930|SX-340|XT-930|SX-310|SP-360|SP60|SPT-800|SP-120|SPT-800|SP-140|SPX-5|SPX-8|SP-100|SPX-8|SPX-12)\\b",
								Wolfgang: "AT-B24D|AT-AS50HD|AT-AS40W|AT-AS55HD|AT-AS45q2|AT-B26D|AT-AS50Q",
								Alcatel: "Alcatel",
								Nintendo: "Nintendo (3DS|Switch)",
								Amoi: "Amoi",
								INQ: "INQ",
								OnePlus: "ONEPLUS",
								GenericPhone: "Tapatalk|PDA;|SAGEM|\\bmmp\\b|pocket|\\bpsp\\b|symbian|Smartphone|smartfon|treo|up.browser|up.link|vodafone|\\bwap\\b|nokia|Series40|Series60|S60|SonyEricsson|N900|MAUI.*WAP.*Browser"
							},
							tablets: {
								iPad: "iPad|iPad.*Mobile",
								NexusTablet: "Android.*Nexus[\\s]+(7|9|10)",
								GoogleTablet: "Android.*Pixel C",
								SamsungTablet: "SAMSUNG.*Tablet|Galaxy.*Tab|SC-01C|GT-P1000|GT-P1003|GT-P1010|GT-P3105|GT-P6210|GT-P6800|GT-P6810|GT-P7100|GT-P7300|GT-P7310|GT-P7500|GT-P7510|SCH-I800|SCH-I815|SCH-I905|SGH-I957|SGH-I987|SGH-T849|SGH-T859|SGH-T869|SPH-P100|GT-P3100|GT-P3108|GT-P3110|GT-P5100|GT-P5110|GT-P6200|GT-P7320|GT-P7511|GT-N8000|GT-P8510|SGH-I497|SPH-P500|SGH-T779|SCH-I705|SCH-I915|GT-N8013|GT-P3113|GT-P5113|GT-P8110|GT-N8010|GT-N8005|GT-N8020|GT-P1013|GT-P6201|GT-P7501|GT-N5100|GT-N5105|GT-N5110|SHV-E140K|SHV-E140L|SHV-E140S|SHV-E150S|SHV-E230K|SHV-E230L|SHV-E230S|SHW-M180K|SHW-M180L|SHW-M180S|SHW-M180W|SHW-M300W|SHW-M305W|SHW-M380K|SHW-M380S|SHW-M380W|SHW-M430W|SHW-M480K|SHW-M480S|SHW-M480W|SHW-M485W|SHW-M486W|SHW-M500W|GT-I9228|SCH-P739|SCH-I925|GT-I9200|GT-P5200|GT-P5210|GT-P5210X|SM-T311|SM-T310|SM-T310X|SM-T210|SM-T210R|SM-T211|SM-P600|SM-P601|SM-P605|SM-P900|SM-P901|SM-T217|SM-T217A|SM-T217S|SM-P6000|SM-T3100|SGH-I467|XE500|SM-T110|GT-P5220|GT-I9200X|GT-N5110X|GT-N5120|SM-P905|SM-T111|SM-T2105|SM-T315|SM-T320|SM-T320X|SM-T321|SM-T520|SM-T525|SM-T530NU|SM-T230NU|SM-T330NU|SM-T900|XE500T1C|SM-P605V|SM-P905V|SM-T337V|SM-T537V|SM-T707V|SM-T807V|SM-P600X|SM-P900X|SM-T210X|SM-T230|SM-T230X|SM-T325|GT-P7503|SM-T531|SM-T330|SM-T530|SM-T705|SM-T705C|SM-T535|SM-T331|SM-T800|SM-T700|SM-T537|SM-T807|SM-P907A|SM-T337A|SM-T537A|SM-T707A|SM-T807A|SM-T237|SM-T807P|SM-P607T|SM-T217T|SM-T337T|SM-T807T|SM-T116NQ|SM-T116BU|SM-P550|SM-T350|SM-T550|SM-T9000|SM-P9000|SM-T705Y|SM-T805|GT-P3113|SM-T710|SM-T810|SM-T815|SM-T360|SM-T533|SM-T113|SM-T335|SM-T715|SM-T560|SM-T670|SM-T677|SM-T377|SM-T567|SM-T357T|SM-T555|SM-T561|SM-T713|SM-T719|SM-T813|SM-T819|SM-T580|SM-T355Y?|SM-T280|SM-T817A|SM-T820|SM-W700|SM-P580|SM-T587|SM-P350|SM-P555M|SM-P355M|SM-T113NU|SM-T815Y|SM-T585|SM-T285|SM-T825|SM-W708|SM-T835|SM-T830|SM-T837V|SM-T720|SM-T510|SM-T387V|SM-P610|SM-T290|SM-T515|SM-T590|SM-T595|SM-T725|SM-T817P|SM-P585N0|SM-T395|SM-T295|SM-T865|SM-P610N|SM-P615|SM-T970|SM-T380|SM-T5950|SM-T905|SM-T231|SM-T500|SM-T860",
								Kindle: "Kindle|Silk.*Accelerated|Android.*\\b(KFOT|KFTT|KFJWI|KFJWA|KFOTE|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|WFJWAE|KFSAWA|KFSAWI|KFASWI|KFARWI|KFFOWI|KFGIWI|KFMEWI)\\b|Android.*Silk/[0-9.]+ like Chrome/[0-9.]+ (?!Mobile)",
								SurfaceTablet: "Windows NT [0-9.]+; ARM;.*(Tablet|ARMBJS)",
								HPTablet: "HP Slate (7|8|10)|HP ElitePad 900|hp-tablet|EliteBook.*Touch|HP 8|Slate 21|HP SlateBook 10",
								AsusTablet: "^.*PadFone((?!Mobile).)*$|Transformer|TF101|TF101G|TF300T|TF300TG|TF300TL|TF700T|TF700KL|TF701T|TF810C|ME171|ME301T|ME302C|ME371MG|ME370T|ME372MG|ME172V|ME173X|ME400C|Slider SL101|\\bK00F\\b|\\bK00C\\b|\\bK00E\\b|\\bK00L\\b|TX201LA|ME176C|ME102A|\\bM80TA\\b|ME372CL|ME560CG|ME372CG|ME302KL| K010 | K011 | K017 | K01E |ME572C|ME103K|ME170C|ME171C|\\bME70C\\b|ME581C|ME581CL|ME8510C|ME181C|P01Y|PO1MA|P01Z|\\bP027\\b|\\bP024\\b|\\bP00C\\b",
								BlackBerryTablet: "PlayBook|RIM Tablet",
								HTCtablet: "HTC_Flyer_P512|HTC Flyer|HTC Jetstream|HTC-P715a|HTC EVO View 4G|PG41200|PG09410",
								MotorolaTablet: "xoom|sholest|MZ615|MZ605|MZ505|MZ601|MZ602|MZ603|MZ604|MZ606|MZ607|MZ608|MZ609|MZ615|MZ616|MZ617",
								NookTablet: "Android.*Nook|NookColor|nook browser|BNRV200|BNRV200A|BNTV250|BNTV250A|BNTV400|BNTV600|LogicPD Zoom2",
								AcerTablet: "Android.*; \\b(A100|A101|A110|A200|A210|A211|A500|A501|A510|A511|A700|A701|W500|W500P|W501|W501P|W510|W511|W700|G100|G100W|B1-A71|B1-710|B1-711|A1-810|A1-811|A1-830)\\b|W3-810|\\bA3-A10\\b|\\bA3-A11\\b|\\bA3-A20\\b|\\bA3-A30|A3-A40",
								ToshibaTablet: "Android.*(AT100|AT105|AT200|AT205|AT270|AT275|AT300|AT305|AT1S5|AT500|AT570|AT700|AT830)|TOSHIBA.*FOLIO",
								LGTablet: "\\bL-06C|LG-V909|LG-V900|LG-V700|LG-V510|LG-V500|LG-V410|LG-V400|LG-VK810\\b",
								FujitsuTablet: "Android.*\\b(F-01D|F-02F|F-05E|F-10D|M532|Q572)\\b",
								PrestigioTablet: "PMP3170B|PMP3270B|PMP3470B|PMP7170B|PMP3370B|PMP3570C|PMP5870C|PMP3670B|PMP5570C|PMP5770D|PMP3970B|PMP3870C|PMP5580C|PMP5880D|PMP5780D|PMP5588C|PMP7280C|PMP7280C3G|PMP7280|PMP7880D|PMP5597D|PMP5597|PMP7100D|PER3464|PER3274|PER3574|PER3884|PER5274|PER5474|PMP5097CPRO|PMP5097|PMP7380D|PMP5297C|PMP5297C_QUAD|PMP812E|PMP812E3G|PMP812F|PMP810E|PMP880TD|PMT3017|PMT3037|PMT3047|PMT3057|PMT7008|PMT5887|PMT5001|PMT5002",
								LenovoTablet: "Lenovo TAB|Idea(Tab|Pad)( A1|A10| K1|)|ThinkPad([ ]+)?Tablet|YT3-850M|YT3-X90L|YT3-X90F|YT3-X90X|Lenovo.*(S2109|S2110|S5000|S6000|K3011|A3000|A3500|A1000|A2107|A2109|A1107|A5500|A7600|B6000|B8000|B8080)(-|)(FL|F|HV|H|)|TB-X103F|TB-X304X|TB-X304F|TB-X304L|TB-X505F|TB-X505L|TB-X505X|TB-X605F|TB-X605L|TB-8703F|TB-8703X|TB-8703N|TB-8704N|TB-8704F|TB-8704X|TB-8704V|TB-7304F|TB-7304I|TB-7304X|Tab2A7-10F|Tab2A7-20F|TB2-X30L|YT3-X50L|YT3-X50F|YT3-X50M|YT-X705F|YT-X703F|YT-X703L|YT-X705L|YT-X705X|TB2-X30F|TB2-X30L|TB2-X30M|A2107A-F|A2107A-H|TB3-730F|TB3-730M|TB3-730X|TB-7504F|TB-7504X|TB-X704F|TB-X104F|TB3-X70F|TB-X705F|TB-8504F|TB3-X70L|TB3-710F|TB-X704L",
								DellTablet: "Venue 11|Venue 8|Venue 7|Dell Streak 10|Dell Streak 7",
								YarvikTablet: "Android.*\\b(TAB210|TAB211|TAB224|TAB250|TAB260|TAB264|TAB310|TAB360|TAB364|TAB410|TAB411|TAB420|TAB424|TAB450|TAB460|TAB461|TAB464|TAB465|TAB467|TAB468|TAB07-100|TAB07-101|TAB07-150|TAB07-151|TAB07-152|TAB07-200|TAB07-201-3G|TAB07-210|TAB07-211|TAB07-212|TAB07-214|TAB07-220|TAB07-400|TAB07-485|TAB08-150|TAB08-200|TAB08-201-3G|TAB08-201-30|TAB09-100|TAB09-211|TAB09-410|TAB10-150|TAB10-201|TAB10-211|TAB10-400|TAB10-410|TAB13-201|TAB274EUK|TAB275EUK|TAB374EUK|TAB462EUK|TAB474EUK|TAB9-200)\\b",
								MedionTablet: "Android.*\\bOYO\\b|LIFE.*(P9212|P9514|P9516|S9512)|LIFETAB",
								ArnovaTablet: "97G4|AN10G2|AN7bG3|AN7fG3|AN8G3|AN8cG3|AN7G3|AN9G3|AN7dG3|AN7dG3ST|AN7dG3ChildPad|AN10bG3|AN10bG3DT|AN9G2",
								IntensoTablet: "INM8002KP|INM1010FP|INM805ND|Intenso Tab|TAB1004",
								IRUTablet: "M702pro",
								MegafonTablet: "MegaFon V9|\\bZTE V9\\b|Android.*\\bMT7A\\b",
								EbodaTablet: "E-Boda (Supreme|Impresspeed|Izzycomm|Essential)",
								AllViewTablet: "Allview.*(Viva|Alldro|City|Speed|All TV|Frenzy|Quasar|Shine|TX1|AX1|AX2)",
								ArchosTablet: "\\b(101G9|80G9|A101IT)\\b|Qilive 97R|Archos5|\\bARCHOS (70|79|80|90|97|101|FAMILYPAD|)(b|c|)(G10| Cobalt| TITANIUM(HD|)| Xenon| Neon|XSK| 2| XS 2| PLATINUM| CARBON|GAMEPAD)\\b",
								AinolTablet: "NOVO7|NOVO8|NOVO10|Novo7Aurora|Novo7Basic|NOVO7PALADIN|novo9-Spark",
								NokiaLumiaTablet: "Lumia 2520",
								SonyTablet: "Sony.*Tablet|Xperia Tablet|Sony Tablet S|SO-03E|SGPT12|SGPT13|SGPT114|SGPT121|SGPT122|SGPT123|SGPT111|SGPT112|SGPT113|SGPT131|SGPT132|SGPT133|SGPT211|SGPT212|SGPT213|SGP311|SGP312|SGP321|EBRD1101|EBRD1102|EBRD1201|SGP351|SGP341|SGP511|SGP512|SGP521|SGP541|SGP551|SGP621|SGP641|SGP612|SOT31|SGP771|SGP611|SGP612|SGP712",
								PhilipsTablet: "\\b(PI2010|PI3000|PI3100|PI3105|PI3110|PI3205|PI3210|PI3900|PI4010|PI7000|PI7100)\\b",
								CubeTablet: "Android.*(K8GT|U9GT|U10GT|U16GT|U17GT|U18GT|U19GT|U20GT|U23GT|U30GT)|CUBE U8GT",
								CobyTablet: "MID1042|MID1045|MID1125|MID1126|MID7012|MID7014|MID7015|MID7034|MID7035|MID7036|MID7042|MID7048|MID7127|MID8042|MID8048|MID8127|MID9042|MID9740|MID9742|MID7022|MID7010",
								MIDTablet: "M9701|M9000|M9100|M806|M1052|M806|T703|MID701|MID713|MID710|MID727|MID760|MID830|MID728|MID933|MID125|MID810|MID732|MID120|MID930|MID800|MID731|MID900|MID100|MID820|MID735|MID980|MID130|MID833|MID737|MID960|MID135|MID860|MID736|MID140|MID930|MID835|MID733|MID4X10",
								MSITablet: "MSI \\b(Primo 73K|Primo 73L|Primo 81L|Primo 77|Primo 93|Primo 75|Primo 76|Primo 73|Primo 81|Primo 91|Primo 90|Enjoy 71|Enjoy 7|Enjoy 10)\\b",
								SMiTTablet: "Android.*(\\bMID\\b|MID-560|MTV-T1200|MTV-PND531|MTV-P1101|MTV-PND530)",
								RockChipTablet: "Android.*(RK2818|RK2808A|RK2918|RK3066)|RK2738|RK2808A",
								FlyTablet: "IQ310|Fly Vision",
								bqTablet: "Android.*(bq)?.*\\b(Elcano|Curie|Edison|Maxwell|Kepler|Pascal|Tesla|Hypatia|Platon|Newton|Livingstone|Cervantes|Avant|Aquaris ([E|M]10|M8))\\b|Maxwell.*Lite|Maxwell.*Plus",
								HuaweiTablet: "MediaPad|MediaPad 7 Youth|IDEOS S7|S7-201c|S7-202u|S7-101|S7-103|S7-104|S7-105|S7-106|S7-201|S7-Slim|M2-A01L|BAH-L09|BAH-W09|AGS-L09|CMR-AL19",
								NecTablet: "\\bN-06D|\\bN-08D",
								PantechTablet: "Pantech.*P4100",
								BronchoTablet: "Broncho.*(N701|N708|N802|a710)",
								VersusTablet: "TOUCHPAD.*[78910]|\\bTOUCHTAB\\b",
								ZyncTablet: "z1000|Z99 2G|z930|z990|z909|Z919|z900",
								PositivoTablet: "TB07STA|TB10STA|TB07FTA|TB10FTA",
								NabiTablet: "Android.*\\bNabi",
								KoboTablet: "Kobo Touch|\\bK080\\b|\\bVox\\b Build|\\bArc\\b Build",
								DanewTablet: "DSlide.*\\b(700|701R|702|703R|704|802|970|971|972|973|974|1010|1012)\\b",
								TexetTablet: "NaviPad|TB-772A|TM-7045|TM-7055|TM-9750|TM-7016|TM-7024|TM-7026|TM-7041|TM-7043|TM-7047|TM-8041|TM-9741|TM-9747|TM-9748|TM-9751|TM-7022|TM-7021|TM-7020|TM-7011|TM-7010|TM-7023|TM-7025|TM-7037W|TM-7038W|TM-7027W|TM-9720|TM-9725|TM-9737W|TM-1020|TM-9738W|TM-9740|TM-9743W|TB-807A|TB-771A|TB-727A|TB-725A|TB-719A|TB-823A|TB-805A|TB-723A|TB-715A|TB-707A|TB-705A|TB-709A|TB-711A|TB-890HD|TB-880HD|TB-790HD|TB-780HD|TB-770HD|TB-721HD|TB-710HD|TB-434HD|TB-860HD|TB-840HD|TB-760HD|TB-750HD|TB-740HD|TB-730HD|TB-722HD|TB-720HD|TB-700HD|TB-500HD|TB-470HD|TB-431HD|TB-430HD|TB-506|TB-504|TB-446|TB-436|TB-416|TB-146SE|TB-126SE",
								PlaystationTablet: "Playstation.*(Portable|Vita)",
								TrekstorTablet: "ST10416-1|VT10416-1|ST70408-1|ST702xx-1|ST702xx-2|ST80208|ST97216|ST70104-2|VT10416-2|ST10216-2A|SurfTab",
								PyleAudioTablet: "\\b(PTBL10CEU|PTBL10C|PTBL72BC|PTBL72BCEU|PTBL7CEU|PTBL7C|PTBL92BC|PTBL92BCEU|PTBL9CEU|PTBL9CUK|PTBL9C)\\b",
								AdvanTablet: "Android.* \\b(E3A|T3X|T5C|T5B|T3E|T3C|T3B|T1J|T1F|T2A|T1H|T1i|E1C|T1-E|T5-A|T4|E1-B|T2Ci|T1-B|T1-D|O1-A|E1-A|T1-A|T3A|T4i)\\b ",
								DanyTechTablet: "Genius Tab G3|Genius Tab S2|Genius Tab Q3|Genius Tab G4|Genius Tab Q4|Genius Tab G-II|Genius TAB GII|Genius TAB GIII|Genius Tab S1",
								GalapadTablet: "Android [0-9.]+; [a-z-]+; \\bG1\\b",
								MicromaxTablet: "Funbook|Micromax.*\\b(P250|P560|P360|P362|P600|P300|P350|P500|P275)\\b",
								KarbonnTablet: "Android.*\\b(A39|A37|A34|ST8|ST10|ST7|Smart Tab3|Smart Tab2)\\b",
								AllFineTablet: "Fine7 Genius|Fine7 Shine|Fine7 Air|Fine8 Style|Fine9 More|Fine10 Joy|Fine11 Wide",
								PROSCANTablet: "\\b(PEM63|PLT1023G|PLT1041|PLT1044|PLT1044G|PLT1091|PLT4311|PLT4311PL|PLT4315|PLT7030|PLT7033|PLT7033D|PLT7035|PLT7035D|PLT7044K|PLT7045K|PLT7045KB|PLT7071KG|PLT7072|PLT7223G|PLT7225G|PLT7777G|PLT7810K|PLT7849G|PLT7851G|PLT7852G|PLT8015|PLT8031|PLT8034|PLT8036|PLT8080K|PLT8082|PLT8088|PLT8223G|PLT8234G|PLT8235G|PLT8816K|PLT9011|PLT9045K|PLT9233G|PLT9735|PLT9760G|PLT9770G)\\b",
								YONESTablet: "BQ1078|BC1003|BC1077|RK9702|BC9730|BC9001|IT9001|BC7008|BC7010|BC708|BC728|BC7012|BC7030|BC7027|BC7026",
								ChangJiaTablet: "TPC7102|TPC7103|TPC7105|TPC7106|TPC7107|TPC7201|TPC7203|TPC7205|TPC7210|TPC7708|TPC7709|TPC7712|TPC7110|TPC8101|TPC8103|TPC8105|TPC8106|TPC8203|TPC8205|TPC8503|TPC9106|TPC9701|TPC97101|TPC97103|TPC97105|TPC97106|TPC97111|TPC97113|TPC97203|TPC97603|TPC97809|TPC97205|TPC10101|TPC10103|TPC10106|TPC10111|TPC10203|TPC10205|TPC10503",
								GUTablet: "TX-A1301|TX-M9002|Q702|kf026",
								PointOfViewTablet: "TAB-P506|TAB-navi-7-3G-M|TAB-P517|TAB-P-527|TAB-P701|TAB-P703|TAB-P721|TAB-P731N|TAB-P741|TAB-P825|TAB-P905|TAB-P925|TAB-PR945|TAB-PL1015|TAB-P1025|TAB-PI1045|TAB-P1325|TAB-PROTAB[0-9]+|TAB-PROTAB25|TAB-PROTAB26|TAB-PROTAB27|TAB-PROTAB26XL|TAB-PROTAB2-IPS9|TAB-PROTAB30-IPS9|TAB-PROTAB25XXL|TAB-PROTAB26-IPS10|TAB-PROTAB30-IPS10",
								OvermaxTablet: "OV-(SteelCore|NewBase|Basecore|Baseone|Exellen|Quattor|EduTab|Solution|ACTION|BasicTab|TeddyTab|MagicTab|Stream|TB-08|TB-09)|Qualcore 1027",
								HCLTablet: "HCL.*Tablet|Connect-3G-2.0|Connect-2G-2.0|ME Tablet U1|ME Tablet U2|ME Tablet G1|ME Tablet X1|ME Tablet Y2|ME Tablet Sync",
								DPSTablet: "DPS Dream 9|DPS Dual 7",
								VistureTablet: "V97 HD|i75 3G|Visture V4( HD)?|Visture V5( HD)?|Visture V10",
								CrestaTablet: "CTP(-)?810|CTP(-)?818|CTP(-)?828|CTP(-)?838|CTP(-)?888|CTP(-)?978|CTP(-)?980|CTP(-)?987|CTP(-)?988|CTP(-)?989",
								MediatekTablet: "\\bMT8125|MT8389|MT8135|MT8377\\b",
								ConcordeTablet: "Concorde([ ]+)?Tab|ConCorde ReadMan",
								GoCleverTablet: "GOCLEVER TAB|A7GOCLEVER|M1042|M7841|M742|R1042BK|R1041|TAB A975|TAB A7842|TAB A741|TAB A741L|TAB M723G|TAB M721|TAB A1021|TAB I921|TAB R721|TAB I720|TAB T76|TAB R70|TAB R76.2|TAB R106|TAB R83.2|TAB M813G|TAB I721|GCTA722|TAB I70|TAB I71|TAB S73|TAB R73|TAB R74|TAB R93|TAB R75|TAB R76.1|TAB A73|TAB A93|TAB A93.2|TAB T72|TAB R83|TAB R974|TAB R973|TAB A101|TAB A103|TAB A104|TAB A104.2|R105BK|M713G|A972BK|TAB A971|TAB R974.2|TAB R104|TAB R83.3|TAB A1042",
								ModecomTablet: "FreeTAB 9000|FreeTAB 7.4|FreeTAB 7004|FreeTAB 7800|FreeTAB 2096|FreeTAB 7.5|FreeTAB 1014|FreeTAB 1001 |FreeTAB 8001|FreeTAB 9706|FreeTAB 9702|FreeTAB 7003|FreeTAB 7002|FreeTAB 1002|FreeTAB 7801|FreeTAB 1331|FreeTAB 1004|FreeTAB 8002|FreeTAB 8014|FreeTAB 9704|FreeTAB 1003",
								VoninoTablet: "\\b(Argus[ _]?S|Diamond[ _]?79HD|Emerald[ _]?78E|Luna[ _]?70C|Onyx[ _]?S|Onyx[ _]?Z|Orin[ _]?HD|Orin[ _]?S|Otis[ _]?S|SpeedStar[ _]?S|Magnet[ _]?M9|Primus[ _]?94[ _]?3G|Primus[ _]?94HD|Primus[ _]?QS|Android.*\\bQ8\\b|Sirius[ _]?EVO[ _]?QS|Sirius[ _]?QS|Spirit[ _]?S)\\b",
								ECSTablet: "V07OT2|TM105A|S10OT1|TR10CS1",
								StorexTablet: "eZee[_']?(Tab|Go)[0-9]+|TabLC7|Looney Tunes Tab",
								VodafoneTablet: "SmartTab([ ]+)?[0-9]+|SmartTabII10|SmartTabII7|VF-1497|VFD 1400",
								EssentielBTablet: "Smart[ ']?TAB[ ]+?[0-9]+|Family[ ']?TAB2",
								RossMoorTablet: "RM-790|RM-997|RMD-878G|RMD-974R|RMT-705A|RMT-701|RME-601|RMT-501|RMT-711",
								iMobileTablet: "i-mobile i-note",
								TolinoTablet: "tolino tab [0-9.]+|tolino shine",
								AudioSonicTablet: "\\bC-22Q|T7-QC|T-17B|T-17P\\b",
								AMPETablet: "Android.* A78 ",
								SkkTablet: "Android.* (SKYPAD|PHOENIX|CYCLOPS)",
								TecnoTablet: "TECNO P9|TECNO DP8D",
								JXDTablet: "Android.* \\b(F3000|A3300|JXD5000|JXD3000|JXD2000|JXD300B|JXD300|S5800|S7800|S602b|S5110b|S7300|S5300|S602|S603|S5100|S5110|S601|S7100a|P3000F|P3000s|P101|P200s|P1000m|P200m|P9100|P1000s|S6600b|S908|P1000|P300|S18|S6600|S9100)\\b",
								iJoyTablet: "Tablet (Spirit 7|Essentia|Galatea|Fusion|Onix 7|Landa|Titan|Scooby|Deox|Stella|Themis|Argon|Unique 7|Sygnus|Hexen|Finity 7|Cream|Cream X2|Jade|Neon 7|Neron 7|Kandy|Scape|Saphyr 7|Rebel|Biox|Rebel|Rebel 8GB|Myst|Draco 7|Myst|Tab7-004|Myst|Tadeo Jones|Tablet Boing|Arrow|Draco Dual Cam|Aurix|Mint|Amity|Revolution|Finity 9|Neon 9|T9w|Amity 4GB Dual Cam|Stone 4GB|Stone 8GB|Andromeda|Silken|X2|Andromeda II|Halley|Flame|Saphyr 9,7|Touch 8|Planet|Triton|Unique 10|Hexen 10|Memphis 4GB|Memphis 8GB|Onix 10)",
								FX2Tablet: "FX2 PAD7|FX2 PAD10",
								XoroTablet: "KidsPAD 701|PAD[ ]?712|PAD[ ]?714|PAD[ ]?716|PAD[ ]?717|PAD[ ]?718|PAD[ ]?720|PAD[ ]?721|PAD[ ]?722|PAD[ ]?790|PAD[ ]?792|PAD[ ]?900|PAD[ ]?9715D|PAD[ ]?9716DR|PAD[ ]?9718DR|PAD[ ]?9719QR|PAD[ ]?9720QR|TelePAD1030|Telepad1032|TelePAD730|TelePAD731|TelePAD732|TelePAD735Q|TelePAD830|TelePAD9730|TelePAD795|MegaPAD 1331|MegaPAD 1851|MegaPAD 2151",
								ViewsonicTablet: "ViewPad 10pi|ViewPad 10e|ViewPad 10s|ViewPad E72|ViewPad7|ViewPad E100|ViewPad 7e|ViewSonic VB733|VB100a",
								VerizonTablet: "QTAQZ3|QTAIR7|QTAQTZ3|QTASUN1|QTASUN2|QTAXIA1",
								OdysTablet: "LOOX|XENO10|ODYS[ -](Space|EVO|Xpress|NOON)|\\bXELIO\\b|Xelio10Pro|XELIO7PHONETAB|XELIO10EXTREME|XELIOPT2|NEO_QUAD10",
								CaptivaTablet: "CAPTIVA PAD",
								IconbitTablet: "NetTAB|NT-3702|NT-3702S|NT-3702S|NT-3603P|NT-3603P|NT-0704S|NT-0704S|NT-3805C|NT-3805C|NT-0806C|NT-0806C|NT-0909T|NT-0909T|NT-0907S|NT-0907S|NT-0902S|NT-0902S",
								TeclastTablet: "T98 4G|\\bP80\\b|\\bX90HD\\b|X98 Air|X98 Air 3G|\\bX89\\b|P80 3G|\\bX80h\\b|P98 Air|\\bX89HD\\b|P98 3G|\\bP90HD\\b|P89 3G|X98 3G|\\bP70h\\b|P79HD 3G|G18d 3G|\\bP79HD\\b|\\bP89s\\b|\\bA88\\b|\\bP10HD\\b|\\bP19HD\\b|G18 3G|\\bP78HD\\b|\\bA78\\b|\\bP75\\b|G17s 3G|G17h 3G|\\bP85t\\b|\\bP90\\b|\\bP11\\b|\\bP98t\\b|\\bP98HD\\b|\\bG18d\\b|\\bP85s\\b|\\bP11HD\\b|\\bP88s\\b|\\bA80HD\\b|\\bA80se\\b|\\bA10h\\b|\\bP89\\b|\\bP78s\\b|\\bG18\\b|\\bP85\\b|\\bA70h\\b|\\bA70\\b|\\bG17\\b|\\bP18\\b|\\bA80s\\b|\\bA11s\\b|\\bP88HD\\b|\\bA80h\\b|\\bP76s\\b|\\bP76h\\b|\\bP98\\b|\\bA10HD\\b|\\bP78\\b|\\bP88\\b|\\bA11\\b|\\bA10t\\b|\\bP76a\\b|\\bP76t\\b|\\bP76e\\b|\\bP85HD\\b|\\bP85a\\b|\\bP86\\b|\\bP75HD\\b|\\bP76v\\b|\\bA12\\b|\\bP75a\\b|\\bA15\\b|\\bP76Ti\\b|\\bP81HD\\b|\\bA10\\b|\\bT760VE\\b|\\bT720HD\\b|\\bP76\\b|\\bP73\\b|\\bP71\\b|\\bP72\\b|\\bT720SE\\b|\\bC520Ti\\b|\\bT760\\b|\\bT720VE\\b|T720-3GE|T720-WiFi",
								OndaTablet: "\\b(V975i|Vi30|VX530|V701|Vi60|V701s|Vi50|V801s|V719|Vx610w|VX610W|V819i|Vi10|VX580W|Vi10|V711s|V813|V811|V820w|V820|Vi20|V711|VI30W|V712|V891w|V972|V819w|V820w|Vi60|V820w|V711|V813s|V801|V819|V975s|V801|V819|V819|V818|V811|V712|V975m|V101w|V961w|V812|V818|V971|V971s|V919|V989|V116w|V102w|V973|Vi40)\\b[\\s]+|V10 \\b4G\\b",
								JaytechTablet: "TPC-PA762",
								BlaupunktTablet: "Endeavour 800NG|Endeavour 1010",
								DigmaTablet: "\\b(iDx10|iDx9|iDx8|iDx7|iDxD7|iDxD8|iDsQ8|iDsQ7|iDsQ8|iDsD10|iDnD7|3TS804H|iDsQ11|iDj7|iDs10)\\b",
								EvolioTablet: "ARIA_Mini_wifi|Aria[ _]Mini|Evolio X10|Evolio X7|Evolio X8|\\bEvotab\\b|\\bNeura\\b",
								LavaTablet: "QPAD E704|\\bIvoryS\\b|E-TAB IVORY|\\bE-TAB\\b",
								AocTablet: "MW0811|MW0812|MW0922|MTK8382|MW1031|MW0831|MW0821|MW0931|MW0712",
								MpmanTablet: "MP11 OCTA|MP10 OCTA|MPQC1114|MPQC1004|MPQC994|MPQC974|MPQC973|MPQC804|MPQC784|MPQC780|\\bMPG7\\b|MPDCG75|MPDCG71|MPDC1006|MP101DC|MPDC9000|MPDC905|MPDC706HD|MPDC706|MPDC705|MPDC110|MPDC100|MPDC99|MPDC97|MPDC88|MPDC8|MPDC77|MP709|MID701|MID711|MID170|MPDC703|MPQC1010",
								CelkonTablet: "CT695|CT888|CT[\\s]?910|CT7 Tab|CT9 Tab|CT3 Tab|CT2 Tab|CT1 Tab|C820|C720|\\bCT-1\\b",
								WolderTablet: "miTab \\b(DIAMOND|SPACE|BROOKLYN|NEO|FLY|MANHATTAN|FUNK|EVOLUTION|SKY|GOCAR|IRON|GENIUS|POP|MINT|EPSILON|BROADWAY|JUMP|HOP|LEGEND|NEW AGE|LINE|ADVANCE|FEEL|FOLLOW|LIKE|LINK|LIVE|THINK|FREEDOM|CHICAGO|CLEVELAND|BALTIMORE-GH|IOWA|BOSTON|SEATTLE|PHOENIX|DALLAS|IN 101|MasterChef)\\b",
								MediacomTablet: "M-MPI10C3G|M-SP10EG|M-SP10EGP|M-SP10HXAH|M-SP7HXAH|M-SP10HXBH|M-SP8HXAH|M-SP8MXA",
								MiTablet: "\\bMI PAD\\b|\\bHM NOTE 1W\\b",
								NibiruTablet: "Nibiru M1|Nibiru Jupiter One",
								NexoTablet: "NEXO NOVA|NEXO 10|NEXO AVIO|NEXO FREE|NEXO GO|NEXO EVO|NEXO 3G|NEXO SMART|NEXO KIDDO|NEXO MOBI",
								LeaderTablet: "TBLT10Q|TBLT10I|TBL-10WDKB|TBL-10WDKBO2013|TBL-W230V2|TBL-W450|TBL-W500|SV572|TBLT7I|TBA-AC7-8G|TBLT79|TBL-8W16|TBL-10W32|TBL-10WKB|TBL-W100",
								UbislateTablet: "UbiSlate[\\s]?7C",
								PocketBookTablet: "Pocketbook",
								KocasoTablet: "\\b(TB-1207)\\b",
								HisenseTablet: "\\b(F5281|E2371)\\b",
								Hudl: "Hudl HT7S3|Hudl 2",
								TelstraTablet: "T-Hub2",
								GenericTablet: "Android.*\\b97D\\b|Tablet(?!.*PC)|BNTV250A|MID-WCDMA|LogicPD Zoom2|\\bA7EB\\b|CatNova8|A1_07|CT704|CT1002|\\bM721\\b|rk30sdk|\\bEVOTAB\\b|M758A|ET904|ALUMIUM10|Smartfren Tab|Endeavour 1010|Tablet-PC-4|Tagi Tab|\\bM6pro\\b|CT1020W|arc 10HD|\\bTP750\\b|\\bQTAQZ3\\b|WVT101|TM1088|KT107"
							},
							oss: {
								AndroidOS: "Android",
								BlackBerryOS: "blackberry|\\bBB10\\b|rim tablet os",
								PalmOS: "PalmOS|avantgo|blazer|elaine|hiptop|palm|plucker|xiino",
								SymbianOS: "Symbian|SymbOS|Series60|Series40|SYB-[0-9]+|\\bS60\\b",
								WindowsMobileOS: "Windows CE.*(PPC|Smartphone|Mobile|[0-9]{3}x[0-9]{3})|Windows Mobile|Windows Phone [0-9.]+|WCE;",
								WindowsPhoneOS: "Windows Phone 10.0|Windows Phone 8.1|Windows Phone 8.0|Windows Phone OS|XBLWP7|ZuneWP7|Windows NT 6.[23]; ARM;",
								iOS: "\\biPhone.*Mobile|\\biPod|\\biPad|AppleCoreMedia",
								iPadOS: "CPU OS 13",
								SailfishOS: "Sailfish",
								MeeGoOS: "MeeGo",
								MaemoOS: "Maemo",
								JavaOS: "J2ME/|\\bMIDP\\b|\\bCLDC\\b",
								webOS: "webOS|hpwOS",
								badaOS: "\\bBada\\b",
								BREWOS: "BREW"
							},
							uas: {
								Chrome: "\\bCrMo\\b|CriOS|Android.*Chrome/[.0-9]* (Mobile)?",
								Dolfin: "\\bDolfin\\b",
								Opera: "Opera.*Mini|Opera.*Mobi|Android.*Opera|Mobile.*OPR/[0-9.]+$|Coast/[0-9.]+",
								Skyfire: "Skyfire",
								Edge: "\\bEdgiOS\\b|Mobile Safari/[.0-9]* Edge",
								IE: "IEMobile|MSIEMobile",
								Firefox: "fennec|firefox.*maemo|(Mobile|Tablet).*Firefox|Firefox.*Mobile|FxiOS",
								Bolt: "bolt",
								TeaShark: "teashark",
								Blazer: "Blazer",
								Safari: "Version((?!\\bEdgiOS\\b).)*Mobile.*Safari|Safari.*Mobile|MobileSafari",
								WeChat: "\\bMicroMessenger\\b",
								UCBrowser: "UC.*Browser|UCWEB",
								baiduboxapp: "baiduboxapp",
								baidubrowser: "baidubrowser",
								DiigoBrowser: "DiigoBrowser",
								Mercury: "\\bMercury\\b",
								ObigoBrowser: "Obigo",
								NetFront: "NF-Browser",
								GenericBrowser: "NokiaBrowser|OviBrowser|OneBrowser|TwonkyBeamBrowser|SEMC.*Browser|FlyFlow|Minimo|NetFront|Novarra-Vision|MQQBrowser|MicroMessenger",
								PaleMoon: "Android.*PaleMoon|Mobile.*PaleMoon"
							},
							props: {
								Mobile: "Mobile/[VER]",
								Build: "Build/[VER]",
								Version: "Version/[VER]",
								VendorID: "VendorID/[VER]",
								iPad: "iPad.*CPU[a-z ]+[VER]",
								iPhone: "iPhone.*CPU[a-z ]+[VER]",
								iPod: "iPod.*CPU[a-z ]+[VER]",
								Kindle: "Kindle/[VER]",
								Chrome: ["Chrome/[VER]", "CriOS/[VER]", "CrMo/[VER]"],
								Coast: ["Coast/[VER]"],
								Dolfin: "Dolfin/[VER]",
								Firefox: ["Firefox/[VER]", "FxiOS/[VER]"],
								Fennec: "Fennec/[VER]",
								Edge: "Edge/[VER]",
								IE: ["IEMobile/[VER];", "IEMobile [VER]", "MSIE [VER];", "Trident/[0-9.]+;.*rv:[VER]"],
								NetFront: "NetFront/[VER]",
								NokiaBrowser: "NokiaBrowser/[VER]",
								Opera: [" OPR/[VER]", "Opera Mini/[VER]", "Version/[VER]"],
								"Opera Mini": "Opera Mini/[VER]",
								"Opera Mobi": "Version/[VER]",
								UCBrowser: ["UCWEB[VER]", "UC.*Browser/[VER]"],
								MQQBrowser: "MQQBrowser/[VER]",
								MicroMessenger: "MicroMessenger/[VER]",
								baiduboxapp: "baiduboxapp/[VER]",
								baidubrowser: "baidubrowser/[VER]",
								SamsungBrowser: "SamsungBrowser/[VER]",
								Iron: "Iron/[VER]",
								Safari: ["Version/[VER]", "Safari/[VER]"],
								Skyfire: "Skyfire/[VER]",
								Tizen: "Tizen/[VER]",
								Webkit: "webkit[ /][VER]",
								PaleMoon: "PaleMoon/[VER]",
								SailfishBrowser: "SailfishBrowser/[VER]",
								Gecko: "Gecko/[VER]",
								Trident: "Trident/[VER]",
								Presto: "Presto/[VER]",
								Goanna: "Goanna/[VER]",
								iOS: " \\bi?OS\\b [VER][ ;]{1}",
								Android: "Android [VER]",
								Sailfish: "Sailfish [VER]",
								BlackBerry: ["BlackBerry[\\w]+/[VER]", "BlackBerry.*Version/[VER]", "Version/[VER]"],
								BREW: "BREW [VER]",
								Java: "Java/[VER]",
								"Windows Phone OS": ["Windows Phone OS [VER]", "Windows Phone [VER]"],
								"Windows Phone": "Windows Phone [VER]",
								"Windows CE": "Windows CE/[VER]",
								"Windows NT": "Windows NT [VER]",
								Symbian: ["SymbianOS/[VER]", "Symbian/[VER]"],
								webOS: ["webOS/[VER]", "hpwOS/[VER];"]
							},
							utils: {
								Bot: "Googlebot|facebookexternalhit|Google-AMPHTML|s~amp-validator|AdsBot-Google|Google Keyword Suggestion|Facebot|YandexBot|YandexMobileBot|bingbot|ia_archiver|AhrefsBot|Ezooms|GSLFbot|WBSearchBot|Twitterbot|TweetmemeBot|Twikle|PaperLiBot|Wotbox|UnwindFetchor|Exabot|MJ12bot|YandexImages|TurnitinBot|Pingdom|contentkingapp|AspiegelBot",
								MobileBot: "Googlebot-Mobile|AdsBot-Google-Mobile|YahooSeeker/M1A1-R2D2",
								DesktopMode: "WPDesktop",
								TV: "SonyDTV|HbbTV",
								WebKit: "(webkit)[ /]([\\w.]+)",
								Console: "\\b(Nintendo|Nintendo WiiU|Nintendo 3DS|Nintendo Switch|PLAYSTATION|Xbox)\\b",
								Watch: "SM-V700"
							}
						}, g.detectMobileBrowsers = {
							fullPattern: /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i,
							shortPattern: /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,
							tabletPattern: /android|ipad|playbook|silk/i
						};
						var h, i = Object.prototype.hasOwnProperty;
						return g.FALLBACK_PHONE = "UnknownPhone", g.FALLBACK_TABLET = "UnknownTablet", g.FALLBACK_MOBILE = "UnknownMobile", h = "isArray" in Array ? Array.isArray : function(a) {
								return "[object Array]" === Object.prototype.toString.call(a)
							},
							function() {
								var a, b, c, e, f, j, k = g.mobileDetectRules;
								for (a in k.props)
									if (i.call(k.props, a)) {
										for (b = k.props[a], h(b) || (b = [b]), f = b.length, e = 0; e < f; ++e) c = b[e], j = c.indexOf("[VER]"), j >= 0 && (c = c.substring(0, j) + "([\\w._\\+]+)" + c.substring(j + 5)), b[e] = new RegExp(c, "i");
										k.props[a] = b
									} d(k.oss), d(k.phones), d(k.tablets), d(k.uas), d(k.utils), k.oss0 = {
									WindowsPhoneOS: k.oss.WindowsPhoneOS,
									WindowsMobileOS: k.oss.WindowsMobileOS
								}
							}(), g.findMatch = function(a, b) {
								for (var c in a)
									if (i.call(a, c) && a[c].test(b)) return c;
								return null
							}, g.findMatches = function(a, b) {
								var c = [];
								for (var d in a) i.call(a, d) && a[d].test(b) && c.push(d);
								return c
							}, g.getVersionStr = function(a, b) {
								var c, d, e, f, h = g.mobileDetectRules.props;
								if (i.call(h, a))
									for (c = h[a], e = c.length, d = 0; d < e; ++d)
										if (f = c[d].exec(b), null !== f) return f[1];
								return null
							}, g.getVersion = function(a, b) {
								var c = g.getVersionStr(a, b);
								return c ? g.prepareVersionNo(c) : NaN
							}, g.prepareVersionNo = function(a) {
								var b;
								return b = a.split(/[a-z._ \/\-]/i), 1 === b.length && (a = b[0]), b.length > 1 && (a = b[0] + ".", b.shift(), a += b.join("")), Number(a)
							}, g.isMobileFallback = function(a) {
								return g.detectMobileBrowsers.fullPattern.test(a) || g.detectMobileBrowsers.shortPattern.test(a.substr(0, 4))
							}, g.isTabletFallback = function(a) {
								return g.detectMobileBrowsers.tabletPattern.test(a)
							}, g.prepareDetectionCache = function(a, c, d) {
								if (a.mobile === b) {
									var e, h, i;
									return (h = g.findMatch(g.mobileDetectRules.tablets, c)) ? (a.mobile = a.tablet = h, void(a.phone = null)) : (e = g.findMatch(g.mobileDetectRules.phones, c)) ? (a.mobile = a.phone = e, void(a.tablet = null)) : void(g.isMobileFallback(c) ? (i = f.isPhoneSized(d), i === b ? (a.mobile = g.FALLBACK_MOBILE, a.tablet = a.phone = null) : i ? (a.mobile = a.phone = g.FALLBACK_PHONE, a.tablet = null) : (a.mobile = a.tablet = g.FALLBACK_TABLET, a.phone = null)) : g.isTabletFallback(c) ? (a.mobile = a.tablet = g.FALLBACK_TABLET, a.phone = null) : a.mobile = a.tablet = a.phone = null)
								}
							}, g.mobileGrade = function(a) {
								var b = null !== a.mobile();
								return a.os("iOS") && a.version("iPad") >= 4.3 || a.os("iOS") && a.version("iPhone") >= 3.1 || a.os("iOS") && a.version("iPod") >= 3.1 || a.version("Android") > 2.1 && a.is("Webkit") || a.version("Windows Phone OS") >= 7 || a.is("BlackBerry") && a.version("BlackBerry") >= 6 || a.match("Playbook.*Tablet") || a.version("webOS") >= 1.4 && a.match("Palm|Pre|Pixi") || a.match("hp.*TouchPad") || a.is("Firefox") && a.version("Firefox") >= 12 || a.is("Chrome") && a.is("AndroidOS") && a.version("Android") >= 4 || a.is("Skyfire") && a.version("Skyfire") >= 4.1 && a.is("AndroidOS") && a.version("Android") >= 2.3 || a.is("Opera") && a.version("Opera Mobi") > 11 && a.is("AndroidOS") || a.is("MeeGoOS") || a.is("Tizen") || a.is("Dolfin") && a.version("Bada") >= 2 || (a.is("UC Browser") || a.is("Dolfin")) && a.version("Android") >= 2.3 || a.match("Kindle Fire") || a.is("Kindle") && a.version("Kindle") >= 3 || a.is("AndroidOS") && a.is("NookTablet") || a.version("Chrome") >= 11 && !b || a.version("Safari") >= 5 && !b || a.version("Firefox") >= 4 && !b || a.version("MSIE") >= 7 && !b || a.version("Opera") >= 10 && !b ? "A" : a.os("iOS") && a.version("iPad") < 4.3 || a.os("iOS") && a.version("iPhone") < 3.1 || a.os("iOS") && a.version("iPod") < 3.1 || a.is("Blackberry") && a.version("BlackBerry") >= 5 && a.version("BlackBerry") < 6 || a.version("Opera Mini") >= 5 && a.version("Opera Mini") <= 6.5 && (a.version("Android") >= 2.3 || a.is("iOS")) || a.match("NokiaN8|NokiaC7|N97.*Series60|Symbian/3") || a.version("Opera Mobi") >= 11 && a.is("SymbianOS") ? "B" : (a.version("BlackBerry") < 5 || a.match("MSIEMobile|Windows CE.*Mobile") || a.version("Windows Mobile") <= 5.2, "C")
							}, g.detectOS = function(a) {
								return g.findMatch(g.mobileDetectRules.oss0, a) || g.findMatch(g.mobileDetectRules.oss, a)
							}, g.getDeviceSmallerSide = function() {
								return window.screen.width < window.screen.height ? window.screen.width : window.screen.height
							}, f.prototype = {
								constructor: f,
								mobile: function() {
									return g.prepareDetectionCache(this._cache, this.ua, this.maxPhoneWidth), this._cache.mobile
								},
								phone: function() {
									return g.prepareDetectionCache(this._cache, this.ua, this.maxPhoneWidth), this._cache.phone
								},
								tablet: function() {
									return g.prepareDetectionCache(this._cache, this.ua, this.maxPhoneWidth), this._cache.tablet
								},
								userAgent: function() {
									return this._cache.userAgent === b && (this._cache.userAgent = g.findMatch(g.mobileDetectRules.uas, this.ua)), this._cache.userAgent
								},
								userAgents: function() {
									return this._cache.userAgents === b && (this._cache.userAgents = g.findMatches(g.mobileDetectRules.uas, this.ua)), this._cache.userAgents
								},
								os: function() {
									return this._cache.os === b && (this._cache.os = g.detectOS(this.ua)), this._cache.os
								},
								version: function(a) {
									return g.getVersion(a, this.ua)
								},
								versionStr: function(a) {
									return g.getVersionStr(a, this.ua)
								},
								is: function(b) {
									return c(this.userAgents(), b) || a(b, this.os()) || a(b, this.phone()) || a(b, this.tablet()) || c(g.findMatches(g.mobileDetectRules.utils, this.ua), b)
								},
								match: function(a) {
									return a instanceof RegExp || (a = new RegExp(a, "i")), a.test(this.ua)
								},
								isPhoneSized: function(a) {
									return f.isPhoneSized(a || this.maxPhoneWidth)
								},
								mobileGrade: function() {
									return this._cache.grade === b && (this._cache.grade = g.mobileGrade(this)), this._cache.grade
								}
							}, "undefined" != typeof window && window.screen ? f.isPhoneSized = function(a) {
								return a < 0 ? b : g.getDeviceSmallerSide() <= a
							} : f.isPhoneSized = function() {}, f._impl = g, f.version = "1.4.5 2021-03-13", f
					})
				}(function(a) {
					if ("undefined" != typeof module && module.exports) return function(a) {
						module.exports = a()
					};
					if ("function" == typeof define && define.amd) return define;
					if ("undefined" != typeof window) return function(a) {
						window.MobileDetect = a()
					};
					throw new Error("unknown environment")
				}());
				var ai_lists = !0,
					ai_block_class_def = "code-block";
				jQuery(function(a) {
					function B(c) {
						c = c.match(aa);
						return null != c && 1 < c.length && "string" === typeof c[1] && 0 < c[1].length ? c[1].toLowerCase() : null
					}

					function E(c) {
						return c.includes(":") ? (c = c.split(":"), 1E3 * (3600 * parseInt(c[0]) + 60 * parseInt(c[1]) + parseInt(c[2]))) : null
					}

					function v(c) {
						try {
							var k = Date.parse(c);
							isNaN(k) && (k = null)
						} catch (G) {
							k = null
						}
						if (null == k && c.includes(" ")) {
							c = c.split(" ");
							try {
								k = Date.parse(c[0]), k += E(c[1]), isNaN(k) && (k = null)
							} catch (G) {
								k = null
							}
						}
						return k
					}

					function H() {
						(jQuery("#ai-iab-tcf-bar").length || jQuery(".ai-list-manual").length) &&
						"function" == typeof __tcfapi && "function" == typeof ai_load_blocks && "undefined" == typeof ai_iab_tcf_callback_installed && (__tcfapi("addEventListener", 2, function(c, k) {
							k && "useractioncomplete" === c.eventStatus && (ai_tcData = c, ai_load_blocks(), jQuery("#ai-iab-tcf-status").text("IAB TCF 2.0 DATA LOADED"), jQuery("#ai-iab-tcf-bar").addClass("status-ok").removeClass("status-error"))
						}), ai_iab_tcf_callback_installed = !0)
					}

					function w(c) {
						c = `; ${document.cookie}`.split(`; ${c}=`);
						if (2 === c.length) return c.pop().split(";").shift()
					}

					function h(c) {
						if (w(c)) {
							var k = window.location.hostname;
							w(c) && (document.cookie = c + "=;path=/" + (k ? ";domain=" + k : "") + ";expires=Thu, 01 Jan 1970 00:00:01 GMT");
							document.cookie = c + "=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;"
						}
					}
					Array.prototype.includes || (Array.prototype.includes = function(c) {
						return !!~this.indexOf(c)
					});
					var aa = RegExp(":\\/\\/(.[^/:]+)", "i");
					ai_process_lists = function(c) {
						function k(l, e, d) {
							if (0 == l.length) {
								if ("!@!" == d) return !0;
								e != d && ("true" == d.toLowerCase() ? d = !0 : "false" == d.toLowerCase() && (d = !1));
								return e == d
							}
							if ("object" != typeof e && "array" != typeof e) return !1;
							var n = l[0];
							l = l.slice(1);
							if ("*" == n)
								for (let [, m] of Object.entries(e)) {
									if (k(l, m, d)) return !0
								} else if (n in e) return k(l, e[n], d);
							return !1
						}

						function G(l, e, d) {
							if ("object" != typeof l || -1 == e.indexOf("[")) return !1;
							e = e.replace(/]| /gi, "").split("[");
							return k(e, l, d)
						}

						function ba() {
							"function" == typeof __tcfapi && (a("#ai-iab-tcf-status").text("IAB TCF 2.0 DETECTED"), __tcfapi("getTCData", 2, function(l, e) {
								e ? (a("#ai-iab-tcf-bar").addClass("status-ok"), "tcloaded" ==
									l.eventStatus || "useractioncomplete" == l.eventStatus ? (ai_tcData = l, l.gdprApplies ? a("#ai-iab-tcf-status").text("IAB TCF 2.0 DATA LOADED") : jQuery("#ai-iab-tcf-status").text("IAB TCF 2.0 GDPR DOES NOT APPLY"), a("#ai-iab-tcf-bar").addClass("status-ok").removeClass("status-error"), setTimeout(function() {
										ai_process_lists()
									}, 10)) : "cmpuishown" == l.eventStatus && (ai_cmpuishown = !0, a("#ai-iab-tcf-status").text("IAB TCF 2.0 CMP UI SHOWN"), a("#ai-iab-tcf-bar").addClass("status-ok").removeClass("status-error"))) : (a("#ai-iab-tcf-status").text("IAB TCF 2.0 __tcfapi getTCData failed"),
									a("#ai-iab-tcf-bar").removeClass("status-ok").addClass("status-error"))
							}))
						}

						function K(l) {
							"function" == typeof __tcfapi ? ("undefined" == typeof ai_iab_tcf_callback_installed && H(), "undefined" == typeof ai_tcData_requested && (ai_tcData_requested = !0, ba(), cookies_need_tcData = !0)) : l && (a("#ai-iab-tcf-bar").addClass("status-error").removeClass("status-ok"), a("#ai-iab-tcf-status").text("IAB TCF 2.0 MISSING: __tcfapi function not found"))
						}
						c = null == c ? a("div.ai-list-data, meta.ai-list-data") : a(c).filter(".ai-list-data");
						if (c.length) {
							c.removeClass("ai-list-data");
							var U = getAllUrlParams(window.location.search);
							if (null != U.referrer) var y = U.referrer;
							else y = document.referrer, "" != y && (y = B(y));
							var Q = window.navigator.userAgent,
								R = Q.toLowerCase(),
								V = navigator.language,
								L = V.toLowerCase();
							if ("undefined" !== typeof MobileDetect) var W = new MobileDetect(Q);
							c.each(function() {
								var l = document.cookie.split(";");
								l.forEach(function(u, g) {
									l[g] = u.trim()
								});
								var e = a(this).closest("div.code-block"),
									d = !0,
									n = a(this).attr("referer-list");
								if ("undefined" != typeof n) {
									n = b64d(n).split(",");
									var m = a(this).attr("referer-list-type"),
										I = !1;
									a.each(n, function(u, g) {
										g = g.trim();
										if ("" == g) return !0;
										if ("*" == g.charAt(0))
											if ("*" == g.charAt(g.length - 1)) {
												if (g = g.substr(1, g.length - 2), -1 != y.indexOf(g)) return I = !0, !1
											} else {
												if (g = g.substr(1), y.substr(-g.length) == g) return I = !0, !1
											}
										else if ("*" == g.charAt(g.length - 1)) {
											if (g = g.substr(0, g.length - 1), 0 == y.indexOf(g)) return I = !0, !1
										} else if ("#" == g) {
											if ("" == y) return I = !0, !1
										} else if (g == y) return I = !0, !1
									});
									var p = I;
									switch (m) {
										case "B":
											p &&
												(d = !1);
											break;
										case "W":
											p || (d = !1)
									}
								}
								if (d && (n = a(this).attr("client-list"), "undefined" != typeof n && "undefined" !== typeof W)) switch (n = b64d(n).split(","), m = a(this).attr("client-list-type"), p = !1, a.each(n, function(u, g) {
										if ("" == g.trim()) return !0;
										u = g.split("&&");
										a.each(u, function(r, b) {
											r = !0;
											var t = !1;
											for (b = b.trim();
												"!!" == b.substring(0, 2);) r = !r, b = b.substring(2);
											"language:" == b.substring(0, 9) && (t = !0, b = b.substring(9).toLowerCase());
											var q = !1;
											t ? "*" == b.charAt(0) ? "*" == b.charAt(b.length - 1) ? (b = b.substr(1, b.length - 2).toLowerCase(),
												-1 != L.indexOf(b) && (q = !0)) : (b = b.substr(1).toLowerCase(), L.substr(-b.length) == b && (q = !0)) : "*" == b.charAt(b.length - 1) ? (b = b.substr(0, b.length - 1).toLowerCase(), 0 == L.indexOf(b) && (q = !0)) : b == L && (q = !0) : "*" == b.charAt(0) ? "*" == b.charAt(b.length - 1) ? (b = b.substr(1, b.length - 2).toLowerCase(), -1 != R.indexOf(b) && (q = !0)) : (b = b.substr(1).toLowerCase(), R.substr(-b.length) == b && (q = !0)) : "*" == b.charAt(b.length - 1) ? (b = b.substr(0, b.length - 1).toLowerCase(), 0 == R.indexOf(b) && (q = !0)) : W.is(b) && (q = !0);
											p = q ? r : !r;
											if (!p) return !1
										});
										if (p) return !1
									}),
									m) {
									case "B":
										p && (d = !1);
										break;
									case "W":
										p || (d = !1)
								}
								var M = n = !1;
								for (m = 1; 2 >= m; m++)
									if (d) {
										switch (m) {
											case 1:
												var f = a(this).attr("cookie-list");
												break;
											case 2:
												f = a(this).attr("parameter-list")
										}
										if ("undefined" != typeof f) {
											f = b64d(f);
											switch (m) {
												case 1:
													var A = a(this).attr("cookie-list-type");
													break;
												case 2:
													A = a(this).attr("parameter-list-type")
											}
											f = f.replace("tcf-gdpr", "tcf-v2[gdprApplies]=true");
											f = f.replace("tcf-no-gdpr", "tcf-v2[gdprApplies]=false");
											f = f.replace("tcf-google", "tcf-v2[vendor][consents][755]=true && tcf-v2[purpose][consents][1]=true");
											f = f.replace("tcf-no-google", "!!tcf-v2[vendor][consents][755]");
											f = f.replace("tcf-media.net", "tcf-v2[vendor][consents][142]=true && tcf-v2[purpose][consents][1]=true");
											f = f.replace("tcf-no-media.net", "!!tcf-v2[vendor][consents][142]");
											f = f.replace("tcf-amazon", "tcf-v2[vendor][consents][793]=true && tcf-v2[purpose][consents][1]=true");
											f = f.replace("tcf-no-amazon", "!!tcf-v2[vendor][consents][793]");
											f = f.replace("tcf-ezoic", "tcf-v2[vendor][consents][347]=true && tcf-v2[purpose][consents][1]=true");
											f = f.replace("tcf-no-ezoic",
												"!!tcf-v2[vendor][consents][347]");
											var D = f.split(","),
												X = [];
											l.forEach(function(u) {
												u = u.split("=");
												try {
													var g = JSON.parse(decodeURIComponent(u[1]))
												} catch (r) {
													g = decodeURIComponent(u[1])
												}
												X[u[0]] = g
											});
											p = !1;
											var N = a(this);
											a.each(D, function(u, g) {
												u = g.split("&&");
												a.each(u, function(r, b) {
													r = !0;
													for (b = b.trim();
														"!!" == b.substring(0, 2);) r = !r, b = b.substring(2);
													var t = b,
														q = "!@!",
														Y = -1 != b.indexOf("["),
														Z = (0 == b.indexOf("tcf-v2") || 0 == b.indexOf("euconsent-v2")) && -1 != b.indexOf("["); - 1 != b.indexOf("=") && (q = b.split("="), t = q[0], q = q[1],
														Y = -1 != t.indexOf("["), Z = (0 == t.indexOf("tcf-v2") || 0 == t.indexOf("euconsent-v2")) && -1 != t.indexOf("["));
													if (Z) a("#ai-iab-tcf-bar").show(), "object" == typeof ai_tcData ? (a("#ai-iab-tcf-bar").addClass("status-ok"), t = t.replace(/]| /gi, "").split("["), t.shift(), p = (t = k(t, ai_tcData, q)) ? r : !r) : (N.addClass("ai-list-data"), M = !0, "function" == typeof __tcfapi ? K(!1) : "undefined" == typeof ai_tcData_retrying && (ai_tcData_retrying = !0, setTimeout(function() {
														"function" == typeof __tcfapi ? K(!1) : setTimeout(function() {
															"function" == typeof __tcfapi ?
																K(!1) : setTimeout(function() {
																	K(!0)
																}, 3E3)
														}, 1E3)
													}, 600)));
													else if (Y) p = (t = G(X, t, q)) ? r : !r;
													else {
														var S = !1;
														"!@!" == q ? l.every(function(ca) {
															return ca.split("=")[0] == b ? (S = !0, !1) : !0
														}) : S = -1 != l.indexOf(b);
														p = S ? r : !r
													}
													if (!p) return !1
												});
												if (p) return !1
											});
											p && (M = !1);
											switch (A) {
												case "B":
													p && (d = !1);
													break;
												case "W":
													p || (d = !1)
											}
										}
									} a(this).hasClass("ai-list-manual") && (d ? (N.removeClass("ai-list-data"), N.removeClass("ai-list-manual")) : (n = !0, N.addClass("ai-list-data")));
								if (d || !n && !M)
									if (f = a(this).data("debug-info"), "undefined" != typeof f &&
										(f = a("." + f), 0 != f.length)) {
										var x = f.parent();
										x.hasClass("ai-debug-info") && x.remove()
									} x = a(this).prevAll(".ai-debug-bar.ai-debug-lists");
								f = "" == y ? "#" : y;
								x.find(".ai-debug-name.ai-list-info").text(f).attr("title", Q + "\n" + V);
								x.find(".ai-debug-name.ai-list-status").text(d ? ai_front.visible : ai_front.hidden);
								f = !1;
								if (d && (m = a(this).attr("scheduling-start"), A = a(this).attr("scheduling-end"), D = a(this).attr("scheduling-days"), "undefined" != typeof m && "undefined" != typeof A && "undefined" != typeof D)) {
									f = !0;
									var z = b64d(m),
										O =
										b64d(A),
										T = parseInt(a(this).attr("scheduling-fallback")),
										P = parseInt(a(this).attr("gmt"));
									z.includes("-") || O.includes("-") ? (A = v(z) + P, m = v(O) + P) : (A = E(z), m = E(O));
									D = b64d(D).split(",");
									x = a(this).attr("scheduling-type");
									var C = (new Date).getTime() + P,
										F = new Date(C),
										J = F.getDay();
									z.includes("-") || O.includes("-") || (z = (new Date(F.getFullYear(), F.getMonth(), F.getDate())).getTime() + P, C -= z, 0 > C && (C += 864E5));
									0 == J ? J = 6 : J--;
									z = C >= A && C < m && D.includes(J.toString());
									switch (x) {
										case "B":
											z = !z
									}
									z || (d = !1);
									F = F.toISOString().split(".")[0].replace("T",
										" ");
									x = a(this).prevAll(".ai-debug-bar.ai-debug-scheduling");
									x.find(".ai-debug-name.ai-scheduling-info").text(F + " " + J + " current_time:" + Math.floor(C.toString() / 1E3) + "  start_date:" + Math.floor(A / 1E3).toString() + " =" + (C >= A).toString() + " end_date:" + Math.floor(m / 1E3).toString() + " =:" + (C < m).toString() + " days:" + D.toString() + " =:" + D.includes(J.toString()).toString());
									x.find(".ai-debug-name.ai-scheduling-status").text(d ? ai_front.visible : ai_front.hidden);
									d || 0 == T || (x.removeClass("ai-debug-scheduling").addClass("ai-debug-fallback"),
										x.find(".ai-debug-name.ai-scheduling-status").text(ai_front.fallback + " = " + T))
								}
								if (n || !d && M) return !0;
								a(this).css({
									visibility: "",
									position: "",
									width: "",
									height: "",
									"z-index": ""
								});
								d ? (e.css({
									visibility: ""
								}), e.hasClass("ai-remove-position") && e.css({
									position: ""
								}), "undefined" != typeof a(this).data("code") && (d = b64d(a(this).data("code")), 0 != a(this).closest("head").length ? (a(this).after(d), a(this).remove()) : a(this).append(d), ai_process_element_lists(this))) : f && !z && 0 != T ? (e.css({
										visibility: ""
									}), e.hasClass("ai-remove-position") &&
									e.css({
										position: ""
									}), a(this).next(".ai-fallback").removeClass("ai-fallback"), "undefined" != typeof a(this).data("fallback-code") ? (d = b64d(a(this).data("fallback-code")), a(this).append(d), ai_process_element_lists(this)) : (a(this).hide(), !e.find(".ai-debug-block").length && e[0].hasAttribute("style") && -1 == e.attr("style").indexOf("height:") && e.hide()), d = e.attr("data-ai"), "undefined" !== typeof d && !1 !== d && (d = a(this).attr("fallback-tracking"), "undefined" !== typeof d && !1 !== d && e.attr("data-ai-" + a(this).attr("fallback_level"),
										d))) : (a(this).hide(), e.length && (e.removeAttr("data-ai").removeClass("ai-track"), e.find(".ai-debug-block").length ? (e.css({
									visibility: ""
								}).removeClass("ai-close"), e.hasClass("ai-remove-position") && e.css({
									position: ""
								})) : e[0].hasAttribute("style") && -1 == e.attr("style").indexOf("height:") && e.hide()));
								a(this).attr("data-code", "");
								a(this).attr("data-fallback-code", "");
								e.removeClass("ai-list-block")
							})
						}
					};
					a(document).ready(function(c) {
						setTimeout(function() {
								ai_process_lists();
								setTimeout(function() {
									H();
									if ("function" ==
										typeof ai_load_blocks) {
										jQuery(document).on("cmplzEnableScripts", k);
										jQuery(document).on("cmplz_event_marketing", k);

										function k(G) {
											"cmplzEnableScripts" != G.type && "all" !== G.consentLevel || ai_load_blocks()
										}
									}
								}, 50);
								jQuery(".ai-debug-page-type").dblclick(function() {
									jQuery("#ai-iab-tcf-status").text("CONSENT COOKIES");
									jQuery("#ai-iab-tcf-bar").show()
								});
								jQuery("#ai-iab-tcf-bar").click(function() {
									h("euconsent-v2");
									h("__lxG__consent__v2");
									h("__lxG__consent__v2_daisybit");
									h("__lxG__consent__v2_gdaisybit");
									h("CookieLawInfoConsent");
									h("cookielawinfo-checkbox-advertisement");
									h("cookielawinfo-checkbox-analytics");
									h("cookielawinfo-checkbox-necessary");
									h("complianz_policy_id");
									h("complianz_consent_status");
									h("cmplz_marketing");
									h("cmplz_consent_status");
									h("cmplz_preferences");
									h("cmplz_statistics-anonymous");
									h("cmplz_choice");
									h("cmplz_banner-status");
									h("cmplz_functional");
									h("cmplz_policy_id");
									h("cmplz_statistics");
									h("moove_gdpr_popup");
									h("real_cookie_banner-blog:1-tcf");
									h("real_cookie_banner-blog:1");
									jQuery("#ai-iab-tcf-status").text("CONSENT COOKIES DELETED")
								})
							},
							5)
					})
				});

				function ai_process_element_lists(a) {
					setTimeout(function() {
						"function" == typeof ai_process_rotations_in_element && ai_process_rotations_in_element(a);
						"function" == typeof ai_process_lists && ai_process_lists(jQuery(".ai-list-data", a));
						"function" == typeof ai_process_ip_addresses && ai_process_ip_addresses(jQuery(".ai-ip-data", a));
						"function" == typeof ai_process_filter_hooks && ai_process_filter_hooks(jQuery(".ai-filter-check", a));
						"function" == typeof ai_adb_process_blocks && ai_adb_process_blocks(a);
						"function" == typeof ai_process_impressions &&
							1 == ai_tracking_finished && ai_process_impressions();
						"function" == typeof ai_install_click_trackers && 1 == ai_tracking_finished && ai_install_click_trackers();
						"function" == typeof ai_install_close_buttons && ai_install_close_buttons(document)
					}, 5)
				}

				function getAllUrlParams(a) {
					var B = a ? a.split("?")[1] : window.location.search.slice(1);
					a = {};
					if (B) {
						B = B.split("#")[0];
						B = B.split("&");
						for (var E = 0; E < B.length; E++) {
							var v = B[E].split("="),
								H = void 0,
								w = v[0].replace(/\[\d*\]/, function(h) {
									H = h.slice(1, -1);
									return ""
								});
							v = "undefined" === typeof v[1] ? "" : v[1];
							w = w.toLowerCase();
							v = v.toLowerCase();
							a[w] ? ("string" === typeof a[w] && (a[w] = [a[w]]), "undefined" === typeof H ? a[w].push(v) : a[w][H] = v) : a[w] = v
						}
					}
					return a
				};

				ai_js_code = true;
			}

			function ai_wait_for_jquery() {
				function b(f, c) {
					var a = document.createElement("script");
					a.src = f;
					var d = document.getElementsByTagName("head")[0],
						e = !1;
					a.onload = a.onreadystatechange = function() {
						e || this.readyState && "loaded" != this.readyState && "complete" != this.readyState || (e = !0, c && c(), a.onload = a.onreadystatechange = null, d.removeChild(a))
					};
					d.appendChild(a)
				}
				window.jQuery && window.jQuery.fn ? ai_run_scripts() : (ai_jquery_waiting_counter++, 4 == ai_jquery_waiting_counter && b("https://www.hercodigital.id/wp-includes/js/jquery/jquery.min.js?ver=3.6.4", function() {
					b("https://www.hercodigital.id/wp-includes/js/jquery/jquery-migrate.min.js?ver=3e7e96fad5e237fb2d5a081c6cb11212",
						null)
				}), 30 > ai_jquery_waiting_counter && setTimeout(function() {
					ai_wait_for_jquery()
				}, 50))
			}
			ai_jquery_waiting_counter = 0;
			ai_wait_for_jquery();

		});
	</script>
	<script>
		window.lazyLoadOptions = [{
			elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
			data_src: "lazy-src",
			data_srcset: "lazy-srcset",
			data_sizes: "lazy-sizes",
			class_loading: "lazyloading",
			class_loaded: "lazyloaded",
			threshold: 300,
			callback_loaded: function(element) {
				if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
					if (element.classList.contains("lazyloaded")) {
						if (typeof window.jQuery != "undefined") {
							if (jQuery.fn.fitVids) {
								jQuery(element).parent().fitVids()
							}
						}
					}
				}
			}
		}, {
			elements_selector: ".rocket-lazyload",
			data_src: "lazy-src",
			data_srcset: "lazy-srcset",
			data_sizes: "lazy-sizes",
			class_loading: "lazyloading",
			class_loaded: "lazyloaded",
			threshold: 300,
		}];
		window.addEventListener('LazyLoad::Initialized', function(e) {
			var lazyLoadInstance = e.detail.instance;
			if (window.MutationObserver) {
				var observer = new MutationObserver(function(mutations) {
					var image_count = 0;
					var iframe_count = 0;
					var rocketlazy_count = 0;
					mutations.forEach(function(mutation) {
						for (var i = 0; i < mutation.addedNodes.length; i++) {
							if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
								continue
							}
							if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
								continue
							}
							images = mutation.addedNodes[i].getElementsByTagName('img');
							is_image = mutation.addedNodes[i].tagName == "IMG";
							iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
							is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
							rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
							image_count += images.length;
							iframe_count += iframes.length;
							rocketlazy_count += rocket_lazy.length;
							if (is_image) {
								image_count += 1
							}
							if (is_iframe) {
								iframe_count += 1
							}
						}
					});
					if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
						lazyLoadInstance.update()
					}
				});
				var b = document.getElementsByTagName("body")[0];
				var config = {
					childList: !0,
					subtree: !0
				};
				observer.observe(b, config)
			}
		}, !1)
	</script>
	<script data-no-minify="1" async="" src="https://www.hercodigital.id/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script>
	<script>
		function lazyLoadThumb(e) {
			var t = '<img data-lazy-src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"><noscript><img src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"></noscript>',
				a = '<button class="play" aria-label="play Youtube video"></button>';
			return t.replace("ID", e) + a
		}

		function lazyLoadYoutubeIframe() {
			var e = document.createElement("iframe"),
				t = "ID?autoplay=1";
			t += 0 === this.parentNode.dataset.query.length ? '' : '&' + this.parentNode.dataset.query;
			e.setAttribute("src", t.replace("ID", this.parentNode.dataset.src)), e.setAttribute("frameborder", "0"), e.setAttribute("allowfullscreen", "1"), e.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"), this.parentNode.parentNode.replaceChild(e, this.parentNode)
		}
		document.addEventListener("DOMContentLoaded", function() {
			var e, t, p, a = document.getElementsByClassName("rll-youtube-player");
			for (t = 0; t < a.length; t++) e = document.createElement("div"), e.setAttribute("data-id", a[t].dataset.id), e.setAttribute("data-query", a[t].dataset.query), e.setAttribute("data-src", a[t].dataset.src), e.innerHTML = lazyLoadThumb(a[t].dataset.id), a[t].appendChild(e), p = e.querySelector('.play'), p.onclick = lazyLoadYoutubeIframe
		});
	</script>
	<script>
		"use strict";

		function wprRemoveCPCSS() {
			var preload_stylesheets = document.querySelectorAll('link[data-rocket-async="style"][rel="preload"]');
			if (preload_stylesheets && 0 < preload_stylesheets.length)
				for (var stylesheet_index = 0; stylesheet_index < preload_stylesheets.length; stylesheet_index++) {
					var media = preload_stylesheets[stylesheet_index].getAttribute("media") || "all";
					if (window.matchMedia(media).matches) return void setTimeout(wprRemoveCPCSS, 200)
				}
			var elem = document.getElementById("rocket-critical-css");
			elem && "remove" in elem && elem.remove()
		}
		window.addEventListener ? window.addEventListener("load", wprRemoveCPCSS) : window.attachEvent && window.attachEvent("onload", wprRemoveCPCSS);
	</script><noscript>
		<link rel="stylesheet" href="https://www.hercodigital.id/wp-content/cache/min/1/f3f4ffaea611380a8c5017d6ab6dfdad.css" media="all" data-minify="1" />
	</noscript>



	<script type="text/javascript" id="">
		! function(b, e, f, g, a, c, d) {
			b.fbq || (a = b.fbq = function() {
				a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
			}, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
		}(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
		fbq("init", "179029794322311");
		fbq("track", "ViewContent");
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=179029794322311&amp;ev=PageView&amp;noscript=1"></noscript>

	<script type="text/javascript" id="">
		var script = document.createElement("script");
		script.async = !0;
		script.type = "text/javascript";
		var target = "https://www.clickcease.com/monitor/stat.js";
		script.src = target;
		var elem = document.head;
		elem.appendChild(script);
	</script>
	<noscript>
		<a href="https://www.clickcease.com" rel="nofollow"><img src="https://monitor.clickcease.com/stats/stats.aspx" alt="ClickCease"></a>
	</noscript>
	<script src="https://monitor.fraudblocker.com/p.js?sid=QeafoyU_5llzxlihKhate&amp;vid=c3d7980e5f462757aa732d2d489a651a&amp;tz=Asia%2FJakarta&amp;os=Windows%2010&amp;b=Chrome%20113.0.0.0&amp;bo=0"></script>
	<script src="https://monitor.fraudblocker.com/b.js?sid=QeafoyU_5llzxlihKhate&amp;vid=c3d7980e5f462757aa732d2d489a651a&amp;tz=Asia%2FJakarta&amp;os=Windows%2010&amp;b=Chrome%20113.0.0.0&amp;bo=0"></script>
	<script type="text/javascript" id="">
		! function(b, e, f, g, a, c, d) {
			b.fbq || (a = b.fbq = function() {
				a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
			}, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
		}(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
		fbq("init", "179029794322311");
		fbq("track", "Lead");
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=179029794322311&amp;ev=PageView&amp;noscript=1"></noscript>
</body>

</html>