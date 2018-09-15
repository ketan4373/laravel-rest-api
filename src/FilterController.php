<?php namespace Froiden\RestAPI;

use Froiden\RestAPI\ApiController;

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
