<?php

namespace Global4Communications\LaraMenu\Models;

use Illuminate\Database\Eloquent\Model;

class CoreMenu extends Model
{
    protected $table = 'core_menus';

    protected $guarded = ['id'];


    public function namespacing()
    {
        $this->namespacing =  explode('.', $this->namespace);
    }

    public function level()
    {
        if(isset($this->namespacing)){
            $this->level = count($this->namespacing);
        }else{
            $this->level = count($this->namespacing());
        }
    }

    public function classes()
    {
        $classArray = [];

        if(isset($this->classes)){
            array_merge($classArray,explode('|', $this->classes));
        }
        return $classArray;
    }

    public function styles()
    {
        $stylesArray = [];

        if(isset($this->styles)){
            $styles  = explode('|', $this->styles);

            if(!empty($styles)){
                foreach ($styles as $style){
                    $sty = explode(':', $style);
                    $stylesArray[$sty[0]] = $sty[1];
                }
            }
        }

        return $stylesArray;
    }
}
