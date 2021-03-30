<?php
namespace OkDesk\Resources;

use OkDesk\Resources\Traits\AllTrait;
use OkDesk\Resources\Traits\CreateTrait;
use OkDesk\Resources\Traits\UpdateTrait;
use OkDesk\Resources\Traits\ViewFromAllTrait;
use OkDesk\Resources\Traits\ViewTrait;

class Company extends AbstractResource
{
    use AllTrait, CreateTrait, UpdateTrait, ViewFromAllTrait;

    protected $attributes = [
        'id' => null,
        'name' => null,
        'additional_name' => null,
        'email' => null,
        'crm_1c_id' => null,
    ];
    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = 'companies';
}