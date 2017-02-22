<?php

namespace Kunstmaan\GooglePlacesApi\Configurator;

/**
 * Interface ConfiguratorCollectionInterface.
 */
interface ConfiguratorCollectionInterface
{
    /**
     * @param string                $serviceName
     * @param ConfiguratorInterface $configurator
     */
    public function addConfigurator(string $serviceName, ConfiguratorInterface $configurator);

    /**
     * @return ConfiguratorInterface[]
     */
    public function getConfigurators(): array;
}