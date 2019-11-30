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
        
        if($this->checkIsUserRoleAdministrator()) {
            $table_name = 'wp_prize_entry';
            return $wpdb->get_results("SELECT * FROM " . self::TABLE_NAME . " ORDER BY id_prize_entry DESC");
        }
    }

    /**
     * @return bool
     */
    private function checkIsUserRoleAdministrator()
    {
        $user = wp_get_current_user();
        $roles = ( array ) $user->roles;

        if(in_array('administrator', $roles)) {
            return true;
        }

        return false;
    }
}