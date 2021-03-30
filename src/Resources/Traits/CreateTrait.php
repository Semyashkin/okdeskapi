<?php

namespace OkDesk\Resources\Traits;

trait CreateTrait
{
    /**
     * @param integer $end string
     * @return string
     * @internal
     */
    abstract protected function endpoint($end = null);

    /**
     * @return \OkDesk\Api
     * @internal
     */
    abstract protected function api();

    public function create(array $data)
    {
        return $this->api()->request('POST', $this->endpoint(), $data);
    }
}