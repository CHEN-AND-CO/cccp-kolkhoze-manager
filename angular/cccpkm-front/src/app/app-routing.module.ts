import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AppComponent } from './app.component';
import { AppHomeComponent } from './app-home/app-home.component';
import { TripListComponent } from './trip-list/trip-list.component';
import { TripEditComponent } from './trip-edit/trip-edit.component';
import { UserEditComponent } from './user-edit/user-edit.component';
import { ErrorComponent } from './error/error.component';

const routes: Routes = [
  { path: 'home', component: AppHomeComponent },
  { path: 'trips/:uid/edit/:tid', component: TripEditComponent },
  { path: 'trips/:uid', component: TripListComponent },
  { path: 'trips', component: TripListComponent },
  { path: 'u/:uid/new', component: TripEditComponent },
  { path: 'u/:uid/edit', component: UserEditComponent },
  { path: 'u/:uid', component: AppHomeComponent },
  { path: '', component: AppHomeComponent },
  { path: '**', component: ErrorComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})

export class AppRoutingModule { }
