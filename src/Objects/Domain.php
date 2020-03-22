<?php

namespace FoPH\Builder\Objects;

use snalesh\DataObject\DataObject;

class Domain extends DataObject
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string[]
     */
    public $subDomains;
}