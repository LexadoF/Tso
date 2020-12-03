
import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { HttpClient } from '@angular/common/http';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-contacto',
  templateUrl: './contacto.component.html',
  styleUrls: ['./contacto.component.css']
})
export class ContactoComponent implements OnInit {
  contactos1=null;
  title="Hola en Angular";
  contacto: FormGroup;
  submitted = false;
  titulo = 'Crear un Formulario con Angular 9 y Bootstrap 4 + Validación';
  Autor ='Autor: Ingeniero Johann Latorre';
  Registro1 = 'Formulario de Registro';
  loginbtn: boolean;
  logoutbtn: boolean;

  constructor(private servicioformularioService: ApiService, private formBuilder: FormBuilder, private http: HttpClient) { 
  
  servicioformularioService.getLoggedInName.subscribe(name => this.changeName(name));
  if (this.servicioformularioService.isLoggedIn()) {
    console.log('loggedin');
    this.loginbtn = false;
    this.logoutbtn = true;
  }
  else {
    this.loginbtn = true;
    this.logoutbtn = false;
  }
}
private changeName(name: boolean): void {
  this.logoutbtn = name;
  this.loginbtn = !name;
  }

  ngOnInit() {
    this.listarUsuarios();
  }
  listarUsuarios(){
    this.servicioformularioService.listarUsuarios().subscribe(
      datos => this.contactos1 = datos
    );
  }
  EliminarPersona(id) {
    this.servicioformularioService.EliminarPersona(id).subscribe(
      datos => {
        if(datos['resultado'] == 'OK') {
          alert(datos['mensaje']);
          this.listarUsuarios();
        }
      }
    );
  }
  seleccionarUsuario() {
    this.servicioformularioService.seleccionarUsuario().subscribe(
      datos => this.contactos1 = datos
    );
  }


  hayRegistros() {
    if(this.contactos1 == null) {
      return false;
    } else {
      return true;
    }
  }

}
