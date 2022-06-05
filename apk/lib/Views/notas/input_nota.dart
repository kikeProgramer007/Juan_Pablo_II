
import 'package:apk/Views/notas/nota_page.dart';
import 'package:apk/Views/widget/buttonBar.dart';
import 'package:flutter/material.dart';


class InputNota extends StatefulWidget {
   
  const InputNota({Key? key}) : super(key: key);
 
  @override
  State<InputNota> createState() => _InputNotaState();
}

class _InputNotaState extends State<InputNota> {
  final _formkey = GlobalKey<FormState>();
  late TextEditingController rude;

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
      if (rudenro!= '') {
          Navigator.of(context).push( MaterialPageRoute(
        builder: (BuildContext context) =>  NotaPage(rude: rudenro,) //REDIRECIONAR
      ));
      } 
    }

  }


  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title:const Text('Ver notas del estudiante'),
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
                      hintText: 'Coloque su número rude',
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
                    color: Colors.blue,
                    child: const Text(
                      'Ver notas',
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
       //BOTONES FOOTER
      bottomNavigationBar: buildBottomBar(3, context)
    );
  }
}