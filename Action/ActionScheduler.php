<?php
/**
 * Created by PhpStorm.
 * User: Freelance
 * Date: 25/06/2015
 * Time: 14:51
 */
namespace Digitas\Bundle\ActionBundle\Action;

class ActionScheduler implements ActionInterface {

    protected $actions;

    public function __construct(ActionCollection $actions)
    {
        $this->actions = $actions;
    }

    public function getActions()
    {
        return $this->actions;
    }

    public function perform()
    {
        $actions = $this->actions->toArray();

        foreach($actions as $action)
        {
            $action->perform();
        }
    }

    public function describe()
    {
        return implode("<hr> ", array_map(function(ActionInterface $action)
        {
            return $action->describe();
        }, $this->actions->toArray()));
    }
}