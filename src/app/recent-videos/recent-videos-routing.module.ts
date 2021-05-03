import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { RecentVideosPage } from './recent-videos.page';
import {HttpClientModule} from '@angular/common/http';


const routes: Routes = [
  {
    path: '',
    component: RecentVideosPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes) ,HttpClientModule],
  exports: [RouterModule],
})
export class RecentVideosPageRoutingModule {}
