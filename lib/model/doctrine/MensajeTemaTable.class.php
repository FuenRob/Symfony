<?php

/**
 * MensajeTemaTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MensajeTemaTable extends MensajeTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object MensajeTemaTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MensajeTema');
    }

}