<?php
$app->post('/api/Vimeo/deleteRegionsFromOnDemandPage', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'ondemandId', 'country']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    $paramNames = ["country"];
    $regions = \Models\ParamsModifier::arrayToString($post_data, $paramNames);
    //forming request to vendor API
    $query_str = $settings['api_url'] . 'ondemand/pages/' . $post_data['args']['ondemandId'] . '/regions/' . $regions;
    $params = [
        'accessToken' => 'accessToken'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'DELETE');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});