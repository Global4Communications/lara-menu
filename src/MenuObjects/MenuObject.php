<?php

namespace Rinjax\LaraMenu\MenuObjects;

abstract class MenuObject
{
    /**
     * Tye of the object
     * @var string
     */
    protected $type = 'abstract';

    /**
     * Array of CSS classes to be applied.
     * @var array
     */
    public $classes = [];

    /**
     * Array of styles to be applied
     * @var array
     */
    public $styles = [];

    /**
     * The rendered HTML string.
     * @var string
     */
    protected $render = '';

    /**
     * The render function that turns this object in to the HTML string.
     * @return mixed
     */
    public function render($BSVersion = 3)
    {
        if($BSVersion == 3) return $this->renderBS3();

        if($BSVersion == 4) return $this->renderBS4();
    }

    /**
     * Called from the main render function, renders the HTML for Bootstrap 3
     * @return mixed
     */
    abstract protected function renderBS3();

    /**
     * Called from the main render function, renders the HTML for Bootstrap 4
     * @return mixed
     */
    abstract protected function renderBS4();

    /**
     * Return the type of the menu object.
     * @return string
     */
    public function type()
    {
        return $this->type;
    }

    /**
     * Render the classes array into the HTML a class element
     * @return string
     */
    protected function renderClasses()
    {
        $render = "class='";

        $classes = '';

        foreach($this->classes as $class){
            $classes .= $class . ' ';
        }

        $render .= rtrim($classes);
        $render .= "'";

        return $render;
    }

    /**
     * Render the styles array into HTML a style element
     * @return string
     */
    protected function renderStyles()
    {
        $render = "styles='";

        $styles = '';

        foreach($this->styles as $k => $v){
            $styles .= $k . ': ' . $v . '; ';
        }

        $render .= rtrim($styles);
        $render .= "'";

        return $render;
    }
}