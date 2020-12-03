import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl, FormBuilder, Validators, NgForm } from '@angular/forms';
import { first } from 'rxjs/operators';
import { Router } from '@angular/router';
import { ContactoService } from '../../services/contacto/contacto.service';

@Component({
  selector: 'app-contacto',
  templateUrl: './contacto.component.html',
  styleUrls: ['./contacto.component.css']
})
export class ContactoComponent implements OnInit {
  angForm: FormGroup;
  submitted = false;

  constructor(private fb: FormBuilder, private dataService: ContactoService, private router: Router) { }

  ngOnInit() {
    this.angForm = this.fb.group({
        mensaje: ['', Validators.required],
        nombre: ['', Validators.required],
        telefono: ['', Validators.required],
        correo: ['', [Validators.required, Validators.email]]

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
