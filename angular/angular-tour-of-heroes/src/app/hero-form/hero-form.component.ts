import { Component, OnInit } from '@angular/core';
import { Hero } from '../hero';




@Component({
  selector: 'app-hero-form',
  templateUrl: './hero-form.component.html',
  styleUrls: ['./hero-form.component.css']
})
export class HeroFormComponent{

  powers = ['Intélligent', 'Rapide',
            'Bricoleur', 'bagarreur'];

  model = new Hero(18, 'Sonic', this.powers[1],200,"",);

  submitted = false;

  onSubmit() { this.submitted = true; }

  newHero() {
    this.model = new Hero(42, '', '', 20, "",);
  }
}

