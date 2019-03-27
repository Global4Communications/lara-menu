<?php

namespace Global4Communications\LaraMenu\Managers;

use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class LaraMenuCacheManager
{
    protected $path = 'cache/menus/';
    
    protected $filename;

    protected $date;

    public function __construct()
    {
        $this->date = Carbon::now();
    }

    /**
     * Check the storage folder to see if there is a cache file already. Checks the storage folder for any files, and then
     * looks at the last file for the filename, which will be a date Ymd. If this isnt today in then remove this old cache
     * and return false, otherwise set the filename to the file and return true.
     * @return bool
     */
    public function alreadyCached($menubar)
    {
        $cache = Storage::files($this->path . $menubar . '/');

        if($cache){

            $file = end($cache);

            if($file == $this->path . $menubar . '/' . $this->date->format('Ymd') . '.cache'){
                $this->filename = $file;
                return true;
            }else{
                Storage::delete($file);
            }
        }

        return false;
    }

    /**
     * Loads the menu cache from storage and returns it. The alreadyCached() function should be run first as that sets
     * the file name to the correct file.
     * @return mixed
     */
    public function loadCache()
    {
        $cache = \Storage::get($this->filename);

        return unserialize($cache);
    }

    /**
     * Cache the menu data to storage.
     * @param $menu
     */
    public function cacheMenu($menubar, $menu)
    {
        $this->filename = $this->date->format('Ymd') . '.cache';

        $cache = serialize($menu);

        Storage::put($this->path . $menubar . '/' . $this->filename, $cache);
    }
}