<?php

namespace RBM\Admin\Components;

use RBM\Datagrid\DataGrid;

class DataGridComponent extends ComponentAbstract
{
    /** @var  DataGrid */
    protected $_datagrid;


    /**
     * @param \RBM\Datagrid\DataGrid $datagrid
     */
    public function setDatagrid($datagrid)
    {
        $this->_datagrid = $datagrid;
    }

    /**
     * @return \RBM\Datagrid\DataGrid
     */
    public function getDatagrid()
    {
        return $this->_datagrid;
    }


    public function render()
    {
        require __DIR__ . '/../../../../views/datagrid.php';
    }
}