<?php // TWITTER STATS
    // Loads the Twitter SDK system for PHP
    require_once('TwitterAPIExchange.php');

    function objectToArray ($object) {
        if(!is_object($object) && !is_array($object))
            return $object;

        return array_map('objectToArray', (array) $object);
    }
    $twitterFeedCount = 3;
    // Create our Application instance that allows connecting to Twitter.
    $settings = array(
        'oauth_access_token' => "545371167-irULMOms3sQrOaNwsL73EWeXDHLfy6PmYWrE2FMU",
        'oauth_access_token_secret' => "Zv9cS7OsiGXXuARfG92lj6UvO5yQwBjH16e987zEmtpjU",
        'consumer_key' => "7eJxfBBdxGoYf1BcPetNi9whC",
        'consumer_secret' => "pXTgOEQO804GWeZxPmXMqFmKTgrSc3KVs8GEH6M9tpHEL9wMpb"
    );
    // This call will always work since we are fetching public data.
    $url = 'https://api.twitter.com/1.1/users/show.json';
    $getfield = '?screen_name=elementsworks';
    $requestMethod = 'GET';
    // Generate responce through the exchange
    $twitter = new TwitterAPIExchange($settings);
    // Build in Oauth and request data
    $response = $twitter
        ->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest();
    // Decode json file into array
    $user = json_decode($response);
    // This call will always work since we are fetching public data.
    $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
    $getfield = '?screen_name=elementsworks&count=' . $twitterFeedCount;
    $requestMethod = 'GET';
    // Generate responce through the exchange
    $twitter = new TwitterAPIExchange($settings);
    // Build in Oauth and request data
    $response = $twitter
        ->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest();
    // Decode json file into array
    $tweets = objectToArray(json_decode($response));
    // sets up the variables for my simple array which is just a sliced version of the main FaceBook array.
        $tw=array(
            "followers"     =>  $user->followers_count,
            "following"     =>  $user->friends_count,
            "favourites"    =>  $user->favourites_count,
            "tweets"        =>  $user->statuses_count,
            "retweets"      =>  $user->status->retweet_count
        );
    // uncomment to check if the twitter array works
    // echo "<pre>";
    // print_r($tweets);
    // echo "</pre>";
    $i = 0;
    echo "<div class='twitter'>

    <div class='col-xs-6' style='padding-right: 0px; z-index: 999;'>
        <h3 class='twittername'><img class='twitterlogo' src='" . $tweets[0]['user']['profile_image_url_https']. "'>

        <span>@elementsworks</span><b>" . $tw['followers'] . " followers,</b></h3>
    </div>
    <div class='col-xs-6' style='padding-left: 0px; z-index: 999;'>
        <h3 class='twitterfollow'><a href='https://twitter.com/elementsworks' target='_blank'>Follow Us</a></h3>
    </div>

    ";


    echo "          
        <div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>
            <!-- Indicators -->
            <ol class='carousel-indicators'>
                <li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
                <li data-target='#carousel-example-generic' data-slide-to='1'></li>
                <li data-target='#carousel-example-generic' data-slide-to='2'></li>
            </ol>


              <!-- Wrapper for slides -->
                    <div class='col-md-10 col-md-offset-1 twittercontent'>
              <div class='carousel-inner' role='listbox'>";

    while ( $i < $twitterFeedCount) {       
        $usersTimezone = 'America/New_York';
        $date = new DateTime( $tweets[$i]['created_at'], new DateTimeZone($usersTimezone) );
        $date = $date->format('d M');
       
       if ($i == 0) {
           echo "
                <div class='item active'>
                 " .  $tweets[$i]['text'] . "
                </div>";
       } else {

        echo "
  
                <div class='item'>
                 " .  $tweets[$i]['text'] . "
                </div>

            ";
        }

        $i++;
    }
    echo "              </div>
            </div>
            </div>

            </div>";
?>