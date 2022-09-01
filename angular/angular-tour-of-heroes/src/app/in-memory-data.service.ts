import { Injectable } from '@angular/core';
import { InMemoryDbService } from 'angular-in-memory-web-api';
import { Hero } from './hero';

@Injectable({
  providedIn: 'root',
})
export class InMemoryDataService implements InMemoryDbService {
  createDb() {
    const heroes = [
      { id: 1, name: 'Sonic', power: 'Vitesse', taille: 100, poids: "50 Kg",  },
      { id: 2, name: 'Tails' , power: 'Bricoleur', taille: 80, poids : "20 Kg"},
      { id: 3, name: 'Knuckles' , power :'Force', taille :110, poids : "Non connu"},
      { id: 4, name: 'Amy Rose', power : 'Vitesse', taille : 90, poids: "Secret"},
      { id: 5, name: 'Dr. Robotnik', power: 'Intélligent', taille : 185, poids:"180 Kg" },
      { id: 6, name: 'Shadow', power : 'Vitesse', taille: 100, poids: '35 Kg'},
      { id: 7, name: 'Rouge', power: 'Vol', taille: 105, poids: 'Secret'},
      { id: 8, name: 'Blaze', power:'Pyrokinésie', taille: 95, poids :'Secret' },
      { id: 9, name: 'Silver', power:'Vol', taille:100, poids:"Non Connu" }
    ];
    return { heroes };
  }

  // Overrides the genId method to ensure that a hero always has an id.
  // If the heroes array is empty,
  // the method below returns the initial number (11).
  // if the heroes array is not empty, the method below returns the highest
  // hero id + 1.
  genId(heroes: Hero[]): number {
    return heroes.length > 0 ? Math.max(...heroes.map(hero => hero.id)) + 1 : 11;
  }
}
