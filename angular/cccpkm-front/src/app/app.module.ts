import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AppHomeComponent } from './app-home/app-home.component';
import { TripListComponent } from './trip-list/trip-list.component';
import { TripEditComponent } from './trip-edit/trip-edit.component';
import { UserEditComponent } from './user-edit/user-edit.component';
import { ErrorComponent } from './error/error.component';
import { HttpClientModule } from '@angular/common/http';


@NgModule({
  declarations: [
    AppComponent,
    AppHomeComponent,
    TripListComponent,
    TripEditComponent,
    UserEditComponent,
    ErrorComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
