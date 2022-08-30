import React, { Component } from "react";
import Livre from "../livre/Livre";

class Livres extends Component {
    render() {
        return (
            <table className="table text-center">
                <thead>
                    <tr className="table-dark">
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Nombre de Pages</th>
                        <th colSpan={2}>Actions</th>

                    </tr>
                </thead>
                <tbody>
                    {
                        this.state.livres.map(livre => {
                            return (
                                <tr key={livre.id}>
                                    <Livre
                                        titre={livre.titre}
                                        auteur={livre.auteur}
                                        nbPages={livre.nbPages}
                                    />
                                </tr>
                            );
                        })
                    }
                </tbody>
            </table>
        );
    }

}

export default Livres;