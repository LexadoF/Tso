import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { Router } from '@angular/router';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { InicioComponent } from './components/inicio/inicio.component';
import { ChatComponent } from './components/chat/chat.component';
import { ContactoComponent } from './components/contacto/contacto.component';
import { NosotrosComponent } from './components/nosotros/nosotros.component';
import { NoticiaComponent } from './components/noticia/noticia.component';
import { ProductosComponent } from './components/productos/productos.component';
import { RegistrarseComponent } from './components/registrarse/registrarse.component';
import { FooterComponent } from './components/footer/footer.component';
import { LoginComponent } from './components/login/login.component';

// Servicios
import { RegistroService } from '../app/services/cliente/registro.service';
import { ApiService } from '../app/components/login/servicios/serviciologin';




@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    InicioComponent,
    ChatComponent,
    ContactoComponent,
    NosotrosComponent,
    NoticiaComponent,
    ProductosComponent,
    RegistrarseComponent,
    FooterComponent,
    LoginComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule
  ],
  providers: [
    RegistroService,
    ApiService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
