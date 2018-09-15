<?php namespace Ketan4373\RestAPI;

use Ketan4373\RestAPI\ApiController;

class FilterController extends ApiController {

    /**
     * Overriding constructor to pass model
     *
     * @var Model::class
     */
    public function __construct($model)
    {
        $this->model = $model;
        parent::__construct();
    }
    
}
