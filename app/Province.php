<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'name'
    ];

    public function set($data)
    {
        $this::insert($data);
    }

    public function get()
    {
        return $this::all(['id', 'name']);
    }

    public function getListId()
    {
        return $this::all(['id']);
    }
}
