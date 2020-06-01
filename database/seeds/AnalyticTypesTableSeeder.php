<?php

use JeroenZwart\CsvSeeder\CsvSeeder;

class AnalyticTypesTableSeeder extends CsvSeeder
{

    public function __construct()
	{
        $this->tablename = 'analytic_types';
        $this->file = '/database/seeds/csvs/AnalyticTypes.csv';
        $this->delimiter = ',';
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
