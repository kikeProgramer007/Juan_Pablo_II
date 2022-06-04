class Notas {
    Notas({
        required this.nombreMateria,
        required this.notaPrimerBimestre,
        required this.notaSegundoBimestre,
        required this.notaTercerBimestre,
        required this.notaCuartoBimestre,
        required this.promedioAnual,
    });

    String nombreMateria;
    int notaPrimerBimestre;
    int notaSegundoBimestre;
    int notaTercerBimestre;
    int notaCuartoBimestre;
    int promedioAnual;

    factory Notas.fromJson(Map<String, dynamic> json) => Notas(
        nombreMateria: json["nombre_materia"],
        notaPrimerBimestre: json["nota_primer_bimestre"],
        notaSegundoBimestre: json["nota_segundo_bimestre"],
        notaTercerBimestre: json["nota_tercer_bimestre"],
        notaCuartoBimestre: json["nota_cuarto_bimestre"],
        promedioAnual: json["promedio_anual"],
    );

    Map<String, dynamic> toJson() => {
        "nombre_materia": nombreMateria,
        "nota_primer_bimestre": notaPrimerBimestre,
        "nota_segundo_bimestre": notaSegundoBimestre,
        "nota_tercer_bimestre": notaTercerBimestre,
        "nota_cuarto_bimestre": notaCuartoBimestre,
        "promedio_anual": promedioAnual,
    };
}