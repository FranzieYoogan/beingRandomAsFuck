<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function jureg() {


        return redirect('https://www.youtube.com/watch?v=tII-duWFrQ0&ab_channel=ChaosSprite');


    }


}
