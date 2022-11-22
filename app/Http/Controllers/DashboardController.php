<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Inertia\Inertia;
use Inertia\Response;
use \Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function login(Request $request) : Response
    {
        return Inertia::render('login', ['greeting' => 'fuga']);
    }

    public function post(Request $request) : RedirectResponse
    {
        $authData = $request->validate([
            'password' => 'string',
        ]);
        $ret = back();
        $keep = intval($authData['keep']) === 1 ? true : false;
        unset($authData['keep']);
        if (Auth::guard('shrine')->attempt($authData, $keep)) {
            $ret = redirect()->route('dashboard.index');
        }

        return $ret;
    }
}
