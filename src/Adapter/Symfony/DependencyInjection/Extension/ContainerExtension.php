<?php declare(strict_types=1);

namespace Symplify\AutoServiceRegistration\Adapter\Symfony\DependencyInjection\Extension;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symplify\AutoServiceRegistration\Adapter\Symfony\SymplifyAutoServiceRegistrationBundle;

final class ContainerExtension extends Extension
{
    public function getAlias(): string
    {
        return SymplifyAutoServiceRegistrationBundle::ALIAS;
    }

    /**
     * @param mixed[] $configs
     */
    public function load(array $configs, ContainerBuilder $containerBuilder): void
    {
    }
}
