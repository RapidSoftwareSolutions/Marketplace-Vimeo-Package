<?php
$app->post('/api/Vimeo/addVideoToOnDemandPage', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'ondemandId', 'videoId', 'type']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = $settings['api_url'] . 'ondemand/pages/' . $post_data['args']['ondemandId'] . '/videos/' . $post_data['args']['videoId'];
    $params = [
        'accessToken' => 'accessToken',
        'buy.price.AUD'=> 'buyPriceAUD',
        'buy.price.CAD'=> 'buyPriceCAD',
        'buy.price.CHF'=> 'buyPriceCHF',
        'buy.price.DKK'=> 'buyPriceDKK',
        'buy.price.EUR'=> 'buyPriceEUR',
        'buy.price.GBP'=> 'buyPriceGBP',
        'buy.price.JPY'=> 'buyPriceJPY',
        'buy.price.KRW'=> 'buyPriceKRW',
        'buy.price.NOK'=> 'buyPriceNOK',
        'buy.price.PLN'=> 'buyPricePLN',
        'buy.price.SEK'=> 'buyPriceSEK',
        'buy.price.USD'=> 'buyPriceUSD',
        'position'=> 'position',
        'release_year'=> 'releaseYear',
        'rent.price.AUD'=> 'rentPriceAUD',
        'rent.price.CAD'=> 'rentPriceCAD',
        'rent.price.CHF'=> 'rentPriceCHF',
        'rent.price.DKK'=> 'rentPriceDKK',
        'rent.price.EUR'=> 'rentPriceEUR',
        'rent.price.GBP'=> 'rentPriceGBP',
        'rent.price.JPY'=> 'rentPriceJPY',
        'rent.price.KRW'=> 'rentPriceKRW',
        'rent.price.NOK'=> 'rentPriceNOK',
        'rent.price.PLN'=> 'rentPricePLN',
        'rent.price.SEK'=> 'rentPriceSEK',
        'rent.price.USD'=> 'rentPriceUSD',
        'type'=> 'type'

    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'PUT', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});