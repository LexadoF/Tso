import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NoticiasComponent } from './noticias/noticias.component';
import { ProductosComponent } from './productos/productos.component';
import { HomeComponent } from './home/home.component';
import { LoginComponent } from './login/login.component';
import { RegisterComponent } from './register/register.component';
import { DashboardComponent } from './dashboard/dashboard.component';
import { NosotrosComponent } from './nosotros/nosotros.component';
import { ContactoComponent } from './contacto/contacto.component';
import { ChatComponent } from './chat/chat.component';
import { FooterComponent } from './footer/footer.component';
import { GclienteComponent } from './gcliente/gcliente.component';
import { GvendedorComponent } from './gvendedor/gvendedor.component';
import { GproductosComponent } from './gproductos/gproductos.component';
import { LogincComponent } from './loginc/loginc.component';
import { LoginvComponent } from './loginv/loginv.component';
import { LoginadminComponent } from './loginadmin/loginadmin.component';

// servicios
import { ApiService } from './api.service';
import { ApisService } from './loginadmin/servicios/apis.service';

@NgModule({
  declarations: [
    AppComponent,
    NoticiasComponent,
    ProductosComponent,
    HomeComponent,
    LoginComponent,
    RegisterComponent,
    DashboardComponent,
    NosotrosComponent,
    ContactoComponent,
    ChatComponent,
    FooterComponent,
    GclienteComponent,
    GvendedorComponent,
    GproductosComponent,
    LogincComponent,
    LoginvComponent,
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
ApisService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
