import 'package:apk/Views/aviso/aviso_page.dart';
import 'package:apk/Views/estudiante/cursos_page.dart';
import 'package:apk/Views/notas/input_nota.dart';
import 'package:flutter/material.dart';
// import 'package:apk/Views/widget/Account.dart';
import 'package:apk/Views/licencia/licencia_page.dart';
import 'package:apk/Views/widget/drawer_item.dart';

class NavigationDrawer extends StatelessWidget {
  const NavigationDrawer({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Drawer(
      child: Material(
        color: Colors.black,
        child:  Padding(
          padding: const EdgeInsets.fromLTRB(24.0, 80, 24, 0),
          child: Column(
            children: [
              headerWidget(),
              const SizedBox(height: 40,),
              const Divider(thickness: 1, height: 10, color: Colors.grey,),
              const SizedBox(height: 40,),

              DrawerItem(
                name: 'Noticias',
                icon: Icons.notifications_none_sharp,
                onPressed: ()=> onItemPressed(context, index: 0),
              ),
              const SizedBox(height: 30,),
              DrawerItem(
                name: 'Cursos',
                icon: Icons.pin_invoke_rounded,
                onPressed: ()=> onItemPressed(context, index: 1),
              ),
              const SizedBox(height: 30,),
              DrawerItem(
                name: 'Licencia',
                icon: Icons.card_membership_outlined,
                onPressed: ()=> onItemPressed(context, index: 2),
              ),
              const SizedBox(height: 30,),
              DrawerItem(
                name: 'Consultar Faltas',
                icon: Icons.nearby_error,
                onPressed: ()=> onItemPressed(context, index: 3),
              ),
              const SizedBox(height: 30,),
              DrawerItem(
                name: 'Consultar Notas',
                icon: Icons.date_range_sharp,
                onPressed: ()=> onItemPressed(context, index: 4),
              ),
              const SizedBox(height: 30,),
              const Divider(thickness: 1, height: 10, color: Colors.grey,),
              const SizedBox(height: 30,),
              DrawerItem(
                name: 'Setting',
                icon: Icons.settings,
                onPressed: ()=> onItemPressed(context, index: 5),
              ),
              const SizedBox(height: 30,),
              DrawerItem(
                name: 'Log out',
                icon: Icons.logout,
                onPressed: ()=> onItemPressed(context, index: 6),
              ),
               const SizedBox(height: 30,),
        
            ],
          ),
        ),
      ),
     
    );
  }

  //PROCEDIMIENTO PARA CADA MODULO
  void onItemPressed(BuildContext context, {required int index}){
    Navigator.pop(context);
    switch(index){
      case 0:
        Navigator.pushReplacement(context, MaterialPageRoute(builder: (context)=> const AvisoPage()));
        break;
      case 1:
      Navigator.pushReplacement(context, MaterialPageRoute(builder: (context)=> const CursosPage()));
        break;
      case 2:
      Navigator.pushReplacement(context, MaterialPageRoute(builder: (context)=> const LicenciaPage()));
        break;
      case 3:
      Navigator.pushReplacement(context, MaterialPageRoute(builder: (context)=> const InputNota()));
        break;
      case 4:
      Navigator.pushReplacement(context, MaterialPageRoute(builder: (context)=> const InputNota()));
        break;
      // default: 
      //   Navigator.pop(context);
      //   break;
    }
  }

  Widget headerWidget(){
    // const url = 'https://img3.schoolandcollegelistings.com/852/723/4715204078527237.jpg';
    return Row(
      children: [
        const CircleAvatar(
          radius: 40,
          // backgroundImage: NetworkImage(url),
          backgroundImage:  AssetImage('assets/images/logocolegio.PNG'),
        ),

        const SizedBox(width: 20,),
        Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children:const [
            Text('Col. Juan Pablo II', style: TextStyle(fontSize: 14, color: Colors.white)),
            SizedBox(height: 10,),
            Text('www.juanpabloii.com', style: TextStyle(fontSize: 14, color: Colors.white)),
          ],
        )

      ],
    );
  }

}