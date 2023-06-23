<?php

namespace App\Http\Controllers;

use App\Models\Badword;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function filterWord($value)
    {
        $badwords=Badword::all();
        $words=[];
        $replace=[];
        foreach ($badwords as $badword){
            $words[]=$badword->name;
            $replace[]=$badword->replace;
        }
        $content=str_ireplace($words,$replace,$value,$cnt);
        return [$content,$cnt];
    }
}
