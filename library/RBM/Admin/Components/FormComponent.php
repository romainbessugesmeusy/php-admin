<?php

namespace RBM\Admin\Components;

use RBM\Admin\Forms\IForm;

class FormComponent extends ComponentAbstract
{

    /** @var IForm */
    protected $_form;

    public function render()
    {
        require __DIR__ . '/../../../../views/form.php';
    }

    /**
     * @param \RBM\Admin\Forms\IForm $form
     */
    public function setForm(IForm $form)
    {
        $this->_form = $form;
    }

    /**
     * @return \RBM\Admin\Forms\IForm
     */
    public function getForm()
    {
        return $this->_form;
    }



}