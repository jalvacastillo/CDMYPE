import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AtEmpresaComponent } from './at-empresa.component';

describe('AtEmpresaComponent', () => {
  let component: AtEmpresaComponent;
  let fixture: ComponentFixture<AtEmpresaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AtEmpresaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AtEmpresaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
