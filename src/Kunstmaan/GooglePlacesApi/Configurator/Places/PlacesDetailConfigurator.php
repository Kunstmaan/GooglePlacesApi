<?php

namespace Kunstmaan\GooglePlacesApi\Configurator\Places;

use Kunstmaan\GooglePlacesApi\Configurator\AbstractConfigurator;

/**
 * Class PlacesConfigurator.
 */
class PlacesDetailConfigurator extends AbstractConfigurator
{
    const URI_PLACE_DETAIL = '/maps/api/place/details';

    /**
     * PlacesConfigurator constructor.
     *
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        parent::__construct($apiKey);
    }

    /**
     * @param string $format
     *
     * @throws \InvalidArgumentException
     *
     * @return string
     */
    public function getUri(string $format): string
    {
        $this->checkFormat($format);

        return sprintf("%s/%s", self::URI_PLACE_DETAIL, $format);
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredParameters(): array
    {
        return ['key', 'placeid'];
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionalParameters(): array
    {
        return [];
    }
}