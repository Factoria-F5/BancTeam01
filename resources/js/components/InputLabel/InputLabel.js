import React, { Component } from 'react'

export class InputLabel extends Component {

    constructor(props){
        super(props)
        this.state={
            offers:[],
        }
    }

  render() {
    return (
      <div>
          <label>
            {this.props.label}
            <input type="text" placeholder={this.props.value}></input>
          </label>
      </div>
    )
  }
}

export default InputLabel
