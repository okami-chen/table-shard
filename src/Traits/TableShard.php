<?php

namespace OkamiChen\TableShard\Traits;

trait TableShard {
    
    public $shardNum    = 8;
    
    public $shardKey    = 'id';
    
    /**
     * 按照指定的数字取余数
     */
    
    public function getShardTable(){
        $key    = $this->shardKey;
        $value  = $this->$key;
        return $this->table.'_'. sprintf('%02d', $value % $this->shardNum);
    }
    
}

