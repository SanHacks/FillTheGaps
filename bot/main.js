
body {
  background-color: #f5f5f5;
  margin: 0;
  padding: 0;
}

.card {
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  margin: 20px auto;
  max-width: 400px;
  padding: 30px;
}

#chat {
  height: 300px;
  overflow: hidden;
  padding: 20px;
}

.bubble {
  border-radius: 2px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  display: inline-block;
  margin: 10px;
  max-width: 200px;
  padding: 10px;
  position: relative;
}

.bubble.me {
  background-color: #e6e6e6;
}

.bubble.you {
  background-color: #efefef;
}
.message {
  color: #333;
}
.time {
  color: #999;
  display: block;
  font-size: 10px;
  margin-top: 5px;
  text-align: right;
}




.bubble:before {
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #fff;
  bottom: 0;
  content: "";
  height: 0;
  margin-left: -6px;
  margin-top: -6px;
  opacity: 0.1;
  position: absolute;
  left: 50%;
  width: 0;
}

.bubble.me:before {
  border-bottom: 6px solid #e6e6e6;
}



.bubble.you:before {
  border-bottom: 6px solid #efefef;
}

input[type="text"],
button {
  border: 0;
  border-radius: 2px;
  box-sizing: border-box;
  display: inline-block;
  font-size: 16px;
  height: 3em;
  padding: 0.5em 1em;
  width: 100%;
}

input[type="text"] {
  background-color: #fff;
}

button {
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
  font-weight: bold;
  text-transform: uppercase;
}

button:focus {
  outline: 0;
}

button:active {
  background-color: #0062cc;
}

form {
  margin-top: 20px;
}


.bubble.me {
  float: right;
}

.bubble.you {
  float: left;
}
.bubble.me:before {
  border-bottom: 6px solid #e6e6e6;
  right: -6px;
}

.bubble.you:before {
  border-bottom: 6px solid #efefef;
  left: -6px;
}

.message {
  color: #333;
}

.time {
  color: #999;
  display: block;
  font-size: 10px;
  margin-top: 5px;
  text-align: right;
}

.bubble:before {
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #fff;
  bottom: 0;
  content: "";
  height: 0;
  margin-left: -6px;
  margin-top: -6px;
  opacity: 0.1;
  position: absolute;
  left: 50%;
  width: 0;
}

