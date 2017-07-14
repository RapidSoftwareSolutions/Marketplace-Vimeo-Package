<?php
$app->post('/api/Vimeo/getUserSinglePortfolio', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'portfolioId']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $userId = isset($post_data['args']['userId']) ? 'users/' . $post_data['args']['userId'] : 'me';
    $query_str = $settings['api_url'] . $userId . '/portfolios/' . $post_data['args']['portfolioId'];
    $params = [
        'accessToken' => 'accessToken'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});