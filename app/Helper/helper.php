<?php

function limitText($text, $limit = 20)
{
    return Str::limit($text, $limit);
}
