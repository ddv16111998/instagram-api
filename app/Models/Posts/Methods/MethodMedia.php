<?php

namespace App\Models\Posts\Methods;

trait MethodMedia{
    public function clearMedias(string $collection = ''){
        if ($collection){
            return $this->clearMediaCollection($collection);
        }
        return $this->clearMediaCollection();
    }

    public function medias(string $collection = ''){
        if($collection){
            return $this->getMedia($collection);
        }
        return $this->getMedia();
    }
}
