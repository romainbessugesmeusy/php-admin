<?php


use RBM\SqlQuery\IQuery;

class OrderForm extends \RBM\Admin\Forms\FormAbstract implements \RBM\Admin\Forms\ISqlQueryForm
{

    /**
     * @return IQuery
     */
    public function getSelect()
    {
        $commande = new Exaprint\DAL\Commande\Select();
        $commande->cols(['IDCommande']);
        if ($IDCommande = $this->getValue('IDCommande')) {
            $commande->where()->eq('IDCommande', $IDCommande);
        }
        return $commande;
    }

    public function getFields()
    {
        return [
            'IDCommande' => 0
        ];
    }
}