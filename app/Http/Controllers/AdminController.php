<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {
    public function index() {

        $breadcrumb = (object) [
            'title' => 'Admin',
            'list'  => ['Home', 'Admin']
        ];

        $page = (object) [
            'title' => 'Admin'
        ];

        $activeMenu = 'admin';

        return view('admin', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
