<?php
$app->post('/api/Vimeo/updateUser', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $userId = isset($post_data['args']['userId']) ? 'users/' . $post_data['args']['userId'] : 'me';
    $query_str = $settings['api_url'] . $userId;
    $params = [
        'accessToken' => 'accessToken',
        'bio' => 'bio',
        'location' => 'location',
        'name' => 'name',
        'videos.privacy.add' => 'videosPrivacyAdd',
        'videos.privacy.comments' => 'videosPrivacyComments',
        'videos.privacy.download' => 'videosPrivacyDownload',
        'videos.privacy.embed' => 'videosPrivacyEmbed',
        'videos.privacy.view' => 'videosPrivacyView'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'PATCH', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});