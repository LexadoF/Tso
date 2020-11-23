import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class RegistroService {

  URL = 'http://localhost/Backend/cliente/';


  constructor(private http: HttpClient) { }

  InsercionDatos(registro) {
    return this.http.post(`${this.URL}registrar.php`, JSON.stringify(registro));
  }
}
