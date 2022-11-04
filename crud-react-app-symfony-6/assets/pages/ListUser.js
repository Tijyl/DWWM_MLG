import React,{ useState, useEffect} from 'react';
import { Link } from "react-router-dom";
import Layout from "../components/Layout"
import Swal from 'sweetalert2'
import axios from 'axios';

function ListUser() {
    const [nom, setNom] = useState('');
    const [prenom, setPrenom] = useState('')
    const [anniv, setAnniv] = useState('')
    const [adresse, setAdresse] = useState('')
    const [email, setEmail] = useState('')
    const [telephone, setTelephone] = useState('')
    const [possession, setPossession] = useState('')
    const [valeur, setValeur] = useState('')
    const [type, setType] = useState('')
    const [age, setAge] =useState('')
    const [isSaving, setIsSaving] = useState(false)
    const saveRecord = () => {
        setIsSaving(true);
        let formData = new FormData()
        formData.append("nom", nom)
        formData.append("prenom", prenom)
        formData.append("anniv",anniv)
        formData.append("adresse", adresse)
        formData.append("email", email)
        formData.append("telephone", telephone)
        formData.append("possession", possession)
        formData.append("valeur", valeur)
        formData.append("type", type)
        formData.append("age",age)
        if(nom == "" || adresse == "" || email==""){
            Swal.fire({
                icon: 'error',
                title: 'Nom, Adresse, Email are required fields.',
                showConfirmButton: true,
                showCloseButton: true,
            })
            setIsSaving(false)
        }else{
            axios.post('/api/user', formData)
                .then(function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Dresseur ajouté avec succes',
                        showConfirmButton: true,


                    })
                    setIsSaving(false);
                    setNom('')
                    setPrenom('')
                    setAnniv('')
                    setAdresse('')
                    setEmail('')
                    setTelephone('')
                    setPossession('')
                    setValeur('')
                    setType('')
                    setAge('')
                })

        fetchUserList()

                .catch(function (error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops, il y a un probleme!',
                        showConfirmButton: true,

                    })
                    setIsSaving(false)
                });
        }
    }

    const  [listUser, setUserList] = useState([])
    useEffect(() => {
        fetchUserList()
    }, [])
    const fetchUserList = () => {
        axios.get('/api/user')
            .then(function (response) {
                setUserList(response.data);
            })
            .catch(function (error) {
                console.log(error);
            })

    }
    const deleteRecord = (id) => {
        Swal.fire({
            title: 'Voulez-vous vraiment supprimer ce dresseur?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                axios.delete(`/api/user/${id}`)
                    .then(function (response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Dresseur supprimer avec succes',
                            showConfirmButton: false,
                            timer: 1000
                        })
                        fetchUserList()
                    })
                    .catch(function (error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops, un probleme est survenu!',
                            showConfirmButton: false,
                            timer: 1000
                        })
                    });
            }
        })
    }

    return (
        <Layout>
            <div className="container">
                <h2 className="text-center mt-5 mb-3">Dresseurs Pokemon</h2>
                <div className="card">
                    <div className="card-header">

                        <button type="button" className="btn btn-info btn-lg" data-toggle="modal"
                                data-target="#myModal">Ajouter Dresseur
                        </button>


                        <div className="modal fade" id="myModal" role="dialog">
                            <div className="modal-dialog">

                                <div className="modal-content">
                                    <div className="modal-header">
                                        <h3 className="modal-title">Ajouter Dresseur</h3>
                                    </div>
                                    <div className="modal-body">
                                        <div className="card">

                                            <div className="card-body">
                                                <form>
                                                    <div className="form-group">
                                                        <label htmlFor="name">Nom</label>
                                                        <input
                                                            onChange={(event)=>{setNom(event.target.value)}}
                                                            value={nom}
                                                            type="text"
                                                            className="form-control"
                                                            id="nom"
                                                            name="nom" required/>
                                                    </div>
                                                    <div className="form-group">
                                                        <label htmlFor="prenom">Prenom</label>
                                                        <input
                                                            onChange={(event)=>{setPrenom(event.target.value)}}
                                                            value={prenom}
                                                            type="text"
                                                            className="form-control"
                                                            id="prenom"
                                                            name="prenom" required/>
                                                    </div>
                                                    <div className="form-group">
                                                        <label htmlFor="type">Date anniversaire</label>
                                                        <input
                                                            onChange={(event)=>{setAnniv(event.target.value)}}
                                                            value={anniv}
                                                            type="date"
                                                            className="form-control"
                                                            id="anniv"
                                                            name="anniv" required/>
                                                    </div>
                                                    <div className="form-group">
                                                        <label htmlFor="addresse">Ville</label>
                                                        <input
                                                            onChange={(event)=>{setAdresse(event.target.value)}}
                                                            value={adresse}
                                                            type="text"
                                                            className="form-control"
                                                            id="adresse"
                                                            name="adresse" required/>
                                                    </div>

                                                    <div className="form-group">
                                                        <label htmlFor="email">Email</label>
                                                        <input
                                                            onChange={(event)=>{setEmail(event.target.value)}}
                                                            value={email}
                                                            type="email"
                                                            className="form-control"
                                                            id="email"
                                                            name="email" required/>
                                                    </div>
                                                    <div className="form-group">
                                                        <label htmlFor="telephone">Telephone</label>
                                                        <input
                                                            onChange={(event)=>{setTelephone(event.target.value)}}
                                                            value={telephone}
                                                            type="text"
                                                            className="form-control"
                                                            id="telephone"
                                                            name="telephone" required/>
                                                    </div>

                                                    <div className="form-group">
                                                        <label htmlFor="possession">Type de pokemon</label>
                                                        <input
                                                            onChange={(event)=>{setPossession(event.target.value)}}
                                                            value={possession}
                                                            type="text"
                                                            className="form-control"
                                                            id="posssesion"
                                                            name="possession" required/>
                                                    </div>

                                                    <div className="form-group">
                                                        <label htmlFor="valeur">Nombre</label>
                                                        <input
                                                            onChange={(event)=>{setValeur(event.target.value)}}
                                                            value={valeur}
                                                            type="text"
                                                            className="form-control"
                                                            id="valeur"
                                                            name="valeur" required/>
                                                    </div>
                                                    <div className="form-group">
                                                        <label htmlFor="type">Petite phrase</label>
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
                                                        className="btn btn-primary mt-3">
                                                        Sauvegarder
                                                    </button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>


                    </div>
                    <div className="card-body">
                        <table className="table table-striped table-hover table-bordered border-primary">
                            <thead>

                            <tr>

                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Age</th>
                                <th>Ville</th>
                                <th>Email</th>
                                <th>Telephone</th>


                                <th width="250px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {listUser.map((user, key)=>{
                                return (
                                    <tr key={key}>
                                        <td><Link
                                            to={`/ViewUser/${user.id}`}
                                            >
                                            {user.nom}
                                        </Link></td>
                                        <td>{user.prenom}</td>
                                        <td>{user.age}</td>
                                        <td>{user.adresse}</td>
                                        <td>{user.email}</td>
                                        <td>{user.telephone}</td>


                                        <td>

                                            <Link
                                                className="btn btn-success mx-1"
                                                to={`/EditUser/${user.id}`}>
                                                Modifier
                                            </Link>

                                            <button
                                                onClick={()=>deleteRecord(user.id)}
                                                className="btn btn-danger mx-1">
                                                Supprimer
                                            </button>
                                        </td>
                                    </tr>
                                )
                            })}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </Layout>

    );
}


export default ListUser;