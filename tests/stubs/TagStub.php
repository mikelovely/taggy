<?php

use MikeLovely\Taggy\Scopes\TagOrderableScopesTrait;

class TagStub extends Eloquent
{
    use TagOrderableScopesTrait;

    protected $connection = 'testbench';

    public $table = 'tags';
}
