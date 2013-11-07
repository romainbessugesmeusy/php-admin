<?php

require '../vendor/autoload.php';
require '/Users/rbm/Sites/exaprint/env.php';
require 'OrderForm.php';
require 'OrderList.php';

class Orders {


    protected $_db;

    public function __construct()
    {
        $this->_db = \Exaprint\DAL\DB::get('stage');
    }

    public function listAction()
    {
        $list = new \RBM\Admin\Components\ListComponent();
        $form = new OrderForm();
        $form->setNamespace('orders_list');
        
        $dg = new \RBM\Datagrid\DataGrid();
        $dg->addColumn('IDCommande');
        $dg->registerRenderer('html', '\RBM\Datagrid\Renderer\Html\Renderer');

        $list->setDatagrid($dg);
        $list->setForm($form);


        $processor = new \RBM\SqlDataGrid\Processor\SqlProcessor($this->_db);

        $dg->setDataSource($form->getSelect(), $processor);
        $dg->getProcessor()->setLimit(new \RBM\Datagrid\Data\Limit(0, 10));
        $list->render();
    }
}


$orders = new Orders();
$orders->listAction();