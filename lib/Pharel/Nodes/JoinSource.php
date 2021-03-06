<?php

namespace Pharel\Nodes;

class JoinSource extends Binary {
    public function __construct($single_source, $joinop = []) {
        parent::__construct($single_source, $joinop);
    }
     
    public function _empty() {
     	return is_null($this->left) and empty($this->right);
    }
}
