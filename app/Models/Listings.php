<?php

namespace App\Models;

class Listings{
    public static function all(){
        return 
            [
                [
                    'id' =>1,
                    'title'=> 'Listing One',
                    'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, dolorum tempore. Ut molestiae recusandae, itaque, laudantium odio aperiam nihil velit in consectetur libero animi natus ullam quibusdam deserunt fugiat officia?'
                ],
                [
                    'id' =>2,
                    'title'=> 'Listing Two',
                    'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, dolorum tempore. Ut molestiae recusandae, itaque, laudantium odio aperiam nihil velit in consectetur libero animi natus ullam quibusdam deserunt fugiat officia?'
                ]
                ];
                
    
}

    public static function find($id){
        $listings = self::all();

        foreach ($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }

    }

}