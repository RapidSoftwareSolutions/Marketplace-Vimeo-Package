<?php
$app->post('/api/Vimeo/addTextTrackToVideo', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'language', 'videoId', 'name', 'type']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = $settings['api_url'] . 'videos/' . $post_data['args']['videoId'].'/texttracks';
    $params = [
        'accessToken' => 'accessToken',
        'responseCode'=> '201',
        'active'=> 'active',
        'language' => 'language',
        'name'=> 'name',
        'type'=> 'type'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'POST', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});