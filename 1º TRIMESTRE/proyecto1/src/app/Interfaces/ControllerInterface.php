<?php

namespace Ismael\proyecto1\Interfaces;

interface ControllerInterface
{
    //Ver todos los usuarios
    public function index();

    //Ver un solo usuario
    public function show(int $id);

    //Crear un usuario
    public function create();

    //Modificar un usuario
    public function upadte(int $id);

    //Borrar un usuario
    public function delete(int $id);
}