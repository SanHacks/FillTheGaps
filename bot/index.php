
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <title></title>
</head>
<body>
<b>Your API key (remains hidden to me): </b><input id="userapikey" value=""/>

<div id="divchatbot" style='border-style: solid; position: fixed; bottom: 10px; left:2%; width:96%; text-align: center; z-index: 1000; background-color: rgba(200, 200, 200, 1); visibility: visible; height: 200px; overflow-y : scroll; '>
  <p align=left>
  <button type="button" onclick="chatbotprocessinput()" title="" id="chatbotbutton"><font size=4>Send</font></button>
  <button type="button" onclick="document.getElementById('divchatbot').style.visibility = 'hidden' ; document.getElementById('divchatbotoff').style.visibility = 'visible'" title="" id="chatbotbutton"><font size=4>Close</font></button>
  <input id="chatuserinput" value="who is luciano?" style="font-size:20px;" placeholder="Type here to chat with bot" onkeydown="if (event.keyCode == 13) { chatbotprocessinput() }  ;  if (event.keyCode == 38) { repeatuser() }"></input>
  </p>
  <p id="chatlog" align=left style="width:95%; word-wrap:break-word;"><br><b>Assistant:</b> Hello, welcome to Luciano Abriata's website. I'm here representing Luciano online. I know a lot about him -I'm an OpenAI GPT-3 model extended with hundreds of texts written by Luciano. Feel free to ask any questions...</p>
</div>

<script>

var prompt = " am a highly intelligent question answering bot. If you ask me a question that is rooted in truth, I will give you the answer. If you ask me a question that is nonsense, trickery, or has no clear answer, I will respond with \'Unknown\' 
 \'Q: What is human life expectancy in the United States? \'
 \'A: Human life expectancy in the United States is 78 years. \'
 Q:
";

var chatbotprocessinput = function(){
  var apikey = "Bearer " + document.getElementById("userapikey").value
  theprompt = prompt + "Q: " + document.getElementById("chatuserinput").value
  document.getElementById("chatuserinput").value = ""
  document.getElementById("chatlog").innerHTML = "Thinking..."
  $.ajax({
      url: "callgpt.php?prompt=" + theprompt + "&apikey=" + apikey
    }).done(function(data) {
      console.log(data)
      var textupdate = data.replace(prompt,"").replace("https://api.openai.com/v1/engines/text-davinci-002/completions","")
      document.getElementById("chatlog").innerHTML = textupdate.replace(/Q: /g,"<br><b>Visitor: </b>").replace(/A: /g,"<br><b>Assistant: </b>")
      prompt = data.replace("https://api.openai.com/v1/engines/text-davinci-002/completions","")
      console.log("------\n" + prompt)
  });
}

</script>

</body>
</html>