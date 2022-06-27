
import 'package:apk/Models/cursoestudiante.dart';
import 'package:apk/Services/apiStatic.dart';
import 'package:flutter/material.dart';

class EstudiantePage extends StatefulWidget {
   const EstudiantePage({Key? key, required this.titulo, required this.grado,required this.nivel}) : super(key: key);
   final String grado,nivel,titulo;

  @override
  State<EstudiantePage> createState() => _EstudiantePageState();
}

class _EstudiantePageState extends State<EstudiantePage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar:  AppBar(
        title:  Text(widget.titulo),
        centerTitle: true,
        backgroundColor: Colors.black,
      ),

      body: FutureBuilder<List<Cursoestudiante>>(
          future: ApiStatic.estudianteseguncurso(widget.grado,widget.nivel),
          builder: (context, snapshot){
            if (snapshot.connectionState==ConnectionState.waiting) {
              return const Center(child: CircularProgressIndicator(color: Colors.black,));
            } else {
              List<Cursoestudiante> listEstudiante = snapshot.data!;
              return Container(
                
                padding: const EdgeInsets.all(5),
                child: ListView.builder(
                 
                  itemCount: listEstudiante.length,
                  
                  itemBuilder: (BuildContext context, int index) => Column(
                    children: [

                      InkWell(
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
                            mainAxisAlignment: MainAxisAlignment.spaceBetween,
                            children: [
                              Padding(
                                padding: const EdgeInsets.only(left: 5, right: 5),
                                child: Row(
                                   crossAxisAlignment: CrossAxisAlignment.center,
                                  children: [
                                    Icon (Icons.school_outlined, color: listEstudiante[index].genero=='F'?Colors.pink : Colors.green),
                                    Text(' '+listEstudiante[index].apellidoPaterno+' '+listEstudiante[index].apellidoMaterno+' '+listEstudiante[index].nombre),
                                  ],
                                ),
                              ),

                             Row(
                                mainAxisAlignment: MainAxisAlignment.end,
                                children: [
                                  Column(
                                   crossAxisAlignment: CrossAxisAlignment.center,
                                    children: [
                                      const Text('GRUPO',style:  TextStyle(fontWeight: FontWeight.bold,fontSize: 12),),
                                      Text(listEstudiante[index].grupo.toString(), style: const TextStyle(fontSize: 12)),
                                    ],
                                  ),
                                 
                                  Column(
                                   crossAxisAlignment: CrossAxisAlignment.center,
                                    children: [
                                      const Text('  GESTIÓN',style:  TextStyle(fontWeight: FontWeight.bold,fontSize: 12),),
                                      Text(' '+listEstudiante[index].gestion.toString(), style: const TextStyle(fontSize: 12)),
                                    ],
                                  ),
                                ],
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
  
    );
  }
}