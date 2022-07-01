
class Materia {
    Materia({
        required this.nombreMateria,
        required this.docente,
    });

    String nombreMateria;
    String docente;


    factory Materia.fromJson(Map<String, dynamic> json) => Materia(
        nombreMateria: json["nombre_materia"],
        docente: json["docente"],
    );

    Map<String, dynamic> toJson() => {
        "nombre_materia": nombreMateria,
        "docente": docente,
    };
}
