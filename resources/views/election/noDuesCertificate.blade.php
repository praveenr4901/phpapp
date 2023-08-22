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
                                 style="font-size: 18px; font-weight: bold; text-align: center; text-decoration: underline">
                                NO DUE CERTIFICATE
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-body">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-xs-12 col-lg-6">
                                <label class="col-xs-3 col-lg-3" style="font-weight: bold">Serial</label>
                                <label class="col-xs-9 col-lg-3" id="lblNSerial">{{ $noduesCertificate->serial ?? '' }}</label>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <label class="col-2" style="text-align: right; font-weight: bold">Date</label>
                                @php
                                    $formattedDate = $noduesCertificate->created_at->format('d-m-Y');
                                @endphp
                                <label class="col-xs-9 col-lg-4" id="lblNDate">{{ $formattedDate ?? '' }}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <label class="col-3" style="font-weight: bold">Club</label>
                                <label class="col-xs-9 col-lg-3" id="lblNClub">{{ $noduesCertificate->member->club->name ?? '' }}</label>
                            </div>
                            <div class="col-sm-6">
                                <label class="col-2" style="text-align: right; font-weight: bold">ClubId</label>
                                <label class="col-xs-9 col-lg-9" id="lblNClubId">{{ $noduesCertificate->member->clubid ?? '' }}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <label class="col-3" style="font-weight: bold; vertical-align: top;">Member</label>
                                <label class="col-xs-9 col-lg-5" id="lblNMember">{{ $noduesCertificate->member->name ?? '' }}</label>
                            </div>
                            <div class="col-sm-6">
                                <label class="col-2" style="text-align: right; font-weight: bold">Mem.Id</label>
                                <label class="col-xs-9 col-lg-9" id="lblNMemberId">{{ $noduesCertificate->member_id ?? '' }}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <label class="col-3" style="font-weight: bold">Mobile</label>
                                <label class="col-xs-9 col-lg-5" id="lblNMobile">{{ $noduesCertificate->member->mobile ?? '' }}</label>
                            </div>
                            <div class="col-sm-6">
                                <label class="col-2" style="text-align: right; font-weight: bold">Email</label>
                                <label class="col-9" id="lblNEmail">{{ $noduesCertificate->member->email ?? '' }}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <label class="col-3" style="font-weight: bold; vertical-align: top;">Address</label>
                                <label class="col-xs-9 col-lg-6" id="lblNAddress">{{ $noduesCertificate->member->address ?? '' }}</label>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-12">
                                <label class="col-3">&nbsp;</label>
                                <label class="col-9" style="text-align: center; font-weight: bold" id="lblNDCT"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-right">
                                <label class="col-4">&nbsp;MJF Lion Suresh Kumar S</label>
                                <label class="col-8" style="font-weight: bold;">District Cabinet Treasurer</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{ route('nodues.certificatePdf', ['memberId' => $noduesCertificate->member_id]) }}" class="btn btn-primary">Print</a>
                </div>
            </div>
        </div>
    </div>