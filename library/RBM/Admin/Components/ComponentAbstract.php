<?php

namespace RBM\Admin\Components;

abstract class ComponentAbstract implements IComponent
{
    protected $_js = array();

    protected $_css = array();

    /**
     * @var ComponentAbstract[]
     */
    protected $_components = array();

    /**
     * recursively init() the child components
     */
    public function init()
    {
        foreach ($this->_components as $component) {
            $component->init();
        }
    }

    /**
     * @param $css
     */
    public function addCSS($css)
    {
        $this->_css[] = $css;
    }

    /**
     * @return array
     */
    public function getCSS()
    {
        $css = $this->_css;
        foreach ($this->_components as $component) {
            $css = array_merge($css, $component->getCss());
        }
        return $css;
    }

    /**
     * @param $js
     */
    public function addJS($js)
    {
        $this->_js[] = $js;
    }

    /**
     * @return array
     */
    public function getJS()
    {
        $js = $this->_js;
        foreach ($this->_components as $component) {
            $js = array_merge($js, $component->getJs());
        }
        return $js;
    }

    /**
     * @param $id
     * @param IComponent $component
     * @throws \Exception
     */
    public function addComponent($id, IComponent $component)
    {
        if ($this->hasComponent($id)) {
            throw new \Exception('Un component du même nom existe');
        }
        $this->_components[$id] = $component;
    }

    /**
     * @param $id
     */
    public function removeComponent($id)
    {
        if ($this->hasComponent($id)) {
            unset($this->_components[$id]);
        }
    }


    /**
     * @param $id
     * @return bool
     */
    public function hasComponent($id)
    {
        return isset($this->_components[$id]);
    }

    /**
     * @param $id
     * @return ComponentAbstract|null
     */
    public function getComponent($id)
    {
        return $this->hasComponent($id) ? $this->_components[$id] : null;
    }
}