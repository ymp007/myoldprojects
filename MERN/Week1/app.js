var getIpAddresses = require('get-ip-addresses').getIpAddresses;
const fs = require('fs');
const os = require('os');
const process = require('process');



var path = require('path'),    
    filePath = path.join(__dirname, 'data/cat.txt');

    const getPort = require('get-port');
 
    (async () => {
        console.log("Port "+await getPort()+" is Available");
        //=> 51402
    })();


fs.readFile(filePath, {encoding: 'utf-8'}, function(err,data){
    if (!err) {
        console.log(data);
        console.log("with "+os.arch()+"bit os");
        // console.log(getIpAddresses.getIpAddresses());
    } else {
        console.log(err);
    }
});

process.on('beforeExit', (code) => {
    console.log('Process going to end and program going to quit ');
  });
  
  process.on('exit', (code) => {
    console.log('Program Quit');
  });