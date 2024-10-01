<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Position;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index()
    {
        $employers = Employer::with("positions")->get();
        return view('companies.index', compact('employers'));
    }

    public function show(Employer $employer)
    {
        $positions = Position::where('employer_id', $employer->id)->with(['employer:id,name', "tags"])->get();
        return view('companies.show', compact('positions'));
    }
}
