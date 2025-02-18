<?php

namespace App\Http\Resources\Book;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'status'=>$this->status,
            'genres'=>$this->genres->pluck('name'),
            'cover'=>$this->getCoverUrl()
        ];
    }
    private function getCoverUrl(){
        if($this->cover){
            return Storage::url("covers/{$this->cover}");
        }
        return asset('storage/covers/default.png');
    }
}
