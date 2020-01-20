<?php


namespace Cycle\Migrations\Tests\Fixtures\Alter;
use Cycle\Annotated\Annotation\Table\Index;



/**
 * @Entity
*/
class PrimaryKeyError
{
    /**
     * @Column(type=bigint)
     * @var int
     */
    protected $id;
}