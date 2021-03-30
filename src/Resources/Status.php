<?php

namespace OkDesk\Resources;

use OkDesk\Resources\Traits\CreateTrait;
use OkDesk\Resources\Issue;

class Status extends AbstractResource
{
    use CreateTrait;
    /**
     *
     *
     * @var string
     */
    protected $endpoint = 'statuses';

    /**
     *
     *
     * @var string
     */
    protected $issuesEndpoint = 'issues';
    /**
     *
     *
     * @param string $id
     * @return string
     * @internal
     */

    protected function endpoint($end = null)
    {
        $issueID = $this->api()->issues->attributes['id'];
        if($issueID === null) return null;

        return $this->issuesEndpoint . '/' . $issueID . '/' . $this->endpoint;
    }

}

