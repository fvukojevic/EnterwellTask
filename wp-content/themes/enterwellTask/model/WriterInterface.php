<?php

interface WriterInterface
{
    /**
     * @param array $data
     *
     * @return bool
     */
    public function storePrizeEntry(array $data);

    /**
     * @param array $img
     * 
     * @return void
     */
    public function storeImgToUploadsFolder(array $img);
}