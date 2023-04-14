<?php namespace ImpactFactory\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateImpactfactoryTeamOrganisations extends Migration
{
    public function up()
    {
        Schema::table('impactfactory_team_organisations', function($table)
        {
            $table->text('schema_phone2')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('impactfactory_team_organisations', function($table)
        {
            $table->dropColumn('schema_phone2');
        });
    }
}
