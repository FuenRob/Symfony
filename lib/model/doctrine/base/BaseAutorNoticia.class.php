<?php

/**
 * BaseAutorNoticia
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $tesis_id
 * @property integer $autor_id
 * @property Tesis $Tesis
 * 
 * @method integer      getTesisId()  Returns the current record's "tesis_id" value
 * @method integer      getAutorId()  Returns the current record's "autor_id" value
 * @method Tesis        getTesis()    Returns the current record's "Tesis" value
 * @method AutorNoticia setTesisId()  Sets the current record's "tesis_id" value
 * @method AutorNoticia setAutorId()  Sets the current record's "autor_id" value
 * @method AutorNoticia setTesis()    Sets the current record's "Tesis" value
 * 
 * @package    nuevo
 * @subpackage model
 * @author     Daniel López
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAutorNoticia extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('autor_noticia');
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