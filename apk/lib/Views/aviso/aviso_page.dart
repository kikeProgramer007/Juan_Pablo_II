
import 'package:flutter/material.dart';
import 'package:apk/Views/widget/navigation_drawer.dart';
import 'package:apk/Services/apiStatic.dart';
import 'package:apk/Models/aviso.dart';
 
class AvisoPage extends StatelessWidget {
  const AvisoPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: const NavigationDrawer(),
      appBar: AppBar(
        title: const Text('Noticias'),
        centerTitle: true,
        backgroundColor: Colors.black,
      ),

      body: FutureBuilder<List<Aviso>>(
        future: ApiStatic.getavisos(),
        builder: (context, snapshot){
          if (snapshot.connectionState==ConnectionState.waiting) {
            return const Center(child: CircularProgressIndicator(color: Colors.black,));
          } else {
            List<Aviso> listEstudiante = snapshot.data!;
            return Container(
              padding: const EdgeInsets.all(15),
              child:  ListView.builder(
                itemCount: listEstudiante.length,
                itemBuilder: (BuildContext context, int index) => Column(
                  children: <Widget>[
                    _cardTipo1(listEstudiante[index].titulo, listEstudiante[index].descripcion, listEstudiante[index].fecha,listEstudiante[index].autor),
                    const SizedBox(height: 10.0),
                  ],
                ),
              ),

            );
          }
        },
      ),


    );
  }

// targeta card eso retorna
  Widget _cardTipo1( String titulo,String descripcion,String fecha,String autor) {
    return Card(
      elevation: 15.0,
      shape: RoundedRectangleBorder( borderRadius: BorderRadius.circular(20.0) ),
      child: Column(
        children: <Widget>[
           Padding(
              padding: const EdgeInsets.only(top: 20,),
             child: ListTile(
              leading:const Icon( Icons.notifications_on_outlined,color: Colors.black ,size: 40,),
              title:  Text(titulo),
              subtitle: Text(descripcion),
                     ),
           ),
          Row(
            mainAxisAlignment: MainAxisAlignment.spaceBetween,
            children: [
              Padding(
                padding: const EdgeInsets.only(left: 20, right: 20,top: 20,bottom: 20),
                child: Row(
                    crossAxisAlignment: CrossAxisAlignment.start,
                    children: [
                    Text(autor),
                  ],
                ),
              ),

              Row(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  Padding(
                    padding: const EdgeInsets.only(left: 20, right: 20,top: 20,bottom: 20),
                    child: Row(
                      crossAxisAlignment: CrossAxisAlignment.start,
                      children: [
                        Text(fecha), 
                      ],
                    ),
                  ),
                ],
              )

            ],
          ),

        ],
      ),
    );
  }
   


}