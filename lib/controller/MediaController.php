<?php
include('../lib/model/Media.php');
include('../lib/database/Database.php');

class MediaController
{
    public function show()
    {
        $medias = (new Media)->getAll();
        return $medias;
    }

    public function create()
    {

    }

    public function edit()
    {
        
    }

    public function delete($id)
    {
        $result = (new Media)->delete($id);
        return $result;
    }
}
