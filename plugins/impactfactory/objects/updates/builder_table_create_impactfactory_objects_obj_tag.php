<?php namespace ImpactFactory\Objects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateImpactfactoryObjectsObjTag extends Migration
{
    public function up()
    {
        Schema::create('impactfactory_objects_obj_tag', function($table)
        {
            $table->engine = 'InnoDB';
            $table->smallInteger('obj_id');
            $table->smallInteger('tag_id');
            $table->primary(['obj_id','tag_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('impactfactory_objects_obj_tag');
    }
}
