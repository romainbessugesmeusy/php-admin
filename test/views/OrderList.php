<?php /** @var $this OrderList */ ?>
<form method="post">
    <?php $this->getComponent('form')->render(); ?>
</form>
<?php $this->getComponent('datagrid')->render(); ?>

