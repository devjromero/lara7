<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $response = Gate::inspect('edit-settings', $post);

        dd(Gate::allows('edit-settings'));
        print('<pre>'.print_r('index',true).'</pre>');
    }
}
