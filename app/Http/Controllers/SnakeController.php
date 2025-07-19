<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnakeController extends Controller
{
    public function showtype()
    {
        return view('pages.snakeTypeDetails');
    }

    public function showtreatment()
    {
        return view('pages.snakebiteTreatment');
    }

    public function showsymptom()
    {
        return view('pages.snakebiteSymptoms');
    }

     public function showimportance()
    {
        return view('pages.importanceOfSnake');
    }
    public function showrabbies()
    {
        return view('pages.rabbies');
    }
}
