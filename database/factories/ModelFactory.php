<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
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
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Mahasiswa::class, static function (Faker\Generator $faker) {
    return [
        'nim' => $faker->sentence,
        'nama' => $faker->sentence,
        'umur' => $faker->randomNumber(5),
        'alamat' => $faker->text(),
        'kota' => $faker->sentence,
        'kelas' => $faker->sentence,
        'jurusan' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Umam::class, static function (Faker\Generator $faker) {
    return [
        'nim' => $faker->sentence,
        'nama' => $faker->sentence,
        'umur' => $faker->randomNumber(5),
        'alamat' => $faker->text(),
        'kota' => $faker->sentence,
        'kelas' => $faker->sentence,
        'jurusan' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Emboh::class, static function (Faker\Generator $faker) {
    return [
        'nim' => $faker->sentence,
        'nama' => $faker->sentence,
        'umur' => $faker->randomNumber(5),
        'alamat' => $faker->text(),
        'kota' => $faker->sentence,
        'kelas' => $faker->sentence,
        'jurusan' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Mahasiswa::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Event::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'start' => $faker->date(),
        'end' => $faker->date(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
