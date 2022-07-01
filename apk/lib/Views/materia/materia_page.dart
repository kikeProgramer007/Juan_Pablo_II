// ignore_for_file: file_names

import 'package:apk/Models/materia.dart';
import 'package:flutter/material.dart';
import 'package:apk/Services/apiStatic.dart';

class MateriaPage extends StatefulWidget {
  const MateriaPage({Key? key, required this.rude}) : super(key: key);
  final String rude;
  @override
  State<MateriaPage> createState() => _MateriaPageState();
}

class _MateriaPageState extends State<MateriaPage> {


  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar:  AppBar(
        title: const Text('Mis materias'),
        centerTitle: true,
        backgroundColor: Colors.black,
      ),
      
      body: FutureBuilder<List<Materia>>(
          future: ApiStatic.consultarmimaterias(widget.rude),
          builder: (context, snapshot){
            if (snapshot.connectionState==ConnectionState.waiting) {
              return const Center(child: CircularProgressIndicator(color: Colors.black,));
            } else {
              List<Materia> listMateria = snapshot.data!;
              return Container(
                padding: const EdgeInsets.all(5),
                child: ListView.builder(
                  itemCount: listMateria.length,
                  
                  itemBuilder: (BuildContext context, int index) => Column(
                    children: [
                      InkWell(

                        child: Container(
                          padding: const EdgeInsets.all(3),
                          margin: const EdgeInsets.only(top: 6),
                          width: double.infinity,
                          decoration: BoxDecoration(
                            borderRadius: BorderRadius.circular(5),
                            color: Colors.white,
                            border: Border.all(width: 1.6,color: Colors.black26)
                          ),

                          child: Row(
                            
                            children: [
                              Padding(
                                padding: const EdgeInsets.only(left: 10, right: 10),
                                child: Column(
                                   crossAxisAlignment: CrossAxisAlignment.start,
                                  children: [
                                    Text(listMateria[index].nombreMateria.toString(), style: const TextStyle(fontWeight: FontWeight.bold,fontSize: 14)),
                                    Text(listMateria[index].docente.toString(), style: const TextStyle(fontSize: 12)),
                                  ],
                                ),
                              ),

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