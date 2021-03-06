<?php

namespace Pharel\Nodes;

class SelectCore extends Node {
    public $top;
    public $projections;
    public $wheres;
    public $groups;
    public $windows;
    public $havings;
    public $source;
    public $set_quantifier;
    public $from, $froms;

    public function __construct() {
        parent::__construct();

        $this->source = new JoinSource(null);
        $this->top = null;

        $this->set_quantifier = null;
        $this->projections    = [];
        $this->wheres         = [];
        $this->groups         = [];
        $this->havings        = [];
        $this->windows        = [];
        
        $this->from = &$this->source;
        $this->froms = &$this->source;
    }
    
    public function __clone() {
        if ($this->source)
            $this->source = clone $this->source;

        $this->projections = array_map(function($x) { return clone $x; }, $this->projections);
        $this->wheres  = array_map(function($x) { return clone $x; }, $this->wheres);
        $this->groups  = array_map(function($x) { return clone $x; }, $this->groups);
        $this->havings  = array_map(function($x) { return clone $x; }, $this->havings);
        $this->windows  = array_map(function($x) { return clone $x; }, $this->windows);

        $this->from = &$this->source;
        $this->froms = &$this->source;
    }
}

