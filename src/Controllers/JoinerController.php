<?php

namespace Sty\Hutton\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Sty\Hutton\Inspire;

use Sty\Hutton\Models\Joiner;
class JoinerController extends Controller
{
    public function CreateJoiner(Request $request)
    {
        $joiner = Joiner::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        return 'Joiner Created';
    }

    // public function createBuilder  () {

    // }
}
