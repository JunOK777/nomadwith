import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Header extends Component {
    render() {
        return (
            <div className="header">
                <p>test</p>
            </div>
        )
    }
}

ReactDOM.render(
    <Header />, document.getElementById('header')
)