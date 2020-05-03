<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Traits\Resizable;
class Post extends Model
{
    use Translatable;
    use Resizable;
    protected $translatable=['title', 'body', 'excerpt'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
