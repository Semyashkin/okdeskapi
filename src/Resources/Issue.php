<?php
namespace OkDesk\Resources;

use OkDesk\Resources\Traits\CreateTrait;
use OkDesk\Resources\Traits\ViewTrait;

class Issue extends AbstractResource
{
    use CreateTrait, ViewTrait;

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = 'issues';
    public $attributes = [
        'id' => null,
        'title' => null,
        'description' => null,
        'created_at' => null,
        'completed_at' => null,
        'deadline_at' => null,
        'delayed_to' => null,
        'source' => null,
        'spent_time_total' => null,
        'company_id' => null,
        'service_object_id' => null,
        'equipment_ids' => null,
        'attachments' => null,
        'parameters' => null,
        'status_times' => null,
        'status' => null,
        'old_status' => null,
        'assignee' => null,
        'author' => null,
        'agreement' => null,
        'contact' => null,
        'priority' => null,
        'type' => null,
        'comments' => null,
        'service_object_id' => null,
        'parameters' => null,
    ];


    public function all(array $query = null)
    {
        return $this->api->request('GET', $this->endpoint . '/count', null, $query);
    }
    public function getLink()
    {
        return $this->api()->openUrl . $this->endpoint . '/' . $this->attributes['id'];
    }

}