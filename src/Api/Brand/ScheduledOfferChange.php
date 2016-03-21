<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

/**
 * Class ServiceProvider.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class ScheduledOfferChange extends Base
{
    /**
     * API Endpoint Type.
     *
     * @var string
     */
    protected $endpointType = 'Brand';

    /**
     * API Endpoint Name.
     *
     * @var string
     */
    protected $endpointName = 'ScheduledOfferChange';
    /**
     * Create a Scheduled Offer Change.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    /**
     * Find a Scheduled Offer Change by its ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findScheduleById($parameters = [])
    {
        return $this->get('findScheduleById', $parameters);
    }

    /**
     * Find Scheduled Offer Changes.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findSchedules($parameters = [])
    {
        return $this->get('findSchedules', $parameters);
    }

    /**
     * Update a Scheduled Offer Change.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }
}
