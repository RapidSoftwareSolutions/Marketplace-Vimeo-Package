<?php
$app->post('/api/Vimeo/createOnDemandPage', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'description', 'contentRating', 'name', 'type']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $userId = isset($post_data['args']['userId']) ? 'users/' . $post_data['args']['userId'] : 'me';
    $query_str = $settings['api_url'] . $userId . '/ondemand/pages';
    $paramNames = [
        "acceptedCurrencies"
    ];
    $post_data['args']['acceptedCurrencies'] = \Models\ParamsModifier::arrayToString($post_data, $paramNames);
    $params = [
        'accessToken' => 'accessToken',
        'accepted_currencies' => 'acceptedCurrencies',
        'buy.active' => 'buyActive',
        'buy.download' => 'buyDownload',
        'buy.price.AUD' => 'buyPriceAUD',
        'buy.price.CAD' => 'buyPriceCAD',
        'buy.price.CHF' => 'buyPriceCHF',
        'buy.price.DKK' => 'buyPriceDKK',
        'buy.price.EUR' => 'buyPriceEUR',
        'buy.price.GBP' => 'buyPriceGBP',
        'buy.price.JPY' => 'buyPriceJPY',
        'buy.price.KRW' => 'buyPriceKRW',
        'buy.price.NOK' => 'buyPriceNOK',
        'buy.price.PLN' => 'buyPricePLN',
        'buy.price.SEK' => 'buyPriceSEK',
        'buy.price.USD' => 'buyPriceUSD',
        'content_rating' => 'contentRating',
        'description' => 'description',
        'domain_link' => 'domainLink',
        'episodes.buy.active' => 'episodesBuyActive',
        'episodes.buy.download' => 'episodesBuyDownload',
        'episodes.buy.price.USD' => 'episodesBuyPriceUSD',
        'episodes.rent.active' => 'episodesRentActive',
        'episodes.rent.period' => 'episodesRentPeriod',
        'episodes.rent.price.USD' => 'episodesRentPriceUSD',
        'link' => 'link',
        'name' => 'name',
        'rent.active' => 'rentActive',
        'rent.period' => 'rentPeriod',
        'rent.price.AUD' => 'rentPriceAUD',
        'rent.price.CAD' => 'rentPriceCAD',
        'rent.price.CHF' => 'rentPriceCHF',
        'rent.price.DKK' => 'rentPriceDKK',
        'rent.price.EUR' => 'rentPriceEUR',
        'rent.price.GBP' => 'rentPriceGBP',
        'rent.price.JPY' => 'rentPriceJPY',
        'rent.price.KRW' => 'rentPriceKRW',
        'rent.price.NOK' => 'rentPriceNOK',
        'rent.price.PLN' => 'rentPricePLN',
        'rent.price.SEK' => 'rentPriceSEK',
        'rent.price.USD' => 'rentPriceUSD',
        'subscription.monthly.active' => 'subscriptionMonthlyActive',
        'subscription.monthly.price.USD' => 'subscriptionMonthlyPriceUSD',
        'type' => 'type'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'POST', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});