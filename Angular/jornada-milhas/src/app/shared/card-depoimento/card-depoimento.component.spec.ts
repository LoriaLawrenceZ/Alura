import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CardDepoimentoComponent } from './card-depoimento.component';

describe('CardDepoimentoComponent', () => {
  let component: CardDepoimentoComponent;
  let fixture: ComponentFixture<CardDepoimentoComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [CardDepoimentoComponent]
    });
    fixture = TestBed.createComponent(CardDepoimentoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
