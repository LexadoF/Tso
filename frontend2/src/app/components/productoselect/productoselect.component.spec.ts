import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProductoselectComponent } from './productoselect.component';

describe('ProductoselectComponent', () => {
  let component: ProductoselectComponent;
  let fixture: ComponentFixture<ProductoselectComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ProductoselectComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ProductoselectComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
