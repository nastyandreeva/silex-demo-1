<?php
  require 'vendor/autoload.php';

  //const app = express();
  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
  ));

  $app->get('/', function () use($app) {
    return $app['twig']->render('home.twig', array(
      'content' => 'Добро пожаловать!'
    ));  
  });

  $app->run();