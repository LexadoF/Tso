import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators} from '@angular/forms';
import { HttpClient } from '@angular/common/http';
import { RegistroService } from '../../services/cliente/registro.service';

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

  constructor(private registroService: RegistroService, private formBuilder: FormBuilder,
              private http: HttpClient) { }

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
        if (datos[ ' resultado ' ] === 'OK') {
          alert(datos[' mensaje ']);

        }
      }
    );
  }

}
