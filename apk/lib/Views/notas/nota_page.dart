// ignore_for_file: file_names

import 'package:apk/Models/notas.dart';
import 'package:flutter/material.dart';
import 'package:apk/Services/apiStatic.dart';

class NotaPage extends StatefulWidget {
  const NotaPage({Key? key, required this.rude}) : super(key: key);
  final String rude;
  @override
  State<NotaPage> createState() => _NotaPageState();
}

class _NotaPageState extends State<NotaPage> {


  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar:  AppBar(
        title: const Text('Notas'),
        centerTitle: true,
        backgroundColor: Colors.black,
      ),
      
      body: FutureBuilder<List<Notas>>(
          future: ApiStatic.consultanotas(widget.rude),
          builder: (context, snapshot){
            if (snapshot.connectionState==ConnectionState.waiting) {
              return const Center(child: CircularProgressIndicator(color: Colors.black,));
            } else {
              List<Notas> listNota = snapshot.data!;
              return Container(
                padding: const EdgeInsets.all(5),
                child: ListView.builder(
                  itemCount: listNota.length,
                  
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
                             mainAxisAlignment: MainAxisAlignment.spaceBetween,
                            children: [
                              Padding(
                                padding: const EdgeInsets.only(left: 10, right: 10),
                                child: Column(
                                   crossAxisAlignment: CrossAxisAlignment.start,
                                  children: [
                                    Text(listNota[index].nombreMateria.toString(), style: const TextStyle(fontWeight: FontWeight.bold,fontSize: 14)),
                                  ],
                                ),
                              ),

                              Row(
                                mainAxisAlignment: MainAxisAlignment.end,
                                children: [
                                  Column(
                                   crossAxisAlignment: CrossAxisAlignment.center,
                                    children: [
                                      const Text('1B',style:  TextStyle(fontWeight: FontWeight.bold,fontSize: 12),),
                                      Text(listNota[index].notaPrimerBimestre.toString(), style: const TextStyle(fontSize: 12)),
                                    ],
                                  ),
                                 
                                  Column(
                                   crossAxisAlignment: CrossAxisAlignment.center,
                                    children: [
                                      const Text('  2B',style:  TextStyle(fontWeight: FontWeight.bold,fontSize: 12),),
                                      Text(' '+listNota[index].notaSegundoBimestre.toString(), style: const TextStyle(fontSize: 12)),
                                    ],
                                  ),
             
                                  Column(
                                   crossAxisAlignment: CrossAxisAlignment.center,
                                    children: [
                                      const Text('  3B',style:  TextStyle(fontWeight: FontWeight.bold,fontSize: 12),),
                                      Text(' '+listNota[index].notaTercerBimestre.toString(), style: const TextStyle(fontSize: 12)),
                                    ],
                                  ),
                                  Column(
                                   crossAxisAlignment: CrossAxisAlignment.center,
                                    children: [
                                      const Text('  4B',style:  TextStyle(fontWeight: FontWeight.bold,fontSize: 12),),
                                      Text(' '+listNota[index].notaCuartoBimestre.toString(), style: const TextStyle(fontSize: 12)),
                                    ],
                                  ),
                                  Column(
                                   crossAxisAlignment: CrossAxisAlignment.center,
                                    children: [
                                      const Text('  PF',style:  TextStyle(fontWeight: FontWeight.bold,fontSize: 12),),
                                      Text(' '+listNota[index].promedioAnual.toString(), style: const TextStyle(fontSize: 12)),
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