import React, { Component } from 'react';
import InputLabel from './InputLabel/InputLabel'
import axios from 'axios'
export default class Example extends Component {
   constructor(props){
       super(props)
       this.state={
           offers:[],
       }
   }
   componentDidMount(){
       console.log("montado")
       axios.get('/offer').then((res)=>{
        this.setState({offers:res.data})
       })
   }

    render() {
        return (
            <div className="container">
               {this.state.offers.map((offer)=><h1>{offer.title}</h1>)} 
               <InputLabel value="Name" label="Name:"/>
            </div>
        );
    }
}


