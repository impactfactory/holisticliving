<?php namespace ImpactFactory\Objects\Components;

use Cms\Classes\ComponentBase;
use ImpactFactory\Objects\Models\Obj;
//use System\Classes\MediaLibrary;

class ObjDetail extends ComponentBase
{

    public $obj;

    public function componentDetails()
    {
      return [
          'name'        => e(trans('impactfactory.objects::lang.components.objdetailname')),
          'description' => e(trans('impactfactory.objects::lang.components.objdetaildesc'))
      ];
    }

    public function onRun()
    {
      $slug = $this->param('slug');
      $obj = Obj::Where('slug', $slug)->first();

        if ($obj == null) {
            $obj = Obj::transWhere('slug', $slug)->first();
        }

        if (null === $obj) {
            return $this->controller->run('404');
        }

      $this->obj = $obj;

      $this->page['activeMenuItem'] = 'nav.main.art';

    }

}
