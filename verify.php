<?php
$access_token = 'eXik4DSZ8eV85HJ++7k32QRnXMBgHlC1mY7VYHf1DwYRQoLAmWiUn3+pu7K6AxVyfxD3abnBdC5gpRcPLq3uhjvOv1FsEaezNgzYEFBuuOThZnK1NDL+AhpnGju17Okdik8KZL6TW59Vg1G5P0NpDAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;