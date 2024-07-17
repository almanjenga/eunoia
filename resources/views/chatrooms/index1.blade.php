
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Anxiety
        </h2>
    </x-slot>
   
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Room</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #chat-box {
            width: 80%;
            height: 400px;
            border: 1px solid #000;
            overflow-y: scroll;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f1f1f1;
        }
        #message-box {
            width: 80%;
            padding: 10px;
        }
        .message {
            margin-bottom: 10px;
            padding: 5px;
            border-bottom: 1px solid #ddd;
        }
        .username {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Chat Room</h1>
    <div id="chat-box">
        <div class="message">
            <span class="username"></span> 
        </div>
        <div class="message">
            <span class="username"></span> 
        </div>
        <div class="message">
            <span class="username"></span> 
        </div>
    </div>
    <input type="text" id="message-box" placeholder="Type your message here...">
    <button onclick="sendMessage()">Send</button>

    <script>
        function sendMessage() {
            const messageBox = document.getElementById('message-box');
            const chatBox = document.getElementById('chat-box');

            if (messageBox.value.trim() !== '') {
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('message');
                
                const usernameSpan = document.createElement('span');
                usernameSpan.classList.add('username');
                usernameSpan.textContent = 'You: ';

                const messageSpan = document.createElement('span');
                messageSpan.textContent = messageBox.value;

                messageDiv.appendChild(usernameSpan);
                messageDiv.appendChild(messageSpan);
                chatBox.appendChild(messageDiv);

                // Scroll to the bottom of the chat box
                chatBox.scrollTop = chatBox.scrollHeight;

                // Clear the message box
                messageBox.value = '';
            }
        }
    </script>
</body>
</html>


</x-app-layout>
