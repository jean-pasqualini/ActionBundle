<?php
/**
 * Created by PhpStorm.
 * User: Freelance
 * Date: 25/06/2015
 * Time: 14:52
 */
namespace Digitas\Bundle\ActionBundle\Action;

use Symfony\Component\DependencyInjection\ContainerInterface;

class ActionFactory {

    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function copy($source, $destination)
    {
        return $this->container->get("la_poste_mobile_rest.action.copy")
                ->setSource($source)
                ->setDestination($destination);
    }

    public function writeFile($file, $data)
    {
        return $this->container->get("la_poste_mobile_rest.action.writefile")
                ->setFile($file)
                ->setData($data);
    }

    public function writeJsonFile($file, array $data)
    {
        return $this->container->get("la_poste_mobile_rest.action.writejsonfile")
            ->setFile($file)
            ->setData($data);
    }
}