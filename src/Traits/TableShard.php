<?php

namespace OkamiChen\TableShard\Traits;

trait TableShard {
    
    /**
     * 按照指定的数字取余数
     * @param int $id
     * @param int $shard
     */
    public function getShardTable($id, $shard=8){
        return $this->table.'_'. sprintf('%02d', $id % 10);
    }
    
}

