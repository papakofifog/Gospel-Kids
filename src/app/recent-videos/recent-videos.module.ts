import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { RecentVideosPageRoutingModule } from './recent-videos-routing.module';

import { RecentVideosPage } from './recent-videos.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    RecentVideosPageRoutingModule
  ],
  declarations: [RecentVideosPage]
})
export class RecentVideosPageModule {}
