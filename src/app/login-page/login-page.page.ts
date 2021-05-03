import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { ToastController, AlertController, LoadingController, NavController } from '@ionic/angular';
import { Storage } from '@ionic/storage-angular';
import { HTTP, HTTPResponse } from '@ionic-native/http/ngx';
@Component({
  selector: 'app-login-page',
  templateUrl: './login-page.page.html',
  styleUrls: ['./login-page.page.scss'],
})
export class LoginPagePage implements OnInit {
    server  = 'https://eately-gh.herokuapp.com/login_user.php';
    username = '';
    password = '';
    disabledbtn;

  constructor(
    private router:  Router,
    private toastCtrl: ToastController,
    private loadingCtrl: LoadingController,
    private alertCtrl: AlertController,
    public navCtrl: NavController,
    private storage: Storage,
    private http: HTTP
  ) { }

  ngOnInit() {
  }
  openRegister() {
    this.router.navigate(['/sign-up']);
  }

  ionViewDidEnter(){
    this.disabledbtn = false;
  }

  // eslint-disable-next-line @typescript-eslint/naming-convention
  async login_user() {
    const url = 'http://localhost/PK%20api/login_user.php';

    const data = {
      action: 'user_login',
      email: this.username,
      password: this.password,

    };

    if (this.username === '') {
      this.presentToast('Your email field is empty');
    }else if (this.password === '') {
      this.presentToast('Your password field is empty');
    }else {
      this.disabledbtn = true;
      // this.presentLoading();
      const loader = await this.loadingCtrl.create({
        message: 'Please wait ......',
      });
      loader.present();



      const headers = { };
      this.http.setDataSerializer('json');
      this.http.setHeader('*','Accept', 'application/json');
      this.http.setHeader('*','Content-Type', 'application/json');
      return this.http.post(url, data, headers)
        .then((response: HTTPResponse) => {
          console.log(`POST ${this.server} ${JSON.stringify(response.data)}`);

          const m = JSON.parse(response.data);

          if (m.status === 'success') {
            loader.dismiss();
            this.disabledbtn = false;
            this.presentToast(m.msg);
            this.storage.set('storage_xxx', m.result);  //storage session
            this.navCtrl.navigateRoot(['user-home']);
          } else {
            loader.dismiss();
            this.disabledbtn = false;
            this.presentToast(m.msg);
          }
        })
        .catch((error: any) => {
          console.error(`POST ${url} ${error.error}`);
          loader.dismiss();
          this.disabledbtn = false;
        });
    }
  }

  async presentToast(msg) {
    const toast = await this.toastCtrl.create({
      message: msg,
      duration: 2000,
      position: 'top'
    });
    await toast.present();
  }
}




