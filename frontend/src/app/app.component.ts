import { Component } from '@angular/core';
import { ApiService } from './api.service';
import { ApisService } from './loginadmin/servicios/apis.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'frontend';
  loginbtn: boolean;
  logoutbtn: boolean;

constructor(private dataService: ApiService, private datas: ApisService) {
// cliente
  dataService.getLoggedInName.subscribe(name => this.changeName(name));
  if (this.dataService.isLoggedIn()) {
    console.log('loggedin');
    this.loginbtn = false;
  }
  else {
    this.loginbtn = true;
    this.logoutbtn = false;
  }
// // admin
//   datas.getLoggedInName.subscribe(name => this.changeNamea(name));
//   if (this.datas.isLoggedIn()) {
//     console.log('loggedin');
//     this.logina = false;
//     this.logouta = true;
//   }
//   else {
//     this.logina = true;
//     this.logouta = false;
//   }
}
// cliente
  private changeName(name: boolean): void {
  this.logoutbtn = name;
  this.loginbtn = !name;
  }

  logout() {
  this.dataService.deleteToken();
  window.location.href = window.location.href = 'home';
  }
// fin cliente
// // admin
// private changeNamea(name: boolean): void {
//   this.logouta = name;
//   this.logina = !name;
//   }

//   logoutadmin() {
//   this.datas.deleteToken();
//   window.location.href = window.location.href = 'home';
//   }
// // fin admin

}
