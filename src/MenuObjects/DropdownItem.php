<?php

namespace Rinjax\LaraMenu\MenuObjects;

class DropdownItem extends MenuObject
{
    protected $type = 'dropdown';

    protected $displayText = '';

    protected $list = [];


    public function __construct($text, $route)
    {
        $this->displayText = $text;

        $this->route = $route;
    }

    protected function renderBS3()
    {
        // todo: add the classes and styles - where is best to put them?

        $this->render .= "<li role='presentation class='dropdown'>";
        $this->render .= '<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">';
        $this->render .= $this->displayText . '<span class="caret"></span></a><ul class="dropdown-menu">';

        foreach($this->list as $item){
            $this->render .= $item->render(3);
        }

        $this->render .= "</ul></li>";

        return $this->render;
    }

    protected function renderBS4()
    {
        // TODO: Implement renderBS4() method.
    }

    protected function getRoute()
    {
        if(substr($this->route, 0, 7) == 'http://' || substr($this->route, 0, 8) == 'https://'){
            return $this->route;
        }else{
            return route($this->route);
        }
    }

}