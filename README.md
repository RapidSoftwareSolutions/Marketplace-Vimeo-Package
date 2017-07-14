[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Vimeo/functions?utm_source=RapidAPIGitHub_VimeoFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Vimeo Package
Vimeo
* Domain: [Vimeo](http://vimeo.com)
* Credentials: clientId, clientSecret

## How to get credentials: 
0. Item one 
1. Item two 



## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## Vimeo.getAccessToken
Get access token

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Client Id received from Vimeo
| clientSecret| credentials| Client secret received from Vimeo
| code        | String     | Code provided by client
| redirectUri | String     | Redirect uri for your application

## Vimeo.verifyAccessToken
Verify user access token

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo

## Vimeo.revokeAccessToken
Revoke user access token

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo

## Vimeo.createAlbum
Create an album

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| name       | String| Album name
| description| String| Album description
| password   | String| The album's password. Required if privacy=password.
| privacy    | Select| The album's privacy level.
| sort       | Select| The default sort order of an album's videos.
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getUserAlbums
Get all users' albums

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| direction  | Select| The direction that the results are sorted.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getUserAlbums
Get all users' albums

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| direction  | Select| The direction that the results are sorted.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getSingleAlbum
Get single users' album

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| albumId    | String| Id of the album
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.updateAlbum
Update existing users' album

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| albumId    | String| Id of the album
| name       | String| Album new name
| description| String| Album new description
| privacy    | Select| The album's privacy level.
| sort       | Select| The default sort order of an album's videos.
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.addVideoToAlbum
Add a video to an album

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| albumId    | String| Id of the album
| videoId    | String| Id of the video
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getAlbumVideos
Get all videos in the album

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| albumId    | String| Id of the album
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getAlbumSingleVideo
Check if an album contains a video.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| albumId    | String| Id of the album
| videoId    | String| Id of the video
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.deleteVideoFromAlbum
Delete a video from an album

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| albumId    | String| Id of the album
| videoId    | String| Id of the video
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.clearAlbumVideos
Clear or replace the videos in an album.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| albumId    | String| Id of the album
| videoId    | List  | Id of the video
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.deleteAlbum
Delete an album

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| albumId    | String| Id of the album
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getCategories
Get all categories

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| direction  | Select| The direction that the results are sorted.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.

## Vimeo.getSingleCategory
Get a category

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token received from Vimeo
| categoryName| String| Name of the category

## Vimeo.categorizeVideo
Add up to two categories and a subcategory to a video. This is merely a suggestion, and does not ensure that the video will added to the category.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| categories | String| Id of the video

## Vimeo.checkForVideoInCategory
Check for a video in a category

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token received from Vimeo
| videoId     | String| Id of the video
| categoryName| String| Name of the category

## Vimeo.checkUserFollowsCategory
Check if a user follows a category

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token received from Vimeo
| categoryName| String| Name of the category
| userId      | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getCategoriesUserFollows
Get all categories a user follows

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| direction  | Select| The direction that the results are sorted.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getCategoriesVideoIsIn
Get all categories a video is in

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video

## Vimeo.getChannelsForCategory
Get all channels for a category

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token received from Vimeo
| categoryName| String| Name of the category
| direction   | Select| The direction that the results are sorted.
| sort        | Select| Technique used to sort the results.
| page        | Number| The page number to show.
| perPage     | Number| Number of items to show on each page. Max 100.
| query       | String| Search query.

## Vimeo.getGroupsForCategory
Get all groups for a category

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token received from Vimeo
| categoryName| String| Name of the category
| direction   | Select| The direction that the results are sorted.
| sort        | Select| Technique used to sort the results.
| page        | Number| The page number to show.
| perPage     | Number| Number of items to show on each page. Max 100.
| query       | String| Search query.

## Vimeo.getVideosInCategory
Get all videos for a category

| Field           | Type   | Description
|-----------------|--------|----------
| accessToken     | String | Access token received from Vimeo
| categoryName    | String | Name of the category
| direction       | Select | The direction that the results are sorted.
| filter          | Select | Filter to apply to the results.
| filterEmbeddable| Boolean| Choose between only videos that are embeddable, and only videos that are not embeddable.
| sort            | Select | Technique used to sort the results.
| page            | Number | The page number to show.
| perPage         | Number | Number of items to show on each page. Max 100.
| query           | String | Search query.

## Vimeo.subscribeUserToCategory
Subscribe a user to a category

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token received from Vimeo
| categoryName| String| Name of the category
| userId      | String| Id of the user to act on behalf of (default  = me)

## Vimeo.unsubscribeUserFromCategory
Unsubscribe a user from a category

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token received from Vimeo
| categoryName| String| Name of the category
| userId      | String| Id of the user to act on behalf of (default  = me)

## Vimeo.addVideoToChannel
Add a video to a channel

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| channelId  | String| Id of the channel

## Vimeo.checkUserFollowsChannel
Check if a user follows a channel

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| channelId  | String| Id of the channel
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.createChannel
Create new channel

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| name       | String| Name of the channel
| description| String| Description of the channel
| privacy    | Select| The privacy level of the new channel

## Vimeo.updateChannel
Check if a user follows a channel

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| channelId  | String| Id of the channel
| name       | String| Name of the channel
| description| String| Description of the channel
| privacy    | Select| The privacy level of the new channel

## Vimeo.getVideoInChannel
Check if this channel contains a video.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| channelId  | String| Id of the channel

## Vimeo.deleteVideoFromChannel
Delete a video from a channel

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| channelId  | String| Id of the channel

## Vimeo.getSingleChannel
Get a channel

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| channelId  | String| Id of the channel

## Vimeo.getChannels
Get all channels

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| direction  | Select| The direction that the results are sorted.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.
| filter     | Select| Filter to apply to the results.

## Vimeo.getChannelsUserSubscribed
Get all channels a user is subscribed to

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| direction  | Select| The direction that the results are sorted.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.
| userId     | String| Id of the user to act on behalf of (default  = me)
| filter     | Select| Filter to apply to the results.

## Vimeo.getChannelFollowers
Get all followers of a channel

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| direction  | Select| The direction that the results are sorted.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.
| filter     | Select| Filter to apply to the results.

## Vimeo.getVideosInChannel
Get all videos for a channel

| Field           | Type   | Description
|-----------------|--------|----------
| accessToken     | String | Access token received from Vimeo
| channelId       | String | Id of the channel
| direction       | Select | The direction that the results are sorted.
| filter          | Select | Filter to apply to the results.
| filterEmbeddable| Boolean| Choose between only videos that are embeddable, and only videos that are not embeddable.
| sort            | Select | Technique used to sort the results.
| page            | Number | The page number to show.
| perPage         | Number | Number of items to show on each page. Max 100.
| query           | String | Search query.

## Vimeo.subscribeUserToChannel
Subscribe a user to a channel

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| channelId  | String| Id of the channel
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.unsubscribeUserFromChannel
Unsubscribe a user to a channel

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| channelId  | String| Id of the channel
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.deleteChannel
Delete a channel

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| channelId  | String| Id of the channel

## Vimeo.createGroup
Create new group

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| name       | String| Name of the channel
| description| String| Description of the channel

## Vimeo.addVideoToGroup
Add a video to a group

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| groupId    | String| Id of the group

## Vimeo.getSingleGroup
Get a group

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| groupId    | String| If og the group

## Vimeo.checkGroupHasVideo
Check if this group contains a video.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| groupId    | String| Id of the group

## Vimeo.getVideosInGroup
Get all videos for a group

| Field           | Type   | Description
|-----------------|--------|----------
| accessToken     | String | Access token received from Vimeo
| groupId         | String | Id of the group
| direction       | Select | The direction that the results are sorted.
| filter          | Select | Filter to apply to the results.
| filterEmbeddable| Boolean| Choose between only videos that are embeddable, and only videos that are not embeddable.
| sort            | Select | Technique used to sort the results.
| page            | Number | The page number to show.
| perPage         | Number | Number of items to show on each page. Max 100.
| query           | String | Search query.

## Vimeo.getGroupMembers
Get all groups a user has joined

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| groupId    | String| Id of the group
| direction  | Select| The direction that the results are sorted.
| filter     | Select| Filter to apply to the results.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.

## Vimeo.getGroupsUserJoined
Get all members for a group

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| userId     | String| Id of the user to act on behalf of (default  = me)
| direction  | Select| The direction that the results are sorted.
| filter     | Select| Filter to apply to the results.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.

## Vimeo.joinGroup
Join a group

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| groupId    | String| Id of the group
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.checkUserJoinedGroup
Check if user has joined a group

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| groupId    | String| Id of the group
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.leaveGroup
Leave a group

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| groupId    | String| Id of the group
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.deleteVideoFromGroup
Delete a video from a group

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| groupId    | String| Id of the group

## Vimeo.deleteGroup
Delete a group

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| groupId    | String| Id of the group

## Vimeo.getGroups
Get all groups

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| direction  | Select| The direction that the results are sorted.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.
| filter     | Select| Filter to apply to the results.

## Vimeo.likeVideo
Like a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.checkSingleUserLikedVideo
Check if a user has liked a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getUsersLikedVideo
Get all users who have liked this video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| direction  | Select| The direction that the results are sorted.
| videoId    | String| Id of the video
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.

## Vimeo.getVideosUserHasLiked
Get all videos a user has liked

| Field           | Type   | Description
|-----------------|--------|----------
| accessToken     | String | Access token received from Vimeo
| userId          | String | Id of the user to act on behalf of (default  = me)
| direction       | Select | The direction that the results are sorted.
| filter          | Select | Filter to apply to the results.
| filterEmbeddable| Boolean| Choose between only videos that are embeddable, and only videos that are not embeddable.
| sort            | Select | Technique used to sort the results.
| page            | Number | The page number to show.
| perPage         | Number | Number of items to show on each page. Max 100.
| query           | String | Search query.

## Vimeo.getUsersLikedVideosOnDemandPage
Get all users who liked videos in an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| direction  | Select| The direction that the results are sorted.
| ondemandId | String| Id of the video ondemand
| sort       | Select| Technique used to sort the results.
| filter     | Select| Filter to apply to the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.

## Vimeo.unlikeVideo
Unlike a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getUserSinglePortfolio
Get a users' portfolio

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| portfolioId| String| Id of the portfolio
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getUserAllPortfolios
Get all users' portfolios

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| direction  | Select| The direction that the results are sorted.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.addTagToVideo
Add a tag to a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| tag        | String| Tag to add

## Vimeo.assignTagsToVideo
Add a tags to a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| tag        | String| Tag to add

## Vimeo.checkTagAddedToVideo
Check if a tag has been added to a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| tag        | String| Tag to check

## Vimeo.deleteTagFromVideo
Delete a tag from a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| tag        | String| Tag to delete

## Vimeo.getVideoTags
List a videos' tags

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video

## Vimeo.getSingleTag
Get a tag

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| tag        | String| Tag to get

## Vimeo.getVideosTaggedWithWord
Get all videos tagged with a specific word

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| tag        | String| Tag to get
| direction  | Select| The direction that the results are sorted.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.

## Vimeo.addVideoToWatchLaterQueue
Add a video to a users' Watch Later queue

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.addVideoToUserPortfolio
Add a video to a users' portfolio

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| portfolioId| String| Id of the portfolio
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.checkUserHasVideoInWatchLaterQueue
Check if a user has a video in their Watch Later queue

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.checkUserFollowingUser
Check if a user is following another user

| Field          | Type  | Description
|----------------|-------|----------
| accessToken    | String| Access token received from Vimeo
| followingUserId| String| Id of the user which is followed
| userId         | String| Id of the user to act on behalf of (default  = me)

## Vimeo.completeUserStreamingUpload
Complete a users' streaming upload

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ticketId   | String| Id of the ticket
| signature  | String| The crypto signature of the completed upload.
| videoFileId| String| The ID of the uploaded file.
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.pictureId
Delete a users' picture

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| pictureId  | String| Id of the picture
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.deleteVideoFromWatchLaterQueue
Delete a video from a users' Watch Later queue

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.deleteVideoFromUserPortfolio
Delete a video from a users' portfolio

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| portfolioId| String| Id of the portfolio
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.checkPortfolioContainsVideo
Check if a portfolio contains a video.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| portfolioId| String| Id of the portfolio
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.updateUser
Edit a user

| Field                | Type   | Description
|----------------------|--------|----------
| accessToken          | String | Access token received from Vimeo
| userId               | String | Id of the user to act on behalf of (default  = me)
| bio                  | String | The user's bio
| location             | String | The user's location
| name                 | String | The user's name
| videosPrivacyAdd     | Boolean| Sets the default add setting for all future videos uploaded by this user. If true, anyone can add the video to an album, channel, or group.
| videosPrivacyComments| Select | Sets the default comment setting for all future videos uploaded by this user. It specifies who can comment on the video.
| videosPrivacyDownload| Boolean| Sets the default download setting for all future videos uploaded by this user. If true, the video can be downloaded by any user
| videosPrivacyEmbed   | Select | Sets the default comment setting for all future videos uploaded by this user. It specifies who can comment on the video.
| videosPrivacyView    | Select | Sets the default comment setting for all future videos uploaded by this user. It specifies who can comment on the video.

## Vimeo.updateUserEmbedPreset
Edit a user

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| presetId   | String| Id of the preset
| userId     | String| Id of the user to act on behalf of (default  = me)
| outro      | Select| Disable the outro. Currently we only support disabling outros, let us know if you need additional features!

## Vimeo.followUsers
Follow a list of users

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| userUris   | List  | Id of the users to follow
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getUser
Get a user

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getUserEmbedPresets
Get all embed presets a user has created

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| userId     | String| Id of the user to act on behalf of (default  = me)
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.

## Vimeo.getUserUploadTicket
Get a users' upload ticket

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ticketId   | String| Id of the ticket
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getUserFollowings
Get all users that a user is following

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| userId     | String| Id of the user to act on behalf of (default  = me)
| direction  | Select| The direction that the results are sorted.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.
| filter     | Select| Filter to apply to the results.

## Vimeo.getUserFollowers
Get all users that follow a user

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| userId     | String| Id of the user to act on behalf of (default  = me)
| direction  | Select| The direction that the results are sorted.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.

## Vimeo.getVideosUserAppearsIn
Get all videos a user appears in

| Field           | Type   | Description
|-----------------|--------|----------
| accessToken     | String | Access token received from Vimeo
| userId          | String | Id of the user to act on behalf of (default  = me)
| direction       | Select | The direction that the results are sorted.
| filter          | Select | Filter to apply to the results.
| filterEmbeddable| Boolean| Choose between only videos that are embeddable, and only videos that are not embeddable.
| sort            | Select | Technique used to sort the results.
| page            | Number | The page number to show.
| perPage         | Number | Number of items to show on each page. Max 100.
| query           | String | Search query.

## Vimeo.getVideosFromWatchLaterQueue
Get all videos in a users' Watch Later queue

| Field           | Type   | Description
|-----------------|--------|----------
| accessToken     | String | Access token received from Vimeo
| userId          | String | Id of the user to act on behalf of (default  = me)
| direction       | Select | The direction that the results are sorted.
| filter          | Select | Filter to apply to the results.
| filterEmbeddable| Boolean| Choose between only videos that are embeddable, and only videos that are not embeddable.
| sort            | Select | Technique used to sort the results.
| page            | Number | The page number to show.
| perPage         | Number | Number of items to show on each page. Max 100.
| query           | String | Search query.

## Vimeo.getVideosFromUserFeed
Get all videos in a users' feed

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| userId     | String| Id of the user to act on behalf of (default  = me)
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| offset     | String| This is necessary for proper pagination. Do not provide this value yourself, just use the pagination links provided in the feed response.

## Vimeo.getVideosWithUserEmbedPreset
Get all videos with a users' embed preset

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| presetId   | String| Id of the preset
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getUserEmbedPreset
Get single embed preset

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| presetId   | String| Id of the preset
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getVideosFromUserPortfolio
Get all videos within a users' portfolio

| Field           | Type   | Description
|-----------------|--------|----------
| accessToken     | String | Access token received from Vimeo
| portfolioId     | String | Id of the portfolio
| userId          | String | Id of the user to act on behalf of (default  = me)
| direction       | Select | The direction that the results are sorted.
| filter          | Select | Filter to apply to the results.
| filterEmbeddable| Boolean| Choose between only videos that are embeddable, and only videos that are not embeddable.
| sort            | Select | Technique used to sort the results.
| page            | Number | The page number to show.
| perPage         | Number | Number of items to show on each page. Max 100.

## Vimeo.searchUsers
Search for users

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| direction  | Select| The direction that the results are sorted.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.

## Vimeo.followUser
Follow user

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| followUser | String| Id of the user to follow
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.unfollowUser
Unfollow user

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| followUser | String| Id of the user to unfollow
| userId     | String| Id of the user to act on behalf of (default  = me)

