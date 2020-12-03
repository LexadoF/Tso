import { Component, OnInit } from '@angular/core';
import { ApiService } from '../../services/login/api.service';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { listLazyRoutes } from '@angular/compiler/src/aot/lazy_routes';

@Component({
  selector: 'app-perfil',
  templateUrl: './perfil.component.html',
  styleUrls: ['./perfil.component.css']
})
export class PerfilComponent implements OnInit {
  form1 = null;
  form2: FormGroup;
  submitted = false;
  loginbtn: boolean;
  logoutbtn: boolean;

  constructor(private dataService: ApiService, private formBuilder: FormBuilder) {
    dataService.getLoggedInName.subscribe(name => this.DatosPerfil(name));
    if (this.dataService.isLoggedIn()) {
      console.log('loggedin');
      this.loginbtn = false;
      this.logoutbtn = true;
    }
    else {
      this.loginbtn = true;
      this.logoutbtn = false;
    }
  }

  private DatosPerfil(name: boolean): void {
    this.logoutbtn = name;
    this.loginbtn = !name;
    }

  ngOnInit() {
    this.perfilList();
  }
  perfilList(){
    this.dataService.listarPerfil().subscribe(
      datos => this.form1 = datos
    );
  }

  listaPerfil(){
  if (this.form1 == null){
    return false;
  } else {
    return true;
  }
  }

}
