<?php

namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Cliente extends ORM {

    public $table = 'cliente';
        public $primary_key = 'idcliente';

        function _init()
        {


        self::$fields = array(
            'idcliente'=> ORM::field('auto[11]'),
            'cli_nomyape'=>ORM::field('varchar[90]'),
            'cli_sexo'=>ORM::field('varchar[15]'),
            'cli_nacionalidad'=>ORM::field('varchar[25]'),
            'cli_edad'=>ORM::field('int[11]'),
            'cli_email'=>ORM::field('varchar[90]'),
            'cli_estado'=>ORM::field('tinyint[1]'),
            'cli_password'=>ORM::field('varchar[100]')
                );
        }


}

?>
