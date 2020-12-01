import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl, FormBuilder, Validators, NgForm } from '@angular/forms';
import { first } from 'rxjs/operators';
import { Router } from '@angular/router';
import { ApiService } from '../../services/login/api.service';

@Component({
  selector: 'app-registrar',
  templateUrl: './registrar.component.html',
  styleUrls: ['./registrar.component.css']
})
export class RegistrarComponent implements OnInit {
  
  angForm: FormGroup;
  submitted = false;

  constructor(private fb: FormBuilder, private dataService: ApiService, private router: Router) { }

  ngOnInit() {
    this.angForm = this.fb.group({
        documento: ['', Validators.required],
        nombre: ['', Validators.required],
        telefono: ['', Validators.required],
        direccion: ['', Validators.required],
        correo: ['', [Validators.required, Validators.email]],
        contrasena: ['', Validators.required]

    });
  }
  get f() { return this.angForm.controls; }

// tslint:disable-next-line: typedef
  onSubmit() { // funcion de formulario
    this.submitted = true;
    if (this.angForm.invalid) {
        return;
    }
      this.InsercionDatos();
  }

  InsercionDatos() {
    this.dataService.InsercionDatos(this.angForm.value).subscribe(
      datos => {
        if (datos['resultado'] === 'OK') {
          alert(datos['mensaje']);

        }
      }
    );
  }

}
