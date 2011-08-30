<?php

namespace Redis\Model;

class Deck extends \Redis\Datatype\SortedSet
{
    public $key = 'a';
}