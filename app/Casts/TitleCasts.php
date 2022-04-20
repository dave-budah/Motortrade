<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Support\Str;

class TitleCasts implements CastsAttributes
{

    public function get($model, $key, $value, $attributes)
    {
        return Str::ucfirst($value);
    }


    public function set($model, $key, $value, $attributes)
    {
        return Str::lower($value);
    }
}
