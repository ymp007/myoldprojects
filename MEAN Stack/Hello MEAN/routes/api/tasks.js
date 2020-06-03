var router = require('express').Router();
var mongojs = require('mongojs');
var db = mongojs('mongodb+srv://sampleUser:sampleUser@cluster0-0zhxa.gcp.mongodb.net/test?retryWrites=true&w=majority',['taskstable'])


router.get('/tasks',(req,res,next) =>{
    db.taskstable.find(function(err,tasks){
        if(err){
            res.send(err);
        }else{
            res.json(tasks);
        }
    });
});

module.exports = router;