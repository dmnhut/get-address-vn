<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'name', 'id_province'
    ];

    public function set($data)
    {
        $this::insert($data);
    }

    public function get()
    {
        return $this::all(['id', 'name', 'id_province']);
    }

    public function getListId()
    {
        return $this::all(['id']);
    }
}
