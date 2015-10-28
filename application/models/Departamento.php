<?php

namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Departamento extends ORM {

    public $table = 'departamento';
        public $primary_key = 'iddepartamento';

        function _init()
        {


        self::$fields = array(
            'iddepartamento'=> ORM::field('varchar[2]'),
            'dep_pdescripcion'=>ORM::field('varchar[85]'),
            'dep_estado'=>ORM::field('tinyint[1]')

                );
        }


}

?>
