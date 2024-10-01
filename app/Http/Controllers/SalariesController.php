<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class SalariesController extends Controller
{
    public function index()
{
    $sortDirection = request()->get('sort', 'desc');

    if (!in_array($sortDirection, ['asc', 'desc'])) {
        $sortDirection = 'desc';
    }

    $positions = Position::with(['employer:id,name', 'tags'])
        ->orderBy('salary', $sortDirection)
        ->get();

    return view('salaries.index', compact('positions'));
}

}
