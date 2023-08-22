<div class="modal fade" id="certificate_modal" tabindex="-1" role="dialog" aria-labelledby="createTicket"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row" style="width: 100%;">
                    <div class="col-2" style="text-align: right;">
                        <img class="" src="{{ asset('assets/images/logo.png')}}" alt="logo.png"
                             style="display: inline-block; object-fit: cover; width: 65px;">
                    </div>
                    <div class="col-8" style="text-align: center;">
                        <div class="col-12" style="font-size: 24px; font-weight: bold">Lions Clubs International
                        </div>
                        <div class="col-12" style="font-size: 20px; font-weight: bold">District 318A 2022-23</div>
                        <div class="col-12"
                             style="font-size: 18px; font-weight: bold; text-align: center;">
                            CREDENTIALS
                        </div>
                        <div class="col-12"
                             style="font-size: 18px; font-weight: bold; text-align: center;">
                            Delegates/Alternate Delegates
                        </div>
                    </div>
                    <div class="col-2" style="text-align: left;">
                        <img class="" src="{{ asset('assets/images/lions_badge_logo.png')}}"
                             alt="lions_badge_logo.png"
                             style="display: inline-block; object-fit: cover; width: 65px">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <div class="row">
                        <div class="col-xs-12 col-lg-6">
                            <label class="col-xs-3 col-lg-3" style="font-weight: bold">Id</label>
                            <label class="col-xs-9 col-lg-3"
                                   id="lblNSerial">{{ $credentialCertificate->member_id ?? '' }}</label>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <label class="col-2" style="text-align: right; font-weight: bold">Date</label>
                            @php
                                $formattedDate = $credentialCertificate->created_at->format('d-m-Y');
                            @endphp
                            <label class="col-xs-9 col-lg-4" id="lblNDate">{{ $formattedDate ?? '' }}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label class="col-3" style="font-weight: bold; vertical-align: top;">Name</label>
                            <label class="col-xs-9 col-lg-5"
                                   id="lblNMember">{{ $credentialCertificate->member->name ?? '' }}</label>
                        </div>
                        <div class="col-sm-6">
                            <label class="col-2" style="text-align: right; font-weight: bold">Serial</label>
                            <label class="col-xs-9 col-lg-9"
                                   id="lblNMemberId">{{ $credentialCertificate->credentials_serial ?? '' }}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label class="col-3" style="font-weight: bold">Mobile</label>
                            <label class="col-xs-9 col-lg-5"
                                   id="lblNMobile">{{ $credentialCertificate->member->mobile ?? '' }}</label>
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="col-3" style="font-weight: bold">Club</label>
                            <label class="col-xs-9 col-lg-5"
                                   id="lblNMobile">{{ $credentialCertificate->member->club->name ?? '' }}</label>
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label class="col-3" style="font-weight: bold; vertical-align: top;">Address</label>
                            <label class="col-xs-9 col-lg-6"
                                   id="lblNAddress">{{ $credentialCertificate->member->address ?? '' }}</label>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-12">
                            <label class="col-3">&nbsp;</label>
                            <label class="col-9" style="text-align: center; font-weight: bold" id="lblNDCT"></label>
                        </div>
                    </div>

                    <div class="row"><label class="col-4 " style="text-align:center" id="lblNDG">PMJF Lion Dr.A.
                            Kannan </label> <label class="col-4 " style="text-align:center" id="lblNDCS">PMJF Lion
                            Thiruchittambalam M</label> <label class="col-4 " style="text-align:center" id="lblNDCT">MJF
                            Lion Suresh Kumar S</label></div>
                    <div class="row"><label class="col-4 " style="font-weight:bold;text-align:center">District
                            Governor</label> <label class="col-4 " style="font-weight:bold;text-align:center">District
                            Cabinet Secretary</label> <label class="col-4 " style="font-weight:bold;text-align:center">District
                            Cabinet Treasurer</label></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ route('getCredentialCertificatepdf', ['memberId' => $credentialCertificate->member_id]) }}"
                   class="btn btn-primary">Print</a>
            </div>
        </div>
    </div>
</div>
