<?php

namespace RBM\Admin\Components;

use RBM\Admin\Forms\ISqlQueryForm;
use RBM\Datagrid\DataGrid;

class ListComponent extends ComponentAbstract
{


    /**
     * @var ISqlQueryForm
     */
    protected $_form;

    public function __construct()
    {
        $this->addComponent('form', new FormComponent());
        $this->addComponent('datagrid', new DataGridComponent());
    }

    /**
     * @param \RBM\Datagrid\DataGrid $datagrid
     */
    public function setDatagrid($datagrid)
    {
        $this->getComponent('datagrid')->setDataGrid($datagrid);
    }

    /**
     * @return \RBM\Datagrid\DataGrid
     */
    public function getDatagrid()
    {
        $this->getComponent('datagrid')->getDataGrid();
    }

    /**
     * @param \RBM\Admin\Forms\ISqlQueryForm $form
     */
    public function setForm($form)
    {
        $this->getComponent('form')->setForm($form);
    }

    /**
     * @return \RBM\Admin\Forms\ISqlQueryForm
     */
    public function getForm()
    {
        $this->getComponent('form')->getForm();
    }




    /**
     * @return string
     */
    public function render()
    {
        require __DIR__ . '/../../../../views/list.php';
    }
}