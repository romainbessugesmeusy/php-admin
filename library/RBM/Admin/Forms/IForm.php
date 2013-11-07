<?php
/**
 * Created by JetBrains PhpStorm.
 * User: rbm
 * Date: 22/08/13
 * Time: 11:48
 * To change this template use File | Settings | File Templates.
 */

namespace RBM\Admin\Forms;


interface IForm {

    public function id();
    public function getFields();
    public function getNamespace();
    public function setNamespace($namespace);
    public function getFieldName($name);
    public function getValue($name);
    public function setValue($name, $value);
}