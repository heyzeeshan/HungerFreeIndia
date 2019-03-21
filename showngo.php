<!Doctype html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NGO</title>
        <style>
            .navbar{
             overflow: hidden;
            display: block;
                height: 70px;
                margin-top: 10px;
        }
        a:active{
            color: black;
        }
        a:visited{
            color:black;
        }
        a:link{
            color: black;
        }
        a{
            text-align: center;
            padding: 10px 10px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: black;
        }
         .container {
            position: relative;
            width: 150px;
            margin-left: 120px;
            border-radius: 15px;
             margin-top: 20px;
        }

        .image {
            display: block;
            width: 150px;
            height: auto;
            border-radius: 15px;
        }

        .overlay {
            position: absolute;
            bottom: 100%;
            left: 0;
            right: 0;
            background-color: #5C6BC0;
            overflow: hidden;
            width: 100%;
            height:0;
            transition: .5s ease;
            border-radius: 15px;
        }

        .container:hover .overlay {
            bottom: 0;
            height: 100%;
            border-radius: 15px;
        }

        .text {
            white-space: nowrap; 
            color: white;
            font-size: 20px;
            position: absolute;
            overflow: hidden;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
}
body {
  margin: 0;
  min-width: 250px;
}

/* Include the padding and border in an element's total width and height */
* {
  box-sizing: border-box;
}

/* Remove margins and padding from the list */
ul {
  margin: 0;
  padding: 0;
}

/* Style the list items */
ul li {
  cursor: pointer;
  position: relative;
  padding: 12px 8px 12px 40px;
  list-style-type: none;
  background: #eee;
  font-size: 18px;
  transition: 0.2s;
  
  /* make the list items unselectable */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Set all odd list items to a different color (zebra-stripes) */
ul li:nth-child(odd) {
  background: #f9f9f9;
}

/* Darker background-color on hover */
ul li:hover {
  background: #ddd;
}

/* When clicked on, add a background color and strike out text */
ul li.checked {
  background: #888;
  color: #fff;
  text-decoration: line-through;
}

/* Add a "checked" mark when clicked on */
ul li.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}

/* Style the close button */
.close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 12px 16px 12px 16px;
}

.close:hover {
  background-color: #f44336;
  color: white;
}

/* Style the header */
.header {
  background-color: #5C6BC0;
  padding: 30px 40px;
  color: white;
  text-align: center;
}

/* Clear floats after the header */
.header:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the input */
input {
  margin: 0;
  border: none;
  border-radius: 0;
  width: 75%;
  padding: 10px;
  float: left;
  font-size: 16px;
}

/* Style the "Add" button */
.addBtn {
  padding: 10px;
  width: 25%;
  background: #d9d9d9;
  color: #555;
  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 0;
}

.addBtn:hover {
  background-color: #bbb;
}

	</style>
    </head>
    <body>
        <div style="width:100%; height: 350px; background-image: url(restbanner.jpg); color: white; font-size: 50px; font-family: cursive">
        </div>
         <div style="width: 100%; height: 2500px;">
        <div class="navbar" id="up1" style="font-size: 50px; padding-left: 50px; background-color: #9933cc; color: white; font-family: cursive; position: static;">
        <a style="color: white; text-decoration: none; font-size: 20px; float: right; position: absolute; top: 380px; left: 446px;" href="Homepage.html">Home</a>
        <a style="color: white; text-decoration: none; font-size: 20px; float: right; position: absolute; top: 380px; left: 520px " href="volunteer.html">Requested NGO</a>
    
    </div>
        <br/>
<div id="myDIV" class="header">
  <h2 style="margin:5px">NGO LIST</h2>
  <input type="text" id="myInput" placeholder="Title...">
  <span onclick="newElement()" class="addBtn">Add</span>
</div>

<ul id="myUL">
  <li>YUG FOUNDATION | VEG | 20PEOPLEs</li>
  <li>SAAD Foundtion | NON VEG | 20PEOPLEs</li>
  <li>Robin Hood Army| NON VEG | 20PEOPLEs</li>
  <li>Om laxmi Charitable Trust| BOTH | 20PEOPLEs</li>
  <li>Disha Foundation | BOTH | 20PEOPLEs</li>
  <li>Nathani Charitable trust | NON VEG | 20PEOPLEs</li>
</ul>

<script>
// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>

    </body>
	
</html>