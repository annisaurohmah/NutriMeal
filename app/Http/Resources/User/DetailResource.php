<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'menu_id' => $this->menu_id,
            'nama' => $this->nama,
            'harga' => $this->harga,
            'restaurant_id' => $this->restaurant_id,
            'nama_restaurant' => $this->nama_restaurant,
            'alamat_restaurant' => $this->alamat_restaurant,
        ];
    }
}
