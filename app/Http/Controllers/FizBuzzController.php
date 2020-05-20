<?php

namespace App\Http\Controllers;

class FizBuzzController extends Controller {

    /**
     * Get FizzBuzz data.
     *
     * @var array
     */
    public function index() {
        $data = [];

        for ($i=1; $i <= 100; $i++) { 
            $value = $i;
            if ($i % 15 === 0) {
                $value = 'FizzBuzz';
            } elseif ($i % 3 === 0) {
                $value = 'Fizz';
            } elseif ($i % 5 === 0) {
                $value = 'Buzz';
            }

            $data[] = $value;
        }

        return compact('data');
    }
}
