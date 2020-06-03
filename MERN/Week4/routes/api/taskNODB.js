const express = require('express');
let Task = require('../../models/Task');
const { check, validationResult } = require('express-validator');
const uuid4 =  require('uuid4');

const router = express.Router();

//route Get api/tasks
//desc Get all tasks
//access public
router.get('/', async (req,res) => {
    try{
        const TaskDB = await Task.find();
        res.send(TaskDB);
    }catch(err){
        res.status(500).send('server error');
    }
});
router.get('/:id',async (req,res) => {
    const task =await Task.findById(req.params.id);
    if(!task){
        res.status(404).send('not found');
    }else{
        res.json(task);
    }
    
});

router.delete('/:id', async (req,res) => {
    try {
     await Task.findByIdAndDelete({_id: req.params.id},async (err,data)=>{
        if(!err){
            const TaskDB = await Task.find();
        res.send(TaskDB);
        }
     });

    } catch (error) {
        res.status(404).send('not found');
    }
    
});

//route post api/tasks
//desc insert task
//access public

router.post('/',[
    check('title').not().isEmpty(),
    check('description').isLength({min:12})
],async(req,res)=>{

    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      return res.status(422).json({ errors: errors.array() });
    }
    const newTask = new Task({
        title : req.body.title,
        description: req.body.description,
        status: false
    });
    await newTask.save();
    const TaskDB = await Task.find();
        res.send(TaskDB);
});

router.post('/:id',[
    check('title').not().isEmpty(),
    check('description').isLength({min:12})
], async (req,res)=>{
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      return res.status(422).json({ errors: errors.array() });
    }
    const taskU = await Task.findById(req.params.id);
    taskU.title = req.body.title;
    taskU.description = req.body.description;
    taskU.status = req.body.status;
    taskU.save();
    //await Task.updateOne({'title':req.body.title},{$set: {'title':req.body.title,'description':req.body.description,'status':false}});
    const TaskDB = await Task.find();
        res.send(TaskDB);
});

module.exports = router;
