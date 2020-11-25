import { Component, OnInit } from '@angular/core';
import { FormsModule, FormGroup, FormBuilder, Validators, NgForm } from '@angular/forms';
import { Router } from '@angular/router';
import { HttpClient } from '@angular/common/http';
import { first } from 'rxjs/operators';
import { ApiService } from './servicios/serviciologin';

declare var ventana4: any; // utiliza funciones de js

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  login: FormGroup;
  submitted = false;

  loginv = {
    id: null,
    correo: null,
    contrasena: null
  };

  constructor(private dataService: ApiService, private formBuilder: FormBuilder,
              private http: HttpClient, private router: Router ) { }

  ngOnInit(): void {
    this.login = this.formBuilder.group({
      correo: ['', [Validators.required, Validators.email]],
      contrasena: ['', Validators.required]
    });
  }

    get f(){ return this.login.controls; }

    IniciarSesion(){ // Funcion del Form Iniciar Sesion
        this.submitted = true;
        if (this.login.invalid){
          return;
        }
        this.Iniciar_Sesion(this.login);
    }

ventana4(){
  this.ventana4();
}

Iniciar_Sesion(login){
  this.dataService.userlogin(login.value.correo, login.value.contrasena)
  .pipe(first())
  .subscribe(
  data => {
    const redirect = this.dataService.redirectUrl ? this.dataService.redirectUrl : 'inicio.php';
    this.router.navigate([redirect]);
  },
  error => {
    ventana4(); // mensaje js
  });
}

}
