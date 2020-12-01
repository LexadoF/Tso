import { ComponentFixture, TestBed } from '@angular/core/testing';

import { GvendedorComponent } from './gvendedor.component';

describe('GvendedorComponent', () => {
  let component: GvendedorComponent;
  let fixture: ComponentFixture<GvendedorComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ GvendedorComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(GvendedorComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
