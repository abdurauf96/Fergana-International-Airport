<?php

namespace App;
use TCG\Voyager\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use Translatable;
    protected $translatable=['title', 'description', 'body'];
}
