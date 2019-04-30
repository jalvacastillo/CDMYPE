import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AtConsultoresComponent } from './at-consultores.component';

describe('AtConsultoresComponent', () => {
  let component: AtConsultoresComponent;
  let fixture: ComponentFixture<AtConsultoresComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AtConsultoresComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AtConsultoresComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
