<?php

namespace Sty\Hutton\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Sty\Hutton\Inspire;

use Sty\Hutton\Models\Joiner;
class JoinerController extends Controller
{
    public function CreateJoiner(Request $request, $name, $email, $phone)
    {
        $joiner = Joiner::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
        ]);
        return $joiner;
    }
}
