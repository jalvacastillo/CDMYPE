import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CoordinacionesComponent } from './coordinaciones.component';

describe('CoordinacionesComponent', () => {
  let component: CoordinacionesComponent;
  let fixture: ComponentFixture<CoordinacionesComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CoordinacionesComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CoordinacionesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
