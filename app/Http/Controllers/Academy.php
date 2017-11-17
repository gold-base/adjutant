<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Academy\talandar;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

/**
   * The Terran Academy, it is here where we will hone our skills
   * -> functions as a training ground to test out our weekly prompt(s)
   *
   */
class Academy extends Controller
{
    /**
     * Universal display function that takes the route input of the desired task
     * and the desired implementer. If found then implemented script will be
     * executed, else a proper response message will be displayed.
     *
     * Let's play around with Method injection :D
     *
     * @param string $implementer desired implementer of given task
     * @param string $task desired Academy task
     * @return object proper payload
     */
    public function retrieve(Route $route)
    {
        dd($route->methods[0] . str_replace($route->action['namespace'], '', $route->action['controller'])); die;
        // $talandar = new talandar();
        // return $talandar->show();
        return "{$route->parameters['task']}-{$route->parameters['task']}";
    }
}
