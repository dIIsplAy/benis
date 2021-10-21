<?php

class Car
{
    protected int $id;
    protected string $model;
    protected string $marque;
    protected float $prix;
    protected string $picture;

    const MARQUES = ['ferari', 'lamborgini', 'porsche'];

    public function __construct()
    {
    }

    public function getMarques()
    {
        return self::MARQUES;
    }


    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param string $model
     * @return $this
     */
    public function setModel(string $model)
    {
        $this->model = $model;

        return $this;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     * @return $this
     */
    public function setMarque(string $marque)
    {
        $this->marque = $marque;

        return $this;
    }
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     * @return $this
     */
    public function setPrix(float $prix)
    {
        $this->prix = $prix;

        return $this;
    }
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     * @return $this
     */
    public function setPicture(string $picture)
    {
        $this->picture = $picture;

        return $this;
    }
}
