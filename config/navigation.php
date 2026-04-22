<?php

return [
    [
        'label' => 'accueil',
        'url' => '/',
        'icon' => 'bi-house',
        'roles' => null //visible
    ],
    [
        'label' => 'offres',
        'url' => '/offres',
        'icon' => 'bi-briefcase',
        'roles' => null //visible
    ],
    [
        'label' => 'Entreprises',
        'url' => '/entreprises',
        'icon' => 'bi-buildings',
        'roles' => null //visible
    ],
    
    //user
    [
        'label' => 'Mes candidatures',
        'url' => '/candidatures',
        'icon' => 'bi-file-earmark-text',
        'roles' => ['ROLE_USER'],
    ],

    //company
    [
        'label' => 'Espaces entreprise',
        'url' => '/entreprise/offres',
        'icon' => 'bi-briefcase-fill',
        'roles' => ['ROLE_COMPANY'],
    ],

    //admin
    [
        'label' => 'Dashboard',
        'url' => '/admin',
        'icon' => 'bi-speedometer2',
        'roles' => ['ROLE_ADMIN'],
    ],

];
