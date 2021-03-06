<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Mockery\CountValidator\Exception;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function version()
    {
        return '<h1>Da cai dat push slack thanh cong .ENV <span style="color: red;">' . env('APP_ENV') . '</span> ---- ver 2.31.1</h1>';
    }

    public function login(Request $request)
    {
//        if(!$request->get('email')) {
//            throw new Exception('eeee');
//        }
        $validator = \Validator::make($request->only(['email', 'password']), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'errors' => $validator->errors()]);
        }

        return response()->json($request->only(['email', 'password']));
    }

    //
}
