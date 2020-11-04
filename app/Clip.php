<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Translatable;


class Clip extends Model
{
    use Translatable;
    protected $translatable=['title'];
}
