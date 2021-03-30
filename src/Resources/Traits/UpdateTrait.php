<?php

namespace OkDesk\Resources\Traits;

trait UpdateTrait
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

    public function update($id, array $data)
    {
        return $this->api()->request('PATCH', $this->endpoint($id), $data);
    }
}