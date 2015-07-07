console.log("Iniciando server de Node");

// Conectarse al WiFi del Drone

/* Drone Control Code */
var arDrone = require("ar-drone");
var dron = arDrone.createClient();

function bateria () {
    console.log("Batería : " + dron.baterry());
}

function despegar_drone() {
    dron.config("control:altitude_max", 100000);
    dron.takeoff();
    rotar_drone();
    bateria();
}

function rotar_drone() {
    dron.stop();
    dron.calibrate(0);
    dron.up(1);
    bateria();
}

function aterrizar_drone() {
    dron.stop();
    dron.land();
    bateria();
}

/* Express y Sevidor Web */
var express = require("express");
var web = express();
var server;

server = web.listen(8080, function () {
    console.log("¡Servidor arrancado!");
});

web.get("/", function(req, res)    {
    console.log("Home");
    res.sendfile("opciones.html");
});

/* Despegue URL */
web.get("/despegar", function(req, res)    {
    console.log("Despegando");
    despegar_drone();
    res.sendfile("opciones.html");
});

web.get("/aterrizar", function(req, res) {
    console.log("Aterrizando");
    aterrizar_drone();
    res.sendfile("opciones.html");
});