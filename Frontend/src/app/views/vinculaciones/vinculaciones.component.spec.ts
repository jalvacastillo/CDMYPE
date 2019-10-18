import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { VinculacionesComponent } from './vinculaciones.component';

describe('VinculacionesComponent', () => {
  let component: VinculacionesComponent;
  let fixture: ComponentFixture<VinculacionesComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ VinculacionesComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(VinculacionesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
