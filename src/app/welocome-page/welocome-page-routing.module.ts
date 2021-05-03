import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { WelocomePagePage } from './welocome-page.page';

const routes: Routes = [
  {
    path: '',
    component: WelocomePagePage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class WelocomePagePageRoutingModule {}
