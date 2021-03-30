<?php

namespace OkDesk\Resources;

use OkDesk\Resources\Traits\AllTrait;
use OkDesk\Resources\Traits\ViewTrait;

class Agreement extends AbstractResource
{

    use AllTrait, ViewTrait;

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = 'agreements';

    /**
     * The companies resource endpoint
     *
     * @var string
     */
    protected $companiesEndpoint = 'companies';
    /**
     * Creates the forums endpoint
     *
     * @param string $id
     * @return string
     * @internal
     */
    protected function companiesEndpoint($id = null)
    {
        return $id === null ? $this->companiesEndpoint : $this->companiesEndpoint . '/' . $id;
    }
    public function company($id)
    {
        return $this->api()->request('GET', $this->companiesEndpoint($id . '/' . $this->endpoint), null);
    }
}