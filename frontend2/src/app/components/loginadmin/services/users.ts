export class Users {
    public Id: number;
    public name: string;
    public pwd: string;
    public email: string;
    public telefono: string;
    public direccion: string;


    constructor(Id: number, name: string, pwd: string, email: string, telefono: string, direccion: string) {
    this.Id = Id;
    this.name = name;
    this.pwd = pwd;
    this.email = email;
    this.telefono = telefono;
    this.direccion = direccion;
    }
}
