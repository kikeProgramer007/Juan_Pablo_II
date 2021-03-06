// ignore_for_file: file_names

import 'package:flutter/material.dart';

import 'package:apk/Models/licencia.dart';

class DetalleLicenciaPage extends StatefulWidget {

    const DetalleLicenciaPage({Key? key, required this.licencia}) : super(key: key);
  final Licencia licencia;

  @override
  State<DetalleLicenciaPage> createState() => _DetalleLicenciaPageState();
}

class _DetalleLicenciaPageState extends State<DetalleLicenciaPage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(widget.licencia.asunto.toString()),
        backgroundColor: Colors.black,
      ),

      body: SizedBox(
        width: double.infinity,
        child: ListView(
          children: [
            // Image.network('https://as1.ftcdn.net/v2/jpg/00/69/93/04/1000_F_69930495_KT4GRB8Ncx1vbvYZ2iPqPxiG4Nx2nD5y.jpg'),
            Image.asset('assets/images/book.png'),
            Container(
              padding: const EdgeInsets.all(5),
              decoration: const  BoxDecoration(
                gradient: LinearGradient(
                  begin: Alignment.topCenter,
                  end: Alignment.bottomCenter,
                  colors: [ Color.fromARGB(255, 0, 0, 0),  Color.fromARGB(255, 0, 0, 0)],
                ),
              ),
              child: Text("Asunto: "+widget.licencia.asunto, style: const TextStyle(color: Colors.white),),
            ),

            Container(
              padding: const EdgeInsets.all(5),
              decoration: const  BoxDecoration(
                gradient: LinearGradient(
                  begin: Alignment.topCenter,
                  end: Alignment.bottomCenter,
                  colors: [ Color.fromARGB(255, 238, 238, 238),  Color.fromARGB(255, 204, 205, 207)],
                ),
              ),
              child: Text("Justificación: "+widget.licencia.justificacion, style: const TextStyle(color: Colors.black),),
            ),

            Container(
              padding: const EdgeInsets.all(5),
              decoration: const  BoxDecoration(
                gradient: LinearGradient(
                  begin: Alignment.topCenter,
                  end: Alignment.bottomCenter,
                  colors: [ Color.fromARGB(255, 238, 238, 238),  Color.fromARGB(255, 204, 205, 207)],
                ),
              ),
              child: Text("Nombre: "+widget.licencia.nombre+" "+widget.licencia.apellidoPaterno+" "+widget.licencia.apellidoMaterno, style: const TextStyle(color: Colors.black),),
            ),

            Container(
              padding: const EdgeInsets.all(10),
              color: Colors.lightBlue,
              width: double.infinity,
              height: double.maxFinite,
              child: Text ("Fecha: "+widget.licencia.fecha),
            )

          ],
        ),
      ),

    );
  }
}