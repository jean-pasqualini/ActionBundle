<?php
/**
 * Created by PhpStorm.
 * User: Freelance
 * Date: 25/06/2015
 * Time: 14:52
 */
namespace Digitas\Bundle\ActionBundle\Action;

class ActionFluent {

    protected $actionCollection;

    protected $actionFactory;

    public function __construct(ActionFactory $actionFactory, ActionCollection $actionCollection)
    {
        $this->actionCollection = $actionCollection;

        $this->actionFactory = $actionFactory;
    }

    public function copy($source, $destination)
    {
        return $this->addAction(
            $this->actionFactory->copy($source, $destination)
        );
    }

    public function writeFile($file, $data)
    {
        return $this->addAction(
            $this->actionFactory->writeFile($file, $data)
        );
    }

    public function writeJsonFile($file, array $data)
    {
        return $this->addAction(
            $this->actionFactory->writeJsonFile($file, $data)
        );
    }

    public function getActionFactory()
    {
        return $this->actionFactory;
    }

    public function addAction(ActionInterface $action)
    {
        $this->actionCollection->addAction($action);

        return $this;
    }

    public function getActionCollection()
    {
        return $this->actionCollection;
    }
}