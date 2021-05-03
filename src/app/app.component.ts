import { Component,OnInit } from '@angular/core';
import {NavController} from '@ionic/angular';
import { Router, ActivatedRoute } from '@angular/router';
import { Storage } from '@ionic/storage-angular';

@Component({
  selector: 'app-root',
  templateUrl: 'app.component.html',
  styleUrls: ['app.component.scss'],
})
export class AppComponent {
  constructor(
    public navCtrl: NavController,
    private storage: Storage,
    private router: Router
  ) {
    this.initializeApp();
  }
  initializeApp(){
    this.storage.create();
    this.storage.get('storage_xxx').then((res)=>{
      if(res == null){
        this.navCtrl.navigateRoot('welocome-page');
      }else {
        this.navCtrl.navigateRoot('');
      }
    });
  }
}
