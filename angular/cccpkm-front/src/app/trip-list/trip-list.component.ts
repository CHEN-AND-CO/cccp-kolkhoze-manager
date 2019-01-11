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
  uid: any;

  constructor(private api: ApiClient, private route: ActivatedRoute) { }
  
  async ngOnInit() {
    console.log("Aloha");

    // this.route.paramMap.subscribe( params => {
    //   this.uid = parseInt( params.get('uid') );
    //   console.log(this.uid);
    // });

    this.uid = this.route.snapshot.params.uid;
    console.log(this.uid);
    console.log("Fini")

    this.api.getTrips()
            .subscribe( (data: Trip[]) => this.trips = { ...data });

    this.api.getUser(this.uid)
            .subscribe( (data: User) => this.user = { ...data });
  }

}
