<?php

namespace App\Http\Controllers;

use App\District;
use App\Province;
use App\Ward;

class AddressController extends Controller
{
    protected $contain;
    protected $province;
    protected $district;
    protected $ward;

    public function __construct()
    {
        $this->contain = [];
        $this->province = new Province();
        $this->district = new District();
        $this->ward = new Ward();
    }

    public function initProvinces()
    {
        $this->contain['json'] = json_decode(Container::getJsonProvinces());
        $this->contain['data'] = [];
        foreach ($this->contain['json'] as $val) {
            $val->created_at = date('Y-m-d H:i:s');
            $val->updated_at = date('Y-m-d H:i:s');
            $this->contain['data'][] = (array)$val;
        }
        $this->province->set($this->contain['data']);
        return $this->province->get();
    }

    public function listIdProvinces()
    {
        return $this->province->getListId();
    }

    public function initDistricts()
    {
        $this->contain['json'] = json_decode(Container::getJsonDistricts());
        $this->contain['data'] = [];
        foreach ($this->contain['json'] as $val) {
            $val->created_at = date('Y-m-d H:i:s');
            $val->updated_at = date('Y-m-d H:i:s');
            $this->contain['data'][] = (array)$val;
        }
        $this->district->set($this->contain['data']);
        return $this->district->get();
    }

    public function listIdDistricts()
    {
        return $this->district->getListId();
    }

    public function initWards()
    {
        $this->contain['json'] = json_decode(Container::getJsonWards());
        $this->contain['data'] = [];
        foreach ($this->contain['json'] as $val) {
            $val->created_at = date('Y-m-d H:i:s');
            $val->updated_at = date('Y-m-d H:i:s');
            $this->contain['data'][] = (array)$val;
        }
        $this->ward->set($this->contain['data']);
        return $this->ward->get();
    }

    public function listIdWards()
    {
        return $this->ward->getListId();
    }
}
