import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { ExploreVideosPage } from './explore-videos.page';
import {HTTP} from '@ionic-native/http/ngx';

const routes: Routes = [
  {
    path: '',
    component: ExploreVideosPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
  providers:[]
})
export class ExploreVideosPageRoutingModule {}
