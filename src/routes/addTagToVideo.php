<?php
$app->post('/api/Vimeo/addTagToVideo', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'videoId', 'tag']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = $settings['api_url'] . '/videos/' . $post_data['args']['videoId'] . '/tags/' . $post_data['args']['tag'];
    $params = [
        'accessToken' => 'accessToken'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'PUT');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});