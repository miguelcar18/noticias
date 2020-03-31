<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Category Page Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in the Category Page. You are free to modify
    | these language lines according to your application's requirements.
    |
     */
    'meta' => [
        'title' => '',
        'description' => '',
    ],

    'index' => [
        'page_title' => 'Listado de categorías',
        'page_header' => 'Listado de categorías',
        'breadcrumb' => 'Categorías',

        'create' => 'Nueva categoría',
        'edit' => 'Editar categoría',
        'destroy' => [
            'tooltip' => 'Eliminar categoría',
            'alert' => [
                'title' => '¿Seguro desea eliminar esta categoría?',
                'text' => 'Esta acción no se puede deshacer.',
                'confirm' => 'Si, eliminar.',
                'cancel' => 'No.',
            ],
        ],
        'columns' => [
            'name' => 'Nombre',
            'parent' => 'Categoría(s) padre',
            'actions' => 'Acciones',
        ],
    ],

    'create' => [
        'page_title' => 'Crear categoría',
        'page_header' => 'Crear categoría',
        'breadcrumb' => 'Crear categoría',

        'profile' => [
            'heading' => 'Perfil público',
            'text' => 'Esta es la información que compartes con otros usuarios.',
        ],

    ],

    'edit' => [
        'page_title' => 'Editar categoría',
        'page_header' => 'Editar categoría',
        'breadcrumb' => 'Editar categoría',

        'profile' => [
            'heading' => 'Perfil público',
            'text' => 'Esta es la información que compartes con otros usuarios.',
        ],

    ],

    'fields' => [
        'parent' => 'Categoría(s) padre',
        'name' => 'Nombre',
        'description' => 'Descripción',
        'submit' => [
            'save' => 'Guardar',
        ],
    ],

];
