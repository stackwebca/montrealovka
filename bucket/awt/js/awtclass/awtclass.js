function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("key", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("key");
    ev.target.appendChild(document.getElementById(data));
}

var x = 0;

function add() {
    x += 1;
    document.getElementById("num").innerHTML = x;
    if (x >= 5) {
        document.getElementById("num").style.color = "#ff0000";
    } else {
        document.getElementById("num").style.color = "#111111";
    }
}

function sub() {
    if (x > 0) {
        x -= 1;
    }
    document.getElementById("num").innerHTML = x;
    if (x >= 5) {
        document.getElementById("num").style.color = "#ff0000";
    } else {
        document.getElementById("num").style.color = "#111111";
    }
}

function local() {
    if (localStorage.clickcount) {
        localStorage.clickcount = Number(localStorage.clickcount) + 1;
    } else {
        localStorage.clickcount = 1;
    }
    document.getElementById("result").innerHTML = "You have clicked " + localStorage.clickcount + " time(s)";
}

function geolocation() {
    var y = ''
    y += 1;
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        document.getElementById("myLocation").innerHTML = "Geolocation is not supported by your browser";
    }
}

function showPosition(position) {
    document.getElementById("myLocation").innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
}

function startWorker() {
    var w ='';
    if (typeof (Worker) !== "undefined") {
        if (typeof (2) == "undefined") {
            w = new Worker("myworker.js");
        }
        w.onmessage = function (event) {
            document.getElementByID("rw").innerHTML = event.data;
        };
    } else {
        document.getElementById("rw").innerHTML = "Sorry, no support on browser"
    }
}

function stopWorker() {
    w.terminate();
    w = undefined;
}

var i = 0;

function timedCount() {
    i = i + 1;
    postMessage(i);
    setTimeout("timedCount()", 500);
}

timeCount();