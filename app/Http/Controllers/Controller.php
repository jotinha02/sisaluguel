<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function unmaskMoney($money){

        $result = str_replace('.', '', $money);
        $result = str_replace(',', '.', $result);
        $result = str_replace('R$', '', $result);
        $result = str_replace(' ', '', $result);
        return floatval($result);
    }
}