
import 'package:apk/Views/materia/materia_page.dart';
import 'package:apk/Views/widget/navigation_drawer.dart';
import 'package:flutter/material.dart';


class InputMateria extends StatefulWidget {
   
  const InputMateria({Key? key}) : super(key: key);
 
  @override
  State<InputMateria> createState() => _InputMateriaState();
}

class _InputMateriaState extends State<InputMateria> {
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
        builder: (BuildContext context) =>  MateriaPage(rude: rudenro,) //REDIRECIONAR
      ));
      } 
    }

  }


  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: const NavigationDrawer(),//BOTON ND
      appBar: AppBar(
        title:const Text('Ver mis Materias'),
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
                    color: Colors.black,
                    child: const Text(
                      'Ver Materias',
                      style: TextStyle(color: Colors.white),
                    ),
                    onPressed: (){
                      submit();
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