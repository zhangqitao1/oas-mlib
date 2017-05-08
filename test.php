<?php
/**
 * Created by PhpStorm.
 * User: og
 * Date: 2017/5/8
 * Time: 16:56
 */
use Oas\Mlib\HttpAssist;

require_once "vendor/autoload.php";

echo HttpAssist::doGet('http://www.baidu.com');
