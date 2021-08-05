<?php

namespace Infrastructure\Symfony;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    public function getProjectRoot(): string
    {
        return \dirname(__DIR__, 3);
    }

    protected function configureContainer(ContainerConfigurator $container): void
    {
        $container->import($this->getProjectRoot() . '/config/{packages}/*.yaml');
        $container->import($this->getProjectRoot() . '/config/{packages}/' . $this->environment . '/*.yaml');

        if (is_file($this->getProjectRoot() . '/config/services.yaml')) {
            $container->import($this->getProjectRoot() . '/config/services.yaml');
            $container->import($this->getProjectRoot() . '/config/{services}_' . $this->environment . '.yaml');
        } else {
            $container->import($this->getProjectRoot() . '/config/{services}.php');
        }
    }

    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        $routes->import($this->getProjectRoot() . '/config/{routes}/' . $this->environment . '/*.yaml');
        $routes->import($this->getProjectRoot() . '/config/{routes}/*.yaml');

        if (is_file($this->getProjectRoot() . '/config/routes.yaml')) {
            $routes->import($this->getProjectRoot() . '/config/routes.yaml');
        } else {
            $routes->import($this->getProjectRoot() . '/config/{routes}.php');
        }
    }
}
