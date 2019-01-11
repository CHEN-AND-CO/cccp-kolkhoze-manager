import { Injectable, NgModule } from '@angular/core';
import { HttpClient } from '@angular/common/http';

const api_uri = 'http://symfony.frm-project.isen/api';



export interface User {
    uid: number,        //User ID
    firstname: string,  //User first name
    lastname: string,   //User last name
    address: string,    //User address
    distance: number    //Distance from user to workplace
    company: string,
    service: string
}

export interface Trip {
    tid: number,        //Trip ID
    uid: number,        //User ID of the user this trip belongs to
    date: WeirdDate,         //Date at which the trip was made
    valid_date: WeirdDate,   //Date of validation
    validated: boolean, //Is the trip validated
    type: string,       //Type of trip
    distance: number,   //Distance covered
    amount: number      //Amound refunded for the trip
}

export interface WeirdDate {
    date: string,
    timezone_type: number,
    timezone: string
}

@Injectable()
export class ApiClient {

    constructor (private http: HttpClient) {}

    getUser(uid: number) {
        return this.http.get<User>(api_uri + '/user/' + uid);
    }

    getTrips(uid?: number) {
        console.log('UID : ' + uid);
        
        if (uid) return this.http.get<Array<Trip>>(api_uri + '/trips/' + uid);
        else return this.http.get<Array<Trip>>(api_uri + '/trips/');
    }

    getTripsByDate(uid: number, year: number, month: number) {
        return this.http.get<Array<Trip>>(api_uri + '/trips/' + uid + '/' + year + '/' + month);
    }
}