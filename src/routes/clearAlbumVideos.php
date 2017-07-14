<?php
$app->post('/api/Vimeo/clearAlbumVideos', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'albumId', 'videoIds']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $paramNames = ['videoIds'];
    $post_data = \Models\ParamsModifier::arrayToString($post_data, $paramNames);

    $userId = isset($post_data['args']['userId']) ? 'users/' . $post_data['args']['userId'] : 'me';
    $query_str = $settings['api_url'] . $userId . '/albums/' . $post_data['args']['albumId'] . '/videos/';
    $params = [
        'accessToken' => 'accessToken',
        'responseCode' => '201',
        'videos' => 'videoIds'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'PUT', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});