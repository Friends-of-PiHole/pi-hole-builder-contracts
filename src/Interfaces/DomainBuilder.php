<?php

namespace FoPH\Builder\Contracts\Interfaces;

interface DomainBuilder
{
    /**
     * @return DomainList[]
     */
    public function getDomainLists():array;
}