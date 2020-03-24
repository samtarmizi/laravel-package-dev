<?php

namespace Samtarmizi\Greeting\Controllers;

use App\Http\Controllers\Controller;

class GreetingController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function greeting()
    {
        return 'Hi, this is your awesome package!';
    }
}