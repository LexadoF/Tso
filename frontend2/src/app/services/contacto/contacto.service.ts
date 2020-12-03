import { Injectable } from '@angular/core';
import { map } from 'rxjs/operators';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ContactoService {
  URL = 'http://localhost/Backend/cliente/';
  constructor(private httpClient: HttpClient) { }

  InsercionDatos(registro) {
    return this.httpClient.post(`${this.URL}contacto.php`, JSON.stringify(registro));
  }
}
