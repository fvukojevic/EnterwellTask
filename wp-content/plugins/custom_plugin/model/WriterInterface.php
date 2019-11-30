<?php

interface WriterInterface
{
    /**
     * @param array $data
     *
     * @return bool
     */
    public function storePrizeEntry(array $data);
}