<?php

require 'vendor/autoload.php';
require 'functions.php';
require 'core/bootstrap.php';



$router = Router::load('routes.php')
    ->direct(Request::uri(), Request::method());





