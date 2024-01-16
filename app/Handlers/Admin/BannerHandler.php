<?php

namespace App\Handlers\Admin;
use App\Models\Banner;

class BannerHandler{

    protected $banner;
    
    public function __construct(Banner $banner)
    {
        $this->banner = $banner;
    }

    public function getBanner()
    {
        return $this->banner->paginate(15);
    }

    public function getBannerById($id)
    {
        return $this->banner->find($id);
    }

    public function create($data)
    {
        return $this->banner->create($data);
    }

    public function delete($id)
    {
        return $this->banner->find($id)->delete();
    }

    public function update($id, $data)
    {
        return $this->banner->find($id)->update($data);
    }
}

?>