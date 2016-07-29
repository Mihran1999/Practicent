    // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          videoId: 'M7lc1UVf-VE',
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

        player1 = new YT.Player('player1', {
          videoId: 'ZJ4aVllpRH8',
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

        player2 = new YT.Player('player2', {
          videoId: 'qN2ODFAgSOk',
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

        player3 = new YT.Player('player3', {
          videoId: 'Uh7RVuqVAds',
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

        player4 = new YT.Player('player4', {
          videoId: '2hbgtQaBWIg',
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

        player5 = new YT.Player('player5', {
          videoId: 'scUJbiEmiuc',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange,
          },
          playerVars: {
            controls: 0,
            disablekb: 1,
            showinfo: 0
          }
        });
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
        player.stopVideo();
        player1.stopVideo();
        player2.stopVideo();
        player3.stopVideo();
        player4.stopVideo();
        player5.stopVideo();
      }


      function onPlayerReady(event) {
  
          // bind events
          var playButton = document.getElementById("play-button");
            playButton.addEventListener("click", function() {
            player.playVideo();
          });
          var playButton = document.getElementById("play-button1");
           playButton.addEventListener("click", function() {
           player1.playVideo();
          });
          var playButton = document.getElementById("play-button2");
           playButton.addEventListener("click", function() {
           player2.playVideo();
          });
          var playButton = document.getElementById("play-button3");
           playButton.addEventListener("click", function() {
           player3.playVideo();
          }); 
          var playButton = document.getElementById("play-button4");
           playButton.addEventListener("click", function() {
           player4.playVideo();
          }); 
          var playButton = document.getElementById("play-button5");
           playButton.addEventListener("click", function() {
           player5.playVideo();
          }); 
}