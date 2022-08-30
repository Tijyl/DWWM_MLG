import React, { useState } from 'react';
import TodoForm from './TodoForm';
import { AiFillCloseCircle, AiFillCodepenCircle } from "react-icons/ai";
import { AiFillEdit } from 'react-icons/ai';

// ..........................TACHE  MODIFIER SUPPRIMER...................................
const Todo = ({ todos, completeTodo, removeTodo, updateTodo }) => {
    const [edit, setEdit] = useState({
        id: null,
        value: ''
    });

    //........................... MODIFIER..........................................................
    const submitUpdate = value => {
        updateTodo(edit.id, value);
        setEdit({
            id: null,
            value: ''
        });
    };

    if (edit.id) {
        return <TodoForm edit={edit} onSubmit={submitUpdate} />;
    }
    // ..................................COMPLETE..........................................
    return todos.map((todo, index) => (
        <div
            className={todo.isComplete ? 'todo-row complete' : 'todo-row'}
            key={index}
        >
            <div key={todo.id} onClick={() => completeTodo(todo.id)}>
                {todo.text}
            </div>
            <div className='icons'>
                <AiFillEdit
                    onClick={() => setEdit({ id: todo.id, value: todo.text })}
                    className='edit-icon'
                />
                <AiFillCloseCircle
                    onClick={() => removeTodo(todo.id)}
                    className='delete-icon'
                />
            </div>
        </div>
    ));
};

export default Todo;


