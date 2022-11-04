import React, {useState, useEffect} from 'react';
import { Link, useParams } from "react-router-dom";
import Layout from "../components/Layout"
import axios from 'axios';
function ViewUser() {
    const [id, setId] = useState(useParams().id)
    const [user, setUser] = useState({nom:"", prenom:"", adresse:"",email:"",telephone:"",anniv:"",possession:"",valeur:"",type:""})
    useEffect(() => {
        axios.get(`/api/user/${id}`)
            .then(function (response) {
                setUser(response.data)
            })
            .catch(function (error) {
                console.log(error);
            })
    }, [])
    return (
        <Layout>
            <div className="container">
                <h2 className="text-center mt-5 mb-3">Detail Dresseur</h2>
                <div className="card">
                    <div className="card-header">
                        <Link
                            className="btn btn-info float-left"
                            to="/"> Retour a la liste des dresseurs
                        </Link>
                    </div>
                    <div className="card-body">
                        <b className="text-muted">Nom:</b>
                        <p>{user.nom}</p>
                        <b className="text-muted">Prenom:</b>
                        <p>{user.prenom}</p>
                        <b className="text-muted">Date de naissance:</b>
                        <p>{user.anniv}</p>
                        <b className="text-muted">Ville:</b>
                        <p>{user.adresse}</p>
                        <b className="text-muted">Email:</b>
                        <p>{user.email}</p>
                        <b className="text-muted">Telephone:</b>
                        <p>{user.telephone}</p>
                        <b className="text-muted">Type de pokemon:</b>
                        <p>{user.possession}</p>
                        <b className="text-muted">Nombre:</b>
                        <p>{user.valeur}</p>
                        <b className="text-muted">Petite phrase :</b>
                        <p>{user.type}</p>

                    </div>
                </div>
            </div>
        </Layout>
    );
}
export default ViewUser;