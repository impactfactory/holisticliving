<?php namespace ImpactFactory\Objects\Components;

use Cms\Classes\ComponentBase;
use ImpactFactory\Objects\Models\Obj;

class ObjsAll extends ComponentBase
{
    public $objs;

    public function componentDetails()
    {
        return [
            'name'        => e(trans('impactfactory.objects::lang.components.objsallname')),
            'description' => e(trans('impactfactory.objects::lang.components.objsalldesc'))
        ];
    }


    public function onRun()
    {
        $this->objs = Obj::published()->get();
    }

}
