<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public  function index() {
        $data = [
            'title' => 'Гостевая книга на laravel 5.1',
            'pagetitle' => 'Гостевая книга'
        ];
        return view('pages.messages.index', $data);
    }

    public function edit($id) {
        $data = [
            'title' => 'Редактирование: Гостевая книга на laravel 5.1',
            'pagetitle' => 'Гостевая книга'
        ];
        return view('pages.messages.edit', $data);
    }
}
