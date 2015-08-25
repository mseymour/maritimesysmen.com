<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class EventLinkTableSeeder extends CsvSeeder {

    public function __construct()
    {
        $this->table = 'event_links';
        $this->filename = base_path().'/database/seeds/csvs/event_links.csv';
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