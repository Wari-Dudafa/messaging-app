function SendMessage() {
    var message = document.getElementById("messageInput").value;
    document.getElementById("messageInput").value = "";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","../../server/_sendmessage.php?q=" + message,true);
    xmlhttp.send();

    console.log(message);
}