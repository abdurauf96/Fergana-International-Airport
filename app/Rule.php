<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Rule extends Model
{
    use Translatable;
    protected $translatable=['title', 'body'];
}
