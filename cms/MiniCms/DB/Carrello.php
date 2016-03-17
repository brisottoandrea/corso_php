<?php
/**
 * Created by PhpStorm.
 * User: 4infa
 * Date: 16/03/16
 * Time: 11.30
 */

namespace MiniCms\DB;


class Carrello
{
    protected $id;
    protected $ora;
    protected $numeroCarrello;
    protected $aula;
    protected $professore;
    protected $data;


    public function __construct($carrelloData=[]) {
        if(isset($carrelloData['id'])) {
            $this->id = $carrelloData['id'];
        }

        if(isset($carrelloData['ora'])) {
            $this->ora = $carrelloData['ora'];
        }

        if(isset($carrelloData['numeroCarrello'])) {
            $this->numeroCarrello = $carrelloData['numeroCarrello'];
        }

        if(isset($carrelloData['aula'])) {
            $this->aula = $carrelloData['aula'];
        }

        if(isset($carrelloData['professore'])) {
            $this->professore = $carrelloData['professore'];
        }

        if(isset($carrelloData['data'])) {
            $this->data = $carrelloData['data'];
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getOra()
    {
        return $this->ora;
    }

    /**
     * @param mixed $ora
     */
    public function setOra($ora)
    {
        $this->ora = $ora;
    }

    /**
     * @return mixed
     */
    public function getNumeroCarrello()
    {
        return $this->numeroCarrello;
    }

    /**
     * @param mixed $numeroCarrello
     */
    public function setNumeroCarrello($numeroCarrello)
    {
        $this->numeroCarrello = $numeroCarrello;
    }

    /**
     * @return mixed
     */
    public function getAula()
    {
        return $this->aula;
    }

    /**
     * @param mixed $aula
     */
    public function setAula($aula)
    {
        $this->aula = $aula;
    }

    /**
     * @return mixed
     */
    public function getProfessore()
    {
        return $this->professore;
    }

    /**
     * @param mixed $professore
     */
    public function setProfessore($professore)
    {
        $this->professore = $professore;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }


}