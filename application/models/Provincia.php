<?php

namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Provincia extends ORM {

    public $table = 'provincia';
        public $primary_key = 'idprovincia';

        function _init()
        {


        self::$fields = array(
            'idprovincia'=> ORM::field('varchar[2]'),
            'pro_descripcion'=>ORM::field('varchar[85]'),
            'iddepartamento'=>ORM::field('varchar[2]'),
            'pro_estado'=>ORM::field('tinyint[1]')

                );
        }


}

?>
