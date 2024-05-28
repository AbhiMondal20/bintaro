<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <!-- Gokwik theme code start -->
  <link rel="dns-prefetch" href="https://pdp.gokwik.co/">
  <link rel="dns-prefetch" href="https://api.gokwik.co/">


  <script>

    window.merchantInfo = {
      mid: "19g6jlv0tg7ar",
      environment: "production",
      type: "merchantInfo",
      storeId: "57346457684",
      fbpixel: "3180317328927352",
    }
    var productFormSelector = '';
    var cart = { "note": null, "attributes": {}, "original_total_price": 0, "total_price": 0, "total_discount": 0, "total_weight": 0.0, "item_count": 0, "items": [], "requires_shipping": false, "currency": "INR", "items_subtotal_price": 0, "cart_level_discount_applications": [], "checkout_charge_amount": 0 }
    var templateName = 'collection'
  </script>

  <script src="../../pdp.gokwik.co/merchant-integration/build/merchant.integration5ed3.js?v4"></script>
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>
    window.addEventListener('gokwikLoaded', e => {

      $('.gokwik-checkout button').prop('disabled', false);
      $('.gokwik-checkout button').removeClass('disabled');
      $('#gokwik-buy-now').prop('disabled', false);
      $('#gokwik-buy-now').removeClass('disabled');

      const targetElement = document.querySelector("body");
      function debounce(func, delay) {
        let timeoutId;
        return function () {
          const context = this;
          const args = arguments;
          clearTimeout(timeoutId);
          timeoutId = setTimeout(function () {
            func.apply(context, args);
          }, delay);
        };
      }
      const observer = new MutationObserver(() => {
        const addToCartButton = document.querySelector("button[name='add']");
        if (addToCartButton?.getAttribute('disabled') !== null) {
          document.querySelector("#gokwik-buy-now")?.setAttribute('disabled', 'disabled');
        } else {
          document.querySelector("#gokwik-buy-now")?.removeAttribute('disabled');
        }
        debouncedMyTimer();
      });
      const debouncedMyTimer = debounce(() => {
        observer.disconnect();
        enableGokwikCart();
        observer.observe(targetElement, { childList: true, subtree: true });
      }, 700);
      function enableGokwikCart() {
        $('.gokwik-checkout button').prop('disabled', false);
        $('.gokwik-checkout button').removeClass('disabled');

      }
      const config = { childList: true, subtree: true };
      observer.observe(targetElement, config);
    });
  </script>

  <style>
    .gokwik-checkout {
      width: 100%;
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: end;
      margin-bottom: 10px;
    }

    .gokwik-checkout button {
      max-width: 100%;
      width: 100%;
      border: none;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #00020a;
      position: relative;
      margin: 0;
      cursor: pointer;
      border-radius: 2.5rem;
      padding: 5px 10px;
      height: 45px;
    }

    #gokwik-buy-now.disabled,
    .gokwik-disabled {
      opacity: 0.5;
      cursor: not-allowed;
    }

    .gokwik-checkout button:focus {
      outline: none;
    }

    .gokwik-checkout button>span {
      display: flex;
    }

    .gokwik-checkout button>span.btn-text {
      display: flex;
      flex-direction: column;
      color: #ffffff;
      align-items: flex-start;
    }

    .gokwik-checkout button>span.btn-text>span:last-child {
      padding-top: 2px;
      font-size: 10px;
      line-height: 10px;
      text-transform: initial;
    }

    .gokwik-checkout button>span.btn-text>span:first-child {
      font-size: 15px;
    }

    .gokwik-checkout button>span.pay-opt-icon img:first-child {
      margin-right: 10px;
      margin-left: 10px;
    }

    /*   Additional */
    .gokwik-checkout button.disabled {
      opacity: 0.5;
      cursor: not-allowed;
    }

    .gokwik-checkout button.disabled .addloadr#btn-loader {
      display: flex !important;
    }

    #gokwik-buy-now.disabled .addloadr#btn-loader {
      display: flex !important;
    }

    #gokwik-buy-now:disabled {
      cursor: not-allowed;
    }









    #gokwik-buy-now {
      background: #00020a;
      width: 100%;
      color: #ffffff;
      cursor: pointer;
      line-height: 1;
      border: none;
      padding: 15px 10px;
      font-size: 15px;
      margin-bottom: 10px;
      position: relative;
    }



    /* Loader CSS */
    #btn-loader {
      display: none;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      justify-content: center;
      align-items: center;
      background: #00020a;
      border-radius: 2.5rem;

    }

    .cir-loader,
    .cir-loader:after {
      border-radius: 50%;
      width: 35px;
      height: 35px;
    }

    .cir-loader {
      margin: 6px auto;
      font-size: 10px;
      position: relative;
      text-indent: -9999em;
      border-top: 0.5em solid rgba(255, 255, 255, 0.2);
      border-right: 0.5em solid rgba(255, 255, 255, 0.2);
      border-bottom: 0.5em solid rgba(255, 255, 255, 0.2);
      border-left: 0.5em solid #ffffff;
      -webkit-transform: translateZ(0);
      -ms-transform: translateZ(0);
      transform: translateZ(0);
      -webkit-animation: load8 1.1s infinite linear;
      animation: load8 1.1s infinite linear;
    }

    @-webkit-keyframes load8 {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes load8 {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
  </style>
  <!-- Gokwik theme code End -->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="theme-color" content="">
  <link rel="canonical" href="slingbag.html">
  <link rel="icon" type="image/png"
    href="../cdn/shop/files/lucien-2-1_1713d.png?crop=center&amp;height=32&amp;v=1708598719&amp;width=32">
  <link rel="preconnect" href="https://fonts.shopifycdn.com/" crossorigin>
  <title>Slingbag &ndash; Your Premier Bag Manufacturer for Innovative and Quality Solutions</title>





  <meta property="og:site_name" content="Lucien">
  <meta property="og:url" content="https://lucienbags.com/collections/slingbag">
  <meta property="og:title" content="Slingbag">
  <meta property="og:type" content="website">
  <meta property="og:description"
    content="Welcome to Bintaro, your number one source for all bags. We&#39;re dedicated to giving you the very best of bags, with a focus on Design, Quality, Customer">
  <meta property="og:image" content="http://lucienbags.com/cdn/shop/collections/Asset-7.png?v=1708598272">
  <meta property="og:image:secure_url" content="https://lucienbags.com/cdn/shop/collections/Asset-7.png?v=1708598272">
  <meta property="og:image:width" content="1921">
  <meta property="og:image:height" content="656">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bintaro">
  <meta name="twitter:description"
    content="Welcome to Bintaro, your number one source for all bags. We&#39;re dedicated to giving you the very best of bags, with a focus on Design, Quality, Customer">


  <script src="../cdn/shop/t/3/assets/constantsf7ca.js?v=58251544750838685771713312590" defer="defer"></script>
  <script src="../cdn/shop/t/3/assets/pubsub041c.js?v=158357773527763999511713312590" defer="defer"></script>
  <script src="../cdn/shop/t/3/assets/global0ab9.js?v=106116626045777747121713312590" defer="defer"></script>
  <script src="../cdn/shop/t/3/assets/animationsbd01.js?v=88693664871331136111713312590" defer="defer"></script>
  <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script>
  <meta name="google-site-verification" content="QgBzSlmSa9d_b0zNjdiS-qFjoEm5RBaFnHM-4keKusI">
  <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/57346457684/digital_wallets/dialog">
  <link rel="alternate" type="application/atom+xml" title="Feed" href="slingbag.atom" />
  <link rel="next" href="slingbag4658.html?page=2">
  <link rel="alternate" type="application/json+oembed" href="slingbag.oembed">
  <script async="async" src="../checkouts/internal/preloadsd568.js?locale=en-IN"></script>
  <script async="async" src="../../shop.app/checkouts/internal/preloads9207.js?locale=en-IN&amp;shop_id=57346457684"
    crossorigin="anonymous"></script>
  <script id="shopify-features"
    type="application/json">{"accessToken":"502e8d24755d51f489a928384b4a2871","betas":["rich-media-storefront-analytics"],"domain":"lucienbags.com","predictiveSearch":true,"shopId":57346457684,"smart_payment_buttons_url":"https:\/\/lucienbags.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/lucienbags.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en"}</script>
  <script>var Shopify = Shopify || {};
    Shopify.shop = "395399-3d.myshopify.com";
    Shopify.locale = "en";
    Shopify.currency = { "active": "INR", "rate": "1.0" };
    Shopify.country = "IN";
    Shopify.theme = { "name": " Refresh\u003c\u003eGokwik_17April", "id": 125983883348, "theme_store_id": 1567, "role": "main" };
    Shopify.theme.handle = "null";
    Shopify.theme.style = { "id": null, "handle": null };
    Shopify.cdnHost = "lucienbags.com/cdn";
    Shopify.routes = Shopify.routes || {};
    Shopify.routes.root = "../index.html";</script>
  <script type="module">!function (o) { (o.Shopify = o.Shopify || {}).modules = !0 }(window);</script>
  <script>!function (o) { function n() { var o = []; function n() { o.push(Array.prototype.slice.apply(arguments)) } return n.q = o, n } var t = o.Shopify = o.Shopify || {}; t.loadFeatures = n(), t.autoloadFeatures = n() }(window);</script>
  <script id="shop-js-features" type="application/json">{"compact":""}</script>
  <script id="shop-js-analytics" type="application/json">{"pageType":"collection"}</script>
  <script>(function () {
      function asyncLoad() {
        var urls = ["https:\/\/tracker.wigzopush.com\/shopify.js?orgtoken=fnr-2OjiTuijuv2iTgrDXA\u0026shop=395399-3d.myshopify.com"];
        for (var i = 0; i < urls.length; i++) {
          var s = document.createElement('script');
          s.type = 'text/javascript';
          s.async = true;
          s.src = urls[i];
          var x = document.getElementsByTagName('script')[0];
          x.parentNode.insertBefore(s, x);
        }
      };
      if (window.attachEvent) {
        window.attachEvent('onload', asyncLoad);
      } else {
        window.addEventListener('load', asyncLoad, false);
      }
    })();</script>
  <script
    id="__st">var __st = { "a": 57346457684, "offset": 19800, "reqid": "41bee741-7d2c-4dd5-9d9e-5e4ccd093912-1716725786", "pageurl": "lucienbags.com\/collections\/slingbag", "u": "082151cd777a", "p": "collection", "rtyp": "collection", "rid": 271351349332 };</script>
  <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
  <script
    id="captcha-bootstrap">!function () { 'use strict'; const e = 'contact', t = 'account', n = 'new_comment', o = e => e.map((([e, t]) => `form[action*='/${e}'] input[name='form_type'][value='${t}']`)).join(','); function c(e, t) { try { const n = window.sessionStorage; for (const [o, c] of Object.entries(JSON.parse(n.getItem(t)))) e.elements[o] && (e.elements[o].value = c); n.removeItem(t) } catch { } } const s = 'form_type', r = 'cptcha'; ((a, i, m, f, u, d) => { if (0) return; let l = !1; a[m] = a[m] || {}, a[m][f] = a[m][f] || {}, a[m][f].q = [], function (a, i, m, f, u, d) { const [l, _, p] = function (c, s, r) { const a = s ? [[e, e], ['blogs', n], ['comments', n], [e, 'customer']] : [], i = c ? [[t, 'customer_login'], [t, 'guest_login'], [t, 'recover_customer_password'], [t, 'create_customer']] : [], m = [...a, ...i], f = o(m), u = o(a.slice(0, 3)), d = r && o(m.filter((([e, t]) => r.includes(t)))), l = e => () => e ? [...document.querySelectorAll(e)].map((e => e.form)) : []; return [l(f), l(u), l(d)] }(!0, !0, d), E = e => { const t = e.target, n = t instanceof HTMLFormElement ? t : t && t.form; return n && l().find((e => n === e)) }; a.addEventListener('submit', (e => { E(e) && e.preventDefault() })); const T = (e, t) => { m(e, t.some((t => t === e))), e.dataset[r] = !0 }; for (const e of ['focusin', 'change']) a.addEventListener(e, (e => { const t = E(e); t && !t.dataset[r] && T(t, _()) })); const g = i.get('form_key'), v = i.get(s), h = g && v, y = d && d.length; (y || h) && a.addEventListener('DOMContentLoaded', (() => { const e = _(); if (h) for (const t of e) t.elements[s].value === v && c(t, g); if (y) for (const t of p()) T(t, e) })) }(i, new URLSearchParams(a.location.search), ((e, t) => { const n = a[m][f], o = n.bindForm, c = '6LeHG2ApAAAAAO4rPaDW-qVpPKPOBfjbCpzJB9ey', s = { infoText: '', privacyText: '', termsText: '' }; if (o) return o(e, c, t, s); n.q.push([e, c, t, s]), l || (i.body.append(Object.assign(i.createElement('script'), { id: 'captcha-provider', async: !0, src: 'https://cdn.shopify.com/shopifycloud/storefront-forms-hcaptcha/ce_storefront_forms_captcha_recaptcha.v1.0.5.iife.js' })), l = !0) }), 0, 0, ['guest_login']) })(window, document, 'Shopify', 'ce_forms') }();</script>
  <script integrity="sha256-n5Uet9jVOXPHGd4hH4B9Y6+BxkTluaaucmYaxAjUcvY=" data-source-attribution="shopify.loadfeatures"
    defer="defer"
    src="../cdn/shopifycloud/shopify/assets/storefront/load_feature-9f951eb7d8d53973c719de211f807d63af81c644e5b9a6ae72661ac408d472f6.js"
    crossorigin="anonymous"></script>
  <script data-source-attribution="shopify.dynamic_checkout.dynamic.init">var Shopify = Shopify || {}; Shopify.PaymentButton = Shopify.PaymentButton || { isStorefrontPortableWallets: !0, init: function () { window.Shopify.PaymentButton.init = function () { }; var t = document.createElement("script"); t.src = "../cdn/shopifycloud/portable-wallets/latest/portable-wallets.en.js", t.type = "module", document.head.appendChild(t) } };
  </script>
  <script data-source-attribution="shopify.dynamic_checkout.cart.bootstrap">document.addEventListener("DOMContentLoaded", (function () { function t() { return document.querySelector("#dynamic-checkout-cart") } if (t()) Shopify.PaymentButton.init(); else { new MutationObserver((function (e, n) { t() && (Shopify.PaymentButton.init(), n.disconnect()) })).observe(document.body, { childList: !0, subtree: !0 }) } }));
  </script>
  <script id="sections-script" data-sections="header" defer="defer"
    src="../cdn/shop/t/3/compiled_assets/scriptsc451.js?116"></script>

  <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>


  <style data-shopify>
    @font-face {
      font-family: Questrial;
      font-weight: 400;
      font-style: normal;
      font-display: swap;
      src: url("../cdn/fonts/questrial/questrial_n4.0ba6d2b6094954bab23732c75d3ecb4c47a5869c5ade.woff2?h1=Mzk1Mzk5LTNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;h2=bHVjaWVuYmFncy5jb20&amp;h3=bHVjaWVuYmFncy5teXNob3BpZnkuY29t&amp;hmac=4c561f9a322a44cd8aa9da990315f48e48b72144e8c0cfaf7778b5ef09e6e49e") format("woff2"),
        url("../cdn/fonts/questrial/questrial_n4.5abce10d8846bb9326c9741eaffed9667c847692ba6b.woff?h1=Mzk1Mzk5LTNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;h2=bHVjaWVuYmFncy5jb20&amp;h3=bHVjaWVuYmFncy5teXNob3BpZnkuY29t&amp;hmac=fab57bd09956065b9c5a135e5959021522df1d2a3dbd25a9c1b336e268cab045") format("woff");
    }




    @font-face {
      font-family: "Joanna Sans Nova";
      font-weight: 400;
      font-style: normal;
      font-display: swap;
      src: url("../cdn/fonts/joanna_sans_nova/joannasansnova_n4.3c63e31c5905a1b4ddfca1fc29d7985819f31f4ade06.woff2?h1=Mzk1Mzk5LTNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;h2=bHVjaWVuYmFncy5jb20&amp;h3=bHVjaWVuYmFncy5teXNob3BpZnkuY29t&amp;hmac=cb47bd6f6362adc5eddf6d0e83b95d4c21dd6bbfea47e99c0eb27b865d1a7b9e") format("woff2"),
        url("../cdn/fonts/joanna_sans_nova/joannasansnova_n4.ac0c3c62232bff1c11f30e7a81d70d6436dd6ebf90f5.woff?h1=Mzk1Mzk5LTNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;h2=bHVjaWVuYmFncy5jb20&amp;h3=bHVjaWVuYmFncy5teXNob3BpZnkuY29t&amp;hmac=6d4e1065a1846d4552bc37892df10b74fd401e91ffa65b30cf757fee68e91724") format("woff");
    }



    :root,
    .color-scheme-1 {
      --color-background: 245, 241, 239;

      --gradient-background: #f5f1ef;




      --color-foreground: 0, 2, 10;
      --color-background-contrast: 196, 172, 161;
      --color-shadow: 14, 27, 77;
      --color-button: 0, 1, 3;
      --color-button-text: 239, 240, 245;
      --color-secondary-button: 245, 241, 239;
      --color-secondary-button-text: 14, 27, 77;
      --color-link: 14, 27, 77;
      --color-badge-foreground: 0, 2, 10;
      --color-badge-background: 245, 241, 239;
      --color-badge-border: 0, 2, 10;
      --payment-terms-background-color: rgb(245 241 239);
    }


    .color-scheme-2 {
      --color-background: 255, 255, 255;

      --gradient-background: #ffffff;




      --color-foreground: 14, 27, 77;
      --color-background-contrast: 191, 191, 191;
      --color-shadow: 14, 27, 77;
      --color-button: 14, 27, 77;
      --color-button-text: 255, 255, 255;
      --color-secondary-button: 255, 255, 255;
      --color-secondary-button-text: 14, 27, 77;
      --color-link: 14, 27, 77;
      --color-badge-foreground: 14, 27, 77;
      --color-badge-background: 255, 255, 255;
      --color-badge-border: 14, 27, 77;
      --payment-terms-background-color: rgb(255 255 255);
    }


    .color-scheme-3 {
      --color-background: 0, 1, 3;

      --gradient-background: #000103;




      --color-foreground: 255, 255, 255;
      --color-background-contrast: 3, 87, 255;
      --color-shadow: 14, 27, 77;
      --color-button: 255, 255, 255;
      --color-button-text: 14, 27, 77;
      --color-secondary-button: 0, 1, 3;
      --color-secondary-button-text: 255, 255, 255;
      --color-link: 255, 255, 255;
      --color-badge-foreground: 255, 255, 255;
      --color-badge-background: 0, 1, 3;
      --color-badge-border: 255, 255, 255;
      --payment-terms-background-color: rgb(0 1 3);
    }


    .color-scheme-4 {
      --color-background: 71, 112, 219;

      --gradient-background: #4770db;




      --color-foreground: 255, 255, 255;
      --color-background-contrast: 27, 57, 136;
      --color-shadow: 14, 27, 77;
      --color-button: 255, 255, 255;
      --color-button-text: 71, 112, 219;
      --color-secondary-button: 71, 112, 219;
      --color-secondary-button-text: 255, 255, 255;
      --color-link: 255, 255, 255;
      --color-badge-foreground: 255, 255, 255;
      --color-badge-background: 71, 112, 219;
      --color-badge-border: 255, 255, 255;
      --payment-terms-background-color: rgb(71 112 219);
    }


    .color-scheme-5 {
      --color-background: 227, 36, 2;

      --gradient-background: #e32402;




      --color-foreground: 255, 255, 255;
      --color-background-contrast: 101, 16, 1;
      --color-shadow: 14, 27, 77;
      --color-button: 255, 255, 255;
      --color-button-text: 227, 36, 2;
      --color-secondary-button: 227, 36, 2;
      --color-secondary-button-text: 255, 255, 255;
      --color-link: 255, 255, 255;
      --color-badge-foreground: 255, 255, 255;
      --color-badge-background: 227, 36, 2;
      --color-badge-border: 255, 255, 255;
      --payment-terms-background-color: rgb(227 36 2);
    }


    .color-scheme-a8bc3ab3-af3a-4f0d-b3fd-401b9b88dc5e {
      --color-background: 217, 180, 161;

      --gradient-background: #d9b4a1;




      --color-foreground: 0, 2, 10;
      --color-background-contrast: 178, 108, 72;
      --color-shadow: 14, 27, 77;
      --color-button: 217, 180, 161;
      --color-button-text: 239, 240, 245;
      --color-secondary-button: 217, 180, 161;
      --color-secondary-button-text: 0, 1, 3;
      --color-link: 0, 1, 3;
      --color-badge-foreground: 0, 2, 10;
      --color-badge-background: 217, 180, 161;
      --color-badge-border: 0, 2, 10;
      --payment-terms-background-color: rgb(217 180 161);
    }


    body,
    .color-scheme-1,
    .color-scheme-2,
    .color-scheme-3,
    .color-scheme-4,
    .color-scheme-5,
    .color-scheme-a8bc3ab3-af3a-4f0d-b3fd-401b9b88dc5e {
      color: rgba(var(--color-foreground), 0.75);
      background-color: rgb(var(--color-background));
    }

    :root {
      --font-body-family: Questrial, sans-serif;
      --font-body-style: normal;
      --font-body-weight: 400;
      --font-body-weight-bold: 700;

      --font-heading-family: "Joanna Sans Nova", sans-serif;
      --font-heading-style: normal;
      --font-heading-weight: 400;

      --font-body-scale: 1.05;
      --font-heading-scale: 1.0476190476190477;

      --media-padding: px;
      --media-border-opacity: 0.1;
      --media-border-width: 0px;
      --media-radius: 20px;
      --media-shadow-opacity: 0.0;
      --media-shadow-horizontal-offset: 0px;
      --media-shadow-vertical-offset: 4px;
      --media-shadow-blur-radius: 5px;
      --media-shadow-visible: 0;

      --page-width: 120rem;
      --page-width-margin: 0rem;

      --product-card-image-padding: 1.6rem;
      --product-card-corner-radius: 1.8rem;
      --product-card-text-alignment: left;
      --product-card-border-width: 0.1rem;
      --product-card-border-opacity: 1.0;
      --product-card-shadow-opacity: 0.0;
      --product-card-shadow-visible: 0;
      --product-card-shadow-horizontal-offset: 0.0rem;
      --product-card-shadow-vertical-offset: 0.4rem;
      --product-card-shadow-blur-radius: 0.5rem;

      --collection-card-image-padding: 1.6rem;
      --collection-card-corner-radius: 1.8rem;
      --collection-card-text-alignment: left;
      --collection-card-border-width: 0.1rem;
      --collection-card-border-opacity: 1.0;
      --collection-card-shadow-opacity: 0.0;
      --collection-card-shadow-visible: 0;
      --collection-card-shadow-horizontal-offset: 0.0rem;
      --collection-card-shadow-vertical-offset: 0.4rem;
      --collection-card-shadow-blur-radius: 0.5rem;

      --blog-card-image-padding: 1.6rem;
      --blog-card-corner-radius: 1.8rem;
      --blog-card-text-alignment: left;
      --blog-card-border-width: 0.1rem;
      --blog-card-border-opacity: 1.0;
      --blog-card-shadow-opacity: 0.0;
      --blog-card-shadow-visible: 0;
      --blog-card-shadow-horizontal-offset: 0.0rem;
      --blog-card-shadow-vertical-offset: 0.4rem;
      --blog-card-shadow-blur-radius: 0.5rem;

      --badge-corner-radius: 0.0rem;

      --popup-border-width: 1px;
      --popup-border-opacity: 0.1;
      --popup-corner-radius: 18px;
      --popup-shadow-opacity: 0.0;
      --popup-shadow-horizontal-offset: 0px;
      --popup-shadow-vertical-offset: 4px;
      --popup-shadow-blur-radius: 5px;

      --drawer-border-width: 0px;
      --drawer-border-opacity: 0.1;
      --drawer-shadow-opacity: 0.0;
      --drawer-shadow-horizontal-offset: 0px;
      --drawer-shadow-vertical-offset: 4px;
      --drawer-shadow-blur-radius: 5px;

      --spacing-sections-desktop: 0px;
      --spacing-sections-mobile: 0px;

      --grid-desktop-vertical-spacing: 28px;
      --grid-desktop-horizontal-spacing: 28px;
      --grid-mobile-vertical-spacing: 14px;
      --grid-mobile-horizontal-spacing: 14px;

      --text-boxes-border-opacity: 0.1;
      --text-boxes-border-width: 0px;
      --text-boxes-radius: 20px;
      --text-boxes-shadow-opacity: 0.0;
      --text-boxes-shadow-visible: 0;
      --text-boxes-shadow-horizontal-offset: 0px;
      --text-boxes-shadow-vertical-offset: 4px;
      --text-boxes-shadow-blur-radius: 5px;

      --buttons-radius: 40px;
      --buttons-radius-outset: 41px;
      --buttons-border-width: 1px;
      --buttons-border-opacity: 1.0;
      --buttons-shadow-opacity: 0.0;
      --buttons-shadow-visible: 0;
      --buttons-shadow-horizontal-offset: 0px;
      --buttons-shadow-vertical-offset: 4px;
      --buttons-shadow-blur-radius: 5px;
      --buttons-border-offset: 0.3px;

      --inputs-radius: 26px;
      --inputs-border-width: 1px;
      --inputs-border-opacity: 0.55;
      --inputs-shadow-opacity: 0.0;
      --inputs-shadow-horizontal-offset: 0px;
      --inputs-margin-offset: 0px;
      --inputs-shadow-vertical-offset: 4px;
      --inputs-shadow-blur-radius: 5px;
      --inputs-radius-outset: 27px;

      --variant-pills-radius: 40px;
      --variant-pills-border-width: 1px;
      --variant-pills-border-opacity: 0.55;
      --variant-pills-shadow-opacity: 0.0;
      --variant-pills-shadow-horizontal-offset: 0px;
      --variant-pills-shadow-vertical-offset: 4px;
      --variant-pills-shadow-blur-radius: 5px;
    }

    *,
    *::before,
    *::after {
      box-sizing: inherit;
    }

    html {
      box-sizing: border-box;
      font-size: calc(var(--font-body-scale) * 62.5%);
      height: 100%;
    }

    body {
      display: grid;
      grid-template-rows: auto auto 1fr auto;
      grid-template-columns: 100%;
      min-height: 100%;
      margin: 0;
      font-size: 1.5rem;
      letter-spacing: 0.06rem;
      line-height: calc(1 + 0.8 / var(--font-body-scale));
      font-family: var(--font-body-family);
      font-style: var(--font-body-style);
      font-weight: var(--font-body-weight);
    }

    @media screen and (min-width: 750px) {
      body {
        font-size: 1.6rem;
      }
    }
  </style>

  <link href="../cdn/shop/t/3/assets/base4889.css?v=25513028573540360251713312590" rel="stylesheet" type="text/css"
    media="all" />
  <link rel="preload" as="font"
    href="../cdn/fonts/questrial/questrial_n4.0ba6d2b6094954bab23732c75d3ecb4c47a5869c5ade.woff2?h1=Mzk1Mzk5LTNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;h2=bHVjaWVuYmFncy5jb20&amp;h3=bHVjaWVuYmFncy5teXNob3BpZnkuY29t&amp;hmac=4c561f9a322a44cd8aa9da990315f48e48b72144e8c0cfaf7778b5ef09e6e49e"
    type="font/woff2" crossorigin>
  <link rel="preload" as="font"
    href="../cdn/fonts/joanna_sans_nova/joannasansnova_n4.3c63e31c5905a1b4ddfca1fc29d7985819f31f4ade06.woff2?h1=Mzk1Mzk5LTNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;h2=bHVjaWVuYmFncy5jb20&amp;h3=bHVjaWVuYmFncy5teXNob3BpZnkuY29t&amp;hmac=cb47bd6f6362adc5eddf6d0e83b95d4c21dd6bbfea47e99c0eb27b865d1a7b9e"
    type="font/woff2" crossorigin>
  <link rel="stylesheet"
    href="../cdn/shop/t/3/assets/component-predictive-search0c40.css?v=118923337488134913561713312590" media="print"
    onload="this.media='all'">
  <script>
    document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
    if (Shopify.designMode) {
      document.documentElement.classList.add('shopify-design-mode');
    }
  </script>
  <!-- BEGIN app block: shopify://apps/ecomposer-landing-page-builder/blocks/app-embed/a0fc26e1-7741-4773-8b27-39389b4fb4a0 -->
  <link rel="preconnect" href="https://cdn.ecomposer.app/" crossorigin />
  <link rel="dns-prefetch" href="https://cdn.ecomposer.app/" />
  <link rel="prefetch" href="../../cdn.ecomposer.app/vendors/css/ecom-base.css" as="style" />
  <link rel="prefetch" href="../../cdn.ecomposer.app/vendors/css/ecom-swiper%4011.css" as="style" />
  <link rel="prefetch" href="../../cdn.ecomposer.app/vendors/js/ecom-swiper%4011.0.5.js" as="script" />
  <link rel="prefetch" href="../../cdn.ecomposer.app/vendors/js/ecom_modal.js" as="script" />
  <!--ECOM-EMBED-->
  <style id="ecom-global-css" class="ecom-global-css">
    /**ECOM-INSERT-CSS**/
    .ecom-section>div.core__row--columns {
      max-width: 1200px;
    }

    .ecom-column>div.core__column--wrapper {
      padding: 20px;
    }

    div.core__blocks--body>div.ecom-block.elmspace:not(:first-child) {
      margin-top: 20px;
    }

    :root {
      --ecom-global-colors-primary: #ffffff;
      --ecom-global-colors-secondary: #ffffff;
      --ecom-global-colors-text: #ffffff;
      --ecom-global-colors-accent: #ffffff;
      --ecom-global-typography-h1-font-weight: 600;
      --ecom-global-typography-h1-font-size: 72px;
      --ecom-global-typography-h1-line-height: 90px;
      --ecom-global-typography-h1-letter-spacing: -0.02em;
      --ecom-global-typography-h2-font-weight: 600;
      --ecom-global-typography-h2-font-size: 60px;
      --ecom-global-typography-h2-line-height: 72px;
      --ecom-global-typography-h2-letter-spacing: -0.02em;
      --ecom-global-typography-h3-font-weight: 600;
      --ecom-global-typography-h3-font-size: 48px;
      --ecom-global-typography-h3-line-height: 60px;
      --ecom-global-typography-h3-letter-spacing: -0.02em;
      --ecom-global-typography-h4-font-weight: 600;
      --ecom-global-typography-h4-font-size: 36px;
      --ecom-global-typography-h4-line-height: 44px;
      --ecom-global-typography-h4-letter-spacing: -0.02em;
      --ecom-global-typography-h5-font-weight: 600;
      --ecom-global-typography-h5-font-size: 30px;
      --ecom-global-typography-h5-line-height: 38px;
      --ecom-global-typography-h6-font-weight: 600;
      --ecom-global-typography-h6-font-size: 24px;
      --ecom-global-typography-h6-line-height: 32px;
      --ecom-global-typography-h7-font-weight: 400;
      --ecom-global-typography-h7-font-size: 18px;
      --ecom-global-typography-h7-line-height: 28px;
    }
  </style>
  <!--/ECOM-EMBED-->

  <style type="text/css" class="ecom-theme-helper">
    .ecom-animation {
      opacity: 0
    }

    .ecom-animation.animate,
    .ecom-animation.ecom-animated {
      opacity: 1
    }

    .ecom-cart-popup {
      display: grid;
      position: fixed;
      inset: 0;
      z-index: 9999999;
      align-content: center;
      padding: 5px;
      justify-content: center;
      align-items: center;
      justify-items: center
    }

    .ecom-cart-popup::before {
      content: ' ';
      position: absolute;
      background: #e5e5e5b3;
      inset: 0
    }

    .ecom-ajax-loading {
      cursor: not-allowed;
      pointer-events: none;
      opacity: .6
    }

    #ecom-toast {
      visibility: hidden;
      max-width: 50px;
      height: 60px;
      margin: auto;
      background-color: #333;
      color: #fff;
      text-align: center;
      border-radius: 2px;
      position: fixed;
      z-index: 1;
      left: 0;
      right: 0;
      bottom: 30px;
      font-size: 17px;
      display: grid;
      grid-template-columns: 50px auto;
      align-items: center;
      justify-content: start;
      align-content: center;
      justify-items: start
    }

    #ecom-toast.ecom-toast-show {
      visibility: visible;
      -webkit-animation: ecomFadein .5s, ecomExpand .5s .5s, ecomStay 3s 1s, ecomShrink .5s 2s, ecomFadeout .5s 2.5s;
      animation: ecomFadein .5s, ecomExpand .5s .5s, ecomStay 3s 1s, ecomShrink .5s 4s, ecomFadeout .5s 4.5s
    }

    #ecom-toast #ecom-toast-icon {
      width: 50px;
      height: 100%;
      box-sizing: border-box;
      background-color: #111;
      color: #fff;
      padding: 5px
    }

    #ecom-toast .ecom-toast-icon-svg {
      width: 100%;
      height: 100%;
      display: block;
      position: relative;
      vertical-align: middle;
      margin: auto;
      text-align: center
    }

    #ecom-toast #ecom-toast-desc {
      color: #fff;
      padding: 16px;
      overflow: hidden;
      white-space: nowrap
    }

    @media (max-width: 768px) {
      #ecom-toast #ecom-toast-desc {
        white-space: normal;
        min-width: 250px
      }

      #ecom-toast {
        height: auto;
        min-height: 60px
      }
    }

    @-webkit-keyframes ecomFadein {
      from {
        bottom: 0;
        opacity: 0
      }

      to {
        bottom: 30px;
        opacity: 1
      }
    }

    @keyframes fadein {
      from {
        bottom: 0;
        opacity: 0
      }

      to {
        bottom: 30px;
        opacity: 1
      }
    }

    @-webkit-keyframes ecomExpand {
      from {
        min-width: 50px
      }

      to {
        min-width: var(--ecom-max-width)
      }
    }

    @keyframes ecomExpand {
      from {
        min-width: 50px
      }

      to {
        min-width: var(--ecom-max-width)
      }
    }

    @-webkit-keyframes ecomStay {
      from {
        min-width: var(--ecom-max-width)
      }

      to {
        min-width: var(--ecom-max-width)
      }
    }

    @keyframes ecomStay {
      from {
        min-width: var(--ecom-max-width)
      }

      to {
        min-width: var(--ecom-max-width)
      }
    }

    @-webkit-keyframes ecomShrink {
      from {
        min-width: var(--ecom-max-width)
      }

      to {
        min-width: 50px
      }
    }

    @keyframes ecomShrink {
      from {
        min-width: var(--ecom-max-width)
      }

      to {
        min-width: 50px
      }
    }

    @-webkit-keyframes ecomFadeout {
      from {
        bottom: 30px;
        opacity: 1
      }

      to {
        bottom: 60px;
        opacity: 0
      }
    }

    @keyframes ecomFadeout {
      from {
        bottom: 30px;
        opacity: 1
      }

      to {
        bottom: 60px;
        opacity: 0
      }
    }
  </style>
  <script type="text/javascript" id="ecom-theme-helpers" async="async">
    window.EComposer = window.EComposer || {};
    (function () {
      if (!this.configs) this.configs = {}; this.configs.ajax_cart = {
        enable: false
      };


      this.customer = false;

      this.proxy_path = '/apps/ecomposer-visual-page-builder';
      this.routes = {
        domain: 'https://lucienbags.com',
        root_url: '/',
        collections_url: '/collections',
        all_products_collection_url: '/collections/all',
        cart_url: '/cart',
        cart_add_url: '/cart/add',
        cart_change_url: '/cart/change',
        cart_clear_url: '/cart/clear',
        cart_update_url: '/cart/update',
        product_recommendations_url: '/recommendations/products'
      };
      this.queryParams = {};
      if (window.location.search.length) {
        new URLSearchParams(window.location.search).forEach((value, key) => {
          this.queryParams[key] = value;
        })
      }
      this.money_format = "Rs. {{amount}}",
        this.money_with_currency_format = "Rs. {{amount}}",
        this.currencyCodeEnabled = false,

        this.formatMoney = function (t, e) { const r = this.currencyCodeEnabled ? this.money_with_currency_format : this.money_format; function a(t, e) { return void 0 === t ? e : t } function o(t, e, r, o) { if (e = a(e, 2), r = a(r, ","), o = a(o, "."), isNaN(t) || null == t) return 0; var n = (t = (t / 100).toFixed(e)).split("."); return n[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1" + r) + (n[1] ? o + n[1] : "") } "string" == typeof t && (t = t.replace(".", "")); var n = "", i = /\{\{\s*(\w+)\s*\}\}/, s = e || r; switch (s.match(i)[1]) { case "amount": n = o(t, 2); break; case "amount_no_decimals": n = o(t, 0); break; case "amount_with_comma_separator": n = o(t, 2, ".", ","); break; case "amount_with_space_separator": n = o(t, 2, " ", ","); break; case "amount_with_period_and_space_separator": n = o(t, 2, " ", "."); break; case "amount_no_decimals_with_comma_separator": n = o(t, 0, ".", ","); break; case "amount_no_decimals_with_space_separator": n = o(t, 0, " "); break; case "amount_with_apostrophe_separator": n = o(t, 2, "'", ".") }return s.replace(i, n) }, this.resizeImage = function (t, e) { try { if (!e || "original" == e || "full" == e || "master" == e) return t; if (-1 !== t.indexOf("cdn.shopify.com") || -1 !== t.indexOf("../cdn/shop/index.html")) { var r = t.match(/\.(jpg|jpeg|gif|png|bmp|bitmap|tiff|tif|webp)((\#[0-9a-z\-]+)?(\?v=.*)?)?$/gim); if (null == r) return null; var a = t.split(r[0]), o = r[0]; return a[0] + "_" + e + o } } catch (r) { return t } return t }, this.getProduct = function (t) { if (!t) return !1; let e = ("/" === this.routes.root_url ? "" : this.routes.root_url) + "/products/" + t + ".js?shop=" + Shopify.shop; return window.ECOM_LIVE && (e = "/shop/builder/ajax/ecom-proxy/products/" + t + "?shop=" + Shopify.shop), window.fetch(e, { headers: { "Content-Type": "application/json" } }).then(t => t.json()) };
    }).bind(window.EComposer)();
    if (window.Shopify && window.Shopify.designMode && window.top && window.top.opener) {
      window.addEventListener("load", function () {
        window.top.opener.postMessage({
          action: "ecomposer:loaded",
        }, "*");
      });
    }
  </script>
  <script type="text/javascript" id="ecom-theme-quickview" async="async">
    window.EComposer = window.EComposer || {};
    (function () {
      this.initQuickview = function () {
        var enable_qv = false;

        const qv_wrapper_script = document.querySelector('#ecom-quickview-template-html');
        if (!qv_wrapper_script) return;
        const ecom_quickview = document.createElement('div');
        ecom_quickview.classList.add('ecom-quickview');
        ecom_quickview.innerHTML = qv_wrapper_script.innerHTML
        document.body.prepend(ecom_quickview);
        const qv_wrapper = ecom_quickview.querySelector('.ecom-quickview__wrapper');

        const ecomQuickview = function (e) { const t = qv_wrapper.querySelector(".ecom-quickview__content-data"); if (t) { let o = document.createRange().createContextualFragment(e); t.innerHTML = "", t.append(o), qv_wrapper.classList.add("ecom-open"), setTimeout((function () { qv_wrapper.classList.add("ecom-display") }), 500), closeQuickview(t) } }, closeQuickview = function (e) { const t = qv_wrapper.querySelector(".ecom-quickview__close-btn"), o = qv_wrapper.querySelector(".ecom-quickview__content"); function c(t) { let i = t.target; do { if (i == o || i && i.classList && i.classList.contains("ecom-modal")) return; i = i.parentNode } while (i); i != o && (qv_wrapper.classList.add("ecom-remove"), qv_wrapper.classList.remove("ecom-open", "ecom-display", "ecom-remove"), setTimeout((function () { e.innerHTML = "" }), 300), document.removeEventListener("click", c), document.removeEventListener("keydown", n)) } function n(t) { (t.isComposing || 27 === t.keyCode) && (qv_wrapper.classList.add("ecom-remove"), qv_wrapper.classList.remove("ecom-open", "ecom-display", "ecom-remove"), setTimeout((function () { e.innerHTML = "" }), 300), document.removeEventListener("keydown", n), document.removeEventListener("click", c)) } t && t.addEventListener("click", (function (t) { t.preventDefault(), document.removeEventListener("click", c), document.removeEventListener("keydown", n), qv_wrapper.classList.add("ecom-remove"), qv_wrapper.classList.remove("ecom-open", "ecom-display", "ecom-remove"), setTimeout((function () { e.innerHTML = "" }), 300) })), document.addEventListener("click", c), document.addEventListener("keydown", n) }; function quickViewHandler(e) { e && e.preventDefault(); const t = this; t.classList && t.classList.add("ecom-loading"); let o = t.classList ? t.getAttribute("href") : window.location.pathname; if (o) { if (window.location.search.includes("ecom_template_id")) { let e = new URLSearchParams(location.search); o = window.location.pathname + "?section_id=" + e.get("ecom_template_id") } else o += (o.includes("?") ? "&" : "?") + "section_id=ecom-default-template-quickview"; fetch(o).then((function (e) { return 200 == e.status ? e.text() : window.document.querySelector("#admin-bar-iframe") ? (404 == e.status ? alert("Please create Ecomposer quickview template first!") : alert("Have some problem with quickview!"), t.classList && t.classList.remove("ecom-loading"), !1) : void window.open(new URL(o.html).pathname, "_blank") })).then((function (e) { e && (ecomQuickview(e), setTimeout((function () { t.classList && t.classList.remove("ecom-loading") }), 300)) })).catch((function (e) { })) } }
        if (window.location.search.includes('ecom_template_id')) {
          setTimeout(quickViewHandler, 1000)
        }
        if (enable_qv) {
          const qv_buttons = document.querySelectorAll('.ecom-product-quickview');
          if (qv_buttons.length > 0) {
            qv_buttons.forEach(function (button, index) {
              button.addEventListener('click', quickViewHandler)
            })
          }
        }
      }
    }).bind(window.EComposer)();
  </script>
  <script type="text/template" id="ecom-quickview-template-html">
    <div class="ecom-quickview__wrapper ecom-dn"><div class="ecom-quickview__container"><div class="ecom-quickview__content"><div class="ecom-quickview__content-inner"><div class="ecom-quickview__content-data"></div></div><span class="ecom-quickview__close-btn"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32"><g id="icomoon-ignore"></g><path d="M10.722 9.969l-0.754 0.754 5.278 5.278-5.253 5.253 0.754 0.754 5.253-5.253 5.253 5.253 0.754-0.754-5.253-5.253 5.278-5.278-0.754-0.754-5.278 5.278z" fill="#000000"></path></svg></span></div></div></div>
</script>
  <style type="text/css" class="ecom-theme-quickview">
    .ecom-quickview__wrapper {
      opacity: 0;
      display: none;
      pointer-events: none
    }

    .ecom-quickview__wrapper.ecom-open {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      display: block;
      pointer-events: auto;
      z-index: 100000;
      outline: 0 !important;
      -webkit-backface-visibility: hidden;
      opacity: 1;
      transition: all .1s
    }

    .ecom-quickview__container {
      text-align: center;
      position: absolute;
      width: 100%;
      height: 100%;
      left: 0;
      top: 0;
      padding: 0 8px;
      box-sizing: border-box;
      opacity: 0;
      background-color: rgba(0, 0, 0, .8);
      transition: opacity .1s
    }

    .ecom-quickview__container:before {
      content: "";
      display: inline-block;
      height: 100%;
      vertical-align: middle
    }

    .ecom-quickview__wrapper.ecom-display .ecom-quickview__content {
      visibility: visible;
      opacity: 1;
      transform: none;
      -webkit-transform: none
    }

    .ecom-quickview__content {
      position: relative;
      display: inline-block;
      opacity: 0;
      visibility: hidden;
      -webkit-transition: opacity .1s, -webkit-transform .1s;
      transition: transform .1s, opacity .1s, -webkit-transform .1s;
      -webkit-transform: translateX(-100px);
      transform: translateX(-100px)
    }

    .ecom-quickview__content-inner {
      position: relative;
      display: inline-block;
      vertical-align: middle;
      margin: 0 auto;
      text-align: left;
      z-index: 999;
      overflow-y: auto;
      max-height: 80vh
    }

    .ecom-quickview__content-data>.shopify-section {
      margin: 0 auto;
      max-width: 980px;
      overflow: hidden;
      position: relative;
      background-color: #fff;
      opacity: 0
    }

    .ecom-quickview__wrapper.ecom-display .ecom-quickview__content-data>.shopify-section {
      opacity: 1;
      -webkit-transform: none;
      transform: none
    }

    .ecom-quickview__wrapper.ecom-display .ecom-quickview__container {
      opacity: 1
    }

    .ecom-quickview__wrapper.ecom-remove #shopify-section-ecom-default-template-quickview {
      opacity: 0;
      -webkit-transform: translateX(100px);
      transform: translateX(100px)
    }

    .ecom-quickview__close-btn {
      position: fixed !important;
      top: 0;
      right: 0;
      transform: none;
      background-color: transparent;
      color: #000;
      opacity: 0;
      width: 40px;
      height: 40px;
      -webkit-transition: .25s;
      transition: .25s;
      z-index: 9999
    }

    .ecom-quickview__close-btn {
      stroke: #fff
    }

    .ecom-quickview__wrapper.ecom-display .ecom-quickview__close-btn {
      opacity: 1
    }

    .ecom-quickview__close-btn:hover {
      cursor: pointer
    }

    @media screen and (max-width:1024px) {
      .ecom-quickview__content {
        position: absolute;
        inset: 0;
        margin: 50px 15px;
        display: flex
      }

      .ecom-quickview__close-btn {
        right: 0
      }
    }
  </style>
  <script type="text/template" id="ecom-template-html">
    <!-- BEGIN app snippet: ecom-toast --><div id="ecom-toast">
    <div id="ecom-toast-icon"><svg xmlns="http://www.w3.org/2000/svg" class="ecom-toast-icon-svg" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg></div>
    <div id="ecom-toast-desc"></div>
  </div><!-- END app snippet -->
  </script>
  <!-- END app app block -->
  <link href="../../cdn.shopify.com/extensions/b2b456f5-3ab2-41d7-8d46-f6e1aa5314c3/ecomsend-popups-17/assets/style.css"
    rel="stylesheet" type="text/css" media="all">
  <script
    src="../../cdn.shopify.com/extensions/0087e139-9c3f-4e5a-b860-82fcb0939a91/inbox-318/assets/inbox-chat-loader.js"
    type="text/javascript" defer="defer"></script>
  <script
    src="../../cdn.shopify.com/extensions/d485f024-cdef-4373-9a58-98f2b6538406/ecomposer-builder-18/assets/ecom.js"
    type="text/javascript" defer="defer"></script>
  <link href="https://monorail-edge.shopifysvc.com/" rel="dns-prefetch">
  <script>(function () { if ("sendBeacon" in navigator && "performance" in window) { var session_token = document.cookie.match(/_shopify_s=([^;]*)/); function handle_abandonment_event(e) { var entries = performance.getEntries().filter(function (entry) { return /monorail-edge.shopifysvc.com/.test(entry.name); }); if (!window.abandonment_tracked && entries.length === 0) { window.abandonment_tracked = true; var currentMs = Date.now(); var navigation_start = performance.timing.navigationStart; var payload = { shop_id: 57346457684, url: window.location.href, navigation_start, duration: currentMs - navigation_start, session_token: session_token && session_token.length === 2 ? session_token[1] : "", page_type: "collection" }; window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({ schema_id: "online_store_buyer_site_abandonment/1.1", payload: payload, metadata: { event_created_at_ms: currentMs, event_sent_at_ms: currentMs } })); } } window.addEventListener('pagehide', handle_abandonment_event); } }());</script>
  <script
    id="web-pixels-manager-setup">(function e(e, n, a, t, r) { var o = "function" == typeof BigInt && -1 !== BigInt.toString().indexOf("[native code]") ? "modern" : "legacy"; window.Shopify = window.Shopify || {}; var i = window.Shopify; i.analytics = i.analytics || {}; var s = i.analytics; s.replayQueue = [], s.publish = function (e, n, a) { return s.replayQueue.push([e, n, a]), !0 }; try { self.performance.mark("wpm:start") } catch (e) { } var l = [a, "/wpm", "/b", r, o.substring(0, 1), ".js"].join(""); !function (e) { var n = e.src, a = e.async, t = void 0 === a || a, r = e.onload, o = e.onerror, i = document.createElement("script"), s = document.head, l = document.body; i.async = t, i.src = n, r && i.addEventListener("load", r), o && i.addEventListener("error", o), s ? s.appendChild(i) : l ? l.appendChild(i) : console.error("Did not find a head or body element to append the script") }({ src: l, async: !0, onload: function () { var a = window.webPixelsManager.init(e); n(a); var t = window.Shopify.analytics; t.replayQueue.forEach((function (e) { var n = e[0], t = e[1], r = e[2]; a.publishCustomEvent(n, t, r) })), t.replayQueue = [], t.publish = a.publishCustomEvent, t.visitor = a.visitor }, onerror: function () { var n = e.storefrontBaseUrl.replace(/\/$/, ""), a = "".concat(n, "/.well-known/shopify/monorail/unstable/produce_batch"), r = JSON.stringify({ metadata: { event_sent_at_ms: (new Date).getTime() }, events: [{ schema_id: "web_pixels_manager_load/2.0", payload: { version: t || "latest", page_url: self.location.href, status: "failed", error_msg: "".concat(l, " has failed to load") }, metadata: { event_created_at_ms: (new Date).getTime() } }] }); try { if (self.navigator.sendBeacon.bind(self.navigator)(a, r)) return !0 } catch (e) { } var o = new XMLHttpRequest; try { return o.open("POST.html", a, !0), o.setRequestHeader("Content-Type", "text/plain"), o.send(r), !0 } catch (e) { console && console.warn && console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.") } return !1 } }) })({ shopId: 57346457684, storefrontBaseUrl: "https://lucienbags.com", extensionsBaseUrl: "https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager", surface: "storefront-renderer", enabledBetaFlags: ["5de24938", "3b4293f9"], webPixelsConfigList: [{ "id": "shopify-app-pixel", "configuration": "{}", "eventPayloadVersion": "v1", "runtimeContext": "STRICT", "scriptVersion": "090", "apiClientId": "shopify-pixel", "type": "APP", "purposes": ["ANALYTICS", "MARKETING"] }, { "id": "shopify-custom-pixel", "eventPayloadVersion": "v1", "runtimeContext": "LAX", "scriptVersion": "090", "apiClientId": "shopify-pixel", "type": "CUSTOM", "purposes": ["ANALYTICS", "MARKETING"] }], initData: { "cart": null, "checkout": null, "customer": null, "productVariants": [], "shop": { "name": "Lucien", "paymentSettings": { "currencyCode": "INR" }, "myshopifyDomain": "395399-3d.myshopify.com", "countryCode": "IN", "storefrontUrl": "https:\/\/lucienbags.com" } }, }, function pageEvents(webPixelsManagerAPI) { webPixelsManagerAPI.publish("page_viewed"); webPixelsManagerAPI.publish("collection_viewed", { "collection": { "id": "271351349332", "title": "Slingbag", "productVariants": [{ "id": "40981742747732", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/IMG_9133.jpg?v=1715584353" }, "price": { "amount": 899.0, "currencyCode": "INR" }, "product": { "id": "6984157233236", "title": "Lucien Drip Slingbag", "untranslatedTitle": "Lucien Drip Slingbag", "url": "\/products\/lucien-drip-slingbag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Black Classic", "untranslatedTitle": "Black Classic" }, { "id": "40603626733652", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/JPEG_image_14_af5c2bd1-32f9-4335-970a-f2c42f6e3be0.jpg?v=1711623901" }, "price": { "amount": 699.0, "currencyCode": "INR" }, "product": { "id": "6998747021396", "title": "Lucien Half Moon Crossbody Slingbag", "untranslatedTitle": "Lucien Half Moon Crossbody Slingbag", "url": "\/products\/lucien-cross-sling", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Black", "untranslatedTitle": "Black" }, { "id": "40523572314196", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/IMG_6935.jpg?v=1710329031" }, "price": { "amount": 1199.0, "currencyCode": "INR" }, "product": { "id": "6976111312980", "title": "Lucien Celestial Slingbag", "untranslatedTitle": "Lucien Celestial Slingbag", "url": "\/products\/lucien-celestial-slingbag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Neon", "untranslatedTitle": "Neon" }, { "id": "40537754828884", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/IMG_4630.jpg?v=1710530792" }, "price": { "amount": 999.0, "currencyCode": "INR" }, "product": { "id": "6978108424276", "title": "Lucien Rhinestone slingbag", "untranslatedTitle": "Lucien Rhinestone slingbag", "url": "\/products\/lucien-rhinestone-slingbag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Default Title", "untranslatedTitle": "Default Title" }, { "id": "40510964858964", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/291E4180-DBE7-450E-BF28-9C97A2E50A68.jpg?v=1710054011" }, "price": { "amount": 1399.0, "currencyCode": "INR" }, "product": { "id": "6970127941716", "title": "Lucien Caddy slingbag", "untranslatedTitle": "Lucien Caddy slingbag", "url": "\/products\/lucien-caddy-slingbag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Black", "untranslatedTitle": "Black" }, { "id": "40510957191252", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/Edited-09_11357696-7654-4593-b3ff-89f76279edee.png?v=1715320305" }, "price": { "amount": 1199.0, "currencyCode": "INR" }, "product": { "id": "6970127155284", "title": "Lucien Mark Broad belt Slingbag", "untranslatedTitle": "Lucien Mark Broad belt Slingbag", "url": "\/products\/lucien-mark-broad-belt-slingbag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Black", "untranslatedTitle": "Black" }, { "id": "40798643355732", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/IMG_7872.jpg?v=1713522603" }, "price": { "amount": 1299.0, "currencyCode": "INR" }, "product": { "id": "7032510120020", "title": "Lucien Caddy 2.0", "untranslatedTitle": "Lucien Caddy 2.0", "url": "\/products\/lucien-swiftpack-sling-bag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Black Checkered", "untranslatedTitle": "Black Checkered" }, { "id": "40489035858004", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/JPEG_image_83_1eb41f33-6ccf-4292-a8e4-db51867f381e.jpg?v=1709471520" }, "price": { "amount": 999.0, "currencyCode": "INR" }, "product": { "id": "6961497833556", "title": "Camile Multi Zipper Slingbag", "untranslatedTitle": "Camile Multi Zipper Slingbag", "url": "\/products\/camile-multi-zipper-slingbag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "White", "untranslatedTitle": "White" }, { "id": "40536980422740", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/JPEGimage22_181ab42d-44f0-4295-bc29-f24cd63a5da0.jpg?v=1713513515" }, "price": { "amount": 799.0, "currencyCode": "INR" }, "product": { "id": "6977974665300", "title": "Lucien Ally Slingbag", "untranslatedTitle": "Lucien Ally Slingbag", "url": "\/products\/lucien-ally-slingbag", "vendor": "Lucien", "type": "" }, "sku": "", "title": "Blue", "untranslatedTitle": "Blue" }, { "id": "40491471994964", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/JPEGimage190.jpg?v=1709558519" }, "price": { "amount": 999.0, "currencyCode": "INR" }, "product": { "id": "6962054856788", "title": "Julia Slingbag", "untranslatedTitle": "Julia Slingbag", "url": "\/products\/julia-slingbag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Default Title", "untranslatedTitle": "Default Title" }, { "id": "40511716163668", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/IMG_4283.jpg?v=1710102175" }, "price": { "amount": 1199.0, "currencyCode": "INR" }, "product": { "id": "6970337951828", "title": "Lucien Classic Slingbag", "untranslatedTitle": "Lucien Classic Slingbag", "url": "\/products\/lucien-classic-slingbag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "White", "untranslatedTitle": "White" }, { "id": "40586020716628", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/IMG_7259.jpg?v=1711449465" }, "price": { "amount": 999.0, "currencyCode": "INR" }, "product": { "id": "6992523919444", "title": "Lucien Emi Slingbag", "untranslatedTitle": "Lucien Emi Slingbag", "url": "\/products\/lucien-emi-slingbag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Brown", "untranslatedTitle": "Brown" }, { "id": "40537041666132", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/IMG_0025.jpg?v=1710506874" }, "price": { "amount": 799.0, "currencyCode": "INR" }, "product": { "id": "6977983250516", "title": "Lucien Bling Slingbag", "untranslatedTitle": "Lucien Bling Slingbag", "url": "\/products\/lucien-bling-slingbag", "vendor": "Lucien", "type": "" }, "sku": "", "title": "Default Title", "untranslatedTitle": "Default Title" }, { "id": "40537758662740", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/IMG_4661.jpg?v=1710531477" }, "price": { "amount": 1199.0, "currencyCode": "INR" }, "product": { "id": "6978108981332", "title": "Lucien Ishra Slingbag", "untranslatedTitle": "Lucien Ishra Slingbag", "url": "\/products\/lucien-ishra-slingbag-1", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Black", "untranslatedTitle": "Black" }, { "id": "40568487444564", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/JPEGimage22_664be13a-a434-4411-814c-9b937cc633a9.jpg?v=1711029933" }, "price": { "amount": 1499.0, "currencyCode": "INR" }, "product": { "id": "6985156853844", "title": "Lucien phibi sling", "untranslatedTitle": "Lucien phibi sling", "url": "\/products\/lucien-phibi-sling", "vendor": "Lucien", "type": "sling bag" }, "sku": "2774", "title": "Default Title", "untranslatedTitle": "Default Title" }, { "id": "40568452317268", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/JPEGimage57_1.jpg?v=1711028878" }, "price": { "amount": 1299.0, "currencyCode": "INR" }, "product": { "id": "6985151119444", "title": "Lucien emily sling bag", "untranslatedTitle": "Lucien emily sling bag", "url": "\/products\/lucien-emily-sling-bag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Default Title", "untranslatedTitle": "Default Title" }, { "id": "40491382997076", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/61egNGOaJyL._AC_SY695.jpg?v=1709550291" }, "price": { "amount": 1299.0, "currencyCode": "INR" }, "product": { "id": "6962036211796", "title": "Persian Slingbag", "untranslatedTitle": "Persian Slingbag", "url": "\/products\/persian-slingbag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Black", "untranslatedTitle": "Black" }, { "id": "40460941328468", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/products\/1-7.jpg?v=1708598446" }, "price": { "amount": 1399.0, "currencyCode": "INR" }, "product": { "id": "6952624914516", "title": "Millionaire Sling", "untranslatedTitle": "Millionaire Sling", "url": "\/products\/millionaire-sling-bag", "vendor": "My Store", "type": "" }, "sku": "AB0011-3568", "title": "Black", "untranslatedTitle": "Black" }, { "id": "40536913084500", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/JPEG_image_25_7b2cc742-c1d4-4963-88eb-41831ecd6b87.jpg?v=1710502224" }, "price": { "amount": 1099.0, "currencyCode": "INR" }, "product": { "id": "6977966833748", "title": "Lucien Aliza", "untranslatedTitle": "Lucien Aliza", "url": "\/products\/lucien-aliza", "vendor": "Lucien", "type": "" }, "sku": "", "title": "Black", "untranslatedTitle": "Black" }, { "id": "40491390009428", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/JPEG_image_265.jpg?v=1709551177" }, "price": { "amount": 999.0, "currencyCode": "INR" }, "product": { "id": "6962037096532", "title": "Cotton Candy Slingbag", "untranslatedTitle": "Cotton Candy Slingbag", "url": "\/products\/cotton-candy-slingbag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Black", "untranslatedTitle": "Black" }, { "id": "40565205139540", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/JTF3007-DETAIL-2.jpg?v=1710954591" }, "price": { "amount": 1199.0, "currencyCode": "INR" }, "product": { "id": "6984232075348", "title": "Lucien Harlow Slingbag 2.0", "untranslatedTitle": "Lucien Harlow Slingbag 2.0", "url": "\/products\/lucien-harlow-slingbag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Default Title", "untranslatedTitle": "Default Title" }, { "id": "40537777668180", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/IMG_4663.jpg?v=1710532907" }, "price": { "amount": 1399.0, "currencyCode": "INR" }, "product": { "id": "6978111340628", "title": "Lucien Wander Slingbag", "untranslatedTitle": "Lucien Wander Slingbag", "url": "\/products\/lucien-wander-slingbag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Black", "untranslatedTitle": "Black" }, { "id": "40511734251604", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/81JVlhXj8lL._AC_SX679.jpg?v=1710103012" }, "price": { "amount": 1199.0, "currencyCode": "INR" }, "product": { "id": "6970343981140", "title": "Emma Slingbag", "untranslatedTitle": "Emma Slingbag", "url": "\/products\/emma-slingbag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "White", "untranslatedTitle": "White" }, { "id": "40499345948756", "image": { "src": "\/\/lucienbags.com\/cdn\/shop\/files\/JPEG_image_22_ce92c4f1-928f-4f4a-9a07-5e7cab4a03f4.jpg?v=1709711853" }, "price": { "amount": 999.0, "currencyCode": "INR" }, "product": { "id": "6965126856788", "title": "Odyssey Slingbag", "untranslatedTitle": "Odyssey Slingbag", "url": "\/products\/odyssey-slingbag", "vendor": "Lucien", "type": "sling bag" }, "sku": "", "title": "Maroon", "untranslatedTitle": "Maroon" }] } }); }, "../cdn.html", "b1960ab3902be1b2d5e4e73559d88a06fe391814", "2618fd15wf7957246p4fe5c48am4cbbec41",);</script>
  <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
    window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
    window.ShopifyAnalytics.meta.currency = 'INR';
    var meta = { "products": [{ "id": 6984157233236, "gid": "gid:\/\/shopify\/Product\/6984157233236", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40981742747732, "price": 89900, "name": "Lucien Drip Slingbag - Black Classic", "public_title": "Black Classic", "sku": "" }, { "id": 40871512539220, "price": 89900, "name": "Lucien Drip Slingbag - 2.0  Black", "public_title": "2.0  Black", "sku": "" }, { "id": 40871512506452, "price": 69900, "name": "Lucien Drip Slingbag - Black", "public_title": "Black", "sku": "" }, { "id": 40916109066324, "price": 139900, "name": "Lucien Drip Slingbag - Black 3.0", "public_title": "Black 3.0", "sku": "" }] }, { "id": 6998747021396, "gid": "gid:\/\/shopify\/Product\/6998747021396", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40603626733652, "price": 69900, "name": "Lucien Half Moon Crossbody Slingbag - Black", "public_title": "Black", "sku": "" }, { "id": 40603626766420, "price": 69900, "name": "Lucien Half Moon Crossbody Slingbag - White", "public_title": "White", "sku": "" }, { "id": 40603626799188, "price": 69900, "name": "Lucien Half Moon Crossbody Slingbag - Blue", "public_title": "Blue", "sku": "" }, { "id": 40603626831956, "price": 69900, "name": "Lucien Half Moon Crossbody Slingbag - Dark Blue", "public_title": "Dark Blue", "sku": "" }, { "id": 40603626864724, "price": 69900, "name": "Lucien Half Moon Crossbody Slingbag - Orange", "public_title": "Orange", "sku": "" }, { "id": 40603626897492, "price": 69900, "name": "Lucien Half Moon Crossbody Slingbag - Maroon", "public_title": "Maroon", "sku": "" }, { "id": 40603626930260, "price": 69900, "name": "Lucien Half Moon Crossbody Slingbag - Pink", "public_title": "Pink", "sku": "" }, { "id": 40603626963028, "price": 669900, "name": "Lucien Half Moon Crossbody Slingbag - Yellow", "public_title": "Yellow", "sku": "" }, { "id": 40603626995796, "price": 69900, "name": "Lucien Half Moon Crossbody Slingbag - Grey", "public_title": "Grey", "sku": "" }, { "id": 40603627028564, "price": 69900, "name": "Lucien Half Moon Crossbody Slingbag - Green", "public_title": "Green", "sku": "" }] }, { "id": 6976111312980, "gid": "gid:\/\/shopify\/Product\/6976111312980", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40523572314196, "price": 119900, "name": "Lucien Celestial Slingbag - Neon", "public_title": "Neon", "sku": "" }, { "id": 40523572281428, "price": 119900, "name": "Lucien Celestial Slingbag - Brown", "public_title": "Brown", "sku": "" }, { "id": 40523572248660, "price": 119900, "name": "Lucien Celestial Slingbag - Black", "public_title": "Black", "sku": "" }, { "id": 40523572346964, "price": 119900, "name": "Lucien Celestial Slingbag - White", "public_title": "White", "sku": "" }] }, { "id": 6978108424276, "gid": "gid:\/\/shopify\/Product\/6978108424276", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40537754828884, "price": 99900, "name": "Lucien Rhinestone slingbag", "public_title": null, "sku": "" }] }, { "id": 6970127941716, "gid": "gid:\/\/shopify\/Product\/6970127941716", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40510964858964, "price": 139900, "name": "Lucien Caddy slingbag - Black", "public_title": "Black", "sku": "" }, { "id": 40510964891732, "price": 139900, "name": "Lucien Caddy slingbag - Brown", "public_title": "Brown", "sku": "" }] }, { "id": 6970127155284, "gid": "gid:\/\/shopify\/Product\/6970127155284", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40510957191252, "price": 119900, "name": "Lucien Mark Broad belt Slingbag - Black", "public_title": "Black", "sku": "" }, { "id": 40510957224020, "price": 119900, "name": "Lucien Mark Broad belt Slingbag - Black and white", "public_title": "Black and white", "sku": "" }, { "id": 40510957256788, "price": 119900, "name": "Lucien Mark Broad belt Slingbag - Green", "public_title": "Green", "sku": "" }, { "id": 40510957289556, "price": 119900, "name": "Lucien Mark Broad belt Slingbag - Yellow", "public_title": "Yellow", "sku": "" }, { "id": 40510957322324, "price": 119900, "name": "Lucien Mark Broad belt Slingbag - Blue", "public_title": "Blue", "sku": "" }, { "id": 40510957355092, "price": 119900, "name": "Lucien Mark Broad belt Slingbag - Pink", "public_title": "Pink", "sku": "" }, { "id": 40510958239828, "price": 119900, "name": "Lucien Mark Broad belt Slingbag - Dark green", "public_title": "Dark green", "sku": "" }, { "id": 40510958272596, "price": 119900, "name": "Lucien Mark Broad belt Slingbag - White and Beige", "public_title": "White and Beige", "sku": "" }, { "id": 40510959517780, "price": 119900, "name": "Lucien Mark Broad belt Slingbag - Orange", "public_title": "Orange", "sku": "" }] }, { "id": 7032510120020, "gid": "gid:\/\/shopify\/Product\/7032510120020", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40798643355732, "price": 129900, "name": "Lucien Caddy 2.0 - Black Checkered", "public_title": "Black Checkered", "sku": "" }, { "id": 40706925658196, "price": 129900, "name": "Lucien Caddy 2.0 - Tiger print", "public_title": "Tiger print", "sku": "" }, { "id": 40706925559892, "price": 119900, "name": "Lucien Caddy 2.0 - Black", "public_title": "Black", "sku": "" }, { "id": 40706925592660, "price": 119900, "name": "Lucien Caddy 2.0 - Brown", "public_title": "Brown", "sku": "" }, { "id": 40706925625428, "price": 119900, "name": "Lucien Caddy 2.0 - Light brown", "public_title": "Light brown", "sku": "" }] }, { "id": 6961497833556, "gid": "gid:\/\/shopify\/Product\/6961497833556", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40489035858004, "price": 99900, "name": "Camile Multi Zipper Slingbag - White", "public_title": "White", "sku": "" }, { "id": 40489035890772, "price": 99900, "name": "Camile Multi Zipper Slingbag - Black", "public_title": "Black", "sku": "" }, { "id": 40489035923540, "price": 99900, "name": "Camile Multi Zipper Slingbag - Brown", "public_title": "Brown", "sku": "" }, { "id": 40489035956308, "price": 99900, "name": "Camile Multi Zipper Slingbag - Beige", "public_title": "Beige", "sku": "" }, { "id": 40489035989076, "price": 99900, "name": "Camile Multi Zipper Slingbag - Dark Green", "public_title": "Dark Green", "sku": "" }] }, { "id": 6977974665300, "gid": "gid:\/\/shopify\/Product\/6977974665300", "vendor": "Lucien", "type": "", "variants": [{ "id": 40536980422740, "price": 79900, "name": "Lucien Ally Slingbag - Blue", "public_title": "Blue", "sku": "" }, { "id": 40536980455508, "price": 79900, "name": "Lucien Ally Slingbag - Golden", "public_title": "Golden", "sku": "" }] }, { "id": 6962054856788, "gid": "gid:\/\/shopify\/Product\/6962054856788", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40491471994964, "price": 99900, "name": "Julia Slingbag", "public_title": null, "sku": "" }] }, { "id": 6970337951828, "gid": "gid:\/\/shopify\/Product\/6970337951828", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40511716163668, "price": 119900, "name": "Lucien Classic Slingbag - White", "public_title": "White", "sku": "" }, { "id": 40511716196436, "price": 119900, "name": "Lucien Classic Slingbag - Brown", "public_title": "Brown", "sku": "" }] }, { "id": 6992523919444, "gid": "gid:\/\/shopify\/Product\/6992523919444", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40586020716628, "price": 99900, "name": "Lucien Emi Slingbag - Brown", "public_title": "Brown", "sku": "" }, { "id": 40586020749396, "price": 99900, "name": "Lucien Emi Slingbag - White", "public_title": "White", "sku": "" }] }, { "id": 6977983250516, "gid": "gid:\/\/shopify\/Product\/6977983250516", "vendor": "Lucien", "type": "", "variants": [{ "id": 40537041666132, "price": 79900, "name": "Lucien Bling Slingbag", "public_title": null, "sku": "" }] }, { "id": 6978108981332, "gid": "gid:\/\/shopify\/Product\/6978108981332", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40537758662740, "price": 119900, "name": "Lucien Ishra Slingbag - Black", "public_title": "Black", "sku": "" }, { "id": 40537758695508, "price": 119900, "name": "Lucien Ishra Slingbag - White", "public_title": "White", "sku": "" }] }, { "id": 6985156853844, "gid": "gid:\/\/shopify\/Product\/6985156853844", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40568487444564, "price": 149900, "name": "Lucien phibi sling", "public_title": null, "sku": "2774" }] }, { "id": 6985151119444, "gid": "gid:\/\/shopify\/Product\/6985151119444", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40568452317268, "price": 129900, "name": "Lucien emily sling bag", "public_title": null, "sku": "" }] }, { "id": 6962036211796, "gid": "gid:\/\/shopify\/Product\/6962036211796", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40491382997076, "price": 129900, "name": "Persian Slingbag - Black", "public_title": "Black", "sku": "" }, { "id": 40491383029844, "price": 129900, "name": "Persian Slingbag - Beige", "public_title": "Beige", "sku": "" }] }, { "id": 6952624914516, "gid": "gid:\/\/shopify\/Product\/6952624914516", "vendor": "My Store", "type": "", "variants": [{ "id": 40460941328468, "price": 139900, "name": "Millionaire Sling - Black", "public_title": "Black", "sku": "AB0011-3568" }, { "id": 40460941361236, "price": 139900, "name": "Millionaire Sling - Brown", "public_title": "Brown", "sku": "AB0011-3568" }, { "id": 40460941394004, "price": 139900, "name": "Millionaire Sling - Mustard", "public_title": "Mustard", "sku": "AB0011-3568" }, { "id": 40460941426772, "price": 139900, "name": "Millionaire Sling - White", "public_title": "White", "sku": "AB0011-3568" }] }, { "id": 6977966833748, "gid": "gid:\/\/shopify\/Product\/6977966833748", "vendor": "Lucien", "type": "", "variants": [{ "id": 40536913084500, "price": 109900, "name": "Lucien Aliza - Black", "public_title": "Black", "sku": "" }, { "id": 40536913117268, "price": 109900, "name": "Lucien Aliza - White", "public_title": "White", "sku": "" }, { "id": 40536913150036, "price": 109900, "name": "Lucien Aliza - Beige", "public_title": "Beige", "sku": "" }] }, { "id": 6962037096532, "gid": "gid:\/\/shopify\/Product\/6962037096532", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40491390009428, "price": 99900, "name": "Cotton Candy Slingbag - Black", "public_title": "Black", "sku": "" }, { "id": 40491390042196, "price": 99900, "name": "Cotton Candy Slingbag - Pink", "public_title": "Pink", "sku": "" }, { "id": 40491390074964, "price": 99900, "name": "Cotton Candy Slingbag - Purple", "public_title": "Purple", "sku": "" }, { "id": 40491390107732, "price": 99900, "name": "Cotton Candy Slingbag - Green", "public_title": "Green", "sku": "" }, { "id": 40491390140500, "price": 99900, "name": "Cotton Candy Slingbag - Brown", "public_title": "Brown", "sku": "" }, { "id": 40491390173268, "price": 99900, "name": "Cotton Candy Slingbag - Beige", "public_title": "Beige", "sku": "" }] }, { "id": 6984232075348, "gid": "gid:\/\/shopify\/Product\/6984232075348", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40565205139540, "price": 119900, "name": "Lucien Harlow Slingbag 2.0", "public_title": null, "sku": "" }] }, { "id": 6978111340628, "gid": "gid:\/\/shopify\/Product\/6978111340628", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40537777668180, "price": 139900, "name": "Lucien Wander Slingbag - Black", "public_title": "Black", "sku": "" }, { "id": 40537777700948, "price": 139900, "name": "Lucien Wander Slingbag - Khaki", "public_title": "Khaki", "sku": "" }] }, { "id": 6970343981140, "gid": "gid:\/\/shopify\/Product\/6970343981140", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40511734251604, "price": 119900, "name": "Emma Slingbag - White", "public_title": "White", "sku": "" }, { "id": 40511734284372, "price": 119900, "name": "Emma Slingbag - Pink", "public_title": "Pink", "sku": "" }] }, { "id": 6965126856788, "gid": "gid:\/\/shopify\/Product\/6965126856788", "vendor": "Lucien", "type": "sling bag", "variants": [{ "id": 40499345948756, "price": 99900, "name": "Odyssey Slingbag - Maroon", "public_title": "Maroon", "sku": "" }, { "id": 40499345981524, "price": 99900, "name": "Odyssey Slingbag - Black", "public_title": "Black", "sku": "" }, { "id": 40499346014292, "price": 99900, "name": "Odyssey Slingbag - Beige", "public_title": "Beige", "sku": "" }, { "id": 40499346047060, "price": 99900, "name": "Odyssey Slingbag - Navy Blue", "public_title": "Navy Blue", "sku": "" }, { "id": 40499346079828, "price": 99900, "name": "Odyssey Slingbag - Mustard", "public_title": "Mustard", "sku": "" }, { "id": 40499346112596, "price": 99900, "name": "Odyssey Slingbag - Sea Green", "public_title": "Sea Green", "sku": "" }] }], "page": { "pageType": "collection", "resourceType": "collection", "resourceId": 271351349332 } };
    for (var attr in meta) {
      window.ShopifyAnalytics.meta[attr] = meta[attr];
    }</script>
  <script>window.ShopifyAnalytics.merchantGoogleAnalytics = function () {

    };
  </script>
  <script class="analytics">(function () {
      var customDocumentWrite = function (content) {
        var jquery = null;

        if (window.jQuery) {
          jquery = window.jQuery;
        } else if (window.Checkout && window.Checkout.$) {
          jquery = window.Checkout.$;
        }

        if (jquery) {
          jquery('body').append(content);
        }
      };

      var hasLoggedConversion = function (token) {
        if (token) {
          return document.cookie.indexOf('loggedConversion=' + token) !== -1;
        }
        return false;
      }

      var setCookieIfConversion = function (token) {
        if (token) {
          var twoMonthsFromNow = new Date(Date.now());
          twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

          document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
        }
      }

      var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
      if (trekkie.integrations) {
        return;
      }
      trekkie.methods = [
        'identify',
        'page',
        'ready',
        'track',
        'trackForm',
        'trackLink'
      ];
      trekkie.factory = function (method) {
        return function () {
          var args = Array.prototype.slice.call(arguments);
          args.unshift(method);
          trekkie.push(args);
          return trekkie;
        };
      };
      for (var i = 0; i < trekkie.methods.length; i++) {
        var key = trekkie.methods[i];
        trekkie[key] = trekkie.factory(key);
      }
      trekkie.load = function (config) {
        trekkie.config = config || {};
        trekkie.config.initialDocumentCookie = document.cookie;
        var first = document.getElementsByTagName('script')[0];
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.onerror = function (e) {
          var scriptFallback = document.createElement('script');
          scriptFallback.type = 'text/javascript';
          scriptFallback.onerror = function (error) {
            var Monorail = {
              produce: function produce(monorailDomain, schemaId, payload) {
                var currentMs = new Date().getTime();
                var event = {
                  schema_id: schemaId,
                  payload: payload,
                  metadata: {
                    event_created_at_ms: currentMs,
                    event_sent_at_ms: currentMs
                  }
                };
                return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
              },
              sendRequest: function sendRequest(endpointUrl, payload) {
                // Try the sendBeacon API
                if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
                  var blobData = new window.Blob([payload], {
                    type: 'text/plain'
                  });

                  if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                    return true;
                  } // sendBeacon was not successful

                } // XHR beacon

                var xhr = new XMLHttpRequest();

                try {
                  xhr.open('POST.html', endpointUrl);
                  xhr.setRequestHeader('Content-Type', 'text/plain');
                  xhr.send(payload);
                } catch (e) {
                  console.log(e);
                }

                return false;
              },
              isIos12: function isIos12() {
                return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
              }
            };
            Monorail.produce('monorail-edge.shopifysvc.com',
              'trekkie_storefront_load_errors/1.1',
              {
                shop_id: 57346457684,
                theme_id: 125983883348,
                app_name: "storefront",
                context_url: window.location.href,
                source_url: "//lucienbags.com/cdn/s/trekkie.storefront.dd626a6a6fbdab104f8779acc4331c330134c832.min.js"
              });

          };
          scriptFallback.async = true;
          scriptFallback.src = '../cdn/s/trekkie.storefront.dd626a6a6fbdab104f8779acc4331c330134c832.min.js';
          first.parentNode.insertBefore(scriptFallback, first);
        };
        script.async = true;
        script.src = '../cdn/s/trekkie.storefront.dd626a6a6fbdab104f8779acc4331c330134c832.min.js';
        first.parentNode.insertBefore(script, first);
      };
      trekkie.load(
        { "Trekkie": { "appName": "storefront", "development": false, "defaultAttributes": { "shopId": 57346457684, "isMerchantRequest": null, "themeId": 125983883348, "themeCityHash": "8696825840417026649", "contentLanguage": "en", "currency": "INR" }, "isServerSideCookieWritingEnabled": true, "monorailRegion": "shop_domain", "enabledBetaFlags": ["bbcf04e6"] }, "Facebook Pixel": { "pixelIds": ["3180317328927352"], "agent": "plshopify1.2" }, "Google Gtag Pixel": { "conversionId": "G-YVYC29QCQ9", "eventLabels": [{ "type": "begin_checkout", "action_label": "G-YVYC29QCQ9" }, { "type": "search", "action_label": "G-YVYC29QCQ9" }, { "type": "view_item", "action_label": ["G-YVYC29QCQ9", "MC-VBSV2T5Z3N"] }, { "type": "purchase", "action_label": ["G-YVYC29QCQ9", "MC-VBSV2T5Z3N"] }, { "type": "page_view", "action_label": ["G-YVYC29QCQ9", "MC-VBSV2T5Z3N"] }, { "type": "add_payment_info", "action_label": "G-YVYC29QCQ9" }, { "type": "add_to_cart", "action_label": "G-YVYC29QCQ9" }], "targetCountry": "IN" }, "Session Attribution": {}, "S2S": { "facebookCapiEnabled": true, "facebookAppPixelId": "3180317328927352", "source": "trekkie-storefront-renderer" } }
      );

      var loaded = false;
      trekkie.ready(function () {
        if (loaded) return;
        loaded = true;
        window.ShopifyAnalytics.lib = window.trekkie;
        var originalDocumentWrite = document.write;
        document.write = customDocumentWrite;
        try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch (error) { };
        document.write = originalDocumentWrite;

        window.ShopifyAnalytics.lib.page(null, { "pageType": "collection", "resourceType": "collection", "resourceId": 271351349332 });

        var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
        var token = match ? match[1] : undefined;
        if (!hasLoggedConversion(token)) {
          setCookieIfConversion(token);
          window.ShopifyAnalytics.lib.track("Viewed Product Category", { "currency": "INR", "category": "Collection: slingbag", "collectionName": "slingbag", "collectionId": 271351349332, "nonInteraction": true });
        }
      });


      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "../cdn/shopifycloud/shopify/assets/shop_events_listener-61fa9e0a912c675e178777d2b27f6cbd482f8912a6b0aa31fa3515985a8cd626.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

    })();</script>
  <script class="boomerang">
    (function () {
      if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
        return;
      }
      window.BOOMR = window.BOOMR || {};
      window.BOOMR.snippetStart = new Date().getTime();
      window.BOOMR.snippetExecuted = true;
      window.BOOMR.snippetVersion = 12;
      window.BOOMR.application = "storefront-renderer";
      window.BOOMR.themeName = "Refresh";
      window.BOOMR.themeVersion = "13.0.1";
      window.BOOMR.shopId = 57346457684;
      window.BOOMR.themeId = 125983883348;
      window.BOOMR.renderRegion = "gcp-asia-southeast1";
      window.BOOMR.url =
        "../cdn/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
      var where = document.currentScript || document.getElementsByTagName("script")[0];
      var parentNode = where.parentNode;
      var promoted = false;
      var LOADER_TIMEOUT = 3000;
      function promote() {
        if (promoted) {
          return;
        }
        var script = document.createElement("script");
        script.id = "boomr-scr-as";
        script.src = window.BOOMR.url;
        script.async = true;
        parentNode.appendChild(script);
        promoted = true;
      }
      function iframeLoader(wasFallback) {
        promoted = true;
        var dom, bootstrap, iframe, iframeStyle;
        var doc = document;
        var win = window;
        window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
        bootstrap = function (parent, scriptId) {
          var script = doc.createElement("script");
          script.id = scriptId || "boomr-if-as";
          script.src = window.BOOMR.url;
          BOOMR_lstart = new Date().getTime();
          parent = parent || doc.body;
          parent.appendChild(script);
        };
        if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
          window.BOOMR.snippetMethod = "s";
          bootstrap(parentNode, "boomr-async");
          return;
        }
        iframe = document.createElement("IFRAME");
        iframe.src = "about:blank";
        iframe.title = "";
        iframe.role = "presentation";
        iframe.loading = "eager";
        iframeStyle = (iframe.frameElement || iframe).style;
        iframeStyle.width = 0;
        iframeStyle.height = 0;
        iframeStyle.border = 0;
        iframeStyle.display = "none";
        parentNode.appendChild(iframe);
        try {
          win = iframe.contentWindow;
          doc = win.document.open();
        } catch (e) {
          dom = document.domain;
          iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
          win = iframe.contentWindow;
          doc = win.document.open();
        }
        if (dom) {
          doc._boomrl = function () {
            this.domain = dom;
            bootstrap();
          };
          doc.write("<body onload='document._boomrl();'>");
        } else {
          win._boomrl = function () {
            bootstrap();
          };
          if (win.addEventListener) {
            win.addEventListener("load", win._boomrl, false);
          } else if (win.attachEvent) {
            win.attachEvent("onload", win._boomrl);
          }
        }
        doc.close();
      }
      var link = document.createElement("link");
      if (link.relList &&
        typeof link.relList.supports === "function" &&
        link.relList.supports("preload") &&
        ("as" in link)) {
        window.BOOMR.snippetMethod = "p";
        link.href = window.BOOMR.url;
        link.rel = "preload";
        link.as = "script";
        link.addEventListener("load", promote);
        link.addEventListener("error", function () {
          iframeLoader(true);
        });
        setTimeout(function () {
          if (!promoted) {
            iframeLoader(true);
          }
        }, LOADER_TIMEOUT);
        BOOMR_lstart = new Date().getTime();
        parentNode.appendChild(link);
      } else {
        iframeLoader(false);
      }
      function boomerangSaveLoadTime(e) {
        window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
      }
      if (window.addEventListener) {
        window.addEventListener("load", boomerangSaveLoadTime, false);
      } else if (window.attachEvent) {
        window.attachEvent("onload", boomerangSaveLoadTime);
      }
      if (document.addEventListener) {
        document.addEventListener("onBoomerangLoaded", function (e) {
          e.detail.BOOMR.init({
            ResourceTiming: {
              enabled: true,
              trackedResourceTypes: ["script", "img", "css"]
            },
          });
          e.detail.BOOMR.t_end = new Date().getTime();
        });
      } else if (document.attachEvent) {
        document.attachEvent("onpropertychange", function (e) {
          if (!e) e = event;
          if (e.propertyName === "onBoomerangLoaded") {
            e.detail.BOOMR.init({
              ResourceTiming: {
                enabled: true,
                trackedResourceTypes: ["script", "img", "css"]
              },
            });
            e.detail.BOOMR.t_end = new Date().getTime();
          }
        });
      }
    })();</script>
