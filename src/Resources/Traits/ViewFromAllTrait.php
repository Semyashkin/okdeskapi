<?php

namespace OkDesk\Resources\Traits;

trait ViewFromAllTrait
{
    /**
     * @param integer $end string
     * @return string
     */
    abstract protected function endpoint($end = null);

    /**
     * @return \OkDesk\Api
     */
    abstract protected function api();

    abstract public function all(array $query = null);

    public function view($id)
    {
        $result = $this->all(['id' => $id]);
        return $this->setAttributes($result);
        //return $this->all(['id' => $id]);
    }
}