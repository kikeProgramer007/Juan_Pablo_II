
import 'package:apk/Models/errorMsg.dart';
import 'package:apk/Services/apiStatic.dart';
import 'package:apk/Views/falta/falta_page.dart';
import 'package:apk/Views/widget/navigation_drawer.dart';
import 'package:flutter/material.dart';


class InputFalta extends StatefulWidget {
   
  const InputFalta({Key? key}) : super(key: key);
 
  @override
  State<InputFalta> createState() => _InputFaltaState();
}

class _InputFaltaState extends State<InputFalta> {
  final _formkey = GlobalKey<FormState>();
  late TextEditingController rude;
  late ErrorMSG response;
  bool _success = false;
  
@override
  void initState() {
    rude = TextEditingController();
    super.initState();
  }

  //FUNCION SUBMIT
  void submit() async {
    if (_formkey.currentState!.validate()) {
      _formkey.currentState!.save();
      String rudenro= rude.text;

      response = await ApiStatic.validarfalta(rudenro);
      _success= response.success;
       if (_success) {
          if (rudenro!= '') {
            Navigator.of(context).push( MaterialPageRoute(
              builder: (BuildContext context) =>  FaltaPage(rude: rudenro,) //REDIRECIONAR
            ));
            final snackBar = SnackBar(content: Text(response.message),backgroundColor: Colors.black,);
            ScaffoldMessenger.of(context).showSnackBar(snackBar);
          }
      }else{
         final snackBar = SnackBar(content: Text(response.message),backgroundColor: Colors.red,);
          ScaffoldMessenger.of(context).showSnackBar(snackBar);
      }




    }

  }


  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: const NavigationDrawer(),//BOTON ND
      appBar: AppBar(
        title:const Text('Ver Faltas del estudiante'),
        centerTitle: true,
        backgroundColor: Colors.black,
      ),
      body: SingleChildScrollView(
        child: Container(
          padding: const EdgeInsets.all(10),
          color: Colors.white,
          child: Form(
            key: _formkey,
            child: Column(
              children: [
                Padding(
                  padding: const EdgeInsets.all(5),
                  child: TextFormField(
                
                    controller: rude,
                    validator: (u) => u == "" ? "Por favor, ingrese su nro rude" :null,
                    decoration: const InputDecoration(
                      icon: Icon(Icons.perm_identity),
                      hintText: 'Coloque su n??mero rude',
                      labelText: 'Rude',
                    ),
                  ),
                ),
          
                const Divider(),
                SizedBox(
                  width: MediaQuery.of(context).size.width/2,
                  height: 50.0,
                  // ignore: deprecated_member_use
                  child: RaisedButton(
                    color: Colors.black,
                    child: const Text(
                      'Ver faltas',
                      style: TextStyle(color: Colors.white),
                    ),
                    onPressed: (){
                      submit();
                     /* String rudenro= rude.text;
                      if (rudenro!= '') {
                          Navigator.of(context).push( MaterialPageRoute(
                        builder: (BuildContext context) =>  NotaPage(rude: rudenro,) //REDIRECIONAR
                      ));
                      }else{
                        const snackBar = SnackBar(content: Text('Inserte su nro rude'),backgroundColor: Colors.indigo,);
                        ScaffoldMessenger.of(context).showSnackBar(snackBar);
                      }*/
                    },
                    shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10.0)),
                  ),
                )
              ],
            ),
          ),
        )
      ),

    );
  }
}