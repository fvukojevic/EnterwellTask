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
            return 'Email je već zauzet';
        }

        if(!$this->checkIfBillNumberAlreadyExists($data['email'])){
            return 'Broj racuna je vec unesen';
        }

        $rowResult = $wpdb->insert(self::TABLE_NAME, $data, $format = NULL);
        if($rowResult === 1) {
            return 'success';
        }

        return 'Nešto je pošlo po zlu. Pokušajte ponovno';
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