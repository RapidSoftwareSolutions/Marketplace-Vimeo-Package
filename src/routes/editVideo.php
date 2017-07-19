<?php
$app->post('/api/Vimeo/editVideo', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'videoId']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = $settings['api_url'] . 'videos/' . $post_data['args']['videoId'];
    $params = [
        'accessToken' => 'accessToken',
        'content_rating'=> 'contentRating',
        'description'=> 'description',
        'embed.buttons.embed'=> 'embedButtonsEmbed',
        'embed.buttons.fullscreen'=> 'embedButtonsFullscreen',
        'embed.buttons.hd'=> 'embedButtonsHd',
        'embed.buttons.like'=> 'embedButtonsLike',
        'embed.buttons.scaling'=> 'embedButtonsScaling',
        'embed.buttons.share'=> 'embedButtonsShare',
        'embed.buttons.watchlater'=> 'embedButtonsWatchlater',
        'embed.color'=> 'embedColor',
        'embed.logos.custom.active' => 'embedLogosCustomActive',
        'embed.logos.custom.link' => 'embedLogosCustomLink',
        'embed.logos.custom.sticky' => 'embedLogosCustomSticky',
        'embed.logos.vimeo' => 'embedLogosVimeo',
        'embed.playbar'=> 'embedPlaybar',
        'embed.title.name'=> 'embedTitleName',
        'embed.title.owner'=> 'embedTitleOwner',
        'embed.title.portrait'=> 'embedTitlePortrait',
        'embed.volume'=> 'embedVolume',
        'external_links.imdb'=> 'externalLinksImdb',
        'external_links.rotten_tomatoes'=> 'externalLinksRottenTomatoes',
        'license'=> 'license',
        'locale'=> 'locale',
        'name'=> 'name',
        'password'=> 'password',
        'privacy.add'=> 'privacyAdd',
        'privacy.comments'=> 'privacyComments',
        'privacy.download'=> 'privacyDownload',
        'privacy.embed'=> 'privacyEmbed',
        'privacy.view'=> 'privacyView',
        'ratings.mpaa.rating'=> 'ratingsMpaaRating',
        'ratings.mpaa.reason'=> 'ratingsMpaaReason',
        'ratings.tv.rating'=> 'ratingTvRating',
        'ratings.tv.reason'=> 'ratingTvReason',
        'review_link'=> 'reviewLink',
        'spatial.director_timeline'=> 'spatialDirectorTimeline',
        'spatial.field_of_view'=> 'spatialFieldOfView',
        'spatial.projection'=> 'spatialProjection',
        'spatial.stereo_format'=> 'spatialStereoFormat'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'PATCH', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});