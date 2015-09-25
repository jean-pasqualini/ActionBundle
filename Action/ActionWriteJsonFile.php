<?php
/**
 * Created by PhpStorm.
 * User: Freelance
 * Date: 26/06/2015
 * Time: 09:46
 */

namespace Digitas\Bundle\ActionBundle\Action;

class ActionWriteJsonFile extends ActionWriteFile implements ActionInterface {

    public function setData($data)
    {
        parent::setData(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

        return $this;
    }

    public function describe()
    {
        return "génération d'un file json ".$this->file."<br> <textarea style='width: 100%; height: 200px;'>".$this->data."</textarea>";
    }
}