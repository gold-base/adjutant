<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Academy\talandar;

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
     * @param string $implementer desired implementer of given task
     * @param string $task desired Academy task
     * @return object proper payload
     */
    public function retrieve($implementer, $task)
    {
        // $talandar = new talandar();
        // return $talandar->show();
        return "{$task}-{$implementer}";
    }
}
