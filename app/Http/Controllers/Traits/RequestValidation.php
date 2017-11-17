<?php

namespace App\Http\Controllers;

/**
 * Universal Request validation
 */
trait RequestValidation
{
    private static $expected = [
        'get\academy@retrieve' => [
            'expected'
        ],
    ];

    /**
     * Boot function from laravel.
     */
    public static function validate($controllerAction, $route)
    {
        // saves the need for a default switch & univerformalize the request via Route injection
        $derivedRoute = $route->methods[0] . str_replace($route->action['namespace'], '', $route->action['controller']);
        $result = ['passed' => false, 'message' => "derived route of '{$derivedRoute}' is currently unsupported"];

        // whats needed & possible
        switch (strtolower($derivedRoute)) {
            case 'get\academy@retrieve':

                break;
        }
        return $result;
    }
}
