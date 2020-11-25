import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators} from '@angular/forms';
import { HttpClient } from '@angular/common/http';
import { RegistroService } from '../../services/cliente/registro.service';
import { ApiService } from '../login/servicios/serviciologin'; // activar al crear servicio login

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})

export class NavbarComponent implements OnInit {
  registro: FormGroup;
  submitted = false;
  loginbtn: boolean;
  logoutbtn: boolean;

  constructor(private registroService: RegistroService, private formBuilder: FormBuilder,
              private http: HttpClient, private dataService: ApiService) {
  dataService.getLoggedInName.subscribe(name => this.changeName(name));
  if(this.dataService.isLoggedIn())
  {
    console.log('loggedin');
    this.loginbtn = false;
    this.logoutbtn = true;
  }
  else{
    this.loginbtn = true;
    this.logoutbtn = false;
  }
  }
  
  private changeName(name: boolean): void {
    this.logoutbtn = name;
    this.loginbtn = !name;
  }
  logout()
  {
    this.dataService.deleteToken();
    window.location.href = '/inicio';
  }

  ngOnInit() {
    this.registro = this.formBuilder.group({
      documento: ['', Validators.required],
        nombre: ['', Validators.required],
        telefono: ['', Validators.required],
        direccion: ['', Validators.required],
        correo: ['', [Validators.required, Validators.email]],
        contrasena: ['', [Validators.required, Validators.minLength(6)]]

    });
  }


      /*Directiva de Angular que agrega una
      propiedad get para facilitar el acceso a
      los controles de formulario en el HTML*/

    // tslint:disable-next-line: typedef
    get f() { return this.registro.controls; }

  // tslint:disable-next-line: typedef
  onSubmit() { // funcion de formulario

    this.submitted = true;

    if (this.registro.invalid) {
        return;
    }
    // alert('Mensaje Enviado !'+JSON.stringify(this.contacto.value))
  //  console.log('Mensaje Enviado !'+JSON.stringify(this.contacto.value))

      // tslint:disable-next-line: align
      this.InsercionDatos();
  }


  // tslint:disable-next-line: typedef
  InsercionDatos() {
    this.registroService.InsercionDatos(this.registro.value).subscribe(
      datos => {
        if (datos['resultado'] == 'OK') {
          alert(datos['mensaje']);

        }
      }
    );
  }

}
