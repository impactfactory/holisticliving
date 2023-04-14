<?php namespace ImpactFactory\Objects\Models;

use Model;
use RainLab\Translate\Behaviors\TranslatableModel;
use October\Rain\Database\Traits\Sortable;
use \October\Rain\Database\Traits\Validation;


class Cat extends Model
{
  use \October\Rain\Database\Traits\Sluggable;

  public $implement = [
    TranslatableModel::class
  ];

  public $timestamps = false;

  public $table = 'impactfactory_objects_cats';

  public $translatable = [
        'name',
        'desc',
        'slug',
        'meta_title',
        'meta_desc'
    ];

  protected $slugs = ['slug' => 'name'];

  public $rules = [
      'slug' => 'required',
      'name' => 'required'
  ];

  public function scopePublished($query)
  {
      $query->where('is_published', true);
  }

  /* needed for url translation */
  public static function translateParams($params, $oldLocale, $newLocale) {
      $newParams = $params;
      foreach ($params as $paramName => $paramValue) {
          $records = self::transWhere($paramName, $paramValue, $oldLocale)->first();
          if ($records) {
              $records->translateContext($newLocale);
              $newParams[$paramName] = $records->$paramName;
          }
      }
      return $newParams;
  }

}
