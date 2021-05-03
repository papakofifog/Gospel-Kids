import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { AgeVerifyPageRoutingModule } from './age-verify-routing.module';

import { AgeVerifyPage } from './age-verify.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AgeVerifyPageRoutingModule
  ],
  declarations: [AgeVerifyPage]
})
export class AgeVerifyPageModule {}
