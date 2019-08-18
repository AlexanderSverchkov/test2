<?php


namespace App;


use App\Models\User;

class Model
{
    const TABLE = '';

    public static function findAll()
    {
        $db = Db::getInstance();
        return $db->query('SELECT * FROM ' . static::TABLE, static::class);
    }

    /**
     * @param int $id
     * @return User|bool;
     */
    public function findById(int $id)
    {
        $db = Db::getInstance();
        $result =  $db->query('SELECT * FROM ' . static::TABLE . ' WHERE id=:id', static::class, [':id' => $id]);
        if (!empty($result)) {
            return $result[0];
        }
        return false;
    }
}