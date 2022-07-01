
class Faltas {
    Faltas({
        required this.fecha,
        required this.estado,
    });

    String fecha;
    String estado;

    factory Faltas.fromJson(Map<String, dynamic> json) => Faltas(
        fecha: (json["fecha"]).toString(),
        estado: json["estado"],
    );

    Map<String, dynamic> toJson() => {
        "fecha": fecha,
        "estado": estado,
    };
}
