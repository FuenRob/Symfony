<?php

/**
 * BaseAutorTesis
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $tesis_id
 * @property integer $autor_id
 * @property Tesis $Tesis
 * 
 * @method integer    getTesisId()  Returns the current record's "tesis_id" value
 * @method integer    getAutorId()  Returns the current record's "autor_id" value
 * @method Tesis      getTesis()    Returns the current record's "Tesis" value
 * @method AutorTesis setTesisId()  Sets the current record's "tesis_id" value
 * @method AutorTesis setAutorId()  Sets the current record's "autor_id" value
 * @method AutorTesis setTesis()    Sets the current record's "Tesis" value
 * 
 * @package    sf2013
 * @subpackage model
 * @author     Javi
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAutorTesis extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('autor_tesis');
        $this->hasColumn('tesis_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('autor_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Tesis', array(
             'local' => 'tesis_id',
             'foreign' => 'id'));
    }
}