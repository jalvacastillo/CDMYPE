import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AtTdrComponent } from './at-tdr.component';

describe('AtTdrComponent', () => {
  let component: AtTdrComponent;
  let fixture: ComponentFixture<AtTdrComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AtTdrComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AtTdrComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
