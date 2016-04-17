<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ReportForm extends Form
{
    public function buildForm()
    {
        foreach ($this->data['formdata'] as $fieldset) {
            $this->add(str_slug($fieldset->label), 'form', [
                'class' => 'App\Forms\ReportFormFieldset',
                'formOptions' => [],
                'label' => $fieldset->label,
                'data' => ['formdata' => $fieldset->content]
            ]);
        }
        $this->add('do', 'submit', [
            'label' => 'Submit Report'
        ]);
    }
}

class ReportFormFieldset extends Form
{
    use ReportFormTrait;

    public function buildForm()
    {
        foreach ($this->data['formdata'] as $field) {
            switch ($field->type) {
                case 'month+year':
                    $this->add(str_slug($field->label), 'select', [
                        'label' => $field->label,
                        'choices' => $this->generateMonthYearArray(),
                        'selected' => date('F Y')
                    ]);
                    break;

                default:
                    $this->add(str_slug($field->label), $field->type, [
                        'label' => $field->label,
                        'attr' => [
                            'placeholder' => isset($field->placeholder) ? $field->placeholder : null,
                        ],
                    ]);
                    break;
            }
        }
    }
}

trait ReportFormTrait
{
    public function generateMonthYearArray()
    {
        // April 2016 +1 = May 2016
        // April 2016 - 12 = April 2015
        $begin = new \DateTime( '@'.strtotime('First day of next month'));
        $begin->modify( '+1 month');
        $begin->setTimezone(new \DateTimeZone(date_default_timezone_get()));
        $end = clone $begin;
        $end->modify( '-12 months' );

        $interval = new \DateInterval('P1M');
        $date_period = new \DatePeriod($end, $interval, $begin);
        $current_month = (new \DateTime)->format('y n');
        $months = [];
        foreach($date_period as $date) {
            $month_number = (int)$date->format('n');

            $current_year = (int)$date->format('Y');
            $previous_year = $current_year - 1;
            $next_year = $current_year + 1;
            $current_label = $date->format('F Y');

            if($month_number < 7) {
                $months[$previous_year.'/'.$current_year][$current_label] = $current_label;
            } elseif($month_number >= 7 && $month_number <= 8) {
                $months['Summer of '.$date->format('Y')][$current_label] = $current_label;
            } elseif($month_number > 8) {
                $months[$current_year.'/'.$next_year][$current_label] = $current_label;
            }
        }
        return $months;
    }
}