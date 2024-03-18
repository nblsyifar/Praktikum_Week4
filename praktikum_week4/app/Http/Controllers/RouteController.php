<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
// 4.3 Praktik Controller Route
{
    public function index() {
        return "This is from Controller";
        }
    // 4.8 point 2 Praktik Named Route
    public function profile($profileId) {
        return "This is Profile from Controller, profile id: ".$profileId;
        }
}
