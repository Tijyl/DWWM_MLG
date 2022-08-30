import React from "react";
import Button from "../../components/boutons/Button";

const livre = (props) => (
    <>
        <td>{props.titre}</td>
        <td>{props.auteur}</td>
        <td>{props.nbPages}</td>
        <td><Button typeBtn="btn-warning" clic={() => alert("Modification")}>Modifier</Button></td>
        <td><Button typeBtn="btn-danger" clic={() => alert("Supprimer")}>Supprimer</Button></td>
    </>
);

export default livre;
