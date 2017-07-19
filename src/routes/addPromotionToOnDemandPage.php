<?php
$app->post('/api/Vimeo/addPromotionToOnDemandPage', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'ondemandId', 'promotionCode', 'download', 'percentOff', 'streamPeriod', 'total', 'type']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = $settings['api_url'] . 'ondemand/pages/' . $post_data['args']['ondemandId'] . '/promotions/';
    $post_data['args']['endTime'] = \Models\ParamsModifier::timeToUnixtime($post_data['args']['endTime']);
    $post_data['args']['startTime'] = \Models\ParamsModifier::timeToUnixtime($post_data['args']['startTime']);
    $params = [
        'accessToken' => 'accessToken',
        'access_type' => 'accessType',
        'code' => 'promotionCode',
        'discount_type' => 'discountType',
        'download' => 'download',
        'end_time' => 'endTime',
        'percent_off' => 'percentOff',
        'product_type' => 'productType',
        'start_time' => 'startTime',
        'stream_period' => 'streamPeriod',
        'total' => 'total',
        'type' => 'type',
        'label'=> 'label'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'POST', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});