import { TestBed } from '@angular/core/testing';

import { RegistrocService } from './registroc.service';

describe('RegistrocService', () => {
  let service: RegistrocService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(RegistrocService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
