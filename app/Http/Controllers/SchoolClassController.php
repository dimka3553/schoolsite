<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    public function index()
    {
        $schoolClasses = SchoolClass:: all();
//        dd($schoolClasses);
        return view('schoolclass.index', compact('schoolClasses'));
    }

    public function show($id)
    {
        $schoolClass = SchoolClass::find($id);
        return view('schoolclass.show', compact('schoolClass'));
    }
}
