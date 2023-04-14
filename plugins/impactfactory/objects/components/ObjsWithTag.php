<?php namespace ImpactFactory\Objects\Components;

use Cms\Classes\ComponentBase;
use ImpactFactory\Objects\Models\Obj;
use ImpactFactory\Objects\Models\Tag;
use ImpactFactory\Objects\Component\ObjsAll;

class ObjsWithTag extends ComponentBase
{
    public $objs;
    public $tag;
    //public $test;

    public function componentDetails()
    {
        return [
            'name'        => e(trans('impactfactory.objects::lang.components.tagpagename')),
            'description' => e(trans('impactfactory.objects::lang.components.tagpagedesc')),
        ];
    }

    public function onRun()
    {
      $this->tag = Tag::transWhere('slug', $this->param('slug'))->first();
      if ($this->tag === null) {
          return $this->controller->run('404');
      }

      $this->page['tag'] = $this->tag;

      //$this->page['test'] = $this->tag->id;

      $this->objs = Obj::published()->whereHas('tags', function($q) {
          $q->where('id', $this->tag->id);
      })->get();

      $this->page['activeMenuItem'] = 'nav.main.art';

      /*$this->tag_id = Tag::where('slug', $this->param('slug'))->pluck('name', 'id')->toArray();
      $this->tag_id = $tag_id

      $this->page['tag'] = $this->tag;
      //$this->tag = $tag;

      $this->posts = Post::whereHas('tags', function($q) {
          $q->where('id', $tag_id);
      })->get();

      $this->posts = $posts;*/
    }

}
