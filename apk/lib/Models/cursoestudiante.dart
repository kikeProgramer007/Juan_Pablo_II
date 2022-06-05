class Cursoestudiante {
    Cursoestudiante({
      required this.nombre,
      required this.apellidoPaterno,
      required this.apellidoMaterno,
      required this.genero,
      required this.grado,
      required this.nivel,
      required this.grupo,
      required this.gestion,
    });

    String nombre;
    String apellidoPaterno;
    String apellidoMaterno;
    String genero;
    String grado;
    String nivel;
    String grupo;
    String gestion;

    factory Cursoestudiante.fromJson(Map<String, dynamic> json) => Cursoestudiante(
        nombre: json["nombre"],
        apellidoPaterno: json["apellido_paterno"],
        apellidoMaterno: json["apellido_materno"],
        genero: json["genero"],
        grado: json["grado"],
        nivel: json["nivel"],
        grupo: json["grupo"],
        gestion: json["gestion"],
    );

    Map<String, dynamic> toJson() => {
        "nombre": nombre,
        "apellido_paterno": apellidoPaterno,
        "apellido_materno": apellidoMaterno,
        "genero": genero,
        "grado": grado,
        "nivel": nivel,
        "grupo": grupo,
        "gestion": gestion,
    };
}