</head>

<body class="gradient animate--hover-3d-lift">
  <a class="skip-to-content-link button visually-hidden" href="#MainContent">
    Skip to content
  </a><!-- BEGIN sections: header-group -->
  <div id="shopify-section-sections--15333407326292__announcement-bar"
    class="shopify-section shopify-section-group-header-group announcement-bar-section">
    <link href="../cdn/shop/t/3/assets/component-slideshow89cf.css?v=107725913939919748051713312590" rel="stylesheet"
      type="text/css" media="all" />
    <link href="../cdn/shop/t/3/assets/component-sliderc021.css?v=142503135496229589681713312590" rel="stylesheet"
      type="text/css" media="all" />

    <link href="../cdn/shop/t/3/assets/component-list-socialec93.css?v=35792976012981934991713312590" rel="stylesheet"
      type="text/css" media="all" />


    <div class="utility-bar color-scheme-a8bc3ab3-af3a-4f0d-b3fd-401b9b88dc5e gradient utility-bar--bottom-border">
      <div class="page-width utility-bar__grid">
        <div class="announcement-bar" role="region" aria-label="Announcement">
          <p class="announcement-bar__message h5">
            <span>Free Shipping on All Orders Above ₹999</span>
          </p>
        </div>
        <div class="localization-wrapper">
        </div>
      </div>
    </div>


  </div>
  <div id="shopify-section-sections--15333407326292__header"
    class="shopify-section shopify-section-group-header-group section-header">
    <link rel="stylesheet" href="../cdn/shop/t/3/assets/component-list-menu1726.css?v=151968516119678728991713312590"
      media="print" onload="this.media='all'">
    <link rel="stylesheet" href="../cdn/shop/t/3/assets/component-searcha5de.css?v=165164710990765432851713312590"
      media="print" onload="this.media='all'">
    <link rel="stylesheet" href="../cdn/shop/t/3/assets/component-menu-drawer6d57.css?v=85170387104997277661713312590"
      media="print" onload="this.media='all'">
    <link rel="stylesheet"
      href="../cdn/shop/t/3/assets/component-cart-notification446e.css?v=54116361853792938221713312590" media="print"
      onload="this.media='all'">
    <link rel="stylesheet" href="../cdn/shop/t/3/assets/component-cart-items94ef.css?v=136978088507021421401713312590"
      media="print" onload="this.media='all'">
    <link rel="stylesheet" href="../cdn/shop/t/3/assets/component-pricef983.css?v=70172745017360139101713312590"
      media="print" onload="this.media='all'"><noscript>
      <link href="../cdn/shop/t/3/assets/component-list-menu1726.css?v=151968516119678728991713312590" rel="stylesheet"
        type="text/css" media="all" />
    </noscript>
    <noscript>
      <link href="../cdn/shop/t/3/assets/component-searcha5de.css?v=165164710990765432851713312590" rel="stylesheet"
        type="text/css" media="all" />
    </noscript>
    <noscript>
      <link href="../cdn/shop/t/3/assets/component-menu-drawer6d57.css?v=85170387104997277661713312590" rel="stylesheet"
        type="text/css" media="all" />
    </noscript>
    <noscript>
      <link href="../cdn/shop/t/3/assets/component-cart-notification446e.css?v=54116361853792938221713312590"
        rel="stylesheet" type="text/css" media="all" />
    </noscript>
    <noscript>
      <link href="../cdn/shop/t/3/assets/component-cart-items94ef.css?v=136978088507021421401713312590" rel="stylesheet"
        type="text/css" media="all" />
    </noscript>

    <style>
      header-drawer {
        justify-self: start;
        margin-left: -1.2rem;
      }

      .menu-drawer-container {
        display: flex;
      }

      .list-menu {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .list-menu--inline {
        display: inline-flex;
        flex-wrap: wrap;
      }

      summary.list-menu__item {
        padding-right: 2.7rem;
      }

      .list-menu__item {
        display: flex;
        align-items: center;
        line-height: calc(1 + 0.3 / var(--font-body-scale));
      }

      .list-menu__item--link {
        text-decoration: none;
        padding-bottom: 1rem;
        padding-top: 1rem;
        line-height: calc(1 + 0.8 / var(--font-body-scale));
      }

      @media screen and (min-width: 750px) {
        .list-menu__item--link {
          padding-bottom: 0.5rem;
          padding-top: 0.5rem;
        }
      }
    </style>
    <style data-shopify>
      .header {
        padding: 10px 3rem 10px 3rem;
      }

      .section-header {
        position: sticky;
        /* This is for fixing a Safari z-index issue. PR #2147 */
        margin-bottom: 0px;
      }

      @media screen and (min-width: 750px) {
        .section-header {
          margin-bottom: 0px;
        }
      }

      @media screen and (min-width: 990px) {
        .header {
          padding-top: 20px;
          padding-bottom: 20px;
        }
      }
    </style>
    <script src="../cdn/shop/t/3/assets/details-disclosureb350.js?v=13653116266235556501713312590"
      defer="defer"></script>
    <script src="../cdn/shop/t/3/assets/details-modal6838.js?v=25581673532751508451713312590" defer="defer"></script>
    <script src="../cdn/shop/t/3/assets/cart-notification4a77.js?v=133508293167896966491713312590"
      defer="defer"></script>
    <script src="../cdn/shop/t/3/assets/search-form5dcf.js?v=133129549252120666541713312590" defer="defer"></script><svg
      xmlns="http://www.w3.org/2000/svg" class="hidden">
      <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z"
          fill="currentColor" />
      </symbol>

      <symbol id="icon-reset" class="icon icon-close" fill="none" viewBox="0 0 18 18" stroke="currentColor">
        <circle r="8.5" cy="9" cx="9" stroke-opacity="0.2" />
        <path d="M6.82972 6.82915L1.17193 1.17097" stroke-linecap="round" stroke-linejoin="round"
          transform="translate(5 5)" />
        <path d="M1.22896 6.88502L6.77288 1.11523" stroke-linecap="round" stroke-linejoin="round"
          transform="translate(5 5)" />
      </symbol>

      <symbol id="icon-close" class="icon icon-close" fill="none" viewBox="0 0 18 17">
        <path
          d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
          fill="currentColor">
      </symbol>
    </svg><sticky-header data-sticky-type="on-scroll-up"
      class="header-wrapper color-scheme-2 gradient header-wrapper--border-bottom">
      <header
        class="header header--top-center header--mobile-center page-width drawer-menu header--has-menu header--has-social">

        <header-drawer data-breakpoint="desktop">
          <details id="Details-menu-drawer-container" class="menu-drawer-container">
            <summary class="header__icon header__icon--menu header__icon--summary link focus-inset" aria-label="Menu">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-hamburger"
                  fill="none" viewBox="0 0 18 16">
                  <path
                    d="M1 .5a.5.5 0 100 1h15.71a.5.5 0 000-1H1zM.5 8a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1A.5.5 0 01.5 8zm0 7a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1a.5.5 0 01-.5-.5z"
                    fill="currentColor">
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-close"
                  fill="none" viewBox="0 0 18 17">
                  <path
                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                    fill="currentColor">
                </svg>

              </span>
            </summary>
            <div id="menu-drawer" class="gradient menu-drawer motion-reduce color-scheme-3">
              <div class="menu-drawer__inner-container">
                <div class="menu-drawer__navigation-container">
                  <nav class="menu-drawer__navigation">
                    <ul class="menu-drawer__menu has-submenu list-menu" role="list">
                      <li><a id="HeaderDrawer-home" href="../index.html"
                          class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                          Home
                        </a></li>
                      <li><a id="HeaderDrawer-shop-all" href="all.html"
                          class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                          Shop All
                        </a></li>
                      <li><a id="HeaderDrawer-slings" href="slingbag.html"
                          class="menu-drawer__menu-item list-menu__item link link--text focus-inset menu-drawer__menu-item--active"
                          aria-current="page">
                          Slings
                        </a></li>
                      <li><a id="HeaderDrawer-shoulder-bags" href="shoulder-bag.html"
                          class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                          Shoulder Bags
                        </a></li>
                      <li><a id="HeaderDrawer-totebag" href="totebag.html"
                          class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                          Totebag
                        </a></li>
                      <li><a id="HeaderDrawer-bagpacks" href="backpack.html"
                          class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                          Bagpacks
                        </a></li>
                      <li><a id="HeaderDrawer-wallets" href="wallets.html"
                          class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                          Wallets
                        </a></li>
                      <li><a id="HeaderDrawer-handbag" href="handbags.html"
                          class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                          Handbag
                        </a></li>
                      <li><a id="HeaderDrawer-bags-under-999" href="bags-under-999.html"
                          class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                          Bags Under 999
                        </a></li>
                      <li><a id="HeaderDrawer-track-your-order" href="https://lucienbags.shiprocket.co/"
                          class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                          Track your order
                        </a></li>
                    </ul>
                  </nav>
                  <div class="menu-drawer__utility-links">
                    <div class="menu-drawer__localization header-localization">
                    </div>
                    <ul class="list list-social list-unstyled" role="list">
                      <li class="list-social__item">
                        <a href="https://www.instagram.com/lucienbags/" class="list-social__link link"><svg
                            aria-hidden="true" focusable="false" class="icon icon-instagram" viewBox="0 0 20 20">
                            <path fill="currentColor" fill-rule="evenodd"
                              d="M13.23 3.492c-.84-.037-1.096-.046-3.23-.046-2.144 0-2.39.01-3.238.055-.776.027-1.195.164-1.487.273a2.43 2.43 0 0 0-.912.593 2.486 2.486 0 0 0-.602.922c-.11.282-.238.702-.274 1.486-.046.84-.046 1.095-.046 3.23 0 2.134.01 2.39.046 3.229.004.51.097 1.016.274 1.495.145.365.319.639.602.913.282.282.538.456.92.602.474.176.974.268 1.479.273.848.046 1.103.046 3.238.046 2.134 0 2.39-.01 3.23-.046.784-.036 1.203-.164 1.486-.273.374-.146.648-.329.921-.602.283-.283.447-.548.602-.922.177-.476.27-.979.274-1.486.037-.84.046-1.095.046-3.23 0-2.134-.01-2.39-.055-3.229-.027-.784-.164-1.204-.274-1.495a2.43 2.43 0 0 0-.593-.913 2.604 2.604 0 0 0-.92-.602c-.284-.11-.703-.237-1.488-.273ZM6.697 2.05c.857-.036 1.131-.045 3.302-.045 1.1-.014 2.202.001 3.302.045.664.014 1.321.14 1.943.374a3.968 3.968 0 0 1 1.414.922c.41.397.728.88.93 1.414.23.622.354 1.279.365 1.942C18 7.56 18 7.824 18 10.005c0 2.17-.01 2.444-.046 3.292-.036.858-.173 1.442-.374 1.943-.2.53-.474.976-.92 1.423a3.896 3.896 0 0 1-1.415.922c-.51.191-1.095.337-1.943.374-.857.036-1.122.045-3.302.045-2.171 0-2.445-.009-3.302-.055-.849-.027-1.432-.164-1.943-.364a4.152 4.152 0 0 1-1.414-.922 4.128 4.128 0 0 1-.93-1.423c-.183-.51-.329-1.085-.365-1.943C2.009 12.45 2 12.167 2 10.004c0-2.161 0-2.435.055-3.302.027-.848.164-1.432.365-1.942a4.44 4.44 0 0 1 .92-1.414 4.18 4.18 0 0 1 1.415-.93c.51-.183 1.094-.33 1.943-.366Zm.427 4.806a4.105 4.105 0 1 1 5.805 5.805 4.105 4.105 0 0 1-5.805-5.805Zm1.882 5.371a2.668 2.668 0 1 0 2.042-4.93 2.668 2.668 0 0 0-2.042 4.93Zm5.922-5.942a.958.958 0 1 1-1.355-1.355.958.958 0 0 1 1.355 1.355Z"
                              clip-rule="evenodd" />
                          </svg>
                          <span class="visually-hidden">Instagram</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </details>
        </header-drawer>


        <details-modal class="header__search">
          <details>
            <summary class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle"
              aria-haspopup="dialog" aria-label="Search">
              <span>
                <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
                  <use href="#icon-search">
                </svg>
                <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
                  <use href="#icon-close">
                </svg>
              </span>
            </summary>
            <div class="search-modal modal__content gradient" role="dialog" aria-modal="true" aria-label="Search">
              <div class="modal-overlay"></div>
              <div class="search-modal__content search-modal__content-bottom" tabindex="-1"><predictive-search
                  class="search-modal__form" data-loading-text="Loading...">
                  <form action="https://lucienbags.com/search" method="get" role="search"
                    class="search search-modal__form">
                    <div class="field">
                      <input class="search__input field__input" id="Search-In-Modal-1" type="search" name="q" value=""
                        placeholder="Search" role="combobox" aria-expanded="false" aria-owns="predictive-search-results"
                        aria-controls="predictive-search-results" aria-haspopup="listbox" aria-autocomplete="list"
                        autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false">
                      <label class="field__label" for="Search-In-Modal-1">Search</label>
                      <input type="hidden" name="options[prefix]" value="last">
                      <button type="reset" class="reset__button field__button hidden" aria-label="Clear search term">
                        <svg class="icon icon-close" aria-hidden="true" focusable="false">
                          <use xlink:href="#icon-reset">
                        </svg>
                      </button>
                      <button class="search__button field__button" aria-label="Search">
                        <svg class="icon icon-search" aria-hidden="true" focusable="false">
                          <use href="#icon-search">
                        </svg>
                      </button>
                    </div>
                    <div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>

                      <link
                        href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                        rel="stylesheet" type="text/css" media="all" />

                      <div class="predictive-search__loading-state">
                        <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                          xmlns="http://www.w3.org/2000/svg">
                          <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                        </svg>
                      </div>
                    </div>

                    <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span>
                  </form>
                </predictive-search><button type="button"
                  class="search-modal__close-button modal__close-button link link--text focus-inset" aria-label="Close">
                  <svg class="icon icon-close" aria-hidden="true" focusable="false">
                    <use href="#icon-close">
                  </svg>
                </button>
              </div>
            </div>
          </details>
        </details-modal>
        <a href="../index.html" class="header__heading-link link link--text focus-inset">
          <div class="header__heading-logo-wrapper">

            <img src="../cdn/shop/files/lucien-2-1_1dcbc.png?v=1708598719&amp;width=600" alt="Lucien"
              srcset="//lucienbags.com/cdn/shop/files/lucien-2-1_1dcbc.png?v=1708598719&amp;width=140 140w, //lucienbags.com/cdn/shop/files/lucien-2-1_1dcbc.png?v=1708598719&amp;width=210 210w, //lucienbags.com/cdn/shop/files/lucien-2-1_1dcbc.png?v=1708598719&amp;width=280 280w"
              width="140" height="48.457602339181285" loading="eager" class="header__heading-logo motion-reduce"
              sizes="(max-width: 280px) 50vw, 140px">
          </div>
        </a>
        <div class="header__icons">
          <div class="desktop-localization-wrapper">
          </div>


          <details-modal class="header__search">
            <details>
              <summary class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle"
                aria-haspopup="dialog" aria-label="Search">
                <span>
                  <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
                    <use href="#icon-search">
                  </svg>
                  <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
                    <use href="#icon-close">
                  </svg>
                </span>
              </summary>
              <div class="search-modal modal__content gradient" role="dialog" aria-modal="true" aria-label="Search">
                <div class="modal-overlay"></div>
                <div class="search-modal__content search-modal__content-bottom" tabindex="-1"><predictive-search
                    class="search-modal__form" data-loading-text="Loading...">
                    <form action="https://bintaro.in/search" method="get" role="search"
                      class="search search-modal__form">
                      <div class="field">
                        <input class="search__input field__input" id="Search-In-Modal" type="search" name="q" value=""
                          placeholder="Search" role="combobox" aria-expanded="false"
                          aria-owns="predictive-search-results" aria-controls="predictive-search-results"
                          aria-haspopup="listbox" aria-autocomplete="list" autocorrect="off" autocomplete="off"
                          autocapitalize="off" spellcheck="false">
                        <label class="field__label" for="Search-In-Modal">Search</label>
                        <input type="hidden" name="options[prefix]" value="last">
                        <button type="reset" class="reset__button field__button hidden" aria-label="Clear search term">
                          <svg class="icon icon-close" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-reset">
                          </svg>
                        </button>
                        <button class="search__button field__button" aria-label="Search">
                          <svg class="icon icon-search" aria-hidden="true" focusable="false">
                            <use href="#icon-search">
                          </svg>
                        </button>
                      </div>
                      <div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>

                        <link
                          href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                          rel="stylesheet" type="text/css" media="all" />

                        <div class="predictive-search__loading-state">
                          <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                          </svg>
                        </div>
                      </div>

                      <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span>
                    </form>
                  </predictive-search><button type="button"
                    class="search-modal__close-button modal__close-button link link--text focus-inset"
                    aria-label="Close">
                    <svg class="icon icon-close" aria-hidden="true" focusable="false">
                      <use href="#icon-close">
                    </svg>
                  </button>
                </div>
              </div>
            </details>
          </details-modal>

          <a href="../cart.html" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble"><svg
              class="icon icon-cart-empty" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 40 40" fill="none">
              <path
                d="m15.75 11.8h-3.16l-.77 11.6a5 5 0 0 0 4.99 5.34h7.38a5 5 0 0 0 4.99-5.33l-.78-11.61zm0 1h-2.22l-.71 10.67a4 4 0 0 0 3.99 4.27h7.38a4 4 0 0 0 4-4.27l-.72-10.67h-2.22v.63a4.75 4.75 0 1 1 -9.5 0zm8.5 0h-7.5v.63a3.75 3.75 0 1 0 7.5 0z"
                fill="currentColor" fill-rule="evenodd" />
            </svg>
            <span class="visually-hidden">Cart</span></a>
        </div>
      </header>
    </sticky-header>

    <cart-notification>
      <div class="cart-notification-wrapper">
        <div id="cart-notification" class="cart-notification focus-inset color-scheme-2 gradient" aria-modal="true"
          aria-label="Item added to your cart" role="dialog" tabindex="-1">
          <div class="cart-notification__header">
            <h2 class="cart-notification__heading caption-large text-body"><svg class="icon icon-checkmark"
                aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 9" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M11.35.643a.5.5 0 01.006.707l-6.77 6.886a.5.5 0 01-.719-.006L.638 4.845a.5.5 0 11.724-.69l2.872 3.011 6.41-6.517a.5.5 0 01.707-.006h-.001z"
                  fill="currentColor" />
              </svg>
              Item added to your cart
            </h2>
            <button type="button" class="cart-notification__close modal__close-button link link--text focus-inset"
              aria-label="Close">
              <svg class="icon icon-close" aria-hidden="true" focusable="false">
                <use href="#icon-close">
              </svg>
            </button>
          </div>
          <div id="cart-notification-product" class="cart-notification-product"></div>
          <div class="cart-notification__links">
            <a href="../cart.html" id="cart-notification-button"
              class="button button--secondary button--full-width">View cart</a>
            <form action="https://lucienbags.com/cart" method="post" id="cart-notification-form">
              <!-- <button class="button button--primary button--full-width" name="checkout">
            Check out
          </button> -->

              <div class="gokwik-checkout">
                <button type='button' class="button disabled" disabled onclick="onCheckoutClick(this)">
                  <span class="btn-text">
                    <span>Checkout</span>
                    <span></span>
                  </span>
                  <span class="pay-opt-icon">
                    <!-- <img src="https://cdn.gokwik.co/v4/images/upi-icons.svg"> -->
                    <!-- <img src="https://cdn.gokwik.co/v4/images/right-arrow.svg"> -->

                  </span>
                  <div style="display:none" class="addloadr" id="btn-loader">
                    <div class="cir-loader">Loading..</div>
                  </div>
                </button>
              </div>



            </form>
            <button type="button" class="link button-label">Continue shopping</button>
          </div>
        </div>
      </div>
    </cart-notification>
    <style data-shopify>
      .cart-notification {
        display: none;
      }
    </style>


    <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Lucien",
    
      "logo": "https:\/\/lucienbags.com\/cdn\/shop\/files\/lucien-2-1_1dcbc.png?v=1708598719\u0026width=500",
    
    "sameAs": [
      "",
      "",
      "",
      "slingbag.html\/\/www.instagram.com\/lucienbags\/",
      "",
      "",
      "",
      "",
      ""
    ],
    "url": "https:\/\/lucienbags.com"
  }
