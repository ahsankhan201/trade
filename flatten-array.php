<?php
$un_flatten_array =  [[1,2,[3]],4];

function flatten ($array)
{
    $i = 0;
    while ($i < count ($array))
    {
        while (is_array ($array[$i]))
        {
            if (!$array[$i])
            {
                array_splice ($array, $i, 1);
                --$i;
                break;
            }
            else
            {
                array_splice ($array, $i, 1, $array[$i]);
            }
        }
        ++$i;
    }
    return $array;
}
$res = flatten($un_flatten_array);
var_dump($res);