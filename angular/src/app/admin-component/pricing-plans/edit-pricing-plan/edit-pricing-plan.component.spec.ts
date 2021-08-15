import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EditPricingPlanComponent } from './edit-pricing-plan.component';

describe('EditPricingPlanComponent', () => {
  let component: EditPricingPlanComponent;
  let fixture: ComponentFixture<EditPricingPlanComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EditPricingPlanComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EditPricingPlanComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
