<?php /** @var $this \RBM\Admin\Components\ListComponent */ ?>
<div class="list-component">
    <?php $this->getComponent('form')->render() ?>
    <?php $this->getComponent('datagrid')->render() ?>
</div>