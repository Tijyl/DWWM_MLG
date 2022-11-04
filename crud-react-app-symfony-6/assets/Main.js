import React from 'react';
import {StrictMode } from "react";
import {createRoot } from "react-dom/client";
import {BrowserRouter as Router, Routes, Route } from "react-router-dom";
import ListUser from "./pages/ListUser"
import EditUser from "./pages/EditUser"
import ViewUser from "./pages/ViewUser"

function Main() {
    return (
        <Router>
            <Routes>
                <Route path="/"  element={<ListUser/>} />
                <Route path="/EditUser/:id"  element={<EditUser/>} />
                <Route path="/ViewUser/:id"  element={<ViewUser/>} />
            </Routes>
        </Router>
    );
}
export default Main;
if (document.getElementById('app')) {
    const rootElement = document.getElementById("app");
    const root = createRoot(rootElement);
    root.render(
        <StrictMode>
            <Main />
        </StrictMode>
    );
}