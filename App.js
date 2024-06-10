import React from 'react';
import Board from './Board';
import './App.css';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <h1>Othello Game</h1>
      </header>
      <Board />
      <footer></footer>
    </div>
  );
}

export default App;
