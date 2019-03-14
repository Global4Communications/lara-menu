<?php

namespace Rinjax\LaraMenu\MenuObjects;

class LinkItem extends MenuObject
{
    protected $type = 'link';

    protected $displayText = '';

    protected $route = null;


    public function __construct($text, $route)
    {
        $this->displayText = $text;

        $this->route = $route;
    }

    protected function renderBS3()
    {
        $this->render .= '<li';

        if(count($this->classes) > 0) $this->render .= ' ' . $this->renderClasses();

        if(count($this->styles) > 0) $this->render .= ' ' . $this->renderStyles();

        $this->render .= "><a href='" . $this->getRoute() . "'>" . $this->displayText . "</a></li>";

        return $this->render;
    }

    protected function renderBS4()
    {
        $this->render .= "<a";

        if(count($this->classes) > 0) $this->render .= ' ' . $this->renderClasses();

        if(count($this->styles) > 0) $this->render .= ' ' . $this->renderStyles();

        $this->render .= "href='" . $this->getRoute() . "'>" . $this->displayText . "</a>";
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