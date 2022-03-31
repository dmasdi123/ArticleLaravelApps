<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        // User::create([
        //     'name' => 'Febrian Dimas',
        //     'email' => 'febrian@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Fernanda',
        //     'email' => 'Fernanda@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae est corrupti illum, tenetur iusto ducimus voluptates veritatis totam',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae est corrupti illum, tenetur iusto ducimus voluptates veritatis totam, voluptatibus sequi eum quas cupiditate. Quae quod mollitia facilis rem in quaerat dicta ut, magni natus veritatis inventore, numquam eum impedit aspernatur tempore dolorem ratione. Aspernatur eveniet tenetur ut quas dolorum, reiciendis optio, molestias dolores, numquam minima possimus enim quae earum. Quo molestias tenetur voluptates dicta facilis expedita ex sequi soluta, quis, assumenda provident nobis quas repellat saepe debitis reprehenderit at adipisci animi quidem numquam omnis mollitia dolore! Aliquid nesciunt nobis rem, quam recusandae officia dolor tenetur explicabo sunt a perspiciatis veniam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae est corrupti illum, tenetur iusto ducimus voluptates veritatis totam',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae est corrupti illum, tenetur iusto ducimus voluptates veritatis totam, voluptatibus sequi eum quas cupiditate. Quae quod mollitia facilis rem in quaerat dicta ut, magni natus veritatis inventore, numquam eum impedit aspernatur tempore dolorem ratione. Aspernatur eveniet tenetur ut quas dolorum, reiciendis optio, molestias dolores, numquam minima possimus enim quae earum. Quo molestias tenetur voluptates dicta facilis expedita ex sequi soluta, quis, assumenda provident nobis quas repellat saepe debitis reprehenderit at adipisci animi quidem numquam omnis mollitia dolore! Aliquid nesciunt nobis rem, quam recusandae officia dolor tenetur explicabo sunt a perspiciatis veniam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae est corrupti illum, tenetur iusto ducimus voluptates veritatis totam',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae est corrupti illum, tenetur iusto ducimus voluptates veritatis totam, voluptatibus sequi eum quas cupiditate. Quae quod mollitia facilis rem in quaerat dicta ut, magni natus veritatis inventore, numquam eum impedit aspernatur tempore dolorem ratione. Aspernatur eveniet tenetur ut quas dolorum, reiciendis optio, molestias dolores, numquam minima possimus enim quae earum. Quo molestias tenetur voluptates dicta facilis expedita ex sequi soluta, quis, assumenda provident nobis quas repellat saepe debitis reprehenderit at adipisci animi quidem numquam omnis mollitia dolore! Aliquid nesciunt nobis rem, quam recusandae officia dolor tenetur explicabo sunt a perspiciatis veniam?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
