let player = videojs('video-player');


function playSelectedVideo(item) {
    let data = $(item).data('value');
    $('.videoTitle').html(data.title);
    if (player.playlist.contains(data.link)) {
        if(samplePlaylist[player.playlist.indexOf(data.link) - 1]) {
            player.playlist.current = samplePlaylist[player.playlist.indexOf(data.link) - 1];
            console.log(player.playlist.current);
            player.playlist.next();
            player.play();

        } else {
            player.playlist.first();
            player.play();
        }
    }
}

let samplePlaylist = [];
let nextVideo;
for (let i = 0; i < playlist.length; i++) {
    samplePlaylist.push({
        title: playlist[i].title,
        sources: [playlist[i].sources],
        poster: playlist[i].poster
    });
}

player.ready(function () {
    //binding hot keys
    this.hotkeys({
        seekStep: 10,

    });
    //binding playlist elements
    this.playlist(samplePlaylist);

    $('#nextButton').on('click', function () {
        player.playlist.next();
        player.play();
    });

    $('#previousButton').on('click', function () {
        player.playlist.previous();
        player.play();
    });
    this.on('ended', function () {
        console.log('ended');
        if (player.playlist.currentIndex() !== player.playlist.lastIndex()) {

            nextVideo = samplePlaylist[player.playlist.currentIndex() + 1];
        } else {
            nextVideo = samplePlaylist[0];
            player.upnext({
                timeout: 5000,
                headText: 'Up Next',
                cancelText: 'Cancel',
                getTitle: function () {
                    return nextVideo.title;
                },
                next: function () {
                    return player.playlist.first();
                }
            });
        }
        console.log(nextVideo);
    });
    player.upnext({
        timeout: 5000,
        headText: 'Up Next',
        cancelText: 'Cancel',
        getTitle: function () {
            return nextVideo.title;
        },
        next: function () {
            player.tech_.setPoster(nextVideo.poster)
            return player.playlist.next();
        }
    });

    player.brand({
        image: "/logo.png",
        title: "Qwasel",
        destination: "/",
        destinationTarget: "_top"
    });

    $('.videoItem').on('click', function () {
        playSelectedVideo(this);
    });

});
