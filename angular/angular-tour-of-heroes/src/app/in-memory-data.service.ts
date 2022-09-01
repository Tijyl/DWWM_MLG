import { Injectable } from '@angular/core';
import { InMemoryDbService } from 'angular-in-memory-web-api';
import { Hero } from './hero';

@Injectable({
  providedIn: 'root',
})
export class InMemoryDataService implements InMemoryDbService {
  createDb() {
    const heroes = [
      { id: 13, name: 'Sonic', power: 'Vitesse', taille: 100, poids: "50 Kg", },
      { id: 14, name: 'Tails' , power: 'Bricoleur', taille: 80, poids : "20 Kg"},
      { id: 15, name: 'Knuckles' , power :'Force', taille :110, poids : "Non connu"},
      { id: 16, name: 'Amy Rose', power : 'Vitesse', taille : 90, poids: "Secret"},
      { id: 12, name: 'Dr. Robotnik ' },
      { id: 17, name: 'Shadow' },
      { id: 18, name: 'Rouge' },
      { id: 19, name: 'Blaze' },
      { id: 20, name: 'Silver' }
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
