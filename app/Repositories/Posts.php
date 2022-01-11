<?php

    namespace App\Respositories;

    class Posts
    {

        public function all()
        {
            $client = new Client([
                'base_uri' => "la url de las provincias"
            ]);
        }

    }