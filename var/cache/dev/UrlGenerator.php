<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'bien' => [[], ['_controller' => 'App\\Controller\\BienController::creerBien'], [], [['text', '/newBien']], [], []],
    'bienAjout' => [[], ['_controller' => 'App\\Controller\\BienController::bienAjouter'], [], [['text', '/bienAjout']], [], []],
    'bienModif' => [[], ['_controller' => 'App\\Controller\\BienController::bienModif'], [], [['text', '/bienModif']], [], []],
    'updateBien' => [['id'], ['_controller' => 'App\\Controller\\BienController::updateArticle'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/bien/update']], [], []],
    'immostar' => [[], ['_controller' => 'App\\Controller\\ImmostarController::index'], [], [['text', '/Immostar']], [], []],
    'type' => [[], ['_controller' => 'App\\Controller\\TypeController::creerType'], [], [['text', '/newType']], [], []],
    'typeAjout' => [[], ['_controller' => 'App\\Controller\\TypeController::typeAjouter'], [], [['text', '/typeAjout']], [], []],
    'visite' => [[], ['_controller' => 'App\\Controller\\VisiteController::creerVisite'], [], [['text', '/newVisite']], [], []],
    'visiteAjout' => [[], ['_controller' => 'App\\Controller\\VisiteController::visiteAjouter'], [], [['text', '/visiteAjout']], [], []],
    'visiteur' => [[], ['_controller' => 'App\\Controller\\VisiteurController::creerVisiteur'], [], [['text', '/newVisiteur']], [], []],
    'visiteurAjout' => [[], ['_controller' => 'App\\Controller\\VisiteurController::visiteurAjouter'], [], [['text', '/visiteurAjout']], [], []],
    'visiteurModif' => [[], ['_controller' => 'App\\Controller\\VisiteurController::visiteurModif'], [], [['text', '/visiteurModif']], [], []],
    'updateVisiteur' => [['id'], ['_controller' => 'App\\Controller\\VisiteurController::updateVisiteur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/visiteur/update']], [], []],
];
