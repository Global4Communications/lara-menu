<?php

namespace Rinjax\LaraMenu\Managers;

use Rinjax\LaraMenu\MenuObjects\DropdownItem;
use Rinjax\LaraMenu\MenuObjects\LinkItem;

class LaraMenuManager
{
    /**
     * The Bootstrap version.
     * @var 
     */
    protected $BSVersion;

    /**
     * Type of menu to render - EG Standard, Tab
     * @var string
     */
    protected $menuType = 'standard';

    /**
     * Currently available menu types for rendering - default standard
     * @var array
     */
    protected $availableMenuTypes = ['standard'];

    /**
     * The manager for rendering the menu
     * @var MenuRenderManager
     */
    protected $Renderer;

    /**
     * The total menu components
     * @var array 
     */
    protected $menu = [];

    /**
     * Class to apply to the main part of the menu (top level ul, div, nav)
     * @var array
     */
    protected $menuClasses = ['nav'];


    public function __construct($BSVersion = 3)
    {
        $this->BSVersion = $BSVersion;

        $this->Renderer = new MenuRenderManager();
    }

    /**
     * @return mixed
     */
    public function getBSVersion()
    {
        return $this->BSVersion;
    }

    /**
     * Set the menu type for rendering
     * @param $type
     */
    public function setMenuType($type)
    {
        if(in_array($type, $this->availableMenuTypes)){
            $this->menuType = $type;
        }else{
            dd('ERROR - Wrong type. Available types are: ' . $this->availableMenuTypes);
        }
    }

    /**
     * Add a class to the main part of the menu
     * @param $class
     * @return $this
     */
    public function addMenuClass($class)
    {
        if(is_string($class)) array_push($this->menuClasses, $class);

        if(is_array($class)) array_merge($this->menuClasses, $class);

        return $this;
    }

    /**
     * Import a menu config
     * @param $config
     * @return $this
     */
    public function importMenu($config)
    {
        $menus = config($config);

        foreach($menus as $menu){
            switch ($menu->type){
                case 'link':
                    $this->addLink($menu);
                    break;
                case 'dropdown':
                    $this->addDropdown($menu);
                    break;
            }
        }

        return $this;
    }

    /**
     * Add a link to the menu
     * @param array $data
     * @return $this
     */
    public function addLink(array $data)
    {
        $link = $this->createLink($data);

        array_push($this->menu, $link);

        return $this;
    }

    /**
     * Add a dropdown link to the menu
     * @param array $data
     * @return $this
     */
    public function addDropdown(array $data)
    {
        $drop = $this->createDropdown($data);

        array_push($this->menu, $drop);

        return $this;
    }

    /**
     * Create the link object to be added, that will represent the menu link.
     * @param array $data
     * @return LinkItem
     */
    protected function createLink(array $data)
    {
        $link = new LinkItem($data['text'], $data['route']);

        if(!empty($data['classes'])){
            array_merge($link->classes, $data['classes']);
        }

        if(!empty($data['styles'])){
            array_merge($link->classes, $data['styles']);
        }

        return $link;
    }

    /**
     * Create the dropdown object to be added, that will represent the menu dropdown
     * @param $data
     * @return DropdownItem
     */
    protected function createDropdown($data)
    {
        $drop = new DropdownItem($data['text']);

        if(!empty($data['classes'])){
            array_merge($drop->classes, $data['classes']);
        }

        if(!empty($data['styles'])){
            array_merge($drop->classes, $data['styles']);
        }

        foreach ($data['list'] as $item){
            array_push($drop->list, $this->createLink($item));
        }

        return $drop;
    }

    /**
     * Use the RenderManager to render the final menu HTML
     * @return string
     */
    public function render()
    {
        switch([$this->BSVersion, $this->menuType]){
            case [3, 'standard']:
                return $this->Renderer->renderBS3Standard($this->menu, $this->menuClasses);
                break;
        }
    }
}