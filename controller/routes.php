<?php

include 'env.php';
include 'function/main.php';
include 'config/conn.php';

$url = $_SERVER['REQUEST_URI'];

$dirName = 'tugas6-pweb';
$url = implode("/",
            array_filter(
                explode("/",
                    str_replace($dirName, "",
                        parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
                        )
                ), 'strlen'
            )
        );
// Membuat router berdasarkan nilai $url
switch ($url) {
    case 'login':
        include 'view/auth_page/login.php';
        break;
    case 'register':
        include 'view/auth_page/register.php';
        break;
    case 'dashboard':
        include 'view/dash_page/dashboard.php';
        break;
    case 'crud':
        include 'view/crud_page/crud.php';
        break;
    case 'testpost':
        echo $_SERVER['REQUEST_METHOD'];
    default:
        echo "<h1>Homepage</h1>";
}

// # GET
// Router::url('/', 'get', function () { return view('home'); });
// Router::url('login', 'get', 'AuthController::login');
// Router::url('register', 'get', 'AuthController::register');
// Router::url('dashboard', 'get', 'DashboardController::index');
// Router::url('dashboard/admin', 'get', 'DashboardController::admin');
// Router::url('dashboard/contacts', 'get', 'DashboardController::contacts');
// Router::url('dashboard/logout', 'get', 'AuthController::logout');
// Router::url('contacts/add', 'get', 'ContactController::add');
// Router::url('contacts/edit', 'get', 'ContactController::edit');
// Router::url('contacts/remove', 'get', 'ContactController::remove');
// Router::url('freshdb', 'get', 'freshdb');
// Router::url('report', 'get', 'ContactController::report');

// # POST
// Router::url('login', 'post', 'AuthController::saveLogin');
// Router::url('register', 'post', 'AuthController::saveRegister');
// Router::url('contacts/add', 'post', 'ContactController::saveAdd');
// Router::url('contacts/edit', 'post', 'ContactController::saveEdit');

// new Router();