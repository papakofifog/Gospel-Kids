import {Component, OnInit} from '@angular/core';
import {HttpClient} from "@angular/common/http";



@Component({
  selector: 'app-explore-videos',
  templateUrl: './explore-videos.page.html',
  styleUrls: ['./explore-videos.page.scss'],
})
export class ExploreVideosPage implements OnInit {
  public num;
  public sage;
  public bake;
  public given;
  public anaias;
  public balack;
  public saf;
  public mus;public tus;
  public pus;
  public ras;
  public rust;
  public goat;
  public din;
  public actualdata: any[];
  constructor(private http: HttpClient) {
  }

  async ngOnInit() {
    try {
      const url= '../../assets/response.json';
      this.http.get(url).subscribe(data=>{
          //console.log(data['data']);
          this.num= data['data']['abrahams_obedience']['accounts'];
          this.sage= data['data']['abrahams_obedience']['accounts'];
          this.bake=data['data']['absalom']['accounts'];
          this.given=data['data']['the_creation']['accounts'];
          this.anaias=data['data']['adam_and_eve']['accounts'];
          this.din=data['data']['cain_and_abel']['accounts'];
          this.ras=data['data']['the_great_flood']['accounts'];
          this.mus=data['data']['the_tower_of_babel']['accounts'];
          this.din=data['data']['god_calls_abraham']['accounts'];
          this.anaias=data['data']['sodom_and_gomorrah']['accounts'];
          this.goat=data['data']['esaus_birthright']['accounts'];
          this.saf=data['data']['isaac_blesses_jacob']['accounts'];
          this.pus=data['data']['jacob_wrestles']['accounts'];
          this.rust=data['data']['joseph_in_prison']['accounts'];
        });
      //console.log(response.data);
      //console.log(response.status);
      //console.log(JSON.parse(response.data)); // JSON data returned by server
      //console.log(response.headers);
    } catch (error){
      //console.error(error.status);
      //console.error(error.error); // Error message as string
      //console.error(error.headers);
    }
  }

}
