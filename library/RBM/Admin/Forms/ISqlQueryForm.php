<?php

namespace RBM\Admin\Forms;

use RBM\SqlQuery\IQuery;

interface ISqlQueryForm
{
    /**
     * @return IQuery
     */
    public function getSelect();
}