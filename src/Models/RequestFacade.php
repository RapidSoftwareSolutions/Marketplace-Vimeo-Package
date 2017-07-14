<?php
namespace Models;

use GuzzleHttp\Client;

class RequestFacade
{

    public function makeRequest(Client $client, array $params, array $post_data, string $query_str, string $method, string $paramType)
    {

        foreach ($params as $key => $value) {
            if (!empty($post_data['args'][$value])) {
                $body[$key] = $post_data['args'][$value];
            }
        }
        $auth = isset($post_data['args']['accessToken']) ? 'Bearer ' . $post_data['args']['accessToken'] : 'basic ' . base64_encode($post_data['args']['clientId'] . ':' . $post_data['args']['clientSecret']);
        unset($body['accessToken']);
        $result = $client->request($method, $query_str, [
            'headers' => [
                'Authorization' => $auth
            ],
            $paramType => $body
        ]);

        return $result;
    }

}
