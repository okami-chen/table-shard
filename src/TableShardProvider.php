<?php

namespace OkamiChen\TableShard;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
class TableShardProvider extends ServiceProvider {
    
    public function register(){
        
    }
    
    public function boot(){
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../config' => config_path()], 'okami-chen-table-shard');
        }
    }
}

