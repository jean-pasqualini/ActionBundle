<?php
/**
 * Created by PhpStorm.
 * User: Freelance
 * Date: 26/06/2015
 * Time: 09:47
 */

namespace Digitas\Bundle\ActionBundle\Action;

use Digitas\Bundle\ActionBundle\Action\ActionInterface;

class ActionWriteFile implements ActionInterface {

    protected $data;

    protected $file;

    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    public function perform()
    {
        $directory = pathinfo($this->file, PATHINFO_DIRNAME);

        if (!is_dir($directory)) {
                mkdir($directory, 0777, true);
        }

        file_put_contents($this->file, $this->data);
    }

    public function describe()
    {
        return "écriture du fichier ".$this->file."<br> <textarea style='width: 100%; height: 200px;'>".$this->data."</textarea>";
    }

}