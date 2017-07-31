<?php
$app->post('/api/Vimeo/createAlbum', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'name', 'description']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $userId = !empty($post_data['args']['userId']) ? 'users/'.$post_data['args']['userId'] : 'me';
    $query_str = $settings['api_url'] . $userId.'/albums' ;
    $params = [
        'accessToken' => 'accessToken',
        'name' => 'name',
        'description' => 'description',
        'password' => 'password',
        'privacy' => 'privacy',
        'sort' => 'sort',
        'responseCode' => '201'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'POST', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});