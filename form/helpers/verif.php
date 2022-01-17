<?php


/**
 * @param string $name
 * @return string
 */
function getSecuredStringPostData(string $name): string {
    $data = $_GET[$name] ?? '';
    return strip_tags($data);
}


/**
 * @param int $name
 * @param int $defaultValue
 * @return int
 */
function getSecuredIntPostData(int $name, int $defaultValue = 0): int {
    $data =$_GET[$name] ?? $defaultValue;
    return (int)$data;
}


