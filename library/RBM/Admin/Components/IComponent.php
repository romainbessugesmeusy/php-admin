<?php
/**
 * Created by JetBrains PhpStorm.
 * User: rbm
 * Date: 30/08/13
 * Time: 10:05
 * To change this template use File | Settings | File Templates.
 */

namespace RBM\Admin\Components;


interface IComponent
{

    public function init();

    public function render();

    public function addCSS($css);

    public function addJS($js);

    public function getCSS();

    public function getJS();

    public function addComponent($id, IComponent $component);

    public function removeComponent($id);

    public function hasComponent($id);

    public function getComponent($id);
}