import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AppHomeComponent } from './app-home/app-home.component';

const routes: Routes = [
  { path: 'home', component: AppHomeComponent },
  // { path: 'u/:uname/trips/:tid/edit', component: /*TODO*/ },
  // { path: 'u/:uname/trips', component: /*TODO*/ },
  // { path: 'u/:uname/new', component: /*TODO*/ },
  // { path: 'u/:uname/edit', component: /*TODO*/ },
  // { path: 'u/:uname', component: /*TODO*/ },
  { path: '', redirectTo: '/home' },
  // { path: '**', component: /*TODO*/ }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})

export class AppRoutingModule { }
