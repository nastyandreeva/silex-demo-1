<?php
  require 'vendor/autoload.php';

  //const app = express();
  $app = new Silex\Application();

  $app->get('/', function () {
    return '<h1>Hello!</h1>';
  });

  $app->run();