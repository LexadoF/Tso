import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LoginComponent } from './login/login.component';
import { HomeComponent } from './home/home.component';
import { RegisterComponent } from './register/register.component';
import { ProductosComponent } from './productos/productos.component';
import { NoticiasComponent } from './noticias/noticias.component';
import { DashboardComponent } from './dashboard/dashboard.component';
import { ContactoComponent } from './contacto/contacto.component';
import { NosotrosComponent } from './nosotros/nosotros.component';
import { AuthguardGuard } from './authguard.guard';

const routes: Routes = [
// { path: 'login', component: LoginComponent },
{ path: 'home', component: HomeComponent },
{ path: 'productos', component: ProductosComponent },
{ path: 'noticias', component: NoticiasComponent },
{ path: 'contacto', component: ContactoComponent },
{ path: 'nosotros', component: NosotrosComponent },
{ path: 'registration', component: RegisterComponent },
{ path: 'dashboard', component: DashboardComponent, canActivate: [AuthguardGuard] },
// {path: '**', pathMatch: 'full', redirectTo: 'home'}
];

@NgModule({
imports: [RouterModule.forRoot(routes)],
exports: [RouterModule]
})

export class AppRoutingModule { }
