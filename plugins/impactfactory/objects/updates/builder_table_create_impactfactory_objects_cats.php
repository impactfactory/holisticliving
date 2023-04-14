<?php namespace ImpactFactory\Objects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateImpactfactoryObjectsCats extends Migration
{
    public function up()
    {
        Schema::create('impactfactory_objects_cats', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->text('desc')->nullable();
            $table->string('slug');
            $table->string('image')->nullable();
            $table->boolean('is_published');
            $table->text('searchtags')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_desc')->nullable();
            $table->text('meta_image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('impactfactory_objects_cats');
    }
}
