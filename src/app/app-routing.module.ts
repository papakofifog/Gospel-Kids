import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';


const routes: Routes = [
  {
    path: '',
    loadChildren: () => import('./tabs/tabs.module').then(m => m.TabsPageModule)
  },
  {
    path: 'home',
    loadChildren: () => import('./home/home.module').then( m => m.HomePageModule)
  },
  {
    path: 'explore-videos',
    loadChildren: () => import('./explore-videos/explore-videos.module').then( m => m.ExploreVideosPageModule)
  },
  {
    path: 'recent-videos',
    loadChildren: () => import('./recent-videos/recent-videos.module').then( m => m.RecentVideosPageModule)
  },
  {
    path: 'welocome-page',
    loadChildren: () => import('./welocome-page/welocome-page.module').then( m => m.WelocomePagePageModule)
  },
  {
    path: 'login-page',
    loadChildren: () => import('./login-page/login-page.module').then( m => m.LoginPagePageModule)
  },
  {
    path: 'sign-up',
    loadChildren: () => import('./sign-up/sign-up.module').then( m => m.SignUpPageModule)
  },
  {
    path: 'age-verify',
    loadChildren: () => import('./age-verify/age-verify.module').then( m => m.AgeVerifyPageModule)
  },

  {
    path: 'video-player',
    loadChildren: () => import('./video-player/video-player.module').then( m => m.VideoPlayerPageModule)
  },
  {
    path: 'video-player/id',
    loadChildren: () => import('./video-player/video-player.module').then( m => m.VideoPlayerPageModule)
  },
];
@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule {}
