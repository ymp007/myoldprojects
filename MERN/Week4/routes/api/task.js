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
router.get('/:id', (req,res) => {
    const task = tasklist.find(t => t.id == req.params.id);
    if(!task){
        res.status(404).send('not found');
    }else{
        res.json(task);
    }
    
});

router.delete('/:id', (req,res) => {
    const task = tasklist.find(t => t.id == req.params.id);
    if(!task){
        return res.status(404).send('not found');
    }
        tasklist.splice(req.params.id-1,1);
        res.json(tasklist);
    
});

//route post api/tasks
//desc insert task
//access public

router.post('/',[
    check('title').not().isEmpty(),
    check('description').isLength({min:12})
],(req,res)=>{

    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      return res.status(422).json({ errors: errors.array() });
    }
    const newTask = {
        id: uuid4(),
        title : req.body.title,
        description: req.body.description,
        status: false
    }
    tasklist.push(newTask);
    res.json(tasklist);
});

router.post('/:id',[
    check('title').not().isEmpty(),
    check('description').isLength({min:12})
],(req,res)=>{
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      return res.status(422).json({ errors: errors.array() });
    }
    const newTask = {
        id: req.params.id,
        title : req.body.title,
        description: req.body.description,
        status: false
    }
    const ididx = tasklist.findIndex((t => t.id == req.params.id));
    tasklist[ididx] = newTask;
    res.json(tasklist);
});

module.exports = router;
