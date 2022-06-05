
class Estudiante {
    Estudiante({
      required  this.id,
      required  this.codigoRude,
      required  this.cedulaIdentidad,
      required  this.nombre,
      required  this.apellidoPaterno,
      required  this.apellidoMaterno,
      required  this.genero,
      required  this.fechaNacimiento,
    });

    int id;
    String codigoRude;
    String cedulaIdentidad;
    String nombre;
    String apellidoPaterno;
    String apellidoMaterno;
    String genero;
    String fechaNacimiento;

    factory Estudiante.fromJson(Map<String, dynamic> json) => Estudiante(
        id: json["id"],
        codigoRude: json["codigo_rude"],
        cedulaIdentidad: json["cedula_identidad"],
        nombre: json["nombre"],
        apellidoPaterno: json["apellido_paterno"],
        apellidoMaterno: json["apellido_materno"],
        genero: json["genero"],
        fechaNacimiento: json["fecha_nacimiento"].toString(),
    );

    Map<String, dynamic> toJson() => {
        "id": id,
        "codigo_rude": codigoRude,
        "cedula_identidad": cedulaIdentidad,
        "nombre": nombre,
        "apellido_paterno": apellidoPaterno,
        "apellido_materno": apellidoMaterno,
        "genero": genero,
        "fecha_nacimiento": fechaNacimiento,
    };
}