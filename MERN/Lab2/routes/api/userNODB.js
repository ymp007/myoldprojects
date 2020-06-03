const express = require('express');
let User = require('../../models/User');
const { check, validationResult } = require('express-validator');
const uuid4 =  require('uuid4');
const bcrypt = require('bcryptjs');

const router = express.Router();

//get all users list
router.get('/', async (req,res) => {
    try{
        const userlist = await User.find();  
        res.send(userlist);
    }catch(err){
        res.status(500).send('server error');
    }
});
router.get('/:id', async (req,res) => {
    const user = await User.findById(req.params.id);
    if(!user){
       return res.status(404).send('not found');
    }else{
        res.json(user);
    }
});

router.delete('/:id', async(req,res) => {
    try {
        await User.findByIdAndDelete({_id: req.params.id},async (err,data)=>{
           if(!err){
               const userlist = await User.find();
           res.send(userlist);
           }
        });
   
       } catch (error) {
           res.status(404).send('not found');
       }
});

//route post api/users
//desc insert task
//access public

router.post('/',[
    check('email').isEmail(),
    check('name').not().isEmpty(),
    check('password').isLength({min:6})
],async (req,res)=>{

    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      return res.status(422).json({ errors: errors.array() });
    }
    const newUser = new User({
        email : req.body.email,
        name : req.body.name,
        password: bcrypt.hashSync(req.body.password, bcrypt.genSaltSync(5))
    });
    await newUser.save();
    const userlist = await User.find();
           res.send(userlist);
});

router.post('/:id',[
    check('email').isEmail(),
    check('name').not().isEmpty(),
    check('password').isLength({min:6})
],async (req,res)=>{
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      return res.status(422).json({ errors: errors.array() });
    }

    const UserU = await User.findById(req.params.id);

        UserU.email = req.body.email,
        UserU.name = req.body.name,
        UserU.password= bcrypt.hashSync(req.body.password, bcrypt.genSaltSync(5))
        await UserU.save();
        const userlist = await User.find();
           res.send(userlist);
});

module.exports = router;
