import React from 'react';
import TitreH1 from './components/Titres/TitreH1';
import Button from './components/boutons/Button';
import Livres from './containers/Livres/Livres';

function App() {
  return (
    <div className='container'>
      {/* <h1>Titre</h1> */}
      <TitreH1>Pages listant les livres </TitreH1>
      {/* <div>Livres</div> */}
      <Livres/>
      {/* <button>Ajouter</button> */}
      <Button typeBtn="btn-success" css="w-100" clic={() => alert("Ajout")}>Ajouter</Button>
    </div>
  );
}

export default App;
