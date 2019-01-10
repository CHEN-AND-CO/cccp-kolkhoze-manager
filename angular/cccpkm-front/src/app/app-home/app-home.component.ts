import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-app-home',
  templateUrl: './app-home.component.html',
  styleUrls: ['./app-home.component.css']
})
export class AppHomeComponent implements OnInit {

  @Input() user: string;

  constructor() { }

  ngOnInit() {
  }

}
