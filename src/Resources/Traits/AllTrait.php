<?php

namespace OkDesk\Resources\Traits;

trait AllTrait
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

    public function all(array $query = null)
    {
        return $this->api()->request('GET', $this->endpoint(), null, $query);
    }
}