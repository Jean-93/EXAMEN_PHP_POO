<?php

namespace App\Controller;

class VtcController extends AbstractController {

    public static function index() { 
    echo self::getTwig()->render('vtc/index.html');
    }
}