<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class PWNCustomer extends Model
{
    public static function getAll()
    {
        $client = new Client();
        $res = $client->request('GET', env('PWN_BASE_URL') . '/customers', [
            'auth' => [env('PWN_USER'), env('PWN_PASSWORD')]
        ]);
       
        if ($res->getStatusCode() == 200) {
            $xml = simplexml_load_string((string) $res->getBody());
            $json = json_encode($xml);
            return json_decode($json, true)['customer'];
        }
    }

    public static function createNew($request){
        $client = new Client();

        $xml = "<customer>
        <first_name>".$request->first_name."</first_name>
        <last_name>".$request->last_name."</last_name>
        <dob>".$request->dob."</dob>
        <gender>".$request->gender."</gender>
        <email>".$request->email."</email>
        <address>".$request->address."</address>
        <city>".$request->city."</city>
        <state>".$request->state."</state>
        <zip>".$request->zip."</zip>
        <work_phone>".$request->work_phone."</work_phone>
        <test_types>". implode(', ', $request->test_types)."</test_types>
        <take_tests_same_day>".$request->take_tests_same_day."</take_tests_same_day>
        </customer>";
        /*
        $xml = "<customer>
        <first_name>Test</first_name>
        <last_name>Prueba</last_name>
        <dob>19771010</dob>
        <gender>Male</gender>
        <email>prueba@example.com</email>
        <address>Some street</address>
        <city>LA</city>
        <state>CA</state>
        <zip>90210</zip>
        <work_phone>555-555-5444</work_phone>
        <test_types>7788,243</test_types>
        <take_tests_same_day>true</take_tests_same_day>
        </customer>";*/

        //$xml = simplexml_load_string($xml);
        
        $res = $client->request('POST', env('PWN_BASE_URL') . '/customers', [
            'auth' => [env('PWN_USER'), env('PWN_PASSWORD')],
            'headers' => ['Content-type' => 'application/xml'],
            'body' => $xml
        ]);

        return (string) $res->getBody();
    }

    public static function getById($customer_id){
        $client = new Client();
        $res = $client->request('GET', env('PWN_BASE_URL') . '/customers/' . $customer_id, [
            'auth' => [env('PWN_USER'), env('PWN_PASSWORD')]
        ]);

        if ($res->getStatusCode() == 200) {
            $xml = simplexml_load_string((string) $res->getBody());
            $json = json_encode($xml);
            return json_decode($json, true);
        }
    }

    public static function getContactLogs($customer_id)
    {
        $client = new Client();
        $res = $client->request('GET', env('PWN_BASE_URL') . '/customers/' . $customer_id . '/contact_logs', [
            'auth' => [env('PWN_USER'), env('PWN_PASSWORD')]
        ]);
       
        if ($res->getStatusCode() == 200) {
            $xml = simplexml_load_string((string) $res->getBody());
            $json = json_encode($xml);
            return json_decode($json, true);
        }
    }

    public static function getHl7Messages($customer_id,$hl7_message)
    {
        $client = new Client();
        $res = $client->request('GET', env('PWN_BASE_URL') . '/customers/' . $customer_id . '/hl7messages/' . $hl7_message, [
            'auth' => [env('PWN_USER'), env('PWN_PASSWORD')]
        ]);
       
        if ($res->getStatusCode() == 200) {
            $xml = simplexml_load_string((string) $res->getBody());
            $json = json_encode($xml);
            return json_decode($json, true);
        }
    }
}
