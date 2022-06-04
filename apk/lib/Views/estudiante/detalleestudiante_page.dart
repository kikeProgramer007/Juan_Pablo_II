import 'package:apk/Models/estudiante.dart';
import 'package:flutter/material.dart';

class DetalleEstudiantePage extends StatefulWidget {

    DetalleEstudiantePage({required this.estudiante});
  final Estudiante estudiante;

  @override
  State<DetalleEstudiantePage> createState() => _DetalleEstudiantePageState();
}

class _DetalleEstudiantePageState extends State<DetalleEstudiantePage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(widget.estudiante.nombre),
      ),

      body: Container(
        width: double.infinity,
        child: ListView(
          children: [
            Image.network('https://as1.ftcdn.net/v2/jpg/00/69/93/04/1000_F_69930495_KT4GRB8Ncx1vbvYZ2iPqPxiG4Nx2nD5y.jpg'),
            Container(
              padding: const EdgeInsets.all(5),
              decoration: const  BoxDecoration(
                gradient: LinearGradient(
                  begin: Alignment.topCenter,
                  end: Alignment.bottomCenter,
                  colors: [ Color(0xff3164bd),  Color (0xff295cb5)],
                ),
              ),
              child: Text(widget.estudiante.nombre, style: const TextStyle(color: Colors.white),),
            ),

            Container(
              padding: const EdgeInsets.all(10),
              color: Colors.lightBlue,
              width: double.infinity,
              height: double.maxFinite,
              child: Text (widget.estudiante.apellidoPaterno),
            ),

          ],
        ),
      ),

    );
  }
}