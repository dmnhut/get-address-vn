<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table = 'wards';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'name', 'id_district'
    ];

    public function set($data)
    {
        $this::insert($data);
    }

    public function get()
    {
        return $this::all(['id', 'name', 'id_district']);
    }

    public function getListId()
    {
        return $this::all(['id']);
    }
}
