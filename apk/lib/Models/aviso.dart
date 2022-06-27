

class Aviso {
    Aviso({
        required this.id,
        required this.titulo,
        required this.descripcion,
        required this.fecha,
        required this.autor,
    });

     int id;
     String titulo;
     String descripcion;
     String fecha;
     String autor;


    factory Aviso.fromJson(Map<String, dynamic> json) => Aviso(
        id: json["id"],
        titulo: json["titulo"],
        descripcion: json["descripcion"],
        fecha: (json["fecha"]).toString(),
        autor: json["autor"],
    );

    Map<String, dynamic> toJson() => {
        "id": id,
        "titulo": titulo,
        "descripcion": descripcion,
        "fecha": fecha,
        "autor": autor,
    };
}
