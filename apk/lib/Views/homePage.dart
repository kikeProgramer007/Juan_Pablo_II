// ignore_for_file: file_names

import 'package:flutter/material.dart';

import 'package:apk/Views/widget/buttonBar.dart';

class HomePage extends StatefulWidget {
  const HomePage({Key? key}) : super(key: key);

  @override
  State<HomePage> createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(

      appBar:  AppBar(
        title: const Text('U.E. JUAN PABLO II'),
      ),

      body: const Center(
        child: Text('BIENVENIDO'),
      ),
      //BOTONES FOOTER
      bottomNavigationBar: buildBottomBar(0, context)
    );
  }
}