function SendMessage() {

    var message = document.getElementById("messageInput").value;
    document.getElementById("messageInput").value = "";
    console.log(message);
}

function Search(username) {

    console.log(username);

    if (username == ""){
        document.getElementById("searchResults").innerHTML = '';
    } if (username.length > 0 ){
        // Add searching logic here

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("searchResults").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../../server/_searchfriends.php?username=" + username, true);
        xmlhttp.send();
    }
    
}