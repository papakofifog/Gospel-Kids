import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { ExploreVideosPageRoutingModule } from './explore-videos-routing.module';

import { ExploreVideosPage } from './explore-videos.page';
import {HttpClientModule} from '@angular/common/http';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    ExploreVideosPageRoutingModule,
    HttpClientModule
  ],
  declarations: [ExploreVideosPage],
  providers:[]
})
export class ExploreVideosPageModule {}
