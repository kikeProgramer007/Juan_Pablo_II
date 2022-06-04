
// ignore_for_file: file_names
import 'package:apk/Views/estudiante/estudiante_page.dart';
import 'package:apk/Views/notas/input_nota.dart';
import 'package:flutter/material.dart';

import 'package:apk/Views/licencia/licenciaPage.dart';
import 'package:apk/Views/homePage.dart';

Widget buildBottomBar(index, BuildContext context){
  return BottomNavigationBar(
        type: BottomNavigationBarType.fixed,
        currentIndex: index,
        backgroundColor: const Color.fromARGB(106, 192, 205, 206),
        fixedColor: Colors.indigo,
        // iconSize: 25.5,
        onTap: (i){
          switch (i) {
            case 0:
              Navigator.of(context).pushReplacement( MaterialPageRoute(
                builder: (BuildContext context) => const HomePage() //REDIRECIONAR
                ));
              break;
           case 1:
              Navigator.of(context).pushReplacement( MaterialPageRoute(
                builder: (BuildContext context) => const EstudiantePage()//REDIRECIONAR
                ));
              break;
            case 2:
              Navigator.of(context).pushReplacement( MaterialPageRoute(
                builder: (BuildContext context) => const LicenciaPage()//REDIRECIONARkkckc
                ));
              break;
            case 3:
              Navigator.of(context).pushReplacement( MaterialPageRoute(
                builder: (BuildContext context) =>  InputNota()//REDIRECIONARkkckc
                ));
              break;
            default:
          }
        }, 
        items:  const [
            BottomNavigationBarItem(icon: Icon (Icons.home),label: 'Home'),
            BottomNavigationBarItem(icon: Icon (Icons.supervised_user_circle), label: 'Estudiante'),
            BottomNavigationBarItem(icon: Icon (Icons.card_membership_outlined), label: 'Licencia'),
            BottomNavigationBarItem(icon: Icon (Icons.card_membership_outlined), label: 'Notas'),
        ],
      );

}