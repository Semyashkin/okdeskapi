<?php

namespace OkDesk\Resources;

use OkDesk\Resources\Traits\AllTrait;
use OkDesk\Resources\Traits\CreateTrait;
use OkDesk\Resources\Traits\UpdateTrait;
use OkDesk\Resources\Traits\ViewFromAllTrait;

class Contact extends AbstractResource
{
    use AllTrait, CreateTrait, UpdateTrait, ViewFromAllTrait;
    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = 'contacts';

}