</script>
  </div>
  <!-- END sections: header-group -->

  <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
    <div id="shopify-section-template--15333411520596__banner" class="shopify-section section">
      <link href="../cdn/shop/t/3/assets/component-collection-hero1a16.css?v=125511329265726850081713312590"
        rel="stylesheet" type="text/css" media="all" />
      <style data-shopify>
        @media screen and (max-width: 749px) {
          .collection-hero--with-image .collection-hero__inner {
            padding-bottom: calc(4px + 2rem);
          }
        }
      </style>
      <div class="collection-hero color-scheme-1 gradient">
        <div class="collection-hero__inner page-width  scroll-trigger animate--fade-in">
          <div class="collection-hero__text-wrapper">
            <h1 class="collection-hero__title">
              <span class="visually-hidden">Collection: </span>Slingbag
            </h1>
            <div class="collection-hero__description rte"></div>
          </div>
        </div>
      </div>


    </div>
    <div id="shopify-section-template--15333411520596__product-grid" class="shopify-section section">
      <link href="../cdn/shop/t/3/assets/template-collectiona6a3.css?v=58558206033505836701713312590" rel="stylesheet"
        type="text/css" media="all" />
      <link href="../cdn/shop/t/3/assets/component-carddc96.css?v=170127402091165654191713312590" rel="stylesheet"
        type="text/css" media="all" />
      <link href="../cdn/shop/t/3/assets/component-pricef983.css?v=70172745017360139101713312590" rel="stylesheet"
        type="text/css" media="all" />

      <link href="../cdn/shop/t/3/assets/quick-adde730.css?v=167457951211641553491713312590" rel="stylesheet"
        type="text/css" media="all" />
      <script src="../cdn/shop/t/3/assets/quick-add5332.js?v=53942799839994596201713312590" defer="defer"></script>
      <script src="../cdn/shop/t/3/assets/product-form349e.js?v=133081758708377679181713312590" defer="defer"></script>
      <style data-shopify>
        .section-template--15333411520596__product-grid-padding {
          padding-top: 0px;
          padding-bottom: 45px;
        }

        @media screen and (min-width: 750px) {
          .section-template--15333411520596__product-grid-padding {
            padding-top: 0px;
            padding-bottom: 60px;
          }
        }
      </style>
      <div class="section-template--15333411520596__product-grid-padding gradient color-scheme-1">
        <div class="">
          <link href="../cdn/shop/t/3/assets/component-facetseee9.css?v=58939960381279492111713312590" rel="stylesheet"
            type="text/css" media="all" />
          <script src="../cdn/shop/t/3/assets/facetsc890.js?v=101165364661030721481713312590" defer="defer"></script>
          <aside aria-labelledby="verticalTitle" class="facets-wrapper page-width" id="main-collection-filters"
            data-id="template--15333411520596__product-grid">


            <link href="../cdn/shop/t/3/assets/component-show-moreeb91.css?v=139536189637226996221713312590"
              rel="stylesheet" type="text/css" media="all" />
            <link href="../cdn/shop/t/3/assets/component-visual-display87ad.css?v=55189007514267274771713312590"
              rel="stylesheet" type="text/css" media="all" />
            <div class="facets-container scroll-trigger animate--fade-in"><facet-filters-form class="facets small-hide">
                <form id="FacetFiltersForm" class="facets__form">

                  <div id="FacetsWrapperDesktop" class="facets__wrapper">
                    <h2 class="facets__heading caption-large text-body" id="verticalTitle" tabindex="-1">
                      Filter:
                    </h2>
                    <script src="../cdn/shop/t/3/assets/show-moref626.js?v=135784227224860024771713312590"
                      defer="defer"></script>




                    <details id="Details-filter.v.availability-template--15333411520596__product-grid"
                      class="disclosure-has-popup facets__disclosure js-filter" data-index="1">
                      <summary class="facets__summary caption-large focus-offset"
                        aria-label="Availability (0 selected)">
                        <div>
                          <span class="facets__summary-label">Availability
                          </span><svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                              fill="currentColor">
                          </svg>

                        </div>
                      </summary>
                      <div id="Facet-1-template--15333411520596__product-grid" class="parent-display facets__display">
                        <div class="facets__header">
                          <div>
                            <span class="facets__selected no-js-hidden">0 selected</span>
                          </div>
                          <facet-remove>
                            <a href="slingbag.html" class="facets__reset link underlined-link">
                              Reset
                            </a>
                          </facet-remove>
                        </div>
                        <fieldset class="facets-wrap parent-wrap ">
                          <legend class="visually-hidden">Availability</legend>
                          <ul class="facets-layout-list facets__list list-unstyled no-js-hidden" role="list">

                            <li class="list-menu__item facets__item">
                              <label for="Filter-filter.v.availability-1" class="facets__label facet-checkbox">
                                <input type="checkbox" name="filter.v.availability" value="1"
                                  id="Filter-filter.v.availability-1">


                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true"
                                  focusable="false">
                                  <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1">
                                  </rect>
                                </svg>

                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>


                                <span class="facet-checkbox__text" aria-hidden="true">In stock (92)</span>
                                <span class="visually-hidden">In stock (92 products)</span>
                              </label>
                            </li>

                            <li class="list-menu__item facets__item">
                              <label for="Filter-filter.v.availability-2" class="facets__label facet-checkbox">
                                <input type="checkbox" name="filter.v.availability" value="0"
                                  id="Filter-filter.v.availability-2">


                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true"
                                  focusable="false">
                                  <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1">
                                  </rect>
                                </svg>

                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>


                                <span class="facet-checkbox__text" aria-hidden="true">Out of stock (38)</span>
                                <span class="visually-hidden">Out of stock (38 products)</span>
                              </label>
                            </li>
                          </ul>

                          <ul class=" facets__list no-js-list list-unstyled no-js" role="list">
                            <li class="list-menu__item facets__item">
                              <label for="Filter-filter.v.availability-1-no-js" class="facet-checkbox">
                                <input type="checkbox" name="filter.v.availability" value="1"
                                  id="Filter-filter.v.availability-1-no-js">

                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true"
                                  focusable="false">
                                  <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1">
                                  </rect>
                                </svg>

                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <span aria-hidden="true">In stock (92)</span>
                                <span class="visually-hidden">In stock (92 products)</span>
                              </label>
                            </li>
                            <li class="list-menu__item facets__item">
                              <label for="Filter-filter.v.availability-2-no-js" class="facet-checkbox">
                                <input type="checkbox" name="filter.v.availability" value="0"
                                  id="Filter-filter.v.availability-2-no-js">

                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true"
                                  focusable="false">
                                  <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1">
                                  </rect>
                                </svg>

                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <span aria-hidden="true">Out of stock (38)</span>
                                <span class="visually-hidden">Out of stock (38 products)</span>
                              </label>
                            </li>
                          </ul>
                        </fieldset>
                      </div>
                    </details>





                    <details id="Details-filter.v.price-template--15333411520596__product-grid"
                      class="disclosure-has-popup facets__disclosure js-filter" data-index="2">
                      <summary class="facets__summary caption-large focus-offset">
                        <div>
                          <span>Price</span>
                          <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                              fill="currentColor">
                          </svg>

                        </div>
                      </summary>
                      <div id="Facet-2-template--15333411520596__product-grid" class="facets__display">
                        <div class="facets__header"><span class="facets__selected">The highest price is Rs.
                            6,699.00</span><facet-remove>
                            <a href="slingbag.html" class="facets__reset link underlined-link">
                              Reset
                            </a>
                          </facet-remove></div>
                        <price-range class="facets__price">
                          <span class="field-currency">₹</span>
                          <div class="field">
                            <input class="field__input" name="filter.v.price.gte" id="Filter-Price-GTE" type="number"
                              placeholder="0" min="0" max="6699.00">
                            <label class="field__label" for="Filter-Price-GTE">From</label>
                          </div><span class="field-currency">₹</span>
                          <div class="field">
                            <input class="field__input" name="filter.v.price.lte" id="Filter-Price-LTE" type="number"
                              min="0" placeholder="6699.00" max="6699.00">
                            <label class="field__label" for="Filter-Price-LTE">To</label>
                          </div>
                        </price-range>
                      </div>
                    </details>

                    <noscript>
                      <button type="submit" class="facets__button-no-js button button--secondary">
                        Filter
                      </button>
                    </noscript>
                  </div>

                  <div class="active-facets active-facets-desktop">


                    <facet-remove class="active-facets__button-wrapper">
                      <a href="slingbag.html" class="active-facets__button-remove underlined-link">
                        <span>Remove all</span>
                      </a>
                    </facet-remove>
                  </div>



                  <div class="facet-filters sorting caption">
                    <div class="facet-filters__field">
                      <h2 class="facet-filters__label caption-large text-body">
                        <label for="SortBy">Sort by:</label>
                      </h2>
                      <div class="select"><select name="sort_by"
                          class="facet-filters__sort select__select caption-large" id="SortBy"
                          aria-describedby="a11y-refresh-page-message">
                          <option value="manual">
                            Featured
                          </option>
                          <option value="best-selling" selected="selected">
                            Best selling
                          </option>
                          <option value="title-ascending">
                            Alphabetically, A-Z
                          </option>
                          <option value="title-descending">
                            Alphabetically, Z-A
                          </option>
                          <option value="price-ascending">
                            Price, low to high
                          </option>
                          <option value="price-descending">
                            Price, high to low
                          </option>
                          <option value="created-ascending">
                            Date, old to new
                          </option>
                          <option value="created-descending">
                            Date, new to old
                          </option>
                        </select>
                        <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                            fill="currentColor">
                        </svg>

                      </div>
                    </div>

                    <noscript>
                      <button type="submit" class="facets__button-no-js button button--secondary">
                        Sort
                      </button>
                    </noscript>
                  </div>
                  <div class="product-count light" role="status">
                    <h2 class="product-count__text text-body">
                      <span id="ProductCountDesktop">112 products
                      </span>
                    </h2>

                    <link
                      href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                      rel="stylesheet" type="text/css" media="all" />

                    <div class="loading__spinner hidden">
                      <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                      </svg>
                    </div>
                  </div>
                </form>
              </facet-filters-form>


              <menu-drawer class="mobile-facets__wrapper medium-hide large-up-hide" data-breakpoint="mobile">
                <details class="mobile-facets__disclosure disclosure-has-popup">
                  <summary class="mobile-facets__open-wrapper focus-offset">
                    <span class="mobile-facets__open">
                      <svg class="icon icon-filter" aria-hidden="true" focusable="false"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
                        <path fill-rule="evenodd"
                          d="M4.833 6.5a1.667 1.667 0 1 1 3.334 0 1.667 1.667 0 0 1-3.334 0ZM4.05 7H2.5a.5.5 0 0 1 0-1h1.55a2.5 2.5 0 0 1 4.9 0h8.55a.5.5 0 0 1 0 1H8.95a2.5 2.5 0 0 1-4.9 0Zm11.117 6.5a1.667 1.667 0 1 0-3.334 0 1.667 1.667 0 0 0 3.334 0ZM13.5 11a2.5 2.5 0 0 1 2.45 2h1.55a.5.5 0 0 1 0 1h-1.55a2.5 2.5 0 0 1-4.9 0H2.5a.5.5 0 0 1 0-1h8.55a2.5 2.5 0 0 1 2.45-2Z"
                          fill="currentColor" />
                      </svg>

                      <span class="mobile-facets__open-label button-label medium-hide large-up-hide">Filter and sort
                      </span>
                      <span class="mobile-facets__open-label button-label small-hide">Filter
                      </span>
                    </span>
                    <span tabindex="0" class="mobile-facets__close mobile-facets__close--no-js"><svg
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-close"
                        fill="none" viewBox="0 0 18 17">
                        <path
                          d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                          fill="currentColor">
                      </svg>
                    </span>
                  </summary>
                  <facet-filters-form>
                    <form id="FacetFiltersFormMobile" class="mobile-facets">
                      <div class="mobile-facets__inner gradient">
                        <div class="mobile-facets__header">
                          <div class="mobile-facets__header-inner">
                            <h2 class="mobile-facets__heading medium-hide large-up-hide">Filter and sort
                            </h2>
                            <h2 class="mobile-facets__heading small-hide">Filter
                            </h2>
                            <p class="mobile-facets__count">112 products
                            </p>
                          </div>
                        </div>
                        <div id="FacetsWrapperMobile" class="mobile-facets__main has-submenu gradient">


                          <details id="Details-Mobile-filter.v.availability-template--15333411520596__product-grid"
                            class="mobile-facets__details js-filter" data-index="mobile-1">
                            <summary class="mobile-facets__summary focus-inset">
                              <div>
                                <span>Availability</span>
                                <span class="mobile-facets__arrow no-js-hidden"><svg viewBox="0 0 14 10" fill="none"
                                    aria-hidden="true" focusable="false" class="icon icon-arrow"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                                      fill="currentColor">
                                  </svg>
                                </span>
                                <noscript><svg aria-hidden="true" focusable="false" class="icon icon-caret"
                                    viewBox="0 0 10 6">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                                      fill="currentColor">
                                  </svg>
                                </noscript>
                              </div>
                            </summary>
                            <div id="FacetMobile-1-template--15333411520596__product-grid"
                              class="mobile-facets__submenu gradient">
                              <button class="mobile-facets__close-button link link--text focus-inset"
                                aria-expanded="true" type="button">
                                <svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false"
                                  class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                                    fill="currentColor">
                                </svg>

                                <span>Availability</span></button>
                              <ul class="facets-layout-list mobile-facets__list list-unstyled" role="list">

                                <li class="mobile-facets__item list-menu__item">
                                  <label for="Filter-filter.v.availability-mobile-1"
                                    class="facets__label mobile-facets__label">
                                    <input class="mobile-facets__checkbox" type="checkbox" name="filter.v.availability"
                                      value="1" id="Filter-filter.v.availability-mobile-1">


                                    <span class="mobile-facets__highlight"></span>

                                    <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true"
                                      focusable="false">
                                      <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1">
                                      </rect>
                                    </svg>

                                    <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                      viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                        stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>


                                    <span class="facet-checkbox__text" aria-hidden="true">In stock (92)</span>
                                    <span class="visually-hidden">In stock (92 products)</span>
                                  </label>
                                </li>

                                <li class="mobile-facets__item list-menu__item">
                                  <label for="Filter-filter.v.availability-mobile-2"
                                    class="facets__label mobile-facets__label">
                                    <input class="mobile-facets__checkbox" type="checkbox" name="filter.v.availability"
                                      value="0" id="Filter-filter.v.availability-mobile-2">


                                    <span class="mobile-facets__highlight"></span>

                                    <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true"
                                      focusable="false">
                                      <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1">
                                      </rect>
                                    </svg>

                                    <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                      viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                        stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>


                                    <span class="facet-checkbox__text" aria-hidden="true">Out of stock (38)</span>
                                    <span class="visually-hidden">Out of stock (38 products)</span>
                                  </label>
                                </li>
                              </ul>

                              <div class="no-js-hidden mobile-facets__footer gradient">
                                <facet-remove class="mobile-facets__clear-wrapper">
                                  <a href="slingbag.html" class="mobile-facets__clear underlined-link">Clear</a>
                                </facet-remove>
                                <button type="button" class="no-js-hidden button button--primary"
                                  onclick="this.closest('.mobile-facets__wrapper').querySelector('summary').click()">
                                  Apply
                                </button>
                                <noscript><button class="button button--primary">
                                    Apply
                                  </button></noscript>
                              </div>
                            </div>
                          </details>





                          <details id="Details-Mobile-filter.v.price-template--15333411520596__product-grid"
                            class="mobile-facets__details js-filter" data-index="mobile-2">
                            <summary class="mobile-facets__summary focus-inset">
                              <div>
                                <span>Price</span>
                                <span class="mobile-facets__arrow no-js-hidden"><svg viewBox="0 0 14 10" fill="none"
                                    aria-hidden="true" focusable="false" class="icon icon-arrow"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                                      fill="currentColor">
                                  </svg>
                                </span>
                                <noscript><svg aria-hidden="true" focusable="false" class="icon icon-caret"
                                    viewBox="0 0 10 6">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                                      fill="currentColor">
                                  </svg>
                                </noscript>
                              </div>
                            </summary>
                            <div id="FacetMobile-2-template--15333411520596__product-grid"
                              class="mobile-facets__submenu gradient">
                              <button class="mobile-facets__close-button link link--text focus-inset"
                                aria-expanded="true" type="button">
                                <svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false"
                                  class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                                    fill="currentColor">
                                </svg>

                                Price
                              </button>
                              <p class="mobile-facets__info">
                                The highest price is Rs. 6,699.00
                              </p>

                              <price-range class="facets__price">
                                <span class="field-currency">₹</span>
                                <div class="field">
                                  <input class="field__input" name="filter.v.price.gte" id="Mobile-Filter-Price-GTE"
                                    type="number" placeholder="0" min="0" inputmode="decimal" max="6699.00">
                                  <label class="field__label" for="Mobile-Filter-Price-GTE">From</label>
                                </div>

                                <span class="field-currency">₹</span>
                                <div class="field">
                                  <input class="field__input" name="filter.v.price.lte" id="Mobile-Filter-Price-LTE"
                                    type="number" min="0" inputmode="decimal" placeholder="6699.00" max="6699.00">
                                  <label class="field__label" for="Mobile-Filter-Price-LTE">To</label>
                                </div>
                              </price-range>
                              <div class="no-js-hidden mobile-facets__footer">
                                <facet-remove class="mobile-facets__clear-wrapper">
                                  <a href="slingbag.html" class="mobile-facets__clear underlined-link">Clear</a>
                                </facet-remove>
                                <button type="button" class="no-js-hidden button button--primary"
                                  onclick="this.closest('.mobile-facets__wrapper').querySelector('summary').click()">
                                  Apply
                                </button>
                                <noscript><button class="button button--primary">
                                    Apply
                                  </button></noscript>
                              </div>
                            </div>
                          </details>

                          <div id="Details-Mobile-SortBy-template--15333411520596__product-grid"
                            class="mobile-facets__details js-filter" data-index="mobile-">
                            <div class="mobile-facets__summary">
                              <div class="mobile-facets__sort">
                                <label for="SortBy-mobile">Sort by:</label>
                                <div class="select">
                                  <select name="sort_by" class="select__select" id="SortBy-mobile"
                                    aria-describedby="a11y-refresh-page-message">
                                    <option value="manual">
                                      Featured
                                    </option>
                                    <option value="best-selling" selected="selected">
                                      Best selling
                                    </option>
                                    <option value="title-ascending">
                                      Alphabetically, A-Z
                                    </option>
                                    <option value="title-descending">
                                      Alphabetically, Z-A
                                    </option>
                                    <option value="price-ascending">
                                      Price, low to high
                                    </option>
                                    <option value="price-descending">
                                      Price, high to low
                                    </option>
                                    <option value="created-ascending">
                                      Date, old to new
                                    </option>
                                    <option value="created-descending">
                                      Date, new to old
                                    </option>
                                  </select>
                                  <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                                      fill="currentColor">
                                  </svg>

                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mobile-facets__footer">
                            <facet-remove class="mobile-facets__clear-wrapper">
                              <a href="slingbag.html" class="mobile-facets__clear underlined-link">Remove all</a>
                            </facet-remove>
                            <button type="button" class="no-js-hidden button button--primary"
                              onclick="this.closest('.mobile-facets__wrapper').querySelector('summary').click()">
                              Apply
                            </button>
                            <noscript><button class="button button--primary">Apply</button></noscript>
                          </div>
                        </div>


                      </div>
                    </form>
                  </facet-filters-form>
                </details>
              </menu-drawer>

              <div class="active-facets active-facets-mobile medium-hide large-up-hide"><facet-remove
                  class="active-facets__button-wrapper">
                  <a href="slingbag.html" class="active-facets__button-remove underlined-link">
                    <span>Remove all</span>
                  </a>
                </facet-remove>
              </div>

              <div class="product-count light medium-hide large-up-hide" role="status">
                <h2 class="product-count__text text-body">
                  <span id="ProductCount">112 products
                  </span>
                </h2>

                <link href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                  rel="stylesheet" type="text/css" media="all" />

                <div class="loading__spinner hidden">
                  <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                  </svg>
                </div>
              </div>
            </div>

          </aside>
          <div class="product-grid-container scroll-trigger animate--slide-in" id="ProductGridContainer" data-cascade>
            <div class="collection page-width">
              <div class="loading-overlay gradient"></div>
              <ul id="product-grid" data-id="template--15333411520596__product-grid" class="
                grid product-grid grid--2-col-tablet-down
                grid--4-col-desktop
              ">
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 1;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_9039_7ef216df-58a9-4a1c-b07d-3499f577150e.jpg?v=1715284988&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_9039_7ef216df-58a9-4a1c-b07d-3499f577150e.jpg?v=1715284988&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_9039_7ef216df-58a9-4a1c-b07d-3499f577150e.jpg?v=1715284988&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_9039_7ef216df-58a9-4a1c-b07d-3499f577150e.jpg?v=1715284988 612w
                " src="../cdn/shop/files/IMG_9039_7ef216df-58a9-4a1c-b07d-3499f577150e527a.jpg?v=1715284988&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien Drip Slingbag" class="motion-reduce" width="612" height="612">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_9040_85cf7dc5-17cc-488b-bf51-2180b92fe986.jpg?v=1715284988&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_9040_85cf7dc5-17cc-488b-bf51-2180b92fe986.jpg?v=1715284988&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_9040_85cf7dc5-17cc-488b-bf51-2180b92fe986.jpg?v=1715284988&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_9040_85cf7dc5-17cc-488b-bf51-2180b92fe986.jpg?v=1715284988 612w
                  " src="../cdn/shop/files/IMG_9040_85cf7dc5-17cc-488b-bf51-2180b92fe986527a.jpg?v=1715284988&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="612" height="612">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-drip-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6984157233236"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6984157233236 NoMediaStandardBadge-template--15333411520596__product-grid-6984157233236">
                                Lucien Drip Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6984157233236"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6984157233236">
                            <a href="../products/lucien-drip-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6984157233236"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6984157233236 Badge-template--15333411520596__product-grid-6984157233236">
                              Lucien Drip Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class=" price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    From Rs. 699.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,499.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    From Rs. 699.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6984157233236">
                            <button id="quick-add-template--15333411520596__product-grid6984157233236-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6984157233236-submit title-template--15333411520596__product-grid-6984157233236"
                              data-product-url="/products/lucien-drip-slingbag">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6984157233236" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Lucien Drip Slingbag" aria-modal="true"
                              class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6984157233236" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6984157233236" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6984157233236"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 2;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage16_784df378-cb9b-4474-8147-a2478d741aa1.jpg?v=1711643866&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage16_784df378-cb9b-4474-8147-a2478d741aa1.jpg?v=1711643866&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage16_784df378-cb9b-4474-8147-a2478d741aa1.jpg?v=1711643866&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage16_784df378-cb9b-4474-8147-a2478d741aa1.jpg?v=1711643866&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage16_784df378-cb9b-4474-8147-a2478d741aa1.jpg?v=1711643866 750w
                " src="../cdn/shop/files/JPEGimage16_784df378-cb9b-4474-8147-a2478d741aa11adc.jpg?v=1711643866&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien Half Moon Crossbody Slingbag" class="motion-reduce" width="750" height="750">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage26_0b252c81-4c23-4522-8da1-2b53cc4768a2.jpg?v=1711643866&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage26_0b252c81-4c23-4522-8da1-2b53cc4768a2.jpg?v=1711643866 192w
                  " src="../cdn/shop/files/JPEGimage26_0b252c81-4c23-4522-8da1-2b53cc4768a21adc.jpg?v=1711643866&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="192" height="263">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-cross-sling.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6998747021396"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6998747021396 NoMediaStandardBadge-template--15333411520596__product-grid-6998747021396">
                                Lucien Half Moon Crossbody Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6998747021396"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6998747021396">
                            <a href="../products/lucien-cross-sling.html"
                              id="CardLink-template--15333411520596__product-grid-6998747021396"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6998747021396 Badge-template--15333411520596__product-grid-6998747021396">
                              Lucien Half Moon Crossbody Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    From Rs. 699.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,299.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    From Rs. 699.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6998747021396">
                            <button id="quick-add-template--15333411520596__product-grid6998747021396-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6998747021396-submit title-template--15333411520596__product-grid-6998747021396"
                              data-product-url="/products/lucien-cross-sling">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6998747021396" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Lucien Half Moon Crossbody Slingbag"
                              aria-modal="true" class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6998747021396" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6998747021396" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6998747021396"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 3;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_6935_d3fcc677-2814-4b51-a669-9cdd5687429a.jpg?v=1710351007&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_6935_d3fcc677-2814-4b51-a669-9cdd5687429a.jpg?v=1710351007&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_6935_d3fcc677-2814-4b51-a669-9cdd5687429a.jpg?v=1710351007&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_6935_d3fcc677-2814-4b51-a669-9cdd5687429a.jpg?v=1710351007&width=720 720w,//lucienbags.com/cdn/shop/files/IMG_6935_d3fcc677-2814-4b51-a669-9cdd5687429a.jpg?v=1710351007 800w
                " src="../cdn/shop/files/IMG_6935_d3fcc677-2814-4b51-a669-9cdd5687429a919f.jpg?v=1710351007&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien Celestial Slingbag" class="motion-reduce" loading="lazy" width="800"
                              height="800">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_6957.jpg?v=1710351007&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_6957.jpg?v=1710351007&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_6957.jpg?v=1710351007&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_6957.jpg?v=1710351007&width=720 720w,//lucienbags.com/cdn/shop/files/IMG_6957.jpg?v=1710351007&width=940 940w,//lucienbags.com/cdn/shop/files/IMG_6957.jpg?v=1710351007&width=1066 1066w,//lucienbags.com/cdn/shop/files/IMG_6957.jpg?v=1710351007 1179w
                  " src="../cdn/shop/files/IMG_6957919f.jpg?v=1710351007&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="1179" height="1025">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-celestial-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6976111312980"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6976111312980 NoMediaStandardBadge-template--15333411520596__product-grid-6976111312980">
                                Lucien Celestial Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6976111312980"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6976111312980">
                            <a href="../products/lucien-celestial-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6976111312980"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6976111312980 Badge-template--15333411520596__product-grid-6976111312980">
                              Lucien Celestial Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 1,199.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,499.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 1,199.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6976111312980">
                            <button id="quick-add-template--15333411520596__product-grid6976111312980-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6976111312980-submit title-template--15333411520596__product-grid-6976111312980"
                              data-product-url="/products/lucien-celestial-slingbag">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6976111312980" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Lucien Celestial Slingbag"
                              aria-modal="true" class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6976111312980" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6976111312980" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6976111312980"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 4;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_4630.jpg?v=1710530792&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_4630.jpg?v=1710530792&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_4630.jpg?v=1710530792&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_4630.jpg?v=1710530792&width=720 720w,//lucienbags.com/cdn/shop/files/IMG_4630.jpg?v=1710530792&width=940 940w,//lucienbags.com/cdn/shop/files/IMG_4630.jpg?v=1710530792&width=1066 1066w,//lucienbags.com/cdn/shop/files/IMG_4630.jpg?v=1710530792 1124w
                " src="../cdn/shop/files/IMG_4630dcbd.jpg?v=1710530792&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien Rhinestone slingbag" class="motion-reduce" loading="lazy" width="1124"
                              height="1113">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_4631.jpg?v=1710530792&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_4631.jpg?v=1710530792&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_4631.jpg?v=1710530792&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_4631.jpg?v=1710530792&width=720 720w,//lucienbags.com/cdn/shop/files/IMG_4631.jpg?v=1710530792&width=940 940w,//lucienbags.com/cdn/shop/files/IMG_4631.jpg?v=1710530792&width=1066 1066w,//lucienbags.com/cdn/shop/files/IMG_4631.jpg?v=1710530792 1125w
                  " src="../cdn/shop/files/IMG_4631dcbd.jpg?v=1710530792&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="1125" height="1122">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-rhinestone-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6978108424276"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6978108424276 NoMediaStandardBadge-template--15333411520596__product-grid-6978108424276">
                                Lucien Rhinestone slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6978108424276"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6978108424276">
                            <a href="../products/lucien-rhinestone-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6978108424276"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6978108424276 Badge-template--15333411520596__product-grid-6978108424276">
                              Lucien Rhinestone slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 999.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,199.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 999.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><product-form
                            data-section-id="template--15333411520596__product-grid">
                            <form method="post" action="https://lucienbags.com/cart/add"
                              id="quick-add-template--15333411520596__product-grid6978108424276" accept-charset="UTF-8"
                              class="form" enctype="multipart/form-data" novalidate="novalidate"
                              data-type="add-to-cart-form"><input type="hidden" name="form_type"
                                value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden"
                                name="id" value="40537754828884" class="product-variant-id">
                              <button id="quick-add-template--15333411520596__product-grid6978108424276-submit"
                                type="submit" name="add"
                                class="quick-add__submit button button--full-width button--secondary"
                                aria-haspopup="dialog"
                                aria-labelledby="quick-add-template--15333411520596__product-grid6978108424276-submit title-template--15333411520596__product-grid-6978108424276"
                                aria-live="polite" data-sold-out-message="true">
                                <span>Add to cart
                                </span>
                                <span class="sold-out-message hidden">
                                  Sold out
                                </span>

                                <link
                                  href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                  rel="stylesheet" type="text/css" media="all" />

                                <div class="loading__spinner hidden">
                                  <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                  </svg>
                                </div>
                              </button><input type="hidden" name="product-id" value="6978108424276" /><input
                                type="hidden" name="section-id" value="template--15333411520596__product-grid" />
                            </form>
                          </product-form></div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6978108424276"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 5;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/9A6F64BB-26F6-4F71-86C6-0952CDE6F22B.jpg?v=1710054010&width=165 165w,//lucienbags.com/cdn/shop/files/9A6F64BB-26F6-4F71-86C6-0952CDE6F22B.jpg?v=1710054010&width=360 360w,//lucienbags.com/cdn/shop/files/9A6F64BB-26F6-4F71-86C6-0952CDE6F22B.jpg?v=1710054010&width=533 533w,//lucienbags.com/cdn/shop/files/9A6F64BB-26F6-4F71-86C6-0952CDE6F22B.jpg?v=1710054010&width=720 720w,//lucienbags.com/cdn/shop/files/9A6F64BB-26F6-4F71-86C6-0952CDE6F22B.jpg?v=1710054010 720w
                " src="../cdn/shop/files/9A6F64BB-26F6-4F71-86C6-0952CDE6F22B46d8.jpg?v=1710054010&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien Caddy slingbag" class="motion-reduce" loading="lazy" width="720" height="720">

                            <img srcset="//lucienbags.com/cdn/shop/files/068FC3BB-5320-45E0-843F-EBB8CE4AFF2C.jpg?v=1710054010&width=165 165w,//lucienbags.com/cdn/shop/files/068FC3BB-5320-45E0-843F-EBB8CE4AFF2C.jpg?v=1710054010&width=360 360w,//lucienbags.com/cdn/shop/files/068FC3BB-5320-45E0-843F-EBB8CE4AFF2C.jpg?v=1710054010&width=533 533w,//lucienbags.com/cdn/shop/files/068FC3BB-5320-45E0-843F-EBB8CE4AFF2C.jpg?v=1710054010&width=720 720w,//lucienbags.com/cdn/shop/files/068FC3BB-5320-45E0-843F-EBB8CE4AFF2C.jpg?v=1710054010 720w
                  " src="../cdn/shop/files/068FC3BB-5320-45E0-843F-EBB8CE4AFF2C46d8.jpg?v=1710054010&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="720" height="720">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-caddy-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6970127941716"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6970127941716 NoMediaStandardBadge-template--15333411520596__product-grid-6970127941716">
                                Lucien Caddy slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6970127941716"
                              class="badge badge--bottom-left color-scheme-1">Sold out</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6970127941716">
                            <a href="../products/lucien-caddy-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6970127941716"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6970127941716 Badge-template--15333411520596__product-grid-6970127941716">
                              Lucien Caddy slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--sold-out">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 1,399.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,399.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 1,399.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6970127941716">
                            <button id="quick-add-template--15333411520596__product-grid6970127941716-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6970127941716-submit title-template--15333411520596__product-grid-6970127941716"
                              data-product-url="/products/lucien-caddy-slingbag">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6970127941716" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Lucien Caddy slingbag" aria-modal="true"
                              class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6970127941716" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6970127941716" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6970127941716"
                            class="badge badge--bottom-left color-scheme-1">Sold out</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 6;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/C0CC6EB2-4E18-4ED9-823C-153095F94CCC.jpg?v=1710054643&width=165 165w,//lucienbags.com/cdn/shop/files/C0CC6EB2-4E18-4ED9-823C-153095F94CCC.jpg?v=1710054643&width=360 360w,//lucienbags.com/cdn/shop/files/C0CC6EB2-4E18-4ED9-823C-153095F94CCC.jpg?v=1710054643&width=533 533w,//lucienbags.com/cdn/shop/files/C0CC6EB2-4E18-4ED9-823C-153095F94CCC.jpg?v=1710054643&width=720 720w,//lucienbags.com/cdn/shop/files/C0CC6EB2-4E18-4ED9-823C-153095F94CCC.jpg?v=1710054643&width=940 940w,//lucienbags.com/cdn/shop/files/C0CC6EB2-4E18-4ED9-823C-153095F94CCC.jpg?v=1710054643&width=1066 1066w,//lucienbags.com/cdn/shop/files/C0CC6EB2-4E18-4ED9-823C-153095F94CCC.jpg?v=1710054643 1200w" src="../cdn/shop/files/C0CC6EB2-4E18-4ED9-823C-153095F94CCCf57d.jpg?v=1710054643&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien Mark Broad belt Slingbag" class="motion-reduce" loading="lazy" width="1200"
                              height="1200">
                            <img srcset="../cdn/shop/files/lucien-2-1_1dcbc.png?v=1715320359&width=165 165w, 1080w
                  " src="../cdn/shop/files/lucien-2-1_1dcbc.png?v=1715320359&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="1080" height="1080">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-mark-broad-belt-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6970127155284"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6970127155284 NoMediaStandardBadge-template--15333411520596__product-grid-6970127155284">
                                Lucien Mark Broad belt Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6970127155284"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6970127155284">
                            <a href="../products/lucien-mark-broad-belt-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6970127155284"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6970127155284 Badge-template--15333411520596__product-grid-6970127155284">
                              Lucien Mark Broad belt Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 1,199.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,499.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 1,199.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6970127155284">
                            <button id="quick-add-template--15333411520596__product-grid6970127155284-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6970127155284-submit title-template--15333411520596__product-grid-6970127155284"
                              data-product-url="/products/lucien-mark-broad-belt-slingbag">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6970127155284" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Lucien Mark Broad belt Slingbag"
                              aria-modal="true" class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6970127155284" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6970127155284" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6970127155284"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 7;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_7736.jpg?v=1713252267&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_7736.jpg?v=1713252267&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_7736.jpg?v=1713252267&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_7736.jpg?v=1713252267&width=720 720w,//lucienbags.com/cdn/shop/files/IMG_7736.jpg?v=1713252267 800w
                " src="../cdn/shop/files/IMG_77361dbc.jpg?v=1713252267&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien Caddy 2.0" class="motion-reduce" loading="lazy" width="800" height="800">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_7737.jpg?v=1713252267&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_7737.jpg?v=1713252267&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_7737.jpg?v=1713252267&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_7737.jpg?v=1713252267&width=720 720w,//lucienbags.com/cdn/shop/files/IMG_7737.jpg?v=1713252267 800w
                  " src="../cdn/shop/files/IMG_77371dbc.jpg?v=1713252267&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="800" height="800">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-swiftpack-sling-bag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-7032510120020"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-7032510120020 NoMediaStandardBadge-template--15333411520596__product-grid-7032510120020">
                                Lucien Caddy 2.0
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-7032510120020"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-7032510120020">
                            <a href="../products/lucien-swiftpack-sling-bag.html"
                              id="CardLink-template--15333411520596__product-grid-7032510120020"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-7032510120020 Badge-template--15333411520596__product-grid-7032510120020">
                              Lucien Caddy 2.0
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    From Rs. 1,199.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,699.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    From Rs. 1,199.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-7032510120020">
                            <button id="quick-add-template--15333411520596__product-grid7032510120020-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid7032510120020-submit title-template--15333411520596__product-grid-7032510120020"
                              data-product-url="/products/lucien-swiftpack-sling-bag">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-7032510120020" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Lucien Caddy 2.0" aria-modal="true"
                              class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-7032510120020" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-7032510120020" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-7032510120020"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 8;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage17_ef7f2c31-5269-42fc-a93f-818bd1e69c77.jpg?v=1713512573&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage17_ef7f2c31-5269-42fc-a93f-818bd1e69c77.jpg?v=1713512573&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage17_ef7f2c31-5269-42fc-a93f-818bd1e69c77.jpg?v=1713512573&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage17_ef7f2c31-5269-42fc-a93f-818bd1e69c77.jpg?v=1713512573&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage17_ef7f2c31-5269-42fc-a93f-818bd1e69c77.jpg?v=1713512573&width=940 940w,//lucienbags.com/cdn/shop/files/JPEGimage17_ef7f2c31-5269-42fc-a93f-818bd1e69c77.jpg?v=1713512573&width=1066 1066w,//lucienbags.com/cdn/shop/files/JPEGimage17_ef7f2c31-5269-42fc-a93f-818bd1e69c77.jpg?v=1713512573 3024w
                " src="../cdn/shop/files/JPEGimage17_ef7f2c31-5269-42fc-a93f-818bd1e69c77d445.jpg?v=1713512573&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Camile Multi Zipper Slingbag" class="motion-reduce" loading="lazy" width="3024"
                              height="4032">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage15_621641f1-94fe-4ac1-b876-a985675cd9cf.jpg?v=1713512573&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage15_621641f1-94fe-4ac1-b876-a985675cd9cf.jpg?v=1713512573&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage15_621641f1-94fe-4ac1-b876-a985675cd9cf.jpg?v=1713512573&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage15_621641f1-94fe-4ac1-b876-a985675cd9cf.jpg?v=1713512573&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage15_621641f1-94fe-4ac1-b876-a985675cd9cf.jpg?v=1713512573&width=940 940w,//lucienbags.com/cdn/shop/files/JPEGimage15_621641f1-94fe-4ac1-b876-a985675cd9cf.jpg?v=1713512573&width=1066 1066w,//lucienbags.com/cdn/shop/files/JPEGimage15_621641f1-94fe-4ac1-b876-a985675cd9cf.jpg?v=1713512573 3024w
                  " src="../cdn/shop/files/JPEGimage15_621641f1-94fe-4ac1-b876-a985675cd9cfd445.jpg?v=1713512573&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="3024" height="4032">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/camile-multi-zipper-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6961497833556"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6961497833556 NoMediaStandardBadge-template--15333411520596__product-grid-6961497833556">
                                Camile Multi Zipper Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6961497833556"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6961497833556">
                            <a href="../products/camile-multi-zipper-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6961497833556"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6961497833556 Badge-template--15333411520596__product-grid-6961497833556">
                              Camile Multi Zipper Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 999.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,499.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 999.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6961497833556">
                            <button id="quick-add-template--15333411520596__product-grid6961497833556-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6961497833556-submit title-template--15333411520596__product-grid-6961497833556"
                              data-product-url="/products/camile-multi-zipper-slingbag">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6961497833556" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Camile Multi Zipper Slingbag"
                              aria-modal="true" class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6961497833556" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6961497833556" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6961497833556"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 9;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage22_181ab42d-44f0-4295-bc29-f24cd63a5da0.jpg?v=1713513515&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage22_181ab42d-44f0-4295-bc29-f24cd63a5da0.jpg?v=1713513515&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage22_181ab42d-44f0-4295-bc29-f24cd63a5da0.jpg?v=1713513515&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage22_181ab42d-44f0-4295-bc29-f24cd63a5da0.jpg?v=1713513515&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage22_181ab42d-44f0-4295-bc29-f24cd63a5da0.jpg?v=1713513515&width=940 940w,//lucienbags.com/cdn/shop/files/JPEGimage22_181ab42d-44f0-4295-bc29-f24cd63a5da0.jpg?v=1713513515&width=1066 1066w,//lucienbags.com/cdn/shop/files/JPEGimage22_181ab42d-44f0-4295-bc29-f24cd63a5da0.jpg?v=1713513515 3024w
                " src="../cdn/shop/files/JPEGimage22_181ab42d-44f0-4295-bc29-f24cd63a5da020c4.jpg?v=1713513515&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien Ally Slingbag" class="motion-reduce" loading="lazy" width="3024"
                              height="4032">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage23_b502542c-fa25-4d81-9304-3815ca97a742.jpg?v=1713513515&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage23_b502542c-fa25-4d81-9304-3815ca97a742.jpg?v=1713513515&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage23_b502542c-fa25-4d81-9304-3815ca97a742.jpg?v=1713513515&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage23_b502542c-fa25-4d81-9304-3815ca97a742.jpg?v=1713513515&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage23_b502542c-fa25-4d81-9304-3815ca97a742.jpg?v=1713513515&width=940 940w,//lucienbags.com/cdn/shop/files/JPEGimage23_b502542c-fa25-4d81-9304-3815ca97a742.jpg?v=1713513515&width=1066 1066w,//lucienbags.com/cdn/shop/files/JPEGimage23_b502542c-fa25-4d81-9304-3815ca97a742.jpg?v=1713513515 3024w
                  " src="../cdn/shop/files/JPEGimage23_b502542c-fa25-4d81-9304-3815ca97a74220c4.jpg?v=1713513515&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="3024" height="4032">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-ally-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6977974665300"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6977974665300 NoMediaStandardBadge-template--15333411520596__product-grid-6977974665300">
                                Lucien Ally Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6977974665300"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6977974665300">
                            <a href="../products/lucien-ally-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6977974665300"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6977974665300 Badge-template--15333411520596__product-grid-6977974665300">
                              Lucien Ally Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 799.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,199.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 799.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6977974665300">
                            <button id="quick-add-template--15333411520596__product-grid6977974665300-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6977974665300-submit title-template--15333411520596__product-grid-6977974665300"
                              data-product-url="/products/lucien-ally-slingbag">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6977974665300" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Lucien Ally Slingbag" aria-modal="true"
                              class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6977974665300" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6977974665300" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6977974665300"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 10;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage190.jpg?v=1709558519&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage190.jpg?v=1709558519&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage190.jpg?v=1709558519&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage190.jpg?v=1709558519&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage190.jpg?v=1709558519&width=940 940w,//lucienbags.com/cdn/shop/files/JPEGimage190.jpg?v=1709558519&width=1066 1066w,//lucienbags.com/cdn/shop/files/JPEGimage190.jpg?v=1709558519 3024w
                " src="../cdn/shop/files/JPEGimage190710f.jpg?v=1709558519&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Julia Slingbag" class="motion-reduce" loading="lazy" width="3024" height="4032">

                            <img srcset="//lucienbags.com/cdn/shop/files/Bag27.png?v=1710769052&width=165 165w,//lucienbags.com/cdn/shop/files/Bag27.png?v=1710769052&width=360 360w,//lucienbags.com/cdn/shop/files/Bag27.png?v=1710769052&width=533 533w,//lucienbags.com/cdn/shop/files/Bag27.png?v=1710769052&width=720 720w,//lucienbags.com/cdn/shop/files/Bag27.png?v=1710769052 810w
                  " src="../cdn/shop/files/Bag27222f.png?v=1710769052&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="810" height="1080">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/julia-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6962054856788"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6962054856788 NoMediaStandardBadge-template--15333411520596__product-grid-6962054856788">
                                Julia Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6962054856788"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6962054856788">
                            <a href="../products/julia-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6962054856788"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6962054856788 Badge-template--15333411520596__product-grid-6962054856788">
                              Julia Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 999.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,399.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 999.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><product-form
                            data-section-id="template--15333411520596__product-grid">
                            <form method="post" action="https://lucienbags.com/cart/add"
                              id="quick-add-template--15333411520596__product-grid6962054856788" accept-charset="UTF-8"
                              class="form" enctype="multipart/form-data" novalidate="novalidate"
                              data-type="add-to-cart-form"><input type="hidden" name="form_type"
                                value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden"
                                name="id" value="40491471994964" class="product-variant-id">
                              <button id="quick-add-template--15333411520596__product-grid6962054856788-submit"
                                type="submit" name="add"
                                class="quick-add__submit button button--full-width button--secondary"
                                aria-haspopup="dialog"
                                aria-labelledby="quick-add-template--15333411520596__product-grid6962054856788-submit title-template--15333411520596__product-grid-6962054856788"
                                aria-live="polite" data-sold-out-message="true">
                                <span>Add to cart
                                </span>
                                <span class="sold-out-message hidden">
                                  Sold out
                                </span>

                                <link
                                  href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                  rel="stylesheet" type="text/css" media="all" />

                                <div class="loading__spinner hidden">
                                  <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                  </svg>
                                </div>
                              </button><input type="hidden" name="product-id" value="6962054856788" /><input
                                type="hidden" name="section-id" value="template--15333411520596__product-grid" />
                            </form>
                          </product-form></div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6962054856788"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 11;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_4283_66223b13-1fea-466a-8bb9-062cd032a665.jpg?v=1710102222&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_4283_66223b13-1fea-466a-8bb9-062cd032a665.jpg?v=1710102222&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_4283_66223b13-1fea-466a-8bb9-062cd032a665.jpg?v=1710102222&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_4283_66223b13-1fea-466a-8bb9-062cd032a665.jpg?v=1710102222&width=720 720w,//lucienbags.com/cdn/shop/files/IMG_4283_66223b13-1fea-466a-8bb9-062cd032a665.jpg?v=1710102222&width=940 940w,//lucienbags.com/cdn/shop/files/IMG_4283_66223b13-1fea-466a-8bb9-062cd032a665.jpg?v=1710102222 980w
                " src="../cdn/shop/files/IMG_4283_66223b13-1fea-466a-8bb9-062cd032a665644a.jpg?v=1710102222&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien Classic Slingbag" class="motion-reduce" loading="lazy" width="980"
                              height="980">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage7_23ef29e0-476a-4bfe-99a4-93762b18d589.jpg?v=1713514088&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage7_23ef29e0-476a-4bfe-99a4-93762b18d589.jpg?v=1713514088&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage7_23ef29e0-476a-4bfe-99a4-93762b18d589.jpg?v=1713514088&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage7_23ef29e0-476a-4bfe-99a4-93762b18d589.jpg?v=1713514088&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage7_23ef29e0-476a-4bfe-99a4-93762b18d589.jpg?v=1713514088&width=940 940w,//lucienbags.com/cdn/shop/files/JPEGimage7_23ef29e0-476a-4bfe-99a4-93762b18d589.jpg?v=1713514088&width=1066 1066w,//lucienbags.com/cdn/shop/files/JPEGimage7_23ef29e0-476a-4bfe-99a4-93762b18d589.jpg?v=1713514088 3024w
                  " src="../cdn/shop/files/JPEGimage7_23ef29e0-476a-4bfe-99a4-93762b18d5895143.jpg?v=1713514088&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="3024" height="4032">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-classic-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6970337951828"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6970337951828 NoMediaStandardBadge-template--15333411520596__product-grid-6970337951828">
                                Lucien Classic Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6970337951828"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6970337951828">
                            <a href="../products/lucien-classic-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6970337951828"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6970337951828 Badge-template--15333411520596__product-grid-6970337951828">
                              Lucien Classic Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 1,199.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,699.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 1,199.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6970337951828">
                            <button id="quick-add-template--15333411520596__product-grid6970337951828-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6970337951828-submit title-template--15333411520596__product-grid-6970337951828"
                              data-product-url="/products/lucien-classic-slingbag">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6970337951828" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Lucien Classic Slingbag" aria-modal="true"
                              class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6970337951828" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6970337951828" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6970337951828"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 12;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_7265.jpg?v=1711449568&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_7265.jpg?v=1711449568&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_7265.jpg?v=1711449568&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_7265.jpg?v=1711449568 640w
                " src="../cdn/shop/files/IMG_7265c073.jpg?v=1711449568&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien Emi Slingbag" class="motion-reduce" loading="lazy" width="640" height="640">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_7263.jpg?v=1711449570&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_7263.jpg?v=1711449570&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_7263.jpg?v=1711449570&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_7263.jpg?v=1711449570 640w
                  " src="../cdn/shop/files/IMG_726327d6.jpg?v=1711449570&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="640" height="640">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-emi-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6992523919444"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6992523919444 NoMediaStandardBadge-template--15333411520596__product-grid-6992523919444">
                                Lucien Emi Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6992523919444"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6992523919444">
                            <a href="../products/lucien-emi-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6992523919444"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6992523919444 Badge-template--15333411520596__product-grid-6992523919444">
                              Lucien Emi Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 999.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,399.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 999.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6992523919444">
                            <button id="quick-add-template--15333411520596__product-grid6992523919444-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6992523919444-submit title-template--15333411520596__product-grid-6992523919444"
                              data-product-url="/products/lucien-emi-slingbag">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6992523919444" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Lucien Emi Slingbag" aria-modal="true"
                              class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6992523919444" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6992523919444" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6992523919444"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 13;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_0025.jpg?v=1710506874&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_0025.jpg?v=1710506874&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_0025.jpg?v=1710506874&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_0025.jpg?v=1710506874&width=720 720w,//lucienbags.com/cdn/shop/files/IMG_0025.jpg?v=1710506874&width=940 940w,//lucienbags.com/cdn/shop/files/IMG_0025.jpg?v=1710506874&width=1066 1066w,//lucienbags.com/cdn/shop/files/IMG_0025.jpg?v=1710506874 1179w
                " src="../cdn/shop/files/IMG_00258f09.jpg?v=1710506874&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien Bling Slingbag" class="motion-reduce" loading="lazy" width="1179"
                              height="1815">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_0027.jpg?v=1710506874&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_0027.jpg?v=1710506874&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_0027.jpg?v=1710506874&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_0027.jpg?v=1710506874&width=720 720w,//lucienbags.com/cdn/shop/files/IMG_0027.jpg?v=1710506874&width=940 940w,//lucienbags.com/cdn/shop/files/IMG_0027.jpg?v=1710506874&width=1066 1066w,//lucienbags.com/cdn/shop/files/IMG_0027.jpg?v=1710506874 1179w
                  " src="../cdn/shop/files/IMG_00278f09.jpg?v=1710506874&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="1179" height="1191">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-bling-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6977983250516"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6977983250516 NoMediaStandardBadge-template--15333411520596__product-grid-6977983250516">
                                Lucien Bling Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6977983250516"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6977983250516">
                            <a href="../products/lucien-bling-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6977983250516"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6977983250516 Badge-template--15333411520596__product-grid-6977983250516">
                              Lucien Bling Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 799.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,299.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 799.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><product-form
                            data-section-id="template--15333411520596__product-grid">
                            <form method="post" action="https://lucienbags.com/cart/add"
                              id="quick-add-template--15333411520596__product-grid6977983250516" accept-charset="UTF-8"
                              class="form" enctype="multipart/form-data" novalidate="novalidate"
                              data-type="add-to-cart-form"><input type="hidden" name="form_type"
                                value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden"
                                name="id" value="40537041666132" class="product-variant-id">
                              <button id="quick-add-template--15333411520596__product-grid6977983250516-submit"
                                type="submit" name="add"
                                class="quick-add__submit button button--full-width button--secondary"
                                aria-haspopup="dialog"
                                aria-labelledby="quick-add-template--15333411520596__product-grid6977983250516-submit title-template--15333411520596__product-grid-6977983250516"
                                aria-live="polite" data-sold-out-message="true">
                                <span>Add to cart
                                </span>
                                <span class="sold-out-message hidden">
                                  Sold out
                                </span>

                                <link
                                  href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                  rel="stylesheet" type="text/css" media="all" />

                                <div class="loading__spinner hidden">
                                  <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                  </svg>
                                </div>
                              </button><input type="hidden" name="product-id" value="6977983250516" /><input
                                type="hidden" name="section-id" value="template--15333411520596__product-grid" />
                            </form>
                          </product-form></div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6977983250516"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 14;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_4659.jpg?v=1710531516&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_4659.jpg?v=1710531516&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_4659.jpg?v=1710531516&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_4659.jpg?v=1710531516&width=720 720w,//lucienbags.com/cdn/shop/files/IMG_4659.jpg?v=1710531516 800w
                " src="../cdn/shop/files/IMG_46595086.jpg?v=1710531516&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien Ishra Slingbag" class="motion-reduce" loading="lazy" width="800" height="800">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_4658.jpg?v=1710531516&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_4658.jpg?v=1710531516&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_4658.jpg?v=1710531516&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_4658.jpg?v=1710531516&width=720 720w,//lucienbags.com/cdn/shop/files/IMG_4658.jpg?v=1710531516 800w
                  " src="../cdn/shop/files/IMG_46585086.jpg?v=1710531516&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="800" height="800">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-ishra-slingbag-1.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6978108981332"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6978108981332 NoMediaStandardBadge-template--15333411520596__product-grid-6978108981332">
                                Lucien Ishra Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6978108981332"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6978108981332">
                            <a href="../products/lucien-ishra-slingbag-1.html"
                              id="CardLink-template--15333411520596__product-grid-6978108981332"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6978108981332 Badge-template--15333411520596__product-grid-6978108981332">
                              Lucien Ishra Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 1,199.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,499.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 1,199.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6978108981332">
                            <button id="quick-add-template--15333411520596__product-grid6978108981332-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6978108981332-submit title-template--15333411520596__product-grid-6978108981332"
                              data-product-url="/products/lucien-ishra-slingbag-1">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6978108981332" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Lucien Ishra Slingbag" aria-modal="true"
                              class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6978108981332" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6978108981332" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6978108981332"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 15;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage22_664be13a-a434-4411-814c-9b937cc633a9.jpg?v=1711029933&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage22_664be13a-a434-4411-814c-9b937cc633a9.jpg?v=1711029933&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage22_664be13a-a434-4411-814c-9b937cc633a9.jpg?v=1711029933&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage22_664be13a-a434-4411-814c-9b937cc633a9.jpg?v=1711029933&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage22_664be13a-a434-4411-814c-9b937cc633a9.jpg?v=1711029933&width=940 940w,//lucienbags.com/cdn/shop/files/JPEGimage22_664be13a-a434-4411-814c-9b937cc633a9.jpg?v=1711029933&width=1066 1066w,//lucienbags.com/cdn/shop/files/JPEGimage22_664be13a-a434-4411-814c-9b937cc633a9.jpg?v=1711029933 3024w
                " src="../cdn/shop/files/JPEGimage22_664be13a-a434-4411-814c-9b937cc633a9f5ad.jpg?v=1711029933&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien phibi sling" class="motion-reduce" loading="lazy" width="3024" height="4032">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage25_b687cb82-c8a5-47db-9b3b-fa4a47a6fdc9.jpg?v=1711029933&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage25_b687cb82-c8a5-47db-9b3b-fa4a47a6fdc9.jpg?v=1711029933&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage25_b687cb82-c8a5-47db-9b3b-fa4a47a6fdc9.jpg?v=1711029933&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage25_b687cb82-c8a5-47db-9b3b-fa4a47a6fdc9.jpg?v=1711029933&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage25_b687cb82-c8a5-47db-9b3b-fa4a47a6fdc9.jpg?v=1711029933&width=940 940w,//lucienbags.com/cdn/shop/files/JPEGimage25_b687cb82-c8a5-47db-9b3b-fa4a47a6fdc9.jpg?v=1711029933&width=1066 1066w,//lucienbags.com/cdn/shop/files/JPEGimage25_b687cb82-c8a5-47db-9b3b-fa4a47a6fdc9.jpg?v=1711029933 3024w
                  " src="../cdn/shop/files/JPEGimage25_b687cb82-c8a5-47db-9b3b-fa4a47a6fdc9f5ad.jpg?v=1711029933&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="3024" height="4032">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-phibi-sling.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6985156853844"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6985156853844 NoMediaStandardBadge-template--15333411520596__product-grid-6985156853844">
                                Lucien phibi sling
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6985156853844"
                              class="badge badge--bottom-left color-scheme-1">Sold out</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6985156853844">
                            <a href="../products/lucien-phibi-sling.html"
                              id="CardLink-template--15333411520596__product-grid-6985156853844"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6985156853844 Badge-template--15333411520596__product-grid-6985156853844">
                              Lucien phibi sling
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--sold-out price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 1,499.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,699.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 1,499.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><product-form
                            data-section-id="template--15333411520596__product-grid">
                            <form method="post" action="https://lucienbags.com/cart/add"
                              id="quick-add-template--15333411520596__product-grid6985156853844" accept-charset="UTF-8"
                              class="form" enctype="multipart/form-data" novalidate="novalidate"
                              data-type="add-to-cart-form"><input type="hidden" name="form_type"
                                value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden"
                                name="id" value="40568487444564" class="product-variant-id" disabled>
                              <button id="quick-add-template--15333411520596__product-grid6985156853844-submit"
                                type="submit" name="add"
                                class="quick-add__submit button button--full-width button--secondary"
                                aria-haspopup="dialog"
                                aria-labelledby="quick-add-template--15333411520596__product-grid6985156853844-submit title-template--15333411520596__product-grid-6985156853844"
                                aria-live="polite" data-sold-out-message="true" disabled>
                                <span>Sold out
                                </span>
                                <span class="sold-out-message hidden">
                                  Sold out
                                </span>

                                <link
                                  href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                  rel="stylesheet" type="text/css" media="all" />

                                <div class="loading__spinner hidden">
                                  <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                  </svg>
                                </div>
                              </button><input type="hidden" name="product-id" value="6985156853844" /><input
                                type="hidden" name="section-id" value="template--15333411520596__product-grid" />
                            </form>
                          </product-form></div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6985156853844"
                            class="badge badge--bottom-left color-scheme-1">Sold out</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 16;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage57_1.jpg?v=1711028878&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage57_1.jpg?v=1711028878&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage57_1.jpg?v=1711028878&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage57_1.jpg?v=1711028878&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage57_1.jpg?v=1711028878 800w
                " src="../cdn/shop/files/JPEGimage57_1c7b9.jpg?v=1711028878&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien emily sling bag" class="motion-reduce" loading="lazy" width="800"
                              height="800">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage58_1.jpg?v=1711028877&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage58_1.jpg?v=1711028877&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage58_1.jpg?v=1711028877&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage58_1.jpg?v=1711028877&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage58_1.jpg?v=1711028877 768w
                  " src="../cdn/shop/files/JPEGimage58_1b995.jpg?v=1711028877&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="768" height="768">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-emily-sling-bag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6985151119444"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6985151119444 NoMediaStandardBadge-template--15333411520596__product-grid-6985151119444">
                                Lucien emily sling bag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6985151119444"
                              class="badge badge--bottom-left color-scheme-1">Sold out</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6985151119444">
                            <a href="../products/lucien-emily-sling-bag.html"
                              id="CardLink-template--15333411520596__product-grid-6985151119444"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6985151119444 Badge-template--15333411520596__product-grid-6985151119444">
                              Lucien emily sling bag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--sold-out price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 1,299.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,399.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 1,299.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><product-form
                            data-section-id="template--15333411520596__product-grid">
                            <form method="post" action="https://lucienbags.com/cart/add"
                              id="quick-add-template--15333411520596__product-grid6985151119444" accept-charset="UTF-8"
                              class="form" enctype="multipart/form-data" novalidate="novalidate"
                              data-type="add-to-cart-form"><input type="hidden" name="form_type"
                                value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden"
                                name="id" value="40568452317268" class="product-variant-id" disabled>
                              <button id="quick-add-template--15333411520596__product-grid6985151119444-submit"
                                type="submit" name="add"
                                class="quick-add__submit button button--full-width button--secondary"
                                aria-haspopup="dialog"
                                aria-labelledby="quick-add-template--15333411520596__product-grid6985151119444-submit title-template--15333411520596__product-grid-6985151119444"
                                aria-live="polite" data-sold-out-message="true" disabled>
                                <span>Sold out
                                </span>
                                <span class="sold-out-message hidden">
                                  Sold out
                                </span>

                                <link
                                  href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                  rel="stylesheet" type="text/css" media="all" />

                                <div class="loading__spinner hidden">
                                  <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                  </svg>
                                </div>
                              </button><input type="hidden" name="product-id" value="6985151119444" /><input
                                type="hidden" name="section-id" value="template--15333411520596__product-grid" />
                            </form>
                          </product-form></div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6985151119444"
                            class="badge badge--bottom-left color-scheme-1">Sold out</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 17;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/61egNGOaJyL._AC_SY695_f7eb6690-fad3-4efd-b6c7-eed150a0b179.jpg?v=1709550450&width=165 165w,//lucienbags.com/cdn/shop/files/61egNGOaJyL._AC_SY695_f7eb6690-fad3-4efd-b6c7-eed150a0b179.jpg?v=1709550450 351w
                " src="../cdn/shop/files/61egNGOaJyL._AC_SY695_f7eb6690-fad3-4efd-b6c7-eed150a0b179eb7a.jpg?v=1709550450&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Persian Slingbag" class="motion-reduce" loading="lazy" width="351" height="695">

                            <img srcset="//lucienbags.com/cdn/shop/files/61EnYL5o_WL._AC_SY695.jpg?v=1709550449&width=165 165w,//lucienbags.com/cdn/shop/files/61EnYL5o_WL._AC_SY695.jpg?v=1709550449&width=360 360w,//lucienbags.com/cdn/shop/files/61EnYL5o_WL._AC_SY695.jpg?v=1709550449&width=533 533w,//lucienbags.com/cdn/shop/files/61EnYL5o_WL._AC_SY695.jpg?v=1709550449 718w
                  " src="../cdn/shop/files/61EnYL5o_WL._AC_SY6954539.jpg?v=1709550449&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="718" height="695">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/persian-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6962036211796"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6962036211796 NoMediaStandardBadge-template--15333411520596__product-grid-6962036211796">
                                Persian Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6962036211796"
                              class="badge badge--bottom-left color-scheme-1">Sold out</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6962036211796">
                            <a href="../products/persian-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6962036211796"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6962036211796 Badge-template--15333411520596__product-grid-6962036211796">
                              Persian Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--sold-out price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 1,299.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,799.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 1,299.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6962036211796">
                            <button id="quick-add-template--15333411520596__product-grid6962036211796-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6962036211796-submit title-template--15333411520596__product-grid-6962036211796"
                              data-product-url="/products/persian-slingbag">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6962036211796" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Persian Slingbag" aria-modal="true"
                              class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6962036211796" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6962036211796" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6962036211796"
                            class="badge badge--bottom-left color-scheme-1">Sold out</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 18;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/products/9-8.jpg?v=1708598446&width=165 165w,//lucienbags.com/cdn/shop/products/9-8.jpg?v=1708598446&width=360 360w,//lucienbags.com/cdn/shop/products/9-8.jpg?v=1708598446&width=533 533w,//lucienbags.com/cdn/shop/products/9-8.jpg?v=1708598446&width=720 720w,//lucienbags.com/cdn/shop/products/9-8.jpg?v=1708598446&width=940 940w,//lucienbags.com/cdn/shop/products/9-8.jpg?v=1708598446&width=1066 1066w,//lucienbags.com/cdn/shop/products/9-8.jpg?v=1708598446 1080w
                " src="../cdn/shop/products/9-8cffd.jpg?v=1708598446&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Millionaire Sling" class="motion-reduce" loading="lazy" width="1080" height="1080">

                            <img srcset="//lucienbags.com/cdn/shop/products/4-8.jpg?v=1708598446&width=165 165w,//lucienbags.com/cdn/shop/products/4-8.jpg?v=1708598446&width=360 360w,//lucienbags.com/cdn/shop/products/4-8.jpg?v=1708598446&width=533 533w,//lucienbags.com/cdn/shop/products/4-8.jpg?v=1708598446&width=720 720w,//lucienbags.com/cdn/shop/products/4-8.jpg?v=1708598446&width=940 940w,//lucienbags.com/cdn/shop/products/4-8.jpg?v=1708598446&width=1066 1066w,//lucienbags.com/cdn/shop/products/4-8.jpg?v=1708598446 1080w
                  " src="../cdn/shop/products/4-8cffd.jpg?v=1708598446&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="1080" height="1080">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/millionaire-sling-bag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6952624914516"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6952624914516 NoMediaStandardBadge-template--15333411520596__product-grid-6952624914516">
                                Millionaire Sling
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6952624914516"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6952624914516">
                            <a href="../products/millionaire-sling-bag.html"
                              id="CardLink-template--15333411520596__product-grid-6952624914516"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6952624914516 Badge-template--15333411520596__product-grid-6952624914516">
                              Millionaire Sling
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 1,399.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,899.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 1,399.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6952624914516">
                            <button id="quick-add-template--15333411520596__product-grid6952624914516-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6952624914516-submit title-template--15333411520596__product-grid-6952624914516"
                              data-product-url="/products/millionaire-sling-bag">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6952624914516" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Millionaire Sling" aria-modal="true"
                              class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6952624914516" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6952624914516" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6952624914516"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 19;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage29_905922dd-b973-411d-8e7f-4181ac4d33ff.jpg?v=1710502781&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage29_905922dd-b973-411d-8e7f-4181ac4d33ff.jpg?v=1710502781&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage29_905922dd-b973-411d-8e7f-4181ac4d33ff.jpg?v=1710502781&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage29_905922dd-b973-411d-8e7f-4181ac4d33ff.jpg?v=1710502781&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage29_905922dd-b973-411d-8e7f-4181ac4d33ff.jpg?v=1710502781&width=940 940w,//lucienbags.com/cdn/shop/files/JPEGimage29_905922dd-b973-411d-8e7f-4181ac4d33ff.jpg?v=1710502781&width=1066 1066w,//lucienbags.com/cdn/shop/files/JPEGimage29_905922dd-b973-411d-8e7f-4181ac4d33ff.jpg?v=1710502781 3024w
                " src="../cdn/shop/files/JPEGimage29_905922dd-b973-411d-8e7f-4181ac4d33ff2488.jpg?v=1710502781&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien Aliza" class="motion-reduce" loading="lazy" width="3024" height="4032">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage31_79665592-7252-40d9-b387-c126dda235c8.jpg?v=1710502780&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage31_79665592-7252-40d9-b387-c126dda235c8.jpg?v=1710502780&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage31_79665592-7252-40d9-b387-c126dda235c8.jpg?v=1710502780&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage31_79665592-7252-40d9-b387-c126dda235c8.jpg?v=1710502780&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage31_79665592-7252-40d9-b387-c126dda235c8.jpg?v=1710502780&width=940 940w,//lucienbags.com/cdn/shop/files/JPEGimage31_79665592-7252-40d9-b387-c126dda235c8.jpg?v=1710502780&width=1066 1066w,//lucienbags.com/cdn/shop/files/JPEGimage31_79665592-7252-40d9-b387-c126dda235c8.jpg?v=1710502780 3024w
                  " src="../cdn/shop/files/JPEGimage31_79665592-7252-40d9-b387-c126dda235c80cce.jpg?v=1710502780&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="3024" height="4032">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-aliza.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6977966833748"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6977966833748 NoMediaStandardBadge-template--15333411520596__product-grid-6977966833748">
                                Lucien Aliza
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6977966833748"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6977966833748">
                            <a href="../products/lucien-aliza.html"
                              id="CardLink-template--15333411520596__product-grid-6977966833748"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6977966833748 Badge-template--15333411520596__product-grid-6977966833748">
                              Lucien Aliza
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 1,099.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,299.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 1,099.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6977966833748">
                            <button id="quick-add-template--15333411520596__product-grid6977966833748-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6977966833748-submit title-template--15333411520596__product-grid-6977966833748"
                              data-product-url="/products/lucien-aliza">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6977966833748" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Lucien Aliza" aria-modal="true"
                              class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6977966833748" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6977966833748" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6977966833748"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 20;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage3_ca557018-4b08-4e37-80d2-02855da070fa.jpg?v=1713512944&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage3_ca557018-4b08-4e37-80d2-02855da070fa.jpg?v=1713512944&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage3_ca557018-4b08-4e37-80d2-02855da070fa.jpg?v=1713512944&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage3_ca557018-4b08-4e37-80d2-02855da070fa.jpg?v=1713512944&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage3_ca557018-4b08-4e37-80d2-02855da070fa.jpg?v=1713512944&width=940 940w,//lucienbags.com/cdn/shop/files/JPEGimage3_ca557018-4b08-4e37-80d2-02855da070fa.jpg?v=1713512944&width=1066 1066w,//lucienbags.com/cdn/shop/files/JPEGimage3_ca557018-4b08-4e37-80d2-02855da070fa.jpg?v=1713512944 3024w
                " src="../cdn/shop/files/JPEGimage3_ca557018-4b08-4e37-80d2-02855da070fa4f46.jpg?v=1713512944&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Cotton Candy Slingbag" class="motion-reduce" loading="lazy" width="3024"
                              height="4032">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage272.jpg?v=1713512944&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage272.jpg?v=1713512944&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage272.jpg?v=1713512944&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage272.jpg?v=1713512944&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage272.jpg?v=1713512944&width=940 940w,//lucienbags.com/cdn/shop/files/JPEGimage272.jpg?v=1713512944&width=1066 1066w,//lucienbags.com/cdn/shop/files/JPEGimage272.jpg?v=1713512944 3024w
                  " src="../cdn/shop/files/JPEGimage2724f46.jpg?v=1713512944&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="3024" height="4032">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/cotton-candy-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6962037096532"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6962037096532 NoMediaStandardBadge-template--15333411520596__product-grid-6962037096532">
                                Cotton Candy Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6962037096532"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6962037096532">
                            <a href="../products/cotton-candy-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6962037096532"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6962037096532 Badge-template--15333411520596__product-grid-6962037096532">
                              Cotton Candy Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 999.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,499.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 999.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6962037096532">
                            <button id="quick-add-template--15333411520596__product-grid6962037096532-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6962037096532-submit title-template--15333411520596__product-grid-6962037096532"
                              data-product-url="/products/cotton-candy-slingbag">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6962037096532" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Cotton Candy Slingbag" aria-modal="true"
                              class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6962037096532" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6962037096532" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6962037096532"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 21;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/JTF3007-DETAIL-2.jpg?v=1710954591&width=165 165w,//lucienbags.com/cdn/shop/files/JTF3007-DETAIL-2.jpg?v=1710954591&width=360 360w,//lucienbags.com/cdn/shop/files/JTF3007-DETAIL-2.jpg?v=1710954591&width=533 533w,//lucienbags.com/cdn/shop/files/JTF3007-DETAIL-2.jpg?v=1710954591&width=720 720w,//lucienbags.com/cdn/shop/files/JTF3007-DETAIL-2.jpg?v=1710954591 800w
                " src="../cdn/shop/files/JTF3007-DETAIL-2ceb8.jpg?v=1710954591&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien Harlow Slingbag 2.0" class="motion-reduce" loading="lazy" width="800"
                              height="800">

                            <img srcset="//lucienbags.com/cdn/shop/files/ada8b2807f691d48bbbd30a6ef70852c.webp?v=1710954591&width=165 165w,//lucienbags.com/cdn/shop/files/ada8b2807f691d48bbbd30a6ef70852c.webp?v=1710954591&width=360 360w,//lucienbags.com/cdn/shop/files/ada8b2807f691d48bbbd30a6ef70852c.webp?v=1710954591&width=533 533w,//lucienbags.com/cdn/shop/files/ada8b2807f691d48bbbd30a6ef70852c.webp?v=1710954591&width=720 720w,//lucienbags.com/cdn/shop/files/ada8b2807f691d48bbbd30a6ef70852c.webp?v=1710954591 800w
                  " src="../cdn/shop/files/ada8b2807f691d48bbbd30a6ef70852cceb8.jpg?v=1710954591&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="800" height="800">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-harlow-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6984232075348"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6984232075348 NoMediaStandardBadge-template--15333411520596__product-grid-6984232075348">
                                Lucien Harlow Slingbag 2.0
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6984232075348"
                              class="badge badge--bottom-left color-scheme-1">Sold out</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6984232075348">
                            <a href="../products/lucien-harlow-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6984232075348"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6984232075348 Badge-template--15333411520596__product-grid-6984232075348">
                              Lucien Harlow Slingbag 2.0
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--sold-out price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 1,199.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,499.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 1,199.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><product-form
                            data-section-id="template--15333411520596__product-grid">
                            <form method="post" action="https://lucienbags.com/cart/add"
                              id="quick-add-template--15333411520596__product-grid6984232075348" accept-charset="UTF-8"
                              class="form" enctype="multipart/form-data" novalidate="novalidate"
                              data-type="add-to-cart-form"><input type="hidden" name="form_type"
                                value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden"
                                name="id" value="40565205139540" class="product-variant-id" disabled>
                              <button id="quick-add-template--15333411520596__product-grid6984232075348-submit"
                                type="submit" name="add"
                                class="quick-add__submit button button--full-width button--secondary"
                                aria-haspopup="dialog"
                                aria-labelledby="quick-add-template--15333411520596__product-grid6984232075348-submit title-template--15333411520596__product-grid-6984232075348"
                                aria-live="polite" data-sold-out-message="true" disabled>
                                <span>Sold out
                                </span>
                                <span class="sold-out-message hidden">
                                  Sold out
                                </span>

                                <link
                                  href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                  rel="stylesheet" type="text/css" media="all" />

                                <div class="loading__spinner hidden">
                                  <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                  </svg>
                                </div>
                              </button><input type="hidden" name="product-id" value="6984232075348" /><input
                                type="hidden" name="section-id" value="template--15333411520596__product-grid" />
                            </form>
                          </product-form></div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6984232075348"
                            class="badge badge--bottom-left color-scheme-1">Sold out</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 22;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_4662_4af579d3-54db-4df0-b888-eea409861233.jpg?v=1710532937&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_4662_4af579d3-54db-4df0-b888-eea409861233.jpg?v=1710532937&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_4662_4af579d3-54db-4df0-b888-eea409861233.jpg?v=1710532937&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_4662_4af579d3-54db-4df0-b888-eea409861233.jpg?v=1710532937&width=720 720w,//lucienbags.com/cdn/shop/files/IMG_4662_4af579d3-54db-4df0-b888-eea409861233.jpg?v=1710532937 800w
                " src="../cdn/shop/files/IMG_4662_4af579d3-54db-4df0-b888-eea4098612336c94.jpg?v=1710532937&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Lucien Wander Slingbag" class="motion-reduce" loading="lazy" width="800"
                              height="800">

                            <img srcset="//lucienbags.com/cdn/shop/files/IMG_4663_e240c7f5-5444-457b-895f-00e38b07462a.jpg?v=1710532940&width=165 165w,//lucienbags.com/cdn/shop/files/IMG_4663_e240c7f5-5444-457b-895f-00e38b07462a.jpg?v=1710532940&width=360 360w,//lucienbags.com/cdn/shop/files/IMG_4663_e240c7f5-5444-457b-895f-00e38b07462a.jpg?v=1710532940&width=533 533w,//lucienbags.com/cdn/shop/files/IMG_4663_e240c7f5-5444-457b-895f-00e38b07462a.jpg?v=1710532940&width=720 720w,//lucienbags.com/cdn/shop/files/IMG_4663_e240c7f5-5444-457b-895f-00e38b07462a.jpg?v=1710532940 750w
                  " src="../cdn/shop/files/IMG_4663_e240c7f5-5444-457b-895f-00e38b07462a4b8b.jpg?v=1710532940&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="750" height="750">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/lucien-wander-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6978111340628"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6978111340628 NoMediaStandardBadge-template--15333411520596__product-grid-6978111340628">
                                Lucien Wander Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6978111340628"
                              class="badge badge--bottom-left color-scheme-1">Sold out</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6978111340628">
                            <a href="../products/lucien-wander-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6978111340628"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6978111340628 Badge-template--15333411520596__product-grid-6978111340628">
                              Lucien Wander Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--sold-out price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 1,399.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,699.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 1,399.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6978111340628">
                            <button id="quick-add-template--15333411520596__product-grid6978111340628-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6978111340628-submit title-template--15333411520596__product-grid-6978111340628"
                              data-product-url="/products/lucien-wander-slingbag">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6978111340628" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Lucien Wander Slingbag" aria-modal="true"
                              class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6978111340628" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6978111340628" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6978111340628"
                            class="badge badge--bottom-left color-scheme-1">Sold out</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 23;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/81JVlhXj8lL._AC_SX679_cb3bd781-5baa-41a7-934b-69e14c2b506c.jpg?v=1710103043&width=165 165w,//lucienbags.com/cdn/shop/files/81JVlhXj8lL._AC_SX679_cb3bd781-5baa-41a7-934b-69e14c2b506c.jpg?v=1710103043&width=360 360w,//lucienbags.com/cdn/shop/files/81JVlhXj8lL._AC_SX679_cb3bd781-5baa-41a7-934b-69e14c2b506c.jpg?v=1710103043&width=533 533w,//lucienbags.com/cdn/shop/files/81JVlhXj8lL._AC_SX679_cb3bd781-5baa-41a7-934b-69e14c2b506c.jpg?v=1710103043 679w
                " src="../cdn/shop/files/81JVlhXj8lL._AC_SX679_cb3bd781-5baa-41a7-934b-69e14c2b506c524b.jpg?v=1710103043&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Emma Slingbag" class="motion-reduce" loading="lazy" width="679" height="603">

                            <img srcset="//lucienbags.com/cdn/shop/files/71UUtd3-xaL._AC_SX679.jpg?v=1710103042&width=165 165w,//lucienbags.com/cdn/shop/files/71UUtd3-xaL._AC_SX679.jpg?v=1710103042&width=360 360w,//lucienbags.com/cdn/shop/files/71UUtd3-xaL._AC_SX679.jpg?v=1710103042&width=533 533w,//lucienbags.com/cdn/shop/files/71UUtd3-xaL._AC_SX679.jpg?v=1710103042 679w
                  " src="../cdn/shop/files/71UUtd3-xaL._AC_SX679cdde.jpg?v=1710103042&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="679" height="679">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/emma-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6970343981140"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6970343981140 NoMediaStandardBadge-template--15333411520596__product-grid-6970343981140">
                                Emma Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6970343981140"
                              class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6970343981140">
                            <a href="../products/emma-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6970343981140"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6970343981140 Badge-template--15333411520596__product-grid-6970343981140">
                              Emma Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 1,199.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,699.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 1,199.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6970343981140">
                            <button id="quick-add-template--15333411520596__product-grid6970343981140-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6970343981140-submit title-template--15333411520596__product-grid-6970343981140"
                              data-product-url="/products/emma-slingbag">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6970343981140" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Emma Slingbag" aria-modal="true"
                              class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6970343981140" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6970343981140" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6970343981140"
                            class="badge badge--bottom-left color-scheme-4">Sale</span></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 24;">


                  <link href="../cdn/shop/t/3/assets/component-rating6ee1.css?v=179577762467860590411713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <link href="../cdn/shop/t/3/assets/component-volume-pricing0804.css?v=56284703641257077881713312590"
                    rel="stylesheet" type="text/css" media="all" />
                  <div class="card-wrapper product-card-wrapper underline-links-hover">
                    <div class="
        card card--card
         card--media
         color-scheme-1 gradient
        
        
        
        
      " style="--ratio-percent: 125.0%;">
                      <div class="card__inner  ratio" style="--ratio-percent: 125.0%;">
                        <div class="card__media">
                          <div class="media media--transparent media--hover-effect">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage28_f31c1c57-f5b5-4d57-b1bb-b484618c2eb9.jpg?v=1709711949&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage28_f31c1c57-f5b5-4d57-b1bb-b484618c2eb9.jpg?v=1709711949&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage28_f31c1c57-f5b5-4d57-b1bb-b484618c2eb9.jpg?v=1709711949&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage28_f31c1c57-f5b5-4d57-b1bb-b484618c2eb9.jpg?v=1709711949&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage28_f31c1c57-f5b5-4d57-b1bb-b484618c2eb9.jpg?v=1709711949&width=940 940w,//lucienbags.com/cdn/shop/files/JPEGimage28_f31c1c57-f5b5-4d57-b1bb-b484618c2eb9.jpg?v=1709711949&width=1066 1066w,//lucienbags.com/cdn/shop/files/JPEGimage28_f31c1c57-f5b5-4d57-b1bb-b484618c2eb9.jpg?v=1709711949 3024w
                " src="../cdn/shop/files/JPEGimage28_f31c1c57-f5b5-4d57-b1bb-b484618c2eb96ae5.jpg?v=1709711949&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Odyssey Slingbag" class="motion-reduce" loading="lazy" width="3024" height="4032">

                            <img srcset="//lucienbags.com/cdn/shop/files/JPEGimage23_8f475b82-33ba-4b10-8974-7c39d2ea40e6.jpg?v=1709711949&width=165 165w,//lucienbags.com/cdn/shop/files/JPEGimage23_8f475b82-33ba-4b10-8974-7c39d2ea40e6.jpg?v=1709711949&width=360 360w,//lucienbags.com/cdn/shop/files/JPEGimage23_8f475b82-33ba-4b10-8974-7c39d2ea40e6.jpg?v=1709711949&width=533 533w,//lucienbags.com/cdn/shop/files/JPEGimage23_8f475b82-33ba-4b10-8974-7c39d2ea40e6.jpg?v=1709711949&width=720 720w,//lucienbags.com/cdn/shop/files/JPEGimage23_8f475b82-33ba-4b10-8974-7c39d2ea40e6.jpg?v=1709711949&width=940 940w,//lucienbags.com/cdn/shop/files/JPEGimage23_8f475b82-33ba-4b10-8974-7c39d2ea40e6.jpg?v=1709711949&width=1066 1066w,//lucienbags.com/cdn/shop/files/JPEGimage23_8f475b82-33ba-4b10-8974-7c39d2ea40e6.jpg?v=1709711949 3024w
                  " src="../cdn/shop/files/JPEGimage23_8f475b82-33ba-4b10-8974-7c39d2ea40e66ae5.jpg?v=1709711949&amp;width=533"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="" class="motion-reduce" loading="lazy" width="3024" height="4032">
                          </div>
                        </div>
                        <div class="card__content">
                          <div class="card__information">
                            <h3 class="card__heading">
                              <a href="../products/odyssey-slingbag.html"
                                id="StandardCardNoMediaLink-template--15333411520596__product-grid-6965126856788"
                                class="full-unstyled-link"
                                aria-labelledby="StandardCardNoMediaLink-template--15333411520596__product-grid-6965126856788 NoMediaStandardBadge-template--15333411520596__product-grid-6965126856788">
                                Odyssey Slingbag
                              </a>
                            </h3>
                          </div>
                          <div class="card__badge top left"><span
                              id="NoMediaStandardBadge-template--15333411520596__product-grid-6965126856788"
                              class="badge badge--bottom-left color-scheme-1">Sold out</span></div>
                        </div>
                      </div>
                      <div class="card__content">
                        <div class="card__information">
                          <h3 class="card__heading h5" id="title-template--15333411520596__product-grid-6965126856788">
                            <a href="../products/odyssey-slingbag.html"
                              id="CardLink-template--15333411520596__product-grid-6965126856788"
                              class="full-unstyled-link"
                              aria-labelledby="CardLink-template--15333411520596__product-grid-6965126856788 Badge-template--15333411520596__product-grid-6965126856788">
                              Odyssey Slingbag
                            </a>
                          </h3>
                          <div class="card-information"><span class="caption-large light"></span>
                            <div class="
    price  price--sold-out price--on-sale">
                              <div class="price__container">
                                <div class="price__regular"><span
                                    class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span class="price-item price-item--regular">
                                    Rs. 999.00
                                  </span>
                                </div>
                                <div class="price__sale">
                                  <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                  <span>
                                    <s class="price-item price-item--regular">

                                      Rs. 1,499.00

                                    </s>
                                  </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                  <span class="price-item price-item--sale price-item--last">
                                    Rs. 999.00
                                  </span>
                                </div>
                                <small class="unit-price caption hidden">
                                  <span class="visually-hidden">Unit price</span>
                                  <span class="price-item price-item--last">
                                    <span></span>
                                    <span aria-hidden="true">/</span>
                                    <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                    <span>
                                    </span>
                                  </span>
                                </small>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="quick-add no-js-hidden"><modal-opener data-modal="#QuickAdd-6965126856788">
                            <button id="quick-add-template--15333411520596__product-grid6965126856788-submit"
                              type="submit" name="add"
                              class="quick-add__submit button button--full-width button--secondary"
                              aria-haspopup="dialog"
                              aria-labelledby="quick-add-template--15333411520596__product-grid6965126856788-submit title-template--15333411520596__product-grid-6965126856788"
                              data-product-url="/products/odyssey-slingbag">
                              Choose options


                              <link
                                href="../cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                rel="stylesheet" type="text/css" media="all" />

                              <div class="loading__spinner hidden">
                                <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                              </div>
                            </button>
                          </modal-opener>
                          <quick-add-modal id="QuickAdd-6965126856788" class="quick-add-modal">
                            <div role="dialog" aria-label="Choose options for Odyssey Slingbag" aria-modal="true"
                              class="quick-add-modal__content global-settings-popup" tabindex="-1">
                              <button id="ModalClose-6965126856788" type="button" class="quick-add-modal__toggle"
                                aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                  class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                  <path
                                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                    fill="currentColor">
                                </svg>

                              </button>
                              <div id="QuickAddInfo-6965126856788" class="quick-add-modal__content-info"></div>
                            </div>
                          </quick-add-modal>
                        </div>
                        <div class="card__badge top left"><span
                            id="Badge-template--15333411520596__product-grid-6965126856788"
                            class="badge badge--bottom-left color-scheme-1">Sold out</span></div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <link href="../cdn/shop/t/3/assets/component-pagination6b59.css?v=136206814810731739951713312590"
                rel="stylesheet" type="text/css" media="all" />
              <div class="pagination-wrapper">
                <nav class="pagination" role="navigation" aria-label="Pagination">
                  <ul class="pagination__list list-unstyled" role="list">
                    <li><a role="link" aria-disabled="true" class="pagination__item pagination__item--current light"
                        aria-current="page" aria-label="Page 1">1</a></li>
                    <li><a href="slingbag4658.html?page=2" class="pagination__item link" aria-label="Page 2">2</a></li>
                    <li><a href="slingbag9ba9.html?page=3" class="pagination__item link" aria-label="Page 3">3</a></li>
                    <li><span class="pagination__item">&hellip;</span></li>
                    <li><a href="slingbagaf4d.html?page=5" class="pagination__item link" aria-label="Page 5">5</a></li>
                    <li>
                      <a href="slingbag4658.html?page=2"
                        class="pagination__item pagination__item--prev pagination__item-arrow link motion-reduce"
                        aria-label="Next page"><svg aria-hidden="true" focusable="false" class="icon icon-caret"
                          viewBox="0 0 10 6">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                            fill="currentColor">
                        </svg>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </main>

  <!-- BEGIN sections: footer-group -->


  <div id="shopify-section-sections--15333407260756__footer" class="shopify-section shopify-section-group-footer-group">
    <link href="../cdn/shop/t/3/assets/section-footer37ab.css?v=72619989355558646551713312590" rel="stylesheet"
      type="text/css" media="all" />
    <link href="../cdn/shop/t/3/assets/component-newsletter8479.css?v=4727253280200485261713312590" rel="stylesheet"
      type="text/css" media="all" />
    <link href="../cdn/shop/t/3/assets/component-list-menu1726.css?v=151968516119678728991713312590" rel="stylesheet"
      type="text/css" media="all" />
    <link href="../cdn/shop/t/3/assets/component-list-paymentf8de.css?v=69253961410771838501713312590" rel="stylesheet"
      type="text/css" media="all" />
    <link href="../cdn/shop/t/3/assets/component-list-socialec93.css?v=35792976012981934991713312590" rel="stylesheet"
      type="text/css" media="all" />
    <style data-shopify>
      .footer {
        margin-top: 0px;
      }

      .section-sections--15333407260756__footer-padding {
        padding-top: 33px;
        padding-bottom: 45px;
      }

      @media screen and (min-width: 750px) {
        .footer {
          margin-top: 0px;
        }

        .section-sections--15333407260756__footer-padding {
          padding-top: 44px;
          padding-bottom: 60px;
        }
      }
    </style>
    <footer class="footer color-scheme-3 gradient section-sections--15333407260756__footer-padding">
      <div class="footer__content-top page-width">
        <div
          class="footer__blocks-wrapper grid grid--1-col grid--2-col grid--4-col-tablet  scroll-trigger animate--slide-in"
          data-cascade>
          <div class="footer-block grid__item scroll-trigger animate--slide-in" data-cascade
            style="--animation-order: 1;">
            <div class="footer-block__brand-info">
              <h2 class="footer-block__heading rte">Lucien</h2>
              <div class="rte">
                <p>Welcome to Lucien, your number one source for all bags. We’re dedicated to giving you the very best
                  of bags, with a focus on Design, Quality, Customer Satisfaction.</p>
              </div>

              <ul class="list-unstyled list-social footer__list-social" role="list">
                <li class="list-social__item">
                  <a href="https://www.instagram.com/lucienbags/" class="link list-social__link"><svg aria-hidden="true"
                      focusable="false" class="icon icon-instagram" viewBox="0 0 20 20">
                      <path fill="currentColor" fill-rule="evenodd"
                        d="M13.23 3.492c-.84-.037-1.096-.046-3.23-.046-2.144 0-2.39.01-3.238.055-.776.027-1.195.164-1.487.273a2.43 2.43 0 0 0-.912.593 2.486 2.486 0 0 0-.602.922c-.11.282-.238.702-.274 1.486-.046.84-.046 1.095-.046 3.23 0 2.134.01 2.39.046 3.229.004.51.097 1.016.274 1.495.145.365.319.639.602.913.282.282.538.456.92.602.474.176.974.268 1.479.273.848.046 1.103.046 3.238.046 2.134 0 2.39-.01 3.23-.046.784-.036 1.203-.164 1.486-.273.374-.146.648-.329.921-.602.283-.283.447-.548.602-.922.177-.476.27-.979.274-1.486.037-.84.046-1.095.046-3.23 0-2.134-.01-2.39-.055-3.229-.027-.784-.164-1.204-.274-1.495a2.43 2.43 0 0 0-.593-.913 2.604 2.604 0 0 0-.92-.602c-.284-.11-.703-.237-1.488-.273ZM6.697 2.05c.857-.036 1.131-.045 3.302-.045 1.1-.014 2.202.001 3.302.045.664.014 1.321.14 1.943.374a3.968 3.968 0 0 1 1.414.922c.41.397.728.88.93 1.414.23.622.354 1.279.365 1.942C18 7.56 18 7.824 18 10.005c0 2.17-.01 2.444-.046 3.292-.036.858-.173 1.442-.374 1.943-.2.53-.474.976-.92 1.423a3.896 3.896 0 0 1-1.415.922c-.51.191-1.095.337-1.943.374-.857.036-1.122.045-3.302.045-2.171 0-2.445-.009-3.302-.055-.849-.027-1.432-.164-1.943-.364a4.152 4.152 0 0 1-1.414-.922 4.128 4.128 0 0 1-.93-1.423c-.183-.51-.329-1.085-.365-1.943C2.009 12.45 2 12.167 2 10.004c0-2.161 0-2.435.055-3.302.027-.848.164-1.432.365-1.942a4.44 4.44 0 0 1 .92-1.414 4.18 4.18 0 0 1 1.415-.93c.51-.183 1.094-.33 1.943-.366Zm.427 4.806a4.105 4.105 0 1 1 5.805 5.805 4.105 4.105 0 0 1-5.805-5.805Zm1.882 5.371a2.668 2.668 0 1 0 2.042-4.93 2.668 2.668 0 0 0-2.042 4.93Zm5.922-5.942a.958.958 0 1 1-1.355-1.355.958.958 0 0 1 1.355 1.355Z"
                        clip-rule="evenodd" />
                    </svg>
                    <span class="visually-hidden">Instagram</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in" data-cascade
            style="--animation-order: 2;">
            <h2 class="footer-block__heading inline-richtext">Shop</h2>
            <ul class="footer-block__details-content list-unstyled">
              <li>
                <a href="../index.html" class="link link--text list-menu__item list-menu__item--link">
                  Home
                </a>
              </li>
              <li>
                <a href="all.html" class="link link--text list-menu__item list-menu__item--link">
                  Shop All
                </a>
              </li>
              <li>
                <a href="slingbag.html"
                  class="link link--text list-menu__item list-menu__item--link list-menu__item--active">
                  Slings
                </a>
              </li>
              <li>
                <a href="shoulder-bag.html" class="link link--text list-menu__item list-menu__item--link">
                  Shoulder Bags
                </a>
              </li>
              <li>
                <a href="totebag.html" class="link link--text list-menu__item list-menu__item--link">
                  Totebag
                </a>
              </li>
              <li>
                <a href="backpack.html" class="link link--text list-menu__item list-menu__item--link">
                  Bagpacks
                </a>
              </li>
              <li>
                <a href="wallets.html" class="link link--text list-menu__item list-menu__item--link">
                  Wallets
                </a>
              </li>
              <li>
                <a href="handbags.html" class="link link--text list-menu__item list-menu__item--link">
                  Handbag
                </a>
              </li>
              <li>
                <a href="bags-under-999.html" class="link link--text list-menu__item list-menu__item--link">
                  Bags Under 999
                </a>
              </li>
              <li>
                <a href="https://lucienbags.shiprocket.co/"
                  class="link link--text list-menu__item list-menu__item--link">
                  Track your order
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in" data-cascade
            style="--animation-order: 3;">
            <h2 class="footer-block__heading inline-richtext">Quick links</h2>
            <ul class="footer-block__details-content list-unstyled">
              <li>
                <a href="../policies/privacy-policy.html" class="link link--text list-menu__item list-menu__item--link">
                  Privacy Policy
                </a>
              </li>
              <li>
                <a href="../policies/refund-policy.html" class="link link--text list-menu__item list-menu__item--link">
                  Refund Policy
                </a>
              </li>
              <li>
                <a href="../policies/shipping-policy.html"
                  class="link link--text list-menu__item list-menu__item--link">
                  Shipping Policy
                </a>
              </li>
              <li>
                <a href="../policies/terms-of-service.html"
                  class="link link--text list-menu__item list-menu__item--link">
                  Terms of Service
                </a>
              </li>
              <li>
                <a href="../policies/contact-information.html"
                  class="link link--text list-menu__item list-menu__item--link">
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-block--newsletter scroll-trigger animate--slide-in" data-cascade>
          <div class="footer-block__newsletter">
            <h2 class="footer-block__heading inline-richtext">Subscribe To Our Newsletter</h2>
            <form method="post" action="https://lucienbags.com/contact#ContactFooter" id="ContactFooter"
              accept-charset="UTF-8" class="footer__newsletter newsletter-form"><input type="hidden" name="form_type"
                value="customer" /><input type="hidden" name="utf8" value="✓" /><input type="hidden"
                name="contact[tags]" value="newsletter">
              <div class="newsletter-form__field-wrapper">
                <div class="field">
                  <input id="NewsletterForm--sections--15333407260756__footer" type="email" name="contact[email]"
                    class="field__input" value="" aria-required="true" autocorrect="off" autocapitalize="off"
                    autocomplete="email" placeholder="Email" required>
                  <label class="field__label" for="NewsletterForm--sections--15333407260756__footer">
                    Email
                  </label>
                  <button type="submit" class="newsletter-form__button field__button" name="commit" id="Subscribe"
                    aria-label="Subscribe">
                    <svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false" class="icon icon-arrow"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                        fill="currentColor">
                    </svg>

                  </button>
                </div>
              </div>
            </form>
          </div>

          <ul class="list-unstyled list-social footer__list-social" role="list">
            <li class="list-social__item">
              <a href="https://www.instagram.com/lucienbags/" class="link list-social__link"><svg aria-hidden="true"
                  focusable="false" class="icon icon-instagram" viewBox="0 0 20 20">
                  <path fill="currentColor" fill-rule="evenodd"
                    d="M13.23 3.492c-.84-.037-1.096-.046-3.23-.046-2.144 0-2.39.01-3.238.055-.776.027-1.195.164-1.487.273a2.43 2.43 0 0 0-.912.593 2.486 2.486 0 0 0-.602.922c-.11.282-.238.702-.274 1.486-.046.84-.046 1.095-.046 3.23 0 2.134.01 2.39.046 3.229.004.51.097 1.016.274 1.495.145.365.319.639.602.913.282.282.538.456.92.602.474.176.974.268 1.479.273.848.046 1.103.046 3.238.046 2.134 0 2.39-.01 3.23-.046.784-.036 1.203-.164 1.486-.273.374-.146.648-.329.921-.602.283-.283.447-.548.602-.922.177-.476.27-.979.274-1.486.037-.84.046-1.095.046-3.23 0-2.134-.01-2.39-.055-3.229-.027-.784-.164-1.204-.274-1.495a2.43 2.43 0 0 0-.593-.913 2.604 2.604 0 0 0-.92-.602c-.284-.11-.703-.237-1.488-.273ZM6.697 2.05c.857-.036 1.131-.045 3.302-.045 1.1-.014 2.202.001 3.302.045.664.014 1.321.14 1.943.374a3.968 3.968 0 0 1 1.414.922c.41.397.728.88.93 1.414.23.622.354 1.279.365 1.942C18 7.56 18 7.824 18 10.005c0 2.17-.01 2.444-.046 3.292-.036.858-.173 1.442-.374 1.943-.2.53-.474.976-.92 1.423a3.896 3.896 0 0 1-1.415.922c-.51.191-1.095.337-1.943.374-.857.036-1.122.045-3.302.045-2.171 0-2.445-.009-3.302-.055-.849-.027-1.432-.164-1.943-.364a4.152 4.152 0 0 1-1.414-.922 4.128 4.128 0 0 1-.93-1.423c-.183-.51-.329-1.085-.365-1.943C2.009 12.45 2 12.167 2 10.004c0-2.161 0-2.435.055-3.302.027-.848.164-1.432.365-1.942a4.44 4.44 0 0 1 .92-1.414 4.18 4.18 0 0 1 1.415-.93c.51-.183 1.094-.33 1.943-.366Zm.427 4.806a4.105 4.105 0 1 1 5.805 5.805 4.105 4.105 0 0 1-5.805-5.805Zm1.882 5.371a2.668 2.668 0 1 0 2.042-4.93 2.668 2.668 0 0 0-2.042 4.93Zm5.922-5.942a.958.958 0 1 1-1.355-1.355.958.958 0 0 1 1.355 1.355Z"
                    clip-rule="evenodd" />
                </svg>
                <span class="visually-hidden">Instagram</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer__content-bottom scroll-trigger animate--slide-in" data-cascade>
        <div class="footer__content-bottom-wrapper page-width">
          <div class="footer__column footer__localization isolate"></div>
          <div class="footer__column footer__column--info">
            <div class="footer__payment">
              <span class="visually-hidden">Payment methods</span>
              <ul class="list list-payment" role="list"></ul>
            </div>
          </div>
        </div>
        <div class="footer__content-bottom-wrapper page-width">
          <div class="footer__copyright caption">
            <small class="copyright__content">&copy; 2024, <a href="../index.html" title="">Lucien</a></small>
            <small class="copyright__content"><a target="_blank" rel="nofollow"
                href="https://www.shopify.com/?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered
                by Shopify</a></small>
            <ul class="policies list-unstyled">
              <li>
                <small class="copyright__content"><a href="../policies/refund-policy.html">Refund policy</a></small>
              </li>
              <li>
                <small class="copyright__content"><a href="../policies/privacy-policy.html">Privacy policy</a></small>
              </li>
              <li>
                <small class="copyright__content"><a href="../policies/terms-of-service.html">Terms of
                    service</a></small>
              </li>
              <li>
                <small class="copyright__content"><a href="../policies/shipping-policy.html">Shipping policy</a></small>
              </li>
              <li>
                <small class="copyright__content"><a href="../policies/contact-information.html">Contact
                    information</a></small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


  </div>
  <!-- END sections: footer-group -->

  <ul hidden>
    <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
    <li id="a11y-new-window-message">Opens in a new window.</li>
  </ul>

  <script>
    window.shopUrl = '../index.html';
    window.routes = {
      cart_add_url: '/cart/add',
      cart_change_url: '/cart/change',
      cart_update_url: '/cart/update',
      cart_url: '/cart',
      predictive_search_url: '/search/suggest',
    };

    window.cartStrings = {
      error: `There was an error while updating your cart. Please try again.`,
      quantityError: `You can only add [quantity] of this item to your cart.`,
    };

    window.variantStrings = {
      addToCart: `Add to cart`,
      soldOut: `Sold out`,
      unavailable: `Unavailable`,
      unavailable_with_option: `[value] - Unavailable`,
    };

    window.quickOrderListStrings = {
      itemsAdded: `[quantity] items added`,
      itemAdded: `[quantity] item added`,
      itemsRemoved: `[quantity] items removed`,
      itemRemoved: `[quantity] item removed`,
      viewCart: `View cart`,
      each: `[money]/ea`,
    };

    window.accessibilityStrings = {
      imageAvailable: `Image [index] is now available in gallery view`,
      shareSuccess: `Link copied to clipboard`,
      pauseSlideshow: `Pause slideshow`,
      playSlideshow: `Play slideshow`,
      recipientFormExpanded: `Gift card recipient form expanded`,
      recipientFormCollapsed: `Gift card recipient form collapsed`,
      countrySelectorSearchCount: `[count] countries/regions found`,
    };
  </script>
  <script src="../cdn/shop/t/3/assets/predictive-searchea4e.js?v=162273246065392412141713312590" defer="defer"></script>
  <div id="shopify-block-4015264832934714879" class="shopify-block shopify-app-block">
    <script>
      function createEcomSendMainStyleEle() {
        const ele = document.createElement("link")
        ele.rel = "stylesheet"
        ele.href = '../../cdn.shopify.com/extensions/b2b456f5-3ab2-41d7-8d46-f6e1aa5314c3/ecomsend-popups-17/assets/style.css'
        ele.dataset.ecomsendTag = "load-alternate-css"

        return ele
      }

      if (window.EcomSendApps?.enableAlternateCSSLoading ?? false) {
        document.head.appendChild(createEcomSendMainStyleEle())
      }

      function createEcomSendMainJSEle() {
        const ele = document.createElement("script")
        ele.defer = true
        ele.id = "ecomsend-main-js"
        ele.src = '../../cdn.shopify.com/extensions/b2b456f5-3ab2-41d7-8d46-f6e1aa5314c3/ecomsend-popups-17/assets/ecomsend.js'

        if (null === document.getElementById(ele.id)) {
          document.head.appendChild(ele)
        }
      }
    </script>

    <style id="ecomsend-custom-style"></style>
    <div id="ecomsend-widget"></div>


    <!-- BEGIN app snippet: ecomsend-app -->
    <script type="text/javascript">
      //EcomSend APPS COMMON JS CODE
      window.EcomSendApps = window.EcomSendApps || {}

      window.EcomSendApps.design_mode = false


      window.EcomSendApps.common = window.EcomSendApps.common || {}
      window.EcomSendApps.common.shop = {
        permanent_domain: '395399-3d.myshopify.com',
        currency: "INR",
        money_format: "Rs. {{amount}}",
        id: 57346457684,
      }





      window.EcomSendApps.common.template = 'collection'
    </script>
    <!-- END app snippet -->


    <script>window.shopLocale = 'en'</script>
    <script defer="defer"
      src="../../cdn.shopify.com/extensions/b2b456f5-3ab2-41d7-8d46-f6e1aa5314c3/ecomsend-popups-17/assets/react_react-dom.min.js"></script>
    <script defer="defer"
      src="../../cdn.shopify.com/extensions/b2b456f5-3ab2-41d7-8d46-f6e1aa5314c3/ecomsend-popups-17/assets/mobx_react-custom-roulette.min.js"
      onload="createEcomSendMainJSEle()"></script>
  </div>
  <div id="shopify-block-15683396631634586217" class="shopify-block shopify-app-block">
    <script id="chat-button-container" data-horizontal-position=bottom_right data-vertical-position=lowest
      data-icon=chat_bubble data-text=chat_with_us data-color=#000000 data-secondary-color=#FFFFFF
      data-ternary-color=#6A6A6A data-domain=lucienbags.com
      data-external-identifier=iPqVcXC9A9QCswsXQNu8XonbMKiiAl6myJlMO2_u2wE>
      </script>
  </div>
</body>
</html>