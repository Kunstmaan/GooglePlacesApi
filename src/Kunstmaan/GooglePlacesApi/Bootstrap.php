<?php

namespace Kunstmaan\GooglePlacesApi;

use Kunstmaan\GooglePlacesApi\Configurator\ConfiguratorCollection;
use Kunstmaan\GooglePlacesApi\Configurator\Places\PlacesAutoCompleteConfigurator;
use Kunstmaan\GooglePlacesApi\Configurator\Places\PlacesDetailConfigurator;
use Kunstmaan\GooglePlacesApi\Service\Places\PlacesApi;

/**
 * Class Bootstrap.
 */
class Bootstrap
{
    /**
     * @param string $apiKey
     *
     * @return ConfiguratorCollection
     */
    public function getConfiguratorCollection(string $apiKey): ConfiguratorCollection
    {
        $collection = new ConfiguratorCollection();
        $collection->addConfigurator(
            PlacesApi::CONFIGURATOR_SERVICE_PLACE_AUTO_COMPLETE,
            new PlacesAutoCompleteConfigurator($apiKey)
        );
        $collection->addConfigurator(
            PlacesApi::CONFIGURATOR_SERVICE_PLACE_DETAIL,
            new PlacesDetailConfigurator($apiKey)
        );

        return $collection;
    }
}