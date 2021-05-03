import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { WelocomePagePageRoutingModule } from './welocome-page-routing.module';

import { WelocomePagePage } from './welocome-page.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    WelocomePagePageRoutingModule
  ],
  declarations: [WelocomePagePage]
})
export class WelocomePagePageModule {}
