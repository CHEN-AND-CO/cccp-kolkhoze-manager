import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, ActivatedRouteSnapshot } from '@angular/router';
import { ApiClient, Trip, User } from '../../lib/api-client';

@Component({
  selector: 'app-trip-list',
  templateUrl: './trip-list.component.html',
  styleUrls: ['./trip-list.component.css'],
  providers: [ApiClient]
})
export class TripListComponent implements OnInit {

  trips: Trip[];
  user: User;

  uid: number;
  year: number;
  month:number;

  constructor(private api: ApiClient, private route: ActivatedRoute) { }
  
  ngOnInit() {

    this.uid = this.route.snapshot.params.uid;
    this.year = this.route.snapshot.params.year;
    this.month = this.route.snapshot.params.month;


    
    this.api.getUser(this.uid)
    .subscribe( (data: User) => this.user = data);
    
    if (this.year && this.month)
    {
      this.api.getTripsByDate(this.uid, this.year, this.month)
              .subscribe( (data: Trip[]) => this.trips = data );
    } else {
      this.api.getTrips(this.uid)
              .subscribe( (data: Trip[]) => this.trips = data );
    }

    // if (this.trips.length) this.trips.forEach( trip => trip.date = trip._date.date.split(' ')[0] );
  }

}
