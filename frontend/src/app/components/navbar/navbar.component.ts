import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { HttpClient } from '@angular/common/http';
import { RegistrocService } from '../../services/registroc.service';
// import * as jsfeat from 'jsfeat';

declare var funcion1: any; // para utilizar las funciones de javascript
declare var funcion2: any; // para utilizar las funciones de javascript
declare var funcion3: any; // para utilizar las funciones de javascript
// var funi=require("./validacion.js");

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {

  title = 'Hola en Angular';
  registro: FormGroup;
  submitted = false;
  titulo = 'Crear un Formulario con Angular 9 y Bootstrap 4 + Validación';
  Autor = 'Autor: Ingeniero Johann Latorre';

  constructor(private registrocService: RegistrocService, private formBuilder: FormBuilder,
              private http: HttpClient) { }

  // onClick1(){ // funcion de javascript fichero validacion.js

  //  // alert("Welcome to custome js");
  //   funcion1();
  // }

  // onClick2(){ // funcion de javascript fichero validacion.js

  //   // alert("Welcome to custome js");
  //     funcion2();

  //  }

  // onClick3(){ // funcion de javascript fichero validacion.js

  //   // alert("Welcome to custome js");
  //     funcion3();

  //  }


  ngOnInit() {
    this.registro = this.formBuilder.group({
        documento: ['', Validators.required],
        nombres: ['', Validators.required],
        telefono: ['', Validators.required],
        direccion: ['', Validators.required],
        correo: ['', Validators.required],
        clave: ['', Validators.required]

    });
  }


      /*Directiva de Angular que agrega una
      propiedad get para facilitar el acceso a
      los controles de formulario en el HTML*/

    get f() { return this.registro.controls; }

  onSubmit() { // funcion de formulario

    this.submitted = true;

    if (this.registro.invalid) {
        return;
    }
    // alert('Mensaje Enviado !'+JSON.stringify(this.contacto.value))
  //  console.log('Mensaje Enviado !'+JSON.stringify(this.contacto.value))

      this.InsercionDatos();
  }


  InsercionDatos() {
    this.registrocService.InsercionDatos(this.registro.value).subscribe(
      datos => {
        if (datos[ ' resultado ' ] === 'OK') {
          alert(datos[' mensaje ']);

        }
      }
    );
  }

}


