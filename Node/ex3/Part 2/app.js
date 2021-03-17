var app = require('express')(),
    server = require('http').createServer(app),
    io = require('socket.io').listen(server),
    ent = require('ent'), // Blocks HTML characters (security equivalent to htmlentities in PHP)
    fs = require('fs');

// Loading the page index.html
app.get('/', function (req, res) {
  res.sendFile(__dirname + '/index.html');
});

io.sockets.on('connection', function (socket, username) {
    // When the username is received it’s stored as a session variable and informs the other people
    socket.on('new_client', function(username) {
        username = ent.encode(username);
        socket.username = username;
        socket.broadcast.emit('new_client', username);
    });

    // When a message is received, the client’s username is retrieved and sent to the other people
    socket.on('message', function (message) {
        message = ent.encode(message);
        socket.broadcast.emit('message', {username: socket.username, message: message});
    }); 
});
/**
4. What is the main advantage of Socket.io? Give an example.
Real time web applications between clients and servers

5. What is a web socket? How is it different than AJAX? Explain. 
The WebSocket protocol enables interaction between a web browser (or other client application) and a web server with lower overheads, facilitating real-time data transfer from and to the server.

6. Summarize the superchat app by talking about the significant part of the code.
$('#chat_form').submit(function () {
                var message = $('#message').val();
                socket.emit('message', message); // Sends the message to the others
                insertMessage(username, message); // Also displays the message on our page
                $('#message').val('').focus(); // Empties the chat form and puts the focus back on it
                return false; // Blocks 'classic' sending of the form
            });

7. What is a broadcast? How part of the superchat app code enables broadcasting a message to multiple clients? Explain. 
socket.on

8. Modify the code for the superchat app so that a message is displayed to other participants when a person leaves the chat. 
socket.on('new_client', function(username) {
                $('#chat_zone').prepend('<p><em>' + username + ' has left the chat!</em></p>');
            })

**/

server.listen(8080);