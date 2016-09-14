<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 14/9/16
 * Time: 14:40
 */

namespace App\Http\Controllers\Results;


use App\Http\Controllers\Controller;

class ResultsController extends Controller
{

    /**
     * Show the screen screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('results/results');
    }
}