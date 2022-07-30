// ignore_for_file: file_names


import 'dart:convert';
import 'package:apk/Models/aviso.dart';
import 'package:apk/Models/cursoestudiante.dart';
import 'package:apk/Models/faltas.dart';
import 'package:apk/Models/materia.dart';
import 'package:apk/Models/notas.dart';
import 'package:http/http.dart'as http;

import 'package:apk/Models/errorMsg.dart';
import 'package:apk/Models/licencia.dart';
import 'package:apk/Models/estudiante.dart';


class ApiStatic {
    static const host='http://192.168.0.15/juanpabloii/api/public';
  // static const host='http://18.207.244.104';

  static const _token = "14|qLACXYpMaayjFVeTKoHmMc81j3vYahiPs1poTAZ2";
  static gertHost(){
    return host;
  }

  static Future<List<Licencia>> getLicencia(rude,fecha) async {
    try {
      // final response = await http.get(Uri.parse("$host/api/licencia/"),
      final response = await http.get(Uri.parse("$host/api/licencia/"+rude.toString()+"/"+fecha.toString()),
      headers: {'Authorization' : 'Bearer '+_token},
      );

      if (response.statusCode == 200) {//si hay respuesta
        var json = jsonDecode(response.body);
        final parse = json['data'].cast<Map<String, dynamic>>();
        return parse.map<Licencia>((json) =>Licencia.fromJson(json)).toList();
      }else{
          print("staatus 405s");
          return [];
      }
       
    } catch (e) {
      return [];
    }
  }

  static Future<ErrorMSG> milicencia(rude,fecha) async{
    try {
      var response = await http.get(Uri.parse("$host/api/licencia/"+rude.toString()+"/"+fecha.toString()),
      headers: {'Authorization' : 'Bearer '+_token},
      );
      
      var json = jsonDecode(response.body);
      if (response.statusCode == 200) {
          return ErrorMSG(success: json['success'], message: json['message']);
      } else {
        return ErrorMSG(success: false, message: json['message']);
      }
    } catch (e) {
      ErrorMSG responseRequest = ErrorMSG(success: false, message: 'ERROR caught: $e');
      return responseRequest;
    }
  }

    static Future<ErrorMSG> validarrude(rude) async{
    try {
        final response = await http.get(Uri.parse("$host/api/nota/"+rude.toString()),
          headers: {'Authorization' : 'Bearer '+_token},
      );
      
      var json = jsonDecode(response.body);
      if (response.statusCode == 200) {
          return ErrorMSG(success: json['success'], message: json['message']);
      } else {
        return ErrorMSG(success: false, message: json['message']);
      }
    } catch (e) {
      ErrorMSG responseRequest = ErrorMSG(success: false, message: 'ERROR caught: $e');
      return responseRequest;
    }
  }
    static Future<ErrorMSG> validarfalta(rude) async{
    try {
          final response = await http.get(Uri.parse("$host/api/faltas/"+rude.toString()),
              headers: {'Authorization' : 'Bearer '+_token},
      );
      
      var json = jsonDecode(response.body);
      if (response.statusCode == 200) {
          return ErrorMSG(success: json['success'], message: json['message']);
      } else {
        return ErrorMSG(success: false, message: json['message']);
      }
    } catch (e) {
      ErrorMSG responseRequest = ErrorMSG(success: false, message: 'ERROR caught: $e');
      return responseRequest;
    }
  }

  static Future<List<Estudiante>> getEstudianteFk() async {

    try {
        final response = await http.get(Uri.parse("$host/api/estudiante"),
        headers: {'Authorization' : 'Bearer '+_token},
        );
        if (response.statusCode == 200) {//si hay respuesta
          var json = jsonDecode(response.body);
          //final parsed = json.cast<Map<String, dynamic>>();
          final parsed = json.cast<Map<String, dynamic>>();
          //print(response.statusCode);
          return parsed.map<Estudiante>((json) =>Estudiante.fromJson(json)).toList();
        }else{
            return [];
        }
    } catch (e) {
       return [];
    }
  }



  //FUNCION PARA GUARDAR DATOS:

    static Future<ErrorMSG> saveLicencia(id,rude,licencia) async{
      try {
       var url = Uri.parse('$host/api/licencia');  //GUARDAR DATOS NUEVO
       var method='';
      
        if (id != 0) {
          url= Uri.parse('$host/api/licencia/actualizar/'+id.toString());//ACTUALIZAR DATOS
          method = 'POST';
        }else{
        //  url = Uri.parse('$host/api/licencia');
          url = Uri.parse('$host/api/licencia/guardar/'+rude);//parametro rude
          method = 'POST';
        }
        //  print(url); print(method);
       
        var request = http.MultipartRequest(method, url);
        request.fields['asunto'] = licencia['asunto'];
        request.fields['justificacion'] = licencia['justificacion'];
        request.fields['fecha'] = licencia['fecha'];
       // request.fields['activo'] = licencia['activo'];
        // request.fields['id_estudiante'] = licencia['id_estudiante'];
        request.headers.addAll({
          'Authorization' : 'Bearer '+_token,
        });

        var response = await request.send();
        //print(response.statusCode);
        if (response.statusCode == 200) {
          final resStr = await response.stream.bytesToString();
          //print(jsonDecode(resStr));
          return ErrorMSG.fromJson(jsonDecode(resStr));
        } else {
          return ErrorMSG(success: false, message: 'error Request');
        }
      } catch (e) {
        ErrorMSG responseRequest = ErrorMSG(success: false, message: 'ERROR caught: $e');
        return responseRequest;
      }
    }

    //ELIMINAR LICENCIA

