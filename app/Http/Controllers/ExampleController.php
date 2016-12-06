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

    public function version() {
        return response()->json(['version' => 'aaa sdg sdgsdgj sdgjkgh sdjghsdjghjk Day la phien ban moi 1.0 ----- 2.0']);
    }

    public function login(Request $request) {
//        if(!$request->get('email')) {
//            throw new Exception('eeee');
//        }
        $validator = \Validator::make($request->only(['email', 'password']), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if($validator->fails()) {
            return response()->json(['status' => 0, 'errors' => $validator->errors()]);
        }

        return response()->json($request->only(['email', 'password']));
    }

    //
}
