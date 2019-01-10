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
  { path: 'u/:uname/trips/:tid/edit', component: TripEditComponent },
  { path: 'u/:uname/trips', component: TripListComponent },
  { path: 'u/:uname/new', component: TripEditComponent },
  { path: 'u/:uname/edit', component: UserEditComponent },
  { path: 'u/:uname', component: AppHomeComponent },
  { path: '', component: AppHomeComponent },
  { path: '**', component: ErrorComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})

export class AppRoutingModule { }
