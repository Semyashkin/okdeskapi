<?php

namespace OkDesk\Resources;

use OkDesk\Resources\Traits\CreateTrait;
use OkDesk\Resources\Issue;

class Comment extends AbstractResource
{
    use CreateTrait;
    /**
     *
     *
     * @var string
     */
    protected $endpoint = 'comments';

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

    public function view(array $query = null)
    {
        return $this->api()->request('GET', $this->endpoint(), null, $query);
    }

    public function create(string $content = '', int $author_id = 1, bool $pub = true)
    {
        $data = ['content' => $content, 'author_id' => $author_id, 'public' => $pub];
        return $this->api()->request('POST', $this->endpoint(), $data);
    }


}