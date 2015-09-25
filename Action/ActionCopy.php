<?php
/**
 * Created by PhpStorm.
 * User: Freelance
 * Date: 25/06/2015
 * Time: 14:47
 */
namespace Digitas\Bundle\ActionBundle\Action;

use Digitas\Bundle\ActionBundle\Exception\ActionException;

class ActionCopy implements ActionInterface {

    protected $source;

    protected $destination;

    public function __construct()
    {

    }

    /**
     * @param mixed $source
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @param mixed $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    public function perform()
    {
        $directory = pathinfo($this->destination, PATHINFO_DIRNAME);

        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }

        if(!copy($this->source, $this->destination))
        {
            throw new ActionException("cannot copy file ".$this->source. " to ".$this->destination);
        }
    }

    public function describe()
    {
        return "copie de ".$this->source. " à ".$this->destination;
    }

}