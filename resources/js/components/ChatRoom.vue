<template>
    <div>
      <div id="chat-box" style="width: 80%; height: 400px; border: 1px solid #000; overflow-y: scroll; margin-bottom: 10px; padding: 10px; background-color: #f1f1f1;">
        <div v-for="message in messages" :key="message.id" class="message" style="margin-bottom: 10px; padding: 5px; border-bottom: 1px solid #ddd;">
          <span class="username" style="font-weight: bold;">{{ message.user.name }}: </span>
          <span>{{ message.message }}</span>
        </div>
      </div>
      <input
        type="text"
        v-model="message"
        id="message-box"
        style="width: 80%; padding: 10px;"
        placeholder="Type your message here..."
      />
      <button @click="sendMessage" style="padding: 10px;">Send</button>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    props: ['room'],
    data() {
      return {
        message: '',
        messages: []
      };
    },
    mounted() {
      this.fetchMessages();
  
      Echo.channel('chat.' + this.room).listen('MessageSent', (e) => {
        this.messages.push({
          message: e.message.message,
          user: e.message.user
        });
      });
    },
    methods: {
      fetchMessages() {
        axios.get('/messages/' + this.room).then(response => {
          this.messages = response.data;
        }).catch(error => {
          console.error('Error fetching messages:', error);
        });
      },
      sendMessage() {
        if (this.message.trim() === '') return;
  
        axios.post('/messages/' + this.room, {
          message: this.message
        }).then(response => {
          this.message = '';
        }).catch(error => {
          console.error('Error sending message:', error);
        });
      }
    }
  };
  </script>
  
  <style scoped>
  .username {
    font-weight: bold;
  }
  </style>
  

<style scoped>
.chat-box {
    width: 80%;
    height: 400px;
    border: 1px solid #000;
    overflow-y: scroll;
    margin-bottom: 10px;
    padding: 10px;
    background-color: #f1f1f1;
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
