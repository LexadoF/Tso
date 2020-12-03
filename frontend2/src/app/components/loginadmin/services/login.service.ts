import { Injectable, Output, EventEmitter } from '@angular/core';
import { map } from 'rxjs/operators';
import { HttpClient } from '@angular/common/http';
import { Users } from './users';

@Injectable({
providedIn: 'root'
})

export class LoginService {
redirectUrl: string;
baseUrl = 'http://localhost/angular_admin/php';
URL = 'http://localhost/Backend/cliente/';

@Output() getLoggedInName: EventEmitter<any> = new EventEmitter();
var: null;
constructor(private httpClient: HttpClient) { }

public adminlogin(username, password) {
alert(username);
return this.httpClient.post<any>(this.baseUrl + '/logina.php', { username, password })
.pipe(map( Users => {
this.setToken(Users[0].name);
this.getLoggedInName.emit(true);
return Users;
}));
}

// public userregistration(name, email, pwd) {
// return this.httpClient.post<any>(this.baseUrl + '/register.php', { name, email, pwd })
// .pipe(map( Users => {
// return Users;
// }));
// } traer los datos de la bd y mandarlos a user y despues llamarlos y ponerlos en un form

// token
setToken(token: string) {
localStorage.setItem('token', token);
}
getToken() {
return localStorage.getItem('token');
}
deleteToken() {
localStorage.removeItem('token');
}
isLoggedIn() {
const usertoken = this.getToken();
if (usertoken != null) {
return true;
}
return false;
}
}
