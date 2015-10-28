<?php

namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Distrito extends ORM {

    public $table = 'distrito';
        public $primary_key = 'iddistrito';

        function _init()
        {


        self::$fields = array(
            'iddistrito'=> ORM::field('varchar[2]'),
            'dis_descripcion'=>ORM::field('varchar[85]'),
            'idprovincia'=>ORM::field('varchar[2]'),
            'iddepartamento'=>ORM::field('varchar[2]'),
            'dis_estado'=>ORM::field('tinyint[1]')

                );
        }


}

?>
