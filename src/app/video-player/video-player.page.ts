import { Component, OnInit } from '@angular/core';


//import { StreamingMedia, StreamingVideoOptions } from '@ionic-native/streaming-media';
@Component({
  selector: 'app-video-player',
  templateUrl: './video-player.page.html',
  styleUrls: ['./video-player.page.scss'],
})
export class VideoPlayerPage implements OnInit {

  constructor( )  { }
  // receiver parameter
  ngOnInit() {
    /*const options: StreamingVideoOptions = {
      successCallback: () => { console.log('Video played') },
      errorCallback: (e) => { console.log('Error streaming') },
      orientation: 'landscape',
      shouldAutoClose: true,
      controls: false
    };*/
    //this.streamingMedia.playVideo('https://youtu.be/Lm-E6vmFSBg', options);
  }
}
