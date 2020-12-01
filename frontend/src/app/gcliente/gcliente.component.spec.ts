import { ComponentFixture, TestBed } from '@angular/core/testing';

import { GclienteComponent } from './gcliente.component';

describe('GclienteComponent', () => {
  let component: GclienteComponent;
  let fixture: ComponentFixture<GclienteComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ GclienteComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(GclienteComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
