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
        '/home' => [[['_route' => 'account', '_controller' => 'App\\Controller\\Account\\HomeController::index'], null, null, null, false, false, null]],
        '/admin' => [
            [['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null],
            [['_route' => 'dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null],
        ],
        '/affiche' => [[['_route' => 'affiche', '_controller' => 'App\\Controller\\AfficheController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'article', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, true, false, null]],
        '/cart/delete' => [[['_route' => 'cart_delete_all', '_controller' => 'App\\Controller\\CartController::deleteAll'], null, null, null, false, false, null]],
        '/c' => [[['_route' => 'article_list', '_controller' => 'App\\Controller\\IndexController::home'], null, null, null, false, false, null]],
        '/article/save' => [[['_route' => 'app_index_save', '_controller' => 'App\\Controller\\IndexController::save'], null, null, null, false, false, null]],
        '/article/new' => [[['_route' => 'new_article', '_controller' => 'App\\Controller\\IndexController::new'], null, null, null, false, false, null]],
        '/category/newCat' => [[['_route' => 'new_category', '_controller' => 'App\\Controller\\IndexController::newCategory'], null, null, null, false, false, null]],
        '/cat' => [[['_route' => 'article_par_cat', '_controller' => 'App\\Controller\\IndexController::articlesParCategorie'], null, null, null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/cart/(?'
                    .'|add/([^/]++)(*:189)'
                    .'|remove/([^/]++)(*:212)'
                    .'|delete/([^/]++)(*:235)'
                .')'
                .'|/article/(?'
                    .'|([^/]++)(*:264)'
                    .'|edit/([^/]++)(*:285)'
                    .'|delete/([^/]++)(*:308)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        189 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        212 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        235 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        264 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\IndexController::show'], ['id'], null, null, false, true, null]],
        285 => [[['_route' => 'edit_article', '_controller' => 'App\\Controller\\IndexController::edit'], ['id'], null, null, false, true, null]],
        308 => [
            [['_route' => 'delete_article', '_controller' => 'App\\Controller\\IndexController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
