import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SearchProyectsComponent } from './search-proyects.component';

describe('SearchProyectsComponent', () => {
  let component: SearchProyectsComponent;
  let fixture: ComponentFixture<SearchProyectsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SearchProyectsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SearchProyectsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
