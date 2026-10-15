<?php

namespace Ismael\Proyecto1\Interfaces;

interface ControllerInterface
{
    //Ver todos los usuarios
    public function index();

    //Ver un solo usuario
    public function show(int $id);

    //Mostrar formulario para crear un usuario
    public function create();

    //Recibir datos de un usuario
    public function store();

    //Modificar los datos un usuario
    public function update(int $id);

    //Es el que te muestra el formulario para modificar los datos del usuario
    public function edit(int $id);

    //Borrar un usuario
    public function destroy(int $id);

}