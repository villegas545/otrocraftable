<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'tabla' => [
        'title' => 'Tabla',

        'actions' => [
            'index' => 'Tabla',
            'create' => 'New Tabla',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'Direccion' => 'Direccion',
            'Telefono' => 'Telefono',
            'Edad' => 'Edad',
            
        ],
    ],

    'producto' => [
        'title' => 'Productos',

        'actions' => [
            'index' => 'Productos',
            'create' => 'New Producto',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'Cantidad' => 'Cantidad',
            'Descripcion' => 'Descripcion',
            
        ],
    ],

    'alumno' => [
        'title' => 'Alumnos',

        'actions' => [
            'index' => 'Alumnos',
            'create' => 'New Alumno',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'Telefono' => 'Telefono',
            'Edad' => 'Edad',
            'FechaNacimiento' => 'FechaNacimiento',
            
        ],
    ],

    'antuna' => [
        'title' => 'Antuna',

        'actions' => [
            'index' => 'Antuna',
            'create' => 'New Antuna',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'Apellido' => 'Apellido',
            'Nacimiento' => 'Nacimiento',
            'Edad' => 'Edad',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];