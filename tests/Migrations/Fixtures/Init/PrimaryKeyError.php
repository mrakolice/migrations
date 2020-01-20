<?php


namespace Cycle\Migrations\Tests\Fixtures\Init;


/**
 * @Entity
*/
class PrimaryKeyError
{
    /**
     * @Column(type=primary)
     * @var int
     */
    protected $id;
}