import React, { useState, useEffect } from 'react';
import { Link, useParams } from "react-router-dom";
import Layout from "../components/Layout"
import Swal from 'sweetalert2'
import axios from 'axios';
function EditUser() {
    const [id, setId] = useState(useParams().id)
    const [nom, setNom] = useState('');
    const [prenom, setPrenom] = useState('')
    const [anniv, setAnniv] = useState('')
    const [adresse, setAdresse] = useState('')
    const [email, setEmail] = useState('')
    const [telephone, setTelephone] = useState('')
    const [possession, setPossession] = useState('')
    const [valeur, setValeur] = useState('')
    const [type, setType] = useState('')
    const [isSaving, setIsSaving] = useState(false)
    useEffect(() => {
        axios.get(`/api/user/${id}`)
            .then(function (response) {
                let user = response.data
                setNom(user.nom);
                setPrenom(user.prenom);
                setAnniv(user.anniv);
                setAdresse(user.adresse);
                setEmail(user.email);
                setTelephone(user.telephone);
                setPossession(user.possession);
                setValeur(user.valeur);
                setType(user.type);
            })
            .catch(function (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops, un probleme est survenue!',
                    showConfirmButton: true,
                })
            })

    }, [])
    const saveRecord = () => {
        setIsSaving(true);
        axios.patch(`/api/user/${id}`, {
            nom: nom,
            prenom: prenom,
            anniv: anniv,
            adresse: adresse,
            email: email,
            telephone: telephone,
            possession: possession,
            valeur: valeur,
            type: type,
        })
            .then(function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Dresseur modifié',
                    showConfirmButton: true,
                })
                setIsSaving(false);
            })
            .catch(function (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops, un probleme est venu',
                    showConfirmButton: true,
                })
                setIsSaving(false)
            });
    }
    return (
        <Layout>
            <div className="container">
                <h2 className="text-center mt-5 mb-3">Modifier Dresseur</h2>
                <div className="card">
                    <div className="card-header">
                        <Link
                            className="btn btn-info float-left"
                            to="/">Revenir a la liste des dresseurs
                        </Link>
                    </div>
                    <div className="card-body">
                        <form>
                            <div className="form-group">
                            <label htmlFor="name">Nom:</label>
                            <input
                                onChange={(event)=>{setNom(event.target.value)}}
                                value={nom}
                                type="text"
                                className="form-control"
                                id="nom"
                                name="nom" required/>
                    </div>
                    <div className="form-group">
                        <label htmlFor="prenom">Prenom:</label>
                        <input
                            onChange={(event)=>{setPrenom(event.target.value)}}
                            value={prenom}
                            type="text"
                            className="form-control"
                            id="prenom"
                            name="prenom" required/>
                    </div>
                            <div className="form-group">
                                <label htmlFor="anniv">Date d'anniversaire:</label>
                                <input
                                    onChange={(event)=>{setAnniv(event.target.value)}}
                                    value={anniv}
                                    type="date"
                                    className="form-control"
                                    id="anniv"
                                    name="anniv" required/>
                            </div>

                    <div className="form-group">
                        <label htmlFor="addresse">Ville:</label>
                        <input
                            onChange={(event)=>{setAdresse(event.target.value)}}
                            value={adresse}
                            type="text"
                            className="form-control"
                            id="address"
                            name="address" required/>
                    </div>

                    <div className="form-group">
                        <label htmlFor="email">Email:</label>
                        <input
                            onChange={(event)=>{setEmail(event.target.value)}}
                            value={email}
                            type="email"
                            className="form-control"
                            id="email"
                            name="email" required/>
                    </div>
                    <div className="form-group">
                        <label htmlFor="telephone">Telephone:</label>
                        <input
                            onChange={(event)=>{setTelephone(event.target.value)}}
                            value={telephone}
                            type="text"
                            className="form-control"
                            id="telephone"
                            name="telephone" required/>
                    </div>

                            <div className="form-group">
                                <label htmlFor="possession">Type de pokemon:</label>
                                <input
                                    onChange={(event)=>{setPossession(event.target.value)}}
                                    value={possession}
                                    type="text"
                                    className="form-control"
                                    id="posssesion"
                                    name="possession" required/>
                            </div>

                            <div className="form-group">
                                <label htmlFor="valeur">Nombre:</label>
                                <input
                                    onChange={(event)=>{setValeur(event.target.value)}}
                                    value={valeur}
                                    type="text"
                                    className="form-control"
                                    id="valeur"
                                    name="valeur" required/>
                            </div>
                            <div className="form-group">
                                <label htmlFor="type">Petite phrase:</label>
                                <input
                                    onChange={(event)=>{setType(event.target.value)}}
                                    value={type}
                                    type="text"
                                    className="form-control"
                                    id="type"
                                    name="type" required/>
                            </div>
                            <button
                                disabled={isSaving}
                                onClick={saveRecord}
                                type="button"
                                className="btn btn-success mt-3">
                                Sauvegarder
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </Layout>
    );
}
export default EditUser;