<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class ProvinceTableSeeder extends CsvSeeder {

    public function __construct()
    {
        $this->table = 'provinces';
        $this->filename = database_path() . '/seeds/csvs/provinces.csv';
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