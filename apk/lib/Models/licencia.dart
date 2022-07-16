
class Licencia {
    Licencia({
      required  this.id,
      required  this.asunto,
      required  this.justificacion,
      required  this.fecha,
      required  this.activo,
      required  this.idEstudiante,
      required  this.nombre,
      required  this.apellidoPaterno,
      required  this.apellidoMaterno
    });

    int id;
    String asunto;
    String justificacion;
    String fecha;
    int activo;
    int idEstudiante;
    String nombre;
    String apellidoPaterno;
    String apellidoMaterno;
   

    factory Licencia.fromJson(Map<String, dynamic> json) => Licencia(
        id: json["id"],
        asunto: json["asunto"],
        justificacion: json["justificacion"],
        fecha: (json["fecha"]).toString(),
        activo: json["activo"],
        idEstudiante: json["id_estudiante"],
        nombre: json["nombre"],
        apellidoPaterno: json["apellido_paterno"],
        apellidoMaterno: json["apellido_materno"]
    );

    Map<String, dynamic> toJson() => {
        "id": id,
        "asunto": asunto,
        "justificacion": justificacion,
        "fecha": fecha,
        "activo": activo,
        "id_estudiante": idEstudiante,
        "nombre": nombre,
        "apellido_paterno": apellidoPaterno,
        "apellido_materno": apellidoMaterno,
    };
}