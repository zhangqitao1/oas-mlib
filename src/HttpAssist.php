<?php

namespace Oas\Mlib;

use GuzzleHttp\Client;

/**
 * Created by PhpStorm.
 * User: og
 * Date: 2017/5/8
 * Time: 16:42
 */
class HttpAssist
{

    public static function doPost($url, $params = [], $timeout = 10, $headers = [], $json = null)
    {

        return self::makeServerRequest($url, $params, $timeout, 'POST', $headers, $json);
    }

    public static function doGet($url, $timeout = 10, $headers = [])
    {

        return self::makeServerRequest($url, [], $timeout, "GET", $headers);
    }

    private static function makeServerRequest(
        $url,
        $params = [],
        $timeout = 10,
        $method,
        $headerData = [],
        $json = null

    )
    { 
        $client = new  Client();
 
        try {
            $result = $client->request(
                $method,
                $url,
                [
                    'http_errors' => false,
                    'headers'     => $headerData,
                    'form_params' => $params,
                    'timeout'     => $timeout,
                    'json'        => $json,
                ]
            );
        }
        catch (\ErrorException $e) { 
            return false;
        }
        return $result->getBody()->getContents();
    }
}
