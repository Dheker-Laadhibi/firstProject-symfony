<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/author' => [[['_route' => 'app_author', '_controller' => 'App\\Controller\\AuthorController::index'], null, null, null, false, false, null]],
        '/authorTable' => [[['_route' => 'authorTable', '_controller' => 'App\\Controller\\AuthorController::listAuthors'], null, null, null, false, false, null]],
        '/read' => [[['_route' => 'read', '_controller' => 'App\\Controller\\AuthorController::read'], null, null, null, false, false, null]],
        '/AddStatic' => [[['_route' => 'AddStatic', '_controller' => 'App\\Controller\\AuthorController::AddStatic'], null, null, null, false, false, null]],
        '/Add' => [[['_route' => 'Add', '_controller' => 'App\\Controller\\AuthorController::Add'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/author/(?'
                    .'|([^/]++)(*:221)'
                    .'|details/([^/]++)(*:245)'
                .')'
                .'|/edit([^/]++)(*:267)'
                .'|/remove([^/]++)(*:290)'
                .'|/test/([^/]++)(?'
                    .'|(*:315)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        221 => [[['_route' => 'author', '_controller' => 'App\\Controller\\AuthorController::showAuth'], ['name'], null, null, false, true, null]],
        245 => [[['_route' => 'author_details', '_controller' => 'App\\Controller\\AuthorController::authorDetails'], ['id'], null, null, false, true, null]],
        267 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\AuthorController::edit'], ['id'], null, null, false, true, null]],
        290 => [[['_route' => 'remove', '_controller' => 'App\\Controller\\AuthorController::remove'], ['id'], null, null, false, true, null]],
        315 => [
            [['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::test'], ['name'], null, null, false, true, null],
            [['_route' => 'bj', '_controller' => 'App\\Controller\\TestController::bonjour'], ['name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
