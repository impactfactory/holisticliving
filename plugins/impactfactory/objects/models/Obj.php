<?php namespace ImpactFactory\Objects\Models;

use Model;
use RainLab\Translate\Behaviors\TranslatableModel;
use October\Rain\Database\Traits\Sortable;
use System\Models\File;

/**
 * Model
 */
class Obj extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'impactfactory_objects_objs';

    public $implement = [
      TranslatableModel::class
    ];

    protected $slugs = ['slug' => 'title'];

    public $rules = [
        'slug' => 'required',
        'title' => 'required'
    ];

    public $translatable = [
        'author_url',
        'co_authors',
        'codevalue',
        'desc',
        'locations',
        'meta_desc',
        'meta_title',
        'publication_channel',
        'publication_url',
        'reviews',
        'slug',
        'title',
        'meta_title',
        'meta_desc'
    ];

    protected $jsonable = [
          'audios',
          'co_authors',
          'locations',
          'videos',
          'reviews'
    ];

    public $belongsToMany = [
        'categories' => [
            Cat::class, 'table' => 'impactfactory_objects_obj_cat'
        ],
        'tags' => [
            Tag::class, 'table' => 'impactfactory_objects_obj_tag'
        ],
        'types' => [
            Type::class, 'table' => 'impactfactory_objects_obj_type'
        ]
    ];

    public $attachMany = [
        'fotos' => [File::class, 'delete' => true],
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
