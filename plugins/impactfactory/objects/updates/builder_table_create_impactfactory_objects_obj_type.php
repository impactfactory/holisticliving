<?php namespace ImpactFactory\Objects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateImpactfactoryObjectsObjType extends Migration
{
    public function up()
    {
        Schema::create('impactfactory_objects_obj_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->smallInteger('obj_id');
            $table->smallInteger('type_id');
            $table->primary(['obj_id','type_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('impactfactory_objects_obj_type');
    }
}
