import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AgeVerifyPage } from './age-verify.page';

const routes: Routes = [
  {
    path: '',
    component: AgeVerifyPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AgeVerifyPageRoutingModule {}