    static Future<ErrorMSG> deleteLicencia(id) async {
      try {
        final response = await http.delete(Uri.parse('$host/api/licencia/'+id.toString()),headers:{'Authorization':'Bearer'+_token});
        if (response.statusCode == 200) {
            
          return ErrorMSG.fromJson(jsonDecode(response.body));

        } else {
          return ErrorMSG(success: false, message: 'Error, error de eliminación');
        }
      }catch(e){
        ErrorMSG responseRequest = ErrorMSG(success: false, message: 'ERROR caught: $e');
        return responseRequest;
      }
    }


  static Future<List<Estudiante>> getEstudiante() async {

    //String response = '{"current_page":1,"data":[{"id":1,"codigo_rude":"12123123321","cedula_identidad":"12321312","nombre":"Enrique","apellido_paterno":"Condori","apellido_materno":"Quispe","genero":"M","fecha_nacimiento":"1996-09-25","id_licencia":1,"id_asistencia":1},{"id":2,"codigo_rude":"12213123123","cedula_identidad":"123212","nombre":"Ana","apellido_paterno":"Vaca","apellido_materno":"Toro","genero":"F","fecha_nacimiento":"1999-09-25","id_licencia":1,"id_asistencia":1}],"first_page_url":"http:\/\/192.168.0.15\/juanpabloii\/api\/public\/api\/estudiantes?page=1","from":1,"last_page":1,"last_page_url":"http:\/\/192.168.0.15\/juanpabloii\/api\/public\/api\/estudiantes?page=1","links":[{"url":null,"label":"&laquo; Previous","active":false},{"url":"http:\/\/192.168.0.15\/juanpabloii\/api\/public\/api\/estudiantes?page=1","label":"1","active":true},{"url":null,"label":"Next &raquo;","active":false}],"next_page_url":null,"path":"http:\/\/192.168.0.15\/juanpabloii\/api\/public\/api\/estudiantes","per_page":10,"prev_page_url":null,"to":2,"total":2}';

    try {
      final response = await http.get(Uri.parse("$host/api/estudiante"));
      
      if (response.statusCode == 200) {//si hay respuesta
        var json = jsonDecode(response.body);
        final parsed = json.cast<Map<String, dynamic>>();

        return parsed.map<Estudiante>((json) =>Estudiante.fromJson(json)).toList();
      }else{
          return [];
      }

    } catch (e) {
      return [];
    }

  }

    //FUNCION PARA TRAER LAS NOTAS SEGUN EL RUDE
    static Future<List<Notas>> consultanotas(rude) async{
      try {
            final response = await http.get(Uri.parse("$host/api/nota/"+rude.toString()),
              headers: {'Authorization' : 'Bearer '+_token},
            );
          if (response.statusCode == 200) {//si hay respuesta
            var json = jsonDecode(response.body);
           final parse = json['data'].cast<Map<String, dynamic>>();
            // final parse = json['data'].cast<Map<String, dynamic>>();
            return parse.map<Notas>((json) =>Notas.fromJson(json)).toList();
          }else{
            return [];
          }
      } catch (e) {
        return [];
      }
    }

    //FUNCION PARA TRAER LOS ALUMNOS SEGUN EL GRADO Y IVEL
    static Future<List<Cursoestudiante>> estudianteseguncurso(grado, nivel) async{
      try {
            final response = await http.get(Uri.parse("$host/api/cursoestudiante/"+grado.toString()+'/'+nivel.toString()),
              headers: {'Authorization' : 'Bearer '+_token},
            );
          if (response.statusCode == 200) {//si hay respuesta
            var json = jsonDecode(response.body);
            final parse = json.cast<Map<String, dynamic>>();
            return parse.map<Cursoestudiante>((json) =>Cursoestudiante.fromJson(json)).toList();
          }else{
            return [];
          }
        
      } catch (e) {
        return [];
      }
    }

    //TRAER NOTICIAS
    static Future<List<Aviso>> getavisos() async{
      try {
            final response = await http.get(Uri.parse("$host/api/aviso"),
              headers: {'Authorization' : 'Bearer '+_token},
            );
          if (response.statusCode == 200) {//si hay respuesta
            var json = jsonDecode(response.body);
            final parse = json.cast<Map<String, dynamic>>();
            // print(response.statusCode);
            return parse.map<Aviso>((json) =>Aviso.fromJson(json)).toList();
          }else{
            return [];
          }
        
      } catch (e) {
        return [];
      }
    }

    //CONSULTAS DE FALTAS
    static Future<List<Faltas>> consultarfaltas(rude) async{
      try {
            final response = await http.get(Uri.parse("$host/api/faltas/"+rude.toString()),
              headers: {'Authorization' : 'Bearer '+_token},
            );
          if (response.statusCode == 200) {//si hay respuesta
            var json = jsonDecode(response.body);
            final parse = json['data'].cast<Map<String, dynamic>>();
            // print(response.statusCode);
            return parse.map<Faltas>((json) =>Faltas.fromJson(json)).toList();
          }else{
            return [];
          }
        
      } catch (e) {
        return [];
      }
    }
    //CONSULTAS DE MIS Materias
    static Future<List<Materia>> consultarmimaterias(rude) async{
      try {
            final response = await http.get(Uri.parse("$host/api/mimaterias/"+rude.toString()),
              headers: {'Authorization' : 'Bearer '+_token},
            );
          if (response.statusCode == 200) {//si hay respuesta
            var json = jsonDecode(response.body);
            final parse = json.cast<Map<String, dynamic>>();
            // print(response.statusCode);
            return parse.map<Materia>((json) =>Materia.fromJson(json)).toList();
          }else{
            return [];
          }
        
      } catch (e) {
        return [];
      }
    }

}