
import 'package:apk/Views/estudiante/estudiante_page.dart';
import 'package:apk/Views/notas/nota_page.dart';
// import 'package:apk/Views/widget/buttonBar.dart';
import 'package:flutter/material.dart';
import 'package:apk/Views/widget/navigation_drawer.dart';

class CursosPage extends StatefulWidget {
   
  const CursosPage({Key? key}) : super(key: key);
 
  @override
  State<CursosPage> createState() => _CursosPageState();
}

class _CursosPageState extends State<CursosPage> {
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
      drawer: const NavigationDrawer(),//BOTON ND
      appBar: AppBar(
        title:const Text('Cursos'),
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
                const Divider(),
                SizedBox(
                  width: MediaQuery.of(context).size.width/2,
                  height: 50.0,
                  // ignore: deprecated_member_use
                  child: RaisedButton(
                    color: Colors.black,
                    child: const Text(
                      '1RO PRIMARIA',
                      style: TextStyle(color: Colors.white),
                    ),
                    onPressed: (){
                      Navigator.of(context).push( MaterialPageRoute(
                      builder: (BuildContext context) =>  const EstudiantePage(titulo: '1RO PRIMARIA',grado: 'Primero',nivel: 'Primaria',) //REDIRECIONAR
                      ));
                    },
                    shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10.0)),
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
                      '2DO PRIMARIA',
                      style: TextStyle(color: Colors.white),
                    ),
                    onPressed: (){
                      Navigator.of(context).push( MaterialPageRoute(
                      builder: (BuildContext context) =>  const EstudiantePage(titulo: '2DO PRIMARIA',grado: 'Segundo',nivel: 'Primaria',) //REDIRECIONAR
                      ));
                    },
                    shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10.0)),
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
                      '3RO PRIMARIA',
                      style: TextStyle(color: Colors.white),
                    ),
                    onPressed: (){
                      Navigator.of(context).push( MaterialPageRoute(
                      builder: (BuildContext context) => const EstudiantePage(titulo: '3RO PRIMARIA',grado: 'Tercero',nivel: 'Primaria',)
                      ));
                    },
                    shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10.0)),
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
                      '4TO PRIMARIA',
                      style: TextStyle(color: Colors.white),
                    ),
                    onPressed: (){
                      Navigator.of(context).push( MaterialPageRoute(
                      builder: (BuildContext context) =>  const EstudiantePage(titulo: '4TO PRIMARIA',grado: 'Cuarto',nivel: 'Primaria',)//REDIRECIONAR
                      ));
                    },
                    shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10.0)),
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
                      '5TO PRIMARIA',
                      style: TextStyle(color: Colors.white),
                    ),
                    onPressed: (){
                      Navigator.of(context).push( MaterialPageRoute(
                      builder: (BuildContext context) =>  const EstudiantePage(titulo: '5TO PRIMARIA',grado: 'Quinto',nivel: 'Primaria',) //REDIRECIONAR
                      ));
                    },
                    shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10.0)),
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
                      '6TO PRIMARIA',
                      style: TextStyle(color: Colors.white),
                    ),
                    onPressed: (){
                      Navigator.of(context).push( MaterialPageRoute(
                      builder: (BuildContext context) =>  const EstudiantePage(titulo: '6TO PRIMARIA',grado: 'Sexto',nivel: 'Primaria',)
                      ));
                    },
                    shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10.0)),
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
                      '1RO SECUNDARIA',
                      style: TextStyle(color: Colors.white),
                    ),
                    onPressed: (){
                      Navigator.of(context).push( MaterialPageRoute(
                      builder: (BuildContext context) => const EstudiantePage(titulo: '1RO SECUNDARIA',grado: 'Primero',nivel: 'Secundaria',)
                      ));
                    },
                    shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10.0)),
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
                      '2DO SECUNDARIA',
                      style: TextStyle(color: Colors.white),
                    ),
                    onPressed: (){
                      Navigator.of(context).push( MaterialPageRoute(
                      builder: (BuildContext context) =>  const EstudiantePage(titulo: '2DO SECUNDARIA',grado: 'Segundo',nivel: 'Secundaria',)
                      ));
                    },
                    shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10.0)),
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
                      '3RO SECUNDARIA',
                      style: TextStyle(color: Colors.white),
                    ),
                    onPressed: (){
                      Navigator.of(context).push( MaterialPageRoute(
                      builder: (BuildContext context) =>   const EstudiantePage(titulo: '3RO SECUNDARIA',grado: 'Tercero',nivel: 'Secundaria',)
                      ));
                    },
                    shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10.0)),
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
                      '4TO SECUNDARIA',
                      style: TextStyle(color: Colors.white),
                    ),
                    onPressed: (){
                      Navigator.of(context).push( MaterialPageRoute(
                      builder: (BuildContext context) =>   const EstudiantePage(titulo: '4TO SECUNDARIA',grado: 'Cuarto',nivel: 'Secundaria',)
                      ));
                    },
                    shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10.0)),
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
                      '5TO SECUNDARIA',
                      style: TextStyle(color: Colors.white),
                    ),
                    onPressed: (){
                      Navigator.of(context).push( MaterialPageRoute(
                      builder: (BuildContext context) =>  const EstudiantePage(titulo: '5TO SECUNDARIA',grado: 'Quinto',nivel: 'Secundaria',)
                      ));
                    },
                    shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10.0)),
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
                      '6TO SECUNDARIA',
                      style: TextStyle(color: Colors.white),
                    ),
                    onPressed: (){
                      Navigator.of(context).push( MaterialPageRoute(
                      builder: (BuildContext context) =>   const EstudiantePage(titulo: '6TO SECUNDARIA',grado: 'Sexto',nivel: 'Secundaria',)
                      ));
                    },
                    shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10.0)),
                  ),
                ),
             
              ],
            ),
          ),
        )
      ),
       //BOTONES FOOTER
      // bottomNavigationBar: buildBottomBar(1, context)
    );
  }
}