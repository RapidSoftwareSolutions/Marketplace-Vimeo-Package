<?php
$app->post('/api/Vimeo/disallowVideoEmbedding', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'domain', 'videoId']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = $settings['api_url'] . 'videos/' . $post_data['args']['videoId'].'/privacy/domains/'.$post_data['args']['domain'];
    $params = [
        'accessToken' => 'accessToken',
        'responseCode'=> '204'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'DELETE');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});