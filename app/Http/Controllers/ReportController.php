<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Forms\ReportForm;
use App\ReportForm as ReportFormModel;
use Kris\LaravelFormBuilder\FormBuilder;
use Storage;

class ReportController extends Controller
{
    public function index()
    {
        return view('reports.index')->withReportForms(ReportFormModel::all());
    }

    public function create(FormBuilder $formBuilder, ReportFormModel $report_form)
    {
        $form = $formBuilder->create(ReportForm::class, [
            'method' => 'POST',
            'url' => route('reports.store', $report_form->slug),
            'data' => ['formdata' => $report_form->data],
        ]);

        return view('reports.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder, ReportFormModel $report_form)
    {
        $form = $formBuilder->create(ReportForm::class, [
            'data' => ['formdata' => $report_form->data]
        ]);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        dd($form);
        // Do saving and other things...
    }
}
