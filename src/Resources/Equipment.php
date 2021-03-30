<?php

namespace OkDesk\Resources;

use OkDesk\Resources\Traits\AllTrait;
use OkDesk\Resources\Traits\ViewTrait;

class Equipment extends AbstractResource
{

    use AllTrait, ViewTrait;

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = 'equipments';
}