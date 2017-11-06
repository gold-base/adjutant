<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Academy\tallandar;

/**
   * The Terran Academy, it is here where we will hone our skills
   * -> functions as a training ground to test out our weekly prompt(s)
   *
   */
class Academy extends Controller
{
    /**
     * This should display via url params to display the desired user's script
     *
     * @param  TODO
     * @return TODO
     */
    public function show()
    {
        $tallandar = new tallandar();
        return $tallandar->show();
    }
}
