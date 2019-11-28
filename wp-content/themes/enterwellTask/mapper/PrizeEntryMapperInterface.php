<?php

interface PrizeEntryMapperInterface
{
    /**
     * @param array $post
     *
     * @return array
     */
    public function mapUsersData(array $post);
}