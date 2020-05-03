<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class CategoryService extends Model
{
    use Translatable;
    protected $translatable=['name'];

    public function services()
    {
        return $this->hasMany('App\Service', 'category_id')->withTranslation(\App::getLocale());
    }
}
