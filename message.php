<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-analytics.js";
  import { getDatabase } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js";

  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDqkBafWt8-enFMdpISFhEeTsw2cnfsEiE",
    authDomain: "test-2aca3.firebaseapp.com",
    projectId: "test-2aca3",
    storageBucket: "test-2aca3.appspot.com",
    messagingSenderId: "488945806768",
    appId: "1:488945806768:web:6ade432d04da5e05da3a75",
    measurementId: "G-BSHQPK05CT"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  var myName = prompt("Enter your name");
  function sendMessage() {
        // get message
        var message = document.getElementById("message").value;
 
        // save in database
        firebase.database().ref("messages").push().set({
            "sender": myName,
            "message": message
        });
 
        // prevent form from submitting
        return false;
    }
    firebase.database().ref("messages").on("child_added", function (snapshot) {
        var html = "";
        // give each message a unique ID
        html += "<li id='message-" + snapshot.key + "'>";
        // show delete button if message is sent by me
        if (snapshot.val().sender == myName) {
            html += "<button data-id='" + snapshot.key + "' onclick='deleteMessage(this);'>";
                html += "Delete";
            html += "</button>";
        }
        html += snapshot.val().sender + ": " + snapshot.val().message;
        html += "</li>";
 
        document.getElementById("messages").innerHTML += html;
    });
</script>
<form onsubmit="return sendMessage();">
    <input id="message" placeholder="Enter message" autocomplete="off">
 
    <input type="submit">
    <ul id="messages"></ul>

</form>
     


