<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class RentOrSaleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        if ($this->ar_name) {
            return [
                'ros_id' => $this->ros_id,
                'name' => $this->ar_name,
            ];
        }
        if ($this->en_name) {
            return [
                'ros_id' => $this->ros_id,
                'name' => $this->en_name,
            ];
        }
    }
}
