// import React, { Component } from 'react'

// const title = React.createElement('h1',{id:"test"},'Hello ymp');
// const desc = React.createElement('p',null,'Welcome');
// const header = React.createElement('h1',null,title,desc);
// console.log(title);

// ReactDOM.render(header,document.getElementById('root'));
// export default class App extends Component {
//     render() {
//         return (
//             <div>
                
//             </div>
//         )
//     }
// }

const groceryList =[{
    name:'apple',
    quantity:4,
    id:2
},
{
    name:'banana',
    quantity:12,
    id:3
},
{
    name:'oats',
    quantity:1,
    id:4
}
]

const title = 'Fake World'
const desc = 'you are dead'
// const header = React.createElement('h1',null,title,desc);
const Grocery = (props) => {
    return(    
        <div>
            <span>{props.name}</span>
            <Quantity numberItem={props.quantity}/>
        </div>
    )};
   
const Header = (props) => {
return(    <header id = 'test1' className='header'>
        <h1>{props.title}</h1>
        <span> {props.numberofItems}</span>
    </header>
)};
// const Quantity = (props) => {
//     return(    
//         <div>
            
//         <button>+</button>
//         <span> {props.numberItem} </span>
//         <button>-</button>
//         </div>
//     )};

    class Quantity extends React.Component{
        state= {
            quantity:0
        }
        decreamentQuantity = () =>{
            this.setState(prevState => ({
                quantity: prevState.quantity - 1
            }))
        }
        increamentQuantity = () =>{
            this.setState(prevState => ({
                quantity: prevState.quantity + 1
            }))
        }
        render(){
            return(
                <div>
            
                <button onClick={this.increamentQuantity}>+</button>
                <span> {this.state.quantity} </span>
                <button onClick={this.decreamentQuantity}>-</button>
                </div>  
            )
        }
    }
const App = (props) => {
    return(
        <div>

        <Header title='Grocery List' numberofItems = {props.startGrocery.length}/>
          {/* Grocery List  */}
          {
              props.startGrocery.map(g=>(
              <Grocery name={g.name} quantity={g.quantity} key={g.id}/>))
            }  
        
        </div>
    )};
ReactDOM.render(<App startGrocery={groceryList}/>,document.getElementById('root'));