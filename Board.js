import React, { useState, useEffect } from 'react';
import Square from './Square';

const BOARD_SIZE = 8;

function initializeBoard() {
    // 1. BOARD_SIZE のサイズの 2 次元配列を作成し、すべてのセルを null に初期化
    const board = Array(BOARD_SIZE).fill(null).map(() => Array(BOARD_SIZE).fill(null));
    // 2. オセロの初期配置として中央の 4 つのセルを設定
    board[3][3] = 'W'; // 白 ('W') のディスクを (3, 3) に配置
    board[3][4] = 'B'; // 黒 ('B') のディスクを (3, 4) に配置
    board[4][3] = 'B'; // 黒 ('B') のディスクを (4, 3) に配置
    board[4][4] = 'W'; // 白 ('W') のディスクを (4, 4) に配置
    // 3. 初期化されたボードを返す
    return board;
}

function Board() {
    // boardの初期状態をinitializeBoard関数を使って設定
    const [board, setBoard] = useState(initializeBoard());
    // 現在のプレイヤーを'B'（黒）に設定
    const [currentPlayer, setCurrentPlayer] = useState('B');
    // セルがクリックされたときの処理
    const handleClick = (row, col) => {
        // 現在のボードの状態をコピー
        const newBoard = board.map(row => [...row]);
        // すでに駒がある場合は何もしない
        if (newBoard[row][col] !== null) {
            return;
        }
        // 反転する駒のリストを取得
        const flipped = flipDiscs(newBoard, row, col, currentPlayer);
         // 反転する駒が1つ以上ある場合のみ処理を進める
        if (flipped.length > 0) {
            newBoard[row][col] = currentPlayer;
            flipped.forEach(([r, c]) => {
                newBoard[r][c] = currentPlayer;
            });

            // 現在のプレイヤーの駒をクリックされた位置に配置
            newBoard[row][col] = currentPlayer;
            // ボードの状態を更新
            setBoard(newBoard);
            // プレイヤーを交代
            setCurrentPlayer(currentPlayer === 'B' ? 'W' : 'B');
        }
    };

    const flipDiscs = (board, row, col, player) => {
        const directions = [
            [0, 1], [1, 0], [0, -1], [-1, 0],
            [1, 1], [1, -1], [-1, 1], [-1, -1]
        ];
        const opponent = player === 'B' ? 'W' : 'B';
        let flipped = [];

        directions.forEach(([dx, dy]) => {
            let x = row + dx;
            let y = col + dy;
            let discs = [];

            while (x >= 0 && x < BOARD_SIZE && y >= 0 && y < BOARD_SIZE && board[x][y] === opponent) {
                discs.push([x, y]);
                x += dx;
                y += dy;
            }

            if (x >= 0 && x < BOARD_SIZE && y >= 0 && y < BOARD_SIZE && board[x][y] === player) {
                flipped = flipped.concat(discs);
            }
        });

        return flipped;
    };

    // 各セルの表示
    const renderSquare = (row, col) => {
        return (
            <Square
                key={`${row}-${col}`}
                value={board[row][col]}
                onClick={() => handleClick(row, col)}
            />
        );
    };
    // ボードの表示
    return (
        <div>
            {board.map((row, rowIndex) => (
                <div key={rowIndex} className="board-row">
                    {row.map((col, colIndex) => renderSquare(rowIndex, colIndex))}
                </div>
            ))}
        </div>
    );
}

export default Board;
