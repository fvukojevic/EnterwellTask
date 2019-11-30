<?php

require(__DIR__. '/ReaderInterface.php');

class Reader implements ReaderInterface
{
    /**
     * @var string
     */
    const TABLE_NAME = 'wp_prize_entry';

    /**
     * @return array
     */
    public function getPrizeEntries() 
    {
        global $wpdb;
        $table_name = 'wp_prize_entry';
        return $wpdb->get_results("SELECT * FROM " . self::TABLE_NAME);
    }
}