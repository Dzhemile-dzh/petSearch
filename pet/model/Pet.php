<?php

class Pet
{
    public static function insert(string $name, string $info, string $type, $conn): void
    {
        $stmt = $conn->prepare('INSERT INTO pets (name, info, type, date) VALUES (:name, :info, :type, NOW())');
        $stmt->execute(['name' => $name, 'info' => $info, 'type' => $type]);
    }

    public static function update(int $id, string $name, string $info, string $type, $conn): void
    {
        $stmt = $conn->prepare('UPDATE pets SET name = :name, info = :info, type = :type WHERE id = :id');
        $stmt->execute(['id' => $id, 'name' => $name, 'info' => $info, 'type' => $type]);
    }

    public static function getAll($conn): array
    {
        $stmt = $conn->prepare('SELECT * FROM pets');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getById($id, $conn)
    {
        $stmt = $conn->prepare('SELECT * FROM pets WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public static function delete($id, $conn)
    {
        $stmt = $conn->prepare('DELETE FROM pets WHERE id = ?');
        $stmt->execute([$id]);
    }

    public static function SearchResult(string $name, string $type, $conn): ?array
    {
        $query = 'SELECT * FROM pets';
    
        if (!empty($name) && !empty($type)) {
            $query .= ' WHERE name = :name AND type = :type';
            $params = ['name' => $name, 'type' => $type];
        } elseif (!empty($name)) {
            $query .= ' WHERE name = :name';
            $params = ['name' => $name];
        } elseif (!empty($type)) {
            $query .= ' WHERE type = :type';
            $params = ['type' => $type];
        } else {
            return null;
        }
    
        $stmt = $conn->prepare($query);
        $stmt->execute($params);
    
        return $stmt->fetchAll();
    }
    
}
