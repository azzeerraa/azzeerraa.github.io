<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script type="text/javascript">
    const socket = io();
    const serverUrl = "http:localhost:5000/chat_messages";
    // get username and room from the url
    const { username, room } = Qs.parse(location.search, {
      ignoreQueryPrefix: true,
    });
    // select room
    socket.emit("joinRoom", { username, room });
    // socket.on("roomUsers", ({ room, users }) => {
    //   outputRoomName(room);
    //   outputRoomUsers(users);
    // });
    fetch(serverUrl)
      .then(response => response.json())
      .then(data => console.log(JSON.parse(data)))
      .catch(error => console.log("Oops, something went wrong", error));
    socket.on("message", msg => {
      outputMessage(msg);
      // scroll
      chatMessages.scrollTop = chatMessages.scrollHeight;
    });
    chatForm.addEventListener("submit", event => {
      event.preventDefault();
      const msg = event.target.elements.msg.value;
      // send data to the server
      socket.emit("chatMessage", msg);
      // clear form field
      event.target.elements.msg.value = "";
      event.target.elements.msg.focus();
    });
    const outputMessage = message => {
      const div = document.createElement("div");
      div.classList.add("message");
      div.innerHTML = ` <p class="meta">${message.username} <span>${message.time}</span></p>
      <p class="text">
       ${message.text}
      </p>`;
      document.querySelector(".chat__messages").appendChild(div);
    };
    </script>
  </body>
</html>
