export class Data{
	constructor(
		public total:any,
		public data:any[],
		public last_page:number,
		public current_page:number
	){}
}

export class Proveedor{
	constructor(
		public id:number,
		public nombre:string,
		public registro:string,
		public dui:string,
		public nit:string,
		public descripcion:string,
		public direccion:string,
		public municipio:string,
		public departamento:string,
		public telefono:string,
		public movil:string
	){}
}