@extends('layout')

@section('content')
<main>
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li class="gray">Chat</li>
    </ul> 
    <h5><b>Chat</b></h5>
    <div class="row" id="chat">  
      <div class="col-sm-12 ">
        <div class="chat-main-window">
          <div class="chat-message" v-for="message in messages">
            <h5>@{{ message.username }} <small>@{{ message.date }}</small></h5>
            <p>@{{ message.text }}</p>
          </div><!-- chat-message -->                       
        </div><!-- chat-main-window -->
      </div>
      <div class="col-sm-12 ">
        <div class="chat-message-form">
          <div class="row">
            <div class="form-group col-sm-12 chat-username-width">
              <label for="chat-username-input">Username</label>
              <input v-model="newMessageUsername" type="text" class="form-control" id="chat-username-input">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-12 margin-zerro">
              <label for="chat-text-input">Message</label>
            </div>
            <div class="form-group col-sm-11">   
              <textarea v-model="newMessageText" class="form-control" id="chat-text-input"></textarea>
            </div>
            <div class="form-group col-sm-1">
              <button class="btn btn-primery" id="chat-send-message-button" v-on:click="sendMessage()">Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection