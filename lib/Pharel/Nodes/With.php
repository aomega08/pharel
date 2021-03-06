<?php

namespace Pharel\Nodes;

class With extends Unary {
    public $children;

    public function __construct($expr) {
        parent::__construct($expr);
        $this->children = &$this->expr;
    }
}

