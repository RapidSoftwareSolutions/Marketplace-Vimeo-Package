[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Vimeo/functions?utm_source=RapidAPIGitHub_VimeoFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Vimeo Package
Vimeo is a video sharing platform that was launched in 2004 by a group of filmmakers.
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
| videoIds   | List  | Id of the video
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
| category   | String| Id of the category

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
| channelId  | String| Id of the channel
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
| tag        | JSON  | Tag to add

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

## Vimeo.deleteUserPicture
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
| userUris   | JSON  | Ids of the users to follow
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

## Vimeo.addGenreToOnDemandPage
Add a genre to an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| genreId    | String| Id of the genre

## Vimeo.addPosterToOnDemandPage
Add a poster to an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| posterId   | String| Id of the poster

## Vimeo.addPromotionToOnDemandPage
Add a promotion to an On Demand page

| Field        | Type      | Description
|--------------|-----------|----------
| accessToken  | String    | Access token received from Vimeo
| ondemandId   | String    | Id of the ondemand page
| accessType   | Select    | Promotion access type a purchase option that is not available on the container. "vip" promotions will always make the content free, and must be further defined with the download or streamPeriod fields.
| promotionCode| String    | Promotion code value
| discountType | Select    | Describes the type of discount offered by this promo code. Note: When providing an accesstype of "vip", this field only accepts the "free" discounttype.
| download     | Boolean   | Whether this promotion grants download access to vod content. This is only necessary when not defined on the On Demand Container, and creating promotions with the "vip" accesstype and "buy" producttype
| endTime      | DatePicker| The latest time this promotion is valid. If not specified, the promotion will never expire.
| percentOff   | String    | The percentage saved by using this promo code. This field is required, and only applicable if the field discountType is set to percent.
| productType  | Select    | Restricts the promotion to a particular type of transaction. Defaults to "any" when accessType is "default", and to "rent" if the accessType is "vip". Only "buy" and "rent" are valid if the accessType is "vip".
| startTime    | DatePicker| The earliest time this promotion is valid. If startTime is not specified, it will default to the time the promotion was created.
| streamPeriod | Select    | The amount of time a user will have access to the vod content upon redeeming a promo code. This is only necessary when not defined on the On Demand Container, and creating promotions with the "vip" accesstype and "rent" producttype.
| total        | String    | Number of promotions to generate if type is batch. The amount of uses for the promotion if type is single.
| type         | Select    | Type of promotions to use. If the access type is vip, the only possible value for this field is batch.
| label        | String    | If you are creating a batch promotion, you can describe it here. This field will be rejected for single promotions.

## Vimeo.addRegionToOnDemandPage
Add a region to an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| country    | String| Region to add

## Vimeo.addVideoToOnDemandPage
Add a video to an On Demand page

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token received from Vimeo
| ondemandId  | String| Id of the ondemand page
| videoId     | String| Id of the video
| buyPriceAUD | String| The purchase price of this video in AUD.
| buyPriceCAD | String| The purchase price of this video in CAD.
| buyPriceCHF | String| The purchase price of this video in CHF.
| buyPriceDKK | String| The purchase price of this video in DKK.
| buyPriceEUR | String| The purchase price of this video in EUR.
| buyPriceGBP | String| The purchase price of this video in GBP.
| buyPriceJPY | String| The purchase price of this video in JPY.
| buyPriceKRW | String| The purchase price of this video in KRW.
| buyPriceNOK | String| The purchase price of this video in NOK.
| buyPricePLN | String| The purchase price of this video in PLN.
| buyPriceSEK | String| The purchase price of this video in SEK.
| buyPriceUSD | String| The purchase price of this video in USD.
| position    | String| The position this video will appear in this On Demand's video collection.
| releaseYear | String| The video release year.
| rentPriceAUD| String| The rental price of this video in AUD.
| rentPriceCAD| String| The rental price of this video in CAD.
| rentPriceCHF| String| The rental price of this video in CHF.
| rentPriceDKK| String| The rental price of this video in DKK.
| rentPriceEUR| String| The rental price of this video in EUR.
| rentPriceGBP| String| The rental price of this video in GBP.
| rentPriceJPY| String| The rental price of this video in JPY.
| rentPriceKRW| String| The rental price of this video in KRW.
| rentPriceNOK| String| The rental price of this video in NOK.
| rentPricePLN| String| The rental price of this video in PLN.
| rentPriceSEK| String| The rental price of this video in SEK.
| rentPriceUSD| String| The rental price of this video in USD.
| type        | Select| The type of video you are associating with the On Demand page.

## Vimeo.checkPurchasedOnDemandPage
Check if user have purchased an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.createBackgroundForOnDemandPage
Create a new background for an On Demand page

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token received from Vimeo
| ondemandId  | String| Id of the ondemand page
| backgroundId| String| Id of the background

## Vimeo.createOnDemandPage
Create an On Demand page

| Field                      | Type   | Description
|----------------------------|--------|----------
| accessToken                | String | Access token received from Vimeo
| acceptedCurrencies         | List   | Array of accepted currencies.
| buyActive                  | Boolean| Required if rent.active is false.
| buyDownload                | Boolean| If download is available to purchasers who buy the film.
| buyPriceAUD                | String | The purchase price of this video in AUD.
| buyPriceCAD                | String | The purchase price of this video in CAD.
| buyPriceCHF                | String | The purchase price of this video in CHF.
| buyPriceDKK                | String | The purchase price of this video in DKK.
| buyPriceEUR                | String | The purchase price of this video in EUR.
| buyPriceGBP                | String | The purchase price of this video in GBP.
| buyPriceJPY                | String | The purchase price of this video in JPY.
| buyPriceKRW                | String | The purchase price of this video in KRW.
| buyPriceNOK                | String | The purchase price of this video in NOK.
| buyPricePLN                | String | The purchase price of this video in PLN.
| buyPriceSEK                | String | The purchase price of this video in SEK.
| buyPriceUSD                | String | The purchase price of this video in USD.
| contentRating              | List   | Rating of the page
| description                | String | The On Demand page description.
| domainLink                 | String | The On Demand page's custom domain.
| episodesBuyActive          | Boolean| Whether episodes can be bought
| episodesBuyDownload        | Boolean| If download is available to purchasers who buy the episode.
| episodesBuyPriceUSD        | String | Required if episodes.buy.active is true.
| episodesRentActive         | Boolean| Whether episodes can be rented
| episodesRentPeriod         | String | Required if episodes.rent.active is true.
| episodesRentPriceUSD       | String | Required if episodes.rent.active is true. Only applicable if this On Demand page is a series. This is the default price for each individual episode.
| link                       | String | The custom string to use in this On Demand page's Vimeo URL.
| name                       | String | The On Demand page name.
| rentActive                 | String | Required if buy.active is false.
| rentPeriod                 | String | Required if rent.active is true.
| rentPriceAUD               | String | The rental price of this video in AUD.
| rentPriceCAD               | String | The rental price of this video in CAD.
| rentPriceCHF               | String | The rental price of this video in CHF.
| rentPriceDKK               | String | The rental price of this video in DKK.
| rentPriceEUR               | String | The rental price of this video in EUR.
| rentPriceGBP               | String | The rental price of this video in GBP.
| rentPriceJPY               | String | The rental price of this video in JPY.
| rentPriceKRW               | String | The rental price of this video in KRW.
| rentPriceNOK               | String | The rental price of this video in NOK.
| rentPricePLN               | String | The rental price of this video in PLN.
| rentPriceSEK               | String | The rental price of this video in SEK.
| rentPriceUSD               | String | The rental price of this video in USD.
| subscriptionMonthlyActive  | Boolean| Required if rent.active and buy.active are false.
| subscriptionMonthlyPriceUSD| String | Required if subscription.active is true.
| type                       | Select | The On Demand page type.

## Vimeo.deleteGenreFromOnDemandPage
Delete a genre from an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| genreId    | String| Id of the genre

## Vimeo.deleteRegionsFromOnDemandPage
Delete regions from an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| country    | List  | Regions to remove

## Vimeo.deleteSingleRegionFromOnDemandPage
Delete a region from an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| country    | String| Region to remove

## Vimeo.deleteVideoFromOnDemandPage
Delete a video from an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| videoId    | String| Id of the video

## Vimeo.deleteOnDemandPage
Delete an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page

## Vimeo.deleteOnDemandPageBackground
Delete a background from an On Demand page

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token received from Vimeo
| ondemandId  | String| Id of the ondemand page
| backgroundId| String| Id of the background

## Vimeo.deleteOnDemandPagePromotion
Delete a promotion from an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| promotionId| String| Id of the promotion

## Vimeo.updateOnDemandPage
Edit an On Demand page

| Field              | Type   | Description
|--------------------|--------|----------
| accessToken        | String | Access token received from Vimeo
| ondemandId         | String | Id of the ondemand page
| link               | String | The custom string to use in this On Demand page's Vimeo URL.
| preorderActive     | Boolean| If set to true, you will enable pre-orders on the On Demand page.
| preorderPublishTime| Boolean| Required if "preorder.active" is true. The time that the On Demand page will be published.
| publishActive      | Boolean| If set to true, you will publish the On Demand page.
| publishWhenReady   | Boolean| This On Demand page will be automatically published when all videos are finished transcoding.

## Vimeo.updateOnDemandPageBackground
Edit an On Demand pages' background

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token received from Vimeo
| ondemandId  | String| Id of the ondemand page
| backgroundId| String| Id of the background

## Vimeo.updateOnDemandPagePoster
Edit an On Demand pages' poster

| Field      | Type   | Description
|------------|--------|----------
| accessToken| String | Access token received from Vimeo
| ondemandId | String | Id of the ondemand page
| posterId   | String | Id of the poster
| active     | Boolean| Set this picture as the active picture.

## Vimeo.getSeasonOfOnDemandPage
Get a season of an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| seasonId   | String| Id of the season

## Vimeo.getUserOnDemandPages
Get a users' On Demand pages

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| userId     | String| Id of the user to act on behalf of (default  = me)
| filter     | Select| Filter to apply to the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| sort       | Select| The default sort order of an album's videos.

## Vimeo.getVideoInOnDemandPage
Check if an On Demand page contains a video.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| videoId    | String| Id of the video

## Vimeo.getAllOnDemandGenres
Get all On Demand genres

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo

## Vimeo.getAllOnDemandPagesWithinGenre
Get all On Demand pages within a genre

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| genreId    | String| Id of the genre
| filter     | Select| Filter to apply to the results.
| sort       | Select| Technique used to sort the results.

## Vimeo.getAllOnDemandRegions
Get all On Demand regions

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo

## Vimeo.getCodesForOnDemandPagesPromotion
Get all codes for an On Demand pages' promotion

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| promotionId| String| Id of the promotion
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.

## Vimeo.getAllPostersForOnDemandPage
Get all posters for an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page

## Vimeo.getVideosInSeasonOfOnDemandPage
Get all videos in a season of an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| seasonId   | String| Id of the season
| filter     | Select| Filter to apply to the results.
| sort       | Select| Technique used to sort the results.

## Vimeo.getAllVideosInOnDemandPage
Get all videos in an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| filter     | Select| Filter to apply to the results.
| sort       | Select| Technique used to sort the results.

## Vimeo.getOnDemandSingleGenre
Get an On Demand genre

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| genreId    | String| Id of the genre

## Vimeo.getSingleOnDemandPage
Get an On Demand single page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page

## Vimeo.getOnDemandPageSingleBackground
Get an On Demand page background

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token received from Vimeo
| ondemandId  | String| Id of the ondemand page
| backgroundId| String| Id of the background

## Vimeo.getOnDemandPageInGenre
Get an On Demand page in a genre

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| genreId    | String| Id of the genre
| ondemandId | String| Id of the ondemand page

## Vimeo.getOnDemandPageBackgrounds
Get an On Demand pages' backgrounds

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page

## Vimeo.checkOnDemandPageHasGenre
Check whether an On Demand page has a genre.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| genreId    | String| Id of the genre

## Vimeo.getOnDemandPagesPoster
Get an On Demand pages' poster

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| posterId   | String| Id of the poster

## Vimeo.getOnDemandPagesPromotion
Get an On Demand pages' promotion

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| promotionId| String| Id of the promotion

## Vimeo.checkOnDemandPageHasRegion
Get an On Demand pages' region

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| country    | String| Region to add

## Vimeo.getOnDemandSingleRegion
Get an On Demand region

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| country    | String| Region to add

## Vimeo.getGenresOfOnDemandPage
Get genres of an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page

## Vimeo.getRegionsForOnDemandPage
Get regions of an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page

## Vimeo.getSeasonsInOnDemandPage
Get seasons in an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| direction  | Select| The direction that the results are sorted.
| filter     | Select| Filter to apply to the results.
| sort       | Select| Technique used to sort the results.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.

## Vimeo.getUsersOnDemandPurchasesAndRentals
Get users' On Demand purchases and rentals

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| filter     | Select| Filter to apply to the results.
| sort       | Select| Technique used to sort the results.

## Vimeo.addRegionToOnDemandPage
Add a region to an On Demand page

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| ondemandId | String| Id of the ondemand page
| countryList| List  | Regions to remove

## Vimeo.addCommentToVideo
Add a comment to a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| text       | String| Text of the comment
| videoId    | String| Id of the video

## Vimeo.addCreditToVideo
Add a credit to a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| email      | String| The email address of the person being credited.
| name       | String| The name address of the person being credited.
| role       | String| The role address of the person being credited.
| userUri    | String| The userUri address of the person being credited.
| videoId    | String| Id of the video

## Vimeo.addReplyToCommentOnVideo
Add a reply to comment to a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| text       | String| Text of the comment
| videoId    | String| Id of the video
| commentId  | String| Id of the comment

## Vimeo.addTextTrackToVideo
Add a text track to a video.

| Field      | Type   | Description
|------------|--------|----------
| accessToken| String | Access token received from Vimeo
| videoId    | String | Id of the video
| language   | String | Text track language
| name       | String | Text track name
| type       | Select | Text track type
| active     | Boolean| Text tracks marked active will be visible to other users, and will show up in the player. Only one text track per language can be active.

## Vimeo.allowUsersViewPrivateVideo
Allow a list of users to view a private video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| userUris   | JSON  | An array of either user URI's or user IDs.
| videoId    | String| Id of the video

## Vimeo.allowSingleUserToViewPrivateVideo
Allow a single user to view a private video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| userId     | String| Id of the user
| videoId    | String| Id of the video

## Vimeo.allowVideoEmbedding
Allow embedding of a video on a domain

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| domain     | String| Domain to allow embedding
| videoId    | String| Id of the video

## Vimeo.assignEmbedPresetToVideo
Assign an embed preset to a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| presetId   | String| Id of the preset
| videoId    | String| Id of the video

## Vimeo.checkUserOwnsVideo
Check if a user owns a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.createVideoThumbnail
Check if a user owns a video

| Field      | Type   | Description
|------------|--------|----------
| accessToken| String | Access token received from Vimeo
| videoId    | String | Id of the video
| active     | Boolean| Make this picture the default picture if you have created a picture response from video at given time offset.
| time       | String | If set will create a picture resource from video at given time offset.

## Vimeo.deleteCommentFromVideo
Delete a comment from a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| commentId  | String| Id of the comment

## Vimeo.deleteCreditOnVideo
Delete a credit from a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| creditId   | String| Id of the credit

## Vimeo.deleteUsersEntireWatchHistory
Delete a users' entire watch history

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo

## Vimeo.deleteVideo
Delete a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video

## Vimeo.deleteVideoFromWatchHistory
Delete a video from your watch history

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video

## Vimeo.deleteVideoTextTrack
Delete a text track from a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| texttrackId| String| Id of the text track

## Vimeo.deleteVideoThumbnail
Delete a thumbnail for video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| pictureId  | String| Id of the thumbnail

## Vimeo.disallowUserFromViewingPrivateVideo
Disallow a single user to view a private video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| userId     | String| Id of the user
| videoId    | String| Id of the video

## Vimeo.disallowVideoEmbedding
Disallow embedding of a video on a domain

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| domain     | String| Domain to disallow embedding
| videoId    | String| Id of the video

## Vimeo.editCommentOnVideo
Edit a comment on a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| text       | String| Text of the comment
| videoId    | String| Id of the video
| commentId  | String| Id of the comment

## Vimeo.editCreditOnVideo
Edit a credit on a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| text       | String| Text of the comment
| videoId    | String| Id of the video
| commentId  | String| Id of the comment
| email      | String| The email address of the person being credited.
| name       | String| The name address of the person being credited.
| role       | String| The role address of the person being credited.

## Vimeo.editVideo
Edit a video

| Field                      | Type   | Description
|----------------------------|--------|----------
| accessToken                | String | Access token received from Vimeo
| videoId                    | String | Id of the video
| contentRating              | List   | Rating of the video
| description                | String | The video description.
| embedButtonsEmbed          | Boolean| Show or hide the embed button.
| embedButtonsFullscreen     | Boolean| Show or hide the fullscreen button.
| embedButtonsHd             | Boolean| Show or hide the HD button.
| embedButtonsLike           | Boolean| Show or hide the like button.
| embedButtonsScaling        | Boolean| Show or hide the scaling button (shown only in fullscreen mode).
| embedButtonsShare          | Boolean| Show or hide the share button.
| embedButtonsWatchlater     | Boolean| Show or hide the watch later button.
| embedColor                 | String | A primary color used by the embed player.
| embedLogosCustomActive     | Boolean| Show or hide your custom logo.
| embedLogosCustomLink       | String | A url that your user will navigate to if they click your custom logo.
| embedLogosCustomSticky     | Boolean| Always show the custom logo, or hide it after time with the rest of the UI.
| embedLogosVimeo            | Boolean| Show or hide the vimeo logo.
| embedPlaybar               | Boolean| Show or hide the playbar.
| embedTitleName             | Select | Show, hide, or let the user decide if the video title shows on the video
| embedTitleOwner            | Select | Show, hide, or let the user decide if the owners information shows on the video.
| embedTitlePortrait         | Select | Show, hide, or let the user decide if the owners portrait shows on the video.
| embedVolume                | Boolean| Show or hide the volume selector.
| externalLinksImdb          | String | External data from imdb
| externalLinksRottenTomatoes| String | External data from rotten tomatoes
| license                    | Select | Set the Creative Commons license
| locale                     | String | Set the default language for this video. For a full list of valid languages use the "/languages?filter=texttracks" endpoint.
| name                       | String | The new title for the video
| password                   | String | When you set privacy.view to password, you must provide the password as an additional parameter.
| privacyAdd                 | Boolean| Enable or disable the ability for anyone to add the video to an album, channel, or group.
| privacyComments            | Select | The privacy for who can comment on the video.
| privacyDownload            | Boolean| Enable or disable the ability for anyone to download video.
| privacyEmbed               | Select | The videos new embed settings. Whitelist allows you to define all valid embed domains. Check out our docs for adding and removing domains.
| privacyView                | Select | The new privacy setting for the video. Content-type application/json is the only valid type for type "users", basic users can not set privacy to unlisted.
| ratingsMpaaRating          | Select | Set MPAA rating for a video.
| ratingsMpaaReason          | Select | Set MPAA rating reason for a video.
| ratingTvRating             | Select | Set TV rating for a video.
| ratingTvReason             | Select | Set TV rating reason for a video.
| reviewLink                 | Boolean| Enable or disable the review page.
| spatialDirectorTimeline    | JSON   | 360 director timeline. The arrays in this should include a "time_code", "pitch", "yaw", and optionally "roll". For pitch, the minimum allowed is -90, and the max of 90. For yaw, the minimum is 0, and a maximum of 360.
| spatialFieldOfView         | Number | 360 field of view. Default 50, min 30, max 90.
| spatialProjection          | Select | 360 spatial projection.
| spatialStereoFormat        | Select | 360 spatial stereo format.

## Vimeo.editVideoTextTrack
Edit a video text track

| Field      | Type   | Description
|------------|--------|----------
| accessToken| String | Access token received from Vimeo
| videoId    | String | Id of the video
| texttrackId| String | Id of the text track
| language   | String | Text track language
| name       | String | Text track name
| type       | Select | Text track type
| active     | Boolean| Text tracks marked active will be visible to other users, and will show up in the player. Only one text track per language can be active.

## Vimeo.editVideoThumbnail
Edit a thumbnail for video

| Field      | Type   | Description
|------------|--------|----------
| accessToken| String | Access token received from Vimeo
| videoId    | String | Id of the video
| pictureId  | String | Id of the thumbnail
| active     | Boolean| Make this picture the default picture.

## Vimeo.getVideoComment
Get a comment from a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| commentId  | String| Id of the comment

## Vimeo.getVideoCredit
Get a credit from a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| creditId   | String| Id of the credit

## Vimeo.getSingleVideo
Get a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video

## Vimeo.getVideoTextTrack
Get a text track from a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| texttrackId| String| Id of the text track

## Vimeo.getVideoThumbnail
Get a thumbnail for video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| pictureId  | String| Id of the thumbnail

## Vimeo.getVideoComments
Get all comments on a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| direction  | Select| The direction that the results are sorted.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.

## Vimeo.getDomainsVideoEmbeddedOn
Get all domains a video can be embedded on

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video

## Vimeo.getEmbedPresetsForVideo
Check if a video has a specific embed preset.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| presetId   | String| Id of the preset

## Vimeo.getRepliesToCommentOnVideo
Get all replies to a comment on a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| commentId  | String| Id of the comment
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.

## Vimeo.getTextTracksForVideo
Get all the text tracks for a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video

## Vimeo.getThumbnailsOnVideo
Get all the thumbnails for a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video

## Vimeo.getUsersCreditedInVideo
Get all users credited in a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| direction  | Select| The direction that the results are sorted.
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.
| query      | String| Search query.
| sort       | Select| Technique used to sort the results.

## Vimeo.getUsersCanViewPrivateVideo
Get all users that can view a private video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video

## Vimeo.getVideosUserHasWatched
Get all videos a user has watched

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| userId     | String| Id of the user to act on behalf of (default  = me)

## Vimeo.getVideosUploadedByUser
Get all videos uploaded by a user

| Field           | Type   | Description
|-----------------|--------|----------
| accessToken     | String | Access token received from Vimeo
| userId          | String | Id of the user to act on behalf of (default  = me)
| direction       | Select | The direction that the results are sorted.
| filter          | Select | Filter to apply to the results.
| filterEmbeddable| Boolean| Choose between only videos that are embeddable, and only videos that are not embeddable.
| filterPlayable  | Boolean| Default true. Choose between only videos that are playable, and only videos that are not playable.
| sort            | Select | Technique used to sort the results.
| page            | Number | The page number to show.
| perPage         | Number | Number of items to show on each page. Max 100.
| query           | String | Search query.
| weakSearch      | Boolean| This forces the query parameter to use a separate search service that includes private videos. It will only perform a partial text search on the video's name. In the future the standard search will include private videos, and this parameter won't be necessary.

## Vimeo.replaceVideoSourceFile
Get an upload ticket to replace this video file.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| link       | String| If your upload type is pull, Vimeo will download the video hosted at this public URL. This URL must be valid for at least 24 hours.
| redirectUri| String| The app redirect URL. Required for POST upload types.
| type       | Select| Filter to apply to the results.

## Vimeo.searchVideos
Search for videos

| Field           | Type   | Description
|-----------------|--------|----------
| accessToken     | String | Access token received from Vimeo
| direction       | Select | The direction that the results are sorted.
| filter          | Select | Filter to apply to the results.
| filterEmbeddable| Boolean| Choose between only videos that are embeddable, and only videos that are not embeddable.
| filterPlayable  | Boolean| Default true. Choose between only videos that are playable, and only videos that are not playable.
| sort            | Select | Technique used to sort the results.
| page            | Number | The page number to show.
| perPage         | Number | Number of items to show on each page. Max 100.
| query           | String | Search query.

## Vimeo.uploadVideo
Begin the video upload process.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| userId     | String| Id of the user to act on behalf of (default  = me)
| link       | String| If your upload type is pull, Vimeo will download the video hosted at this public URL. This URL must be valid for at least 24 hours.
| redirectUri| String| The app redirect URL. Required for POST upload types.
| type       | Select| Filter to apply to the results.

## Vimeo.getRelatedVideosToSingleVideo
View related videos to a video

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from Vimeo
| videoId    | String| Id of the video
| page       | Number| The page number to show.
| perPage    | Number| Number of items to show on each page. Max 100.

