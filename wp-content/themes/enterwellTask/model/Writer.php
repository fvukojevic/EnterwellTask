<?php

require(__DIR__. '/WriterInterface.php');

class Writer implements WriterInterface
{
    /**
     * @param array $data
     *
     * @return bool
     */
    public function storePrizeEntry(array $data)
    {
        global $wpdb;

        $table_name = 'wp_prize_entry';

        $rowResult = $wpdb->insert($table_name, $data, $format = NULL);

        if($rowResult === 1) {
            return true;
        }

        return false;
    }
}