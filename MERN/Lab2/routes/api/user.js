const express = require('express');
let userlist = require('../../data/users_data');
const { check, validationResult } = require('express-validator');
const uuid4 =  require('uuid4');
const bcrypt = require('bcryptjs');

const router = express.Router();

//get all users list
router.get('/', (req,res) => {
    try{
        res.send(userlist);
    }catch(err){
        res.status(500).send('server error');
    }
});
router.get('/:id', (req,res) => {
    const user = userlist.find(u => u.id == req.params.id);
    if(!user){
       return res.status(404).send('not found');
    }else{
        res.json(user);
    }
    
});

router.delete('/:id', (req,res) => {
    const user = userlist.find(u => u.id == req.params.id);
    if(!user){
        return res.status(404).send('not found');
    }
        userlist.splice(req.params.id-1,1);
        res.json(userlist);
    
});

//route post api/users
//desc insert task
//access public

router.post('/',[
    check('email').isEmail(),
    check('name').not().isEmpty(),
    check('password').isLength({min:6})
],(req,res)=>{

    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      return res.status(422).json({ errors: errors.array() });
    }
    const newUser = {
        id: uuid4(),
        email : req.body.email,
        name : req.body.name,
        password: bcrypt.hashSync(req.body.password, bcrypt.genSaltSync(5))
    };
    userlist.push(newUser);
    res.json(userlist);
});

router.post('/:id',[
    check('email').isEmail(),
    check('name').not().isEmpty(),
    check('password').isLength({min:6})
],(req,res)=>{
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      return res.status(422).json({ errors: errors.array() });
    }
    const newUser = {
        id: req.params.id,
        email : req.body.email,
        name : req.body.name,
        password: bcrypt.hashSync(req.body.password, bcrypt.genSaltSync(5))
    }
    const ididx = userlist.findIndex((u => u.id == req.params.id));
    userlist[ididx] = newUser;
    res.json(userlist);
});

module.exports = router;
