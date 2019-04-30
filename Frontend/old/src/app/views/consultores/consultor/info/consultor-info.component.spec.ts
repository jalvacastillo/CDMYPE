import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ConsultorInfoComponent } from './consultor-info.component';

describe('ConsultorInfoComponent', () => {
  let component: ConsultorInfoComponent;
  let fixture: ComponentFixture<ConsultorInfoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ConsultorInfoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ConsultorInfoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
