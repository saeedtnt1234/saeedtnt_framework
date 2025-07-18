<?php

namespace Core;

use Core\Database;
use PDO;

class Model
{
    protected static $table;

    protected static function table()
    {
        return static::$table;
    }

    public static function all()
    {
        $stmt = Database::getConnection()->prepare("SELECT * FROM " . static::table());
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function find($id)
    {
        $stmt = Database::getConnection()->prepare("SELECT * FROM " . static::table() . " WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public static function create($data)
    {
        $columns = implode(',', array_keys($data));
        $placeholders = implode(',', array_fill(0, count($data), '?'));
        $stmt = Database::getConnection()->prepare("INSERT INTO " . static::table() . " ($columns) VALUES ($placeholders)");
        $stmt->execute(array_values($data));
        return Database::getConnection()->lastInsertId();
    }
    public static function update($id, $data)
    {
        $fields = array_map(function ($key) {
            return "$key = ?";
        }, array_keys($data));

        $fieldsString = implode(', ', $fields);
        $values = array_values($data);
        $values[] = $id;

        $stmt = Database::getConnection()->prepare("UPDATE " . static::table() . " SET $fieldsString WHERE id = ?");
        return $stmt->execute($values);
    }
    public static function delete($id)
    {
        $stmt = Database::getConnection()->prepare("DELETE FROM " . static::table() . " WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
