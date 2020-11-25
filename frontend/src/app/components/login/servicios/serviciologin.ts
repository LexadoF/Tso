import { Injectable, Output, EventEmitter } from '@angular/core';
import { map } from 'rxjs/operators';
import { HttpClient } from '@angular/common/http';

@Injectable({
    providedIn: 'root'
})

export class ApiService {
    redirectUrl: string;

    URL = 'http://localhost/Backend/cliente/';

    baseUrl = 'http://localhost/Backend/cliente/';

    @Output() getLoggedInName: EventEmitter<any> = new EventEmitter();
    
    constructor(private http: HttpClient, private httpClient: HttpClient){}

    public userlogin(correo, contrasena) {
        return this.httpClient.post<any>(this.baseUrl + 'login.php', { correo, contrasena })
        .pipe(map(Users => {
            this.setToken(Users[0].name);
            this.getLoggedInName.emit(true);
            return Users;
        }));
    }

// InsercionDatos(registro) {
//     return this.http.post(`${this.URL}registrar.php`, JSON.stringify(registro));
// }

// Tokens

setToken(token: string){
    localStorage.setItem('token', token);
}
getToken(){
    return localStorage.getItem('token');
}
deleteToken(){
    localStorage.removeItem('token');
}
isLoggedIn(){
    const usertoken = this.getToken();
    if (usertoken != null){
        return true;
    }
    return false;
}

}