<?php

namespace RBM\Admin\Forms;

abstract class FormAbstract implements IForm
{
    /**
     * @var string
     */
    protected $_namespace;

    /**
     * @return mixed
     */
    public function &getSessionStore()
    {
        return $_SESSION[$this->id()];
    }

    /**
     * @param mixed $namespace
     */
    public function setNamespace($namespace)
    {
        $this->_namespace = $namespace;
    }

    /**
     * @return mixed
     */
    public function getNamespace()
    {
        return $this->_namespace;
    }

    /**
     * @return string
     */
    public function id()
    {
        return get_called_class() . '_' . $this->getNamespace();
    }

    /**
     * @param $name
     * @return string
     */
    public function getFieldName($name)
    {
        return sprintf('%s[%s]', $this->id(), $name);
    }

    /**
     * @param $name
     * @return mixed
     * @throws \InvalidArgumentException
     */
    public function getValue($name)
    {
        $session = $this->getSessionStore();
        if (isset($session[$name])) {
            return $session[$name];
        }

        $fields = $this->getFields();
        if (isset($fields[$name])) {
            return $fields[$name];
        }

        throw new \InvalidArgumentException("unknown field $name");
    }

    /**
     * @param $name
     * @param $value
     * @throws \InvalidArgumentException
     */
    public function setValue($name, $value)
    {
        $fields = $this->getFields();
        if (!isset($fields[$name])) {
            throw new \InvalidArgumentException("unknown field $name");
        }

        $_SESSION[$this->id()][$name] = $value;
    }

    /**
     * @param array $values
     */
    public function setValues(array $values)
    {
        $_SESSION[$this->id()] = $values;
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->getSessionStore() + $this->getFields();
    }
}