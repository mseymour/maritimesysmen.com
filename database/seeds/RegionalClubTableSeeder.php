<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class RegionalClubTableSeeder extends CsvSeeder {

    public function __construct()
    {
        $this->table = 'regional_clubs';
        $this->filename = database_path() . '/seeds/csvs/regional_clubs.csv';
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