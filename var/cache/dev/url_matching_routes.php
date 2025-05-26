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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/contact' => [
            [['_route' => 'app_contact_contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, null, null, false, false, null],
            [['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, null, null, false, false, null],
        ],
        '/' => [
            [['_route' => 'app_home_home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null],
            [['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null],
        ],
        '/mentions-legales' => [
            [['_route' => 'app_legalmentions_index', '_controller' => 'App\\Controller\\LegalMentionsController::index'], null, null, null, false, false, null],
            [['_route' => 'legal-mentions', '_controller' => 'App\\Controller\\LegalMentionsController::index'], null, null, null, false, false, null],
        ],
        '/politique-de-confidentialite' => [
            [['_route' => 'app_privacypolicy_index', '_controller' => 'App\\Controller\\PrivacyPolicyController::index'], null, null, null, false, false, null],
            [['_route' => 'private-policy', '_controller' => 'App\\Controller\\PrivatePolicyController::index'], null, null, null, false, false, null],
        ],
        '/recettes' => [
            [['_route' => 'app_recipes_recipes', '_controller' => 'App\\Controller\\RecipesController::recipes'], null, null, null, false, false, null],
            [['_route' => 'recipes', '_controller' => 'App\\Controller\\RecipesController::recipes'], null, null, null, false, false, null],
        ],
        '/connexion' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/recettes/([^/]++)(?'
                    .'|(*:190)'
                .')'
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
        190 => [
            [['_route' => 'app_recipedetails_index', '_controller' => 'App\\Controller\\RecipeDetailsController::index'], ['id'], null, null, false, true, null],
            [['_route' => 'recipes-description', '_controller' => 'App\\Controller\\RecipesDescriptionController::details'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
