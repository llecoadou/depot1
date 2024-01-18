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
        '/' => [[['_route' => 'accueil.index', '_controller' => 'App\\Controller\\AccueilController::index'], null, ['GET' => 0], null, false, false, null]],
        '/apropos' => [[['_route' => 'apropos.index', '_controller' => 'App\\Controller\\AproposController::index'], null, ['GET' => 0], null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion.index', '_controller' => 'App\\Controller\\ConnexionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/conseil' => [[['_route' => 'conseil.index', '_controller' => 'App\\Controller\\ConseilController::index'], null, ['GET' => 0], null, false, false, null]],
        '/contact' => [[['_route' => 'contact.index', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/paiement' => [[['_route' => 'paiement.index', '_controller' => 'App\\Controller\\PaiementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/panier' => [[['_route' => 'panier.index', '_controller' => 'App\\Controller\\PanierController::index'], null, ['GET' => 0], null, false, false, null]],
        '/panier/commande' => [[['_route' => 'panier.commande', '_controller' => 'App\\Controller\\PanierController::commande'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/boutique' => [[['_route' => 'boutique.index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, false, false, null]],
        '/profil' => [[['_route' => 'profil.index', '_controller' => 'App\\Controller\\ProfilController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/recherche' => [[['_route' => 'recherche.index', '_controller' => 'App\\Controller\\RechercheController::index'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team.index', '_controller' => 'App\\Controller\\TeamController::index'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/panier/(?'
                    .'|ajouter/([^/]++)(*:196)'
                    .'|supprimer/([^/]++)(*:222)'
                .')'
                .'|/boutique/(?'
                    .'|liste/([^/]++)(*:258)'
                    .'|detail/([^/]++)(*:281)'
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
        196 => [[['_route' => 'panier.ajouter', '_controller' => 'App\\Controller\\PanierController::ajouter'], ['id'], ['GET' => 0], null, false, true, null]],
        222 => [[['_route' => 'panier.supprimer', '_controller' => 'App\\Controller\\PanierController::supprimer'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'boutique.liste', '_controller' => 'App\\Controller\\ProduitController::liste'], ['id'], ['GET' => 0], null, false, true, null]],
        281 => [
            [['_route' => 'boutique.detail', '_controller' => 'App\\Controller\\ProduitController::detail'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
