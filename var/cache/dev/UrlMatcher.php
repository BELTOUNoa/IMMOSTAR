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
        '/newBien' => [[['_route' => 'bien', '_controller' => 'App\\Controller\\BienController::creerBien'], null, null, null, false, false, null]],
        '/bienAjout' => [[['_route' => 'bienAjout', '_controller' => 'App\\Controller\\BienController::bienAjouter'], null, null, null, false, false, null]],
        '/bienModif' => [[['_route' => 'bienModif', '_controller' => 'App\\Controller\\BienController::bienModif'], null, null, null, false, false, null]],
        '/Immostar' => [[['_route' => 'immostar', '_controller' => 'App\\Controller\\ImmostarController::index'], null, null, null, false, false, null]],
        '/newType' => [[['_route' => 'type', '_controller' => 'App\\Controller\\TypeController::creerType'], null, null, null, false, false, null]],
        '/typeAjout' => [[['_route' => 'typeAjout', '_controller' => 'App\\Controller\\TypeController::typeAjouter'], null, null, null, false, false, null]],
        '/newVisite' => [[['_route' => 'visite', '_controller' => 'App\\Controller\\VisiteController::creerVisite'], null, null, null, false, false, null]],
        '/visiteAjout' => [[['_route' => 'visiteAjout', '_controller' => 'App\\Controller\\VisiteController::visiteAjouter'], null, null, null, false, false, null]],
        '/newVisiteur' => [[['_route' => 'visiteur', '_controller' => 'App\\Controller\\VisiteurController::creerVisiteur'], null, null, null, false, false, null]],
        '/visiteurAjout' => [[['_route' => 'visiteurAjout', '_controller' => 'App\\Controller\\VisiteurController::visiteurAjouter'], null, null, null, false, false, null]],
        '/visiteurModif' => [[['_route' => 'visiteurModif', '_controller' => 'App\\Controller\\VisiteurController::visiteurModif'], null, null, null, false, false, null]],
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
                .'|/bien/update/([^/]++)(*:190)'
                .'|/visiteur/update/([^/]++)(*:223)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'updateBien', '_controller' => 'App\\Controller\\BienController::updateArticle'], ['id'], null, null, false, true, null]],
        223 => [
            [['_route' => 'updateVisiteur', '_controller' => 'App\\Controller\\VisiteurController::updateVisiteur'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
