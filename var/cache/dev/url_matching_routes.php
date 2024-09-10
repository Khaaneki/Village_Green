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
        '/Accueil' => [[['_route' => 'app_Accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/commande/ajout' => [[['_route' => 'app_commande_ajout', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier_index', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, true, false, null]],
        '/panier/empty' => [[['_route' => 'panier_empty', '_controller' => 'App\\Controller\\PanierController::empty'], null, null, null, false, false, null]],
        '/crud/add' => [[['_route' => 'app_produit_add', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/oubli-pass' => [[['_route' => 'mdp_oublie', '_controller' => 'App\\Controller\\SecurityController::motdepasseoublie'], null, null, null, false, false, null]],
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
                .'|/article(?'
                    .'|s/([^/]++)(*:190)'
                    .'|/([^/]++)(*:207)'
                .')'
                .'|/panier/(?'
                    .'|add/([^/]++)(*:239)'
                    .'|remove/([^/]++)(*:262)'
                    .'|del/([^/]++)(*:282)'
                .')'
                .'|/verif/([^/]++)(*:306)'
                .'|/oubli\\-pass/([^/]++)(*:335)'
                .'|/sousRubrique/([^/]++)(*:365)'
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
        190 => [[['_route' => 'app_article', '_controller' => 'App\\Controller\\ArticleController::index'], ['sous_rubrique_id'], ['GET' => 0], null, false, true, null]],
        207 => [[['_route' => 'app_view', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        239 => [[['_route' => 'panier_add', '_controller' => 'App\\Controller\\PanierController::add'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'panier_remove', '_controller' => 'App\\Controller\\PanierController::remove'], ['id'], null, null, false, true, null]],
        282 => [[['_route' => 'panier_del', '_controller' => 'App\\Controller\\PanierController::del'], ['id'], null, null, false, true, null]],
        306 => [[['_route' => 'verify_utilisateur', '_controller' => 'App\\Controller\\RegistrationController::verifUser'], ['token'], null, null, false, true, null]],
        335 => [[['_route' => 'reset_pass', '_controller' => 'App\\Controller\\SecurityController::resetPass'], ['token'], null, null, false, true, null]],
        365 => [
            [['_route' => 'app_sous_rubrique', '_controller' => 'App\\Controller\\SousRubriqueController::index'], ['Id_rubrique'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
