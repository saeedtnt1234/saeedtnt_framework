<?php

use Core\Router;

Router::get('/', 'HomeController@index');
Router::get('/register', 'HomeController@register');
Router::post('/login', 'HomeController@login');
Router::post('/dashbord', 'HomeController@login2');
