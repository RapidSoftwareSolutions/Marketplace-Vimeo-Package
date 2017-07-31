<?php
$app->post('/api/Vimeo/subscribeUserToCategory', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'categoryName']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $userId = !empty($post_data['args']['userId']) ? 'users/'.$post_data['args']['userId'] : 'me';
    $query_str = $settings['api_url'].$userId.'/categories/'.$post_data['args']['categoryName'] ;
    $params = [
        'accessToken' => 'accessToken',
        'responseCode' => '204'

    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'PUT');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});