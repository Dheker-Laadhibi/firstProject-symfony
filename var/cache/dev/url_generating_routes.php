<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_author' => [[], ['_controller' => 'App\\Controller\\AuthorController::index'], [], [['text', '/author']], [], [], []],
    'author' => [['name'], ['_controller' => 'App\\Controller\\AuthorController::showAuth'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/author']], [], [], []],
    'authorTable' => [[], ['_controller' => 'App\\Controller\\AuthorController::listAuthors'], [], [['text', '/authorTable']], [], [], []],
    'author_details' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::authorDetails'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/author/details']], [], [], []],
    'read' => [[], ['_controller' => 'App\\Controller\\AuthorController::read'], [], [['text', '/read']], [], [], []],
    'AddStatic' => [[], ['_controller' => 'App\\Controller\\AuthorController::AddStatic'], [], [['text', '/AddStatic']], [], [], []],
    'Add' => [[], ['_controller' => 'App\\Controller\\AuthorController::Add'], [], [['text', '/Add']], [], [], []],
    'edit' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::edit'], [], [['variable', '', '[^/]++', 'id', true], ['text', '/edit']], [], [], []],
    'remove' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::remove'], [], [['variable', '', '[^/]++', 'id', true], ['text', '/remove']], [], [], []],
    'app_test' => [['name'], ['_controller' => 'App\\Controller\\TestController::test'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/test']], [], [], []],
    'bj' => [['name'], ['_controller' => 'App\\Controller\\TestController::bonjour'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/test']], [], [], []],
    'App\Controller\AuthorController::index' => [[], ['_controller' => 'App\\Controller\\AuthorController::index'], [], [['text', '/author']], [], [], []],
    'App\Controller\AuthorController::showAuth' => [['name'], ['_controller' => 'App\\Controller\\AuthorController::showAuth'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/author']], [], [], []],
    'App\Controller\AuthorController::listAuthors' => [[], ['_controller' => 'App\\Controller\\AuthorController::listAuthors'], [], [['text', '/authorTable']], [], [], []],
    'App\Controller\AuthorController::authorDetails' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::authorDetails'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/author/details']], [], [], []],
    'App\Controller\AuthorController::read' => [[], ['_controller' => 'App\\Controller\\AuthorController::read'], [], [['text', '/read']], [], [], []],
    'App\Controller\AuthorController::AddStatic' => [[], ['_controller' => 'App\\Controller\\AuthorController::AddStatic'], [], [['text', '/AddStatic']], [], [], []],
    'App\Controller\AuthorController::Add' => [[], ['_controller' => 'App\\Controller\\AuthorController::Add'], [], [['text', '/Add']], [], [], []],
    'App\Controller\AuthorController::edit' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::edit'], [], [['variable', '', '[^/]++', 'id', true], ['text', '/edit']], [], [], []],
    'App\Controller\AuthorController::remove' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::remove'], [], [['variable', '', '[^/]++', 'id', true], ['text', '/remove']], [], [], []],
    'App\Controller\TestController::test' => [['name'], ['_controller' => 'App\\Controller\\TestController::test'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/test']], [], [], []],
    'App\Controller\TestController::bonjour' => [['name'], ['_controller' => 'App\\Controller\\TestController::bonjour'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/test']], [], [], []],
];
