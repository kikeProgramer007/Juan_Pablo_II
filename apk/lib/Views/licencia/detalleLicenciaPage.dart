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
      ),

      body: SizedBox(
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
              child: Text(widget.licencia.asunto, style: const TextStyle(color: Colors.white),),
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
              child: Text(widget.licencia.justificacion, style: const TextStyle(color: Colors.black),),
            ),

            Container(
              padding: const EdgeInsets.all(10),
              color: Colors.lightBlue,
              width: double.infinity,
              height: double.maxFinite,
              child: Text (widget.licencia.fecha),
            )

          ],
        ),
      ),

    );
  }
}