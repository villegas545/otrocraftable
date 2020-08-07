<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Tabla::class, static function (Faker\Generator $faker) {
    return [
        'Nombre' => $faker->sentence,
        'Direccion' => $faker->sentence,
        'Telefono' => $faker->sentence,
        'Edad' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Producto::class, static function (Faker\Generator $faker) {
    return [
        'Nombre' => $faker->sentence,
        'Cantidad' => $faker->randomNumber(5),
        'Descripcion' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Alumno::class, static function (Faker\Generator $faker) {
    return [
        'Nombre' => $faker->sentence,
        'Telefono' => $faker->sentence,
        'Edad' => $faker->randomNumber(5),
        'FechaNacimiento' => $faker->date(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Antuna::class, static function (Faker\Generator $faker) {
    return [
        'Nombre' => $faker->sentence,
        'Apellido' => $faker->sentence,
        'Nacimiento' => $faker->date(),
        'Edad' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
