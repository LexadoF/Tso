import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LoginComponent } from './components/login/login.component';
import { RegistrarComponent } from './components/registrar/registrar.component';
import { InicioComponent } from './components/inicio/inicio.component';
import { ContactoComponent } from './components/contacto/contacto.component';
import { ProductosComponent } from './components/productos/productos.component';
import { NosotrosComponent } from './components/nosotros/nosotros.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { LoginclienteComponent } from './components/logincliente/logincliente.component';
import { NoticiasComponent } from './components/noticias/noticias.component';
import { FooterComponent } from './components/footer/footer.component';
import { ChatComponent } from './components/chat/chat.component';
import { PerfilComponent } from './components/perfil/perfil.component';
import { ProductoselectComponent } from './components/productoselect/productoselect.component';
import { LoginadminComponent } from './components/loginadmin/loginadmin.component';

// servicios
import { ApiService } from './services/login/api.service';
import { LoginService } from './components/loginadmin/services/login.service';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    RegistrarComponent,
    InicioComponent,
    ContactoComponent,
    ProductosComponent,
    NosotrosComponent,
    NavbarComponent,
    LoginclienteComponent,
    NoticiasComponent,
    FooterComponent,
    ChatComponent,
    PerfilComponent,
    ProductoselectComponent,
    LoginadminComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    HttpClientModule,
    ReactiveFormsModule
  ],
  providers: [
    ApiService,
    LoginService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
