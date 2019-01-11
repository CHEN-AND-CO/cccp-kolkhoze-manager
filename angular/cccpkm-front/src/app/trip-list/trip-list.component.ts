import { Component, OnInit } from '@angular/core';
import { ApiClient, Trip, User } from '../../lib/api-client';

@Component({
  selector: 'app-trip-list',
  templateUrl: './trip-list.component.html',
  styleUrls: ['./trip-list.component.css'],
  providers: [ApiClient]
})
export class TripListComponent implements OnInit {

  trips: Trip[];

  constructor(private api: ApiClient) { }

  ngOnInit() {
    this.api.getTrips()
            .subscribe( (data: Trip[]) => this.trips = { ...data });
  }

}
