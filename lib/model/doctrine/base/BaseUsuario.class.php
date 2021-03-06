<?php

/**
 * BaseUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre_completo
 * @property string $username
 * @property string $password
 * @property integer $id_rol
 * @property Rol $Rol
 * 
 * @method string  getNombreCompleto()  Returns the current record's "nombre_completo" value
 * @method string  getUsername()        Returns the current record's "username" value
 * @method string  getPassword()        Returns the current record's "password" value
 * @method integer getIdRol()           Returns the current record's "id_rol" value
 * @method Rol     getRol()             Returns the current record's "Rol" value
 * @method Usuario setNombreCompleto()  Sets the current record's "nombre_completo" value
 * @method Usuario setUsername()        Sets the current record's "username" value
 * @method Usuario setPassword()        Sets the current record's "password" value
 * @method Usuario setIdRol()           Sets the current record's "id_rol" value
 * @method Usuario setRol()             Sets the current record's "Rol" value
 * 
 * @package    nuevo
 * @subpackage model
 * @author     Daniel López
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('usuario');
        $this->hasColumn('nombre_completo', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('username', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('password', 'string', 60, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 60,
             ));
        $this->hasColumn('id_rol', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Rol', array(
             'local' => 'id_rol',
             'foreign' => 'id'));
    }
}