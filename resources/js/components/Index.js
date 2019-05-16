import React, { Component } from 'react'
import ReactDOM from 'react-dom';
import Example from './Example'
export class Index extends Component {
  render() {
    return (
      <div>
       <Example/> 
      </div>
    )
  }
}

export default Index
if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}