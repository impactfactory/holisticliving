<?php namespace ImpactFactory\Objects\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Tags extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('ImpactFactory.Objects', 'main-menu-item', 'side-menu-tags');
    }
}
