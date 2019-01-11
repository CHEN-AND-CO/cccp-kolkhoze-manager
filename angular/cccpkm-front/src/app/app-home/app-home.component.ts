import { Component, OnInit, Input } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-app-home',
  templateUrl: './app-home.component.html',
  styleUrls: ['./app-home.component.css']
})
export class AppHomeComponent implements OnInit {

  username: string;
  
  constructor(private route: ActivatedRoute ) {
    this.username = '[void]';
  }

  ngOnInit() {
    this.route.paramMap.subscribe(params => this.username = params.get('uid'));
  }

}
