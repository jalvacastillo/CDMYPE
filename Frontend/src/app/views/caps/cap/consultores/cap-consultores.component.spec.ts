import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CapConsultoresComponent } from './cap-consultores.component';

describe('CapConsultoresComponent', () => {
  let component: CapConsultoresComponent;
  let fixture: ComponentFixture<CapConsultoresComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CapConsultoresComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CapConsultoresComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
