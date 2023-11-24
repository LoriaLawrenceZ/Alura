import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-banner',
  templateUrl: './banner.component.html',
  styleUrls: ['./banner.component.scss']
})
export class BannerComponent {
//@Input() - Sinaliza pro angular que é uma propriedade de entrada, esses valores vão ser recebidos e injetados nesse componente
  @Input() src: string = '';
  @Input() alt: string = '';
}
