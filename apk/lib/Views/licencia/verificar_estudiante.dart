

import 'package:apk/Views/licencia/licencia_page.dart';
import 'package:apk/Views/widget/navigation_drawer.dart';
import 'package:flutter/material.dart';


class VerificarEstudiante extends StatefulWidget {
   
  const VerificarEstudiante({Key? key}) : super(key: key);
 
  @override
  State<VerificarEstudiante> createState() => _VerificarEstudianteState();
}

class _VerificarEstudianteState extends State<VerificarEstudiante> {
  final _formkey = GlobalKey<FormState>();
  late TextEditingController rude;
  late TextEditingController fecha;
  String _fecha  = '';

@override
  void initState() {
    rude = TextEditingController();
    fecha = TextEditingController();
    super.initState();
  }

  //FUNCION SUBMIT
  void submit() async {
    if (_formkey.currentState!.validate()) {
      _formkey.currentState!.save();
      String rudenro= rude.text;
      String fechanac= fecha.text;
      if (rudenro!= '') {
          Navigator.of(context).push( MaterialPageRoute(
        builder: (BuildContext context) =>  LicenciaPage(rude: rudenro.toString(), fecha: fechanac.toString()) //REDIRECIONAR
      ));
      } 
    }

  }


  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: const NavigationDrawer(),//BOTON ND
      appBar: AppBar(
        title:const Text('Ver Mis Licencias'),
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
                Padding(
                  padding: const EdgeInsets.all(5),
                  child: TextFormField(
                    enableInteractiveSelection: false,
                    controller: fecha,
                    validator: (u) => u == "" ? "Por favor, ingrese la fecha" :null,
                    keyboardType: TextInputType.datetime,
                    decoration: const InputDecoration(
                      icon: Icon(Icons.calendar_today),
                      hintText: 'Escriba la fecha de nacimiento',
                      labelText: 'fecha nacimiento',
                    ),
                    onTap: (){
                      FocusScope.of(context).requestFocus( FocusNode());
                      _selectDate( context );
                    },
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
                      'Ir a mis licencias',
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


    _selectDate(BuildContext context) async {

    DateTime? picked = await showDatePicker(
      context: context, 
      initialDate:  DateTime.now(),
      firstDate:  DateTime(1992),//fecha minima
      lastDate:  DateTime(2025),//fecha maxima
      // locale: const Locale('es', 'ES')
      builder: (context, child) {
        return Theme(
          data: Theme.of(context).copyWith(
            colorScheme: const ColorScheme.light(
              primary: Colors.black, // header background color
              onPrimary: Colors.white, // header text color
              onSurface: Colors.black, // body text color
            ),
            textButtonTheme: TextButtonThemeData(
              style: TextButton.styleFrom(
                primary: Colors.indigo, // button text color
              ),
            ),
          ),
          child: child!,
        );
      },
    );

      if ( picked != null ) {
      setState(() { //redibujar para mostrar la fecha seleccionada
          // _fecha = picked.toString();
          String _anio = picked.year.toString();
          String _mes ='';
          String _dia ='';
           
          if(picked.day<10){ _dia = '0'+picked.day.toString();  }else{ _dia = picked.day.toString();}
          if(picked.month<10){ _mes = '0'+picked.month.toString();  }else{ _mes = picked.month.toString();}

          _fecha  = _anio+'-'+_mes+'-'+_dia;

          fecha.text = _fecha; //asignado el valor dentro de la caja de texto
      });
    }
    
  }
  
}