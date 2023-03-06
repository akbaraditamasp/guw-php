<?php
namespace GuwaPhp;

class Guwa
{
    public static function send($data)
    {
        $ch = curl_init(($_ENV["GUWA_BASE_URL"] ?? "https://guwa.xyz")."/api/whatsapp");
        $payload = json_encode($data);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization: Bearer '.$_ENV["GUWA_API_KEY"]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}
