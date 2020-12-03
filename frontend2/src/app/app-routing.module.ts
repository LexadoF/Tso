import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LoginComponent } from './components/login/login.component';
import { InicioComponent } from './components/inicio/inicio.component';
import { RegistrarComponent } from './components/registrar/registrar.component';
import { ProductosComponent } from './components/productos/productos.component';
import { NoticiasComponent } from './components/noticias/noticias.component';
// import { DashboardComponent } from './dashboard/dashboard.component';
import { ContactoComponent } from './components/contacto/contacto.component';
import { NosotrosComponent } from './components/nosotros/nosotros.component';
import { AuthguardGuard } from './authguard.guard';
import { LoginclienteComponent } from './components/logincliente/logincliente.component';
import { PerfilComponent } from './components/perfil/perfil.component';
import { ProductoselectComponent } from './components/productoselect/productoselect.component';
import { LoginadminComponent } from './components/loginadmin/loginadmin.component';

const routes: Routes = [
{ path: 'inicio', component: InicioComponent },
{ path: 'perfil', component: PerfilComponent },
{ path: 'productos', component: ProductosComponent },
{ path: 'productosel', component: ProductoselectComponent },
{ path: 'noticias', component: NoticiasComponent },
{ path: 'contacto', component: ContactoComponent },
{ path: 'nosotros', component: NosotrosComponent },
{ path: 'logincliente', component: LoginclienteComponent },
{ path: 'loginadmin', component: LoginadminComponent },
{ path: 'registrar', component: RegistrarComponent },
// { path: 'dashboard', component: DashboardComponent, canActivate: [AuthguardGuard] },
{path: '**', pathMatch: 'full', redirectTo: 'inicio'}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
