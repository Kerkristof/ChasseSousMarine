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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/comments' => [[['_route' => 'api_comments', '_controller' => 'App\\Controller\\BlogController::apiBlogComment'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\EspeceController::home'], null, null, null, false, false, null]],
        '/espece/new' => [[['_route' => 'espece_create', '_controller' => 'App\\Controller\\EspeceController::create'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/site/new' => [[['_route' => 'site_new', '_controller' => 'App\\Controller\\SiteController::create'], null, null, null, false, false, null]],
        '/sortie/mine' => [[['_route' => 'sortie_mine', '_controller' => 'App\\Controller\\SortieController::mine'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/blog(?'
                    .'|(?:/([^/]++))?(*:191)'
                    .'|/delete/([^/]++)(*:215)'
                .')'
                .'|/espece/(?'
                    .'|index(?:/([^/]++))?(*:254)'
                    .'|edit/([^/]++)(*:275)'
                    .'|show/([^/]++)(*:296)'
                    .'|delete/([^/]++)(*:319)'
                .')'
                .'|/s(?'
                    .'|ite/(?'
                        .'|index(?:/([^/]++))?(*:359)'
                        .'|edit/([^/]++)(*:380)'
                        .'|show/([^/]++)(*:401)'
                        .'|delete/([^/]++)(*:424)'
                    .')'
                    .'|ortie/(?'
                        .'|index/([^/]++)(?:/([^/]++))?(*:470)'
                        .'|show/([^/]++)(*:491)'
                        .'|new/([^/]++)(*:511)'
                        .'|edit/([^/]++)/([^/]++)(*:541)'
                        .'|delete/([^/]++)(*:564)'
                    .')'
                .')'
                .'|/prise/delete/([^/]++)(*:596)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'blog', 'page' => 1, '_controller' => 'App\\Controller\\BlogController::index'], ['page'], null, null, false, true, null]],
        215 => [[['_route' => 'blog_comment_delete', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'espece_index', 'page' => 1, '_controller' => 'App\\Controller\\EspeceController::index'], ['page'], null, null, false, true, null]],
        275 => [[['_route' => 'espece_edit', '_controller' => 'App\\Controller\\EspeceController::create'], ['id'], null, null, false, true, null]],
        296 => [[['_route' => 'espece_show', '_controller' => 'App\\Controller\\EspeceController::show'], ['id'], null, null, false, true, null]],
        319 => [[['_route' => 'espece_delete', '_controller' => 'App\\Controller\\EspeceController::delete'], ['id'], null, null, false, true, null]],
        359 => [[['_route' => 'site_index', 'page' => 1, '_controller' => 'App\\Controller\\SiteController::index'], ['page'], null, null, false, true, null]],
        380 => [[['_route' => 'site_edit', '_controller' => 'App\\Controller\\SiteController::create'], ['id'], null, null, false, true, null]],
        401 => [[['_route' => 'site_show', '_controller' => 'App\\Controller\\SiteController::show'], ['id'], null, null, false, true, null]],
        424 => [[['_route' => 'site_delete', '_controller' => 'App\\Controller\\SiteController::delete'], ['id'], null, null, false, true, null]],
        470 => [[['_route' => 'sortie_index', 'page' => 1, '_controller' => 'App\\Controller\\SortieController::index'], ['site_id', 'page'], null, null, false, true, null]],
        491 => [[['_route' => 'sortie_show', '_controller' => 'App\\Controller\\SortieController::show'], ['id'], null, null, false, true, null]],
        511 => [[['_route' => 'sortie_new', '_controller' => 'App\\Controller\\SortieController::create'], ['site_id'], null, null, false, true, null]],
        541 => [[['_route' => 'sortie_edit', '_controller' => 'App\\Controller\\SortieController::create'], ['site_id', 'id'], null, null, false, true, null]],
        564 => [[['_route' => 'sortie_delete', '_controller' => 'App\\Controller\\SortieController::delete'], ['id'], null, null, false, true, null]],
        596 => [
            [['_route' => 'prise_delete', '_controller' => 'App\\Controller\\SortieController::priseDelete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
