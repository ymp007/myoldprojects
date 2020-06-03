const http = require('http');
const path = require('path');
const fs = require('fs');
const tasklist = require('./data/task');

const server = http.createServer((req,res) => {
    if(req.url === "/") {
        res.write("Hello From Node");
        res.end();
    }
    if(req.url === '/about'){

        fs.readFile(path.join(__dirname,'public','about.html'),(err,data) => {
            if(err) {
                console.log(err);
            }else{
                res.writeHead(200,{'Content-Type' : 'text/html'});
                res.end(data);
            }
        });
    }
    if(req.url === '/api/tasks') {
        res.writeHead(200,{'Content-Type' : 'application/json'});
        res.end(JSON.stringify(tasklist));
    }
});

const PORT = 3000;
server.listen((PORT), () => {
    console.log("Server Running on "+PORT);
});