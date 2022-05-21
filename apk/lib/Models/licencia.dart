
class Licencia {
    Licencia({
      required  this.id,
      required  this.justificacion,
      required  this.fecha,
      required  this.activo,
      required  this.idEstudiante,
    });

    int id;
    String justificacion;
    String fecha;
    int activo;
    int idEstudiante;
   

    factory Licencia.fromJson(Map<String, dynamic> json) => Licencia(
        id: json["id"],
        justificacion: json["justificacion"],
        fecha: (json["fecha"]).toString(),
        activo: json["activo"],
        idEstudiante: json["id_estudiante"]
    );

    Map<String, dynamic> toJson() => {
        "id": id,
        "justificacion": justificacion,
        "fecha": fecha  ,
        "activo": activo,
        "id_estudiante": idEstudiante
    };
}