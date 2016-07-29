    // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player = [], i;
      var ytIDs = [{elemId: 'player', videoId: 'M7lc1UVf-VE', buttonId: 'play-button'},{elemId: 'player1', videoId: 'ZJ4aVllpRH8', buttonId: 'play-button1'},{elemId: 'player2', videoId: 'qN2ODFAgSOk', buttonId: 'play-button2'},{elemId: 'player3', videoId: 'Uh7RVuqVAds', buttonId: 'play-button3'},{elemId: 'player4', videoId: '2hbgtQaBWIg', buttonId: 'play-button4'},{elemId: 'player5', videoId: 'scUJbiEmiuc', buttonId: 'play-button5'}];
      function onYouTubeIframeAPIReady() {
        for (i = 0; i < ytIDs.length; i++) {
          player[i] = new YT.Player(ytIDs[i].elemId, {
          videoId: ytIDs[i].videoId,
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          },
          playerVars: {
            controls: 0,
            disablekb: 1,
            showinfo: 0
          }
        });          
        }

        console.log(player);
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {}
      function stopVideo() {
        for (i = 0; i < player.length; i++) {
          player[i].stopVideo();
        }  
      }


      function onPlayerReady(event) {
        
        for (i = 0; i < ytIDs.length; i++) {
          var playButton = document.getElementById(ytIDs[i].buttonId);
            (function(i){
              playButton.addEventListener("click", function() {
                player[i].playVideo();
              });   
            })(i);
            
        }
}