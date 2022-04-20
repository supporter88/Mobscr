import {Component, Input, OnDestroy, OnInit} from '@angular/core';
import {of, Subscription} from 'rxjs';
import {UserSubscriptionService} from '../../../../../services/user-subscription.service';
import {NgbActiveModal} from '@ng-bootstrap/ng-bootstrap';
import {catchError, delay, finalize, tap} from 'rxjs/operators';

@Component({
    selector: 'app-cancel-subscription-modal',
    templateUrl: './cancel-subscription-modal.component.html',
    styleUrls: ['./cancel-subscription-modal.component.scss']
})
export class CancelSubscriptionModalComponent implements OnInit, OnDestroy {
    @Input() id: number;
    isLoading = false;
    subscriptions: Subscription[] = [];

    constructor(private userSubscriptionService: UserSubscriptionService, public modal: NgbActiveModal) {
    }

    ngOnInit(): void {
    }

    cancelSubscription() {
        this.isLoading = true;
        const sb = this.userSubscriptionService.deleteSubscription(this.id).pipe(
            delay(1000), // Remove it from your code (just for showing loading)
            tap(() => this.modal.close()),
            catchError((err) => {
                this.modal.dismiss(err);
                return of(undefined);
            }),
            finalize(() => {
                this.isLoading = false;
            })
        ).subscribe();
        this.subscriptions.push(sb);
    }

    ngOnDestroy(): void {
        this.subscriptions.forEach(sb => sb.unsubscribe());
    }

}
