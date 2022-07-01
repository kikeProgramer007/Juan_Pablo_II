// ignore_for_file: file_names

import 'package:flutter/material.dart';
import 'package:apk/Services/apiStatic.dart';

import 'package:apk/Models/errorMsg.dart';
import 'package:apk/Views/licencia/licencia_page.dart';
import 'package:apk/Models/licencia.dart';
import 'package:apk/Models/estudiante.dart';


class InputLicencia extends StatefulWidget { 
  final Licencia licencia;
  const InputLicencia({Key? key, required this.licencia}) : super(key: key);

  @override
  State<InputLicencia> createState() => _InputLicenciaState();
}

class _InputLicenciaState extends State<InputLicencia> {
  final _formkey = GlobalKey<FormState>();
  late TextEditingController asunto,justificacion, fecha;
  late List<Estudiante> _estudiantefk = [];
  late int idEstudiante = 0;
  late int idLicen = 0;
  String _fecha  = '';

  bool _isupdate = false;
  // ignore: unused_field
  bool _validate = false;
  bool _success = false;
 // late String _activo = '0';
  late ErrorMSG response;

  void getEstudiant() async {
    final response = await ApiStatic.getEstudianteFk();
    setState(() {
      _estudiantefk = response.toList();
    });
  }

//FUNCION SUBMIT
void submit() async {
  if (_formkey.currentState!.validate()) {
    _formkey.currentState!.save();
    var params ={
      'asunto' : asunto.text.toString(),
      'justificacion' : justificacion.text.toString(),
      'fecha' : fecha.text.toString(),
      //'activo' : _activo,
      'id_estudiante' : idEstudiante.toString(),
    };
    response = await ApiStatic.saveLicencia(idLicen, params);
    _success= response.success;
    final snackBar = SnackBar(content: Text(response.message),backgroundColor: Colors.black,);
    ScaffoldMessenger.of(context).showSnackBar(snackBar);
    if (_success) {

      Navigator.of(context).pushReplacement( MaterialPageRoute(
        builder: (BuildContext context) => const LicenciaPage()
      ));
    }
  } else {
    _validate =true;
  }
}

@override
  void initState() {
    asunto= TextEditingController();
    justificacion= TextEditingController();
    fecha = TextEditingController();
    getEstudiant();

    if(widget.licencia.idEstudiante != 0){
       idLicen = widget.licencia.id;
       asunto= TextEditingController(text: widget.licencia.asunto);
       justificacion= TextEditingController(text: widget.licencia.justificacion);
       fecha = TextEditingController(text: widget.licencia.fecha);
       idEstudiante = widget.licencia.idEstudiante;
       //_activo = widget.licencia.activo.toString();
       _isupdate = true;
    }
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: _isupdate ? Text(widget.licencia.asunto) : const Text('Guardar datos'),
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
                    controller: asunto,
                    validator: (u) => u == "" ? "Por favor, ingrese el asunto" :null,
                    decoration: const InputDecoration(
                      icon: Icon(Icons.perm_identity),
                      hintText: 'Coloque su asunto',
                      labelText: 'Asunto',
                    ),
                  ),
                ),
                
                Padding(
                  padding: const EdgeInsets.all(5),
                  child: TextFormField(
                    controller: justificacion,
                    textCapitalization: TextCapitalization.sentences,
                    validator: (u) => u == "" ? "Por favor, ingrese la justificación" :null,
                    decoration: const InputDecoration(
                      icon: Icon(Icons.perm_identity),
                      hintText: 'Justifique su solicitud',
                      labelText: 'Justificación',
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
                      hintText: 'Escriba la fecha actual',
                      labelText: 'fecha',
                    ),
                    onTap: (){
                      FocusScope.of(context).requestFocus( FocusNode());
                      _selectDate( context );
                    },
                  ),
                ),
          
               Padding(
                  padding:  const EdgeInsets.all(5),
                  child: DropdownButtonFormField(
                    value: idEstudiante == 0 ? null : idEstudiante,
                    hint: const Text("Estudiante"),
                    decoration: const InputDecoration(
                      icon: Icon(Icons.category_rounded)
                    ),
                    items: _estudiantefk.map((item){
                      return DropdownMenuItem(
                        child: Text(item.apellidoPaterno+' '+item.apellidoMaterno+' '+item.nombre),
                        value: item.id.toInt(),
                        );
                    }).toList(),
                    onChanged: (value){
                      setState(() {
                        idEstudiante = value as int;
                      });
                    },
                    validator: (u) => u == null ? "Seleccione su nombre" : null,
                  ),
                ),
          
                const Divider(),
                SizedBox(
                  width: MediaQuery.of(context).size.width,
                  height: 50.0,
                  // ignore: deprecated_member_use
                  child: RaisedButton(
                    color: Colors.black,
                    child: const Text(
                      'Guardar',
                      style: TextStyle(color: Colors.white),
                    ),
                    onPressed: (){
                      //submit
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
      firstDate:  DateTime(2018),//fecha minima
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