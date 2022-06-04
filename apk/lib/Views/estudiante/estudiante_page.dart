


import 'package:apk/Services/apiStatic.dart';



import 'package:apk/Models/estudiante.dart';
import 'package:apk/Views/estudiante/detalleestudiante_page.dart';
import 'package:apk/Views/widget/buttonBar.dart';

import 'package:flutter/material.dart';



class EstudiantePage extends StatefulWidget {
  const EstudiantePage({Key? key}) : super(key: key);

  @override
  State<EstudiantePage> createState() => _EstudiantePageState();
}

class _EstudiantePageState extends State<EstudiantePage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar:  AppBar(
        title: const Text('Estudiantes'),
      ),

      body: FutureBuilder<List<Estudiante>>(
          future: ApiStatic.getEstudiante(),
          builder: (context, snapshot){
            if (snapshot.connectionState==ConnectionState.waiting) {
              return Center(child: CircularProgressIndicator());
            } else {
              List<Estudiante> listEstudiante = snapshot.data!;
              return Container(
                padding: EdgeInsets.all(5),
                child: ListView.builder(
                  itemCount: listEstudiante.length,
                  
                  itemBuilder: (BuildContext context, int index) => Column(
                    children: [
                      InkWell(
                        onTap: (){
                          Navigator.of(context).push( MaterialPageRoute(
                            builder: (BuildContext context) =>  DetalleEstudiantePage(estudiante: listEstudiante[index]) //REDIRECIONAR
                          ));
                        },
                        child: Container(
                          padding: const EdgeInsets.all(5),
                          margin: const EdgeInsets.only(top: 10),
                          width: double.infinity,
                          decoration: BoxDecoration(
                            borderRadius: BorderRadius.circular(3),
                            color: Colors.white,
                            border: Border.all(width: 1,color: listEstudiante[index].genero=='F'?Colors.pink : Colors.green)
                          ),

                          child: Row(
                            mainAxisAlignment: MainAxisAlignment.start,
                            children: [
                              // const Icon (Icons.verified_user),
                              //Image.network(ApiStatic.host+'/'+listEstudiante[index].foto, width: 30,),
                              Image.network('https://as1.ftcdn.net/v2/jpg/00/69/93/04/1000_F_69930495_KT4GRB8Ncx1vbvYZ2iPqPxiG4Nx2nD5y.jpg', width: 30,),
                              Padding(
                                padding: const EdgeInsets.only(left: 5, right: 5),
                                child: Column(
                                  children: [
                                    Text(listEstudiante[index].nombre+' '+listEstudiante[index].apellidoPaterno+' '+listEstudiante[index].apellidoMaterno),
                                    Text(listEstudiante[index].fechaNacimiento, style: const TextStyle(fontSize: 8)),
                                  ],
                                ),
                              )
                            ],
                          ),
                        ),
                      )
                    ],
                  ),
                ),
              );
            }
          },
      ),

    //BOTONES FOOTER
      bottomNavigationBar: buildBottomBar(1, context)
    );
  }
}