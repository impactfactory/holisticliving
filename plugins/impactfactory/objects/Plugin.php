<?php namespace ImpactFactory\Objects;

use System\Classes\PluginBase;
use ImpactFactory\Objects\Components\ObjDetail;
use ImpactFactory\Objects\Components\ObjsAll;
use ImpactFactory\Objects\Components\ObjsInCategory;
use ImpactFactory\Objects\Components\ObjsWithTag;
//use ImpactFactory\Blog\Components\TagCloud;
use ImpactFactory\Objects\Models\Obj;
use ImpactFactory\Objects\Models\Cat;
use ImpactFactory\Objects\Models\Tag;
use ImpactFactory\Objects\Models\Type;
use Event;
use Log;

class Plugin extends PluginBase
{
  public function registerComponents()
  {
    return [
        ObjDetail::class => 'objdetail',
        ObjsAll::class => 'objsall',
        ObjsInCategory::class => 'objsincategory',
        ObjsWithTag::class => 'objswithtag',
        //TagCloud::class => 'tagcloud'
    ];
  }

  public function registerPageSnippets()
  {
    return [
        ObjsAll::class => 'objsall',
    ];
  }
}
