<div class="widget widget-card-one">
    <div class="widget-content">

        <div class="media">
            <div class="w-img">
                <img src="{{ asset('storage') }}/{{ $AuthUser->avatar }}" alt="avatar">
            </div>
            <div class="media-body">
                <h6>{{ $AuthUser->name }}</h6>
                <p class="meta-date-time">Desde:  {{ $AuthUser->created_at->format('d/m/Y') }} às {{ $AuthUser->created_at->format('H:m') }}</p>
            </div>
        </div>

        <div class="widget widget-account-invoice-one">
            <div class="widget-content">
                <div class="invoice-box">
                    
                    <div class="widget widget-account-invoice-two" style="margin-left: 4%;margin-right: 4%;margin-bottom: 4%;">
                        <div class="widget-content">
                            <div class="account-box">
                                <div class="info">
                                    <h5 class="">Pro Plan</h5>
                                    <p class="inv-balance">BRL 0,00 </p>
                                </div>
                                <div class="acc-action">
                                    <div class="">
                                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>
                                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                                    </div>
                                    <a href="javascript:void(0);">Upgrade</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>