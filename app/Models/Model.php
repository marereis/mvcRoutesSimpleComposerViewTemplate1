<?php

namespace Mare\App\Models;

class Model {

    /**
     * Faz ligação com banco de dados e retorna Lista
     *
     * @return array
     */
    public function lista() {
        $lista = array(
            array('id' => 01, 'name' => 'Bob ', 'position' => 'Clerk'),
            array('id' => 02, 'name' => 'Alan', 'position' => 'Manager'),
            array('id' => 03, 'name' => 'James', 'position' => 'Director'),
            array('id' => 04, 'name' => 'Bob', 'position' => 'Clerk'),
            array('id' => 05, 'name' => 'Alan', 'position' => 'Manager'),
            array('id' => 06, 'name' => 'James', 'position' => 'Director')
        );
        return $lista;
    }

}
