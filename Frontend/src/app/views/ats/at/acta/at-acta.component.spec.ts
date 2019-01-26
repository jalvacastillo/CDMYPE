import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AtActaComponent } from './at-acta.component';

describe('AtActaComponent', () => {
  let component: AtActaComponent;
  let fixture: ComponentFixture<AtActaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AtActaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AtActaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
