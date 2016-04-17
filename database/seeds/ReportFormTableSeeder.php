<?php

use Illuminate\Database\Seeder;
use App\ReportForm;

class ReportFormTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $report_forms = File::files(database_path() . '/seeds/report_forms');
        foreach ($report_forms as $path) {
            $form = json_decode(File::get($path), true);
            list($label, $short_label, $form) = array_values(array_only($form, ['label', 'short_label', 'form']));
            $report_form = new ReportForm();
            $report_form->title = $label;
            $report_form->slug = str_slug($short_label);
            $report_form->data = json_encode($form);
            $report_form->save();
        }
    }
}
