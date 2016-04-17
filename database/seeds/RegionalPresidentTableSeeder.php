<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class RegionalPresidentTableSeeder extends CsvSeeder {

    public function __construct()
    {
        $this->table = 'regional_presidents';
        $this->filename = database_path() . '/seeds/csvs/regional_presidents.csv';
    }

    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        DB::table($this->table)->truncate();

        parent::run();
    }
}