<?php
/**
 * Created by PhpStorm.
 * User: Freelance
 * Date: 25/06/2015
 * Time: 14:47
 */
namespace Digitas\Bundle\ActionBundle\Action;

interface ActionInterface {
    public function perform();

    public function describe();
}