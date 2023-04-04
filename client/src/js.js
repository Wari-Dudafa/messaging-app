function ShowItem(itemName) {
    console.log(itemName);
    document.getElementById(itemName).style.display = 'block'
}

function HideItem(itemName) {
    console.log(itemName);
    document.getElementById(itemName).style.display = 'none'
}

function SendMessage() {
    var message = document.getElementById("messageInput").value;
    document.getElementById("messageInput").value = "";
    console.log(message);

    if (message.length > 0 ){

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("temp-chat-shower").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../../server/_sendmessage.php?message=" + message, true);
        xmlhttp.send();
    }
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

function OpenMessages(userid){
    console.log(userid);
    ShowItem('send-message');

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("messages-container").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "../../server/_openmessages.php?userid=" + userid, true);
    xmlhttp.send();

    var xmlhttp2 = new XMLHttpRequest();
    xmlhttp2.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("opening-messsage").innerHTML = this.responseText;
        }
    };
    xmlhttp2.open("GET", "../../server/_getname.php?userid=" + userid, true);
    xmlhttp2.send();
}

function RefreshChat(){

}

function AddFriend(sender, reciever){
    console.log(sender);
    console.log(reciever);
}