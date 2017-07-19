<?php
$app->post('/api/Vimeo/updateOnDemandPage', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'ondemandId']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = $settings['api_url'] . 'ondemand/pages/' . $post_data['args']['ondemandId'];
    $params = [
        'accessToken' => 'accessToken',
        'link' => 'link',
        'preorder.active' => 'preorderActive',
        'preorder.publish_time' => 'preorderPublishTime',
        'publish.active' => 'publishActive',
        'publish_when_ready' => 'publishWhenReady'

    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'PATCH', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});