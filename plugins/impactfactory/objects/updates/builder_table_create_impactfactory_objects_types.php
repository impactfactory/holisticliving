<?php namespace ImpactFactory\Objects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateImpactfactoryObjectsTypes extends Migration
{
    public function up()
    {
        Schema::create('impactfactory_objects_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->string('slug');
            $table->boolean('is_published');
            $table->text('desc')->nullable();
            $table->text('meta_desc')->nullable();
            $table->text('meta_title')->nullable();
            $table->string('meta_image')->nullable();
            $table->text('searchtags')->nullable();
            $table->string('image')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('impactfactory_objects_types');
    }
}
