<?php

namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Administrador extends ORM {

    public $table = 'administrador';
        public $primary_key = 'idadministrador';

        function _init()
        {


        self::$fields = array(
            'idadministrador'=> ORM::field('auto[11]'),
            'adm_email'=>ORM::field('varchar[90]'),
            'adm_password'=>ORM::field('varchar[100]'),
            'adm_estado'=>ORM::field('tinyint[1]'),
            'adm_img'=>ORM::field('varchar[100]'),

                );
        }


}

?>
