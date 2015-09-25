<?php
/**
 * Created by PhpStorm.
 * User: Freelance
 * Date: 25/06/2015
 * Time: 14:58
 */
namespace Digitas\Bundle\ActionBundle\Action;

class ActionCollection {
    protected $actions = array();

    public function addAction(ActionInterface $action)
    {
        $this->actions[] = $action;

        return $this;
    }

    public function toArray()
    {
        return $this->actions;
    }
}