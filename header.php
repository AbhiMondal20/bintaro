<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
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
        var templateName = 'index';
    </script>

    <script src="../pdp.gokwik.co/merchant-integration/build/merchant.integration5ed3.js?v4"></script>
    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="">
    <link rel="canonical" href="index">
    <link rel="icon" type="image/png"
        href="cdn/shop/files/lucien-2-1_1dcbc.png?crop=center&amp;height=32&amp;v=1708598719&amp;width=32">
    <link rel="preconnect" href="https://fonts.shopifycdn.com/" crossorigin>
    <title>
        Bintaro - Your Premier Bag Manufacturer for Innovative and Quality Solutions
    </title>

    <link rel="shortcut icon" href="cdn/shop/files/lucien-2-1_1dcbc.png" type="image/x-icon">
    <meta name="title" content="Bintaro - Your Premier Bag Manufacturer for Innovative and Quality Solutions">

    <meta name="description"
        content="Welcome to Bintaro, your number one source for all bags. We&#39;re dedicated to giving you the very best of bags, with a focus on Design, Quality, Customer">

    <meta property="og:site_name" content="Bintaro">
    <meta property="og:url" content="https://bintaro.in/">
    <meta property="og:title" content="Bintaro Bags">
    <meta property="og:type" content="website">
    <meta property="og:description"
        content="Welcome to Bintaro, your number one source for all bags. We&#39;re dedicated to giving you the very best of bags, with a focus on Design, Quality, Customer">
    <meta property="og:image"
        content="cdn/shop/files/lucien-2-1_1dcbc.png?height=628&pad_color=fff&v=1708598719&width=1200">
    <meta property="og:image:secure_url"
        content="cdn/shop/files/lucien-2-1_1dcbc.png?height=628&pad_color=fff&v=1708598719&width=1200">

    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bintaro Bags">
    <meta name="twitter:description"
        content="Welcome to Bintaro, your number one source for all bags. We&#39;re dedicated to giving you the very best of bags, with a focus on Design, Quality, Customer">

        <!-- font awsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="cdn/shop/t/3/assets/constantsf7ca.js?v=58251544750838685771713312590" defer="defer"></script>
    <script src="cdn/shop/t/3/assets/pubsub041c.js?v=158357773527763999511713312590" defer="defer"></script>
    <script src="cdn/shop/t/3/assets/global0ab9.js?v=106116626045777747121713312590" defer="defer"></script>
    <script src="cdn/shop/t/3/assets/animationsbd01.js?v=88693664871331136111713312590" defer="defer"></script>
    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script>
    <meta name="google-site-verification" content="QgBzSlmSa9d_b0zNjdiS-qFjoEm5RBaFnHM-4keKusI">
    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/57346457684/digital_wallets/dialog">
    <script async="async" src="checkouts/internal/preloadsd568.js?locale=en-IN"></script>
    <script async="async" src="../shop.app/checkouts/internal/preloads9207.js?locale=en-IN&amp;shop_id=57346457684"
        crossorigin="anonymous"></script>
    <script id="shopify-features"
        type="application/json">{"accessToken":"502e8d24755d51f489a928384b4a2871","betas":["rich-media-storefront-analytics"],"domain":"bintaro.in","predictiveSearch":true,"shopId":57346457684,"smart_payment_buttons_url":"https:\/\/bintaro.in\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/bintaro.in\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en"}</script>
    <script>var Shopify = Shopify || {};
        Shopify.shop = "395399-3d.myshopify.com";
        Shopify.locale = "en";
        Shopify.currency = { "active": "INR", "rate": "1.0" };
        Shopify.country = "IN";
        Shopify.theme = { "name": " Refresh\u003c\u003eGokwik_17April", "id": 125983883348, "theme_store_id": 1567, "role": "main" };
        Shopify.theme.handle = "null";
        Shopify.theme.style = { "id": null, "handle": null };
        Shopify.cdnHost = "bintaro.in/cdn";
        Shopify.routes = Shopify.routes || {};
        Shopify.routes.root = "index.html";</script>
    <script type="module">!function (o) { (o.Shopify = o.Shopify || {}).modules = !0 }(window);</script>
    <script>!function (o) { function n() { var o = []; function n() { o.push(Array.prototype.slice.apply(arguments)) } return n.q = o, n } var t = o.Shopify = o.Shopify || {}; t.loadFeatures = n(), t.autoloadFeatures = n() }(window);</script>
    <script id="shop-js-features" type="application/json">{"compact":""}</script>
    <script id="shop-js-analytics" type="application/json">{"pageType":"index"}</script>
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
        id="__st">var __st = { "a": 57346457684, "offset": 19800, "reqid": "c021125a-65e2-450f-96aa-8cd8e010d43f-1716725197", "pageurl": "bintaro.in\/?fbclid=PAZXh0bgNhZW0CMTEAAaaXzemR6Bq9uxPETtwrTSfjB8EWMqbhR6JCCJ8Agj2ESb53f8lm9Xlt26A_aem_Ac_KL4kKgoyE9RdGzc_OvxuHdmT2BxPxkEecaoQfL6KnM_Crq2g82wiWihdRg_y901MeAiw-Bg3ofWwurZO-KDAy", "u": "178aa4faa32a", "p": "home" };</script>
    <!-- <script>window.ShopifyPaypalV4VisibilityTracking = true;</script> -->
    <script
        id="captcha-bootstrap">!function () { 'use strict'; const e = 'contact', t = 'account', n = 'new_comment', o = e => e.map((([e, t]) => `form[action*='/${e}'] input[name='form_type'][value='${t}']`)).join(','); function c(e, t) { try { const n = window.sessionStorage; for (const [o, c] of Object.entries(JSON.parse(n.getItem(t)))) e.elements[o] && (e.elements[o].value = c); n.removeItem(t) } catch { } } const s = 'form_type', r = 'cptcha'; ((a, i, m, f, u, d) => { if (0) return; let l = !1; a[m] = a[m] || {}, a[m][f] = a[m][f] || {}, a[m][f].q = [], function (a, i, m, f, u, d) { const [l, _, p] = function (c, s, r) { const a = s ? [[e, e], ['blogs', n], ['comments', n], [e, 'customer']] : [], i = c ? [[t, 'customer_login'], [t, 'guest_login'], [t, 'recover_customer_password'], [t, 'create_customer']] : [], m = [...a, ...i], f = o(m), u = o(a.slice(0, 3)), d = r && o(m.filter((([e, t]) => r.includes(t)))), l = e => () => e ? [...document.querySelectorAll(e)].map((e => e.form)) : []; return [l(f), l(u), l(d)] }(!0, !0, d), E = e => { const t = e.target, n = t instanceof HTMLFormElement ? t : t && t.form; return n && l().find((e => n === e)) }; a.addEventListener('submit', (e => { E(e) && e.preventDefault() })); const T = (e, t) => { m(e, t.some((t => t === e))), e.dataset[r] = !0 }; for (const e of ['focusin', 'change']) a.addEventListener(e, (e => { const t = E(e); t && !t.dataset[r] && T(t, _()) })); const g = i.get('form_key'), v = i.get(s), h = g && v, y = d && d.length; (y || h) && a.addEventListener('DOMContentLoaded', (() => { const e = _(); if (h) for (const t of e) t.elements[s].value === v && c(t, g); if (y) for (const t of p()) T(t, e) })) }(i, new URLSearchParams(a.location.search), ((e, t) => { const n = a[m][f], o = n.bindForm, c = '6LeHG2ApAAAAAO4rPaDW-qVpPKPOBfjbCpzJB9ey', s = { infoText: '', privacyText: '', termsText: '' }; if (o) return o(e, c, t, s); n.q.push([e, c, t, s]), l || (i.body.append(Object.assign(i.createElement('script'), { id: 'captcha-provider', async: !0, src: 'https://cdn.shopify.com/shopifycloud/storefront-forms-hcaptcha/ce_storefront_forms_captcha_recaptcha.v1.0.5.iife.js' })), l = !0) }), 0, 0, ['guest_login']) })(window, document, 'Shopify', 'ce_forms') }();</script>
    <script integrity="sha256-n5Uet9jVOXPHGd4hH4B9Y6+BxkTluaaucmYaxAjUcvY="
        data-source-attribution="shopify.loadfeatures" defer="defer"
        src="cdn/shopifycloud/shopify/assets/storefront/load_feature-9f951eb7d8d53973c719de211f807d63af81c644e5b9a6ae72661ac408d472f6.js"
        crossorigin="anonymous"></script>
    <script data-source-attribution="shopify.dynamic_checkout.dynamic.init">var Shopify = Shopify || {}; Shopify.PaymentButton = Shopify.PaymentButton || { isStorefrontPortableWallets: !0, init: function () { window.Shopify.PaymentButton.init = function () { }; var t = document.createElement("script"); t.src = "cdn/shopifycloud/portable-wallets/latest/portable-wallets.en.js", t.type = "module", document.head.appendChild(t) } };
    </script>
    <script data-source-attribution="shopify.dynamic_checkout.cart.bootstrap">document.addEventListener("DOMContentLoaded", (function () { function t() { return document.querySelector("#dynamic-checkout-cart") } if (t()) Shopify.PaymentButton.init(); else { new MutationObserver((function (e, n) { t() && (Shopify.PaymentButton.init(), n.disconnect()) })).observe(document.body, { childList: !0, subtree: !0 }) } }));
    </script>
    <script id="sections-script" data-sections="header" defer="defer"
        src="cdn/shop/t/3/compiled_assets/scriptsc451.js?116"></script>

    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>


    <style data-shopify>
        @font-face {
            font-family: Questrial;
            font-weight: 400;
            font-style: normal;
            font-display: swap;
            src: url("cdn/fonts/questrial/questrial_n4.0ba6d2b6094954bab23732c75d3ecb4c47a5869c5ade.woff2?h1=Mzk1Mzk5LTNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;h2=bHVjaWVuYmFncy5jb20&amp;h3=bHVjaWVuYmFncy5teXNob3BpZnkuY29t&amp;hmac=4c561f9a322a44cd8aa9da990315f48e48b72144e8c0cfaf7778b5ef09e6e49e") format("woff2"),
                url("cdn/fonts/questrial/questrial_n4.5abce10d8846bb9326c9741eaffed9667c847692ba6b.woff?h1=Mzk1Mzk5LTNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;h2=bHVjaWVuYmFncy5jb20&amp;h3=bHVjaWVuYmFncy5teXNob3BpZnkuY29t&amp;hmac=fab57bd09956065b9c5a135e5959021522df1d2a3dbd25a9c1b336e268cab045") format("woff");
        }




        @font-face {
            font-family: "Joanna Sans Nova";
            font-weight: 400;
            font-style: normal;
            font-display: swap;
            src: url("cdn/fonts/joanna_sans_nova/joannasansnova_n4.3c63e31c5905a1b4ddfca1fc29d7985819f31f4ade06.woff2?h1=Mzk1Mzk5LTNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;h2=bHVjaWVuYmFncy5jb20&amp;h3=bHVjaWVuYmFncy5teXNob3BpZnkuY29t&amp;hmac=cb47bd6f6362adc5eddf6d0e83b95d4c21dd6bbfea47e99c0eb27b865d1a7b9e") format("woff2"),
                url("cdn/fonts/joanna_sans_nova/joannasansnova_n4.ac0c3c62232bff1c11f30e7a81d70d6436dd6ebf90f5.woff?h1=Mzk1Mzk5LTNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;h2=bHVjaWVuYmFncy5jb20&amp;h3=bHVjaWVuYmFncy5teXNob3BpZnkuY29t&amp;hmac=6d4e1065a1846d4552bc37892df10b74fd401e91ffa65b30cf757fee68e91724") format("woff");
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

    <link href="cdn/shop/t/3/assets/base4889.css?v=25513028573540360251713312590" rel="stylesheet" type="text/css"
        media="all" />
    <link rel="preload" as="font"
        href="cdn/fonts/questrial/questrial_n4.0ba6d2b6094954bab23732c75d3ecb4c47a5869c5ade.woff2?h1=Mzk1Mzk5LTNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;h2=bHVjaWVuYmFncy5jb20&amp;h3=bHVjaWVuYmFncy5teXNob3BpZnkuY29t&amp;hmac=4c561f9a322a44cd8aa9da990315f48e48b72144e8c0cfaf7778b5ef09e6e49e"
        type="font/woff2" crossorigin>
    <link rel="preload" as="font"
        href="cdn/fonts/joanna_sans_nova/joannasansnova_n4.3c63e31c5905a1b4ddfca1fc29d7985819f31f4ade06.woff2?h1=Mzk1Mzk5LTNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;h2=bHVjaWVuYmFncy5jb20&amp;h3=bHVjaWVuYmFncy5teXNob3BpZnkuY29t&amp;hmac=cb47bd6f6362adc5eddf6d0e83b95d4c21dd6bbfea47e99c0eb27b865d1a7b9e"
        type="font/woff2" crossorigin>
    <link rel="stylesheet"
        href="cdn/shop/t/3/assets/component-predictive-search0c40.css?v=118923337488134913561713312590" media="print"
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
    <link rel="prefetch" href="../cdn.ecomposer.app/vendors/css/ecom-base.css" as="style" />
    <link rel="prefetch" href="../cdn.ecomposer.app/vendors/css/ecom-swiper%4011.css" as="style" />
    <link rel="prefetch" href="../cdn.ecomposer.app/vendors/js/ecom-swiper%4011.0.5.js" as="script" />
    <link rel="prefetch" href="../cdn.ecomposer.app/vendors/js/ecom_modal.js" as="script" />
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
                domain: 'https://bintaro.in',
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

                this.formatMoney = function (t, e) { const r = this.currencyCodeEnabled ? this.money_with_currency_format : this.money_format; function a(t, e) { return void 0 === t ? e : t } function o(t, e, r, o) { if (e = a(e, 2), r = a(r, ","), o = a(o, "."), isNaN(t) || null == t) return 0; var n = (t = (t / 100).toFixed(e)).split("."); return n[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1" + r) + (n[1] ? o + n[1] : "") } "string" == typeof t && (t = t.replace(".", "")); var n = "", i = /\{\{\s*(\w+)\s*\}\}/, s = e || r; switch (s.match(i)[1]) { case "amount": n = o(t, 2); break; case "amount_no_decimals": n = o(t, 0); break; case "amount_with_comma_separator": n = o(t, 2, ".", ","); break; case "amount_with_space_separator": n = o(t, 2, " ", ","); break; case "amount_with_period_and_space_separator": n = o(t, 2, " ", "."); break; case "amount_no_decimals_with_comma_separator": n = o(t, 0, ".", ","); break; case "amount_no_decimals_with_space_separator": n = o(t, 0, " "); break; case "amount_with_apostrophe_separator": n = o(t, 2, "'", ".") }return s.replace(i, n) }, this.resizeImage = function (t, e) { try { if (!e || "original" == e || "full" == e || "master" == e) return t; if (-1 !== t.indexOf("cdn.shopify.com") || -1 !== t.indexOf("cdn/shop/index.html")) { var r = t.match(/\.(jpg|jpeg|gif|png|bmp|bitmap|tiff|tif|webp)((\#[0-9a-z\-]+)?(\?v=.*)?)?$/gim); if (null == r) return null; var a = t.split(r[0]), o = r[0]; return a[0] + "_" + e + o } } catch (r) { return t } return t }, this.getProduct = function (t) { if (!t) return !1; let e = ("/" === this.routes.root_url ? "" : this.routes.root_url) + "/products/" + t + ".js?shop=" + Shopify.shop; return window.ECOM_LIVE && (e = "/shop/builder/ajax/ecom-proxy/products/" + t + "?shop=" + Shopify.shop), window.fetch(e, { headers: { "Content-Type": "application/json" } }).then(t => t.json()) };
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
    <link href="../cdn.shopify.com/extensions/b2b456f5-3ab2-41d7-8d46-f6e1aa5314c3/ecomsend-popups-17/assets/style.css"
        rel="stylesheet" type="text/css" media="all">
    <script src="../cdn.shopify.com/extensions/d485f024-cdef-4373-9a58-98f2b6538406/ecomposer-builder-18/assets/ecom.js"
        type="text/javascript" defer="defer"></script>
    <script
        src="../cdn.shopify.com/extensions/0087e139-9c3f-4e5a-b860-82fcb0939a91/inbox-318/assets/inbox-chat-loader.js"
        type="text/javascript" defer="defer"></script>
    <!-- <link href="https://monorail-edge.shopifysvc.com/" rel="dns-prefetch"> -->
    <script>(function () { if ("sendBeacon" in navigator && "performance" in window) { var session_token = document.cookie.match(/_shopify_s=([^;]*)/); function handle_abandonment_event(e) { var entries = performance.getEntries().filter(function (entry) { return /monorail-edge.shopifysvc.com/.test(entry.name); }); if (!window.abandonment_tracked && entries.length === 0) { window.abandonment_tracked = true; var currentMs = Date.now(); var navigation_start = performance.timing.navigationStart; var payload = { shop_id: 57346457684, url: window.location.href, navigation_start, duration: currentMs - navigation_start, session_token: session_token && session_token.length === 2 ? session_token[1] : "", page_type: "index" }; window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({ schema_id: "online_store_buyer_site_abandonment/1.1", payload: payload, metadata: { event_created_at_ms: currentMs, event_sent_at_ms: currentMs } })); } } window.addEventListener('pagehide', handle_abandonment_event); } }());</script>
    <script
        id="web-pixels-manager-setup">(function e(e, n, a, t, r) { var o = "function" == typeof BigInt && -1 !== BigInt.toString().indexOf("[native code]") ? "modern" : "legacy"; window.Shopify = window.Shopify || {}; var i = window.Shopify; i.analytics = i.analytics || {}; var s = i.analytics; s.replayQueue = [], s.publish = function (e, n, a) { return s.replayQueue.push([e, n, a]), !0 }; try { self.performance.mark("wpm:start") } catch (e) { } var l = [a, "/wpm", "/b", r, o.substring(0, 1), ".js"].join(""); !function (e) { var n = e.src, a = e.async, t = void 0 === a || a, r = e.onload, o = e.onerror, i = document.createElement("script"), s = document.head, l = document.body; i.async = t, i.src = n, r && i.addEventListener("load", r), o && i.addEventListener("error", o), s ? s.appendChild(i) : l ? l.appendChild(i) : console.error("Did not find a head or body element to append the script") }({ src: l, async: !0, onload: function () { var a = window.webPixelsManager.init(e); n(a); var t = window.Shopify.analytics; t.replayQueue.forEach((function (e) { var n = e[0], t = e[1], r = e[2]; a.publishCustomEvent(n, t, r) })), t.replayQueue = [], t.publish = a.publishCustomEvent, t.visitor = a.visitor }, onerror: function () { var n = e.storefrontBaseUrl.replace(/\/$/, ""), a = "".concat(n, "/.well-known/shopify/monorail/unstable/produce_batch"), r = JSON.stringify({ metadata: { event_sent_at_ms: (new Date).getTime() }, events: [{ schema_id: "web_pixels_manager_load/2.0", payload: { version: t || "latest", page_url: self.location.href, status: "failed", error_msg: "".concat(l, " has failed to load") }, metadata: { event_created_at_ms: (new Date).getTime() } }] }); try { if (self.navigator.sendBeacon.bind(self.navigator)(a, r)) return !0 } catch (e) { } var o = new XMLHttpRequest; try { return o.open("POST.html", a, !0), o.setRequestHeader("Content-Type", "text/plain"), o.send(r), !0 } catch (e) { console && console.warn && console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.") } return !1 } }) })({ shopId: 57346457684, storefrontBaseUrl: "https://bintaro.in", extensionsBaseUrl: "https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager", surface: "storefront-renderer", enabledBetaFlags: ["5de24938", "3b4293f9"], webPixelsConfigList: [{ "id": "shopify-app-pixel", "configuration": "{}", "eventPayloadVersion": "v1", "runtimeContext": "STRICT", "scriptVersion": "090", "apiClientId": "shopify-pixel", "type": "APP", "purposes": ["ANALYTICS", "MARKETING"] }, { "id": "shopify-custom-pixel", "eventPayloadVersion": "v1", "runtimeContext": "LAX", "scriptVersion": "090", "apiClientId": "shopify-pixel", "type": "CUSTOM", "purposes": ["ANALYTICS", "MARKETING"] }], initData: { "cart": null, "checkout": null, "customer": null, "productVariants": [], "shop": { "name": "Lucien", "paymentSettings": { "currencyCode": "INR" }, "myshopifyDomain": "395399-3d.myshopify.com", "countryCode": "IN", "storefrontUrl": "https:\/\/bintaro.in" } }, }, function pageEvents(webPixelsManagerAPI) { webPixelsManagerAPI.publish("page_viewed"); }, "cdn.html", "b1960ab3902be1b2d5e4e73559d88a06fe391814", "2618fd15wf7957246p4fe5c48am4cbbec41",);</script>
    <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
        window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
        window.ShopifyAnalytics.meta.currency = 'INR';
        var meta = { "page": { "pageType": "home" } };
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
                                source_url: "//bintaro.in/cdn/s/trekkie.storefront.dd626a6a6fbdab104f8779acc4331c330134c832.min.js"
                            });

                    };
                    scriptFallback.async = true;
                    scriptFallback.src = 'cdn/s/trekkie.storefront.dd626a6a6fbdab104f8779acc4331c330134c832.min.js';
                    first.parentNode.insertBefore(scriptFallback, first);
                };
                script.async = true;
                script.src = 'cdn/s/trekkie.storefront.dd626a6a6fbdab104f8779acc4331c330134c832.min.js';
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

                window.ShopifyAnalytics.lib.page(null, { "pageType": "home" });

                var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
                var token = match ? match[1] : undefined;
                if (!hasLoggedConversion(token)) {
                    setCookieIfConversion(token);

                }
            });


            var eventsListenerScript = document.createElement('script');
            eventsListenerScript.async = true;
            eventsListenerScript.src = "cdn/shopifycloud/shopify/assets/shop_events_listener-61fa9e0a912c675e178777d2b27f6cbd482f8912a6b0aa31fa3515985a8cd626.js";
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
                "cdn/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
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
        <link href="cdn/shop/t/3/assets/component-slideshow89cf.css?v=107725913939919748051713312590" rel="stylesheet"
            type="text/css" media="all" />
        <link href="cdn/shop/t/3/assets/component-sliderc021.css?v=142503135496229589681713312590" rel="stylesheet"
            type="text/css" media="all" />

        <link href="cdn/shop/t/3/assets/component-list-socialec93.css?v=35792976012981934991713312590" rel="stylesheet"
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
        <link rel="stylesheet" href="cdn/shop/t/3/assets/component-list-menu1726.css?v=151968516119678728991713312590"
            media="print" onload="this.media='all'">
        <link rel="stylesheet" href="cdn/shop/t/3/assets/component-searcha5de.css?v=165164710990765432851713312590"
            media="print" onload="this.media='all'">
        <link rel="stylesheet" href="cdn/shop/t/3/assets/component-menu-drawer6d57.css?v=85170387104997277661713312590"
            media="print" onload="this.media='all'">
        <link rel="stylesheet"
            href="cdn/shop/t/3/assets/component-cart-notification446e.css?v=54116361853792938221713312590" media="print"
            onload="this.media='all'">
        <link rel="stylesheet" href="cdn/shop/t/3/assets/component-cart-items94ef.css?v=136978088507021421401713312590"
            media="print" onload="this.media='all'">
        <link rel="stylesheet" href="cdn/shop/t/3/assets/component-pricef983.css?v=70172745017360139101713312590"
            media="print" onload="this.media='all'"><noscript>
            <link href="cdn/shop/t/3/assets/component-list-menu1726.css?v=151968516119678728991713312590"
                rel="stylesheet" type="text/css" media="all" />
        </noscript>
        <noscript>
            <link href="cdn/shop/t/3/assets/component-searcha5de.css?v=165164710990765432851713312590" rel="stylesheet"
                type="text/css" media="all" />
        </noscript>
        <noscript>
            <link href="cdn/shop/t/3/assets/component-menu-drawer6d57.css?v=85170387104997277661713312590"
                rel="stylesheet" type="text/css" media="all" />
        </noscript>
        <noscript>
            <link href="cdn/shop/t/3/assets/component-cart-notification446e.css?v=54116361853792938221713312590"
                rel="stylesheet" type="text/css" media="all" />
        </noscript>
        <noscript>
            <link href="cdn/shop/t/3/assets/component-cart-items94ef.css?v=136978088507021421401713312590"
                rel="stylesheet" type="text/css" media="all" />
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
        <script src="cdn/shop/t/3/assets/details-disclosureb350.js?v=13653116266235556501713312590"
            defer="defer"></script>
        <script src="cdn/shop/t/3/assets/details-modal6838.js?v=25581673532751508451713312590" defer="defer"></script>
        <script src="cdn/shop/t/3/assets/cart-notification4a77.js?v=133508293167896966491713312590"
            defer="defer"></script>
        <script src="cdn/shop/t/3/assets/search-form5dcf.js?v=133129549252120666541713312590" defer="defer"></script>
        <svg xmlns="http://www.w3.org/2000/svg" class="hidden">
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
                        <summary class="header__icon header__icon--menu header__icon--summary link focus-inset"
                            aria-label="Menu">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                    class="icon icon-hamburger" fill="none" viewBox="0 0 18 16">
                                    <path
                                        d="M1 .5a.5.5 0 100 1h15.71a.5.5 0 000-1H1zM.5 8a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1A.5.5 0 01.5 8zm0 7a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1a.5.5 0 01-.5-.5z"
                                        fill="currentColor">
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                    class="icon icon-close" fill="none" viewBox="0 0 18 17">
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
                                            <li><a id="HeaderDrawer-home" href="index"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset menu-drawer__menu-item--active"
                                                    aria-current="page">
                                                    Home
                                                </a></li>
                                            <li><a id="HeaderDrawer-shop-all" href="collections/all"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                    Shop All
                                                </a></li>
                                            <li><a id="HeaderDrawer-slings" href="collections/slingbag"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                    Slings
                                                </a></li>
                                            <li><a id="HeaderDrawer-shoulder-bags" href="collections/shoulder-bag"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                    Shoulder Bags
                                                </a></li>
                                            <li><a id="HeaderDrawer-totebag" href="collections/totebag"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                    Totebag
                                                </a></li>
                                            <li><a id="HeaderDrawer-bagpacks" href="collections/backpack"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                    Bagpacks
                                                </a></li>
                                            <li><a id="HeaderDrawer-wallets" href="collections/wallets"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                    Wallets
                                                </a></li>
                                            <li><a id="HeaderDrawer-handbag" href="collections/handbags"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                    Handbag
                                                </a></li>
                                            <li><a id="HeaderDrawer-bags-under-999" href="collections/bags-under-999"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                    Bags Under 999
                                                </a></li>
                                            <li><a id="HeaderDrawer-track-your-order"
                                                    href="https://lucienbags.shiprocket.co/"
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
                                                <a href="https://www.facebook.com/lucienbags/" class="list-social__link link">
                                                    <i class="fa-brands fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item">
                                                <a href="https://www.instagram.com/lucienbags/" class="list-social__link link">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item" style="text-decoration: none;">
                                                <a href="https://www.youtueb.com/bintaro/" class="link list-social__link">
                                                    <i class="fa-brands fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item" style="text-decoration: none;">
                                                <a href="https://www.linkedin.com/bintaro/" class="link list-social__link">
                                                    <i class="fa-brands fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item" style="text-decoration: none;">
                                                <a href="https://mail.google.com/bintaro/" class="link list-social__link">
                                                    <i class="fa-solid fa-envelope"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item" style="text-decoration: none;">
                                                <a href="https://wa.me/+919832508313" class="link list-social__link">
                                                    <i class="fa-brands fa-whatsapp"></i>
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
                        <summary
                            class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle"
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
                        <div class="search-modal modal__content gradient" role="dialog" aria-modal="true"
                            aria-label="Search">
                            <div class="modal-overlay"></div>
                            <div class="search-modal__content search-modal__content-bottom" tabindex="-1">
                                <predictive-search class="search-modal__form" data-loading-text="Loading...">
                                    <form action="https://bintaro.in/search" method="get" role="search"
                                        class="search search-modal__form">
                                        <div class="field">
                                            <input class="search__input field__input" id="Search-In-Modal-1"
                                                type="search" name="q" value="" placeholder="Search" role="combobox"
                                                aria-expanded="false" aria-owns="predictive-search-results"
                                                aria-controls="predictive-search-results" aria-haspopup="listbox"
                                                aria-autocomplete="list" autocorrect="off" autocomplete="off"
                                                autocapitalize="off" spellcheck="false">
                                            <label class="field__label" for="Search-In-Modal-1">Search</label>
                                            <input type="hidden" name="options[prefix]" value="last">
                                            <button type="reset" class="reset__button field__button hidden"
                                                aria-label="Clear search term">
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
                                        <div class="predictive-search predictive-search--header" tabindex="-1"
                                            data-predictive-search>

                                            <link
                                                href="cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                                rel="stylesheet" type="text/css" media="all" />

                                            <div class="predictive-search__loading-state">
                                                <svg aria-hidden="true" focusable="false" class="spinner"
                                                    viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                                    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33"
                                                        r="30"></circle>
                                                </svg>
                                            </div>
                                        </div>

                                        <span class="predictive-search-status visually-hidden" role="status"
                                            aria-hidden="true"></span>
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
                <h1 class="header__heading"><a href="index" class="header__heading-link link link--text focus-inset">
                        <div class="header__heading-logo-wrapper">
                            <img src="cdn/shop/files/lucien-2-1_1dcbc.png?v=1708598719&amp;width=600" alt="Lucien"
                                width="100" height="48.457602339181285" loading="eager"
                                class="header__heading-logo motion-reduce" sizes="(max-width: 280px) 50vw, 140px">
                        </div>
                    </a>
                </h1>
                <div class="header__icons">
                    <div class="desktop-localization-wrapper">
                    </div>
                    <details-modal class="header__search">
                        <details>
                            <summary
                                class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle"
                                aria-haspopup="dialog" aria-label="Search">
                                <span>
                                    <svg class="modal__toggle-open icon icon-search" aria-hidden="true"
                                        focusable="false">
                                        <use href="#icon-search">
                                    </svg>
                                    <svg class="modal__toggle-close icon icon-close" aria-hidden="true"
                                        focusable="false">
                                        <use href="#icon-close">
                                    </svg>
                                </span>
                            </summary>
                            <div class="search-modal modal__content gradient" role="dialog" aria-modal="true"
                                aria-label="Search">
                                <div class="modal-overlay"></div>
                                <div class="search-modal__content search-modal__content-bottom" tabindex="-1">
                                    <predictive-search class="search-modal__form" data-loading-text="Loading...">
                                        <form action="https://bintaro.in/search" method="get" role="search"
                                            class="search search-modal__form">
                                            <div class="field">
                                                <input class="search__input field__input" id="Search-In-Modal"
                                                    type="search" name="q" value="" placeholder="Search" role="combobox"
                                                    aria-expanded="false" aria-owns="predictive-search-results"
                                                    aria-controls="predictive-search-results" aria-haspopup="listbox"
                                                    aria-autocomplete="list" autocorrect="off" autocomplete="off"
                                                    autocapitalize="off" spellcheck="false">
                                                <label class="field__label" for="Search-In-Modal">Search</label>
                                                <input type="hidden" name="options[prefix]" value="last">
                                                <button type="reset" class="reset__button field__button hidden"
                                                    aria-label="Clear search term">
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
                                            <div class="predictive-search predictive-search--header" tabindex="-1"
                                                data-predictive-search>

                                                <link
                                                    href="cdn/shop/t/3/assets/component-loading-spinner30cb.css?v=116724955567955766481713312590"
                                                    rel="stylesheet" type="text/css" media="all" />

                                                <div class="predictive-search__loading-state">
                                                    <svg aria-hidden="true" focusable="false" class="spinner"
                                                        viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                                        <circle class="path" fill="none" stroke-width="6" cx="33"
                                                            cy="33" r="30"></circle>
                                                    </svg>
                                                </div>
                                            </div>

                                            <span class="predictive-search-status visually-hidden" role="status"
                                                aria-hidden="true"></span>
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

                    <a href="cart" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble"><svg
                            class="icon icon-cart-empty" aria-hidden="true" focusable="false"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" fill="none">
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
                <div id="cart-notification" class="cart-notification focus-inset color-scheme-2 gradient"
                    aria-modal="true" aria-label="Item added to your cart" role="dialog" tabindex="-1">
                    <div class="cart-notification__header">
                        <h2 class="cart-notification__heading caption-large text-body"><svg class="icon icon-checkmark"
                                aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 12 9" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.35.643a.5.5 0 01.006.707l-6.77 6.886a.5.5 0 01-.719-.006L.638 4.845a.5.5 0 11.724-.69l2.872 3.011 6.41-6.517a.5.5 0 01.707-.006h-.001z"
                                    fill="currentColor" />
                            </svg>
                            Item added to your cart
                        </h2>
                        <button type="button"
                            class="cart-notification__close modal__close-button link link--text focus-inset"
                            aria-label="Close">
                            <svg class="icon icon-close" aria-hidden="true" focusable="false">
                                <use href="#icon-close">
                            </svg>
                        </button>
                    </div>
                    <div id="cart-notification-product" class="cart-notification-product"></div>
                    <div class="cart-notification__links">
                        <a href="cart" id="cart-notification-button"
                            class="button button--secondary button--full-width">View
                            cart</a>
                        <form action="https://bintaro.in/cart" method="post" id="cart-notification-form">
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
    
      "logo": "cdn/shop/files/lucien-2-1_1dcbc.png?v=1708598719\u0026width=500",
    
    "sameAs": [
      "",
      "",
      "",
      "index.html\/\/www.instagram.com\/lucienbags\/",
      "",
      "",
      "",
      "",
      ""
    ],
    "url": "https:\/\/bintaro.in"
  }
</script>
        <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "Lucien",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https:\/\/bintaro.in\/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      },
      "url": "https:\/\/bintaro.in"
    }
  </script>
    </div>
    <!-- END sections: header-group -->