<?php

trait Entity
{
    public function serializeArray()
    {
        return [];
        return get_object_vars($this);
    }
}