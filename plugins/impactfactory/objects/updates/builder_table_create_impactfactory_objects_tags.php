<?php namespace ImpactFactory\Objects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateImpactfactoryObjectsTags extends Migration
{
    public function up()
    {
        Schema::create('impactfactory_objects_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->text('desc')->nullable();
            $table->string('image')->nullable();
            $table->string('slug');
            $table->smallInteger('is_published');
            $table->text('meta_title')->nullable();
            $table->text('meta_desc')->nullable();
            $table->string('meta_image')->nullable();
            $table->text('searchtags')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('impactfactory_objects_tags');
    }
}
