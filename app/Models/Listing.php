<?php 

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'San Fran Listing',
                'description' => 'lorem ipsum  dolor sit amet consectetur asdsis elit'
            ],
            [
                'id' => 2,
                'title' => 'LA Listing',
                'description' => 'lorem ipsum  dolor sit amet consectetur asdsis elit'
            ],
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}