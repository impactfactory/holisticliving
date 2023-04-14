<?php namespace ImpactFactory\Objects\Components;

use Cms\Classes\ComponentBase;
use ImpactFactory\Objects\Models\Obj;
use ImpactFactory\Objects\Models\Cat;

class ObjsInCategory extends ComponentBase
{
    public $objs;
    public $cat;

    public function componentDetails()
    {
      return [
          'name'        => e(trans('impactfactory.objects::lang.components.catpagename')),
          'description' => e(trans('impactfactory.objects::lang.components.catpagedesc'))
      ];
    }


    public function onRun()
    {
      $this->cat = Cat::transWhere('slug', $this->param('slug'))->first();
      if ($this->cat === null) {
          return $this->controller->run('404');
      }

      $this->page['cat'] = $this->cat;

      $this->objs = Obj::published()->whereHas('categories', function($q) {
          $q->where('id', $this->cat->id);
      })->get();

      $this->page['activeMenuItem'] = 'nav.main.art';

      /*$this->posts = Post::whereHas('categories', function($q) {
          $q->where('id', 'slugid');
      })->get();*/

    }

    /*

    protected function prepareContextItem()
     {
         // load tag
         $this->tag = Tag::whereTranslatable('slug', $this->param('slug') )->first();

         return $this->tag;
     }


   protected function getPostsQuery()
   {
       $query = Post::whereHas('tags', function ($query) {
           $query->whereTranslatable('slug', $this->tag->slug);
       });

       if ($this->includeSeriesPosts) {
           $query->orWhereHas('series', function ($query) {
               $query->whereHas('tags', function ($query) {
                   $query->whereTranslatable('slug', $this->tag->slug);
               });
           });
       }

       $query->isPublished();

       return $query;
   }*/


}
