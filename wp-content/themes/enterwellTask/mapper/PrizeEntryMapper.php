<?php

require(__DIR__. '/PrizeEntryMapperInterface.php');

class PrizeEntryMapper implements PrizeEntryMapperInterface
{
    /**
     * @param array $post
     *
     * @return array
     */
    public function mapUsersData(array $post)
    {
        return array(
            'name' => $post['name'],
            'lastname' => $post['lastname'],
            'address' => $post['address'],
            'house_number' => $post['house_number'],
            'place' => $post['place'],
            'zip_code' => $post['zip_code'],
            'nationality' => $post['countries'],
            'contact' => $post['contact'],
            'email' => $post['email'],
            'bill_number' => $post['bill_number'],
            'image' => $post['img']['name'],
        );
    }
}