<?php

class Vendor extends Eloquent 
{

    protected $table = 'vendors';

    public function scopeActive($query)
    {
        return $query
        			->where('status', '=', 1)
        			->get(['id', 'name'])
        			->sortBy('name');
        			// ->toArray();
    }

    public function scopeInActive($query)
    {
        return $query
        			->where('status', '=', 0)
        			->get(['id', 'name'])
        			->sortBy('name');
        			// ->toArray();
    }

}