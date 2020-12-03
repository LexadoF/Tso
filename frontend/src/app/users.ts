export class Users {
    public Id: number;
    public name: string;
    public pwd: string;
    public email: string;

    constructor(Id: number, name: string, pwd: string, email: string) {
    this.Id = Id;
    this.name = name;
    this.pwd = pwd;
    this.email = email;
    }
}

export class Var {
    public Id: number;
    public IdRol: number;
    public name: string;
    public pwd: string;
    public email: string;

    constructor(Id: number, name: string, pwd: string, email: string, IdRol: number) {
    this.Id = Id;
    this.name = name;
    this.pwd = pwd;
    this.email = email;
    this.IdRol = IdRol;
    }
}


