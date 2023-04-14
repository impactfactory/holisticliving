<?php namespace ImpactFactory\Objects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateImpactfactoryObjectsObjCat extends Migration
{
    public function up()
    {
        Schema::create('impactfactory_objects_obj_cat', function($table)
        {
            $table->engine = 'InnoDB';
            $table->smallInteger('obj_id');
            $table->smallInteger('cat_id');
            $table->primary(['obj_id','cat_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('impactfactory_objects_obj_cat');
    }
}
