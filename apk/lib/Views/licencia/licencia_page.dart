// ignore_for_file: file_names

import 'package:flutter/material.dart';
import 'package:apk/Services/apiStatic.dart';

import 'package:apk/Views/widget/navigation_drawer.dart';
import 'package:apk/Models/licencia.dart';
import 'package:apk/Views/licencia/detalleLicenciaPage.dart';
import 'package:apk/Views/licencia/inputLicencia.dart';

import 'package:apk/Models/errorMsg.dart';

class LicenciaPage extends StatefulWidget {
  const LicenciaPage({Key? key}) : super(key: key);

  @override
  State<LicenciaPage> createState() => _LicenciaPageState();
}

class _LicenciaPageState extends State<LicenciaPage> {

  late ErrorMSG response;

  void deleteLicencia(id) async {
    response = await ApiStatic.deleteLicencia(id);
    final snackBar = SnackBar(content: Text(response.message));
    ScaffoldMessenger.of(context).showSnackBar(snackBar);
    if(response.message=='success'){
    Navigator.pushReplacement(context, MaterialPageRoute(builder: (context)=> const LicenciaPage()));
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: const NavigationDrawer(),//BOTON ND
      appBar:  AppBar(
        title: const Text('Licencia'),
        centerTitle: true,
        backgroundColor: Colors.black,
      ),
      
      body: FutureBuilder<List<Licencia>>(
          future: ApiStatic.getLicencia(),
          builder: (context, snapshot){
            if (snapshot.connectionState==ConnectionState.waiting) {
              return const Center(child: CircularProgressIndicator(color: Colors.black,));
            } else {
              List<Licencia> listLicencia = snapshot.data!;
              return Container(
                padding: const EdgeInsets.all(5),
                child: ListView.builder(
                  itemCount: listLicencia.length,
                  
                  itemBuilder: (BuildContext context, int index) => Column(
                    children: [
                      InkWell(
                        onTap: (){
                          Navigator.of(context).push( MaterialPageRoute(
                            builder: (BuildContext context) =>  DetalleLicenciaPage(licencia : listLicencia[index]) //REDIRECIONAR
                          ));
                        },
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
                                    Text(listLicencia[index].asunto,style: const TextStyle(fontWeight: FontWeight.bold,fontSize: 16),),
                                    Text(listLicencia[index].fecha.toString(), style: const TextStyle(fontSize: 12)),
                                  ],
                                ),
                              ),

                              Row(
                                mainAxisAlignment: MainAxisAlignment.end,
                                children: [
                                  GestureDetector(
                                    onTap: (){
                                      Navigator.of(context).push( MaterialPageRoute(//new MaterialP..s
                                        builder: (BuildContext context) => InputLicencia(licencia: listLicencia[index])
                                        ));
                                    },
                                    child: const Icon(Icons.edit, color: Colors.orange,),
                                  ),
                                  GestureDetector(
                                    onTap: (){
                                    //  deleteLicencia(listLicencia[index].id);
                                     _mostrarAlert(context,listLicencia[index].id);
                                    },
                                    child: const Icon(Icons.delete, color: Colors.red,),
                                  )
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


      floatingActionButton: FloatingActionButton(
        child: const Icon(Icons.add),
        backgroundColor: Colors.black,
        onPressed: (){
          Navigator.push(context, MaterialPageRoute(builder: (context) => InputLicencia(licencia: Licencia(
            id: 0,
            asunto: '',
            justificacion: '',
            fecha: '',
            activo: 0,
            idEstudiante: 0,
          ))));
        },
      ),
   
    );
  }


//MOSTRAR ALERTA O MODAL
  void _mostrarAlert(BuildContext context, int id) {

    showDialog(
      context: context,
      barrierDismissible: true,
      builder: (context) {

        return AlertDialog(
          shape: RoundedRectangleBorder( borderRadius: BorderRadius.circular(20.0) ),
          title: const Text('Eliminar Licencia'),
          content: Column(
            mainAxisSize: MainAxisSize.min,
            children:const <Widget>[
              Text('Estas seguro de eliminar el registro?'),
            ],
          ),
          actions: <Widget>[
            TextButton(
              child: const Text('Cancelar',style: TextStyle(color: Colors.black)),
              onPressed: ()=> Navigator.of(context).pop(),
            ),
            TextButton(
              child: const Text('Ok',style: TextStyle(color: Colors.red)),
              onPressed: (){
                deleteLicencia(id);
              },
            ),
          ],
        );

      }

    );


  }


}