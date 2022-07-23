<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class RealEstateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $listOfPicture = [];
        foreach (json_decode($this->picture) as $pic) {
            if (Storage::exists('img/' . $pic)) {
                array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
            } else {
                array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
            }
        }
        // return parent::toArray($request);
        if ($this->ar_title) {
            return [
                'id' => $this->real_estate_id,
                'title' => $this->ar_title,
                'picture' => $listOfPicture,
                'is_special' => $this->is_special,
                'price' => $this->price,
                'manger_accept' => $this->manger_accept,
                'governorate' => $this->governorate->ar_name ?? "",
                'created_at' => $this->created_at
            ];
        }
        if ($this->en_title) {
            return [
                'id' => $this->real_estate_id,
                'title' => $this->en_title,
                'picture' => $listOfPicture,
                'is_special' => $this->is_special,
                'price' => $this->price,
                'manger_accept' => $this->manger_accept,
                'governorate' => $this->governorate->en_name ?? "",
                'created_at' => $this->created_at
            ];
        }
    }
}
