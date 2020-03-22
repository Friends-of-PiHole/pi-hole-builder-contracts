<?php

namespace FoPH\Builder\Contracts\Interfaces;

use FoPH\Builder\Objects\Domain;

interface DomainList
{
    /**
     * alias for this list, will be used as list name with the builder name as prefix
     *
     * @return string
     */
    public function getAlias():string;

    /**
     * @return Domain[]
     */
    public function getDomains():array;
}