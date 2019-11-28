<?php

require(__DIR__. '/WriterInterface.php');

class Writer implements WriterInterface
{
    /**
     * @var string
     */
    const TABLE_NAME = 'wp_prize_entry';

    /**
     * @param array $data
     *
     * @return string
     */
    public function storePrizeEntry(array $data)
    {
        global $wpdb;

        if(!$this->checkIsEmailAlreadyTaken($data['email'])){
            return 'Email is already taken';
        }

        if(!$this->checkIfBillNumberAlreadyExists($data['email'])){
            return 'Bill number is already entered';
        }

        $rowResult = $wpdb->insert(self::TABLE_NAME, $data, $format = NULL);
        if($rowResult === 1) {
            return 'Your application is filled correctly';
        }

        return 'Whoops something went wrong';
    }

    /**
     * @param $email
     *
     * @return bool
     */
    private function checkIsEmailAlreadyTaken($email)
    {
        global $wpdb;
        $result = $wpdb->get_results ("SELECT * FROM  " . self::TABLE_NAME . " WHERE email =  '" . $email . "'"
        );

        if(empty($result)) {
            return true;
        }

        return false;
    }

    /**
     * @param $bill_number
     *
     * @return bool
     */
    private function checkIfBillNumberAlreadyExists($bill_number)
    {
        global $wpdb;
        $result = $wpdb->get_results ("SELECT * FROM  " . self::TABLE_NAME . " WHERE bill_number =  '" . $bill_number . "'"
        );

        if(empty($result)) {
            return true;
        }

        return false;
    }
}