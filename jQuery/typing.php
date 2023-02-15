<!DOCTYPE html>
<html>
  <head>
    <style>
      /* Style the typing area */
      #typing-area {
        width: 500px;
        height: 300px;
        border: 1px solid black;
        padding: 10px;
        font-size: 16px;
      }
    </style>
  </head>
  <body>
    <!-- The typing area -->
    <div id="typing-area"></div>
    
    <!-- The JavaScript to track user's typing -->
    <script>
      // Get the typing area
      var typingArea = document.getElementById("typing-area");
      
      // Listen for key events in the typing area
      typingArea.addEventListener("keypress", function(event) {
        console.log("Key pressed: " + event.key);
      });
    </script>
  </body>
</html>
