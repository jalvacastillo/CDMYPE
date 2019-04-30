import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CapTdrComponent } from './cap-tdr.component';

describe('CapTdrComponent', () => {
  let component: CapTdrComponent;
  let fixture: ComponentFixture<CapTdrComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CapTdrComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CapTdrComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
