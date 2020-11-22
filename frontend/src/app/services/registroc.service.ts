import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class RegistrocService {

  URL = 'http://localhost/Backend/cliente';


  constructor(private http: HttpClient) { }

  InsercionDatos(contacto) {
    return this.http.post(`${this.URL}registrar.php`, JSON.stringify(contacto));
  }
}
