<?php

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

$container = new ContainerBuilder();
// $container
//   ->register('mailer', App\Models\Mailer::class)
//   ->addArgument('sendMail');
// $container
//   ->register('newsletter', App\Models\NewsletterManager::class)
//   ->addArgument(new Reference('mailer'));

// YAML Config File
$loader = new YamlFileLoader($container, new FileLocator(__DIR__));
$loader->load('services.yaml');

// PHP Cconfig File
//$loader = new PhpFileLoader($container, new FileLocator(__DIR__));
//$loader->load('services.php');

return $container;