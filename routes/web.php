<?php

use Illuminate\Support\Facades\Route;
// import controller
use App\Http\Controllers\Auth\AuthController;

Route::get('/docs', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "name" => "Dea",
        "email" => "deaanandagunawan@gmail.com",
        "image" => "dea.jpg"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "name" => "Dea",
        "email" => "deaanandagunawan@gmail.com",
        "image" => "dea.jpg"
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    ]);
});

Route::get('/projects', function () {
    return view('projects', [
        "title" => "Projects",
    ]);
});

Route::get('/blogs', function () {
    $blog_posts = [
        [
            "title" => "Interior Crocodile Alligator, I Drive a Chevrolet Movie Theater",
            "sub-title" => "🎵 Interior Crocodile Alligator, I Drive a Chevrolet Movie Theater 🎵",
            "slug" => "interior-crocodile-alligator",
            "author" => "John Yallard",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum necessitatibus quis odio placeat consequuntur voluptas fuga eum magnam dolor cum voluptate reiciendis perferendis, cumque commodi atque aliquam dolore? Animi blanditiis consequuntur quod illum! Tempore laudantium eos nesciunt. Beatae ipsum impedit dolorum facere recusandae soluta saepe possimus, quasi vitae ipsa assumenda hic qui ratione magni, sit quos. Non sunt quibusdam nobis sint, suscipit cupiditate facere vel quod rem deserunt magnam corrupti deleniti est hic expedita ut! Incidunt adipisci molestias tenetur repellendus.",
        ],
        [
            "title" => "Shrek Predicted the COVID-19 Pandemic",
            "sub-title" => "Find out how Shrek is disrupting astrology.",
            "slug" => "shrek-predicted",
            "author" => "Zhaol Nurzaman",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum necessitatibus quis odio placeat consequuntur voluptas fuga eum magnam dolor cum voluptate reiciendis perferendis, cumque commodi atque aliquam dolore? Animi blanditiis consequuntur quod illum! Tempore laudantium eos nesciunt. Beatae ipsum impedit dolorum facere recusandae soluta saepe possimus, quasi vitae ipsa assumenda hic qui ratione magni, sit quos. Non sunt quibusdam nobis sint, suscipit cupiditate facere vel quod rem deserunt magnam corrupti deleniti est hic expedita ut! Incidunt adipisci molestias tenetur repellendus.",
        ],
        [
            "title" => "Why My Practice of Thelema Makes Me Better at World of Warcraft",
            "sub-title" => "\"Do what thou wilt\" shall be the whole of the Law.",
            "slug" => "thelema-world-of-warcraft",
            "author" => "Dea Ananda Gunawan",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum necessitatibus quis odio placeat consequuntur voluptas fuga eum magnam dolor cum voluptate reiciendis perferendis, cumque commodi atque aliquam dolore? Animi blanditiis consequuntur quod illum! Tempore laudantium eos nesciunt. Beatae ipsum impedit dolorum facere recusandae soluta saepe possimus, quasi vitae ipsa assumenda hic qui ratione magni, sit quos. Non sunt quibusdam nobis sint, suscipit cupiditate facere vel quod rem deserunt magnam corrupti deleniti est hic expedita ut! Incidunt adipisci molestias tenetur repellendus.",
        ]
    ];

    return view('blogs', [
        "title" => "Blogs",
        "blog_posts" => $blog_posts
    ]);
});


// route login
Route::get('/login', function () {
    return view('login', [
        "title" => "Login",
    ]);
});

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Route::post('register', [AuthController, 'register']);
// Route::post('/register', [AuthController::class, 'register']);

Route::get('/register', function () {
    return view('register', [
        "title" => "Register",
    ]);
});
