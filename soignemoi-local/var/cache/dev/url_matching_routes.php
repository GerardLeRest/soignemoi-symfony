<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/formulaire/avis' => [[['_route' => 'app_avis_medecin', '_controller' => 'App\\Controller\\AvisController::verification'], null, ['POST' => 0], null, false, false, null]],
        '/departements' => [[['_route' => 'app_departements', '_controller' => 'App\\Controller\\DepartementsController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/id/medecin' => [[['_route' => 'app_id_medecin', '_controller' => 'App\\Controller\\IdMedecinController::acquisitionIdMedecin'], null, ['POST' => 0], null, false, false, null]],
        '/liste/sejours' => [[['_route' => 'app_liste_sejours', '_controller' => 'App\\Controller\\ListeSejoursController::donneesEntrees'], null, null, null, false, false, null]],
        '/formulaire/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/formulaire/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/formulaire/medecin' => [[['_route' => 'app_formulaire_medecin', '_controller' => 'App\\Controller\\MedecinController::new'], null, null, null, false, false, null]],
        '/patients' => [[['_route' => 'app_patients', '_controller' => 'App\\Controller\\PagesSimplesController::patients'], null, ['GET' => 0], null, false, false, null]],
        '/professionnels' => [[['_route' => 'app_professionnels', '_controller' => 'App\\Controller\\PagesSimplesController::professionnels'], null, ['GET' => 0], null, false, false, null]],
        '/formulaire/prescription' => [[['_route' => 'app_prescriptions', '_controller' => 'App\\Controller\\PrescriptionController::verification'], null, ['POST' => 0], null, false, false, null]],
        '/tous' => [[['_route' => 'app_tous_secretariat', '_controller' => 'App\\Controller\\SecretariatController::donneesTous'], null, ['GET' => 0], null, false, false, null]],
        '/entrees' => [[['_route' => 'app_entrees_secretariat', '_controller' => 'App\\Controller\\SecretariatController::donneesEntrees'], null, ['GET' => 0], null, false, false, null]],
        '/sorties' => [[['_route' => 'app_sorties_secretariat', '_controller' => 'App\\Controller\\SecretariatController::donneesSorties'], null, ['GET' => 0], null, false, false, null]],
        '/sejour' => [[['_route' => 'app_formulaire_sejour', '_controller' => 'App\\Controller\\SejourController::new'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'app_services', '_controller' => 'App\\Controller\\ServicesController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, ['GET' => 0], null, false, false, null]],
        '/formulaire/userpatient' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserPatientController::register'], null, null, null, false, false, null]],
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
                .'|/details/([^/]++)(*:219)'
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
        219 => [
            [['_route' => 'app_details_secretariat', '_controller' => 'App\\Controller\\SecretariatController::details'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
