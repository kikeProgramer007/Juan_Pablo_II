// ignore_for_file: file_names

import 'package:apk/Models/faltas.dart';
import 'package:flutter/material.dart';
import 'package:apk/Services/apiStatic.dart';

class FaltaPage extends StatefulWidget {
  const FaltaPage({Key? key, required this.rude}) : super(key: key);
  final String rude;
  @override
  State<FaltaPage> createState() => _FaltaPageState();
}

class _FaltaPageState extends State<FaltaPage> {


  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar:  AppBar(
        title: const Text('Faltas'),
        centerTitle: true,
        backgroundColor: Colors.black,
      ),
      
      body: FutureBuilder<List<Faltas>>(
          future: ApiStatic.consultarfaltas(widget.rude),
          builder: (context, snapshot){
            if (snapshot.connectionState==ConnectionState.waiting) {
              return const Center(child: CircularProgressIndicator(color: Colors.black,));
            } else {
              List<Faltas> listFalta = snapshot.data!;
              return Container(
                padding: const EdgeInsets.all(5),
                child: ListView.builder(
                  itemCount: listFalta.length,
                  
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
                                    Text(listFalta[index].estado.toString(), style: const TextStyle(fontWeight: FontWeight.bold,fontSize: 14)),
                                  ],
                                ),
                              ),

                              Row(
                                mainAxisAlignment: MainAxisAlignment.end,
                                children: [
                                  Padding(
                                  padding: const EdgeInsets.only(left: 10, right: 10),
                                   child: Column(
                                    crossAxisAlignment: CrossAxisAlignment.center,
                                      children: [
                                        Text(listFalta[index].fecha.toString(), style: const TextStyle(fontSize: 12)),
                                      ],
                                    ),
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