<?php namespace ImpactFactory\Objects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateImpactfactoryObjectsObjs extends Migration
{
    public function up()
    {
        Schema::create('impactfactory_objects_objs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('title');
            $table->text('desc')->nullable();
            $table->string('create_date')->nullable();
            $table->boolean('is_published')->nullable();
            $table->text('slug');
            $table->text('audios')->nullable();
            $table->string('videos')->nullable();
            $table->string('poster')->nullable();
            $table->text('locations')->nullable();
            $table->string('publication_year')->nullable();
            $table->text('publication_channel')->nullable();
            $table->text('publication_url')->nullable();
            $table->text('author_firstname')->nullable();
            $table->text('author_lastname')->nullable();
            $table->text('co_authors')->nullable();
            $table->text('reviews')->nullable();
            $table->text('author_url')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_desc')->nullable();
            $table->string('meta_image')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('impactfactory_objects_objs');
    }
}
