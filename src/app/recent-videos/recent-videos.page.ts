import { Component, OnInit } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {Router} from '@angular/router';


@Component({
  selector: 'app-recent-videos',
  templateUrl: './recent-videos.page.html',
  styleUrls: ['./recent-videos.page.scss'],
})
export class RecentVideosPage implements OnInit {
  private viddetail;

  constructor(private http: HttpClient, private router: Router ) { }
  ngOnInit() {
    this.http.get('../assets/responsevideo.json').subscribe(data => {
      console.log(data);
      this.viddetail = data['records'];
      console.log(data['records'].fileloc);
    });
  }
  // sender parameter
  videodetails(){
    this.router.navigateByUrl('video-player');
  }

}
