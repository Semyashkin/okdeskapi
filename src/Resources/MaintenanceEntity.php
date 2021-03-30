<?php

namespace OkDesk\Resources;

use OkDesk\Resources\Traits\AllTrait;
use OkDesk\Resources\Traits\ViewTrait;

class MaintenanceEntity extends AbstractResource
{
    use AllTrait, ViewTrait;

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = 'maintenance_entities';
    protected $attributes = [
        'name' => null,
        'company_id' => null,
    ];
}