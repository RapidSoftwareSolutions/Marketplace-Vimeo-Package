<?php
$app->post('/api/Vimeo/addVideoToAlbum', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'albumId', 'videoId']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $userId = !empty($post_data['args']['userId']) ? 'users/' . $post_data['args']['userId'] : 'me';
    $query_str = $settings['api_url'] . $userId . '/albums/' . $post_data['args']['albumId'] . '/videos/' . $post_data['args']['videoId'];
    $params = [
        'accessToken' => 'accessToken',
        'responseCode'=> '204'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'PUT');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});