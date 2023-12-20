<?php

namespace App\dao;

interface DaoInterface
{
    public function save($entitty);
    public function update($entitty);
    public function findById($id);
    public function findAll();
    public function deleteById($id);

}

