import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
// Componentes para Rutear:
// import { LoginComponent } from './components/login/login.component';
// import { AboutUsComponent } from './components/about-us/about-us.component';
// import { ContactComponent } from './components/contact/contact.component';
// import { BlogComponent } from './components/blog/blog.component';
// import { ProductsComponent } from './components/products/products.component';
// import { RegisterComponent } from './components/register/register.component';

const routes: Routes = [
  // {path: 'login', component: LoginComponent},
  // {path: 'register', component: RegisterComponent},
  // {path: 'about', component: AboutUsComponent},
  // {path: 'contact', component: ContactComponent},
  // {path: 'blog', component: BlogComponent},
  // {path: 'product', component: ProductsComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
