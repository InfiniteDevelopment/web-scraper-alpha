<?php namespace App\Repositories;

/**
 * Interface GenericRepositoryInterface
 * @package App\Repositories
 *
 * Interface containing generic methods for other interfaces/repositories
 */
interface GenericRepositoryInterface
{
    /**
     * @return array of all entities from selected database
     */
    public function getAll();

    /**
     * @param $id
     * @return mixed Object from database with requested id
     */
    public function findById($id);
}