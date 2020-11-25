import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ContactoComponent } from './components/contacto/contacto.component';
import { InicioComponent } from './components/inicio/inicio.component';
import { NosotrosComponent } from './components/nosotros/nosotros.component';
import { ProductosComponent } from './components/productos/productos.component';
import { NoticiaComponent } from './components/noticia/noticia.component';
import { LoginComponent } from './components/login/login.component';
import { RegistrarseComponent } from './components/registrarse/registrarse.component';
import { AuthguardGuard } from './components/login/servicios/authguard.guard';

const routes: Routes = [
  {path: 'inicio', component: InicioComponent },
  {path: 'login', component: LoginComponent },
  {path: 'registro', component: RegistrarseComponent },
  {path: 'nosotros', component: NosotrosComponent },
  {path: 'contacto', component: ContactoComponent },
  {path: 'noticia', component: NoticiaComponent, canActivate: [AuthguardGuard]  },
  {path: 'productos', component: ProductosComponent },
  {path: '**', pathMatch: 'full', redirectTo: 'inicio'}

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
