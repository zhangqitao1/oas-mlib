<?php

namespace Oas\Mlib\Utils;

use Symfony\Component\HttpFoundation\Request;

/**
 * Created by PhpStorm.
 * User: og
 * Date: 2017/5/8
 * Time: 15:03
 */
class Page
{

    public static function getPages(Request $request){

        return [1,2,3];
    }
}
