<?php

namespace OkDesk\Resources;

use OkDesk\Api;

abstract class AbstractResource
{
    protected $api;
    protected $endpoint;
    protected $attributes = [];

    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    protected function endpoint($id = null)
    {
        return $id === null ? $this->endpoint : $this->endpoint . '/' . $id;
    }

    /**
     * @return Api
     * @internal
     */
    protected function api()
    {
        return $this->api;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
        return null;
    }

    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->attributes) && !empty($value)) {
            if(!is_array($value)) $value = strip_tags($value);
            $this->attributes[$name] = $value;
        }
    }

    public function setAttributes(array $attributes)
    {
        foreach ($attributes as $key => $attribute) {
            $this->__set($key, $attribute);
        }

        return $this;
    }

    public function toArray()
    {
        return $this->attributes;
    }

    public function toJson($pretty = false)
    {
        return json_encode($this->attributes, $pretty ? JSON_PRETTY_PRINT : 0);
    }
}