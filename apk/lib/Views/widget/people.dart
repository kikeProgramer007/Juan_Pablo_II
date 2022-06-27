import 'package:flutter/material.dart';
import 'package:apk/Views/widget/navigation_drawer.dart';

class People extends StatelessWidget {
  const People({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: const NavigationDrawer(),
      appBar: AppBar(
        title: const Text('U.E. JUAN PABLO II'),
        centerTitle: true,
        backgroundColor: Colors.black,
      ),
    );
  }
}