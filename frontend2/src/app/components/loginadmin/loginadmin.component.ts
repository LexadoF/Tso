import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators, NgForm, FormControl } from '@angular/forms';
import { first } from 'rxjs/operators';
import { Router } from '@angular/router';
import { LoginService } from './services/login.service';

@Component({
  selector: 'app-loginadmin',
  templateUrl: './loginadmin.component.html',
  styleUrls: ['./loginadmin.component.css']
})
export class LoginadminComponent implements OnInit {
  angForm: FormGroup;
  submitted = false;

  logina = {
    id: null,
    email: null,
    password: null
  };
  constructor(private fb: FormBuilder, private dataService: LoginService, private router: Router) { }

  ngOnInit(): void {
    this.angForm = this.fb.group({
      email: ['', [Validators.required, Validators.email]],
      password: ['', [Validators.required, Validators.minLength(6)]]
      // Validators.pattern(/^-?(0|[1-9]\d*)?$/),
      });
  }
  get f(){ return this.angForm.controls; } // funcion para mostrar los errores

  IniciarSesion(){ // Funcion del Form Iniciar Sesion
    this.submitted = true;
    if (this.angForm.invalid){
      return;
    }
    this.postdata(this.angForm);
  }

  postdata(angForm1) {
  this.dataService.adminlogin(angForm1.value.email, angForm1.value.password)
  .pipe(first())
  .subscribe(
  data => {
  const redirect = this.dataService.redirectUrl ? this.dataService.redirectUrl : 'noticias';
  this.router.navigate([redirect]);
  },
  error => {
  alert('usuario o contraseña incorrecta del admin');
  });
  }

  get email() { return this.angForm.get('email'); }
  get password() { return this.angForm.get('password'); }

}
