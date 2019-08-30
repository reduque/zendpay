<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class PWNLab extends Model
{
    public static function getAll()
    {
        $client = new Client();
        $res = $client->request('GET', env('PWN_BASE_URL') . '/registered_labs', [
            'auth' => [env('PWN_USER'), env('PWN_PASSWORD')]
        ]);
       
        if ($res->getStatusCode() == 200) {
            $xml = simplexml_load_string((string) $res->getBody());
            $json = json_encode($xml);
            //TODO - que pasa si hay mas de un lab asociado?
            return json_decode($json, true)['reseller-lab'];
        }
    }

    public static function getByZip($zip)
    {
        $client = new Client();
        $res = $client->request('GET', env('PWN_BASE_URL') . '/find_psc/' . $zip, [
            'auth' => [env('PWN_USER'), env('PWN_PASSWORD')]
        ]);

        if ($res->getStatusCode() == 200) {
            $xml = simplexml_load_string((string) $res->getBody());
            $json = json_encode($xml);
            //TODO - que pasa si hay mas de un lab asociado?
            return json_decode($json, true)['patient-service-center'];
        }
    }
}
