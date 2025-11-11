<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    true, // $matchHost
    [ // $staticRoutes
        '/blog/list' => [[['_route' => 'blog_blog_list', '_controller' => 'App\\Controller\\BlogController::listBlog'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/brand/new' => [[['_route' => 'app_brand_new', '_controller' => 'App\\Controller\\BrandNewController::index'], null, null, null, false, false, null]],
        '/about-us' => [[['_route' => 'about_us', '_controller' => 'App\\Controller\\CompanyController::about', '_locale' => 'en'], null, null, null, false, false, null]],
        '/over-ons' => [[['_route' => 'about_us', '_controller' => 'App\\Controller\\CompanyController::about', '_locale' => 'nl'], null, null, null, false, false, null]],
        '/test-redirect' => [[['_route' => 'test_redirect', '_controller' => 'App\\Controller\\CompanyController::testRedirect'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\DefaultController::contact'], null, null, null, false, false, 1]],
        '/lucky/number' => [[['_route' => 'lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'map_query_route_test', '_controller' => 'App\\Controller\\LuckyController::dashboard'], null, null, null, false, false, null]],
        '/dashboard-bis' => [[['_route' => 'map_query_route_test_bis', '_controller' => 'App\\Controller\\LuckyController::dashboardBis'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'mobile_homepage', 'subdomain' => 'm', '_controller' => 'App\\Controller\\MainController::mobileHomepage'], '{^(?P<subdomain>m|mobile)\\.example\\.com\\|localhost$}sDiu', null, null, false, false, null],
            [['_route' => 'homepage', '_stateless' => true, '_controller' => 'App\\Controller\\MainController::homepage'], null, null, null, false, false, null],
        ],
        '/home' => [[['_route' => 'home_page', '_controller' => 'App\\Controller\\MainController::homePageTeest'], null, null, null, false, false, null]],
        '/product/test' => [[['_route' => 'app_product_test', '_controller' => 'App\\Controller\\ProductController::productTest'], null, ['GET' => 0], null, false, false, null]],
        '/product' => [[['_route' => 'app_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, false, false, null]],
        '/product/new' => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, ['http' => 0], false, false, null]],
        '/file' => [[['_route' => 'file_test', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'blog_list', '_controller' => 'App\\Controller\\BlogController::list'], null, null, null, false, false, null]],
        '/privacy' => [[['_route' => 'acme_privacy', 'template' => 'static/privacy.html.twig', 'statusCode' => 200, 'maxAge' => 86400, 'sharedAge' => 86400, 'private' => true, 'context' => ['site_name' => 'ACME', 'theme' => 'dark'], '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
        '/doc' => [[['_route' => 'doc_shortcut', 'route' => 'doc_page', 'page' => 'index', 'version' => 'current', 'permanent' => true, 'keepQueryParams' => true, 'keepRequestMethod' => true, 'ignoreAttributes' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'], null, null, null, false, false, null]],
        '/legacy/doc' => [[['_route' => 'legacy_doc', 'path' => 'https://localhost:8001/', 'permanent' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
            .'|(?:(?:[^./]*+\\.)++)(?'
                .'|/blog/(?'
                    .'|(en|es|fr)/(?'
                        .'|posts/([^/]++)(*:66)'
                        .'|listing(*:80)'
                        .'|(\\d+)(*:92)'
                    .')'
                    .'|blog\\-tech(?:/(\\d+))?(*:121)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:161)'
                    .'|wdt/([^/]++)(*:181)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:223)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:260)'
                                .'|router(*:274)'
                                .'|exception(?'
                                    .'|(*:294)'
                                    .'|\\.css(*:307)'
                                .')'
                            .')'
                            .'|(*:317)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|rticles/(en|fr)/search(?:\\.(html|xml))?(*:372)'
                    .'|pi/posts/([^/]++)(?'
                        .'|(*:400)'
                    .')'
                .')'
                .'|/posts/([^/]++)(*:425)'
                .'|/share/(.+)(*:444)'
                .'|/lucky/number/([^/]++)(*:474)'
                .'|/([^/]++)/orders/list(?:/([^/]++))?(*:517)'
                .'|/product/([^/]++)(?'
                    .'|(*:545)'
                    .'|/edit(*:558)'
                    .'|(*:566)'
                .')'
            .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        66 => [[['_route' => 'blog_blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['_locale', 'slug'], null, null, false, true, null]],
        80 => [[['_route' => 'blog_index', '_controller' => 'App\\Controller\\BlogController::index'], ['_locale'], null, null, false, false, null]],
        92 => [[['_route' => 'blog_blog_list_page', '_controller' => 'App\\Controller\\BlogController::list'], ['_locale', 'page'], null, null, false, true, null]],
        121 => [[['_route' => 'blog_blog_list_tech', 'page' => 1, '_controller' => 'App\\Controller\\BlogController::listTech'], ['page'], null, null, false, true, null]],
        161 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        181 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        223 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        260 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        274 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        294 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        307 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        317 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        372 => [[['_route' => 'app_article_search', '_locale' => 'en', '_format' => 'html', '_controller' => 'App\\Controller\\ArticleController::search'], ['_locale', '_format'], null, null, false, true, null]],
        400 => [
            [['_route' => 'app_blogapi_show', '_controller' => 'App\\Controller\\BlogApiController::show'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null],
            [['_route' => 'app_blogapi_edit', '_controller' => 'App\\Controller\\BlogApiController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        425 => [[['_route' => 'post_show', '_controller' => 'App\\Controller\\DefaultController::showPost'], ['id'], null, null, false, true, -2]],
        444 => [[['_route' => 'share', '_controller' => 'App\\Controller\\DefaultController::share'], ['token'], null, null, false, true, null]],
        474 => [[['_route' => 'lucky_number_max', '_controller' => 'App\\Controller\\LuckyController::numberBis'], ['max'], null, null, false, true, null]],
        517 => [[['_route' => 'list_orders_by_status', 'status' => 'paid', '_controller' => 'App\\Controller\\OrderController::list'], ['_locale', 'status'], null, null, false, true, null]],
        545 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        558 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        566 => [
            [['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    static function ($condition, $context, $request, $params) { // $checkCondition
        switch ($condition) {
            case 1: return (\in_array($context->getMethod(), [0 => "GET", 1 => "HEAD"], true) && (static function ($regexp, $str) { set_error_handler(static fn ($t, $m) => throw new \Symfony\Component\ExpressionLanguage\SyntaxError(sprintf('Regexp "%s" passed to "matches" is not valid', $regexp).substr($m, 12))); try { return preg_match($regexp, (string) $str); } finally { restore_error_handler(); } })("/firefox/i", $request->headers->get("User-Agent")));
            case -2: return ((($context->getParameter('_functions')->get('env')("APP_ENV")) == "dev") || ($params->id < 100));
        }
    },
];
