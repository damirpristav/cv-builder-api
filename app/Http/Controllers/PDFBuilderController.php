<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;

class PDFBuilderController extends Controller
{
    public function index (Request $request)
    {
        $fields = $request->validate([
            'image' => 'string',
            'fullName' => 'required|string',
            'position' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'expertise' => 'required|array|min:1',
            'languages' => 'required|array|min:1',
            'languages.*.name' => 'required|string',
            'languages.*.level' => 'required|string',
            'experiences' => 'required|array|min:1',
            'experiences.*.from' => 'required|string',
            'experiences.*.to' => 'string|nullable',
            'experiences.*.companyName' => 'required|string',
            'experiences.*.position' => 'required|string',
            'experiences.*.description' => 'required|string',
            'education' => 'required|array|min:1',
            'education.*.from' => 'required|string',
            'education.*.to' => 'string|nullable',
            'education.*.school' => 'required|string',
            'education.*.position' => 'required|string',
            'education.*.description' => 'required|string',
        ]);

        return Pdf::view('template', [
            'fields' => $fields,
        ])->save('cv.pdf');
    }
}
