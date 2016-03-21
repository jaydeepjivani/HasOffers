<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\HasOffers\Api\Affiliate;

use DraperStudio\HasOffers\Base;

/**
 * Class ServiceProvider.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class ApiKey extends Base
{
    /**
     * API Endpoint Type.
     *
     * @var string
     */
    protected $endpointType = 'Affiliate';

    /**
     * API Endpoint Name.
     *
     * @var string
     */
    protected $endpointName = 'ApiKey';
    /**
     * Generates an API Key for the calling Affiliate User.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function generateApiKey($parameters = [])
    {
        return $this->get('generateApiKey', $parameters);
    }

    /**
     * Returns the API Key for the caller Affiliate User, or NULL if one does not exist.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getUserApiKey($parameters = [])
    {
        return $this->get('getUserApiKey', $parameters);
    }

    /**
     * Retrieve an Affiliate User's Alerts.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function regenerateApiKey($parameters = [])
    {
        return $this->get('regenerateApiKey', $parameters);
    }
}
