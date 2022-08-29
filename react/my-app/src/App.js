import React from 'react';
import TitreH1 from './components/Titres/TitreH1';
import Button from './components/boutons/Button';

function App() {
  return (
    <div className='container'>
      {/* <h1>Titre</h1> */}
      <TitreH1>Pages listant les livres </TitreH1>
      <div>Livres</div>
      {/* <button>Ajouter</button> */}
      <Button typeBtn="btn-success" clic={() => alert("ajout")}>Ajouter</Button>
      <Button typeBtn="btn-warning">Modifier</Button>
      <Button typeBtn="btn-danger">Supprimer</Button>
    </div>
  );
}

export default App;
