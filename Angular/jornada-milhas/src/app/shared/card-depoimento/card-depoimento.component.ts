import { Component } from '@angular/core';

@Component({
  selector: 'app-card-depoimento',
  templateUrl: './card-depoimento.component.html',
  styleUrls: ['./card-depoimento.component.scss']
})
export class CardDepoimentoComponent {
  depoimento: string = 'Recomendo fortemente a agência de viagens Jornada.Eles oferecem um serviço personalizado e de alta qualidade que excedeu minhas expectativas em minha última viagem.';
  autoria: string = 'Mariana Faustion';
}
