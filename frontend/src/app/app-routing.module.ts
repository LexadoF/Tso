import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
// Componentes para Rutear:
import { InicioComponent } from './components/inicio/inicio.component';
import { LoginComponent } from './components/login/login.component';
import { ContactoComponent } from './components/contacto/contacto.component';
import { NosotrosComponent } from './components/nosotros/nosotros.component';
import { ProductosComponent } from './components/productos/productos.component';
import { RegistrarseComponent } from './components/registrarse/registrarse.component';
import { NoticiasComponent } from './components/noticias/noticias.component';

const routes: Routes = [
  {path: 'inicio', component: InicioComponent},
  {path: 'login', component: LoginComponent},
  {path: 'registrarse', component: RegistrarseComponent},
  {path: 'nosotros', component: NosotrosComponent},
  {path: 'contacto', component: ContactoComponent},
  {path: 'productos', component: ProductosComponent},
  {path: 'noticias', component: NoticiasComponent},
  {path: '**', pathMatch: 'full', redirectTo: 'inicio'}   
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
