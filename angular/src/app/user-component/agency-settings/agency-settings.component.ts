import { Component, OnInit } from '@angular/core';
import { UserService, PasswordValidation } from '../../core';
import { ActivatedRoute, Router } from '@angular/router';
import { FormBuilder, FormGroup, FormControl, Validators, FormArray } from '@angular/forms';
import { Location } from '@angular/common';
@Component({
  selector: 'app-agency-settings',
  templateUrl: './agency-settings.component.html',
  styleUrls: ['./agency-settings.component.css']
})
export class AgencySettingsComponent implements OnInit {
  public isSubmitting = false;
  public form_details: any;
  public submitForm: FormGroup;
  public user_id: any;
  public userData: any;
  constructor(
    private location: Location,
    public userService: UserService,
    public route: ActivatedRoute,
    private fb: FormBuilder,
    public router: Router,

  ) {
    this.submitForm = this.fb.group({
      'old_password': ['', [Validators.required, Validators.minLength(8)]],
      'password': ['', [Validators.required, Validators.minLength(8)]],
      'confirmPassword': ['', Validators.required]
    }, {
        validator: PasswordValidation.MatchPassword // your validation method
      });

  }

  ngOnInit(): void {
    this.userService.page_title = 'Agency Setting';
  }

  submitsForm() {
    this.isSubmitting = true;
    const credentials = this.submitForm.value;
    this.userService
      .changePassword(credentials)
      .subscribe(
        data => {
          this.isSubmitting = false;
          this.userService.alerts.push({
            type: 'success',
            msg: data.message,
            timeout: 4000
          });
        },
        err => {
          this.userService.alerts.push({
            type: 'danger',
            msg: err.message,
            timeout: 4000
          });
          this.isSubmitting = false;
        }
      );
  }
  goToBack() {
    this.location.back();
  }
}
