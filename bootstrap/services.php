<?php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return function(ContainerConfigurator $configurator) {
    $configurator->parameters()
      ->set('mailer.transport', 'sendMail');

    $services = $configurator->services();

    $services->set('mailer', \App\Models\Mailer::class)
      ->args([param('mailer.transport')]);

    $services->set('newsletter', \App\Models\NewsletterManager::class)
      ->args([service('mailer')]);
};