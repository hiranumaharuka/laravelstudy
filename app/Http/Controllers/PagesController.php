<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        // index.blade.phpに値を渡している
        $title = "welcome to programming";
        // 1つ目の方法
        // return view('pages.index', compact('title'));
        // 2つ目の方法
        return view('pages.index')->with('title', $title);
    }
    public function about() {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
