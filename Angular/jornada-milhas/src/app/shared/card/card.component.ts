import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-card',
  templateUrl: './card.component.html',
  styleUrls: ['./card.component.scss']
})
export class CardComponent {
  // 'variant' como propriedade de entrada onde ela pode ter 2 possibilidades. Caso nenhuma seja especificada, ela tem 'primary' como default
  @Input() variant: 'primary' | 'secondary' = 'primary'; // 'Union types'
}
