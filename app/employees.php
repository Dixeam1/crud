<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    function index(Request $request)
    {
    	echo $request->file('file')->store('media');

    }
}
