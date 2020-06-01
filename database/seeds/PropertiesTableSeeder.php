<?php

use JeroenZwart\CsvSeeder\CsvSeeder;

class PropertiesTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->tablename = 'properties';
        $this->file = '/database/seeds/csvs/Properties.csv';
        $this->delimiter = ',';
        //$this->header = FALSE;
        // $this->mapping = ['id','suburb', 'State','Country'];
        // $this->aliases = ['csvColumnName' => 'table_column_name', 'foo' => 'bar'];
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