<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class SiteMenu extends Model
{
    use Translatable;
    protected $translatable=['name'];
    
    public function children($id)
    {
        return $this->where('parent_id', $id)->withTranslation(\App::getLocale())->get();
    }
}
