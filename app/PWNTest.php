<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class PWNTest extends Model
{
    public static function getTypes()
    {
        $client = new Client();
        $res = $client->request('GET', env('PWN_BASE_URL') . '/test_types', [
            'auth' => [env('PWN_USER'), env('PWN_PASSWORD')]
        ]);
       
        if ($res->getStatusCode() == 200) {
            $xml = simplexml_load_string((string) $res->getBody());
            $json = json_encode($xml);
            return json_decode($json, true)['test_type'];
        }
    }

    public static function getGroups()
    {
        $client = new Client();
        $res = $client->request('GET', env('PWN_BASE_URL') . '/test_groups', [
            'auth' => [env('PWN_USER'), env('PWN_PASSWORD')]
        ]);
        
        if ($res->getStatusCode() == 200) {
            $xml = simplexml_load_string((string) $res->getBody());
            $json = json_encode($xml);
            return json_decode($json, true)['test_group'];
        }
    }

    public static function getResultTestTypes(){
        $client = new Client();
        $res = $client->request('GET', env('PWN_BASE_URL') . '/result_test_types', [
            'auth' => [env('PWN_USER'), env('PWN_PASSWORD')]
        ]);

        if ($res->getStatusCode() == 200) {
            //TODO -- Este llamado da error
            dd((string)$res->getBody());
            $xml = simplexml_load_string((string) $res->getBody());
            $json = json_encode($xml);
            dd(json_decode($json, true));
            return json_decode($json, true)['test_group'];
        }
    }
}
