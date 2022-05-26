
class Licencia {
    Licencia({
      required  this.id,
      required  this.asunto,
      required  this.justificacion,
      required  this.fecha,
      required  this.activo,
      required  this.idEstudiante,
    });

    int id;
    String asunto;
    String justificacion;
    String fecha;
    int activo;
    int idEstudiante;
   

    factory Licencia.fromJson(Map<String, dynamic> json) => Licencia(
        id: json["id"],
        asunto: json["asunto"],
        justificacion: json["justificacion"],
        fecha: (json["fecha"]).toString(),
        activo: json["activo"],
        idEstudiante: json["id_estudiante"]
    );

    Map<String, dynamic> toJson() => {
        "id": id,
        "asunto": asunto,
        "justificacion": justificacion,
        "fecha": fecha,
        "activo": activo,
        "id_estudiante": idEstudiante
    };
}