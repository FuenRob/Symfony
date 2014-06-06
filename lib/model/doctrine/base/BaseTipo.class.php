<?php

/**
 * BaseTipo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property Doctrine_Collection $Apartado
 * 
 * @method string              getNombre()   Returns the current record's "nombre" value
 * @method Doctrine_Collection getApartado() Returns the current record's "Apartado" collection
 * @method Tipo                setNombre()   Sets the current record's "nombre" value
 * @method Tipo                setApartado() Sets the current record's "Apartado" collection
 * 
 * @package    nuevo
 * @subpackage model
 * @author     Daniel López
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTipo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo');
        $this->hasColumn('nombre', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Apartado', array(
             'local' => 'id',
             'foreign' => 'tipo_id'));
    }
}