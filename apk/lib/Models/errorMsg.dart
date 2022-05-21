// ignore_for_file: file_names

class ErrorMSG {
  
    ErrorMSG({
      required this.success,
      required this.message,
    });

    bool success;
    String message;

    factory ErrorMSG.fromJson(Map<String, dynamic> json) => ErrorMSG(
        success: json["success"],
        message: json["message"],
    );

    Map<String, dynamic> toJson() => {
        "success": success,
        "message": message,
    };
}

