<?php

use JeroenZwart\CsvSeeder\CsvSeeder;

class PropertyAnalyticsTableSeeder extends CsvSeeder 
{

    public function __construct()
	{
		$this->tablename = 'property_analytics';
        $this->file = '/database/seeds/csvs/PropertyAnalytics.csv';
        $this->delimiter = ',';
        //$this->mapping = ['property_id','analytic_type_id','value'];
    }
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();
        
		// Uncomment the below to wipe the table clean before populating
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table($this->tablename)->truncate();
		parent::run();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
