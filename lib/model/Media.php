<?php

class Media
{
    public function getAll()
    {
        $pdo = Database::connect();
        $sql =  'SELECT * FROM media ORDER BY created_at DESC';
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        Database::disconnect();
        return $result;
    }

    public function add()
    {

    }

    public function edit()
    {

    }

    public function delete($id)
    {
        $pdo = Database::connect();
        $sql =  'DELETE FROM media WHERE id = '.$id;
        $sth = $pdo->prepare($sql);
        $result = $sth->execute();
        Database::disconnect();
        return $result;
    }
}
