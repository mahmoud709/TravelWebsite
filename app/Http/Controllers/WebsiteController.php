<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function websitePage() {
        return view("website.index");
    }
    public function DuqmPage() {
        return view("website.Duqm");
    }
    public function salalahPage() {
        return view("website.salalah");
    }
    public function nizwaPage() {
        return view("website.Nizwa");
    }
    public function surPage() {
        return view("website.sur");
    }
    public function SaharCastle() {
        return view("website.saharcastleinfo");
    }
    public function Mosqueinfo() {
        return view("website.Mosqueinfo");
    }
    public function market() {
        return view("website.market");
    }
    public function garden() {
        return view("website.sahargarden");
    }
}
