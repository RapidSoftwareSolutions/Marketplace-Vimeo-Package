<?php
$app->post('/api/Vimeo/getVideosTaggedWithWord', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'tag']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = $settings['api_url'] . '/tags/' . $post_data['args']['tag'].'/videos';
    $params = [
        'accessToken' => 'accessToken',
        'direction'=>'direction',
        'page'=> 'page',
        'per_page'=> 'perPage',
        'sort'=> 'sort',
        'query'=> 'query'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});