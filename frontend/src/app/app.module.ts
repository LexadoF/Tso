import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';

import { AppComponent } from './app.component';
import { LoginComponent } from './components/login/login.component';
import { AppRoutingModule} from './app-routing.module';


import { NosotrosComponent } from './components/nosotros/nosotros.component';
import { ContactoComponent } from './components/contacto/contacto.component';
import { ProductosComponent } from './components/productos/productos.component';
import { InicioComponent } from './components/inicio/inicio.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { NoticiasComponent } from './components/noticias/noticias.component';
import { ChatComponent } from './components/chat/chat.component';

// servicios
import { RegistrocService } from './services/registroc.service';


@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    NosotrosComponent,
    ContactoComponent,
    ProductosComponent,
    InicioComponent,
    NavbarComponent,
    NoticiasComponent,
    ChatComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule
  ],
  providers: [
    RegistrocService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
