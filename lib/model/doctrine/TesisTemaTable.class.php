<?php

/**
 * TesisTemaTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TesisTemaTable extends TesisTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TesisTemaTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TesisTema');
    }
}