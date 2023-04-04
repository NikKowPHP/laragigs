<?php
namespace App\Models;

class Listing
{
    public static function all()
    {
        return [

            [
                'id' => 11,
                'title' => 'listing One,',
                'description' => 'Loearjlejrlas;fkj sadklj sld;aj l;aksdjf lkasjdfl; jas;flkj'
            ],

            [
                'id' => 12,
                'title' => 'listing Two',
                'description' => 'Loearjlejrlas;fkj sadklj sld;aj l;aksdjf lkasjdfl; jas;flkj'
            ]
        ];
    }
    public static function find($id)
    {
        $listings = self::all();
        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}

?>