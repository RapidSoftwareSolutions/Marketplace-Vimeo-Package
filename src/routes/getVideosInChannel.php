<?php
$app->post('/api/Vimeo/getVideosInChannel', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'channelId']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = $settings['api_url'] . '/channels/' . $post_data['args']['channelId'] . '/videos';
    $params = [
        'accessToken' => 'accessToken',
        'direction' => 'direction',
        'page' => 'page',
        'per_page' => 'perPage',
        'sort' => 'sort',
        'query' => 'query',
        'filter' => 'filter',
        'filter_embeddable' => 'filterEmbeddable'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});