export class Users {
    public id: number;
    public nombre: string;
    public correo: string;
    public contrasena: string;
    
    constructor(id: number, nombre: string, 
                correo: string, contrasena: string){
                    this.id = id;
                    this.nombre = nombre;
                    this.correo = correo;
                    this.contrasena = contrasena;
                }
}
